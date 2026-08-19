<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

  use Sohophp\SchemaOrg\Thing\Intangible;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification;

/**
  * A description of costs to the patient under a given network or formulary.
  * @see schema:HealthPlanCostSharingSpecification
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class HealthPlanCostSharingSpecification extends Intangible
{


  /**
      * The rate of coinsurance expressed as a number between 0.0 and 1.0.
    * @param mixed $value
  * @return $this
  */
  public function healthPlanCoinsuranceRate($value)
  {
  $this->setProperty('healthPlanCoinsuranceRate', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function setHealthPlanCoinsuranceRate($value)
  {
  $this->setProperty('healthPlanCoinsuranceRate', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function addHealthPlanCoinsuranceRate($value)
  {
  $current = $this->getProperty('healthPlanCoinsuranceRate');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('healthPlanCoinsuranceRate', $current);
  return $this;
  }

  /**
  * @return mixed
  */
  public function getHealthPlanCoinsuranceRate()
  {
  return $this->getProperty('healthPlanCoinsuranceRate');
  }


  /**
      * Whether the copay is before or after deductible, etc. TODO: Is this a closed
 * set?
    * @param string|array $value
  * @return $this
  */
  public function healthPlanCopayOption($value)
  {
  $this->setProperty('healthPlanCopayOption', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setHealthPlanCopayOption($value)
  {
  $this->setProperty('healthPlanCopayOption', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addHealthPlanCopayOption($value)
  {
  $current = $this->getProperty('healthPlanCopayOption');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('healthPlanCopayOption', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getHealthPlanCopayOption()
  {
  return $this->getProperty('healthPlanCopayOption');
  }


  /**
      * Whether the coinsurance applies before or after deductible, etc. TODO: Is
 * this a closed set?
    * @param string|array $value
  * @return $this
  */
  public function healthPlanCoinsuranceOption($value)
  {
  $this->setProperty('healthPlanCoinsuranceOption', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setHealthPlanCoinsuranceOption($value)
  {
  $this->setProperty('healthPlanCoinsuranceOption', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addHealthPlanCoinsuranceOption($value)
  {
  $current = $this->getProperty('healthPlanCoinsuranceOption');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('healthPlanCoinsuranceOption', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getHealthPlanCoinsuranceOption()
  {
  return $this->getProperty('healthPlanCoinsuranceOption');
  }


  /**
      * The category or type of pharmacy associated with this cost sharing.
    * @param string|array $value
  * @return $this
  */
  public function healthPlanPharmacyCategory($value)
  {
  $this->setProperty('healthPlanPharmacyCategory', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setHealthPlanPharmacyCategory($value)
  {
  $this->setProperty('healthPlanPharmacyCategory', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addHealthPlanPharmacyCategory($value)
  {
  $current = $this->getProperty('healthPlanPharmacyCategory');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('healthPlanPharmacyCategory', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getHealthPlanPharmacyCategory()
  {
  return $this->getProperty('healthPlanPharmacyCategory');
  }


  /**
      * The copay amount.
    * @param PriceSpecification|array $value
  * @return $this
  */
  public function healthPlanCopay($value)
  {
  $this->setProperty('healthPlanCopay', $value);
  return $this;
  }

  /**
  * @param PriceSpecification|array $value
  * @return $this
  */
  public function setHealthPlanCopay($value)
  {
  $this->setProperty('healthPlanCopay', $value);
  return $this;
  }

  /**
  * @param PriceSpecification $value
  * @return $this
  */
  public function addHealthPlanCopay($value)
  {
  $current = $this->getProperty('healthPlanCopay');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('healthPlanCopay', $current);
  return $this;
  }

  /**
  * @return PriceSpecification|array
  */
  public function getHealthPlanCopay()
  {
  return $this->getProperty('healthPlanCopay');
  }


}
