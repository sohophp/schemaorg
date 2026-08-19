<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

  use Sohophp\SchemaOrg\Thing\Intangible;
  use Sohophp\SchemaOrg\Thing\Place\AdministrativeArea;

/**
  * Intended audience for an item, i.e. the group for whom the item was created.
  * @see schema:Audience
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class Audience extends Intangible
{


  /**
      * The target group associated with a given audience (e.g. veterans, car owners,
 * musicians, etc.).
    * @param string|array $value
  * @return $this
  */
  public function audienceType($value)
  {
  $this->setProperty('audienceType', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setAudienceType($value)
  {
  $this->setProperty('audienceType', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addAudienceType($value)
  {
  $current = $this->getProperty('audienceType');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('audienceType', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getAudienceType()
  {
  return $this->getProperty('audienceType');
  }


  /**
      * The geographic area associated with the audience.
    * @param AdministrativeArea|array $value
  * @return $this
  */
  public function geographicArea($value)
  {
  $this->setProperty('geographicArea', $value);
  return $this;
  }

  /**
  * @param AdministrativeArea|array $value
  * @return $this
  */
  public function setGeographicArea($value)
  {
  $this->setProperty('geographicArea', $value);
  return $this;
  }

  /**
  * @param AdministrativeArea $value
  * @return $this
  */
  public function addGeographicArea($value)
  {
  $current = $this->getProperty('geographicArea');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('geographicArea', $current);
  return $this;
  }

  /**
  * @return AdministrativeArea|array
  */
  public function getGeographicArea()
  {
  return $this->getProperty('geographicArea');
  }


}
