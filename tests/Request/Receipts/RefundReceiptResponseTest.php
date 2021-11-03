<?php

namespace Tests\YooKassa\Request\Receipts;

use YooKassa\Common\Exceptions\InvalidPropertyValueException;
use YooKassa\Common\Exceptions\InvalidPropertyValueTypeException;
use YooKassa\Helpers\Random;
use YooKassa\Model\Airline;
use YooKassa\Request\Receipts\RefundReceiptResponse;

class RefundReceiptResponseTest extends AbstractReceiptResponseTest
{
    protected $type = 'refund';

    protected function getTestInstance($options)
    {
        return new RefundReceiptResponse($options);
    }

    protected function addSpecificProperties($options, $i)
    {
        $array = array(
            Random::str(30),
            new \stdClass(),
            array(),
            new \stdClass(),
            new \Exception(),
            new Airline(),
            Random::str(40),
            array(new Airline())
        );
        $options['refund_id'] = !$this->valid
            ? (Random::value($array))
            : Random::value(array( null, '', Random::str(RefundReceiptResponse::LENGTH_REFUND_ID)));
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

    /**
     * @dataProvider invalidDataProvider
     * @param array $options
     */
    public function testInvalidSpecificProperties($options)
    {
        $this->valid = false;
        $catch = false;
        try {
            $instance = $this->getTestInstance($options);
            $instance->setRefundId($options['refund_id']);
        } catch (InvalidPropertyValueException $e) {
            $catch = true;
        } catch (InvalidPropertyValueTypeException $e) {
            $catch = true;
        }
        self::assertTrue($catch);

        $catch = false;
        try {
            $refundId = $options['refund_id'];
            $options['refund_id'] = Random::str(RefundReceiptResponse::LENGTH_REFUND_ID);
            $instance = $this->getTestInstance($options);
            $instance->setRefundId($refundId);
        } catch (InvalidPropertyValueException $e) {
            $catch = true;
        } catch (InvalidPropertyValueTypeException $e) {
            $catch = true;
        }
        self::assertTrue($catch);
    }
}