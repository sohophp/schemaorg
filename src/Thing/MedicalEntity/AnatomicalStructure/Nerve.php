<?php
namespace Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure;

  use Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure;
  use Sohophp\SchemaOrg\Thing\MedicalEntity\SuperficialAnatomy;
  use Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\BrainStructure;
  use Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Muscle;

/**
  * A common pathway for the electrochemical nerve impulses that are transmitted
 * along each of the axons.
  * @see schema:Nerve
* @package Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure
*/
class Nerve extends AnatomicalStructure
{


  /**
      * The branches that delineate from the nerve bundle. Not to be confused with
 * [[branchOf]].
    * @param AnatomicalStructure|array $value
  * @return $this
  */
  public function branch($value)
  {
  $this->setProperty('branch', $value);
  return $this;
  }

  /**
  * @param AnatomicalStructure|array $value
  * @return $this
  */
  public function setBranch($value)
  {
  $this->setProperty('branch', $value);
  return $this;
  }

  /**
  * @param AnatomicalStructure $value
  * @return $this
  */
  public function addBranch($value)
  {
  $current = $this->getProperty('branch');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('branch', $current);
  return $this;
  }

  /**
  * @return AnatomicalStructure|array
  */
  public function getBranch()
  {
  return $this->getProperty('branch');
  }


  /**
      * The neurological pathway extension that inputs and sends information to the
 * brain or spinal cord.
    * @param SuperficialAnatomy|AnatomicalStructure|array $value
  * @return $this
  */
  public function sensoryUnit($value)
  {
  $this->setProperty('sensoryUnit', $value);
  return $this;
  }

  /**
  * @param SuperficialAnatomy|AnatomicalStructure|array $value
  * @return $this
  */
  public function setSensoryUnit($value)
  {
  $this->setProperty('sensoryUnit', $value);
  return $this;
  }

  /**
  * @param SuperficialAnatomy|AnatomicalStructure $value
  * @return $this
  */
  public function addSensoryUnit($value)
  {
  $current = $this->getProperty('sensoryUnit');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('sensoryUnit', $current);
  return $this;
  }

  /**
  * @return SuperficialAnatomy|AnatomicalStructure|array
  */
  public function getSensoryUnit()
  {
  return $this->getProperty('sensoryUnit');
  }


  /**
      * The neurological pathway that originates the neurons.
    * @param BrainStructure|array $value
  * @return $this
  */
  public function sourcedFrom($value)
  {
  $this->setProperty('sourcedFrom', $value);
  return $this;
  }

  /**
  * @param BrainStructure|array $value
  * @return $this
  */
  public function setSourcedFrom($value)
  {
  $this->setProperty('sourcedFrom', $value);
  return $this;
  }

  /**
  * @param BrainStructure $value
  * @return $this
  */
  public function addSourcedFrom($value)
  {
  $current = $this->getProperty('sourcedFrom');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('sourcedFrom', $current);
  return $this;
  }

  /**
  * @return BrainStructure|array
  */
  public function getSourcedFrom()
  {
  return $this->getProperty('sourcedFrom');
  }


  /**
      * The neurological pathway extension that involves muscle control.
    * @param Muscle|array $value
  * @return $this
  */
  public function nerveMotor($value)
  {
  $this->setProperty('nerveMotor', $value);
  return $this;
  }

  /**
  * @param Muscle|array $value
  * @return $this
  */
  public function setNerveMotor($value)
  {
  $this->setProperty('nerveMotor', $value);
  return $this;
  }

  /**
  * @param Muscle $value
  * @return $this
  */
  public function addNerveMotor($value)
  {
  $current = $this->getProperty('nerveMotor');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('nerveMotor', $current);
  return $this;
  }

  /**
  * @return Muscle|array
  */
  public function getNerveMotor()
  {
  return $this->getProperty('nerveMotor');
  }


}
