<?php
namespace Sohophp\SchemaOrg\Thing\MedicalEntity;

use Sohophp\SchemaOrg\Thing\MedicalEntity;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalCondition\MedicalSignOrSymptom\MedicalSign;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\MedicalEnumeration;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalDevice;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalCondition;
use Sohophp\SchemaOrg\Thing\MedicalEntity\Substance\Drug;

/**
* Any medical test, typically performed for diagnostic purposes.
* @see http://schema.org/MedicalTest
* @package Sohophp\SchemaOrg\Thing\MedicalEntity

*
*/
class MedicalTest extends MedicalEntity
{

    /**
    * A sign detected by the test.
    * @param MedicalSign|array|string $value
    * @return $this
    * @deprecated use setSignDetected
    */
    public function signDetected($value)
    {
        $this->setProperty('signDetected', $value);
        return $this;
    }
   /**
    * @param MedicalSign|array|string $value
    * @return $this
    */
    public function setSignDetected($value)
    {
        $this->setProperty('signDetected', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getSignDetected()
    {
       return $this->getProperty('signDetected');
    }

    /**
    * Range of acceptable values for a typical patient, when applicable.
    * @param string|MedicalEnumeration|array $value
    * @return $this
    * @deprecated use setNormalRange
    */
    public function normalRange($value)
    {
        $this->setProperty('normalRange', $value);
        return $this;
    }
   /**
    * @param string|MedicalEnumeration|array $value
    * @return $this
    */
    public function setNormalRange($value)
    {
        $this->setProperty('normalRange', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getNormalRange()
    {
       return $this->getProperty('normalRange');
    }

    /**
    * Device used to perform the test.
    * @param MedicalDevice|array|string $value
    * @return $this
    * @deprecated use setUsesDevice
    */
    public function usesDevice($value)
    {
        $this->setProperty('usesDevice', $value);
        return $this;
    }
   /**
    * @param MedicalDevice|array|string $value
    * @return $this
    */
    public function setUsesDevice($value)
    {
        $this->setProperty('usesDevice', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getUsesDevice()
    {
       return $this->getProperty('usesDevice');
    }

    /**
    * A condition the test is used to diagnose.
    * @param MedicalCondition|array|string $value
    * @return $this
    * @deprecated use setUsedToDiagnose
    */
    public function usedToDiagnose($value)
    {
        $this->setProperty('usedToDiagnose', $value);
        return $this;
    }
   /**
    * @param MedicalCondition|array|string $value
    * @return $this
    */
    public function setUsedToDiagnose($value)
    {
        $this->setProperty('usedToDiagnose', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getUsedToDiagnose()
    {
       return $this->getProperty('usedToDiagnose');
    }

    /**
    * Drugs that affect the test's results.
    * @param Drug|array|string $value
    * @return $this
    * @deprecated use setAffectedBy
    */
    public function affectedBy($value)
    {
        $this->setProperty('affectedBy', $value);
        return $this;
    }
   /**
    * @param Drug|array|string $value
    * @return $this
    */
    public function setAffectedBy($value)
    {
        $this->setProperty('affectedBy', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAffectedBy()
    {
       return $this->getProperty('affectedBy');
    }


}
