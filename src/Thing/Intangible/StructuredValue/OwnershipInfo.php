<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

/**
* A structured value providing information about when a certain organization or
 * person owned a certain product.
* @see schema:OwnershipInfo
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue
*/
class OwnershipInfo extends StructuredValue
{


    /**
        * The organization or person from which the product was acquired.
        * @param array|string|mixed $value
    * @return $this
    */
    public function acquiredFrom($value)
    {
        $this->setProperty('acquiredFrom', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setAcquiredFrom($value)
    {
        $this->setProperty('acquiredFrom', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAcquiredFrom()
    {
       return $this->getProperty('acquiredFrom');
    }


    /**
        * The product that this structured value is referring to.
        * @param array|string|mixed $value
    * @return $this
    */
    public function typeOfGood($value)
    {
        $this->setProperty('typeOfGood', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setTypeOfGood($value)
    {
        $this->setProperty('typeOfGood', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getTypeOfGood()
    {
       return $this->getProperty('typeOfGood');
    }


    /**
        * The date and time of giving up ownership on the product.
        * @param array|string|mixed $value
    * @return $this
    */
    public function ownedThrough($value)
    {
        $this->setProperty('ownedThrough', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setOwnedThrough($value)
    {
        $this->setProperty('ownedThrough', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getOwnedThrough()
    {
       return $this->getProperty('ownedThrough');
    }


    /**
        * The date and time of obtaining the product.
        * @param array|string|mixed $value
    * @return $this
    */
    public function ownedFrom($value)
    {
        $this->setProperty('ownedFrom', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setOwnedFrom($value)
    {
        $this->setProperty('ownedFrom', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getOwnedFrom()
    {
       return $this->getProperty('ownedFrom');
    }


}
