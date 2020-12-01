<?php

namespace Tests\YooKassa\Model\PaymentData;

use YooKassa\Model\PaymentData\PaymentDataWebmoney;
use YooKassa\Model\PaymentMethodType;

class PaymentDataWebmoneyTest extends AbstractPaymentDataTest
{
    /**
     * @return PaymentDataWebmoney
     */
    protected function getTestInstance()
    {
        return new PaymentDataWebmoney();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return PaymentMethodType::WEBMONEY;
    }
}