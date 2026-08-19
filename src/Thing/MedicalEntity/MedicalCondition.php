<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\MedicalEntity;

use Sohophp\SchemaOrg\Thing\MedicalEntity;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalCause;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalTest;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\StatusEnumeration\EventStatusType;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalStudyStatus;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalConditionStage;
use Sohophp\SchemaOrg\Thing\MedicalEntity\SuperficialAnatomy;
use Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure;
use Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalSystem;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalProcedure\TherapeuticProcedure\MedicalTherapy;
use Sohophp\SchemaOrg\Thing\MedicalEntity\DrugClass;
use Sohophp\SchemaOrg\Thing\MedicalEntity\LifestyleModification;
use Sohophp\SchemaOrg\Thing\Product\Drug;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalRiskFactor;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalCondition\MedicalSignOrSymptom;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\DDxElement;

/**
 * Any condition of the human body that affects the normal functioning of a person, whether physically or mentally. Includes diseases, injuries, disabilities, disorders, syndromes, etc.
 * @see https://schema.org/MedicalCondition
 * @package Sohophp\SchemaOrg\Thing\MedicalEntity
 */
class MedicalCondition extends MedicalEntity
{
    /**
     * The cause of a medical condition.
     * @see https://schema.org/cause
     * @param MedicalCause|array $value
     * @return $this
     */
    public function cause($value)
    {
        $this->setProperty('cause', $value);
        return $this;
    }

    /**
     * @param MedicalCause|array $value
     * @return $this
     */
    public function setCause($value)
    {
        $this->setProperty('cause', $value);
        return $this;
    }

    /**
     * @param MedicalCause $value
     * @return $this
     */
    public function addCause($value)
    {
        $current = $this->getProperty('cause');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('cause', $current);
        return $this;
    }

