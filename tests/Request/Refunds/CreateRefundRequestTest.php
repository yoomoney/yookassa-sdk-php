<?php

namespace Tests\YooKassa\Request\Refunds;

use PHPUnit\Framework\TestCase;
use YooKassa\Helpers\Random;
use YooKassa\Model\Deal\RefundDealData;
use YooKassa\Model\Deal\SettlementPayoutPaymentType;
use YooKassa\Model\MonetaryAmount;
use YooKassa\Model\Receipt;
use YooKassa\Model\ReceiptItem;
use YooKassa\Request\Refunds\CreateRefundRequest;
use YooKassa\Request\Refunds\CreateRefundRequestBuilder;

class CreateRefundRequestTest extends TestCase
{
    /**
     * @dataProvider validDataProvider
     * @param $options
     */
    public function testPaymentId($options)
    {
        $instance = new CreateRefundRequest();

        self::assertNull($instance->getPaymentId());
        self::assertNull($instance->paymentId);

        $instance->setPaymentId($options['paymentId']);

        self::assertEquals($options['paymentId'], $instance->getPaymentId());
        self::assertEquals($options['paymentId'], $instance->paymentId);

        $instance = new CreateRefundRequest();

        self::assertNull($instance->getPaymentId());
        self::assertNull($instance->paymentId);

        $instance->paymentId = $options['paymentId'];

        self::assertEquals($options['paymentId'], $instance->getPaymentId());
        self::assertEquals($options['paymentId'], $instance->paymentId);
    }

    /**
     * @dataProvider invalidPaymentIdDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetInvalidPaymentId($value)
    {
        $instance = new CreateRefundRequest();
        $instance->setPaymentId($value);
    }

    /**
     * @dataProvider invalidPaymentIdDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetterInvalidPaymentId($value)
    {
        $instance = new CreateRefundRequest();
        $instance->paymentId = $value;
    }

    /**
     * @dataProvider validDataProvider
     * @param $options
     */
    public function testAmount($options)
    {
        $instance = new CreateRefundRequest();

        self::assertNull($instance->getAmount());
        self::assertNull($instance->amount, $instance->getAmount());

        $instance->setAmount($options['amount']);

        self::assertEquals($options['amount']->getValue(), $instance->getAmount()->getValue());
        self::assertEquals($options['amount']->getValue(), $instance->amount->getValue());
        self::assertEquals($options['amount']->getCurrency(), $instance->getAmount()->getCurrency());
        self::assertEquals($options['amount']->getCurrency(), $instance->amount->getCurrency());

        $instance = new CreateRefundRequest();

        $instance->amount = $options['amount'];

        self::assertEquals($options['amount']->getValue(), $instance->getAmount()->getValue());
        self::assertEquals($options['amount']->getValue(), $instance->amount->getValue());
        self::assertEquals($options['amount']->getCurrency(), $instance->getAmount()->getCurrency());
        self::assertEquals($options['amount']->getCurrency(), $instance->amount->getCurrency());
    }

    /**
     * @dataProvider validDataProvider
     * @param $options
     */
    public function testDescription($options)
    {
        $instance = new CreateRefundRequest();

        self::assertFalse($instance->hasDescription());
        self::assertNull($instance->getDescription());
        self::assertNull($instance->description);

        $instance->setDescription($options['description']);
        if (empty($options['description'])) {
            self::assertFalse($instance->hasDescription());
            self::assertNull($instance->getDescription());
            self::assertNull($instance->description);
        } else {
            self::assertTrue($instance->hasDescription());
            self::assertEquals($options['description'], $instance->getDescription());
            self::assertEquals($options['description'], $instance->description);
        }

        $instance->setDescription('');
        self::assertFalse($instance->hasDescription());
        self::assertNull($instance->getDescription());
        self::assertNull($instance->description);

        $instance->description = $options['description'];
        if (empty($options['description'])) {
            self::assertFalse($instance->hasDescription());
            self::assertNull($instance->getDescription());
            self::assertNull($instance->description);
        } else {
            self::assertTrue($instance->hasDescription());
            self::assertEquals($options['description'], $instance->getDescription());
            self::assertEquals($options['description'], $instance->description);
        }
    }

