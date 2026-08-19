<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\Intangible\Property;
use Sohophp\SchemaOrg\Thing\Intangible\Class;

/**
 * Lists or enumerations—for example, a list of cuisines or music genres, etc.
 * @see https://schema.org/Enumeration
 * @package Sohophp\SchemaOrg\Thing\Intangible
 */
class Enumeration extends Intangible
{
    /**
     * Relates a term (i.e. a property, class or enumeration) to one that supersedes it.
     * @see https://schema.org/supersededBy
     * @param Enumeration|Property|Class|array $value
     * @return $this
     */
    public function supersededBy($value)
    {
        $this->setProperty('supersededBy', $value);
        return $this;
    }

    /**
     * @param Enumeration|Property|Class|array $value
     * @return $this
     */
    public function setSupersededBy($value)
    {
        $this->setProperty('supersededBy', $value);
        return $this;
    }

    /**
     * @param Enumeration|Property|Class $value
     * @return $this
     */
    public function addSupersededBy($value)
    {
        $current = $this->getProperty('supersededBy');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('supersededBy', $current);
        return $this;
    }

    /**
     * @return Enumeration|Property|Class|array
     */
    public function getSupersededBy()
    {
        return $this->getProperty('supersededBy');
    }
}
