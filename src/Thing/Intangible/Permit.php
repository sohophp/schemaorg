<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\Intangible\Quantity\Duration;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Intangible\Service;
use Sohophp\SchemaOrg\Thing\Intangible\Audience;
use Sohophp\SchemaOrg\Thing\Place\AdministrativeArea;

/**
* A permit issued by an organization, e.g. a parking pass.
* @see http://schema.org/Permit
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class Permit extends Intangible
{


    /**
        * The duration of validity of a permit or similar thing.
        * @param Duration|array|string|mixed $value
    * @return $this
    */
    public function validFor($value)
    {
        $this->setProperty('validFor', $value);
        return $this;
    }

    /**
    * @param Duration|array|string|mixed $value
    * @return $this
    */
    public function setValidFor($value)
    {
        $this->setProperty('validFor', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getValidFor()
    {
       return $this->getProperty('validFor');
    }


    /**
        * The date when the item is no longer valid.
        * @param array|string|mixed $value
    * @return $this
    */
    public function validUntil($value)
    {
        $this->setProperty('validUntil', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setValidUntil($value)
    {
        $this->setProperty('validUntil', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getValidUntil()
    {
       return $this->getProperty('validUntil');
    }


    /**
        * The date when the item becomes valid.
        * @param array|string|mixed $value
    * @return $this
    */
    public function validFrom($value)
    {
        $this->setProperty('validFrom', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setValidFrom($value)
    {
        $this->setProperty('validFrom', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getValidFrom()
    {
       return $this->getProperty('validFrom');
    }


    /**
        * The organization issuing the ticket or permit.
        * @param Organization|array|string|mixed $value
    * @return $this
    */
    public function issuedBy($value)
    {
        $this->setProperty('issuedBy', $value);
        return $this;
    }

    /**
    * @param Organization|array|string|mixed $value
    * @return $this
    */
    public function setIssuedBy($value)
    {
        $this->setProperty('issuedBy', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getIssuedBy()
    {
       return $this->getProperty('issuedBy');
    }


    /**
        * The service through with the permit was granted.
        * @param Service|array|string|mixed $value
    * @return $this
    */
    public function issuedThrough($value)
    {
        $this->setProperty('issuedThrough', $value);
        return $this;
    }

    /**
    * @param Service|array|string|mixed $value
    * @return $this
    */
    public function setIssuedThrough($value)
    {
        $this->setProperty('issuedThrough', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getIssuedThrough()
    {
       return $this->getProperty('issuedThrough');
    }


    /**
        * The target audience for this permit.
        * @param Audience|array|string|mixed $value
    * @return $this
    */
    public function permitAudience($value)
    {
        $this->setProperty('permitAudience', $value);
        return $this;
    }

    /**
    * @param Audience|array|string|mixed $value
    * @return $this
    */
    public function setPermitAudience($value)
    {
        $this->setProperty('permitAudience', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPermitAudience()
    {
       return $this->getProperty('permitAudience');
    }


    /**
        * The geographic area where a permit or similar thing is valid.
        * @param AdministrativeArea|array|string|mixed $value
    * @return $this
    */
    public function validIn($value)
    {
        $this->setProperty('validIn', $value);
        return $this;
    }

    /**
    * @param AdministrativeArea|array|string|mixed $value
    * @return $this
    */
    public function setValidIn($value)
    {
        $this->setProperty('validIn', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getValidIn()
    {
       return $this->getProperty('validIn');
    }


}
