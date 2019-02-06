<?php

declare (strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Person;
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

     public function membershipNumber(?string $value):self
     {
        $this->setProperty("membershipNumber",$value);
        return $this;
     }

     
     /**
     * A member of this organization.
     * @param Organization|Person $value
     * @return $this
     */

     public function members( $value):self
     {
        $this->setProperty("members",$value);
        return $this;
     }

     
     /**
     * A member of an Organization or a ProgramMembership. Organizations can be members of organizations; ProgramMembership is typically for individuals.
     * @param Person|Organization $value
     * @return $this
     */

     public function member( $value):self
     {
        $this->setProperty("member",$value);
        return $this;
     }

     
     /**
     * The program providing the membership.
     * @param string $value
     * @return $this
     */

     public function programName(?string $value):self
     {
        $this->setProperty("programName",$value);
        return $this;
     }

     
     /**
     * The organization (airline, travelers' club, etc.) the membership is made with.
     * @param Organization $value
     * @return $this
     */

     public function hostingOrganization(?Organization $value):self
     {
        $this->setProperty("hostingOrganization",$value);
        return $this;
     }

     
}

