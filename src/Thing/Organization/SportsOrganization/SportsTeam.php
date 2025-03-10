<?php
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
        * A person that acts as performing member of a sports team; a player as opposed
 * to a coach.
        * @param Person|array|string|mixed $value
    * @return $this
    */
    public function athlete($value)
    {
        $this->setProperty('athlete', $value);
        return $this;
    }

    /**
    * @param Person|array|string|mixed $value
    * @return $this
    */
    public function setAthlete($value)
    {
        $this->setProperty('athlete', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAthlete()
    {
       return $this->getProperty('athlete');
    }


    /**
        * A person that acts in a coaching role for a sports team.
        * @param Person|array|string|mixed $value
    * @return $this
    */
    public function coach($value)
    {
        $this->setProperty('coach', $value);
        return $this;
    }

    /**
    * @param Person|array|string|mixed $value
    * @return $this
    */
    public function setCoach($value)
    {
        $this->setProperty('coach', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCoach()
    {
       return $this->getProperty('coach');
    }


}
