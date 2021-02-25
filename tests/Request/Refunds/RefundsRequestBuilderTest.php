<?php

namespace Tests\YooKassa\Request\Refunds;

use PHPUnit\Framework\TestCase;
use YooKassa\Model\RefundStatus;
use YooKassa\Request\Refunds\RefundsRequest;
use YooKassa\Request\Refunds\RefundsRequestBuilder;

class RefundsRequestBuilderTest extends TestCase
{
    /**
     * @dataProvider validDataProvider
     * @param $options
     */
    public function testSetPaymentId($options)
    {
        $builder = new RefundsRequestBuilder();

        $instance = $builder->build();
        self::assertNull($instance->getPaymentId());

        $builder->setPaymentId($options['paymentId']);
        $instance = $builder->build();
        if (empty($options['paymentId'])) {
            self::assertNull($instance->getPaymentId());
        } else {
            self::assertEquals($options['paymentId'], $instance->getPaymentId());
        }
    }

    /**
     * @dataProvider validDataProvider
     * @param $options
     */
    public function testSetCreateAtGte($options)
    {
        $builder = new RefundsRequestBuilder();

        $instance = $builder->build();
        self::assertNull($instance->getCreatedAtGte());

        $builder->setCreatedAtGte($options['createAtGte']);
        $instance = $builder->build();
        if (empty($options['createAtGte'])) {
            self::assertNull($instance->getCreatedAtGte());
        } else {
            self::assertEquals($options['createAtGte'], $instance->getCreatedAtGte()->format(YOOKASSA_DATE));
        }
    }

    /**
     * @dataProvider validDataProvider
     * @param $options
     */
    public function testSetCreateAtGt($options)
    {
        $builder = new RefundsRequestBuilder();

        $instance = $builder->build();
        self::assertNull($instance->getCreatedAtGt());

        $builder->setCreatedAtGt($options['createAtGt']);
        $instance = $builder->build();
        if (empty($options['createAtGt'])) {
            self::assertNull($instance->getCreatedAtGt());
        } else {
            self::assertEquals($options['createAtGt'], $instance->getCreatedAtGt()->format(YOOKASSA_DATE));
        }
    }

    /**
     * @dataProvider validDataProvider
     * @param $options
     */
    public function testSetCreateAtLte($options)
    {
        $builder = new RefundsRequestBuilder();

        $instance = $builder->build();
        self::assertNull($instance->getCreatedAtLte());

        $builder->setCreatedAtLte($options['createAtLte']);
        $instance = $builder->build();
        if (empty($options['createAtLte'])) {
            self::assertNull($instance->getCreatedAtLte());
        } else {
            self::assertEquals($options['createAtLte'], $instance->getCreatedAtLte()->format(YOOKASSA_DATE));
        }
    }

    /**
     * @dataProvider validDataProvider
     * @param $options
     */
    public function testSetCreateAtLt($options)
    {
        $builder = new RefundsRequestBuilder();

        $instance = $builder->build();
        self::assertNull($instance->getCreatedAtLt());

        $builder->setCreatedAtLt($options['createAtLt']);
        $instance = $builder->build();
        if (empty($options['createAtLt'])) {
            self::assertNull($instance->getCreatedAtLt());
        } else {
            self::assertEquals($options['createAtLt'], $instance->getCreatedAtLt()->format(YOOKASSA_DATE));
        }
    }

    /**
     * @dataProvider validDataProvider
     * @param $options
     */
    public function testSetStatus($options)
    {
        $builder = new RefundsRequestBuilder();

        $instance = $builder->build();
        self::assertNull($instance->getStatus());

        $builder->setStatus($options['status']);
        $instance = $builder->build();
        if (empty($options['status'])) {
            self::assertNull($instance->getStatus());
        } else {
            self::assertEquals($options['status'], $instance->getStatus());
        }
    }

    /**
     * @dataProvider validDataProvider
     * @param $options
     */
    public function testSetCursor($options)
    {
        $builder = new RefundsRequestBuilder();

        $instance = $builder->build();
        self::assertNull($instance->getCursor());

        $builder->setCursor($options['cursor']);
        $instance = $builder->build();
        if (empty($options['cursor'])) {
            self::assertNull($instance->getCursor());
        } else {
            self::assertEquals($options['cursor'], $instance->getCursor());
        }
    }

    /**
     * @dataProvider validDataProvider
     * @param $options
     */
    public function testSetLimit($options)
    {
        $builder = new RefundsRequestBuilder();

        $instance = $builder->build();
        self::assertNull($instance->getLimit());

        $builder->setLimit($options['limit']);
        $instance = $builder->build();
        if (empty($options['limit'])) {
            self::assertNull($instance->getLimit());
        } else {
            self::assertEquals($options['limit'], $instance->getLimit());
        }
    }

    public function validDataProvider()
    {
        $result = array(
            array(
                array(
                    'paymentId' => null,
                    'createAtGte' => null,
                    'createAtGt' => null,
                    'createAtLte' => null,
                    'createAtLt' => null,
                    'status' => null,
                    'cursor' => null,
                    'limit' => 1,
                ),
            ),
            array(
                array(
                    'paymentId' => '',
                    'createAtGte' => '',
                    'createAtGt' => '',
                    'createAtLte' => '',
                    'createAtLt' => '',
                    'status' => '',
                    'cursor' => '',
                    'limit' => null,
                ),
            ),
        );
        $statuses = RefundStatus::getValidValues();
        for ($i = 0; $i < 10; $i++) {
            $request = array(
                'paymentId' => $this->randomString(36),
                'createAtGte' => date(YOOKASSA_DATE, mt_rand(1, time())),
                'createAtGt' => date(YOOKASSA_DATE, mt_rand(1, time())),
                'createAtLte' => date(YOOKASSA_DATE, mt_rand(1, time())),
                'createAtLt' => date(YOOKASSA_DATE, mt_rand(1, time())),
                'status' => $statuses[mt_rand(0, count($statuses) - 1)],
                'cursor' => uniqid(),
                'limit' => mt_rand(1, RefundsRequest::MAX_LIMIT_VALUE),
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
}