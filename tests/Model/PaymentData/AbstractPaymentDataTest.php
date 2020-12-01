<?php

namespace Tests\YooKassa\Model\PaymentData;

use PHPUnit\Framework\TestCase;
use YooKassa\Helpers\Random;
use YooKassa\Model\PaymentData\AbstractPaymentData;

abstract class AbstractPaymentDataTest extends TestCase
{
    /**
     * @return AbstractPaymentData
     */
    abstract protected function getTestInstance();

    /**
     * @return string
     */
    abstract protected function getExpectedType();

    /**
     *
     */
    public function testGetType()
    {
        $instance = $this->getTestInstance();
        self::assertEquals($this->getExpectedType(), $instance->getType());
    }

    /**
     * @dataProvider invalidTypeDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testInvalidType($value)
    {
        new TestPaymentData($value);
    }

    public function invalidTypeDataProvider()
    {
        return array(
            array(''),
            array(null),
            array(Random::str(40)),
            array(0),
            array(array()),
            array(new \stdClass()),
        );
    }
}

class TestPaymentData extends AbstractPaymentData
{
    public function __construct($type)
    {
        $this->_setType($type);
    }
}