<?php

namespace Tests\YooKassa\Request\Payments;

use PHPUnit\Framework\TestCase;
use YooKassa\Helpers\Random;
use YooKassa\Helpers\StringObject;
use YooKassa\Model\PaymentMethodType;
use YooKassa\Model\PaymentStatus;
use YooKassa\Request\Payments\PaymentsRequest;
use YooKassa\Request\Payments\PaymentsRequestBuilder;

class PaymentsRequestTest extends TestCase
{
    /**
     * @return PaymentsRequest
     */
    protected function getTestInstance()
    {
        return new PaymentsRequest();
    }

    /**
     * @dataProvider validNetPageDataProvider
     * @param $value
     */
    public function testCursor($value)
    {
        $this->getterAndSetterTest($value, 'cursor', $value === null ? '' : (string)$value);
    }

    /**
     * @dataProvider invalidPageDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetInvalidCursor($value)
    {
        $this->getTestInstance()->setCursor($value);
    }

    /**
     * @dataProvider validPaymentMethodDataProvider
     * @param $value
     */
    public function testPaymentMethod($value)
    {
        $this->getterAndSetterTest($value, 'paymentMethod', $value);
    }

    /**
     * @dataProvider invalidPaymentMethodDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetInvalidPaymentMethod($value)
    {
        $this->getTestInstance()->setPaymentMethod($value);
    }

    /**
     * @dataProvider validDateDataProvider
     * @param $value
     */
    public function testDateMethods($value)
    {
        $properties = array(
            'createdAtGte',
            'createdAtGt',
            'createdAtLte',
            'createdAtLt',
            'capturedAtGte',
            'capturedAtGt',
            'capturedAtLte',
            'capturedAtLt',
        );
        $expected   = null;
        if ($value instanceof \DateTime) {
            $expected = $value->format(YOOKASSA_DATE);
        } elseif (is_numeric($value)) {
            $expected = date(YOOKASSA_DATE, $value);
        } else {
            $expected = $value;
        }
        foreach ($properties as $property) {
            $this->getterAndSetterTest($value, $property, empty($expected) ? null : new \DateTime($expected));
        }
    }

    /**
     * @dataProvider invalidDateDataProvider
     * @expectedException \InvalidArgumentException
     * @param mixed $value
     */
    public function testSetInvalidCreatedAtGte($value)
    {
        $this->getTestInstance()->setCreatedAtGte($value);
    }

    /**
     * @dataProvider invalidDateDataProvider
     * @expectedException \InvalidArgumentException
     * @param mixed $value
     */
    public function testSetInvalidCreatedAtGt($value)
    {
        $this->getTestInstance()->setCreatedAtGt($value);
    }

    /**
     * @dataProvider invalidDateDataProvider
     * @expectedException \InvalidArgumentException
     * @param mixed $value
     */
    public function testSetInvalidCreatedAtLte($value)
    {
        $this->getTestInstance()->setCreatedAtLte($value);
    }

    /**
     * @dataProvider invalidDateDataProvider
     * @expectedException \InvalidArgumentException
     * @param mixed $value
     */
    public function testSetInvalidCreatedAtLt($value)
    {
        $this->getTestInstance()->setCreatedAtLt($value);
    }

    /**
     * @dataProvider invalidDateDataProvider
     * @expectedException \InvalidArgumentException
     * @param mixed $value
     */
    public function testSetInvalidCapturedAtGte($value)
    {
        $this->getTestInstance()->setCapturedAtGte($value);
    }

    /**
     * @dataProvider invalidDateDataProvider
     * @expectedException \InvalidArgumentException
     * @param mixed $value
     */
    public function testSetInvalidCapturedAtGt($value)
    {
        $this->getTestInstance()->setCapturedAtGt($value);
    }

    /**
     * @dataProvider invalidDateDataProvider
     * @expectedException \InvalidArgumentException
     * @param mixed $value
     */
    public function testSetInvalidCapturedAtLte($value)
    {
        $this->getTestInstance()->setCapturedAtLte($value);
    }

    /**
     * @dataProvider invalidDateDataProvider
     * @expectedException \InvalidArgumentException
     * @param mixed $value
     */
    public function testSetInvalidCapturedAtLt($value)
    {
        $this->getTestInstance()->setCapturedAtLt($value);
    }


    /**
     * @dataProvider validLimitDataProvider
     * @param $value
     */
    public function testLimit($value)
    {
        $this->getterAndSetterTest($value, 'limit', $value);
    }

    /**
     * @dataProvider invalidDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetInvalidLimit($value)
    {
        $this->getTestInstance()->setLimit($value);
    }

    /**
     * @dataProvider validStatusDataProvider
     * @param $value
     */
    public function testStatus($value)
    {
        $this->getterAndSetterTest($value, 'status', $value === null ? '' : (string)$value);
    }

