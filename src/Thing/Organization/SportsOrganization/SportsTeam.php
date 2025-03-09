<?php
namespace Sohophp\SchemaOrg\Thing\Organization\SportsOrganization;

use Sohophp\SchemaOrg\Thing\Organization\SportsOrganization;

/**
* Organization: Sports team.
* @see schema:SportsTeam
* @package Sohophp\SchemaOrg\Thing\Organization\SportsOrganization
*/
class SportsTeam extends SportsOrganization
{
   /**
        * Gender of something, typically a [[Person]], but possibly also fictional characters, animals, etc. While https://schema.org/Male and https://schema.org/Female may be used, text strings are also acceptable for people who do not identify as a binary gender. The [[gender]] property can also be used in an extended sense to cover e.g. the gender of sports teams. As with the gender of individuals, we do not try to enumerate all possibilities. A mixed-gender [[SportsTeam]] can be indicated with a text value of "Mixed".
        */
    protected $gender = null;

   /**
        * A person that acts as performing member of a sports team; a player as opposed to a coach.
        */
    protected $athlete = null;

   /**
        * A person that acts in a coaching role for a sports team.
        */
    protected $coach = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setGender($value)
    {
        $this->setProperty('gender', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getGender()
    {
       return $this->getProperty('gender');
    }

    /**
    * @param array|string $value
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
    * @param array|string $value
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
