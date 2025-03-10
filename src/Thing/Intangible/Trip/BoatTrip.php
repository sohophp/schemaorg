<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\Trip;

use Sohophp\SchemaOrg\Thing\Intangible\Trip;

/**
* A trip on a commercial ferry line.
* @see schema:BoatTrip
* @package Sohophp\SchemaOrg\Thing\Intangible\Trip
*/
class BoatTrip extends Trip
{


    /**
        * The terminal or port from which the boat departs.
        * @param array|string|mixed $value
    * @return $this
    */
    public function departureBoatTerminal($value)
    {
        $this->setProperty('departureBoatTerminal', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setDepartureBoatTerminal($value)
    {
        $this->setProperty('departureBoatTerminal', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDepartureBoatTerminal()
    {
       return $this->getProperty('departureBoatTerminal');
    }


    /**
        * The terminal or port from which the boat arrives.
        * @param array|string|mixed $value
    * @return $this
    */
    public function arrivalBoatTerminal($value)
    {
        $this->setProperty('arrivalBoatTerminal', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setArrivalBoatTerminal($value)
    {
        $this->setProperty('arrivalBoatTerminal', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getArrivalBoatTerminal()
    {
       return $this->getProperty('arrivalBoatTerminal');
    }


}
