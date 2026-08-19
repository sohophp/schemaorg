<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible\ListItem\HowToItem;

use Sohophp\SchemaOrg\Thing\Intangible\ListItem\HowToItem;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\MonetaryAmount;

/**
 * A supply consumed when performing the instructions for how to achieve a result.
 * @see https://schema.org/HowToSupply
 * @package Sohophp\SchemaOrg\Thing\Intangible\ListItem\HowToItem
 */
class HowToSupply extends HowToItem
{
    /**
     * The estimated cost of the supply or supplies consumed when performing instructions.
     * @see https://schema.org/estimatedCost
     * @param string|MonetaryAmount|array $value
     * @return $this
     */
    public function estimatedCost($value)
    {
        $this->setProperty('estimatedCost', $value);
        return $this;
    }

    /**
     * @param string|MonetaryAmount|array $value
     * @return $this
     */
    public function setEstimatedCost($value)
    {
        $this->setProperty('estimatedCost', $value);
        return $this;
    }

    /**
     * @param string|MonetaryAmount $value
     * @return $this
     */
    public function addEstimatedCost($value)
    {
        $current = $this->getProperty('estimatedCost');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('estimatedCost', $current);
        return $this;
    }

    /**
     * @return string|MonetaryAmount|array
     */
    public function getEstimatedCost()
    {
        return $this->getProperty('estimatedCost');
    }
}
