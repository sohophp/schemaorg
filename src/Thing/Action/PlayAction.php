<?php
namespace Sohophp\SchemaOrg\Thing\Action;

use Sohophp\SchemaOrg\Thing\Action;
use Sohophp\SchemaOrg\Thing\Intangible\Audience;
use Sohophp\SchemaOrg\Thing\Event;

/**
* The act of playing/exercising/training/performing for enjoyment, leisure, recreation, Competition or exercise.<br/><br/>

Related actions:<br/><br/>

<ul>
<li><a class="localLink" href="http://schema.org/ListenAction">ListenAction</a>: Unlike ListenAction (which is under ConsumeAction), PlayAction refers to performing for an audience or at an event, rather than consuming music.</li>
<li><a class="localLink" href="http://schema.org/WatchAction">WatchAction</a>: Unlike WatchAction (which is under ConsumeAction), PlayAction refers to showing/displaying for an audience or at an event, rather than consuming visual content.</li>
</ul>

* @see http://schema.org/PlayAction
* @package Sohophp\SchemaOrg\Thing\Action

*
*/
class PlayAction extends Action
{

    /**
    * An intended audience, i.e. a group for whom something was created.
    * @param Audience|array|string $value
    * @return $this
    * @deprecated use setAudience
    */
    public function audience($value)
    {
        $this->setProperty('audience', $value);
        return $this;
    }
   /**
    * @param Audience|array|string $value
    * @return $this
    */
    public function setAudience($value)
    {
        $this->setProperty('audience', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAudience()
    {
       return $this->getProperty('audience');
    }

    /**
    * Upcoming or past event associated with this place, organization, or action.
    * @param Event|array|string $value
    * @return $this
    * @deprecated use setEvent
    */
    public function event($value)
    {
        $this->setProperty('event', $value);
        return $this;
    }
   /**
    * @param Event|array|string $value
    * @return $this
    */
    public function setEvent($value)
    {
        $this->setProperty('event', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getEvent()
    {
       return $this->getProperty('event');
    }


}
