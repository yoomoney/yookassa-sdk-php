<?php

namespace Tests\YooKassa\Model\PaymentMethodTest;

use PHPUnit\Framework\TestCase;
use YooKassa\Helpers\Random;
use YooKassa\Model\PaymentMethod\AbstractPaymentMethod;
use YooKassa\Model\PaymentMethod\PaymentMethodFactory;
use YooKassa\Model\PaymentMethodType;

class PaymentMethodFactoryTest extends TestCase
{
    /**
     * @return PaymentMethodFactory
     */
    protected function getTestInstance()
    {
        return new PaymentMethodFactory();
    }

    /**
     * @dataProvider validTypeDataProvider
     * @param string $type
     */
    public function testFactory($type)
    {
        $instance = $this->getTestInstance();
        $paymentData = $instance->factory($type);
        self::assertNotNull($paymentData);
        self::assertTrue($paymentData instanceof AbstractPaymentMethod);
        self::assertEquals($type, $paymentData->getType());
    }

    /**
     * @dataProvider invalidTypeDataProvider
     * @expectedException \InvalidArgumentException
     * @param $type
     */
    public function testInvalidFactory($type)
    {
        $instance = $this->getTestInstance();
        $instance->factory($type);
    }

    /**
     * @dataProvider validArrayDataProvider
     * @param array $options
     */
    public function testFactoryFromArray($options)
    {
        $instance = $this->getTestInstance();

        $optionsMap = array(
            'card_type'      => 'cardType',
            'expiry_month'   => 'expiryMonth',
            'expiry_year'    => 'expiryYear',
            'account_number' => 'accountNumber',
        );

        $paymentData = $instance->factoryFromArray($options);
        self::assertNotNull($paymentData);
        self::assertTrue($paymentData instanceof AbstractPaymentMethod);

        foreach ($options as $property => $value) {
            if (array_key_exists($property, $optionsMap)) {
                $property = $optionsMap[$property];
            }
            self::assertEquals($paymentData->{$property}, $value);
        }

        $type = $options['type'];
        unset($options['type']);
        $paymentData = $instance->factoryFromArray($options, $type);
        self::assertNotNull($paymentData);
        self::assertTrue($paymentData instanceof AbstractPaymentMethod);

        self::assertEquals($type, $paymentData->getType());
        foreach ($options as $property => $value) {
            if (array_key_exists($property, $optionsMap)) {
                $property = $optionsMap[$property];
            }
            self::assertEquals($paymentData->{$property}, $value);
        }
    }

    /**
     * @dataProvider invalidDataArrayDataProvider
     * @expectedException \InvalidArgumentException
     * @param $options
     */
    public function testInvalidFactoryFromArray($options)
    {
        $instance = $this->getTestInstance();
        $instance->factoryFromArray($options);
    }

    public function validTypeDataProvider()
    {
        $result = array();
        foreach (PaymentMethodType::getValidValues() as $value) {
            $result[] = array($value);
        }
        return $result;
    }

    public function invalidTypeDataProvider()
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
            array(Random::str(10)),
        );
    }

    public function validArrayDataProvider()
    {
        $result = array(
            array(
                array(
                    'type'     => PaymentMethodType::ALFABANK,
                    'login'    => Random::str(10, 20),
                    'id'       => Random::str(1, 64),
                    'saved'    => Random::int() % 2 ? true : false,
                    'title'    => Random::str(10, 20),
                ),
            ),
            array(
                array(
                    'type'     => PaymentMethodType::GOOGLE_PAY,
                    'id'       => Random::str(1, 64),
                    'saved'    => Random::int() % 2 ? true : false,
                    'title'    => Random::str(10, 20),
                ),
            ),
            array(
                array(
                    'type'     => PaymentMethodType::APPLE_PAY,
                    'id'       => Random::str(1, 64),
                    'saved'    => Random::int() % 2 ? true : false,
                    'title'    => Random::str(10, 20),
                ),
            ),
            array(
                array(
                    'type'        => PaymentMethodType::BANK_CARD,
                    'id'          => Random::str(1, 64),
                    'saved'       => Random::int() % 2 ? true : false,
                    'title'       => Random::str(10, 20),
                    'last4'       => Random::str(4, '0123456789'),
                    'first6'      => Random::str(6, '0123456789'),
                    'expiryYear'  => Random::int(2000, 2200),
                    'expiryMonth' => Random::value(array('01','02','03','04','05','06','07','08','09','10','11','12')),
                    'cardType'    => Random::str(3, 10),
                ),
            ),
            array(
                array(
                    'type'         => PaymentMethodType::BANK_CARD,
                    'id'           => Random::str(1, 64),
                    'saved'        => Random::int() % 2 ? true : false,
                    'title'        => Random::str(10, 20),
                    'last4'        => Random::str(4, '0123456789'),
                    'first6'       => Random::str(6, '0123456789'),
                    'expiry_year'  => Random::int(2000, 2200),
                    'expiry_month' => Random::value(array('01','02','03','04','05','06','07','08','09','10','11','12')),
                    'card_type'    => Random::str(3, 10),
                ),
            ),
            array(
                array(
                    'type'     => PaymentMethodType::CASH,
                    'id'       => Random::str(1, 64),
                    'saved'    => Random::int() % 2 ? true : false,
                    'title'    => Random::str(10, 20),
                ),
            ),
            array(
                array(
                    'type'     => PaymentMethodType::MOBILE_BALANCE,
                    'id'       => Random::str(1, 64),
                    'saved'    => Random::int() % 2 ? true : false,
                    'title'    => Random::str(10, 20),
                    'phone'    => Random::str(4, 15, '0123456789'),
                ),
            ),
            array(
                array(
                    'type'     => PaymentMethodType::SBERBANK,
                    'phone'    => Random::str(4, 15, '0123456789'),
                    'id'       => Random::str(1, 64),
                    'saved'    => Random::int() % 2 ? true : false,
                    'title'    => Random::str(10, 20),
                ),
            ),
            array(
                array(
                    'type'          => PaymentMethodType::YOO_MONEY,
                    'accountNumber' => Random::str(31, '0123456789'),
                    'id'            => Random::str(1, 64),
                    'saved'         => Random::int() % 2 ? true : false,
                    'title'         => Random::str(10, 20),
                ),
            ),
            array(
                array(
                    'type'           => PaymentMethodType::YOO_MONEY,
                    'account_number' => Random::str(31, '0123456789'),
                    'id'             => Random::str(1, 64),
                    'saved'          => Random::int() % 2 ? true : false,
                    'title'          => Random::str(10, 20),
                ),
            ),
            array(
                array(
                    'type'           => PaymentMethodType::INSTALLMENTS,
                    'id'             => Random::str(1, 64),
                    'saved'          => true,
                    'title'          => Random::str(10, 20),
                ),
            ),
            array(
                array(
                    'type'           => PaymentMethodType::B2B_SBERBANK,
                    'id'             => Random::str(1, 64),
                    'saved'          => false,
                ),
            ),
            array(
                array(
                    'type'           => PaymentMethodType::TINKOFF_BANK,
                    'id'             => Random::str(1, 64),
                    'saved'          => false,
                ),
            ),
        );
        foreach (PaymentMethodType::getValidValues() as $value) {
            $result[] = array(array('type' => $value));
        }
        return $result;
    }

    public function invalidDataArrayDataProvider()
    {
        return array(
            array(array()),
            array(array('type' => 'test')),
        );
    }
}