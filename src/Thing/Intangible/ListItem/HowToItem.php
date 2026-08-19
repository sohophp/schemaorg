<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible\ListItem;

use Sohophp\SchemaOrg\Thing\Intangible\ListItem;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;

/**
 * An item used as either a tool or supply when performing the instructions for how to achieve a result.
 * @see https://schema.org/HowToItem
 * @package Sohophp\SchemaOrg\Thing\Intangible\ListItem
 */
class HowToItem extends ListItem
{
    /**
     * The required quantity of the item(s).
     * @see https://schema.org/requiredQuantity
     * @param QuantitativeValue|string|array $value
     * @return $this
     */
    public function requiredQuantity($value)
    {
        $this->setProperty('requiredQuantity', $value);
        return $this;
    }

    /**
     * @param QuantitativeValue|string|array $value
     * @return $this
     */
    public function setRequiredQuantity($value)
    {
        $this->setProperty('requiredQuantity', $value);
        return $this;
    }

    /**
     * @param QuantitativeValue|string $value
     * @return $this
     */
    public function addRequiredQuantity($value)
    {
        $current = $this->getProperty('requiredQuantity');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('requiredQuantity', $current);
        return $this;
    }

    /**
     * @return QuantitativeValue|string|array
     */
    public function getRequiredQuantity()
    {
        return $this->getProperty('requiredQuantity');
    }
}
