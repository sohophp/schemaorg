<?php
namespace Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalStudy;

use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalStudy;

/**
* A medical trial is a type of medical study that uses a scientific process to compare the safety and efficacy of medical therapies or medical procedures. In general, medical trials are controlled and subjects are allocated at random to the different treatment and/or control groups.
* @see schema:MedicalTrial
* @package Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalStudy
*/
class MedicalTrial extends MedicalStudy
{
   /**
        * Specifics about the trial design (enumerated).
        */
    protected $trialDesign = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setTrialDesign($value)
    {
        $this->setProperty('trialDesign', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getTrialDesign()
    {
       return $this->getProperty('trialDesign');
    }


}
