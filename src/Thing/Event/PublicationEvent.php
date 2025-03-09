<?php
namespace Sohophp\SchemaOrg\Thing\Event;

use Sohophp\SchemaOrg\Thing\Event;

/**
* A PublicationEvent corresponds indifferently to the event of publication for a CreativeWork of any type, e.g. a broadcast event, an on-demand event, a book/journal publication via a variety of delivery media.
* @see schema:PublicationEvent
* @package Sohophp\SchemaOrg\Thing\Event
*/
class PublicationEvent extends Event
{
   /**
        * A flag to signal that the item, event, or place is accessible for free.
        */
    protected $free = null;

   /**
        * An agent associated with the publication event.
        */
    protected $publishedBy = null;

   /**
        * A broadcast service associated with the publication event.
        */
    protected $publishedOn = null;


    /**
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
