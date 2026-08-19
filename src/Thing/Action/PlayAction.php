<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Action;

use Sohophp\SchemaOrg\Thing\Action;
use Sohophp\SchemaOrg\Thing\Event;
use Sohophp\SchemaOrg\Thing\Intangible\Audience;

/**
 * The act of playing/exercising/training/performing for enjoyment, leisure, recreation, competition or exercise. Related actions: * [[ListenAction]]: Unlike ListenAction (which is under ConsumeAction), PlayAction refers to performing for an audience or at an event, rather than consuming music. * [[WatchAction]]: Unlike WatchAction (which is under ConsumeAction), PlayAction refers to showing/displaying for an audience or at an event, rather than consuming visual content.
 * @see https://schema.org/PlayAction
 * @package Sohophp\SchemaOrg\Thing\Action
 */
class PlayAction extends Action
{
    /**
     * Upcoming or past event associated with this place, organization, or action.
     * @see https://schema.org/event
     * @param Event|array $value
     * @return $this
     */
    public function event($value)
    {
        $this->setProperty('event', $value);
        return $this;
    }

    /**
     * @param Event|array $value
     * @return $this
     */
    public function setEvent($value)
    {
        $this->setProperty('event', $value);
        return $this;
    }

    /**
     * @param Event $value
     * @return $this
     */
    public function addEvent($value)
    {
        $current = $this->getProperty('event');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('event', $current);
        return $this;
    }

    /**
     * @return Event|array
     */
    public function getEvent()
    {
        return $this->getProperty('event');
    }
    /**
     * An intended audience, i.e. a group for whom something was created.
     * @see https://schema.org/audience
     * @param Audience|array $value
     * @return $this
     */
    public function audience($value)
    {
        $this->setProperty('audience', $value);
        return $this;
    }

    /**
     * @param Audience|array $value
     * @return $this
     */
    public function setAudience($value)
    {
        $this->setProperty('audience', $value);
        return $this;
    }

    /**
     * @param Audience $value
     * @return $this
     */
    public function addAudience($value)
    {
        $current = $this->getProperty('audience');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('audience', $current);
        return $this;
    }

    /**
     * @return Audience|array
     */
    public function getAudience()
    {
        return $this->getProperty('audience');
    }
}
