<?php
namespace Sohophp\SchemaOrg\Thing\Event;

use Sohophp\SchemaOrg\Thing\Event;
use Sohophp\SchemaOrg\Thing\Intangible\Service\BroadcastService;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Organization;

/**
* A PublicationEvent corresponds indifferently to the event of publication for a CreativeWork of any type e.g. a broadcast event, an on-demand event, a book/journal publication via a variety of delivery media.
* @see http://schema.org/PublicationEvent
* @package Sohophp\SchemaOrg\Thing\Event

*
*/
class PublicationEvent extends Event
{

    /**
    * A broadcast service associated with the publication event.
    * @param BroadcastService|array|string $value
    * @return $this
    * @deprecated use setPublishedOn
    */
    public function publishedOn($value)
    {
        $this->setProperty('publishedOn', $value);
        return $this;
    }
   /**
    * @param BroadcastService|array|string $value
    * @return $this
    */
    public function setPublishedOn($value)
    {
        $this->setProperty('publishedOn', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getPublishedOn()
    {
       return $this->getProperty('publishedOn');
    }

    /**
    * A flag to signal that the item, event, or place is accessible for free.
    * @param bool|array|string $value
    * @return $this
    * @deprecated use setFree
    */
    public function free($value)
    {
        $this->setProperty('free', $value);
        return $this;
    }
   /**
    * @param bool|array|string $value
    * @return $this
    */
    public function setFree($value)
    {
        $this->setProperty('free', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getFree()
    {
       return $this->getProperty('free');
    }

    /**
    * An agent associated with the publication event.
    * @param Person|Organization|array|string $value
    * @return $this
    * @deprecated use setPublishedBy
    */
    public function publishedBy($value)
    {
        $this->setProperty('publishedBy', $value);
        return $this;
    }
   /**
    * @param Person|Organization|array|string $value
    * @return $this
    */
    public function setPublishedBy($value)
    {
        $this->setProperty('publishedBy', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getPublishedBy()
    {
       return $this->getProperty('publishedBy');
    }

    /**
    * A flag to signal that the item, event, or place is accessible for free.
    * @param bool|array|string $value
    * @return $this
    * @deprecated use setIsAccessibleForFree
    */
    public function isAccessibleForFree($value)
    {
        $this->setProperty('isAccessibleForFree', $value);
        return $this;
    }
   /**
    * @param bool|array|string $value
    * @return $this
    */
    public function setIsAccessibleForFree($value)
    {
        $this->setProperty('isAccessibleForFree', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getIsAccessibleForFree()
    {
       return $this->getProperty('isAccessibleForFree');
    }


}
