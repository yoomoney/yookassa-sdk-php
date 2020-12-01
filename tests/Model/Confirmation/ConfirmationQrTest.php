<?php

namespace Tests\YooKassa\Model\Confirmation;

use YooKassa\Model\Confirmation\ConfirmationQr;
use YooKassa\Model\ConfirmationType;

class ConfirmationQrTest extends AbstractConfirmationTest
{
    /**
     * @return ConfirmationQr
     */
    protected function getTestInstance()
    {
        return new ConfirmationQr();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return ConfirmationType::QR;
    }

    /**
     * @dataProvider validUrlDataProvider
     * @param $value
     */
    public function testGetSetConfirmationData($value)
    {
        $instance = $this->getTestInstance();

        self::assertNull($instance->getConfirmationData());
        self::assertNull($instance->confirmationData);
        self::assertNull($instance->confirmation_data);

        $instance->setConfirmationData($value);
        if ($value === null || $value === '') {
            self::assertNull($instance->getConfirmationData());
            self::assertNull($instance->confirmationData);
            self::assertNull($instance->confirmation_data);
        } else {
            self::assertEquals($value, $instance->getConfirmationData());
            self::assertEquals($value, $instance->confirmationData);
            self::assertEquals($value, $instance->confirmation_data);
        }

        $instance->setConfirmationData(null);
        self::assertNull($instance->getConfirmationData());
        self::assertNull($instance->confirmationData);
        self::assertNull($instance->confirmation_data);

        $instance->confirmationData = $value;
        if ($value === null || $value === '') {
            self::assertNull($instance->getConfirmationData());
            self::assertNull($instance->confirmationData);
            self::assertNull($instance->confirmation_data);
        } else {
            self::assertEquals($value, $instance->getConfirmationData());
            self::assertEquals($value, $instance->confirmationData);
            self::assertEquals($value, $instance->confirmation_data);
        }

        $instance->confirmation_data = $value;
        if ($value === null || $value === '') {
            self::assertNull($instance->getConfirmationData());
            self::assertNull($instance->confirmationData);
            self::assertNull($instance->confirmation_data);
        } else {
            self::assertEquals($value, $instance->getConfirmationData());
            self::assertEquals($value, $instance->confirmationData);
            self::assertEquals($value, $instance->confirmation_data);
        }
    }

    /**
     * @dataProvider invalidUrlDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetInvalidConfirmationData($value)
    {
        $instance = $this->getTestInstance();
        $instance->setConfirmationData($value);
    }

    /**
     * @dataProvider invalidUrlDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetterInvalidConfirmationData($value)
    {
        $instance = $this->getTestInstance();
        $instance->confirmationData = $value;
    }

    /**
     * @dataProvider invalidUrlDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetterInvalidConfirmation_data($value)
    {
        $instance = $this->getTestInstance();
        $instance->confirmation_data = $value;
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
            array('wechat://pay/testurl?pr=xXxXxX'),
            array('http://test.ru'),
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