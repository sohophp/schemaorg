<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible\Trip;

use Sohophp\SchemaOrg\Thing\Intangible\Trip;
use Sohophp\SchemaOrg\Thing\Place\CivicStructure\BusStation;
use Sohophp\SchemaOrg\Thing\Place\CivicStructure\BusStop;

/**
 * A trip on a commercial bus line.
 * @see https://schema.org/BusTrip
 * @package Sohophp\SchemaOrg\Thing\Intangible\Trip
 */
class BusTrip extends Trip
{
    /**
     * The unique identifier for the bus.
     * @see https://schema.org/busNumber
     * @param string|array $value
     * @return $this
     */
    public function busNumber($value)
    {
        $this->setProperty('busNumber', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setBusNumber($value)
    {
        $this->setProperty('busNumber', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addBusNumber($value)
    {
        $current = $this->getProperty('busNumber');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('busNumber', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getBusNumber()
    {
        return $this->getProperty('busNumber');
    }
    /**
     * The stop or station from which the bus departs.
     * @see https://schema.org/departureBusStop
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
     * @param BusStation|BusStop $value
     * @return $this
     */
    public function addDepartureBusStop($value)
    {
        $current = $this->getProperty('departureBusStop');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('departureBusStop', $current);
        return $this;
    }

    /**
     * @return BusStation|BusStop|array
     */
    public function getDepartureBusStop()
    {
        return $this->getProperty('departureBusStop');
    }
    /**
     * The name of the bus (e.g. Bolt Express).
     * @see https://schema.org/busName
     * @param string|array $value
     * @return $this
     */
    public function busName($value)
    {
        $this->setProperty('busName', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setBusName($value)
    {
        $this->setProperty('busName', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addBusName($value)
    {
        $current = $this->getProperty('busName');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('busName', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getBusName()
    {
        return $this->getProperty('busName');
    }
    /**
     * The stop or station from which the bus arrives.
     * @see https://schema.org/arrivalBusStop
     * @param BusStation|BusStop|array $value
     * @return $this
     */
    public function arrivalBusStop($value)
    {
        $this->setProperty('arrivalBusStop', $value);
        return $this;
    }

    /**
     * @param BusStation|BusStop|array $value
     * @return $this
     */
    public function setArrivalBusStop($value)
    {
        $this->setProperty('arrivalBusStop', $value);
        return $this;
    }

    /**
     * @param BusStation|BusStop $value
     * @return $this
     */
    public function addArrivalBusStop($value)
    {
        $current = $this->getProperty('arrivalBusStop');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('arrivalBusStop', $current);
        return $this;
    }

    /**
     * @return BusStation|BusStop|array
     */
    public function getArrivalBusStop()
    {
        return $this->getProperty('arrivalBusStop');
    }
}
