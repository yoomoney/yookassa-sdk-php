<?php

namespace Tests\YooKassa\Model\PaymentData;

use YooKassa\Model\PaymentData\PaymentDataMobileBalance;

abstract class AbstractPaymentDataPhoneTest extends AbstractPaymentDataTest
{
    /**
     * @dataProvider validPhoneDataProvider
     * @param $value
     */
    public function testGetSetPhone($value)
    {
        /** @var PaymentDataMobileBalance $instance */
        $instance = $this->getTestInstance();

        self::assertNull($instance->getPhone());
        self::assertNull($instance->phone);

        $instance->setPhone($value);
        self::assertEquals($value, $instance->getPhone());
        self::assertEquals($value, $instance->phone);

        $instance = $this->getTestInstance();
        $instance->phone = $value;
        self::assertEquals($value, $instance->getPhone());
        self::assertEquals($value, $instance->phone);
    }

    /**
     * @dataProvider invalidPhoneDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetInvalidPhone($value)
    {
        /** @var PaymentDataMobileBalance $instance */
        $instance = $this->getTestInstance();
        $instance->setPhone($value);
    }

    /**
     * @dataProvider invalidPhoneDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetterInvalidPhone($value)
    {
        /** @var PaymentDataMobileBalance $instance */
        $instance = $this->getTestInstance();
        $instance->phone = $value;
    }

    public function validPhoneDataProvider()
    {
        return array(
            array('0123'),
            array('45678'),
            array('901234'),
            array('5678901'),
            array('23456789'),
            array('012345678'),
            array('9012345678'),
            array('90123456789'),
            array('012345678901'),
            array('5678901234567'),
            array('89012345678901'),
            array('234567890123456'),
        );
    }

    public function invalidPhoneDataProvider()
    {
        return array(
            array(null),
            array(''),
            array(true),
            array(false),
            array(array()),
            array(new \stdClass()),
            array('2345678901234567'),
        );
    }
}