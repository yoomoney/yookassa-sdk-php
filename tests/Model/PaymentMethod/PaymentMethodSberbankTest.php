<?php

namespace Tests\YooKassa\Model\PaymentMethod;

use YooKassa\Model\PaymentMethod\PaymentMethodSberbank;
use YooKassa\Model\PaymentMethodType;

class PaymentMethodSberbankTest extends AbstractPaymentMethodPhoneTest
{
    /**
     * @return PaymentMethodSberbank
     */
    protected function getTestInstance()
    {
        return new PaymentMethodSberbank();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return PaymentMethodType::SBERBANK;
    }
}