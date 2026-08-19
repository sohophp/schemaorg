<?php
namespace Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalProcedure;

  use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalProcedure;
  use Sohophp\SchemaOrg\Thing\MedicalEntity;
  use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\DoseSchedule;
  use Sohophp\SchemaOrg\Thing\Product\Drug;

/**
  * A medical procedure intended primarily for therapeutic purposes, aimed at
 * improving a health condition.
  * @see schema:TherapeuticProcedure
* @package Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalProcedure
*/
class TherapeuticProcedure extends MedicalProcedure
{


  /**
      * A possible complication and/or side effect of this therapy. If it is known
 * that an adverse outcome is serious (resulting in death, disability, or
 * permanent damage; requiring hospitalization; or otherwise life-threatening or
 * requiring immediate medical attention), tag it as a seriousAdverseOutcome
 * instead.
    * @param MedicalEntity|array $value
  * @return $this
  */
  public function adverseOutcome($value)
  {
  $this->setProperty('adverseOutcome', $value);
  return $this;
  }

  /**
  * @param MedicalEntity|array $value
  * @return $this
  */
  public function setAdverseOutcome($value)
  {
  $this->setProperty('adverseOutcome', $value);
  return $this;
  }

  /**
  * @param MedicalEntity $value
  * @return $this
  */
  public function addAdverseOutcome($value)
  {
  $current = $this->getProperty('adverseOutcome');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('adverseOutcome', $current);
  return $this;
  }

  /**
  * @return MedicalEntity|array
  */
  public function getAdverseOutcome()
  {
  return $this->getProperty('adverseOutcome');
  }


  /**
      * A dosing schedule for the drug for a given population, either observed,
 * recommended, or maximum dose based on the type used.
    * @param DoseSchedule|array $value
  * @return $this
  */
  public function doseSchedule($value)
  {
  $this->setProperty('doseSchedule', $value);
  return $this;
  }

  /**
  * @param DoseSchedule|array $value
  * @return $this
  */
  public function setDoseSchedule($value)
  {
  $this->setProperty('doseSchedule', $value);
  return $this;
  }

  /**
  * @param DoseSchedule $value
  * @return $this
  */
  public function addDoseSchedule($value)
  {
  $current = $this->getProperty('doseSchedule');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('doseSchedule', $current);
  return $this;
  }

  /**
  * @return DoseSchedule|array
  */
  public function getDoseSchedule()
  {
  return $this->getProperty('doseSchedule');
  }


  /**
      * Specifying a drug or medicine used in a medication procedure.
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


}
