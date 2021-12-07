<?php

namespace Tests\YooKassa\Model;

use YooKassa\Model\ThreeDSecure;

class ThreeDSecureTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider validDataProvider
     *
     * @param $threeDSecure
     */
    public function testConstructor($threeDSecure)
    {
        $instance = new ThreeDSecure($threeDSecure);

        self::assertEquals($threeDSecure['applied'], $instance->getApplied());
    }

    /**
     * @dataProvider validDataProvider
     *
     * @param $threeDSecure
     */
    public function testGetSetApplied($threeDSecure)
    {
        $instance = new ThreeDSecure($threeDSecure);

        self::assertEquals($threeDSecure['applied'], $instance->getApplied());

        $instance = new ThreeDSecure();

        $instance->setApplied($threeDSecure['applied']);
        self::assertEquals($threeDSecure['applied'], $instance->getApplied());
        self::assertEquals($threeDSecure['applied'], $instance->applied);
    }

    /**
     * @dataProvider invalidValueDataProvider
     * @param mixed $value
     * @param string $exceptionClassName
     */
    public function testSetInvalidApplied($value, $exceptionClassName)
    {
        $instance = new ThreeDSecure();
        try {
            $instance->setApplied($value);
        } catch (\Exception $e) {
            self::assertInstanceOf($exceptionClassName, $e);
        }
    }

    /**
     * @return array
     */
    public function validDataProvider()
    {
        return array(
            array(
                'threeDSecure' => array(
                    'applied' => true
                )
            ),
            array(
                'threeDSecure' => array(
                    'applied' => false
                )
            ),
            array(
                'threeDSecure' => new ThreeDSecure(array('applied' => false))
            )
        );
    }

    public function invalidValueDataProvider()
    {
        $exceptionNamespace = 'YooKassa\\Common\\Exceptions\\';
        return array(
            array(array(), $exceptionNamespace.'InvalidPropertyValueTypeException'),
            array(fopen(__FILE__, 'r'), $exceptionNamespace.'InvalidPropertyValueTypeException'),
            array(-1, $exceptionNamespace.'InvalidPropertyValueTypeException'),
            array(-0.01, $exceptionNamespace.'InvalidPropertyValueTypeException'),
            array(0.0, $exceptionNamespace.'InvalidPropertyValueTypeException'),
            array('', $exceptionNamespace.'EmptyPropertyValueException'),
            array(null, $exceptionNamespace.'EmptyPropertyValueException'),
        );
    }


    /**
     * @dataProvider validDataProvider
     *
     * @param array $threeDSecure
     */
    public function testJsonSerialize($threeDSecure)
    {
        if (is_object($threeDSecure)){
            $threeDSecure = $threeDSecure->jsonSerialize();
        }

        $instance = new ThreeDSecure($threeDSecure);

        self::assertEquals($threeDSecure, $instance->jsonSerialize());
    }
}
