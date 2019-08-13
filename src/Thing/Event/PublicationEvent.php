<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Event;

use Sohophp\SchemaOrg\Thing\Event;
use Sohophp\SchemaOrg\Thing\Intangible\Service\BroadcastService;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Organization;

/**
* A PublicationEvent corresponds indifferently to the event of publication for a CreativeWork of any type e.g. a broadcast event, an on-demand event, a book/journal publication via a variety of delivery media.
* @see http://schema.org/PublicationEvent
* @package Sohophp\SchemaOrg\Thing\Event
*/
class PublicationEvent extends Event
{

    /**
    * A broadcast service associated with the publication event.
    * @param BroadcastService $value
    * @return $this
    */
    public function publishedOn(?BroadcastService $value)
    {
        $this->setProperty('publishedOn', $value);
        return $this;
    }

    /**
    * A flag to signal that the item, event, or place is accessible for free.
    * @param bool $value
    * @return $this
    */
    public function free(?bool $value)
    {
        $this->setProperty('free', $value);
        return $this;
    }

    /**
    * An agent associated with the publication event.
    * @param Person|Organization $value
    * @return $this
    */
    public function publishedBy($value)
    {
        $this->setProperty('publishedBy', $value);
        return $this;
    }

    /**
    * A flag to signal that the item, event, or place is accessible for free.
    * @param bool $value
    * @return $this
    */
    public function isAccessibleForFree(?bool $value)
    {
        $this->setProperty('isAccessibleForFree', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Event\\PublicationEvent','Thing\\PublicationEvent');

