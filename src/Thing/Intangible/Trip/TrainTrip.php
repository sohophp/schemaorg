<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible\Trip;

use Sohophp\SchemaOrg\Thing\Intangible\Trip;
use Sohophp\SchemaOrg\Thing\Place\CivicStructure\TrainStation;

/**
 * A trip on a commercial train line.
 * @see https://schema.org/TrainTrip
 * @package Sohophp\SchemaOrg\Thing\Intangible\Trip
 */
class TrainTrip extends Trip
{
    /**
     * The platform from which the train departs.
     * @see https://schema.org/departurePlatform
     * @param string|array $value
     * @return $this
     */
    public function departurePlatform($value)
    {
        $this->setProperty('departurePlatform', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setDeparturePlatform($value)
    {
        $this->setProperty('departurePlatform', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addDeparturePlatform($value)
    {
        $current = $this->getProperty('departurePlatform');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('departurePlatform', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getDeparturePlatform()
    {
        return $this->getProperty('departurePlatform');
    }
    /**
     * The platform where the train arrives.
     * @see https://schema.org/arrivalPlatform
     * @param string|array $value
     * @return $this
     */
    public function arrivalPlatform($value)
    {
        $this->setProperty('arrivalPlatform', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setArrivalPlatform($value)
    {
        $this->setProperty('arrivalPlatform', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addArrivalPlatform($value)
    {
        $current = $this->getProperty('arrivalPlatform');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('arrivalPlatform', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getArrivalPlatform()
    {
        return $this->getProperty('arrivalPlatform');
    }
    /**
     * The unique identifier for the train.
     * @see https://schema.org/trainNumber
     * @param string|array $value
     * @return $this
     */
    public function trainNumber($value)
    {
        $this->setProperty('trainNumber', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setTrainNumber($value)
    {
        $this->setProperty('trainNumber', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addTrainNumber($value)
    {
        $current = $this->getProperty('trainNumber');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('trainNumber', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getTrainNumber()
    {
        return $this->getProperty('trainNumber');
    }
    /**
     * The station where the train trip ends.
     * @see https://schema.org/arrivalStation
     * @param TrainStation|array $value
     * @return $this
     */
    public function arrivalStation($value)
    {
        $this->setProperty('arrivalStation', $value);
        return $this;
    }

    /**
     * @param TrainStation|array $value
     * @return $this
     */
    public function setArrivalStation($value)
    {
        $this->setProperty('arrivalStation', $value);
        return $this;
    }

    /**
     * @param TrainStation $value
     * @return $this
     */
    public function addArrivalStation($value)
    {
        $current = $this->getProperty('arrivalStation');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('arrivalStation', $current);
        return $this;
    }

    /**
     * @return TrainStation|array
     */
    public function getArrivalStation()
    {
        return $this->getProperty('arrivalStation');
    }
    /**
     * The name of the train (e.g. The Orient Express).
     * @see https://schema.org/trainName
     * @param string|array $value
     * @return $this
     */
    public function trainName($value)
    {
        $this->setProperty('trainName', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setTrainName($value)
    {
        $this->setProperty('trainName', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addTrainName($value)
    {
        $current = $this->getProperty('trainName');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('trainName', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getTrainName()
    {
        return $this->getProperty('trainName');
    }
    /**
     * The station from which the train departs.
     * @see https://schema.org/departureStation
     * @param TrainStation|array $value
     * @return $this
     */
    public function departureStation($value)
    {
        $this->setProperty('departureStation', $value);
        return $this;
    }

    /**
     * @param TrainStation|array $value
     * @return $this
     */
    public function setDepartureStation($value)
    {
        $this->setProperty('departureStation', $value);
        return $this;
    }

    /**
     * @param TrainStation $value
     * @return $this
     */
    public function addDepartureStation($value)
    {
        $current = $this->getProperty('departureStation');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('departureStation', $current);
        return $this;
    }

    /**
     * @return TrainStation|array
     */
    public function getDepartureStation()
    {
        return $this->getProperty('departureStation');
    }
}
