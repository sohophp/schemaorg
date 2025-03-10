<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;

/**
* A US-style health insurance plan, including PPOs, EPOs, and HMOs.
* @see schema:HealthInsurancePlan
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class HealthInsurancePlan extends Intangible
{


    /**
        * The tier(s) of drugs offered by this formulary or insurance plan.
        * @param array|string|mixed $value
    * @return $this
    */
    public function healthPlanDrugTier($value)
    {
        $this->setProperty('healthPlanDrugTier', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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


    /**
        * The 14-character, HIOS-generated Plan ID number. (Plan IDs must be unique,
 * even across different markets.)
        * @param array|string|mixed $value
    * @return $this
    */
    public function healthPlanId($value)
    {
        $this->setProperty('healthPlanId', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setHealthPlanId($value)
    {
        $this->setProperty('healthPlanId', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getHealthPlanId()
    {
       return $this->getProperty('healthPlanId');
    }


    /**
        * Formularies covered by this plan.
        * @param array|string|mixed $value
    * @return $this
    */
    public function includesHealthPlanFormulary($value)
    {
        $this->setProperty('includesHealthPlanFormulary', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setIncludesHealthPlanFormulary($value)
    {
        $this->setProperty('includesHealthPlanFormulary', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getIncludesHealthPlanFormulary()
    {
       return $this->getProperty('includesHealthPlanFormulary');
    }


    /**
        * A contact point for a person or organization.
        * @param array|string|mixed $value
    * @return $this
    */
    public function contactPoint($value)
    {
        $this->setProperty('contactPoint', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setContactPoint($value)
    {
        $this->setProperty('contactPoint', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getContactPoint()
    {
       return $this->getProperty('contactPoint');
    }


    /**
        * The standard for interpreting the Plan ID. The preferred is "HIOS". See the
 * Centers for Medicare & Medicaid Services for more details.
        * @param array|string|mixed $value
    * @return $this
    */
    public function usesHealthPlanIdStandard($value)
    {
        $this->setProperty('usesHealthPlanIdStandard', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setUsesHealthPlanIdStandard($value)
    {
        $this->setProperty('usesHealthPlanIdStandard', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getUsesHealthPlanIdStandard()
    {
       return $this->getProperty('usesHealthPlanIdStandard');
    }


    /**
        * The URL that goes directly to the summary of benefits and coverage for the
 * specific standard plan or plan variation.
        * @param array|string|mixed $value
    * @return $this
    */
    public function benefitsSummaryUrl($value)
    {
        $this->setProperty('benefitsSummaryUrl', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setBenefitsSummaryUrl($value)
    {
        $this->setProperty('benefitsSummaryUrl', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getBenefitsSummaryUrl()
    {
       return $this->getProperty('benefitsSummaryUrl');
    }


    /**
        * Networks covered by this plan.
        * @param array|string|mixed $value
    * @return $this
    */
    public function includesHealthPlanNetwork($value)
    {
        $this->setProperty('includesHealthPlanNetwork', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setIncludesHealthPlanNetwork($value)
    {
        $this->setProperty('includesHealthPlanNetwork', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getIncludesHealthPlanNetwork()
    {
       return $this->getProperty('includesHealthPlanNetwork');
    }


    /**
        * TODO.
        * @param array|string|mixed $value
    * @return $this
    */
    public function healthPlanDrugOption($value)
    {
        $this->setProperty('healthPlanDrugOption', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setHealthPlanDrugOption($value)
    {
        $this->setProperty('healthPlanDrugOption', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getHealthPlanDrugOption()
    {
       return $this->getProperty('healthPlanDrugOption');
    }


    /**
        * The URL that goes directly to the plan brochure for the specific standard
 * plan or plan variation.
        * @param array|string|mixed $value
    * @return $this
    */
    public function healthPlanMarketingUrl($value)
    {
        $this->setProperty('healthPlanMarketingUrl', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setHealthPlanMarketingUrl($value)
    {
        $this->setProperty('healthPlanMarketingUrl', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getHealthPlanMarketingUrl()
    {
       return $this->getProperty('healthPlanMarketingUrl');
    }


}
