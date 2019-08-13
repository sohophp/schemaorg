<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing;

/**
* An list item, e.g. a step in a checklist or how-to description.
* @see http://schema.org/ListItem
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class ListItem extends Intangible
{

    /**
    * A link to the ListItem that follows the current one.
    * @param ListItem $value
    * @return $this
    */
    public function nextItem(?ListItem $value)
    {
        $this->setProperty('nextItem', $value);
        return $this;
    }

    /**
    * The position of an item in a series or sequence of items.
    * @param string|int $value
    * @return $this
    */
    public function position($value)
    {
        $this->setProperty('position', $value);
        return $this;
    }

    /**
    * A link to the ListItem that preceeds the current one.
    * @param ListItem $value
    * @return $this
    */
    public function previousItem(?ListItem $value)
    {
        $this->setProperty('previousItem', $value);
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


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\ListItem','Thing\\ListItem');

