<?php

namespace Tests\YooKassa\Model;

use PHPUnit\Framework\TestCase;
use YooKassa\Helpers\Random;
use YooKassa\Model\CancellationDetails;
use YooKassa\Model\CancellationDetailsPartyCode;
use YooKassa\Model\CancellationDetailsReasonCode;
use YooKassa\Model\Confirmation\ConfirmationRedirect;
use YooKassa\Model\Metadata;
use YooKassa\Model\MonetaryAmount;
use YooKassa\Model\Payment;
use YooKassa\Model\PaymentMethod\PaymentMethodQiwi;
use YooKassa\Model\PaymentStatus;
use YooKassa\Model\ReceiptRegistrationStatus;
use YooKassa\Model\Recipient;
use YooKassa\Model\Transfer;

class PaymentTest extends TestCase
{
    /**
     * @dataProvider validDataProvider
     * @param array $options
     */
    public function testGetSetId($options)
    {
        $instance = new Payment();

        self::assertNull($instance->getId());
        self::assertNull($instance->id);

        $instance->setId($options['id']);
        self::assertEquals($options['id'], $instance->getId());
        self::assertEquals($options['id'], $instance->id);

        $instance = new Payment();
        $instance->id = $options['id'];
        self::assertEquals($options['id'], $instance->getId());
        self::assertEquals($options['id'], $instance->id);
    }

    /**
     * @dataProvider invalidDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetInvalidId($value)
    {
        $instance = new Payment();
        $instance->setId($value['id']);
    }

    /**
     * @dataProvider invalidDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetterInvalidId($value)
    {
        $instance = new Payment();
        $instance->id = $value['id'];
    }

    /**
     * @dataProvider validDataProvider
     * @param array $options
     */
    public function testGetSetStatus($options)
    {
        $instance = new Payment();

        self::assertNull($instance->getStatus());
        self::assertNull($instance->status);

        $instance->setStatus($options['status']);
        self::assertEquals($options['status'], $instance->getStatus());
        self::assertEquals($options['status'], $instance->status);

        $instance = new Payment();
        $instance->status = $options['status'];
        self::assertEquals($options['status'], $instance->getStatus());
        self::assertEquals($options['status'], $instance->status);
    }

    /**
     * @dataProvider invalidDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetInvalidStatus($value)
    {
        $instance = new Payment();
        $instance->setStatus($value['status']);
    }

    /**
     * @dataProvider invalidDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetterInvalidStatus($value)
    {
        $instance = new Payment();
        $instance->status = $value['status'];
    }

    /**
     * @dataProvider validDataProvider
     * @param array $options
     */
    public function testGetSetRecipient($options)
    {
        $instance = new Payment();

        self::assertNull($instance->getRecipient());
        self::assertNull($instance->recipient);

        $instance->setRecipient($options['recipient']);
        self::assertSame($options['recipient'], $instance->getRecipient());
        self::assertSame($options['recipient'], $instance->recipient);

        $instance = new Payment();
        $instance->recipient = $options['recipient'];
        self::assertSame($options['recipient'], $instance->getRecipient());
        self::assertSame($options['recipient'], $instance->recipient);
    }

    /**
     * @dataProvider invalidDataProvider
     * @param $value
     */
    public function testSetInvalidRecipient($value)
    {
        if (class_exists('TypeError')) {
            self::setExpectedException('TypeError');
            $instance = new Payment();
            $instance->setRecipient($value['recipient']);
        }
    }

    /**
     * @dataProvider invalidDataProvider
     * @param $value
     */
    public function testSetterInvalidRecipient($value)
    {
        if (class_exists('TypeError')) {
            self::setExpectedException('TypeError');
            $instance = new Payment();
            $instance->recipient = $value['recipient'];
        }
    }

    /**
     * @dataProvider validDataProvider
     * @param array $options
     */
    public function testGetSetAmount($options)
    {
        $instance = new Payment();

        self::assertNull($instance->getAmount());
        self::assertNull($instance->amount);

        $instance->setAmount($options['amount']);
        self::assertSame($options['amount'], $instance->getAmount());
        self::assertSame($options['amount'], $instance->amount);

        $instance = new Payment();
        $instance->amount = $options['amount'];
        self::assertSame($options['amount'], $instance->getAmount());
        self::assertSame($options['amount'], $instance->amount);
    }

