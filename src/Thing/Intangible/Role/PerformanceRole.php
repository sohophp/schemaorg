<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible\Role;

use Sohophp\SchemaOrg\Thing\Intangible\Role;

/**
 * A PerformanceRole is a Role that some entity places with regard to a theatrical performance, e.g. in a Movie, TVSeries etc.
 * @see https://schema.org/PerformanceRole
 * @package Sohophp\SchemaOrg\Thing\Intangible\Role
 */
class PerformanceRole extends Role
{
    /**
     * The name of a character played in some acting or performing role, i.e. in a PerformanceRole.
     * @see https://schema.org/characterName
     * @param string|array $value
     * @return $this
     */
    public function characterName($value)
    {
        $this->setProperty('characterName', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setCharacterName($value)
    {
        $this->setProperty('characterName', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addCharacterName($value)
    {
        $current = $this->getProperty('characterName');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('characterName', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getCharacterName()
    {
        return $this->getProperty('characterName');
    }
}
