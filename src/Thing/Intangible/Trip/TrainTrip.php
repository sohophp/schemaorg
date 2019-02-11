<?php declare(strict_types=1);
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
    * @param TrainStation $value
    * @return $this
    */
    public function departureStation(?TrainStation $value)
    {
        $this->setProperty('departureStation', $value);
        return $this;
    }

    /**
    * The platform where the train arrives.
    * @param string $value
    * @return $this
    */
    public function arrivalPlatform(?string $value)
    {
        $this->setProperty('arrivalPlatform', $value);
        return $this;
    }

    /**
    * The platform from which the train departs.
    * @param string $value
    * @return $this
    */
    public function departurePlatform(?string $value)
    {
        $this->setProperty('departurePlatform', $value);
        return $this;
    }

    /**
    * The name of the train (e.g. The Orient Express).
    * @param string $value
    * @return $this
    */
    public function trainName(?string $value)
    {
        $this->setProperty('trainName', $value);
        return $this;
    }

    /**
    * The unique identifier for the train.
    * @param string $value
    * @return $this
    */
    public function trainNumber(?string $value)
    {
        $this->setProperty('trainNumber', $value);
        return $this;
    }

    /**
    * The station where the train trip ends.
    * @param TrainStation $value
    * @return $this
    */
    public function arrivalStation(?TrainStation $value)
    {
        $this->setProperty('arrivalStation', $value);
        return $this;
    }


}

