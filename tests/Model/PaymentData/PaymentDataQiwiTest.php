<?php

namespace Tests\YooKassa\Model\PaymentData;

use YooKassa\Model\PaymentData\PaymentDataQiwi;
use YooKassa\Model\PaymentMethodType;

class PaymentDataQiwiTest extends AbstractPaymentDataPhoneTest
{
    /**
     * @return PaymentDataQiwi
     */
    protected function getTestInstance()
    {
        return new PaymentDataQiwi();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return PaymentMethodType::QIWI;
    }
}