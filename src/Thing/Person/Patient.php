<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Person;

use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalCondition;
use Sohophp\SchemaOrg\Thing\Product\Drug;

/**
 * A patient is any person recipient of health care services.
 * @see https://schema.org/Patient
 * @package Sohophp\SchemaOrg\Thing\Person
 */
class Patient extends Person
{
    /**
     * One or more alternative conditions considered in the differential diagnosis process as output of a diagnosis process.
     * @see https://schema.org/diagnosis
     * @param MedicalCondition|array $value
     * @return $this
     */
    public function diagnosis($value)
    {
        $this->setProperty('diagnosis', $value);
        return $this;
    }

    /**
     * @param MedicalCondition|array $value
     * @return $this
     */
    public function setDiagnosis($value)
    {
        $this->setProperty('diagnosis', $value);
        return $this;
    }

    /**
     * @param MedicalCondition $value
     * @return $this
     */
    public function addDiagnosis($value)
    {
        $current = $this->getProperty('diagnosis');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('diagnosis', $current);
        return $this;
    }

    /**
     * @return MedicalCondition|array
     */
    public function getDiagnosis()
    {
        return $this->getProperty('diagnosis');
    }
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
    /**
     * Specifying the health condition(s) of a patient, medical study, or other target audience.
     * @see https://schema.org/healthCondition
     * @param MedicalCondition|array $value
     * @return $this
     */
    public function healthCondition($value)
    {
        $this->setProperty('healthCondition', $value);
        return $this;
    }

    /**
     * @param MedicalCondition|array $value
     * @return $this
     */
    public function setHealthCondition($value)
    {
        $this->setProperty('healthCondition', $value);
        return $this;
    }

    /**
     * @param MedicalCondition $value
     * @return $this
     */
    public function addHealthCondition($value)
    {
        $current = $this->getProperty('healthCondition');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('healthCondition', $current);
        return $this;
    }

    /**
     * @return MedicalCondition|array
     */
    public function getHealthCondition()
    {
        return $this->getProperty('healthCondition');
    }
}
