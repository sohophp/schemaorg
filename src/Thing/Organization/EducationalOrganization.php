<?php declare(strict_types=1);
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
    * @param Person|array $value
    * @return $this
    */
    public function alumni(?Person $value)
    {
        $this->setProperty('alumni', $value);
        return $this;
    }
   /**
    * @param Person|array $value
    * @return $this
    */
    public function setAlumni(?Person $value)
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


class_alias('Sohophp\\SchemaOrg\\Thing\\Organization\\EducationalOrganization','Thing\\EducationalOrganization');

