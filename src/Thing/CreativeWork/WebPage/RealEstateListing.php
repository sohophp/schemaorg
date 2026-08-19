<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork\WebPage;

  use Sohophp\SchemaOrg\Thing\CreativeWork\WebPage;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;
  use Sohophp\SchemaOrg\Quantity\Duration;

/**
  * A [[RealEstateListing]] is a listing that describes one or more real-estate
 * [[Offer]]s (whose [[businessFunction]] is typically to lease out, or to
 * sell).
 *   The [[RealEstateListing]] type itself represents the overall listing, as
 * manifested in some [[WebPage]].
  * @see schema:RealEstateListing
* @package Sohophp\SchemaOrg\Thing\CreativeWork\WebPage
*/
class RealEstateListing extends WebPage
{


  /**
      * Publication date of an online listing.
    * @param mixed $value
  * @return $this
  */
  public function datePosted($value)
  {
  $this->setProperty('datePosted', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function setDatePosted($value)
  {
  $this->setProperty('datePosted', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function addDatePosted($value)
  {
  $current = $this->getProperty('datePosted');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('datePosted', $current);
  return $this;
  }

  /**
  * @return mixed
  */
  public function getDatePosted()
  {
  return $this->getProperty('datePosted');
  }


  /**
      * Length of the lease for some [[Accommodation]], either particular to some
 * [[Offer]] or in some cases intrinsic to the property.
    * @param QuantitativeValue|Duration|array $value
  * @return $this
  */
  public function leaseLength($value)
  {
  $this->setProperty('leaseLength', $value);
  return $this;
  }

  /**
  * @param QuantitativeValue|Duration|array $value
  * @return $this
  */
  public function setLeaseLength($value)
  {
  $this->setProperty('leaseLength', $value);
  return $this;
  }

  /**
  * @param QuantitativeValue|Duration $value
  * @return $this
  */
  public function addLeaseLength($value)
  {
  $current = $this->getProperty('leaseLength');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('leaseLength', $current);
  return $this;
  }

  /**
  * @return QuantitativeValue|Duration|array
  */
  public function getLeaseLength()
  {
  return $this->getProperty('leaseLength');
  }


}
