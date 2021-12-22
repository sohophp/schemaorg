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

*
*/
class Permit extends Intangible
{

    /**
    * The duration of validity of a permit or similar thing.
    * @param Duration|array $value
    * @return $this
    */
    public function validFor(?Duration $value)
    {
        $this->setProperty('validFor', $value);
        return $this;
    }
   /**
    * @param Duration|array $value
    * @return $this
    */
    public function setValidFor(?Duration $value)
    {
        $this->setProperty('validFor', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getValidFor()
    {
       return $this->getProperty('validFor');
    }

    /**
    * The date when the item is no longer valid.
    * @param |array $value
    * @return $this
    */
    public function validUntil($value)
    {
        $this->setProperty('validUntil', $value);
        return $this;
    }
   /**
    * @param |array $value
    * @return $this
    */
    public function setValidUntil($value)
    {
        $this->setProperty('validUntil', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getValidUntil()
    {
       return $this->getProperty('validUntil');
    }

    /**
    * The date when the item becomes valid.
    * @param |array $value
    * @return $this
    */
    public function validFrom($value)
    {
        $this->setProperty('validFrom', $value);
        return $this;
    }
   /**
    * @param |array $value
    * @return $this
    */
    public function setValidFrom($value)
    {
        $this->setProperty('validFrom', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getValidFrom()
    {
       return $this->getProperty('validFrom');
    }

    /**
    * The organization issuing the ticket or permit.
    * @param Organization|array $value
    * @return $this
    */
    public function issuedBy(?Organization $value)
    {
        $this->setProperty('issuedBy', $value);
        return $this;
    }
   /**
    * @param Organization|array $value
    * @return $this
    */
    public function setIssuedBy(?Organization $value)
    {
        $this->setProperty('issuedBy', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getIssuedBy()
    {
       return $this->getProperty('issuedBy');
    }

    /**
    * The service through with the permit was granted.
    * @param Service|array $value
    * @return $this
    */
    public function issuedThrough(?Service $value)
    {
        $this->setProperty('issuedThrough', $value);
        return $this;
    }
   /**
    * @param Service|array $value
    * @return $this
    */
    public function setIssuedThrough(?Service $value)
    {
        $this->setProperty('issuedThrough', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getIssuedThrough()
    {
       return $this->getProperty('issuedThrough');
    }

    /**
    * The target audience for this permit.
    * @param Audience|array $value
    * @return $this
    */
    public function permitAudience(?Audience $value)
    {
        $this->setProperty('permitAudience', $value);
        return $this;
    }
   /**
    * @param Audience|array $value
    * @return $this
    */
    public function setPermitAudience(?Audience $value)
    {
        $this->setProperty('permitAudience', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getPermitAudience()
    {
       return $this->getProperty('permitAudience');
    }

    /**
    * The geographic area where a permit or similar thing is valid.
    * @param AdministrativeArea|array $value
    * @return $this
    */
    public function validIn(?AdministrativeArea $value)
    {
        $this->setProperty('validIn', $value);
        return $this;
    }
   /**
    * @param AdministrativeArea|array $value
    * @return $this
    */
    public function setValidIn(?AdministrativeArea $value)
    {
        $this->setProperty('validIn', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getValidIn()
    {
       return $this->getProperty('validIn');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\Permit','Thing\\Permit');

