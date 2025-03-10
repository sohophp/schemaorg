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
        * @param array|string|mixed $value
    * @return $this
    */
    public function permissionType($value)
    {
        $this->setProperty('permissionType', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The person, organization, contact point, or audience that has been granted
 * this permission.
        * @param array|string|mixed $value
    * @return $this
    */
    public function grantee($value)
    {
        $this->setProperty('grantee', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
