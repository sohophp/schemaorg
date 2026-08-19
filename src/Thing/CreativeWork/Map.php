<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

  use Sohophp\SchemaOrg\Thing\CreativeWork;
  use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\MapCategoryType;

/**
  * A map.
  * @see schema:Map
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class Map extends CreativeWork
{


  /**
      * Indicates the kind of Map, from the MapCategoryType Enumeration.
    * @param MapCategoryType|array $value
  * @return $this
  */
  public function mapType($value)
  {
  $this->setProperty('mapType', $value);
  return $this;
  }

  /**
  * @param MapCategoryType|array $value
  * @return $this
  */
  public function setMapType($value)
  {
  $this->setProperty('mapType', $value);
  return $this;
  }

  /**
  * @param MapCategoryType $value
  * @return $this
  */
  public function addMapType($value)
  {
  $current = $this->getProperty('mapType');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('mapType', $current);
  return $this;
  }

  /**
  * @return MapCategoryType|array
  */
  public function getMapType()
  {
  return $this->getProperty('mapType');
  }


}
