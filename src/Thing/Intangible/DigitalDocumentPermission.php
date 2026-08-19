<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

  use Sohophp\SchemaOrg\Thing\Intangible;
  use Sohophp\SchemaOrg\Thing\Organization;
  use Sohophp\SchemaOrg\Thing\Person;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint;
  use Sohophp\SchemaOrg\Thing\Intangible\Audience;
  use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\DigitalDocumentPermissionType;

/**
  * A permission for a particular person or group to access a particular file.
  * @see schema:DigitalDocumentPermission
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class DigitalDocumentPermission extends Intangible
{


  /**
      * The person, organization, contact point, or audience that has been granted
 * this permission.
    * @param Organization|Person|ContactPoint|Audience|array $value
  * @return $this
  */
  public function grantee($value)
  {
  $this->setProperty('grantee', $value);
  return $this;
  }

  /**
  * @param Organization|Person|ContactPoint|Audience|array $value
  * @return $this
  */
  public function setGrantee($value)
  {
  $this->setProperty('grantee', $value);
  return $this;
  }

  /**
  * @param Organization|Person|ContactPoint|Audience $value
  * @return $this
  */
  public function addGrantee($value)
  {
  $current = $this->getProperty('grantee');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('grantee', $current);
  return $this;
  }

  /**
  * @return Organization|Person|ContactPoint|Audience|array
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
  public function permissionType($value)
  {
  $this->setProperty('permissionType', $value);
  return $this;
  }

  /**
  * @param DigitalDocumentPermissionType|array $value
  * @return $this
  */
  public function setPermissionType($value)
  {
  $this->setProperty('permissionType', $value);
  return $this;
  }

  /**
  * @param DigitalDocumentPermissionType $value
  * @return $this
  */
  public function addPermissionType($value)
  {
  $current = $this->getProperty('permissionType');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('permissionType', $current);
  return $this;
  }

  /**
  * @return DigitalDocumentPermissionType|array
  */
  public function getPermissionType()
  {
  return $this->getProperty('permissionType');
  }


}
