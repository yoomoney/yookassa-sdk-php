<?php

namespace Model\Notification;

use Tests\Model\Notification\AbstractNotificationTest;
use YooKassa\Helpers\Random;
use YooKassa\Model\ConfirmationType;
use YooKassa\Model\CurrencyCode;
use YooKassa\Model\Notification\NotificationSucceeded;
use YooKassa\Model\NotificationEventType;
use YooKassa\Model\NotificationType;
use YooKassa\Model\PaymentInterface;
use YooKassa\Model\PaymentMethodType;
use YooKassa\Model\PaymentStatus;
use YooKassa\Model\ReceiptRegistrationStatus;

class NotificationSucceededTest extends AbstractNotificationTest
{
    /**
     * @param array $source
     * @return NotificationSucceeded
     */
    protected function getTestInstance(array $source)
    {
        return new NotificationSucceeded($source);
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return NotificationType::NOTIFICATION;
    }

    /**
     * @return string
     */
    protected function getExpectedEvent()
    {
        return NotificationEventType::PAYMENT_SUCCEEDED;
    }

    /**
     * @dataProvider validDataProvider
     * @param array $value
     */
    public function testGetObject(array $value)
    {
        $instance = $this->getTestInstance($value);
        self::assertTrue($instance->getObject() instanceof PaymentInterface);
        self::assertEquals($value['object']['id'], $instance->getObject()->getId());
    }

    /**
     * @return array
     * @throws \Exception
     */
    public function validDataProvider()
    {
        $result = array();
        $statuses = PaymentStatus::getValidValues();
        $receiptRegistrations = ReceiptRegistrationStatus::getValidValues();

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

        for ($i = 0; $i < 10; $i++) {
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
                'paid' => $i % 2 ? true : false,
                'refundable' => $i % 2 ? true : false,
                'receipt_registration' => Random::value($receiptRegistrations),
                'metadata' => array(
                    'value' => Random::float(0.01, 1000000.0),
                    'currency' => Random::str(1, 256),
                ),
            );
            $result[] = array(
                array(
                    'type' => $this->getExpectedType(),
                    'event' => $this->getExpectedEvent(),
                    'object' => $payment,
                ),
            );
        }
        return $result;
    }
}