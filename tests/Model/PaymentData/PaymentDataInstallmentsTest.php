<?php

namespace Tests\YooKassa\Model\PaymentData;

use YooKassa\Model\PaymentData\PaymentDataInstallments;
use YooKassa\Model\PaymentMethodType;

class PaymentDataInstallmentsTest extends AbstractPaymentDataTest
{
    /**
     * @return PaymentDataInstallments
     */
    protected function getTestInstance()
    {
        return new PaymentDataInstallments();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return PaymentMethodType::INSTALLMENTS;
    }
}