    /**
     * @dataProvider invalidDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetInvalidStatus($value)
    {
        $this->getTestInstance()->setStatus($value);
    }

    public function testValidate()
    {
        $instance = new PaymentsRequest();
        self::assertTrue($instance->validate());
    }

    public function testBuilder()
    {
        $builder = PaymentsRequest::builder();
        self::assertTrue($builder instanceof PaymentsRequestBuilder);
    }

    public function validNetPageDataProvider()
    {
        return array(
            array(''),
            array(null),
            array(Random::str(1)),
            array(Random::str(2, 64)),
            array(new StringObject(Random::str(1))),
            array(new StringObject(Random::str(2, 64))),
        );
    }

    public function validPaymentMethodDataProvider()
    {
        $result = array(
            array(null),
            array(''),
        );
        foreach (PaymentMethodType::getValidValues() as $value) {
            $result[] = array($value);
            $result[] = array(new StringObject($value));
        }
        return $result;
    }

    public function validIdDataProvider()
    {
        return array(
            array(null),
            array(''),
            array('123'),
            array(Random::str(1, 64)),
            array(new StringObject(Random::str(1, 64))),
        );
    }

    public function validDateDataProvider()
    {
        return array(
            array(null),
            array(''),
            array(Random::int(0, time())),
            array(date(YOOKASSA_DATE, Random::int(0, time()))),
            array(new \DateTime()),
        );
    }

    public function validStatusDataProvider()
    {
        $result = array(
            array(null),
            array(''),
        );
        foreach (PaymentStatus::getValidValues() as $value) {
            $result[] = array($value);
            $result[] = array(new StringObject($value));
        }
        return $result;
    }

    public function validLimitDataProvider()
    {
        return array(
            array(null),
            array(Random::int(1, PaymentsRequest::MAX_LIMIT_VALUE)),
        );
    }

    public function invalidIdDataProvider()
    {
        return array(
            array(array()),
            array(new \stdClass()),
            array(true),
            array(false),
        );
    }

    public function invalidDataProvider()
    {
        $result = array(
            array(array()),
            array(new \stdClass()),
            array(Random::str(10)),
            array(Random::bytes(10)),
            array(-1),
            array(PaymentsRequest::MAX_LIMIT_VALUE + 1),
        );
        return $result;
    }

    public function invalidPaymentMethodDataProvider()
    {
        return array(
            array(true),
            array(false),
            array(array()),
            array(new \stdClass()),
            array(Random::str(35)),
            array(Random::str(37)),
            array(new StringObject(Random::str(10))),
        );
    }

    public function invalidDateDataProvider()
    {
        return array(
            array(true),
            array(false),
            array(array()),
            array(new \stdClass()),
            array(Random::str(35)),
            array(Random::str(37)),
            array(new StringObject(Random::str(10))),
            array(-123),
        );
    }

    public function invalidPageDataProvider()
    {
        return array(
            array(array()),
            array(new \stdClass()),
            array(true),
            array(false),
        );
    }

    private function getterAndSetterTest($value, $property, $expected, $testHas = true)
    {
        $getter = 'get'.ucfirst($property);
        $setter = 'set'.ucfirst($property);
        $has    = 'has'.ucfirst($property);

        $instance = $this->getTestInstance();

        if ($testHas) {
            self::assertFalse($instance->{$has}());
        }
        self::assertNull($instance->{$getter}());
        self::assertNull($instance->{$property});

        $instance->{$setter}($value);
        if ($value === null || $value === '') {
            if ($testHas) {
                self::assertFalse($instance->{$has}());
            }
            self::assertNull($instance->{$getter}());
            self::assertNull($instance->{$property});
        } else {
            if ($testHas) {
                self::assertTrue($instance->{$has}());
            }
            if ($expected instanceof \DateTime) {
                self::assertEquals($expected->getTimestamp(), $instance->{$getter}()->getTimestamp());
                self::assertEquals($expected->getTimestamp(), $instance->{$property}->getTimestamp());
            } else {
                self::assertEquals($expected, $instance->{$getter}());
                self::assertEquals($expected, $instance->{$property});
            }
        }

        $instance->{$setter}(null);
        if ($testHas) {
            self::assertFalse($instance->{$has}());
        }
        self::assertNull($instance->{$getter}());
        self::assertNull($instance->{$property});

        $instance->{$property} = $value;
        if ($value === null || $value === '') {
            if ($testHas) {
                self::assertFalse($instance->{$has}());
            }
            self::assertNull($instance->{$getter}());
            self::assertNull($instance->{$property});
        } else {
            if ($testHas) {
                self::assertTrue($instance->{$has}());
            }
            if ($expected instanceof \DateTime) {
                self::assertEquals($expected->getTimestamp(), $instance->{$getter}()->getTimestamp());
                self::assertEquals($expected->getTimestamp(), $instance->{$property}->getTimestamp());
            } else {
                self::assertEquals($expected, $instance->{$getter}());
                self::assertEquals($expected, $instance->{$property});
            }
        }
    }
}