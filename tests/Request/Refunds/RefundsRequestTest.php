<?php

namespace Tests\YooKassa\Request\Refunds;

use PHPUnit\Framework\TestCase;
use YooKassa\Helpers\Random;
use YooKassa\Helpers\StringObject;
use YooKassa\Model\RefundStatus;
use YooKassa\Request\Refunds\RefundsRequest;
use YooKassa\Request\Refunds\RefundsRequestBuilder;

class RefundsRequestTest extends TestCase
{
    /**
     * @dataProvider validDataProvider
     * @param $options
     */
    public function testPaymentId($options)
    {
        $instance = new RefundsRequest();

        self::assertFalse($instance->hasPaymentId());
        self::assertNull($instance->getPaymentId());
        self::assertNull($instance->paymentId);

        $instance->setPaymentId($options['payment_id']);
        if (empty($options['payment_id'])) {
            self::assertFalse($instance->hasPaymentId());
            self::assertNull($instance->getPaymentId());
            self::assertNull($instance->paymentId);
        } else {
            self::assertTrue($instance->hasPaymentId());
            self::assertEquals($options['payment_id'], $instance->getPaymentId());
            self::assertEquals($options['payment_id'], $instance->paymentId);
        }

        $instance->setPaymentId('');
        self::assertFalse($instance->hasPaymentId());
        self::assertNull($instance->getPaymentId());
        self::assertNull($instance->paymentId);

        $instance->paymentId = $options['payment_id'];
        if (empty($options['payment_id'])) {
            self::assertFalse($instance->hasPaymentId());
            self::assertNull($instance->getPaymentId());
            self::assertNull($instance->paymentId);
        } else {
            self::assertTrue($instance->hasPaymentId());
            self::assertEquals($options['payment_id'], $instance->getPaymentId());
            self::assertEquals($options['payment_id'], $instance->paymentId);
        }
    }

    /**
     * @dataProvider invalidPaymentIdDataProvider
     * @expectedException \InvalidArgumentException
     * @param mixed $value
     */
    public function testSetInvalidPaymentId($value)
    {
        $instance = new RefundsRequest();
        $instance->setPaymentId($value);
    }

    /**
     * @dataProvider invalidPaymentIdDataProvider
     * @expectedException \InvalidArgumentException
     * @param mixed $value
     */
    public function testSetterInvalidPaymentId($value)
    {
        $instance = new RefundsRequest();
        $instance->paymentId = $value;
    }

    /**
     * @return array
     */
    public function validStringDataProvider()
    {
        return array(
            array(array()),
            array(true),
            array(false),
            array(new \stdClass()),
        );
    }

    /**
     * @dataProvider validDataProvider
     * @param $options
     */
    public function testCreateGte($options)
    {
        $instance = new RefundsRequest();

        self::assertFalse($instance->hasCreatedAtGte());
        self::assertNull($instance->getCreatedAtGte());
        self::assertNull($instance->createdAtGte);

        $instance->setCreatedAtGte($options['created_at_gte']);
        if (empty($options['created_at_gte'])) {
            self::assertFalse($instance->hasCreatedAtGte());
            self::assertNull($instance->getCreatedAtGte());
            self::assertNull($instance->createdAtGte);
        } else {
            self::assertTrue($instance->hasCreatedAtGte());
            self::assertEquals($options['created_at_gte'], $instance->getCreatedAtGte()->format(YOOKASSA_DATE));
            self::assertEquals($options['created_at_gte'], $instance->createdAtGte->format(YOOKASSA_DATE));
        }

        $instance->setCreatedAtGte('');
        self::assertFalse($instance->hasCreatedAtGte());
        self::assertNull($instance->getCreatedAtGte());
        self::assertNull($instance->createdAtGte);

        $instance->createdAtGte = $options['created_at_gte'];
        if (empty($options['created_at_gte'])) {
            self::assertFalse($instance->hasCreatedAtGte());
            self::assertNull($instance->getCreatedAtGte());
            self::assertNull($instance->createdAtGte);
        } else {
            self::assertTrue($instance->hasCreatedAtGte());
            self::assertEquals($options['created_at_gte'], $instance->getCreatedAtGte()->format(YOOKASSA_DATE));
            self::assertEquals($options['created_at_gte'], $instance->createdAtGte->format(YOOKASSA_DATE));
        }
    }

    /**
     * @dataProvider invalidDateDataProvider
     * @expectedException \InvalidArgumentException
     * @param mixed $value
     */
    public function testSetInvalidCreatedGte($value)
    {
        $instance = new RefundsRequest();
        $instance->setCreatedAtGte($value);
    }

