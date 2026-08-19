<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\MedicalEntity;

use Sohophp\SchemaOrg\Thing\MedicalEntity;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalCondition;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalCondition\MedicalSignOrSymptom\MedicalSign;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalDevice;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\MedicalEnumeration;
use Sohophp\SchemaOrg\Thing\Product\Drug;

/**
 * Any medical test, typically performed for diagnostic purposes.
 * @see https://schema.org/MedicalTest
 * @package Sohophp\SchemaOrg\Thing\MedicalEntity
 */
class MedicalTest extends MedicalEntity
{
    /**
     * A condition the test is used to diagnose.
     * @see https://schema.org/usedToDiagnose
     * @param MedicalCondition|array $value
     * @return $this
     */
    public function usedToDiagnose($value)
    {
        $this->setProperty('usedToDiagnose', $value);
        return $this;
    }

    /**
     * @param MedicalCondition|array $value
     * @return $this
     */
    public function setUsedToDiagnose($value)
    {
        $this->setProperty('usedToDiagnose', $value);
        return $this;
    }

    /**
     * @param MedicalCondition $value
     * @return $this
     */
    public function addUsedToDiagnose($value)
    {
        $current = $this->getProperty('usedToDiagnose');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('usedToDiagnose', $current);
        return $this;
    }

    /**
     * @return MedicalCondition|array
     */
    public function getUsedToDiagnose()
    {
        return $this->getProperty('usedToDiagnose');
    }
    /**
     * A sign detected by the test.
     * @see https://schema.org/signDetected
     * @param MedicalSign|array $value
     * @return $this
     */
    public function signDetected($value)
    {
        $this->setProperty('signDetected', $value);
        return $this;
    }

    /**
     * @param MedicalSign|array $value
     * @return $this
     */
    public function setSignDetected($value)
    {
        $this->setProperty('signDetected', $value);
        return $this;
    }

    /**
     * @param MedicalSign $value
     * @return $this
     */
    public function addSignDetected($value)
    {
        $current = $this->getProperty('signDetected');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('signDetected', $current);
        return $this;
    }

    /**
     * @return MedicalSign|array
     */
    public function getSignDetected()
    {
        return $this->getProperty('signDetected');
    }
    /**
     * Device used to perform the test.
     * @see https://schema.org/usesDevice
     * @param MedicalDevice|array $value
     * @return $this
     */
    public function usesDevice($value)
    {
        $this->setProperty('usesDevice', $value);
        return $this;
    }

    /**
     * @param MedicalDevice|array $value
     * @return $this
     */
    public function setUsesDevice($value)
    {
        $this->setProperty('usesDevice', $value);
        return $this;
    }

    /**
     * @param MedicalDevice $value
     * @return $this
     */
    public function addUsesDevice($value)
    {
        $current = $this->getProperty('usesDevice');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('usesDevice', $current);
        return $this;
    }

    /**
     * @return MedicalDevice|array
     */
    public function getUsesDevice()
    {
        return $this->getProperty('usesDevice');
    }
    /**
     * Range of acceptable values for a typical patient, when applicable.
     * @see https://schema.org/normalRange
     * @param MedicalEnumeration|string|array $value
     * @return $this
     */
    public function normalRange($value)
    {
        $this->setProperty('normalRange', $value);
        return $this;
    }

    /**
     * @param MedicalEnumeration|string|array $value
     * @return $this
     */
    public function setNormalRange($value)
    {
        $this->setProperty('normalRange', $value);
        return $this;
    }

    /**
     * @param MedicalEnumeration|string $value
     * @return $this
     */
    public function addNormalRange($value)
    {
        $current = $this->getProperty('normalRange');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('normalRange', $current);
        return $this;
    }

    /**
     * @return MedicalEnumeration|string|array
     */
    public function getNormalRange()
    {
        return $this->getProperty('normalRange');
    }
    /**
     * Drugs that affect the test's results.
     * @see https://schema.org/affectedBy
     * @param Drug|array $value
     * @return $this
     */
    public function affectedBy($value)
    {
        $this->setProperty('affectedBy', $value);
        return $this;
    }

    /**
     * @param Drug|array $value
     * @return $this
     */
    public function setAffectedBy($value)
    {
        $this->setProperty('affectedBy', $value);
        return $this;
    }

    /**
     * @param Drug $value
     * @return $this
     */
    public function addAffectedBy($value)
    {
        $current = $this->getProperty('affectedBy');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('affectedBy', $current);
        return $this;
    }

    /**
     * @return Drug|array
     */
    public function getAffectedBy()
    {
        return $this->getProperty('affectedBy');
    }
}
