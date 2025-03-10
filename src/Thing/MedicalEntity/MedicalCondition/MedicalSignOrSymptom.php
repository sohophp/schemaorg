<?php
namespace Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalCondition;

use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalCondition;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalCause;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalProcedure\TherapeuticProcedure\MedicalTherapy;

/**
* Any feature associated or not with a medical condition. In medicine a symptom
 * is generally subjective while a sign is objective.
* @see http://schema.org/MedicalSignOrSymptom
* @package Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalCondition
*/
class MedicalSignOrSymptom extends MedicalCondition
{


    /**
        * Specifying a cause of something in general. e.g in medicine , one of the
 * causative agent(s) that are most directly responsible for the
 * pathophysiologic process that eventually results in the occurrence.
        * @param MedicalCause|array|string|mixed $value
    * @return $this
    */
    public function cause($value)
    {
        $this->setProperty('cause', $value);
        return $this;
    }

    /**
    * @param MedicalCause|array|string|mixed $value
    * @return $this
    */
    public function setCause($value)
    {
        $this->setProperty('cause', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCause()
    {
       return $this->getProperty('cause');
    }


    /**
        * A possible treatment to address this condition, sign or symptom.
        * @param MedicalTherapy|array|string|mixed $value
    * @return $this
    */
    public function possibleTreatment($value)
    {
        $this->setProperty('possibleTreatment', $value);
        return $this;
    }

    /**
    * @param MedicalTherapy|array|string|mixed $value
    * @return $this
    */
    public function setPossibleTreatment($value)
    {
        $this->setProperty('possibleTreatment', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPossibleTreatment()
    {
       return $this->getProperty('possibleTreatment');
    }


}
