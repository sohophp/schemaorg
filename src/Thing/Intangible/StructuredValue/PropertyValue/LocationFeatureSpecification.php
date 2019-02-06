<?php

declare (strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PropertyValue;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PropertyValue;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\OpeningHoursSpecification;
/**
* Specifies a location feature by providing a structured value representing a feature of an accommodation as a property-value pair of varying degrees of formality.
* @see http://schema.org/LocationFeatureSpecification
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PropertyValue
*/
class LocationFeatureSpecification extends PropertyValue
{

     
     /**
     * The hours during which this service or contact is available.
     * @param OpeningHoursSpecification $value
     * @return $this
     */

     public function hoursAvailable(?OpeningHoursSpecification $value):self
     {
        $this->setProperty("hoursAvailable",$value);
        return $this;
     }

     
     /**
     * The date when the item becomes valid.
     * @param  $value
     * @return $this
     */

     public function validFrom( $value):self
     {
        $this->setProperty("validFrom",$value);
        return $this;
     }

     
     /**
     * The date after when the item is not valid. For example the end of an offer, salary period, or a period of opening hours.
     * @param  $value
     * @return $this
     */

     public function validThrough( $value):self
     {
        $this->setProperty("validThrough",$value);
        return $this;
     }

     
}

