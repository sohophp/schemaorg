<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Intangible\Role;

use Sohophp\SchemaOrg\Thing\Intangible\Role;

/**
* A PerformanceRole is a Role that some entity places with regard to a theatrical performance, e.g. in a Movie, TVSeries etc.
* @see http://schema.org/PerformanceRole
* @package Sohophp\SchemaOrg\Thing\Intangible\Role
*/
class PerformanceRole extends Role
{

    /**
    * The name of a character played in some acting or performing role, i.e. in a PerformanceRole.
    * @param string $value
    * @return $this
    */
    public function characterName(?string $value)
    {
        $this->setProperty('characterName', $value);
        return $this;
    }


}

