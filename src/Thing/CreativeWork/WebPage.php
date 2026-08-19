<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

  use Sohophp\SchemaOrg\Thing\CreativeWork;
  use Sohophp\SchemaOrg\Thing\CreativeWork\WebPageElement;
  use Sohophp\SchemaOrg\Thing\Intangible\SpeakableSpecification;
  use Sohophp\SchemaOrg\Thing\Organization;
  use Sohophp\SchemaOrg\Thing\Person;
  use Sohophp\SchemaOrg\Thing\Intangible\ItemList\BreadcrumbList;
  use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\Specialty;
  use Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject\ImageObject;

/**
  * A web page. Every web page is implicitly assumed to be declared to be of type
 * WebPage, so the various properties about that webpage, such as
 * ```breadcrumb``` may be used. We recommend explicit declaration if these
 * properties are specified, but if they are found outside of an itemscope, they
 * will be assumed to be about the page.
  * @see schema:WebPage
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class WebPage extends CreativeWork
{


  /**
      * Indicates if this web page element is the main subject of the page.
    * @param WebPageElement|array $value
  * @return $this
  */
  public function mainContentOfPage($value)
  {
  $this->setProperty('mainContentOfPage', $value);
  return $this;
  }

  /**
  * @param WebPageElement|array $value
  * @return $this
  */
  public function setMainContentOfPage($value)
  {
  $this->setProperty('mainContentOfPage', $value);
  return $this;
  }

  /**
  * @param WebPageElement $value
  * @return $this
  */
  public function addMainContentOfPage($value)
  {
  $current = $this->getProperty('mainContentOfPage');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('mainContentOfPage', $current);
  return $this;
  }

  /**
  * @return WebPageElement|array
  */
  public function getMainContentOfPage()
  {
  return $this->getProperty('mainContentOfPage');
  }


  /**
      * Indicates sections of a Web page that are particularly 'speakable' in the
 * sense of being highlighted as being especially appropriate for text-to-speech
 * conversion. Other sections of a page may also be usefully spoken in
 * particular circumstances; the 'speakable' property serves to indicate the
 * parts most likely to be generally useful for speech.
 * 
 * The *speakable* property can be repeated an arbitrary number of times, with
 * three kinds of possible 'content-locator' values:
 * 
 * 1.) *id-value* URL references - uses *id-value* of an element in the page
 * being annotated. The simplest use of *speakable* has (potentially relative)
 * URL values, referencing identified sections of the document concerned.
 * 
 * 2.) CSS Selectors - addresses content in the annotated page, e.g. via class
 * attribute. Use the [[cssSelector]] property.
 * 
 * 3.)  XPaths - addresses content via XPaths (assuming an XML view of the
 * content). Use the [[xpath]] property.
 * 
 * 
 * For more sophisticated markup of speakable sections beyond simple ID
 * references, either CSS selectors or XPath expressions to pick out document
 * section(s) as speakable. For this
 * we define a supporting type, [[SpeakableSpecification]]  which is defined to
 * be a possible value of the *speakable* property.
    * @param string|SpeakableSpecification|array $value
  * @return $this
  */
  public function speakable($value)
  {
  $this->setProperty('speakable', $value);
  return $this;
  }

  /**
  * @param string|SpeakableSpecification|array $value
  * @return $this
  */
  public function setSpeakable($value)
  {
  $this->setProperty('speakable', $value);
  return $this;
  }

  /**
  * @param string|SpeakableSpecification $value
  * @return $this
  */
  public function addSpeakable($value)
  {
  $current = $this->getProperty('speakable');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('speakable', $current);
  return $this;
  }

  /**
  * @return string|SpeakableSpecification|array
  */
  public function getSpeakable()
  {
  return $this->getProperty('speakable');
  }


  /**
      * People or organizations that have reviewed the content on this web page for
 * accuracy and/or completeness.
    * @param Organization|Person|array $value
  * @return $this
  */
  public function reviewedBy($value)
  {
  $this->setProperty('reviewedBy', $value);
  return $this;
  }

  /**
  * @param Organization|Person|array $value
  * @return $this
  */
  public function setReviewedBy($value)
  {
  $this->setProperty('reviewedBy', $value);
  return $this;
  }

  /**
  * @param Organization|Person $value
  * @return $this
  */
  public function addReviewedBy($value)
  {
  $current = $this->getProperty('reviewedBy');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('reviewedBy', $current);
  return $this;
  }

  /**
  * @return Organization|Person|array
  */
  public function getReviewedBy()
  {
  return $this->getProperty('reviewedBy');
  }


  /**
      * A set of links that can help a user understand and navigate a website
 * hierarchy.
    * @param string|BreadcrumbList|array $value
  * @return $this
  */
  public function breadcrumb($value)
  {
  $this->setProperty('breadcrumb', $value);
  return $this;
  }

  /**
  * @param string|BreadcrumbList|array $value
  * @return $this
  */
  public function setBreadcrumb($value)
  {
  $this->setProperty('breadcrumb', $value);
  return $this;
  }

  /**
  * @param string|BreadcrumbList $value
  * @return $this
  */
  public function addBreadcrumb($value)
  {
  $current = $this->getProperty('breadcrumb');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('breadcrumb', $current);
  return $this;
  }

  /**
  * @return string|BreadcrumbList|array
  */
  public function getBreadcrumb()
  {
  return $this->getProperty('breadcrumb');
  }


  /**
      * One of the more significant URLs on the page. Typically, these are the
 * non-navigation links that are clicked on the most.
    * @param string|array $value
  * @return $this
  */
  public function significantLink($value)
  {
  $this->setProperty('significantLink', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setSignificantLink($value)
  {
  $this->setProperty('significantLink', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addSignificantLink($value)
  {
  $current = $this->getProperty('significantLink');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('significantLink', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getSignificantLink()
  {
  return $this->getProperty('significantLink');
  }


  /**
      * A link related to this web page, for example to other related web pages.
    * @param string|array $value
  * @return $this
  */
  public function relatedLink($value)
  {
  $this->setProperty('relatedLink', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setRelatedLink($value)
  {
  $this->setProperty('relatedLink', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addRelatedLink($value)
  {
  $current = $this->getProperty('relatedLink');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('relatedLink', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getRelatedLink()
  {
  return $this->getProperty('relatedLink');
  }


  /**
      * The most significant URLs on the page. Typically, these are the
 * non-navigation links that are clicked on the most.
    * @param string|array $value
  * @return $this
  */
  public function significantLinks($value)
  {
  $this->setProperty('significantLinks', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setSignificantLinks($value)
  {
  $this->setProperty('significantLinks', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addSignificantLinks($value)
  {
  $current = $this->getProperty('significantLinks');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('significantLinks', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getSignificantLinks()
  {
  return $this->getProperty('significantLinks');
  }


  /**
      * One of the domain specialities to which this web page's content applies.
    * @param Specialty|array $value
  * @return $this
  */
  public function specialty($value)
  {
  $this->setProperty('specialty', $value);
  return $this;
  }

  /**
  * @param Specialty|array $value
  * @return $this
  */
  public function setSpecialty($value)
  {
  $this->setProperty('specialty', $value);
  return $this;
  }

  /**
  * @param Specialty $value
  * @return $this
  */
  public function addSpecialty($value)
  {
  $current = $this->getProperty('specialty');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('specialty', $current);
  return $this;
  }

  /**
  * @return Specialty|array
  */
  public function getSpecialty()
  {
  return $this->getProperty('specialty');
  }


  /**
      * Indicates the main image on the page.
    * @param ImageObject|array $value
  * @return $this
  */
  public function primaryImageOfPage($value)
  {
  $this->setProperty('primaryImageOfPage', $value);
  return $this;
  }

  /**
  * @param ImageObject|array $value
  * @return $this
  */
  public function setPrimaryImageOfPage($value)
  {
  $this->setProperty('primaryImageOfPage', $value);
  return $this;
  }

  /**
  * @param ImageObject $value
  * @return $this
  */
  public function addPrimaryImageOfPage($value)
  {
  $current = $this->getProperty('primaryImageOfPage');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('primaryImageOfPage', $current);
  return $this;
  }

  /**
  * @return ImageObject|array
  */
  public function getPrimaryImageOfPage()
  {
  return $this->getProperty('primaryImageOfPage');
  }


  /**
      * Date on which the content on this web page was last reviewed for accuracy
 * and/or completeness.
    * @param mixed $value
  * @return $this
  */
  public function lastReviewed($value)
  {
  $this->setProperty('lastReviewed', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function setLastReviewed($value)
  {
  $this->setProperty('lastReviewed', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function addLastReviewed($value)
  {
  $current = $this->getProperty('lastReviewed');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('lastReviewed', $current);
  return $this;
  }

  /**
  * @return mixed
  */
  public function getLastReviewed()
  {
  return $this->getProperty('lastReviewed');
  }


}
