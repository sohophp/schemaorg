<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

  use Sohophp\SchemaOrg\Thing\Intangible;
  use Sohophp\SchemaOrg\Thing\Person;
  use Sohophp\SchemaOrg\Thing\Organization;
  use Sohophp\SchemaOrg\Thing\Intangible\MemberProgram;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;

/**
  * Used to describe membership in a loyalty programs (e.g. "StarAliance"),
 * traveler clubs (e.g. "AAA"), purchase clubs ("Safeway Club"), etc.
  * @see schema:ProgramMembership
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class ProgramMembership extends Intangible
{


  /**
      * A member of this organization.
    * @param Person|Organization|array $value
  * @return $this
  */
  public function members($value)
  {
  $this->setProperty('members', $value);
  return $this;
  }

  /**
  * @param Person|Organization|array $value
  * @return $this
  */
  public function setMembers($value)
  {
  $this->setProperty('members', $value);
  return $this;
  }

  /**
  * @param Person|Organization $value
  * @return $this
  */
  public function addMembers($value)
  {
  $current = $this->getProperty('members');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('members', $current);
  return $this;
  }

  /**
  * @return Person|Organization|array
  */
  public function getMembers()
  {
  return $this->getProperty('members');
  }


  /**
      * The Organization (airline, travelers' club, retailer, etc.) the membership is
 * made with or which offers the  MemberProgram.
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
      * The program providing the membership. It is preferable to use
 * [:program](https://schema.org/program) instead.
    * @param string|array $value
  * @return $this
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
  * @param string $value
  * @return $this
  */
  public function addProgramName($value)
  {
  $current = $this->getProperty('programName');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('programName', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getProgramName()
  {
  return $this->getProperty('programName');
  }


  /**
      * The [MemberProgram](https://schema.org/MemberProgram) associated with a
 * [ProgramMembership](https://schema.org/ProgramMembership).
    * @param MemberProgram|array $value
  * @return $this
  */
  public function program($value)
  {
  $this->setProperty('program', $value);
  return $this;
  }

  /**
  * @param MemberProgram|array $value
  * @return $this
  */
  public function setProgram($value)
  {
  $this->setProperty('program', $value);
  return $this;
  }

  /**
  * @param MemberProgram $value
  * @return $this
  */
  public function addProgram($value)
  {
  $current = $this->getProperty('program');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('program', $current);
  return $this;
  }

  /**
  * @return MemberProgram|array
  */
  public function getProgram()
  {
  return $this->getProperty('program');
  }


  /**
      * A member of an Organization or a ProgramMembership. Organizations can be
 * members of organizations; ProgramMembership is typically for individuals.
    * @param Organization|Person|array $value
  * @return $this
  */
  public function member($value)
  {
  $this->setProperty('member', $value);
  return $this;
  }

  /**
  * @param Organization|Person|array $value
  * @return $this
  */
  public function setMember($value)
  {
  $this->setProperty('member', $value);
  return $this;
  }

  /**
  * @param Organization|Person $value
  * @return $this
  */
  public function addMember($value)
  {
  $current = $this->getProperty('member');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('member', $current);
  return $this;
  }

  /**
  * @return Organization|Person|array
  */
  public function getMember()
  {
  return $this->getProperty('member');
  }


  /**
      * The number of membership points earned by the member. If necessary, the
 * unitText can be used to express the units the points are issued in. (E.g.
 * stars, miles, etc.)
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
      * A unique identifier for the membership.
    * @param string|array $value
  * @return $this
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
  * @param string $value
  * @return $this
  */
  public function addMembershipNumber($value)
  {
  $current = $this->getProperty('membershipNumber');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('membershipNumber', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getMembershipNumber()
  {
  return $this->getProperty('membershipNumber');
  }


}
