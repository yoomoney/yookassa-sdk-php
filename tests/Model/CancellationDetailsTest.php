<?php

namespace Tests\YooKassa\Model;

use PHPUnit\Framework\TestCase;
use YooKassa\Model\CancellationDetails;
use YooKassa\Model\CancellationDetailsPartyCode;
use YooKassa\Model\CancellationDetailsReasonCode;

class CancellationDetailsTest extends TestCase
{
    /**
     * @param null $party
     * @param null $reason
     * @return CancellationDetails
     */
    protected static function getInstance($party = null, $reason = null)
    {
        return new CancellationDetails($party, $reason);
    }

    /**
     * @dataProvider validDataProvider
     *
     * @param $party
     * @param $reason
     */
    public function testConstructor($party = null, $reason = null)
    {
        $instance = self::getInstance($party, $reason);

        self::assertEquals($party, $instance->getParty());
        self::assertEquals($reason, $instance->getReason());
    }

    /**
     * @dataProvider validDataProvider
     *
     * @param $party
     * @param $reason
     */
    public function testGetSetParty($party = null, $reason = null)
    {
        $instance = self::getInstance($party, $reason);
        self::assertEquals($party, $instance->getParty());

        $instance = self::getInstance();
        $instance->setParty($party);
        self::assertEquals($party, $instance->getParty());
        self::assertEquals($party, $instance->party);
    }

    /**
     * @dataProvider validDataProvider
     *
     * @param null $party
     * @param null $reason
     */
    public function testGetSetReason($party = null, $reason = null)
    {
        $instance = self::getInstance($party, $reason);
        self::assertEquals($reason, $instance->getReason());

        $instance = self::getInstance();
        $instance->setReason($reason);
        self::assertEquals($reason, $instance->getReason());
        self::assertEquals($reason, $instance->reason);
    }

    /**
     * @dataProvider invalidValueDataProvider
     * @param mixed $value
     * @param string $exceptionClassName
     */
    public function testSetInvalidParty($value, $exceptionClassName)
    {
        $instance = self::getInstance();
        try {
            $instance->setParty($value);
        } catch (\Exception $e) {
            self::assertInstanceOf($exceptionClassName, $e);
        }
    }

    /**
     * @dataProvider invalidValueDataProvider
     * @param mixed $value
     * @param string $exceptionClassName
     */
    public function testSetterInvalidReason($value, $exceptionClassName)
    {
        $instance = self::getInstance();
        try {
            $instance->reason = $value;
        } catch (\Exception $e) {
            self::assertInstanceOf($exceptionClassName, $e);
        }
    }

    /**
     * @return array
     */
    public function validDataProvider()
    {
        $result                          = array();
        $cancellationDetailsParties      = CancellationDetailsPartyCode::getValidValues();
        $countCancellationDetailsParties = count($cancellationDetailsParties);
        $cancellationDetailsReasons      = CancellationDetailsReasonCode::getValidValues();
        $countCancellationDetailsReasons = count($cancellationDetailsReasons);
        for ($i = 0; $i < 20; $i++) {
            $result[] = array(
                'party'  => $cancellationDetailsParties[$i % $countCancellationDetailsParties],
                'reason' => $cancellationDetailsReasons[$i % $countCancellationDetailsReasons]
            );
        }
        return $result;

    }

    public function invalidValueDataProvider()
    {
        $exceptionNamespace = 'YooKassa\\Common\\Exceptions\\';
        return array(
            array(null, $exceptionNamespace.'EmptyPropertyValueException'),
            array('', $exceptionNamespace.'EmptyPropertyValueException'),
            array(array(), $exceptionNamespace.'InvalidPropertyValueTypeException'),
            array(fopen(__FILE__, 'r'), $exceptionNamespace.'InvalidPropertyValueTypeException'),
            array(true, $exceptionNamespace.'InvalidPropertyValueTypeException'),
            array(false, $exceptionNamespace.'InvalidPropertyValueTypeException'),
        );
    }

    /**
     * @dataProvider validDataProvider
     *
     * @param null $party
     * @param null $reason
     */
    public function testJsonSerialize($party = null, $reason = null)
    {
        $instance = new CancellationDetails($party, $reason);
        $expected = array(
            'party'  => $party,
            'reason' => $reason,
        );
        self::assertEquals($expected, $instance->jsonSerialize());
    }
}
