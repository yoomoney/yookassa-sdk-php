<?php

namespace Tests\YooKassa\Request\Payments\Payment;

use PHPUnit\Framework\TestCase;
use YooKassa\Helpers\Random;
use YooKassa\Model\AmountInterface;
use YooKassa\Model\CurrencyCode;
use YooKassa\Model\MonetaryAmount;
use YooKassa\Model\Payment;
use YooKassa\Model\Receipt\PaymentMode;
use YooKassa\Model\Receipt\PaymentSubject;
use YooKassa\Model\ReceiptItem;
use YooKassa\Model\Transfer;
use YooKassa\Request\Payments\Payment\CreateCaptureRequestBuilder;

class CreateCaptureRequestBuilderTest extends TestCase
{
    /**
     * @dataProvider validDataProvider
     *
     * @param $options
     */
    public function testSetAmountValue($options)
    {
        $builder = new CreateCaptureRequestBuilder();
        $builder->setAmount($options['amount']);
        $instance = $builder->build();

        if (empty($options['amount'])) {
            self::assertNull($instance->getAmount());
        } else {
            self::assertNotNull($instance->getAmount());
            self::assertEquals($options['amount'], $instance->getAmount()->getValue());
        }
    }

    /**
     * @dataProvider validAmountDataProvider
     *
     * @param AmountInterface $amount
     */
    public function testSetAmount($amount)
    {
        $builder = new CreateCaptureRequestBuilder();

        $builder->setAmount($amount);
        $instance = $builder->build();

        self::assertNotNull($instance->getAmount());
        self::assertEquals($amount->getValue(), $instance->getAmount()->getValue());
        self::assertEquals($amount->getCurrency(), $instance->getAmount()->getCurrency());

        $builder->setAmount(array(
            'value'    => $amount->getValue(),
            'currency' => $amount->getCurrency(),
        ));
        $instance = $builder->build();

        self::assertNotNull($instance->getAmount());
        self::assertEquals($amount->getValue(), $instance->getAmount()->getValue());
        self::assertEquals($amount->getCurrency(), $instance->getAmount()->getCurrency());
    }

    /**
     * @dataProvider invalidAmountDataProvider
     * @expectedException \InvalidArgumentException
     *
     * @param $value
     */
    public function testSetInvalidAmount($value)
    {
        $builder = new CreateCaptureRequestBuilder();
        $builder->setAmount($value);
    }

    /**
     * @dataProvider validDataProvider
     *
     * @param $options
     */
    public function testSetAmountCurrency($options)
    {
        $builder = new CreateCaptureRequestBuilder();

        $builder->setCurrency($options['currency']);
        $instance = $builder->build(array('amount' => mt_rand(1, 100)));

        self::assertNotNull($instance->getAmount());
        self::assertEquals($options['currency'], $instance->getAmount()->getCurrency());
    }

    /**
     * @dataProvider invalidCurrencyDataProvider
     * @expectedException \InvalidArgumentException
     *
     * @param $value
     */
    public function testSetInvalidCurrency($value)
    {
        $builder = new CreateCaptureRequestBuilder();
        $builder->setCurrency($value);
    }

    /**
     * @dataProvider validDataProvider
     *
     * @param $options
     */
    public function testSetReceiptItems($options)
    {
        $builder = new CreateCaptureRequestBuilder();

        $builder->setReceiptItems($options['receiptItems']);
        $builder->setReceiptEmail($options['receiptEmail']);
        $instance = $builder->build();

        if (empty($options['receiptItems'])) {
            self::assertNull($instance->getReceipt());
        } else {
            self::assertNotNull($instance->getReceipt());
            self::assertEquals(count($options['receiptItems']), count($instance->getReceipt()->getItems()));
        }
    }

