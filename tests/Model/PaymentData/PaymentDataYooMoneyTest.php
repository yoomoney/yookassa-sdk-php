<?php

namespace Tests\YooKassa\Model\PaymentData;

use YooKassa\Model\PaymentData\PaymentDataYooMoney;
use YooKassa\Model\PaymentMethodType;

class PaymentDataYooMoneyTest extends AbstractPaymentDataTest
{
    /**
     * @return PaymentDataYooMoney
     */
    protected function getTestInstance()
    {
        return new PaymentDataYooMoney();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return PaymentMethodType::YOO_MONEY;
    }
}