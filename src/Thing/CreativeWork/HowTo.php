<?php

declare (strict_types=1);

namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\Intangible\ItemList;
use Sohophp\SchemaOrg\Thing\Intangible\Quantity\Duration;
use Sohophp\SchemaOrg\Thing\Intangible\ListItem\HowToStep;
use Sohophp\SchemaOrg\Thing\CreativeWork\HowToSection;
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
     * A single step item (as HowToStep, text, document, video, etc.) or a HowToSection (originally misnamed 'steps'; 'step' is preferred).
     * @param string|ItemList|CreativeWork $value
     * @return $this
     */

     public function steps( $value):self
     {
        $this->setProperty("steps",$value);
        return $this;
     }

     
     /**
     * The length of time it takes to prepare the items to be used in instructions or a direction, in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 duration format</a>.
     * @param Duration $value
     * @return $this
     */

     public function prepTime(?Duration $value):self
     {
        $this->setProperty("prepTime",$value);
        return $this;
     }

     
     /**
     * A single step item (as HowToStep, text, document, video, etc.) or a HowToSection.
     * @param CreativeWork|string|HowToStep|HowToSection $value
     * @return $this
     */

     public function step( $value):self
     {
        $this->setProperty("step",$value);
        return $this;
     }

     
     /**
     * The length of time it takes to perform instructions or a direction (not including time to prepare the supplies), in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 duration format</a>.
     * @param Duration $value
     * @return $this
     */

     public function performTime(?Duration $value):self
     {
        $this->setProperty("performTime",$value);
        return $this;
     }

     
     /**
     * The estimated cost of the supply or supplies consumed when performing instructions.
     * @param MonetaryAmount|string $value
     * @return $this
     */

     public function estimatedCost( $value):self
     {
        $this->setProperty("estimatedCost",$value);
        return $this;
     }

     
     /**
     * The total time required to perform instructions or a direction (including time to prepare the supplies), in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 duration format</a>.
     * @param Duration $value
     * @return $this
     */

     public function totalTime(?Duration $value):self
     {
        $this->setProperty("totalTime",$value);
        return $this;
     }

     
     /**
     * A sub-property of instrument. A supply consumed when performing instructions or a direction.
     * @param string|HowToSupply $value
     * @return $this
     */

     public function supply( $value):self
     {
        $this->setProperty("supply",$value);
        return $this;
     }

     
     /**
     * A sub property of instrument. An object used (but not consumed) when performing instructions or a direction.
     * @param HowToTool|string $value
     * @return $this
     */

     public function tool( $value):self
     {
        $this->setProperty("tool",$value);
        return $this;
     }

     
     /**
     * The quantity that results by performing instructions. For example, a paper airplane, 10 personalized candles.
     * @param QuantitativeValue|string $value
     * @return $this
     */

     public function yield( $value):self
     {
        $this->setProperty("yield",$value);
        return $this;
     }

     
}

