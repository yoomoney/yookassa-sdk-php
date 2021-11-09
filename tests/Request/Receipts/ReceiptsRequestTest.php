<?php

namespace Tests\YooKassa\Request\Receipts;

use YooKassa\Helpers\Random;
use YooKassa\Model\Receipt\SettlementType;
use YooKassa\Model\ReceiptRegistrationStatus;
use YooKassa\Model\RefundStatus;
use YooKassa\Request\Receipts\ReceiptsRequest;
use PHPUnit\Framework\TestCase;
use YooKassa\Request\Receipts\ReceiptsRequestBuilder;

class ReceiptsRequestTest extends TestCase
{
    /**
     * @dataProvider validDataProvider
     * @param $value
     */
    public function testGetSetRefundId($value)
    {
        $instance = new ReceiptsRequest();
        self::assertFalse($instance->hasRefundId());
        $instance->setRefundId($value['refundId']);
        self::assertEquals($value['refundId'], $instance->getRefundId());
        if ($value['refundId'] != null) {
            self::assertTrue($instance->hasRefundId());
        }
    }

    /**
     * @dataProvider validDataProvider
     * @param $value
     */
    public function testGetSetPaymentId($value)
    {
        $instance = new ReceiptsRequest();
        self::assertFalse($instance->hasPaymentId());
        $instance->setPaymentId($value['paymentId']);
        self::assertSame($value['paymentId'], $instance->getPaymentId());
        if (!is_null($value['paymentId'])) {
            self::assertTrue($instance->hasPaymentId());
        }
    }

    /**
     * @dataProvider validDataProvider
     * @param $value
     */
    public function testGetSetCreatedAtGte($value)
    {
        $instance = new ReceiptsRequest();
        self::assertFalse($instance->hasCreatedAtGte());
        $instance->setCreatedAtGte($value['createdAtLte']);
        if (!is_null($value['createdAtLte'])) {
            self::assertEquals($value['createdAtLte'], $instance->getCreatedAtGte()->format(YOOKASSA_DATE));
            self::assertTrue($instance->hasCreatedAtGte());
        }
    }

    /**
     * @dataProvider validDataProvider
     * @param $value
     */
    public function testGetSetCreatedAtGt($value)
    {
        $instance = new ReceiptsRequest();
        self::assertFalse($instance->hasCreatedAtGt());
        $instance->setCreatedAtGt($value['createdAtGt']);
        if (!is_null($value['createdAtGt'])) {
            self::assertEquals($value['createdAtGt'], $instance->getCreatedAtGt()->format(YOOKASSA_DATE));
            self::assertTrue($instance->hasCreatedAtGt());
        }
    }

    /**
     * @dataProvider validDataProvider
     * @param $value
     */
    public function testGetSetCreatedAtLte($value)
    {
        $instance = new ReceiptsRequest();
        self::assertFalse($instance->hasCreatedAtGte());
        $instance->setCreatedAtLte($value['createdAtLte']);
        if (!is_null($value['createdAtLte'])) {
            self::assertEquals($value['createdAtLte'], $instance->getCreatedAtLte()->format(YOOKASSA_DATE));
            self::assertTrue($instance->hasCreatedAtLte());
        }
    }

    /**
     * @dataProvider validDataProvider
     * @param $value
     */
    public function testGetSetCreatedAtLt($value)
    {
        $instance = new ReceiptsRequest();
        self::assertFalse($instance->hasCreatedAtLt());
        $instance->setCreatedAtLt($value['createdAtLt']);
        if (!is_null($value['createdAtLt'])) {
            self::assertEquals($value['createdAtLt'], $instance->getCreatedAtLt()->format(YOOKASSA_DATE));
            self::assertTrue($instance->hasCreatedAtLt());
        }
    }

    /**
     * @dataProvider validDataProvider
     * @param $value
     */
    public function testGetSetStatus($value)
    {
        $instance = new ReceiptsRequest();
        self::assertFalse($instance->hasStatus());
        $instance->setStatus($value['status']);
        if (!is_null($value['status'])) {
            self::assertEquals($value['status'], $instance->getStatus());
            self::assertTrue($instance->hasStatus());
        }
    }

    /**
     * @dataProvider validDataProvider
     * @param $value
     */
    public function testGetSetCursor($value)
    {
        $instance = new ReceiptsRequest();
        self::assertFalse($instance->hasCursor());
        $instance->setCursor($value['cursor']);
        if (!is_null($value['cursor'])) {
            self::assertEquals($value['cursor'], $instance->getCursor());
            self::assertTrue($instance->hasCursor());
        }
    }

