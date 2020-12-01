<?php

namespace Tests\YooKassa\Model\PaymentMethod;

use YooKassa\Helpers\Random;
use YooKassa\Model\PaymentMethod\PaymentMethodAlfaBank;
use YooKassa\Model\PaymentMethodType;

class PaymentMethodAlfaBankTest extends AbstractPaymentMethodTest
{
    /**
     * @return PaymentMethodAlfaBank
     */
    protected function getTestInstance()
    {
        return new PaymentMethodAlfaBank();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return PaymentMethodType::ALFABANK;
    }

    /**
     * @dataProvider validLoginDataProvider
     * @param $value
     */
    public function testGetSetLogin($value)
    {
        $instance = $this->getTestInstance();

        self::assertNull($instance->getLogin());
        self::assertNull($instance->login);

        $instance->setLogin($value);
        self::assertEquals($value, $instance->getLogin());
        self::assertEquals($value, $instance->login);

        $instance = $this->getTestInstance();
        $instance->login = $value;
        self::assertEquals($value, $instance->getLogin());
        self::assertEquals($value, $instance->login);
    }

    /**
     * @dataProvider invalidLoginDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetInvalidLogin($value)
    {
        $instance = $this->getTestInstance();
        $instance->setLogin($value);
    }

    /**
     * @dataProvider invalidLoginDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetterInvalidLogin($value)
    {
        $instance = $this->getTestInstance();
        $instance->login = $value;
    }

    public function validLoginDataProvider()
    {
        return array(
            array(null),
            array(''),
            array('123'),
            array(Random::str(256)),
            array(Random::str(1024)),
        );
    }

    public function invalidLoginDataProvider()
    {
        return array(
            array(true),
            array(false),
            array(array()),
            array(new \stdClass()),
        );
    }
}