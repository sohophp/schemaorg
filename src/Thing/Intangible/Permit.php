<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;

/**
* A permit issued by an organization, e.g. a parking pass.
* @see schema:Permit
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class Permit extends Intangible
{
   /**
        * The organization issuing the item, for example a [[Permit]], [[Ticket]], or [[Certification]].
        */
    protected $issuedBy = null;

   /**
        * The target audience for this permit.
        */
    protected $permitAudience = null;

   /**
        * The date when the item becomes valid.
        */
    protected $validFrom = null;

   /**
        * The duration of validity of a permit or similar thing.
        */
    protected $validFor = null;

   /**
        * The geographic area where the item is valid. Applies for example to a [[Permit]], a [[Certification]], or an [[EducationalOccupationalCredential]]. 
        */
    protected $validIn = null;

   /**
        * The date when the item is no longer valid.
        */
    protected $validUntil = null;

   /**
        * The service through which the permit was granted.
        */
    protected $issuedThrough = null;


    /**
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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

    /**
    * @param array|string $value
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
    * @param array|string $value
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


}
