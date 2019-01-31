<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Person;

/**
 * A structured value providing information about when a certain organization or person owned a certain product.
 *
 * @see http://schema.org/OwnershipInfo
 */
class OwnershipInfo extends StructuredValue
{
    /**
     * The date and time of obtaining the product.
     *
     * @param  $value
     *
     * @return $this
     */
    public function ownedFrom($value): self
    {
        $this->setProperty('ownedFrom', $value);

        return $this;
    }

    /**
     * The organization or person from which the product was acquired.
     *
     * @param Organization|Person $value
     *
     * @return $this
     */
    public function acquiredFrom($value): self
    {
        $this->setProperty('acquiredFrom', $value);

        return $this;
    }

    /**
     * The date and time of giving up ownership on the product.
     *
     * @param  $value
     *
     * @return $this
     */
    public function ownedThrough($value): self
    {
        $this->setProperty('ownedThrough', $value);

        return $this;
    }
}
