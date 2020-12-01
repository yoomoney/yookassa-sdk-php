<?php


namespace Tests\YooKassa\Model\PaymentMethod;


use YooKassa\Model\PaymentMethod\AbstractPaymentMethod;
use YooKassa\Model\PaymentMethod\PaymentMethodTinkoffBank;
use YooKassa\Model\PaymentMethodType;

class PaymentMethodTinkoffBankTest extends AbstractPaymentMethodTest
{

    /**
     * @return AbstractPaymentMethod
     */
    protected function getTestInstance()
    {
        return new PaymentMethodTinkoffBank();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return PaymentMethodType::TINKOFF_BANK;
    }
}