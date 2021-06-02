<?php

namespace Tests\YooKassa\Model;

use PHPUnit\Framework\TestCase;
use YooKassa\Helpers\Random;
use YooKassa\Model\CurrencyCode;
use YooKassa\Model\MonetaryAmount;

class MonetaryAmountTest extends TestCase
{
    const DEFAULT_CURRENCY = CurrencyCode::RUB;
    const DEFAULT_VALUE = '0.00';

    protected static function getInstance($value = null, $currency = null)
    {
        return new MonetaryAmount($value, $currency);
    }

    /**
     * @dataProvider validDataProvider
     *
     * @param $value
     * @param $currency
     */
    public function testConstructor($value, $currency)
    {
        $instance = new MonetaryAmount();

        self::assertEquals(self::DEFAULT_VALUE, $instance->getValue());
        self::assertEquals(self::DEFAULT_CURRENCY, $instance->getCurrency());

        $instance = new MonetaryAmount($value, $currency);

        self::assertEquals(number_format($value, 2, '.', ''), $instance->getValue());
        self::assertEquals(strtoupper($currency), $instance->getCurrency());
    }

    /**
     * @dataProvider validArrayDataProvider
     *
     * @param $data
     */
    public function testArrayConstructor($data)
    {
        $instance = new MonetaryAmount();

        self::assertEquals(self::DEFAULT_VALUE, $instance->getValue());
        self::assertEquals(self::DEFAULT_CURRENCY, $instance->getCurrency());

        $instance = new MonetaryAmount($data);

        self::assertEquals(number_format($data['value'], 2, '.', ''), $instance->getValue());
        self::assertEquals(strtoupper($data['currency']), $instance->getCurrency());
    }

    /**
     * @dataProvider validValueDataProvider
     *
     * @param $value
     */
    public function testGetSetValue($value)
    {
        $expected = number_format($value, 2, '.', '');

        $instance = self::getInstance();
        self::assertEquals(self::DEFAULT_VALUE, $instance->getValue());
        self::assertEquals(self::DEFAULT_VALUE, $instance->value);
        $instance->setValue($value);
        self::assertEquals($expected, $instance->getValue());
        self::assertEquals($expected, $instance->value);

        $instance = self::getInstance();
        $instance->value = $value;
        self::assertEquals($expected, $instance->getValue());
        self::assertEquals($expected, $instance->value);
    }

    /**
     * @dataProvider invalidValueDataProvider
     * @param mixed $value
     * @param string $exceptionClassName
     */
    public function testSetInvalidValue($value, $exceptionClassName)
    {
        $instance = self::getInstance();
        try {
            $instance->setValue($value);
        } catch (\Exception $e) {
            self::assertInstanceOf($exceptionClassName, $e);
        }
    }

    /**
     * @dataProvider invalidValueDataProvider
     * @param mixed $value
     * @param string $exceptionClassName
     */
    public function testSetterInvalidValue($value, $exceptionClassName)
    {
        $instance = self::getInstance();
        try {
            $instance->value = $value;
        } catch (\Exception $e) {
            self::assertInstanceOf($exceptionClassName, $e);
        }
    }

    /**
     * @dataProvider validCurrencyDataProvider
     * @param string $currency
     */
    public function testGetSetCurrency($currency)
    {
        $instance = self::getInstance();

        self::assertEquals(self::DEFAULT_CURRENCY, $instance->getCurrency());
        self::assertEquals(self::DEFAULT_CURRENCY, $instance->currency);
        $instance->setCurrency($currency);
        self::assertEquals(strtoupper($currency), $instance->getCurrency());
        self::assertEquals(strtoupper($currency), $instance->currency);
    }

    /**
     * @dataProvider invalidCurrencyDataProvider
     * @param string $currency
     * @param string $exceptionClassName
     */
    public function testSetInvalidCurrency($currency, $exceptionClassName)
    {
        $instance = self::getInstance();
        try {
            $instance->setCurrency($currency);
        } catch (\Exception $e) {
            self::assertInstanceOf($exceptionClassName, $e);
        }
    }

    /**
     * @dataProvider invalidCurrencyDataProvider
     * @param string $currency
     * @param string $exceptionClassName
     */
    public function testSetterInvalidCurrency($currency, $exceptionClassName)
    {
        $instance = self::getInstance();
        try {
            $instance->currency = $currency;
        } catch (\Exception $e) {
            self::assertInstanceOf($exceptionClassName, $e);
        }
    }

    public function validDataProvider()
    {
        $result = $this->validValueDataProvider();
        foreach ($this->validCurrencyDataProvider() as $index => $tmp) {
            if (isset($result[$index])) {
                $result[$index][] = $tmp[0];
            }
        }
        return $result;
    }

    public function validArrayDataProvider()
    {
        $result = array();
        foreach (range(1, 10) as $i) {
            $result[$i][] = array(
                'value' => Random::float(0, 9999.99),
                'currency' => Random::value(CurrencyCode::getValidValues()),
            );
        }
        return $result;
    }

    public function validValueDataProvider()
    {
        $result = array(
            array(0.01),
            array(0.1),
            array(0.11),
            array(0.1111),
            array(0.1166),
            array('0.01'),
            array(1),
            array('1'),
        );
        for ($i = 0; $i < 10; $i++) {
            $result[] = array(Random::float(0, 9999999));
        }
        return $result;
    }

    public function validCurrencyDataProvider()
    {
        $result = array();
        foreach (CurrencyCode::getValidValues() as $value) {
            $result[] = array($value);
            $result[] = array(strtolower($value[0]) . $value[1] . $value[2]);
            $result[] = array($value[0] . strtolower($value[1]) . $value[2]);
            $result[] = array($value[0] . $value[1] . strtolower($value[2]));
            $result[] = array(strtolower($value[0]) . strtolower($value[1]) . $value[2]);
            $result[] = array(strtolower($value[0]) . $value[1] . strtolower($value[2]));
            $result[] = array(strtolower($value));
        }
        return $result;
    }

