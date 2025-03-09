<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject;

use Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject;

/**
* A video file.
* @see schema:VideoObject
* @package Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject
*/
class VideoObject extends MediaObject
{
   /**
        * The quality of the video.
        */
    protected $videoQuality = null;

   /**
        * The caption for this object. For downloadable machine formats (closed caption, subtitles etc.) use MediaObject and indicate the [[encodingFormat]].
        */
    protected $caption = null;

   /**
        * A director of e.g. TV, radio, movie, video games etc. content. Directors can be associated with individual items or with a series, episode, clip.
        */
    protected $directors = null;

   /**
        * A director of e.g. TV, radio, movie, video gaming etc. content, or of an event. Directors can be associated with individual items or with a series, episode, clip.
        */
    protected $director = null;

   /**
        * Represents textual captioning from a [[MediaObject]], e.g. text of a 'meme'.
        */
    protected $embeddedTextCaption = null;

   /**
        * The composer of the soundtrack.
        */
    protected $musicBy = null;

   /**
        * The frame size of the video.
        */
    protected $videoFrameSize = null;

   /**
        * An actor (individual or a group), e.g. in TV, radio, movie, video games etc., or in an event. Actors can be associated with individual items or with a series, episode, clip.
        */
    protected $actor = null;

   /**
        * An actor, e.g. in TV, radio, movie, video games etc. Actors can be associated with individual items or with a series, episode, clip.
        */
    protected $actors = null;

   /**
        * If this MediaObject is an AudioObject or VideoObject, the transcript of that object.
        */
    protected $transcript = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setVideoQuality($value)
    {
        $this->setProperty('videoQuality', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getVideoQuality()
    {
       return $this->getProperty('videoQuality');
    }

    /**
    * @param array|string $value
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
    * @param array|string $value
    * @return $this
    */
    public function setDirectors($value)
    {
        $this->setProperty('directors', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDirectors()
    {
       return $this->getProperty('directors');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setDirector($value)
    {
        $this->setProperty('director', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDirector()
    {
       return $this->getProperty('director');
    }

    /**
    * @param array|string $value
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
    * @param array|string $value
    * @return $this
    */
    public function setMusicBy($value)
    {
        $this->setProperty('musicBy', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getMusicBy()
    {
       return $this->getProperty('musicBy');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setVideoFrameSize($value)
    {
        $this->setProperty('videoFrameSize', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getVideoFrameSize()
    {
       return $this->getProperty('videoFrameSize');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setActor($value)
    {
        $this->setProperty('actor', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getActor()
    {
       return $this->getProperty('actor');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setActors($value)
    {
        $this->setProperty('actors', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getActors()
    {
       return $this->getProperty('actors');
    }

    /**
    * @param array|string $value
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
