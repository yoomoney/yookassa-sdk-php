<?php

namespace Tests\YooKassa\Request\Receipts;

use PHPUnit\Framework\TestCase;
use YooKassa\Helpers\Random;
use YooKassa\Request\Receipts\ReceiptResponseInterface;
use YooKassa\Request\Receipts\ReceiptResponseItemInterface;

abstract class AbstractReceiptResponseTest extends TestCase
{
    protected $type;

    /**
     * @param $options
     * @return ReceiptResponseInterface
     */
    abstract protected function getTestInstance($options);

    /**
     * @param $options
     * @return array
     */
    abstract protected function addSpecificProperties($options);

    /**
     * @dataProvider validDataProvider
     * @param array $options
     */
    abstract public function testSpecificProperties($options);

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
    public function testGetType($options)
    {
        $instance = $this->getTestInstance($options);
        self::assertEquals($options['type'], $instance->getType());
    }

    /**
     * @dataProvider validDataProvider
     * @param array $options
     */
    public function testGetStatus($options)
    {
        $instance = $this->getTestInstance($options);
        if (empty($options['status'])) {
            self::assertFalse($instance->getStatus());
        } else {
            self::assertEquals($options['status'], $instance->getStatus());
        }
    }

    /**
     * @dataProvider validDataProvider
     * @param array $options
     */
    public function testGetTaxSystemCode($options)
    {
        $instance = $this->getTestInstance($options);
        if (empty($options['tax_system_code'])) {
            self::assertFalse($instance->getTaxSystemCode());
        } else {
            self::assertEquals($options['tax_system_code'], $instance->getTaxSystemCode());
        }
    }

    /**
     * @dataProvider validDataProvider
     * @param array $options
     */
    public function testGetItems($options)
    {
        $instance = $this->getTestInstance($options);

        self::assertEquals(count($options['items']), count($instance->getItems()));

        foreach ($instance->getItems() as $index => $item) {
            self::assertTrue($item instanceof ReceiptResponseItemInterface);
            self::assertArrayHasKey($index, $options['items']);
            self::assertEquals($options['items'][$index]['description'], $item->getDescription());
            self::assertEquals($options['items'][$index]['amount']['value'], $item->getPrice()->getValue());
            self::assertEquals($options['items'][$index]['amount']['currency'], $item->getPrice()->getCurrency());
            self::assertEquals($options['items'][$index]['quantity'], $item->getQuantity());
            self::assertEquals($options['items'][$index]['vat_code'], $item->getVatCode());
        }
    }

    public function validDataProvider()
    {
        return array($this->generateReceipts($this->type));
    }

    private function generateReceipts($type)
    {
        $return = array();
        $count = Random::int(1, 10);

        for ($i=0; $i < $count; $i++) {
            $return[] = $this->generateReceipt($type);
        }

        return $return;
    }

    private function generateReceipt($type)
    {
        $receipt = array(
            'id' => Random::str(39),
            'type' => $type,
            'status' => Random::value(array('pending', 'succeeded', 'canceled')),
            'items' => $this->generateItems(),
            'settlements' => $this->generateSettlements(),
            'tax_system_code' => Random::int(1 ,6),
        );

        $receipt = $this->addSpecificProperties($receipt);

        return $receipt;
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
            'description' => Random::str(1, 128),
            'amount' => array(
                'value' => round(Random::float(1.00, 100.00), 2),
                'currency' => 'RUB',
            ),
            'quantity' => round(Random::float(0.001, 99.999), 3),
            'vat_code' => Random::int(1 ,6),
        );
    }
}
