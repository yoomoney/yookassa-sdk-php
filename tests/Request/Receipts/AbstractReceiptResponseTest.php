<?php

namespace Tests\YooKassa\Request\Receipts;

use PHPUnit\Framework\TestCase;
use YooKassa\Helpers\ProductCode;
use YooKassa\Helpers\Random;
use YooKassa\Model\Airline;
use YooKassa\Model\Receipt\SettlementType;
use YooKassa\Model\ReceiptType;
use YooKassa\Request\Receipts\ReceiptResponseInterface;
use YooKassa\Request\Receipts\ReceiptResponseItem;
use YooKassa\Request\Receipts\ReceiptResponseItemInterface;

abstract class AbstractReceiptResponseTest extends TestCase
{
    protected $type;

    protected $valid = true;

    /**
     * @param $options
     * @return ReceiptResponseInterface
     */
    abstract protected function getTestInstance($options);

    /**
     * @param $options
     * @return array
     */
    abstract protected function addSpecificProperties($options, $i);

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
            self::assertNull($instance->getStatus());
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
            self::assertNull($instance->getTaxSystemCode());
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
        $this->valid = true;
        $receipts = array();
        for ($i=0; $i < 10; $i++) {
            $receipts[] = $this->generateReceipts($this->type, true);
        }
        return $receipts;
    }

    public function invalidDataProvider()
    {
        $this->valid = false;
        $receipts = array();
        for ($i=0; $i < 10; $i++) {
            $receipts[] = $this->generateReceipts($this->type, false);
        }
        return $receipts;
    }

    private function generateReceipts($type, $valid)
    {
        $this->valid = $valid;
        $return = array();
        $count = Random::int(1, 10);

        for ($i=0; $i < $count; $i++) {
            $return[] = $this->generateReceipt($type, $i);
        }

        return $return;
    }

    private function generateReceipt($type, $i)
    {
        $receipt = array(
            'id' => Random::str(39),
            'type' => $type,
            'status' => Random::value(array('pending', 'succeeded', 'canceled', null)),
            'fiscal_document_number' => Random::int(4),
            'fiscal_storage_number' => Random::int(16),
            'fiscal_attribute' => Random::int(10),
            'registered_at' => date(YOOKASSA_DATE, mt_rand(1111111111, time())),
            'fiscal_provider_id' => Random::str(36),
            'items' => $this->generateItems(),
            'settlements' => $this->generateSettlements(),
            'tax_system_code' => Random::int(1, 6),
            'on_behalf_of' => Random::int(6)
        );

        return $this->addSpecificProperties($receipt, $i);
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

    public function invalidAllDataProvider()
    {
        return array(
            array(array(new ProductCode())),
            array(array(new Airline())),
            array(SettlementType::PREPAYMENT),
            array(0),
            array('test'),
            array(10)
        );
    }

    public function invalidBoolDataProvider()
    {
        return array(
            array(true),
            array(false)
        );
    }

    public function invalidBoolNullDataProvider()
    {
        return array(
            array(true),
            array(false),
            array(null)
        );
    }

    public function invalidItemsSettlementsDataProvider()
    {
        return array(
            array(
                array(
                    'id' => Random::str(39),
                    'type' => Random::value(ReceiptType::getValidValues()),
                    'status' => null,
                    'items' => null,
                    'settlements' => null
                )
            ),
            array(
                array(
                    'id' => Random::str(39),
                    'type' => Random::value(ReceiptType::getValidValues()),
                    'status' => null,
                    'items' => 1,
                    'settlements' => 1
                )
            ),
            array(
                array(
                    'id' => Random::str(39),
                    'type' => Random::value(ReceiptType::getValidValues()),
                    'status' => null,
                    'items' => array(new Airline()),
                    'settlements' => array(new Airline())
                )
            ),
            array(null),
            array(new Airline())
        );
    }

    public function invalidFromArray()
    {
        return array(
            array(
                array(
                    'id' => Random::str(39),
                    'type' => Random::value(ReceiptType::getValidValues()),
                    'status' => null,
                    'items' => false
                )
            ),
            array(
                array(
                    'id' => Random::str(39),
                    'type' => Random::value(ReceiptType::getValidValues()),
                    'status' => null,
                    'items' => 1
                )
            ),
            array(
                array(
                    'id' => Random::str(39),
                    'type' => Random::value(ReceiptType::getValidValues()),
                    'status' => null,
                    'items' => array(new ReceiptResponseItem()),
                    'settlements' => 1
                )
            )
        );
    }
}
