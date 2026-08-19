<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork\Collection;

  use Sohophp\SchemaOrg\Thing\CreativeWork\Collection;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\TypeAndQuantityNode;

/**
  * A set of products (either [[ProductGroup]]s or specific variants) that are
 * listed together e.g. in an [[Offer]].
  * @see schema:ProductCollection
* @package Sohophp\SchemaOrg\Thing\CreativeWork\Collection
*/
class ProductCollection extends Collection
{


  /**
      * This links to a node or nodes indicating the exact quantity of the products
 * included in  an [[Offer]] or [[ProductCollection]].
    * @param TypeAndQuantityNode|array $value
  * @return $this
  */
  public function includesObject($value)
  {
  $this->setProperty('includesObject', $value);
  return $this;
  }

  /**
  * @param TypeAndQuantityNode|array $value
  * @return $this
  */
  public function setIncludesObject($value)
  {
  $this->setProperty('includesObject', $value);
  return $this;
  }

  /**
  * @param TypeAndQuantityNode $value
  * @return $this
  */
  public function addIncludesObject($value)
  {
  $current = $this->getProperty('includesObject');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('includesObject', $current);
  return $this;
  }

  /**
  * @return TypeAndQuantityNode|array
  */
  public function getIncludesObject()
  {
  return $this->getProperty('includesObject');
  }


}
