<?php
namespace Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalCondition\MedicalSignOrSymptom;

use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalCondition\MedicalSignOrSymptom;

/**
* Any physical manifestation of a person's medical condition discoverable by
 * objective diagnostic tests or physical examination.
* @see schema:MedicalSign
* @package Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalCondition\MedicalSignOrSymptom
*/
class MedicalSign extends MedicalSignOrSymptom
{


    /**
        * A physical examination that can identify this sign.
        * @param array|string|mixed $value
    * @return $this
    */
    public function identifyingExam($value)
    {
        $this->setProperty('identifyingExam', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setIdentifyingExam($value)
    {
        $this->setProperty('identifyingExam', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getIdentifyingExam()
    {
       return $this->getProperty('identifyingExam');
    }


    /**
        * A diagnostic test that can identify this sign.
        * @param array|string|mixed $value
    * @return $this
    */
    public function identifyingTest($value)
    {
        $this->setProperty('identifyingTest', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setIdentifyingTest($value)
    {
        $this->setProperty('identifyingTest', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getIdentifyingTest()
    {
       return $this->getProperty('identifyingTest');
    }


}
