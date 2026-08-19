<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

  use Sohophp\SchemaOrg\Thing\Intangible;
  use Sohophp\SchemaOrg\Thing\Intangible\HealthPlanCostSharingSpecification;

/**
  * For a given health insurance plan, the specification for costs and coverage
 * of prescription drugs.
  * @see schema:HealthPlanFormulary
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class HealthPlanFormulary extends Intangible
{


  /**
      * The costs to the patient for services under this network or formulary.
    * @param HealthPlanCostSharingSpecification|bool|array $value
  * @return $this
  */
  public function healthPlanCostSharing($value)
  {
  $this->setProperty('healthPlanCostSharing', $value);
  return $this;
  }

  /**
  * @param HealthPlanCostSharingSpecification|bool|array $value
  * @return $this
  */
  public function setHealthPlanCostSharing($value)
  {
  $this->setProperty('healthPlanCostSharing', $value);
  return $this;
  }

  /**
  * @param HealthPlanCostSharingSpecification|bool $value
  * @return $this
  */
  public function addHealthPlanCostSharing($value)
  {
  $current = $this->getProperty('healthPlanCostSharing');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('healthPlanCostSharing', $current);
  return $this;
  }

  /**
  * @return HealthPlanCostSharingSpecification|bool|array
  */
  public function getHealthPlanCostSharing()
  {
  return $this->getProperty('healthPlanCostSharing');
  }


  /**
      * Whether prescriptions can be delivered by mail.
    * @param bool|array $value
  * @return $this
  */
  public function offersPrescriptionByMail($value)
  {
  $this->setProperty('offersPrescriptionByMail', $value);
  return $this;
  }

  /**
  * @param bool|array $value
  * @return $this
  */
  public function setOffersPrescriptionByMail($value)
  {
  $this->setProperty('offersPrescriptionByMail', $value);
  return $this;
  }

  /**
  * @param bool $value
  * @return $this
  */
  public function addOffersPrescriptionByMail($value)
  {
  $current = $this->getProperty('offersPrescriptionByMail');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('offersPrescriptionByMail', $current);
  return $this;
  }

  /**
  * @return bool|array
  */
  public function getOffersPrescriptionByMail()
  {
  return $this->getProperty('offersPrescriptionByMail');
  }


  /**
      * The tier(s) of drugs offered by this formulary or insurance plan.
    * @param string|array $value
  * @return $this
  */
  public function healthPlanDrugTier($value)
  {
  $this->setProperty('healthPlanDrugTier', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setHealthPlanDrugTier($value)
  {
  $this->setProperty('healthPlanDrugTier', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addHealthPlanDrugTier($value)
  {
  $current = $this->getProperty('healthPlanDrugTier');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('healthPlanDrugTier', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getHealthPlanDrugTier()
  {
  return $this->getProperty('healthPlanDrugTier');
  }


}
