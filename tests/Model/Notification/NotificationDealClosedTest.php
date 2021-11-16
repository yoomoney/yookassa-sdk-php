<?php

namespace Tests\YooKassa\Model\Notification;

use YooKassa\Helpers\Random;
use YooKassa\Model\CurrencyCode;
use YooKassa\Model\Deal\DealStatus;
use YooKassa\Model\Deal\DealType;
use YooKassa\Model\Deal\FeeMoment;
use YooKassa\Model\Notification\NotificationDealClosed;
use YooKassa\Model\NotificationEventType;
use YooKassa\Model\NotificationType;
use YooKassa\Model\DealInterface;

class NotificationDealClosedTest extends AbstractNotificationTest
{
    /**
     * @param array $source
     * @return NotificationDealClosed
     * @throws \Exception
     */
    protected function getTestInstance(array $source)
    {
        return new NotificationDealClosed($source);
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
        return NotificationEventType::DEAL_CLOSED;
    }

    /**
     * @dataProvider validDataProvider
     * @param array $value
     */
    public function testGetObject(array $value)
    {
        $instance = $this->getTestInstance($value);
        self::assertTrue($instance->getObject() instanceof DealInterface);
        self::assertEquals($value['object']['id'], $instance->getObject()->getId());
    }

    /**
     * @return array
     * @throws \Exception
     */
    public function validDataProvider()
    {
        $result = array();
        $statuses = DealStatus::getValidValues();
        $types = DealType::getValidValues();

        for ($i = 0; $i < 10; $i++) {
            $deal = array(
                'id' => Random::str(36),
                'type' => Random::value($types),
                'status' => Random::value($statuses),
                'description' => Random::str(128),
                'balance' => array(
                    'value' => Random::float(0.01, 1000000.0),
                    'currency' => Random::value(CurrencyCode::getEnabledValues()),
                ),
                'payout_balance' => array(
                    'value' => Random::float(0.01, 1000000.0),
                    'currency' => Random::value(CurrencyCode::getValidValues()),
                ),
                'created_at' => date(YOOKASSA_DATE, Random::int(1, time())),
                'expires_at' => date(YOOKASSA_DATE, Random::int(1, time())),
                'fee_moment' => Random::value(FeeMoment::getEnabledValues()),
                'test' => (bool)($i % 2),
                'metadata' => array(
                    'value' => Random::float(0.01, 1000000.0),
                    'currency' => Random::str(1, 256),
                ),
            );
            $result[] = array(
                array(
                    'type' => $this->getExpectedType(),
                    'event' => $this->getExpectedEvent(),
                    'object' => $deal,
                ),
            );
        }

        $trueFalse = Random::bool();
        $result[] = array(
            array(
                'type' => $this->getExpectedType(),
                'event' => $this->getExpectedEvent(),
                    'object' => array(
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
                ),
            ),
        );

        return $result;
    }

}