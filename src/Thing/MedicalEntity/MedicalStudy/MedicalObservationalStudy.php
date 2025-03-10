<?php
namespace Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalStudy;

use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalStudy;

/**
* An observational study is a type of medical study that attempts to infer the
 * possible effect of a treatment through observation of a cohort of subjects
 * over a period of time. In an observational study, the assignment of subjects
 * into treatment groups versus control groups is outside the control of the
 * investigator. This is in contrast with controlled studies, such as the
 * randomized controlled trials represented by MedicalTrial, where each subject
 * is randomly assigned to a treatment group or a control group before the start
 * of the treatment.
* @see schema:MedicalObservationalStudy
* @package Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalStudy
*/
class MedicalObservationalStudy extends MedicalStudy
{


    /**
        * Specifics about the observational study design (enumerated).
        * @param array|string|mixed $value
    * @return $this
    */
    public function studyDesign($value)
    {
        $this->setProperty('studyDesign', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setStudyDesign($value)
    {
        $this->setProperty('studyDesign', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getStudyDesign()
    {
       return $this->getProperty('studyDesign');
    }


}
