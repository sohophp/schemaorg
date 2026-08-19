<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Quantity\Duration;
use Sohophp\SchemaOrg\Thing\Intangible\Service;
use Sohophp\SchemaOrg\Thing\Intangible\Audience;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Place\AdministrativeArea;

/**
 * A permit issued by an organization, e.g. a parking pass.
 * @see https://schema.org/Permit
 * @package Sohophp\SchemaOrg\Thing\Intangible
 */
class Permit extends Intangible
{
    /**
     * The date when the item is no longer valid.
     * @see https://schema.org/validUntil
     * @param mixed $value
     * @return $this
     */
    public function validUntil($value)
    {
        $this->setProperty('validUntil', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setValidUntil($value)
    {
        $this->setProperty('validUntil', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function addValidUntil($value)
    {
        $current = $this->getProperty('validUntil');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('validUntil', $current);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getValidUntil()
    {
        return $this->getProperty('validUntil');
    }
    /**
     * The duration of validity of a permit or similar thing.
     * @see https://schema.org/validFor
     * @param Duration|array $value
     * @return $this
     */
    public function validFor($value)
    {
        $this->setProperty('validFor', $value);
        return $this;
    }

    /**
     * @param Duration|array $value
     * @return $this
     */
    public function setValidFor($value)
    {
        $this->setProperty('validFor', $value);
        return $this;
    }

    /**
     * @param Duration $value
     * @return $this
     */
    public function addValidFor($value)
    {
        $current = $this->getProperty('validFor');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('validFor', $current);
        return $this;
    }

    /**
     * @return Duration|array
     */
    public function getValidFor()
    {
        return $this->getProperty('validFor');
    }
    /**
     * The service through which the permit was granted.
     * @see https://schema.org/issuedThrough
     * @param Service|array $value
     * @return $this
     */
    public function issuedThrough($value)
    {
        $this->setProperty('issuedThrough', $value);
        return $this;
    }

    /**
     * @param Service|array $value
     * @return $this
     */
    public function setIssuedThrough($value)
    {
        $this->setProperty('issuedThrough', $value);
        return $this;
    }

    /**
     * @param Service $value
     * @return $this
     */
    public function addIssuedThrough($value)
    {
        $current = $this->getProperty('issuedThrough');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('issuedThrough', $current);
        return $this;
    }

    /**
     * @return Service|array
     */
    public function getIssuedThrough()
    {
        return $this->getProperty('issuedThrough');
    }
    /**
     * The target audience for this permit.
     * @see https://schema.org/permitAudience
     * @param Audience|array $value
     * @return $this
     */
    public function permitAudience($value)
    {
        $this->setProperty('permitAudience', $value);
        return $this;
    }

    /**
     * @param Audience|array $value
     * @return $this
     */
    public function setPermitAudience($value)
    {
        $this->setProperty('permitAudience', $value);
        return $this;
    }

    /**
     * @param Audience $value
     * @return $this
     */
    public function addPermitAudience($value)
    {
        $current = $this->getProperty('permitAudience');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('permitAudience', $current);
        return $this;
    }

    /**
     * @return Audience|array
     */
    public function getPermitAudience()
    {
        return $this->getProperty('permitAudience');
    }
    /**
     * The date when the item becomes valid.
     * @see https://schema.org/validFrom
     * @param mixed $value
     * @return $this
     */
    public function validFrom($value)
    {
        $this->setProperty('validFrom', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setValidFrom($value)
    {
        $this->setProperty('validFrom', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function addValidFrom($value)
    {
        $current = $this->getProperty('validFrom');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('validFrom', $current);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getValidFrom()
    {
        return $this->getProperty('validFrom');
    }
    /**
     * The organization issuing the item, for example a [[Permit]], [[Ticket]], or [[Certification]].
     * @see https://schema.org/issuedBy
     * @param Organization|array $value
     * @return $this
     */
    public function issuedBy($value)
    {
        $this->setProperty('issuedBy', $value);
        return $this;
    }

    /**
     * @param Organization|array $value
     * @return $this
     */
    public function setIssuedBy($value)
    {
        $this->setProperty('issuedBy', $value);
        return $this;
    }

    /**
     * @param Organization $value
     * @return $this
     */
    public function addIssuedBy($value)
    {
        $current = $this->getProperty('issuedBy');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('issuedBy', $current);
        return $this;
    }

    /**
     * @return Organization|array
     */
    public function getIssuedBy()
    {
        return $this->getProperty('issuedBy');
    }
    /**
     * The geographic area where the item is valid. Applies for example to a [[Permit]], a [[Certification]], or an [[EducationalOccupationalCredential]].
     * @see https://schema.org/validIn
     * @param AdministrativeArea|array $value
     * @return $this
     */
    public function validIn($value)
    {
        $this->setProperty('validIn', $value);
        return $this;
    }

    /**
     * @param AdministrativeArea|array $value
     * @return $this
     */
    public function setValidIn($value)
    {
        $this->setProperty('validIn', $value);
        return $this;
    }

    /**
     * @param AdministrativeArea $value
     * @return $this
     */
    public function addValidIn($value)
    {
        $current = $this->getProperty('validIn');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('validIn', $current);
        return $this;
    }

    /**
     * @return AdministrativeArea|array
     */
    public function getValidIn()
    {
        return $this->getProperty('validIn');
    }
}
