<?php
namespace Sohophp\SchemaOrg\Thing\MedicalEntity;

  use Sohophp\SchemaOrg\Thing\MedicalEntity;
  use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalRiskFactor;

/**
  * Any rule set or interactive tool for estimating the risk of developing a
 * complication or condition.
  * @see schema:MedicalRiskEstimator
* @package Sohophp\SchemaOrg\Thing\MedicalEntity
*/
class MedicalRiskEstimator extends MedicalEntity
{


  /**
      * A modifiable or non-modifiable risk factor included in the calculation, e.g.
 * age, coexisting condition.
    * @param MedicalRiskFactor|array $value
  * @return $this
  */
  public function includedRiskFactor($value)
  {
  $this->setProperty('includedRiskFactor', $value);
  return $this;
  }

  /**
  * @param MedicalRiskFactor|array $value
  * @return $this
  */
  public function setIncludedRiskFactor($value)
  {
  $this->setProperty('includedRiskFactor', $value);
  return $this;
  }

  /**
  * @param MedicalRiskFactor $value
  * @return $this
  */
  public function addIncludedRiskFactor($value)
  {
  $current = $this->getProperty('includedRiskFactor');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('includedRiskFactor', $current);
  return $this;
  }

  /**
  * @return MedicalRiskFactor|array
  */
  public function getIncludedRiskFactor()
  {
  return $this->getProperty('includedRiskFactor');
  }


  /**
      * The condition, complication, or symptom whose risk is being estimated.
    * @param MedicalEntity|array $value
  * @return $this
  */
  public function estimatesRiskOf($value)
  {
  $this->setProperty('estimatesRiskOf', $value);
  return $this;
  }

  /**
  * @param MedicalEntity|array $value
  * @return $this
  */
  public function setEstimatesRiskOf($value)
  {
  $this->setProperty('estimatesRiskOf', $value);
  return $this;
  }

  /**
  * @param MedicalEntity $value
  * @return $this
  */
  public function addEstimatesRiskOf($value)
  {
  $current = $this->getProperty('estimatesRiskOf');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('estimatesRiskOf', $current);
  return $this;
  }

  /**
  * @return MedicalEntity|array
  */
  public function getEstimatesRiskOf()
  {
  return $this->getProperty('estimatesRiskOf');
  }


}
