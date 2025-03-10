<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\Enumeration\QualitativeValue;

use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\QualitativeValue;

/**
* Size related properties of a product, typically a size code ([[name]]) and
 * optionally a [[sizeSystem]], [[sizeGroup]], and product measurements
 * ([[hasMeasurement]]). In addition, the intended audience can be defined
 * through [[suggestedAge]], [[suggestedGender]], and suggested body
 * measurements ([[suggestedMeasurement]]).
* @see schema:SizeSpecification
* @package Sohophp\SchemaOrg\Thing\Intangible\Enumeration\QualitativeValue
*/
class SizeSpecification extends QualitativeValue
{


    /**
        * The size system used to identify a product's size. Typically either a
 * standard (for example, "GS1" or "ISO-EN13402"), country code (for example
 * "US" or "JP"), or a measuring system (for example "Metric" or "Imperial").
        * @param array|string|mixed $value
    * @return $this
    */
    public function sizeSystem($value)
    {
        $this->setProperty('sizeSystem', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setSizeSystem($value)
    {
        $this->setProperty('sizeSystem', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSizeSystem()
    {
       return $this->getProperty('sizeSystem');
    }


    /**
        * The size group (also known as "size type") for a product's size. Size groups
 * are common in the fashion industry to define size segments and suggested
 * audiences for wearable products. Multiple values can be combined, for example
 * "men's big and tall", "petite maternity" or "regular".
        * @param array|string|mixed $value
    * @return $this
    */
    public function sizeGroup($value)
    {
        $this->setProperty('sizeGroup', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setSizeGroup($value)
    {
        $this->setProperty('sizeGroup', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSizeGroup()
    {
       return $this->getProperty('sizeGroup');
    }


    /**
        * The age or age range for the intended audience or person, for example 3-12
 * months for infants, 1-5 years for toddlers.
        * @param array|string|mixed $value
    * @return $this
    */
    public function suggestedAge($value)
    {
        $this->setProperty('suggestedAge', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setSuggestedAge($value)
    {
        $this->setProperty('suggestedAge', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSuggestedAge()
    {
       return $this->getProperty('suggestedAge');
    }


    /**
        * A measurement of an item, For example, the inseam of pants, the wheel size of
 * a bicycle, the gauge of a screw, or the carbon footprint measured for
 * certification by an authority. Usually an exact measurement, but can also be
 * a range of measurements for adjustable products, for example belts and ski
 * bindings.
        * @param array|string|mixed $value
    * @return $this
    */
    public function hasMeasurement($value)
    {
        $this->setProperty('hasMeasurement', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setHasMeasurement($value)
    {
        $this->setProperty('hasMeasurement', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getHasMeasurement()
    {
       return $this->getProperty('hasMeasurement');
    }


    /**
        * The suggested gender of the intended person or audience, for example "male",
 * "female", or "unisex".
        * @param array|string|mixed $value
    * @return $this
    */
    public function suggestedGender($value)
    {
        $this->setProperty('suggestedGender', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setSuggestedGender($value)
    {
        $this->setProperty('suggestedGender', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSuggestedGender()
    {
       return $this->getProperty('suggestedGender');
    }


    /**
        * A suggested range of body measurements for the intended audience or person,
 * for example inseam between 32 and 34 inches or height between 170 and 190 cm.
 * Typically found on a size chart for wearable products.
        * @param array|string|mixed $value
    * @return $this
    */
    public function suggestedMeasurement($value)
    {
        $this->setProperty('suggestedMeasurement', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setSuggestedMeasurement($value)
    {
        $this->setProperty('suggestedMeasurement', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSuggestedMeasurement()
    {
       return $this->getProperty('suggestedMeasurement');
    }


}
