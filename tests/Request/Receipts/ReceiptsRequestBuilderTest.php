<?php

namespace Tests\YooKassa\Request\Receipts;

use YooKassa\Helpers\Random;
use YooKassa\Model\ReceiptRegistrationStatus;
use YooKassa\Model\RefundStatus;
use YooKassa\Request\Receipts\ReceiptsRequest;
use YooKassa\Request\Receipts\ReceiptsRequestBuilder;
use PHPUnit\Framework\TestCase;

class ReceiptsRequestBuilderTest extends TestCase
{
    /**
     * @dataProvider validDataProvider
     * @param $value
     */
    public function testSetRefundId($value)
    {
        $builder = new ReceiptsRequestBuilder();
        $builder->setRefundId($value['refundId']);
        $instance = $builder->build();
        if (empty($value)) {
            self::assertFalse($instance->hasRefundId());
        } else {
            self::assertTrue($instance->hasRefundId());
            self::assertTrue($instance instanceof ReceiptsRequest);
            self::assertEquals($value['refundId'], $instance->getRefundId());
        }
    }

    /**
     * @dataProvider validDataProvider
     * @param $value
     */
    public function testSetPaymentId($value)
    {
        $builder = new ReceiptsRequestBuilder();
        $builder->setPaymentId($value['paymentId']);
        $instance = $builder->build();
        if (empty($value)) {
            self::assertFalse($instance->hasPaymentId());
        } else {
            self::assertTrue($instance->hasPaymentId());
            self::assertTrue($instance instanceof ReceiptsRequest);
            self::assertEquals($value['paymentId'], $instance->getPaymentId());
        }
    }

    /**
     * @dataProvider validDataProvider
     * @param $value
     */
    public function testSetStatus($value)
    {
        $builder = new ReceiptsRequestBuilder();
        $builder->setStatus($value['status']);
        $instance = $builder->build();
        if (empty($value)) {
            self::assertFalse($instance->hasStatus());
        } else {
            self::assertTrue($instance->hasStatus());
            self::assertTrue($instance instanceof ReceiptsRequest);
            self::assertEquals($value['status'], $instance->getStatus());
        }
    }

    /**
     * @dataProvider validDataProvider
     * @param $value
     */
    public function testSetLimit($value)
    {
        $builder = new ReceiptsRequestBuilder();
        $builder->setLimit($value['limit']);
        $instance = $builder->build();
        if (empty($value)) {
            self::assertFalse($instance->hasLimit());
        } else {
            self::assertTrue($instance->hasLimit());
            self::assertTrue($instance instanceof ReceiptsRequest);
            self::assertEquals($value['limit'], $instance->getLimit());
        }
    }

    /**
     * @dataProvider validDataProvider
     * @param $value
     */
    public function testSetCursor($value)
    {
        $builder = new ReceiptsRequestBuilder();
        $builder->setCursor($value['cursor']);
        $instance = $builder->build();
        if (empty($value)) {
            self::assertFalse($instance->hasCursor());
        } else {
            self::assertTrue($instance->hasCursor());
            self::assertTrue($instance instanceof ReceiptsRequest);
            self::assertEquals($value['cursor'], $instance->getCursor());
        }
    }

    /**
     * @dataProvider validDataProvider
     * @param $value
     */
    public function testSetCreatedAtGt($value)
    {
        $builder = new ReceiptsRequestBuilder();
        $builder->setCreatedAtGt($value['createdAtGt']);
        $instance = $builder->build();
        if (empty($value['createdAtGt'])) {
            self::assertFalse($instance->hasCreatedAtGt());
        } else {
            self::assertTrue($instance->hasCreatedAtGt());
            self::assertTrue($instance instanceof ReceiptsRequest);
            self::assertEquals($value['createdAtGt'], $instance->getCreatedAtGt()->format(YOOKASSA_DATE));
        }
    }

    /**
     * @dataProvider validDataProvider
     * @param $value
     */
    public function testSetCreatedAtGte($value)
    {
        $builder = new ReceiptsRequestBuilder();
        $builder->setCreatedAtGte($value['createdAtGte']);
        $instance = $builder->build();
        if (empty($value['createdAtGte'])) {
            self::assertFalse($instance->hasCreatedAtGte());
        } else {
            self::assertTrue($instance->hasCreatedAtGte());
            self::assertTrue($instance instanceof ReceiptsRequest);
            self::assertEquals($value['createdAtGte'], $instance->getCreatedAtGte()->format(YOOKASSA_DATE));
        }
    }

    /**
     * @dataProvider validDataProvider
     * @param $value
     */
    public function testSetCreatedAtLt($value)
    {
        $builder = new ReceiptsRequestBuilder();
        $builder->setCreatedAtLt($value['createdAtLt']);
        $instance = $builder->build();
        if (empty($value['createdAtLt'])) {
            self::assertFalse($instance->hasCreatedAtLt());
        } else {
            self::assertTrue($instance->hasCreatedAtLt());
            self::assertTrue($instance instanceof ReceiptsRequest);
            self::assertEquals($value['createdAtLt'], $instance->getCreatedAtLt()->format(YOOKASSA_DATE));
        }
    }

    /**
     * @dataProvider validDataProvider
     * @param $value
     */
    public function testSetCreatedAtLte($value)
    {
        $builder = new ReceiptsRequestBuilder();
        $builder->setCreatedAtLte($value['createdAtLte']);
        $instance = $builder->build();
        if (empty($value['createdAtLte'])) {
            self::assertFalse($instance->hasCreatedAtLte());
        } else {
            self::assertTrue($instance->hasCreatedAtLte());
            self::assertTrue($instance instanceof ReceiptsRequest);
            self::assertEquals($value['createdAtLte'], $instance->getCreatedAtLte()->format(YOOKASSA_DATE));
        }
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
