<?php
namespace Sohophp\SchemaOrg\Thing\Event;

use Sohophp\SchemaOrg\Thing\Event;
use Sohophp\SchemaOrg\Thing\Intangible\Language;
use Sohophp\SchemaOrg\Thing\CreativeWork\Movie;

/**
* A screening of a movie or other video.
* @see http://schema.org/ScreeningEvent
* @package Sohophp\SchemaOrg\Thing\Event

*
*/
class ScreeningEvent extends Event
{

    /**
    * The type of screening or video broadcast used (e.g. IMAX, 3D, SD, HD, etc.).
    * @param string|array $value
    * @return $this
    */
    public function videoFormat(?string $value)
    {
        $this->setProperty('videoFormat', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setVideoFormat(?string $value)
    {
        $this->setProperty('videoFormat', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getVideoFormat()
    {
       return $this->getProperty('videoFormat');
    }

    /**
    * Languages in which subtitles/captions are available, in <a href="http://tools.ietf.org/html/bcp47">IETF BCP 47 standard format</a>.
    * @param Language|string|array $value
    * @return $this
    */
    public function subtitleLanguage($value)
    {
        $this->setProperty('subtitleLanguage', $value);
        return $this;
    }
   /**
    * @param Language|string|array $value
    * @return $this
    */
    public function setSubtitleLanguage($value)
    {
        $this->setProperty('subtitleLanguage', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getSubtitleLanguage()
    {
       return $this->getProperty('subtitleLanguage');
    }

    /**
    * The movie presented during this event.
    * @param Movie|array $value
    * @return $this
    */
    public function workPresented(?Movie $value)
    {
        $this->setProperty('workPresented', $value);
        return $this;
    }
   /**
    * @param Movie|array $value
    * @return $this
    */
    public function setWorkPresented(?Movie $value)
    {
        $this->setProperty('workPresented', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getWorkPresented()
    {
       return $this->getProperty('workPresented');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Event\\ScreeningEvent','Thing\\ScreeningEvent');

