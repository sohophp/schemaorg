<?php
namespace Sohophp\SchemaOrg\Thing\Place\CivicStructure;

use Sohophp\SchemaOrg\Thing\Place\CivicStructure;

/**
* An educational organization.
* @see schema:EducationalOrganization
* @package Sohophp\SchemaOrg\Thing\Place\CivicStructure
*/
class EducationalOrganization extends CivicStructure
{
   /**
        * Alumni of an organization.
        */
    protected $alumni = null;


    /**
    * @param array|string $value
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
