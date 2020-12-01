<?php

namespace Tests\YooKassa\Model;

use PHPUnit\Framework\TestCase;
use YooKassa\Helpers\Random;
use YooKassa\Model\MonetaryAmount;
use YooKassa\Model\Receipt;
use YooKassa\Model\Receipt\ReceiptItemAmount;
use YooKassa\Model\ReceiptCustomer;
use YooKassa\Model\ReceiptItem;

class ReceiptTest extends TestCase
{
    public function testGetSetAddItems()
    {
        $instance = new Receipt();
        
        self::assertNotNull($instance->getItems());
        self::assertTrue(is_array($instance->getItems()));
        self::assertEmpty($instance->getItems());

        self::assertNotNull($instance->items);
        self::assertTrue(is_array($instance->items));
        self::assertEmpty($instance->items);
        
        $item = new ReceiptItem();
        $instance->addItem($item);
        $items = $instance->getItems();
        self::assertTrue(count($items) === 1);
        foreach ($items as $tmp) {
            self::assertSame($item, $tmp);
        }

        $instance->setItems(array());
        self::assertNotNull($instance->getItems());
        self::assertTrue(is_array($instance->getItems()));
        self::assertEmpty($instance->getItems());

        $instance->setItems($items);
        self::assertTrue(count($items) === 1);
        foreach ($items as $tmp) {
            self::assertSame($item, $tmp);
        }
    }

    /**
     * @dataProvider invalidItemsProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetInvalidItems($value)
    {
        $instance = new Receipt();
        $instance->setItems($value);
    }

    /**
     * @dataProvider validDataProvider
     * @param $options
     */
    public function testGetSetTaxSystemCode($options)
    {
        $instance = new Receipt();

        self::assertNull($instance->getTaxSystemCode());
        self::assertNull($instance->taxSystemCode);
        self::assertNull($instance->tax_system_code);

        $instance->setTaxSystemCode($options['tax_system_code']);
        self::assertEquals($options['tax_system_code'], $instance->getTaxSystemCode());
        self::assertEquals($options['tax_system_code'], $instance->taxSystemCode);
        self::assertEquals($options['tax_system_code'], $instance->tax_system_code);
    }

    /**
     * @dataProvider validDataProvider
     * @param $options
     */
    public function testSetterTaxSystemCode($options)
    {
        $instance = new Receipt();

        self::assertNull($instance->getTaxSystemCode());
        self::assertNull($instance->taxSystemCode);
        self::assertNull($instance->tax_system_code);

        $instance->taxSystemCode = $options['tax_system_code'];
        self::assertEquals($options['tax_system_code'], $instance->getTaxSystemCode());
        self::assertEquals($options['tax_system_code'], $instance->taxSystemCode);
        self::assertEquals($options['tax_system_code'], $instance->tax_system_code);
    }

    /**
     * @dataProvider validDataProvider
     * @param $options
     */
    public function testSetterTax_system_code($options)
    {
        $instance = new Receipt();

        self::assertNull($instance->getTaxSystemCode());
        self::assertNull($instance->taxSystemCode);
        self::assertNull($instance->tax_system_code);

        $instance->tax_system_code = $options['tax_system_code'];
        self::assertEquals($options['tax_system_code'], $instance->getTaxSystemCode());
        self::assertEquals($options['tax_system_code'], $instance->taxSystemCode);
        self::assertEquals($options['tax_system_code'], $instance->tax_system_code);
    }

    /**
     * @dataProvider invalidTaxSystemIdProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetInvalidTaxSystemCode($value)
    {
        $instance = new Receipt();
        $instance->setTaxSystemCode($value);
    }

    /**
     *
     */
    public function testNotEmpty()
    {
        $instance = new Receipt();

        self::assertFalse($instance->notEmpty());
        $instance->addItem(new ReceiptItem());
        self::assertTrue($instance->notEmpty());
        $instance->setItems(array());
        self::assertFalse($instance->notEmpty());
    }

