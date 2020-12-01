<?php

namespace Tests\YooKassa\Model\PaymentData;

use PHPUnit\Framework\TestCase;
use YooKassa\Helpers\Random;
use YooKassa\Model\PaymentMethod\B2b\Sberbank\PayerBankDetails;

class PayerBankDetailsTest extends TestCase
{
    /**
     * @return PayerBankDetails
     */
    protected function getTestInstance()
    {
        return new PayerBankDetails();
    }

    /**
     * @dataProvider validStringDataProvider
     * @param string $value
     */
    public function testGetSetFullName($value)
    {
        $this->getAndSetTest($value, 'fullName');
    }

    /**
     * @dataProvider validStringDataProvider
     * @param string $value
     */
    public function testGetSetShortName($value)
    {
        $this->getAndSetTest($value, 'shortName');
    }

    /**
     * @dataProvider validStringDataProvider
     * @param string $value
     */
    public function testGetSetAddress($value)
    {
        $this->getAndSetTest($value, 'address');
    }

    /**
     * @dataProvider validStringDataProvider
     * @param string $value
     */
    public function testGetSetInn($value)
    {
        $this->getAndSetTest($value, 'inn');
    }

    /**
     * @dataProvider validStringDataProvider
     * @param string $value
     */
    public function testGetSetKpp($value)
    {
        $this->getAndSetTest($value, 'kpp');
    }

    /**
     * @dataProvider validStringDataProvider
     * @param string $value
     */
    public function testGetSetBankName($value)
    {
        $this->getAndSetTest($value, 'bankName');
    }

    /**
     * @dataProvider validStringDataProvider
     * @param string $value
     */
    public function testGetSetBankBranch($value)
    {
        $this->getAndSetTest($value, 'bankBranch');
    }

    /**
     * @dataProvider validStringDataProvider
     * @param string $value
     */
    public function testGetSetBankBik($value)
    {
        $this->getAndSetTest($value, 'bankBik');
    }

    /**
     * @dataProvider validStringDataProvider
     * @param string $value
     */
    public function testGetSetAccount($value)
    {
        $this->getAndSetTest($value, 'account');
    }

    /**
     * @return array
     * @throws \Exception
     */
    public function validStringDataProvider()
    {
        $result = array(array(Random::str(10)));

        return $result;
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