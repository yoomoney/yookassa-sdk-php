<?php

namespace Tests\YooKassa\Model\PaymentData;

use YooKassa\Model\PaymentData\PaymentDataWechat;
use YooKassa\Model\PaymentMethodType;

class PaymentDataWechatTest extends AbstractPaymentDataTest
{
    /**
     * @return PaymentDataWechat
     */
    protected function getTestInstance()
    {
        return new PaymentDataWechat();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return PaymentMethodType::WECHAT;
    }
}