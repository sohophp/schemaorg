<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

/**
* A structured value providing information about when a certain organization or person owned a certain product.
* @see schema:OwnershipInfo
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue
*/
class OwnershipInfo extends StructuredValue
{
   /**
        * The organization or person from which the product was acquired.
        */
    protected $acquiredFrom = null;

   /**
        * The product that this structured value is referring to.
        */
    protected $typeOfGood = null;

   /**
        * The date and time of giving up ownership on the product.
        */
    protected $ownedThrough = null;

   /**
        * The date and time of obtaining the product.
        */
    protected $ownedFrom = null;


    /**
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
