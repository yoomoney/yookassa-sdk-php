<?php

namespace Tests\YooKassa\Model;

use PHPUnit\Framework\TestCase;
use YooKassa\Helpers\Random;
use YooKassa\Helpers\StringObject;
use YooKassa\Model\AmountInterface;
use YooKassa\Model\CurrencyCode;
use YooKassa\Model\Deal\RefundDealInfo;
use YooKassa\Model\MonetaryAmount;
use YooKassa\Model\Payment;
use YooKassa\Model\ReceiptRegistrationStatus;
use YooKassa\Model\Refund;
use YooKassa\Model\RefundStatus;
use YooKassa\Model\Source;
use YooKassa\Request\Refunds\CreateRefundRequest;

class RefundTest extends TestCase
{
    /**
     * @dataProvider validIdDataProvider
     * @param string $value
     */
    public function testGetSetId($value)
    {
        $instance = new Refund();

        self::assertNull($instance->getId());
        self::assertNull($instance->id);

        $instance->setId($value);
        self::assertEquals((string)$value, $instance->getId());
        self::assertEquals((string)$value, $instance->id);

        $instance = new Refund();
        $instance->id = $value;
        self::assertEquals((string)$value, $instance->getId());
        self::assertEquals((string)$value, $instance->id);
    }

    public function validIdDataProvider()
    {
        $values = 'abcdefghijklmnopqrstuvwxyz';
        $values .= strtoupper($values) . '0123456789._-+';

        return array(
            array(Random::str(36, $values)),
            array(Random::str(36, $values)),
            array(new StringObject(Random::str(36, $values))),
            array(new StringObject(Random::str(36, $values))),
        );
    }

    /**
     * @dataProvider invalidIdDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetInvalidId($value)
    {
        $instance = new Refund();
        $instance->setId($value);
    }

    /**
     * @dataProvider invalidIdDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetterInvalidId($value)
    {
        $instance = new Refund();
        $instance->id = $value;
    }

    /**
     * @return array
     */
    public function invalidIdDataProvider()
    {
        return array(
            array(''),
            array(null),
            array(array()),
            array(Random::str(1,35)),
            array(Random::str(1)),
            array(Random::str(35)),
            array(Random::str(37,48)),
            array(Random::str(37)),
            array(new \stdClass()),
            array(1),
            array(0),
            array(-1),
            array(true),
            array(false),
        );
    }

    /**
     * @dataProvider validSources
     * @param $value
     */
    public function testSetSources($value)
    {
        $instance = new CreateRefundRequest();
        $instance->setSources($value);
        if (is_array($value)) {
            $value = array(new Source($value[0]));
        }
        self::assertEquals($value, $instance->getSources());
    }

    /**
     * @dataProvider invalidSourcesDataProvider
     * @param $value
     * @expectedException \InvalidArgumentException
     */
    public function testSetInvalidSources($value)
    {
        $instance = new Refund();
        $instance->setSources($value);
    }

    /**
     * @return array[]
     * @throws \Exception
     */
    public function validSources()
    {
        $sources = array();
        for($i = 0; $i < 10; $i++) {
            $sources[$i][] = array(
                'account_id' => (string)Random::int(11111111, 99999999),
                'amount' => array(
                    'value' => sprintf('%.2f', round(Random::float(0.1, 99.99), 2)),
                    'currency' => Random::value(CurrencyCode::getValidValues())
                ),
                'platform_fee_amount' => array(
                    'value' => sprintf('%.2f', round(Random::float(0.1, 99.99), 2)),
                    'currency' => Random::value(CurrencyCode::getValidValues())
                ),
            );
        }
        $sources[$i][] = array(new Source($sources[0]));

        return array($sources);
    }

