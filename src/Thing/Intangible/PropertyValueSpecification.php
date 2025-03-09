<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;

/**
* A Property value specification.
* @see schema:PropertyValueSpecification
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class PropertyValueSpecification extends Intangible
{
   /**
        * The stepValue attribute indicates the granularity that is expected (and required) of the value in a PropertyValueSpecification.
        */
    protected $stepValue = null;

   /**
        * The upper value of some characteristic or property.
        */
    protected $maxValue = null;

   /**
        * The default value of the input.  For properties that expect a literal, the default is a literal value, for properties that expect an object, it's an ID reference to one of the current values.
        */
    protected $defaultValue = null;

   /**
        * Specifies a regular expression for testing literal values according to the HTML spec.
        */
    protected $valuePattern = null;

   /**
        * Specifies the minimum allowed range for number of characters in a literal value.
        */
    protected $valueMinLength = null;

   /**
        * Indicates the name of the PropertyValueSpecification to be used in URL templates and form encoding in a manner analogous to HTML's input@name.
        */
    protected $valueName = null;

   /**
        * Whether or not a property is mutable.  Default is false. Specifying this for a property that also has a value makes it act similar to a "hidden" input in an HTML form.
        */
    protected $readonlyValue = null;

   /**
        * Whether multiple values are allowed for the property.  Default is false.
        */
    protected $multipleValues = null;

   /**
        * Specifies the allowed range for number of characters in a literal value.
        */
    protected $valueMaxLength = null;

   /**
        * Whether the property must be filled in to complete the action.  Default is false.
        */
    protected $valueRequired = null;

   /**
        * The lower value of some characteristic or property.
        */
    protected $minValue = null;


    /**
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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

    /**
    * @param array|string $value
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


}
