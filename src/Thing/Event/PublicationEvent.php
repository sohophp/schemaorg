<?php
namespace Sohophp\SchemaOrg\Thing\Event;

use Sohophp\SchemaOrg\Thing\Event;

/**
* A PublicationEvent corresponds indifferently to the event of publication for
 * a CreativeWork of any type, e.g. a broadcast event, an on-demand event, a
 * book/journal publication via a variety of delivery media.
* @see schema:PublicationEvent
* @package Sohophp\SchemaOrg\Thing\Event
*/
class PublicationEvent extends Event
{


    /**
        * A flag to signal that the item, event, or place is accessible for free.
        * @param array|string|mixed $value
    * @return $this
    */
    public function free($value)
    {
        $this->setProperty('free', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * @param array|string|mixed $value
    * @return $this
    */
    public function publishedBy($value)
    {
        $this->setProperty('publishedBy', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * A broadcast service associated with the publication event.
        * @param array|string|mixed $value
    * @return $this
    */
    public function publishedOn($value)
    {
        $this->setProperty('publishedOn', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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


}
