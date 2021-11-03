<?php

namespace Tests\YooKassa\Model;

use PHPUnit\Framework\TestCase;
use YooKassa\Helpers\Random;
use YooKassa\Model\Metadata;
use YooKassa\Model\MonetaryAmount;
use YooKassa\Model\PaymentMethodType;
use YooKassa\Model\Payout;
use YooKassa\Model\Payout\PayoutCancellationDetails;
use YooKassa\Model\Payout\PayoutCancellationDetailsPartyCode;
use YooKassa\Model\Payout\PayoutCancellationDetailsReasonCode;
use YooKassa\Model\Deal\PayoutDealInfo;
use YooKassa\Model\Payout\PayoutDestinationFactory;
use YooKassa\Model\Payout\PayoutDestinationYooMoney;
use YooKassa\Model\PayoutStatus;

class PayoutTest extends TestCase
{
    /**
     * @dataProvider validDataProvider
     * @param array $options
     */
    public function testGetSetId($options)
    {
        $instance = new Payout();

        self::assertNull($instance->getId());
        self::assertNull($instance->id);

        $instance->setId($options['id']);
        self::assertEquals($options['id'], $instance->getId());
        self::assertEquals($options['id'], $instance->id);

        $instance = new Payout();
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
        $instance = new Payout();
        $instance->setId($value['id']);
    }

    /**
     * @dataProvider invalidDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetterInvalidId($value)
    {
        $instance = new Payout();
        $instance->id = $value['id'];
    }

    /**
     * @dataProvider validDataProvider
     * @param array $options
     */
    public function testGetSetStatus($options)
    {
        $instance = new Payout();

        self::assertNull($instance->getStatus());
        self::assertNull($instance->status);

        $instance->setStatus($options['status']);
        self::assertEquals($options['status'], $instance->getStatus());
        self::assertEquals($options['status'], $instance->status);

        $instance = new Payout();
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
        $instance = new Payout();
        $instance->setStatus($value['status']);
    }

    /**
     * @dataProvider invalidDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetterInvalidStatus($value)
    {
        $instance = new Payout();
        $instance->status = $value['status'];
    }

    /**
     * @dataProvider validDataProvider
     * @param array $options
     */
    public function testGetSetAmount($options)
    {
        $instance = new Payout();

        self::assertNull($instance->getAmount());
        self::assertNull($instance->amount);

        $instance->setAmount($options['amount']);
        self::assertSame($options['amount'], $instance->getAmount());
        self::assertSame($options['amount'], $instance->amount);

        $instance = new Payout();
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
        if (class_exists('InvalidPropertyValueTypeException')) {
            self::setExpectedException('InvalidPropertyValueTypeException');
            $instance = new Payout();
            $instance->setAmount($value['amount']);
        }
    }

    /**
     * @dataProvider invalidDataProvider
     * @param $value
     */
    public function testSetterInvalidAmount($value)
    {
        if (class_exists('InvalidPropertyValueTypeException')) {
            self::setExpectedException('InvalidPropertyValueTypeException');
            $instance = new Payout();
            $instance->amount = $value['amount'];
        }
    }

    /**
     * @dataProvider validDataProvider
     * @param array $options
     */
    public function testGetSetPayoutDestination($options)
    {
        $instance = new Payout();

        self::assertNull($instance->getPayoutDestination());
        self::assertNull($instance->payout_destination);

        $instance->setPayoutDestination($options['payout_destination']);
        self::assertEquals($options['payout_destination'], $instance->getPayoutDestination());
        self::assertEquals($options['payout_destination'], $instance->payout_destination);

        $instance = new Payout();
        $instance->payout_destination = $options['payout_destination'];
        self::assertEquals($options['payout_destination'], $instance->getPayoutDestination());
        self::assertEquals($options['payout_destination'], $instance->payout_destination);
    }

