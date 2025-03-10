<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\Intangible\ListItem;
use Sohophp\SchemaOrg\Thing;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\ItemListOrderType;

/**
* A list of items of any sort&#x2014;for example, Top 10 Movies About
 * Weathermen, or Top 100 Party Songs. Not to be confused with HTML lists, which
 * are often used only for formatting.
* @see http://schema.org/ItemList
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class ItemList extends Intangible
{


    /**
        * For itemListElement values, you can use simple strings (e.g. "Peter", "Paul",
 * "Mary"), existing entities, or use ListItem.
 * 
 * Text values are best if the elements in the list are plain strings. Existing
 * entities are best for a simple, unordered list of existing things in your
 * data. ListItem is used with ordered lists when you want to provide additional
 * context about the element in that list or when the same item might be in
 * different places in different lists.
 * 
 * Note: The order of elements in your mark-up is not sufficient for indicating
 * the order or elements.  Use ListItem with a 'position' property in such
 * cases.
        * @param ListItem|string|Thing|array|mixed $value
    * @return $this
    */
    public function itemListElement($value)
    {
        $this->setProperty('itemListElement', $value);
        return $this;
    }

    /**
    * @param ListItem|string|Thing|array|mixed $value
    * @return $this
    */
    public function setItemListElement($value)
    {
        $this->setProperty('itemListElement', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getItemListElement()
    {
       return $this->getProperty('itemListElement');
    }


    /**
        * Type of ordering (e.g. Ascending, Descending, Unordered).
        * @param ItemListOrderType|string|array|mixed $value
    * @return $this
    */
    public function itemListOrder($value)
    {
        $this->setProperty('itemListOrder', $value);
        return $this;
    }

    /**
    * @param ItemListOrderType|string|array|mixed $value
    * @return $this
    */
    public function setItemListOrder($value)
    {
        $this->setProperty('itemListOrder', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getItemListOrder()
    {
       return $this->getProperty('itemListOrder');
    }


    /**
        * The number of items in an ItemList. Note that some descriptions might not
 * fully describe all items in a list (e.g., multi-page pagination); in such
 * cases, the numberOfItems would be for the entire list.
        * @param int|array|string|mixed $value
    * @return $this
    */
    public function numberOfItems($value)
    {
        $this->setProperty('numberOfItems', $value);
        return $this;
    }

    /**
    * @param int|array|string|mixed $value
    * @return $this
    */
    public function setNumberOfItems($value)
    {
        $this->setProperty('numberOfItems', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getNumberOfItems()
    {
       return $this->getProperty('numberOfItems');
    }


}
