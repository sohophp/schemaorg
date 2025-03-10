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
        * Specifying the health condition(s) of a patient, medical study, or other
 * target audience.
        * @param array|string|mixed $value
    * @return $this
    */
    public function healthCondition($value)
    {
        $this->setProperty('healthCondition', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * One or more alternative conditions considered in the differential diagnosis
 * process as output of a diagnosis process.
        * @param array|string|mixed $value
    * @return $this
    */
    public function diagnosis($value)
    {
        $this->setProperty('diagnosis', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Specifying a drug or medicine used in a medication procedure.
        * @param array|string|mixed $value
    * @return $this
    */
    public function drug($value)
    {
        $this->setProperty('drug', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
