<?php

namespace Tests\YooKassa\Request\Payments\Payment;

use PHPUnit\Framework\TestCase;
use YooKassa\Model\CurrencyCode;
use YooKassa\Model\MonetaryAmount;
use YooKassa\Model\Receipt;
use YooKassa\Model\ReceiptItem;
use YooKassa\Request\Payments\Payment\CreateCaptureRequest;
use YooKassa\Request\Payments\Payment\CreateCaptureRequestBuilder;

class CreateCaptureRequestTest extends TestCase
{
    /**
     * @dataProvider validDataProvider
     * @param $options
     */
    public function testRecipient($options)
    {
        $instance = new CreateCaptureRequest();
        self::assertFalse($instance->hasAmount());
        self::assertNull($instance->getAmount());
        self::assertNull($instance->amount);

        $instance->setAmount($options['amount']);
        self::assertTrue($instance->hasAmount());
        self::assertSame($options['amount'], $instance->getAmount());
        self::assertSame($options['amount'], $instance->amount);

        $instance = new CreateCaptureRequest();
        self::assertFalse($instance->hasAmount());
        self::assertNull($instance->getAmount());
        self::assertNull($instance->amount);

        $instance->amount = $options['amount'];
        self::assertTrue($instance->hasAmount());
        self::assertSame($options['amount'], $instance->getAmount());
        self::assertSame($options['amount'], $instance->amount);
    }

    public function testValidate()
    {
        $instance = new CreateCaptureRequest();

        self::assertTrue($instance->validate());
        $amount = new MonetaryAmount();
        $instance->setAmount($amount);
        self::assertFalse($instance->validate());
        $amount->setValue(1);
        self::assertTrue($instance->validate());

        $receipt = new Receipt();
        $instance->setReceipt($receipt);
        $item = new ReceiptItem();
        $item->setPrice(new MonetaryAmount(10));
        $item->setDescription('test');
        $receipt->addItem($item);
        self::assertFalse($instance->validate());
        $receipt->getCustomer()->setPhone('123123');
        self::assertTrue($instance->validate());
        $item->setVatCode(3);
        self::assertTrue($instance->validate());
        $receipt->setTaxSystemCode(4);
        self::assertTrue($instance->validate());

        self::assertNotNull($instance->getReceipt());
        $instance->removeReceipt();
        self::assertTrue($instance->validate());
        self::assertNull($instance->getReceipt());

        $instance->setAmount(new MonetaryAmount());
        self::assertFalse($instance->validate());
    }

    public function testBuilder()
    {
        $builder = CreateCaptureRequest::builder();
        self::assertTrue($builder instanceof CreateCaptureRequestBuilder);
    }

    public function validDataProvider()
    {
        $result = array();
        $currencies = CurrencyCode::getValidValues();
        for ($i = 0; $i < 10; $i++) {
            $request = array(
                'amount' => new MonetaryAmount(mt_rand(1, 1000000), $currencies[mt_rand(0, count($currencies) - 1)])
            );
            $result[] = array($request);
        }
        return $result;
    }
}