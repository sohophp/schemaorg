<?php
namespace Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalStudy;

  use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalStudy;
  use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalTrialDesign;

/**
  * A medical trial is a type of medical study that uses a scientific process to
 * compare the safety and efficacy of medical therapies or medical procedures.
 * In general, medical trials are controlled and subjects are allocated at
 * random to the different treatment and/or control groups.
  * @see schema:MedicalTrial
* @package Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalStudy
*/
class MedicalTrial extends MedicalStudy
{


  /**
      * Specifics about the trial design (enumerated).
    * @param MedicalTrialDesign|array $value
  * @return $this
  */
  public function trialDesign($value)
  {
  $this->setProperty('trialDesign', $value);
  return $this;
  }

  /**
  * @param MedicalTrialDesign|array $value
  * @return $this
  */
  public function setTrialDesign($value)
  {
  $this->setProperty('trialDesign', $value);
  return $this;
  }

  /**
  * @param MedicalTrialDesign $value
  * @return $this
  */
  public function addTrialDesign($value)
  {
  $current = $this->getProperty('trialDesign');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('trialDesign', $current);
  return $this;
  }

  /**
  * @return MedicalTrialDesign|array
  */
  public function getTrialDesign()
  {
  return $this->getProperty('trialDesign');
  }


}
