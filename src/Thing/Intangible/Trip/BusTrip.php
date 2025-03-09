<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\Trip;

use Sohophp\SchemaOrg\Thing\Intangible\Trip;

/**
* A trip on a commercial bus line.
* @see schema:BusTrip
* @package Sohophp\SchemaOrg\Thing\Intangible\Trip
*/
class BusTrip extends Trip
{
   /**
        * The unique identifier for the bus.
        */
    protected $busNumber = null;

   /**
        * The stop or station from which the bus departs.
        */
    protected $departureBusStop = null;

   /**
        * The stop or station from which the bus arrives.
        */
    protected $arrivalBusStop = null;

   /**
        * The name of the bus (e.g. Bolt Express).
        */
    protected $busName = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setBusNumber($value)
    {
        $this->setProperty('busNumber', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getBusNumber()
    {
       return $this->getProperty('busNumber');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setDepartureBusStop($value)
    {
        $this->setProperty('departureBusStop', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDepartureBusStop()
    {
       return $this->getProperty('departureBusStop');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setArrivalBusStop($value)
    {
        $this->setProperty('arrivalBusStop', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getArrivalBusStop()
    {
       return $this->getProperty('arrivalBusStop');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setBusName($value)
    {
        $this->setProperty('busName', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getBusName()
    {
       return $this->getProperty('busName');
    }


}
