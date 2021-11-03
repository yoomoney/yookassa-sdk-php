<?php

namespace Tests\YooKassa\Model\Deal;

use PHPUnit\Framework\TestCase;
use YooKassa\Helpers\Random;
use YooKassa\Model\Deal\PaymentDealInfo;
use YooKassa\Model\Deal\SettlementPayoutPayment;
use YooKassa\Model\Deal\SettlementPayoutPaymentType;

class PaymentDealInfoTest extends TestCase
{
    /**
     * @dataProvider validDataProvider
     * @param array $options
     */
    public function testGetSetId($options)
    {
        $instance = new PaymentDealInfo();

        self::assertNull($instance->getId());
        self::assertNull($instance->id);

        $instance->setId($options['id']);
        self::assertEquals($options['id'], $instance->getId());
        self::assertEquals($options['id'], $instance->id);

        $instance = new PaymentDealInfo();
        $instance->id = $options['id'];
        self::assertEquals($options['id'], $instance->getId());
        self::assertEquals($options['id'], $instance->id);
    }

    /**
     * @dataProvider fromArrayDataProvider
     * @param array $source
     * @param PaymentDealInfo $expected
     */
    public function testFromArray($source, $expected)
    {
        $deal = new PaymentDealInfo($source);
        $dealArray = $expected->toArray();

        if (!empty($deal)) {
            foreach ($deal->toArray() as $property => $value) {
                self::assertEquals($value, $dealArray[$property]);
            }
        }
    }

    public function validDataProvider()
    {
        $result = array();
        for ($i = 0; $i < 10; $i++) {
            $payment = array(
                'id' => Random::str(36, 50),
                'settlements' => $this->generateSettlements(),
            );
            $result[] = array($payment);
        }
        return $result;
    }

    public function invalidDataProvider()
    {
        $result = array(
            array(
                array(
                    'id' => null,
                    'settlements' => null,
                )
            ),
            array(
                array(
                    'id' => '',
                    'settlements' => '',
                ),
            ),
        );
        $invalidData = array(
            array(null),
            array(''),
            array(new \stdClass()),
            array('invalid_value'),
            array(0),
            array(3234),
            array(true),
            array(false),
            array(0.43),
        );
        for ($i = 0; $i < 9; $i++) {
            $payment = array(
                'id' => Random::str($i < 5 ? mt_rand(1, 35) : mt_rand(51, 64)),
                'settlements' => Random::value($invalidData),
            );
            $result[] = array($payment);
        }
        return $result;
    }

    public function fromArrayDataProvider()
    {
        $deal = new PaymentDealInfo();
        $deal->setId('dl-285e5ee7-0022-5000-8000-01516a44b147');
        $settlements = array();
        $settlements[] = new SettlementPayoutPayment(array(
            'type' => SettlementPayoutPaymentType::PAYOUT,
            'amount' => array(
                'value' => 123.00,
                'currency' => 'RUB',
            ),
        ));
        $deal->setSettlements($settlements);

        return array(
            array(
                array(
                    'id' => 'dl-285e5ee7-0022-5000-8000-01516a44b147',
                    'settlements' => array(
                        array(
                            'type' => SettlementPayoutPaymentType::PAYOUT,
                            'amount' => array(
                                'value' => 123.00,
                                'currency' => 'RUB',
                            ),
                        )
                    ),
                ),
                $deal
            ),
        );
    }

    private function generateSettlements()
    {
        $return = array();
        $count = Random::int(1, 10);

        for ($i=0; $i < $count; $i++) {
            $return[] = $this->generateSettlement();
        }

        return $return;
    }

    private function generateSettlement()
    {
        return array(
            'type' => Random::value(SettlementPayoutPaymentType::getValidValues()),
            'amount' => array(
                'value' => round(Random::float(1.00, 100.00), 2),
                'currency' => 'RUB',
            ),
        );
    }

}
