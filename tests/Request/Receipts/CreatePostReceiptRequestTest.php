<?php

namespace Tests\YooKassa\Request\Receipts;

use PHPUnit\Framework\TestCase;
use YooKassa\Common\Exceptions\EmptyPropertyValueException;
use YooKassa\Helpers\Random;
use YooKassa\Model\Airline;
use YooKassa\Model\CurrencyCode;
use YooKassa\Model\Metadata;
use YooKassa\Model\MonetaryAmount;
use YooKassa\Model\PaymentData\PaymentDataQiwi;
use YooKassa\Model\Receipt;
use YooKassa\Model\Receipt\PaymentMode;
use YooKassa\Model\Receipt\PaymentSubject;
use YooKassa\Model\Receipt\ReceiptItemAmount;
use YooKassa\Model\Receipt\SettlementType;
use YooKassa\Model\ReceiptCustomer;
use YooKassa\Model\ReceiptItem;
use YooKassa\Model\ReceiptType;
use YooKassa\Model\Settlement;
use YooKassa\Request\Payments\CreatePaymentRequest;
use YooKassa\Request\Payments\CreatePaymentRequestBuilder;
use YooKassa\Request\Receipts\CreatePostReceiptRequest;

class CreatePostReceiptRequestTest extends TestCase
{
    /**
     * @dataProvider validDataProvider
     * @param $options
     */
    public function testCustomer($options)
    {
        $instance = new CreatePostReceiptRequest();

        self::assertFalse($instance->hasCustomer());
        self::assertNull($instance->getCustomer());
        self::assertNull($instance->customer);

        $instance->setCustomer($options['customer']);
        if (empty($options['customer'])) {
            self::assertFalse($instance->hasCustomer());
            self::assertNull($instance->getCustomer());
            self::assertNull($instance->customer);
        } else {
            self::assertTrue($instance->hasCustomer());
            self::assertSame($options['customer'], $instance->getCustomer()->jsonSerialize());
            self::assertSame($options['customer'], $instance->customer->jsonSerialize());
        }

        $instance->customer = $options['customer'];
        if (empty($options['customer'])) {
            self::assertFalse($instance->hasCustomer());
            self::assertNull($instance->getCustomer());
            self::assertNull($instance->customer);
        } else {
            self::assertTrue($instance->hasCustomer());
            self::assertSame($options['customer'], $instance->getCustomer()->jsonSerialize());
            self::assertSame($options['customer'], $instance->customer->jsonSerialize());
        }
    }

    /**
     * @dataProvider invalidCustomerDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetInvalidCustomer($value)
    {
        $instance = new CreatePostReceiptRequest();
        $instance->setCustomer($value);
    }

    /**
     * @dataProvider validDataProvider
     * @param $options
     */
    public function testType($options)
    {
        $instance = new CreatePostReceiptRequest();

        self::assertNull($instance->getType());
        self::assertNull($instance->type);

        $instance->setType($options['type']);

        self::assertSame($options['type'], $instance->getType());
        self::assertSame($options['type'], $instance->type);
    }

    /**
     * @dataProvider invalidTypeDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetInvalidType($value)
    {
        $instance = new CreatePostReceiptRequest();
        $instance->setType($value);
    }

    public function testValidate()
    {
        $instance = new CreatePostReceiptRequest();

        self::assertFalse($instance->validate());

        $instance->setCustomer(new ReceiptCustomer());
        self::assertFalse($instance->validate());

        $instance->setCustomer(new ReceiptCustomer(array('email' => 'johndoe@email.com')));
        self::assertFalse($instance->validate());

        $instance->setType(ReceiptType::REFUND);
        self::assertFalse($instance->validate());

        $instance->setType(ReceiptType::PAYMENT);
        self::assertFalse($instance->validate());

        $instance->setSend(false);
        self::assertFalse($instance->validate());

        $instance->setSend(true);
        self::assertFalse($instance->validate());

        $instance->setObjectId(uniqid());
        self::assertFalse($instance->validate());

        $instance->setSettlements(array());
        self::assertFalse($instance->validate());

        $instance->setSettlements(array(
                new Settlement(array(
                    'type' => SettlementType::PREPAYMENT,
                    'amount' => new ReceiptItemAmount(10, 'RUB')))
            )
        );
        self::assertFalse($instance->validate());

        $instance->setItems(array());
        self::assertFalse($instance->validate());

        $instance->setItems(array(
            new ReceiptItem(array(
                'description' => 'description',
                'amount' => array(
                    'value' => 10,
                    'currency' => 'RUB',
                ),
                'quantity' => 1,
                'vat_code' => 1
            ))
        ));
        self::assertTrue($instance->validate());
    }

    public function testBuilder()
    {
        $builder = CreatePaymentRequest::builder();
        self::assertTrue($builder instanceof CreatePaymentRequestBuilder);
    }

    /**
     * @dataProvider fromArrayDataProvider
     * @param array $source
     * @param array $expected
     */
    public function testFromArray($source, $expected)
    {
        $receipt = new CreatePostReceiptRequest($source);

        if (!empty($expected)) {
            foreach ($expected as $property => $value) {
                self::assertEquals($value, $receipt->offsetGet($property));
            }
        } else {
            self::assertEquals(array(), $receipt->getItems());
        }
    }

