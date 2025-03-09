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
        */
    protected $aircraft = null;

   /**
        * The time when a passenger can check into the flight online.
        */
    protected $webCheckinTime = null;

   /**
        * The distance of the flight.
        */
    protected $flightDistance = null;

   /**
        * Description of the meals that will be provided or available for purchase.
        */
    protected $mealService = null;

   /**
        * Identifier of the flight's departure terminal.
        */
    protected $departureTerminal = null;

   /**
        * 'carrier' is an out-dated term indicating the 'provider' for parcel delivery and flights.
        */
    protected $carrier = null;

   /**
        * The unique identifier for a flight including the airline IATA code. For example, if describing United flight 110, where the IATA code for United is 'UA', the flightNumber is 'UA110'.
        */
    protected $flightNumber = null;

   /**
        * Identifier of the flight's departure gate.
        */
    protected $departureGate = null;

   /**
        * The airport where the flight originates.
        */
    protected $departureAirport = null;

   /**
        * The type of boarding policy used by the airline (e.g. zone-based or group-based).
        */
    protected $boardingPolicy = null;

   /**
        * Identifier of the flight's arrival gate.
        */
    protected $arrivalGate = null;

   /**
        * Identifier of the flight's arrival terminal.
        */
    protected $arrivalTerminal = null;

   /**
        * The estimated time the flight will take.
        */
    protected $estimatedFlightDuration = null;

   /**
        * An entity which offers (sells / leases / lends / loans) the services / goods.  A seller may also be a provider.
        */
    protected $seller = null;

   /**
        * The airport where the flight terminates.
        */
    protected $arrivalAirport = null;


    /**
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