    /**
     * @dataProvider invalidDataProvider
     * @param $value
     */
    public function testSetInvalidAmount($value)
    {
        if (class_exists('TypeError')) {
            self::setExpectedException('TypeError');
            $instance = new Payment();
            $instance->setAmount($value['amount']);
        }
    }

    /**
     * @dataProvider invalidDataProvider
     * @param $value
     */
    public function testSetterInvalidAmount($value)
    {
        if (class_exists('TypeError')) {
            self::setExpectedException('TypeError');
            $instance = new Payment();
            $instance->amount = $value['amount'];
        }
    }

    /**
     * @dataProvider validDataProvider
     * @param array $options
     */
    public function testGetSetPaymentMethod($options)
    {
        $instance = new Payment();

        self::assertNull($instance->getPaymentMethod());
        self::assertNull($instance->paymentMethod);
        self::assertNull($instance->payment_method);

        $instance->setPaymentMethod($options['payment_method']);
        self::assertSame($options['payment_method'], $instance->getPaymentMethod());
        self::assertSame($options['payment_method'], $instance->paymentMethod);
        self::assertSame($options['payment_method'], $instance->payment_method);

        $instance = new Payment();
        $instance->paymentMethod = $options['payment_method'];
        self::assertSame($options['payment_method'], $instance->getPaymentMethod());
        self::assertSame($options['payment_method'], $instance->paymentMethod);
        self::assertSame($options['payment_method'], $instance->payment_method);

        $instance = new Payment();
        $instance->payment_method = $options['payment_method'];
        self::assertSame($options['payment_method'], $instance->getPaymentMethod());
        self::assertSame($options['payment_method'], $instance->paymentMethod);
        self::assertSame($options['payment_method'], $instance->payment_method);
    }

    /**
     * @dataProvider invalidDataProvider
     * @param $value
     */
    public function testSetInvalidPaymentMethod($value)
    {
        if (class_exists('TypeError')) {
            self::setExpectedException('TypeError');
            $instance = new Payment();
            $instance->setPaymentMethod($value['payment_method']);
        }
    }

    /**
     * @dataProvider invalidDataProvider
     * @param $value
     */
    public function testSetterInvalidPaymentMethod($value)
    {
        if (class_exists('TypeError')) {
            self::setExpectedException('TypeError');
            $instance = new Payment();
            $instance->paymentMethod = $value['payment_method'];
        }
    }

    /**
     * @dataProvider invalidDataProvider
     * @param $value
     */
    public function testSetterInvalidPayment_method($value)
    {
        if (class_exists('TypeError')) {
            self::setExpectedException('TypeError');
            $instance = new Payment();
            $instance->payment_method = $value['payment_method'];
        }
    }

    /**
     * @dataProvider validDataProvider
     * @param array $options
     */
    public function testGetSetCreatedAt($options)
    {
        $instance = new Payment();

        self::assertNull($instance->getCreatedAt());
        self::assertNull($instance->createdAt);
        self::assertNull($instance->created_at);

        $instance->setCreatedAt($options['created_at']);
        self::assertSame($options['created_at'], $instance->getCreatedAt()->format(DATE_ATOM));
        self::assertSame($options['created_at'], $instance->createdAt->format(DATE_ATOM));
        self::assertSame($options['created_at'], $instance->created_at->format(DATE_ATOM));

        $instance = new Payment();
        $instance->createdAt = $options['created_at'];
        self::assertSame($options['created_at'], $instance->getCreatedAt()->format(DATE_ATOM));
        self::assertSame($options['created_at'], $instance->createdAt->format(DATE_ATOM));
        self::assertSame($options['created_at'], $instance->created_at->format(DATE_ATOM));

        $instance = new Payment();
        $instance->created_at = $options['created_at'];
        self::assertSame($options['created_at'], $instance->getCreatedAt()->format(DATE_ATOM));
        self::assertSame($options['created_at'], $instance->createdAt->format(DATE_ATOM));
        self::assertSame($options['created_at'], $instance->created_at->format(DATE_ATOM));
    }

