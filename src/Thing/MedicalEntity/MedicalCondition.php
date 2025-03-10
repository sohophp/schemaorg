<?php
namespace Sohophp\SchemaOrg\Thing\MedicalEntity;

use Sohophp\SchemaOrg\Thing\MedicalEntity;

/**
* Any condition of the human body that affects the normal functioning of a
 * person, whether physically or mentally. Includes diseases, injuries,
 * disabilities, disorders, syndromes, etc.
* @see schema:MedicalCondition
* @package Sohophp\SchemaOrg\Thing\MedicalEntity
*/
class MedicalCondition extends MedicalEntity
{


    /**
        * The likely outcome in either the short term or long term of the medical
 * condition.
        * @param array|string|mixed $value
    * @return $this
    */
    public function expectedPrognosis($value)
    {
        $this->setProperty('expectedPrognosis', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setExpectedPrognosis($value)
    {
        $this->setProperty('expectedPrognosis', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getExpectedPrognosis()
    {
       return $this->getProperty('expectedPrognosis');
    }


    /**
        * A medical test typically performed given this condition.
        * @param array|string|mixed $value
    * @return $this
    */
    public function typicalTest($value)
    {
        $this->setProperty('typicalTest', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setTypicalTest($value)
    {
        $this->setProperty('typicalTest', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getTypicalTest()
    {
       return $this->getProperty('typicalTest');
    }


    /**
        * The status of the study (enumerated).
        * @param array|string|mixed $value
    * @return $this
    */
    public function status($value)
    {
        $this->setProperty('status', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setStatus($value)
    {
        $this->setProperty('status', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getStatus()
    {
       return $this->getProperty('status');
    }


    /**
        * The characteristics of associated patients, such as age, gender, race etc.
        * @param array|string|mixed $value
    * @return $this
    */
    public function epidemiology($value)
    {
        $this->setProperty('epidemiology', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setEpidemiology($value)
    {
        $this->setProperty('epidemiology', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEpidemiology()
    {
       return $this->getProperty('epidemiology');
    }


    /**
        * A modifiable or non-modifiable factor that increases the risk of a patient
 * contracting this condition, e.g. age,  coexisting condition.
        * @param array|string|mixed $value
    * @return $this
    */
    public function riskFactor($value)
    {
        $this->setProperty('riskFactor', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setRiskFactor($value)
    {
        $this->setProperty('riskFactor', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getRiskFactor()
    {
       return $this->getProperty('riskFactor');
    }


    /**
        * A possible unexpected and unfavorable evolution of a medical condition.
 * Complications may include worsening of the signs or symptoms of the disease,
 * extension of the condition to other organ systems, etc.
        * @param array|string|mixed $value
    * @return $this
    */
    public function possibleComplication($value)
    {
        $this->setProperty('possibleComplication', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setPossibleComplication($value)
    {
        $this->setProperty('possibleComplication', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPossibleComplication()
    {
       return $this->getProperty('possibleComplication');
    }


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


    /**
        * The expected progression of the condition if it is not treated and allowed to
 * progress naturally.
        * @param array|string|mixed $value
    * @return $this
    */
    public function naturalProgression($value)
    {
        $this->setProperty('naturalProgression', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setNaturalProgression($value)
    {
        $this->setProperty('naturalProgression', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getNaturalProgression()
    {
       return $this->getProperty('naturalProgression');
    }


    /**
        * A preventative therapy used to prevent an initial occurrence of the medical
 * condition, such as vaccination.
        * @param array|string|mixed $value
    * @return $this
    */
    public function primaryPrevention($value)
    {
        $this->setProperty('primaryPrevention', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setPrimaryPrevention($value)
    {
        $this->setProperty('primaryPrevention', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPrimaryPrevention()
    {
       return $this->getProperty('primaryPrevention');
    }


    /**
        * Changes in the normal mechanical, physical, and biochemical functions that
 * are associated with this activity or condition.
        * @param array|string|mixed $value
    * @return $this
    */
    public function pathophysiology($value)
    {
        $this->setProperty('pathophysiology', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setPathophysiology($value)
    {
        $this->setProperty('pathophysiology', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPathophysiology()
    {
       return $this->getProperty('pathophysiology');
    }


    /**
        * A preventative therapy used to prevent reoccurrence of the medical condition
 * after an initial episode of the condition.
        * @param array|string|mixed $value
    * @return $this
    */
    public function secondaryPrevention($value)
    {
        $this->setProperty('secondaryPrevention', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setSecondaryPrevention($value)
    {
        $this->setProperty('secondaryPrevention', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSecondaryPrevention()
    {
       return $this->getProperty('secondaryPrevention');
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


    /**
        * The stage of the condition, if applicable.
        * @param array|string|mixed $value
    * @return $this
    */
    public function stage($value)
    {
        $this->setProperty('stage', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setStage($value)
    {
        $this->setProperty('stage', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getStage()
    {
       return $this->getProperty('stage');
    }


    /**
        * The anatomy of the underlying organ system or structures associated with this
 * entity.
        * @param array|string|mixed $value
    * @return $this
    */
    public function associatedAnatomy($value)
    {
        $this->setProperty('associatedAnatomy', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setAssociatedAnatomy($value)
    {
        $this->setProperty('associatedAnatomy', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAssociatedAnatomy()
    {
       return $this->getProperty('associatedAnatomy');
    }


    /**
        * One of a set of differential diagnoses for the condition. Specifically, a
 * closely-related or competing diagnosis typically considered later in the
 * cognitive process whereby this medical condition is distinguished from others
 * most likely responsible for a similar collection of signs and symptoms to
 * reach the most parsimonious diagnosis or diagnoses in a patient.
        * @param array|string|mixed $value
    * @return $this
    */
    public function differentialDiagnosis($value)
    {
        $this->setProperty('differentialDiagnosis', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setDifferentialDiagnosis($value)
    {
        $this->setProperty('differentialDiagnosis', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDifferentialDiagnosis()
    {
       return $this->getProperty('differentialDiagnosis');
    }


    /**
        * A sign or symptom of this condition. Signs are objective or physically
 * observable manifestations of the medical condition while symptoms are the
 * subjective experience of the medical condition.
        * @param array|string|mixed $value
    * @return $this
    */
    public function signOrSymptom($value)
    {
        $this->setProperty('signOrSymptom', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setSignOrSymptom($value)
    {
        $this->setProperty('signOrSymptom', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSignOrSymptom()
    {
       return $this->getProperty('signOrSymptom');
    }


}
