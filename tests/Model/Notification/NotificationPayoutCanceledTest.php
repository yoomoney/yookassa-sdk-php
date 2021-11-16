<?php

namespace Tests\YooKassa\Model\Notification;

use YooKassa\Helpers\Random;
use YooKassa\Model\Notification\NotificationPayoutCanceled;
use YooKassa\Model\NotificationEventType;
use YooKassa\Model\NotificationType;
use YooKassa\Model\PayoutInterface;
use YooKassa\Model\PaymentMethodType;
use YooKassa\Model\Payout;
use YooKassa\Model\Payout\PayoutCancellationDetailsPartyCode;
use YooKassa\Model\Payout\PayoutCancellationDetailsReasonCode;
use YooKassa\Model\PayoutStatus;

class NotificationPayoutCanceledTest extends AbstractNotificationTest
{
    /**
     * @param array $source
     * @return NotificationPayoutCanceled
     * @throws \Exception
     */
    protected function getTestInstance(array $source)
    {
        return new NotificationPayoutCanceled($source);
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return NotificationType::NOTIFICATION;
    }

    /**
     * @return string
     */
    protected function getExpectedEvent()
    {
        return NotificationEventType::PAYOUT_CANCELED;
    }

    /**
     * @dataProvider validDataProvider
     * @param array $value
     */
    public function testGetObject(array $value)
    {
        $instance = $this->getTestInstance($value);
        self::assertTrue($instance->getObject() instanceof PayoutInterface);
        self::assertEquals($value['object']['id'], $instance->getObject()->getId());
    }

    /**
     * @return array
     * @throws \Exception
     */
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
                'type' => $this->getExpectedType(),
                'event' => $this->getExpectedEvent(),
                    'object' => array(
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
                ),
            ),
        );

        for ($i = 0; $i < 20; $i++) {
            $object = array(
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
            $result[] = array(
                array(
                    'type' => $this->getExpectedType(),
                    'event' => $this->getExpectedEvent(),
                    'object' => $object,
                ),
            );
        }
        return $result;
    }
}