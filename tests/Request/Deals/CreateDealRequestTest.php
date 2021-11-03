<?php

namespace Tests\YooKassa\Request\Deals;

use PHPUnit\Framework\TestCase;
use YooKassa\Helpers\Random;
use YooKassa\Model\Deal\DealType;
use YooKassa\Model\Deal\FeeMoment;
use YooKassa\Model\Metadata;
use YooKassa\Request\Deals\CreateDealRequest;
use YooKassa\Request\Deals\CreateDealRequestBuilder;

class CreateDealRequestTest extends TestCase
{

    /**
     * @dataProvider validDataProvider
     * @param $options
     */
    public function testMetadata($options)
    {
        $instance = new CreateDealRequest();

        self::assertFalse($instance->hasMetadata());
        self::assertNull($instance->getMetadata());
        self::assertNull($instance->metadata);

        $expected = $options['metadata'];
        if ($expected instanceof Metadata) {
            $expected = $expected->toArray();
        }

        $instance->setMetadata($options['metadata']);
        if (empty($options['metadata'])) {
            self::assertFalse($instance->hasMetadata());
            self::assertNull($instance->getMetadata());
            self::assertNull($instance->metadata);
        } else {
            self::assertTrue($instance->hasMetadata());
            self::assertSame($expected, $instance->getMetadata()->toArray());
            self::assertSame($expected, $instance->metadata->toArray());
        }

        $instance->setMetadata(null);
        self::assertFalse($instance->hasMetadata());
        self::assertNull($instance->getMetadata());
        self::assertNull($instance->metadata);

        $instance->metadata = $options['metadata'];
        if (empty($options['metadata'])) {
            self::assertFalse($instance->hasMetadata());
            self::assertNull($instance->getMetadata());
            self::assertNull($instance->metadata);
        } else {
            self::assertTrue($instance->hasMetadata());
            self::assertSame($expected, $instance->getMetadata()->toArray());
            self::assertSame($expected, $instance->metadata->toArray());
        }
    }

    /**
     * @dataProvider validDataProvider
     * @param $options
     */
    public function testType($options)
    {
        $instance = new CreateDealRequest();

        self::assertFalse($instance->hasType());
        self::assertNull($instance->getType());
        self::assertNull($instance->type);

        $instance->setType($options['type']);

        if (empty($options['type'])) {
            self::assertFalse($instance->hasType());
            self::assertNull($instance->getType());
            self::assertNull($instance->type);
        } else {
            self::assertTrue($instance->hasType());
            self::assertSame($options['type'], $instance->getType());
            self::assertSame($options['type'], $instance->type);
        }

        $instance->type = $options['type'];
        if (empty($options['type'])) {
            self::assertFalse($instance->hasType());
            self::assertNull($instance->getType());
            self::assertNull($instance->type);
        } else {
            self::assertTrue($instance->hasType());
            self::assertSame($options['type'], $instance->getType());
            self::assertSame($options['type'], $instance->type);
        }
    }

    /**
     * @dataProvider validDataProvider
     * @param $options
     */
    public function testFeeMoment($options)
    {
        $instance = new CreateDealRequest();

        self::assertFalse($instance->hasFeeMoment());
        self::assertNull($instance->getFeeMoment());
        self::assertNull($instance->fee_moment);
        self::assertNull($instance->feeMoment);

        $instance->setFeeMoment($options['fee_moment']);

        if (empty($options['fee_moment'])) {
            self::assertFalse($instance->hasFeeMoment());
            self::assertNull($instance->getFeeMoment());
            self::assertNull($instance->fee_moment);
            self::assertNull($instance->feeMoment);
        } else {
            self::assertTrue($instance->hasFeeMoment());
            self::assertSame($options['fee_moment'], $instance->getFeeMoment());
            self::assertSame($options['fee_moment'], $instance->fee_moment);
            self::assertSame($options['fee_moment'], $instance->feeMoment);
        }

        $instance->fee_moment = $options['fee_moment'];
        if (empty($options['fee_moment'])) {
            self::assertFalse($instance->hasFeeMoment());
            self::assertNull($instance->getFeeMoment());
            self::assertNull($instance->fee_moment);
            self::assertNull($instance->feeMoment);
        } else {
            self::assertTrue($instance->hasFeeMoment());
            self::assertSame($options['fee_moment'], $instance->getFeeMoment());
            self::assertSame($options['fee_moment'], $instance->fee_moment);
            self::assertSame($options['fee_moment'], $instance->feeMoment);
        }
    }

    public function testValidate()
    {
        $instance = new CreateDealRequest();

        self::assertFalse($instance->validate());

        $instance->setType(Random::value(DealType::getValidValues()));
        self::assertFalse($instance->validate());

        $instance->setFeeMoment(Random::value(FeeMoment::getValidValues()));
        self::assertTrue($instance->validate());
    }

    public function testBuilder()
    {
        $builder = CreateDealRequest::builder();
        self::assertTrue($builder instanceof CreateDealRequestBuilder);
    }

    /**
     * @dataProvider invalidFeeMomentDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetInvalidFeeMoment($value)
    {
        $instance = new CreateDealRequest();
        $instance->setFeeMoment($value);
    }

    /**
     * @dataProvider invalidMetadataDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetInvalidMetadata($value)
    {
        $instance = new CreateDealRequest();
        $instance->setMetadata($value);
    }

    /**
     * @dataProvider invalidMetadataDataProvider
     * @expectedException \InvalidArgumentException
     * @param $value
     */
    public function testSetInvalidType($value)
    {
        $instance = new CreateDealRequest();
        $instance->setType($value);
    }

    public function validDataProvider()
    {
        $result = array();
        $metadata = new Metadata();
        $metadata->test = 'test';
        for ($i = 0; $i < 10; $i++) {
            $request = array(
                'type' => Random::value(DealType::getValidValues()),
                'fee_moment' => Random::value(FeeMoment::getValidValues()),
                'description' => Random::str(1, 128),
                'metadata' => $i == 0 ? $metadata : array('test' => 'test'),
            );
            $result[] = array($request);
        }
        return $result;
    }

    public function invalidFeeMomentDataProvider()
    {
        return array(
            array(array()),
            array(false),
            array(true),
            array(1),
            array(Random::str(10)),
            array(new \stdClass()),
        );
    }

    public function invalidMetadataDataProvider()
    {
        return array(
            array(false),
            array(true),
            array(1),
            array(Random::str(10)),
        );
    }

}