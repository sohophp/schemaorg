<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;

/**
* A MemberProgramTier specifies a tier under a loyalty (member) program, for example "gold".
* @see schema:MemberProgramTier
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class MemberProgramTier extends Intangible
{
   /**
        * The number of membership points earned by the member. If necessary, the unitText can be used to express the units the points are issued in. (E.g. stars, miles, etc.)
        */
    protected $membershipPointsEarned = null;

   /**
        * The member program this tier is a part of.
        */
    protected $isTierOf = null;

   /**
        * A requirement for a user to join a membership tier, for example: a CreditCard if the tier requires sign up for a credit card, A UnitPriceSpecification if the user is required to pay a (periodic) fee, or a MonetaryAmount if the user needs to spend a minimum amount to join the tier. If a tier is free to join then this property does not need to be specified.
        */
    protected $hasTierRequirement = null;

   /**
        * A member benefit for a particular tier of a loyalty program.
        */
    protected $hasTierBenefit = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setMembershipPointsEarned($value)
    {
        $this->setProperty('membershipPointsEarned', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getMembershipPointsEarned()
    {
       return $this->getProperty('membershipPointsEarned');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setIsTierOf($value)
    {
        $this->setProperty('isTierOf', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getIsTierOf()
    {
       return $this->getProperty('isTierOf');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setHasTierRequirement($value)
    {
        $this->setProperty('hasTierRequirement', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getHasTierRequirement()
    {
       return $this->getProperty('hasTierRequirement');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setHasTierBenefit($value)
    {
        $this->setProperty('hasTierBenefit', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getHasTierBenefit()
    {
       return $this->getProperty('hasTierBenefit');
    }


}
