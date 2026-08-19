<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible\Service;

use Sohophp\SchemaOrg\Thing\Intangible\Service;
use Sohophp\SchemaOrg\Thing\Intangible\BroadcastChannel;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Intangible\BroadcastFrequencySpecification;
use Sohophp\SchemaOrg\Thing\Place;
use Sohophp\SchemaOrg\Thing\Intangible\Language;

/**
 * A delivery service through which content is provided via broadcast over the air or online.
 * @see https://schema.org/BroadcastService
 * @package Sohophp\SchemaOrg\Thing\Intangible\Service
 */
class BroadcastService extends Service
{
    /**
     * A broadcast channel of a broadcast service.
     * @see https://schema.org/hasBroadcastChannel
     * @param BroadcastChannel|array $value
     * @return $this
     */
    public function hasBroadcastChannel($value)
    {
        $this->setProperty('hasBroadcastChannel', $value);
        return $this;
    }

    /**
     * @param BroadcastChannel|array $value
     * @return $this
     */
    public function setHasBroadcastChannel($value)
    {
        $this->setProperty('hasBroadcastChannel', $value);
        return $this;
    }

    /**
     * @param BroadcastChannel $value
     * @return $this
     */
    public function addHasBroadcastChannel($value)
    {
        $current = $this->getProperty('hasBroadcastChannel');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('hasBroadcastChannel', $current);
        return $this;
    }