    /**
     * @dataProvider invalidDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetInvalidCreatedAt($value)
    {
        $instance = new Payment();
        $instance->setCreatedAt($value['created_at']);
    }

    /**
     * @dataProvider invalidDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetterInvalidCreatedAt($value)
    {
        $instance = new Payment();
        $instance->createdAt = $value['created_at'];
    }

    /**
     * @dataProvider invalidDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetterInvalidCreated_at($value)
    {
        $instance = new Payment();
        $instance->created_at = $value['created_at'];
    }

    /**
     * @dataProvider validDataProvider
     * @param array $options
     */
    public function testGetSetCapturedAt($options)
    {
        $instance = new Payment();

        self::assertNull($instance->getCapturedAt());
        self::assertNull($instance->capturedAt);
        self::assertNull($instance->captured_at);

        $instance->setCapturedAt($options['captured_at']);
        if ($options['captured_at'] === null || $options['captured_at'] === '') {
            self::assertNull($instance->getCapturedAt());
            self::assertNull($instance->capturedAt);
            self::assertNull($instance->captured_at);
        } else {
            self::assertSame($options['captured_at'], $instance->getCapturedAt()->format(DATE_ATOM));
            self::assertSame($options['captured_at'], $instance->capturedAt->format(DATE_ATOM));
            self::assertSame($options['captured_at'], $instance->captured_at->format(DATE_ATOM));
        }

        $instance = new Payment();
        $instance->capturedAt = $options['captured_at'];
        if ($options['captured_at'] === null || $options['captured_at'] === '') {
            self::assertNull($instance->getCapturedAt());
            self::assertNull($instance->capturedAt);
            self::assertNull($instance->captured_at);
        } else {
            self::assertSame($options['captured_at'], $instance->getCapturedAt()->format(DATE_ATOM));
            self::assertSame($options['captured_at'], $instance->capturedAt->format(DATE_ATOM));
            self::assertSame($options['captured_at'], $instance->captured_at->format(DATE_ATOM));
        }

        $instance = new Payment();
        $instance->captured_at = $options['captured_at'];
        if ($options['captured_at'] === null || $options['captured_at'] === '') {
            self::assertNull($instance->getCapturedAt());
            self::assertNull($instance->capturedAt);
            self::assertNull($instance->captured_at);
        } else {
            self::assertSame($options['captured_at'], $instance->getCapturedAt()->format(DATE_ATOM));
            self::assertSame($options['captured_at'], $instance->capturedAt->format(DATE_ATOM));
            self::assertSame($options['captured_at'], $instance->captured_at->format(DATE_ATOM));
        }
    }

    /**
     * @dataProvider invalidDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetInvalidCapturedAt($value)
    {
        $instance = new Payment();
        $instance->setCapturedAt($value['captured_at']);
    }

    /**
     * @dataProvider invalidDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetterInvalidCapturedAt($value)
    {
        $instance = new Payment();
        $instance->capturedAt = $value['captured_at'];
    }

    /**
     * @dataProvider invalidDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetterInvalidCaptured_at($value)
    {
        $instance = new Payment();
        $instance->captured_at = $value['captured_at'];
    }

    /**
     * @dataProvider validDataProvider
     * @param array $options
     */
    public function testGetSetConfirmation($options)
    {
        $instance = new Payment();

        self::assertNull($instance->getConfirmation());
        self::assertNull($instance->confirmation);

        $instance->setConfirmation($options['confirmation']);
        self::assertSame($options['confirmation'], $instance->getConfirmation());
        self::assertSame($options['confirmation'], $instance->confirmation);

        $instance = new Payment();
        $instance->confirmation = $options['confirmation'];
        self::assertSame($options['confirmation'], $instance->getConfirmation());
        self::assertSame($options['confirmation'], $instance->confirmation);
    }

    /**
     * @dataProvider invalidDataProvider
     * @param $value
     */
    public function testSetInvalidConfirmation($value)
    {
        if (class_exists('TypeError')) {
            self::setExpectedException('TypeError');
            $instance = new Payment();
            $instance->setConfirmation($value['confirmation']);
        }
    }

    /**
     * @dataProvider invalidDataProvider
     * @param $value
     */
    public function testSetterInvalidConfirmation($value)
    {
        if (class_exists('TypeError')) {
            self::setExpectedException('TypeError');
            $instance = new Payment();
            $instance->confirmation = $value['confirmation'];
        }
    }

