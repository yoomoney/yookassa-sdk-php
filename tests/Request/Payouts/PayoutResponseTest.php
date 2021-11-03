<?php

namespace Tests\YooKassa\Request\Payouts;

use YooKassa\Request\Payouts\PayoutResponse;

class PayoutResponseTest extends AbstractPayoutResponseTest
{
    protected function getTestInstance($options)
    {
        return new PayoutResponse($options);
    }
}