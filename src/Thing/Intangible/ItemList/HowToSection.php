<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible\ItemList;

use Sohophp\SchemaOrg\Thing\Intangible\ItemList;
use Sohophp\SchemaOrg\Thing\CreativeWork;

/**
 * A sub-grouping of steps in the instructions for how to achieve a result (e.g. steps for making a pie crust within a pie recipe).
 * @see https://schema.org/HowToSection
 * @package Sohophp\SchemaOrg\Thing\Intangible\ItemList
 */
class HowToSection extends ItemList
{
    /**
     * A single step item (as HowToStep, text, document, video, etc.) or a HowToSection (originally misnamed 'steps'; 'step' is preferred).
     * @see https://schema.org/steps
     * @param CreativeWork|ItemList|string|array $value
     * @return $this
     */
    public function steps($value)
    {
        $this->setProperty('steps', $value);
        return $this;
    }

    /**
     * @param CreativeWork|ItemList|string|array $value
     * @return $this
     */
    public function setSteps($value)
    {
        $this->setProperty('steps', $value);
        return $this;
    }

    /**
     * @param CreativeWork|ItemList|string $value
     * @return $this
     */
    public function addSteps($value)
    {
        $current = $this->getProperty('steps');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('steps', $current);
        return $this;
    }

    /**
     * @return CreativeWork|ItemList|string|array
     */
    public function getSteps()
    {
        return $this->getProperty('steps');
    }
}
