<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Organization;

use Sohophp\SchemaOrg\Thing\Organization;

/**
 * Represents the collection of all sports organizations, including sports teams, governing bodies, and sports associations.
 * @see https://schema.org/SportsOrganization
 * @package Sohophp\SchemaOrg\Thing\Organization
 */
class SportsOrganization extends Organization
{
    /**
     * A type of sport (e.g. Baseball).
     * @see https://schema.org/sport
     * @param string|array $value
     * @return $this
     */
    public function sport($value)
    {
        $this->setProperty('sport', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setSport($value)
    {
        $this->setProperty('sport', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addSport($value)
    {
        $current = $this->getProperty('sport');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('sport', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getSport()
    {
        return $this->getProperty('sport');
    }
}
