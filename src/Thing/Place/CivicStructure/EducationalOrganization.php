<?php
namespace Sohophp\SchemaOrg\Thing\Place\CivicStructure;

  use Sohophp\SchemaOrg\Thing\Place\CivicStructure;
  use Sohophp\SchemaOrg\Thing\Person;

/**
  * An educational organization.
  * @see schema:EducationalOrganization
* @package Sohophp\SchemaOrg\Thing\Place\CivicStructure
*/
class EducationalOrganization extends CivicStructure
{


  /**
      * Alumni of an organization.
    * @param Person|array $value
  * @return $this
  */
  public function alumni($value)
  {
  $this->setProperty('alumni', $value);
  return $this;
  }

  /**
  * @param Person|array $value
  * @return $this
  */
  public function setAlumni($value)
  {
  $this->setProperty('alumni', $value);
  return $this;
  }

  /**
  * @param Person $value
  * @return $this
  */
  public function addAlumni($value)
  {
  $current = $this->getProperty('alumni');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('alumni', $current);
  return $this;
  }

  /**
  * @return Person|array
  */
  public function getAlumni()
  {
  return $this->getProperty('alumni');
  }


}
