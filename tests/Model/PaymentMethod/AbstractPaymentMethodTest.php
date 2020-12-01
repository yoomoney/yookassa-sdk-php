<?php

namespace Tests\YooKassa\Model\PaymentMethod;

use PHPUnit\Framework\TestCase;
use YooKassa\Helpers\Random;
use YooKassa\Model\PaymentMethod\AbstractPaymentMethod;

abstract class AbstractPaymentMethodTest extends TestCase
{
    /**
     * @return AbstractPaymentMethod
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

    /**
     * @dataProvider validSavedDataProvider
     * @param bool $value
     */
    public function testGetSetSaved($value)
    {
        $instance = $this->getTestInstance();

        self::assertFalse($instance->getSaved());
        self::assertFalse($instance->saved);

        $instance->setSaved($value);
        if ($value) {
            self::assertTrue($instance->getSaved());
            self::assertTrue($instance->saved);
        } else {
            self::assertFalse($instance->getSaved());
            self::assertFalse($instance->saved);
        }

        $instance = $this->getTestInstance();
        $instance->saved = $value;
        if ($value) {
            self::assertTrue($instance->getSaved());
            self::assertTrue($instance->saved);
        } else {
            self::assertFalse($instance->getSaved());
            self::assertFalse($instance->saved);
        }
    }

    /**
     * @dataProvider invalidSavedDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetInvalidSaved($value)
    {
        $this->getTestInstance()->setSaved($value);
    }

    /**
     * @dataProvider invalidSavedDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetterInvalidSaved($value)
    {
        $this->getTestInstance()->saved = $value;
    }

    /**
     * @dataProvider validIdDataProvider
     * @param bool $value
     */
    public function testGetSetId($value)
    {
        $instance = $this->getTestInstance();

        self::assertNull($instance->getId());
        self::assertNull($instance->id);

        $instance->setId($value);
        if ($value === null || $value === '') {
            self::assertNull($instance->getId());
            self::assertNull($instance->id);
        } else {
            self::assertEquals($value, $instance->getId());
            self::assertEquals($value, $instance->id);
        }

        $instance = $this->getTestInstance();
        $instance->id = $value;
        if ($value === null || $value === '') {
            self::assertNull($instance->getId());
            self::assertNull($instance->id);
        } else {
            self::assertEquals($value, $instance->getId());
            self::assertEquals($value, $instance->id);
        }
    }

    /**
     * @dataProvider invalidIdDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetInvalidId($value)
    {
        $this->getTestInstance()->setId($value);
    }

    /**
     * @dataProvider invalidIdDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetterInvalidId($value)
    {
        $this->getTestInstance()->id = $value;
    }

    /**
     * @dataProvider validTitleDataProvider
     * @param bool $value
     */
    public function testGetSetTitle($value)
    {
        $instance = $this->getTestInstance();

        self::assertNull($instance->getTitle());
        self::assertNull($instance->title);

        $instance->setTitle($value);
        if ($value === null || $value === '') {
            self::assertNull($instance->getTitle());
            self::assertNull($instance->title);
        } else {
            self::assertEquals($value, $instance->getTitle());
            self::assertEquals($value, $instance->title);
        }

        $instance = $this->getTestInstance();
        $instance->title = $value;
        if ($value === null || $value === '') {
            self::assertNull($instance->getTitle());
            self::assertNull($instance->title);
        } else {
            self::assertEquals($value, $instance->getTitle());
            self::assertEquals($value, $instance->title);
        }
    }

    /**
     * @dataProvider invalidTitleDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetInvalidTitle($value)
    {
        $this->getTestInstance()->setTitle($value);
    }

    /**
     * @dataProvider invalidIdDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetterInvalidTitle($value)
    {
        $this->getTestInstance()->title = $value;
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

    public function validSavedDataProvider()
    {
        return array(
            array(true),
            array(false),
            array(0),
            array(1),
        );
    }

    public function invalidSavedDataProvider()
    {
        return array(
            array(null),
            array(''),
            array(array()),
            array(new \stdClass()),
        );
    }

    public function validIdDataProvider()
    {
        return array(
            array(null),
            array(''),
            array(Random::str(1)),
            array(Random::str(2)),
            array(Random::str(10)),
            array(Random::str(100)),
        );
    }

    public function invalidIdDataProvider()
    {
        return array(
            array(array()),
            array(new \stdClass()),
            array(true),
            array(false),
        );
    }

    public function validTitleDataProvider()
    {
        return array(
            array(null),
            array(''),
            array(Random::str(1)),
            array(Random::str(2)),
            array(Random::str(10)),
            array(Random::str(100)),
        );
    }

    public function invalidTitleDataProvider()
    {
        return array(
            array(array()),
            array(new \stdClass()),
            array(true),
            array(false),
        );
    }
}

class TestPaymentData extends AbstractPaymentMethod
{
    public function __construct($type)
    {
        $this->_setType($type);
    }
}