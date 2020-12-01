<?php


namespace Tests\YooKassa\Model\PaymentData;


use YooKassa\Model\PaymentData\AbstractPaymentData;
use YooKassa\Model\PaymentData\PaymentDataTinkoffBank;
use YooKassa\Model\PaymentMethodType;

class PaymentDataTinkoffBankTest extends AbstractPaymentDataTest
{

    /**
     * @return AbstractPaymentData
     */
    protected function getTestInstance()
    {
        return new PaymentDataTinkoffBank();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return PaymentMethodType::TINKOFF_BANK;

    }
}