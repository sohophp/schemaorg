<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

  use Sohophp\SchemaOrg\Thing\Intangible;
  use Sohophp\SchemaOrg\Thing\Intangible\Class;
  use Sohophp\SchemaOrg\Thing\Intangible\Enumeration;

/**
  * A property, used to indicate attributes and relationships of some Thing;
 * equivalent to rdf:Property.
  * @see schema:Property
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class Property extends Intangible
{


  /**
      * Relates a property to a class that is (one of) the type(s) the property is
 * expected to be used on.
    * @param Class|array $value
  * @return $this
  */
  public function domainIncludes($value)
  {
  $this->setProperty('domainIncludes', $value);
  return $this;
  }

  /**
  * @param Class|array $value
  * @return $this
  */
  public function setDomainIncludes($value)
  {
  $this->setProperty('domainIncludes', $value);
  return $this;
  }

  /**
  * @param Class $value
  * @return $this
  */
  public function addDomainIncludes($value)
  {
  $current = $this->getProperty('domainIncludes');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('domainIncludes', $current);
  return $this;
  }

  /**
  * @return Class|array
  */
  public function getDomainIncludes()
  {
  return $this->getProperty('domainIncludes');
  }


  /**
      * Relates a term (i.e. a property, class or enumeration) to one that supersedes
 * it.
    * @param Enumeration|Property|Class|array $value
  * @return $this
  */
  public function supersededBy($value)
  {
  $this->setProperty('supersededBy', $value);
  return $this;
  }

  /**
  * @param Enumeration|Property|Class|array $value
  * @return $this
  */
  public function setSupersededBy($value)
  {
  $this->setProperty('supersededBy', $value);
  return $this;
  }

  /**
  * @param Enumeration|Property|Class $value
  * @return $this
  */
  public function addSupersededBy($value)
  {
  $current = $this->getProperty('supersededBy');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('supersededBy', $current);
  return $this;
  }

  /**
  * @return Enumeration|Property|Class|array
  */
  public function getSupersededBy()
  {
  return $this->getProperty('supersededBy');
  }


  /**
      * Relates a property to a class that constitutes (one of) the expected type(s)
 * for values of the property.
    * @param Class|array $value
  * @return $this
  */
  public function rangeIncludes($value)
  {
  $this->setProperty('rangeIncludes', $value);
  return $this;
  }

  /**
  * @param Class|array $value
  * @return $this
  */
  public function setRangeIncludes($value)
  {
  $this->setProperty('rangeIncludes', $value);
  return $this;
  }

  /**
  * @param Class $value
  * @return $this
  */
  public function addRangeIncludes($value)
  {
  $current = $this->getProperty('rangeIncludes');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('rangeIncludes', $current);
  return $this;
  }

  /**
  * @return Class|array
  */
  public function getRangeIncludes()
  {
  return $this->getProperty('rangeIncludes');
  }


  /**
      * Relates a property to a property that is its inverse. Inverse properties
 * relate the same pairs of items to each other, but in reversed direction. For
 * example, the 'alumni' and 'alumniOf' properties are inverseOf each other.
 * Some properties don't have explicit inverses; in these situations RDFa and
 * JSON-LD syntax for reverse properties can be used.
    * @param Property|array $value
  * @return $this
  */
  public function inverseOf($value)
  {
  $this->setProperty('inverseOf', $value);
  return $this;
  }

  /**
  * @param Property|array $value
  * @return $this
  */
  public function setInverseOf($value)
  {
  $this->setProperty('inverseOf', $value);
  return $this;
  }

  /**
  * @param Property $value
  * @return $this
  */
  public function addInverseOf($value)
  {
  $current = $this->getProperty('inverseOf');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('inverseOf', $current);
  return $this;
  }

  /**
  * @return Property|array
  */
  public function getInverseOf()
  {
  return $this->getProperty('inverseOf');
  }


}
