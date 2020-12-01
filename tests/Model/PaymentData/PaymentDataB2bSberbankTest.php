<?php

namespace Tests\YooKassa\Model\PaymentData;

use YooKassa\Helpers\Random;
use YooKassa\Model\CurrencyCode;
use YooKassa\Model\MonetaryAmount;
use YooKassa\Model\PaymentData\B2b\Sberbank\VatData;
use YooKassa\Model\PaymentData\B2b\Sberbank\VatDataRate;
use YooKassa\Model\PaymentData\B2b\Sberbank\VatDataType;
use YooKassa\Model\PaymentData\PaymentDataB2bSberbank;
use YooKassa\Model\PaymentMethodType;

class PaymentDataB2bSberbankTest extends AbstractPaymentDataTest
{
    /**
     * @return PaymentDataB2bSberbank
     */
    protected function getTestInstance()
    {
        return new PaymentDataB2bSberbank();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return PaymentMethodType::B2B_SBERBANK;
    }

    /**
     * @dataProvider validPaymentPurposeDataProvider
     * @param string $value
     */
    public function testGetSetPaymentPurpose($value)
    {
        $instance = $this->getTestInstance();

        self::assertNull($instance->getPaymentPurpose());
        self::assertNull($instance->paymentPurpose);

        $instance->setPaymentPurpose($value);

        self::assertEquals($value, $instance->getPaymentPurpose());
        self::assertEquals($value, $instance->paymentPurpose);
    }

    /**
     * @dataProvider invalidPaymentPurposeDataProvider
     * @expectedException \InvalidArgumentException
     * @param mixed $value
     */
    public function testSetInvalidPaymentPurpose($value)
    {
        $this->getTestInstance()->setPaymentPurpose($value);
    }

    /**
     * @return array
     * @throws \Exception
     */
    public function validPaymentPurposeDataProvider()
    {
        return array(
            array(Random::str(16)),
        );
    }

    /**
     * @return array
     * @throws \Exception
     */
    public function invalidPaymentPurposeDataProvider()
    {
        return array(
            array(''),
            array(true),
            array(new \stdClass()),
            array(Random::str(211)),
        );
    }


    /**
     * @dataProvider validVatDataDataProvider
     * @param mixed $value
     */
    public function testGetSetVatData($value)
    {
        $instance = $this->getTestInstance();

        self::assertNull($instance->getPaymentPurpose());
        self::assertNull($instance->paymentPurpose);

        $instance->setVatData($value);

        if (is_array($value)) {
            self::assertEquals($value['type'], $instance->getVatData()->getType());
            self::assertEquals($value['type'], $instance->vatData->getType());
            if (isset($value['rate'])) {
                self::assertEquals($value['rate'], $instance->getVatData()->getRate());
                self::assertEquals($value['rate'], $instance->vatData->getRate());
            }
            if (isset($value['amount'])) {
                if (is_array($value['amount'])) {
                    self::assertEquals($value['amount']['value'],
                        (int)$instance->getVatData()->getAmount()->getValue());
                    self::assertEquals($value['amount']['currency'], $instance->vatData->getAmount()->getCurrency());
                } else {
                    self::assertEquals($value['amount'], $instance->getVatData()->getAmount());
                    self::assertEquals($value['amount'], $instance->vatData->getAmount());
                }
            }
        } else {
            self::assertEquals($value, $instance->getVatData());
            self::assertEquals($value, $instance->vatData);
        }
    }

    /**
     * @dataProvider invalidVatDataDataProvider
     * @expectedException \InvalidArgumentException
     * @param mixed $value
     */
    public function testSetInvalidVatData($value)
    {
        $this->getTestInstance()->setVatData($value);
    }

    /**
     * @return array
     * @throws \Exception
     */
    public function validVatDataDataProvider()
    {
        return array(
            array(null),
            array(new VatData(VatDataType::UNTAXED)),
            array(new VatData(VatDataType::CALCULATED, VatDataRate::RATE_7, new MonetaryAmount(Random::int(1, 10000)))),
            array(
                array(
                    'type' => VatDataType::UNTAXED,
                )
            ),
            array(
                array(
                    'type'   => VatDataType::CALCULATED,
                    'rate'   => VatDataRate::RATE_10,
                    'amount' => new MonetaryAmount(Random::int(1, 10000), CurrencyCode::EUR),
                )
            ),
            array(
                array(
                    'type'   => VatDataType::MIXED,
                    'amount' => new MonetaryAmount(Random::int(1, 10000), CurrencyCode::EUR),
                )
            ),
            array(
                array(
                    'type'   => VatDataType::CALCULATED,
                    'rate'   => VatDataRate::RATE_20,
                    'amount' => array(
                        'value'    => Random::int(1, 10000),
                        'currency' => CurrencyCode::USD,
                    ),
                )
            ),
        );
    }

    /**
     * @return array
     * @throws \Exception
     */
    public function invalidVatDataDataProvider()
    {
        return array(
            array(0),
            array(1),
            array(-1),
            array(''),
            array(true),
            array(new \stdClass()),
            array(
                array(
                    'type'   => VatDataType::CALCULATED,
                    'rate'   => VatDataRate::RATE_10,
                    'amount' => Random::str(10),
                )
            ),

        );
    }
}