    /**
     * @dataProvider invalidDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetInvalidPayoutDestination($value)
    {
        $instance = new Payout();
        $instance->setPayoutDestination($value['payout_destination']);
    }

    /**
     * @dataProvider invalidDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetterInvalidPayoutDestination($value)
    {
        $instance = new Payout();
        $instance->payout_destination = $value['payout_destination'];
    }

    /**
     * @dataProvider validDataProvider
     * @param array $options
     */
    public function testGetSetCreatedAt($options)
    {
        $instance = new Payout();

        self::assertNull($instance->getCreatedAt());
        self::assertNull($instance->createdAt);
        self::assertNull($instance->created_at);

        $instance->setCreatedAt($options['created_at']);
        self::assertSame($options['created_at'], $instance->getCreatedAt()->format(YOOKASSA_DATE));
        self::assertSame($options['created_at'], $instance->createdAt->format(YOOKASSA_DATE));
        self::assertSame($options['created_at'], $instance->created_at->format(YOOKASSA_DATE));

        $instance = new Payout();
        $instance->createdAt = $options['created_at'];
        self::assertSame($options['created_at'], $instance->getCreatedAt()->format(YOOKASSA_DATE));
        self::assertSame($options['created_at'], $instance->createdAt->format(YOOKASSA_DATE));
        self::assertSame($options['created_at'], $instance->created_at->format(YOOKASSA_DATE));

        $instance = new Payout();
        $instance->created_at = $options['created_at'];
        self::assertSame($options['created_at'], $instance->getCreatedAt()->format(YOOKASSA_DATE));
        self::assertSame($options['created_at'], $instance->createdAt->format(YOOKASSA_DATE));
        self::assertSame($options['created_at'], $instance->created_at->format(YOOKASSA_DATE));
    }

    /**
     * @dataProvider invalidDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetInvalidCreatedAt($value)
    {
        $instance = new Payout();
        $instance->setCreatedAt($value['created_at']);
    }

    /**
     * @dataProvider invalidDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetterInvalidCreatedAt($value)
    {
        $instance = new Payout();
        $instance->createdAt = $value['created_at'];
    }

    /**
     * @dataProvider invalidDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetterInvalidCreated_at($value)
    {
        $instance = new Payout();
        $instance->created_at = $value['created_at'];
    }

    /**
     * @dataProvider validDataProvider
     * @param array $options
     */
    public function testGetSetTest($options)
    {
        $instance = new Payout();

        self::assertNull($instance->getTest());
        self::assertNull($instance->test);

        $instance->setTest($options['test']);
        self::assertSame($options['test'], $instance->getTest());
        self::assertSame($options['test'], $instance->test);

        $instance = new Payout();
        $instance->test = $options['test'];
        self::assertSame($options['test'], $instance->getTest());
        self::assertSame($options['test'], $instance->test);
    }

    /**
     * @dataProvider invalidDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetInvalidTest($value)
    {
        $instance = new Payout();
        $instance->setTest($value['test']);
    }

    /**
     * @dataProvider invalidDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetterInvalidTest($value)
    {
        $instance = new Payout();
        $instance->test = $value['test'];
    }

    /**
     * @dataProvider validDataProvider
     * @param array $options
     */
    public function testGetSetDeal($options)
    {
        $instance = new Payout();

        self::assertNull($instance->getDeal());
        self::assertNull($instance->deal);
        if (isset($options['deal'])) {
            $instance->setDeal($options['deal']);
            self::assertSame($options['deal'], $instance->getDeal());
            self::assertSame($options['deal'], $instance->deal);

            $instance = new Payout();
            $instance->deal = $options['deal'];
            self::assertSame($options['deal'], $instance->getDeal());
            self::assertSame($options['deal'], $instance->deal);
        }
    }

