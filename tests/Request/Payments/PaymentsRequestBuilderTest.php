<?php

namespace Tests\YooKassa\Request\Payments;

use PHPUnit\Framework\TestCase;
use YooKassa\Model\PaymentMethodType;
use YooKassa\Model\PaymentStatus;
use YooKassa\Request\Payments\PaymentsRequestBuilder;

class PaymentsRequestBuilderTest extends TestCase
{
    /**
     * @dataProvider validDataProvider
     * @param $options
     */
    public function testSetCursor($options)
    {
        $builder = new PaymentsRequestBuilder();

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
    public function testSetCreatedAtGte($options)
    {
        $builder = new PaymentsRequestBuilder();

        $instance = $builder->build();
        self::assertNull($instance->getCreatedAtGte());

        $builder->setCreatedAtGte($options['createdAtGte']);
        $instance = $builder->build();
        if (empty($options['createdAtGte'])) {
            self::assertNull($instance->getCreatedAtGte());
        } else {
            self::assertEquals($options['createdAtGte'], $instance->getCreatedAtGte()->format(YOOKASSA_DATE));
        }
    }

    /**
     * @dataProvider validDataProvider
     * @param $options
     * @throws \Exception
     */
    public function testSetCreatedGt($options)
    {
        $builder = new PaymentsRequestBuilder();

        $instance = $builder->build();
        self::assertNull($instance->getCreatedAtGt());

        $builder->setCreatedAtGt($options['createdAtGt']);
        $instance = $builder->build();
        if (empty($options['createdAtGt'])) {
            self::assertNull($instance->getCreatedAtGt());
        } else {
            self::assertEquals($options['createdAtGt'], $instance->getCreatedAtGt()->format(YOOKASSA_DATE));
        }
    }

    /**
     * @dataProvider validDataProvider
     * @param $options
     * @throws \Exception
     */
    public function testSetCreatedLte($options)
    {
        $builder = new PaymentsRequestBuilder();

        $instance = $builder->build();
        self::assertNull($instance->getCreatedAtLte());

        $builder->setCreatedAtLte($options['createdAtLte']);
        $instance = $builder->build();
        if (empty($options['createdAtLte'])) {
            self::assertNull($instance->getCreatedAtLte());
        } else {
            self::assertEquals($options['createdAtLte'], $instance->getCreatedAtLte()->format(YOOKASSA_DATE));
        }
    }

    /**
     * @dataProvider validDataProvider
     * @param $options
     */
    public function testSetCreatedLt($options)
    {
        $builder = new PaymentsRequestBuilder();

        $instance = $builder->build();
        self::assertNull($instance->getCreatedAtLt());

        $builder->setCreatedAtLt($options['createdAtLt']);
        $instance = $builder->build();
        if (empty($options['createdAtLt'])) {
            self::assertNull($instance->getCreatedAtLt());
        } else {
            self::assertEquals($options['createdAtLt'], $instance->getCreatedAtLt()->format(YOOKASSA_DATE));
        }
    }

    /**
     * @dataProvider validDataProvider
     * @param $options
     */
    public function testSetCapturedAtGte($options)
    {
        $builder = new PaymentsRequestBuilder();

        $instance = $builder->build();
        self::assertNull($instance->getCapturedAtGte());

        $builder->setCapturedAtGte($options['capturedAtGte']);
        $instance = $builder->build();
        if (empty($options['capturedAtGte'])) {
            self::assertNull($instance->getCapturedAtGte());
        } else {
            self::assertEquals($options['capturedAtGte'], $instance->getCapturedAtGte()->format(YOOKASSA_DATE));
        }
    }

    /**
     * @dataProvider validDataProvider
     * @param $options
     * @throws \Exception
     */
    public function testSetCapturedGt($options)
    {
        $builder = new PaymentsRequestBuilder();

        $instance = $builder->build();
        self::assertNull($instance->getCapturedAtGt());

        $builder->setCapturedAtGt($options['capturedAtGt']);
        $instance = $builder->build();
        if (empty($options['capturedAtGt'])) {
            self::assertNull($instance->getCapturedAtGt());
        } else {
            self::assertEquals($options['capturedAtGt'], $instance->getCapturedAtGt()->format(YOOKASSA_DATE));
        }
    }

    /**
     * @dataProvider validDataProvider
     * @param $options
     * @throws \Exception
     */
    public function testSetCapturedLte($options)
    {
        $builder = new PaymentsRequestBuilder();

        $instance = $builder->build();
        self::assertNull($instance->getCapturedAtLte());

        $builder->setCapturedAtLte($options['capturedAtLte']);
        $instance = $builder->build();
        if (empty($options['capturedAtLte'])) {
            self::assertNull($instance->getCapturedAtLte());
        } else {
            self::assertEquals($options['capturedAtLte'], $instance->getCapturedAtLte()->format(YOOKASSA_DATE));
        }
    }

    /**
     * @dataProvider validDataProvider
     * @param $options
     */
    public function testSetCapturedLt($options)
    {
        $builder = new PaymentsRequestBuilder();

        $instance = $builder->build();
        self::assertNull($instance->getCapturedAtLt());

        $builder->setCapturedAtLt($options['capturedAtLt']);
        $instance = $builder->build();
        if (empty($options['capturedAtLt'])) {
            self::assertNull($instance->getCapturedAtLt());
        } else {
            self::assertEquals($options['capturedAtLt'], $instance->getCapturedAtLt()->format(YOOKASSA_DATE));
        }
    }


    /**
     * @dataProvider validDataProvider
     * @param $options
     */
    public function testSetPaymentMethod($options)
    {
        $builder = new PaymentsRequestBuilder();

        $instance = $builder->build();
        self::assertNull($instance->getPaymentMethod());

        $builder->setPaymentMethod($options['paymentMethod']);
        $instance = $builder->build();
        if (empty($options['paymentMethod'])) {
            self::assertNull($instance->getPaymentMethod());
        } else {
            self::assertEquals($options['paymentMethod'], $instance->getPaymentMethod());
        }
    }

    /**
     * @dataProvider validDataProvider
     * @param $options
     */
    public function testSetLimit($options)
    {
        $builder = new PaymentsRequestBuilder();

        $instance = $builder->build();
        self::assertNull($instance->getLimit());

        $builder->setLimit($options['limit']);
        $instance = $builder->build();
        if (is_null($options['limit'])) {
            self::assertNull($instance->getLimit());
        } else {
            self::assertEquals($options['limit'], $instance->getLimit());
        }
    }

    /**
     * @dataProvider validDataProvider
     * @param $options
     */
    public function testSetStatus($options)
    {
        $builder = new PaymentsRequestBuilder();

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

    public function validDataProvider()
    {
        $result   = array(
            array(
                array(
                    'createdAtGte'       => null,
                    'createdAtGt'        => null,
                    'createdAtLte'       => null,
                    'createdAtLt'        => null,
                    'capturedAtGte'      => null,
                    'capturedAtGt'       => null,
                    'capturedAtLte'      => null,
                    'capturedAtLt'       => null,
                    'paymentMethod'      => null,
                    'status'             => null,
                    'limit'              => null,
                    'cursor'             => null,
                ),
            ),
            array(
                array(
                    'createdAtGte'       => '',
                    'createdAtGt'        => '',
                    'createdAtLte'       => '',
                    'createdAtLt'        => '',
                    'capturedAtGte'      => '',
                    'capturedAtGt'       => '',
                    'capturedAtLte'      => '',
                    'capturedAtLt'       => '',
                    'paymentMethod'      => '',
                    'status'             => '',
                    'limit'              => 0,
                    'cursor'             => '',
                ),
            ),
        );
        $statuses = PaymentStatus::getValidValues();
        $methods  = PaymentMethodType::getValidValues();
        for ($i = 0; $i < 10; $i++) {
            $request  = array(
                'createdAtGte'       => date(YOOKASSA_DATE, mt_rand(1, time())),
                'createdAtGt'        => date(YOOKASSA_DATE, mt_rand(1, time())),
                'createdAtLte'       => date(YOOKASSA_DATE, mt_rand(1, time())),
                'createdAtLt'        => date(YOOKASSA_DATE, mt_rand(1, time())),
                'capturedAtGte'      => date(YOOKASSA_DATE, mt_rand(1, time())),
                'capturedAtGt'       => date(YOOKASSA_DATE, mt_rand(1, time())),
                'capturedAtLte'      => date(YOOKASSA_DATE, mt_rand(1, time())),
                'capturedAtLt'       => date(YOOKASSA_DATE, mt_rand(1, time())),
                'paymentMethod'      => $methods[mt_rand(0, count($methods) - 1)],
                'status'             => $statuses[mt_rand(0, count($statuses) - 1)],
                'limit'              => mt_rand(1, 100),
                'cursor'             => $this->randomString(mt_rand(1, 30)),
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
                $rnd  = mt_rand(0, strlen($chars) - 1);
                $char = substr($chars, $rnd, 1);
            }
            $result .= $char;
        }
        return $result;
    }
}