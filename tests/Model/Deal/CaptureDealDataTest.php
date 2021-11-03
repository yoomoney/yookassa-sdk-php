<?php

namespace Tests\YooKassa\Model\Deal;

use PHPUnit\Framework\TestCase;
use YooKassa\Helpers\Random;
use YooKassa\Model\Deal\CaptureDealData;
use YooKassa\Model\Deal\SettlementPayoutPayment;
use YooKassa\Model\Deal\SettlementPayoutPaymentType;

class CaptureDealDataTest extends TestCase
{

    /**
     * @dataProvider fromArrayDataProvider
     * @param array $source
     * @param CaptureDealData $expected
     */
    public function testFromArray($source, $expected)
    {
        $deal = new CaptureDealData($source);
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
                    'settlements' => null,
                )
            ),
            array(
                array(
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
                'settlements' => Random::value($invalidData),
            );
            $result[] = array($payment);
        }
        return $result;
    }

    public function fromArrayDataProvider()
    {
        $deal = new CaptureDealData();
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
