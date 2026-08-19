<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

  use Sohophp\SchemaOrg\Thing\Intangible;
  use Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject\ImageObject;
  use Sohophp\SchemaOrg\Thing\CreativeWork\Review;
  use Sohophp\SchemaOrg\Thing\Intangible\Rating\AggregateRating;

/**
  * A brand is a name used by an organization or business person for labeling a
 * product, product group, or similar.
  * @see schema:Brand
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class Brand extends Intangible
{


  /**
      * An associated logo.
    * @param string|ImageObject|array $value
  * @return $this
  */
  public function logo($value)
  {
  $this->setProperty('logo', $value);
  return $this;
  }

  /**
  * @param string|ImageObject|array $value
  * @return $this
  */
  public function setLogo($value)
  {
  $this->setProperty('logo', $value);
  return $this;
  }

  /**
  * @param string|ImageObject $value
  * @return $this
  */
  public function addLogo($value)
  {
  $current = $this->getProperty('logo');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('logo', $current);
  return $this;
  }

  /**
  * @return string|ImageObject|array
  */
  public function getLogo()
  {
  return $this->getProperty('logo');
  }


  /**
      * A review of the item.
    * @param Review|array $value
  * @return $this
  */
  public function review($value)
  {
  $this->setProperty('review', $value);
  return $this;
  }

  /**
  * @param Review|array $value
  * @return $this
  */
  public function setReview($value)
  {
  $this->setProperty('review', $value);
  return $this;
  }

  /**
  * @param Review $value
  * @return $this
  */
  public function addReview($value)
  {
  $current = $this->getProperty('review');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('review', $current);
  return $this;
  }

  /**
  * @return Review|array
  */
  public function getReview()
  {
  return $this->getProperty('review');
  }


  /**
      * The overall rating, based on a collection of reviews or ratings, of the item.
    * @param AggregateRating|array $value
  * @return $this
  */
  public function aggregateRating($value)
  {
  $this->setProperty('aggregateRating', $value);
  return $this;
  }

  /**
  * @param AggregateRating|array $value
  * @return $this
  */
  public function setAggregateRating($value)
  {
  $this->setProperty('aggregateRating', $value);
  return $this;
  }

  /**
  * @param AggregateRating $value
  * @return $this
  */
  public function addAggregateRating($value)
  {
  $current = $this->getProperty('aggregateRating');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('aggregateRating', $current);
  return $this;
  }

  /**
  * @return AggregateRating|array
  */
  public function getAggregateRating()
  {
  return $this->getProperty('aggregateRating');
  }


  /**
      * A slogan or motto associated with the item.
    * @param string|array $value
  * @return $this
  */
  public function slogan($value)
  {
  $this->setProperty('slogan', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setSlogan($value)
  {
  $this->setProperty('slogan', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addSlogan($value)
  {
  $current = $this->getProperty('slogan');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('slogan', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getSlogan()
  {
  return $this->getProperty('slogan');
  }


}
