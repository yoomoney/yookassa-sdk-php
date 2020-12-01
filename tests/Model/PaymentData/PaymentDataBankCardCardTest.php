<?php

namespace Tests\YooKassa\Model\PaymentData;

use PHPUnit\Framework\TestCase;
use YooKassa\Helpers\Random;
use YooKassa\Model\PaymentData\PaymentDataBankCardCard;

class PaymentDataBankCardCardTest extends TestCase
{
    protected function getTestInstance()
    {
        return new PaymentDataBankCardCard();
    }

    /**
     * @dataProvider validNumberDataProvider
     * @param string $value
     */
    public function testGetSetNumber($value)
    {
        $this->getAndSetTest($value, 'number');
    }

    /**
     * @dataProvider invalidNumberDataProvider
     * @expectedException \InvalidArgumentException
     * @param mixed $value
     */
    public function testSetInvalidNumber($value)
    {
        $this->getTestInstance()->setNumber($value);
    }

    /**
     * @dataProvider invalidNumberDataProvider
     * @expectedException \InvalidArgumentException
     * @param mixed $value
     */
    public function testSetterInvalidNumber($value)
    {
        $this->getTestInstance()->number = $value;
    }

    /**
     * @dataProvider validExpiryYearDataProvider
     * @param $value
     */
    public function testGetSetExpiryYear($value)
    {
        $this->getAndSetTest($value, 'expiryYear', 'expiry_year');
    }

    /**
     * @dataProvider invalidYearDataProvider
     * @expectedException \InvalidArgumentException
     * @param mixed $value
     */
    public function testSetInvalidYear($value)
    {
        $this->getTestInstance()->setExpiryYear($value);
    }

    /**
     * @dataProvider invalidYearDataProvider
     * @expectedException \InvalidArgumentException
     * @param mixed $value
     */
    public function testSetterInvalidYear($value)
    {
        $this->getTestInstance()->expiryYear = $value;
    }

    /**
     * @dataProvider invalidYearDataProvider
     * @expectedException \InvalidArgumentException
     * @param mixed $value
     */
    public function testSetterInvalid_year($value)
    {
        $this->getTestInstance()->expiry_year = $value;
    }

    /**
     * @dataProvider invalidMonthDataProvider
     * @expectedException \InvalidArgumentException
     * @param mixed $value
     */
    public function testSetterInvalidMonth($value)
    {
        $this->getTestInstance()->expiryMonth = $value;
    }

    /**
     * @dataProvider invalidMonthDataProvider
     * @expectedException \InvalidArgumentException
     * @param mixed $value
     */
    public function testSetterInvalid_month($value)
    {
        $this->getTestInstance()->expiry_month = $value;
    }

    /**
     * @dataProvider validExpiryMonthDataProvider
     * @param $value
     */
    public function testGetSetExpiryMonth($value)
    {
        $this->getAndSetTest($value, 'expiryMonth', 'expiry_month');
    }

    /**
     * @dataProvider invalidMonthDataProvider
     * @expectedException \InvalidArgumentException
     * @param mixed $value
     */
    public function testSetInvalidMonth($value)
    {
        $this->getTestInstance()->setExpiryMonth($value);
    }

    /**
     * @dataProvider validCscDataProvider
     * @param $value
     */
    public function testGetSetCsc($value)
    {
        $this->getAndSetTest($value, 'csc');
    }

    /**
     * @dataProvider invalidCscDataProvider
     * @expectedException \InvalidArgumentException
     * @param mixed $value
     */
    public function testSetInvalidCsc($value)
    {
        $this->getTestInstance()->setCsc($value);
    }

    /**
     * @dataProvider invalidCscDataProvider
     * @expectedException \InvalidArgumentException
     * @param mixed $value
     */
    public function testSetterInvalidCsc($value)
    {
        $this->getTestInstance()->csc = $value;
    }

    /**
     * @dataProvider validCardholderDataProvider
     * @param $value
     */
    public function testGetSetCardholder($value)
    {
        $this->getAndSetTest($value, 'cardholder');
    }

    /**
     * @dataProvider invalidCardholderDataProvider
     * @expectedException \InvalidArgumentException
     * @param mixed $value
     */
    public function testSetInvalidCardholder($value)
    {
        $this->getTestInstance()->setCardholder($value);
    }

    /**
     * @dataProvider invalidCardholderDataProvider
     * @expectedException \InvalidArgumentException
     * @param mixed $value
     */
    public function testSetterInvalidCardholder($value)
    {
        $this->getTestInstance()->cardholder = $value;
    }

