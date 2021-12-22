<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\GeoShape;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\GeoShape;
use Sohophp\SchemaOrg\Thing\Intangible\Quantity\Distance;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\GeoCoordinates;

/**
* A GeoCircle is a GeoShape representing a circular geographic area. As it is a GeoShape
          it provides the simple textual property 'circle', but also allows the combination of postalCode alongside geoRadius.
          The center of the circle can be indicated via the 'geoMidpoint' property, or more approximately using 'address', 'postalCode'.
* @see http://schema.org/GeoCircle
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\GeoShape

*
*/
class GeoCircle extends GeoShape
{

    /**
    * Indicates the approximate radius of a GeoCircle (metres unless indicated otherwise via Distance notation).
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
    * @return $this|string|array
    */
    public function getGeoRadius()
    {
       return $this->getProperty('geoRadius');
    }

    /**
    * Indicates the GeoCoordinates at the centre of a GeoShape e.g. GeoCircle.
    * @param GeoCoordinates|array $value
    * @return $this
    */
    public function geoMidpoint(?GeoCoordinates $value)
    {
        $this->setProperty('geoMidpoint', $value);
        return $this;
    }
   /**
    * @param GeoCoordinates|array $value
    * @return $this
    */
    public function setGeoMidpoint(?GeoCoordinates $value)
    {
        $this->setProperty('geoMidpoint', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getGeoMidpoint()
    {
       return $this->getProperty('geoMidpoint');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\StructuredValue\\GeoShape\\GeoCircle','Thing\\GeoCircle');