    /**
     * @dataProvider invalidDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetInvalidDeal($value)
    {
        $instance = new Payout();
        $instance->setDeal($value['deal']);
    }

    /**
     * @dataProvider invalidDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetterInvalidDeal($value)
    {
        $instance = new Payout();
        $instance->deal = $value['deal'];
    }

    /**
     * @dataProvider validDataProvider
     * @param $options
     */
    public function testSetDescription($options)
    {
        $instance = new Payout();
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
        $instance = new Payout();
        $instance->setDescription(true);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testSetInvalidLengthDescription()
    {
        $instance = new Payout();
        $description = Random::str(Payout::MAX_LENGTH_DESCRIPTION + 1);
        $instance->setDescription($description);
    }

    /**
     * @dataProvider validDataProvider
     * @param array $options
     */
    public function testGetSetCancellationDetails($options)
    {
        $instance = new Payout();

        self::assertNull($instance->getCancellationDetails());
        self::assertNull($instance->cancellationDetails);
        self::assertNull($instance->cancellation_details);

        $instance->setCancellationDetails($options['cancellation_details']);
        self::assertSame($options['cancellation_details'], $instance->getCancellationDetails());
        self::assertSame($options['cancellation_details'], $instance->cancellationDetails);
        self::assertSame($options['cancellation_details'], $instance->cancellation_details);

        $instance = new Payout();
        $instance->cancellationDetails = $options['cancellation_details'];
        self::assertSame($options['cancellation_details'], $instance->getCancellationDetails());
        self::assertSame($options['cancellation_details'], $instance->cancellationDetails);
        self::assertSame($options['cancellation_details'], $instance->cancellation_details);

        $instance = new Payout();
        $instance->cancellation_details = $options['cancellation_details'];
        self::assertSame($options['cancellation_details'], $instance->getCancellationDetails());
        self::assertSame($options['cancellation_details'], $instance->cancellationDetails);
        self::assertSame($options['cancellation_details'], $instance->cancellation_details);
    }

    /**
     * @dataProvider validDataProvider
     * @param array $options
     */
    public function testGetSetMetadata($options)
    {
        $instance = new Payout();

        self::assertNull($instance->getMetadata());
        self::assertNull($instance->metadata);

        if (is_array($options['metadata'])) {
            $instance->setMetadata($options['metadata']);
            self::assertSame($options['metadata'], $instance->getMetadata()->toArray());
            self::assertSame($options['metadata'], $instance->metadata->toArray());

            $instance = new Payout();
            $instance->metadata = $options['metadata'];
            self::assertSame($options['metadata'], $instance->getMetadata()->toArray());
            self::assertSame($options['metadata'], $instance->metadata->toArray());
        } elseif ($options['metadata'] instanceof Metadata || empty($options['metadata'])) {
            $instance->setMetadata($options['metadata']);
            self::assertSame($options['metadata'], $instance->getMetadata());
            self::assertSame($options['metadata'], $instance->metadata);

            $instance = new Payout();
            $instance->metadata = $options['metadata'];
            self::assertSame($options['metadata'], $instance->getMetadata());
            self::assertSame($options['metadata'], $instance->metadata);
        }
    }

    public function validDataProvider()
    {
        $result = array();
        $cancellationDetailsParties = PayoutCancellationDetailsPartyCode::getValidValues();
        $countCancellationDetailsParties = count($cancellationDetailsParties);
        $cancellationDetailsReasons = PayoutCancellationDetailsReasonCode::getValidValues();
        $countCancellationDetailsReasons = count($cancellationDetailsReasons);
        $payoutDestinationFactory = new PayoutDestinationFactory();
        $payoutDestinations = array(
            PaymentMethodType::YOO_MONEY => $payoutDestinationFactory->factoryFromArray(array(
                'type' => PaymentMethodType::YOO_MONEY,
                'account_number' => Random::str(11, 33, '1234567890')
            )),
            PaymentMethodType::BANK_CARD => $payoutDestinationFactory->factoryFromArray(array(
                'type' => PaymentMethodType::BANK_CARD,
                'card' => array(
                    'number' => Random::str(16, 18, '1234567890')
                )
            )),
        );

        $result[] = array(
            array(
                'id' => Random::str(36, 50),
                'status' => Random::value(PayoutStatus::getValidValues()),
                'amount' => new MonetaryAmount(Random::int(1, 10000), 'RUB'),
                'description' => Random::str(1, Payout::MAX_LENGTH_DESCRIPTION),
                'payout_destination' => $payoutDestinations[Random::value(array(PaymentMethodType::YOO_MONEY,PaymentMethodType::BANK_CARD))],
                'created_at' => date(YOOKASSA_DATE, mt_rand(111111111, time())),
                'test' => true,
                'deal' => new PayoutDealInfo(array('id' => Random::str(36, 50))),
                'metadata' => array('order_id' => '37'),
                'cancellation_details' => new PayoutCancellationDetails(array(
                    'party' => Random::value($cancellationDetailsParties),
                    'reason' => Random::value($cancellationDetailsReasons)
                )),
            )
        );
        $result[] = array(
            array(
                'id' => Random::str(36, 50),
                'status' => Random::value(PayoutStatus::getValidValues()),
                'amount' => new MonetaryAmount(Random::int(1, 10000), 'RUB'),
                'description' => Random::str(1, Payout::MAX_LENGTH_DESCRIPTION),
                'payout_destination' => $payoutDestinations[Random::value(array(PaymentMethodType::YOO_MONEY,PaymentMethodType::BANK_CARD))],
                'created_at' => date(YOOKASSA_DATE, mt_rand(1, time())),
                'test' => true,
                'metadata' => null,
                'cancellation_details' => null,
            )
        );

        for ($i = 0; $i < 20; $i++) {
            $payment = array(
                'id' => Random::str(36, 50),
                'status' => Random::value(PayoutStatus::getValidValues()),
                'amount' => new MonetaryAmount(Random::int(1, 10000), 'RUB'),
                'description' => ($i == 0 ? null : ($i == 1 ? '' : ($i == 2 ? Random::str(Payout::MAX_LENGTH_DESCRIPTION)
                    : Random::str(1, Payout::MAX_LENGTH_DESCRIPTION)))),
                'payout_destination' => $payoutDestinations[Random::value(array(PaymentMethodType::YOO_MONEY,PaymentMethodType::BANK_CARD))],
                'created_at' => date(YOOKASSA_DATE, mt_rand(1, time())),
                'test' => (bool)($i % 2),
                'metadata' => new Metadata(),
                'cancellation_details' => new PayoutCancellationDetails(array(
                    'party' => $cancellationDetailsParties[$i % $countCancellationDetailsParties],
                    'reason' => $cancellationDetailsReasons[$i % $countCancellationDetailsReasons]
                )),
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
                    'amount' => null,
                    'payout_destination' => Random::str(10),
                    'test' => null,
                    'deal' => time(),
                    'created_at' => null,
                )
            ),
            array(
                array(
                    'id' => '',
                    'status' => '',
                    'amount' => '',
                    'payout_destination' => new \stdClass(),
                    'test' => '',
                    'deal' => new Metadata(),
                    'created_at' => array(),
                    'cancellation_details' => new \stdClass(),
                ),
            ),
        );
        for ($i = 0; $i < 10; $i++) {
            $payment = array(
                'id' => Random::str($i < 5 ? mt_rand(1, 35) : mt_rand(51, 64)),
                'status' => Random::str(1, 35),
                'amount' => $i % 2 ? Random::str(10) : new \stdClass(),
                'payout_destination' => $i % 2 ? Random::str(10) : new \stdClass(),
                'test' => $i == 0 ? array() : new \stdClass(),
                'deal' => $i == 0 ? Random::str(10) : new \stdClass(),
                'created_at' => $i == 0 ? '23423-234-32' : -Random::int(),
            );
            $result[] = array($payment);
        }
        return $result;
    }

}