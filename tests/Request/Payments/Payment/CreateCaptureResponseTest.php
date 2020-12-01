<?php

namespace Tests\YooKassa\Request\Payments\Payment;

use Tests\YooKassa\Request\Payments\AbstractPaymentResponseTest;
use YooKassa\Request\Payments\Payment\CreateCaptureResponse;

class CreateCaptureResponseTest extends AbstractPaymentResponseTest
{
    protected function getTestInstance($options)
    {
        return new CreateCaptureResponse($options);
    }
}
