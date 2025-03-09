<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\Trip;

use Sohophp\SchemaOrg\Thing\Intangible\Trip;

/**
* A trip on a commercial train line.
* @see schema:TrainTrip
* @package Sohophp\SchemaOrg\Thing\Intangible\Trip
*/
class TrainTrip extends Trip
{
   /**
        * The station from which the train departs.
        */
    protected $departureStation = null;

   /**
        * The name of the train (e.g. The Orient Express).
        */
    protected $trainName = null;

   /**
        * The platform where the train arrives.
        */
    protected $arrivalPlatform = null;

   /**
        * The station where the train trip ends.
        */
    protected $arrivalStation = null;

   /**
        * The platform from which the train departs.
        */
    protected $departurePlatform = null;

   /**
        * The unique identifier for the train.
        */
    protected $trainNumber = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setDepartureStation($value)
    {
        $this->setProperty('departureStation', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDepartureStation()
    {
       return $this->getProperty('departureStation');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setTrainName($value)
    {
        $this->setProperty('trainName', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getTrainName()
    {
       return $this->getProperty('trainName');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setArrivalPlatform($value)
    {
        $this->setProperty('arrivalPlatform', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getArrivalPlatform()
    {
       return $this->getProperty('arrivalPlatform');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setArrivalStation($value)
    {
        $this->setProperty('arrivalStation', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getArrivalStation()
    {
       return $this->getProperty('arrivalStation');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setDeparturePlatform($value)
    {
        $this->setProperty('departurePlatform', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDeparturePlatform()
    {
       return $this->getProperty('departurePlatform');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setTrainNumber($value)
    {
        $this->setProperty('trainNumber', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getTrainNumber()
    {
       return $this->getProperty('trainNumber');
    }


}
