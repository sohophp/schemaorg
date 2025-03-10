<?php
namespace Sohophp\SchemaOrg\Thing\Event;

use Sohophp\SchemaOrg\Thing\Event;
use Sohophp\SchemaOrg\Thing\Intangible\Language;
use Sohophp\SchemaOrg\Thing\CreativeWork\Movie;

/**
* A screening of a movie or other video.
* @see http://schema.org/ScreeningEvent
* @package Sohophp\SchemaOrg\Thing\Event
*/
class ScreeningEvent extends Event
{


    /**
        * The type of screening or video broadcast used (e.g. IMAX, 3D, SD, HD, etc.).
        * @param string|array|mixed $value
    * @return $this
    */
    public function videoFormat($value)
    {
        $this->setProperty('videoFormat', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setVideoFormat($value)
    {
        $this->setProperty('videoFormat', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getVideoFormat()
    {
       return $this->getProperty('videoFormat');
    }


    /**
        * Languages in which subtitles/captions are available, in [IETF BCP 47 standard
 * format](http://tools.ietf.org/html/bcp47).
        * @param Language|string|array|mixed $value
    * @return $this
    */
    public function subtitleLanguage($value)
    {
        $this->setProperty('subtitleLanguage', $value);
        return $this;
    }

    /**
    * @param Language|string|array|mixed $value
    * @return $this
    */
    public function setSubtitleLanguage($value)
    {
        $this->setProperty('subtitleLanguage', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSubtitleLanguage()
    {
       return $this->getProperty('subtitleLanguage');
    }


    /**
        * The movie presented during this event.
        * @param Movie|array|string|mixed $value
    * @return $this
    */
    public function workPresented($value)
    {
        $this->setProperty('workPresented', $value);
        return $this;
    }

    /**
    * @param Movie|array|string|mixed $value
    * @return $this
    */
    public function setWorkPresented($value)
    {
        $this->setProperty('workPresented', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getWorkPresented()
    {
       return $this->getProperty('workPresented');
    }


}