    /**
     * @dataProvider validDataProvider
     *
     * @param $options
     */
    public function testAddReceiptItems($options)
    {
        $builder = new CreateCaptureRequestBuilder();

        foreach ($options['receiptItems'] as $item) {
            if ($item instanceof ReceiptItem) {
                $builder->addReceiptItem(
                    $item->getDescription(), $item->getPrice()->getValue(), $item->getQuantity(), $item->getVatCode()
                );
            } else {
                $builder->addReceiptItem($item['title'], $item['price'], $item['quantity'], $item['vatCode']);
            }
        }
        $builder->setReceiptEmail($options['receiptEmail']);
        $instance = $builder->build();

        if (empty($options['receiptItems'])) {
            self::assertNull($instance->getReceipt());
        } else {
            self::assertNotNull($instance->getReceipt());
            self::assertEquals(count($options['receiptItems']), count($instance->getReceipt()->getItems()));
            foreach ($instance->getReceipt()->getItems() as $item) {
                self::assertFalse($item->isShipping());
            }
        }
    }

    /**
     * @dataProvider validDataProvider
     *
     * @param $options
     */
    public function testAddReceiptShipping($options)
    {
        $builder = new CreateCaptureRequestBuilder();

        foreach ($options['receiptItems'] as $item) {
            if ($item instanceof ReceiptItem) {
                $builder->addReceiptShipping(
                    $item->getDescription(), $item->getPrice()->getValue(), $item->getVatCode()
                );
            } else {
                $builder->addReceiptShipping($item['title'], $item['price'], $item['vatCode']);
            }
        }
        $builder->setReceiptEmail($options['receiptEmail']);
        $instance = $builder->build();

        if (empty($options['receiptItems'])) {
            self::assertNull($instance->getReceipt());
        } else {
            self::assertNotNull($instance->getReceipt());
            self::assertEquals(count($options['receiptItems']), count($instance->getReceipt()->getItems()));
            foreach ($instance->getReceipt()->getItems() as $item) {
                self::assertTrue($item->isShipping());
            }
        }
    }

    /**
     * @dataProvider invalidItemsDataProvider
     * @expectedException \InvalidArgumentException
     *
     * @param $items
     */
    public function testSetInvalidReceiptItems($items)
    {
        $builder = new CreateCaptureRequestBuilder();
        $builder->setReceiptItems($items);
    }

    public function invalidItemsDataProvider()
    {
        return array(
            array(
                array(
                    array(
                        'price'    => 1,
                        'quantity' => 1.4,
                        'vatCode'  => 3,
                    ),
                ),
            ),
            array(
                array(
                    array(
                        'title'    => 'test',
                        'quantity' => 1.4,
                        'vatCode'  => 3,
                    ),
                ),
            ),
            array(
                array(
                    array(
                        'description' => 'test',
                        'quantity'    => 1.4,
                        'vatCode'     => 3,
                    ),
                ),
            ),
            array(
                array(
                    array(
                        'title'    => 'test',
                        'price'    => 123,
                        'quantity' => 1.4,
                        'vatCode'  => 7,
                    ),
                ),
            ),
            array(
                array(
                    array(
                        'description' => 'test',
                        'price'       => 123,
                        'quantity'    => -1.4,
                    ),
                ),
            ),
        );
    }

    /**
     * @dataProvider validDataProvider
     *
     * @param $options
     */
    public function testSetReceiptEmail($options)
    {
        $builder = new CreateCaptureRequestBuilder();

        $builder->setReceiptItems($options['receiptItems']);
        $builder->setReceiptEmail($options['receiptEmail']);
        $instance = $builder->build();

        if (empty($options['receiptItems'])) {
            self::assertNull($instance->getReceipt());
        } else {
            self::assertNotNull($instance->getReceipt());
            self::assertEquals($options['receiptEmail'], $instance->getReceipt()->getCustomer()->getEmail());
        }
    }

    /**
     * @dataProvider invalidEmailDataProvider
     * @expectedException \InvalidArgumentException
     *
     * @param $value
     */
    public function testSetInvalidEmail($value)
    {
        $builder = new CreateCaptureRequestBuilder();
        $builder->setReceiptEmail($value);
    }

