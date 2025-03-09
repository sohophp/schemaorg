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
        */
    protected $departureBoatTerminal = null;

   /**
        * The terminal or port from which the boat arrives.
        */
    protected $arrivalBoatTerminal = null;


    /**
    * @param array|string $value
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
    * @param array|string $value
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
