<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\MedicalEntity;

use Sohophp\SchemaOrg\Thing\MedicalEntity;

/**
 * A risk factor is anything that increases a person's likelihood of developing or contracting a disease, medical condition, or complication.
 * @see https://schema.org/MedicalRiskFactor
 * @package Sohophp\SchemaOrg\Thing\MedicalEntity
 */
class MedicalRiskFactor extends MedicalEntity
{
    /**
     * The condition, complication, etc. influenced by this factor.
     * @see https://schema.org/increasesRiskOf
     * @param MedicalEntity|array $value
     * @return $this
     */
    public function increasesRiskOf($value)
    {
        $this->setProperty('increasesRiskOf', $value);
        return $this;
    }

    /**
     * @param MedicalEntity|array $value
     * @return $this
     */
    public function setIncreasesRiskOf($value)
    {
        $this->setProperty('increasesRiskOf', $value);
        return $this;
    }

    /**
     * @param MedicalEntity $value
     * @return $this
     */
    public function addIncreasesRiskOf($value)
    {
        $current = $this->getProperty('increasesRiskOf');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('increasesRiskOf', $current);
        return $this;
    }

    /**
     * @return MedicalEntity|array
     */
    public function getIncreasesRiskOf()
    {
        return $this->getProperty('increasesRiskOf');
    }
}
