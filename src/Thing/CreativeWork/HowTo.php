<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\Intangible\Quantity\Duration;
use Sohophp\SchemaOrg\Thing\Intangible\ItemList;
use Sohophp\SchemaOrg\Thing\CreativeWork\HowToSection;
use Sohophp\SchemaOrg\Thing\CreativeWork\HowToStep;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\MonetaryAmount;
use Sohophp\SchemaOrg\Thing\Intangible\ListItem\HowToItem\HowToSupply;
use Sohophp\SchemaOrg\Thing\Intangible\ListItem\HowToItem\HowToTool;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;

/**
* Instructions that explain how to achieve a result by performing a sequence of steps.
* @see http://schema.org/HowTo
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class HowTo extends CreativeWork
{

    /**
    * The length of time it takes to prepare the items to be used in instructions or a direction, in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 duration format</a>.
    * @param Duration $value
    * @return $this
    */
    public function prepTime(?Duration $value)
    {
        $this->setProperty('prepTime', $value);
        return $this;
    }

    /**
    * A single step item (as HowToStep, text, document, video, etc.) or a HowToSection (originally misnamed 'steps'; 'step' is preferred).
    * @param string|CreativeWork|ItemList $value
    * @return $this
    */
    public function steps($value)
    {
        $this->setProperty('steps', $value);
        return $this;
    }

    /**
    * A single step item (as HowToStep, text, document, video, etc.) or a HowToSection.
    * @param string|HowToSection|HowToStep|CreativeWork $value
    * @return $this
    */
    public function step($value)
    {
        $this->setProperty('step', $value);
        return $this;
    }

    /**
    * The length of time it takes to perform instructions or a direction (not including time to prepare the supplies), in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 duration format</a>.
    * @param Duration $value
    * @return $this
    */
    public function performTime(?Duration $value)
    {
        $this->setProperty('performTime', $value);
        return $this;
    }

    /**
    * The estimated cost of the supply or supplies consumed when performing instructions.
    * @param string|MonetaryAmount $value
    * @return $this
    */
    public function estimatedCost($value)
    {
        $this->setProperty('estimatedCost', $value);
        return $this;
    }

    /**
    * The total time required to perform instructions or a direction (including time to prepare the supplies), in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 duration format</a>.
    * @param Duration $value
    * @return $this
    */
    public function totalTime(?Duration $value)
    {
        $this->setProperty('totalTime', $value);
        return $this;
    }

    /**
    * A sub-property of instrument. A supply consumed when performing instructions or a direction.
    * @param HowToSupply|string $value
    * @return $this
    */
    public function supply($value)
    {
        $this->setProperty('supply', $value);
        return $this;
    }

    /**
    * A sub property of instrument. An object used (but not consumed) when performing instructions or a direction.
    * @param string|HowToTool $value
    * @return $this
    */
    public function tool($value)
    {
        $this->setProperty('tool', $value);
        return $this;
    }

    /**
    * The quantity that results by performing instructions. For example, a paper airplane, 10 personalized candles.
    * @param QuantitativeValue|string $value
    * @return $this
    */
    public function yield($value)
    {
        $this->setProperty('yield', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\CreativeWork\\HowTo','Thing\\HowTo');

