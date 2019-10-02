<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalCondition\MedicalSignOrSymptom;

use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalCondition\MedicalSignOrSymptom;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalProcedure\PhysicalExam;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalTest;

/**
* Any physical manifestation of a person's medical condition discoverable by objective diagnostic tests or physical examination.
* @see http://schema.org/MedicalSign
* @package Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalCondition\MedicalSignOrSymptom
*/
class MedicalSign extends MedicalSignOrSymptom
{

    /**
    * A physical examination that can identify this sign.
    * @param PhysicalExam $value
    * @return $this
    */
    public function identifyingExam(?PhysicalExam $value)
    {
        $this->setProperty('identifyingExam', $value);
        return $this;
    }

    /**
    * A diagnostic test that can identify this sign.
    * @param MedicalTest $value
    * @return $this
    */
    public function identifyingTest(?MedicalTest $value)
    {
        $this->setProperty('identifyingTest', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\MedicalEntity\\MedicalCondition\\MedicalSignOrSymptom\\MedicalSign','Thing\\MedicalSign');

