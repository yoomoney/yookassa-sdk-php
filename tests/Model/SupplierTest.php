<?php

namespace Tests\YooKassa\Model;

use YooKassa\Helpers\ProductCode;
use YooKassa\Helpers\Random;
use YooKassa\Model\Supplier;
use PHPUnit\Framework\TestCase;

class SupplierTest extends TestCase
{
    /**
     * @dataProvider validDataProvider
     * @param $value
     */
    public function testSetGetInn($value)
    {
        $instance = new Supplier();
        self::assertNull($instance->getInn());

        $instance->setInn($value['inn']);
        self::assertEquals($value['inn'], $instance->getInn());
    }

    /**
     * @dataProvider invalidInnDataTest
     * @param $value
     * @expectedException \InvalidArgumentException
     */
    public function testInvalidInn($value)
    {
        $instance = new Supplier();
        $instance->setInn($value);
    }

    /**
     * @dataProvider validDataProvider
     * @param $value
     */
    public function testSetGetName($value)
    {
        $instance = new Supplier();
        self::assertNull($instance->getName());

        $instance->setName($value['name']);
        self::assertEquals($value['name'], $instance->getName());
    }

    /**
     * @dataProvider invalidDataTest
     * @param $value
     * @expectedException \InvalidArgumentException
     */
    public function testInvalidName($value)
    {
        $instance = new Supplier();
        $instance->setName($value);
    }

    /**
     * @dataProvider validDataProvider
     * @param $value
     */
    public function testSetGetPhone($value)
    {
        $instance = new Supplier();
        self::assertNull($instance->getPhone());

        $instance->setPhone($value['phone']);
        self::assertEquals($value['phone'], $instance->getPhone());
    }

    /**
     * @dataProvider invalidDataTest
     * @param $value
     * @expectedException \InvalidArgumentException
     */
    public function testInvalidPhone($value)
    {
        $instance = new Supplier();
        $instance->setPhone($value);
    }

    public function validDataProvider()
    {
        $result = array(
            array(
                array(
                    'name' => null,
                    'phone' => null,
                    'inn' => null
                )
            ),
            array(
                array(
                    'name' => 'John Doe',
                    'inn' => '6321341814',
                    'phone' => '79000000000'
                )
            ),
        );

        for ($i = 0; $i < 7; $i++) {
            $test = array(
                'name'  => Random::str(1, 150),
                'inn'   => Random::str(12, 12, '1234567890'),
                'phone' => Random::str(10, 10, '1234567890'),
            );

            $result[] = array($test);
        }

        return $result;
    }

    public function invalidDataTest()
    {
        return array(
            array(new \stdClass()),
            array(false),
            array(true)
        );
    }

    public function invalidInnDataTest()
    {
        return array(
            array('test'),
            array(new \stdClass()),
            array(false),
            array(true)
        );
    }
}
