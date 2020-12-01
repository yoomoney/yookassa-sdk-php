<?php

namespace Tests\YooKassa\Request\Payments;

use YooKassa\Request\Payments\CreatePaymentResponse;

class CreatePaymentResponseTest extends AbstractPaymentResponseTest
{
    protected function getTestInstance($options)
    {
        return new CreatePaymentResponse($options);
    }
}