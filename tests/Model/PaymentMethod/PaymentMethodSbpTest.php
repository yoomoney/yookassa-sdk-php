<?php

namespace Tests\YooKassa\Model\PaymentMethod;

use YooKassa\Model\PaymentMethod\PaymentMethodSbp;
use YooKassa\Model\PaymentMethodType;

class PaymentMethodSbpTest extends AbstractPaymentMethodTest
{
    /**
     * @return PaymentMethodSbp
     */
    protected function getTestInstance()
    {
        return new PaymentMethodSbp();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return PaymentMethodType::SBP;
    }
}
