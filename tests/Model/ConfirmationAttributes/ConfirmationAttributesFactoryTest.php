<?php

namespace Model\ConfirmationAttributes;

use PHPUnit\Framework\TestCase;
use YooKassa\Helpers\Random;
use YooKassa\Model\ConfirmationAttributes\AbstractConfirmationAttributes;
use YooKassa\Model\ConfirmationAttributes\ConfirmationAttributesFactory;
use YooKassa\Model\ConfirmationType;

class ConfirmationAttributesFactoryTest extends TestCase
{
    /**
     * @return ConfirmationAttributesFactory
     */
    protected function getTestInstance()
    {
        return new ConfirmationAttributesFactory();
    }

    /**
     * @dataProvider validTypeDataProvider
     * @param string $type
     */
    public function testFactory($type)
    {
        $instance = $this->getTestInstance();
        $confirmation = $instance->factory($type);
        self::assertNotNull($confirmation);
        self::assertTrue($confirmation instanceof AbstractConfirmationAttributes);
        self::assertEquals($type, $confirmation->getType());
    }

    /**
     * @dataProvider invalidTypeDataProvider
     * @expectedException \InvalidArgumentException
     * @param $type
     */
    public function testInvalidFactory($type)
    {
        $instance = $this->getTestInstance();
        $instance->factory($type);
    }

    /**
     * @dataProvider validArrayDataProvider
     * @param array $options
     */
    public function testFactoryFromArray($options)
    {
        $instance = $this->getTestInstance();
        $confirmation = $instance->factoryFromArray($options);
        self::assertNotNull($confirmation);
        self::assertTrue($confirmation instanceof AbstractConfirmationAttributes);

        foreach ($options as $property => $value) {
            self::assertEquals($confirmation->{$property}, $value);
        }

        $type = $options['type'];
        unset($options['type']);
        $confirmation = $instance->factoryFromArray($options, $type);
        self::assertNotNull($confirmation);
        self::assertTrue($confirmation instanceof AbstractConfirmationAttributes);

        self::assertEquals($type, $confirmation->getType());
        foreach ($options as $property => $value) {
            self::assertEquals($confirmation->{$property}, $value);
        }
    }

    /**
     * @dataProvider invalidDataArrayDataProvider
     * @expectedException \InvalidArgumentException
     * @param $options
     */
    public function testInvalidFactoryFromArray($options)
    {
        $instance = $this->getTestInstance();
        $instance->factoryFromArray($options);
    }

    public function validTypeDataProvider()
    {
        $result = array();
        foreach (ConfirmationType::getValidValues() as $value) {
            $result[] = array($value);
        }
        return $result;
    }

    public function invalidTypeDataProvider()
    {
        return array(
            array(''),
            array(null),
            array(0),
            array(1),
            array(-1),
            array('5'),
            array(array()),
            array(new \stdClass()),
            array(Random::str(10)),
        );
    }

    public function validArrayDataProvider()
    {
        $result = array(
            array(
                array(
                    'type' => ConfirmationType::REDIRECT,
                    'enforce' => false,
                    'returnUrl' => Random::str(10),
                ),
            ),
            array(
                array(
                    'type' => ConfirmationType::REDIRECT,
                    'enforce' => true,
                ),
            ),
            array(
                array(
                    'type' => ConfirmationType::REDIRECT,
                    'returnUrl' => Random::str(10),
                ),
            ),
            array(
                array(
                    'type' => ConfirmationType::REDIRECT,
                ),
            ),
        );
        foreach (ConfirmationType::getValidValues() as $value) {
            $result[] = array(array('type' => $value));
        }
        return $result;
    }

    public function invalidDataArrayDataProvider()
    {
        return array(
            array(array()),
            array(array('type' => 'test')),
        );
    }
}