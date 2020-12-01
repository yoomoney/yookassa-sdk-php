<?php

namespace Tests\YooKassa\Model\PaymentMethod;

use YooKassa\Helpers\Random;
use YooKassa\Helpers\StringObject;
use YooKassa\Model\PaymentMethod\BankCardSource;
use YooKassa\Model\PaymentMethod\PaymentMethodBankCard;
use YooKassa\Model\PaymentMethodType;

class PaymentMethodBankCardTest extends AbstractPaymentMethodTest
{
    /**
     * @return PaymentMethodBankCard
     */
    protected function getTestInstance()
    {
        return new PaymentMethodBankCard();
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
     * @dataProvider validSourceDataProvider
     * @param $value
     */
    public function testGetSetSource($value)
    {
        $this->getAndSetTest($value, 'source', 'source');
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
     * @dataProvider invalidSourceDataProvider
     * @expectedException \InvalidArgumentException
     * @param mixed $value
     */
    public function testSetInvalidSource($value)
    {
        $this->getTestInstance()->setSource($value);
    }

    /**
     * @dataProvider invalidSourceDataProvider
     * @expectedException \InvalidArgumentException
     * @param mixed $value
     */
    public function testSetterInvalidSource($value)
    {
        $this->getTestInstance()->source = $value;
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

    public function validSourceDataProvider()
    {
        $result = array();
        foreach (BankCardSource::getValidValues() as $value) {
            $result[] = array($value);
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

    public function invalidSourceDataProvider()
    {
        return array(
            array(Random::str(3, 6)),
            array(Random::int(1, 2)),
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