    /**
     * @dataProvider invalidDateDataProvider
     * @expectedException \InvalidArgumentException
     * @param mixed $value
     */
    public function testSetterInvalidCreatedGte($value)
    {
        $instance = new RefundsRequest();
        $instance->createdAtGte = $value;
    }

    /**
     * @dataProvider validDataProvider
     * @param $options
     */
    public function testCreateGt($options)
    {
        $instance = new RefundsRequest();

        self::assertFalse($instance->hasCreatedAtGt());
        self::assertNull($instance->getCreatedAtGt());
        self::assertNull($instance->createdAtGt);

        $instance->setCreatedAtGt($options['created_at_gt']);
        if (empty($options['created_at_gt'])) {
            self::assertFalse($instance->hasCreatedAtGte());
            self::assertNull($instance->getCreatedAtGte());
            self::assertNull($instance->createdAtGte);
        } else {
            self::assertTrue($instance->hasCreatedAtGt());
            self::assertEquals($options['created_at_gt'], $instance->getCreatedAtGt()->format(YOOKASSA_DATE));
            self::assertEquals($options['created_at_gt'], $instance->createdAtGt->format(YOOKASSA_DATE));
        }

        $instance->setCreatedAtGt('');
        self::assertFalse($instance->hasCreatedAtGt());
        self::assertNull($instance->getCreatedAtGt());
        self::assertNull($instance->createdAtGt);

        $instance->createdAtGt = $options['created_at_gt'];
        if (empty($options['created_at_gt'])) {
            self::assertFalse($instance->hasCreatedAtGt());
            self::assertNull($instance->getCreatedAtGt());
            self::assertNull($instance->createdAtGt);
        } else {
            self::assertTrue($instance->hasCreatedAtGt());
            self::assertEquals($options['created_at_gt'], $instance->getCreatedAtGt()->format(YOOKASSA_DATE));
            self::assertEquals($options['created_at_gt'], $instance->createdAtGt->format(YOOKASSA_DATE));
        }
    }

    /**
     * @dataProvider invalidDateDataProvider
     * @expectedException \InvalidArgumentException
     * @param mixed $value
     */
    public function testSetInvalidCreatedGt($value)
    {
        $instance = new RefundsRequest();
        $instance->setCreatedAtGt($value);
    }

    /**
     * @dataProvider invalidDateDataProvider
     * @expectedException \InvalidArgumentException
     * @param mixed $value
     */
    public function testSetterInvalidCreatedGt($value)
    {
        $instance = new RefundsRequest();
        $instance->createdAtGt = $value;
    }

    /**
     * @dataProvider validDataProvider
     * @param $options
     */
    public function testCreateLte($options)
    {
        $instance = new RefundsRequest();

        self::assertFalse($instance->hasCreatedAtLte());
        self::assertNull($instance->getCreatedAtLte());
        self::assertNull($instance->createdAtLte);

        $instance->setCreatedAtLte($options['created_at_lte']);
        if (empty($options['created_at_lte'])) {
            self::assertFalse($instance->hasCreatedAtLte());
            self::assertNull($instance->getCreatedAtLte());
            self::assertNull($instance->createdAtLte);
        } else {
            self::assertTrue($instance->hasCreatedAtLte());
            self::assertEquals($options['created_at_lte'], $instance->getCreatedAtLte()->format(YOOKASSA_DATE));
            self::assertEquals($options['created_at_lte'], $instance->createdAtLte->format(YOOKASSA_DATE));
        }

        $instance->setCreatedAtLte('');
        self::assertFalse($instance->hasCreatedAtLte());
        self::assertNull($instance->getCreatedAtLte());
        self::assertNull($instance->createdAtLte);

        $instance->createdAtLte = $options['created_at_lte'];
        if (empty($options['created_at_lte'])) {
            self::assertFalse($instance->hasCreatedAtLte());
            self::assertNull($instance->getCreatedAtLte());
            self::assertNull($instance->createdAtLte);
        } else {
            self::assertTrue($instance->hasCreatedAtLte());
            self::assertEquals($options['created_at_lte'], $instance->getCreatedAtLte()->format(YOOKASSA_DATE));
            self::assertEquals($options['created_at_lte'], $instance->createdAtLte->format(YOOKASSA_DATE));
        }
    }

    /**
     * @dataProvider invalidDateDataProvider
     * @expectedException \InvalidArgumentException
     * @param mixed $value
     */
    public function testSetInvalidCreatedLte($value)
    {
        $instance = new RefundsRequest();
        $instance->setCreatedAtLte($value);
    }

    /**
     * @dataProvider invalidDateDataProvider
     * @expectedException \InvalidArgumentException
     * @param mixed $value
     */
    public function testSetterInvalidCreatedLte($value)
    {
        $instance = new RefundsRequest();
        $instance->createdAtLte = $value;
    }

