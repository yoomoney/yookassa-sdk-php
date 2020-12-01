<?php

use PHPUnit\Framework\TestCase;
use YooKassa\Helpers\Random;
use YooKassa\Model\NotificationEventType;
use YooKassa\Model\Webhook\Webhook;

class WebhookTest extends TestCase
{
    /**
     * @dataProvider validDataProvider
     *
     * @param $data
     */
    public function testWebhookInstantiate($data)
    {
        $webhook = new Webhook();

        $webhook->setId($data['id']);
        $webhook->setUrl($data['url']);
        $webhook->setEvent($data['event']);

        self::assertEquals($webhook->getId(), $data['id']);
        self::assertEquals($webhook->getUrl(), $data['url']);
        self::assertEquals($webhook->getEvent(), $data['event']);
    }

    /**
     * @dataProvider validDataProvider
     *
     * @param $data
     */
    public function testWebhookConstructorInstantiate($data)
    {
        $webhook = new Webhook($data);
        
        self::assertEquals($webhook->getId(), $data['id']);
        self::assertEquals($webhook->getUrl(), $data['url']);
        self::assertEquals($webhook->getEvent(), $data['event']);
    }

    /**
     * @return array
     */
    public function validDataProvider()
    {
        return array(
            array(
                array(
                    "id"    => Random::str(20),
                    "event" => NotificationEventType::REFUND_SUCCEEDED,
                    "url"   => Random::str(20),
                ),
            ),
            array(
                array(
                    "id"    => Random::str(20),
                    "event" => NotificationEventType::PAYMENT_SUCCEEDED,
                    "url"   => Random::str(20),
                ),
            ),
            array(
                array(
                    "id"    => Random::str(20),
                    "event" => NotificationEventType::PAYMENT_WAITING_FOR_CAPTURE,
                    "url"   => Random::str(20),
                ),
            ),
        );
    }
}