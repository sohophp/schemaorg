<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

/**
  * Indicates a range of postal codes, usually defined as the set of valid codes
 * between [[postalCodeBegin]] and [[postalCodeEnd]], inclusively.
  * @see schema:PostalCodeRangeSpecification
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue
*/
class PostalCodeRangeSpecification extends StructuredValue
{


  /**
      * First postal code in a range (included).
    * @param string|array $value
  * @return $this
  */
  public function postalCodeBegin($value)
  {
  $this->setProperty('postalCodeBegin', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setPostalCodeBegin($value)
  {
  $this->setProperty('postalCodeBegin', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addPostalCodeBegin($value)
  {
  $current = $this->getProperty('postalCodeBegin');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('postalCodeBegin', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getPostalCodeBegin()
  {
  return $this->getProperty('postalCodeBegin');
  }


  /**
      * Last postal code in the range (included). Needs to be after
 * [[postalCodeBegin]].
    * @param string|array $value
  * @return $this
  */
  public function postalCodeEnd($value)
  {
  $this->setProperty('postalCodeEnd', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setPostalCodeEnd($value)
  {
  $this->setProperty('postalCodeEnd', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addPostalCodeEnd($value)
  {
  $current = $this->getProperty('postalCodeEnd');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('postalCodeEnd', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getPostalCodeEnd()
  {
  return $this->getProperty('postalCodeEnd');
  }


}
