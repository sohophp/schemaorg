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
    * @param Airport|array|string $value
    * @return $this
    * @deprecated use setArrivalAirport
    */
    public function arrivalAirport($value)
    {
        $this->setProperty('arrivalAirport', $value);
        return $this;
    }
   /**
    * @param Airport|array|string $value
    * @return $this
    */
    public function setArrivalAirport($value)
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
    * @param Airport|array|string $value
    * @return $this
    * @deprecated use setDepartureAirport
    */
    public function departureAirport($value)
    {
        $this->setProperty('departureAirport', $value);
        return $this;
    }
   /**
    * @param Airport|array|string $value
    * @return $this
    */
    public function setDepartureAirport($value)
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
    * @param array|string $value
    * @return $this
    * @deprecated use setWebCheckinTime
    */
    public function webCheckinTime($value)
    {
        $this->setProperty('webCheckinTime', $value);
        return $this;
    }
   /**
    * @param array|string $value
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
    * @deprecated use setArrivalGate
    */
    public function arrivalGate($value)
    {
        $this->setProperty('arrivalGate', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setArrivalGate($value)
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
    * @deprecated use setFlightNumber
    */
    public function flightNumber($value)
    {
        $this->setProperty('flightNumber', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setFlightNumber($value)
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
    * @param Organization|array|string $value
    * @return $this
    * @deprecated use setCarrier
    */
    public function carrier($value)
    {
        $this->setProperty('carrier', $value);
        return $this;
    }
   /**
    * @param Organization|array|string $value
    * @return $this
    */
    public function setCarrier($value)
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
    * @param BoardingPolicyType|array|string $value
    * @return $this
    * @deprecated use setBoardingPolicy
    */
    public function boardingPolicy($value)
    {
        $this->setProperty('boardingPolicy', $value);
        return $this;
    }
   /**
    * @param BoardingPolicyType|array|string $value
    * @return $this
    */
    public function setBoardingPolicy($value)
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
    * @deprecated use setAircraft
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
    * @param Person|Organization|array|string $value
    * @return $this
    * @deprecated use setSeller
    */
    public function seller($value)
    {
        $this->setProperty('seller', $value);
        return $this;
    }
   /**
    * @param Person|Organization|array|string $value
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
    * @deprecated use setMealService
    */
    public function mealService($value)
    {
        $this->setProperty('mealService', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setMealService($value)
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
    * @deprecated use setDepartureGate
    */
    public function departureGate($value)
    {
        $this->setProperty('departureGate', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setDepartureGate($value)
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
    * @deprecated use setDepartureTerminal
    */
    public function departureTerminal($value)
    {
        $this->setProperty('departureTerminal', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setDepartureTerminal($value)
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
    * @deprecated use setEstimatedFlightDuration
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
    * @deprecated use setFlightDistance
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
    * @deprecated use setArrivalTerminal
    */
    public function arrivalTerminal($value)
    {
        $this->setProperty('arrivalTerminal', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setArrivalTerminal($value)
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
