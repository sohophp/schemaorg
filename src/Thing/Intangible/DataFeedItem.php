<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing;

/**
* A single item within a larger data feed.
* @see http://schema.org/DataFeedItem
* @package Sohophp\SchemaOrg\Thing\Intangible

*
*/
class DataFeedItem extends Intangible
{

    /**
    * The date on which the CreativeWork was most recently modified or when the item's entry was modified within a DataFeed.
    * @param |array $value
    * @return $this
    */
    public function dateModified($value)
    {
        $this->setProperty('dateModified', $value);
        return $this;
    }
   /**
    * @param |array $value
    * @return $this
    */
    public function setDateModified($value)
    {
        $this->setProperty('dateModified', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getDateModified()
    {
       return $this->getProperty('dateModified');
    }

    /**
    * The datetime the item was removed from the DataFeed.
    * @param |array $value
    * @return $this
    */
    public function dateDeleted($value)
    {
        $this->setProperty('dateDeleted', $value);
        return $this;
    }
   /**
    * @param |array $value
    * @return $this
    */
    public function setDateDeleted($value)
    {
        $this->setProperty('dateDeleted', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getDateDeleted()
    {
       return $this->getProperty('dateDeleted');
    }

    /**
    * The date on which the CreativeWork was created or the item was added to a DataFeed.
    * @param |array $value
    * @return $this
    */
    public function dateCreated($value)
    {
        $this->setProperty('dateCreated', $value);
        return $this;
    }
   /**
    * @param |array $value
    * @return $this
    */
    public function setDateCreated($value)
    {
        $this->setProperty('dateCreated', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getDateCreated()
    {
       return $this->getProperty('dateCreated');
    }

    /**
    * An entity represented by an entry in a list or data feed (e.g. an 'artist' in a list of 'artists')’.
    * @param Thing|array $value
    * @return $this
    */
    public function item(?Thing $value)
    {
        $this->setProperty('item', $value);
        return $this;
    }
   /**
    * @param Thing|array $value
    * @return $this
    */
    public function setItem(?Thing $value)
    {
        $this->setProperty('item', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getItem()
    {
       return $this->getProperty('item');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\DataFeedItem','Thing\\DataFeedItem');

