<?php
namespace Sohophp\SchemaOrg\Thing\Product;

  use Sohophp\SchemaOrg\Thing\Product;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;

/**
  * A placeholder for multiple similar products of the same kind.
  * @see schema:SomeProducts
* @package Sohophp\SchemaOrg\Thing\Product
*/
class SomeProducts extends Product
{


  /**
      * The current approximate inventory level for the item or items.
    * @param QuantitativeValue|array $value
  * @return $this
  */
  public function inventoryLevel($value)
  {
  $this->setProperty('inventoryLevel', $value);
  return $this;
  }

  /**
  * @param QuantitativeValue|array $value
  * @return $this
  */
  public function setInventoryLevel($value)
  {
  $this->setProperty('inventoryLevel', $value);
  return $this;
  }

  /**
  * @param QuantitativeValue $value
  * @return $this
  */
  public function addInventoryLevel($value)
  {
  $current = $this->getProperty('inventoryLevel');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('inventoryLevel', $current);
  return $this;
  }

  /**
  * @return QuantitativeValue|array
  */
  public function getInventoryLevel()
  {
  return $this->getProperty('inventoryLevel');
  }


}
