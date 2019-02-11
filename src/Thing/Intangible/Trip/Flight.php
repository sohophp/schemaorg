<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Intangible\Trip;

use Sohophp\SchemaOrg\Thing\Intangible\Trip;
use Sohophp\SchemaOrg\Thing\Place\CivicStructure\Airport;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\BoardingPolicyType;
use Sohophp\SchemaOrg\Thing\Product\Vehicle;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Intangible\Quantity\Duration;
use Sohophp\SchemaOrg\Thing\Intangible\Quantity\Distance;

/**
* An airline flight.
* @see http://schema.org/Flight
* @package Sohophp\SchemaOrg\Thing\Intangible\Trip
*/
class Flight extends Trip
{

    /**
    * The airport where the flight terminates.
    * @param Airport $value
    * @return $this
    */
    public function arrivalAirport(?Airport $value)
    {
        $this->setProperty('arrivalAirport', $value);
        return $this;
    }

    /**
    * Identifier of the flight's arrival gate.
    * @param string $value
    * @return $this
    */
    public function arrivalGate(?string $value)
    {
        $this->setProperty('arrivalGate', $value);
        return $this;
    }

    /**
    * The unique identifier for a flight including the airline IATA code. For example, if describing United flight 110, where the IATA code for United is 'UA', the flightNumber is 'UA110'.
    * @param string $value
    * @return $this
    */
    public function flightNumber(?string $value)
    {
        $this->setProperty('flightNumber', $value);
        return $this;
    }

    /**
    * 'carrier' is an out-dated term indicating the 'provider' for parcel delivery and flights.
    * @param Organization $value
    * @return $this
    */
    public function carrier(?Organization $value)
    {
        $this->setProperty('carrier', $value);
        return $this;
    }

    /**
    * The type of boarding policy used by the airline (e.g. zone-based or group-based).
    * @param BoardingPolicyType $value
    * @return $this
    */
    public function boardingPolicy(?BoardingPolicyType $value)
    {
        $this->setProperty('boardingPolicy', $value);
        return $this;
    }

    /**
    * The kind of aircraft (e.g., "Boeing 747").
    * @param Vehicle|string $value
    * @return $this
    */
    public function aircraft($value)
    {
        $this->setProperty('aircraft', $value);
        return $this;
    }

    /**
    * An entity which offers (sells / leases / lends / loans) the services / goods.  A seller may also be a provider.
    * @param Organization|Person $value
    * @return $this
    */
    public function seller($value)
    {
        $this->setProperty('seller', $value);
        return $this;
    }

    /**
    * The time when a passenger can check into the flight online.
    * @param  $value
    * @return $this
    */
    public function webCheckinTime($value)
    {
        $this->setProperty('webCheckinTime', $value);
        return $this;
    }

    /**
    * Description of the meals that will be provided or available for purchase.
    * @param string $value
    * @return $this
    */
    public function mealService(?string $value)
    {
        $this->setProperty('mealService', $value);
        return $this;
    }

    /**
    * Identifier of the flight's departure gate.
    * @param string $value
    * @return $this
    */
    public function departureGate(?string $value)
    {
        $this->setProperty('departureGate', $value);
        return $this;
    }

    /**
    * Identifier of the flight's departure terminal.
    * @param string $value
    * @return $this
    */
    public function departureTerminal(?string $value)
    {
        $this->setProperty('departureTerminal', $value);
        return $this;
    }

    /**
    * The estimated time the flight will take.
    * @param Duration|string $value
    * @return $this
    */
    public function estimatedFlightDuration($value)
    {
        $this->setProperty('estimatedFlightDuration', $value);
        return $this;
    }

    /**
    * The distance of the flight.
    * @param Distance|string $value
    * @return $this
    */
    public function flightDistance($value)
    {
        $this->setProperty('flightDistance', $value);
        return $this;
    }

    /**
    * Identifier of the flight's arrival terminal.
    * @param string $value
    * @return $this
    */
    public function arrivalTerminal(?string $value)
    {
        $this->setProperty('arrivalTerminal', $value);
        return $this;
    }

    /**
    * The airport where the flight originates.
    * @param Airport $value
    * @return $this
    */
    public function departureAirport(?Airport $value)
    {
        $this->setProperty('departureAirport', $value);
        return $this;
    }


}

