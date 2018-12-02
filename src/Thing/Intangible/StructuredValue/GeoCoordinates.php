<?php

declare (strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;
/**
* The geographic coordinates of a place or event.
* @see http://schema.org/GeoCoordinates
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue
*/
class GeoCoordinates extends StructuredValue
{

     
     /**
     * The latitude of a location. For example <code>37.42242</code> (<a href="https://en.wikipedia.org/wiki/World_Geodetic_System">WGS 84</a>).
     * @param string $value
     * @return $this
     */

     public function latitude(?string $value):self
     {
        $this->setProperty("latitude",$value);
        return $this;
     }

     
     /**
     * The longitude of a location. For example <code>-122.08585</code> (<a href="https://en.wikipedia.org/wiki/World_Geodetic_System">WGS 84</a>).
     * @param string $value
     * @return $this
     */

     public function longitude(?string $value):self
     {
        $this->setProperty("longitude",$value);
        return $this;
     }

     
}

