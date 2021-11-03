<?php

namespace Tests\YooKassa\Request\Deals;

use Exception;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use YooKassa\Helpers\Random;
use YooKassa\Model\Deal\DealType;
use YooKassa\Model\Deal\FeeMoment;
use YooKassa\Model\SafeDeal;
use YooKassa\Request\Deals\CreateDealRequestBuilder;

class CreateDealRequestBuilderTest extends TestCase
{
    /**
     * @param null $testingProperty
     * @param null $paymentType
     * @return array
     * @throws Exception
     */
    protected function getRequiredData($testingProperty = null, $paymentType = null)
    {
        $result = array();

        if ($testingProperty !== 'type') {
            $result['type'] = Random::value(DealType::getValidValues());
        }

        if ($testingProperty !== 'fee_moment') {
            $result['fee_moment'] = Random::value(FeeMoment::getValidValues());
        }

        return $result;
    }

    /**
     * @dataProvider validDataProvider
     *
     * @param $options
     * @throws Exception
     */
    public function testSetType($options)
    {
        $builder = new CreateDealRequestBuilder();

        $builder->setType($options['type']);
        $instance = $builder->build($this->getRequiredData('type'));

        if ($options['type'] === null || $options['type'] === '') {
            self::assertNull($instance->getType());
        } else {
            self::assertNotNull($instance->getType());
            self::assertEquals($options['type'], $instance->getType());
        }
    }

    /**
     * @dataProvider invalidDataProvider
     * @expectedException InvalidArgumentException
     *
     * @param $options
     */
    public function testSetInvalidTypeType($options)
    {
        $builder = new CreateDealRequestBuilder();
        $builder->setType($options);
    }

    /**
     * @dataProvider validDataProvider
     *
     * @param $options
     * @throws Exception
     */
    public function testSetFeeMoment($options)
    {
        $builder = new CreateDealRequestBuilder();

        $builder->setFeeMoment($options['fee_moment']);
        $instance = $builder->build($this->getRequiredData('fee_moment'));

        if ($options['fee_moment'] === null || $options['fee_moment'] === '') {
            self::assertNull($instance->getFeeMoment());
        } else {
            self::assertNotNull($instance->getFeeMoment());
            self::assertEquals($options['fee_moment'], $instance->getFeeMoment());
        }
    }

    /**
     * @dataProvider invalidDataProvider
     * @expectedException InvalidArgumentException
     *
     * @param $options
     */
    public function testSetInvalidTypeFeeMoment($options)
    {
        $builder = new CreateDealRequestBuilder();
        $builder->setFeeMoment($options);
    }

    /**
     * @dataProvider validDataProvider
     *
     * @param $options
     * @throws Exception
     */
    public function testSetMetadata($options)
    {
        $builder = new CreateDealRequestBuilder();

        $instance = $builder->build($this->getRequiredData());
        self::assertNull($instance->getMetadata());

        $builder->setMetadata($options['metadata']);
        $instance = $builder->build($this->getRequiredData());

        if (empty($options['metadata'])) {
            self::assertNull($instance->getMetadata());
        } else {
            self::assertEquals($options['metadata'], $instance->getMetadata()->toArray());
        }
    }

    /**
     * @dataProvider invalidDataProvider
     * @expectedException InvalidArgumentException
     *
     * @param $options
     */
    public function testSetInvalidTypeMetadata($options)
    {
        $builder = new CreateDealRequestBuilder();
        $builder->setMetadata($options);
    }

    /**
     * @dataProvider validDataProvider
     *
     * @param $options
     * @throws Exception
     */
    public function testSetDescription($options)
    {
        $builder = new CreateDealRequestBuilder();

        $builder->setDescription($options['description']);
        $instance = $builder->build($this->getRequiredData());

        if (empty($options['description'])) {
            self::assertNull($instance->getDescription());
        } else {
            self::assertEquals($options['description'], $instance->getDescription());
        }
    }

    /**
     * @dataProvider invalidDataProvider
     * @expectedException InvalidArgumentException
     *
     * @param $options
     */
    public function testSetInvalidTypeDescription($options)
    {
        $builder = new CreateDealRequestBuilder();
        $builder->setDescription($options);
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testSetInvalidLengthDescription()
    {
        $builder     = new CreateDealRequestBuilder();
        $description = Random::str(SafeDeal::MAX_LENGTH_DESCRIPTION + 1);
        $builder->setDescription($description);
    }

    /**
     * @return array
     * @throws Exception
     */
    public function validDataProvider()
    {
        $result = array(
            array(
                array(
                    'type' => Random::value(DealType::getValidValues()),
                    'fee_moment' => Random::value(FeeMoment::getValidValues()),
                    'description' => null,
                    'metadata' => null,
                ),
            ),
            array(
                array(
                    'type' => Random::value(DealType::getValidValues()),
                    'fee_moment' => Random::value(FeeMoment::getValidValues()),
                    'description' => '',
                    'metadata' => array(),
                ),
            ),
        );
        for ($i = 0; $i < 10; $i++) {
            $request = array(
                'type' => Random::value(DealType::getValidValues()),
                'fee_moment' => Random::value(FeeMoment::getValidValues()),
                'description' => Random::str(1, 128),
                'metadata' => array(Random::str(1, 30) => Random::str(1, 128)),
            );
            $result[] = array($request);
        }

        return $result;
    }

    public function invalidDataProvider()
    {
        return array(
            array(false),
            array(true),
            array(new \stdClass()),
            array(new SafeDeal()),
        );
    }

}