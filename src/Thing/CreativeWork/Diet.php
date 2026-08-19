<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

  use Sohophp\SchemaOrg\Thing\CreativeWork;
  use Sohophp\SchemaOrg\Thing\Organization;
  use Sohophp\SchemaOrg\Thing\Person;

/**
  * A strategy of regulating the intake of food to achieve or maintain a specific
 * health-related goal.
  * @see schema:Diet
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class Diet extends CreativeWork
{


  /**
      * Specific physiologic risks associated to the diet plan.
    * @param string|array $value
  * @return $this
  */
  public function risks($value)
  {
  $this->setProperty('risks', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setRisks($value)
  {
  $this->setProperty('risks', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addRisks($value)
  {
  $current = $this->getProperty('risks');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('risks', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getRisks()
  {
  return $this->getProperty('risks');
  }


  /**
      * Medical expert advice related to the plan.
    * @param string|array $value
  * @return $this
  */
  public function expertConsiderations($value)
  {
  $this->setProperty('expertConsiderations', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setExpertConsiderations($value)
  {
  $this->setProperty('expertConsiderations', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addExpertConsiderations($value)
  {
  $current = $this->getProperty('expertConsiderations');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('expertConsiderations', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getExpertConsiderations()
  {
  return $this->getProperty('expertConsiderations');
  }


  /**
      * Nutritional information specific to the dietary plan. May include dietary
 * recommendations on what foods to avoid, what foods to consume, and specific
 * alterations/deviations from the USDA or other regulatory body's approved
 * dietary guidelines.
    * @param string|array $value
  * @return $this
  */
  public function dietFeatures($value)
  {
  $this->setProperty('dietFeatures', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setDietFeatures($value)
  {
  $this->setProperty('dietFeatures', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addDietFeatures($value)
  {
  $current = $this->getProperty('dietFeatures');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('dietFeatures', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getDietFeatures()
  {
  return $this->getProperty('dietFeatures');
  }


  /**
      * People or organizations that endorse the plan.
    * @param Organization|Person|array $value
  * @return $this
  */
  public function endorsers($value)
  {
  $this->setProperty('endorsers', $value);
  return $this;
  }

  /**
  * @param Organization|Person|array $value
  * @return $this
  */
  public function setEndorsers($value)
  {
  $this->setProperty('endorsers', $value);
  return $this;
  }

  /**
  * @param Organization|Person $value
  * @return $this
  */
  public function addEndorsers($value)
  {
  $current = $this->getProperty('endorsers');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('endorsers', $current);
  return $this;
  }

  /**
  * @return Organization|Person|array
  */
  public function getEndorsers()
  {
  return $this->getProperty('endorsers');
  }


  /**
      * Specific physiologic benefits associated to the plan.
    * @param string|array $value
  * @return $this
  */
  public function physiologicalBenefits($value)
  {
  $this->setProperty('physiologicalBenefits', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setPhysiologicalBenefits($value)
  {
  $this->setProperty('physiologicalBenefits', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addPhysiologicalBenefits($value)
  {
  $current = $this->getProperty('physiologicalBenefits');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('physiologicalBenefits', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getPhysiologicalBenefits()
  {
  return $this->getProperty('physiologicalBenefits');
  }


}
