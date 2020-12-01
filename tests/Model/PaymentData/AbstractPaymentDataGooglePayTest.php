<?php

namespace Tests\YooKassa\Model\PaymentData;

use YooKassa\Helpers\Random;
use YooKassa\Model\PaymentData\PaymentDataGooglePay;

abstract class AbstractPaymentDataGooglePayTest extends AbstractPaymentDataTest
{
    /**
     * @dataProvider validPaymentDataDataProvider
     * @param string $data
     */
    public function testGetSetPaymentMethodToken($data)
    {
        /** @var PaymentDataGooglePay $instance */
        $instance = $this->getTestInstance();

        self::assertNull($instance->getPaymentMethodToken());

        $instance->setPaymentMethodToken($data);
        self::assertEquals($data, $instance->getPaymentMethodToken());


        $instance                     = $this->getTestInstance();
        $instance->paymentMethodToken = $data;
        self::assertEquals($data, $instance->getPaymentMethodToken());
    }

    /**
     * @dataProvider validPaymentDataDataProvider
     * @param string $data
     */
    public function testGetSetGoogleTransactionId($data)
    {
        /** @var PaymentDataGooglePay $instance */
        $instance = $this->getTestInstance();

        self::assertNull($instance->getGoogleTransactionId());

        $instance->setGoogleTransactionId($data);
        self::assertEquals($data, $instance->getGoogleTransactionId());

        $instance                      = $this->getTestInstance();
        $instance->googleTransactionId = $data;
        self::assertEquals($data, $instance->getGoogleTransactionId());
    }

    /**
     * @dataProvider invalidPaymentDataDataProvider
     * @expectedException \InvalidArgumentException
     * @param mixed $data
     */
    public function testSetPaymentMethodToken($data)
    {
        /** @var PaymentDataGooglePay $instance */
        $instance = $this->getTestInstance();
        $instance->setPaymentMethodToken($data);
    }


    /**
     * @dataProvider invalidPaymentDataDataProvider
     * @expectedException \InvalidArgumentException
     * @param mixed $data
     */
    public function testSetGoogleTransactionId($data)
    {
        /** @var PaymentDataGooglePay $instance */
        $instance = $this->getTestInstance();
        $instance->setGoogleTransactionId($data);
    }

    public function validPaymentDataDataProvider()
    {
        return array(
            array(Random::str(256)),
            array(Random::str(1024)),
        );
    }

    public function invalidPaymentDataDataProvider()
    {
        return array(
            array(null),
            array(''),
            array(true),
            array(false),
            array(array()),
            array(new \stdClass()),
        );
    }
}
