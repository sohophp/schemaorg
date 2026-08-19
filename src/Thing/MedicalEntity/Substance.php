<?php
namespace Sohophp\SchemaOrg\Thing\MedicalEntity;

  use Sohophp\SchemaOrg\Thing\MedicalEntity;
  use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\DoseSchedule\MaximumDoseSchedule;

/**
  * Any matter of defined composition that has discrete existence, whose origin
 * may be biological, mineral or chemical.
  * @see schema:Substance
* @package Sohophp\SchemaOrg\Thing\MedicalEntity
*/
class Substance extends MedicalEntity
{


  /**
      * An active ingredient, typically chemical compounds and/or biologic
 * substances.
    * @param string|array $value
  * @return $this
  */
  public function activeIngredient($value)
  {
  $this->setProperty('activeIngredient', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setActiveIngredient($value)
  {
  $this->setProperty('activeIngredient', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addActiveIngredient($value)
  {
  $current = $this->getProperty('activeIngredient');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('activeIngredient', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getActiveIngredient()
  {
  return $this->getProperty('activeIngredient');
  }


  /**
      * Recommended intake of this supplement for a given population as defined by a
 * specific recommending authority.
    * @param MaximumDoseSchedule|array $value
  * @return $this
  */
  public function maximumIntake($value)
  {
  $this->setProperty('maximumIntake', $value);
  return $this;
  }

  /**
  * @param MaximumDoseSchedule|array $value
  * @return $this
  */
  public function setMaximumIntake($value)
  {
  $this->setProperty('maximumIntake', $value);
  return $this;
  }

  /**
  * @param MaximumDoseSchedule $value
  * @return $this
  */
  public function addMaximumIntake($value)
  {
  $current = $this->getProperty('maximumIntake');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('maximumIntake', $current);
  return $this;
  }

  /**
  * @return MaximumDoseSchedule|array
  */
  public function getMaximumIntake()
  {
  return $this->getProperty('maximumIntake');
  }


}
