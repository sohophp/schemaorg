<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\Enumeration;

use Sohophp\SchemaOrg\Thing\Intangible\Enumeration;

/**
* A predefined value for a product characteristic, e.g. the power cord plug
 * type 'US' or the garment sizes 'S', 'M', 'L', and 'XL'.
* @see schema:QualitativeValue
* @package Sohophp\SchemaOrg\Thing\Intangible\Enumeration
*/
class QualitativeValue extends Enumeration
{


    /**
        * This ordering relation for qualitative values indicates that the subject is
 * lesser than or equal to the object.
        * @param array|string|mixed $value
    * @return $this
    */
    public function lesserOrEqual($value)
    {
        $this->setProperty('lesserOrEqual', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setLesserOrEqual($value)
    {
        $this->setProperty('lesserOrEqual', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getLesserOrEqual()
    {
       return $this->getProperty('lesserOrEqual');
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
        * This ordering relation for qualitative values indicates that the subject is
 * not equal to the object.
        * @param array|string|mixed $value
    * @return $this
    */
    public function nonEqual($value)
    {
        $this->setProperty('nonEqual', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setNonEqual($value)
    {
        $this->setProperty('nonEqual', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getNonEqual()
    {
       return $this->getProperty('nonEqual');
    }


    /**
        * This ordering relation for qualitative values indicates that the subject is
 * greater than the object.
        * @param array|string|mixed $value
    * @return $this
    */
    public function greater($value)
    {
        $this->setProperty('greater', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setGreater($value)
    {
        $this->setProperty('greater', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getGreater()
    {
       return $this->getProperty('greater');
    }


    /**
        * This ordering relation for qualitative values indicates that the subject is
 * greater than or equal to the object.
        * @param array|string|mixed $value
    * @return $this
    */
    public function greaterOrEqual($value)
    {
        $this->setProperty('greaterOrEqual', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setGreaterOrEqual($value)
    {
        $this->setProperty('greaterOrEqual', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getGreaterOrEqual()
    {
       return $this->getProperty('greaterOrEqual');
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
        * This ordering relation for qualitative values indicates that the subject is
 * equal to the object.
        * @param array|string|mixed $value
    * @return $this
    */
    public function equal($value)
    {
        $this->setProperty('equal', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setEqual($value)
    {
        $this->setProperty('equal', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEqual()
    {
       return $this->getProperty('equal');
    }


    /**
        * This ordering relation for qualitative values indicates that the subject is
 * lesser than the object.
        * @param array|string|mixed $value
    * @return $this
    */
    public function lesser($value)
    {
        $this->setProperty('lesser', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setLesser($value)
    {
        $this->setProperty('lesser', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getLesser()
    {
       return $this->getProperty('lesser');
    }


}
