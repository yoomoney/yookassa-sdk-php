<?php

namespace Tests\YooKassa\Request\Refunds;

use PHPUnit\Framework\TestCase;
use YooKassa\Helpers\Random;
use YooKassa\Model\AmountInterface;
use YooKassa\Model\CurrencyCode;
use YooKassa\Model\MonetaryAmount;
use YooKassa\Model\Receipt\PaymentMode;
use YooKassa\Model\Receipt\PaymentSubject;
use YooKassa\Model\ReceiptItem;
use YooKassa\Request\Refunds\CreateRefundRequestBuilder;

class CreateRefundRequestBuilderTest extends TestCase
{
    /**
     * @dataProvider validDataProvider
     *
     * @param $options
     */
    public function testSetPaymentId($options)
    {
        $builder = new CreateRefundRequestBuilder();
        try {
            $builder->build(array('amountValue' => mt_rand(1, 100)));
        } catch (\RuntimeException $e) {
            $builder->setPaymentId($options['paymentId']);
            $instance = $builder->build(array('amount' => mt_rand(1, 100)));
            self::assertEquals($options['paymentId'], $instance->getPaymentId());

            return;
        }
        self::fail('Exception not thrown');
    }

    /**
     * @dataProvider validDataProvider
     *
     * @param $options
     * @throws \Exception
     */
    public function testSetAmountValue($options)
    {
        $builder = new CreateRefundRequestBuilder();
        try {
            $builder->build(array('paymentId' => Random::str(36)));
        } catch (\RuntimeException $e) {
            $builder->setAmount($options['amount']);
            $instance = $builder->build(array('paymentId' => Random::str(36)));
            if ($options['amount'] instanceof AmountInterface) {
                self::assertEquals($options['amount']->getValue(), $instance->getAmount()->getValue());
            } else {
                self::assertEquals($options['amount'], $instance->getAmount()->getValue());
            }


            if ($options['amount'] instanceof AmountInterface) {
                $builder->setAmount(array(
                    'value'    => $options['amount']->getValue(),
                    'currency' => 'USD',
                ));
                $instance = $builder->build(array('paymentId' => Random::str(36)));
                self::assertEquals($options['amount']->getValue(), $instance->getAmount()->getValue());
            } else {
                $builder->setAmount(array(
                    'value'    => $options['amount'],
                    'currency' => 'USD',
                ));
                $instance = $builder->build(array('paymentId' => Random::str(36)));
                self::assertEquals($options['amount'], $instance->getAmount()->getValue());
            }

            return;
        }
        self::fail('Exception not thrown');
    }

    /**
     * @dataProvider validDataProvider
     *
     * @param $options
     * @throws \Exception
     */
    public function testSetAmountCurrency($options)
    {
        $builder = new CreateRefundRequestBuilder();

        $builder->setCurrency($options['currency']);
        $instance = $builder->build(array(
            'paymentId' => Random::str(36),
            'amount'    => mt_rand(1, 100),
        ));
        self::assertEquals($options['currency'], $instance->getAmount()->getCurrency());
    }

    /**
     * @dataProvider validDataProvider
     *
     * @param $options
     * @throws \Exception
     */
    public function testSetComment($options)
    {
        $builder  = new CreateRefundRequestBuilder();
        $instance = $builder->build(array(
            'paymentId' => Random::str(36),
            'amount'    => mt_rand(1, 100),
        ));
        self::assertNull($instance->getDescription());

        $builder->setDescription($options['description']);
        $instance = $builder->build(array(
            'paymentId' => Random::str(36),
            'amount'    => mt_rand(1, 100),
        ));
        if (empty($options['description'])) {
            self::assertNull($instance->getDescription());
        } else {
            self::assertEquals($options['description'], $instance->getDescription());
        }
    }

    /**
     * @dataProvider validDataProvider
     *
     * @param $options
     */
    public function testBuild($options)
    {
        $builder  = new CreateRefundRequestBuilder();
        $instance = $builder->build($options);

        self::assertEquals($options['paymentId'], $instance->getPaymentId());
        if ($options['amount'] instanceof AmountInterface) {
            self::assertEquals($options['amount']->getValue(), $instance->getAmount()->getValue());
        } else {
            self::assertEquals($options['amount'], $instance->getAmount()->getValue());
        }
        self::assertEquals($options['currency'], $instance->getAmount()->getCurrency());
        if (empty($options['description'])) {
            self::assertNull($instance->getDescription());
        } else {
            self::assertEquals($options['description'], $instance->getDescription());
        }
    }

