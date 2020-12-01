<?php

namespace Tests\YooKassa\Model\PaymentMethod;

use YooKassa\Model\PaymentMethod\PaymentMethodCash;
use YooKassa\Model\PaymentMethodType;

class PaymentMethodCashTest extends AbstractPaymentMethodTest
{
    /**
     * @return PaymentMethodCash
     */
    protected function getTestInstance()
    {
        return new PaymentMethodCash();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return PaymentMethodType::CASH;
    }
}