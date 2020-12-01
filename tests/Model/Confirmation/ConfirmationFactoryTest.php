<?php

namespace Model\Confirmation;

use PHPUnit\Framework\TestCase;
use YooKassa\Helpers\Random;
use YooKassa\Model\Confirmation\AbstractConfirmation;
use YooKassa\Model\Confirmation\ConfirmationFactory;
use YooKassa\Model\ConfirmationType;

class ConfirmationFactoryTest extends TestCase
{
    /**
     * @return ConfirmationFactory
     */
    protected function getTestInstance()
    {
        return new ConfirmationFactory();
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
        self::assertTrue($confirmation instanceof AbstractConfirmation);
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
        self::assertTrue($confirmation instanceof AbstractConfirmation);

        foreach ($options as $property => $value) {
            self::assertEquals($confirmation->{$property}, $value);
        }

        $type = $options['type'];
        unset($options['type']);
        $confirmation = $instance->factoryFromArray($options, $type);
        self::assertNotNull($confirmation);
        self::assertTrue($confirmation instanceof AbstractConfirmation);

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
                    'confirmationUrl' => Random::str(10),
                ),
            ),
            array(
                array(
                    'type' => ConfirmationType::REDIRECT,
                    'enforce' => true,
                    'returnUrl' => Random::str(10),
                ),
            ),
            array(
                array(
                    'type' => ConfirmationType::REDIRECT,
                    'returnUrl' => Random::str(10),
                    'confirmationUrl' => Random::str(10),
                ),
            ),
            array(
                array(
                    'type' => ConfirmationType::REDIRECT,
                    'confirmationUrl' => Random::str(10),
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
                    'enforce' => true,
                ),
            ),
            array(
                array(
                    'type' => ConfirmationType::REDIRECT,
                ),
            ),
            array(
                array(
                    'type' => ConfirmationType::QR,
                    'confirmation_data' => Random::str(30),
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