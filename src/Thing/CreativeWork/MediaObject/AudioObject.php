<?php

declare (strict_types=1);

namespace Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject;

use Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject;
/**
* An audio file.
* @see http://schema.org/AudioObject
* @package Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject
*/
class AudioObject extends MediaObject
{

     
     /**
     * If this MediaObject is an AudioObject or VideoObject, the transcript of that object.
     * @param string $value
     * @return $this
     */

     public function transcript(?string $value):self
     {
        $this->setProperty("transcript",$value);
        return $this;
     }

     
}

