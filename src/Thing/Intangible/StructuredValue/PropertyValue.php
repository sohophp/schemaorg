<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\QualitativeValue;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration;

/**
* A property-value pair, e.g. representing a feature of a product or place. Use
 * the 'name' property for the name of the property. If there is an additional
 * human-readable version of the value, put that into the 'description'
 * property.
 * 
 * Always use specific schema.org properties when a) they exist and b) you can
 * populate them. Using PropertyValue as a substitute will typically not trigger
 * the same effect as using the original, specific property.
* @see http://schema.org/PropertyValue
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue
*/
class PropertyValue extends StructuredValue
{


    /**
        * The unit of measurement given using the UN/CEFACT Common Code (3 characters)
 * or a URL. Other codes than the UN/CEFACT Common Code may be used with a
 * prefix followed by a colon.
        * @param string|string|array|mixed $value
    * @return $this
    */
    public function unitCode($value)
    {
        $this->setProperty('unitCode', $value);
        return $this;
    }

    /**
    * @param string|string|array|mixed $value
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
        * A commonly used identifier for the characteristic represented by the
 * property, e.g. a manufacturer or a standard code for a property. propertyID
 * can be
 * (1) a prefixed string, mainly meant to be used with standards for product
 * properties; (2) a site-specific, non-prefixed string (e.g. the primary key of
 * the property or the vendor-specific id of the property), or (3)
 * a URL indicating the type of the property, either pointing to an external
 * vocabulary, or a Web resource that describes the property (e.g. a glossary
 * entry).
 * Standards bodies should promote a standard prefix for the identifiers of
 * properties from their standards.
        * @param string|string|array|mixed $value
    * @return $this
    */
    public function propertyID($value)
    {
        $this->setProperty('propertyID', $value);
        return $this;
    }

    /**
    * @param string|string|array|mixed $value
    * @return $this
    */
    public function setPropertyID($value)
    {
        $this->setProperty('propertyID', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPropertyID()
    {
       return $this->getProperty('propertyID');
    }


    /**
        * The value of the quantitative value or property value node.
 * 
 * * For [[QuantitativeValue]] and [[MonetaryAmount]], the recommended type for
 * values is 'Number'.
 * * For [[PropertyValue]], it can be 'Text;', 'Number', 'Boolean', or
 * 'StructuredValue'.
 * * Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE'
 * (U+0039)) rather than superficially similiar Unicode symbols.
 * * Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a
 * decimal point. Avoid using these symbols as a readability separator.
        * @param StructuredValue|string|bool|array|mixed $value
    * @return $this
    */
    public function value($value)
    {
        $this->setProperty('value', $value);
        return $this;
    }

    /**
    * @param StructuredValue|string|bool|array|mixed $value
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
        * A pointer to a secondary value that provides additional information on the
 * original value, e.g. a reference temperature.
        * @param QuantitativeValue|QualitativeValue|StructuredValue|Enumeration|PropertyValue|array|string|mixed $value
    * @return $this
    */
    public function valueReference($value)
    {
        $this->setProperty('valueReference', $value);
        return $this;
    }

    /**
    * @param QuantitativeValue|QualitativeValue|StructuredValue|Enumeration|PropertyValue|array|string|mixed $value
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
        * A string or text indicating the unit of measurement. Useful if you cannot
 * provide a standard unit code for
 * <a href='unitCode'>unitCode</a>.
        * @param string|array|mixed $value
    * @return $this
    */
    public function unitText($value)
    {
        $this->setProperty('unitText', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
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
        * A technique or technology used in a [[Dataset]] (or [[DataDownload]],
 * [[DataCatalog]]),
 * corresponding to the method used for measuring the corresponding variable(s)
 * (described using [[variableMeasured]]). This is oriented towards scientific
 * and scholarly dataset publication but may have broader applicability; it is
 * not intended as a full representation of measurement, but rather as a high
 * level summary for dataset discovery.
 * 
 * For example, if [[variableMeasured]] is: molecule concentration,
 * [[measurementTechnique]] could be: "mass spectrometry" or "nmr spectroscopy"
 * or "colorimetry" or "immunofluorescence".
 * 
 * If the [[variableMeasured]] is "depression rating", the
 * [[measurementTechnique]] could be "Zung Scale" or "HAM-D" or "Beck Depression
 * Inventory".
 * 
 * If there are several [[variableMeasured]] properties recorded for some given
 * data object, use a [[PropertyValue]] for each [[variableMeasured]] and attach
 * the corresponding [[measurementTechnique]].
        * @param string|string|array|mixed $value
    * @return $this
    */
    public function measurementTechnique($value)
    {
        $this->setProperty('measurementTechnique', $value);
        return $this;
    }

    /**
    * @param string|string|array|mixed $value
    * @return $this
    */
    public function setMeasurementTechnique($value)
    {
        $this->setProperty('measurementTechnique', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getMeasurementTechnique()
    {
       return $this->getProperty('measurementTechnique');
    }


}