    /**
     * @dataProvider validDataProvider
     * @param array $options
     */
    public function testGetSetRefundedAmount($options)
    {
        $instance = new Payment();

        self::assertNull($instance->getRefundedAmount());
        self::assertNull($instance->refundedAmount);
        self::assertNull($instance->refunded_amount);

        $instance->setRefundedAmount($options['refunded_amount']);
        self::assertSame($options['refunded_amount'], $instance->getRefundedAmount());
        self::assertSame($options['refunded_amount'], $instance->refundedAmount);
        self::assertSame($options['refunded_amount'], $instance->refunded_amount);

        $instance = new Payment();
        $instance->refundedAmount = $options['refunded_amount'];
        self::assertSame($options['refunded_amount'], $instance->getRefundedAmount());
        self::assertSame($options['refunded_amount'], $instance->refundedAmount);
        self::assertSame($options['refunded_amount'], $instance->refunded_amount);

        $instance = new Payment();
        $instance->refunded_amount = $options['refunded_amount'];
        self::assertSame($options['refunded_amount'], $instance->getRefundedAmount());
        self::assertSame($options['refunded_amount'], $instance->refundedAmount);
        self::assertSame($options['refunded_amount'], $instance->refunded_amount);
    }

    /**
     * @dataProvider invalidDataProvider
     * @param $value
     */
    public function testSetInvalidRefundedAmount($value)
    {
        if (class_exists('TypeError')) {
            self::setExpectedException('TypeError');
            $instance = new Payment();
            $instance->setRefundedAmount($value['refunded_amount']);
        }
    }

    /**
     * @dataProvider invalidDataProvider
     * @param $value
     */
    public function testSetterInvalidRefundedAmount($value)
    {
        if (class_exists('TypeError')) {
            self::setExpectedException('TypeError');
            $instance = new Payment();
            $instance->refundedAmount = $value['refunded_amount'];
        }
    }

    /**
     * @dataProvider invalidDataProvider
     * @param $value
     */
    public function testSetterInvalidRefunded_amount($value)
    {
        if (class_exists('TypeError')) {
            self::setExpectedException('TypeError');
            $instance = new Payment();
            $instance->refunded_amount = $value['refunded_amount'];
        }
    }

    /**
     * @dataProvider validDataProvider
     * @param array $options
     */
    public function testGetSetPaid($options)
    {
        $instance = new Payment();

        self::assertNull($instance->getPaid());
        self::assertNull($instance->paid);

        $instance->setPaid($options['paid']);
        self::assertSame($options['paid'], $instance->getPaid());
        self::assertSame($options['paid'], $instance->paid);

        $instance = new Payment();
        $instance->paid = $options['paid'];
        self::assertSame($options['paid'], $instance->getPaid());
        self::assertSame($options['paid'], $instance->paid);
    }

    /**
     * @dataProvider invalidDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetInvalidPaid($value)
    {
        $instance = new Payment();
        $instance->setPaid($value['paid']);
    }

    /**
     * @dataProvider invalidDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetterInvalidPaid($value)
    {
        $instance = new Payment();
        $instance->paid = $value['paid'];
    }

    /**
     * @dataProvider validDataProvider
     * @param array $options
     */
    public function testGetSetRefundable($options)
    {
        $instance = new Payment();

        self::assertNull($instance->getRefundable());
        self::assertNull($instance->refundable);

        $instance->setRefundable($options['refundable']);
        self::assertSame($options['refundable'], $instance->getRefundable());
        self::assertSame($options['refundable'], $instance->refundable);

        $instance = new Payment();
        $instance->refundable = $options['refundable'];
        self::assertSame($options['refundable'], $instance->getRefundable());
        self::assertSame($options['refundable'], $instance->refundable);
    }

