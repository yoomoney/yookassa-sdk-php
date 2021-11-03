<?php

namespace Tests\YooKassa\Request\Receipts;

use YooKassa\Common\Exceptions\EmptyPropertyValueException;
use YooKassa\Helpers\ProductCode;
use YooKassa\Helpers\Random;
use YooKassa\Model\Airline;
use YooKassa\Model\AmountInterface;
use YooKassa\Model\CurrencyCode;
use YooKassa\Model\MonetaryAmount;
use YooKassa\Model\Receipt\PaymentMode;
use YooKassa\Model\Receipt\PaymentSubject;
use YooKassa\Model\Supplier;
use YooKassa\Model\SupplierInterface;
use YooKassa\Request\Receipts\ReceiptResponseItem;
use PHPUnit\Framework\TestCase;

class ReceiptResponseItemTest extends TestCase
{
    /**
     * @dataProvider validDataProvider
     * @param array $options
     */
    public function testGetDescription($options)
    {
        $instance = new ReceiptResponseItem($options);
        self::assertEquals($options['description'], $instance->getDescription());
    }

    /**
     * @dataProvider validDataProvider
     * @param array $options
     */
    public function testGetAmount($options)
    {
        $instance = new ReceiptResponseItem($options);
        self::assertNotNull($instance->getAmount());
    }

    /**
     * @dataProvider validDataProvider
     * @param array $options
     */
    public function testGetSetVatCode($options)
    {
        $instance = new ReceiptResponseItem($options);
        $instance->setVatCode(null);
        self::assertNull($instance->getVatCode());

        $instance->setVatCode($options['vat_code']);
        self::assertNotNull($instance->getVatCode());
        self::assertEquals($options['vat_code'], $instance->getVatCode());
    }

    /**
     * @dataProvider validDataProvider
     * @param array $options
     */
    public function testGetSupplier($options)
    {
        $instance = new ReceiptResponseItem($options);

        if (empty($options['supplier'])) {
            self::assertNull($instance->getSupplier());
        } else {
            self::assertNotNull($instance->getSupplier());
            if (!is_object($instance->getSupplier())) {
                self::assertEquals($options['supplier'], $instance->getSupplier()->jsonSerialize());
            } else {
                self::assertTrue($instance->getSupplier() instanceof SupplierInterface);
            }
            self::assertEquals($options['supplier']['name'], $instance->getSupplier()->getName());
            self::assertEquals($options['supplier']['phone'], $instance->getSupplier()->getPhone());
            self::assertEquals($options['supplier']['inn'], $instance->getSupplier()->getInn());
        }
    }

    /**
     * @dataProvider validDataProvider
     * @param array $options
     */
    public function testGetPrice($options)
    {
        $instance = new ReceiptResponseItem($options);

        if (empty($options['amount'])) {
            self::assertNull($instance->getPrice());
        } else {
            self::assertNotNull($instance->getPrice());
            if (!is_object($instance->getPrice())) {
                self::assertEquals($options['amount'], $instance->getPrice()->jsonSerialize());
            } else {
                self::assertTrue($instance->getPrice() instanceof AmountInterface);
            }
            self::assertEquals($options['amount']['value'], $instance->getPrice()->getValue());
            self::assertEquals($options['amount']['currency'], $instance->getPrice()->getCurrency());
        }
    }

    /**
     * @dataProvider validDataProvider
     * @param array $options
     */
    public function testGetQuantity($options)
    {
        $instance = new ReceiptResponseItem($options);
        self::assertNotNull($instance->getQuantity());
        self::assertEquals($options['quantity'], $instance->getQuantity());
    }

    /**
     * @dataProvider validDataProvider
     * @param array $options
     */
    public function testGetPaymentMode($options)
    {
        $instance = new ReceiptResponseItem($options);
        self::assertEquals($options['payment_mode'], $instance->getPaymentMode());
    }

    /**
     * @dataProvider validDataProvider
     * @param array $options
     */
    public function testGetPaymentSubject($options)
    {
        $instance = new ReceiptResponseItem($options);
        self::assertEquals($options['payment_subject'], $instance->getPaymentSubject());
    }

    public function testSetPaymentSubjectData()
    {
        $instance = new ReceiptResponseItem();
        $instance->setPaymentSubject(null);
        self::assertNull($instance->getPaymentSubject());
    }