    /**
     * @return BroadcastChannel|array
     */
    public function getHasBroadcastChannel()
    {
        return $this->getProperty('hasBroadcastChannel');
    }
    /**
     * A [callsign](https://en.wikipedia.org/wiki/Call_sign), as used in broadcasting and radio communications to identify people, radio and TV stations, or vehicles.
     * @see https://schema.org/callSign
     * @param string|array $value
     * @return $this
     */
    public function callSign($value)
    {
        $this->setProperty('callSign', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setCallSign($value)
    {
        $this->setProperty('callSign', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addCallSign($value)
    {
        $current = $this->getProperty('callSign');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('callSign', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getCallSign()
    {
        return $this->getProperty('callSign');
    }
    /**
     * The media network(s) whose content is broadcast on this station.
     * @see https://schema.org/broadcastAffiliateOf
     * @param Organization|array $value
     * @return $this
     */
    public function broadcastAffiliateOf($value)
    {
        $this->setProperty('broadcastAffiliateOf', $value);
        return $this;
    }

    /**
     * @param Organization|array $value
     * @return $this
     */
    public function setBroadcastAffiliateOf($value)
    {
        $this->setProperty('broadcastAffiliateOf', $value);
        return $this;
    }

    /**
     * @param Organization $value
     * @return $this
     */
    public function addBroadcastAffiliateOf($value)
    {
        $current = $this->getProperty('broadcastAffiliateOf');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('broadcastAffiliateOf', $current);
        return $this;
    }

    /**
     * @return Organization|array
     */
    public function getBroadcastAffiliateOf()
    {
        return $this->getProperty('broadcastAffiliateOf');
    }
    /**
     * The organization owning or operating the broadcast service.
     * @see https://schema.org/broadcaster
     * @param Organization|array $value
     * @return $this
     */
    public function broadcaster($value)
    {
        $this->setProperty('broadcaster', $value);
        return $this;
    }

    /**
     * @param Organization|array $value
     * @return $this
     */
    public function setBroadcaster($value)
    {
        $this->setProperty('broadcaster', $value);
        return $this;
    }

    /**
     * @param Organization $value
     * @return $this
     */
    public function addBroadcaster($value)
    {
        $current = $this->getProperty('broadcaster');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('broadcaster', $current);
        return $this;
    }

    /**
     * @return Organization|array
     */
    public function getBroadcaster()
    {
        return $this->getProperty('broadcaster');
    }
    /**
     * The type of screening or video broadcast used (e.g. IMAX, 3D, SD, HD, etc.).
     * @see https://schema.org/videoFormat
     * @param string|array $value
     * @return $this
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
     * @param string $value
     * @return $this
     */
    public function addVideoFormat($value)
    {
        $current = $this->getProperty('videoFormat');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('videoFormat', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getVideoFormat()
    {
        return $this->getProperty('videoFormat');
    }
    /**
     * A broadcast service to which the broadcast service may belong to such as regional variations of a national channel.
     * @see https://schema.org/parentService
     * @param BroadcastService|array $value
     * @return $this
     */
    public function parentService($value)
    {
        $this->setProperty('parentService', $value);
        return $this;
    }

    /**
     * @param BroadcastService|array $value
     * @return $this
     */
    public function setParentService($value)
    {
        $this->setProperty('parentService', $value);
        return $this;
    }

    /**
     * @param BroadcastService $value
     * @return $this
     */
    public function addParentService($value)
    {
        $current = $this->getProperty('parentService');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('parentService', $current);
        return $this;
    }

    /**
     * @return BroadcastService|array
     */
    public function getParentService()
    {
        return $this->getProperty('parentService');
    }
    /**
     * The name displayed in the channel guide. For many US affiliates, it is the network name.
     * @see https://schema.org/broadcastDisplayName
     * @param string|array $value
     * @return $this
     */
    public function broadcastDisplayName($value)
    {
        $this->setProperty('broadcastDisplayName', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setBroadcastDisplayName($value)
    {
        $this->setProperty('broadcastDisplayName', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addBroadcastDisplayName($value)
    {
        $current = $this->getProperty('broadcastDisplayName');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('broadcastDisplayName', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getBroadcastDisplayName()
    {
        return $this->getProperty('broadcastDisplayName');
    }
    /**
     * The frequency used for over-the-air broadcasts. Numeric values or simple ranges, e.g. 87-99. In addition a shortcut idiom is supported for frequencies of AM and FM radio channels, e.g. "87 FM".
     * @see https://schema.org/broadcastFrequency
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
     * @param string|BroadcastFrequencySpecification $value
     * @return $this
     */
    public function addBroadcastFrequency($value)
    {
        $current = $this->getProperty('broadcastFrequency');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('broadcastFrequency', $current);
        return $this;
    }

    /**
     * @return string|BroadcastFrequencySpecification|array
     */
    public function getBroadcastFrequency()
    {
        return $this->getProperty('broadcastFrequency');
    }
    /**
     * The area within which users can expect to reach the broadcast service.
     * @see https://schema.org/area
     * @param Place|array $value
     * @return $this
     */
    public function area($value)
    {
        $this->setProperty('area', $value);
        return $this;
    }

    /**
     * @param Place|array $value
     * @return $this
     */
    public function setArea($value)
    {
        $this->setProperty('area', $value);
        return $this;
    }

    /**
     * @param Place $value
     * @return $this
     */
    public function addArea($value)
    {
        $current = $this->getProperty('area');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('area', $current);
        return $this;
    }

    /**
     * @return Place|array
     */
    public function getArea()
    {
        return $this->getProperty('area');
    }
    /**
     * The language of the content or performance or used in an action. Please use one of the language codes from the [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47). See also [[availableLanguage]].
     * @see https://schema.org/inLanguage
     * @param string|Language|array $value
     * @return $this
     */
    public function inLanguage($value)
    {
        $this->setProperty('inLanguage', $value);
        return $this;
    }

    /**
     * @param string|Language|array $value
     * @return $this
     */
    public function setInLanguage($value)
    {
        $this->setProperty('inLanguage', $value);
        return $this;
    }

    /**
     * @param string|Language $value
     * @return $this
     */
    public function addInLanguage($value)
    {
        $current = $this->getProperty('inLanguage');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('inLanguage', $current);
        return $this;
    }

    /**
     * @return string|Language|array
     */
    public function getInLanguage()
    {
        return $this->getProperty('inLanguage');
    }
    /**
     * The timezone in [ISO 8601 format](http://en.wikipedia.org/wiki/ISO_8601) for which the service bases its broadcasts.
     * @see https://schema.org/broadcastTimezone
     * @param string|array $value
     * @return $this
     */
    public function broadcastTimezone($value)
    {
        $this->setProperty('broadcastTimezone', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setBroadcastTimezone($value)
    {
        $this->setProperty('broadcastTimezone', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addBroadcastTimezone($value)
    {
        $current = $this->getProperty('broadcastTimezone');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('broadcastTimezone', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getBroadcastTimezone()
    {
        return $this->getProperty('broadcastTimezone');
    }
}
