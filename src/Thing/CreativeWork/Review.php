<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

  use Sohophp\SchemaOrg\Thing\CreativeWork;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;
  use Sohophp\SchemaOrg\Thing\Intangible\Rating;
  use Sohophp\SchemaOrg\Thing\CreativeWork\WebContent;
  use Sohophp\SchemaOrg\Thing\Intangible\ItemList;
  use Sohophp\SchemaOrg\Thing\Intangible\ListItem;
  use Sohophp\SchemaOrg\Thing;

/**
  * A review of an item - for example, of a restaurant, movie, or store.
  * @see schema:Review
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class Review extends CreativeWork
{


  /**
      * The actual body of the review.
    * @param string|array $value
  * @return $this
  */
  public function reviewBody($value)
  {
  $this->setProperty('reviewBody', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setReviewBody($value)
  {
  $this->setProperty('reviewBody', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addReviewBody($value)
  {
  $current = $this->getProperty('reviewBody');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('reviewBody', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getReviewBody()
  {
  return $this->getProperty('reviewBody');
  }


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
      * An associated [[ClaimReview]], related by specific common content, topic or
 * claim. The expectation is that this property would be most typically used in
 * cases where a single activity is conducting both claim reviews and media
 * reviews, in which case [[relatedMediaReview]] would commonly be used on a
 * [[ClaimReview]], while [[associatedClaimReview]] would be used on
 * [[MediaReview]].
    * @param Review|array $value
  * @return $this
  */
  public function associatedClaimReview($value)
  {
  $this->setProperty('associatedClaimReview', $value);
  return $this;
  }

  /**
  * @param Review|array $value
  * @return $this
  */
  public function setAssociatedClaimReview($value)
  {
  $this->setProperty('associatedClaimReview', $value);
  return $this;
  }

  /**
  * @param Review $value
  * @return $this
  */
  public function addAssociatedClaimReview($value)
  {
  $current = $this->getProperty('associatedClaimReview');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('associatedClaimReview', $current);
  return $this;
  }

  /**
  * @return Review|array
  */
  public function getAssociatedClaimReview()
  {
  return $this->getProperty('associatedClaimReview');
  }


  /**
      * The rating given in this review. Note that reviews can themselves be rated.
 * The ```reviewRating``` applies to rating given by the review. The
 * [[aggregateRating]] property applies to the review itself, as a creative
 * work.
    * @param Rating|array $value
  * @return $this
  */
  public function reviewRating($value)
  {
  $this->setProperty('reviewRating', $value);
  return $this;
  }

  /**
  * @param Rating|array $value
  * @return $this
  */
  public function setReviewRating($value)
  {
  $this->setProperty('reviewRating', $value);
  return $this;
  }

  /**
  * @param Rating $value
  * @return $this
  */
  public function addReviewRating($value)
  {
  $current = $this->getProperty('reviewRating');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('reviewRating', $current);
  return $this;
  }

  /**
  * @return Rating|array
  */
  public function getReviewRating()
  {
  return $this->getProperty('reviewRating');
  }


  /**
      * Provides positive considerations regarding something, for example product
 * highlights or (alongside [[negativeNotes]]) pro/con lists for reviews.
 * 
 * In the case of a [[Review]], the property describes the [[itemReviewed]] from
 * the perspective of the review; in the case of a [[Product]], the product
 * itself is being described.
 * 
 * The property values can be expressed either as unstructured text (repeated as
 * necessary), or if ordered, as a list (in which case the most positive is at
 * the beginning of the list).
    * @param WebContent|ItemList|ListItem|string|array $value
  * @return $this
  */
  public function positiveNotes($value)
  {
  $this->setProperty('positiveNotes', $value);
  return $this;
  }

  /**
  * @param WebContent|ItemList|ListItem|string|array $value
  * @return $this
  */
  public function setPositiveNotes($value)
  {
  $this->setProperty('positiveNotes', $value);
  return $this;
  }

  /**
  * @param WebContent|ItemList|ListItem|string $value
  * @return $this
  */
  public function addPositiveNotes($value)
  {
  $current = $this->getProperty('positiveNotes');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('positiveNotes', $current);
  return $this;
  }

  /**
  * @return WebContent|ItemList|ListItem|string|array
  */
  public function getPositiveNotes()
  {
  return $this->getProperty('positiveNotes');
  }


  /**
      * The item that is being reviewed/rated.
    * @param Thing|array $value
  * @return $this
  */
  public function itemReviewed($value)
  {
  $this->setProperty('itemReviewed', $value);
  return $this;
  }

  /**
  * @param Thing|array $value
  * @return $this
  */
  public function setItemReviewed($value)
  {
  $this->setProperty('itemReviewed', $value);
  return $this;
  }

  /**
  * @param Thing $value
  * @return $this
  */
  public function addItemReviewed($value)
  {
  $current = $this->getProperty('itemReviewed');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('itemReviewed', $current);
  return $this;
  }

  /**
  * @return Thing|array
  */
  public function getItemReviewed()
  {
  return $this->getProperty('itemReviewed');
  }


  /**
      * Provides negative considerations regarding something, most typically in
 * pro/con lists for reviews (alongside [[positiveNotes]]). For symmetry 
 * 
 * In the case of a [[Review]], the property describes the [[itemReviewed]] from
 * the perspective of the review; in the case of a [[Product]], the product
 * itself is being described. Since product descriptions 
 * tend to emphasise positive claims, it may be relatively unusual to find
 * [[negativeNotes]] used in this way. Nevertheless for the sake of symmetry,
 * [[negativeNotes]] can be used on [[Product]].
 * 
 * The property values can be expressed either as unstructured text (repeated as
 * necessary), or if ordered, as a list (in which case the most negative is at
 * the beginning of the list).
    * @param ItemList|ListItem|string|WebContent|array $value
  * @return $this
  */
  public function negativeNotes($value)
  {
  $this->setProperty('negativeNotes', $value);
  return $this;
  }

  /**
  * @param ItemList|ListItem|string|WebContent|array $value
  * @return $this
  */
  public function setNegativeNotes($value)
  {
  $this->setProperty('negativeNotes', $value);
  return $this;
  }

  /**
  * @param ItemList|ListItem|string|WebContent $value
  * @return $this
  */
  public function addNegativeNotes($value)
  {
  $current = $this->getProperty('negativeNotes');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('negativeNotes', $current);
  return $this;
  }

  /**
  * @return ItemList|ListItem|string|WebContent|array
  */
  public function getNegativeNotes()
  {
  return $this->getProperty('negativeNotes');
  }


  /**
      * An associated [[Review]].
    * @param Review|array $value
  * @return $this
  */
  public function associatedReview($value)
  {
  $this->setProperty('associatedReview', $value);
  return $this;
  }

  /**
  * @param Review|array $value
  * @return $this
  */
  public function setAssociatedReview($value)
  {
  $this->setProperty('associatedReview', $value);
  return $this;
  }

  /**
  * @param Review $value
  * @return $this
  */
  public function addAssociatedReview($value)
  {
  $current = $this->getProperty('associatedReview');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('associatedReview', $current);
  return $this;
  }

  /**
  * @return Review|array
  */
  public function getAssociatedReview()
  {
  return $this->getProperty('associatedReview');
  }


  /**
      * An associated [[MediaReview]], related by specific common content, topic or
 * claim. The expectation is that this property would be most typically used in
 * cases where a single activity is conducting both claim reviews and media
 * reviews, in which case [[relatedMediaReview]] would commonly be used on a
 * [[ClaimReview]], while [[associatedClaimReview]] would be used on
 * [[MediaReview]].
    * @param Review|array $value
  * @return $this
  */
  public function associatedMediaReview($value)
  {
  $this->setProperty('associatedMediaReview', $value);
  return $this;
  }

  /**
  * @param Review|array $value
  * @return $this
  */
  public function setAssociatedMediaReview($value)
  {
  $this->setProperty('associatedMediaReview', $value);
  return $this;
  }

  /**
  * @param Review $value
  * @return $this
  */
  public function addAssociatedMediaReview($value)
  {
  $current = $this->getProperty('associatedMediaReview');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('associatedMediaReview', $current);
  return $this;
  }

  /**
  * @return Review|array
  */
  public function getAssociatedMediaReview()
  {
  return $this->getProperty('associatedMediaReview');
  }


}
