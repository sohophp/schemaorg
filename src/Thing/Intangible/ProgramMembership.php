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

*
*/
class ProgramMembership extends Intangible
{

    /**
    * A unique identifier for the membership.
    * @param string|array $value
    * @return $this
    * @deprecated use setMembershipNumber
    */
    public function membershipNumber($value)
    {
        $this->setProperty('membershipNumber', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setMembershipNumber($value)
    {
        $this->setProperty('membershipNumber', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getMembershipNumber()
    {
       return $this->getProperty('membershipNumber');
    }

    /**
    * A member of this organization.
    * @param Organization|Person|array|string $value
    * @return $this
    * @deprecated use setMembers
    */
    public function members($value)
    {
        $this->setProperty('members', $value);
        return $this;
    }
   /**
    * @param Organization|Person|array|string $value
    * @return $this
    */
    public function setMembers($value)
    {
        $this->setProperty('members', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getMembers()
    {
       return $this->getProperty('members');
    }

    /**
    * The number of membership points earned by the member. If necessary, the unitText can be used to express the units the points are issued in. (e.g. stars, miles, etc.)
    * @param QuantitativeValue|array|string $value
    * @return $this
    * @deprecated use setMembershipPointsEarned
    */
    public function membershipPointsEarned($value)
    {
        $this->setProperty('membershipPointsEarned', $value);
        return $this;
    }
   /**
    * @param QuantitativeValue|array|string $value
    * @return $this
    */
    public function setMembershipPointsEarned($value)
    {
        $this->setProperty('membershipPointsEarned', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getMembershipPointsEarned()
    {
       return $this->getProperty('membershipPointsEarned');
    }

    /**
    * A member of an Organization or a ProgramMembership. Organizations can be members of organizations; ProgramMembership is typically for individuals.
    * @param Person|Organization|array|string $value
    * @return $this
    * @deprecated use setMember
    */
    public function member($value)
    {
        $this->setProperty('member', $value);
        return $this;
    }
   /**
    * @param Person|Organization|array|string $value
    * @return $this
    */
    public function setMember($value)
    {
        $this->setProperty('member', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getMember()
    {
       return $this->getProperty('member');
    }

    /**
    * The program providing the membership.
    * @param string|array $value
    * @return $this
    * @deprecated use setProgramName
    */
    public function programName($value)
    {
        $this->setProperty('programName', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setProgramName($value)
    {
        $this->setProperty('programName', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getProgramName()
    {
       return $this->getProperty('programName');
    }

    /**
    * The organization (airline, travelers' club, etc.) the membership is made with.
    * @param Organization|array|string $value
    * @return $this
    * @deprecated use setHostingOrganization
    */
    public function hostingOrganization($value)
    {
        $this->setProperty('hostingOrganization', $value);
        return $this;
    }
   /**
    * @param Organization|array|string $value
    * @return $this
    */
    public function setHostingOrganization($value)
    {
        $this->setProperty('hostingOrganization', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getHostingOrganization()
    {
       return $this->getProperty('hostingOrganization');
    }


}
