<?php


namespace Tests\YooKassa\Model;


use PHPUnit\Framework\TestCase;
use YooKassa\Model\Leg;

class LegTest extends TestCase
{
    /**
     * @dataProvider validDataProvider
     *
     * @param $data
     */
    public function testGettersSetters($data)
    {
        $leg = new Leg();
        $leg->setDepartureAirport($data["departure_airport"]);
        $leg->setDestinationAirport($data["destination_airport"]);
        $leg->setDepartureDate($data["departure_date"]);

        self::assertEquals($data["departure_airport"], $leg->getDepartureAirport());
        self::assertEquals($data["destination_airport"], $leg->getDestinationAirport());
        self::assertEquals($data["departure_date"], $leg->getDepartureDate());

    }

    /**
     * @dataProvider invalidDataProvider
     *
     * @param $data
     */
    public function testDepartureAirportValidate($data)
    {
        $leg = new Leg();

        $this->setExpectedException($data['exception']);

        $leg->setDepartureAirport($data['value']);
    }

    /**
     * @dataProvider invalidDataProvider
     *
     * @param $data
     */
    public function testDestinationAirportValidate($data)
    {
        $leg = new Leg();

        $this->setExpectedException($data['exception']);

        $leg->setDestinationAirport($data['value']);
    }

    /**
     * @dataProvider invalidDataProvider
     *
     * @param $data
     */
    public function testDepartureDateValidate($data)
    {
        $leg = new Leg();

        $this->setExpectedException($data['exception']);

        $leg->setDepartureDate($data['value']);
    }

    public function validDataProvider()
    {
        return array(
            array(
                array(
                    "departure_airport"   => "LED",
                    "destination_airport" => "AMS",
                    "departure_date"      => "2018-06-20",
                ),
            ),
            array(
                array(
                    "departure_airport"   => "UGR",
                    "destination_airport" => "IVA",
                    "departure_date"      => "2018-06-21",
                ),
            ),
        );
    }

    public function invalidDataProvider()
    {
        return array(
            array(
                array(
                    "exception" => 'YooKassa\Common\Exceptions\InvalidPropertyValueTypeException',
                    "value"     => array(),
                ),
            ),
            array(
                array(
                    "exception" => 'YooKassa\Common\Exceptions\InvalidPropertyValueException',
                    "value"     => 'stringThatGreaterThanNeededCharsLongAndActuallyNotValidAtAll123',
                ),
            ),
        );
    }
}