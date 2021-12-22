<?php
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

*
*/
class Flight extends Trip
{

    /**
    * The airport where the flight terminates.
    * @param Airport|array $value
    * @return $this
    */
    public function arrivalAirport(?Airport $value)
    {
        $this->setProperty('arrivalAirport', $value);
        return $this;
    }
   /**
    * @param Airport|array $value
    * @return $this
    */
    public function setArrivalAirport(?Airport $value)
    {
        $this->setProperty('arrivalAirport', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getArrivalAirport()
    {
       return $this->getProperty('arrivalAirport');
    }

    /**
    * The airport where the flight originates.
    * @param Airport|array $value
    * @return $this
    */
    public function departureAirport(?Airport $value)
    {
        $this->setProperty('departureAirport', $value);
        return $this;
    }
   /**
    * @param Airport|array $value
    * @return $this
    */
    public function setDepartureAirport(?Airport $value)
    {
        $this->setProperty('departureAirport', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getDepartureAirport()
    {
       return $this->getProperty('departureAirport');
    }

    /**
    * The time when a passenger can check into the flight online.
    * @param |array $value
    * @return $this
    */
    public function webCheckinTime($value)
    {
        $this->setProperty('webCheckinTime', $value);
        return $this;
    }
   /**
    * @param |array $value
    * @return $this
    */
    public function setWebCheckinTime($value)
    {
        $this->setProperty('webCheckinTime', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getWebCheckinTime()
    {
       return $this->getProperty('webCheckinTime');
    }

    /**
    * Identifier of the flight's arrival gate.
    * @param string|array $value
    * @return $this
    */
    public function arrivalGate(?string $value)
    {
        $this->setProperty('arrivalGate', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setArrivalGate(?string $value)
    {
        $this->setProperty('arrivalGate', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getArrivalGate()
    {
       return $this->getProperty('arrivalGate');
    }

    /**
    * The unique identifier for a flight including the airline IATA code. For example, if describing United flight 110, where the IATA code for United is 'UA', the flightNumber is 'UA110'.
    * @param string|array $value
    * @return $this
    */
    public function flightNumber(?string $value)
    {
        $this->setProperty('flightNumber', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setFlightNumber(?string $value)
    {
        $this->setProperty('flightNumber', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getFlightNumber()
    {
       return $this->getProperty('flightNumber');
    }

    /**
    * 'carrier' is an out-dated term indicating the 'provider' for parcel delivery and flights.
    * @param Organization|array $value
    * @return $this
    */
    public function carrier(?Organization $value)
    {
        $this->setProperty('carrier', $value);
        return $this;
    }
   /**
    * @param Organization|array $value
    * @return $this
    */
    public function setCarrier(?Organization $value)
    {
        $this->setProperty('carrier', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getCarrier()
    {
       return $this->getProperty('carrier');
    }

    /**
    * The type of boarding policy used by the airline (e.g. zone-based or group-based).
    * @param BoardingPolicyType|array $value
    * @return $this
    */
    public function boardingPolicy(?BoardingPolicyType $value)
    {
        $this->setProperty('boardingPolicy', $value);
        return $this;
    }
   /**
    * @param BoardingPolicyType|array $value
    * @return $this
    */
    public function setBoardingPolicy(?BoardingPolicyType $value)
    {
        $this->setProperty('boardingPolicy', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getBoardingPolicy()
    {
       return $this->getProperty('boardingPolicy');
    }

    /**
    * The kind of aircraft (e.g., "Boeing 747").
    * @param Vehicle|string|array $value
    * @return $this
    */
    public function aircraft($value)
    {
        $this->setProperty('aircraft', $value);
        return $this;
    }
   /**
    * @param Vehicle|string|array $value
    * @return $this
    */
    public function setAircraft($value)
    {
        $this->setProperty('aircraft', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAircraft()
    {
       return $this->getProperty('aircraft');
    }

    /**
    * An entity which offers (sells / leases / lends / loans) the services / goods.  A seller may also be a provider.
    * @param Person|Organization|array $value
    * @return $this
    */
    public function seller($value)
    {
        $this->setProperty('seller', $value);
        return $this;
    }
   /**
    * @param Person|Organization|array $value
    * @return $this
    */
    public function setSeller($value)
    {
        $this->setProperty('seller', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getSeller()
    {
       return $this->getProperty('seller');
    }

    /**
    * Description of the meals that will be provided or available for purchase.
    * @param string|array $value
    * @return $this
    */
    public function mealService(?string $value)
    {
        $this->setProperty('mealService', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setMealService(?string $value)
    {
        $this->setProperty('mealService', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getMealService()
    {
       return $this->getProperty('mealService');
    }

    /**
    * Identifier of the flight's departure gate.
    * @param string|array $value
    * @return $this
    */
    public function departureGate(?string $value)
    {
        $this->setProperty('departureGate', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setDepartureGate(?string $value)
    {
        $this->setProperty('departureGate', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getDepartureGate()
    {
       return $this->getProperty('departureGate');
    }

    /**
    * Identifier of the flight's departure terminal.
    * @param string|array $value
    * @return $this
    */
    public function departureTerminal(?string $value)
    {
        $this->setProperty('departureTerminal', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setDepartureTerminal(?string $value)
    {
        $this->setProperty('departureTerminal', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getDepartureTerminal()
    {
       return $this->getProperty('departureTerminal');
    }

    /**
    * The estimated time the flight will take.
    * @param Duration|string|array $value
    * @return $this
    */
    public function estimatedFlightDuration($value)
    {
        $this->setProperty('estimatedFlightDuration', $value);
        return $this;
    }
   /**
    * @param Duration|string|array $value
    * @return $this
    */
    public function setEstimatedFlightDuration($value)
    {
        $this->setProperty('estimatedFlightDuration', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getEstimatedFlightDuration()
    {
       return $this->getProperty('estimatedFlightDuration');
    }

    /**
    * The distance of the flight.
    * @param Distance|string|array $value
    * @return $this
    */
    public function flightDistance($value)
    {
        $this->setProperty('flightDistance', $value);
        return $this;
    }
   /**
    * @param Distance|string|array $value
    * @return $this
    */
    public function setFlightDistance($value)
    {
        $this->setProperty('flightDistance', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getFlightDistance()
    {
       return $this->getProperty('flightDistance');
    }

    /**
    * Identifier of the flight's arrival terminal.
    * @param string|array $value
    * @return $this
    */
    public function arrivalTerminal(?string $value)
    {
        $this->setProperty('arrivalTerminal', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setArrivalTerminal(?string $value)
    {
        $this->setProperty('arrivalTerminal', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getArrivalTerminal()
    {
       return $this->getProperty('arrivalTerminal');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\Trip\\Flight','Thing\\Flight');

