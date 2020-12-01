<?php

namespace Tests\YooKassa\Request\Payments;

use PHPUnit\Framework\TestCase;
use YooKassa\Helpers\Random;
use YooKassa\Model\CurrencyCode;
use YooKassa\Model\Receipt\PaymentMode;
use YooKassa\Model\Receipt\PaymentSubject;
use YooKassa\Model\Receipt\SettlementType;
use YooKassa\Model\ReceiptType;
use YooKassa\Request\Receipts\CreatePostReceiptRequest;
use YooKassa\Request\Receipts\CreatePostReceiptRequestSerializer;

class CreatePostReceiptRequestSerializerTest extends TestCase
{
    /**
     * @dataProvider validDataProvider
     *
     * @param $options
     */
    public function testSerialize($options)
    {
        $serializer = new CreatePostReceiptRequestSerializer();
        $instance = CreatePostReceiptRequest::builder()->build($options);
        $data = $serializer->serialize($instance);

        $expected = array(
            'type' => $options['type'],
            'send' => $options['send'],
        );

        if (!empty($options['customer'])) {
            $expected['customer'] = $options['customer'];
        }
        if (!empty($options['tax_system_code'])) {
            $expected['tax_system_code'] = $options['tax_system_code'];
        }
        if (!empty($options['items'])) {
            foreach ($options['items'] as $item) {
                $itemArray = $item;

                if (!empty($item['payment_subject'])) {
                    $itemArray['payment_subject'] = $item['payment_subject'];
                }
                if (!empty($item['payment_mode'])) {
                    $itemArray['payment_mode'] = $item['payment_mode'];
                }
                if (!empty($item['vat_code'])) {
                    $itemArray['vat_code'] = $item['vat_code'];
                }
                if (!empty($item['product_code'])) {
                    $itemArray['product_code'] = $item['product_code'];
                }
                $expected['items'][] = $itemArray;
            }
        }

        if (!empty($options['settlements'])) {
            foreach ($options['settlements'] as $item) {
                $itemArray = $item;
                $expected['settlements'][] = $itemArray;
            }
        }

        if (!empty($options['payment_id'])) {
            $expected['payment_id'] = $options['payment_id'];
        }
        if (!empty($options['refund_id'])) {
            $expected['refund_id'] = $options['refund_id'];
        }

        self::assertEquals($expected, $data);
    }

    public function validDataProvider()
    {
        $result = array(
            array(
                array(
                    'type' => 'payment',
                    'send' => true,
                    'customer' => array(
                        'email' => Random::str(10),
                    ),
                    'items' => array(
                        array(
                            'description' => Random::str(10),
                            'quantity' => (float)Random::int(1, 10),
                            'amount' => array(
                                'value' => round(Random::float(1, 100), 2),
                                'currency' => CurrencyCode::RUB,
                            ),
                            'vat_code' => Random::int(1, 6),
                            'payment_subject' => PaymentSubject::COMMODITY,
                            'payment_mode' => PaymentMode::PARTIAL_PREPAYMENT,
                        )
                    ),
                    'settlements' => array(
                        array(
                            'type' => Random::value(SettlementType::getValidValues()),
                            'amount' => array(
                                'value' => round(Random::float(0.1, 99.99), 2),
                                'currency' => Random::value(CurrencyCode::getValidValues())
                            )
                        )
                    ),
                    'payment_id' => uniqid(),
                    'tax_system_code' => Random::int(1, 6),
                ),
            ),
        );

        for ($i = 0; $i < 10; $i++) {
            $type = Random::value(array(ReceiptType::PAYMENT, ReceiptType::REFUND));
            $request = array(
                'items' => $this->getReceiptItems($i + 1),
                'customer' => array(
                    'email' => Random::str(10),
                    'phone' => Random::str(12, '0123456789'),
                ),
                'tax_system_code' => Random::int(1, 6),
                'type' => $type,
                'send' => true,
                'settlements' => $this->getSettlements($i + 1),
                $type . '_id' => uniqid()
            );
            $result[] = array($request);
        }

        return $result;
    }

    /**
     * @param int $count
     * @return array
     * @throws \Exception
     */
    private function getReceiptItems($count)
    {
        $result = array();
        for ($i = 0; $i < $count; $i++) {
            $result[] = array(
                'description' => Random::str(10),
                'quantity' => (float)Random::float(1, 100),
                'amount' => array(
                    'value' => (float)Random::int(1, 100),
                    'currency' => CurrencyCode::RUB,
                ),
                'vat_code' => Random::int(1, 6),
                'payment_subject' => Random::value(PaymentSubject::getValidValues()),
                'payment_mode' => Random::value(PaymentMode::getValidValues()),
                'product_code' => Random::str(96, 96, '0123456789ABCDEF '),
                'country_of_origin_code' => 'RU',
                'customs_declaration_number' => Random::str(32),
                'excise' => Random::float(0.0, 99.99),
            );
        }

        return $result;
    }

    /**
     * @param int $count
     * @return array
     * @throws \Exception
     */
    private function getSettlements($count)
    {
        $result = array();
        for ($i = 0; $i < $count; $i++) {
            $result[] = array(
                'type' => Random::value(SettlementType::getValidValues()),
                'amount' => array(
                    'value' => round(Random::float(0.1, 99.99), 2),
                    'currency' => Random::value(CurrencyCode::getValidValues())
                )
            );
        }

        return $result;
    }
}