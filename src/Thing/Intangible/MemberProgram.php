<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Intangible\MemberProgramTier;

/**
 * A MemberProgram defines a loyalty (or membership) program that provides its members with certain benefits, for example better pricing, free shipping or returns, or the ability to earn loyalty points. Member programs may have multiple tiers, for example silver and gold members, each with different benefits.
 * @see https://schema.org/MemberProgram
 * @package Sohophp\SchemaOrg\Thing\Intangible
 */
class MemberProgram extends Intangible
{
    /**
     * The Organization (airline, travelers' club, retailer, etc.) the membership is made with or which offers the MemberProgram.
     * @see https://schema.org/hostingOrganization
     * @param Organization|array $value
     * @return $this
     */
    public function hostingOrganization($value)
    {
        $this->setProperty('hostingOrganization', $value);
        return $this;
    }

    /**
     * @param Organization|array $value
     * @return $this
     */
    public function setHostingOrganization($value)
    {
        $this->setProperty('hostingOrganization', $value);
        return $this;
    }

    /**
     * @param Organization $value
     * @return $this
     */
    public function addHostingOrganization($value)
    {
        $current = $this->getProperty('hostingOrganization');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('hostingOrganization', $current);
        return $this;
    }

    /**
     * @return Organization|array
     */
    public function getHostingOrganization()
    {
        return $this->getProperty('hostingOrganization');
    }
    /**
     * The tiers of a member program.
     * @see https://schema.org/hasTiers
     * @param MemberProgramTier|array $value
     * @return $this
     */
    public function hasTiers($value)
    {
        $this->setProperty('hasTiers', $value);
        return $this;
    }

    /**
     * @param MemberProgramTier|array $value
     * @return $this
     */
    public function setHasTiers($value)
    {
        $this->setProperty('hasTiers', $value);
        return $this;
    }

    /**
     * @param MemberProgramTier $value
     * @return $this
     */
    public function addHasTiers($value)
    {
        $current = $this->getProperty('hasTiers');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('hasTiers', $current);
        return $this;
    }

    /**
     * @return MemberProgramTier|array
     */
    public function getHasTiers()
    {
        return $this->getProperty('hasTiers');
    }
}
