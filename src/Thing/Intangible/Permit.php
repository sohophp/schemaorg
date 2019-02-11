<?php declare(strict_types=1);
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
    * The time validity of the permit.
    * @param Duration $value
    * @return $this
    */
    public function validFor(?Duration $value)
    {
        $this->setProperty('validFor', $value);
        return $this;
    }

    /**
    * The date when the item is no longer valid.
    * @param  $value
    * @return $this
    */
    public function validUntil($value)
    {
        $this->setProperty('validUntil', $value);
        return $this;
    }

    /**
    * The date when the item becomes valid.
    * @param  $value
    * @return $this
    */
    public function validFrom($value)
    {
        $this->setProperty('validFrom', $value);
        return $this;
    }

    /**
    * The organization issuing the ticket or permit.
    * @param Organization $value
    * @return $this
    */
    public function issuedBy(?Organization $value)
    {
        $this->setProperty('issuedBy', $value);
        return $this;
    }

    /**
    * The service through with the permit was granted.
    * @param Service $value
    * @return $this
    */
    public function issuedThrough(?Service $value)
    {
        $this->setProperty('issuedThrough', $value);
        return $this;
    }

    /**
    * The target audience for this permit.
    * @param Audience $value
    * @return $this
    */
    public function permitAudience(?Audience $value)
    {
        $this->setProperty('permitAudience', $value);
        return $this;
    }

    /**
    * The geographic area where the permit is valid.
    * @param AdministrativeArea $value
    * @return $this
    */
    public function validIn(?AdministrativeArea $value)
    {
        $this->setProperty('validIn', $value);
        return $this;
    }


}

