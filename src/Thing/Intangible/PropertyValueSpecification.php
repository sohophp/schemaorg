<?php

declare (strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing;
/**
* A Property value specification.
* @see http://schema.org/PropertyValueSpecification
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class PropertyValueSpecification extends Intangible
{

     
     /**
     * The default value of the input.  For properties that expect a literal, the default is a literal value, for properties that expect an object, it's an ID reference to one of the current values.
     * @param string|Thing $value
     * @return $this
     */

     public function defaultValue( $value):self
     {
        $this->setProperty("defaultValue",$value);
        return $this;
     }

     
     /**
     * Specifies a regular expression for testing literal values according to the HTML spec.
     * @param string $value
     * @return $this
     */

     public function valuePattern(?string $value):self
     {
        $this->setProperty("valuePattern",$value);
        return $this;
     }

     
     /**
     * The stepValue attribute indicates the granularity that is expected (and required) of the value in a PropertyValueSpecification.
     * @param  $value
     * @return $this
     */

     public function stepValue( $value):self
     {
        $this->setProperty("stepValue",$value);
        return $this;
     }

     
     /**
     * Specifies the allowed range for number of characters in a literal value.
     * @param  $value
     * @return $this
     */

     public function valueMaxLength( $value):self
     {
        $this->setProperty("valueMaxLength",$value);
        return $this;
     }

     
     /**
     * Whether or not a property is mutable.  Default is false. Specifying this for a property that also has a value makes it act similar to a "hidden" input in an HTML form.
     * @param bool $value
     * @return $this
     */

     public function readonlyValue(?bool $value):self
     {
        $this->setProperty("readonlyValue",$value);
        return $this;
     }

     
     /**
     * Specifies the minimum allowed range for number of characters in a literal value.
     * @param  $value
     * @return $this
     */

     public function valueMinLength( $value):self
     {
        $this->setProperty("valueMinLength",$value);
        return $this;
     }

     
     /**
     * The upper value of some characteristic or property.
     * @param  $value
     * @return $this
     */

     public function maxValue( $value):self
     {
        $this->setProperty("maxValue",$value);
        return $this;
     }

     
     /**
     * Indicates the name of the PropertyValueSpecification to be used in URL templates and form encoding in a manner analogous to HTML's input@name.
     * @param string $value
     * @return $this
     */

     public function valueName(?string $value):self
     {
        $this->setProperty("valueName",$value);
        return $this;
     }

     
     /**
     * Whether multiple values are allowed for the property.  Default is false.
     * @param bool $value
     * @return $this
     */

     public function multipleValues(?bool $value):self
     {
        $this->setProperty("multipleValues",$value);
        return $this;
     }

     
     /**
     * The lower value of some characteristic or property.
     * @param  $value
     * @return $this
     */

     public function minValue( $value):self
     {
        $this->setProperty("minValue",$value);
        return $this;
     }

     
     /**
     * Whether the property must be filled in to complete the action.  Default is false.
     * @param bool $value
     * @return $this
     */

     public function valueRequired(?bool $value):self
     {
        $this->setProperty("valueRequired",$value);
        return $this;
     }

     
}

