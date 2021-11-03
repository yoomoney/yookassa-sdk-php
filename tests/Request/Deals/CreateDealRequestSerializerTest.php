<?php

namespace Tests\YooKassa\Request\Deals;

use PHPUnit\Framework\TestCase;
use YooKassa\Helpers\Random;
use YooKassa\Model\Deal\DealType;
use YooKassa\Model\Deal\FeeMoment;
use YooKassa\Request\Deals\CreateDealRequest;
use YooKassa\Request\Deals\CreateDealRequestSerializer;

class CreateDealRequestSerializerTest extends TestCase
{

    /**
     * @dataProvider validDataProvider
     *
     * @param $options
     */
    public function testSerialize($options)
    {
        $serializer = new CreateDealRequestSerializer();
        $instance   = CreateDealRequest::builder()->build($options);
        $data       = $serializer->serialize($instance);

        $expected = array(
            'type' => $options['type'],
            'fee_moment' => $options['fee_moment'],
        );

        if (!empty($options['metadata'])) {
            $expected['metadata'] = array();
            foreach ($options['metadata'] as $key => $value) {
                $expected['metadata'][$key] = $value;
            }
        }

        if (!empty($options['description'])) {
            $expected['description'] = $options['description'];
        }

        self::assertEquals($expected, $data);
    }

    /**
     * @return array
     * @throws \Exception
     */
    public function validDataProvider()
    {
        $result = array(
            array(
                array(
                    'type' => Random::value(DealType::getValidValues()),
                    'fee_moment' => Random::value(FeeMoment::getValidValues()),
                    'description' => null,
                    'metadata' => null,
                ),
            ),
            array(
                array(
                    'type' => Random::value(DealType::getValidValues()),
                    'fee_moment' => Random::value(FeeMoment::getValidValues()),
                    'description' => '',
                    'metadata' => array(),
                ),
            ),
        );
        for ($i = 0; $i < 10; $i++) {
            $request = array(
                'type' => Random::value(DealType::getValidValues()),
                'fee_moment' => Random::value(FeeMoment::getValidValues()),
                'description' => Random::str(1, 128),
                'metadata' => array(Random::str(1, 30) => Random::str(1, 128)),
            );
            $result[] = array($request);
        }

        return $result;
    }
}
