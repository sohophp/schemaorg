<?php

declare (strict_types=1);

namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\CreativeWork\Episode;
/**
* A short TV or radio program or a segment/part of a program.
* @see http://schema.org/Clip
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class Clip extends CreativeWork
{

     
     /**
     * The episode to which this clip belongs.
     * @param Episode $value
     * @return $this
     */

     public function partOfEpisode(?Episode $value):self
     {
        $this->setProperty("partOfEpisode",$value);
        return $this;
     }

     
     /**
     * Position of the clip within an ordered group of clips.
     * @param int|string $value
     * @return $this
     */

     public function clipNumber( $value):self
     {
        $this->setProperty("clipNumber",$value);
        return $this;
     }

     
}

