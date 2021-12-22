<?php
namespace Sohophp\SchemaOrg\Thing\Person;

use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\MedicalEntity\Substance\Drug;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalCondition;

/**
* A patient is any person recipient of health care services.
* @see http://schema.org/Patient
* @package Sohophp\SchemaOrg\Thing\Person

*
*/
class Patient extends Person
{

    /**
    * Specifying a drug or medicine used in a medication procedure
    * @param Drug|array $value
    * @return $this
    */
    public function drug(?Drug $value)
    {
        $this->setProperty('drug', $value);
        return $this;
    }
   /**
    * @param Drug|array $value
    * @return $this
    */
    public function setDrug(?Drug $value)
    {
        $this->setProperty('drug', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getDrug()
    {
       return $this->getProperty('drug');
    }

    /**
    * Specifying the health condition(s) of a patient, medical study, or other target audience.
    * @param MedicalCondition|array $value
    * @return $this
    */
    public function healthCondition(?MedicalCondition $value)
    {
        $this->setProperty('healthCondition', $value);
        return $this;
    }
   /**
    * @param MedicalCondition|array $value
    * @return $this
    */
    public function setHealthCondition(?MedicalCondition $value)
    {
        $this->setProperty('healthCondition', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getHealthCondition()
    {
       return $this->getProperty('healthCondition');
    }

    /**
    * One or more alternative conditions considered in the differential diagnosis process as output of a diagnosis process.
    * @param MedicalCondition|array $value
    * @return $this
    */
    public function diagnosis(?MedicalCondition $value)
    {
        $this->setProperty('diagnosis', $value);
        return $this;
    }
   /**
    * @param MedicalCondition|array $value
    * @return $this
    */
    public function setDiagnosis(?MedicalCondition $value)
    {
        $this->setProperty('diagnosis', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getDiagnosis()
    {
       return $this->getProperty('diagnosis');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Person\\Patient','Thing\\Patient');

