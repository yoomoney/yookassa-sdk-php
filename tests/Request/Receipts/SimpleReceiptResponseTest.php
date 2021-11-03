<?php

namespace Tests\YooKassa\Request\Receipts;

use YooKassa\Request\Receipts\SimpleReceiptResponse;

class SimpleReceiptResponseTest extends AbstractReceiptResponseTest
{
    protected $type = 'simple';

    protected function getTestInstance($options)
    {
        return new SimpleReceiptResponse($options);
    }

    protected function addSpecificProperties($options, $i)
    {
        return $options;
    }

    /**
     * @dataProvider validDataProvider
     * @param array $options
     */
    public function testSpecificProperties($options)
    {
        $instance = $this->getTestInstance($options);
        self::assertEquals($options['id'], $instance->getId());
    }

}