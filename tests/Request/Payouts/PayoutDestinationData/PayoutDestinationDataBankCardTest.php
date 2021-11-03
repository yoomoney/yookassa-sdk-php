<?php

namespace Tests\YooKassa\Request\Payouts\PayoutDestinationData;

use YooKassa\Helpers\Random;
use YooKassa\Model\PaymentMethodType;
use YooKassa\Request\Payouts\PayoutDestinationData\PayoutDestinationDataBankCard;
use YooKassa\Request\Payouts\PayoutDestinationData\PayoutDestinationDataBankCardCard;

class PayoutDestinationDataBankCardTest extends AbstractPayoutDestinationDataTest
{
    /**
     * @return PayoutDestinationDataBankCard
     */
    protected function getTestInstance()
    {
        return new PayoutDestinationDataBankCard();
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
     * @param PayoutDestinationDataBankCardCard $value
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
                $expected = new PayoutDestinationDataBankCardCard();
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
                $expected = new PayoutDestinationDataBankCardCard($value);
            } else {
                $expected = $value;
            }
            self::assertEquals($expected, $instance->getCard());
            self::assertEquals($expected, $instance->card);

            self::assertEquals($expected['number'], $instance->getCard()->getNumber());
            self::assertEquals($expected['number'], $instance->card->number);
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
            array(new PayoutDestinationDataBankCardCard()),
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
            array(new \Datetime()),
            array(array('number' => '')),
            array(array('number' => null)),
            array(array('number' => new \Datetime())),
            array(array('number' => Random::str(16))),
        );
    }
}