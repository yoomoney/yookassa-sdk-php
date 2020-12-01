<?php

namespace Tests\YooKassa\Model;

use PHPUnit\Framework\TestCase;
use YooKassa\Helpers\Random;
use YooKassa\Helpers\StringObject;
use YooKassa\Model\Recipient;

class RecipientTest extends TestCase
{
    /**
     * @dataProvider validDataProvider
     *
     * @param $value
     */
    public function testGetSetAccountId($value)
    {
        $instance = new Recipient();

        self::assertEquals(null, $instance->getAccountId());
        self::assertEquals(null, $instance->accountId);
        self::assertEquals(null, $instance->account_id);
        $instance->setAccountId($value);
        self::assertEquals((string)$value, $instance->getAccountId());
        self::assertEquals((string)$value, $instance->accountId);
        self::assertEquals((string)$value, $instance->account_id);

        $instance = new Recipient();
        $instance->accountId = $value;
        self::assertEquals((string)$value, $instance->getAccountId());
        self::assertEquals((string)$value, $instance->accountId);
        self::assertEquals((string)$value, $instance->account_id);

        $instance = new Recipient();
        $instance->account_id = $value;
        self::assertEquals((string)$value, $instance->getAccountId());
        self::assertEquals((string)$value, $instance->accountId);
        self::assertEquals((string)$value, $instance->account_id);
    }

    /**
     * @dataProvider invalidDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetInvalidAccountId($value)
    {
        $instance = new Recipient();
        $instance->setAccountId($value);
    }

    /**
     * @dataProvider invalidDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetterInvalidAccountId($value)
    {
        $instance = new Recipient();
        $instance->accountId = $value;
    }

    /**
     * @dataProvider invalidDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetterInvalidAccount_id($value)
    {
        $instance = new Recipient();
        $instance->account_id = $value;
    }

    /**
     * @dataProvider validDataProvider
     *
     * @param $value
     */
    public function testGetSetGatewayId($value)
    {
        $instance = new Recipient();

        self::assertEquals(null, $instance->getGatewayId());
        self::assertEquals(null, $instance->gatewayId);
        self::assertEquals(null, $instance->gateway_id);
        $instance->setGatewayId($value);
        self::assertEquals((string)$value, $instance->getGatewayId());
        self::assertEquals((string)$value, $instance->gatewayId);
        self::assertEquals((string)$value, $instance->gateway_id);

        $instance = new Recipient();
        $instance->gatewayId = $value;
        self::assertEquals((string)$value, $instance->getGatewayId());
        self::assertEquals((string)$value, $instance->gatewayId);
        self::assertEquals((string)$value, $instance->gateway_id);

        $instance = new Recipient();
        $instance->gateway_id = $value;
        self::assertEquals((string)$value, $instance->getGatewayId());
        self::assertEquals((string)$value, $instance->gatewayId);
        self::assertEquals((string)$value, $instance->gateway_id);
    }

    /**
     * @dataProvider invalidDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetInvalidGatewayId($value)
    {
        $instance = new Recipient();
        $instance->setGatewayId($value);
    }

    /**
     * @dataProvider invalidDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetterInvalidGatewayId($value)
    {
        $instance = new Recipient();
        $instance->gatewayId = $value;
    }

    /**
     * @dataProvider invalidDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetterInvalidGateway_id($value)
    {
        $instance = new Recipient();
        $instance->gateway_id = $value;
    }

    public function validDataProvider()
    {
        $result = array(
            array(Random::str(1)),
            array(Random::str(2, 64)),
            array(new StringObject(Random::str(1, 32))),
            array(0),
            array(123),
        );
        return $result;
    }

    public function invalidDataProvider()
    {
        return array(
            array(null),
            array(''),
            array(true),
            array(false),
            array(array()),
            array(new \stdClass()),
        );
    }
}