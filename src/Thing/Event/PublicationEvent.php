<?php
namespace Sohophp\SchemaOrg\Thing\Event;

use Sohophp\SchemaOrg\Thing\Event;
use Sohophp\SchemaOrg\Thing\Intangible\Service\BroadcastService;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Organization;

/**
* A PublicationEvent corresponds indifferently to the event of publication for
 * a CreativeWork of any type e.g. a broadcast event, an on-demand event, a
 * book/journal publication via a variety of delivery media.
* @see http://schema.org/PublicationEvent
* @package Sohophp\SchemaOrg\Thing\Event
*/
class PublicationEvent extends Event
{


    /**
        * A broadcast service associated with the publication event.
        * @param BroadcastService|array|string|mixed $value
    * @return $this
    */
    public function publishedOn($value)
    {
        $this->setProperty('publishedOn', $value);
        return $this;
    }

    /**
    * @param BroadcastService|array|string|mixed $value
    * @return $this
    */
    public function setPublishedOn($value)
    {
        $this->setProperty('publishedOn', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPublishedOn()
    {
       return $this->getProperty('publishedOn');
    }


    /**
        * A flag to signal that the item, event, or place is accessible for free.
        * @param bool|array|string|mixed $value
    * @return $this
    */
    public function free($value)
    {
        $this->setProperty('free', $value);
        return $this;
    }

    /**
    * @param bool|array|string|mixed $value
    * @return $this
    */
    public function setFree($value)
    {
        $this->setProperty('free', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getFree()
    {
       return $this->getProperty('free');
    }


    /**
        * An agent associated with the publication event.
        * @param Person|Organization|array|string|mixed $value
    * @return $this
    */
    public function publishedBy($value)
    {
        $this->setProperty('publishedBy', $value);
        return $this;
    }

    /**
    * @param Person|Organization|array|string|mixed $value
    * @return $this
    */
    public function setPublishedBy($value)
    {
        $this->setProperty('publishedBy', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPublishedBy()
    {
       return $this->getProperty('publishedBy');
    }


    /**
        * A flag to signal that the item, event, or place is accessible for free.
        * @param bool|array|string|mixed $value
    * @return $this
    */
    public function isAccessibleForFree($value)
    {
        $this->setProperty('isAccessibleForFree', $value);
        return $this;
    }

    /**
    * @param bool|array|string|mixed $value
    * @return $this
    */
    public function setIsAccessibleForFree($value)
    {
        $this->setProperty('isAccessibleForFree', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getIsAccessibleForFree()
    {
       return $this->getProperty('isAccessibleForFree');
    }


}
