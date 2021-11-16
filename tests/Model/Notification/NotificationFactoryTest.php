<?php

namespace Tests\YooKassa\Model\Notification;

use PHPUnit\Framework\TestCase;
use YooKassa\Helpers\Random;
use YooKassa\Model\ConfirmationType;
use YooKassa\Model\CurrencyCode;
use YooKassa\Model\Deal\DealStatus;
use YooKassa\Model\Deal\DealType;
use YooKassa\Model\Deal\FeeMoment;
use YooKassa\Model\Notification\AbstractNotification;
use YooKassa\Model\Notification\NotificationFactory;
use YooKassa\Model\NotificationEventType;
use YooKassa\Model\NotificationType;
use YooKassa\Model\PaymentMethodType;
use YooKassa\Model\PaymentStatus;
use YooKassa\Model\Payout;
use YooKassa\Model\Payout\PayoutCancellationDetailsPartyCode;
use YooKassa\Model\Payout\PayoutCancellationDetailsReasonCode;
use YooKassa\Model\PayoutStatus;
use YooKassa\Model\ReceiptRegistrationStatus;
use YooKassa\Model\RefundStatus;
use YooKassa\Request\Deals\DealResponse;
use YooKassa\Request\Payments\PaymentResponse;
use YooKassa\Request\Payouts\PayoutResponse;
use YooKassa\Request\Refunds\RefundResponse;

class NotificationFactoryTest extends TestCase
{
    /**
     * @return NotificationFactory
     */
    protected function getTestInstance()
    {
        return new NotificationFactory();
    }

    /**
     * @dataProvider invalidDataArrayDataProvider
     * @expectedException \InvalidArgumentException
     * @param $options
     */
    public function testInvalidFactory($options)
    {
        $instance = $this->getTestInstance();
        $instance->factory($options);
    }

    /**
     * @dataProvider validArrayDataProvider
     * @param array $options
     */
    public function testFactory($options)
    {
        $instance = $this->getTestInstance();
        $event = $options['event'];
        $notification = $instance->factory($options);
        self::assertNotNull($notification);
        self::assertTrue($notification instanceof AbstractNotification);

        self::assertEquals($event, $notification->getEvent());
        foreach ($options as $property => $value) {
            if ($property !== 'object') {
                self::assertEquals($notification->{$property}, $value);
            } else {
                $this->assertObject($event, $notification->{$property}, $value);
            }
        }
    }

    /**
     * @return array
     * @throws \Exception
     */
    public function validArrayDataProvider()
    {
        $result = array();

        for ($i = 0; $i < 12; $i++) {
            $eventType = Random::value(NotificationEventType::getEnabledValues());
            switch($eventType) {
                case NotificationEventType::REFUND_SUCCEEDED:
                    $notification = $this->getRefundNotification();
                    break;
                case NotificationEventType::DEAL_CLOSED:
                    $notification = $this->getDealNotification();
                    break;
                case NotificationEventType::PAYOUT_SUCCEEDED:
                case NotificationEventType::PAYOUT_CANCELED:
                    $notification = $this->getPayoutNotification($eventType);
                    break;
                default:
                    $notification = $this->getPaymentNotification($eventType);
            }

            $result[] = $notification;
        }

        return $result;
    }

    public function invalidDataArrayDataProvider()
    {
        return array(
            array(array()),
            array(array('type' => 'test')),
            array(array('event' => 'test')),
            array(array('event' => new \stdClass())),
        );
    }

    private function getRefundNotification()
    {
        $statuses             = RefundStatus::getValidValues();
        $receiptRegistrations = ReceiptRegistrationStatus::getValidValues();

        $refund = array(
            'id'                   => Random::str(36),
            'payment_id'           => Random::str(36),
            'status'               => Random::value($statuses),
            'amount'               => array(
                'value'    => Random::float(0.01, 1000000.0),
                'currency' => Random::value(CurrencyCode::getValidValues()),
            ),
            'created_at'           => date(YOOKASSA_DATE, Random::int(1, time())),
            'receipt_registration' => Random::value($receiptRegistrations),
            'description'          => Random::str(1, 128),
        );

        return array(
            array(
                'type'   => $this->getExpectedType(),
                'event'  => NotificationEventType::REFUND_SUCCEEDED,
                'object' => $refund,
            ),
        );
    }

