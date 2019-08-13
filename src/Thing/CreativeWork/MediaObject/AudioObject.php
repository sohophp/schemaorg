<?php declare(strict_types=1);
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
    public function transcript(?string $value)
    {
        $this->setProperty('transcript', $value);
        return $this;
    }

    /**
    * The caption for this object. For downloadable machine formats (closed caption, subtitles etc.) use MediaObject and indicate the <a class="localLink" href="http://schema.org/encodingFormat">encodingFormat</a>.
    * @param string|MediaObject $value
    * @return $this
    */
    public function caption($value)
    {
        $this->setProperty('caption', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\CreativeWork\\MediaObject\\AudioObject','Thing\\AudioObject');

