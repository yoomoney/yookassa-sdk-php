<?php

namespace Tests\YooKassa\Common\Exceptions;

use YooKassa\Common\Exceptions\InvalidPropertyException;
use YooKassa\Common\Exceptions\InvalidPropertyValueTypeException;

class InvalidPropertyValueTypeExceptionTest extends InvalidPropertyExceptionTest
{
    /**
     * @param string $message
     * @param string $property
     * @param null $value
     * @return InvalidPropertyValueTypeException
     */
    protected function getTestInstance($message, $property, $value = null)
    {
        return new InvalidPropertyValueTypeException($message, 0, $property, $value);
    }

    /**
     * @dataProvider validTypeDataProvider
     * @param mixed $value
     * @param string $type
     */
    public function testGetType($value, $type)
    {
        $instance = $this->getTestInstance('', '', $value);
        self::assertEquals($type, $instance->getType());
    }

    public function validTypeDataProvider()
    {
        return array(
            array(null, 'null'),
            array('', 'string'),
            array('value', 'string'),
            array(array('test'), 'array'),
            array(new \stdClass(), 'stdClass'),
            array(new \DateTime(), 'DateTime'),
            array(new InvalidPropertyException(), 'YooKassa\\Common\\Exceptions\\InvalidPropertyException'),
            array(fopen(__FILE__, 'r'), 'resource'),
            array(true, 'boolean'),
            array(false, 'boolean'),
            array(0, 'integer'),
            array(0.01, 'double'),
        );
    }
}
