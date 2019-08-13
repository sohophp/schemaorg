<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing;

/**
* A single item within a larger data feed.
* @see http://schema.org/DataFeedItem
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class DataFeedItem extends Intangible
{

    /**
    * The date on which the CreativeWork was most recently modified or when the item's entry was modified within a DataFeed.
    * @param  $value
    * @return $this
    */
    public function dateModified($value)
    {
        $this->setProperty('dateModified', $value);
        return $this;
    }

    /**
    * The datetime the item was removed from the DataFeed.
    * @param  $value
    * @return $this
    */
    public function dateDeleted($value)
    {
        $this->setProperty('dateDeleted', $value);
        return $this;
    }

    /**
    * The date on which the CreativeWork was created or the item was added to a DataFeed.
    * @param  $value
    * @return $this
    */
    public function dateCreated($value)
    {
        $this->setProperty('dateCreated', $value);
        return $this;
    }

    /**
    * An entity represented by an entry in a list or data feed (e.g. an 'artist' in a list of 'artists')’.
    * @param Thing $value
    * @return $this
    */
    public function item(?Thing $value)
    {
        $this->setProperty('item', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\DataFeedItem','Thing\\DataFeedItem');

