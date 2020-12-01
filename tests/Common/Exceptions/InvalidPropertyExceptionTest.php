<?php

namespace Tests\YooKassa\Common\Exceptions;

use PHPUnit\Framework\TestCase;
use YooKassa\Common\Exceptions\InvalidPropertyException;
use YooKassa\Helpers\StringObject;

class InvalidPropertyExceptionTest extends TestCase
{
    /**
     * @param string $message
     * @param string $property
     * @return InvalidPropertyException
     */
    protected function getTestInstance($message, $property)
    {
        return new InvalidPropertyException($message, 0, $property);
    }

    /**
     * @dataProvider validPropertyDataProvider
     * @param $property
     */
    public function testGetProperty($property)
    {
        $instance = $this->getTestInstance('', $property);
        self::assertEquals((string)$property, $instance->getProperty());
    }

    public function validPropertyDataProvider()
    {
        return array(
            array(''),
            array('property'),
            array(new StringObject('property')),
        );
    }
}
