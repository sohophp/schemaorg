<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible\Trip;

use Sohophp\SchemaOrg\Thing\Intangible\Trip;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\BoardingPolicyType;
use Sohophp\SchemaOrg\Thing\Place\CivicStructure\Airport;
use Sohophp\SchemaOrg\Quantity\Distance;
use Sohophp\SchemaOrg\Quantity\Duration;
use Sohophp\SchemaOrg\Thing\Product\Vehicle;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Organization;

/**
 * An airline flight.
 * @see https://schema.org/Flight
 * @package Sohophp\SchemaOrg\Thing\Intangible\Trip
 */
class Flight extends Trip
{
    /**
     * The type of boarding policy used by the airline (e.g. zone-based or group-based).
     * @see https://schema.org/boardingPolicy
     * @param BoardingPolicyType|array $value
     * @return $this
     */
    public function boardingPolicy($value)
    {
        $this->setProperty('boardingPolicy', $value);
        return $this;
    }

    /**
     * @param BoardingPolicyType|array $value
     * @return $this
     */
    public function setBoardingPolicy($value)
    {
        $this->setProperty('boardingPolicy', $value);
        return $this;
    }

    /**
     * @param BoardingPolicyType $value
     * @return $this
     */
    public function addBoardingPolicy($value)
    {
        $current = $this->getProperty('boardingPolicy');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('boardingPolicy', $current);
        return $this;
    }

