<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Intangible\Enumeration;

use Sohophp\SchemaOrg\Thing\Intangible\Enumeration;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PropertyValue;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

/**
* A predefined value for a product characteristic, e.g. the power cord plug type 'US' or the garment sizes 'S', 'M', 'L', and 'XL'.
* @see http://schema.org/QualitativeValue
* @package Sohophp\SchemaOrg\Thing\Intangible\Enumeration

*
*/
class QualitativeValue extends Enumeration
{

    /**
    * This ordering relation for qualitative values indicates that the subject is lesser than the object.
    * @param QualitativeValue|array $value
    * @return $this
    */
    public function lesser(?QualitativeValue $value)
    {
        $this->setProperty('lesser', $value);
        return $this;
    }
   /**
    * @param QualitativeValue|array $value
    * @return $this
    */
    public function setLesser(?QualitativeValue $value)
    {
        $this->setProperty('lesser', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getLesser()
    {
       return $this->getProperty('lesser');
    }

    /**
    * This ordering relation for qualitative values indicates that the subject is greater than the object.
    * @param QualitativeValue|array $value
    * @return $this
    */
    public function greater(?QualitativeValue $value)
    {
        $this->setProperty('greater', $value);
        return $this;
    }
   /**
    * @param QualitativeValue|array $value
    * @return $this
    */
    public function setGreater(?QualitativeValue $value)
    {
        $this->setProperty('greater', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getGreater()
    {
       return $this->getProperty('greater');
    }

    /**
    * This ordering relation for qualitative values indicates that the subject is equal to the object.
    * @param QualitativeValue|array $value
    * @return $this
    */
    public function equal(?QualitativeValue $value)
    {
        $this->setProperty('equal', $value);
        return $this;
    }
   /**
    * @param QualitativeValue|array $value
    * @return $this
    */
    public function setEqual(?QualitativeValue $value)
    {
        $this->setProperty('equal', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getEqual()
    {
       return $this->getProperty('equal');
    }

    /**
    * A property-value pair representing an additional characteristics of the entitity, e.g. a product feature or another characteristic for which there is no matching property in schema.org.<br/><br/>

Note: Publishers should be aware that applications designed to use specific schema.org properties (e.g. http://schema.org/width, http://schema.org/color, http://schema.org/gtin13, ...) will typically expect such data to be provided using those properties, rather than using the generic property/value mechanism.
    * @param PropertyValue|array $value
    * @return $this
    */
    public function additionalProperty(?PropertyValue $value)
    {
        $this->setProperty('additionalProperty', $value);
        return $this;
    }
   /**
    * @param PropertyValue|array $value
    * @return $this
    */
    public function setAdditionalProperty(?PropertyValue $value)
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
    * @param QuantitativeValue|QualitativeValue|StructuredValue|Enumeration|PropertyValue|array $value
    * @return $this
    */
    public function valueReference($value)
    {
        $this->setProperty('valueReference', $value);
        return $this;
    }
   /**
    * @param QuantitativeValue|QualitativeValue|StructuredValue|Enumeration|PropertyValue|array $value
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
    * This ordering relation for qualitative values indicates that the subject is not equal to the object.
    * @param QualitativeValue|array $value
    * @return $this
    */
    public function nonEqual(?QualitativeValue $value)
    {
        $this->setProperty('nonEqual', $value);
        return $this;
    }
   /**
    * @param QualitativeValue|array $value
    * @return $this
    */
    public function setNonEqual(?QualitativeValue $value)
    {
        $this->setProperty('nonEqual', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getNonEqual()
    {
       return $this->getProperty('nonEqual');
    }

    /**
    * This ordering relation for qualitative values indicates that the subject is lesser than or equal to the object.
    * @param QualitativeValue|array $value
    * @return $this
    */
    public function lesserOrEqual(?QualitativeValue $value)
    {
        $this->setProperty('lesserOrEqual', $value);
        return $this;
    }
   /**
    * @param QualitativeValue|array $value
    * @return $this
    */
    public function setLesserOrEqual(?QualitativeValue $value)
    {
        $this->setProperty('lesserOrEqual', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getLesserOrEqual()
    {
       return $this->getProperty('lesserOrEqual');
    }

    /**
    * This ordering relation for qualitative values indicates that the subject is greater than or equal to the object.
    * @param QualitativeValue|array $value
    * @return $this
    */
    public function greaterOrEqual(?QualitativeValue $value)
    {
        $this->setProperty('greaterOrEqual', $value);
        return $this;
    }
   /**
    * @param QualitativeValue|array $value
    * @return $this
    */
    public function setGreaterOrEqual(?QualitativeValue $value)
    {
        $this->setProperty('greaterOrEqual', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getGreaterOrEqual()
    {
       return $this->getProperty('greaterOrEqual');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\Enumeration\\QualitativeValue','Thing\\QualitativeValue');

