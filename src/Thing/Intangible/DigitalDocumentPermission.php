<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;

/**
* A permission for a particular person or group to access a particular file.
* @see schema:DigitalDocumentPermission
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class DigitalDocumentPermission extends Intangible
{
   /**
        * The type of permission granted the person, organization, or audience.
        */
    protected $permissionType = null;

   /**
        * The person, organization, contact point, or audience that has been granted this permission.
        */
    protected $grantee = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setPermissionType($value)
    {
        $this->setProperty('permissionType', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPermissionType()
    {
       return $this->getProperty('permissionType');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setGrantee($value)
    {
        $this->setProperty('grantee', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getGrantee()
    {
       return $this->getProperty('grantee');
    }


}
