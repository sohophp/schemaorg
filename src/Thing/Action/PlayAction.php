<?php
namespace Sohophp\SchemaOrg\Thing\Action;

use Sohophp\SchemaOrg\Thing\Action;
use Sohophp\SchemaOrg\Thing\Intangible\Audience;
use Sohophp\SchemaOrg\Thing\Event;

/**
* The act of playing/exercising/training/performing for enjoyment, leisure,
 * recreation, Competition or exercise.
 * 
 * Related actions:
 * 
 * * [[ListenAction]]: Unlike ListenAction (which is under ConsumeAction),
 * PlayAction refers to performing for an audience or at an event, rather than
 * consuming music.
 * * [[WatchAction]]: Unlike WatchAction (which is under ConsumeAction),
 * PlayAction refers to showing/displaying for an audience or at an event,
 * rather than consuming visual content.
* @see http://schema.org/PlayAction
* @package Sohophp\SchemaOrg\Thing\Action
*/
class PlayAction extends Action
{


    /**
        * An intended audience, i.e. a group for whom something was created.
        * @param Audience|array|string|mixed $value
    * @return $this
    */
    public function audience($value)
    {
        $this->setProperty('audience', $value);
        return $this;
    }

    /**
    * @param Audience|array|string|mixed $value
    * @return $this
    */
    public function setAudience($value)
    {
        $this->setProperty('audience', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAudience()
    {
       return $this->getProperty('audience');
    }


    /**
        * Upcoming or past event associated with this place, organization, or action.
        * @param Event|array|string|mixed $value
    * @return $this
    */
    public function event($value)
    {
        $this->setProperty('event', $value);
        return $this;
    }

    /**
    * @param Event|array|string|mixed $value
    * @return $this
    */
    public function setEvent($value)
    {
        $this->setProperty('event', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEvent()
    {
       return $this->getProperty('event');
    }


}
