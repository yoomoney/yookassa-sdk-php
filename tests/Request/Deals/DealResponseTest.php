<?php

namespace Tests\YooKassa\Request\Deals;

use YooKassa\Request\Deals\DealResponse;

class DealResponseTest extends AbstractDealResponseTest
{
    protected function getTestInstance($options)
    {
        return new DealResponse($options);
    }
}