<?php


namespace Tests\YooKassa\Model\Notification;

use YooKassa\Helpers\Random;
use YooKassa\Model\CurrencyCode;
use YooKassa\Model\Notification\NotificationRefundSucceeded;
use YooKassa\Model\NotificationEventType;
use YooKassa\Model\NotificationType;
use YooKassa\Model\ReceiptRegistrationStatus;
use YooKassa\Model\RefundInterface;
use YooKassa\Model\RefundStatus;

class NotificationRefundSucceededTest extends AbstractNotificationTest
{

    /**
     * @param array $source
     *
     * @return NotificationRefundSucceeded
     */
    protected function getTestInstance(array $source)
    {
        return new NotificationRefundSucceeded($source);
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
        return NotificationEventType::REFUND_SUCCEEDED;
    }

    /**
     * @dataProvider validDataProvider
     *
     * @param array $value
     */
    public function testGetObject(array $value)
    {
        $instance = $this->getTestInstance($value);
        self::assertTrue($instance->getObject() instanceof RefundInterface);
        self::assertEquals($value['object']['id'], $instance->getObject()->getId());
    }

    /**
     * @return array
     * @throws \Exception
     */
    public function validDataProvider()
    {
        $result               = array();
        $statuses             = RefundStatus::getValidValues();
        $receiptRegistrations = ReceiptRegistrationStatus::getValidValues();

        for ($i = 0; $i < 10; $i++) {
            $refund   = array(
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
            $result[] = array(
                array(
                    'type'   => $this->getExpectedType(),
                    'event'  => $this->getExpectedEvent(),
                    'object' => $refund,
                ),
            );
        }

        return $result;
    }
}
