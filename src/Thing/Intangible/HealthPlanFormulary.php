<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;

/**
* For a given health insurance plan, the specification for costs and coverage
 * of prescription drugs.
* @see http://schema.org/HealthPlanFormulary
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class HealthPlanFormulary extends Intangible
{


    /**
        * Whether prescriptions can be delivered by mail.
        * @param bool|array|string|mixed $value
    * @return $this
    */
    public function offersPrescriptionByMail($value)
    {
        $this->setProperty('offersPrescriptionByMail', $value);
        return $this;
    }

    /**
    * @param bool|array|string|mixed $value
    * @return $this
    */
    public function setOffersPrescriptionByMail($value)
    {
        $this->setProperty('offersPrescriptionByMail', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getOffersPrescriptionByMail()
    {
       return $this->getProperty('offersPrescriptionByMail');
    }


    /**
        * Whether The costs to the patient for services under this network or
 * formulary.
        * @param bool|array|string|mixed $value
    * @return $this
    */
    public function healthPlanCostSharing($value)
    {
        $this->setProperty('healthPlanCostSharing', $value);
        return $this;
    }

    /**
    * @param bool|array|string|mixed $value
    * @return $this
    */
    public function setHealthPlanCostSharing($value)
    {
        $this->setProperty('healthPlanCostSharing', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getHealthPlanCostSharing()
    {
       return $this->getProperty('healthPlanCostSharing');
    }


    /**
        * The tier(s) of drugs offered by this formulary or insurance plan.
        * @param string|array|mixed $value
    * @return $this
    */
    public function healthPlanDrugTier($value)
    {
        $this->setProperty('healthPlanDrugTier', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setHealthPlanDrugTier($value)
    {
        $this->setProperty('healthPlanDrugTier', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getHealthPlanDrugTier()
    {
       return $this->getProperty('healthPlanDrugTier');
    }


}