    /**
     * @return array
     */
    public function validNumberDataProvider()
    {
        $result = array();
        for ($i = 0; $i < 3; $i++) {
            $result[] = array(Random::str(16, '0123456789'));
            $result[] = array(Random::str(17, '0123456789'));
            $result[] = array(Random::str(18, '0123456789'));
            $result[] = array(Random::str(19, '0123456789'));
        }
        return $result;
    }

    /**
     * @return array
     */
    public function validExpiryYearDataProvider()
    {
        $result = array();
        for ($i = 0; $i < 10; $i++) {
            $result[] = array(Random::int(2000, 2200));
        }
        return $result;
    }

    /**
     * @return array
     */
    public function validExpiryMonthDataProvider()
    {
        return array(
            array('01'),
            array('02'),
            array('03'),
            array('04'),
            array('05'),
            array('06'),
            array('07'),
            array('08'),
            array('09'),
            array('10'),
            array('11'),
            array('12'),
        );
    }

    public function validCscDataProvider()
    {
        $result = array();
        for ($i = 0; $i < 10; $i++) {
            $result[] = array(Random::str(3, 4, '0123456789'));
        }
        return $result;
    }

    public function validCardholderDataProvider()
    {
        $values = 'abcdefghijklmnopqrstuvwxyz';
        $values .= strtoupper($values) . ' ';
        $result = array(
            array(Random::str(1, $values)),
            array(Random::str(26, $values)),
        );
        for ($i = 0; $i < 10; $i++) {
            $result[] = array(Random::str(1, 26, $values));
        }
        return $result;
    }
    
    public function invalidNumberDataProvider()
    {
        return array(
            array(''),
            array(null),
            array(0),
            array(1),
            array(-1),
            array(array()),
            array(new \stdClass()),
            array(Random::str(15, '0123456789')),
            array(Random::str(20, '0123456789')),
        );
    }

    public function invalidYearDataProvider()
    {
        return array(
            array(''),
            array(null),
            array(0),
            array(1),
            array(-1),
            array('5'),
            array(array()),
            array(new \stdClass()),
            array(Random::str(1, '0123456789')),
            array(Random::str(2, '0123456789')),
            array(Random::str(3, '0123456789')),
            array(Random::str(5, '0123456789')),
        );
    }

    public function invalidMonthDataProvider()
    {
        return array(
            array(''),
            array(null),
            array(0),
            array(1),
            array(-1),
            array('5'),
            array(array()),
            array(new \stdClass()),
            array(Random::str(1, '0123456789')),
            array(Random::str(3, '0123456789')),
            array('13'),
            array('16'),
        );
    }

    public function invalidCscDataProvider()
    {
        return array(
            array(''),
            array(null),
            array(0),
            array(1),
            array(-1),
            array('5'),
            array(array()),
            array(new \stdClass()),
            array(Random::str(1, '0123456789')),
            array(Random::str(2, '0123456789')),
            array(Random::str(5, '0123456789')),
            array(Random::str(6, '0123456789')),
        );
    }

    public function invalidCardholderDataProvider()
    {
        $values = 'abcdefghijklmnopqrstuvwxyz';
        $values .= strtoupper($values) . ' ';
        $result = array(
            array(''),
            array(null),
            array(0),
            array(1),
            array(-1),
            array('5'),
            array(array()),
            array(new \stdClass()),
            array(Random::str(1, '0123456789')),
            array(Random::str(2, '0123456789')),
            array(Random::str(5, '0123456789')),
            array(Random::str(6, '0123456789')),
            array(Random::str(27, $values)),
        );
        return $result;
    }

    protected function getAndSetTest($value, $property, $snakeCase = null)
    {
        $getter = 'get' . ucfirst($property);
        $setter = 'set' . ucfirst($property);

        $instance = $this->getTestInstance();

        self::assertNull($instance->{$getter}());
        self::assertNull($instance->{$property});
        if ($snakeCase !== null) {
            self::assertNull($instance->{$snakeCase});
        }

        $instance->{$setter}($value);

        self::assertEquals($value, $instance->{$getter}());
        self::assertEquals($value, $instance->{$property});
        if ($snakeCase !== null) {
            self::assertEquals($value, $instance->{$snakeCase});
        }

        $instance = $this->getTestInstance();

        $instance->{$property} = $value;

        self::assertEquals($value, $instance->{$getter}());
        self::assertEquals($value, $instance->{$property});
        if ($snakeCase !== null) {
            self::assertEquals($value, $instance->{$snakeCase});
        }

        if ($snakeCase !== null) {
            $instance = $this->getTestInstance();

            $instance->{$snakeCase} = $value;

            self::assertEquals($value, $instance->{$getter}());
            self::assertEquals($value, $instance->{$property});
            self::assertEquals($value, $instance->{$snakeCase});
        }
    }
}