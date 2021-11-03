<?php

namespace Tests\YooKassa\Request\Deals;

use PHPUnit\Framework\TestCase;
use YooKassa\Helpers\Random;
use YooKassa\Model\CurrencyCode;
use YooKassa\Model\Deal\DealStatus;
use YooKassa\Model\Deal\DealType;
use YooKassa\Model\Deal\FeeMoment;
use YooKassa\Request\Deals\DealResponse;

abstract class AbstractDealResponseTest extends TestCase
{
    /**
     * @param $options
     * @return DealResponse
     */
    abstract protected function getTestInstance($options);

    /**
     * @dataProvider validDataProvider
     * @param array $options
     */
    public function testGetId($options)
    {
        $instance = $this->getTestInstance($options);
        self::assertEquals($options['id'], $instance->getId());
    }

    /**
     * @dataProvider validDataProvider
     * @param array $options
     */
    public function testGetType($options)
    {
        $instance = $this->getTestInstance($options);
        self::assertEquals($options['type'], $instance->getType());
    }

    /**
     * @dataProvider validDataProvider
     * @param array $options
     */
    public function testGetStatus($options)
    {
        $instance = $this->getTestInstance($options);
        self::assertEquals($options['status'], $instance->getStatus());
    }

    /**
     * @dataProvider validDataProvider
     * @param array $options
     */
    public function testGetDescription($options)
    {
        $instance = $this->getTestInstance($options);
        self::assertEquals($options['description'], $instance->getDescription());
    }

    /**
     * @dataProvider validDataProvider
     * @param array $options
     */
    public function testGetBalance($options)
    {
        $instance = $this->getTestInstance($options);
        self::assertEquals(number_format($options['balance']['value'], 2, '.', ''), $instance->getBalance()->getValue());
        self::assertEquals($options['balance']['currency'], $instance->getBalance()->getCurrency());
    }

    /**
     * @dataProvider validDataProvider
     * @param array $options
     */
    public function testGetPayoutBalance($options)
    {
        $instance = $this->getTestInstance($options);
        if (empty($options['payout_balance'])) {
            self::assertNull($instance->getPayoutBalance());
        } else {
            self::assertEquals(number_format($options['payout_balance']['value'], 2, '.', ''), $instance->getPayoutBalance()->getValue());
            self::assertEquals((string)$options['payout_balance']['currency'], $instance->getPayoutBalance()->getCurrency());
        }
    }

    /**
     * @dataProvider validDataProvider
     * @param array $options
     */
    public function testGetCreatedAt($options)
    {
        $instance = $this->getTestInstance($options);
        if (empty($options['created_at'])) {
            self::assertNull($instance->getCreatedAt());
        } else {
            self::assertEquals($options['created_at'], $instance->getCreatedAt()->format(YOOKASSA_DATE));
        }
    }

    /**
     * @dataProvider validDataProvider
     * @param array $options
     */
    public function testGetExpiresAt($options)
    {
        $instance = $this->getTestInstance($options);
        if (empty($options['expires_at'])) {
            self::assertNull($instance->getExpiresAt());
        } else {
            self::assertEquals($options['expires_at'], $instance->getExpiresAt()->format(YOOKASSA_DATE));
        }
    }

    /**
     * @dataProvider validDataProvider
     * @param array $options
     */
    public function testGetFeeMoment($options)
    {
        $instance = $this->getTestInstance($options);
        self::assertEquals($options['fee_moment'], $instance->getFeeMoment());
    }

    /**
     * @dataProvider validDataProvider
     * @param array $options
     */
    public function testGetTest($options)
    {
        $instance = $this->getTestInstance($options);
        self::assertEquals($options['test'], $instance->getTest());
    }

    /**
     * @dataProvider validDataProvider
     * @param array $options
     */
    public function testGetMetadata($options)
    {
        $instance = $this->getTestInstance($options);
        self::assertEquals($options['metadata'], $instance->getMetadata()->toArray());
    }

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
            $result[] = array($deal);
        }

        $trueFalse = Random::bool();
        $result[] = array(
            array(
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
            )
        );

        return $result;
    }
}
