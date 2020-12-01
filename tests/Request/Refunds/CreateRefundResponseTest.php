<?php

namespace Tests\YooKassa\Request\Refunds;

use YooKassa\Request\Refunds\CreateRefundResponse;

class CreateRefundResponseTest extends AbstractRefundResponseTest
{
    /**
     * @param array $options
     * @return CreateRefundResponse
     */
    protected function getTestInstance($options)
    {
        return new CreateRefundResponse($options);
    }
}