<?php

declare (strict_types=1);

namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\Intangible\ListItem\HowToStep;
use Sohophp\SchemaOrg\Thing\CreativeWork\HowToSection;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;
/**
* Instructions that explain how to achieve a result by performing a sequence of steps.
* @see http://schema.org/HowTo
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class HowTo extends CreativeWork
{

     
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

