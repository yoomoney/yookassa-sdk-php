<?php

namespace Tests\YooKassa\Model\PaymentMethod;

use YooKassa\Model\PaymentMethod\PaymentMethodApplePay;
use YooKassa\Model\PaymentMethodType;

class PaymentMethodApplePayTest extends AbstractPaymentMethodTest
{
    /**
     * @return PaymentMethodApplePay
     */
    protected function getTestInstance()
    {
        return new PaymentMethodApplePay();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return PaymentMethodType::APPLE_PAY;
    }
}