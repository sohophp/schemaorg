<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

  use Sohophp\SchemaOrg\Thing\CreativeWork;

/**
  * A collection of items, e.g. creative works or products.
  * @see schema:Collection
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class Collection extends CreativeWork
{


  /**
      * The number of items in the [[Collection]].
    * @param int|array $value
  * @return $this
  */
  public function collectionSize($value)
  {
  $this->setProperty('collectionSize', $value);
  return $this;
  }

  /**
  * @param int|array $value
  * @return $this
  */
  public function setCollectionSize($value)
  {
  $this->setProperty('collectionSize', $value);
  return $this;
  }

  /**
  * @param int $value
  * @return $this
  */
  public function addCollectionSize($value)
  {
  $current = $this->getProperty('collectionSize');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('collectionSize', $current);
  return $this;
  }

  /**
  * @return int|array
  */
  public function getCollectionSize()
  {
  return $this->getProperty('collectionSize');
  }


}
