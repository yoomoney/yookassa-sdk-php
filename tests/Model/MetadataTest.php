<?php

namespace Tests\YooKassa\Model;

use PHPUnit\Framework\TestCase;
use YooKassa\Model\Metadata;

class MetadataTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     * @param array $source
     */
    public function testToArray($source)
    {
        $instance = new Metadata();
        foreach ($source as $key => $value) {
            $instance->offsetSet($key, $value);
        }
        self::assertEquals($source, $instance->toArray());
    }

    /**
     * @dataProvider dataProvider
     * @param array $source
     */
    public function testCount($source)
    {
        $instance = new Metadata();
        $count = 0;
        self::assertEquals($count, $instance->count());
        foreach ($source as $key => $value) {
            $instance->offsetSet($key, $value);
            $count++;
            self::assertEquals($count, $instance->count());
        }
    }

    /**
     * @dataProvider dataProvider
     * @param array $source
     */
    public function testGetIterator($source)
    {
        $instance = new Metadata();
        foreach ($source as $key => $value) {
            $instance->offsetSet($key, $value);
        }

        $iterator = $instance->getIterator();
        $tmp = $source;
        for ($iterator->rewind(); $iterator->valid(); $iterator->next()) {
            self::assertArrayHasKey($iterator->key(), $source);
            self::assertEquals($source[$iterator->key()], $iterator->current());
            unset($tmp[$iterator->key()]);
        }
        self::assertEquals(0, count($tmp));

        $tmp = $source;
        foreach ($instance as $key => $value) {
            self::assertArrayHasKey($key, $source);
            self::assertEquals($source[$key], $value);
            unset($tmp[$key]);
        }
        self::assertEquals(0, count($tmp));
    }

    public function dataProvider()
    {
        return array(
            array(
                array('testKey' => 'testValue'),
            ),
            array(
                array(
                    'testKey1' => 'testValue1',
                    'testKey2' => 'testValue2',
                ),
            ),
            array(
                array(
                    'testKey1' => 'testValue1',
                    'testKey2' => 'testValue2',
                    'testKey3' => 'testValue3',
                ),
            ),
        );
    }
}