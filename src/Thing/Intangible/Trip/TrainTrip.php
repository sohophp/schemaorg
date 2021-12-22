<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\Trip;

use Sohophp\SchemaOrg\Thing\Intangible\Trip;
use Sohophp\SchemaOrg\Thing\Place\CivicStructure\TrainStation;

/**
* A trip on a commercial train line.
* @see http://schema.org/TrainTrip
* @package Sohophp\SchemaOrg\Thing\Intangible\Trip

*
*/
class TrainTrip extends Trip
{

    /**
    * The station from which the train departs.
    * @param TrainStation|array $value
    * @return $this
    */
    public function departureStation(?TrainStation $value)
    {
        $this->setProperty('departureStation', $value);
        return $this;
    }
   /**
    * @param TrainStation|array $value
    * @return $this
    */
    public function setDepartureStation(?TrainStation $value)
    {
        $this->setProperty('departureStation', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getDepartureStation()
    {
       return $this->getProperty('departureStation');
    }

    /**
    * The platform where the train arrives.
    * @param string|array $value
    * @return $this
    */
    public function arrivalPlatform(?string $value)
    {
        $this->setProperty('arrivalPlatform', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setArrivalPlatform(?string $value)
    {
        $this->setProperty('arrivalPlatform', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getArrivalPlatform()
    {
       return $this->getProperty('arrivalPlatform');
    }

    /**
    * The platform from which the train departs.
    * @param string|array $value
    * @return $this
    */
    public function departurePlatform(?string $value)
    {
        $this->setProperty('departurePlatform', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setDeparturePlatform(?string $value)
    {
        $this->setProperty('departurePlatform', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getDeparturePlatform()
    {
       return $this->getProperty('departurePlatform');
    }

    /**
    * The name of the train (e.g. The Orient Express).
    * @param string|array $value
    * @return $this
    */
    public function trainName(?string $value)
    {
        $this->setProperty('trainName', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setTrainName(?string $value)
    {
        $this->setProperty('trainName', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getTrainName()
    {
       return $this->getProperty('trainName');
    }

    /**
    * The unique identifier for the train.
    * @param string|array $value
    * @return $this
    */
    public function trainNumber(?string $value)
    {
        $this->setProperty('trainNumber', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setTrainNumber(?string $value)
    {
        $this->setProperty('trainNumber', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getTrainNumber()
    {
       return $this->getProperty('trainNumber');
    }

    /**
    * The station where the train trip ends.
    * @param TrainStation|array $value
    * @return $this
    */
    public function arrivalStation(?TrainStation $value)
    {
        $this->setProperty('arrivalStation', $value);
        return $this;
    }
   /**
    * @param TrainStation|array $value
    * @return $this
    */
    public function setArrivalStation(?TrainStation $value)
    {
        $this->setProperty('arrivalStation', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getArrivalStation()
    {
       return $this->getProperty('arrivalStation');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\Trip\\TrainTrip','Thing\\TrainTrip');

