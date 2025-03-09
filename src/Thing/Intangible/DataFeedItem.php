<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;

/**
* A single item within a larger data feed.
* @see schema:DataFeedItem
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class DataFeedItem extends Intangible
{
   /**
        * The date on which the CreativeWork was most recently modified or when the item's entry was modified within a DataFeed.
        */
    protected $dateModified = null;

   /**
        * The datetime the item was removed from the DataFeed.
        */
    protected $dateDeleted = null;

   /**
        * The date on which the CreativeWork was created or the item was added to a DataFeed.
        */
    protected $dateCreated = null;

   /**
        * An entity represented by an entry in a list or data feed (e.g. an 'artist' in a list of 'artists').
        */
    protected $item = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setDateModified($value)
    {
        $this->setProperty('dateModified', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDateModified()
    {
       return $this->getProperty('dateModified');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setDateDeleted($value)
    {
        $this->setProperty('dateDeleted', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDateDeleted()
    {
       return $this->getProperty('dateDeleted');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setDateCreated($value)
    {
        $this->setProperty('dateCreated', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDateCreated()
    {
       return $this->getProperty('dateCreated');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setItem($value)
    {
        $this->setProperty('item', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getItem()
    {
       return $this->getProperty('item');
    }


}