    /**
     * @return MedicalCause|array
     */
    public function getCause()
    {
        return $this->getProperty('cause');
    }
    /**
     * A possible unexpected and unfavorable evolution of a medical condition. Complications may include worsening of the signs or symptoms of the disease, extension of the condition to other organ systems, etc.
     * @see https://schema.org/possibleComplication
     * @param string|array $value
     * @return $this
     */
    public function possibleComplication($value)
    {
        $this->setProperty('possibleComplication', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setPossibleComplication($value)
    {
        $this->setProperty('possibleComplication', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addPossibleComplication($value)
    {
        $current = $this->getProperty('possibleComplication');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('possibleComplication', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getPossibleComplication()
    {
        return $this->getProperty('possibleComplication');
    }
    /**
     * The expected progression of the condition if it is not treated and allowed to progress naturally.
     * @see https://schema.org/naturalProgression
     * @param string|array $value
     * @return $this
     */
    public function naturalProgression($value)
    {
        $this->setProperty('naturalProgression', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setNaturalProgression($value)
    {
        $this->setProperty('naturalProgression', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addNaturalProgression($value)
    {
        $current = $this->getProperty('naturalProgression');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('naturalProgression', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getNaturalProgression()
    {
        return $this->getProperty('naturalProgression');
    }
    /**
     * A medical test typically performed given this condition.
     * @see https://schema.org/typicalTest
     * @param MedicalTest|array $value
     * @return $this
     */
    public function typicalTest($value)
    {
        $this->setProperty('typicalTest', $value);
        return $this;
    }

    /**
     * @param MedicalTest|array $value
     * @return $this
     */
    public function setTypicalTest($value)
    {
        $this->setProperty('typicalTest', $value);
        return $this;
    }

    /**
     * @param MedicalTest $value
     * @return $this
     */
    public function addTypicalTest($value)
    {
        $current = $this->getProperty('typicalTest');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('typicalTest', $current);
        return $this;
    }

    /**
     * @return MedicalTest|array
     */
    public function getTypicalTest()
    {
        return $this->getProperty('typicalTest');
    }
    /**
     * The status of the study (enumerated).
     * @see https://schema.org/status
     * @param EventStatusType|MedicalStudyStatus|string|array $value
     * @return $this
     */
    public function status($value)
    {
        $this->setProperty('status', $value);
        return $this;
    }

    /**
     * @param EventStatusType|MedicalStudyStatus|string|array $value
     * @return $this
     */
    public function setStatus($value)
    {
        $this->setProperty('status', $value);
        return $this;
    }

    /**
     * @param EventStatusType|MedicalStudyStatus|string $value
     * @return $this
     */
    public function addStatus($value)
    {
        $current = $this->getProperty('status');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('status', $current);
        return $this;
    }

    /**
     * @return EventStatusType|MedicalStudyStatus|string|array
     */
    public function getStatus()
    {
        return $this->getProperty('status');
    }
    /**
     * The stage of the condition, if applicable.
     * @see https://schema.org/stage
     * @param MedicalConditionStage|array $value
     * @return $this
     */
    public function stage($value)
    {
        $this->setProperty('stage', $value);
        return $this;
    }

    /**
     * @param MedicalConditionStage|array $value
     * @return $this
     */
    public function setStage($value)
    {
        $this->setProperty('stage', $value);
        return $this;
    }

    /**
     * @param MedicalConditionStage $value
     * @return $this
     */
    public function addStage($value)
    {
        $current = $this->getProperty('stage');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('stage', $current);
        return $this;
    }

    /**
     * @return MedicalConditionStage|array
     */
    public function getStage()
    {
        return $this->getProperty('stage');
    }
    /**
     * The anatomy of the underlying organ system or structures associated with this entity.
     * @see https://schema.org/associatedAnatomy
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
     * @param SuperficialAnatomy|AnatomicalStructure|AnatomicalSystem $value
     * @return $this
     */
    public function addAssociatedAnatomy($value)
    {
        $current = $this->getProperty('associatedAnatomy');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('associatedAnatomy', $current);
        return $this;
    }

    /**
     * @return SuperficialAnatomy|AnatomicalStructure|AnatomicalSystem|array
     */
    public function getAssociatedAnatomy()
    {
        return $this->getProperty('associatedAnatomy');
    }
    /**
     * A preventative therapy used to prevent an initial occurrence of the medical condition, such as vaccination.
     * @see https://schema.org/primaryPrevention
     * @param MedicalTherapy|array $value
     * @return $this
     */
    public function primaryPrevention($value)
    {
        $this->setProperty('primaryPrevention', $value);
        return $this;
    }

    /**
     * @param MedicalTherapy|array $value
     * @return $this
     */
    public function setPrimaryPrevention($value)
    {
        $this->setProperty('primaryPrevention', $value);
        return $this;
    }

    /**
     * @param MedicalTherapy $value
     * @return $this
     */
    public function addPrimaryPrevention($value)
    {
        $current = $this->getProperty('primaryPrevention');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('primaryPrevention', $current);
        return $this;
    }

    /**
     * @return MedicalTherapy|array
     */
    public function getPrimaryPrevention()
    {
        return $this->getProperty('primaryPrevention');
    }
    /**
     * The characteristics of associated patients, such as age, gender, race etc.
     * @see https://schema.org/epidemiology
     * @param string|array $value
     * @return $this
     */
    public function epidemiology($value)
    {
        $this->setProperty('epidemiology', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setEpidemiology($value)
    {
        $this->setProperty('epidemiology', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addEpidemiology($value)
    {
        $current = $this->getProperty('epidemiology');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('epidemiology', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getEpidemiology()
    {
        return $this->getProperty('epidemiology');
    }
    /**
     * The likely outcome in either the short term or long term of the medical condition.
     * @see https://schema.org/expectedPrognosis
     * @param string|array $value
     * @return $this
     */
    public function expectedPrognosis($value)
    {
        $this->setProperty('expectedPrognosis', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setExpectedPrognosis($value)
    {
        $this->setProperty('expectedPrognosis', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addExpectedPrognosis($value)
    {
        $current = $this->getProperty('expectedPrognosis');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('expectedPrognosis', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getExpectedPrognosis()
    {
        return $this->getProperty('expectedPrognosis');
    }
    /**
     * A preventative therapy used to prevent reoccurrence of the medical condition after an initial episode of the condition.
     * @see https://schema.org/secondaryPrevention
     * @param DrugClass|LifestyleModification|MedicalTherapy|Drug|array $value
     * @return $this
     */
    public function secondaryPrevention($value)
    {
        $this->setProperty('secondaryPrevention', $value);
        return $this;
    }

    /**
     * @param DrugClass|LifestyleModification|MedicalTherapy|Drug|array $value
     * @return $this
     */
    public function setSecondaryPrevention($value)
    {
        $this->setProperty('secondaryPrevention', $value);
        return $this;
    }

    /**
     * @param DrugClass|LifestyleModification|MedicalTherapy|Drug $value
     * @return $this
     */
    public function addSecondaryPrevention($value)
    {
        $current = $this->getProperty('secondaryPrevention');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('secondaryPrevention', $current);
        return $this;
    }

    /**
     * @return DrugClass|LifestyleModification|MedicalTherapy|Drug|array
     */
    public function getSecondaryPrevention()
    {
        return $this->getProperty('secondaryPrevention');
    }
    /**
     * A modifiable or non-modifiable factor that increases the risk of a patient contracting this condition, e.g. age, coexisting condition.
     * @see https://schema.org/riskFactor
     * @param MedicalRiskFactor|array $value
     * @return $this
     */
    public function riskFactor($value)
    {
        $this->setProperty('riskFactor', $value);
        return $this;
    }

    /**
     * @param MedicalRiskFactor|array $value
     * @return $this
     */
    public function setRiskFactor($value)
    {
        $this->setProperty('riskFactor', $value);
        return $this;
    }

    /**
     * @param MedicalRiskFactor $value
     * @return $this
     */
    public function addRiskFactor($value)
    {
        $current = $this->getProperty('riskFactor');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('riskFactor', $current);
        return $this;
    }

    /**
     * @return MedicalRiskFactor|array
     */
    public function getRiskFactor()
    {
        return $this->getProperty('riskFactor');
    }
    /**
     * Specifying a drug or medicine used in a medication procedure.
     * @see https://schema.org/drug
     * @param Drug|array $value
     * @return $this
     */
    public function drug($value)
    {
        $this->setProperty('drug', $value);
        return $this;
    }

    /**
     * @param Drug|array $value
     * @return $this
     */
    public function setDrug($value)
    {
        $this->setProperty('drug', $value);
        return $this;
    }

    /**
     * @param Drug $value
     * @return $this
     */
    public function addDrug($value)
    {
        $current = $this->getProperty('drug');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('drug', $current);
        return $this;
    }

    /**
     * @return Drug|array
     */
    public function getDrug()
    {
        return $this->getProperty('drug');
    }
    /**
     * A possible treatment to address this condition, sign or symptom.
     * @see https://schema.org/possibleTreatment
     * @param MedicalTherapy|Drug|LifestyleModification|DrugClass|array $value
     * @return $this
     */
    public function possibleTreatment($value)
    {
        $this->setProperty('possibleTreatment', $value);
        return $this;
    }

    /**
     * @param MedicalTherapy|Drug|LifestyleModification|DrugClass|array $value
     * @return $this
     */
    public function setPossibleTreatment($value)
    {
        $this->setProperty('possibleTreatment', $value);
        return $this;
    }

    /**
     * @param MedicalTherapy|Drug|LifestyleModification|DrugClass $value
     * @return $this
     */
    public function addPossibleTreatment($value)
    {
        $current = $this->getProperty('possibleTreatment');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('possibleTreatment', $current);
        return $this;
    }

    /**
     * @return MedicalTherapy|Drug|LifestyleModification|DrugClass|array
     */
    public function getPossibleTreatment()
    {
        return $this->getProperty('possibleTreatment');
    }
    /**
     * A sign or symptom of this condition. Signs are objective or physically observable manifestations of the medical condition while symptoms are the subjective experience of the medical condition.
     * @see https://schema.org/signOrSymptom
     * @param MedicalSignOrSymptom|array $value
     * @return $this
     */
    public function signOrSymptom($value)
    {
        $this->setProperty('signOrSymptom', $value);
        return $this;
    }

    /**
     * @param MedicalSignOrSymptom|array $value
     * @return $this
     */
    public function setSignOrSymptom($value)
    {
        $this->setProperty('signOrSymptom', $value);
        return $this;
    }

    /**
     * @param MedicalSignOrSymptom $value
     * @return $this
     */
    public function addSignOrSymptom($value)
    {
        $current = $this->getProperty('signOrSymptom');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('signOrSymptom', $current);
        return $this;
    }

    /**
     * @return MedicalSignOrSymptom|array
     */
    public function getSignOrSymptom()
    {
        return $this->getProperty('signOrSymptom');
    }
    /**
     * One of a set of differential diagnoses for the condition. Specifically, a closely-related or competing diagnosis typically considered later in the cognitive process whereby this medical condition is distinguished from others most likely responsible for a similar collection of signs and symptoms to reach the most parsimonious diagnosis or diagnoses in a patient.
     * @see https://schema.org/differentialDiagnosis
     * @param DDxElement|array $value
     * @return $this
     */
    public function differentialDiagnosis($value)
    {
        $this->setProperty('differentialDiagnosis', $value);
        return $this;
    }

    /**
     * @param DDxElement|array $value
     * @return $this
     */
    public function setDifferentialDiagnosis($value)
    {
        $this->setProperty('differentialDiagnosis', $value);
        return $this;
    }

    /**
     * @param DDxElement $value
     * @return $this
     */
    public function addDifferentialDiagnosis($value)
    {
        $current = $this->getProperty('differentialDiagnosis');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('differentialDiagnosis', $current);
        return $this;
    }

    /**
     * @return DDxElement|array
     */
    public function getDifferentialDiagnosis()
    {
        return $this->getProperty('differentialDiagnosis');
    }
    /**
     * Changes in the normal mechanical, physical, and biochemical functions that are associated with this activity or condition.
     * @see https://schema.org/pathophysiology
     * @param string|array $value
     * @return $this
     */
    public function pathophysiology($value)
    {
        $this->setProperty('pathophysiology', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setPathophysiology($value)
    {
        $this->setProperty('pathophysiology', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addPathophysiology($value)
    {
        $current = $this->getProperty('pathophysiology');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('pathophysiology', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getPathophysiology()
    {
        return $this->getProperty('pathophysiology');
    }
}
