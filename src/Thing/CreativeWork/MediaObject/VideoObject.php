<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject;

use Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Organization\PerformingGroup\MusicGroup;
use Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject\ImageObject;

/**
* A video file.
* @see http://schema.org/VideoObject
* @package Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject

*
*/
class VideoObject extends MediaObject
{

    /**
    * An actor, e.g. in tv, radio, movie, video games etc., or in an event. Actors can be associated with individual items or with a series, episode, clip.
    * @param Person|array $value
    * @return $this
    */
    public function actor(?Person $value)
    {
        $this->setProperty('actor', $value);
        return $this;
    }
   /**
    * @param Person|array $value
    * @return $this
    */
    public function setActor(?Person $value)
    {
        $this->setProperty('actor', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getActor()
    {
       return $this->getProperty('actor');
    }

    /**
    * The frame size of the video.
    * @param string|array $value
    * @return $this
    */
    public function videoFrameSize(?string $value)
    {
        $this->setProperty('videoFrameSize', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setVideoFrameSize(?string $value)
    {
        $this->setProperty('videoFrameSize', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getVideoFrameSize()
    {
       return $this->getProperty('videoFrameSize');
    }

    /**
    * The composer of the soundtrack.
    * @param Person|MusicGroup|array $value
    * @return $this
    */
    public function musicBy($value)
    {
        $this->setProperty('musicBy', $value);
        return $this;
    }
   /**
    * @param Person|MusicGroup|array $value
    * @return $this
    */
    public function setMusicBy($value)
    {
        $this->setProperty('musicBy', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getMusicBy()
    {
       return $this->getProperty('musicBy');
    }

    /**
    * A director of e.g. tv, radio, movie, video games etc. content. Directors can be associated with individual items or with a series, episode, clip.
    * @param Person|array $value
    * @return $this
    */
    public function directors(?Person $value)
    {
        $this->setProperty('directors', $value);
        return $this;
    }
   /**
    * @param Person|array $value
    * @return $this
    */
    public function setDirectors(?Person $value)
    {
        $this->setProperty('directors', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getDirectors()
    {
       return $this->getProperty('directors');
    }

    /**
    * Thumbnail image for an image or video.
    * @param ImageObject|array $value
    * @return $this
    */
    public function thumbnail(?ImageObject $value)
    {
        $this->setProperty('thumbnail', $value);
        return $this;
    }
   /**
    * @param ImageObject|array $value
    * @return $this
    */
    public function setThumbnail(?ImageObject $value)
    {
        $this->setProperty('thumbnail', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getThumbnail()
    {
       return $this->getProperty('thumbnail');
    }

    /**
    * A director of e.g. tv, radio, movie, video gaming etc. content, or of an event. Directors can be associated with individual items or with a series, episode, clip.
    * @param Person|array $value
    * @return $this
    */
    public function director(?Person $value)
    {
        $this->setProperty('director', $value);
        return $this;
    }
   /**
    * @param Person|array $value
    * @return $this
    */
    public function setDirector(?Person $value)
    {
        $this->setProperty('director', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getDirector()
    {
       return $this->getProperty('director');
    }

    /**
    * If this MediaObject is an AudioObject or VideoObject, the transcript of that object.
    * @param string|array $value
    * @return $this
    */
    public function transcript(?string $value)
    {
        $this->setProperty('transcript', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setTranscript(?string $value)
    {
        $this->setProperty('transcript', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getTranscript()
    {
       return $this->getProperty('transcript');
    }

    /**
    * The quality of the video.
    * @param string|array $value
    * @return $this
    */
    public function videoQuality(?string $value)
    {
        $this->setProperty('videoQuality', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setVideoQuality(?string $value)
    {
        $this->setProperty('videoQuality', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getVideoQuality()
    {
       return $this->getProperty('videoQuality');
    }

    /**
    * The caption for this object. For downloadable machine formats (closed caption, subtitles etc.) use MediaObject and indicate the <a class="localLink" href="http://schema.org/encodingFormat">encodingFormat</a>.
    * @param string|MediaObject|array $value
    * @return $this
    */
    public function caption($value)
    {
        $this->setProperty('caption', $value);
        return $this;
    }
   /**
    * @param string|MediaObject|array $value
    * @return $this
    */
    public function setCaption($value)
    {
        $this->setProperty('caption', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getCaption()
    {
       return $this->getProperty('caption');
    }

    /**
    * An actor, e.g. in tv, radio, movie, video games etc. Actors can be associated with individual items or with a series, episode, clip.
    * @param Person|array $value
    * @return $this
    */
    public function actors(?Person $value)
    {
        $this->setProperty('actors', $value);
        return $this;
    }
   /**
    * @param Person|array $value
    * @return $this
    */
    public function setActors(?Person $value)
    {
        $this->setProperty('actors', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getActors()
    {
       return $this->getProperty('actors');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\CreativeWork\\MediaObject\\VideoObject','Thing\\VideoObject');