    /**
     * @dataProvider invalidDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetInvalidRefundable($value)
    {
        $instance = new Payment();
        $instance->setRefundable($value['refundable']);
    }

    /**
     * @dataProvider invalidDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetterInvalidRefundable($value)
    {
        $instance = new Payment();
        $instance->refundable = $value['refundable'];
    }

    /**
     * @dataProvider validDataProvider
     * @param array $options
     */
    public function testGetSetReceiptRegistration($options)
    {
        $instance = new Payment();

        self::assertNull($instance->getReceiptRegistration());
        self::assertNull($instance->receiptRegistration);
        self::assertNull($instance->receipt_registration);

        $instance->setReceiptRegistration($options['receipt_registration']);
        if ($options['receipt_registration'] === null || $options['receipt_registration'] === '') {
            self::assertNull($instance->getReceiptRegistration());
            self::assertNull($instance->receiptRegistration);
            self::assertNull($instance->receipt_registration);
        } else {
            self::assertSame($options['receipt_registration'], $instance->getReceiptRegistration());
            self::assertSame($options['receipt_registration'], $instance->receiptRegistration);
            self::assertSame($options['receipt_registration'], $instance->receipt_registration);
        }


        $instance = new Payment();
        $instance->receiptRegistration = $options['receipt_registration'];
        if ($options['receipt_registration'] === null || $options['receipt_registration'] === '') {
            self::assertNull($instance->getReceiptRegistration());
            self::assertNull($instance->receiptRegistration);
            self::assertNull($instance->receipt_registration);
        } else {
            self::assertSame($options['receipt_registration'], $instance->getReceiptRegistration());
            self::assertSame($options['receipt_registration'], $instance->receiptRegistration);
            self::assertSame($options['receipt_registration'], $instance->receipt_registration);
        }

        $instance = new Payment();
        $instance->receipt_registration = $options['receipt_registration'];
        if ($options['receipt_registration'] === null || $options['receipt_registration'] === '') {
            self::assertNull($instance->getReceiptRegistration());
            self::assertNull($instance->receiptRegistration);
            self::assertNull($instance->receipt_registration);
        } else {
            self::assertSame($options['receipt_registration'], $instance->getReceiptRegistration());
            self::assertSame($options['receipt_registration'], $instance->receiptRegistration);
            self::assertSame($options['receipt_registration'], $instance->receipt_registration);
        }
    }

    /**
     * @dataProvider invalidDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetInvalidReceiptRegistration($value)
    {
        $instance = new Payment();
        $instance->setReceiptRegistration($value['receipt_registration']);
    }

    /**
     * @dataProvider invalidDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetterInvalidReceiptRegistration($value)
    {
        $instance = new Payment();
        $instance->receiptRegistration = $value['receipt_registration'];
    }

    /**
     * @dataProvider invalidDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetterInvalidReceipt_registration($value)
    {
        $instance = new Payment();
        $instance->receipt_registration = $value['receipt_registration'];
    }

    /**
     * @dataProvider validDataProvider
     * @param array $options
     */
    public function testGetSetMetadata($options)
    {
        $instance = new Payment();

        self::assertNull($instance->getMetadata());
        self::assertNull($instance->metadata);

        $instance->setMetadata($options['metadata']);
        self::assertSame($options['metadata'], $instance->getMetadata());
        self::assertSame($options['metadata'], $instance->metadata);

        $instance = new Payment();
        $instance->metadata = $options['metadata'];
        self::assertSame($options['metadata'], $instance->getMetadata());
        self::assertSame($options['metadata'], $instance->metadata);
    }

    /**
     * @dataProvider validDataProvider
     * @param array $options
     */
    public function testGetSetTransfers($options)
    {
        $instance = new Payment();

        self::assertEmpty($instance->getTransfers());
        self::assertEmpty($instance->transfers);

        $instance->setTransfers($options['transfers']);
        self::assertSame($options['transfers'], $instance->getTransfers());
        self::assertSame($options['transfers'], $instance->transfers);

        $instance = new Payment();
        $instance->transfers = $options['transfers'];
        self::assertSame($options['transfers'], $instance->getTransfers());
        self::assertSame($options['transfers'], $instance->transfers);
    }

