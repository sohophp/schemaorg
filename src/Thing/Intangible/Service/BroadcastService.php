<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\Service;

use Sohophp\SchemaOrg\Thing\Intangible\Service;

/**
* A delivery service through which content is provided via broadcast over the air or online.
* @see schema:BroadcastService
* @package Sohophp\SchemaOrg\Thing\Intangible\Service
*/
class BroadcastService extends Service
{
   /**
        * The language of the content or performance or used in an action. Please use one of the language codes from the [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47). See also [[availableLanguage]].
        */
    protected $inLanguage = null;

   /**
        * The media network(s) whose content is broadcast on this station.
        */
    protected $broadcastAffiliateOf = null;

   /**
        * The type of screening or video broadcast used (e.g. IMAX, 3D, SD, HD, etc.).
        */
    protected $videoFormat = null;

   /**
        * The area within which users can expect to reach the broadcast service.
        */
    protected $area = null;

   /**
        * The timezone in [ISO 8601 format](http://en.wikipedia.org/wiki/ISO_8601) for which the service bases its broadcasts.
        */
    protected $broadcastTimezone = null;

   /**
        * The frequency used for over-the-air broadcasts. Numeric values or simple ranges, e.g. 87-99. In addition a shortcut idiom is supported for frequencies of AM and FM radio channels, e.g. "87 FM".
        */
    protected $broadcastFrequency = null;

   /**
        * A broadcast service to which the broadcast service may belong to such as regional variations of a national channel.
        */
    protected $parentService = null;

   /**
        * The organization owning or operating the broadcast service.
        */
    protected $broadcaster = null;

   /**
        * A [callsign](https://en.wikipedia.org/wiki/Call_sign), as used in broadcasting and radio communications to identify people, radio and TV stations, or vehicles.
        */
    protected $callSign = null;

   /**
        * The name displayed in the channel guide. For many US affiliates, it is the network name.
        */
    protected $broadcastDisplayName = null;

   /**
        * A broadcast channel of a broadcast service.
        */
    protected $hasBroadcastChannel = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setInLanguage($value)
    {
        $this->setProperty('inLanguage', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getInLanguage()
    {
       return $this->getProperty('inLanguage');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setBroadcastAffiliateOf($value)
    {
        $this->setProperty('broadcastAffiliateOf', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getBroadcastAffiliateOf()
    {
       return $this->getProperty('broadcastAffiliateOf');
    }

    /**
    * @param array|string $value
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
    * @param array|string $value
    * @return $this
    */
    public function setArea($value)
    {
        $this->setProperty('area', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getArea()
    {
       return $this->getProperty('area');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setBroadcastTimezone($value)
    {
        $this->setProperty('broadcastTimezone', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getBroadcastTimezone()
    {
       return $this->getProperty('broadcastTimezone');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setBroadcastFrequency($value)
    {
        $this->setProperty('broadcastFrequency', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getBroadcastFrequency()
    {
       return $this->getProperty('broadcastFrequency');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setParentService($value)
    {
        $this->setProperty('parentService', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getParentService()
    {
       return $this->getProperty('parentService');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setBroadcaster($value)
    {
        $this->setProperty('broadcaster', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getBroadcaster()
    {
       return $this->getProperty('broadcaster');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setCallSign($value)
    {
        $this->setProperty('callSign', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCallSign()
    {
       return $this->getProperty('callSign');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setBroadcastDisplayName($value)
    {
        $this->setProperty('broadcastDisplayName', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getBroadcastDisplayName()
    {
       return $this->getProperty('broadcastDisplayName');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setHasBroadcastChannel($value)
    {
        $this->setProperty('hasBroadcastChannel', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getHasBroadcastChannel()
    {
       return $this->getProperty('hasBroadcastChannel');
    }


}
