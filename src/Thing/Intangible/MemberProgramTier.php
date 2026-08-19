<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification\UnitPriceSpecification;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\MonetaryAmount;
use Sohophp\SchemaOrg\Thing\Intangible\PaymentMethod\PaymentCard\CreditCard;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\TierBenefitEnumeration;
use Sohophp\SchemaOrg\Thing\Intangible\MemberProgram;

/**
 * A MemberProgramTier specifies a tier under a loyalty (member) program, for example "gold".
 * @see https://schema.org/MemberProgramTier
 * @package Sohophp\SchemaOrg\Thing\Intangible
 */
class MemberProgramTier extends Intangible
{
    /**
     * A requirement for a user to join a membership tier, for example: a CreditCard if the tier requires sign up for a credit card, A UnitPriceSpecification if the user is required to pay a (periodic) fee, or a MonetaryAmount if the user needs to spend a minimum amount to join the tier. If a tier is free to join then this property does not need to be specified.
     * @see https://schema.org/hasTierRequirement
     * @param UnitPriceSpecification|MonetaryAmount|CreditCard|string|array $value
     * @return $this
     */
    public function hasTierRequirement($value)
    {
        $this->setProperty('hasTierRequirement', $value);
        return $this;
    }

    /**
     * @param UnitPriceSpecification|MonetaryAmount|CreditCard|string|array $value
     * @return $this
     */
    public function setHasTierRequirement($value)
    {
        $this->setProperty('hasTierRequirement', $value);
        return $this;
    }

    /**
     * @param UnitPriceSpecification|MonetaryAmount|CreditCard|string $value
     * @return $this
     */
    public function addHasTierRequirement($value)
    {
        $current = $this->getProperty('hasTierRequirement');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('hasTierRequirement', $current);
        return $this;
    }

    /**
     * @return UnitPriceSpecification|MonetaryAmount|CreditCard|string|array
     */
    public function getHasTierRequirement()
    {
        return $this->getProperty('hasTierRequirement');
    }
    /**
     * The number of membership points earned by the member. If necessary, the unitText can be used to express the units the points are issued in. (E.g. stars, miles, etc.)
     * @see https://schema.org/membershipPointsEarned
     * @param QuantitativeValue|array $value
     * @return $this
     */
    public function membershipPointsEarned($value)
    {
        $this->setProperty('membershipPointsEarned', $value);
        return $this;
    }

    /**
     * @param QuantitativeValue|array $value
     * @return $this
     */
    public function setMembershipPointsEarned($value)
    {
        $this->setProperty('membershipPointsEarned', $value);
        return $this;
    }

    /**
     * @param QuantitativeValue $value
     * @return $this
     */
    public function addMembershipPointsEarned($value)
    {
        $current = $this->getProperty('membershipPointsEarned');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('membershipPointsEarned', $current);
        return $this;
    }

    /**
     * @return QuantitativeValue|array
     */
    public function getMembershipPointsEarned()
    {
        return $this->getProperty('membershipPointsEarned');
    }
    /**
     * A member benefit for a particular tier of a loyalty program.
     * @see https://schema.org/hasTierBenefit
     * @param TierBenefitEnumeration|array $value
     * @return $this
     */
    public function hasTierBenefit($value)
    {
        $this->setProperty('hasTierBenefit', $value);
        return $this;
    }

    /**
     * @param TierBenefitEnumeration|array $value
     * @return $this
     */
    public function setHasTierBenefit($value)
    {
        $this->setProperty('hasTierBenefit', $value);
        return $this;
    }

    /**
     * @param TierBenefitEnumeration $value
     * @return $this
     */
    public function addHasTierBenefit($value)
    {
        $current = $this->getProperty('hasTierBenefit');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('hasTierBenefit', $current);
        return $this;
    }

    /**
     * @return TierBenefitEnumeration|array
     */
    public function getHasTierBenefit()
    {
        return $this->getProperty('hasTierBenefit');
    }
    /**
     * The member program this tier is a part of.
     * @see https://schema.org/isTierOf
     * @param MemberProgram|array $value
     * @return $this
     */
    public function isTierOf($value)
    {
        $this->setProperty('isTierOf', $value);
        return $this;
    }

    /**
     * @param MemberProgram|array $value
     * @return $this
     */
    public function setIsTierOf($value)
    {
        $this->setProperty('isTierOf', $value);
        return $this;
    }

    /**
     * @param MemberProgram $value
     * @return $this
     */
    public function addIsTierOf($value)
    {
        $current = $this->getProperty('isTierOf');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('isTierOf', $current);
        return $this;
    }

    /**
     * @return MemberProgram|array
     */
    public function getIsTierOf()
    {
        return $this->getProperty('isTierOf');
    }
}
