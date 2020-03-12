<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;

/**
* For a given health insurance plan, the specification for costs and coverage of prescription drugs.
* @see http://schema.org/HealthPlanFormulary
* @package Sohophp\SchemaOrg\Thing\Intangible

*
*/
class HealthPlanFormulary extends Intangible
{

    /**
    * Whether prescriptions can be delivered by mail.
    * @param bool|array $value
    * @return $this
    */
    public function offersPrescriptionByMail(?bool $value)
    {
        $this->setProperty('offersPrescriptionByMail', $value);
        return $this;
    }
   /**
    * @param bool|array $value
    * @return $this
    */
    public function setOffersPrescriptionByMail(?bool $value)
    {
        $this->setProperty('offersPrescriptionByMail', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getOffersPrescriptionByMail()
    {
       return $this->getProperty('offersPrescriptionByMail');
    }

    /**
    * Whether The costs to the patient for services under this network or formulary.
    * @param bool|array $value
    * @return $this
    */
    public function healthPlanCostSharing(?bool $value)
    {
        $this->setProperty('healthPlanCostSharing', $value);
        return $this;
    }
   /**
    * @param bool|array $value
    * @return $this
    */
    public function setHealthPlanCostSharing(?bool $value)
    {
        $this->setProperty('healthPlanCostSharing', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getHealthPlanCostSharing()
    {
       return $this->getProperty('healthPlanCostSharing');
    }

    /**
    * The tier(s) of drugs offered by this formulary or insurance plan.
    * @param string|array $value
    * @return $this
    */
    public function healthPlanDrugTier(?string $value)
    {
        $this->setProperty('healthPlanDrugTier', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setHealthPlanDrugTier(?string $value)
    {
        $this->setProperty('healthPlanDrugTier', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getHealthPlanDrugTier()
    {
       return $this->getProperty('healthPlanDrugTier');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\HealthPlanFormulary','Thing\\HealthPlanFormulary');

