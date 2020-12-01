<?php

namespace Tests\YooKassa\Model\PaymentData;

use YooKassa\Model\PaymentData\PaymentDataGooglePay;
use YooKassa\Model\PaymentMethodType;

class PaymentDataGooglePayTest extends AbstractPaymentDataGooglePayTest
{
    /**
     * @return PaymentDataGooglePay
     */
    protected function getTestInstance()
    {
        return new PaymentDataGooglePay();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return PaymentMethodType::GOOGLE_PAY;
    }
}