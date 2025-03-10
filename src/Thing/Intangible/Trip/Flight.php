<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\Trip;

use Sohophp\SchemaOrg\Thing\Intangible\Trip;

/**
* An airline flight.
* @see schema:Flight
* @package Sohophp\SchemaOrg\Thing\Intangible\Trip
*/
class Flight extends Trip
{


    /**
        * The kind of aircraft (e.g., "Boeing 747").
        * @param array|string|mixed $value
    * @return $this
    */
    public function aircraft($value)
    {
        $this->setProperty('aircraft', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setAircraft($value)
    {
        $this->setProperty('aircraft', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAircraft()
    {
       return $this->getProperty('aircraft');
    }


    /**
        * The time when a passenger can check into the flight online.
        * @param array|string|mixed $value
    * @return $this
    */
    public function webCheckinTime($value)
    {
        $this->setProperty('webCheckinTime', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setWebCheckinTime($value)
    {
        $this->setProperty('webCheckinTime', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getWebCheckinTime()
    {
       return $this->getProperty('webCheckinTime');
    }


    /**
        * The distance of the flight.
        * @param array|string|mixed $value
    * @return $this
    */
    public function flightDistance($value)
    {
        $this->setProperty('flightDistance', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setFlightDistance($value)
    {
        $this->setProperty('flightDistance', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getFlightDistance()
    {
       return $this->getProperty('flightDistance');
    }


    /**
        * Description of the meals that will be provided or available for purchase.
        * @param array|string|mixed $value
    * @return $this
    */
    public function mealService($value)
    {
        $this->setProperty('mealService', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setMealService($value)
    {
        $this->setProperty('mealService', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getMealService()
    {
       return $this->getProperty('mealService');
    }


    /**
        * Identifier of the flight's departure terminal.
        * @param array|string|mixed $value
    * @return $this
    */
    public function departureTerminal($value)
    {
        $this->setProperty('departureTerminal', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setDepartureTerminal($value)
    {
        $this->setProperty('departureTerminal', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDepartureTerminal()
    {
       return $this->getProperty('departureTerminal');
    }


    /**
        * 'carrier' is an out-dated term indicating the 'provider' for parcel delivery
 * and flights.
        * @param array|string|mixed $value
    * @return $this
    */
    public function carrier($value)
    {
        $this->setProperty('carrier', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setCarrier($value)
    {
        $this->setProperty('carrier', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCarrier()
    {
       return $this->getProperty('carrier');
    }


    /**
        * The unique identifier for a flight including the airline IATA code. For
 * example, if describing United flight 110, where the IATA code for United is
 * 'UA', the flightNumber is 'UA110'.
        * @param array|string|mixed $value
    * @return $this
    */
    public function flightNumber($value)
    {
        $this->setProperty('flightNumber', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setFlightNumber($value)
    {
        $this->setProperty('flightNumber', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getFlightNumber()
    {
       return $this->getProperty('flightNumber');
    }


    /**
        * Identifier of the flight's departure gate.
        * @param array|string|mixed $value
    * @return $this
    */
    public function departureGate($value)
    {
        $this->setProperty('departureGate', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setDepartureGate($value)
    {
        $this->setProperty('departureGate', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDepartureGate()
    {
       return $this->getProperty('departureGate');
    }


    /**
        * The airport where the flight originates.
        * @param array|string|mixed $value
    * @return $this
    */
    public function departureAirport($value)
    {
        $this->setProperty('departureAirport', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setDepartureAirport($value)
    {
        $this->setProperty('departureAirport', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDepartureAirport()
    {
       return $this->getProperty('departureAirport');
    }


    /**
        * The type of boarding policy used by the airline (e.g. zone-based or
 * group-based).
        * @param array|string|mixed $value
    * @return $this
    */
    public function boardingPolicy($value)
    {
        $this->setProperty('boardingPolicy', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setBoardingPolicy($value)
    {
        $this->setProperty('boardingPolicy', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getBoardingPolicy()
    {
       return $this->getProperty('boardingPolicy');
    }


    /**
        * Identifier of the flight's arrival gate.
        * @param array|string|mixed $value
    * @return $this
    */
    public function arrivalGate($value)
    {
        $this->setProperty('arrivalGate', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setArrivalGate($value)
    {
        $this->setProperty('arrivalGate', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getArrivalGate()
    {
       return $this->getProperty('arrivalGate');
    }


    /**
        * Identifier of the flight's arrival terminal.
        * @param array|string|mixed $value
    * @return $this
    */
    public function arrivalTerminal($value)
    {
        $this->setProperty('arrivalTerminal', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setArrivalTerminal($value)
    {
        $this->setProperty('arrivalTerminal', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getArrivalTerminal()
    {
       return $this->getProperty('arrivalTerminal');
    }


    /**
        * The estimated time the flight will take.
        * @param array|string|mixed $value
    * @return $this
    */
    public function estimatedFlightDuration($value)
    {
        $this->setProperty('estimatedFlightDuration', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setEstimatedFlightDuration($value)
    {
        $this->setProperty('estimatedFlightDuration', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEstimatedFlightDuration()
    {
       return $this->getProperty('estimatedFlightDuration');
    }


    /**
        * An entity which offers (sells / leases / lends / loans) the services / goods.
 *  A seller may also be a provider.
        * @param array|string|mixed $value
    * @return $this
    */
    public function seller($value)
    {
        $this->setProperty('seller', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setSeller($value)
    {
        $this->setProperty('seller', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSeller()
    {
       return $this->getProperty('seller');
    }


    /**
        * The airport where the flight terminates.
        * @param array|string|mixed $value
    * @return $this
    */
    public function arrivalAirport($value)
    {
        $this->setProperty('arrivalAirport', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setArrivalAirport($value)
    {
        $this->setProperty('arrivalAirport', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getArrivalAirport()
    {
       return $this->getProperty('arrivalAirport');
    }


}
