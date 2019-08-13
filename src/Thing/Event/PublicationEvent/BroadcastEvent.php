<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Event\PublicationEvent;

use Sohophp\SchemaOrg\Thing\Event\PublicationEvent;
use Sohophp\SchemaOrg\Thing\Event;

/**
* An over the air or online broadcast event.
* @see http://schema.org/BroadcastEvent
* @package Sohophp\SchemaOrg\Thing\Event\PublicationEvent
*/
class BroadcastEvent extends PublicationEvent
{

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
    * True is the broadcast is of a live event.
    * @param bool $value
    * @return $this
    */
    public function isLiveBroadcast(?bool $value)
    {
        $this->setProperty('isLiveBroadcast', $value);
        return $this;
    }

    /**
    * The event being broadcast such as a sporting event or awards ceremony.
    * @param Event $value
    * @return $this
    */
    public function broadcastOfEvent(?Event $value)
    {
        $this->setProperty('broadcastOfEvent', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Event\\PublicationEvent\\BroadcastEvent','Thing\\BroadcastEvent');

