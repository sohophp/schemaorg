<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

  use Sohophp\SchemaOrg\Thing\Intangible;
  use Sohophp\SchemaOrg\Thing\Organization;
  use Sohophp\SchemaOrg\Thing\Person;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

/**
  * A rating is an evaluation on a numeric scale, such as 1 to 5 stars.
  * @see schema:Rating
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class Rating extends Intangible
{


  /**
      * The lowest value allowed in this rating system.
    * @param string|array $value
  * @return $this
  */
  public function worstRating($value)
  {
  $this->setProperty('worstRating', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setWorstRating($value)
  {
  $this->setProperty('worstRating', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addWorstRating($value)
  {
  $current = $this->getProperty('worstRating');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('worstRating', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getWorstRating()
  {
  return $this->getProperty('worstRating');
  }


  /**
      * The author of this content or rating. Please note that author is special in
 * that HTML 5 provides a special mechanism for indicating authorship via the
 * rel tag. That is equivalent to this and may be used interchangeably.
    * @param Organization|Person|array $value
  * @return $this
  */
  public function author($value)
  {
  $this->setProperty('author', $value);
  return $this;
  }

  /**
  * @param Organization|Person|array $value
  * @return $this
  */
  public function setAuthor($value)
  {
  $this->setProperty('author', $value);
  return $this;
  }

  /**
  * @param Organization|Person $value
  * @return $this
  */
  public function addAuthor($value)
  {
  $current = $this->getProperty('author');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('author', $current);
  return $this;
  }

  /**
  * @return Organization|Person|array
  */
  public function getAuthor()
  {
  return $this->getProperty('author');
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
      * The highest value allowed in this rating system.
    * @param string|array $value
  * @return $this
  */
  public function bestRating($value)
  {
  $this->setProperty('bestRating', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setBestRating($value)
  {
  $this->setProperty('bestRating', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addBestRating($value)
  {
  $current = $this->getProperty('bestRating');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('bestRating', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getBestRating()
  {
  return $this->getProperty('bestRating');
  }


  /**
      * A short explanation (e.g. one to two sentences) providing background context
 * and other information that led to the conclusion expressed in the rating.
 * This is particularly applicable to ratings associated with "fact check"
 * markup using [[ClaimReview]].
    * @param string|array $value
  * @return $this
  */
  public function ratingExplanation($value)
  {
  $this->setProperty('ratingExplanation', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setRatingExplanation($value)
  {
  $this->setProperty('ratingExplanation', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addRatingExplanation($value)
  {
  $current = $this->getProperty('ratingExplanation');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('ratingExplanation', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getRatingExplanation()
  {
  return $this->getProperty('ratingExplanation');
  }


  /**
      * The rating for the content.
 * 
 * Usage guidelines:
 * 
 * * Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE'
 * (U+0039)) rather than superficially similar Unicode symbols.
 * * Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a
 * decimal point. Avoid using these symbols as a readability separator.
    * @param string|array $value
  * @return $this
  */
  public function ratingValue($value)
  {
  $this->setProperty('ratingValue', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setRatingValue($value)
  {
  $this->setProperty('ratingValue', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addRatingValue($value)
  {
  $current = $this->getProperty('ratingValue');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('ratingValue', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getRatingValue()
  {
  return $this->getProperty('ratingValue');
  }


}
