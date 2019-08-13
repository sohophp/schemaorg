<?php declare(strict_types=1);
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
*/
class BroadcastService extends Service
{

    /**
    * The frequency used for over-the-air broadcasts. Numeric values or simple ranges e.g. 87-99. In addition a shortcut idiom is supported for frequences of AM and FM radio channels, e.g. "87 FM".
    * @param string|BroadcastFrequencySpecification $value
    * @return $this
    */
    public function broadcastFrequency($value)
    {
        $this->setProperty('broadcastFrequency', $value);
        return $this;
    }

    /**
    * The timezone in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 format</a> for which the service bases its broadcasts
    * @param string $value
    * @return $this
    */
    public function broadcastTimezone(?string $value)
    {
        $this->setProperty('broadcastTimezone', $value);
        return $this;
    }

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
    * A broadcast service to which the broadcast service may belong to such as regional variations of a national channel.
    * @param BroadcastService $value
    * @return $this
    */
    public function parentService(?BroadcastService $value)
    {
        $this->setProperty('parentService', $value);
        return $this;
    }

    /**
    * The name displayed in the channel guide. For many US affiliates, it is the network name.
    * @param string $value
    * @return $this
    */
    public function broadcastDisplayName(?string $value)
    {
        $this->setProperty('broadcastDisplayName', $value);
        return $this;
    }

    /**
    * The media network(s) whose content is broadcast on this station.
    * @param Organization $value
    * @return $this
    */
    public function broadcastAffiliateOf(?Organization $value)
    {
        $this->setProperty('broadcastAffiliateOf', $value);
        return $this;
    }

    /**
    * The area within which users can expect to reach the broadcast service.
    * @param Place $value
    * @return $this
    */
    public function area(?Place $value)
    {
        $this->setProperty('area', $value);
        return $this;
    }

    /**
    * A broadcast channel of a broadcast service.
    * @param BroadcastChannel $value
    * @return $this
    */
    public function hasBroadcastChannel(?BroadcastChannel $value)
    {
        $this->setProperty('hasBroadcastChannel', $value);
        return $this;
    }

    /**
    * The organization owning or operating the broadcast service.
    * @param Organization $value
    * @return $this
    */
    public function broadcaster(?Organization $value)
    {
        $this->setProperty('broadcaster', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\Service\\BroadcastService','Thing\\BroadcastService');

