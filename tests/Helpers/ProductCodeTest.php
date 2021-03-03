<?php

namespace Tests\YooKassa\Helpers;

use YooKassa\Helpers\ProductCode;

class ProductCodeTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @dataProvider dataProvider
     * @param mixed $data
     */
    public function testSetGetPrefix($data)
    {
        $instance = new ProductCode();

        self::assertNull($instance->getPrefix());

        $instance->setPrefix($data['prefix']);
        if (empty($data['prefix'])) {
            self::assertNull($instance->getPrefix());
        } else {
            self::assertNotNull($instance->getPrefix());
        }
    }

    /**
     * @dataProvider dataProvider
     * @param mixed $data
     */
    public function testSetGetGtin($data)
    {
        $instance = new ProductCode();

        self::assertNull($instance->getGtin());

        $instance->setGtin($data['gtin']);
        if (empty($data['gtin'])) {
            self::assertNull($instance->getGtin());
        } else {
            self::assertEquals($data['gtin'], $instance->getGtin());
        }
    }

    /**
     * @dataProvider dataProvider
     * @param mixed $data
     */
    public function testSetGetUsePrefix($data)
    {
        $instance = new ProductCode();

        self::assertFalse($instance->isUsePrefix());

        $instance->setUsePrefix($data['usePrefix']);
        if (empty($data['usePrefix'])) {
            self::assertFalse($instance->isUsePrefix());
        } else {
            self::assertTrue($instance->isUsePrefix());
        }
    }

    /**
     * @dataProvider dataProvider
     * @param mixed $data
     */
    public function testSetGetSerial($data)
    {
        $instance = new ProductCode();

        self::assertNull($instance->getSerial());

        $instance->setSerial($data['serial']);
        if (empty($data['serial'])) {
            self::assertNull($instance->getSerial());
        } else {
            self::assertEquals($data['serial'], $instance->getSerial());
        }
    }

    /**
     * @dataProvider dataProvider
     * @param mixed $data
     */
    public function testValidate($data)
    {
        $instance = new ProductCode();

        self::assertFalse($instance->validate());

        $instance->setGtin($data['gtin']);
        $instance->setSerial($data['serial']);

        if (empty($data['gtin']) || empty($data['serial'])) {
            self::assertFalse($instance->validate());
        }

        if (!empty($data['gtin']) && !empty($data['serial'])) {
            self::assertTrue($instance->validate());
        }

    }

    /**
     * @dataProvider dataStrProvider
     * @param mixed $data
     * @throws \ReflectionException
     */
    public function testStrHex($data)
    {
        $instance = new ProductCode();
        $reflection = new \ReflectionClass(get_class($instance));

        $method = $reflection->getMethod('strToHex');
        $method->setAccessible(true);
        $result1 = $method->invokeArgs($instance, array('string' => $data));

        $method = $reflection->getMethod('hexToStr');
        $method->setAccessible(true);
        $result2 = $method->invokeArgs($instance, array('string' => $result1));

        self::assertEquals($data, $result2);
    }

    /**
     * @dataProvider dataNumProvider
     * @param mixed $data
     * @throws \ReflectionException
     */
    public function testNumHex($data)
    {
        $instance = new ProductCode();
        $reflection = new \ReflectionClass(get_class($instance));

        $method = $reflection->getMethod('base_convert');
        $method->setAccessible(true);
        $result1 = $method->invokeArgs($instance, array('numString' => $data));

        $method = $reflection->getMethod('base_convert');
        $method->setAccessible(true);
        $result2 = $method->invokeArgs($instance, array('numString' => $result1, 'fromBase' => 16, 'toBase' => 10));

        self::assertEquals($data, $result2);
    }

    /**
     * @dataProvider dataProvider
     * @param mixed $data
     */
    public function testGetResult($data)
    {
        $instance = new ProductCode();

        self::assertEmpty($instance->getResult());

        $instance->setGtin($data['gtin']);
        $instance->setSerial($data['serial']);
        $instance->setPrefix($data['prefix']);
        $instance->setUsePrefix($data['usePrefix']);

        if ($instance->validate()) {
            self::assertNotEmpty($instance->calcResult());
            self::assertNotEmpty($instance->getResult());
        } else {
            self::assertEmpty($instance->calcResult());
            self::assertEmpty($instance->getResult());
        }
    }

    /**
     * @dataProvider dataProvider
     * @param mixed $data
     */
    public function testMagicMethods($data)
    {
        $instance = new ProductCode($data['dataMatrix'], $data['usePrefix'] ? $data['prefix'] : false);

        if ($instance->validate()) {
            self::assertNotEmpty($instance->calcResult());
            self::assertNotEmpty($instance->getResult());
            self::assertEquals($data['result'], $instance->calcResult());
            self::assertEquals($data['result'], $instance->getResult());
            self::assertEquals($data['result'], (string)$instance);
        } else {
            self::assertEmpty($instance->getResult());
            self::assertEmpty($instance->getResult());
        }

        $instance2 = new ProductCode($data['dataMatrix'], $data['usePrefix'] ? $data['prefix'] : false);

        if ($instance2->validate()) {
            self::assertEquals($data['result'], (string)$instance2);
        } else {
            self::assertEmpty($instance2->getResult());
        }
    }

    public function dataProvider()
    {
        return array(
            array(
                array(
                    'usePrefix' => false,
                    'prefix' => null,
                    'gtin' => '04630037591316',
                    'serial' => 'sgEKKPPcS25y5',
                    'dataMatrix' => '010463003407001221SxMGorvNuq6Wk91fgr92sdfsdfghfgjh',
                    'result' => '04 36 03 89 39 FC 53 78 4D 47 6F 72 76 4E 75 71 36 57 6B',
                ),
            ),
            array(
                array(
                    'usePrefix' => true,
                    'prefix' => true,
                    'gtin' => '4630037591316',
                    'serial' => 'sgEKKPPcS25y5',
                    'dataMatrix' => '010463003407001221SxMGorvNuq6Wk91fgr92sdfsdfghfgjh',
                    'result' => '44 4D 04 36 03 89 39 FC 53 78 4D 47 6F 72 76 4E 75 71 36 57 6B',
                ),
            ),
            array(
                array(
                    'usePrefix' => true,
                    'prefix' => '0005',
                    'gtin' => '04630037591316',
                    'serial' => 'sgEKKPPcS25y5',
                    'dataMatrix' => '010463003407001221SxMGorvNuq6Wk91fgr92sdfsdfghfgjh',
                    'result' => '00 05 04 36 03 89 39 FC 53 78 4D 47 6F 72 76 4E 75 71 36 57 6B',
                ),
            ),
            array(
                array(
                    'usePrefix' => true,
                    'prefix' => 505,
                    'gtin' => '04630037591316',
                    'serial' => 'sgEKKPPcS25y5',
                    'dataMatrix' => '010463003407001221SxMGorvNuq6Wk91fgr92sdfsdfghfgjh',
                    'result' => '01 F9 04 36 03 89 39 FC 53 78 4D 47 6F 72 76 4E 75 71 36 57 6B',
                ),
            ),
            array(
                array(
                    'usePrefix' => false,
                    'prefix' => null,
                    'gtin' => '98765432101234',
                    'serial' => 'ABC1234',
                    'dataMatrix' => '019876543210123421ABC123491DmUO92sdfJSf/"fgjh',
                    'result' => '59 D3 9E 7F 19 72 41 42 43 31 32 33 34',
                ),
            ),
            array(
                array(
                    'usePrefix' => false,
                    'prefix' => null,
                    'gtin' => '98765432101234',
                    'serial' => 'ABC1234',
                    'dataMatrix' => '019876543210123421ABC1234',
                    'result' => '59 D3 9E 7F 19 72 41 42 43 31 32 33 34',
                ),
            ),
            array(
                array(
                    'usePrefix' => false,
                    'prefix' => '',
                    'gtin' => '',
                    'serial' => '',
                    'dataMatrix' => '',
                    'result' => '',
                ),
            ),
        );
    }

    public function dataStrProvider()
    {
        return array(
            array(
                'this is a test!',
            ),
            array(
                'ABC1234',
            ),
            array(
                'sgEKKPPcS25y5',
            ),
        );
    }

    public function dataNumProvider()
    {
        return array(
            array(
                '98765432101234',
            ),
            array(
                '04630037591316',
            ),
            array(
                '04603725748040',
            ),
            array(
                '04603725748057',
            ),
            array(
                '4603725748057',
            ),
        );
    }

}
