<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Action\MoveAction;

use Sohophp\SchemaOrg\Thing\Action\MoveAction;
use Sohophp\SchemaOrg\Quantity\Distance;

/**
 * The act of traveling from a fromLocation to a destination by a specified mode of transport, optionally with participants.
 * @see https://schema.org/TravelAction
 * @package Sohophp\SchemaOrg\Thing\Action\MoveAction
 */
class TravelAction extends MoveAction
{
    /**
     * The distance travelled, e.g. exercising or travelling.
     * @see https://schema.org/distance
     * @param Distance|array $value
     * @return $this
     */
    public function distance($value)
    {
        $this->setProperty('distance', $value);
        return $this;
    }

    /**
     * @param Distance|array $value
     * @return $this
     */
    public function setDistance($value)
    {
        $this->setProperty('distance', $value);
        return $this;
    }

    /**
     * @param Distance $value
     * @return $this
     */
    public function addDistance($value)
    {
        $current = $this->getProperty('distance');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('distance', $current);
        return $this;
    }

    /**
     * @return Distance|array
     */
    public function getDistance()
    {
        return $this->getProperty('distance');
    }
}
