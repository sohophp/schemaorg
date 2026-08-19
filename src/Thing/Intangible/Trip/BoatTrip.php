<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible\Trip;

use Sohophp\SchemaOrg\Thing\Intangible\Trip;
use Sohophp\SchemaOrg\Thing\Place\CivicStructure\BoatTerminal;

/**
 * A trip on a commercial ferry line.
 * @see https://schema.org/BoatTrip
 * @package Sohophp\SchemaOrg\Thing\Intangible\Trip
 */
class BoatTrip extends Trip
{
    /**
     * The terminal or port from which the boat arrives.
     * @see https://schema.org/arrivalBoatTerminal
     * @param BoatTerminal|array $value
     * @return $this
     */
    public function arrivalBoatTerminal($value)
    {
        $this->setProperty('arrivalBoatTerminal', $value);
        return $this;
    }

    /**
     * @param BoatTerminal|array $value
     * @return $this
     */
    public function setArrivalBoatTerminal($value)
    {
        $this->setProperty('arrivalBoatTerminal', $value);
        return $this;
    }

    /**
     * @param BoatTerminal $value
     * @return $this
     */
    public function addArrivalBoatTerminal($value)
    {
        $current = $this->getProperty('arrivalBoatTerminal');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('arrivalBoatTerminal', $current);
        return $this;
    }

    /**
     * @return BoatTerminal|array
     */
    public function getArrivalBoatTerminal()
    {
        return $this->getProperty('arrivalBoatTerminal');
    }
    /**
     * The terminal or port from which the boat departs.
     * @see https://schema.org/departureBoatTerminal
     * @param BoatTerminal|array $value
     * @return $this
     */
    public function departureBoatTerminal($value)
    {
        $this->setProperty('departureBoatTerminal', $value);
        return $this;
    }

    /**
     * @param BoatTerminal|array $value
     * @return $this
     */
    public function setDepartureBoatTerminal($value)
    {
        $this->setProperty('departureBoatTerminal', $value);
        return $this;
    }

    /**
     * @param BoatTerminal $value
     * @return $this
     */
    public function addDepartureBoatTerminal($value)
    {
        $current = $this->getProperty('departureBoatTerminal');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('departureBoatTerminal', $current);
        return $this;
    }

    /**
     * @return BoatTerminal|array
     */
    public function getDepartureBoatTerminal()
    {
        return $this->getProperty('departureBoatTerminal');
    }
}
