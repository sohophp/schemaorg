<?php
namespace Sohophp\SchemaOrg\Thing\Organization;

use Sohophp\SchemaOrg\Thing\Organization;

/**
* Represents the collection of all sports organizations, including sports
 * teams, governing bodies, and sports associations.
* @see http://schema.org/SportsOrganization
* @package Sohophp\SchemaOrg\Thing\Organization
*/
class SportsOrganization extends Organization
{


    /**
        * A type of sport (e.g. Baseball).
        * @param string|string|array|mixed $value
    * @return $this
    */
    public function sport($value)
    {
        $this->setProperty('sport', $value);
        return $this;
    }

    /**
    * @param string|string|array|mixed $value
    * @return $this
    */
    public function setSport($value)
    {
        $this->setProperty('sport', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSport()
    {
       return $this->getProperty('sport');
    }


}
