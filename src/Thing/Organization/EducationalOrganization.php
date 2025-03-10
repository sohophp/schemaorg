<?php
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
        * @param Person|array|string|mixed $value
    * @return $this
    */
    public function alumni($value)
    {
        $this->setProperty('alumni', $value);
        return $this;
    }

    /**
    * @param Person|array|string|mixed $value
    * @return $this
    */
    public function setAlumni($value)
    {
        $this->setProperty('alumni', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAlumni()
    {
       return $this->getProperty('alumni');
    }


}