    /**
     * @dataProvider validDataProvider
     * @param $options
     */
    public function testCreateLt($options)
    {
        $instance = new RefundsRequest();

        self::assertFalse($instance->hasCreatedAtLt());
        self::assertNull($instance->getCreatedAtLt());
        self::assertNull($instance->createdAtLt);

        $instance->setCreatedAtLt($options['created_at_lt']);
        if (empty($options['created_at_lt'])) {
            self::assertFalse($instance->hasCreatedAtLt());
            self::assertNull($instance->getCreatedAtLt());
            self::assertNull($instance->createdAtLt);
        } else {
            self::assertTrue($instance->hasCreatedAtLt());
            self::assertEquals($options['created_at_lt'], $instance->getCreatedAtLt()->format(YOOKASSA_DATE));
            self::assertEquals($options['created_at_lt'], $instance->createdAtLt->format(YOOKASSA_DATE));
        }

        $instance->setCreatedAtLt('');
        self::assertFalse($instance->hasCreatedAtLt());
        self::assertNull($instance->getCreatedAtLt());
        self::assertNull($instance->createdAtLt);

        $instance->createdAtLt = $options['created_at_lt'];
        if (empty($options['created_at_lt'])) {
            self::assertFalse($instance->hasCreatedAtLt());
            self::assertNull($instance->getCreatedAtLt());
            self::assertNull($instance->createdAtLt);
        } else {
            self::assertTrue($instance->hasCreatedAtLt());
            self::assertEquals($options['created_at_lt'], $instance->getCreatedAtLt()->format(YOOKASSA_DATE));
            self::assertEquals($options['created_at_lt'], $instance->createdAtLt->format(YOOKASSA_DATE));
        }
    }

    /**
     * @dataProvider invalidDateDataProvider
     * @expectedException \InvalidArgumentException
     * @param mixed $value
     */
    public function testSetInvalidCreatedLt($value)
    {
        $instance = new RefundsRequest();
        $instance->setCreatedAtLt($value);
    }

    /**
     * @dataProvider invalidDateDataProvider
     * @expectedException \InvalidArgumentException
     * @param mixed $value
     */
    public function testSetterInvalidCreatedLt($value)
    {
        $instance = new RefundsRequest();
        $instance->createdAtLt = $value;
    }

    /**
     * @dataProvider validDataProvider
     * @param $options
     */
    public function testStatus($options)
    {
        $instance = new RefundsRequest();

        self::assertFalse($instance->hasStatus());
        self::assertNull($instance->getStatus());
        self::assertNull($instance->status);

        $instance->setStatus($options['status']);
        if (empty($options['status'])) {
            self::assertFalse($instance->hasStatus());
            self::assertNull($instance->getStatus());
            self::assertNull($instance->status);
        } else {
            self::assertTrue($instance->hasStatus());
            self::assertEquals($options['status'], $instance->getStatus());
            self::assertEquals($options['status'], $instance->status);
        }

        $instance->setStatus('');
        self::assertFalse($instance->hasStatus());
        self::assertNull($instance->getStatus());
        self::assertNull($instance->status);

        $instance->status = $options['status'];
        if (empty($options['status'])) {
            self::assertFalse($instance->hasStatus());
            self::assertNull($instance->getStatus());
            self::assertNull($instance->status);
        } else {
            self::assertTrue($instance->hasStatus());
            self::assertEquals($options['status'], $instance->getStatus());
            self::assertEquals($options['status'], $instance->status);
        }
    }

    /**
     * @dataProvider invalidStatusDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetInvalidStatus($value)
    {
        $instance = new RefundsRequest();
        $instance->setStatus($value);
    }

    /**
     * @dataProvider invalidStatusDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetterInvalidStatus($value)
    {
        $instance = new RefundsRequest();
        $instance->status = $value;
        self::assertEquals($value, $instance->status);
    }

    /**
     * @dataProvider validLimitDataProvider
     * @param $value
     */
    public function testLimit($value)
    {
        $instance = new RefundsRequest();
        $instance->limit = $value;
        self::assertEquals($value, $instance->limit);
    }