    /**
     * @return BoardingPolicyType|array
     */
    public function getBoardingPolicy()
    {
        return $this->getProperty('boardingPolicy');
    }
    /**
     * Identifier of the flight's arrival gate.
     * @see https://schema.org/arrivalGate
     * @param string|array $value
     * @return $this
     */
    public function arrivalGate($value)
    {
        $this->setProperty('arrivalGate', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setArrivalGate($value)
    {
        $this->setProperty('arrivalGate', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addArrivalGate($value)
    {
        $current = $this->getProperty('arrivalGate');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('arrivalGate', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getArrivalGate()
    {
        return $this->getProperty('arrivalGate');
    }
    /**
     * Identifier of the flight's arrival terminal.
     * @see https://schema.org/arrivalTerminal
     * @param string|array $value
     * @return $this
     */
    public function arrivalTerminal($value)
    {
        $this->setProperty('arrivalTerminal', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setArrivalTerminal($value)
    {
        $this->setProperty('arrivalTerminal', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addArrivalTerminal($value)
    {
        $current = $this->getProperty('arrivalTerminal');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('arrivalTerminal', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getArrivalTerminal()
    {
        return $this->getProperty('arrivalTerminal');
    }
    /**
     * The time when a passenger can check into the flight online.
     * @see https://schema.org/webCheckinTime
     * @param mixed $value
     * @return $this
     */
    public function webCheckinTime($value)
    {
        $this->setProperty('webCheckinTime', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setWebCheckinTime($value)
    {
        $this->setProperty('webCheckinTime', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function addWebCheckinTime($value)
    {
        $current = $this->getProperty('webCheckinTime');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('webCheckinTime', $current);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getWebCheckinTime()
    {
        return $this->getProperty('webCheckinTime');
    }
    /**
     * Identifier of the flight's departure terminal.
     * @see https://schema.org/departureTerminal
     * @param string|array $value
     * @return $this
     */
    public function departureTerminal($value)
    {
        $this->setProperty('departureTerminal', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setDepartureTerminal($value)
    {
        $this->setProperty('departureTerminal', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addDepartureTerminal($value)
    {
        $current = $this->getProperty('departureTerminal');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('departureTerminal', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getDepartureTerminal()
    {
        return $this->getProperty('departureTerminal');
    }
    /**
     * The airport where the flight terminates.
     * @see https://schema.org/arrivalAirport
     * @param Airport|array $value
     * @return $this
     */
    public function arrivalAirport($value)
    {
        $this->setProperty('arrivalAirport', $value);
        return $this;
    }

    /**
     * @param Airport|array $value
     * @return $this
     */
    public function setArrivalAirport($value)
    {
        $this->setProperty('arrivalAirport', $value);
        return $this;
    }

    /**
     * @param Airport $value
     * @return $this
     */
    public function addArrivalAirport($value)
    {
        $current = $this->getProperty('arrivalAirport');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('arrivalAirport', $current);
        return $this;
    }

    /**
     * @return Airport|array
     */
    public function getArrivalAirport()
    {
        return $this->getProperty('arrivalAirport');
    }
    /**
     * The distance of the flight.
     * @see https://schema.org/flightDistance
     * @param string|Distance|array $value
     * @return $this
     */
    public function flightDistance($value)
    {
        $this->setProperty('flightDistance', $value);
        return $this;
    }

    /**
     * @param string|Distance|array $value
     * @return $this
     */
    public function setFlightDistance($value)
    {
        $this->setProperty('flightDistance', $value);
        return $this;
    }

    /**
     * @param string|Distance $value
     * @return $this
     */
    public function addFlightDistance($value)
    {
        $current = $this->getProperty('flightDistance');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('flightDistance', $current);
        return $this;
    }

    /**
     * @return string|Distance|array
     */
    public function getFlightDistance()
    {
        return $this->getProperty('flightDistance');
    }
    /**
     * Description of the meals that will be provided or available for purchase.
     * @see https://schema.org/mealService
     * @param string|array $value
     * @return $this
     */
    public function mealService($value)
    {
        $this->setProperty('mealService', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setMealService($value)
    {
        $this->setProperty('mealService', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addMealService($value)
    {
        $current = $this->getProperty('mealService');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('mealService', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getMealService()
    {
        return $this->getProperty('mealService');
    }
    /**
     * The estimated time the flight will take.
     * @see https://schema.org/estimatedFlightDuration
     * @param Duration|string|array $value
     * @return $this
     */
    public function estimatedFlightDuration($value)
    {
        $this->setProperty('estimatedFlightDuration', $value);
        return $this;
    }

    /**
     * @param Duration|string|array $value
     * @return $this
     */
    public function setEstimatedFlightDuration($value)
    {
        $this->setProperty('estimatedFlightDuration', $value);
        return $this;
    }

    /**
     * @param Duration|string $value
     * @return $this
     */
    public function addEstimatedFlightDuration($value)
    {
        $current = $this->getProperty('estimatedFlightDuration');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('estimatedFlightDuration', $current);
        return $this;
    }

    /**
     * @return Duration|string|array
     */
    public function getEstimatedFlightDuration()
    {
        return $this->getProperty('estimatedFlightDuration');
    }
    /**
     * The airport where the flight originates.
     * @see https://schema.org/departureAirport
     * @param Airport|array $value
     * @return $this
     */
    public function departureAirport($value)
    {
        $this->setProperty('departureAirport', $value);
        return $this;
    }

    /**
     * @param Airport|array $value
     * @return $this
     */
    public function setDepartureAirport($value)
    {
        $this->setProperty('departureAirport', $value);
        return $this;
    }

    /**
     * @param Airport $value
     * @return $this
     */
    public function addDepartureAirport($value)
    {
        $current = $this->getProperty('departureAirport');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('departureAirport', $current);
        return $this;
    }

    /**
     * @return Airport|array
     */
    public function getDepartureAirport()
    {
        return $this->getProperty('departureAirport');
    }
    /**
     * Identifier of the flight's departure gate.
     * @see https://schema.org/departureGate
     * @param string|array $value
     * @return $this
     */
    public function departureGate($value)
    {
        $this->setProperty('departureGate', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setDepartureGate($value)
    {
        $this->setProperty('departureGate', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addDepartureGate($value)
    {
        $current = $this->getProperty('departureGate');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('departureGate', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getDepartureGate()
    {
        return $this->getProperty('departureGate');
    }
    /**
     * The unique identifier for a flight including the airline IATA code. For example, if describing United flight 110, where the IATA code for United is 'UA', the flightNumber is 'UA110'.
     * @see https://schema.org/flightNumber
     * @param string|array $value
     * @return $this
     */
    public function flightNumber($value)
    {
        $this->setProperty('flightNumber', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setFlightNumber($value)
    {
        $this->setProperty('flightNumber', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addFlightNumber($value)
    {
        $current = $this->getProperty('flightNumber');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('flightNumber', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getFlightNumber()
    {
        return $this->getProperty('flightNumber');
    }
    /**
     * The kind of aircraft (e.g., "Boeing 747").
     * @see https://schema.org/aircraft
     * @param string|Vehicle|array $value
     * @return $this
     */
    public function aircraft($value)
    {
        $this->setProperty('aircraft', $value);
        return $this;
    }

    /**
     * @param string|Vehicle|array $value
     * @return $this
     */
    public function setAircraft($value)
    {
        $this->setProperty('aircraft', $value);
        return $this;
    }

    /**
     * @param string|Vehicle $value
     * @return $this
     */
    public function addAircraft($value)
    {
        $current = $this->getProperty('aircraft');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('aircraft', $current);
        return $this;
    }

    /**
     * @return string|Vehicle|array
     */
    public function getAircraft()
    {
        return $this->getProperty('aircraft');
    }
    /**
     * An entity which offers (sells / leases / lends / loans) the services / goods. A seller may also be a provider.
     * @see https://schema.org/seller
     * @param Person|Organization|array $value
     * @return $this
     */
    public function seller($value)
    {
        $this->setProperty('seller', $value);
        return $this;
    }

    /**
     * @param Person|Organization|array $value
     * @return $this
     */
    public function setSeller($value)
    {
        $this->setProperty('seller', $value);
        return $this;
    }

    /**
     * @param Person|Organization $value
     * @return $this
     */
    public function addSeller($value)
    {
        $current = $this->getProperty('seller');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('seller', $current);
        return $this;
    }

    /**
     * @return Person|Organization|array
     */
    public function getSeller()
    {
        return $this->getProperty('seller');
    }
    /**
     * 'carrier' is an out-dated term indicating the 'provider' for parcel delivery and flights.
     * @see https://schema.org/carrier
     * @param Organization|array $value
     * @return $this
     */
    public function carrier($value)
    {
        $this->setProperty('carrier', $value);
        return $this;
    }

    /**
     * @param Organization|array $value
     * @return $this
     */
    public function setCarrier($value)
    {
        $this->setProperty('carrier', $value);
        return $this;
    }

    /**
     * @param Organization $value
     * @return $this
     */
    public function addCarrier($value)
    {
        $current = $this->getProperty('carrier');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('carrier', $current);
        return $this;
    }

    /**
     * @return Organization|array
     */
    public function getCarrier()
    {
        return $this->getProperty('carrier');
    }
}
