<?php
namespace Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Vessel;

  use Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Vessel;
  use Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalSystem;
  use Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure;

/**
  * A type of blood vessel that specifically carries lymph fluid unidirectionally
 * toward the heart.
  * @see schema:LymphaticVessel
* @package Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Vessel
*/
class LymphaticVessel extends Vessel
{


  /**
      * The vasculature the lymphatic structure originates, or afferents, from.
    * @param Vessel|array $value
  * @return $this
  */
  public function originatesFrom($value)
  {
  $this->setProperty('originatesFrom', $value);
  return $this;
  }

  /**
  * @param Vessel|array $value
  * @return $this
  */
  public function setOriginatesFrom($value)
  {
  $this->setProperty('originatesFrom', $value);
  return $this;
  }

  /**
  * @param Vessel $value
  * @return $this
  */
  public function addOriginatesFrom($value)
  {
  $current = $this->getProperty('originatesFrom');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('originatesFrom', $current);
  return $this;
  }

  /**
  * @return Vessel|array
  */
  public function getOriginatesFrom()
  {
  return $this->getProperty('originatesFrom');
  }


  /**
      * The anatomical or organ system drained by this vessel; generally refers to a
 * specific part of an organ.
    * @param AnatomicalSystem|AnatomicalStructure|array $value
  * @return $this
  */
  public function regionDrained($value)
  {
  $this->setProperty('regionDrained', $value);
  return $this;
  }

  /**
  * @param AnatomicalSystem|AnatomicalStructure|array $value
  * @return $this
  */
  public function setRegionDrained($value)
  {
  $this->setProperty('regionDrained', $value);
  return $this;
  }

  /**
  * @param AnatomicalSystem|AnatomicalStructure $value
  * @return $this
  */
  public function addRegionDrained($value)
  {
  $current = $this->getProperty('regionDrained');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('regionDrained', $current);
  return $this;
  }

  /**
  * @return AnatomicalSystem|AnatomicalStructure|array
  */
  public function getRegionDrained()
  {
  return $this->getProperty('regionDrained');
  }


  /**
      * The vasculature the lymphatic structure runs, or efferents, to.
    * @param Vessel|array $value
  * @return $this
  */
  public function runsTo($value)
  {
  $this->setProperty('runsTo', $value);
  return $this;
  }

  /**
  * @param Vessel|array $value
  * @return $this
  */
  public function setRunsTo($value)
  {
  $this->setProperty('runsTo', $value);
  return $this;
  }

  /**
  * @param Vessel $value
  * @return $this
  */
  public function addRunsTo($value)
  {
  $current = $this->getProperty('runsTo');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('runsTo', $current);
  return $this;
  }

  /**
  * @return Vessel|array
  */
  public function getRunsTo()
  {
  return $this->getProperty('runsTo');
  }


}
