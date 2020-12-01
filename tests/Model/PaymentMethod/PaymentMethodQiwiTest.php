<?php

namespace Tests\YooKassa\Model\PaymentMethod;

use YooKassa\Model\PaymentMethod\PaymentMethodQiwi;
use YooKassa\Model\PaymentMethodType;

class PaymentMethodQiwiTest extends AbstractPaymentMethodTest
{
    /**
     * @return PaymentMethodQiwi
     */
    protected function getTestInstance()
    {
        return new PaymentMethodQiwi();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return PaymentMethodType::QIWI;
    }
}