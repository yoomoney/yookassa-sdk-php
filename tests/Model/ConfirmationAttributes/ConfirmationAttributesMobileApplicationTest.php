<?php

namespace Tests\YooKassa\Model\ConfirmationAttributes;

use YooKassa\Model\ConfirmationAttributes\ConfirmationAttributesMobileApplication;
use YooKassa\Model\ConfirmationType;

class ConfirmationAttributesMobileApplicationTest extends AbstractConfirmationAttributesTest
{
    /**
     * @return ConfirmationAttributesMobileApplication
     */
    protected function getTestInstance()
    {
        return new ConfirmationAttributesMobileApplication();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return ConfirmationType::MOBILE_APPLICATION;
    }

    /**
     * @dataProvider validUrlDataProvider
     * @param $value
     */
    public function testGetSetReturnUrl($value)
    {
        $instance = $this->getTestInstance();

        self::assertNull($instance->getReturnUrl());
        self::assertNull($instance->returnUrl);
        self::assertNull($instance->return_url);

        $instance->setReturnUrl($value);
        if ($value === null || $value === '') {
            self::assertNull($instance->getReturnUrl());
            self::assertNull($instance->returnUrl);
            self::assertNull($instance->return_url);
        } else {
            self::assertEquals($value, $instance->getReturnUrl());
            self::assertEquals($value, $instance->returnUrl);
            self::assertEquals($value, $instance->return_url);
        }

        $instance->setReturnUrl(null);
        self::assertNull($instance->getReturnUrl());
        self::assertNull($instance->returnUrl);
        self::assertNull($instance->return_url);

        $instance->returnUrl = $value;
        if ($value === null || $value === '') {
            self::assertNull($instance->getReturnUrl());
            self::assertNull($instance->returnUrl);
            self::assertNull($instance->return_url);
        } else {
            self::assertEquals($value, $instance->getReturnUrl());
            self::assertEquals($value, $instance->returnUrl);
            self::assertEquals($value, $instance->return_url);
        }

        $instance->setReturnUrl(null);
        self::assertNull($instance->getReturnUrl());
        self::assertNull($instance->returnUrl);
        self::assertNull($instance->return_url);

        $instance->return_url = $value;
        if ($value === null || $value === '') {
            self::assertNull($instance->getReturnUrl());
            self::assertNull($instance->returnUrl);
            self::assertNull($instance->return_url);
        } else {
            self::assertEquals($value, $instance->getReturnUrl());
            self::assertEquals($value, $instance->returnUrl);
            self::assertEquals($value, $instance->return_url);
        }
    }

    /**
     * @dataProvider invalidUrlDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetInvalidReturnUrl($value)
    {
        $instance = $this->getTestInstance();
        $instance->setReturnUrl($value);
    }

    /**
     * @dataProvider invalidUrlDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetterInvalidReturnUrl($value)
    {
        $instance = $this->getTestInstance();
        $instance->returnUrl = $value;
    }

    /**
     * @dataProvider invalidUrlDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetterInvalidReturn_url($value)
    {
        $instance = $this->getTestInstance();
        $instance->return_url = $value;
    }

    public function validEnforceDataProvider()
    {
        return array(
            array(true),
            array(false),
            array(null),
            array(''),
            array(0),
            array(1),
            array(100),
        );
    }

    public function invalidEnforceDataProvider()
    {
        return array(
            array('true'),
            array('false'),
            array(array()),
            array(new \stdClass()),
        );
    }

    public function validUrlDataProvider()
    {
        return array(
            array('https://test.ru'),
            array(null),
            array(''),
        );
    }

    public function invalidUrlDataProvider()
    {
        return array(
            array(true),
            array(false),
            array(array()),
            array(new \stdClass()),
        );
    }
}