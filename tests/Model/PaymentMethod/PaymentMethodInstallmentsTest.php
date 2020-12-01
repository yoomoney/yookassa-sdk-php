<?php

namespace Tests\YooKassa\Model\PaymentMethod;

use YooKassa\Model\PaymentMethod\PaymentMethodInstallments;
use YooKassa\Model\PaymentMethodType;

class PaymentMethodInstallmentsTest extends AbstractPaymentMethodTest
{
    /**
     * @return PaymentMethodInstallments
     */
    protected function getTestInstance()
    {
        return new PaymentMethodInstallments();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return PaymentMethodType::INSTALLMENTS;
    }
}