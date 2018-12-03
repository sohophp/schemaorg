<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible\ListItem;

use Sohophp\SchemaOrg\Thing\Intangible\ListItem;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;

/**
 * An item used as either a tool or supply when performing the instructions for how to to achieve a result.
 *
 * @see http://schema.org/HowToItem
 */
class HowToItem extends ListItem
{
    /**
     * The required quantity of the item(s).
     *
     * @param string|QuantitativeValue $value
     *
     * @return $this
     */
    public function requiredQuantity($value): self
    {
        $this->setProperty('requiredQuantity', $value);

        return $this;
    }
}
