<?php

namespace Tests\YooKassa\Request\Refunds;

use PHPUnit\Framework\TestCase;
use YooKassa\Helpers\Random;
use YooKassa\Model\CurrencyCode;
use YooKassa\Request\Refunds\CreateRefundRequest;
use YooKassa\Request\Refunds\CreateRefundRequestSerializer;

class CreateRefundRequestSerializerTest extends TestCase
{
    /**
     * @dataProvider validDataProvider
     * @param $options
     */
    public function testSerialize($options)
    {
        $serializer = new CreateRefundRequestSerializer();
        $data = $serializer->serialize(CreateRefundRequest::builder()->build($options));

        $expected = array(
            'payment_id' => $options['paymentId'],
            'amount' => array(
                'value'    => $options['amount'],
                'currency' => $options['currency'],
            ),
        );
        if (!empty($options['description'])) {
            $expected['description'] = $options['description'];
        }

        if (!empty($options['receiptItems'])) {
            foreach ($options['receiptItems'] as $item) {
                $expected['receipt']['items'][] = array(
                    'description' => $item['title'],
                    'quantity' => empty($item['quantity']) ? 1 : $item['quantity'],
                    'amount' => array(
                        'value' => $item['price'],
                        'currency' => isset($options['currency']) ? $options['currency'] : CurrencyCode::RUB,
                    ),
                    'vat_code' => $item['vatCode'],
                );
            }
        }
        if (!empty($options['receiptEmail'])) {
            $expected['receipt']['customer']['email'] = $options['receiptEmail'];
        }
        if (!empty($options['receiptPhone'])) {
            $expected['receipt']['customer']['phone'] = $options['receiptPhone'];
        }
        if (!empty($options['taxSystemCode'])) {
            $expected['receipt']['tax_system_code'] = $options['taxSystemCode'];
        }

        self::assertEquals($expected, $data);
    }

    public function validDataProvider()
    {
        $currencies = CurrencyCode::getValidValues();
        $result = array(
            array(
                array(
                    'paymentId' => $this->randomString(36),
                    'amount' => mt_rand(1, 999999),
                    'currency' => $currencies[mt_rand(0, count($currencies) - 1)],
                    'description' => null,
                    'receiptItems' => array(),
                ),
            ),
            array(
                array(
                    'paymentId' => $this->randomString(36),
                    'amount' => mt_rand(1, 999999),
                    'currency' => $currencies[mt_rand(0, count($currencies) - 1)],
                    'description' => '',
                    'receiptItems' => array(
                        array(
                            'title' => Random::str(10),
                            'quantity' => Random::int(1, 10),
                            'price' => Random::int(100, 100),
                            'vatCode' => Random::int(1, 6),
                        ),
                    ),
                    'receiptEmail' => Random::str(10),
                    'taxSystemCode' => Random::int(1, 6),
                ),
            ),
        );
        for ($i = 0; $i < 10; $i++) {
            $request = array(
                'paymentId' => $this->randomString(36),
                'amount' => mt_rand(1, 999999),
                'currency' => $currencies[mt_rand(0, count($currencies) - 1)],
                'description' => uniqid(),
                'receiptItems' => $this->getReceipt($i + 1),
                'receiptEmail' => Random::str(10),
                'receiptPhone' => Random::str(12, '0123456789'),
                'taxSystemCode' => Random::int(1, 6),
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
                $rnd = mt_rand(0, strlen($chars) - 1);
                $char = substr($chars, $rnd, 1);
            }
            $result .= $char;
        }
        return $result;
    }

    private function getReceipt($count)
    {
        $result = array();
        for ($i = 0; $i < $count; $i++) {
            $result[] = array(
                'title' => Random::str(10),
                'quantity' => Random::float(1, 100),
                'price' => Random::int(1, 100),
                'vatCode' => Random::int(1, 6),
            );
        }
        return $result;
    }
}