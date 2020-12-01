<?php

namespace Tests\YooKassa\Model\PaymentMethod;

use YooKassa\Model\PaymentMethod\PaymentMethodWechat;
use YooKassa\Model\PaymentMethodType;

class PaymentMethodWechatTest extends AbstractPaymentMethodTest
{
    /**
     * @return PaymentMethodWechat
     */
    protected function getTestInstance()
    {
        return new PaymentMethodWechat();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return PaymentMethodType::WECHAT;
    }
}