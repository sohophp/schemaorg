<?php
namespace Sohophp\SchemaOrg\Thing\Organization;

use Sohophp\SchemaOrg\Thing\Organization;

/**
* Represents the collection of all sports organizations, including sports teams, governing bodies, and sports associations.
* @see schema:SportsOrganization
* @package Sohophp\SchemaOrg\Thing\Organization
*/
class SportsOrganization extends Organization
{
   /**
        * A type of sport (e.g. Baseball).
        */
    protected $sport = null;


    /**
    * @param array|string $value
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
