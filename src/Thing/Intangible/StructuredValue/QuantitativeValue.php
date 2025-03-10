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
        * A secondary value that provides additional information on the original value,
 * e.g. a reference temperature or a type of measurement.
        * @param array|string|mixed $value
    * @return $this
    */
    public function valueReference($value)
    {
        $this->setProperty('valueReference', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * A property-value pair representing an additional characteristic of the
 * entity, e.g. a product feature or another characteristic for which there is
 * no matching property in schema.org.
 * 
 * Note: Publishers should be aware that applications designed to use specific
 * schema.org properties (e.g. https://schema.org/width,
 * https://schema.org/color, https://schema.org/gtin13, ...) will typically
 * expect such data to be provided using those properties, rather than using the
 * generic property/value mechanism.
        * @param array|string|mixed $value
    * @return $this
    */
    public function additionalProperty($value)
    {
        $this->setProperty('additionalProperty', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * A string or text indicating the unit of measurement. Useful if you cannot
 * provide a standard unit code for
 * <a href='unitCode'>unitCode</a>.
        * @param array|string|mixed $value
    * @return $this
    */
    public function unitText($value)
    {
        $this->setProperty('unitText', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The value of a [[QuantitativeValue]] (including [[Observation]]) or property
 * value node.
 * 
 * * For [[QuantitativeValue]] and [[MonetaryAmount]], the recommended type for
 * values is 'Number'.
 * * For [[PropertyValue]], it can be 'Text', 'Number', 'Boolean', or
 * 'StructuredValue'.
 * * Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE'
 * (U+0039)) rather than superficially similar Unicode symbols.
 * * Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a
 * decimal point. Avoid using these symbols as a readability separator.
        * @param array|string|mixed $value
    * @return $this
    */
    public function value($value)
    {
        $this->setProperty('value', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The unit of measurement given using the UN/CEFACT Common Code (3 characters)
 * or a URL. Other codes than the UN/CEFACT Common Code may be used with a
 * prefix followed by a colon.
        * @param array|string|mixed $value
    * @return $this
    */
    public function unitCode($value)
    {
        $this->setProperty('unitCode', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
