<?php

namespace Tests\YooKassa\Request\Deals;

use YooKassa\Request\Deals\CreateDealResponse;

class CreateDealResponseTest extends AbstractDealResponseTest
{
    protected function getTestInstance($options)
    {
        return new CreateDealResponse($options);
    }
}
