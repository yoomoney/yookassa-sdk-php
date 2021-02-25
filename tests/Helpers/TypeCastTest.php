<?php

namespace Tests\YooKassa\Helpers;

use PHPUnit\Framework\TestCase;
use YooKassa\Helpers\StringObject;
use YooKassa\Helpers\TypeCast;

class TypeCastTest extends TestCase
{
    /**
     * @dataProvider canCastToStringDataProvider
     * @param mixed $value
     * @param bool $can
     */
    public function testCanCastToString($value, $can)
    {
        if ($can) {
            self::assertTrue(TypeCast::canCastToString($value));
        } else {
            self::assertFalse(TypeCast::canCastToString($value));
        }
    }

    /**
     * @dataProvider canCastToEnumStringDataProvider
     * @param mixed $value
     * @param bool $can
     */
    public function testCanCastToEnumString($value, $can)
    {
        if ($can) {
            self::assertTrue(TypeCast::canCastToEnumString($value));
        } else {
            self::assertFalse(TypeCast::canCastToEnumString($value));
        }
    }

    /**
     * @dataProvider canCastToDateTimeDataProvider
     * @param mixed $value
     * @param bool $can
     */
    public function testCanCastToDateTime($value, $can)
    {
        if ($can) {
            self::assertTrue(TypeCast::canCastToDateTime($value));
        } else {
            self::assertFalse(TypeCast::canCastToDateTime($value));
        }
    }

    /**
     * @dataProvider castToDateTimeDataProvider
     * @param mixed $value
     * @param int $expected
     * @param bool $valud
     */
    public function testCastToDateTime($value, $expected, $valid)
    {
        $instance = TypeCast::castToDateTime($value);
        if ($valid) {
            if ($value instanceof \DateTime) {
                self::assertEquals($value->getTimestamp(), $instance->getTimestamp());
                self::assertNotSame($value, $instance);
            } else {
                self::assertEquals($expected, $instance->getTimestamp());
            }
        } else {
            self::assertNull($instance);
        }
    }

    public function canCastToStringDataProvider()
    {
        return array(
            array('', true),
            array('test_string', true),
            array(0, true),
            array(1, true),
            array(-1, true),
            array(0.0, true),
            array(-0.001, true),
            array(0.001, true),
            array(true, false),
            array(false, false),
            array(null, false),
            array(array(), false),
            array(new \stdClass(), false),
            array(fopen(__FILE__, 'r'), false),
            array(new StringObject('test'), true),
        );
    }

    public function canCastToEnumStringDataProvider()
    {
        return array(
            array('', false),
            array('test_string', true),
            array(0, false),
            array(1, false),
            array(-1, false),
            array(0.0, false),
            array(-0.001, false),
            array(0.001, false),
            array(true, false),
            array(false, false),
            array(null, false),
            array(array(), false),
            array(new \stdClass(), false),
            array(fopen(__FILE__, 'r'), false),
            array(new StringObject('test'), true),
        );
    }

    public function canCastToDateTimeDataProvider()
    {
        return array(
            array('', false),
            array('test_string', true),
            array(0, true),
            array(1, true),
            array(-1, false),
            array(0.0, true),
            array(-0.001, false),
            array(0.001, true),
            array(true, false),
            array(false, false),
            array(null, false),
            array(array(), false),
            array(new \stdClass(), false),
            array(fopen(__FILE__, 'r'), false),
            array(new StringObject('test'), true),
            array(new \DateTime(), true),
        );
    }

    public function castToDateTimeDataProvider()
    {
        $result = array();

        $time = time();
        $result[] = array($time, $time, true);
        $result[] = array(date(YOOKASSA_DATE, $time), $time, true);
        $result[] = array(new \DateTime(date(YOOKASSA_DATE, $time)), $time, true);
        $result[] = array('3234-234-23', $time, false);
        $result[] = array(array(), $time, false);

        return $result;
    }
}