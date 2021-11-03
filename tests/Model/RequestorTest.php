<?php

namespace Tests\YooKassa\Model;

use YooKassa\Helpers\ProductCode;
use YooKassa\Helpers\Random;
use YooKassa\Model\Requestor;
use PHPUnit\Framework\TestCase;

class RequestorTest extends TestCase
{
    /**
     * @dataProvider validDataProvider
     * @param array $value
     */
    public function testSetGetType($value)
    {
        $instance = new Requestor();
        $instance->setType($value['type']);
        self::assertEquals($value['type'], $instance->getType());
    }

    /**
     * @dataProvider invalidTypeDataProvider
     * @param $value
     * @expectedException \InvalidArgumentException
     */
    public function testSetGetInvalidType($value)
    {
        $instance = new Requestor();
        $instance->setType($value);
    }

    /**
     * @dataProvider validDataProvider
     * @param array $value
     */
    public function testGetSetAccountId($value)
    {
        $instance = new Requestor();
        $instance->setAccountId($value['account_id']);
        self::assertEquals($value['account_id'], $instance->getAccountId());
    }

    /**
     * @dataProvider invalidDataProvider
     * @param $value
     * @expectedException \InvalidArgumentException
     */
    public function testGetSetInvalidAccountId($value)
    {
        $instance = new Requestor();
        $instance->setAccountId($value);
    }

    /**
     * @dataProvider validDataProvider
     * @param array $value
     */
    public function testGetSetClientId($value)
    {
        $instance = new Requestor();
        $instance->setClientId($value['client_id']);
        self::assertEquals($value['client_id'], $instance->getClientId());
    }

    /**
     * @dataProvider invalidDataProvider
     * @param $value
     * @expectedException \InvalidArgumentException
     */
    public function testGetSetInvalidClientId($value)
    {
        $instance = new Requestor();
        $instance->setClientId($value);
    }

    /**
     * @dataProvider validDataProvider
     * @param array $value
     */
    public function testGetSetClientName($value)
    {
        $instance = new Requestor();
        $instance->setClientName($value['client_name']);
        self::assertEquals($value['client_name'], $instance->getClientName());
    }

    /**
     * @dataProvider invalidDataProvider
     * @param $value
     * @expectedException \InvalidArgumentException
     */
    public function testGetSetInvalidClientName($value)
    {
        $instance = new Requestor();
        $instance->setClientName($value);
    }

    /**
     * @dataProvider invalidDataProvider
     * @param array $options
     */
    public function validDataProvider()
    {
        $result = array(
            array(
                array(
                    'type' => 'RequestorThirdPartyService',
                    'account_id' => 12345,
                    'client_id' => 12345,
                    'client_name' => 'test',
                )
            ),
            array(
                array(
                    'type' => 'RequestorThirdPartyService',
                    'account_id' => null,
                    'client_id' => null,
                    'client_name' => null,
                ),
            ),
        );
        for ($i = 0; $i < 9; $i++) {
            $request = array(
                'type' => 'RequestorMarchant',
                'account_id' => Random::str(1, 64, '0123456789'),
                'client_id' => Random::int(100000, 999999)
            );
            $result[] = array($request);
        }
        return $result;
    }

    public function invalidTypeDataProvider()
    {
        return array(
            array(null),
            array(false),
            array(array(new ProductCode()))
        );
    }

    public function invalidDataProvider()
    {
        return array(
            array(false),
            array(array(new ProductCode()))
        );
    }
}