    public function validDataProvider()
    {
        $result = array(
            array(
                array(
                    'items'           => array(),
                    'tax_system_code' => null,
                    'customer'        => array(
                        'phone'       => '',
                        'email'       => '',
                    ),
                ),
            ),
            array(
                array(
                    'items'           => array(),
                    'tax_system_code' => '',
                    'customer'        => array(
                        'phone'       => '',
                        'email'       => '',
                    ),
                ),
            ),
            array(
                array(
                    'items'           => array(),
                    'customer'        => array(
                        'phone'       => '',
                        'email'       => '',
                    ),
                    'tax_system_code' => '',
                ),
            ),
            array(
                array(
                    'items'           => array(),
                    'customer'        => array(
                        'phone'       => '',
                        'email'       => '',
                    ),
                    'tax_system_code' => '',
                ),
            ),
            array(
                array(
                    'items'           => array(),
                    'customer'        => array(
                        'phone'       => '',
                        'email'       => '',
                    ),
                    'tax_system_code' => '',
                ),
            ),
        );
        for ($i = 1; $i < 6; $i++) {
            $receipt = array(
                'items'           => array(),
                'tax_system_code' => $i,
                'phone'           => Random::str(10, 10, '1234567890'),
                'email'           => uniqid() . '@' . uniqid(),
            );
            $result[] = array($receipt);
        }
        return $result;
    }

    public function invalidItemsProvider()
    {
        return array(
            array(null),
            array(new \stdClass()),
            array('invalid_value'),
            array(''),
            array(0),
            array(1),
            array(true),
            array(false),
            array(1.43),
            array(
                array(
                    array(
                        'description' => 'text',
                        'quantity' => 1,
                        'amount' => array(
                            'value' => 1,
                            'currency' => 'RUB',
                        ),
                        'vat_code' => 1,
                    ),
                ),
            ),
            array(
                array(new \stdClass()),
            ),
        );
    }

    public function invalidTaxSystemIdProvider()
    {
        return array(
            array(new \stdClass()),
            array('invalid_value'),
            array(0),
            array(3234),
            array(true),
            array(false),
            array(0.43),
        );
    }

    public function invalidPhoneProvider()
    {
        return array(
            array(new \stdClass()),
            array(array()),
            array(true),
            array(false),
        );
    }

    public function testGetAmountValue()
    {
        $receipt = new Receipt();
        self::assertEquals(0, $receipt->getAmountValue());

        $item = new ReceiptItem();
        $item->setPrice(new MonetaryAmount(Random::float(0.01, 99.99)));
        $item->setQuantity(Random::float(0.0001, 99.99));
        $receipt->addItem($item);

        $expected = (int)round($item->getPrice()->getIntegerValue() * $item->getQuantity());
        self::assertEquals($expected, $receipt->getAmountValue());
        self::assertEquals($expected, $receipt->getAmountValue(false));
        self::assertEquals(0, $receipt->getShippingAmountValue());

        $item = new ReceiptItem();
        $item->setPrice(new MonetaryAmount(Random::float(0.01, 99.99)));
        $item->setQuantity(Random::float(0.0001, 99.99));
        $receipt->addItem($item);

        $expected += (int)round($item->getPrice()->getIntegerValue() * $item->getQuantity());
        self::assertEquals($expected, $receipt->getAmountValue());
        self::assertEquals($expected, $receipt->getAmountValue(false));
        self::assertEquals(0, $receipt->getShippingAmountValue());

        $item = new ReceiptItem();
        $item->setPrice(new MonetaryAmount(Random::float(0.01, 99.99)));
        $item->setQuantity(Random::float(0.0001, 99.99));
        $item->setIsShipping(true);
        $receipt->addItem($item);

        $shipping = $expected;
        $expected += (int)round($item->getPrice()->getIntegerValue() * $item->getQuantity());

        self::assertEquals($expected, $receipt->getAmountValue());
        self::assertEquals($shipping, $receipt->getAmountValue(false));
        self::assertEquals($expected - $shipping, $receipt->getShippingAmountValue());

        $item = new ReceiptItem();
        $item->setPrice(new MonetaryAmount(Random::float(0.01, 99.99)));
        $item->setQuantity(Random::float(0.0001, 99.99));
        $item->setIsShipping(true);
        $receipt->addItem($item);

        $expected += (int)round($item->getPrice()->getIntegerValue() * $item->getQuantity());

        self::assertEquals($expected, $receipt->getAmountValue());
        self::assertEquals($shipping, $receipt->getAmountValue(false));
        self::assertEquals($expected - $shipping, $receipt->getShippingAmountValue());

        $item = new ReceiptItem();
        $item->setPrice(new MonetaryAmount(Random::float(0.01, 99.99)));
        $item->setQuantity(Random::float(0.0001, 99.99));
        $receipt->addItem($item);

        $shipping += (int)round($item->getPrice()->getIntegerValue() * $item->getQuantity());
        $expected += (int)round($item->getPrice()->getIntegerValue() * $item->getQuantity());
        self::assertEquals($expected, $receipt->getAmountValue());
        self::assertEquals($shipping, $receipt->getAmountValue(false));
        self::assertEquals($expected - $shipping, $receipt->getShippingAmountValue());
    }