    /**
     * @dataProvider validDataProvider
     *
     * @param $options
     */
    public function testSetReceiptPhone($options)
    {
        $builder = new CreateCaptureRequestBuilder();

        $builder->setReceiptItems($options['receiptItems']);
        $builder->setReceiptEmail($options['receiptEmail']);
        $builder->setReceiptPhone($options['receiptPhone']);
        $instance = $builder->build();

        if (empty($options['receiptItems'])) {
            self::assertNull($instance->getReceipt());
        } else {
            self::assertNotNull($instance->getReceipt());
            self::assertEquals($options['receiptPhone'], $instance->getReceipt()->getCustomer()->getPhone());
        }
    }

    /**
     * @dataProvider invalidPhoneDataProvider
     * @expectedException \InvalidArgumentException
     *
     * @param $value
     */
    public function testSetInvalidPhone($value)
    {
        $builder = new CreateCaptureRequestBuilder();
        $builder->setReceiptPhone($value);
    }

    /**
     * @dataProvider validDataProvider
     *
     * @param $options
     */
    public function testSetReceiptTaxSystemCode($options)
    {
        $builder = new CreateCaptureRequestBuilder();

        $builder->setReceiptItems($options['receiptItems']);
        $builder->setReceiptEmail($options['receiptEmail']);
        $builder->setTaxSystemCode($options['taxSystemCode']);
        $instance = $builder->build();

        if (empty($options['receiptItems'])) {
            self::assertNull($instance->getReceipt());
        } else {
            self::assertNotNull($instance->getReceipt());
            self::assertEquals($options['taxSystemCode'], $instance->getReceipt()->getTaxSystemCode());
        }
    }

    /**
     * @dataProvider invalidVatIdDataProvider
     * @expectedException \InvalidArgumentException
     *
     * @param $value
     */
    public function testSetInvalidTaxSystemId($value)
    {
        $builder = new CreateCaptureRequestBuilder();
        $builder->setTaxSystemCode($value);
    }

    public function testSetReceipt()
    {
        $receipt = array(
            'tax_system_code' => Random::int(1, 6),
            'customer' => array(
                'email' => Random::str(10),
                'phone' => Random::str(4, 15, '0123456789'),
            ),
            'items' => array(
                array(
                    'description'     => 'test',
                    'quantity'        => 123,
                    'amount'          => array(
                        'value'    => 321,
                        'currency' => 'USD',
                    ),
                    'vat_code'        => Random::int(1, 6),
                    'payment_subject' => PaymentSubject::COMMODITY,
                    'payment_mode'    => PaymentMode::PARTIAL_PREPAYMENT,
                ),
            ),
        );

        $builder = new CreateCaptureRequestBuilder();
        $builder->setReceipt($receipt);
        $instance = $builder->build();

        self::assertEquals($receipt['tax_system_code'], $instance->getReceipt()->getTaxSystemCode());
        self::assertEquals($receipt['customer']['email'], $instance->getReceipt()->getCustomer()->getEmail());
        self::assertEquals($receipt['customer']['phone'], $instance->getReceipt()->getCustomer()->getPhone());
        self::assertEquals(1, count($instance->getReceipt()->getItems()));

        $receipt = $instance->getReceipt();

        $builder = new CreateCaptureRequestBuilder();
        $builder->setReceipt($instance->getReceipt());
        $instance = $builder->build();

        self::assertEquals($receipt['tax_system_code'], $instance->getReceipt()->getTaxSystemCode());
        self::assertEquals($receipt['customer']['email'], $instance->getReceipt()->getCustomer()->getEmail());
        self::assertEquals($receipt['customer']['phone'], $instance->getReceipt()->getCustomer()->getPhone());
        self::assertEquals(1, count($instance->getReceipt()->getItems()));
    }

    /**
     * @dataProvider invalidReceiptDataProvider
     * @expectedException \InvalidArgumentException
     *
     * @param mixed $value
     */
    public function testSetInvalidReceipt($value)
    {
        $builder = new CreateCaptureRequestBuilder();
        $builder->setReceipt($value);
    }

