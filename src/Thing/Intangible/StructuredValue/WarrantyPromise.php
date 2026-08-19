<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\WarrantyScope;

/**
 * A structured value representing the duration and scope of services that will be provided to a customer free of charge in case of a defect or malfunction of a product.
 * @see https://schema.org/WarrantyPromise
 * @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue
 */
class WarrantyPromise extends StructuredValue
{
    /**
     * The duration of the warranty promise. Common unitCode values are ANN for year, MON for months, or DAY for days.
     * @see https://schema.org/durationOfWarranty
     * @param QuantitativeValue|array $value
     * @return $this
     */
    public function durationOfWarranty($value)
    {
        $this->setProperty('durationOfWarranty', $value);
        return $this;
    }

    /**
     * @param QuantitativeValue|array $value
     * @return $this
     */
    public function setDurationOfWarranty($value)
    {
        $this->setProperty('durationOfWarranty', $value);
        return $this;
    }

    /**
     * @param QuantitativeValue $value
     * @return $this
     */
    public function addDurationOfWarranty($value)
    {
        $current = $this->getProperty('durationOfWarranty');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('durationOfWarranty', $current);
        return $this;
    }

    /**
     * @return QuantitativeValue|array
     */
    public function getDurationOfWarranty()
    {
        return $this->getProperty('durationOfWarranty');
    }
    /**
     * The scope of the warranty promise.
     * @see https://schema.org/warrantyScope
     * @param WarrantyScope|array $value
     * @return $this
     */
    public function warrantyScope($value)
    {
        $this->setProperty('warrantyScope', $value);
        return $this;
    }

    /**
     * @param WarrantyScope|array $value
     * @return $this
     */
    public function setWarrantyScope($value)
    {
        $this->setProperty('warrantyScope', $value);
        return $this;
    }

    /**
     * @param WarrantyScope $value
     * @return $this
     */
    public function addWarrantyScope($value)
    {
        $current = $this->getProperty('warrantyScope');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('warrantyScope', $current);
        return $this;
    }

    /**
     * @return WarrantyScope|array
     */
    public function getWarrantyScope()
    {
        return $this->getProperty('warrantyScope');
    }
}
