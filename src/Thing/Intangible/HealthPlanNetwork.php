<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\Intangible\HealthPlanCostSharingSpecification;

/**
 * A US-style health insurance plan network.
 * @see https://schema.org/HealthPlanNetwork
 * @package Sohophp\SchemaOrg\Thing\Intangible
 */
class HealthPlanNetwork extends Intangible
{
    /**
     * The costs to the patient for services under this network or formulary.
     * @see https://schema.org/healthPlanCostSharing
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
     * The tier(s) for this network.
     * @see https://schema.org/healthPlanNetworkTier
     * @param string|array $value
     * @return $this
     */
    public function healthPlanNetworkTier($value)
    {
        $this->setProperty('healthPlanNetworkTier', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setHealthPlanNetworkTier($value)
    {
        $this->setProperty('healthPlanNetworkTier', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addHealthPlanNetworkTier($value)
    {
        $current = $this->getProperty('healthPlanNetworkTier');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('healthPlanNetworkTier', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getHealthPlanNetworkTier()
    {
        return $this->getProperty('healthPlanNetworkTier');
    }
    /**
     * Name or unique ID of network. (Networks are often reused across different insurance plans.)
     * @see https://schema.org/healthPlanNetworkId
     * @param string|array $value
     * @return $this
     */
    public function healthPlanNetworkId($value)
    {
        $this->setProperty('healthPlanNetworkId', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setHealthPlanNetworkId($value)
    {
        $this->setProperty('healthPlanNetworkId', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addHealthPlanNetworkId($value)
    {
        $current = $this->getProperty('healthPlanNetworkId');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('healthPlanNetworkId', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getHealthPlanNetworkId()
    {
        return $this->getProperty('healthPlanNetworkId');
    }
}
