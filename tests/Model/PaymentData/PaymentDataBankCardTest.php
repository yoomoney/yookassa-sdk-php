<?php

namespace Tests\YooKassa\Model\PaymentData;

use YooKassa\Helpers\Random;
use YooKassa\Model\PaymentData\PaymentDataBankCard;
use YooKassa\Model\PaymentData\PaymentDataBankCardCard;
use YooKassa\Model\PaymentMethodType;

class PaymentDataBankCardTest extends AbstractPaymentDataTest
{
    /**
     * @return PaymentDataBankCard
     */
    protected function getTestInstance()
    {
        return new PaymentDataBankCard();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return PaymentMethodType::BANK_CARD;
    }

    /**
     * @dataProvider validCardDataProvider
     * @param PaymentDataBankCardCard $value
     */
    public function testGetSetBankCard($value)
    {
        $instance = $this->getTestInstance();

        self::assertNull($instance->getCard());
        self::assertNull($instance->card);

        $instance->setCard($value);
        if ($value === null || $value === '' || $value === array()) {
            self::assertNull($instance->getCard());
            self::assertNull($instance->card);
        } else {
            if (is_array($value)) {
                $expected = new PaymentDataBankCardCard();
                foreach ($value as $property => $val) {
                    $expected->offsetSet($property, $val);
                }
            } else {
                $expected = $value;
            }
            self::assertEquals($expected, $instance->getCard());
            self::assertEquals($expected, $instance->card);
        }

        $instance = $this->getTestInstance();
        $instance->card = $value;
        if ($value === null || $value === '' || $value === array()) {
            self::assertNull($instance->getCard());
            self::assertNull($instance->card);
        } else {
            if (is_array($value)) {
                $expected = new PaymentDataBankCardCard();
                foreach ($value as $property => $val) {
                    $expected->offsetSet($property, $val);
                }
            } else {
                $expected = $value;
            }
            self::assertEquals($expected, $instance->getCard());
            self::assertEquals($expected, $instance->card);
        }
    }

    /**
     * @dataProvider invalidCardDataProvider
     * @expectedException \InvalidArgumentException
     * @param mixed $value
     */
    public function testSetInvalidCard($value)
    {
        $this->getTestInstance()->setCard($value);
    }

    /**
     * @dataProvider invalidCardDataProvider
     * @expectedException \InvalidArgumentException
     * @param mixed $value
     */
    public function testSetterInvalidCard($value)
    {
        $this->getTestInstance()->card = $value;
    }

    public function validCardDataProvider()
    {
        return array(
            array(null),
            array(new PaymentDataBankCardCard()),
            array(array()),
            array(''),
            array(array(
                'number' => Random::str(16, '0123456789'),
            )),
        );
    }

    public function invalidCardDataProvider()
    {
        return array(
            array(0),
            array(1),
            array(-1),
            array('5'),
            array(true),
            array(new \stdClass()),
        );
    }
}