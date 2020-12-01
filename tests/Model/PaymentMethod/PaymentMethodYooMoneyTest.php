<?php

namespace Tests\YooKassa\Model\PaymentMethod;

use YooKassa\Helpers\Random;
use YooKassa\Model\PaymentMethod\PaymentMethodYooMoney;
use YooKassa\Model\PaymentMethodType;

class PaymentMethodYooMoneyTest extends AbstractPaymentMethodTest
{
    /**
     * @return PaymentMethodYooMoney
     */
    protected function getTestInstance()
    {
        return new PaymentMethodYooMoney();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return PaymentMethodType::YOO_MONEY;
    }

    /**
     * @dataProvider validAccountNumberDataProvider
     * @param $value
     */
    public function testGetSetAccountNumber($value)
    {
        $instance = $this->getTestInstance();

        self::assertNull($instance->getAccountNumber());
        self::assertNull($instance->accountNumber);
        self::assertNull($instance->account_number);

        $instance->setAccountNumber($value);
        self::assertEquals($value, $instance->getAccountNumber());
        self::assertEquals($value, $instance->accountNumber);
        self::assertEquals($value, $instance->account_number);

        $instance = $this->getTestInstance();
        $instance->accountNumber = $value;
        self::assertEquals($value, $instance->getAccountNumber());
        self::assertEquals($value, $instance->accountNumber);
        self::assertEquals($value, $instance->account_number);

        $instance = $this->getTestInstance();
        $instance->account_number = $value;
        self::assertEquals($value, $instance->getAccountNumber());
        self::assertEquals($value, $instance->accountNumber);
        self::assertEquals($value, $instance->account_number);
    }

    /**
     * @dataProvider invalidAccountNumberDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetInvalidAccountNumber($value)
    {
        $instance = $this->getTestInstance();
        $instance->setAccountNumber($value);
    }

    /**
     * @dataProvider invalidAccountNumberDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetterInvalidAccountNumber($value)
    {
        $instance = $this->getTestInstance();
        $instance->accountNumber = $value;
    }

    /**
     * @dataProvider invalidAccountNumberDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetterInvalidAccount_number($value)
    {
        $instance = $this->getTestInstance();
        $instance->account_number = $value;
    }

    public function validAccountNumberDataProvider()
    {
        return array(
            array(Random::str(11, '0123456789')),
            array(Random::str(12, '0123456789')),
            array(Random::str(13, '0123456789')),
            array(Random::str(31, '0123456789')),
            array(Random::str(32, '0123456789')),
            array(Random::str(33, '0123456789')),
        );
    }

    public function invalidAccountNumberDataProvider()
    {
        return array(
            array(null),
            array(''),
            array(true),
            array(false),
            array(array()),
            array(new \stdClass()),
            array(Random::str(10, '0123456789')),
            array(Random::str(34, '0123456789')),
        );
    }
}