<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Product;

use Sohophp\SchemaOrg\Thing\Product;

/**
 * A single, identifiable product instance (e.g. a laptop with a particular serial number).
 * @see https://schema.org/IndividualProduct
 * @package Sohophp\SchemaOrg\Thing\Product
 */
class IndividualProduct extends Product
{
    /**
     * The serial number or any alphanumeric identifier of a particular product. When attached to an offer, it is a shortcut for the serial number of the product included in the offer.
     * @see https://schema.org/serialNumber
     * @param string|array $value
     * @return $this
     */
    public function serialNumber($value)
    {
        $this->setProperty('serialNumber', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setSerialNumber($value)
    {
        $this->setProperty('serialNumber', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addSerialNumber($value)
    {
        $current = $this->getProperty('serialNumber');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('serialNumber', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getSerialNumber()
    {
        return $this->getProperty('serialNumber');
    }
}
