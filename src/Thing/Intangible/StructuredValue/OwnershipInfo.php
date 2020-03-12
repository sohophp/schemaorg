<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;
use Sohophp\SchemaOrg\Thing\Product;
use Sohophp\SchemaOrg\Thing\Intangible\Service;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Person;

/**
* A structured value providing information about when a certain organization or person owned a certain product.
* @see http://schema.org/OwnershipInfo
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue

*
*/
class OwnershipInfo extends StructuredValue
{

    /**
    * The product that this structured value is referring to.
    * @param Product|Service|array $value
    * @return $this
    */
    public function typeOfGood($value)
    {
        $this->setProperty('typeOfGood', $value);
        return $this;
    }
   /**
    * @param Product|Service|array $value
    * @return $this
    */
    public function setTypeOfGood($value)
    {
        $this->setProperty('typeOfGood', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getTypeOfGood()
    {
       return $this->getProperty('typeOfGood');
    }

    /**
    * The date and time of giving up ownership on the product.
    * @param |array $value
    * @return $this
    */
    public function ownedThrough($value)
    {
        $this->setProperty('ownedThrough', $value);
        return $this;
    }
   /**
    * @param |array $value
    * @return $this
    */
    public function setOwnedThrough($value)
    {
        $this->setProperty('ownedThrough', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getOwnedThrough()
    {
       return $this->getProperty('ownedThrough');
    }

    /**
    * The organization or person from which the product was acquired.
    * @param Organization|Person|array $value
    * @return $this
    */
    public function acquiredFrom($value)
    {
        $this->setProperty('acquiredFrom', $value);
        return $this;
    }
   /**
    * @param Organization|Person|array $value
    * @return $this
    */
    public function setAcquiredFrom($value)
    {
        $this->setProperty('acquiredFrom', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAcquiredFrom()
    {
       return $this->getProperty('acquiredFrom');
    }

    /**
    * The date and time of obtaining the product.
    * @param |array $value
    * @return $this
    */
    public function ownedFrom($value)
    {
        $this->setProperty('ownedFrom', $value);
        return $this;
    }
   /**
    * @param |array $value
    * @return $this
    */
    public function setOwnedFrom($value)
    {
        $this->setProperty('ownedFrom', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getOwnedFrom()
    {
       return $this->getProperty('ownedFrom');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\StructuredValue\\OwnershipInfo','Thing\\OwnershipInfo');