    public function validDataProvider()
    {
        $result = array();
        $cancellationDetailsParties = CancellationDetailsPartyCode::getValidValues();
        $countCancellationDetailsParties = count($cancellationDetailsParties);
        $cancellationDetailsReasons = CancellationDetailsReasonCode::getValidValues();
        $countCancellationDetailsReasons = count($cancellationDetailsReasons);
        for ($i = 0; $i < 20; $i++) {
            $payment = array(
                'id' => Random::str(36),
                'status' => Random::value(PaymentStatus::getValidValues()),
                'recipient' => new Recipient(),
                'amount' => new MonetaryAmount(Random::int(1, 10000), 'RUB'),
                'description' => ($i == 0 ? null : ($i == 1 ? '' : ($i == 2 ? Random::str(Payment::MAX_LENGTH_DESCRIPTION)
                    : Random::str(1, Payment::MAX_LENGTH_DESCRIPTION)))),
                'payment_method' => new PaymentMethodQiwi(),
                'reference_id' => ($i == 0 ? null :  ($i == 1 ? '' : Random::str(10, 20, 'abcdef0123456789'))),
                'created_at' => date(DATE_ATOM, mt_rand(1, time())),
                'captured_at' => ($i == 0 ? null : ($i == 1 ? '' : date(DATE_ATOM, mt_rand(1, time())))),
                'expires_at' => ($i == 0 ? null : ($i == 1 ? '' : date(DATE_ATOM, mt_rand(1, time())))),
                'confirmation' => new ConfirmationRedirect(),
                'charge' => new MonetaryAmount(),
                'income' => new MonetaryAmount(),
                'refunded_amount' => new MonetaryAmount(),
                'paid' => $i % 2 ? true : false,
                'refundable' => $i % 2 ? true : false,
                'receipt_registration' => $i == 0 ? null : ($i == 1 ? '' : Random::value(ReceiptRegistrationStatus::getValidValues())),
                'metadata' => new Metadata(),
                'cancellation_details' => new CancellationDetails(
                    $cancellationDetailsParties[$i % $countCancellationDetailsParties],
                    $cancellationDetailsReasons[$i % $countCancellationDetailsReasons]
                ),
                'transfers' => array(
                    new Transfer(array(
                        'account_id' => Random::str(36),
                        'amount' => new MonetaryAmount(Random::int(1, 1000), 'RUB'),
                        'platform_fee_amount' => new MonetaryAmount(Random::int(1, 1000), 'RUB'),
                    )),
                )
            );
            $result[] = array($payment);
        }
        return $result;
    }

    public function invalidDataProvider()
    {
        $result = array(
            array(
                array(
                    'id' => null,
                    'status' => null,
                    'recipient' => null,
                    'amount' => null,
                    'payment_method' => null,
                    'reference_id' => Random::str(65),
                    'confirmation' => null,
                    'charge' => null,
                    'income' => null,
                    'refunded_amount' => null,
                    'paid' => null,
                    'refundable' => null,
                    'created_at' => null,
                    'captured_at' => array(),
                    'receipt_registration' => array(),
                )
            ),
            array(
                array(
                    'id' => '',
                    'status' => '',
                    'recipient' => '',
                    'amount' => '',
                    'payment_method' => '',
                    'reference_id' => array(),
                    'confirmation' => '',
                    'charge' => '',
                    'income' => '',
                    'refunded_amount' => '',
                    'paid' => '',
                    'refundable' => '',
                    'created_at' => array(),
                    'captured_at' => '23423-234-234',
                    'receipt_registration' => new \stdClass(),
                ),
            ),
        );
        for ($i = 0; $i < 10; $i++) {
            $payment = array(
                'id' => Random::str($i < 5 ? mt_rand(1, 35) : mt_rand(37, 64)),
                'status' => Random::str(1, 35),
                'recipient' => 'test',
                'amount' => 'test',
                'payment_method' => 'test',
                'reference_id' => Random::str(66, 128),
                'confirmation' => 'test',
                'charge' => 'test',
                'income' => 'test',
                'refunded_amount' => 'test',
                'paid' => $i == 0 ? array() : new \stdClass(),
                'refundable' => $i == 0 ? array() : new \stdClass(),
                'created_at' => $i == 0 ? '23423-234-32' : -Random::int(),
                'captured_at' => -Random::int(),
                'receipt_registration' => $i == 0 ? true : Random::str(5),
            );
            $result[] = array($payment);
        }
        return $result;
    }

