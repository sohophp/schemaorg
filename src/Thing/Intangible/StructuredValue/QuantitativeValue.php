<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PropertyValue;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\QualitativeValue;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration;

/**
* A point value or interval for product characteristics and other purposes.
* @see http://schema.org/QuantitativeValue
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue

*
*/
class QuantitativeValue extends StructuredValue
{

    /**
    * The unit of measurement given using the UN/CEFACT Common Code (3 characters) or a URL. Other codes than the UN/CEFACT Common Code may be used with a prefix followed by a colon.
    * @param string|string|array $value
    * @return $this
    * @deprecated use setUnitCode
    */
    public function unitCode($value)
    {
        $this->setProperty('unitCode', $value);
        return $this;
    }
   /**
    * @param string|string|array $value
    * @return $this
    */
    public function setUnitCode($value)
    {
        $this->setProperty('unitCode', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getUnitCode()
    {
       return $this->getProperty('unitCode');
    }

    /**
    * The lower value of some characteristic or property.
    * @param array|string $value
    * @return $this
    * @deprecated use setMinValue
    */
    public function minValue($value)
    {
        $this->setProperty('minValue', $value);
        return $this;
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
    * @return $this|string|array
    */
    public function getMinValue()
    {
       return $this->getProperty('minValue');
    }

    /**
    * The value of the quantitative value or property value node.<br/><br/>

<ul>
<li>For <a class="localLink" href="http://schema.org/QuantitativeValue">QuantitativeValue</a> and <a class="localLink" href="http://schema.org/MonetaryAmount">MonetaryAmount</a>, the recommended type for values is 'Number'.</li>
<li>For <a class="localLink" href="http://schema.org/PropertyValue">PropertyValue</a>, it can be 'Text;', 'Number', 'Boolean', or 'StructuredValue'.</li>
<li>Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE' (U+0039)) rather than superficially similiar Unicode symbols.</li>
<li>Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal point. Avoid using these symbols as a readability separator.</li>
</ul>

    * @param StructuredValue|string|bool|array $value
    * @return $this
    * @deprecated use setValue
    */
    public function value($value)
    {
        $this->setProperty('value', $value);
        return $this;
    }
   /**
    * @param StructuredValue|string|bool|array $value
    * @return $this
    */
    public function setValue($value)
    {
        $this->setProperty('value', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getValue()
    {
       return $this->getProperty('value');
    }

    /**
    * A property-value pair representing an additional characteristics of the entitity, e.g. a product feature or another characteristic for which there is no matching property in schema.org.<br/><br/>

Note: Publishers should be aware that applications designed to use specific schema.org properties (e.g. http://schema.org/width, http://schema.org/color, http://schema.org/gtin13, ...) will typically expect such data to be provided using those properties, rather than using the generic property/value mechanism.
    * @param PropertyValue|array|string $value
    * @return $this
    * @deprecated use setAdditionalProperty
    */
    public function additionalProperty($value)
    {
        $this->setProperty('additionalProperty', $value);
        return $this;
    }
   /**
    * @param PropertyValue|array|string $value
    * @return $this
    */
    public function setAdditionalProperty($value)
    {
        $this->setProperty('additionalProperty', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAdditionalProperty()
    {
       return $this->getProperty('additionalProperty');
    }

    /**
    * A pointer to a secondary value that provides additional information on the original value, e.g. a reference temperature.
    * @param QuantitativeValue|QualitativeValue|StructuredValue|Enumeration|PropertyValue|array|string $value
    * @return $this
    * @deprecated use setValueReference
    */
    public function valueReference($value)
    {
        $this->setProperty('valueReference', $value);
        return $this;
    }
   /**
    * @param QuantitativeValue|QualitativeValue|StructuredValue|Enumeration|PropertyValue|array|string $value
    * @return $this
    */
    public function setValueReference($value)
    {
        $this->setProperty('valueReference', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getValueReference()
    {
       return $this->getProperty('valueReference');
    }

    /**
    * The upper value of some characteristic or property.
    * @param array|string $value
    * @return $this
    * @deprecated use setMaxValue
    */
    public function maxValue($value)
    {
        $this->setProperty('maxValue', $value);
        return $this;
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
    * @return $this|string|array
    */
    public function getMaxValue()
    {
       return $this->getProperty('maxValue');
    }

    /**
    * A string or text indicating the unit of measurement. Useful if you cannot provide a standard unit code for
<a href='unitCode'>unitCode</a>.
    * @param string|array $value
    * @return $this
    * @deprecated use setUnitText
    */
    public function unitText($value)
    {
        $this->setProperty('unitText', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setUnitText($value)
    {
        $this->setProperty('unitText', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getUnitText()
    {
       return $this->getProperty('unitText');
    }


}
