<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject;

use Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject;

/**
* An audio file.
* @see schema:AudioObject
* @package Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject
*/
class AudioObject extends MediaObject
{


    /**
        * The caption for this object. For downloadable machine formats (closed
 * caption, subtitles etc.) use MediaObject and indicate the [[encodingFormat]].
        * @param array|string|mixed $value
    * @return $this
    */
    public function caption($value)
    {
        $this->setProperty('caption', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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


    /**
        * Represents textual captioning from a [[MediaObject]], e.g. text of a 'meme'.
        * @param array|string|mixed $value
    * @return $this
    */
    public function embeddedTextCaption($value)
    {
        $this->setProperty('embeddedTextCaption', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setEmbeddedTextCaption($value)
    {
        $this->setProperty('embeddedTextCaption', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEmbeddedTextCaption()
    {
       return $this->getProperty('embeddedTextCaption');
    }


    /**
        * If this MediaObject is an AudioObject or VideoObject, the transcript of that
 * object.
        * @param array|string|mixed $value
    * @return $this
    */
    public function transcript($value)
    {
        $this->setProperty('transcript', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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


}
