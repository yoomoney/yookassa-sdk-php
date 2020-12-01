<?php

namespace Tests\YooKassa\Common;

use PHPUnit\Framework\TestCase;
use YooKassa\Common\AbstractEnum;

class AbstractEnumTest extends TestCase
{
    /**
     * @dataProvider enumDataProvider
     * @param $value
     * @param $exists
     */
    public function testValueExists($value, $exists)
    {
        if ($exists) {
            self::assertTrue(TestAbstractEnum::valueExists($value));
        } else {
            self::assertFalse(TestAbstractEnum::valueExists($value));
        }
    }

    public function testGetValidValues()
    {
        foreach (TestAbstractEnum::getValidValues() as $value) {
            self::assertTrue(TestAbstractEnum::valueExists($value));
        }
    }

    public function enumDataProvider()
    {
        return array(
            array(TestAbstractEnum::ENUM_VALUE_1, true),
            array(TestAbstractEnum::ENUM_VALUE_2, true),
            array(TestAbstractEnum::ENUM_DISABLED_VALUE_1, true),
            array(TestAbstractEnum::ENUM_DISABLED_VALUE_2, true),
            array('invalid_value', false),
            array(0, false),
        );
    }

    public function testGetEnabledValues()
    {
        $values = TestAbstractEnum::getEnabledValues();
        foreach ($values as $value) {
            self::assertTrue(TestAbstractEnum::valueExists($value));
        }
        self::assertFalse(in_array(TestAbstractEnum::ENUM_DISABLED_VALUE_1, $values));
        self::assertFalse(in_array(TestAbstractEnum::ENUM_DISABLED_VALUE_2, $values));
    }
}

class TestAbstractEnum extends AbstractEnum
{
    const ENUM_VALUE_1 = 'enum_value_1';
    const ENUM_VALUE_2 = 'enum_value_2';
    const ENUM_DISABLED_VALUE_1 = 'enum_disabled_value_1';
    const ENUM_DISABLED_VALUE_2 = 'enum_disabled_value_2';

    protected static $validValues = array(
        self::ENUM_VALUE_1 => true,
        self::ENUM_VALUE_2  => true,
        self::ENUM_DISABLED_VALUE_1 => false,
        self::ENUM_DISABLED_VALUE_2 => false,
    );
}