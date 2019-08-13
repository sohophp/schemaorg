<?php declare(strict_types=1);
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
    * @param string $value
    * @return $this
    */
    public function videoFormat(?string $value)
    {
        $this->setProperty('videoFormat', $value);
        return $this;
    }

    /**
    * Languages in which subtitles/captions are available, in <a href="http://tools.ietf.org/html/bcp47">IETF BCP 47 standard format</a>.
    * @param Language|string $value
    * @return $this
    */
    public function subtitleLanguage($value)
    {
        $this->setProperty('subtitleLanguage', $value);
        return $this;
    }

    /**
    * The movie presented during this event.
    * @param Movie $value
    * @return $this
    */
    public function workPresented(?Movie $value)
    {
        $this->setProperty('workPresented', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Event\\ScreeningEvent','Thing\\ScreeningEvent');

