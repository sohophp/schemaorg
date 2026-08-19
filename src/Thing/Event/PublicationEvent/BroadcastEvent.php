<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Event\PublicationEvent;

use Sohophp\SchemaOrg\Thing\Event\PublicationEvent;
use Sohophp\SchemaOrg\Thing\Event;
use Sohophp\SchemaOrg\Thing\Intangible\Language;

/**
 * An over the air or online broadcast event.
 * @see https://schema.org/BroadcastEvent
 * @package Sohophp\SchemaOrg\Thing\Event\PublicationEvent
 */
class BroadcastEvent extends PublicationEvent
{
    /**
     * The event being broadcast such as a sporting event or awards ceremony.
     * @see https://schema.org/broadcastOfEvent
     * @param Event|array $value
     * @return $this
     */
    public function broadcastOfEvent($value)
    {
        $this->setProperty('broadcastOfEvent', $value);
        return $this;
    }

    /**
     * @param Event|array $value
     * @return $this
     */
    public function setBroadcastOfEvent($value)
    {
        $this->setProperty('broadcastOfEvent', $value);
        return $this;
    }

    /**
     * @param Event $value
     * @return $this
     */
    public function addBroadcastOfEvent($value)
    {
        $current = $this->getProperty('broadcastOfEvent');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('broadcastOfEvent', $current);
        return $this;
    }

    /**
     * @return Event|array
     */
    public function getBroadcastOfEvent()
    {
        return $this->getProperty('broadcastOfEvent');
    }
    /**
     * Languages in which subtitles/captions are available, in [IETF BCP 47 standard format](http://tools.ietf.org/html/bcp47).
     * @see https://schema.org/subtitleLanguage
     * @param string|Language|array $value
     * @return $this
     */
    public function subtitleLanguage($value)
    {
        $this->setProperty('subtitleLanguage', $value);
        return $this;
    }

    /**
     * @param string|Language|array $value
     * @return $this
     */
    public function setSubtitleLanguage($value)
    {
        $this->setProperty('subtitleLanguage', $value);
        return $this;
    }

    /**
     * @param string|Language $value
     * @return $this
     */
    public function addSubtitleLanguage($value)
    {
        $current = $this->getProperty('subtitleLanguage');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('subtitleLanguage', $current);
        return $this;
    }

    /**
     * @return string|Language|array
     */
    public function getSubtitleLanguage()
    {
        return $this->getProperty('subtitleLanguage');
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
     * True if the broadcast is of a live event.
     * @see https://schema.org/isLiveBroadcast
     * @param bool|array $value
     * @return $this
     */
    public function isLiveBroadcast($value)
    {
        $this->setProperty('isLiveBroadcast', $value);
        return $this;
    }

    /**
     * @param bool|array $value
     * @return $this
     */
    public function setIsLiveBroadcast($value)
    {
        $this->setProperty('isLiveBroadcast', $value);
        return $this;
    }

    /**
     * @param bool $value
     * @return $this
     */
    public function addIsLiveBroadcast($value)
    {
        $current = $this->getProperty('isLiveBroadcast');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('isLiveBroadcast', $current);
        return $this;
    }

    /**
     * @return bool|array
     */
    public function getIsLiveBroadcast()
    {
        return $this->getProperty('isLiveBroadcast');
    }
}
