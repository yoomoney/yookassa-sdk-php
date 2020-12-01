<?php

namespace Tests\YooKassa\Model;

use PHPUnit\Framework\TestCase;
use YooKassa\Helpers\Random;
use YooKassa\Model\Receipt;
use YooKassa\Model\ReceiptCustomer;

class ReceiptCustomerTest extends TestCase
{
    /**
     * @dataProvider validDataProvider
     * @param $options
     */
    public function testGetSetPhone($options)
    {
        $instance = new ReceiptCustomer();

        self::assertNull($instance->getPhone());
        self::assertNull($instance->phone);

        $value = !empty($options['customer']['phone'])
               ? $options['customer']['phone']
               : (!empty($options['phone']) ? $options['phone'] : null);

        $instance->setPhone($value);
        if ($value === null || $value === '') {
            self::assertNull($instance->getPhone());
            self::assertNull($instance->phone);
        } else {
            self::assertEquals($value, $instance->getPhone());
            self::assertEquals($value, $instance->phone);
        }
    }

    /**
     * @dataProvider validDataProvider
     * @param $options
     */
    public function testSetterPhone($options)
    {
        $instance = new ReceiptCustomer();

        self::assertNull($instance->getPhone());
        self::assertNull($instance->phone);

        $value = !empty($options['customer']['phone'])
               ? $options['customer']['phone']
               : (!empty($options['phone']) ? $options['phone'] : null);

        $instance->phone = $value;
        if ($value === null || $value === '') {
            self::assertNull($instance->getPhone());
            self::assertNull($instance->phone);
        } else {
            self::assertEquals($value, $instance->getPhone());
            self::assertEquals($value, $instance->phone);
        }
    }

    /**
     * @dataProvider invalidPhoneProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetInvalidPhone($value)
    {
        $instance = new ReceiptCustomer();
        $instance->setPhone($value);
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

    /**
     * @dataProvider validDataProvider
     * @param $options
     */
    public function testGetSetEmail($options)
    {
        $instance = new ReceiptCustomer();

        self::assertNull($instance->getEmail());
        self::assertNull($instance->email);

        $value = !empty($options['customer']['email'])
               ? $options['customer']['email']
               : (!empty($options['email']) ? $options['email'] : null);

        $instance->setEmail($value);
        if ($value === null || $value === '') {
            self::assertNull($instance->getEmail());
            self::assertNull($instance->email);
        } else {
            self::assertEquals($value, $instance->getEmail());
            self::assertEquals($value, $instance->email);
        }
    }

    /**
     * @dataProvider validDataProvider
     * @param $options
     */
    public function testSetterEmail($options)
    {
        $instance = new ReceiptCustomer();

        self::assertNull($instance->getEmail());
        self::assertNull($instance->email);

        $value = !empty($options['customer']['email'])
               ? $options['customer']['email']
               : (!empty($options['email']) ? $options['email'] : null);

        $instance->email = $value;
        if ($value === null || $value === '') {
            self::assertNull($instance->getEmail());
            self::assertNull($instance->email);
        } else {
            self::assertEquals($value, $instance->getEmail());
            self::assertEquals($value, $instance->email);
        }
    }

    /**
     * @dataProvider validFullNameProvider
     * @param $value
     */
    public function testGetSetFullName($value)
    {
        $instance = new ReceiptCustomer();

        self::assertNull($instance->getFullName());
        self::assertNull($instance->fullName);
        self::assertNull($instance->full_name);

        $instance->setFullName($value);
        if ($value === null || $value === '') {
            self::assertNull($instance->getFullName());
            self::assertNull($instance->fullName);
            self::assertNull($instance->full_name);
        } else {
            self::assertEquals($value, $instance->getFullName());
            self::assertEquals($value, $instance->fullName);
            self::assertEquals($value, $instance->full_name);
        }
    }

    /**
     * @dataProvider validFullNameProvider
     * @param $value
     */
    public function testSetterFullName($value)
    {
        $instance = new ReceiptCustomer();

        self::assertNull($instance->getFullName());
        self::assertNull($instance->fullName);
        self::assertNull($instance->full_name);

        $instance->fullName = $value;
        if ($value === null || $value === '') {
            self::assertNull($instance->getFullName());
            self::assertNull($instance->fullName);
            self::assertNull($instance->full_name);
        } else {
            self::assertEquals($value, $instance->getFullName());
            self::assertEquals($value, $instance->fullName);
            self::assertEquals($value, $instance->full_name);
        }
    }

    /**
     * @dataProvider validFullNameProvider
     * @param $value
     */
    public function testSetterFull_name($value)
    {
        $instance = new ReceiptCustomer();

        self::assertNull($instance->getFullName());
        self::assertNull($instance->fullName);
        self::assertNull($instance->full_name);

        $instance->full_name = $value;
        if ($value === null || $value === '') {
            self::assertNull($instance->getFullName());
            self::assertNull($instance->fullName);
            self::assertNull($instance->full_name);
        } else {
            self::assertEquals($value, $instance->getFullName());
            self::assertEquals($value, $instance->fullName);
            self::assertEquals($value, $instance->full_name);
        }
    }

    public function validFullNameProvider()
    {
        return array(
            array(null),
            array(''),
            array(Random::str(1)),
            array(Random::str(null, 256)),
            array(Random::str(256)),
        );
    }