    /**
     * @dataProvider validIdDataProvider
     * @param string $value
     */
    public function testGetSetPaymentId($value)
    {
        $instance = new Refund();

        self::assertNull($instance->getPaymentId());
        self::assertNull($instance->paymentId);
        self::assertNull($instance->payment_id);

        $instance->setPaymentId($value);
        self::assertEquals((string)$value, $instance->getPaymentId());
        self::assertEquals((string)$value, $instance->paymentId);
        self::assertEquals((string)$value, $instance->payment_id);

        $instance = new Refund();
        $instance->paymentId = $value;
        self::assertEquals((string)$value, $instance->getPaymentId());
        self::assertEquals((string)$value, $instance->paymentId);
        self::assertEquals((string)$value, $instance->payment_id);

        $instance = new Refund();
        $instance->payment_id = $value;
        self::assertEquals((string)$value, $instance->getPaymentId());
        self::assertEquals((string)$value, $instance->paymentId);
        self::assertEquals((string)$value, $instance->payment_id);
    }

    /**
     * @dataProvider invalidIdDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetInvalidPaymentId($value)
    {
        $instance = new Refund();
        $instance->setPaymentId($value);
    }

    /**
     * @dataProvider invalidIdDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetterInvalidPaymentId($value)
    {
        $instance = new Refund();
        $instance->paymentId = $value;
    }

    /**
     * @dataProvider invalidIdDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetterInvalidPayment_id($value)
    {
        $instance = new Refund();
        $instance->payment_id = $value;
    }

    /**
     * @dataProvider validStatusDataProvider
     * @param string $value
     */
    public function testGetSetStatus($value)
    {
        $instance = new Refund();

        self::assertNull($instance->getStatus());
        self::assertNull($instance->status);

        $instance->setStatus($value);
        self::assertEquals((string)$value, $instance->getStatus());
        self::assertEquals((string)$value, $instance->status);

        $instance = new Refund();
        $instance->status = $value;
        self::assertEquals((string)$value, $instance->getStatus());
        self::assertEquals((string)$value, $instance->status);
    }

    /**
     * @return array
     */
    public function validStatusDataProvider()
    {
        $result = array();
        foreach (RefundStatus::getValidValues() as $value) {
            $result[] = array($value);
            $result[] = array(new StringObject($value));
        }
        return $result;
    }

    /**
     * @dataProvider invalidIdDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetInvalidStatus($value)
    {
        $instance = new Refund();
        $instance->setStatus($value);
    }

    /**
     * @dataProvider invalidIdDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetterInvalidStatus($value)
    {
        $instance = new Refund();
        $instance->status = $value;
    }

    /**
     * @dataProvider validCreatedAtDataProvider
     * @param mixed $value
     */
    public function testGetSetCreatedAt($value)
    {
        $instance = new Refund();

        if (is_numeric($value)) {
            $expected = $value;
        } elseif ($value instanceof \DateTime) {
            $expected = $value->getTimestamp();
        } else {
            $expected = strtotime((string)$value);
        }

        self::assertNull($instance->getCreatedAt());
        self::assertNull($instance->createdAt);
        self::assertNull($instance->created_at);

        $instance->setCreatedAt($value);
        self::assertSame($expected, $instance->getCreatedAt()->getTimestamp());
        self::assertSame($expected, $instance->createdAt->getTimestamp());
        self::assertSame($expected, $instance->created_at->getTimestamp());

        $instance = new Refund();
        $instance->createdAt = $value;
        self::assertSame($expected, $instance->getCreatedAt()->getTimestamp());
        self::assertSame($expected, $instance->createdAt->getTimestamp());
        self::assertSame($expected, $instance->created_at->getTimestamp());

        $instance = new Refund();
        $instance->created_at = $value;
        self::assertSame($expected, $instance->getCreatedAt()->getTimestamp());
        self::assertSame($expected, $instance->createdAt->getTimestamp());
        self::assertSame($expected, $instance->created_at->getTimestamp());
    }

    /**
     * @return array
     */
    public function validCreatedAtDataProvider()
    {
        return array(
            array(new \DateTime()),
            array(new \DateTime(date(YOOKASSA_DATE, Random::int(1, time())))),
            array(time()),
            array(Random::int(1, time())),
            array(date(YOOKASSA_DATE)),
            array(date(YOOKASSA_DATE, Random::int(1, time()))),
            array(new StringObject(date(YOOKASSA_DATE))),
            array(new StringObject(date(YOOKASSA_DATE, Random::int(1, time())))),
        );
    }

