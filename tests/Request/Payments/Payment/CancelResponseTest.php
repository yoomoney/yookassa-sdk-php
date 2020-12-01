<?php

namespace Tests\YooKassa\Request\Payments\Payment;

use Tests\YooKassa\Request\Payments\AbstractPaymentResponseTest;
use YooKassa\Request\Payments\Payment\CancelResponse;

class CancelResponseTest extends AbstractPaymentResponseTest
{
    protected function getTestInstance($options)
    {
        return new CancelResponse($options);
    }
}