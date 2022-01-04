<?php
namespace Sohophp\SchemaOrg\Thing\Organization;

use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Person;

/**
* An educational organization.
* @see http://schema.org/EducationalOrganization
* @package Sohophp\SchemaOrg\Thing\Organization

*
*/
class EducationalOrganization extends Organization
{

    /**
    * Alumni of an organization.
    * @param Person|array|string $value
    * @return $this
    * @deprecated use setAlumni
    */
    public function alumni($value)
    {
        $this->setProperty('alumni', $value);
        return $this;
    }
   /**
    * @param Person|array|string $value
    * @return $this
    */
    public function setAlumni($value)
    {
        $this->setProperty('alumni', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAlumni()
    {
       return $this->getProperty('alumni');
    }


}