    private function getPaymentNotification($type)
    {
        $statuses = PaymentStatus::getValidValues();
        $receiptRegistrations = ReceiptRegistrationStatus::getValidValues();

        $trueFalse = Random::bool();
        $confirmations = array(
            array(
                'type' => ConfirmationType::REDIRECT,
                'confirmation_url' => Random::str(10),
                'return_url' => Random::str(10),
                'enforce' => false,
            ),
            array(
                'type' => ConfirmationType::EXTERNAL,
            ),
        );

        $payment = array(
            'id' => Random::str(36),
            'status' => Random::value($statuses),
            'recipient' => array(
                'account_id' => Random::str(1, 64, '0123456789'),
                'gateway_id' => Random::str(1, 256),
            ),
            'amount' => array(
                'value' => Random::float(0.01, 1000000.0),
                'currency' => Random::value(CurrencyCode::getValidValues()),
            ),
            'payment_method' => array(
                'type' => PaymentMethodType::QIWI,
            ),
            'created_at' => date(YOOKASSA_DATE, Random::int(1, time())),
            'captured_at' => date(YOOKASSA_DATE, Random::int(1, time())),
            'confirmation' => Random::value($confirmations),
            'refunded' => array(
                'value' => Random::float(0.01, 1000000.0),
                'currency' => Random::value(CurrencyCode::getValidValues()),
            ),
            'paid' => $trueFalse,
            'refundable' => $trueFalse,
            'receipt_registration' => Random::value($receiptRegistrations),
            'metadata' => array(
                'value' => Random::float(0.01, 1000000.0),
                'currency' => Random::str(1, 256),
            ),
        );

        return array(
            array(
                'type' => $this->getExpectedType(),
                'event' => $type,
                'object' => $payment,
            ),
        );
    }

    private function getPayoutNotification($type)
    {
        $cancellationDetailsParties = PayoutCancellationDetailsPartyCode::getValidValues();
        $cancellationDetailsReasons = PayoutCancellationDetailsReasonCode::getValidValues();
        $payoutDestinations = array(
            PaymentMethodType::YOO_MONEY => array(
                'type' => PaymentMethodType::YOO_MONEY,
                'account_number' => Random::str(11, 33, '1234567890')
            ),
            PaymentMethodType::BANK_CARD => array(
                'type' => PaymentMethodType::BANK_CARD,
                'card' => array(
                    'number' => Random::str(16, 18, '1234567890')
                )
            ),
        );

        $payout = array(
            'id' => Random::str(36, 50),
            'status' => Random::value(PayoutStatus::getValidValues()),
            'amount' => array('value' => Random::int(1, 10000), 'currency' => 'RUB'),
            'description' => Random::str(1, Payout::MAX_LENGTH_DESCRIPTION),
            'payout_destination' => $payoutDestinations[Random::value(array(PaymentMethodType::YOO_MONEY,PaymentMethodType::BANK_CARD))],
            'created_at' => date(YOOKASSA_DATE, mt_rand(111111111, time())),
            'test' => true,
            'deal' => array('id' => Random::str(36, 50)),
            'metadata' => array('order_id' => '37'),
            'cancellation_details' => array(
                'party' => Random::value($cancellationDetailsParties),
                'reason' => Random::value($cancellationDetailsReasons)
            ),
        );

        return array(
            array(
                'type' => $this->getExpectedType(),
                'event' => $type,
                'object' => $payout,
            ),
        );
    }

    private function getDealNotification()
    {
        $statuses = DealStatus::getValidValues();
        $types = DealType::getValidValues();

        $trueFalse = Random::bool();
        $deal = array(
            'id' => Random::str(36),
            'type' => Random::value($types),
            'status' => Random::value($statuses),
            'description' => Random::str(128),
            'balance' => array(
                'value' => Random::float(0.01, 1000000.0),
                'currency' => Random::value(CurrencyCode::getValidValues()),
            ),
            'payout_balance' => array(
                'value' => Random::float(0.01, 1000000.0),
                'currency' => Random::value(CurrencyCode::getValidValues()),
            ),
            'created_at' => date(YOOKASSA_DATE, Random::int(1, time())),
            'expires_at' => date(YOOKASSA_DATE, Random::int(1, time())),
            'fee_moment' => Random::value(FeeMoment::getEnabledValues()),
            'test' => $trueFalse,
            'metadata' => array(),
        );

        return array(
            array(
                'type' => $this->getExpectedType(),
                'event' => NotificationEventType::DEAL_CLOSED,
                'object' => $deal,
            ),
        );
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return NotificationType::NOTIFICATION;
    }

    /**
     * @return mixed
     * @throws \Exception
     */
    protected function getExpectedEvent()
    {
        return Random::value(NotificationEventType::getEnabledValues());
    }

    /**
     * @throws \Exception
     */
    private function assertObject($event, $object, $value)
    {
        self::assertNotNull($object);
        switch ($event) {
            case NotificationEventType::REFUND_SUCCEEDED:
                self::assertTrue($object instanceof RefundResponse);
                self::assertEquals($object, new RefundResponse($value));
                break;
            case NotificationEventType::PAYMENT_SUCCEEDED:
            case NotificationEventType::PAYMENT_WAITING_FOR_CAPTURE:
            case NotificationEventType::PAYMENT_CANCELED:
                self::assertTrue($object instanceof PaymentResponse);
                self::assertEquals($object, new PaymentResponse($value));
                break;
            case NotificationEventType::PAYOUT_SUCCEEDED:
            case NotificationEventType::PAYOUT_CANCELED:
                self::assertTrue($object instanceof PayoutResponse);
                self::assertEquals($object, new PayoutResponse($value));
                break;
            case NotificationEventType::DEAL_CLOSED:
                self::assertTrue($object instanceof DealResponse);
                self::assertEquals($object, new DealResponse($value));
                break;
        }
    }

}