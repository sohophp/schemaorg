<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Event;

use Sohophp\SchemaOrg\Thing\Event;
use Sohophp\SchemaOrg\Thing\CreativeWork\Movie;
use Sohophp\SchemaOrg\Thing\Intangible\Language;

/**
 * A screening of a movie or other video.
 * @see https://schema.org/ScreeningEvent
 * @package Sohophp\SchemaOrg\Thing\Event
 */
class ScreeningEvent extends Event
{
    /**
     * The movie presented during this event.
     * @see https://schema.org/workPresented
     * @param Movie|array $value
     * @return $this
     */
    public function workPresented($value)
    {
        $this->setProperty('workPresented', $value);
        return $this;
    }

    /**
     * @param Movie|array $value
     * @return $this
     */
    public function setWorkPresented($value)
    {
        $this->setProperty('workPresented', $value);
        return $this;
    }

    /**
     * @param Movie $value
     * @return $this
     */
    public function addWorkPresented($value)
    {
        $current = $this->getProperty('workPresented');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('workPresented', $current);
        return $this;
    }

    /**
     * @return Movie|array
     */
    public function getWorkPresented()
    {
        return $this->getProperty('workPresented');
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
}
