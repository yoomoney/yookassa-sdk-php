<?php

namespace Tests\YooKassa\Model\Deal;

use PHPUnit\Framework\TestCase;
use YooKassa\Helpers\Random;
use YooKassa\Model\Deal\PayoutDealInfo;

class PayoutDealInfoTest extends TestCase
{
    /**
     * @dataProvider validDataProvider
     * @param array $options
     */
    public function testGetSetId($options)
    {
        $instance = new PayoutDealInfo();

        self::assertNull($instance->getId());
        self::assertNull($instance->id);

        $instance->setId($options['id']);
        self::assertEquals($options['id'], $instance->getId());
        self::assertEquals($options['id'], $instance->id);

        $instance = new PayoutDealInfo();
        $instance->id = $options['id'];
        self::assertEquals($options['id'], $instance->getId());
        self::assertEquals($options['id'], $instance->id);
    }

    /**
     * @dataProvider fromArrayDataProvider
     * @param array $source
     * @param PayoutDealInfo $expected
     */
    public function testFromArray($source, $expected)
    {
        $deal = new PayoutDealInfo($source);
        $dealArray = $expected->toArray();

        if (!empty($source)) {
            foreach ($source as $property => $value) {
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
                )
            ),
            array(
                array(
                    'id' => '',
                ),
            ),
        );

        for ($i = 0; $i < 9; $i++) {
            $payment = array(
                'id' => Random::str($i < 5 ? mt_rand(1, 35) : mt_rand(51, 64)),
            );
            $result[] = array($payment);
        }
        return $result;
    }

    public function fromArrayDataProvider()
    {
        $customer = new PayoutDealInfo();
        $customer->setId('dl-285e5ee7-0022-5000-8000-01516a44b147');

        return array(
            array(
                array(
                    'id' => 'dl-285e5ee7-0022-5000-8000-01516a44b147',
                ),
                $customer
            ),
        );
    }

}
