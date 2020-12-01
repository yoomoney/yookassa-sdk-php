<?php

namespace Model\Confirmation;


use Tests\YooKassa\Model\Confirmation\AbstractConfirmationTest;
use YooKassa\Model\Confirmation\AbstractConfirmation;
use YooKassa\Model\Confirmation\ConfirmationEmbedded;
use YooKassa\Model\ConfirmationType;

class ConfirmationEmbeddedTest extends AbstractConfirmationTest
{

    /**
     * @return AbstractConfirmation
     */
    protected function getTestInstance()
    {
        return new ConfirmationEmbedded();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return ConfirmationType::EMBEDDED;
    }

    /**
     * @dataProvider validConfirmationTokenDataProvider
     *
     * @param $value
     */
    public function testGetSetConfirmationToken($value)
    {
        /** @var ConfirmationEmbedded $instance */
        $instance = $this->getTestInstance();

        self::assertNull($instance->getConfirmationToken());
        self::assertNull($instance->confirmationToken);

        $instance->setConfirmationToken($value);
        if ($value === null || $value === '') {
            self::assertNull($instance->getConfirmationToken());
            self::assertNull($instance->confirmationToken);
        } else {
            self::assertEquals($value, $instance->getConfirmationToken());
            self::assertEquals($value, $instance->confirmationToken);
        }

        $instance                    = $this->getTestInstance();
        $instance->confirmationToken = $value;
        if ($value === null || $value === '') {
            self::assertNull($instance->getConfirmationToken());
            self::assertNull($instance->confirmationToken);
        } else {
            self::assertEquals($value, $instance->getConfirmationToken());
            self::assertEquals($value, $instance->confirmationToken);
        }
    }

    public function validConfirmationTokenDataProvider()
    {
        return array(
            array(null),
            array(''),
            array('ct-2454fc2d-000f-5000-9000-12a816bfbb35'),
        );
    }
}