<?php

namespace Tests\YooKassa\Request\Deals;

use PHPUnit\Framework\TestCase;
use YooKassa\Helpers\Random;
use YooKassa\Model\Deal\DealStatus;
use YooKassa\Model\SafeDeal;
use YooKassa\Request\Deals\DealsRequest;
use YooKassa\Request\Deals\DealsRequestBuilder;

class DealsRequestBuilderTest extends TestCase
{
    /**
     * @dataProvider validDataProvider
     * @param $options
     */
    public function testSetCursor($options)
    {
        $builder = new DealsRequestBuilder();

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
        $builder = new DealsRequestBuilder();

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
        $builder = new DealsRequestBuilder();

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
        $builder = new DealsRequestBuilder();

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
        $builder = new DealsRequestBuilder();

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
    public function testSetExpiresAtGte($options)
    {
        $builder = new DealsRequestBuilder();

        $instance = $builder->build();
        self::assertNull($instance->getExpiresAtGte());

        $builder->setExpiresAtGte($options['expiresAtGte']);
        $instance = $builder->build();
        if (empty($options['expiresAtGte'])) {
            self::assertNull($instance->getExpiresAtGte());
        } else {
            self::assertEquals($options['expiresAtGte'], $instance->getExpiresAtGte()->format(YOOKASSA_DATE));
        }
    }

    /**
     * @dataProvider validDataProvider
     * @param $options
     * @throws \Exception
     */
    public function testSetExpiresGt($options)
    {
        $builder = new DealsRequestBuilder();

        $instance = $builder->build();
        self::assertNull($instance->getExpiresAtGt());

        $builder->setExpiresAtGt($options['expiresAtGt']);
        $instance = $builder->build();
        if (empty($options['expiresAtGt'])) {
            self::assertNull($instance->getExpiresAtGt());
        } else {
            self::assertEquals($options['expiresAtGt'], $instance->getExpiresAtGt()->format(YOOKASSA_DATE));
        }
    }

    /**
     * @dataProvider validDataProvider
     * @param $options
     * @throws \Exception
     */
    public function testSetExpiresLte($options)
    {
        $builder = new DealsRequestBuilder();

        $instance = $builder->build();
        self::assertNull($instance->getExpiresAtLte());

        $builder->setExpiresAtLte($options['expiresAtLte']);
        $instance = $builder->build();
        if (empty($options['expiresAtLte'])) {
            self::assertNull($instance->getExpiresAtLte());
        } else {
            self::assertEquals($options['expiresAtLte'], $instance->getExpiresAtLte()->format(YOOKASSA_DATE));
        }
    }

    /**
     * @dataProvider validDataProvider
     * @param $options
     */
    public function testSetExpiresLt($options)
    {
        $builder = new DealsRequestBuilder();

        $instance = $builder->build();
        self::assertNull($instance->getExpiresAtLt());

        $builder->setExpiresAtLt($options['expiresAtLt']);
        $instance = $builder->build();
        if (empty($options['expiresAtLt'])) {
            self::assertNull($instance->getExpiresAtLt());
        } else {
            self::assertEquals($options['expiresAtLt'], $instance->getExpiresAtLt()->format(YOOKASSA_DATE));
        }
    }


    /**
     * @dataProvider validDataProvider
     * @param $options
     */
    public function testSetFullTextSearch($options)
    {
        $builder = new DealsRequestBuilder();

        $instance = $builder->build();
        self::assertNull($instance->getFullTextSearch());

        $builder->setFullTextSearch($options['fullTextSearch']);
        $instance = $builder->build();
        if (empty($options['fullTextSearch'])) {
            self::assertNull($instance->getFullTextSearch());
        } else {
            self::assertEquals($options['fullTextSearch'], $instance->getFullTextSearch());
        }
    }

    /**
     * @dataProvider validDataProvider
     * @param $options
     */
    public function testSetLimit($options)
    {
        $builder = new DealsRequestBuilder();

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
        $builder = new DealsRequestBuilder();

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
                    'createdAtGte'   => null,
                    'createdAtGt'    => null,
                    'createdAtLte'   => null,
                    'createdAtLt'    => null,
                    'expiresAtGte'   => null,
                    'expiresAtGt'    => null,
                    'expiresAtLte'   => null,
                    'expiresAtLt'    => null,
                    'fullTextSearch' => null,
                    'status'         => null,
                    'limit'          => null,
                    'cursor'         => null,
                ),
            ),
            array(
                array(
                    'createdAtGte'   => '',
                    'createdAtGt'    => '',
                    'createdAtLte'   => '',
                    'createdAtLt'    => '',
                    'expiresAtGte'   => '',
                    'expiresAtGt'    => '',
                    'expiresAtLte'   => '',
                    'expiresAtLt'    => '',
                    'fullTextSearch' => '',
                    'status'         => '',
                    'limit'          => 0,
                    'cursor'         => '',
                ),
            ),
        );
        $statuses = DealStatus::getValidValues();
        for ($i = 0; $i < 10; $i++) {
            $request  = array(
                'createdAtGte'   => date(YOOKASSA_DATE, mt_rand(1, time())),
                'createdAtGt'    => date(YOOKASSA_DATE, mt_rand(1, time())),
                'createdAtLte'   => date(YOOKASSA_DATE, mt_rand(1, time())),
                'createdAtLt'    => date(YOOKASSA_DATE, mt_rand(1, time())),
                'expiresAtGte'   => date(YOOKASSA_DATE, mt_rand(1, time())),
                'expiresAtGt'    => date(YOOKASSA_DATE, mt_rand(1, time())),
                'expiresAtLte'   => date(YOOKASSA_DATE, mt_rand(1, time())),
                'expiresAtLt'    => date(YOOKASSA_DATE, mt_rand(1, time())),
                'fullTextSearch' => Random::str(DealsRequest::MIN_LENGTH_DESCRIPTION, SafeDeal::MAX_LENGTH_DESCRIPTION),
                'status'         => $statuses[mt_rand(0, count($statuses) - 1)],
                'limit'          => mt_rand(1, 100),
                'cursor'         => $this->randomString(mt_rand(1, 30)),
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