<?php

namespace Tests\YooKassa\Helpers;

use PHPUnit\Framework\TestCase;
use YooKassa\Helpers\Random;

class RandomTest extends TestCase
{
    const COUNT = 10;

    /**
     * @dataProvider randomIntDataProvider
     * @param int $min
     * @param int $max
     */
    public function testRandomInt($min, $max)
    {
        $expectedMin = $min;
        if ($expectedMin === null) {
            $expectedMin = 0;
        }
        $expectedMax = $max;
        if ($expectedMax === null) {
            $expectedMax = PHP_INT_MAX;
        }
        for ($i = 0; $i < self::COUNT; $i++) {
            $value = Random::int($min, $max);
            self::assertGreaterThanOrEqual($expectedMin, $value);
            self::assertGreaterThanOrEqual($value, $expectedMax);
        }
        for ($i = 0; $i < self::COUNT; $i++) {
            $value = Random::int($min, $max, false);
            self::assertGreaterThanOrEqual($expectedMin, $value);
            self::assertGreaterThanOrEqual($value, $expectedMax);
        }
    }

    /**
     * @dataProvider randomFloatDataProvider
     * @param int $min
     * @param int $max
     */
    public function testRandomFloat($min, $max)
    {
        $expectedMin = $min;
        if ($expectedMin === null) {
            $expectedMin = 0.0;
        }
        $expectedMax = $max;
        if ($expectedMax === null) {
            $expectedMax = 1.0;
        }
        for ($i = 0; $i < self::COUNT; $i++) {
            $value = Random::float($min, $max);
            self::assertGreaterThanOrEqual($expectedMin, $value);
            self::assertGreaterThanOrEqual($value, $expectedMax);
        }
        for ($i = 0; $i < self::COUNT; $i++) {
            $value = Random::float($min, $max, false);
            self::assertGreaterThanOrEqual($expectedMin, $value);
            self::assertGreaterThanOrEqual($value, $expectedMax);
        }
    }

    public function testRandomString()
    {
        $random = Random::str(10);
        self::assertEquals(10, strlen($random));
        for ($i = 0; $i < strlen($random); $i++) {
            $charCode = ord($random[$i]);
            self::assertGreaterThanOrEqual(32, $charCode);
            self::assertGreaterThanOrEqual($charCode, 125);
        }

        $chars = '01';
        $random = Random::str(100, $chars);
        self::assertEquals(100, strlen($random));
        for ($i = 0; $i < strlen($random); $i++) {
            self::assertGreaterThanOrEqual(0, strpos($random[$i], $chars));
        }

        $chars = 'abcdef';
        $random = Random::str(100, $chars);
        self::assertEquals(100, strlen($random));
        for ($i = 0; $i < strlen($random); $i++) {
            self::assertGreaterThanOrEqual(0, strpos($random[$i], $chars));
        }

        $random = Random::str(1, 10);
        self::assertGreaterThanOrEqual(1, strlen($random));
        self::assertGreaterThanOrEqual(strlen($random), 10);
        for ($i = 0; $i < strlen($random); $i++) {
            $charCode = ord($random[$i]);
            self::assertGreaterThanOrEqual(32, $charCode);
            self::assertGreaterThanOrEqual($charCode, 125);
        }
    }

    public function testRandomHexString()
    {
        $chars = '0123456789abcdef';
        $random = Random::hex(1000);
        self::assertEquals(1000, strlen($random));
        for ($i = 0; $i < strlen($random); $i++) {
            self::assertGreaterThanOrEqual(0, strpos($random[$i], $chars));
        }

        $random = Random::hex(1000, false);
        self::assertEquals(1000, strlen($random));
        for ($i = 0; $i < strlen($random); $i++) {
            self::assertGreaterThanOrEqual(0, strpos($random[$i], $chars));
        }
    }

    public function testRandomBytes()
    {
        $random = Random::bytes(10);
        self::assertEquals(10, strlen($random));

        $random = Random::bytes(10, false);
        self::assertEquals(10, strlen($random));
    }

    public function testRandomValues()
    {
        $values = array('one', 'two', 'three');
        $value = Random::value($values);
        self::assertContains($value, $values);
        $value = Random::value($values);
        self::assertContains($value, $values);
        $value = Random::value($values);
        self::assertContains($value, $values);

        $values = array('one');
        $value = Random::value($values);
        self::assertContains($value, $values);
        $value = Random::value($values);
        self::assertContains($value, $values);
        $value = Random::value($values);
        self::assertContains($value, $values);
    }

    public function randomIntDataProvider()
    {
        $result = array();
        $result[] = array(null, null);
        $result[] = array(null, 1);
        $result[] = array(0, null);
        for ($i = 0; $i < self::COUNT; $i++) {
            $min = $i;
            $max = $i + mt_rand(-100, 100);
            if ($min < $max) {
                $result[] = array($min, $max);
            } else {
                $result[] = array($max, $min);
            }
        }
        return $result;
    }

    public function randomFloatDataProvider()
    {
        $result = array();
        $result[] = array(null, null);
        $result[] = array(null, 1);
        $result[] = array(0, null);
        for ($i = 0; $i < self::COUNT; $i++) {
            $min = $i / 3.1415;
            $max = $i + mt_rand(-100000, 1000000) / 3.141592;
            if ($min < $max) {
                $result[] = array($min, $max);
            } else {
                $result[] = array($max, $min);
            }
        }
        return $result;
    }

    public function testRandomBool()
    {
        for ($i = 0; $i < 10; $i++) {
            $value = Random::bool();
            self::assertTrue(is_bool($value));
            if ($value) {
                self::assertTrue($value);
            } else {
                self::assertFalse($value);
            }
        }
    }
}