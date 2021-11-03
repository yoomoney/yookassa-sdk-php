<?php

namespace Tests\YooKassa\Request\Payouts\PayoutDestinationData;

use PHPUnit\Framework\TestCase;
use YooKassa\Helpers\Random;
use YooKassa\Request\Payouts\PayoutDestinationData\AbstractPayoutDestinationData;

abstract class AbstractPayoutDestinationDataTest extends TestCase
{
    /**
     * @return AbstractPayoutDestinationData
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

class TestPaymentData extends AbstractPayoutDestinationData
{
    public function __construct($type)
    {
        $this->_setType($type);
    }
}