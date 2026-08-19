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
      * A number associated with a role in an organization, for example, the number
 * on an athlete's jersey.
    * @param mixed $value
  * @return $this
  */
  public function numberedPosition($value)
  {
  $this->setProperty('numberedPosition', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function setNumberedPosition($value)
  {
  $this->setProperty('numberedPosition', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function addNumberedPosition($value)
  {
  $current = $this->getProperty('numberedPosition');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('numberedPosition', $current);
  return $this;
  }

  /**
  * @return mixed
  */
  public function getNumberedPosition()
  {
  return $this->getProperty('numberedPosition');
  }


}
