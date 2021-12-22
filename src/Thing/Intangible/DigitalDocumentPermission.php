<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Intangible\Audience;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\DigitalDocumentPermissionType;

/**
* A permission for a particular person or group to access a particular file.
* @see http://schema.org/DigitalDocumentPermission
* @package Sohophp\SchemaOrg\Thing\Intangible

*
*/
class DigitalDocumentPermission extends Intangible
{

    /**
    * The person, organization, contact point, or audience that has been granted this permission.
    * @param ContactPoint|Person|Audience|Organization|array $value
    * @return $this
    */
    public function grantee($value)
    {
        $this->setProperty('grantee', $value);
        return $this;
    }
   /**
    * @param ContactPoint|Person|Audience|Organization|array $value
    * @return $this
    */
    public function setGrantee($value)
    {
        $this->setProperty('grantee', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getGrantee()
    {
       return $this->getProperty('grantee');
    }

    /**
    * The type of permission granted the person, organization, or audience.
    * @param DigitalDocumentPermissionType|array $value
    * @return $this
    */
    public function permissionType(?DigitalDocumentPermissionType $value)
    {
        $this->setProperty('permissionType', $value);
        return $this;
    }
   /**
    * @param DigitalDocumentPermissionType|array $value
    * @return $this
    */
    public function setPermissionType(?DigitalDocumentPermissionType $value)
    {
        $this->setProperty('permissionType', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getPermissionType()
    {
       return $this->getProperty('permissionType');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\DigitalDocumentPermission','Thing\\DigitalDocumentPermission');