    /**
     * @dataProvider invalidLimitDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetInvalidLimit($value)
    {
        $instance = new RefundsRequest();
        $instance->setLimit($value);
    }


    /**
     * @dataProvider validDataProvider
     * @param $options
     */
    public function testCursor($options)
    {
        $instance = new RefundsRequest();

        self::assertFalse($instance->hasCursor());
        self::assertNull($instance->getCursor());
        self::assertNull($instance->cursor);

        $instance->setCursor($options['cursor']);
        if (empty($options['cursor'])) {
            self::assertFalse($instance->hasCursor());
            self::assertNull($instance->getCursor());
            self::assertNull($instance->cursor);
        } else {
            self::assertTrue($instance->hasCursor());
            self::assertEquals($options['cursor'], $instance->getCursor());
            self::assertEquals($options['cursor'], $instance->cursor);
        }

        $instance->setCursor('');
        self::assertFalse($instance->hasCursor());
        self::assertNull($instance->getCursor());
        self::assertNull($instance->cursor);

        $instance->cursor = $options['cursor'];
        if (empty($options['cursor'])) {
            self::assertFalse($instance->hasCursor());
            self::assertNull($instance->getCursor());
            self::assertNull($instance->cursor);
        } else {
            self::assertTrue($instance->hasCursor());
            self::assertEquals($options['cursor'], $instance->getCursor());
            self::assertEquals($options['cursor'], $instance->cursor);
        }
    }

    /**
     * @dataProvider invalidNextCursorDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetInvalidCursor($value)
    {
        $instance = new RefundsRequest();
        $instance->setCursor($value);
    }

    /**
     * @dataProvider invalidNextCursorDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetterInvalidCursor($value)
    {
        $instance = new RefundsRequest();
        $instance->cursor = $value;
    }

    public function testValidate()
    {
        $instance = new RefundsRequest();

        self::assertTrue($instance->validate());
    }

    public function testBuilder()
    {
        $builder = RefundsRequest::builder();
        self::assertTrue($builder instanceof RefundsRequestBuilder);
    }

    public function validDataProvider()
    {
        $result = array(
            array(
                array(
                    'created_at_gte' => null,
                    'created_at_gt' => null,
                    'created_at_lte' => null,
                    'created_at_lt' => null,
                    'status' => null,
                    'payment_id' => null,
                    'limit' => null,
                    'cursor' => null,
                ),
            ),
            array(
                array(
                    'created_at_gte' => '',
                    'created_at_gt' => '',
                    'created_at_lte' => '',
                    'created_at_lt' => '',
                    'status' => '',
                    'payment_id' => '',
                    'limit' => '',
                    'cursor' => '',
                ),
            ),
        );
        $statuses = RefundStatus::getValidValues();
        for ($i = 0; $i < 10; $i++) {
            $request = array(
                'created_at_gte' => date(YOOKASSA_DATE, mt_rand(1, time())),
                'created_at_gt' => date(YOOKASSA_DATE, mt_rand(1, time())),
                'created_at_lte' => date(YOOKASSA_DATE, mt_rand(1, time())),
                'created_at_lt' => date(YOOKASSA_DATE, mt_rand(1, time())),
                'status' => $statuses[mt_rand(0, count($statuses) - 1)],
                'payment_id' => $this->randomString(36),
                'limit' => mt_rand(0, RefundsRequest::MAX_LIMIT_VALUE),
                'cursor' => uniqid(),
            );
            $result[] = array($request);
        }
        return $result;
    }

    public function invalidStatusDataProvider()
    {
        return array(
            array(true),
            array(false),
            array(array()),
            array(new \stdClass()),
            array(Random::str(1, 10)),
            array(new StringObject(Random::str(1, 10))),
        );
    }

    public function validLimitDataProvider()
    {
        return array(
            array(null),
            array(Random::int(1, RefundsRequest::MAX_LIMIT_VALUE)),
        );
    }

    public function invalidLimitDataProvider()
    {
        return array(
            array(array()),
            array(new \stdClass()),
            array(-1),
            array(RefundsRequest::MAX_LIMIT_VALUE + 1),
        );
    }

    public function invalidDataProvider()
    {
        $result = array(
            array(array()),
            array(new \stdClass()),
            array(Random::str(10)),
            array(Random::bytes(10)),
            array(-1),
            array(RefundsRequest::MAX_LIMIT_VALUE + 1),
        );
        return $result;
    }

    public function invalidNextCursorDataProvider()
    {
        return array(
            array(true),
            array(false),
            array(array()),
            array(new \stdClass()),
        );
    }

    public function invalidPaymentIdDataProvider()
    {
        return array(
            array(true),
            array(false),
            array(array()),
            array(new \stdClass()),
            array(Random::str(35)),
            array(Random::str(37)),
            array(new StringObject(Random::str(10))),
        );
    }

    public function invalidDateDataProvider()
    {
        return array(
            array(true),
            array(false),
            array(array()),
            array(new \stdClass()),
            array(Random::str(35)),
            array(Random::str(37)),
            array(new StringObject(Random::str(10))),
            array(-123),
        );
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
}