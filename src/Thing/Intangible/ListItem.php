<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing;

/**
* An list item, e.g. a step in a checklist or how-to description.
* @see http://schema.org/ListItem
* @package Sohophp\SchemaOrg\Thing\Intangible

*
*/
class ListItem extends Intangible
{

    /**
    * A link to the ListItem that follows the current one.
    * @param ListItem|array|string $value
    * @return $this
    * @deprecated use setNextItem
    */
    public function nextItem($value)
    {
        $this->setProperty('nextItem', $value);
        return $this;
    }
   /**
    * @param ListItem|array|string $value
    * @return $this
    */
    public function setNextItem($value)
    {
        $this->setProperty('nextItem', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getNextItem()
    {
       return $this->getProperty('nextItem');
    }

    /**
    * The position of an item in a series or sequence of items.
    * @param string|int|array $value
    * @return $this
    * @deprecated use setPosition
    */
    public function position($value)
    {
        $this->setProperty('position', $value);
        return $this;
    }
   /**
    * @param string|int|array $value
    * @return $this
    */
    public function setPosition($value)
    {
        $this->setProperty('position', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getPosition()
    {
       return $this->getProperty('position');
    }

    /**
    * A link to the ListItem that preceeds the current one.
    * @param ListItem|array|string $value
    * @return $this
    * @deprecated use setPreviousItem
    */
    public function previousItem($value)
    {
        $this->setProperty('previousItem', $value);
        return $this;
    }
   /**
    * @param ListItem|array|string $value
    * @return $this
    */
    public function setPreviousItem($value)
    {
        $this->setProperty('previousItem', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getPreviousItem()
    {
       return $this->getProperty('previousItem');
    }

    /**
    * An entity represented by an entry in a list or data feed (e.g. an 'artist' in a list of 'artists')’.
    * @param Thing|array|string $value
    * @return $this
    * @deprecated use setItem
    */
    public function item($value)
    {
        $this->setProperty('item', $value);
        return $this;
    }
   /**
    * @param Thing|array|string $value
    * @return $this
    */
    public function setItem($value)
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
