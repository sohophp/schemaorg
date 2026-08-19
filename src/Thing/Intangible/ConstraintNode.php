<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

  use Sohophp\SchemaOrg\Thing\Intangible;
  use Sohophp\SchemaOrg\Thing\Intangible\Property;

/**
  * The ConstraintNode type is provided to support usecases in which a node in a
 * structured data graph is described with properties which appear to describe a
 * single entity, but are being used in a situation where they serve a more
 * abstract purpose. A [[ConstraintNode]] can be described using
 * [[constraintProperty]] and [[numConstraints]]. These constraint properties
 * can serve a
 *     variety of purposes, and their values may sometimes be understood to
 * indicate sets of possible values rather than single, exact and specific
 * values.
  * @see schema:ConstraintNode
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class ConstraintNode extends Intangible
{


  /**
      * Indicates a property used as a constraint. For example, in the definition of
 * a [[StatisticalVariable]]. The value is a property, either from within
 * Schema.org or from other compatible (e.g. RDF) systems such as
 * DataCommons.org or Wikidata.org.
    * @param Property|string|array $value
  * @return $this
  */
  public function constraintProperty($value)
  {
  $this->setProperty('constraintProperty', $value);
  return $this;
  }

  /**
  * @param Property|string|array $value
  * @return $this
  */
  public function setConstraintProperty($value)
  {
  $this->setProperty('constraintProperty', $value);
  return $this;
  }

  /**
  * @param Property|string $value
  * @return $this
  */
  public function addConstraintProperty($value)
  {
  $current = $this->getProperty('constraintProperty');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('constraintProperty', $current);
  return $this;
  }

  /**
  * @return Property|string|array
  */
  public function getConstraintProperty()
  {
  return $this->getProperty('constraintProperty');
  }


  /**
      * Indicates the number of constraints property values defined for a particular
 * [[ConstraintNode]] such as [[StatisticalVariable]]. This helps applications
 * understand if they have access to a sufficiently complete description of a
 * [[StatisticalVariable]] or other construct that is defined using properties
 * on template-style nodes.
    * @param int|array $value
  * @return $this
  */
  public function numConstraints($value)
  {
  $this->setProperty('numConstraints', $value);
  return $this;
  }

  /**
  * @param int|array $value
  * @return $this
  */
  public function setNumConstraints($value)
  {
  $this->setProperty('numConstraints', $value);
  return $this;
  }

  /**
  * @param int $value
  * @return $this
  */
  public function addNumConstraints($value)
  {
  $current = $this->getProperty('numConstraints');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('numConstraints', $current);
  return $this;
  }

  /**
  * @return int|array
  */
  public function getNumConstraints()
  {
  return $this->getProperty('numConstraints');
  }


}
