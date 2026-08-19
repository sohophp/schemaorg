<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

  use Sohophp\SchemaOrg\Thing\Intangible;
  use Sohophp\SchemaOrg\Thing;

/**
  * An list item, e.g. a step in a checklist or how-to description.
  * @see schema:ListItem
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class ListItem extends Intangible
{


  /**
      * An entity represented by an entry in a list or data feed (e.g. an 'artist' in
 * a list of 'artists').
    * @param Thing|array $value
  * @return $this
  */
  public function item($value)
  {
  $this->setProperty('item', $value);
  return $this;
  }

  /**
  * @param Thing|array $value
  * @return $this
  */
  public function setItem($value)
  {
  $this->setProperty('item', $value);
  return $this;
  }

  /**
  * @param Thing $value
  * @return $this
  */
  public function addItem($value)
  {
  $current = $this->getProperty('item');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('item', $current);
  return $this;
  }

  /**
  * @return Thing|array
  */
  public function getItem()
  {
  return $this->getProperty('item');
  }


  /**
      * A link to the ListItem that precedes the current one.
    * @param ListItem|array $value
  * @return $this
  */
  public function previousItem($value)
  {
  $this->setProperty('previousItem', $value);
  return $this;
  }

  /**
  * @param ListItem|array $value
  * @return $this
  */
  public function setPreviousItem($value)
  {
  $this->setProperty('previousItem', $value);
  return $this;
  }

  /**
  * @param ListItem $value
  * @return $this
  */
  public function addPreviousItem($value)
  {
  $current = $this->getProperty('previousItem');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('previousItem', $current);
  return $this;
  }

  /**
  * @return ListItem|array
  */
  public function getPreviousItem()
  {
  return $this->getProperty('previousItem');
  }


  /**
      * The position of an item in a series or sequence of items.
    * @param string|int|array $value
  * @return $this
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
  * @param string|int $value
  * @return $this
  */
  public function addPosition($value)
  {
  $current = $this->getProperty('position');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('position', $current);
  return $this;
  }

  /**
  * @return string|int|array
  */
  public function getPosition()
  {
  return $this->getProperty('position');
  }


  /**
      * A link to the ListItem that follows the current one.
    * @param ListItem|array $value
  * @return $this
  */
  public function nextItem($value)
  {
  $this->setProperty('nextItem', $value);
  return $this;
  }

  /**
  * @param ListItem|array $value
  * @return $this
  */
  public function setNextItem($value)
  {
  $this->setProperty('nextItem', $value);
  return $this;
  }

  /**
  * @param ListItem $value
  * @return $this
  */
  public function addNextItem($value)
  {
  $current = $this->getProperty('nextItem');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('nextItem', $current);
  return $this;
  }

  /**
  * @return ListItem|array
  */
  public function getNextItem()
  {
  return $this->getProperty('nextItem');
  }


}
