<?php

namespace Tests\YooKassa\Request\Payouts\PayoutDestinationData;

use PHPUnit\Framework\TestCase;
use YooKassa\Helpers\Random;
use YooKassa\Model\Payout\PayoutDestinationType;
use YooKassa\Model\PaymentMethodType;
use YooKassa\Request\Payouts\PayoutDestinationData\AbstractPayoutDestinationData;
use YooKassa\Request\Payouts\PayoutDestinationData\PayoutDestinationDataBankCardCard;
use YooKassa\Request\Payouts\PayoutDestinationData\PayoutDestinationDataFactory;

class PayoutDestinationDataFactoryTest extends TestCase
{
    protected function getTestInstance()
    {
        return new PayoutDestinationDataFactory();
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
        self::assertTrue($paymentData instanceof AbstractPayoutDestinationData);
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
        $paymentData = $instance->factoryFromArray($options);
        self::assertNotNull($paymentData);
        self::assertTrue($paymentData instanceof AbstractPayoutDestinationData);

        foreach ($options as $property => $value) {
            self::assertEquals($paymentData->{$property}, $value);
        }

        $type = $options['type'];
        unset($options['type']);
        $paymentData = $instance->factoryFromArray($options, $type);
        self::assertNotNull($paymentData);
        self::assertTrue($paymentData instanceof AbstractPayoutDestinationData);

        self::assertEquals($type, $paymentData->getType());
        foreach ($options as $property => $value) {
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
        foreach (PayoutDestinationType::getEnabledValues() as $value) {
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
                    'type' => PaymentMethodType::BANK_CARD,
                    'card' => new PayoutDestinationDataBankCardCard(),
                ),
            ),
            array(
                array(
                    'type' => PaymentMethodType::YOO_MONEY,
                    'account_number' => Random::str(11, 33, '1234567890')
                ),
            ),
         );
        foreach (PayoutDestinationType::getEnabledValues() as $value) {
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