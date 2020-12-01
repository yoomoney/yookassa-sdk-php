<?php

namespace Tests\YooKassa\Model\PaymentData;

use PHPUnit\Framework\TestCase;
use YooKassa\Helpers\Random;
use YooKassa\Model\CurrencyCode;
use YooKassa\Model\MonetaryAmount;
use YooKassa\Model\PaymentData\B2b\Sberbank\VatData;
use YooKassa\Model\PaymentData\B2b\Sberbank\VatDataRate;
use YooKassa\Model\PaymentData\B2b\Sberbank\VatDataType;

class VatDataTest extends TestCase
{
    /**
     * @return VatData
     */
    protected function getTestInstance()
    {
        return new VatData();
    }

    /**
     * @dataProvider validConstructDataProvider
     * @param array $value
     */
    public function testConstruct($value)
    {
        $instance = new VatData($value['type'], $value['rate'], $value['amount']);

        self::assertEquals($value['type'], $instance->getType());
        self::assertEquals($value['rate'], $instance->getRate());
        self::assertEquals($value['amount']->getValue(), $instance->getAmount()->getValue());

    }

    /**
     * @dataProvider validTypeDataProvider
     * @param string $value
     */
    public function testGetSetType($value)
    {
        $this->getAndSetTest($value, 'type');
    }

    /**
     * @dataProvider invalidTypeDataProvider
     * @expectedException \InvalidArgumentException
     * @param mixed $value
     */
    public function testSetInvalidType($value)
    {
        $this->getTestInstance()->setType($value);
    }

    /**
     * @return array
     * @throws \Exception
     */
    public function validConstructDataProvider()
    {
        $result = array(
            array(
                array(
                    'type'   => VatDataType::CALCULATED,
                    'rate'   => VatDataRate::RATE_18,
                    'amount' => new MonetaryAmount(Random::int(1, 1000))
                ),
            ),
        );

        return $result;
    }

    /**
     * @return array
     * @throws \Exception
     */
    public function validTypeDataProvider()
    {
        $result = array(
            array(VatDataType::CALCULATED),
            array(VatDataType::UNTAXED),
        );

        return $result;
    }

    /**
     * @return array
     * @throws \Exception
     */
    public function invalidTypeDataProvider()
    {
        return array(
            array(''),
            array(null),
            array(0),
            array(1),
            array(-1),
            array(array()),
            array(new \stdClass()),
            array(Random::str(20)),
        );
    }

    /**
     * @dataProvider validRateDataProvider
     * @param string $value
     */
    public function testGetSetRate($value)
    {
        $this->getAndSetTest($value, 'rate');
    }

    /**
     * @dataProvider invalidRateDataProvider
     * @expectedException \InvalidArgumentException
     * @param mixed $value
     */
    public function testSetInvalidRate($value)
    {
        $this->getTestInstance()->setRate($value);
    }

    /**
     * @return array
     * @throws \Exception
     */
    public function validRateDataProvider()
    {
        $result = array(
            array(VatDataRate::RATE_7),
            array(VatDataRate::RATE_10),
            array(VatDataRate::RATE_18),
            array(VatDataRate::RATE_20),
        );

        return $result;
    }

    /**
     * @return array
     * @throws \Exception
     */
    public function invalidRateDataProvider()
    {
        return array(
            array(''),
            array(null),
            array(0),
            array(1),
            array(-1),
            array(array()),
            array(new \stdClass()),
            array(Random::str(20)),
        );
    }

    /**
     * @dataProvider validDataProvider
     * @param array $value
     */
    public function testGetSetAmount($value)
    {
        $instance = $this->getTestInstance();

        self::assertNull($instance->getAmount());
        self::assertNull($instance->amount);

        $instance->setAmount($value);
        if (is_array($value)) {
            self::assertSame($value['value'], (int)$instance->getAmount()->getValue());
            self::assertSame($value['currency'], $instance->amount->getCurrency());
        } else {
            self::assertSame($value, $instance->getAmount());
            self::assertSame($value, $instance->amount);
        }

        $instance = $this->getTestInstance();

        $instance->amount = $value;
        if (is_array($value)) {
            self::assertSame($value['value'], (int)$instance->getAmount()->getValue());
            self::assertSame($value['currency'], $instance->amount->getCurrency());
        } else {
            self::assertSame($value, $instance->getAmount());
            self::assertSame($value, $instance->amount);
        }
    }

    /**
     * @dataProvider invalidDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetInvalidAmount($value)
    {
        self::setExpectedException('InvalidArgumentException');
        $instance = $this->getTestInstance();
        $instance->setAmount($value);
    }

    /**
     * @return array
     * @throws \Exception
     */
    public function validDataProvider()
    {
        $result = array(
            array(null),
            array(
                array(
                    'value'    => Random::int(1, 1000),
                    'currency' => CurrencyCode::EUR,
                )
            ),
            array(new MonetaryAmount(Random::int(1, 10000), CurrencyCode::RUB))
        );

        return $result;
    }

    /**
     * @return array
     * @throws \Exception
     */
    public function invalidDataProvider()
    {
        return array(
            array(''),
            array(0),
            array(1),
            array(-1),
            //array(array()),
            array(new \stdClass()),
            array(Random::str(20)),
        );
    }

    /**
     * @param $value
     * @param string $property
     * @param null $snakeCase
     */
    protected function getAndSetTest($value, $property, $snakeCase = null)
    {
        $getter = 'get'.ucfirst($property);
        $setter = 'set'.ucfirst($property);

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