    /**
     * @dataProvider fromArrayCustomerDataProvider
     * @param array $source
     * @param array $expected
     */
    public function testCustomerFromArray($source, $expected)
    {
        $receiptPost = new CreatePostReceiptRequest();
        $receiptPost->fromArray($source);

        if (!empty($expected)) {
            foreach ($expected as $property => $value) {
                self::assertEquals($value, $receiptPost->offsetGet($property));
            }
        } else {
            self::assertEmpty($receiptPost->getCustomer());
        }
    }

    /**
     * @dataProvider fromArraySettlementDataProvider
     * @param array $options
     * @throws \Exception
     */
    public function testSettlementFromArray($options)
    {
        $receiptPost = new CreatePostReceiptRequest();
        $receiptPost->fromArray($options);

        self::assertEquals(count($options['settlements']), count($receiptPost->getSettlements()));
        self::assertFalse($receiptPost->notEmpty());

        foreach ($receiptPost->getSettlements() as $index => $item) {
            self::assertTrue($item instanceof Settlement);
            self::assertArrayHasKey($index, $options['settlements']);
            self::assertEquals($options['settlements'][$index]['type'], $item->getType());
            self::assertEquals($options['settlements'][$index]['amount'], $item->getAmount());
        }
    }

    /**
     * @dataProvider invalidSetsDataProvider
     * @expectedException \InvalidArgumentException
     * @expectedException EmptyPropertyValueException
     * @param $value
     */
    public function testSetInvalidItems($value)
    {
        $instance = new CreatePostReceiptRequest();
        $instance->setItems($value);
    }

    public function testGetObjectId()
    {
        $instance = new CreatePostReceiptRequest();
        $instance->setObjectId('test');
        self::assertSame('test', $instance->getObjectId());
    }

    /**
     * @dataProvider invalidTaxSystemCodeDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetInvalidTaxSystemCode($value)
    {
        $instance = new CreatePostReceiptRequest();
        $instance->setTaxSystemCode($value);
    }

    public function testSetTaxSystemCode()
    {
        $instance = new CreatePostReceiptRequest();
        $instance->setTaxSystemCode(3);
        self::assertSame(3, $instance->getTaxSystemCode());
    }

    /**
     * @dataProvider invalidSetsDataProvider
     * @expectedException \InvalidArgumentException
     * @expectedException EmptyPropertyValueException
     * @param $value
     */
    public function testSetInvalidSettlements($value)
    {
        $instance = new CreatePostReceiptRequest();
        $instance->setSettlements($value);
    }

    public function testSetItems()
    {
        $instance = new CreatePostReceiptRequest();
        $instance->setItems(array(
            array(
                array(
                    'description' => 'description',
                    'amount' => array(
                        'value' => 10,
                        'currency' => 'RUB',
                    ),
                    'quantity' => 1,
                    'vat_code' => 1
                )
            )
        ));
    }

    /**
     * @dataProvider invalidSetOnBehalfOfDataProvider
     * @expectedException \InvalidArgumentException
     * @expectedException EmptyPropertyValueException
     * @param $value
     */
    public function testSetInvalidOnBehalfOf($value)
    {
        $instance = new CreatePostReceiptRequest();
        $instance->setOnBehalfOf($value);
    }

    public function testsetOnBehalfOf()
    {
        $instance = new CreatePostReceiptRequest();
        $instance->setOnBehalfOf('test');
        self::assertSame('test', $instance->getOnBehalfOf());
    }