    /**
     * @dataProvider validDataProvider
     *
     * @param $options
     * @throws \Exception
     */
    public function testSetReceiptItems($options)
    {
        $builder = new CreateRefundRequestBuilder();

        $builder->setReceiptItems($options['receiptItems']);
        $builder->setReceiptEmail($options['receiptEmail']);
        $instance = $builder->build($this->getRequiredData());

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
     * @throws \Exception
     */
    public function testAddReceiptItems($options)
    {
        $builder = new CreateRefundRequestBuilder();

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
        $instance = $builder->build($this->getRequiredData());

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
     * @throws \Exception
     */
    public function testAddReceiptShipping($options)
    {
        $builder = new CreateRefundRequestBuilder();

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
        $instance = $builder->build($this->getRequiredData());

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
        $builder = new CreateRefundRequestBuilder();
        $builder->setReceiptItems($items);
    }

    /**
     * @throws \Exception
     */
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

        $builder = new CreateRefundRequestBuilder();
        $builder->setReceipt($receipt);
        $instance = $builder->build($this->getRequiredData());

        self::assertEquals($receipt['tax_system_code'], $instance->getReceipt()->getTaxSystemCode());
        self::assertEquals($receipt['customer']['email'], $instance->getReceipt()->getCustomer()->getEmail());
        self::assertEquals($receipt['customer']['phone'], $instance->getReceipt()->getCustomer()->getPhone());
        self::assertEquals(1, count($instance->getReceipt()->getItems()));

        $receipt = $instance->getReceipt();

        $builder = new CreateRefundRequestBuilder();
        $builder->setReceipt($instance->getReceipt());
        $instance = $builder->build($this->getRequiredData());

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
        $builder = new CreateRefundRequestBuilder();
        $builder->setReceipt($value);
    }

    /**
     * @return array
     */
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
     * @return array
     */
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
            array(
                array(
                    array(
                        'title'   => 'test',
                        'price'   => 1,
                        'vatCode' => 7,
                    ),
                ),
            ),
        );
    }

    /**
     * @dataProvider validDataProvider
     *
     * @param $options
     * @throws \Exception
     */
    public function testSetReceiptEmail($options)
    {
        $builder = new CreateRefundRequestBuilder();

        $builder->setReceiptItems($options['receiptItems']);
        $builder->setReceiptEmail($options['receiptEmail']);
        $instance = $builder->build($this->getRequiredData());

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
        $builder = new CreateRefundRequestBuilder();
        $builder->setReceiptEmail($value);
    }

    /**
     * @dataProvider validDataProvider
     *
     * @param $options
     * @throws \Exception
     */
    public function testSetReceiptPhone($options)
    {
        $builder = new CreateRefundRequestBuilder();

        $builder->setReceiptItems($options['receiptItems']);
        $builder->setReceiptEmail($options['receiptEmail']);
        $builder->setReceiptPhone($options['receiptPhone']);
        $instance = $builder->build($this->getRequiredData());

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
        $builder = new CreateRefundRequestBuilder();
        $builder->setReceiptPhone($value);
    }

    /**
     * @dataProvider validDataProvider
     *
     * @param $options
     * @throws \Exception
     */
    public function testSetReceiptTaxSystemCode($options)
    {
        $builder = new CreateRefundRequestBuilder();

        $builder->setReceiptItems($options['receiptItems']);
        $builder->setReceiptEmail($options['receiptEmail']);
        $builder->setTaxSystemCode($options['taxSystemCode']);
        $instance = $builder->build($this->getRequiredData());

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
        $builder = new CreateRefundRequestBuilder();
        $builder->setTaxSystemCode($value);
    }


    /**
     * @return array
     * @throws \Exception
     */
    public function validDataProvider()
    {
        $result = array(
            array(
                array(
                    'paymentId'     => Random::str(36),
                    'amount'        => mt_rand(1, 999999),
                    'currency'      => Random::value(CurrencyCode::getValidValues()),
                    'description'       => null,
                    'receiptItems'  => array(),
                    'receiptEmail'  => null,
                    'receiptPhone'  => null,
                    'taxSystemCode' => Random::int(1, 6),
                ),
            ),
            array(
                array(
                    'paymentId'     => Random::str(36),
                    'amount'        => new MonetaryAmount(
                        Random::int(1, 999999),
                        Random::value(CurrencyCode::getValidValues())
                    ),
                    'currency'      => Random::value(CurrencyCode::getValidValues()),
                    'description'       => '',
                    'receiptItems'  => array(),
                    'receiptEmail'  => '',
                    'receiptPhone'  => '',
                    'taxSystemCode' => Random::int(1, 6),
                ),
            ),
        );
        $items  = array(
            new ReceiptItem(),
            array(
                'title'    => 'test',
                'price'    => Random::int(1, 999999),
                'quantity' => Random::int(1, 9999),
                'vatCode'  => Random::int(1, 6),
            ),
        );
        $items[0]->setDescription('test1');
        $items[0]->setQuantity(Random::int(1, 9999));
        $items[0]->setPrice(new MonetaryAmount(Random::int(1, 999999)));
        $items[0]->setVatCode(Random::int(1, 6));
        for ($i = 0; $i < 10; $i++) {
            $request  = array(
                'paymentId'     => Random::str(36),
                'amount'        => mt_rand(1, 999999),
                'currency'      => Random::value(CurrencyCode::getValidValues()),
                'description'       => uniqid(),
                'receiptItems'  => $items,
                'receiptEmail'  => uniqid(),
                'receiptPhone'  => Random::str(4, 15, '0123456789'),
                'taxSystemCode' => Random::int(1, 6),
            );
            $result[] = array($request);
        }

        return $result;
    }

    /**
     * @return array
     * @throws \Exception
     */
    private function getRequiredData()
    {
        return array(
            'paymentId' => Random::str(36),
            'amount'    => mt_rand(1, 100),
        );
    }

    /**
     * @return array
     */
    public function invalidEmailDataProvider()
    {
        return array(
            array(array()),
            array(true),
            array(false),
            array(new \stdClass()),
        );
    }

    /**
     * @return array
     */
    public function invalidPhoneDataProvider()
    {
        return array(
            array(new \stdClass()),
            array(array()),
            array(true),
            array(false),
        );
    }

    /**
     * @return array
     * @throws \Exception
     */
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