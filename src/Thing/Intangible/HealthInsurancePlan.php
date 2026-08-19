<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\Intangible\HealthPlanFormulary;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint;
use Sohophp\SchemaOrg\Thing\Intangible\HealthPlanNetwork;

/**
 * A US-style health insurance plan, including PPOs, EPOs, and HMOs.
 * @see https://schema.org/HealthInsurancePlan
 * @package Sohophp\SchemaOrg\Thing\Intangible
 */
class HealthInsurancePlan extends Intangible
{
    /**
     * The standard for interpreting the Plan ID. The preferred is "HIOS". See the Centers for Medicare & Medicaid Services for more details.
     * @see https://schema.org/usesHealthPlanIdStandard
     * @param string|array $value
     * @return $this
     */
    public function usesHealthPlanIdStandard($value)
    {
        $this->setProperty('usesHealthPlanIdStandard', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setUsesHealthPlanIdStandard($value)
    {
        $this->setProperty('usesHealthPlanIdStandard', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addUsesHealthPlanIdStandard($value)
    {
        $current = $this->getProperty('usesHealthPlanIdStandard');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('usesHealthPlanIdStandard', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getUsesHealthPlanIdStandard()
    {
        return $this->getProperty('usesHealthPlanIdStandard');
    }
    /**
     * The URL that goes directly to the summary of benefits and coverage for the specific standard plan or plan variation.
     * @see https://schema.org/benefitsSummaryUrl
     * @param string|array $value
     * @return $this
     */
    public function benefitsSummaryUrl($value)
    {
        $this->setProperty('benefitsSummaryUrl', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setBenefitsSummaryUrl($value)
    {
        $this->setProperty('benefitsSummaryUrl', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addBenefitsSummaryUrl($value)
    {
        $current = $this->getProperty('benefitsSummaryUrl');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('benefitsSummaryUrl', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getBenefitsSummaryUrl()
    {
        return $this->getProperty('benefitsSummaryUrl');
    }
    /**
     * Formularies covered by this plan.
     * @see https://schema.org/includesHealthPlanFormulary
     * @param HealthPlanFormulary|array $value
     * @return $this
     */
    public function includesHealthPlanFormulary($value)
    {
        $this->setProperty('includesHealthPlanFormulary', $value);
        return $this;
    }

    /**
     * @param HealthPlanFormulary|array $value
     * @return $this
     */
    public function setIncludesHealthPlanFormulary($value)
    {
        $this->setProperty('includesHealthPlanFormulary', $value);
        return $this;
    }

    /**
     * @param HealthPlanFormulary $value
     * @return $this
     */
    public function addIncludesHealthPlanFormulary($value)
    {
        $current = $this->getProperty('includesHealthPlanFormulary');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('includesHealthPlanFormulary', $current);
        return $this;
    }

    /**
     * @return HealthPlanFormulary|array
     */
    public function getIncludesHealthPlanFormulary()
    {
        return $this->getProperty('includesHealthPlanFormulary');
    }
    /**
     * A contact point for a person or organization.
     * @see https://schema.org/contactPoint
     * @param ContactPoint|array $value
     * @return $this
     */
    public function contactPoint($value)
    {
        $this->setProperty('contactPoint', $value);
        return $this;
    }

    /**
     * @param ContactPoint|array $value
     * @return $this
     */
    public function setContactPoint($value)
    {
        $this->setProperty('contactPoint', $value);
        return $this;
    }

    /**
     * @param ContactPoint $value
     * @return $this
     */
    public function addContactPoint($value)
    {
        $current = $this->getProperty('contactPoint');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('contactPoint', $current);
        return $this;
    }

    /**
     * @return ContactPoint|array
     */
    public function getContactPoint()
    {
        return $this->getProperty('contactPoint');
    }
    /**
     * TODO.
     * @see https://schema.org/healthPlanDrugOption
     * @param string|array $value
     * @return $this
     */
    public function healthPlanDrugOption($value)
    {
        $this->setProperty('healthPlanDrugOption', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setHealthPlanDrugOption($value)
    {
        $this->setProperty('healthPlanDrugOption', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addHealthPlanDrugOption($value)
    {
        $current = $this->getProperty('healthPlanDrugOption');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('healthPlanDrugOption', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getHealthPlanDrugOption()
    {
        return $this->getProperty('healthPlanDrugOption');
    }
    /**
     * The URL that goes directly to the plan brochure for the specific standard plan or plan variation.
     * @see https://schema.org/healthPlanMarketingUrl
     * @param string|array $value
     * @return $this
     */
    public function healthPlanMarketingUrl($value)
    {
        $this->setProperty('healthPlanMarketingUrl', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setHealthPlanMarketingUrl($value)
    {
        $this->setProperty('healthPlanMarketingUrl', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addHealthPlanMarketingUrl($value)
    {
        $current = $this->getProperty('healthPlanMarketingUrl');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('healthPlanMarketingUrl', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getHealthPlanMarketingUrl()
    {
        return $this->getProperty('healthPlanMarketingUrl');
    }
    /**
     * Networks covered by this plan.
     * @see https://schema.org/includesHealthPlanNetwork
     * @param HealthPlanNetwork|array $value
     * @return $this
     */
    public function includesHealthPlanNetwork($value)
    {
        $this->setProperty('includesHealthPlanNetwork', $value);
        return $this;
    }

    /**
     * @param HealthPlanNetwork|array $value
     * @return $this
     */
    public function setIncludesHealthPlanNetwork($value)
    {
        $this->setProperty('includesHealthPlanNetwork', $value);
        return $this;
    }

    /**
     * @param HealthPlanNetwork $value
     * @return $this
     */
    public function addIncludesHealthPlanNetwork($value)
    {
        $current = $this->getProperty('includesHealthPlanNetwork');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('includesHealthPlanNetwork', $current);
        return $this;
    }

    /**
     * @return HealthPlanNetwork|array
     */
    public function getIncludesHealthPlanNetwork()
    {
        return $this->getProperty('includesHealthPlanNetwork');
    }
    /**
     * The tier(s) of drugs offered by this formulary or insurance plan.
     * @see https://schema.org/healthPlanDrugTier
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
    /**
     * The 14-character, HIOS-generated Plan ID number. (Plan IDs must be unique, even across different markets.)
     * @see https://schema.org/healthPlanId
     * @param string|array $value
     * @return $this
     */
    public function healthPlanId($value)
    {
        $this->setProperty('healthPlanId', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setHealthPlanId($value)
    {
        $this->setProperty('healthPlanId', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addHealthPlanId($value)
    {
        $current = $this->getProperty('healthPlanId');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('healthPlanId', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getHealthPlanId()
    {
        return $this->getProperty('healthPlanId');
    }
}
