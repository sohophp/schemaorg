<?php

declare (strict_types=1);

namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject;
/**
* A direction indicating a single action to do in the instructions for how to achieve a result.
* @see http://schema.org/HowToDirection
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class HowToDirection extends CreativeWork
{

     
     /**
     * A media object representing the circumstances before performing this direction.
     * @param string|MediaObject $value
     * @return $this
     */

     public function beforeMedia( $value):self
     {
        $this->setProperty("beforeMedia",$value);
        return $this;
     }

     
     /**
     * A media object representing the circumstances after performing this direction.
     * @param MediaObject|string $value
     * @return $this
     */

     public function afterMedia( $value):self
     {
        $this->setProperty("afterMedia",$value);
        return $this;
     }

     
     /**
     * A media object representing the circumstances while performing this direction.
     * @param MediaObject|string $value
     * @return $this
     */

     public function duringMedia( $value):self
     {
        $this->setProperty("duringMedia",$value);
        return $this;
     }

     
}

