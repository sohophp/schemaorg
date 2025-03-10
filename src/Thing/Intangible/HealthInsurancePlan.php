<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\Intangible\HealthPlanFormulary;
use Sohophp\SchemaOrg\Thing\Intangible\HealthPlanNetwork;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint;

/**
* A US-style health insurance plan, including PPOs, EPOs, and HMOs.
* @see http://schema.org/HealthInsurancePlan
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class HealthInsurancePlan extends Intangible
{


    /**
        * The URL that goes directly to the plan brochure for the specific standard
 * plan or plan variation.
        * @param string|array|mixed $value
    * @return $this
    */
    public function healthPlanMarketingUrl($value)
    {
        $this->setProperty('healthPlanMarketingUrl', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
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


    /**
        * The 14-character, HIOS-generated Plan ID number. (Plan IDs must be unique,
 * even across different markets.)
        * @param string|array|mixed $value
    * @return $this
    */
    public function healthPlanId($value)
    {
        $this->setProperty('healthPlanId', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
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
        * @param HealthPlanFormulary|array|string|mixed $value
    * @return $this
    */
    public function includesHealthPlanFormulary($value)
    {
        $this->setProperty('includesHealthPlanFormulary', $value);
        return $this;
    }

    /**
    * @param HealthPlanFormulary|array|string|mixed $value
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
        * The standard for interpreting thePlan ID. The preferred is "HIOS". See the
 * Centers for Medicare & Medicaid Services for more details.
        * @param string|string|array|mixed $value
    * @return $this
    */
    public function usesHealthPlanIdStandard($value)
    {
        $this->setProperty('usesHealthPlanIdStandard', $value);
        return $this;
    }

    /**
    * @param string|string|array|mixed $value
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
        * Networks covered by this plan.
        * @param HealthPlanNetwork|array|string|mixed $value
    * @return $this
    */
    public function includesHealthPlanNetwork($value)
    {
        $this->setProperty('includesHealthPlanNetwork', $value);
        return $this;
    }

    /**
    * @param HealthPlanNetwork|array|string|mixed $value
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
        * A contact point for a person or organization.
        * @param ContactPoint|array|string|mixed $value
    * @return $this
    */
    public function contactPoint($value)
    {
        $this->setProperty('contactPoint', $value);
        return $this;
    }

    /**
    * @param ContactPoint|array|string|mixed $value
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
        * TODO.
        * @param string|array|mixed $value
    * @return $this
    */
    public function healthPlanDrugOption($value)
    {
        $this->setProperty('healthPlanDrugOption', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
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


    /**
        * The URL that goes directly to the summary of benefits and coverage for the
 * specific standard plan or plan variation.
        * @param string|array|mixed $value
    * @return $this
    */
    public function benefitsSummaryUrl($value)
    {
        $this->setProperty('benefitsSummaryUrl', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
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


}
