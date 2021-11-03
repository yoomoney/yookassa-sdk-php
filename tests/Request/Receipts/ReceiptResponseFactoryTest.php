<?php

namespace Tests\YooKassa\Request\Receipts;

use YooKassa\Model\Receipt\SettlementType;
use YooKassa\Model\ReceiptType;
use YooKassa\Request\Receipts\ReceiptResponseFactory;
use PHPUnit\Framework\TestCase;

class ReceiptResponseFactoryTest extends TestCase
{

    /**
     * @dataProvider invalidFactoryDataProvider
     * @param array $value
     * @expectedException \InvalidArgumentException
     */
    public function testInvalidFactory($value)
    {
        $instance = new ReceiptResponseFactory();
        $instance->factory($value);
    }

    public function invalidFactoryDataProvider()
    {
        return array(
            array(array()),
            array(
                array('type' => new \stdClass())),
            array(
                array('type' => SettlementType::POSTPAYMENT)),
            array(
                array(
                    'type' => ReceiptType::PAYMENT,
                    'refund_id' => 1
                )
            ),
            array(
                array(
                    'type' => ReceiptType::PAYMENT,
                    'payment_id' => 1
                )
            ),
            array(
                array(
                    'type' => ReceiptType::REFUND
                )
            )
        );
    }
}
