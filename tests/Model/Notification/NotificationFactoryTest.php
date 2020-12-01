<?php

namespace Model\Notification;

use PHPUnit\Framework\TestCase;
use YooKassa\Helpers\Random;
use YooKassa\Model\ConfirmationType;
use YooKassa\Model\CurrencyCode;
use YooKassa\Model\Notification\AbstractNotification;
use YooKassa\Model\Notification\NotificationFactory;
use YooKassa\Model\NotificationEventType;
use YooKassa\Model\NotificationType;
use YooKassa\Model\PaymentMethodType;
use YooKassa\Model\PaymentStatus;
use YooKassa\Model\ReceiptRegistrationStatus;
use YooKassa\Model\RefundStatus;
use YooKassa\Request\Payments\PaymentResponse;
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
            'created_at'           => date(DATE_ATOM, Random::int(1, time())),
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
            'created_at' => date(DATE_ATOM, Random::int(1, time())),
            'captured_at' => date(DATE_ATOM, Random::int(1, time())),
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
        }
    }

}