<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PropertyValue;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\QualitativeValue;

/**
* A point value or interval for product characteristics and other purposes.
* @see http://schema.org/QuantitativeValue
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue
*/
class QuantitativeValue extends StructuredValue
{

    /**
    * The value of the quantitative value or property value node.<br/><br/>

<ul>
<li>For <a class="localLink" href="http://schema.org/QuantitativeValue">QuantitativeValue</a> and <a class="localLink" href="http://schema.org/MonetaryAmount">MonetaryAmount</a>, the recommended type for values is 'Number'.</li>
<li>For <a class="localLink" href="http://schema.org/PropertyValue">PropertyValue</a>, it can be 'Text;', 'Number', 'Boolean', or 'StructuredValue'.</li>
</ul>

    * @param bool|string|StructuredValue $value
    * @return $this
    */
    public function value($value)
    {
        $this->setProperty('value', $value);
        return $this;
    }

    /**
    * A property-value pair representing an additional characteristics of the entitity, e.g. a product feature or another characteristic for which there is no matching property in schema.org.<br/><br/>

Note: Publishers should be aware that applications designed to use specific schema.org properties (e.g. http://schema.org/width, http://schema.org/color, http://schema.org/gtin13, ...) will typically expect such data to be provided using those properties, rather than using the generic property/value mechanism.
    * @param PropertyValue $value
    * @return $this
    */
    public function additionalProperty(?PropertyValue $value)
    {
        $this->setProperty('additionalProperty', $value);
        return $this;
    }

    /**
    * A pointer to a secondary value that provides additional information on the original value, e.g. a reference temperature.
    * @param Enumeration|QuantitativeValue|PropertyValue|StructuredValue|QualitativeValue $value
    * @return $this
    */
    public function valueReference($value)
    {
        $this->setProperty('valueReference', $value);
        return $this;
    }

    /**
    * The upper value of some characteristic or property.
    * @param  $value
    * @return $this
    */
    public function maxValue($value)
    {
        $this->setProperty('maxValue', $value);
        return $this;
    }

    /**
    * The unit of measurement given using the UN/CEFACT Common Code (3 characters) or a URL. Other codes than the UN/CEFACT Common Code may be used with a prefix followed by a colon.
    * @param string|string $value
    * @return $this
    */
    public function unitCode($value)
    {
        $this->setProperty('unitCode', $value);
        return $this;
    }

    /**
    * A string or text indicating the unit of measurement. Useful if you cannot provide a standard unit code for
<a href='unitCode'>unitCode</a>.
    * @param string $value
    * @return $this
    */
    public function unitText(?string $value)
    {
        $this->setProperty('unitText', $value);
        return $this;
    }

    /**
    * The lower value of some characteristic or property.
    * @param  $value
    * @return $this
    */
    public function minValue($value)
    {
        $this->setProperty('minValue', $value);
        return $this;
    }


}

