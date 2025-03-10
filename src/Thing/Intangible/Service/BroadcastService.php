<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\Service;

use Sohophp\SchemaOrg\Thing\Intangible\Service;
use Sohophp\SchemaOrg\Thing\Intangible\BroadcastFrequencySpecification;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Place;
use Sohophp\SchemaOrg\Thing\Intangible\BroadcastChannel;

/**
* A delivery service through which content is provided via broadcast over the
 * air or online.
* @see http://schema.org/BroadcastService
* @package Sohophp\SchemaOrg\Thing\Intangible\Service
*/
class BroadcastService extends Service
{


    /**
        * The frequency used for over-the-air broadcasts. Numeric values or simple
 * ranges e.g. 87-99. In addition a shortcut idiom is supported for frequences
 * of AM and FM radio channels, e.g. "87 FM".
        * @param string|BroadcastFrequencySpecification|array|mixed $value
    * @return $this
    */
    public function broadcastFrequency($value)
    {
        $this->setProperty('broadcastFrequency', $value);
        return $this;
    }

    /**
    * @param string|BroadcastFrequencySpecification|array|mixed $value
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
        * The timezone in [ISO 8601 format](http://en.wikipedia.org/wiki/ISO_8601) for
 * which the service bases its broadcasts
        * @param string|array|mixed $value
    * @return $this
    */
    public function broadcastTimezone($value)
    {
        $this->setProperty('broadcastTimezone', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
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
        * A broadcast service to which the broadcast service may belong to such as
 * regional variations of a national channel.
        * @param BroadcastService|array|string|mixed $value
    * @return $this
    */
    public function parentService($value)
    {
        $this->setProperty('parentService', $value);
        return $this;
    }

    /**
    * @param BroadcastService|array|string|mixed $value
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
        * The name displayed in the channel guide. For many US affiliates, it is the
 * network name.
        * @param string|array|mixed $value
    * @return $this
    */
    public function broadcastDisplayName($value)
    {
        $this->setProperty('broadcastDisplayName', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
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
        * The media network(s) whose content is broadcast on this station.
        * @param Organization|array|string|mixed $value
    * @return $this
    */
    public function broadcastAffiliateOf($value)
    {
        $this->setProperty('broadcastAffiliateOf', $value);
        return $this;
    }

    /**
    * @param Organization|array|string|mixed $value
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
        * The area within which users can expect to reach the broadcast service.
        * @param Place|array|string|mixed $value
    * @return $this
    */
    public function area($value)
    {
        $this->setProperty('area', $value);
        return $this;
    }

    /**
    * @param Place|array|string|mixed $value
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
        * A broadcast channel of a broadcast service.
        * @param BroadcastChannel|array|string|mixed $value
    * @return $this
    */
    public function hasBroadcastChannel($value)
    {
        $this->setProperty('hasBroadcastChannel', $value);
        return $this;
    }

    /**
    * @param BroadcastChannel|array|string|mixed $value
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


    /**
        * The organization owning or operating the broadcast service.
        * @param Organization|array|string|mixed $value
    * @return $this
    */
    public function broadcaster($value)
    {
        $this->setProperty('broadcaster', $value);
        return $this;
    }

    /**
    * @param Organization|array|string|mixed $value
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


}
