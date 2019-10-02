<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalStudy;

use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalStudy;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalTrialDesign;

/**
* A medical trial is a type of medical study that uses scientific process used to compare the safety and efficacy of medical therapies or medical procedures. In general, medical trials are controlled and subjects are allocated at random to the different treatment and/or control groups.
* @see http://schema.org/MedicalTrial
* @package Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalStudy
*/
class MedicalTrial extends MedicalStudy
{

    /**
    * The phase of the clinical trial.
    * @param string $value
    * @return $this
    */
    public function phase(?string $value)
    {
        $this->setProperty('phase', $value);
        return $this;
    }

    /**
    * Specifics about the trial design (enumerated).
    * @param MedicalTrialDesign $value
    * @return $this
    */
    public function trialDesign(?MedicalTrialDesign $value)
    {
        $this->setProperty('trialDesign', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\MedicalEntity\\MedicalStudy\\MedicalTrial','Thing\\MedicalTrial');

