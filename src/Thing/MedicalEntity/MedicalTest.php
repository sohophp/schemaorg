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
        */
    protected $affectedBy = null;

   /**
        * A condition the test is used to diagnose.
        */
    protected $usedToDiagnose = null;

   /**
        * A sign detected by the test.
        */
    protected $signDetected = null;

   /**
        * Range of acceptable values for a typical patient, when applicable.
        */
    protected $normalRange = null;

   /**
        * Device used to perform the test.
        */
    protected $usesDevice = null;


    /**
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