    /**
     * @dataProvider validDataProvider
     * @param $value
     */
    public function testGetSetLimit($value)
    {
        $instance = new ReceiptsRequest();
        self::assertFalse($instance->hasLimit());
        $instance->setLimit($value['limit']);
        if (!is_null($value['limit'])) {
            self::assertEquals($value['limit'], $instance->getLimit());
            self::assertTrue($instance->hasLimit());
        }
    }

    /**
     * @dataProvider validDataProvider
     * @param mixed $value
     */
    public function testValidate($value)
    {
        $instance = new ReceiptsRequest();
        $instance->fromArray($value);
        self::assertTrue($instance->validate());
    }

    public function testBuilder()
    {
        $instance = new ReceiptsRequest();
        self::assertTrue($instance::builder() instanceof ReceiptsRequestBuilder);
    }

    /**
     * @dataProvider invalidLimitDataProvider
     * @param $value
     * @expectedException \InvalidArgumentException
     */
    public function testInvalidLimitData($value)
    {
        $instance = new ReceiptsRequest();
        $instance->setLimit($value);
    }

    /**
     * @dataProvider invalidCursorDataProvider
     * @param $value
     * @expectedException \InvalidArgumentException
     */
    public function testInvalidCursorData($value)
    {
        $instance = new ReceiptsRequest();
        $instance->setCursor($value);
    }

    /**
     * @dataProvider invalidStatusDataProvider
     * @param $value
     * @expectedException \InvalidArgumentException
     */
    public function testInvalidStatusData($value)
    {
        $instance = new ReceiptsRequest();
        $instance->setStatus($value);
    }

    /**
     * @dataProvider invalidDateDataProvider
     * @param $value
     * @expectedException \InvalidArgumentException
     */
    public function testInvalidCreatedAtLtData($value)
    {
        $instance = new ReceiptsRequest();
        $instance->setCreatedAtLt($value);
    }


    /**
     * @dataProvider invalidDateDataProvider
     * @param $value
     * @expectedException \InvalidArgumentException
     */
    public function testInvalidCreatedAtLteData($value)
    {
        $instance = new ReceiptsRequest();
        $instance->setCreatedAtLte($value);
    }

    /**
     * @dataProvider invalidDateDataProvider
     * @param $value
     * @expectedException \InvalidArgumentException
     */
    public function testInvalidCreatedAtGtData($value)
    {
        $instance = new ReceiptsRequest();
        $instance->setCreatedAtGt($value);
    }

    /**
     * @dataProvider invalidDateDataProvider
     * @param $value
     * @expectedException \InvalidArgumentException
     */
    public function testInvalidCreatedAtGteData($value)
    {
        $instance = new ReceiptsRequest();
        $instance->setCreatedAtGte($value);
    }

    /**
     * @dataProvider invalidIdDataProvider
     * @param $value
     * @expectedException \InvalidArgumentException
     */
    public function testInvalidPaymentIdData($value)
    {
        $instance = new ReceiptsRequest();
        $instance->setPaymentId($value);
    }

    /**
     * @dataProvider invalidIdDataProvider
     * @param $value
     * @expectedException \InvalidArgumentException
     */
    public function testInvalidRefundIdData($value)
    {
        $instance = new ReceiptsRequest();
        $instance->setRefundId($value);
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
            )
        );
        for ($i = 0; $i < 10; $i++) {
            $receipts = array(
                'paymentId' => Random::str(36),
                'refundId' => Random::str(36),
                'createdAtGte' => date(YOOKASSA_DATE, mt_rand(1, time())),
                'createdAtGt' => date(YOOKASSA_DATE, mt_rand(1, time())),
                'createdAtLte' => date(YOOKASSA_DATE, mt_rand(1, time())),
                'createdAtLt' => date(YOOKASSA_DATE, mt_rand(1, time())),
                'status' => Random::value(ReceiptRegistrationStatus::getValidValues()),
                'cursor' => uniqid(),
                'limit' => mt_rand(1, ReceiptsRequest::MAX_LIMIT_VALUE),
            );
            $result[] = array($receipts);
        }
        return $result;
    }

    public function invalidLimitDataProvider()
    {
        return array(
            array(true),
            array(150)
        );
    }

    public function invalidCursorDataProvider()
    {
        return array(
            array(true)
        );
    }

    public function invalidStatusDataProvider()
    {
        return array(
            array(SettlementType::POSTPAYMENT),
            array(new \DateTime(''))
        );
    }

    public function invalidDateDataProvider()
    {
        return array(
            array(SettlementType::POSTPAYMENT),
            array(true)
        );
    }

    public function invalidIdDataProvider()
    {
        return array(
            array('216749f7-0016-50be-b000-078d43a63ae4-sdgb252346'),
            array(true)
        );
    }
}
