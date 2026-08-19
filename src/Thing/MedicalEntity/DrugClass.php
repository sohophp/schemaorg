<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\MedicalEntity;

use Sohophp\SchemaOrg\Thing\MedicalEntity;
use Sohophp\SchemaOrg\Thing\Product\Drug;

/**
 * A class of medical drugs, e.g., statins. Classes can represent general pharmacological class, common mechanisms of action, common physiological effects, etc.
 * @see https://schema.org/DrugClass
 * @package Sohophp\SchemaOrg\Thing\MedicalEntity
 */
class DrugClass extends MedicalEntity
{
    /**
     * Specifying a drug or medicine used in a medication procedure.
     * @see https://schema.org/drug
     * @param Drug|array $value
     * @return $this
     */
    public function drug($value)
    {
        $this->setProperty('drug', $value);
        return $this;
    }

    /**
     * @param Drug|array $value
     * @return $this
     */
    public function setDrug($value)
    {
        $this->setProperty('drug', $value);
        return $this;
    }

    /**
     * @param Drug $value
     * @return $this
     */
    public function addDrug($value)
    {
        $current = $this->getProperty('drug');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('drug', $current);
        return $this;
    }

    /**
     * @return Drug|array
     */
    public function getDrug()
    {
        return $this->getProperty('drug');
    }
}
