<?php
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
        * The default value of the input.  For properties that expect a literal, the
 * default is a literal value, for properties that expect an object, it's an ID
 * reference to one of the current values.
        * @param Thing|string|array|mixed $value
    * @return $this
    */
    public function defaultValue($value)
    {
        $this->setProperty('defaultValue', $value);
        return $this;
    }

    /**
    * @param Thing|string|array|mixed $value
    * @return $this
    */
    public function setDefaultValue($value)
    {
        $this->setProperty('defaultValue', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDefaultValue()
    {
       return $this->getProperty('defaultValue');
    }


    /**
        * The lower value of some characteristic or property.
        * @param array|string|mixed $value
    * @return $this
    */
    public function minValue($value)
    {
        $this->setProperty('minValue', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setMinValue($value)
    {
        $this->setProperty('minValue', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getMinValue()
    {
       return $this->getProperty('minValue');
    }


    /**
        * Specifies a regular expression for testing literal values according to the
 * HTML spec.
        * @param string|array|mixed $value
    * @return $this
    */
    public function valuePattern($value)
    {
        $this->setProperty('valuePattern', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setValuePattern($value)
    {
        $this->setProperty('valuePattern', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getValuePattern()
    {
       return $this->getProperty('valuePattern');
    }


    /**
        * The stepValue attribute indicates the granularity that is expected (and
 * required) of the value in a PropertyValueSpecification.
        * @param array|string|mixed $value
    * @return $this
    */
    public function stepValue($value)
    {
        $this->setProperty('stepValue', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setStepValue($value)
    {
        $this->setProperty('stepValue', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getStepValue()
    {
       return $this->getProperty('stepValue');
    }


    /**
        * Specifies the minimum allowed range for number of characters in a literal
 * value.
        * @param array|string|mixed $value
    * @return $this
    */
    public function valueMinLength($value)
    {
        $this->setProperty('valueMinLength', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setValueMinLength($value)
    {
        $this->setProperty('valueMinLength', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getValueMinLength()
    {
       return $this->getProperty('valueMinLength');
    }


    /**
        * Specifies the allowed range for number of characters in a literal value.
        * @param array|string|mixed $value
    * @return $this
    */
    public function valueMaxLength($value)
    {
        $this->setProperty('valueMaxLength', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setValueMaxLength($value)
    {
        $this->setProperty('valueMaxLength', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getValueMaxLength()
    {
       return $this->getProperty('valueMaxLength');
    }


    /**
        * Whether or not a property is mutable.  Default is false. Specifying this for
 * a property that also has a value makes it act similar to a "hidden" input in
 * an HTML form.
        * @param bool|array|string|mixed $value
    * @return $this
    */
    public function readonlyValue($value)
    {
        $this->setProperty('readonlyValue', $value);
        return $this;
    }

    /**
    * @param bool|array|string|mixed $value
    * @return $this
    */
    public function setReadonlyValue($value)
    {
        $this->setProperty('readonlyValue', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getReadonlyValue()
    {
       return $this->getProperty('readonlyValue');
    }


    /**
        * The upper value of some characteristic or property.
        * @param array|string|mixed $value
    * @return $this
    */
    public function maxValue($value)
    {
        $this->setProperty('maxValue', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setMaxValue($value)
    {
        $this->setProperty('maxValue', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getMaxValue()
    {
       return $this->getProperty('maxValue');
    }


    /**
        * Indicates the name of the PropertyValueSpecification to be used in URL
 * templates and form encoding in a manner analogous to HTML's input@name.
        * @param string|array|mixed $value
    * @return $this
    */
    public function valueName($value)
    {
        $this->setProperty('valueName', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setValueName($value)
    {
        $this->setProperty('valueName', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getValueName()
    {
       return $this->getProperty('valueName');
    }


    /**
        * Whether multiple values are allowed for the property.  Default is false.
        * @param bool|array|string|mixed $value
    * @return $this
    */
    public function multipleValues($value)
    {
        $this->setProperty('multipleValues', $value);
        return $this;
    }

    /**
    * @param bool|array|string|mixed $value
    * @return $this
    */
    public function setMultipleValues($value)
    {
        $this->setProperty('multipleValues', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getMultipleValues()
    {
       return $this->getProperty('multipleValues');
    }


    /**
        * Whether the property must be filled in to complete the action.  Default is
 * false.
        * @param bool|array|string|mixed $value
    * @return $this
    */
    public function valueRequired($value)
    {
        $this->setProperty('valueRequired', $value);
        return $this;
    }

    /**
    * @param bool|array|string|mixed $value
    * @return $this
    */
    public function setValueRequired($value)
    {
        $this->setProperty('valueRequired', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getValueRequired()
    {
       return $this->getProperty('valueRequired');
    }


}
