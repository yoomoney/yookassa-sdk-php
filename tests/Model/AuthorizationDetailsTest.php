<?php

namespace Tests\YooKassa\Model;

use PHPUnit\Framework\TestCase;
use YooKassa\Helpers\Random;
use YooKassa\Model\AuthorizationDetails;

class AuthorizationDetailsTest extends TestCase
{
    /**
     * @param null $rrn
     * @param null $authCode
     * @return AuthorizationDetails
     */
    protected static function getInstance($rrn = null, $authCode = null)
    {
        return new AuthorizationDetails($rrn, $authCode);
    }

    /**
     * @dataProvider validDataProvider
     *
     * @param $rrn
     * @param $authCode
     */
    public function testConstructor($rrn = null, $authCode = null)
    {
        $instance = self::getInstance($rrn, $authCode);

        self::assertEquals($rrn, $instance->getRrn());
        self::assertEquals($authCode, $instance->getAuthCode());
    }

    /**
     * @dataProvider validDataProvider
     *
     * @param $rrn
     * @param $authCode
     */
    public function testGetSetRrn($rrn = null, $authCode = null)
    {
        $instance = self::getInstance($rrn, $authCode);
        self::assertEquals($rrn, $instance->getRrn());

        $instance = self::getInstance();
        $instance->setRrn($rrn);
        self::assertEquals($rrn, $instance->getRrn());
        self::assertEquals($rrn, $instance->rrn);
    }

    /**
     * @dataProvider validDataProvider
     *
     * @param null $rrn
     * @param null $authCode
     */
    public function testGetSetAuthCode($rrn = null, $authCode = null)
    {
        $instance = self::getInstance($rrn, $authCode);
        self::assertEquals($authCode, $instance->getAuthCode());

        $instance = self::getInstance();
        $instance->setAuthCode($authCode);
        self::assertEquals($authCode, $instance->getAuthCode());
        self::assertEquals($authCode, $instance->authCode);
    }

    /**
     * @dataProvider invalidValueDataProvider
     * @param mixed $value
     * @param string $exceptionClassName
     */
    public function testSetInvalidRrn($value, $exceptionClassName)
    {
        $instance = self::getInstance();
        try {
            $instance->setRrn($value);
        } catch (\Exception $e) {
            self::assertInstanceOf($exceptionClassName, $e);
        }
    }

    /**
     * @dataProvider invalidValueDataProvider
     * @param mixed $value
     * @param string $exceptionClassName
     */
    public function testSetterInvalidAuthCode($value, $exceptionClassName)
    {
        $instance = self::getInstance();
        try {
            $instance->setAuthCode($value);
        } catch (\Exception $e) {
            self::assertInstanceOf($exceptionClassName, $e);
        }
    }

    /**
     * @return array
     * @throws \Exception
     */
    public function validDataProvider()
    {
        $result = array(
            array(
                'rrn'      => null,
                'authCode' => null,
            ),
            array(
                'rrn'      => '',
                'authCode' => '',
            ),
            array(
                'rrn'      => Random::str(32),
                'authCode' => Random::str(32),
            ),
        );

        return $result;
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
            array(true, $exceptionNamespace.'InvalidPropertyValueTypeException'),
            array(false, $exceptionNamespace.'InvalidPropertyValueTypeException'),
        );
    }

    /**
     * @dataProvider validDataProvider
     *
     * @param null $rrn
     * @param null $authCode
     */
    public function testJsonSerialize($rrn = null, $authCode = null)
    {
        $instance = new AuthorizationDetails($rrn, $authCode);
        $expected = array(
            'rrn'       => $rrn,
            'auth_code' => $authCode,
        );
        self::assertEquals($expected, $instance->jsonSerialize());
    }
}
