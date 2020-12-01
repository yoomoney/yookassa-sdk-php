<?php

namespace Tests\YooKassa\Model\ConfirmationAttributes;

use PHPUnit\Framework\TestCase;
use YooKassa\Helpers\Random;
use YooKassa\Model\ConfirmationAttributes\AbstractConfirmationAttributes;

abstract class AbstractConfirmationAttributesTest extends TestCase
{
    /**
     * @return AbstractConfirmationAttributes
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
        new TestConfirmation($value);
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


    /**
     * @dataProvider validLocaleDataProvider
     *
     * @param $value
     */
    public function testSetterLocale($value)
    {
        $instance = $this->getTestInstance();
        $instance->setLocale($value);
        self::assertEquals((string)$value, $instance->getLocale());
    }

    /**
     * @return array
     * @throws \Exception
     */
    public function validLocaleDataProvider()
    {
        return array(
            array(''),
            array(null),
            array(
                Random::str(2, 2, 'abcdefghijklmnopqrtuvwxyz')
                .  '_' .
                Random::str(2, 2, 'ABCDEFGHIJKLMNOPQRTUVWXYZ')
            ),
            array('ru_RU'),
            array('en_US'),
        );
    }

    /**
     * @dataProvider invalidLocaleDataProvider
     * @expectedException \InvalidArgumentException
     *
     * @param $value
     */
    public function testSetInvalidLocale($value)
    {
        $this->getTestInstance()->setLocale($value);
    }

    /**
     * @return array
     * @throws \Exception
     */
    public function invalidLocaleDataProvider()
    {
        return array(
            array(Random::str(4)),
            array(Random::str(6)),
            array(0),
            array(array()),
            array(new \stdClass()),
            array(
                Random::str(2, 2, 'ABCDEFGHIJKLMNOPQRTUVWXYZ')
                .  '_' .
                Random::str(2, 2, 'abcdefghijklmnopqrtuvwxyz')
            ),
        );
    }
}

class TestConfirmation extends AbstractConfirmationAttributes
{
    public function __construct($type)
    {
        $this->_setType($type);
    }
}