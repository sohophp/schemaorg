<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

/**
*  A point value or interval for product characteristics and other purposes.
* @see schema:QuantitativeValue
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue
*/
class QuantitativeValue extends StructuredValue
{
   /**
        * The upper value of some characteristic or property.
        */
    protected $maxValue = null;

   /**
        * A secondary value that provides additional information on the original value, e.g. a reference temperature or a type of measurement.
        */
    protected $valueReference = null;

   /**
        * A property-value pair representing an additional characteristic of the entity, e.g. a product feature or another characteristic for which there is no matching property in schema.org.\n\nNote: Publishers should be aware that applications designed to use specific schema.org properties (e.g. https://schema.org/width, https://schema.org/color, https://schema.org/gtin13, ...) will typically expect such data to be provided using those properties, rather than using the generic property/value mechanism.

        */
    protected $additionalProperty = null;

   /**
        * A string or text indicating the unit of measurement. Useful if you cannot provide a standard unit code for
<a href='unitCode'>unitCode</a>.
        */
    protected $unitText = null;

   /**
        * The value of a [[QuantitativeValue]] (including [[Observation]]) or property value node.\n\n* For [[QuantitativeValue]] and [[MonetaryAmount]], the recommended type for values is 'Number'.\n* For [[PropertyValue]], it can be 'Text', 'Number', 'Boolean', or 'StructuredValue'.\n* Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE' (U+0039)) rather than superficially similar Unicode symbols.\n* Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal point. Avoid using these symbols as a readability separator.
        */
    protected $value = null;

   /**
        * The lower value of some characteristic or property.
        */
    protected $minValue = null;

   /**
        * The unit of measurement given using the UN/CEFACT Common Code (3 characters) or a URL. Other codes than the UN/CEFACT Common Code may be used with a prefix followed by a colon.
        */
    protected $unitCode = null;


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
    public function setValueReference($value)
    {
        $this->setProperty('valueReference', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getValueReference()
    {
       return $this->getProperty('valueReference');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setAdditionalProperty($value)
    {
        $this->setProperty('additionalProperty', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAdditionalProperty()
    {
       return $this->getProperty('additionalProperty');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setUnitText($value)
    {
        $this->setProperty('unitText', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getUnitText()
    {
       return $this->getProperty('unitText');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setValue($value)
    {
        $this->setProperty('value', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getValue()
    {
       return $this->getProperty('value');
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

    /**
    * @param array|string $value
    * @return $this
    */
    public function setUnitCode($value)
    {
        $this->setProperty('unitCode', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getUnitCode()
    {
       return $this->getProperty('unitCode');
    }


}
