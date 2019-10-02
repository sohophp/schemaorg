<?php declare(strict_types=1);
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
    * The URL that goes directly to the plan brochure for the specific standard plan or plan variation.
    * @param string $value
    * @return $this
    */
    public function healthPlanMarketingUrl(?string $value)
    {
        $this->setProperty('healthPlanMarketingUrl', $value);
        return $this;
    }

    /**
    * The 14-character, HIOS-generated Plan ID number. (Plan IDs must be unique, even across different markets.)
    * @param string $value
    * @return $this
    */
    public function healthPlanId(?string $value)
    {
        $this->setProperty('healthPlanId', $value);
        return $this;
    }

    /**
    * Formularies covered by this plan.
    * @param HealthPlanFormulary $value
    * @return $this
    */
    public function includesHealthPlanFormulary(?HealthPlanFormulary $value)
    {
        $this->setProperty('includesHealthPlanFormulary', $value);
        return $this;
    }

    /**
    * The standard for interpreting thePlan ID. The preferred is "HIOS". See the Centers for Medicare &amp; Medicaid Services for more details.
    * @param string|string $value
    * @return $this
    */
    public function usesHealthPlanIdStandard($value)
    {
        $this->setProperty('usesHealthPlanIdStandard', $value);
        return $this;
    }

    /**
    * Networks covered by this plan.
    * @param HealthPlanNetwork $value
    * @return $this
    */
    public function includesHealthPlanNetwork(?HealthPlanNetwork $value)
    {
        $this->setProperty('includesHealthPlanNetwork', $value);
        return $this;
    }

    /**
    * A contact point for a person or organization.
    * @param ContactPoint $value
    * @return $this
    */
    public function contactPoint(?ContactPoint $value)
    {
        $this->setProperty('contactPoint', $value);
        return $this;
    }

    /**
    * TODO.
    * @param string $value
    * @return $this
    */
    public function healthPlanDrugOption(?string $value)
    {
        $this->setProperty('healthPlanDrugOption', $value);
        return $this;
    }

    /**
    * The tier(s) of drugs offered by this formulary or insurance plan.
    * @param string $value
    * @return $this
    */
    public function healthPlanDrugTier(?string $value)
    {
        $this->setProperty('healthPlanDrugTier', $value);
        return $this;
    }

    /**
    * The URL that goes directly to the summary of benefits and coverage for the specific standard plan or plan variation.
    * @param string $value
    * @return $this
    */
    public function benefitsSummaryUrl(?string $value)
    {
        $this->setProperty('benefitsSummaryUrl', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\HealthInsurancePlan','Thing\\HealthInsurancePlan');

