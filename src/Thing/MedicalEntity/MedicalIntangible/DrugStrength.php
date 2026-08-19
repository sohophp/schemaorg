<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible;

use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\DoseSchedule\MaximumDoseSchedule;
use Sohophp\SchemaOrg\Thing\Place\AdministrativeArea;

/**
 * A specific strength in which a medical drug is available in a specific country.
 * @see https://schema.org/DrugStrength
 * @package Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible
 */
class DrugStrength extends MedicalIntangible
{
    /**
     * The value of an active ingredient's strength, e.g. 325.
     * @see https://schema.org/strengthValue
     * @param mixed $value
     * @return $this
     */
    public function strengthValue($value)
    {
        $this->setProperty('strengthValue', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setStrengthValue($value)
    {
        $this->setProperty('strengthValue', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function addStrengthValue($value)
    {
        $current = $this->getProperty('strengthValue');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('strengthValue', $current);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStrengthValue()
    {
        return $this->getProperty('strengthValue');
    }
    /**
     * An active ingredient, typically chemical compounds and/or biologic substances.
     * @see https://schema.org/activeIngredient
     * @param string|array $value
     * @return $this
     */
    public function activeIngredient($value)
    {
        $this->setProperty('activeIngredient', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setActiveIngredient($value)
    {
        $this->setProperty('activeIngredient', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addActiveIngredient($value)
    {
        $current = $this->getProperty('activeIngredient');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('activeIngredient', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getActiveIngredient()
    {
        return $this->getProperty('activeIngredient');
    }
    /**
     * Recommended intake of this supplement for a given population as defined by a specific recommending authority.
     * @see https://schema.org/maximumIntake
     * @param MaximumDoseSchedule|array $value
     * @return $this
     */
    public function maximumIntake($value)
    {
        $this->setProperty('maximumIntake', $value);
        return $this;
    }

    /**
     * @param MaximumDoseSchedule|array $value
     * @return $this
     */
    public function setMaximumIntake($value)
    {
        $this->setProperty('maximumIntake', $value);
        return $this;
    }

    /**
     * @param MaximumDoseSchedule $value
     * @return $this
     */
    public function addMaximumIntake($value)
    {
        $current = $this->getProperty('maximumIntake');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('maximumIntake', $current);
        return $this;
    }

    /**
     * @return MaximumDoseSchedule|array
     */
    public function getMaximumIntake()
    {
        return $this->getProperty('maximumIntake');
    }
    /**
     * The units of an active ingredient's strength, e.g. mg.
     * @see https://schema.org/strengthUnit
     * @param string|array $value
     * @return $this
     */
    public function strengthUnit($value)
    {
        $this->setProperty('strengthUnit', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setStrengthUnit($value)
    {
        $this->setProperty('strengthUnit', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addStrengthUnit($value)
    {
        $current = $this->getProperty('strengthUnit');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('strengthUnit', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getStrengthUnit()
    {
        return $this->getProperty('strengthUnit');
    }
    /**
     * The location in which the strength is available.
     * @see https://schema.org/availableIn
     * @param AdministrativeArea|array $value
     * @return $this
     */
    public function availableIn($value)
    {
        $this->setProperty('availableIn', $value);
        return $this;
    }

    /**
     * @param AdministrativeArea|array $value
     * @return $this
     */
    public function setAvailableIn($value)
    {
        $this->setProperty('availableIn', $value);
        return $this;
    }

    /**
     * @param AdministrativeArea $value
     * @return $this
     */
    public function addAvailableIn($value)
    {
        $current = $this->getProperty('availableIn');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('availableIn', $current);
        return $this;
    }

    /**
     * @return AdministrativeArea|array
     */
    public function getAvailableIn()
    {
        return $this->getProperty('availableIn');
    }
}
