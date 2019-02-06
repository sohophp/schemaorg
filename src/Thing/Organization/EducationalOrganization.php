<?php

declare (strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Organization;

use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Person;
/**
* An educational organization.
* @see http://schema.org/EducationalOrganization
* @package Sohophp\SchemaOrg\Thing\Organization
*/
class EducationalOrganization extends Organization
{

     
     /**
     * Alumni of an organization.
     * @param Person $value
     * @return $this
     */

     public function alumni(?Person $value):self
     {
        $this->setProperty("alumni",$value);
        return $this;
     }

     
}

