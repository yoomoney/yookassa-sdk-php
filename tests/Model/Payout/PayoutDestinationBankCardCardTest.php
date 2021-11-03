<?php

namespace Tests\YooKassa\Model\Payout;

use PHPUnit\Framework\TestCase;
use YooKassa\Helpers\Random;
use YooKassa\Model\PaymentMethodType;
use YooKassa\Model\Payout\PayoutDestinationBankCardCard;

class PayoutDestinationBankCardCardTest extends TestCase
{
    /**
     * @return PayoutDestinationBankCardCard
     */
    protected function getTestInstance()
    {
        return new PayoutDestinationBankCardCard();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return PaymentMethodType::BANK_CARD;
    }

    /**
     * @dataProvider validLast4DataProvider
     * @param string $value
     */
    public function testGetSetLast4($value)
    {
        $this->getAndSetTest($value, 'last4');
    }

    /**
     * @dataProvider invalidLast4DataProvider
     * @expectedException \InvalidArgumentException
     * @param mixed $value
     */
    public function testSetInvalidNumber($value)
    {
        $this->getTestInstance()->setLast4($value);
    }

    /**
     * @dataProvider invalidLast4DataProvider
     * @expectedException \InvalidArgumentException
     * @param mixed $value
     */
    public function testSetterInvalidNumber($value)
    {
        $this->getTestInstance()->last4 = $value;
    }

    /**
     * @dataProvider validFirst6DataProvider
     * @param string $value
     */
    public function testGetSetFirst6($value)
    {
        $this->getAndSetTest($value, 'first6');
    }

    /**
     * @dataProvider invalidFirst6DataProvider
     * @expectedException \InvalidArgumentException
     * @param mixed $value
     */
    public function testSetFirst6InvalidNumber($value)
    {
        $this->getTestInstance()->setFirst6($value);
    }

    /**
     * @dataProvider invalidFirst6DataProvider
     * @expectedException \InvalidArgumentException
     * @param mixed $value
     */
    public function testSetterFirst6InvalidNumber($value)
    {
        $this->getTestInstance()->first6 = $value;
    }

    /**
     * @dataProvider validCardTypeDataProvider
     * @param $value
     */
    public function testGetSetCardType($value)
    {
        $this->getAndSetTest($value, 'cardType', 'card_type');
    }

    /**
     * @dataProvider validIssuerCountryDataProvider
     * @param $value
     */
    public function testGetSetIssuerCountry($value)
    {
        $this->getAndSetTest($value, 'issuerCountry', 'issuer_country');
    }

    /**
     * @dataProvider validIssuerNameDataProvider
     * @param $value
     */
    public function testGetSetIssuerName($value)
    {
        $this->getAndSetTest($value, 'issuerName', 'issuer_name');
    }

    /**
     * @dataProvider invalidCardTypeDataProvider
     * @expectedException \InvalidArgumentException
     * @param mixed $value
     */
    public function testSetInvalidCardType($value)
    {
        $this->getTestInstance()->setCardType($value);
    }

    /**
     * @dataProvider invalidCardTypeDataProvider
     * @expectedException \InvalidArgumentException
     * @param mixed $value
     */
    public function testSetterInvalidCardType($value)
    {
        $this->getTestInstance()->cardType = $value;
    }

    /**
     * @dataProvider invalidCardTypeDataProvider
     * @expectedException \InvalidArgumentException
     * @param mixed $value
     */
    public function testSetterInvalidCard_type($value)
    {
        $this->getTestInstance()->card_type = $value;
    }

    /**
     * @dataProvider invalidIssuerCountryDataProvider
     * @expectedException \InvalidArgumentException
     * @param mixed $value
     */
    public function testSetInvalidIssuerCountry($value)
    {
        $this->getTestInstance()->setIssuerCountry($value);
    }

    /**
     * @dataProvider invalidIssuerCountryDataProvider
     * @expectedException \InvalidArgumentException
     * @param mixed $value
     */
    public function testSetterInvalidIssuerCountry($value)
    {
        $this->getTestInstance()->issuerCountry = $value;
    }

    /**
     * @dataProvider invalidIssuerCountryDataProvider
     * @expectedException \InvalidArgumentException
     * @param mixed $value
     */
    public function testSetterInvalidIssuer_country($value)
    {
        $this->getTestInstance()->issuer_country = $value;
    }

    /**
     * @dataProvider invalidIssuerNameDataProvider
     * @expectedException \InvalidArgumentException
     * @param mixed $value
     */
    public function testSetInvalidIssuerName($value)
    {
        $this->getTestInstance()->setIssuerName($value);
    }

    /**
     * @dataProvider invalidIssuerNameDataProvider
     * @expectedException \InvalidArgumentException
     * @param mixed $value
     */
    public function testSetterInvalidIssuerName($value)
    {
        $this->getTestInstance()->issuerName = $value;
    }

    /**
     * @dataProvider invalidIssuerNameDataProvider
     * @expectedException \InvalidArgumentException
     * @param mixed $value
     */
    public function testSetterInvalidIssuer_name($value)
    {
        $this->getTestInstance()->issuer_name = $value;
    }

    /**
     * @return array
     */
    public function validLast4DataProvider()
    {
        $result = array();
        for ($i = 0; $i < 10; $i++) {
            $result[] = array(Random::str(4, '0123456789'));
        }
        return $result;
    }

    /**
     * @return array
     */
    public function validFirst6DataProvider()
    {
        $result = array();
        for ($i = 0; $i < 10; $i++) {
            $result[] = array(Random::str(6, '0123456789'));
        }
        return $result;
    }

    public function validCardTypeDataProvider()
    {
        $result = array();
        for ($i = 0; $i < 10; $i++) {
            $result[] = array(Random::str(3, 35));
        }

        return $result;
    }

    public function validIssuerCountryDataProvider()
    {
        return array(
            array('RU'),
            array('EN'),
            array('UK'),
            array('AU'),
            array(null),
            array(''),
        );
    }

    public function validIssuerNameDataProvider()
    {
        $result = array();
        for ($i = 0; $i < 10; $i++) {
            $result[] = array(Random::str(3, 35));
        }
        $result[] = array("");
        $result[] = array(null);

        return $result;
    }

    public function invalidLast4DataProvider()
    {
        return array(
            array(''),
            array(null),
            array(0),
            array(1),
            array(-1),
            array(array()),
            array(new \stdClass()),
            array(Random::str(3, '0123456789')),
            array(Random::str(5, '0123456789')),
        );
    }

    public function invalidFirst6DataProvider()
    {
        return array(
            array(''),
            array(null),
            array(0),
            array(1),
            array(-1),
            array(array()),
            array(new \stdClass()),
            array(Random::str(3, '0123456789')),
            array(Random::str(5, '0123456789')),
        );
    }

    public function invalidCardTypeDataProvider()
    {
        return array(
            array(''),
            array(null),
            array(true),
            array(false),
            array(array()),
            array(new \stdClass()),
        );
    }

    public function invalidIssuerCountryDataProvider()
    {
        return array(
            array(Random::str(3, 4)),
            array(true),
            array(false),
            array(array()),
            array(new \stdClass()),
        );
    }

    public function invalidIssuerNameDataProvider()
    {
        return array(
            array(true),
            array(false),
            array(array()),
            array(new \stdClass()),
        );
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