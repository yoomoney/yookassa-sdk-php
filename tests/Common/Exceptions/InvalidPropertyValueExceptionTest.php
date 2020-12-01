<?php

namespace Tests\YooKassa\Common\Exceptions;

use YooKassa\Common\Exceptions\InvalidPropertyValueException;

class InvalidPropertyValueExceptionTest extends InvalidPropertyExceptionTest
{
    protected function getTestInstance($message, $property, $value = null)
    {
        return new InvalidPropertyValueException($message, 0, $property, $value);
    }

    /**
     * @dataProvider validValueDataProvider
     * @param mixed $value
     */
    public function testGetValue($value)
    {
        $instance = $this->getTestInstance('', '', $value);
        if ($value !== null) {
            self::assertEquals($value, $instance->getValue());
        } else {
            self::assertNull($instance->getValue());
        }
    }

    public function validValueDataProvider()
    {
        return array(
            array(null),
            array(''),
            array('value'),
            array(array('test')),
            array(new \stdClass()),
            array(new \DateTime()),
        );
    }
}
