<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing;

/**
* A Property value specification.
* @see http://schema.org/PropertyValueSpecification
* @package Sohophp\SchemaOrg\Thing\Intangible

*
*/
class PropertyValueSpecification extends Intangible
{

    /**
    * The default value of the input.  For properties that expect a literal, the default is a literal value, for properties that expect an object, it's an ID reference to one of the current values.
    * @param Thing|string|array $value
    * @return $this
    */
    public function defaultValue($value)
    {
        $this->setProperty('defaultValue', $value);
        return $this;
    }
   /**
    * @param Thing|string|array $value
    * @return $this
    */
    public function setDefaultValue($value)
    {
        $this->setProperty('defaultValue', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getDefaultValue()
    {
       return $this->getProperty('defaultValue');
    }

    /**
    * The lower value of some characteristic or property.
    * @param |array $value
    * @return $this
    */
    public function minValue($value)
    {
        $this->setProperty('minValue', $value);
        return $this;
    }
   /**
    * @param |array $value
    * @return $this
    */
    public function setMinValue($value)
    {
        $this->setProperty('minValue', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getMinValue()
    {
       return $this->getProperty('minValue');
    }

    /**
    * Specifies a regular expression for testing literal values according to the HTML spec.
    * @param string|array $value
    * @return $this
    */
    public function valuePattern(?string $value)
    {
        $this->setProperty('valuePattern', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setValuePattern(?string $value)
    {
        $this->setProperty('valuePattern', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getValuePattern()
    {
       return $this->getProperty('valuePattern');
    }

    /**
    * The stepValue attribute indicates the granularity that is expected (and required) of the value in a PropertyValueSpecification.
    * @param |array $value
    * @return $this
    */
    public function stepValue($value)
    {
        $this->setProperty('stepValue', $value);
        return $this;
    }
   /**
    * @param |array $value
    * @return $this
    */
    public function setStepValue($value)
    {
        $this->setProperty('stepValue', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getStepValue()
    {
       return $this->getProperty('stepValue');
    }

    /**
    * Specifies the minimum allowed range for number of characters in a literal value.
    * @param |array $value
    * @return $this
    */
    public function valueMinLength($value)
    {
        $this->setProperty('valueMinLength', $value);
        return $this;
    }
   /**
    * @param |array $value
    * @return $this
    */
    public function setValueMinLength($value)
    {
        $this->setProperty('valueMinLength', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getValueMinLength()
    {
       return $this->getProperty('valueMinLength');
    }

    /**
    * Specifies the allowed range for number of characters in a literal value.
    * @param |array $value
    * @return $this
    */
    public function valueMaxLength($value)
    {
        $this->setProperty('valueMaxLength', $value);
        return $this;
    }
   /**
    * @param |array $value
    * @return $this
    */
    public function setValueMaxLength($value)
    {
        $this->setProperty('valueMaxLength', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getValueMaxLength()
    {
       return $this->getProperty('valueMaxLength');
    }

    /**
    * Whether or not a property is mutable.  Default is false. Specifying this for a property that also has a value makes it act similar to a "hidden" input in an HTML form.
    * @param bool|array $value
    * @return $this
    */
    public function readonlyValue(?bool $value)
    {
        $this->setProperty('readonlyValue', $value);
        return $this;
    }
   /**
    * @param bool|array $value
    * @return $this
    */
    public function setReadonlyValue(?bool $value)
    {
        $this->setProperty('readonlyValue', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getReadonlyValue()
    {
       return $this->getProperty('readonlyValue');
    }

    /**
    * The upper value of some characteristic or property.
    * @param |array $value
    * @return $this
    */
    public function maxValue($value)
    {
        $this->setProperty('maxValue', $value);
        return $this;
    }
   /**
    * @param |array $value
    * @return $this
    */
    public function setMaxValue($value)
    {
        $this->setProperty('maxValue', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getMaxValue()
    {
       return $this->getProperty('maxValue');
    }

    /**
    * Indicates the name of the PropertyValueSpecification to be used in URL templates and form encoding in a manner analogous to HTML's input@name.
    * @param string|array $value
    * @return $this
    */
    public function valueName(?string $value)
    {
        $this->setProperty('valueName', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setValueName(?string $value)
    {
        $this->setProperty('valueName', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getValueName()
    {
       return $this->getProperty('valueName');
    }

    /**
    * Whether multiple values are allowed for the property.  Default is false.
    * @param bool|array $value
    * @return $this
    */
    public function multipleValues(?bool $value)
    {
        $this->setProperty('multipleValues', $value);
        return $this;
    }
   /**
    * @param bool|array $value
    * @return $this
    */
    public function setMultipleValues(?bool $value)
    {
        $this->setProperty('multipleValues', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getMultipleValues()
    {
       return $this->getProperty('multipleValues');
    }

    /**
    * Whether the property must be filled in to complete the action.  Default is false.
    * @param bool|array $value
    * @return $this
    */
    public function valueRequired(?bool $value)
    {
        $this->setProperty('valueRequired', $value);
        return $this;
    }
   /**
    * @param bool|array $value
    * @return $this
    */
    public function setValueRequired(?bool $value)
    {
        $this->setProperty('valueRequired', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getValueRequired()
    {
       return $this->getProperty('valueRequired');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\PropertyValueSpecification','Thing\\PropertyValueSpecification');