    public function invalidReceiptDataProvider()
    {
        return array(
            array(null),
            array(true),
            array(false),
            array(1),
            array(1.1),
            array('test'),
            array(new \stdClass()),
        );
    }

    /**
     * @dataProvider validDataProvider
     *
     * @param $options
     */
    public function testBuild($options)
    {
        $builder  = new CreateCaptureRequestBuilder();
        $instance = $builder->build($options);
        if (!empty($options['amount'])) {
            self::assertNotNull($instance->getAmount());
            self::assertEquals($options['amount'], $instance->getAmount()->getValue());
            self::assertEquals($options['currency'], $instance->getAmount()->getCurrency());
        } else {
            self::assertNull($instance->getAmount());
        }
    }

    public function validDataProvider()
    {
        $receiptItem = new ReceiptItem();
        $receiptItem->setPrice(new MonetaryAmount(1));
        $receiptItem->setQuantity(1);
        $receiptItem->setDescription('test');
        $receiptItem->setVatCode(3);

        $result = array(
            array(
                array(
                    'amount'        => null,
                    'currency'      => Random::value(CurrencyCode::getValidValues()),
                    'receiptItems'  => array(
                        array(
                            'title'    => 'test',
                            'quantity' => mt_rand(1, 100),
                            'price'    => mt_rand(1, 100),
                            'vatCode'  => mt_rand(1, 6),
                        ),
                        $receiptItem,
                    ),
                    'receiptEmail'  => Random::str(32),
                    'receiptPhone'  => null,
                    'taxSystemCode' => null,
                    'transfers' => null,
                    'deal' => null,
                    'merchant_customer_id' => null,
                ),
            ),
        );
        for ($i = 0; $i < 10; $i++) {
            $request  = array(
                'receiptItems'  => array(),
                'amount'        => Random::int(1, 1000000),
                'currency'      => Random::value(CurrencyCode::getValidValues()),
                'receiptEmail'  => null,
                'receiptPhone'  => Random::str(10, '0123456789'),
                'taxSystemCode' => Random::int(1, 6),
                'transfers' => array(
                    new Transfer(array(
                        'account_id' => Random::str(36),
                        'amount' => new MonetaryAmount(Random::int(1, 1000), 'RUB'),
                        'platform_fee_amount' => new MonetaryAmount(Random::int(1, 1000), 'RUB'),
                    )),
                ),
                'deal' => array(
                    'id' => Random::str(36, 50),
                    'settlements' => array()
                ),
                'merchant_customer_id' => Random::str(5, Payment::MAX_LENGTH_MERCHANT_CUSTOMER_ID),
            );
            $result[] = array($request);
        }

        return $result;
    }

    public function validAmountDataProvider()
    {
        return array(
            array(new MonetaryAmount(Random::int(1, 1000000))),
            array(new MonetaryAmount(Random::int(1, 1000000)), Random::value(CurrencyCode::getValidValues())),
        );
    }

    public function invalidAmountDataProvider()
    {
        return array(
            array(-1),
            array(Random::str(10)),
            array(new \stdClass()),
            array(true),
            array(false),
        );
    }

    public function invalidCurrencyDataProvider()
    {
        return array(
            array(array()),
            array(null),
            array(''),
            array(-1),
            array(new \stdClass()),
            array(Random::str(10)),
            array(true),
            array(false),
        );
    }

    public function invalidEmailDataProvider()
    {
        return array(
            array(array()),
            array(true),
            array(false),
            array(new \stdClass()),
        );
    }

    public function invalidPhoneDataProvider()
    {
        return array(
            array(new \stdClass()),
            array(array()),
            array(true),
            array(false),
        );
    }

    public function invalidVatIdDataProvider()
    {
        return array(
            array(array()),
            array(true),
            array(false),
            array(new \stdClass()),
            array(0),
            array(7),
            array(Random::int(-100, -1)),
            array(Random::int(7, 100)),
        );
    }
}