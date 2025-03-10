<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\Trip;

use Sohophp\SchemaOrg\Thing\Intangible\Trip;
use Sohophp\SchemaOrg\Thing\Place\CivicStructure\TrainStation;

/**
* A trip on a commercial train line.
* @see http://schema.org/TrainTrip
* @package Sohophp\SchemaOrg\Thing\Intangible\Trip
*/
class TrainTrip extends Trip
{


    /**
        * The station from which the train departs.
        * @param TrainStation|array|string|mixed $value
    * @return $this
    */
    public function departureStation($value)
    {
        $this->setProperty('departureStation', $value);
        return $this;
    }

    /**
    * @param TrainStation|array|string|mixed $value
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
        * The platform where the train arrives.
        * @param string|array|mixed $value
    * @return $this
    */
    public function arrivalPlatform($value)
    {
        $this->setProperty('arrivalPlatform', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
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
        * The platform from which the train departs.
        * @param string|array|mixed $value
    * @return $this
    */
    public function departurePlatform($value)
    {
        $this->setProperty('departurePlatform', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
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
        * The name of the train (e.g. The Orient Express).
        * @param string|array|mixed $value
    * @return $this
    */
    public function trainName($value)
    {
        $this->setProperty('trainName', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
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
        * The unique identifier for the train.
        * @param string|array|mixed $value
    * @return $this
    */
    public function trainNumber($value)
    {
        $this->setProperty('trainNumber', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
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


    /**
        * The station where the train trip ends.
        * @param TrainStation|array|string|mixed $value
    * @return $this
    */
    public function arrivalStation($value)
    {
        $this->setProperty('arrivalStation', $value);
        return $this;
    }

    /**
    * @param TrainStation|array|string|mixed $value
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


}
