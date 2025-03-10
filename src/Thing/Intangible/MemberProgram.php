<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;

/**
* A MemberProgram defines a loyalty (or membership) program that provides its
 * members with certain benefits, for example better pricing, free shipping or
 * returns, or the ability to earn loyalty points. Member programs may have
 * multiple tiers, for example silver and gold members, each with different
 * benefits.
* @see schema:MemberProgram
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class MemberProgram extends Intangible
{


    /**
        * The Organization (airline, travelers' club, retailer, etc.) the membership is
 * made with or which offers the  MemberProgram.
        * @param array|string|mixed $value
    * @return $this
    */
    public function hostingOrganization($value)
    {
        $this->setProperty('hostingOrganization', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setHostingOrganization($value)
    {
        $this->setProperty('hostingOrganization', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getHostingOrganization()
    {
       return $this->getProperty('hostingOrganization');
    }


    /**
        * The tiers of a member program.
        * @param array|string|mixed $value
    * @return $this
    */
    public function hasTiers($value)
    {
        $this->setProperty('hasTiers', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setHasTiers($value)
    {
        $this->setProperty('hasTiers', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getHasTiers()
    {
       return $this->getProperty('hasTiers');
    }


}
