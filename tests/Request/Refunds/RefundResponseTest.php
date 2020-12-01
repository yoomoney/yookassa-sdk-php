<?php

namespace Tests\YooKassa\Request\Refunds;

use YooKassa\Request\Refunds\RefundResponse;

class RefundResponseTest extends AbstractRefundResponseTest
{
    /**
     * @param array $options
     * @return RefundResponse
     */
    protected function getTestInstance($options)
    {
        return new RefundResponse($options);
    }
}