    /**
     * @dataProvider invalidDescriptionDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetInvalidDescription($value)
    {
        $instance = new CreateRefundRequest();
        $instance->setDescription($value);
    }

    /**
     * @dataProvider invalidDescriptionDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetterInvalidDescription($value)
    {
        $instance = new CreateRefundRequest();
        $instance->description = $value;
    }

    /**
     * @dataProvider validDataProvider
     * @param $options
     */
    public function testDeal($options)
    {
        $instance = new CreateRefundRequest();

        self::assertFalse($instance->hasDeal());
        self::assertNull($instance->getDeal());
        self::assertNull($instance->deal);

        $instance->setDeal($options['deal']);
        if (empty($options['deal'])) {
            self::assertFalse($instance->hasDeal());
            self::assertNull($instance->getDeal());
            self::assertNull($instance->deal);
        } else {
            self::assertTrue($instance->hasDeal());
            if (is_array($options['deal'])) {
                self::assertEquals($options['deal'], $instance->getDeal()->toArray());
                self::assertEquals($options['deal'], $instance->deal->toArray());
            } else {
                self::assertEquals($options['deal']->toArray(), $instance->getDeal()->toArray());
                self::assertEquals($options['deal']->toArray(), $instance->deal->toArray());
            }
        }

        $instance->setDeal(null);
        self::assertFalse($instance->hasDeal());
        self::assertNull($instance->getDeal());
        self::assertNull($instance->deal);

        $instance->deal = $options['deal'];
        if (empty($options['deal'])) {
            self::assertFalse($instance->hasDeal());
            self::assertNull($instance->getDeal());
            self::assertNull($instance->deal);
        } else {
            self::assertTrue($instance->hasDeal());
            if (is_array($options['deal'])) {
                self::assertEquals($options['deal'], $instance->getDeal()->toArray());
                self::assertEquals($options['deal'], $instance->deal->toArray());
            } else {
                self::assertEquals($options['deal']->toArray(), $instance->getDeal()->toArray());
                self::assertEquals($options['deal']->toArray(), $instance->deal->toArray());
            }
        }
    }

    /**
     * @dataProvider invalidDealDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetInvalidDeal($value)
    {
        $instance = new CreateRefundRequest();
        $instance->setDeal($value);
    }

    /**
     * @dataProvider invalidDealDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetterInvalidDeal($value)
    {
        $instance = new CreateRefundRequest();
        $instance->deal = $value;
    }

    public function testValidate()
    {
        $instance = new CreateRefundRequest();

        self::assertFalse($instance->validate());
        $instance->setAmount(new MonetaryAmount());
        self::assertFalse($instance->validate());
        $instance->setAmount(new MonetaryAmount(Random::int(1, 100000)));
        self::assertFalse($instance->validate());
        $instance->setDeal(array(
            'refund_settlements' => array(
                array(
                    'type' => Random::value(SettlementPayoutPaymentType::getValidValues()),
                    'amount' => array(
                        'value' => round(Random::float(1.00, 100.00), 2),
                        'currency' => 'RUB',
                    )
                ),
            )
        ));
        self::assertFalse($instance->validate());
        $instance->setPaymentId(Random::str(36));
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
    }

    /**
     * @dataProvider invalidReceiptDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetInvalidReceipt($value)
    {
        $instance = new CreateRefundRequest();
        $instance->setReceipt($value);
    }

    /**
     * @dataProvider invalidReceiptDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetterInvalidReceipt($value)
    {
        $instance = new CreateRefundRequest();
        $instance->receipt = $value;
    }

    public function testBuilder()
    {
        $builder = CreateRefundRequest::builder();
        self::assertTrue($builder instanceof CreateRefundRequestBuilder);
    }

    /**
     * @dataProvider invalidSourceDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testInvalidSetSources($value)
    {
        $instance = new CreateRefundRequest();
        $instance->setSources($value);
    }

    public function validDataProvider()
    {
        $result = array(
            array(
                array(
                    'paymentId' => Random::str(36),
                    'amount' => new MonetaryAmount(mt_rand(1, 100)),
                    'description' => null,
                    'deal' => null,
                )
            ),
            array(
                array(
                    'paymentId' => Random::str(36),
                    'amount' => new MonetaryAmount(mt_rand(1, 100)),
                    'description' => '',
                    'deal' => '',
                )
            ),
            array(
                array(
                    'paymentId' => Random::str(36),
                    'amount' => new MonetaryAmount(mt_rand(1, 100)),
                    'description' => '',
                    'deal' => new RefundDealData(array(
                        'refund_settlements' => array(
                            array(
                                'type' => Random::value(SettlementPayoutPaymentType::getValidValues()),
                                'amount' => array(
                                    'value' => round(Random::float(1.00, 100.00), 2),
                                    'currency' => 'RUB',
                                )
                            ),
                        )
                    )),
                )
            )
        );
        for ($i = 0; $i < 10; $i++) {
            $request = array(
                'paymentId' => Random::str(36),
                'amount' => new MonetaryAmount(mt_rand(1, 100)),
                'description' => uniqid(),
                'deal' => array(
                    'refund_settlements' => array(
                        array(
                            'type' => Random::value(SettlementPayoutPaymentType::getValidValues()),
                            'amount' => array(
                                'value' => round(Random::float(1.00, 100.00), 2),
                                'currency' => 'RUB',
                            )
                        ),
                    )
                ),
            );
            $result[] = array($request);
        }
        return $result;
    }

    public function invalidReceiptDataProvider()
    {
        return array(
            array(1),
            array('test'),
            array(true),
            array(false),
            array(new \stdClass()),
        );
    }

    public function invalidPaymentIdDataProvider()
    {
        return array(
            array(''),
            array(null),
            array(array()),
            array(1),
            array(new \stdClass()),
            array(Random::str(35)),
            array(Random::str(37)),
        );
    }

    public function invalidDescriptionDataProvider()
    {
        return array(
            array(array()),
            array(new \stdClass()),
        );
    }

    public function invalidSourceDataProvider()
    {
        return array(
            array(1),
            array(array(new \stdClass())),
        );
    }

    public function invalidDealDataProvider()
    {
        return array(
            array(Random::str(35)),
            array(new \stdClass()),
        );
    }
}