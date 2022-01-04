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
    * @deprecated use setVideoFormat
    */
    public function videoFormat($value)
    {
        $this->setProperty('videoFormat', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setVideoFormat($value)
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
    * @deprecated use setSubtitleLanguage
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
    * @param Movie|array|string $value
    * @return $this
    * @deprecated use setWorkPresented
    */
    public function workPresented($value)
    {
        $this->setProperty('workPresented', $value);
        return $this;
    }
   /**
    * @param Movie|array|string $value
    * @return $this
    */
    public function setWorkPresented($value)
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
