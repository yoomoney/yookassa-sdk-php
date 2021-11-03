<?php

namespace Tests\YooKassa\Request\Refunds;

use PHPUnit\Framework\TestCase;
use YooKassa\Helpers\Random;
use YooKassa\Model\CurrencyCode;
use YooKassa\Model\MonetaryAmount;
use YooKassa\Model\Receipt\PaymentMode;
use YooKassa\Model\Receipt\PaymentSubject;
use YooKassa\Model\Source;
use YooKassa\Model\Deal\RefundDealData;
use YooKassa\Model\Deal\SettlementPayoutPaymentType;
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
        if (!empty($options['deal'])) {
            $expected['deal'] = $options['deal'];
        }

        if (!empty($options['receiptItems'])) {
            foreach ($options['receiptItems'] as $item) {
                $itemData = array(
                    'description' => $item['title'],
                    'quantity' => empty($item['quantity']) ? 1 : $item['quantity'],
                    'amount' => array(
                        'value' => $item['price'],
                        'currency' => isset($options['currency']) ? $options['currency'] : CurrencyCode::RUB,
                    ),
                    'vat_code' => $item['vatCode'],
                );

                if (!empty($item['payment_mode'])) {
                    $itemData['payment_mode'] = $item['payment_mode'];
                }

                if (!empty($item['payment_subject'])) {
                    $itemData['payment_subject'] = $item['payment_subject'];
                }

                $expected['receipt']['items'][] = $itemData;
            }
        }

        if (!empty($options['sources'])) {
            foreach ($options['sources'] as $item) {
                $expected['sources'][] = array(
                    'account_id' => $item['account_id'],
                    'amount' => array(
                        'value' => $item['amount']['value'],
                        'currency' => isset($item['amount']['currency']) ? $item['amount']['currency'] : CurrencyCode::RUB,
                    ),
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
                    'deal' => null,
                    'receiptItems' => array(),
                    'sources' => array(
                        new Source(array(
                            'account_id' => Random::str(36),
                            'amount' => new MonetaryAmount(Random::int(1, 1000), 'RUB')
                        )),
                    )
                ),
            ),
            array(
                array(
                    'paymentId' => $this->randomString(36),
                    'amount' => mt_rand(1, 999999),
                    'currency' => $currencies[mt_rand(0, count($currencies) - 1)],
                    'description' => '',
                    'deal' => '',
                    'receiptItems' => array(
                        array(
                            'title' => Random::str(10),
                            'quantity' => Random::int(1, 10),
                            'price' => Random::int(100, 100),
                            'vatCode' => Random::int(1, 6)
                        ),
                    ),
                    'sources' => array(
                        new Source(array(
                            'account_id' => Random::str(36),
                            'amount' => new MonetaryAmount(Random::int(1, 1000), 'RUB')
                        )),
                    ),
                    'receiptEmail' => Random::str(10),
                    'taxSystemCode' => Random::int(1, 6)
                ),
            ),
        );
        for ($i = 0; $i < 10; $i++) {
            $request = array(
                'paymentId' => $this->randomString(36),
                'amount' => mt_rand(1, 999999),
                'currency' => $currencies[mt_rand(0, count($currencies) - 1)],
                'description' => uniqid(),
                'deal' => array(
                    'refund_settlements' => array(
                        array(
                            'type' => SettlementPayoutPaymentType::PAYOUT,
                            'amount' => array(
                                'value' => 123.00,
                                'currency' => 'RUB',
                            ),
                        )
                    ),
                ),
                'receiptItems' => $this->getReceipt($i + 1),
                'receiptEmail' => Random::str(10),
                'receiptPhone' => Random::str(12, '0123456789'),
                'taxSystemCode' => Random::int(1, 6),
                'sources' => array(
                    new Source(array(
                        'account_id' => Random::str(36),
                        'amount' => new MonetaryAmount(Random::int(1, 1000), 'RUB')
                    )),
                )
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
                'paymentMode' => Random::value(PaymentMode::getValidValues()),
                'paymentSubject' => Random::value(PaymentSubject::getValidValues())
            );
        }
        return $result;
    }
}