    public function testSetPaymentModeData()
    {
        $instance = new ReceiptResponseItem();
        $instance->setPaymentMode(null);
        self::assertNull($instance->getPaymentMode());
    }

    /**
     * @dataProvider invalidDescriptionDataProvider
     * @param $options
     * @expectedException \InvalidArgumentException
     * @expectedException EmptyPropertyValueException
     */
    public function testSetDescriptionInvalidData($options)
    {
        $instance = new ReceiptResponseItem();
        $instance->setDescription($options);
    }

    /**
     * @dataProvider invalidQuantityDataProvider
     * @param $options
     * @expectedException \InvalidArgumentException
     * @expectedException EmptyPropertyValueException
     */
    public function testSetQuantityInvalidData($options)
    {
        $instance = new ReceiptResponseItem();
        $instance->setQuantity($options);
    }

    /**
     * @dataProvider invalidVatCodeDataProvider
     * @param $options
     * @expectedException \InvalidArgumentException
     * @expectedException EmptyPropertyValueException
     */
    public function testSetVatCodeInvalidData($options)
    {
        $instance = new ReceiptResponseItem();
        $instance->setVatCode($options);
    }

    /**
     * @dataProvider invalidPaymentDataProvider
     * @param $options
     * @expectedException \InvalidArgumentException
     * @expectedException EmptyPropertyValueException
     */
    public function testSetPaymentSubjectInvalidData($options)
    {
        $instance = new ReceiptResponseItem();
        $instance->setPaymentSubject($options);
    }

    /**
     * @dataProvider invalidPaymentDataProvider
     * @param $options
     * @expectedException \InvalidArgumentException
     * @expectedException EmptyPropertyValueException
     */
    public function testSetPaymentModeInvalidData($options)
    {
        $instance = new ReceiptResponseItem();
        $instance->setPaymentMode($options);
    }

    /**
     * @dataProvider invalidSupplierDataProvider
     * @param $options
     * @expectedException \InvalidArgumentException
     * @expectedException EmptyPropertyValueException
     */
    public function testSetSupplierInvalidData($options)
    {
        $instance = new ReceiptResponseItem();
        $instance->setSupplier($options);
    }

    public function validDataProvider()
    {
        $result = array(
            array(
                array(
                    'description' => Random::str(128),
                    'quantity' => Random::float(0.0001, 99.99),
                    'amount' => new MonetaryAmount(Random::int(1, 1000)),
                    'vat_code' => Random::int(1,6),
                    'payment_mode' => null,
                    'payment_subject' => null,
                    'supplier' => new Supplier(array(
                        'name' => Random::str(128),
                        'phone' => Random::str(4, 12, '1234567890'),
                        'inn' => '1000000000'
                    ))
                )
            )
        );

        for ($i = 0; $i < 9; $i++) {
            $test = array(
                array(
                    'description' => Random::str(128),
                    'quantity' => Random::float(0.0001, 99.99),
                    'amount' => array(
                        'value' => round(Random::float(0.1, 99.99), 2),
                        'currency' => Random::value(CurrencyCode::getValidValues())
                    ),
                    'vat_code' => Random::int(1,6),
                    'payment_mode' => Random::value(PaymentMode::getValidValues()),
                    'payment_subject' => Random::value(PaymentSubject::getValidValues()),
                    'supplier' => array(
                        'name' => Random::str(128),
                        'phone' => Random::str(4, 12, '1234567890'),
                        'inn' => '1000000000'
                    )
                )
            );
            $result[] = $test;
        }
        return $result;
    }

    public function invalidDescriptionDataProvider()
    {
        return array(
            array(''),
            array(new Airline()),
            array(new ProductCode())
        );
    }

    public function invalidQuantityDataProvider()
    {
        return array(
            array(null),
            array('test'),
            array(0.0)
        );
    }

    public function invalidVatCodeDataProvider()
    {
        return array(
            array('test'),
            array(0.0)
        );
    }

    public function invalidPaymentDataProvider()
    {
        return array(
            array(new Airline())
        );
    }

    public function invalidSupplierDataProvider()
    {
        return array(
            array(null),
            array(new Airline())
        );
    }
}
