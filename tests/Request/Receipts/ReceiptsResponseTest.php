<?php

namespace YooKassa\Request\Receipts;


use PHPUnit\Framework\TestCase;
use YooKassa\Helpers\Random;
use YooKassa\Helpers\UUID;
use YooKassa\Model\Receipt\SettlementType;
use YooKassa\Model\ReceiptType;

class ReceiptsResponseTest extends TestCase
{
    /**
     * @dataProvider validDataProvider
     * @param array $options
     * @throws \Exception
     */
    public function testGetType($options)
    {
        $instance = new ReceiptsResponse($options);

        self::assertEquals($options['type'], $instance->getType());
    }

    /**
     * @dataProvider validDataProvider
     * @param array $options
     * @throws \Exception
     */
    public function testGetItems($options)
    {
        $instance = new ReceiptsResponse($options);

        self::assertEquals(count($options['items']), count($instance->getItems()));

        foreach ($instance->getItems() as $index => $item) {
            self::assertTrue($item instanceof ReceiptResponseInterface);
            self::assertArrayHasKey($index, $options['items']);
            self::assertEquals($options['items'][$index]['id'], $item->getId());
            self::assertEquals($options['items'][$index]['type'], $item->getType());
            self::assertEquals($options['items'][$index]['tax_system_code'], $item->getTaxSystemCode());
            self::assertEquals($options['items'][$index]['status'], $item->getStatus());

            self::assertEquals(count($options['items'][$index]['items']), count($item->getItems()));
        }
    }

    public function validDataProvider()
    {
        return array(
            array(
                array(
                    'type' => 'list',
                    'items' => $this->generateReceipts(),
                ),
            ),
        );
    }

    private function generateReceipts()
    {
        $return = array();
        $count = Random::int(1, 10);

        for ($i=0; $i < $count; $i++) {
            $return[] = $this->generateReceipt();
        }

        return $return;
    }

    private function generateReceipt()
    {   $type = Random::value(ReceiptType::getEnabledValues());
        return array(
            'id' => Random::str(39),
            'type' => $type,
            'status' => Random::value(array('pending', 'succeeded', 'canceled')),
            'items' => $this->generateItems(),
            'settlements' => $this->generateItems(),
            'tax_system_code' => Random::int(1 ,6),
            $type . '_id' => UUID::v4(),
        );
    }

    private function generateItems()
    {
        $return = array();
        $count = Random::int(1, 10);

        for ($i=0; $i < $count; $i++) {
            $return[] = $this->generateItem();
        }

        return $return;
    }

    private function generateItem()
    {
        return array(
            'description' => Random::str(1, 128),
            'amount' => array(
                'value' => round(Random::float(1.00, 100.00), 2),
                'currency' => 'RUB',
            ),
            'quantity' => round(Random::float(0.001, 99.999), 3),
            'vat_code' => Random::int(1 ,6),
        );
    }

    private function generateSettlements()
    {
        $return = array();
        $count = Random::int(1, 10);

        for ($i=0; $i < $count; $i++) {
            $return[] = $this->generateSettlement();
        }

        return $return;
    }

    private function generateSettlement()
    {
        return array(
            'type' => Random::value(SettlementType::getValidValues()),
            'amount' => array(
                'value' => round(Random::float(1.00, 100.00), 2),
                'currency' => 'RUB',
            ),
        );
    }
}