    /**
     * @dataProvider invalidCreatedAtDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetInvalidCreatedAt($value)
    {
        $instance = new Refund();
        $instance->setCreatedAt($value);
    }

    /**
     * @dataProvider invalidCreatedAtDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetterInvalidCreatedAt($value)
    {
        $instance = new Refund();
        $instance->createdAt = $value;
    }

    /**
     * @dataProvider invalidCreatedAtDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetterInvalidCreated_at($value)
    {
        $instance = new Refund();
        $instance->created_at = $value;
    }

    /**
     * @return array
     */
    public function invalidCreatedAtDataProvider()
    {
        return array(
            array(null),
            array(''),
            array(array()),
            array(new \stdClass()),
            array('test'),
        );
    }

    /**
     * @dataProvider validAmountDataProvider
     * @param AmountInterface $value
     */
    public function testGetSetAmount($value)
    {
        $instance = new Refund();

        self::assertNull($instance->getAmount());
        self::assertNull($instance->amount);

        $instance->setAmount($value);
        self::assertSame($value, $instance->getAmount());
        self::assertSame($value, $instance->amount);

        $instance = new Refund();
        $instance->amount = $value;
        self::assertSame($value, $instance->getAmount());
        self::assertSame($value, $instance->amount);
    }

    /**
     * @return array
     */
    public function validAmountDataProvider()
    {
        return array(
            array(new MonetaryAmount(1)),
            array(new MonetaryAmount(Random::float(0.01, 9999999.99))),
        );
    }

    /**
     * @dataProvider invalidAmountDataProvider
     * @param mixed $value
     */
    public function testSetInvalidAmount($value)
    {
        if ($value instanceof AmountInterface) {
            self::setExpectedException('InvalidArgumentException');
            $instance = new Refund();
            $instance->setAmount($value);
        } elseif (class_exists('TypeError')) {
            self::setExpectedException('TypeError');
            $instance = new Refund();
            $instance->setAmount($value);
        }
    }

    /**
     * @dataProvider invalidAmountDataProvider
     * @param mixed $value
     */
    public function testSetterInvalidAmount($value)
    {
        if ($value instanceof AmountInterface) {
            self::setExpectedException('InvalidArgumentException');
            $instance = new Refund();
            $instance->amount = $value;
        } elseif (class_exists('TypeError')) {
            self::setExpectedException('TypeError');
            $instance = new Refund();
            $instance->amount = $value;
        }
    }

    /**
     * @return array
     */
    public function invalidAmountDataProvider()
    {
        return array(
            array(''),
            array(null),
            array(true),
            array(false),
            array(new MonetaryAmount()),
            array(array()),
            array(1),
            array(new \stdClass()),
        );
    }

    /**
     * @dataProvider validReceiptRegisteredDataProvider
     * @param string $value
     */
    public function testGetSetReceiptRegistered($value)
    {
        $instance = new Refund();

        self::assertNull($instance->getReceiptRegistration());
        self::assertNull($instance->receiptRegistration);
        self::assertNull($instance->receipt_registration);

        $instance->setReceiptRegistration($value);
        self::assertEquals((string)$value, $instance->getReceiptRegistration());
        self::assertEquals((string)$value, $instance->receiptRegistration);
        self::assertEquals((string)$value, $instance->receipt_registration);

        $instance = new Refund();
        $instance->receiptRegistration = $value;
        self::assertEquals((string)$value, $instance->getReceiptRegistration());
        self::assertEquals((string)$value, $instance->receiptRegistration);
        self::assertEquals((string)$value, $instance->receipt_registration);

        $instance = new Refund();
        $instance->receipt_registration = $value;
        self::assertEquals((string)$value, $instance->getReceiptRegistration());
        self::assertEquals((string)$value, $instance->receiptRegistration);
        self::assertEquals((string)$value, $instance->receipt_registration);
    }

    /**
     * @return array
     */
    public function validReceiptRegisteredDataProvider()
    {
        $result = array();
        foreach (ReceiptRegistrationStatus::getValidValues() as $value) {
            $result[] = array($value);
            $result[] = array(new StringObject($value));
        }
        return $result;
    }

