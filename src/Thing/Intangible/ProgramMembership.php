<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;

/**
* Used to describe membership in a loyalty programs (e.g. "StarAliance"), traveler clubs (e.g. "AAA"), purchase clubs ("Safeway Club"), etc.
* @see http://schema.org/ProgramMembership
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class ProgramMembership extends Intangible
{

    /**
    * A unique identifier for the membership.
    * @param string $value
    * @return $this
    */
    public function membershipNumber(?string $value)
    {
        $this->setProperty('membershipNumber', $value);
        return $this;
    }

    /**
    * A member of this organization.
    * @param Organization|Person $value
    * @return $this
    */
    public function members($value)
    {
        $this->setProperty('members', $value);
        return $this;
    }

    /**
    * The number of membership points earned by the member. If necessary, the unitText can be used to express the units the points are issued in. (e.g. stars, miles, etc.)
    * @param QuantitativeValue $value
    * @return $this
    */
    public function membershipPointsEarned(? $value)
    {
        $this->setProperty('membershipPointsEarned', $value);
        return $this;
    }

    /**
    * A member of an Organization or a ProgramMembership. Organizations can be members of organizations; ProgramMembership is typically for individuals.
    * @param Person|Organization $value
    * @return $this
    */
    public function member($value)
    {
        $this->setProperty('member', $value);
        return $this;
    }

    /**
    * The program providing the membership.
    * @param string $value
    * @return $this
    */
    public function programName(?string $value)
    {
        $this->setProperty('programName', $value);
        return $this;
    }

    /**
    * The organization (airline, travelers' club, etc.) the membership is made with.
    * @param Organization $value
    * @return $this
    */
    public function hostingOrganization(?Organization $value)
    {
        $this->setProperty('hostingOrganization', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\ProgramMembership','Thing\\ProgramMembership');

