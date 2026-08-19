<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalCondition;

use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalCondition;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalProcedure\TherapeuticProcedure\MedicalTherapy;
use Sohophp\SchemaOrg\Thing\Product\Drug;
use Sohophp\SchemaOrg\Thing\MedicalEntity\LifestyleModification;
use Sohophp\SchemaOrg\Thing\MedicalEntity\DrugClass;

/**
 * Any feature associated or not with a medical condition. In medicine a symptom is generally subjective while a sign is objective.
 * @see https://schema.org/MedicalSignOrSymptom
 * @package Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalCondition
 */
class MedicalSignOrSymptom extends MedicalCondition
{
    /**
     * A possible treatment to address this condition, sign or symptom.
     * @see https://schema.org/possibleTreatment
     * @param MedicalTherapy|Drug|LifestyleModification|DrugClass|array $value
     * @return $this
     */
    public function possibleTreatment($value)
    {
        $this->setProperty('possibleTreatment', $value);
        return $this;
    }

    /**
     * @param MedicalTherapy|Drug|LifestyleModification|DrugClass|array $value
     * @return $this
     */
    public function setPossibleTreatment($value)
    {
        $this->setProperty('possibleTreatment', $value);
        return $this;
    }

    /**
     * @param MedicalTherapy|Drug|LifestyleModification|DrugClass $value
     * @return $this
     */
    public function addPossibleTreatment($value)
    {
        $current = $this->getProperty('possibleTreatment');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('possibleTreatment', $current);
        return $this;
    }

    /**
     * @return MedicalTherapy|Drug|LifestyleModification|DrugClass|array
     */
    public function getPossibleTreatment()
    {
        return $this->getProperty('possibleTreatment');
    }
}
