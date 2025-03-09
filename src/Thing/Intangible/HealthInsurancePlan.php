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
        */
    protected $healthPlanDrugTier = null;

   /**
        * The 14-character, HIOS-generated Plan ID number. (Plan IDs must be unique, even across different markets.)
        */
    protected $healthPlanId = null;

   /**
        * Formularies covered by this plan.
        */
    protected $includesHealthPlanFormulary = null;

   /**
        * A contact point for a person or organization.
        */
    protected $contactPoint = null;

   /**
        * The standard for interpreting the Plan ID. The preferred is "HIOS". See the Centers for Medicare & Medicaid Services for more details.
        */
    protected $usesHealthPlanIdStandard = null;

   /**
        * The URL that goes directly to the summary of benefits and coverage for the specific standard plan or plan variation.
        */
    protected $benefitsSummaryUrl = null;

   /**
        * Networks covered by this plan.
        */
    protected $includesHealthPlanNetwork = null;

   /**
        * TODO.
        */
    protected $healthPlanDrugOption = null;

   /**
        * The URL that goes directly to the plan brochure for the specific standard plan or plan variation.
        */
    protected $healthPlanMarketingUrl = null;


    /**
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
