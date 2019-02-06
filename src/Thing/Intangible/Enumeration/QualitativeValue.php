<?php

declare (strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible\Enumeration;

use Sohophp\SchemaOrg\Thing\Intangible\Enumeration;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PropertyValue;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;
/**
* A predefined value for a product characteristic, e.g. the power cord plug type 'US' or the garment sizes 'S', 'M', 'L', and 'XL'.
* @see http://schema.org/QualitativeValue
* @package Sohophp\SchemaOrg\Thing\Intangible\Enumeration
*/
class QualitativeValue extends Enumeration
{

     
     /**
     * This ordering relation for qualitative values indicates that the subject is greater than the object.
     * @param QualitativeValue $value
     * @return $this
     */

     public function greater(?QualitativeValue $value):self
     {
        $this->setProperty("greater",$value);
        return $this;
     }

     
     /**
     * This ordering relation for qualitative values indicates that the subject is equal to the object.
     * @param QualitativeValue $value
     * @return $this
     */

     public function equal(?QualitativeValue $value):self
     {
        $this->setProperty("equal",$value);
        return $this;
     }

     
     /**
     * This ordering relation for qualitative values indicates that the subject is not equal to the object.
     * @param QualitativeValue $value
     * @return $this
     */

     public function nonEqual(?QualitativeValue $value):self
     {
        $this->setProperty("nonEqual",$value);
        return $this;
     }

     
     /**
     * A property-value pair representing an additional characteristics of the entitity, e.g. a product feature or another characteristic for which there is no matching property in schema.org.<br/><br/>

Note: Publishers should be aware that applications designed to use specific schema.org properties (e.g. http://schema.org/width, http://schema.org/color, http://schema.org/gtin13, ...) will typically expect such data to be provided using those properties, rather than using the generic property/value mechanism.
     * @param PropertyValue $value
     * @return $this
     */

     public function additionalProperty(?PropertyValue $value):self
     {
        $this->setProperty("additionalProperty",$value);
        return $this;
     }

     
     /**
     * This ordering relation for qualitative values indicates that the subject is lesser than the object.
     * @param QualitativeValue $value
     * @return $this
     */

     public function lesser(?QualitativeValue $value):self
     {
        $this->setProperty("lesser",$value);
        return $this;
     }

     
     /**
     * A pointer to a secondary value that provides additional information on the original value, e.g. a reference temperature.
     * @param Enumeration|QuantitativeValue|PropertyValue|StructuredValue|QualitativeValue $value
     * @return $this
     */

     public function valueReference( $value):self
     {
        $this->setProperty("valueReference",$value);
        return $this;
     }

     
     /**
     * This ordering relation for qualitative values indicates that the subject is lesser than or equal to the object.
     * @param QualitativeValue $value
     * @return $this
     */

     public function lesserOrEqual(?QualitativeValue $value):self
     {
        $this->setProperty("lesserOrEqual",$value);
        return $this;
     }

     
     /**
     * This ordering relation for qualitative values indicates that the subject is greater than or equal to the object.
     * @param QualitativeValue $value
     * @return $this
     */

     public function greaterOrEqual(?QualitativeValue $value):self
     {
        $this->setProperty("greaterOrEqual",$value);
        return $this;
     }

     
}

