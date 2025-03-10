<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;

/**
* Used to describe membership in a loyalty programs (e.g. "StarAliance"),
 * traveler clubs (e.g. "AAA"), purchase clubs ("Safeway Club"), etc.
* @see schema:ProgramMembership
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class ProgramMembership extends Intangible
{


    /**
        * A unique identifier for the membership.
        * @param array|string|mixed $value
    * @return $this
    */
    public function membershipNumber($value)
    {
        $this->setProperty('membershipNumber', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setMembershipNumber($value)
    {
        $this->setProperty('membershipNumber', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getMembershipNumber()
    {
       return $this->getProperty('membershipNumber');
    }


    /**
        * The program providing the membership. It is preferable to use
 * [:program](https://schema.org/program) instead.
        * @param array|string|mixed $value
    * @return $this
    */
    public function programName($value)
    {
        $this->setProperty('programName', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setProgramName($value)
    {
        $this->setProperty('programName', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getProgramName()
    {
       return $this->getProperty('programName');
    }


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
        * The [MemberProgram](https://schema.org/MemberProgram) associated with a
 * [ProgramMembership](https://schema.org/ProgramMembership).
        * @param array|string|mixed $value
    * @return $this
    */
    public function program($value)
    {
        $this->setProperty('program', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setProgram($value)
    {
        $this->setProperty('program', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getProgram()
    {
       return $this->getProperty('program');
    }


    /**
        * The number of membership points earned by the member. If necessary, the
 * unitText can be used to express the units the points are issued in. (E.g.
 * stars, miles, etc.)
        * @param array|string|mixed $value
    * @return $this
    */
    public function membershipPointsEarned($value)
    {
        $this->setProperty('membershipPointsEarned', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * A member of this organization.
        * @param array|string|mixed $value
    * @return $this
    */
    public function members($value)
    {
        $this->setProperty('members', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setMembers($value)
    {
        $this->setProperty('members', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getMembers()
    {
       return $this->getProperty('members');
    }


    /**
        * A member of an Organization or a ProgramMembership. Organizations can be
 * members of organizations; ProgramMembership is typically for individuals.
        * @param array|string|mixed $value
    * @return $this
    */
    public function member($value)
    {
        $this->setProperty('member', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setMember($value)
    {
        $this->setProperty('member', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getMember()
    {
       return $this->getProperty('member');
    }


}
