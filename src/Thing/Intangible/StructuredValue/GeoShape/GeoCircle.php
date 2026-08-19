<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\GeoShape;

  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\GeoShape;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\GeoCoordinates;
  use Sohophp\SchemaOrg\Quantity\Distance;

/**
  * A GeoCircle is a GeoShape representing a circular geographic area. As it is a
 * GeoShape
 *           it provides the simple textual property 'circle', but also allows
 * the combination of postalCode alongside geoRadius.
 *           The center of the circle can be indicated via the 'geoMidpoint'
 * property, or more approximately using 'address', 'postalCode'.
  * @see schema:GeoCircle
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\GeoShape
*/
class GeoCircle extends GeoShape
{


  /**
      * Indicates the GeoCoordinates at the centre of a GeoShape, e.g. GeoCircle.
    * @param GeoCoordinates|array $value
  * @return $this
  */
  public function geoMidpoint($value)
  {
  $this->setProperty('geoMidpoint', $value);
  return $this;
  }

  /**
  * @param GeoCoordinates|array $value
  * @return $this
  */
  public function setGeoMidpoint($value)
  {
  $this->setProperty('geoMidpoint', $value);
  return $this;
  }

  /**
  * @param GeoCoordinates $value
  * @return $this
  */
  public function addGeoMidpoint($value)
  {
  $current = $this->getProperty('geoMidpoint');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('geoMidpoint', $current);
  return $this;
  }

  /**
  * @return GeoCoordinates|array
  */
  public function getGeoMidpoint()
  {
  return $this->getProperty('geoMidpoint');
  }


  /**
      * Indicates the approximate radius of a GeoCircle (metres unless indicated
 * otherwise via Distance notation).
    * @param string|Distance|array $value
  * @return $this
  */
  public function geoRadius($value)
  {
  $this->setProperty('geoRadius', $value);
  return $this;
  }

  /**
  * @param string|Distance|array $value
  * @return $this
  */
  public function setGeoRadius($value)
  {
  $this->setProperty('geoRadius', $value);
  return $this;
  }

  /**
  * @param string|Distance $value
  * @return $this
  */
  public function addGeoRadius($value)
  {
  $current = $this->getProperty('geoRadius');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('geoRadius', $current);
  return $this;
  }

  /**
  * @return string|Distance|array
  */
  public function getGeoRadius()
  {
  return $this->getProperty('geoRadius');
  }


}
