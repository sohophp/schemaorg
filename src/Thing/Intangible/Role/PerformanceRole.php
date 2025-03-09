<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\Role;

use Sohophp\SchemaOrg\Thing\Intangible\Role;

/**
* A PerformanceRole is a Role that some entity places with regard to a theatrical performance, e.g. in a Movie, TVSeries etc.
* @see schema:PerformanceRole
* @package Sohophp\SchemaOrg\Thing\Intangible\Role
*/
class PerformanceRole extends Role
{
   /**
        * The name of a character played in some acting or performing role, i.e. in a PerformanceRole.
        */
    protected $characterName = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setCharacterName($value)
    {
        $this->setProperty('characterName', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCharacterName()
    {
       return $this->getProperty('characterName');
    }


}
