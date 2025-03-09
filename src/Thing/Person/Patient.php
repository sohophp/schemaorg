<?php
namespace Sohophp\SchemaOrg\Thing\Person;

use Sohophp\SchemaOrg\Thing\Person;

/**
* A patient is any person recipient of health care services.
* @see schema:Patient
* @package Sohophp\SchemaOrg\Thing\Person
*/
class Patient extends Person
{
   /**
        * Specifying the health condition(s) of a patient, medical study, or other target audience.
        */
    protected $healthCondition = null;

   /**
        * One or more alternative conditions considered in the differential diagnosis process as output of a diagnosis process.
        */
    protected $diagnosis = null;

   /**
        * Specifying a drug or medicine used in a medication procedure.
        */
    protected $drug = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setHealthCondition($value)
    {
        $this->setProperty('healthCondition', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getHealthCondition()
    {
       return $this->getProperty('healthCondition');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setDiagnosis($value)
    {
        $this->setProperty('diagnosis', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDiagnosis()
    {
       return $this->getProperty('diagnosis');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setDrug($value)
    {
        $this->setProperty('drug', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDrug()
    {
       return $this->getProperty('drug');
    }


}
