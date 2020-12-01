<?php

namespace Tests\YooKassa\Model\PaymentData;

use YooKassa\Model\PaymentData\PaymentDataApplePay;
use YooKassa\Model\PaymentMethodType;

class PaymentDataApplePayTest extends AbstractPaymentDataApplePayTest
{
    /**
     * @return PaymentDataApplePay
     */
    protected function getTestInstance()
    {
        return new PaymentDataApplePay();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return PaymentMethodType::APPLE_PAY;
    }
}