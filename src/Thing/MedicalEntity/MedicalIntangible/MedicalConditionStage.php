<?php
namespace Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible;

  use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible;

/**
  * A stage of a medical condition, such as 'Stage IIIa'.
  * @see schema:MedicalConditionStage
* @package Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible
*/
class MedicalConditionStage extends MedicalIntangible
{


  /**
      * The stage represented as a number, e.g. 3.
    * @param mixed $value
  * @return $this
  */
  public function stageAsNumber($value)
  {
  $this->setProperty('stageAsNumber', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function setStageAsNumber($value)
  {
  $this->setProperty('stageAsNumber', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function addStageAsNumber($value)
  {
  $current = $this->getProperty('stageAsNumber');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('stageAsNumber', $current);
  return $this;
  }

  /**
  * @return mixed
  */
  public function getStageAsNumber()
  {
  return $this->getProperty('stageAsNumber');
  }


  /**
      * The substage, e.g. 'a' for Stage IIIa.
    * @param string|array $value
  * @return $this
  */
  public function subStageSuffix($value)
  {
  $this->setProperty('subStageSuffix', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setSubStageSuffix($value)
  {
  $this->setProperty('subStageSuffix', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addSubStageSuffix($value)
  {
  $current = $this->getProperty('subStageSuffix');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('subStageSuffix', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getSubStageSuffix()
  {
  return $this->getProperty('subStageSuffix');
  }


}
