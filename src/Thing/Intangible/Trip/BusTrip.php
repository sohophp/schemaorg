<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Intangible\Trip;

use Sohophp\SchemaOrg\Thing\Intangible\Trip;
use Sohophp\SchemaOrg\Thing\Place\CivicStructure\BusStation;
use Sohophp\SchemaOrg\Thing\Place\CivicStructure\BusStop;

/**
* A trip on a commercial bus line.
* @see http://schema.org/BusTrip
* @package Sohophp\SchemaOrg\Thing\Intangible\Trip

*
*/
class BusTrip extends Trip
{

    /**
    * The stop or station from which the bus departs.
    * @param BusStation|BusStop|array $value
    * @return $this
    */
    public function departureBusStop($value)
    {
        $this->setProperty('departureBusStop', $value);
        return $this;
    }
   /**
    * @param BusStation|BusStop|array $value
    * @return $this
    */
    public function setDepartureBusStop($value)
    {
        $this->setProperty('departureBusStop', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getDepartureBusStop()
    {
       return $this->getProperty('departureBusStop');
    }

    /**
    * The stop or station from which the bus arrives.
    * @param BusStop|BusStation|array $value
    * @return $this
    */
    public function arrivalBusStop($value)
    {
        $this->setProperty('arrivalBusStop', $value);
        return $this;
    }
   /**
    * @param BusStop|BusStation|array $value
    * @return $this
    */
    public function setArrivalBusStop($value)
    {
        $this->setProperty('arrivalBusStop', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getArrivalBusStop()
    {
       return $this->getProperty('arrivalBusStop');
    }

    /**
    * The unique identifier for the bus.
    * @param string|array $value
    * @return $this
    */
    public function busNumber(?string $value)
    {
        $this->setProperty('busNumber', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setBusNumber(?string $value)
    {
        $this->setProperty('busNumber', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getBusNumber()
    {
       return $this->getProperty('busNumber');
    }

    /**
    * The name of the bus (e.g. Bolt Express).
    * @param string|array $value
    * @return $this
    */
    public function busName(?string $value)
    {
        $this->setProperty('busName', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setBusName(?string $value)
    {
        $this->setProperty('busName', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getBusName()
    {
       return $this->getProperty('busName');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\Trip\\BusTrip','Thing\\BusTrip');

