<?php

namespace Tests\YooKassa\Model\PaymentData;

use YooKassa\Model\PaymentData\PaymentDataMobileBalance;
use YooKassa\Model\PaymentMethodType;

class PaymentDataMobileBalanceTest extends AbstractPaymentDataPhoneTest
{
    /**
     * @return PaymentDataMobileBalance
     */
    protected function getTestInstance()
    {
        return new PaymentDataMobileBalance();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return PaymentMethodType::MOBILE_BALANCE;
    }
}