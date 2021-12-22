<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\Service;

use Sohophp\SchemaOrg\Thing\Intangible\Service;
use Sohophp\SchemaOrg\Thing\Intangible\BroadcastFrequencySpecification;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Place;
use Sohophp\SchemaOrg\Thing\Intangible\BroadcastChannel;

/**
* A delivery service through which content is provided via broadcast over the air or online.
* @see http://schema.org/BroadcastService
* @package Sohophp\SchemaOrg\Thing\Intangible\Service

*
*/
class BroadcastService extends Service
{

    /**
    * The frequency used for over-the-air broadcasts. Numeric values or simple ranges e.g. 87-99. In addition a shortcut idiom is supported for frequences of AM and FM radio channels, e.g. "87 FM".
    * @param string|BroadcastFrequencySpecification|array $value
    * @return $this
    */
    public function broadcastFrequency($value)
    {
        $this->setProperty('broadcastFrequency', $value);
        return $this;
    }
   /**
    * @param string|BroadcastFrequencySpecification|array $value
    * @return $this
    */
    public function setBroadcastFrequency($value)
    {
        $this->setProperty('broadcastFrequency', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getBroadcastFrequency()
    {
       return $this->getProperty('broadcastFrequency');
    }

    /**
    * The timezone in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 format</a> for which the service bases its broadcasts
    * @param string|array $value
    * @return $this
    */
    public function broadcastTimezone(?string $value)
    {
        $this->setProperty('broadcastTimezone', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setBroadcastTimezone(?string $value)
    {
        $this->setProperty('broadcastTimezone', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getBroadcastTimezone()
    {
       return $this->getProperty('broadcastTimezone');
    }

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
    * A broadcast service to which the broadcast service may belong to such as regional variations of a national channel.
    * @param BroadcastService|array $value
    * @return $this
    */
    public function parentService(?BroadcastService $value)
    {
        $this->setProperty('parentService', $value);
        return $this;
    }
   /**
    * @param BroadcastService|array $value
    * @return $this
    */
    public function setParentService(?BroadcastService $value)
    {
        $this->setProperty('parentService', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getParentService()
    {
       return $this->getProperty('parentService');
    }

    /**
    * The name displayed in the channel guide. For many US affiliates, it is the network name.
    * @param string|array $value
    * @return $this
    */
    public function broadcastDisplayName(?string $value)
    {
        $this->setProperty('broadcastDisplayName', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setBroadcastDisplayName(?string $value)
    {
        $this->setProperty('broadcastDisplayName', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getBroadcastDisplayName()
    {
       return $this->getProperty('broadcastDisplayName');
    }

    /**
    * The media network(s) whose content is broadcast on this station.
    * @param Organization|array $value
    * @return $this
    */
    public function broadcastAffiliateOf(?Organization $value)
    {
        $this->setProperty('broadcastAffiliateOf', $value);
        return $this;
    }
   /**
    * @param Organization|array $value
    * @return $this
    */
    public function setBroadcastAffiliateOf(?Organization $value)
    {
        $this->setProperty('broadcastAffiliateOf', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getBroadcastAffiliateOf()
    {
       return $this->getProperty('broadcastAffiliateOf');
    }

    /**
    * The area within which users can expect to reach the broadcast service.
    * @param Place|array $value
    * @return $this
    */
    public function area(?Place $value)
    {
        $this->setProperty('area', $value);
        return $this;
    }
   /**
    * @param Place|array $value
    * @return $this
    */
    public function setArea(?Place $value)
    {
        $this->setProperty('area', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getArea()
    {
       return $this->getProperty('area');
    }

    /**
    * A broadcast channel of a broadcast service.
    * @param BroadcastChannel|array $value
    * @return $this
    */
    public function hasBroadcastChannel(?BroadcastChannel $value)
    {
        $this->setProperty('hasBroadcastChannel', $value);
        return $this;
    }
   /**
    * @param BroadcastChannel|array $value
    * @return $this
    */
    public function setHasBroadcastChannel(?BroadcastChannel $value)
    {
        $this->setProperty('hasBroadcastChannel', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getHasBroadcastChannel()
    {
       return $this->getProperty('hasBroadcastChannel');
    }

    /**
    * The organization owning or operating the broadcast service.
    * @param Organization|array $value
    * @return $this
    */
    public function broadcaster(?Organization $value)
    {
        $this->setProperty('broadcaster', $value);
        return $this;
    }
   /**
    * @param Organization|array $value
    * @return $this
    */
    public function setBroadcaster(?Organization $value)
    {
        $this->setProperty('broadcaster', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getBroadcaster()
    {
       return $this->getProperty('broadcaster');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\Service\\BroadcastService','Thing\\BroadcastService');

