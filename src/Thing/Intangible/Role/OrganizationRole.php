<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\Role;

use Sohophp\SchemaOrg\Thing\Intangible\Role;

/**
* A subclass of Role used to describe roles within organizations.
* @see schema:OrganizationRole
* @package Sohophp\SchemaOrg\Thing\Intangible\Role
*/
class OrganizationRole extends Role
{
   /**
        * A number associated with a role in an organization, for example, the number on an athlete's jersey.
        */
    protected $numberedPosition = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setNumberedPosition($value)
    {
        $this->setProperty('numberedPosition', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getNumberedPosition()
    {
       return $this->getProperty('numberedPosition');
    }


}
