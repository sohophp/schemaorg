<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\MedicalEntity;
use Sohophp\SchemaOrg\Thing\Event;
use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\Product;
use Sohophp\SchemaOrg\Thing\BioChemEntity;

/**
 * A grant, typically financial or otherwise quantifiable, of resources. Typically a [[funder]] sponsors some [[MonetaryAmount]] to an [[Organization]] or [[Person]], sometimes not necessarily via a dedicated or long-lived [[Project]], resulting in one or more outputs, or [[fundedItem]]s. For financial sponsorship, indicate the [[funder]] of a [[MonetaryGrant]]. For non-financial support, indicate [[sponsor]] of [[Grant]]s of resources (e.g. office space). Grants support activities directed towards some agreed collective goals, often but not always organized as [[Project]]s. Long-lived projects are sometimes sponsored by a variety of grants over time, but it is also common for a project to be associated with a single grant. The amount of a [[Grant]] is represented using [[amount]] as a [[MonetaryAmount]].
 * @see https://schema.org/Grant
 * @package Sohophp\SchemaOrg\Thing\Intangible
 */
class Grant extends Intangible
{
    /**
     * A person or organization that supports a thing through a pledge, promise, or financial contribution. E.g. a sponsor of a Medical Study or a corporate sponsor of an event.
     * @see https://schema.org/sponsor
     * @param Organization|Person|array $value
     * @return $this
     */
    public function sponsor($value)
    {
        $this->setProperty('sponsor', $value);
        return $this;
    }

    /**
     * @param Organization|Person|array $value
     * @return $this
     */
    public function setSponsor($value)
    {
        $this->setProperty('sponsor', $value);
        return $this;
    }

    /**
     * @param Organization|Person $value
     * @return $this
     */
    public function addSponsor($value)
    {
        $current = $this->getProperty('sponsor');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('sponsor', $current);
        return $this;
    }

    /**
     * @return Organization|Person|array
     */
    public function getSponsor()
    {
        return $this->getProperty('sponsor');
    }
    /**
     * A person or organization that supports (sponsors) something through some kind of financial contribution.
     * @see https://schema.org/funder
     * @param Organization|Person|array $value
     * @return $this
     */
    public function funder($value)
    {
        $this->setProperty('funder', $value);
        return $this;
    }

    /**
     * @param Organization|Person|array $value
     * @return $this
     */
    public function setFunder($value)
    {
        $this->setProperty('funder', $value);
        return $this;
    }

    /**
     * @param Organization|Person $value
     * @return $this
     */
    public function addFunder($value)
    {
        $current = $this->getProperty('funder');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('funder', $current);
        return $this;
    }

    /**
     * @return Organization|Person|array
     */
    public function getFunder()
    {
        return $this->getProperty('funder');
    }
    /**
     * Indicates something directly or indirectly funded or sponsored through a [[Grant]]. See also [[ownershipFundingInfo]].
     * @see https://schema.org/fundedItem
     * @param Person|MedicalEntity|Event|CreativeWork|Product|Organization|BioChemEntity|array $value
     * @return $this
     */
    public function fundedItem($value)
    {
        $this->setProperty('fundedItem', $value);
        return $this;
    }

    /**
     * @param Person|MedicalEntity|Event|CreativeWork|Product|Organization|BioChemEntity|array $value
     * @return $this
     */
    public function setFundedItem($value)
    {
        $this->setProperty('fundedItem', $value);
        return $this;
    }

    /**
     * @param Person|MedicalEntity|Event|CreativeWork|Product|Organization|BioChemEntity $value
     * @return $this
     */
    public function addFundedItem($value)
    {
        $current = $this->getProperty('fundedItem');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('fundedItem', $current);
        return $this;
    }

    /**
     * @return Person|MedicalEntity|Event|CreativeWork|Product|Organization|BioChemEntity|array
     */
    public function getFundedItem()
    {
        return $this->getProperty('fundedItem');
    }
}
