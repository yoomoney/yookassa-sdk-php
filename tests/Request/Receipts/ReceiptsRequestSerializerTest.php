<?php

namespace Tests\YooKassa\Request\Receipts;

use YooKassa\Helpers\Random;
use YooKassa\Model\ReceiptRegistrationStatus;
use YooKassa\Model\RefundStatus;
use YooKassa\Request\Receipts\ReceiptsRequest;
use PHPUnit\Framework\TestCase;
use YooKassa\Request\Receipts\ReceiptsRequestSerializer;

class ReceiptsRequestSerializerTest extends TestCase
{
    /**
     * @dataProvider validDataProvider
     * @param $value
     */
    public function testSerialize($value)
    {
        $serializer = new ReceiptsRequestSerializer();
        $instance = ReceiptsRequest::builder()->build($value);
        $data = $serializer->serialize($instance);

        $expected = array();

        if (!empty($value)) {
            $expected = array(
                'payment_id' => $value['paymentId'],
                'refund_id' => $value['refundId'],
                'status' => $value['status'],
                'limit' => $value['limit'],
                'cursor' => $value['cursor']
            );

            if (!empty($value['createdAtLt'])) {
                $expected['created_at.lt'] = $value['createdAtLt'];
            }

            if (!empty($value['createdAtGt'])) {
                $expected['created_at.gt'] = $value['createdAtGt'];
            }

            if (!empty($value['createdAtLte'])) {
                $expected['created_at.lte'] = $value['createdAtLte'];
            }

            if (!empty($value['createdAtGte'])) {
                $expected['created_at.gte'] = $value['createdAtGte'];
            }
        }

        self::assertEquals($expected, $data);
    }

    public function validDataProvider()
    {
        $result = array(
            array(
                array(
                    'paymentId' => '216749da-000f-50be-b000-096747fad91e',
                    'refundId' => '216749f7-0016-50be-b000-078d43a63ae4',
                    'status' => RefundStatus::SUCCEEDED,
                    'limit' => 100,
                    'cursor' => '37a5c87d-3984-51e8-a7f3-8de646d39ec15',
                    'createdAtGte' => date(YOOKASSA_DATE, mt_rand(1, time())),
                    'createdAtGt' => date(YOOKASSA_DATE, mt_rand(1, time())),
                    'createdAtLte' => date(YOOKASSA_DATE, mt_rand(1, time())),
                    'createdAtLt' => date(YOOKASSA_DATE, mt_rand(1, time())),
                )
            ),
            array(
                array()
            )
        );
        for ($i = 0; $i < 8; $i++) {
            $receipts = array(
                'paymentId' => Random::str(36),
                'refundId' => Random::str(36),
                'createdAtGte' => ($i == 0 ? null : ($i == 1 ? '' : date(YOOKASSA_DATE, mt_rand(1, time())))),
                'createdAtGt' => ($i == 0 ? null : ($i == 1 ? '' : date(YOOKASSA_DATE, mt_rand(1, time())))),
                'createdAtLte' => ($i == 0 ? null : ($i == 1 ? '' : date(YOOKASSA_DATE, mt_rand(1, time())))),
                'createdAtLt' => ($i == 0 ? null : ($i == 1 ? '' : date(YOOKASSA_DATE, mt_rand(1, time())))),
                'status' => Random::value(ReceiptRegistrationStatus::getValidValues()),
                'cursor' => uniqid(),
                'limit' => mt_rand(1, ReceiptsRequest::MAX_LIMIT_VALUE),
            );
            $result[] = array($receipts);
        }
        return $result;
    }
}