    /**
     * @dataProvider validNormalizationDataProvider
     * @param $items
     * @param $amount
     * @param $expected
     */
    public function testNormalize($items, $amount, $expected, $withShipping = false)
    {
        $receipt = new Receipt();
        foreach ($items as $itemInfo) {
            $item = new ReceiptItem();
            $item->setPrice(new MonetaryAmount($itemInfo['price']));
            if (!empty($itemInfo['quantity'])) {
                $item->setQuantity($itemInfo['quantity']);
            } else {
                $item->setQuantity(1);
            }
            if (!empty($itemInfo['shipping'])) {
                $item->setIsShipping(true);
            }
            $receipt->addItem($item);
        }
        $receipt->normalize(new MonetaryAmount($amount), $withShipping);

        self::assertEquals(count($expected), count($receipt->getItems()));
        $expectedAmount = 0;
        foreach ($receipt->getItems() as $index => $item) {
            self::assertEquals($expected[$index]['price'], $item->getPrice()->getIntegerValue());
            self::assertEquals($expected[$index]['quantity'], $item->getQuantity());

            $expectedAmount += $item->getAmount();
        }
        self::assertEquals($expectedAmount, $amount * 100);
    }

    public function validNormalizationDataProvider()
    {
        return array(
            array(
                array(
                    array('price' => 10.0),
                ),
                9.0,
                array(
                    array('price' => 900, 'quantity' => 1.0),
                )
            ),
            array(
                array(
                    array('price' => 10.0),
                    array('price' => 20.0),
                ),
                29.0,
                array(
                    array('price' => 967, 'quantity' => 1.0),
                    array('price' => 1933, 'quantity' => 1.0),
                )
            ),
            array(
                array(
                    array('price' => 10.0, 'quantity' => 1),
                    array('price' => 20.0, 'quantity' => 3),
                ),
                29.0,
                array(
                    array('price' => 413, 'quantity' => 1.0),
                    array('price' => 829, 'quantity' => 3.0),
                )
            ),
            array(
                array(
                    array('price' => 50.0, 'quantity' => 3),
                    array('price' => 20.0, 'quantity' => 3),
                ),
                100.0,
                array(
                    array('price' => 2381, 'quantity' => 2.0),
                    array('price' => 2382, 'quantity' => 1.0),
                    array('price' => 952, 'quantity' => 3.0),
                )
            ),
            array(
                array(
                    array('price' => 10.0, 'shipping' => true),
                    array('price' => 50.0, 'quantity' => 3),
                    array('price' => 10.0, 'shipping' => true),
                    array('price' => 20.0, 'quantity' => 3),
                ),
                120.0,
                array(
                    array('price' => 1000, 'quantity' => 1.0),
                    array('price' => 2381, 'quantity' => 2.0),
                    array('price' => 2382, 'quantity' => 1.0),
                    array('price' => 1000, 'quantity' => 1.0),
                    array('price' => 952, 'quantity' => 3.0),
                )
            ),
            array(
                array(
                    array('price' => 50.0, 'quantity' => 1, 'shipping' => 1),
                    array('price' => 50.0, 'quantity' => 2),
                    array('price' => 20.0, 'quantity' => 3),
                ),
                100.0,
                array(
                    array('price' => 2381, 'quantity' => 1.0),
                    array('price' => 2381, 'quantity' => 1.0),
                    array('price' => 2382, 'quantity' => 1.0),
                    array('price' => 952, 'quantity' => 3.0),
                ),
                true
            ),
            array(
                array(
                    array('price' => 50.0, 'quantity' => 1, 'shipping' => 1),
                ),
                49.0,
                array(
                    array('price' => 4900, 'quantity' => 1.0),
                ),
                true
            ),
            array(
                array(
                    array('price' => 100.0, 'quantity' => 0.5),
                    array('price' => 100.0, 'quantity' => 0.4),
                ),
                98.0,
                array(
                    array('price' => 10889, 'quantity' => 0.25),
                    array('price' => 10888, 'quantity' => 0.25),
                    array('price' => 10889, 'quantity' => 0.4),
                ),
                true
            ),
            array(
                array(
                    array('price' => 10, 'quantity' => 1),
                    array('price' => 300, 'quantity' => 1, 'shipping' => 1),
                ),
                10.0,
                array(
                    array('price' => 32, 'quantity' => 1),
                    array('price' => 968, 'quantity' => 1, 'shipping' => 1),
                ),
                true
            ),
            array(
                array(
                    array('price' => 10, 'quantity' => 1),
                    array('price' => 300, 'quantity' => 1, 'shipping' => 1),
                ),
                10.0,
                array(
                    array('price' => 32, 'quantity' => 1),
                    array('price' => 968, 'quantity' => 1, 'shipping' => 1),
                ),
                false
            ),
            array(
                array(
                    array('price' => 0.01, 'quantity' => 1),
                    array('price' => 0.02, 'quantity' => 1),
                    array('price' => 0.03, 'quantity' => 1),
                    array('price' => 300, 'quantity' => 1, 'shipping' => 1),
                ),
                0.06,
                array(
                    array('price' => 1, 'quantity' => 1),
                    array('price' => 1, 'quantity' => 1),
                    array('price' => 1, 'quantity' => 1),
                    array('price' => 3, 'quantity' => 1, 'shipping' => 1),
                ),
                false
            ),
            array(
                array(
                    array('price' => 0.01, 'quantity' => 7),
                    array('price' => 0.02, 'quantity' => 11),
                    array('price' => 0.03, 'quantity' => 13),
                    array('price' => 300, 'quantity' => 1, 'shipping' => 1),
                ),
                0.60,
                array(
                    array('price' => 1, 'quantity' => 7),
                    array('price' => 1, 'quantity' => 11),
                    array('price' => 1, 'quantity' => 13),
                    array('price' => 29, 'quantity' => 1, 'shipping' => 1),
                ),
                false
            ),
            array(
                array(
                    array('price' => 0.01, 'quantity' => 7),
                    array('price' => 0.02, 'quantity' => 11),
                    array('price' => 10, 'quantity' => 1),
                    array('price' => 300, 'quantity' => 1, 'shipping' => 1),
                ),
                10.29,
                array(
                    array('price' => 1, 'quantity' => 7),
                    array('price' => 1, 'quantity' => 11),
                    array('price' => 33, 'quantity' => 1),
                    array('price' => 978, 'quantity' => 1, 'shipping' => 1),
                ),
                false
            ),
        );
    }

    /**
     * @dataProvider fromArrayDataProvider
     * @param array $source
     * @param array $expected
     */
    public function testFromArray($source, $expected)
    {
        $receipt = new Receipt();
        $receipt->fromArray($source);

        if (!empty($expected)) {
            foreach ($expected as $property => $value) {
                self::assertEquals($value, $receipt->offsetGet($property));
            }
        } else {
            self::assertEquals(array(), $receipt->getItems());
        }
    }

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
                            'amount' => array(
                                'value' => 5,
                                'currency' => 'USD',
                            ),
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
                    ),
                ),
            ),
        );
    }

    /**
     * @dataProvider fromArrayCustomerDataProvider
     * @param array $source
     * @param array $expected
     */
    public function testCustomerFromArray($source, $expected)
    {
        $receipt = new Receipt();
        $receipt->fromArray($source);

        if (!empty($expected)) {
            foreach ($expected as $property => $value) {
                self::assertEquals($value, $receipt->offsetGet($property));
            }
        } else {
            self::assertEquals(true, $receipt->getCustomer()->isEmpty());
        }
    }

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
            ),
        );
    }
}