    /**
     * @dataProvider invalidReceiptRegisteredDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetInvalidReceiptRegistered($value)
    {
        $instance = new Refund();
        $instance->setReceiptRegistration($value);
    }

    /**
     * @dataProvider invalidReceiptRegisteredDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetterInvalidReceiptRegistration($value)
    {
        $instance = new Refund();
        $instance->receiptRegistration = $value;
    }

    /**
     * @dataProvider invalidReceiptRegisteredDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetterInvalidReceipt_registration($value)
    {
        $instance = new Refund();
        $instance->receipt_registration = $value;
    }

    /**
     * @return array
     */
    public function invalidReceiptRegisteredDataProvider()
    {
        return array(
            array(''),
            array(null),
            array(true),
            array(false),
            array(array()),
            array(new \stdClass()),
            array(Random::str(1,10)),
            array(new StringObject(Random::str(1,10))),
        );
    }

    /**
     * @dataProvider validDescriptionDataProvider
     * @param string $value
     */
    public function testGetSetDescription($value)
    {
        $instance = new Refund();

        self::assertNull($instance->getDescription());
        self::assertNull($instance->description);

        $instance->setDescription($value);
        self::assertEquals((string)$value, $instance->getDescription());
        self::assertEquals((string)$value, $instance->description);

        $instance = new Refund();
        $instance->description = $value;
        self::assertEquals((string)$value, $instance->getDescription());
        self::assertEquals((string)$value, $instance->description);
    }

    public function validDescriptionDataProvider()
    {
        return array(
            array(Random::str(1, 249)),
            array(new StringObject(Random::str(1, 249))),
            array(Random::str(250)),
            array(new StringObject(Random::str(250))),
        );
    }

    /**
     * @dataProvider invalidDescriptionDataProvider
     * @expectedException \InvalidArgumentException
     * @param mixed $value
     */
    public function testSetInvalidDescription($value)
    {
        $instance = new Refund();
        $instance->setDescription($value);
    }

    /**
     * @dataProvider invalidDescriptionDataProvider
     * @expectedException \InvalidArgumentException
     * @param mixed $value
     */
    public function testSetterInvalidDescription($value)
    {
        $instance = new Refund();
        $instance->description = $value;
    }

    public function invalidDescriptionDataProvider()
    {
        return array(
            array(null),
            array(''),
            array(array()),
            array(true),
            array(false),
            array(new \stdClass()),
        );
    }

    public function invalidSourcesDataProvider()
    {
        return array(
            array('test'),
            array(array(new Payment()))
        );
    }

    public function invalidRequestorDataProvider()
    {
        return array(
            array('test'),
            array(false),
            array(null)
        );
    }

    /**
     * @dataProvider validDealDataProvider
     * @param mixed $value
     */
    public function testGetSetDeal($value)
    {
        $instance = new Refund();

        self::assertNull($instance->getDeal());
        self::assertNull($instance->deal);

        $instance->setDeal($value);
        self::assertSame($value, $instance->getDeal());
        self::assertSame($value, $instance->deal);

        $instance = new Refund();
        $instance->deal = $value;
        self::assertSame($value, $instance->getDeal());
        self::assertSame($value, $instance->deal);
    }

    /**
     * @return array
     */
    public function validDealDataProvider()
    {
        return array(
            array(new RefundDealInfo(array('amount' => 1))),
            array(new RefundDealInfo(array('amount' => Random::float(0.01, 9999999.99)))),
        );
    }

    /**
     * @dataProvider invalidDealDataProvider
     * @param mixed $value
     */
    public function testSetInvalidDeal($value)
    {
        self::setExpectedException('InvalidArgumentException');
        $instance = new Refund();
        $instance->setDeal($value);
    }

    /**
     * @dataProvider invalidDealDataProvider
     * @param mixed $value
     */
    public function testSetterInvalidDeal($value)
    {
        self::setExpectedException('InvalidArgumentException');
        $instance = new Refund();
        $instance->deal = $value;
    }

    /**
     * @return array
     */
    public function invalidDealDataProvider()
    {
        return array(
            array(true),
            array(false),
            array(new MonetaryAmount()),
            array(1),
            array(new \stdClass()),
        );
    }

}