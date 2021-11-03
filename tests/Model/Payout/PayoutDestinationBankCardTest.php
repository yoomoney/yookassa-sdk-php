<?php

namespace Tests\YooKassa\Model\Payout;

use YooKassa\Helpers\Random;
use YooKassa\Model\Payout\PayoutDestinationBankCard;
use YooKassa\Model\Payout\PayoutDestinationBankCardCard;
use YooKassa\Model\PaymentMethodType;

class PayoutDestinationBankCardTest extends AbstractPayoutDestinationTest
{
    /**
     * @return PayoutDestinationBankCard
     */
    protected function getTestInstance()
    {
        return new PayoutDestinationBankCard();
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
     * @param PayoutDestinationBankCardCard $value
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
                $expected = new PayoutDestinationBankCardCard();
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
                $expected = new PayoutDestinationBankCardCard();
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
            array(new PayoutDestinationBankCardCard()),
            array(array()),
            array(''),
            array(array(
                'first6' => Random::str(6, '0123456789'),
                'last4' => Random::str(4, '0123456789'),
                'card_type' => 'Visa',
                'issuer_country' => 'RU',
                'issuer_name' => 'SberBank',
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