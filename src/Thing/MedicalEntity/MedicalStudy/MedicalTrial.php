<?php
namespace Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalStudy;

use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalStudy;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalTrialDesign;

/**
* A medical trial is a type of medical study that uses scientific process used to compare the safety and efficacy of medical therapies or medical procedures. In general, medical trials are controlled and subjects are allocated at random to the different treatment and/or control groups.
* @see http://schema.org/MedicalTrial
* @package Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalStudy

*
*/
class MedicalTrial extends MedicalStudy
{

    /**
    * The phase of the clinical trial.
    * @param string|array $value
    * @return $this
    * @deprecated use setPhase
    */
    public function phase($value)
    {
        $this->setProperty('phase', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setPhase($value)
    {
        $this->setProperty('phase', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getPhase()
    {
       return $this->getProperty('phase');
    }

    /**
    * Specifics about the trial design (enumerated).
    * @param MedicalTrialDesign|array|string $value
    * @return $this
    * @deprecated use setTrialDesign
    */
    public function trialDesign($value)
    {
        $this->setProperty('trialDesign', $value);
        return $this;
    }
   /**
    * @param MedicalTrialDesign|array|string $value
    * @return $this
    */
    public function setTrialDesign($value)
    {
        $this->setProperty('trialDesign', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getTrialDesign()
    {
       return $this->getProperty('trialDesign');
    }


}
