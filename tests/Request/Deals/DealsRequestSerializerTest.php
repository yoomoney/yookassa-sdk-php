<?php

namespace Tests\YooKassa\Request\Deals;

use PHPUnit\Framework\TestCase;
use YooKassa\Helpers\Random;
use YooKassa\Model\Deal\DealStatus;
use YooKassa\Model\SafeDeal;
use YooKassa\Request\Deals\DealsRequest;
use YooKassa\Request\Deals\DealsRequestSerializer;

class DealsRequestSerializerTest extends TestCase
{
    private $fieldMap = array(
        'createdAtGte'    => 'created_at.gte',
        'createdAtGt'     => 'created_at.gt',
        'createdAtLte'    => 'created_at.lte',
        'createdAtLt'     => 'created_at.lt',
        'expiresAtGte'    => 'expires_at.gte',
        'expiresAtGt'     => 'expires_at.gt',
        'expiresAtLte'    => 'expires_at.lte',
        'expiresAtLt'     => 'expires_at.lt',
        'status'          => 'status',
        'fullTextSearch'  => 'full_text_search',
        'limit'           => 'limit',
        'cursor'          => 'cursor',
    );

    /**
     * @dataProvider validDataProvider
     * @param $options
     */
    public function testSerialize($options)
    {
        $serializer = new DealsRequestSerializer();
        $data       = $serializer->serialize(DealsRequest::builder()->build($options));

        $expected = array();
        foreach ($this->fieldMap as $field => $mapped) {
            if (isset($options[$field])) {
                $value = $options[$field];
                if (!empty($value)) {
                    $expected[$mapped] = $value instanceof \DateTime ? $value->format(YOOKASSA_DATE) : $value;
                }
            }
        }
        self::assertEquals($expected, $data);
    }

    public function validDataProvider()
    {
        $result   = array(
            array(
                array(),
            ),
            array(
                array(
                    'createdAtGte'       => '',
                    'createdAtGt'        => '',
                    'createdAtLte'       => '',
                    'createdAtLt'        => '',
                    'expiresAtGte'      => '',
                    'expiresAtGt'       => '',
                    'expiresAtLte'      => '',
                    'expiresAtLt'       => '',
                    'fullTextSearch'      => '',
                    'status'             => '',
                    'limit'              => 0,
                    'cursor'             => '',
                ),
            ),
        );
        $statuses = DealStatus::getValidValues();
        for ($i = 0; $i < 10; $i++) {
            $request  = array(
                'createdAtGte'   => date(YOOKASSA_DATE, mt_rand(1, time())),
                'createdAtGt'    => date(YOOKASSA_DATE, mt_rand(1, time())),
                'createdAtLte'   => date(YOOKASSA_DATE, mt_rand(1, time())),
                'createdAtLt'    => date(YOOKASSA_DATE, mt_rand(1, time())),
                'expiresAtGte'   => date(YOOKASSA_DATE, mt_rand(1, time())),
                'expiresAtGt'    => date(YOOKASSA_DATE, mt_rand(1, time())),
                'expiresAtLte'   => date(YOOKASSA_DATE, mt_rand(1, time())),
                'expiresAtLt'    => date(YOOKASSA_DATE, mt_rand(1, time())),
                'fullTextSearch' => Random::str(DealsRequest::MIN_LENGTH_DESCRIPTION, SafeDeal::MAX_LENGTH_DESCRIPTION),
                'status'         => $statuses[mt_rand(0, count($statuses) - 1)],
                'limit'          => mt_rand(1, 100),
                'cursor'         => $this->randomString(mt_rand(1, 30)),
            );
            $result[] = array($request);
        }
        return $result;
    }

    private function randomString($length, $any = true)
    {
        static $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ-+_.';

        $result = '';
        for ($i = 0; $i < $length; $i++) {
            if ($any) {
                $char = chr(mt_rand(32, 126));
            } else {
                $rnd  = mt_rand(0, strlen($chars) - 1);
                $char = substr($chars, $rnd, 1);
            }
            $result .= $char;
        }
        return $result;
    }
}