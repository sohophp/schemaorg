<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

  use Sohophp\SchemaOrg\Thing\CreativeWork;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;
  use Sohophp\SchemaOrg\Thing;
  use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\PhysicalActivityCategory;
  use Sohophp\SchemaOrg\Thing\Intangible\DefinedTerm\CategoryCode;

/**
  * [[Guide]] is a page or article that recommends specific products or services,
 * or aspects of a thing for a user to consider. A [[Guide]] may represent a
 * Buying Guide and detail aspects of products or services for a user to
 * consider. A [[Guide]] may represent a Product Guide and recommend specific
 * products or services. A [[Guide]] may represent a Ranked List and recommend
 * specific products or services with ranking.
  * @see schema:Guide
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class Guide extends CreativeWork
{


  /**
      * This Review or Rating is relevant to this part or facet of the itemReviewed.
    * @param StructuredValue|string|array $value
  * @return $this
  */
  public function reviewAspect($value)
  {
  $this->setProperty('reviewAspect', $value);
  return $this;
  }

  /**
  * @param StructuredValue|string|array $value
  * @return $this
  */
  public function setReviewAspect($value)
  {
  $this->setProperty('reviewAspect', $value);
  return $this;
  }

  /**
  * @param StructuredValue|string $value
  * @return $this
  */
  public function addReviewAspect($value)
  {
  $current = $this->getProperty('reviewAspect');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('reviewAspect', $current);
  return $this;
  }

  /**
  * @return StructuredValue|string|array
  */
  public function getReviewAspect()
  {
  return $this->getProperty('reviewAspect');
  }


  /**
      * A category for the item. Greater signs or slashes can be used to informally
 * indicate a category hierarchy.
    * @param string|Thing|PhysicalActivityCategory|CategoryCode|array $value
  * @return $this
  */
  public function category($value)
  {
  $this->setProperty('category', $value);
  return $this;
  }

  /**
  * @param string|Thing|PhysicalActivityCategory|CategoryCode|array $value
  * @return $this
  */
  public function setCategory($value)
  {
  $this->setProperty('category', $value);
  return $this;
  }

  /**
  * @param string|Thing|PhysicalActivityCategory|CategoryCode $value
  * @return $this
  */
  public function addCategory($value)
  {
  $current = $this->getProperty('category');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('category', $current);
  return $this;
  }

  /**
  * @return string|Thing|PhysicalActivityCategory|CategoryCode|array
  */
  public function getCategory()
  {
  return $this->getProperty('category');
  }


}
