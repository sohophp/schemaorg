<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork\Review;

  use Sohophp\SchemaOrg\Thing\CreativeWork\Review;
  use Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject;
  use Sohophp\SchemaOrg\Thing\CreativeWork\WebPage;
  use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\MediaManipulationRatingEnumeration;

/**
  * A [[MediaReview]] is a more specialized form of Review dedicated to the
 * evaluation of media content online, typically in the context of fact-checking
 * and misinformation.
 *     For more general reviews of media in the broader sense, use
 * [[UserReview]], [[CriticReview]] or other [[Review]] types. This definition
 * is
 *     a work in progress. While the [[MediaManipulationRatingEnumeration]] list
 * reflects significant community review amongst fact-checkers and others
 * working
 *     to combat misinformation, the specific structures for representing media
 * objects, their versions and publication context, are still evolving.
 * Similarly, best practices for the relationship between [[MediaReview]] and
 * [[ClaimReview]] markup have not yet been finalized.
  * @see schema:MediaReview
* @package Sohophp\SchemaOrg\Thing\CreativeWork\Review
*/
class MediaReview extends Review
{


  /**
      * Link to the page containing an original version of the content, or directly
 * to an online copy of the original [[MediaObject]] content, e.g. video file.
    * @param MediaObject|string|WebPage|array $value
  * @return $this
  */
  public function originalMediaLink($value)
  {
  $this->setProperty('originalMediaLink', $value);
  return $this;
  }

  /**
  * @param MediaObject|string|WebPage|array $value
  * @return $this
  */
  public function setOriginalMediaLink($value)
  {
  $this->setProperty('originalMediaLink', $value);
  return $this;
  }

  /**
  * @param MediaObject|string|WebPage $value
  * @return $this
  */
  public function addOriginalMediaLink($value)
  {
  $current = $this->getProperty('originalMediaLink');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('originalMediaLink', $current);
  return $this;
  }

  /**
  * @return MediaObject|string|WebPage|array
  */
  public function getOriginalMediaLink()
  {
  return $this->getProperty('originalMediaLink');
  }


  /**
      * Describes, in a [[MediaReview]] when dealing with
 * [[DecontextualizedContent]], background information that can contribute to
 * better interpretation of the [[MediaObject]].
    * @param string|array $value
  * @return $this
  */
  public function originalMediaContextDescription($value)
  {
  $this->setProperty('originalMediaContextDescription', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setOriginalMediaContextDescription($value)
  {
  $this->setProperty('originalMediaContextDescription', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addOriginalMediaContextDescription($value)
  {
  $current = $this->getProperty('originalMediaContextDescription');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('originalMediaContextDescription', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getOriginalMediaContextDescription()
  {
  return $this->getProperty('originalMediaContextDescription');
  }


  /**
      * Indicates a MediaManipulationRatingEnumeration classification of a media
 * object (in the context of how it was published or shared).
    * @param MediaManipulationRatingEnumeration|array $value
  * @return $this
  */
  public function mediaAuthenticityCategory($value)
  {
  $this->setProperty('mediaAuthenticityCategory', $value);
  return $this;
  }

  /**
  * @param MediaManipulationRatingEnumeration|array $value
  * @return $this
  */
  public function setMediaAuthenticityCategory($value)
  {
  $this->setProperty('mediaAuthenticityCategory', $value);
  return $this;
  }

  /**
  * @param MediaManipulationRatingEnumeration $value
  * @return $this
  */
  public function addMediaAuthenticityCategory($value)
  {
  $current = $this->getProperty('mediaAuthenticityCategory');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('mediaAuthenticityCategory', $current);
  return $this;
  }

  /**
  * @return MediaManipulationRatingEnumeration|array
  */
  public function getMediaAuthenticityCategory()
  {
  return $this->getProperty('mediaAuthenticityCategory');
  }


}
