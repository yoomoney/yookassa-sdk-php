<?php

namespace Tests\YooKassa\Request\Receipts;

use YooKassa\Helpers\Random;
use YooKassa\Request\Receipts\RefundReceiptResponse;

class RefundReceiptResponseTest extends AbstractReceiptResponseTest
{
    protected $type = 'refund';

    protected function getTestInstance($options)
    {
        return new RefundReceiptResponse($options);
    }

    protected function addSpecificProperties($options)
    {
        $options['refund_id'] = Random::str(36, 36);
        return $options;
    }

    /**
     * @dataProvider validDataProvider
     * @param array $options
     */
    public function testSpecificProperties($options)
    {
        $instance = $this->getTestInstance($options);
        self::assertEquals($options['refund_id'], $instance->getRefundId());
    }
}