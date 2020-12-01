<?php

namespace Tests\YooKassa\Model\PaymentMethod;

use YooKassa\Model\PaymentMethod\PaymentMethodMobileBalance;
use YooKassa\Model\PaymentMethodType;

class PaymentMethodMobileBalanceTest extends AbstractPaymentMethodPhoneTest
{
    /**
     * @return PaymentMethodMobileBalance
     */
    protected function getTestInstance()
    {
        return new PaymentMethodMobileBalance();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return PaymentMethodType::MOBILE_BALANCE;
    }
}