<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Organization;

use Sohophp\SchemaOrg\Thing\Organization;

/**
* Represents the collection of all sports organizations, including sports teams, governing bodies, and sports associations.
* @see http://schema.org/SportsOrganization
* @package Sohophp\SchemaOrg\Thing\Organization
*/
class SportsOrganization extends Organization
{

    /**
    * A type of sport (e.g. Baseball).
    * @param string|string $value
    * @return $this
    */
    public function sport($value)
    {
        $this->setProperty('sport', $value);
        return $this;
    }


}

