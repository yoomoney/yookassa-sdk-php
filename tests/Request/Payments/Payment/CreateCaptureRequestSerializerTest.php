<?php

namespace Tests\YooKassa\Request\Payments\Payment;

use PHPUnit\Framework\TestCase;
use YooKassa\Helpers\Random;
use YooKassa\Model\CurrencyCode;
use YooKassa\Model\MonetaryAmount;
use YooKassa\Model\Receipt\PaymentMode;
use YooKassa\Model\Receipt\PaymentSubject;
use YooKassa\Model\Transfer;
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
                    $itemArray['payment_subject'] = $item['payment_subject'];
                }
                if (!empty($item['payment_mode'])) {
                    $itemArray['payment_mode'] = $item['payment_mode'];
                }
                if (!empty($item['product_code'])) {
                    $itemArray['product_code'] = $item['product_code'];
                }
                if (!empty($item['country_of_origin_code'])) {
                    $itemArray['country_of_origin_code'] = $item['country_of_origin_code'];
                }
                if (!empty($item['customs_declaration_number'])) {
                    $itemArray['customs_declaration_number'] = $item['customs_declaration_number'];
                }
                if (!empty($item['excise'])) {
                    $itemArray['excise'] = $item['excise'];
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
            if (!empty($options['transfers'])) {
                foreach ($options['transfers'] as $transfers) {
                    $transferData['account_id'] = $transfers['account_id'];
                    if (!empty($transfers['amount'])) {
                        $transferData['amount'] = array(
                            'value' => $transfers['amount']['value'],
                            'currency' => isset($transfers['amount']['currency']) ? $transfers['amount']['currency'] : CurrencyCode::RUB
                        );
                    }
                    if (!empty($transfers['platform_fee_amount'])) {
                        $transferData['platform_fee_amount'] = array(
                            'value' => $transfers['platform_fee_amount']['value'],
                            'currency' =>
                                isset($transfers['platform_fee_amount']['currency'])
                                    ? $transfers['amount']['currency']
                                    : CurrencyCode::RUB
                        );
                    }
                    $expected['transfers'][] = $transferData;
                }
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
                            'payment_mode' => Random::value(PaymentMode::getValidValues()),
                            'payment_subject' => Random::value(PaymentSubject::getValidValues()),
                            'product_code' => Random::str(96, 96, '0123456789ABCDEF '),
                            'country_of_origin_code' => 'RU',
                            'customs_declaration_number' => Random::str(32),
                            'excise' => Random::float(0.0, 99.99),
                        ),
                    ),
                    'receiptEmail' => Random::str(10),
                    'taxSystemCode' => Random::int(1, 6),
                    'transfers' => array(
                        new Transfer(array(
                            'account_id' => Random::str(36),
                            'amount' => new MonetaryAmount(Random::int(1, 1000), 'RUB'),
                            'platform_fee_amount' => new MonetaryAmount(Random::int(1, 1000), 'RUB'),
                        )),
                    )
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
                                'vat_code' => Random::int(1, 6)
                            )
                        ),
                        'customer' => array(
                            'phone' => Random::str(12, '0123456789'),
                            'email' => Random::str(10 ),
                            'full_name' => Random::str(1, 256),
                            'inn'    => Random::str(12, 12, '1234567890')
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