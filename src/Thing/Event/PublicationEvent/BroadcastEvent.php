<?php
namespace Sohophp\SchemaOrg\Thing\Event\PublicationEvent;

use Sohophp\SchemaOrg\Thing\Event\PublicationEvent;

/**
* An over the air or online broadcast event.
* @see schema:BroadcastEvent
* @package Sohophp\SchemaOrg\Thing\Event\PublicationEvent
*/
class BroadcastEvent extends PublicationEvent
{


    /**
        * True if the broadcast is of a live event.
        * @param array|string|mixed $value
    * @return $this
    */
    public function isLiveBroadcast($value)
    {
        $this->setProperty('isLiveBroadcast', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setIsLiveBroadcast($value)
    {
        $this->setProperty('isLiveBroadcast', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getIsLiveBroadcast()
    {
       return $this->getProperty('isLiveBroadcast');
    }


    /**
        * The type of screening or video broadcast used (e.g. IMAX, 3D, SD, HD, etc.).
        * @param array|string|mixed $value
    * @return $this
    */
    public function videoFormat($value)
    {
        $this->setProperty('videoFormat', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * @param array|string|mixed $value
    * @return $this
    */
    public function subtitleLanguage($value)
    {
        $this->setProperty('subtitleLanguage', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The event being broadcast such as a sporting event or awards ceremony.
        * @param array|string|mixed $value
    * @return $this
    */
    public function broadcastOfEvent($value)
    {
        $this->setProperty('broadcastOfEvent', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setBroadcastOfEvent($value)
    {
        $this->setProperty('broadcastOfEvent', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getBroadcastOfEvent()
    {
       return $this->getProperty('broadcastOfEvent');
    }


}
