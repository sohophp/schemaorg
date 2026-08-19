<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Organization\SportsOrganization;

use Sohophp\SchemaOrg\Thing\Organization\SportsOrganization;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\GenderType;
use Sohophp\SchemaOrg\Thing\Person;

/**
 * Organization: Sports team.
 * @see https://schema.org/SportsTeam
 * @package Sohophp\SchemaOrg\Thing\Organization\SportsOrganization
 */
class SportsTeam extends SportsOrganization
{
    /**
     * Gender of something, typically a [[Person]], but possibly also fictional characters, animals, etc. While https://schema.org/Male and https://schema.org/Female may be used, text strings are also acceptable for people who are not a binary gender. The [[gender]] property can also be used in an extended sense to cover e.g. the gender of sports teams. As with the gender of individuals, we do not try to enumerate all possibilities. A mixed-gender [[SportsTeam]] can be indicated with a text value of "Mixed".
     * @see https://schema.org/gender
     * @param string|GenderType|array $value
     * @return $this
     */
    public function gender($value)
    {
        $this->setProperty('gender', $value);
        return $this;
    }

    /**
     * @param string|GenderType|array $value
     * @return $this
     */
    public function setGender($value)
    {
        $this->setProperty('gender', $value);
        return $this;
    }

    /**
     * @param string|GenderType $value
     * @return $this
     */
    public function addGender($value)
    {
        $current = $this->getProperty('gender');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('gender', $current);
        return $this;
    }

    /**
     * @return string|GenderType|array
     */
    public function getGender()
    {
        return $this->getProperty('gender');
    }
    /**
     * A person that acts in a coaching role for a sports team.
     * @see https://schema.org/coach
     * @param Person|array $value
     * @return $this
     */
    public function coach($value)
    {
        $this->setProperty('coach', $value);
        return $this;
    }

    /**
     * @param Person|array $value
     * @return $this
     */
    public function setCoach($value)
    {
        $this->setProperty('coach', $value);
        return $this;
    }

    /**
     * @param Person $value
     * @return $this
     */
    public function addCoach($value)
    {
        $current = $this->getProperty('coach');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('coach', $current);
        return $this;
    }

    /**
     * @return Person|array
     */
    public function getCoach()
    {
        return $this->getProperty('coach');
    }
    /**
     * A person that acts as performing member of a sports team; a player as opposed to a coach.
     * @see https://schema.org/athlete
     * @param Person|array $value
     * @return $this
     */
    public function athlete($value)
    {
        $this->setProperty('athlete', $value);
        return $this;
    }

    /**
     * @param Person|array $value
     * @return $this
     */
    public function setAthlete($value)
    {
        $this->setProperty('athlete', $value);
        return $this;
    }

    /**
     * @param Person $value
     * @return $this
     */
    public function addAthlete($value)
    {
        $current = $this->getProperty('athlete');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('athlete', $current);
        return $this;
    }

    /**
     * @return Person|array
     */
    public function getAthlete()
    {
        return $this->getProperty('athlete');
    }
}
