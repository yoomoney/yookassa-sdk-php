<?php

namespace Tests\YooKassa\Model\PaymentMethod;

use YooKassa\Model\PaymentMethod\PaymentMethodWebmoney;
use YooKassa\Model\PaymentMethodType;

class PaymentMethodWebmoneyTest extends AbstractPaymentMethodTest
{
    /**
     * @return PaymentMethodWebmoney
     */
    protected function getTestInstance()
    {
        return new PaymentMethodWebmoney();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return PaymentMethodType::WEBMONEY;
    }
}