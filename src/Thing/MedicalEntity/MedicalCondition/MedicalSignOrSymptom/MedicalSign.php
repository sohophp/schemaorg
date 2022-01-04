<?php
namespace Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalCondition\MedicalSignOrSymptom;

use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalCondition\MedicalSignOrSymptom;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalProcedure\PhysicalExam;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalTest;

/**
* Any physical manifestation of a person's medical condition discoverable by objective diagnostic tests or physical examination.
* @see http://schema.org/MedicalSign
* @package Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalCondition\MedicalSignOrSymptom

*
*/
class MedicalSign extends MedicalSignOrSymptom
{

    /**
    * A physical examination that can identify this sign.
    * @param PhysicalExam|array|string $value
    * @return $this
    * @deprecated use setIdentifyingExam
    */
    public function identifyingExam($value)
    {
        $this->setProperty('identifyingExam', $value);
        return $this;
    }
   /**
    * @param PhysicalExam|array|string $value
    * @return $this
    */
    public function setIdentifyingExam($value)
    {
        $this->setProperty('identifyingExam', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getIdentifyingExam()
    {
       return $this->getProperty('identifyingExam');
    }

    /**
    * A diagnostic test that can identify this sign.
    * @param MedicalTest|array|string $value
    * @return $this
    * @deprecated use setIdentifyingTest
    */
    public function identifyingTest($value)
    {
        $this->setProperty('identifyingTest', $value);
        return $this;
    }
   /**
    * @param MedicalTest|array|string $value
    * @return $this
    */
    public function setIdentifyingTest($value)
    {
        $this->setProperty('identifyingTest', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getIdentifyingTest()
    {
       return $this->getProperty('identifyingTest');
    }


}
