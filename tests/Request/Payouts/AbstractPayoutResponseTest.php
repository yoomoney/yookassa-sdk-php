<?php

namespace Tests\YooKassa\Request\Payouts;

use PHPUnit\Framework\TestCase;
use YooKassa\Helpers\Random;
use YooKassa\Model\PaymentMethodType;
use YooKassa\Model\Payout;
use YooKassa\Model\Payout\PayoutCancellationDetailsPartyCode;
use YooKassa\Model\Payout\PayoutCancellationDetailsReasonCode;
use YooKassa\Model\PayoutStatus;
use YooKassa\Request\Payouts\PayoutResponse;

abstract class AbstractPayoutResponseTest extends TestCase
{
    /**
     * @param $options
     * @return PayoutResponse
     */
    abstract protected function getTestInstance($options);

    /**
     * @dataProvider validDataProvider
     * @param array $options
     */
    public function testGetId($options)
    {
        $instance = $this->getTestInstance($options);
        self::assertEquals($options['id'], $instance->getId());
    }

    /**
     * @dataProvider validDataProvider
     * @param array $options
     */
    public function testGetAmount($options)
    {
        $instance = $this->getTestInstance($options);
        self::assertEquals(number_format($options['amount']['value'], 2, '.', ''), $instance->getAmount()->getValue());
        self::assertEquals($options['amount']['currency'], $instance->getAmount()->getCurrency());
    }

    /**
     * @dataProvider validDataProvider
     * @param array $options
     */
    public function testGetStatus($options)
    {
        $instance = $this->getTestInstance($options);
        self::assertEquals($options['status'], $instance->getStatus());
    }

    /**
     * @dataProvider validDataProvider
     * @param array $options
     */
    public function testGetPayoutDestination($options)
    {
        $instance = $this->getTestInstance($options);
        if (empty($options['payout_destination'])) {
            self::assertNull($instance->getPayoutDestination());
            self::assertNull($instance->payout_destination);
        } else {
            self::assertEquals($options['payout_destination'], $instance->getPayoutDestination()->toArray());
            self::assertEquals($options['payout_destination'], $instance->payoutDestination->toArray());
            self::assertEquals($options['payout_destination'], $instance->payout_destination->toArray());
        }
    }

    /**
     * @dataProvider validDataProvider
     * @param array $options
     */
    public function testGetCreatedAt($options)
    {
        $instance = $this->getTestInstance($options);
        if (empty($options['created_at'])) {
            self::assertNull($instance->getCreatedAt());
            self::assertNull($instance->created_at);
            self::assertNull($instance->createdAt);
        } else {
            self::assertEquals($options['created_at'], $instance->getCreatedAt()->format(YOOKASSA_DATE));
        }
    }

    /**
     * @dataProvider validDataProvider
     * @param array $options
     */
    public function testGetDeal($options)
    {
        $instance = $this->getTestInstance($options);
        if (empty($options['deal'])) {
            self::assertNull($instance->getDeal());
            self::assertNull($instance->deal);
        } else {
            $instance->setDeal($options['deal']);
            self::assertSame($options['deal'], $instance->getDeal()->toArray());
            self::assertSame($options['deal'], $instance->deal->toArray());
        }
    }

    /**
     * @dataProvider validDataProvider
     * @param array $options
     */
    public function testGetTest($options)
    {
        $instance = $this->getTestInstance($options);
        if (!isset($options['test'])) {
            self::assertNull($instance->getTest());
        } else {
            self::assertEquals($options['test'], $instance->getTest());
        }
    }

    /**
     * @dataProvider validDataProvider
     * @param array $options
     */
    public function testGetCancellationDetails($options)
    {
        $instance = $this->getTestInstance($options);
        if (empty($options['cancellation_details'])) {
            self::assertNull($instance->getCancellationDetails());
        } else {
            self::assertEquals(
                $options['cancellation_details']['party'],
                $instance->getCancellationDetails()->getParty()
            );
            self::assertEquals(
                $options['cancellation_details']['reason'],
                $instance->getCancellationDetails()->getReason()
            );
        }
    }

    /**
     * @dataProvider validDataProvider
     * @param array $options
     */
    public function testGetMetadata($options)
    {
        $instance = $this->getTestInstance($options);
        if (empty($options['metadata'])) {
            self::assertNull($instance->getMetadata());
        } else {
            self::assertEquals($options['metadata'], $instance->getMetadata()->toArray());
        }
    }

    public function validDataProvider()
    {
        $result = array();
        $cancellationDetailsParties = PayoutCancellationDetailsPartyCode::getValidValues();
        $countCancellationDetailsParties = count($cancellationDetailsParties);
        $cancellationDetailsReasons = PayoutCancellationDetailsReasonCode::getValidValues();
        $countCancellationDetailsReasons = count($cancellationDetailsReasons);
        $payoutDestinations = array(
            PaymentMethodType::YOO_MONEY => array(
                'type' => PaymentMethodType::YOO_MONEY,
                'account_number' => Random::str(11, 33, '1234567890')
            ),
            PaymentMethodType::BANK_CARD => array(
                'type' => PaymentMethodType::BANK_CARD,
                'card' => array(
                    'number' => Random::str(16, 18, '1234567890')
                )
            ),
        );

        $result[] = array(
            array(
                'id' => Random::str(36, 50),
                'status' => Random::value(PayoutStatus::getValidValues()),
                'amount' => array('value' => Random::int(1, 10000), 'currency' => 'RUB'),
                'description' => Random::str(1, Payout::MAX_LENGTH_DESCRIPTION),
                'payout_destination' => $payoutDestinations[Random::value(array(PaymentMethodType::YOO_MONEY,PaymentMethodType::BANK_CARD))],
                'created_at' => date(YOOKASSA_DATE, mt_rand(111111111, time())),
                'test' => true,
                'deal' => array('id' => Random::str(36, 50)),
                'metadata' => array('order_id' => '37'),
                'cancellation_details' => array(
                    'party' => Random::value($cancellationDetailsParties),
                    'reason' => Random::value($cancellationDetailsReasons)
                ),
            )
        );
        $result[] = array(
            array(
                'id' => Random::str(36, 50),
                'status' => Random::value(PayoutStatus::getValidValues()),
                'amount' =>  array('value' => Random::int(1, 10000), 'currency' => 'RUB'),
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
                'amount' =>  array('value' => Random::int(1, 10000), 'currency' => 'RUB'),
                'description' => ($i == 0 ? null : ($i == 1 ? '' : ($i == 2 ? Random::str(Payout::MAX_LENGTH_DESCRIPTION)
                    : Random::str(1, Payout::MAX_LENGTH_DESCRIPTION)))),
                'payout_destination' => $payoutDestinations[Random::value(array(PaymentMethodType::YOO_MONEY,PaymentMethodType::BANK_CARD))],
                'created_at' => date(YOOKASSA_DATE, mt_rand(1, time())),
                'test' => (bool)($i % 2),
                'metadata' => array(Random::str(3, 128, 'abcdefghijklmnopqrstuvwxyz') => Random::str(1, 512)),
                'cancellation_details' => array(
                    'party' => $cancellationDetailsParties[$i % $countCancellationDetailsParties],
                    'reason' => $cancellationDetailsReasons[$i % $countCancellationDetailsReasons]
                ),
            );
            $result[] = array($payment);
        }
        return $result;
    }

}
