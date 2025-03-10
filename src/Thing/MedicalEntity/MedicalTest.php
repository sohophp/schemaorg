<?php
namespace Sohophp\SchemaOrg\Thing\MedicalEntity;

use Sohophp\SchemaOrg\Thing\MedicalEntity;

/**
* Any medical test, typically performed for diagnostic purposes.
* @see schema:MedicalTest
* @package Sohophp\SchemaOrg\Thing\MedicalEntity
*/
class MedicalTest extends MedicalEntity
{


    /**
        * Drugs that affect the test's results.
        * @param array|string|mixed $value
    * @return $this
    */
    public function affectedBy($value)
    {
        $this->setProperty('affectedBy', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setAffectedBy($value)
    {
        $this->setProperty('affectedBy', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAffectedBy()
    {
       return $this->getProperty('affectedBy');
    }


    /**
        * A condition the test is used to diagnose.
        * @param array|string|mixed $value
    * @return $this
    */
    public function usedToDiagnose($value)
    {
        $this->setProperty('usedToDiagnose', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setUsedToDiagnose($value)
    {
        $this->setProperty('usedToDiagnose', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getUsedToDiagnose()
    {
       return $this->getProperty('usedToDiagnose');
    }


    /**
        * A sign detected by the test.
        * @param array|string|mixed $value
    * @return $this
    */
    public function signDetected($value)
    {
        $this->setProperty('signDetected', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setSignDetected($value)
    {
        $this->setProperty('signDetected', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSignDetected()
    {
       return $this->getProperty('signDetected');
    }


    /**
        * Range of acceptable values for a typical patient, when applicable.
        * @param array|string|mixed $value
    * @return $this
    */
    public function normalRange($value)
    {
        $this->setProperty('normalRange', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setNormalRange($value)
    {
        $this->setProperty('normalRange', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getNormalRange()
    {
       return $this->getProperty('normalRange');
    }


    /**
        * Device used to perform the test.
        * @param array|string|mixed $value
    * @return $this
    */
    public function usesDevice($value)
    {
        $this->setProperty('usesDevice', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setUsesDevice($value)
    {
        $this->setProperty('usesDevice', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getUsesDevice()
    {
       return $this->getProperty('usesDevice');
    }


}
