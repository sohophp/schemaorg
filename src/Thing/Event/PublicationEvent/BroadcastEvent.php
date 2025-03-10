<?php
namespace Sohophp\SchemaOrg\Thing\Event\PublicationEvent;

use Sohophp\SchemaOrg\Thing\Event\PublicationEvent;
use Sohophp\SchemaOrg\Thing\Event;

/**
* An over the air or online broadcast event.
* @see http://schema.org/BroadcastEvent
* @package Sohophp\SchemaOrg\Thing\Event\PublicationEvent
*/
class BroadcastEvent extends PublicationEvent
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
        * True is the broadcast is of a live event.
        * @param bool|array|string|mixed $value
    * @return $this
    */
    public function isLiveBroadcast($value)
    {
        $this->setProperty('isLiveBroadcast', $value);
        return $this;
    }

    /**
    * @param bool|array|string|mixed $value
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
        * The event being broadcast such as a sporting event or awards ceremony.
        * @param Event|array|string|mixed $value
    * @return $this
    */
    public function broadcastOfEvent($value)
    {
        $this->setProperty('broadcastOfEvent', $value);
        return $this;
    }

    /**
    * @param Event|array|string|mixed $value
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
