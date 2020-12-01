<?php

namespace Tests\YooKassa\Request\Payments\Payment;

use PHPUnit\Framework\TestCase;
use YooKassa\Helpers\Random;
use YooKassa\Model\CurrencyCode;
use YooKassa\Model\Receipt\PaymentMode;
use YooKassa\Model\Receipt\PaymentSubject;
use YooKassa\Request\Payments\Payment\CreateCaptureRequest;
use YooKassa\Request\Payments\Payment\CreateCaptureRequestSerializer;

class CreateCaptureRequestSerializerTest extends TestCase
{
    /**
     * @dataProvider validDataProvider
     * @param array $options
     */
    public function testSerialize($options)
    {
        $serializer = new CreateCaptureRequestSerializer();
        $data = $serializer->serialize(CreateCaptureRequest::builder()->build($options));

        $expected = array();
        if (isset($options['amount'])) {
            $expected = array(
                'amount' => $options['amount'],
            );
        }
        if (!empty($options['receiptItems'])) {
            foreach ($options['receiptItems'] as $item) {
                $itemArray = array(
                    'description' => $item['title'],
                    'quantity' => $item['quantity'],
                    'amount' => array(
                        'value' => $item['price'],
                        'currency' => isset($options['currency']) ? $options['currency'] : CurrencyCode::RUB,
                    ),
                    'vat_code' => $item['vatCode'],
                );

                if (!empty($item['payment_subject'])) {
                    $itemArray['payment_subject'] = $options['payment_subject'];
                }
                if (!empty($item['payment_mode'])) {
                    $itemArray['payment_mode'] = $options['payment_mode'];
                }
                $expected['receipt']['items'][] = $itemArray;
            }
            if (!empty($options['receiptEmail'])) {
                $expected['receipt']['customer']['email'] = $options['receiptEmail'];
            }
            if (!empty($options['receiptEmail'])) {
                $expected['receipt']['customer']['email'] = $options['receiptEmail'];
            }
            if (!empty($options['taxSystemCode'])) {
                $expected['receipt']['tax_system_code'] = $options['taxSystemCode'];
            }
        } elseif (!empty($options['receipt'])) {
            $expected['receipt'] = $options['receipt'];
            if (!empty($expected['receipt']['phone'])) {
                $expected['receipt']['customer']['phone'] = $expected['receipt']['phone'];
                unset($expected['receipt']['phone']);
            }
            if (!empty($expected['receipt']['email'])) {
                $expected['receipt']['customer']['email'] = $expected['receipt']['email'];
                unset($expected['receipt']['email']);
            }
        }
        self::assertEquals($expected, $data);
    }

    public function validDataProvider()
    {
        $currencies = CurrencyCode::getValidValues();

        $result = array(
            array(
                array()
            ),
            array(
                array(
                    'receiptItems' => array(
                        array(
                            'title' => Random::str(10),
                            'quantity' => round(Random::float(0.01, 10.00), 2),
                            'price' => round(Random::float(10.00, 100.00), 2),
                            'vatCode' => Random::int(1, 6),
                        ),
                    ),
                    'receiptEmail' => Random::str(10),
                    'taxSystemCode' => Random::int(1, 6),
                )
            ),
            array(
                array(
                    'receipt' => array(
                        'items' => array(
                            array(
                                'description' => Random::str(10),
                                'quantity' => round(Random::float(0.01, 10.00), 2),
                                'amount' => array(
                                    'value' => round(Random::float(10.00, 100.00), 2),
                                    'currency' => $currencies[mt_rand(0, count($currencies) - 1)],
                                ),
                                'vat_code' => Random::int(1, 6),
                            ),
                            array(
                                'description' => Random::str(10),
                                'amount' => array(
                                    'value' => round(Random::float(10.00, 100.00), 2),
                                    'currency' => $currencies[mt_rand(0, count($currencies) - 1)],
                                ),
                                'quantity' => round(Random::float(0.01, 10.00), 2),
                                'vat_code' => Random::int(1, 6),
                            ),
                        ),
                        'customer' => array(
                            'phone' => Random::str(12, '0123456789'),
                            'email' => Random::str(10 ),
                        ),
                        'tax_system_code' => Random::int(1, 6),
                    ),
                ),
            ),
        );
        for ($i = 0; $i < 10; $i++) {
            $request = array(
                'amount'   => array(
                    'value' => (float)mt_rand(1, 1000000),
                    'currency' => $currencies[mt_rand(0, count($currencies) - 1)],
                ),
            );
            $result[] = array($request);
        }
        return $result;
    }
}