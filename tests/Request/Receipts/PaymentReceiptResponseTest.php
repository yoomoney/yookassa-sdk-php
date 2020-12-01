<?php

namespace Tests\YooKassa\Request\Receipts;

use YooKassa\Helpers\Random;
use YooKassa\Request\Receipts\PaymentReceiptResponse;

class PaymentReceiptResponseTest extends AbstractReceiptResponseTest
{
    protected $type = 'payment';

    protected function getTestInstance($options)
    {
        return new PaymentReceiptResponse($options);
    }

    protected function addSpecificProperties($options)
    {
        $options['payment_id'] = Random::str(36, 36);
        return $options;
    }

    /**
     * @dataProvider validDataProvider
     * @param array $options
     */
    public function testSpecificProperties($options)
    {
        $instance = $this->getTestInstance($options);
        self::assertEquals($options['payment_id'], $instance->getPaymentId());
    }

}