    /**
     * @dataProvider validDataProvider
     * @param array $options
     */
    public function testGetSetExpiresAt($options)
    {
        $instance = new Payment();

        self::assertNull($instance->getExpiresAt());
        self::assertNull($instance->expiresAt);
        self::assertNull($instance->expires_at);

        $instance->setExpiresAt($options['expires_at']);
        if ($options['expires_at'] === null || $options['expires_at'] === '') {
            self::assertNull($instance->getExpiresAt());
            self::assertNull($instance->expiresAt);
            self::assertNull($instance->expires_at);
        } else {
            self::assertSame($options['expires_at'], $instance->getExpiresAt()->format(DATE_ATOM));
            self::assertSame($options['expires_at'], $instance->expiresAt->format(DATE_ATOM));
            self::assertSame($options['expires_at'], $instance->expires_at->format(DATE_ATOM));
        }

        $instance = new Payment();
        $instance->expiresAt = $options['expires_at'];
        if ($options['expires_at'] === null || $options['expires_at'] === '') {
            self::assertNull($instance->getExpiresAt());
            self::assertNull($instance->expiresAt);
            self::assertNull($instance->expires_at);
        } else {
            self::assertSame($options['expires_at'], $instance->getExpiresAt()->format(DATE_ATOM));
            self::assertSame($options['expires_at'], $instance->expiresAt->format(DATE_ATOM));
            self::assertSame($options['expires_at'], $instance->expires_at->format(DATE_ATOM));
        }

        $instance = new Payment();
        $instance->expires_at = $options['expires_at'];
        if ($options['expires_at'] === null || $options['expires_at'] === '') {
            self::assertNull($instance->getExpiresAt());
            self::assertNull($instance->expiresAt);
            self::assertNull($instance->expires_at);
        } else {
            self::assertSame($options['expires_at'], $instance->getExpiresAt()->format(DATE_ATOM));
            self::assertSame($options['expires_at'], $instance->expiresAt->format(DATE_ATOM));
            self::assertSame($options['expires_at'], $instance->expires_at->format(DATE_ATOM));
        }
    }

    /**
     * @dataProvider invalidDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetInvalidExpiresAt($value)
    {
        $instance = new Payment();
        $instance->setExpiresAt($value['captured_at']);
    }

    /**
     * @dataProvider invalidDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetterInvalidExpiresAt($value)
    {
        $instance = new Payment();
        $instance->expiresAt = $value['captured_at'];
    }

    /**
     * @dataProvider invalidDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetterInvalidExpires_at($value)
    {
        $instance = new Payment();
        $instance->expires_at = $value['captured_at'];
    }

    /**
     * @dataProvider validDataProvider
     * @param $options
     */
    public function testSetDescription($options)
    {
        $instance = new Payment();
        $instance->setDescription($options['description']);

        if (empty($options['description']) && ($options['description'] !== '0')) {
            self::assertNull($instance->getDescription());
        } else {
            self::assertEquals($options['description'], $instance->getDescription());
        }
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testSetInvalidTypeDescription()
    {
        $instance = new Payment();
        $instance->setDescription(true);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testSetInvalidLengthDescription()
    {
        $instance = new Payment();
        $description = Random::str(Payment::MAX_LENGTH_DESCRIPTION + 1);
        $instance->setDescription($description);
    }

    /**
     * @dataProvider validDataProvider
     * @param array $options
     */
    public function testGetSetCancellationDetails($options)
    {
        $instance = new Payment();

        self::assertNull($instance->getCancellationDetails());
        self::assertNull($instance->cancellationDetails);
        self::assertNull($instance->cancellation_details);

        $instance->setCancellationDetails($options['cancellation_details']);
        self::assertSame($options['cancellation_details'], $instance->getCancellationDetails());
        self::assertSame($options['cancellation_details'], $instance->cancellationDetails);
        self::assertSame($options['cancellation_details'], $instance->cancellation_details);

        $instance = new Payment();
        $instance->cancellationDetails = $options['cancellation_details'];
        self::assertSame($options['cancellation_details'], $instance->getCancellationDetails());
        self::assertSame($options['cancellation_details'], $instance->cancellationDetails);
        self::assertSame($options['cancellation_details'], $instance->cancellation_details);

        $instance = new Payment();
        $instance->cancellation_details = $options['cancellation_details'];
        self::assertSame($options['cancellation_details'], $instance->getCancellationDetails());
        self::assertSame($options['cancellation_details'], $instance->cancellationDetails);
        self::assertSame($options['cancellation_details'], $instance->cancellation_details);
    }
}