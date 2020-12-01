<?php

namespace Tests\YooKassa\Request\Refunds;

use PHPUnit\Framework\TestCase;
use YooKassa\Helpers\Random;
use YooKassa\Model\CurrencyCode;
use YooKassa\Model\ReceiptRegistrationStatus;
use YooKassa\Model\RefundInterface;
use YooKassa\Model\RefundStatus;
use YooKassa\Request\Refunds\RefundsResponse;

class RefundsResponseTest extends TestCase
{
    /**
     * @dataProvider validDataProvider
     * @param array $options
     */
    public function testGetItems($options)
    {
        $instance = new RefundsResponse($options);
        self::assertEquals(count($options['items']), count($instance->getItems()));
        foreach ($instance->getItems() as $index => $item) {
            self::assertTrue($item instanceof RefundInterface);
            self::assertArrayHasKey($index, $options['items']);
            self::assertEquals($options['items'][$index]['id'], $item->getId());
            self::assertEquals($options['items'][$index]['payment_id'], $item->getPaymentId());
            self::assertEquals($options['items'][$index]['status'], $item->getStatus());
            self::assertEquals($options['items'][$index]['amount']['value'], $item->getAmount()->getValue());
            self::assertEquals($options['items'][$index]['amount']['currency'], $item->getAmount()->getCurrency());
            self::assertEquals($options['items'][$index]['created_at'], $item->getCreatedAt()->format(DATE_ATOM));
        }
    }

    /**
     * @dataProvider validDataProvider
     * @param array $options
     */
    public function testGetNextCursor($options)
    {
        $instance = new RefundsResponse($options);
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
    public function testHasNextCursor($options)
    {
        $instance = new RefundsResponse($options);
        if (empty($options['next_cursor'])) {
            self::assertFalse($instance->hasNextCursor());
        } else {
            self::assertTrue($instance->hasNextCursor());
        }
    }

    public function validDataProvider()
    {
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
                            'payment_id' => Random::str(36),
                            'status' => RefundStatus::SUCCEEDED,
                            'amount' => array(
                                'value' => Random::int(1, 100),
                                'currency' => Random::value(CurrencyCode::getValidValues()),
                            ),
                            'created_at' => date(DATE_ATOM, Random::int(0, time())),
                        )
                    ),
                    'next_cursor' => Random::str(1, 64),
                ),
            ),
            array(
                array(
                    'items' => array(
                        array(
                            'id' => Random::str(36),
                            'payment_id' => Random::str(36),
                            'status' => RefundStatus::SUCCEEDED,
                            'amount' => array(
                                'value' => Random::int(1, 100),
                                'currency' => Random::value(CurrencyCode::getValidValues()),
                            ),
                            'created_at' => date(DATE_ATOM),
                        ),
                        array(
                            'id' => Random::str(36),
                            'payment_id' => Random::str(36),
                            'status' => RefundStatus::SUCCEEDED,
                            'amount' => array(
                                'value' => Random::int(1, 100),
                                'currency' => Random::value(CurrencyCode::getValidValues()),
                            ),
                            'created_at' => date(DATE_ATOM, Random::int(0, time())),
                            'authorized_at' => date(DATE_ATOM, Random::int(0, time())),
                            'receipt_registered' => Random::value(ReceiptRegistrationStatus::getValidValues()),
                            'description' => Random::str(64, 250),
                        ),
                    ),
                    'next_cursor' => Random::str(1, 64),
                ),
            ),
        );
    }
}