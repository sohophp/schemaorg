<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;

/**
 * Indicates employment-related experience requirements, e.g. [[monthsOfExperience]].
 * @see https://schema.org/OccupationalExperienceRequirements
 * @package Sohophp\SchemaOrg\Thing\Intangible
 */
class OccupationalExperienceRequirements extends Intangible
{
    /**
     * Indicates the minimal number of months of experience required for a position.
     * @see https://schema.org/monthsOfExperience
     * @param mixed $value
     * @return $this
     */
    public function monthsOfExperience($value)
    {
        $this->setProperty('monthsOfExperience', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setMonthsOfExperience($value)
    {
        $this->setProperty('monthsOfExperience', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function addMonthsOfExperience($value)
    {
        $current = $this->getProperty('monthsOfExperience');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('monthsOfExperience', $current);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMonthsOfExperience()
    {
        return $this->getProperty('monthsOfExperience');
    }
}