    /**
     * @dataProvider invalidFullNameProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetInvalidFullName($value)
    {
        $instance = new ReceiptCustomer();
        $instance->setFullName($value);
    }

    public function invalidFullNameProvider()
    {
        return array(
            array(new \stdClass()),
            array(array()),
            array(true),
            array(false),
            array(Random::str(257)),
        );
    }

    /**
     * @dataProvider validInnProvider
     * @param $value
     */
    public function testGetSetInn($value)
    {
        $instance = new ReceiptCustomer();

        self::assertNull($instance->getInn());
        self::assertNull($instance->inn);

        $instance->setInn($value);
        if ($value === null || $value === '') {
            self::assertNull($instance->getInn());
            self::assertNull($instance->inn);
        } else {
            self::assertEquals($value, $instance->getInn());
            self::assertEquals($value, $instance->inn);
        }
    }

    /**
     * @dataProvider validInnProvider
     * @param $options
     */
    public function testSetterInn($options)
    {
        $instance = new ReceiptCustomer();

        self::assertNull($instance->getInn());
        self::assertNull($instance->inn);

        $instance->inn = $options;
        if ($options === null || $options === '') {
            self::assertNull($instance->getInn());
            self::assertNull($instance->inn);
        } else {
            self::assertEquals($options, $instance->getInn());
            self::assertEquals($options, $instance->inn);
        }
    }

    public function validInnProvider()
    {
        return array(
            array(null),
            array(''),
            array('1234567890'),
            array('123456789012'),
            array(Random::str(10, 10, '1234567890')),
            array(Random::str(12, 12, '1234567890')),
        );
    }

    /**
     * @dataProvider invalidInnProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetInvalidInn($value)
    {
        $instance = new ReceiptCustomer();
        $instance->setInn($value);
    }


    public function invalidInnProvider()
    {
        return array(
            array(new \stdClass()),
            array(array()),
            array(true),
            array(false),
            array('123456789'),
            array('12345678901'),
            array('1234567890123'),
            array(Random::str(1)),
            array(Random::str(10, 10, 'ABCDEFGHIJKLMNOPQRSTUVWXYZ')),
            array(Random::str(12, 12, 'ABCDEFGHIJKLMNOPQRSTUVWXYZ')),
            array(Random::str(13, 13, '1234567890')),
        );
    }

    public function validDataProvider()
    {
        $result = array(
            array(
                array(
                    'customer' => array(),
                ),
            ),
            array(
                array(
                    'customer' => array(),
                    'phone' => Random::str(10, 10, '1234567890'),
                    'email' => uniqid() . '@' . uniqid(),
                ),
            ),
            array(
                array(
                    'customer' => array(
                        'phone' => Random::str(10, 10, '1234567890'),
                        'email' => uniqid() . '@' . uniqid(),
                    ),
                ),
            ),
            array(
                array(
                    'customer' => array(
                        'full_name' => Random::str(1, 256),
                        'inn'    => Random::str(12, 12, '1234567890'),
                    ),
                    'phone' => Random::str(10, 10, '1234567890'),
                    'email' => uniqid() . '@' . uniqid(),
                ),
            ),
            array(
                array(
                    'customer' => array(
                        'full_name' => Random::str(1, 256),
                        'phone' => Random::str(10, 10, '1234567890'),
                        'email' => uniqid() . '@' . uniqid(),
                        'inn'    => Random::str(10, 10, '1234567890'),
                    ),
                ),
            ),
        );

        return $result;
    }


    /**
     * @dataProvider fromArrayDataProvider
     * @param array $source
     * @param ReceiptCustomer $expected
     */
    public function testCustomerFromArray($source, $expected)
    {
        $receipt = new Receipt();
        $receipt->fromArray($source);

        if (!empty($expected)) {
            foreach ($expected->jsonSerialize() as $property => $value) {
                self::assertEquals($value, $expected->offsetGet($property));
            }
        } else {
            self::assertEquals(true, $receipt->getCustomer()->isEmpty());
        }
    }

    public function fromArrayDataProvider()
    {
        $customer = new ReceiptCustomer();
        $customer->setFullName('John Doe');
        $customer->setEmail('johndoe@yoomoney.ru');
        $customer->setPhone('79000000000');
        $customer->setInn('6321341814');

        return array(

            array(
                array(),
                null,
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

                $customer
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

                $customer
            ),

            array(
                array(
                    'customer' => array(
                        'fullName' => 'John Doe',
                        'inn' => '6321341814',
                    ),
                    'email' => 'johndoe@yoomoney.ru',
                    'phone' => '79000000000',
                ),

                $customer
            ),

            array(
                array(
                    'customer' => array(
                        'full_name' => 'John Doe',
                        'inn' => '6321341814',
                        'email' => 'johndoe@yoomoney.ru',
                    ),
                    'phone' => '79000000000',
                ),

                $customer
            ),
            array(
                array(
                    'customer' => array(
                        'fullName' => 'John Doe',
                        'inn' => '6321341814',
                        'phone' => '79000000000',
                    ),
                    'email' => 'johndoe@yoomoney.ru',
                ),

                $customer
            ),
            array(
                array(
                    'customer' => array(
                        'full_name' => 'John Doe',
                        'inn' => '6321341814',
                        'phone' => '79000000000',
                        'email' => 'johndoe@yoomoney.ru',
                    ),
                    'email' => 'johndoeOld@yoomoney.ru',
                ),

                $customer
            ),
            array(
                array(
                    'customer' => array(
                        'fullName' => 'John Doe',
                        'inn' => '6321341814',
                        'phone' => '79000000000',
                        'email' => 'johndoe@yoomoney.ru',
                    ),
                    'phone' => '79111111111',
                ),

                $customer
            ),
            array(
                array(
                    'customer' => array(
                        'full_name' => 'John Doe',
                        'inn' => '6321341814',
                        'phone' => '79000000000',
                        'email' => 'johndoe@yoomoney.ru',
                    ),
                    'phone' => '79111111111',
                    'email' => 'johndoeOld@yoomoney.ru',
                ),

                $customer
            ),
        );
    }
}