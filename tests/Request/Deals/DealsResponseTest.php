<?php

namespace Tests\YooKassa\Request\Deals;

use PHPUnit\Framework\TestCase;
use YooKassa\Helpers\Random;
use YooKassa\Model\CurrencyCode;
use YooKassa\Model\Deal\DealType;
use YooKassa\Model\Deal\FeeMoment;
use YooKassa\Model\DealInterface;
use YooKassa\Model\Deal\DealStatus;
use YooKassa\Request\Deals\DealsResponse;

class DealsResponseTest extends TestCase
{
    /**
     * @dataProvider validDataProvider
     * @param array $options
     */
    public function testGetItems($options)
    {
        $instance = new DealsResponse($options);
        self::assertEquals(count($options['items']), count($instance->getItems()));
        foreach ($instance->getItems() as $index => $item) {
            self::assertTrue($item instanceof DealInterface);
            self::assertArrayHasKey($index, $options['items']);
            self::assertEquals($options['items'][$index]['id'], $item->getId());
            self::assertEquals($options['items'][$index]['type'], $item->getType());
            self::assertEquals($options['items'][$index]['status'], $item->getStatus());
            self::assertEquals($options['items'][$index]['fee_moment'], $item->getFeeMoment());
            self::assertEquals($options['items'][$index]['balance']['value'], $item->getBalance()->getValue());
            self::assertEquals($options['items'][$index]['balance']['currency'], $item->getBalance()->getCurrency());
            self::assertEquals($options['items'][$index]['payout_balance']['value'], $item->getPayoutBalance()->getValue());
            self::assertEquals($options['items'][$index]['payout_balance']['currency'], $item->getPayoutBalance()->getCurrency());
            self::assertEquals($options['items'][$index]['created_at'], $item->getCreatedAt()->format(YOOKASSA_DATE));
            self::assertEquals($options['items'][$index]['expires_at'], $item->getExpiresAt()->format(YOOKASSA_DATE));
            self::assertEquals($options['items'][$index]['test'], $item->getTest());
            self::assertEquals($options['items'][$index]['description'], $item->getDescription());
        }
    }

    /**
     * @dataProvider validDataProvider
     * @param array $options
     */
    public function testGetNextCursor($options)
    {
        $instance = new DealsResponse($options);
        if (empty($options['next_cursor'])) {
            self::assertNull($instance->getNextCursor());
        } else {
            self::assertEquals($options['next_cursor'], $instance->getNextCursor());
        }
    }

    /**
     * @dataProvider validDataProvider
     * @param array $options
     */
    public function testHasNext($options)
    {
        $instance = new DealsResponse($options);
        if (empty($options['next_cursor'])) {
            self::assertFalse($instance->hasNextCursor());
        } else {
            self::assertTrue($instance->hasNextCursor());
        }
    }

    /**
     * @dataProvider invalidDataProvider
     * @param array $options
     * @expectedException \InvalidArgumentException
     */
    public function testInvalidData($options)
    {
        new DealsResponse($options);
    }

