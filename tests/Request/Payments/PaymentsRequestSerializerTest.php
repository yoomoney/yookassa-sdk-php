<?php

namespace Tests\YooKassa\Request\Payments;

use PHPUnit\Framework\TestCase;
use YooKassa\Model\PaymentMethodType;
use YooKassa\Model\PaymentStatus;
use YooKassa\Request\Payments\PaymentsRequest;
use YooKassa\Request\Payments\PaymentsRequestSerializer;

class PaymentsRequestSerializerTest extends TestCase
{
    private $fieldMap = array(
        'createdAtGte'       => 'created_at.gte',
        'createdAtGt'        => 'created_at.gt',
        'createdAtLte'       => 'created_at.lte',
        'createdAtLt'        => 'created_at.lt',
        'capturedAtGte'      => 'captured_at.gte',
        'capturedAtGt'       => 'captured_at.gt',
        'capturedAtLte'      => 'captured_at.lte',
        'capturedAtLt'       => 'captured_at.lt',
        'status'             => 'status',
        'paymentMethod'      => 'payment_method',
        'limit'              => 'limit',
        'cursor'             => 'cursor',
    );

    /**
     * @dataProvider validDataProvider
     * @param $options
     */
    public function testSerialize($options)
    {
        $serializer = new PaymentsRequestSerializer();
        $data       = $serializer->serialize(PaymentsRequest::builder()->build($options));

        $expected = array();
        foreach ($this->fieldMap as $field => $mapped) {
            if (isset($options[$field])) {
                $value = $options[$field];
                if (!empty($value)) {
                    $expected[$mapped] = $value instanceof \DateTime ? $value->format(DATE_ATOM) : $value;
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
                    'capturedAtGte'      => '',
                    'capturedAtGt'       => '',
                    'capturedAtLte'      => '',
                    'capturedAtLt'       => '',
                    'paymentMethod'      => '',
                    'status'             => '',
                    'limit'              => 0,
                    'cursor'             => '',
                ),
            ),
        );
        $statuses = PaymentStatus::getValidValues();
        $methods  = PaymentMethodType::getValidValues();
        for ($i = 0; $i < 10; $i++) {
            $request  = array(
                'createdAtGte'       => date(DATE_ATOM, mt_rand(1, time())),
                'createdAtGt'        => date(DATE_ATOM, mt_rand(1, time())),
                'createdAtLte'       => date(DATE_ATOM, mt_rand(1, time())),
                'createdAtLt'        => date(DATE_ATOM, mt_rand(1, time())),
                'capturedAtGte'      => date(DATE_ATOM, mt_rand(1, time())),
                'capturedAtGt'       => date(DATE_ATOM, mt_rand(1, time())),
                'capturedAtLte'      => date(DATE_ATOM, mt_rand(1, time())),
                'capturedAtLt'       => date(DATE_ATOM, mt_rand(1, time())),
                'paymentMethod'      => $methods[mt_rand(0, count($methods) - 1)],
                'status'             => $statuses[mt_rand(0, count($statuses) - 1)],
                'limit'              => mt_rand(1, 100),
                'cursor'             => $this->randomString(mt_rand(1, 30)),
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