    /**
     * @dataProvider validDataProvider
     * @param $options
     */
    public function testSend($options)
    {
        $instance = new CreatePostReceiptRequest();

        self::assertTrue($instance->getSend());
        self::assertTrue($instance->send);

        $instance->setSend($options['send']);

        self::assertSame($options['send'], $instance->getSend());
        self::assertSame($options['send'], $instance->send);
    }

    /**
     * @dataProvider invalidBooleanDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetInvalidSend($value)
    {
        $instance = new CreatePostReceiptRequest();
        $instance->setSend($value);
    }

    /**
     * @return array
     */
    public function fromArrayCustomerDataProvider()
    {
        $customer = new ReceiptCustomer();
        $customer->setFullName('John Doe');
        $customer->setEmail('johndoe@yoomoney.ru');
        $customer->setPhone('79000000000');
        $customer->setInn('6321341814');

        return array(

            array(
                array(),
                array(),
            ),

            array(
                array(
                    'customer' => array(
                        'fullName' => 'John Doe',
                        'email' => 'johndoe@yoomoney.ru',
                        'phone' => '79000000000',
                        'inn' => '6321341814',
                    ),
                ),
                array(
                    'customer' => $customer
                ),
            ),

            array(
                array(
                    'customer' => array(
                        'full_name' => 'John Doe',
                        'inn' => '6321341814',
                        'email' => 'johndoe@yoomoney.ru',
                        'phone' => '79000000000',
                    ),
                ),
                array(
                    'customer' => $customer
                ),
            )
        );
    }

    /**
     * @return \array[][][]
     * @throws \Exception
     */
    public function fromArraySettlementDataProvider()
    {
        return array(
            array(
                array(
                    'settlements' => $this->generateSettlements()
                )
            )
        );
    }

    /**
     * @return array
     * @throws \Exception
     */
    private function generateSettlements()
    {
        $return = array();
        $count = Random::int(1, 10);

        for ($i=0; $i < $count; $i++) {
            $return[] = $this->generateSettlement($i % 2 == 0);
        }

        return $return;
    }

    /**
     * @param $true
     * @return array|Settlement
     * @throws \Exception
     */
    private function generateSettlement($true)
    {
        $params = array(
            'type' => Random::value(SettlementType::getValidValues()),
            'amount' => new MonetaryAmount(Random::int(1, 1000))
        );

        return $true ? $params : new Settlement($params);
    }


    /**
     * @return \array[][]
     */
    public function fromArrayDataProvider()
    {
        $receiptItem = new ReceiptItem();
        $receiptItem->setDescription('test');
        $receiptItem->setQuantity(322);
        $receiptItem->setVatCode(4);
        $receiptItem->setPrice(new ReceiptItemAmount(5, 'USD'));

        return array(
            array(
                array(),
                array(),
            ),

            array(
                array(
                    'taxSystemCode' => 2,
                    'customer' => array(
                        'phone' => '1234567890',
                        'email' => 'test@tset',
                    ),
                    'items' => array(
                        new ReceiptItem(),
                    ),
                ),
                array(
                    'tax_system_code' => 2,
                    'customer' => new ReceiptCustomer(array(
                        'phone' => '1234567890',
                        'email' => 'test@tset',
                    )),
                    'items' => array(
                        new ReceiptItem(),
                    ),
                ),
            ),

            array(
                array(
                    'tax_system_code' => 3,
                    'customer' => array(
                        'phone' => '1234567890',
                        'email' => 'test@tset',
                    ),
                    'items' => array(
                        array(
                            'description' => 'test',
                            'quantity' => 322,
                            'amount' => array(
                                'value' => 5,
                                'currency' => 'USD',
                            ),
                            'vat_code' => 4,
                        ),
                        new ReceiptItem(),
                        array(
                            'description' => 'test',
                            'quantity' => 322,
                            'amount' => new ReceiptItemAmount(5, 'USD'),
                            'vat_code' => 4,
                        ),
                        array(
                            'description' => 'test',
                            'quantity' => 322,
                            'amount' => new ReceiptItemAmount(array(
                                'value' => 5,
                                'currency' => 'USD',
                            )),
                            'vat_code' => 4,
                        ),
                    ),
                ),
                array(
                    'taxSystemCode' => 3,
                    'customer' => new ReceiptCustomer(array(
                        'phone' => '1234567890',
                        'email' => 'test@tset',
                    )),
                    'items' => array(
                        $receiptItem,
                        new ReceiptItem(),
                        $receiptItem,
                        $receiptItem,
                    ),
                ),
            ),
        );
    }