    public function validDataProvider()
    {
        $statuses = DealStatus::getValidValues();
        $types = DealType::getValidValues();

        return array(
            array(
                array(
                    'items' => array(),
                ),
            ),
            array(
                array(
                    'items' => array(
                        array(
                            'id' => Random::str(36),
                            'type' => Random::value($types),
                            'status' => Random::value($statuses),
                            'description' => Random::str(128),
                            'balance' => array(
                                'value' => number_format(Random::float(0.01, 1000000.0), 2, '.', ''),
                                'currency' => Random::value(CurrencyCode::getValidValues()),
                            ),
                            'payout_balance' => array(
                                'value' => number_format(Random::float(0.01, 1000000.0), 2, '.', ''),
                                'currency' => Random::value(CurrencyCode::getValidValues()),
                            ),
                            'created_at' => date(YOOKASSA_DATE, Random::int(1, time())),
                            'expires_at' => date(YOOKASSA_DATE, Random::int(1, time())),
                            'fee_moment' => Random::value(FeeMoment::getEnabledValues()),
                            'test' => Random::bool(),
                            'metadata' => array(),
                        ),
                    ),
                    'next_cursor' => uniqid(),
                ),
            ),
            array(
                array(
                    'items' => array(
                        array(
                            'id' => Random::str(36),
                            'type' => Random::value($types),
                            'status' => Random::value($statuses),
                            'description' => Random::str(128),
                            'balance' => array(
                                'value' => number_format(Random::float(0.01, 1000000.0), 2, '.', ''),
                                'currency' => Random::value(CurrencyCode::getValidValues()),
                            ),
                            'payout_balance' => array(
                                'value' => number_format(Random::float(0.01, 1000000.0), 2, '.', ''),
                                'currency' => Random::value(CurrencyCode::getValidValues()),
                            ),
                            'created_at' => date(YOOKASSA_DATE, Random::int(1, time())),
                            'expires_at' => date(YOOKASSA_DATE, Random::int(1, time())),
                            'fee_moment' => Random::value(FeeMoment::getEnabledValues()),
                            'test' => Random::bool(),
                            'metadata' => array(),
                        ),
                        array(
                            'id' => Random::str(36),
                            'type' => Random::value($types),
                            'status' => Random::value($statuses),
                            'description' => Random::str(128),
                            'balance' => array(
                                'value' => number_format(Random::float(0.01, 1000000.0), 2, '.', ''),
                                'currency' => Random::value(CurrencyCode::getValidValues()),
                            ),
                            'payout_balance' => array(
                                'value' => number_format(Random::float(0.01, 1000000.0), 2, '.', ''),
                                'currency' => Random::value(CurrencyCode::getValidValues()),
                            ),
                            'created_at' => date(YOOKASSA_DATE, Random::int(1, time())),
                            'expires_at' => date(YOOKASSA_DATE, Random::int(1, time())),
                            'fee_moment' => Random::value(FeeMoment::getEnabledValues()),
                            'test' => Random::bool(),
                            'metadata' => array(),
                        ),
                    ),
                    'next_cursor' => uniqid(),
                ),
            ),
            array(
                array(
                    'items' => array(
                        array(
                            'id' => Random::str(36),
                            'type' => Random::value($types),
                            'status' => Random::value($statuses),
                            'description' => Random::str(128),
                            'balance' => array(
                                'value' => number_format(Random::float(0.01, 1000000.0), 2, '.', ''),
                                'currency' => Random::value(CurrencyCode::getValidValues()),
                            ),
                            'payout_balance' => array(
                                'value' => number_format(Random::float(0.01, 1000000.0), 2, '.', ''),
                                'currency' => Random::value(CurrencyCode::getValidValues()),
                            ),
                            'created_at' => date(YOOKASSA_DATE, Random::int(1, time())),
                            'expires_at' => date(YOOKASSA_DATE, Random::int(1, time())),
                            'fee_moment' => Random::value(FeeMoment::getEnabledValues()),
                            'test' => Random::bool(),
                            'metadata' => array(),
                        ),
                        array(
                            'id' => Random::str(36),
                            'type' => Random::value($types),
                            'status' => Random::value($statuses),
                            'description' => Random::str(128),
                            'balance' => array(
                                'value' => number_format(Random::float(0.01, 1000000.0), 2, '.', ''),
                                'currency' => Random::value(CurrencyCode::getValidValues()),
                            ),
                            'payout_balance' => array(
                                'value' => number_format(Random::float(0.01, 1000000.0), 2, '.', ''),
                                'currency' => Random::value(CurrencyCode::getValidValues()),
                            ),
                            'created_at' => date(YOOKASSA_DATE, Random::int(1, time())),
                            'expires_at' => date(YOOKASSA_DATE, Random::int(1, time())),
                            'fee_moment' => Random::value(FeeMoment::getEnabledValues()),
                            'test' => Random::bool(),
                            'metadata' => array(),
                        ),
                        array(
                            'id' => Random::str(36),
                            'type' => Random::value($types),
                            'status' => Random::value($statuses),
                            'description' => Random::str(128),
                            'balance' => array(
                                'value' => number_format(Random::float(0.01, 1000000.0), 2, '.', ''),
                                'currency' => Random::value(CurrencyCode::getValidValues()),
                            ),
                            'payout_balance' => array(
                                'value' => number_format(Random::float(0.01, 1000000.0), 2, '.', ''),
                                'currency' => Random::value(CurrencyCode::getValidValues()),
                            ),
                            'created_at' => date(YOOKASSA_DATE, Random::int(1, time())),
                            'expires_at' => date(YOOKASSA_DATE, Random::int(1, time())),
                            'fee_moment' => Random::value(FeeMoment::getEnabledValues()),
                            'test' => Random::bool(),
                            'metadata' => array(),
                        ),
                    ),
                    'next_cursor' => uniqid(),
                ),
            ),
        );
    }

    public function invalidDataProvider()
    {
        return array(
            array(
                array(
                    'next_cursor' => uniqid(),
                    'items' => array(
                        array(
                            'id' => null,
                            'type' => null,
                            'status' => null,
                            'description' => array(),
                            'balance' => null,
                            'payout_balance' => null,
                            'created_at' => array(),
                            'expires_at' => array(),
                            'fee_moment' => Random::bool(),
                            'test' => null,
                            'metadata' => 'test',
                        ),
                    ),
                ),
            ),
        );
    }
}