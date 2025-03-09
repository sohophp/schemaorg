<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;

/**
* Used to describe membership in a loyalty programs (e.g. "StarAliance"), traveler clubs (e.g. "AAA"), purchase clubs ("Safeway Club"), etc.
* @see schema:ProgramMembership
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class ProgramMembership extends Intangible
{
   /**
        * A unique identifier for the membership.
        */
    protected $membershipNumber = null;

   /**
        * The program providing the membership. It is preferable to use [:program](https://schema.org/program) instead.
        */
    protected $programName = null;

   /**
        * The Organization (airline, travelers' club, retailer, etc.) the membership is made with or which offers the  MemberProgram.
        */
    protected $hostingOrganization = null;

   /**
        * The [MemberProgram](https://schema.org/MemberProgram) associated with a [ProgramMembership](https://schema.org/ProgramMembership).
        */
    protected $program = null;

   /**
        * The number of membership points earned by the member. If necessary, the unitText can be used to express the units the points are issued in. (E.g. stars, miles, etc.)
        */
    protected $membershipPointsEarned = null;

   /**
        * A member of this organization.
        */
    protected $members = null;

   /**
        * A member of an Organization or a ProgramMembership. Organizations can be members of organizations; ProgramMembership is typically for individuals.
        */
    protected $member = null;


    /**
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