    /**
     * @return array
     * @throws \Exception
     */
    public function validDataProvider()
    {
        $type = Random::value(ReceiptType::getEnabledValues());
        $result = array(

            array(
                array(
                    'customer' => array(
                        'full_name' => Random::str(128),
                        'email' => Random::str(128),
                        'phone' => Random::str(4, 12, '1234567890'),
                        'inn' => '1234567890',
                    ),
                    'items' => array(
                        array(
                            'description' => Random::str(128),
                            'quantity' => Random::int(1, 10),
                            'amount' => array(
                                'value' => Random::float(0.1, 99.99),
                                'currency' => Random::value(CurrencyCode::getValidValues())
                            ),
                            'vat_code' => Random::int(1, 6),
                            'payment_subject' => Random::value(PaymentSubject::getValidValues()),
                            'payment_mode' => Random::value(PaymentMode::getValidValues()),
                            'product_code' => Random::str(128),
                            'country_of_origin_code' => 'RU',
                            'customs_declaration_number' => Random::str(128),
                            'excise' => Random::float(0.0, 99.99),
                        )
                    ),
                    'tax_system_code' => Random::int(1, 6),
                    'type' => $type,
                    'send' => true,
                    'settlements' => array(
                        array(
                            'type' => Random::value(SettlementType::getValidValues()),
                            'amount' => array(
                                'value' => Random::float(0.1, 99.99),
                                'currency' => Random::value(CurrencyCode::getValidValues())
                            )
                        )
                    ),
                    $type . '_id' => uniqid()
                ),
            ),
        );
        for ($i = 0; $i < 10; $i++) {
            $type = Random::value(ReceiptType::getEnabledValues());
            $request = array(
                'customer' => array(
                    'full_name' => Random::str(128),
                    'email' => Random::str(128),
                    'phone' => Random::str(4, 12, '1234567890'),
                    'inn' => '1234567890',
                ),
                'items' => array(
                    array(
                        'description' => Random::str(128),
                        'quantity' => Random::int(1, 10),
                        'amount' => array(
                            'value' => Random::float(0.1, 99.99),
                            'currency' => Random::value(CurrencyCode::getValidValues())
                        ),
                        'vat_code' => Random::int(1, 6),
                        'payment_subject' => Random::value(PaymentSubject::getValidValues()),
                        'payment_mode' => Random::value(PaymentMode::getValidValues()),
                        'product_code' => Random::str(128),
                        'country_of_origin_code' => 'RU',
                        'customs_declaration_number' => Random::str(128),
                        'excise' => Random::float(0.0, 99.99),
                    )
                ),
                'tax_system_code' => Random::int(1, 6),
                'type' => $type,
                'send' => true,
                'settlements' => array(
                    array(
                        'type' => Random::value(SettlementType::getValidValues()),
                        'amount' => array(
                            'value' => Random::float(0.1, 99.99),
                            'currency' => Random::value(CurrencyCode::getValidValues())
                        )
                    )
                ),
                $type . '_id' => uniqid()
            );
            $result[] = array($request);
        }
        return $result;
    }

    public function invalidCustomerDataProvider()
    {
        return array(
            array(false),
            array(true),
            array(1),
            array(Random::str(10)),
            array(new \stdClass()),
        );
    }

    public function invalidTypeDataProvider()
    {
        return array(
            array(false),
            array(true),
            array(1),
            array(Random::str(10)),
            array(new \stdClass())
        );
    }

    public function invalidSetsDataProvider()
    {
        return array(
            array(array(new Airline())),
            array(""),
            array(null),
            array(1)
        );
    }

    public function invalidTaxSystemCodeDataProvider()
    {
        return array(
            array(false),
            array(true),
            array(0),
            array(""),
            array(null)
        );
    }

    public function invalidBooleanDataProvider()
    {
        return array(
            array(array()),
            array(new \stdClass()),
            array('test'),
        );
    }

    public function invalidSetOnBehalfOfDataProvider()
    {
        return array(
            array(null),
            array(new \stdClass()),
        );
    }
}
