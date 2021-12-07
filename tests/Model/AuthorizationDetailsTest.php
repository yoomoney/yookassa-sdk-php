<?php

namespace Tests\YooKassa\Model;

use PHPUnit\Framework\TestCase;
use YooKassa\Helpers\Random;
use YooKassa\Model\AuthorizationDetails;
use YooKassa\Model\ThreeDSecure;

class AuthorizationDetailsTest extends TestCase
{
    /**
     * @param array $authorizationDetails
     * @return AuthorizationDetails
     */
    protected static function getInstance($authorizationDetails = array('three_d_secure' => array('applied' => false)))
    {
        return new AuthorizationDetails($authorizationDetails);
    }

    /**
     * @dataProvider validDataProvider
     *
     * @param array $authorizationDetails
     */
    public function testConstructor($authorizationDetails)
    {
        $instance = self::getInstance($authorizationDetails);

        self::assertEquals($authorizationDetails['rrn'], $instance->getRrn());
        self::assertEquals($authorizationDetails['auth_code'], $instance->getAuthCode());
        self::assertInstanceOf('YooKassa\\Model\\ThreeDSecure', $instance->getThreeDSecure());
    }

    /**
     * @dataProvider validDataProvider
     *
     * @param array $authorizationDetails
     */
    public function testGetSetRrn($authorizationDetails)
    {
        $instance = self::getInstance($authorizationDetails);
        self::assertEquals($authorizationDetails['rrn'], $instance->getRrn());

        $instance = self::getInstance($authorizationDetails);
        $instance->setRrn($authorizationDetails['rrn']);
        self::assertEquals($authorizationDetails['rrn'], $instance->getRrn());
        self::assertEquals($authorizationDetails['rrn'], $instance->rrn);
    }

    /**
     * @dataProvider validDataProvider
     *
     * @param array $authorizationDetails
     */
    public function testGetSetAuthCode($authorizationDetails)
    {
        $instance = self::getInstance($authorizationDetails);
        self::assertEquals($authorizationDetails['auth_code'], $instance->getAuthCode());

        $instance = self::getInstance($authorizationDetails);
        $instance->setAuthCode($authorizationDetails['auth_code']);
        self::assertEquals($authorizationDetails['auth_code'], $instance->getAuthCode());
        self::assertEquals($authorizationDetails['auth_code'], $instance->authCode);
    }

    /**
     * @dataProvider validDataProvider
     *
     * @param array $authorizationDetails
     */
    public function testGetSetThreeDSecure($authorizationDetails)
    {
        $instance = self::getInstance($authorizationDetails);
        self::assertInstanceOf('YooKassa\\Model\\ThreeDSecure', $instance->getThreeDSecure());

        $instance = self::getInstance($authorizationDetails);
        $instance->setThreeDSecure($authorizationDetails['three_d_secure']);

        if (is_object($authorizationDetails['three_d_secure'])) {
            $threeDSecureObj = $authorizationDetails['three_d_secure'];
            $threeDSecureExpect = $threeDSecureObj->getApplied();
        } else {
            $threeDSecureExpect = $authorizationDetails['three_d_secure']['applied'];
        }

        self::assertInstanceOf('YooKassa\\Model\\ThreeDSecure', $instance->getThreeDSecure());
        self::assertInstanceOf('YooKassa\\Model\\ThreeDSecure', $instance->threeDSecure);

        self::assertEquals($threeDSecureExpect, $instance->getThreeDSecure()->getApplied());
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
     * @dataProvider invalidValueDataProvider
     * @param mixed $value
     * @param string $exceptionClassName
     */
    public function testSetterInvalidThreeDSecure($value, $exceptionClassName)
    {
        $instance = self::getInstance();
        try {
            $instance->setThreeDSecure($value);
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
       return array(
            array(
                'authorizationDetails' => array(
                    'rrn'      => null,
                    'auth_code' => null,
                    'three_d_secure' => array(
                        'applied' => false
                    )
                )
            ),
            array(
                'authorizationDetails' => array(
                    'rrn'      => '',
                    'auth_code' => '',
                    'three_d_secure' => array(
                        'applied' => false
                    )
                )
            ),
            array(
                'authorizationDetails' => array(
                    'rrn'      => Random::str(32),
                    'auth_code' => Random::str(32),
                    'three_d_secure' => array(
                        'applied' => true
                    )
                )
            ),
           array(
               'authorizationDetails' => array(
                   'rrn'      => Random::str(32),
                   'auth_code' => Random::str(32),
                   'three_d_secure' => new ThreeDSecure(array(
                       'applied' => true
                   ))
               )
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
            array(true, $exceptionNamespace.'InvalidPropertyValueTypeException'),
            array(false, $exceptionNamespace.'InvalidPropertyValueTypeException'),
            array(new \StdClass, $exceptionNamespace.'InvalidPropertyValueTypeException'),
        );
    }

    /**
     * @dataProvider validDataProvider
     *
     * @param array $authorizationDetails
     */
    public function testJsonSerialize($authorizationDetails)
    {
        $instance = new AuthorizationDetails($authorizationDetails);

        $expected = array(
            'rrn'       => $authorizationDetails['rrn'],
            'auth_code' => $authorizationDetails['auth_code'],
            'three_d_secure' =>
                is_object($authorizationDetails['three_d_secure'])
                    ? $authorizationDetails['three_d_secure']->jsonSerialize()
                    : $authorizationDetails['three_d_secure']
        );

        self::assertEquals($expected, $instance->jsonSerialize());
    }
}
