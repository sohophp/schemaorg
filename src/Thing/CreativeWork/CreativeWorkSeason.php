<?php

declare (strict_types=1);

namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
/**
* A media season e.g. tv, radio, video game etc.
* @see http://schema.org/CreativeWorkSeason
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class CreativeWorkSeason extends CreativeWork
{

     
     /**
     * Position of the season within an ordered group of seasons.
     * @param string|int $value
     * @return $this
     */

     public function seasonNumber( $value):self
     {
        $this->setProperty("seasonNumber",$value);
        return $this;
     }

     
}

