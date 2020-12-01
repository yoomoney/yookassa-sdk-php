<?php

namespace Tests\YooKassa\Model;

use PHPUnit\Framework\TestCase;
use YooKassa\Helpers\Random;
use YooKassa\Model\Passenger;

class PassengerTest extends TestCase
{
    /**
     * @return Passenger
     */
    protected static function getInstance()
    {
        return new Passenger();
    }

    /**
     * @dataProvider validDataProvider
     * @param $name
     */
    public function testGetSetFirstName($name)
    {
        $instance = self::getInstance();
        $instance->setFirstName($name);
        self::assertEquals($name, $instance->getFirstName());
        self::assertEquals($name, $instance->firstName);
        self::assertEquals($name, $instance->first_name);
    }

    /**
     * @dataProvider validDataProvider
     *
     * @param $name
     */
    public function testGetSetLastName($name)
    {
        $instance = self::getInstance();
        $instance->setLastName($name);
        self::assertEquals($name, $instance->getLastName());
        self::assertEquals($name, $instance->lastName);
        self::assertEquals($name, $instance->last_name);
    }

    /**
     * @dataProvider invalidValueDataProvider
     * @param mixed $value
     * @param string $exceptionClassName
     */
    public function testSetInvalidFirstName($value, $exceptionClassName)
    {
        $instance = self::getInstance();
        try {
            $instance->setFirstName($value);
        } catch (\Exception $e) {
            self::assertInstanceOf($exceptionClassName, $e);
        }
    }

    /**
     * @dataProvider invalidValueDataProvider
     * @param mixed $value
     * @param string $exceptionClassName
     */
    public function testSetterInvalidLastName($value, $exceptionClassName)
    {
        $instance = self::getInstance();
        try {
            $instance->setLastName($value);
        } catch (\Exception $e) {
            self::assertInstanceOf($exceptionClassName, $e);
        }
    }

    /**
     * @return array
     * @throws \Exception
     */
    public function validDataProvider()
    {
        $alphabet = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
        return array(
            array(
                'firstName' => Random::str(1, null, $alphabet),
                'lastName'  => Random::str(1, null, $alphabet),
            ),
            array(
                'firstName' => Random::str(64, null, $alphabet),
                'lastName'  => Random::str(64, null, $alphabet),
            )
        );
    }

    /**
     * @return array
     * @throws \Exception
     */
    public function invalidValueDataProvider()
    {
        $exceptionNamespace = 'YooKassa\\Common\\Exceptions\\';
        return array(
            array(null, $exceptionNamespace.'InvalidPropertyValueTypeException'),
            array('', $exceptionNamespace.'InvalidPropertyValueTypeException'),
            array(array(), $exceptionNamespace.'InvalidPropertyValueTypeException'),
            array(fopen(__FILE__, 'r'), $exceptionNamespace.'InvalidPropertyValueTypeException'),
            array(Random::str(65), $exceptionNamespace.'InvalidPropertyValueException'),
            array(-1, $exceptionNamespace.'InvalidPropertyValueTypeException'),
            array(-0.01, $exceptionNamespace.'InvalidPropertyValueTypeException'),
            array(0.0, $exceptionNamespace.'InvalidPropertyValueTypeException'),
            array(true, $exceptionNamespace.'InvalidPropertyValueTypeException'),
            array(false, $exceptionNamespace.'InvalidPropertyValueTypeException'),
        );
    }

    /**
     * @dataProvider validDataProvider
     *
     * @param string $firstName
     * @param string $lastName
     */
    public function testJsonSerialize($firstName, $lastName)
    {
        $instance = self::getInstance();
        $instance->setFirstName($firstName);
        $instance->setLastName($lastName);

        $expected = array(
            'first_name' => $firstName,
            'last_name'  => $lastName,
        );
        self::assertEquals($expected, $instance->jsonSerialize());
    }
}
