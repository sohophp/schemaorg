<?php
namespace Sohophp\SchemaOrg\Thing\MedicalEntity;

use Sohophp\SchemaOrg\Thing\MedicalEntity;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalCause;
use Sohophp\SchemaOrg\Thing\MedicalEntity\Substance\Drug;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalCondition\MedicalSignOrSymptom;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalProcedure\TherapeuticProcedure\MedicalTherapy;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\EventStatusType;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalStudyStatus;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalRiskFactor;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\DDxElement;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalTest;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalConditionStage;
use Sohophp\SchemaOrg\Thing\MedicalEntity\SuperficialAnatomy;
use Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure;
use Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalSystem;

/**
* Any condition of the human body that affects the normal functioning of a person, whether physically or mentally. Includes diseases, injuries, disabilities, disorders, syndromes, etc.
* @see http://schema.org/MedicalCondition
* @package Sohophp\SchemaOrg\Thing\MedicalEntity

*
*/
class MedicalCondition extends MedicalEntity
{

    /**
    * Specifying a cause of something in general. e.g in medicine , one of the causative agent(s) that are most directly responsible for the pathophysiologic process that eventually results in the occurrence.
    * @param MedicalCause|array $value
    * @return $this
    */
    public function cause(?MedicalCause $value)
    {
        $this->setProperty('cause', $value);
        return $this;
    }
   /**
    * @param MedicalCause|array $value
    * @return $this
    */
    public function setCause(?MedicalCause $value)
    {
        $this->setProperty('cause', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getCause()
    {
       return $this->getProperty('cause');
    }

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
    * A sign or symptom of this condition. Signs are objective or physically observable manifestations of the medical condition while symptoms are the subjective experience of the medical condition.
    * @param MedicalSignOrSymptom|array $value
    * @return $this
    */
    public function signOrSymptom(?MedicalSignOrSymptom $value)
    {
        $this->setProperty('signOrSymptom', $value);
        return $this;
    }
   /**
    * @param MedicalSignOrSymptom|array $value
    * @return $this
    */
    public function setSignOrSymptom(?MedicalSignOrSymptom $value)
    {
        $this->setProperty('signOrSymptom', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getSignOrSymptom()
    {
       return $this->getProperty('signOrSymptom');
    }

    /**
    * The expected progression of the condition if it is not treated and allowed to progress naturally.
    * @param string|array $value
    * @return $this
    */
    public function naturalProgression(?string $value)
    {
        $this->setProperty('naturalProgression', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setNaturalProgression(?string $value)
    {
        $this->setProperty('naturalProgression', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getNaturalProgression()
    {
       return $this->getProperty('naturalProgression');
    }

    /**
    * A preventative therapy used to prevent an initial occurrence of the medical condition, such as vaccination.
    * @param MedicalTherapy|array $value
    * @return $this
    */
    public function primaryPrevention(?MedicalTherapy $value)
    {
        $this->setProperty('primaryPrevention', $value);
        return $this;
    }
   /**
    * @param MedicalTherapy|array $value
    * @return $this
    */
    public function setPrimaryPrevention(?MedicalTherapy $value)
    {
        $this->setProperty('primaryPrevention', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getPrimaryPrevention()
    {
       return $this->getProperty('primaryPrevention');
    }

    /**
    * The status of the study (enumerated).
    * @param EventStatusType|string|MedicalStudyStatus|array $value
    * @return $this
    */
    public function status($value)
    {
        $this->setProperty('status', $value);
        return $this;
    }
   /**
    * @param EventStatusType|string|MedicalStudyStatus|array $value
    * @return $this
    */
    public function setStatus($value)
    {
        $this->setProperty('status', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getStatus()
    {
       return $this->getProperty('status');
    }

    /**
    * A modifiable or non-modifiable factor that increases the risk of a patient contracting this condition, e.g. age,  coexisting condition.
    * @param MedicalRiskFactor|array $value
    * @return $this
    */
    public function riskFactor(?MedicalRiskFactor $value)
    {
        $this->setProperty('riskFactor', $value);
        return $this;
    }
   /**
    * @param MedicalRiskFactor|array $value
    * @return $this
    */
    public function setRiskFactor(?MedicalRiskFactor $value)
    {
        $this->setProperty('riskFactor', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getRiskFactor()
    {
       return $this->getProperty('riskFactor');
    }

    /**
    * A more specific type of the condition, where applicable, for example 'Type 1 Diabetes', 'Type 2 Diabetes', or 'Gestational Diabetes' for Diabetes.
    * @param string|array $value
    * @return $this
    */
    public function subtype(?string $value)
    {
        $this->setProperty('subtype', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setSubtype(?string $value)
    {
        $this->setProperty('subtype', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getSubtype()
    {
       return $this->getProperty('subtype');
    }

    /**
    * The likely outcome in either the short term or long term of the medical condition.
    * @param string|array $value
    * @return $this
    */
    public function expectedPrognosis(?string $value)
    {
        $this->setProperty('expectedPrognosis', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setExpectedPrognosis(?string $value)
    {
        $this->setProperty('expectedPrognosis', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getExpectedPrognosis()
    {
       return $this->getProperty('expectedPrognosis');
    }

    /**
    * A preventative therapy used to prevent reoccurrence of the medical condition after an initial episode of the condition.
    * @param MedicalTherapy|array $value
    * @return $this
    */
    public function secondaryPrevention(?MedicalTherapy $value)
    {
        $this->setProperty('secondaryPrevention', $value);
        return $this;
    }
   /**
    * @param MedicalTherapy|array $value
    * @return $this
    */
    public function setSecondaryPrevention(?MedicalTherapy $value)
    {
        $this->setProperty('secondaryPrevention', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getSecondaryPrevention()
    {
       return $this->getProperty('secondaryPrevention');
    }

    /**
    * One of a set of differential diagnoses for the condition. Specifically, a closely-related or competing diagnosis typically considered later in the cognitive process whereby this medical condition is distinguished from others most likely responsible for a similar collection of signs and symptoms to reach the most parsimonious diagnosis or diagnoses in a patient.
    * @param DDxElement|array $value
    * @return $this
    */
    public function differentialDiagnosis(?DDxElement $value)
    {
        $this->setProperty('differentialDiagnosis', $value);
        return $this;
    }
   /**
    * @param DDxElement|array $value
    * @return $this
    */
    public function setDifferentialDiagnosis(?DDxElement $value)
    {
        $this->setProperty('differentialDiagnosis', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getDifferentialDiagnosis()
    {
       return $this->getProperty('differentialDiagnosis');
    }

    /**
    * A medical test typically performed given this condition.
    * @param MedicalTest|array $value
    * @return $this
    */
    public function typicalTest(?MedicalTest $value)
    {
        $this->setProperty('typicalTest', $value);
        return $this;
    }
   /**
    * @param MedicalTest|array $value
    * @return $this
    */
    public function setTypicalTest(?MedicalTest $value)
    {
        $this->setProperty('typicalTest', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getTypicalTest()
    {
       return $this->getProperty('typicalTest');
    }

    /**
    * The stage of the condition, if applicable.
    * @param MedicalConditionStage|array $value
    * @return $this
    */
    public function stage(?MedicalConditionStage $value)
    {
        $this->setProperty('stage', $value);
        return $this;
    }
   /**
    * @param MedicalConditionStage|array $value
    * @return $this
    */
    public function setStage(?MedicalConditionStage $value)
    {
        $this->setProperty('stage', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getStage()
    {
       return $this->getProperty('stage');
    }

    /**
    * A possible unexpected and unfavorable evolution of a medical condition. Complications may include worsening of the signs or symptoms of the disease, extension of the condition to other organ systems, etc.
    * @param string|array $value
    * @return $this
    */
    public function possibleComplication(?string $value)
    {
        $this->setProperty('possibleComplication', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setPossibleComplication(?string $value)
    {
        $this->setProperty('possibleComplication', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getPossibleComplication()
    {
       return $this->getProperty('possibleComplication');
    }

    /**
    * The anatomy of the underlying organ system or structures associated with this entity.
    * @param SuperficialAnatomy|AnatomicalStructure|AnatomicalSystem|array $value
    * @return $this
    */
    public function associatedAnatomy($value)
    {
        $this->setProperty('associatedAnatomy', $value);
        return $this;
    }
   /**
    * @param SuperficialAnatomy|AnatomicalStructure|AnatomicalSystem|array $value
    * @return $this
    */
    public function setAssociatedAnatomy($value)
    {
        $this->setProperty('associatedAnatomy', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAssociatedAnatomy()
    {
       return $this->getProperty('associatedAnatomy');
    }

    /**
    * The characteristics of associated patients, such as age, gender, race etc.
    * @param string|array $value
    * @return $this
    */
    public function epidemiology(?string $value)
    {
        $this->setProperty('epidemiology', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setEpidemiology(?string $value)
    {
        $this->setProperty('epidemiology', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getEpidemiology()
    {
       return $this->getProperty('epidemiology');
    }

    /**
    * Changes in the normal mechanical, physical, and biochemical functions that are associated with this activity or condition.
    * @param string|array $value
    * @return $this
    */
    public function pathophysiology(?string $value)
    {
        $this->setProperty('pathophysiology', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setPathophysiology(?string $value)
    {
        $this->setProperty('pathophysiology', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getPathophysiology()
    {
       return $this->getProperty('pathophysiology');
    }

    /**
    * A possible treatment to address this condition, sign or symptom.
    * @param MedicalTherapy|array $value
    * @return $this
    */
    public function possibleTreatment(?MedicalTherapy $value)
    {
        $this->setProperty('possibleTreatment', $value);
        return $this;
    }
   /**
    * @param MedicalTherapy|array $value
    * @return $this
    */
    public function setPossibleTreatment(?MedicalTherapy $value)
    {
        $this->setProperty('possibleTreatment', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getPossibleTreatment()
    {
       return $this->getProperty('possibleTreatment');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\MedicalEntity\\MedicalCondition','Thing\\MedicalCondition');

