<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Event;

use Sohophp\SchemaOrg\Thing\Event;
use Sohophp\SchemaOrg\Thing\Intangible\Service\BroadcastService;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Person;

/**
 * A PublicationEvent corresponds indifferently to the event of publication for a CreativeWork of any type, e.g. a broadcast event, an on-demand event, a book/journal publication via a variety of delivery media.
 * @see https://schema.org/PublicationEvent
 * @package Sohophp\SchemaOrg\Thing\Event
 */
class PublicationEvent extends Event
{
    /**
     * A broadcast service associated with the publication event.
     * @see https://schema.org/publishedOn
     * @param BroadcastService|array $value
     * @return $this
     */
    public function publishedOn($value)
    {
        $this->setProperty('publishedOn', $value);
        return $this;
    }

    /**
     * @param BroadcastService|array $value
     * @return $this
     */
    public function setPublishedOn($value)
    {
        $this->setProperty('publishedOn', $value);
        return $this;
    }

    /**
     * @param BroadcastService $value
     * @return $this
     */
    public function addPublishedOn($value)
    {
        $current = $this->getProperty('publishedOn');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('publishedOn', $current);
        return $this;
    }

    /**
     * @return BroadcastService|array
     */
    public function getPublishedOn()
    {
        return $this->getProperty('publishedOn');
    }
    /**
     * A flag to signal that the item, event, or place is accessible for free.
     * @see https://schema.org/free
     * @param bool|array $value
     * @return $this
     */
    public function free($value)
    {
        $this->setProperty('free', $value);
        return $this;
    }

    /**
     * @param bool|array $value
     * @return $this
     */
    public function setFree($value)
    {
        $this->setProperty('free', $value);
        return $this;
    }

    /**
     * @param bool $value
     * @return $this
     */
    public function addFree($value)
    {
        $current = $this->getProperty('free');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('free', $current);
        return $this;
    }

    /**
     * @return bool|array
     */
    public function getFree()
    {
        return $this->getProperty('free');
    }
    /**
     * An agent associated with the publication event.
     * @see https://schema.org/publishedBy
     * @param Organization|Person|array $value
     * @return $this
     */
    public function publishedBy($value)
    {
        $this->setProperty('publishedBy', $value);
        return $this;
    }

    /**
     * @param Organization|Person|array $value
     * @return $this
     */
    public function setPublishedBy($value)
    {
        $this->setProperty('publishedBy', $value);
        return $this;
    }

    /**
     * @param Organization|Person $value
     * @return $this
     */
    public function addPublishedBy($value)
    {
        $current = $this->getProperty('publishedBy');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('publishedBy', $current);
        return $this;
    }

    /**
     * @return Organization|Person|array
     */
    public function getPublishedBy()
    {
        return $this->getProperty('publishedBy');
    }
}
