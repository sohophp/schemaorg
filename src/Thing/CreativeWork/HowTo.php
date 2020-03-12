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

*
*/
class HowTo extends CreativeWork
{

    /**
    * The length of time it takes to prepare the items to be used in instructions or a direction, in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 duration format</a>.
    * @param Duration|array $value
    * @return $this
    */
    public function prepTime(?Duration $value)
    {
        $this->setProperty('prepTime', $value);
        return $this;
    }
   /**
    * @param Duration|array $value
    * @return $this
    */
    public function setPrepTime(?Duration $value)
    {
        $this->setProperty('prepTime', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getPrepTime()
    {
       return $this->getProperty('prepTime');
    }

    /**
    * A single step item (as HowToStep, text, document, video, etc.) or a HowToSection (originally misnamed 'steps'; 'step' is preferred).
    * @param string|CreativeWork|ItemList|array $value
    * @return $this
    */
    public function steps($value)
    {
        $this->setProperty('steps', $value);
        return $this;
    }
   /**
    * @param string|CreativeWork|ItemList|array $value
    * @return $this
    */
    public function setSteps($value)
    {
        $this->setProperty('steps', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getSteps()
    {
       return $this->getProperty('steps');
    }

    /**
    * A single step item (as HowToStep, text, document, video, etc.) or a HowToSection.
    * @param string|HowToSection|HowToStep|CreativeWork|array $value
    * @return $this
    */
    public function step($value)
    {
        $this->setProperty('step', $value);
        return $this;
    }
   /**
    * @param string|HowToSection|HowToStep|CreativeWork|array $value
    * @return $this
    */
    public function setStep($value)
    {
        $this->setProperty('step', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getStep()
    {
       return $this->getProperty('step');
    }

    /**
    * The length of time it takes to perform instructions or a direction (not including time to prepare the supplies), in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 duration format</a>.
    * @param Duration|array $value
    * @return $this
    */
    public function performTime(?Duration $value)
    {
        $this->setProperty('performTime', $value);
        return $this;
    }
   /**
    * @param Duration|array $value
    * @return $this
    */
    public function setPerformTime(?Duration $value)
    {
        $this->setProperty('performTime', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getPerformTime()
    {
       return $this->getProperty('performTime');
    }

    /**
    * The estimated cost of the supply or supplies consumed when performing instructions.
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
    * @return $this|string|array
    */
    public function getEstimatedCost()
    {
       return $this->getProperty('estimatedCost');
    }

    /**
    * The total time required to perform instructions or a direction (including time to prepare the supplies), in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 duration format</a>.
    * @param Duration|array $value
    * @return $this
    */
    public function totalTime(?Duration $value)
    {
        $this->setProperty('totalTime', $value);
        return $this;
    }
   /**
    * @param Duration|array $value
    * @return $this
    */
    public function setTotalTime(?Duration $value)
    {
        $this->setProperty('totalTime', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getTotalTime()
    {
       return $this->getProperty('totalTime');
    }

    /**
    * A sub-property of instrument. A supply consumed when performing instructions or a direction.
    * @param HowToSupply|string|array $value
    * @return $this
    */
    public function supply($value)
    {
        $this->setProperty('supply', $value);
        return $this;
    }
   /**
    * @param HowToSupply|string|array $value
    * @return $this
    */
    public function setSupply($value)
    {
        $this->setProperty('supply', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getSupply()
    {
       return $this->getProperty('supply');
    }

    /**
    * A sub property of instrument. An object used (but not consumed) when performing instructions or a direction.
    * @param string|HowToTool|array $value
    * @return $this
    */
    public function tool($value)
    {
        $this->setProperty('tool', $value);
        return $this;
    }
   /**
    * @param string|HowToTool|array $value
    * @return $this
    */
    public function setTool($value)
    {
        $this->setProperty('tool', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getTool()
    {
       return $this->getProperty('tool');
    }

    /**
    * The quantity that results by performing instructions. For example, a paper airplane, 10 personalized candles.
    * @param QuantitativeValue|string|array $value
    * @return $this
    */
    public function yield($value)
    {
        $this->setProperty('yield', $value);
        return $this;
    }
   /**
    * @param QuantitativeValue|string|array $value
    * @return $this
    */
    public function setYield($value)
    {
        $this->setProperty('yield', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getYield()
    {
       return $this->getProperty('yield');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\CreativeWork\\HowTo','Thing\\HowTo');

