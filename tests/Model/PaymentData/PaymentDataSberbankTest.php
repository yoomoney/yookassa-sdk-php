<?php

namespace Tests\YooKassa\Model\PaymentData;

use YooKassa\Model\PaymentData\PaymentDataSberbank;
use YooKassa\Model\PaymentMethodType;

class PaymentDataSberbankTest extends AbstractPaymentDataPhoneTest
{
    /**
     * @return PaymentDataSberbank
     */
    protected function getTestInstance()
    {
        return new PaymentDataSberbank();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return PaymentMethodType::SBERBANK;
    }
}