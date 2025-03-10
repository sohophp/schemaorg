<?php
namespace Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalCondition;

use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalCondition;

/**
* Any feature associated or not with a medical condition. In medicine a symptom
 * is generally subjective while a sign is objective.
* @see schema:MedicalSignOrSymptom
* @package Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalCondition
*/
class MedicalSignOrSymptom extends MedicalCondition
{


    /**
        * A possible treatment to address this condition, sign or symptom.
        * @param array|string|mixed $value
    * @return $this
    */
    public function possibleTreatment($value)
    {
        $this->setProperty('possibleTreatment', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
