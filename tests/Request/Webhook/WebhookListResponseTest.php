<?php

namespace Tests\YooKassa\Request\Webhook;

use PHPUnit\Framework\TestCase;
use YooKassa\Helpers\Random;
use YooKassa\Model\NotificationEventType;
use YooKassa\Model\Webhook\Webhook;
use YooKassa\Request\Webhook\WebhookListResponse;

class WebhookListResponseTest extends TestCase
{
    /**
     * @dataProvider validDataProvider
     * @param array $options
     * @throws \Exception
     */
    public function testGetType($options)
    {
        $instance = new WebhookListResponse($options);

        self::assertEquals($options['type'], $instance->getType());
    }

    /**
     * @dataProvider validDataProvider
     * @param array $options
     * @throws \Exception
     */
    public function testGetItems($options)
    {
        $instance = new WebhookListResponse($options);

        self::assertEquals(count($options['items']), count($instance->getItems()));

        foreach ($instance->getItems() as $index => $item) {
            self::assertTrue($item instanceof Webhook);
            self::assertArrayHasKey($index, $options['items']);
            self::assertEquals($options['items'][$index]['id'], $item->getId());
            self::assertEquals($options['items'][$index]['event'], $item->getEvent());
            self::assertEquals($options['items'][$index]['url'], $item->getUrl());
        }
    }

    public function validDataProvider()
    {
        return array(
            array(
                array(
                    'type' => 'list',
                    'items' => $this->generateWebhooks(),
                ),
            ),
        );
    }

    private function generateWebhooks()
    {
        $return = array();
        $count = Random::int(1, 10);

        for ($i=0; $i < $count; $i++) {
            $return[] = $this->generateWebhook();
        }

        return $return;
    }

    private function generateWebhook()
    {
        return array(
            'id' => Random::str(39),
            'event' => Random::value(NotificationEventType::getValidValues()),
            'url' => Random::str(20)
        );
    }
}