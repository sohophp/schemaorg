<?php

declare (strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;
/**
* A property-value pair, e.g. representing a feature of a product or place. Use the 'name' property for the name of the property. If there is an additional human-readable version of the value, put that into the 'description' property.<br/><br/>

Always use specific schema.org properties when a) they exist and b) you can populate them. Using PropertyValue as a substitute will typically not trigger the same effect as using the original, specific property.
* @see http://schema.org/PropertyValue
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue
*/
class PropertyValue extends StructuredValue
{

     
     /**
     * A commonly used identifier for the characteristic represented by the property, e.g. a manufacturer or a standard code for a property. propertyID can be
(1) a prefixed string, mainly meant to be used with standards for product properties; (2) a site-specific, non-prefixed string (e.g. the primary key of the property or the vendor-specific id of the property), or (3)
a URL indicating the type of the property, either pointing to an external vocabulary, or a Web resource that describes the property (e.g. a glossary entry).
Standards bodies should promote a standard prefix for the identifiers of properties from their standards.
     * @param string|string $value
     * @return $this
     */

     public function propertyID( $value):self
     {
        $this->setProperty("propertyID",$value);
        return $this;
     }

     
}

