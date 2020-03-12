<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalStudy;

use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalStudy;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalObservationalStudyDesign;

/**
* An observational study is a type of medical study that attempts to infer the possible effect of a treatment through observation of a cohort of subjects over a period of time. In an observational study, the assignment of subjects into treatment groups versus control groups is outside the control of the investigator. This is in contrast with controlled studies, such as the randomized controlled trials represented by MedicalTrial, where each subject is randomly assigned to a treatment group or a control group before the start of the treatment.
* @see http://schema.org/MedicalObservationalStudy
* @package Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalStudy

*
*/
class MedicalObservationalStudy extends MedicalStudy
{

    /**
    * Specifics about the observational study design (enumerated).
    * @param MedicalObservationalStudyDesign|array $value
    * @return $this
    */
    public function studyDesign(?MedicalObservationalStudyDesign $value)
    {
        $this->setProperty('studyDesign', $value);
        return $this;
    }
   /**
    * @param MedicalObservationalStudyDesign|array $value
    * @return $this
    */
    public function setStudyDesign(?MedicalObservationalStudyDesign $value)
    {
        $this->setProperty('studyDesign', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getStudyDesign()
    {
       return $this->getProperty('studyDesign');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\MedicalEntity\\MedicalStudy\\MedicalObservationalStudy','Thing\\MedicalObservationalStudy');

