<?php
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
        * If this MediaObject is an AudioObject or VideoObject, the transcript of that
 * object.
        * @param string|array|mixed $value
    * @return $this
    */
    public function transcript($value)
    {
        $this->setProperty('transcript', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setTranscript($value)
    {
        $this->setProperty('transcript', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getTranscript()
    {
       return $this->getProperty('transcript');
    }


    /**
        * The caption for this object. For downloadable machine formats (closed
 * caption, subtitles etc.) use MediaObject and indicate the [[encodingFormat]].
        * @param string|MediaObject|array|mixed $value
    * @return $this
    */
    public function caption($value)
    {
        $this->setProperty('caption', $value);
        return $this;
    }

    /**
    * @param string|MediaObject|array|mixed $value
    * @return $this
    */
    public function setCaption($value)
    {
        $this->setProperty('caption', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCaption()
    {
       return $this->getProperty('caption');
    }


}