    public function invalidValueDataProvider()
    {
        $exceptionNamespace = 'YooKassa\\Common\\Exceptions\\';
        return array(
            array(null,                 $exceptionNamespace . 'EmptyPropertyValueException'),
            array('',                   $exceptionNamespace . 'EmptyPropertyValueException'),
            array(array(),              $exceptionNamespace . 'InvalidPropertyValueTypeException'),
            array(fopen(__FILE__, 'r'), $exceptionNamespace . 'InvalidPropertyValueTypeException'),
            array('invalid_value',      $exceptionNamespace . 'InvalidPropertyValueTypeException'),
            array(-1,                   $exceptionNamespace . 'InvalidPropertyValueException'),
            array(-0.01,                $exceptionNamespace . 'InvalidPropertyValueException'),
            array(0.0,                  $exceptionNamespace . 'InvalidPropertyValueException'),
            array(0,                    $exceptionNamespace . 'InvalidPropertyValueException'),
            array(0.001,                $exceptionNamespace . 'InvalidPropertyValueException'),
            array(true,                 $exceptionNamespace . 'InvalidPropertyValueTypeException'),
            array(false,                $exceptionNamespace . 'InvalidPropertyValueTypeException'),
        );
    }

    public function invalidCurrencyDataProvider()
    {
        $exceptionNamespace = 'YooKassa\\Common\\Exceptions\\';
        return array(
            array(null,                 $exceptionNamespace . 'EmptyPropertyValueException'),
            array('',                   $exceptionNamespace . 'EmptyPropertyValueException'),
            array(array(),              $exceptionNamespace . 'InvalidPropertyValueTypeException'),
            array(fopen(__FILE__, 'r'), $exceptionNamespace . 'InvalidPropertyValueTypeException'),
            array('invalid_value',      $exceptionNamespace . 'InvalidPropertyValueException'),
            array('III',                $exceptionNamespace . 'InvalidPropertyValueException'),
            array(-0.01,                $exceptionNamespace . 'InvalidPropertyValueTypeException'),
            array(0.0,                  $exceptionNamespace . 'InvalidPropertyValueTypeException'),
            array(0,                    $exceptionNamespace . 'InvalidPropertyValueTypeException'),
            array(0.01,                 $exceptionNamespace . 'InvalidPropertyValueTypeException'),
            array(true,                 $exceptionNamespace . 'InvalidPropertyValueTypeException'),
            array(false,                $exceptionNamespace . 'InvalidPropertyValueTypeException'),
        );
    }

    /**
     * @dataProvider validMultiplyDataProvider
     * @param $source
     * @param $coefficient
     * @param $expected
     */
    public function testMultiply($source, $coefficient, $expected)
    {
        $instance = new MonetaryAmount($source);
        $instance->multiply($coefficient);
        self::assertEquals($expected, $instance->getIntegerValue());
    }

    public function validMultiplyDataProvider()
    {
        return array(
            array(1, 0.5, 50),
            array(1.01, 0.5, 51),
            array(1.00, 0.01, 1),
            array(0.99, 0.01, 1),
        );
    }

    /**
     * @dataProvider invalidMultiplyDataProvider
     * @expectedException \InvalidArgumentException
     * @param $source
     * @param $coefficient
     */
    public function testInvalidMultiply($source, $coefficient)
    {
        $instance = new MonetaryAmount($source);
        $instance->multiply($coefficient);
    }

    public function invalidMultiplyDataProvider()
    {
        return array(
            array(1, null),
            array(1.01, ''),
            array(1.00, true),
            array(0.99, false),
            array(0.99, array()),
            array(0.99, new \stdClass()),
            array(0.99, 'test'),
            array(0.99, -1.0),
            array(0.99, -0.0),
            array(0.99, -0.00001),
            array(0.99, 0.000001),
        );
    }

    /**
     * @dataProvider validIncreaseDataProvider
     * @param $source
     * @param $amount
     * @param $expected
     */
    public function testIncrease($source, $amount, $expected)
    {
        $instance = new MonetaryAmount($source);
        $instance->increase($amount);
        self::assertEquals($expected, $instance->getIntegerValue());
    }

    public function validIncreaseDataProvider()
    {
        return array(
            array(1, 0.5, 150),
            array(1.01, -0.5, 51),
            array(1.00, -0.001, 100),
            array(0.99, 0.01, 100),
        );
    }

    /**
     * @dataProvider invalidIncreaseDataProvider
     * @expectedException \InvalidArgumentException
     * @param $source
     * @param $amount
     */
    public function testInvalidIncrease($source, $amount)
    {
        $instance = new MonetaryAmount($source);
        $instance->increase($amount);
    }

    public function invalidIncreaseDataProvider()
    {
        return array(
            array(1, null),
            array(1.01, ''),
            array(1.00, true),
            array(0.99, false),
            array(0.99, array()),
            array(0.99, new \stdClass()),
            array(0.99, 'test'),
            array(0.99, -1.0),
            array(0.99, -0.99),
        );
    }

    /**
     * @dataProvider validDataProvider
     *
     * @param $value
     * @param $currency
     */
    public function testJsonSerialize($value, $currency)
    {
        $instance = new MonetaryAmount($value, $currency);
        $expected = array(
            'value' => number_format($value, 2, '.', ''),
            'currency' => strtoupper($currency),
        );
        self::assertEquals($expected, $instance->jsonSerialize());
    }
}
