<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

/**
* Indicates a range of postal codes, usually defined as the set of valid codes between [[postalCodeBegin]] and [[postalCodeEnd]], inclusively.
* @see schema:PostalCodeRangeSpecification
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue
*/
class PostalCodeRangeSpecification extends StructuredValue
{
   /**
        * Last postal code in the range (included). Needs to be after [[postalCodeBegin]].
        */
    protected $postalCodeEnd = null;

   /**
        * First postal code in a range (included).
        */
    protected $postalCodeBegin = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setPostalCodeEnd($value)
    {
        $this->setProperty('postalCodeEnd', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPostalCodeEnd()
    {
       return $this->getProperty('postalCodeEnd');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setPostalCodeBegin($value)
    {
        $this->setProperty('postalCodeBegin', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPostalCodeBegin()
    {
       return $this->getProperty('postalCodeBegin');
    }


}
