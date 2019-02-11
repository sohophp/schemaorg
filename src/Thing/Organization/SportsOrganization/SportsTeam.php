<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Organization\SportsOrganization;

use Sohophp\SchemaOrg\Thing\Organization\SportsOrganization;
use Sohophp\SchemaOrg\Thing\Person;

/**
* Organization: Sports team.
* @see http://schema.org/SportsTeam
* @package Sohophp\SchemaOrg\Thing\Organization\SportsOrganization
*/
class SportsTeam extends SportsOrganization
{

    /**
    * A person that acts as performing member of a sports team; a player as opposed to a coach.
    * @param Person $value
    * @return $this
    */
    public function athlete(?Person $value)
    {
        $this->setProperty('athlete', $value);
        return $this;
    }

    /**
    * A person that acts in a coaching role for a sports team.
    * @param Person $value
    * @return $this
    */
    public function coach(?Person $value)
    {
        $this->setProperty('coach', $value);
        return $this;
    }


}

