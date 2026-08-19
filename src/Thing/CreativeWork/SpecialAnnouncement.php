<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

  use Sohophp\SchemaOrg\Thing\CreativeWork;
  use Sohophp\SchemaOrg\Thing\CreativeWork\Dataset\DataFeed;
  use Sohophp\SchemaOrg\Thing\Place\LocalBusiness;
  use Sohophp\SchemaOrg\Thing\Place\CivicStructure;
  use Sohophp\SchemaOrg\Thing;
  use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\PhysicalActivityCategory;
  use Sohophp\SchemaOrg\Thing\Intangible\DefinedTerm\CategoryCode;
  use Sohophp\SchemaOrg\Thing\CreativeWork\WebContent;
  use Sohophp\SchemaOrg\Thing\Intangible\Service\GovernmentService;
  use Sohophp\SchemaOrg\Thing\CreativeWork\Dataset;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue\Observation;

/**
  * A SpecialAnnouncement combines a simple date-stamped textual information
 * update
 *       with contextualized Web links and other structured data.  It represents
 * an information update made by a
 *       locally-oriented organization, for example schools, pharmacies,
 * healthcare providers,  community groups, police,
 *       local government.
 * 
 * For work in progress guidelines on Coronavirus-related markup see [this
 * doc](https://docs.google.com/document/d/14ikaGCKxo50rRM7nvKSlbUpjyIk2WMQd3IkB1lItlrM/edit#).
 * 
 * The motivating scenario for SpecialAnnouncement is the [Coronavirus
 * pandemic](https://en.wikipedia.org/wiki/2019%E2%80%9320_coronavirus_pandemic),
 * and the initial vocabulary is oriented to this urgent situation. Schema.org
 * expect to improve the markup iteratively as it is deployed and as feedback
 * emerges from use. In addition to our
 * usual [Github entry](https://github.com/schemaorg/schemaorg/issues/2490),
 * feedback comments can also be provided in [this
 * document](https://docs.google.com/document/d/1fpdFFxk8s87CWwACs53SGkYv3aafSxz_DTtOQxMrBJQ/edit#).
 * 
 * 
 * While this schema is designed to communicate urgent crisis-related
 * information, it is not the same as an emergency warning technology like
 * [CAP](https://en.wikipedia.org/wiki/Common_Alerting_Protocol), although there
 * may be overlaps. The intent is to cover
 * the kinds of everyday practical information being posted to existing websites
 * during an emergency situation.
 * 
 * Several kinds of information can be provided:
 * 
 * We encourage the provision of "name", "text", "datePosted", "expires" (if
 * appropriate), "category" and
 * "url" as a simple baseline. It is important to provide a value for "category"
 * where possible, most ideally as a well known
 * URL from Wikipedia or Wikidata. In the case of the 2019-2020 Coronavirus
 * pandemic, this should be
 * "https://en.wikipedia.org/w/index.php?title=2019-20\_coronavirus\_pandemic"
 * or "https://www.wikidata.org/wiki/Q81068910".
 * 
 * For many of the possible properties, values can either be simple links or an
 * inline description, depending on whether a summary is available. For a link,
 * provide just the URL of the appropriate page as the property's value. For an
 * inline description, use a [[WebContent]] type, and provide the url as a
 * property of that, alongside at least a simple "[[text]]" summary of the page.
 * It is
 * unlikely that a single SpecialAnnouncement will need all of the possible
 * properties simultaneously.
 * 
 * We expect that in many cases the page referenced might contain more
 * specialized structured data, e.g. contact info, [[openingHours]], [[Event]],
 * [[FAQPage]] etc. By linking to those pages from a [[SpecialAnnouncement]] you
 * can help make it clearer that the events are related to the situation (e.g.
 * Coronavirus) indicated by the [[category]] property of the
 * [[SpecialAnnouncement]].
 * 
 * Many [[SpecialAnnouncement]]s will relate to particular regions and to
 * identifiable local organizations. Use [[spatialCoverage]] for the region, and
 * [[announcementLocation]] to indicate specific [[LocalBusiness]]es and
 * [[CivicStructure]]s. If the announcement affects both a particular region and
 * a specific location (for example, a library closure that serves an entire
 * region), use both [[spatialCoverage]] and [[announcementLocation]].
 * 
 * The [[about]] property can be used to indicate entities that are the focus of
 * the announcement. We now recommend using [[about]] only
 * for representing non-location entities (e.g. a [[Course]] or a
 * [[RadioStation]]). For places, use [[announcementLocation]] and
 * [[spatialCoverage]]. Consumers of this markup should be aware that the
 * initial design encouraged the use of [[about]] for locations too.
 * 
 * The basic content of [[SpecialAnnouncement]] is similar to that of an
 * [RSS](https://en.wikipedia.org/wiki/RSS) or
 * [Atom](https://en.wikipedia.org/wiki/Atom_(Web_standard)) feed. For
 * publishers without such feeds, basic feed-like information can be shared by
 * posting
 * [[SpecialAnnouncement]] updates in a page, e.g. using JSON-LD. For sites with
 * Atom/RSS functionality, you can point to a feed
 * with the [[webFeed]] property. This can be a simple URL, or an inline
 * [[DataFeed]] object, with [[encodingFormat]] providing
 * media type information, e.g. "application/rss+xml" or "application/atom+xml".
  * @see schema:SpecialAnnouncement
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class SpecialAnnouncement extends CreativeWork
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
      * The URL for a feed, e.g. associated with a podcast series, blog, or series of
 * date-stamped updates. This is usually RSS or Atom.
    * @param string|DataFeed|array $value
  * @return $this
  */
  public function webFeed($value)
  {
  $this->setProperty('webFeed', $value);
  return $this;
  }

  /**
  * @param string|DataFeed|array $value
  * @return $this
  */
  public function setWebFeed($value)
  {
  $this->setProperty('webFeed', $value);
  return $this;
  }

  /**
  * @param string|DataFeed $value
  * @return $this
  */
  public function addWebFeed($value)
  {
  $current = $this->getProperty('webFeed');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('webFeed', $current);
  return $this;
  }

  /**
  * @return string|DataFeed|array
  */
  public function getWebFeed()
  {
  return $this->getProperty('webFeed');
  }


  /**
      * Indicates a specific [[CivicStructure]] or [[LocalBusiness]] associated with
 * the SpecialAnnouncement. For example, a specific testing facility or business
 * with special opening hours. For a larger geographic region like a quarantine
 * of an entire region, use [[spatialCoverage]].
    * @param LocalBusiness|CivicStructure|array $value
  * @return $this
  */
  public function announcementLocation($value)
  {
  $this->setProperty('announcementLocation', $value);
  return $this;
  }

  /**
  * @param LocalBusiness|CivicStructure|array $value
  * @return $this
  */
  public function setAnnouncementLocation($value)
  {
  $this->setProperty('announcementLocation', $value);
  return $this;
  }

  /**
  * @param LocalBusiness|CivicStructure $value
  * @return $this
  */
  public function addAnnouncementLocation($value)
  {
  $current = $this->getProperty('announcementLocation');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('announcementLocation', $current);
  return $this;
  }

  /**
  * @return LocalBusiness|CivicStructure|array
  */
  public function getAnnouncementLocation()
  {
  return $this->getProperty('announcementLocation');
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


  /**
      * Indicates a page with news updates and guidelines. This could often be (but
 * is not required to be) the main page containing [[SpecialAnnouncement]]
 * markup on a site.
    * @param WebContent|string|array $value
  * @return $this
  */
  public function newsUpdatesAndGuidelines($value)
  {
  $this->setProperty('newsUpdatesAndGuidelines', $value);
  return $this;
  }

  /**
  * @param WebContent|string|array $value
  * @return $this
  */
  public function setNewsUpdatesAndGuidelines($value)
  {
  $this->setProperty('newsUpdatesAndGuidelines', $value);
  return $this;
  }

  /**
  * @param WebContent|string $value
  * @return $this
  */
  public function addNewsUpdatesAndGuidelines($value)
  {
  $current = $this->getProperty('newsUpdatesAndGuidelines');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('newsUpdatesAndGuidelines', $current);
  return $this;
  }

  /**
  * @return WebContent|string|array
  */
  public function getNewsUpdatesAndGuidelines()
  {
  return $this->getProperty('newsUpdatesAndGuidelines');
  }


  /**
      * Information about travel bans, e.g. in the context of a pandemic.
    * @param string|WebContent|array $value
  * @return $this
  */
  public function travelBans($value)
  {
  $this->setProperty('travelBans', $value);
  return $this;
  }

  /**
  * @param string|WebContent|array $value
  * @return $this
  */
  public function setTravelBans($value)
  {
  $this->setProperty('travelBans', $value);
  return $this;
  }

  /**
  * @param string|WebContent $value
  * @return $this
  */
  public function addTravelBans($value)
  {
  $current = $this->getProperty('travelBans');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('travelBans', $current);
  return $this;
  }

  /**
  * @return string|WebContent|array
  */
  public function getTravelBans()
  {
  return $this->getProperty('travelBans');
  }


  /**
      * Information about getting tested (for a [[MedicalCondition]]), e.g. in the
 * context of a pandemic.
    * @param string|WebContent|array $value
  * @return $this
  */
  public function gettingTestedInfo($value)
  {
  $this->setProperty('gettingTestedInfo', $value);
  return $this;
  }

  /**
  * @param string|WebContent|array $value
  * @return $this
  */
  public function setGettingTestedInfo($value)
  {
  $this->setProperty('gettingTestedInfo', $value);
  return $this;
  }

  /**
  * @param string|WebContent $value
  * @return $this
  */
  public function addGettingTestedInfo($value)
  {
  $current = $this->getProperty('gettingTestedInfo');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('gettingTestedInfo', $current);
  return $this;
  }

  /**
  * @return string|WebContent|array
  */
  public function getGettingTestedInfo()
  {
  return $this->getProperty('gettingTestedInfo');
  }


  /**
      * Information about school closures.
    * @param WebContent|string|array $value
  * @return $this
  */
  public function schoolClosuresInfo($value)
  {
  $this->setProperty('schoolClosuresInfo', $value);
  return $this;
  }

  /**
  * @param WebContent|string|array $value
  * @return $this
  */
  public function setSchoolClosuresInfo($value)
  {
  $this->setProperty('schoolClosuresInfo', $value);
  return $this;
  }

  /**
  * @param WebContent|string $value
  * @return $this
  */
  public function addSchoolClosuresInfo($value)
  {
  $current = $this->getProperty('schoolClosuresInfo');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('schoolClosuresInfo', $current);
  return $this;
  }

  /**
  * @return WebContent|string|array
  */
  public function getSchoolClosuresInfo()
  {
  return $this->getProperty('schoolClosuresInfo');
  }


  /**
      * Information about public transport closures.
    * @param WebContent|string|array $value
  * @return $this
  */
  public function publicTransportClosuresInfo($value)
  {
  $this->setProperty('publicTransportClosuresInfo', $value);
  return $this;
  }

  /**
  * @param WebContent|string|array $value
  * @return $this
  */
  public function setPublicTransportClosuresInfo($value)
  {
  $this->setProperty('publicTransportClosuresInfo', $value);
  return $this;
  }

  /**
  * @param WebContent|string $value
  * @return $this
  */
  public function addPublicTransportClosuresInfo($value)
  {
  $current = $this->getProperty('publicTransportClosuresInfo');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('publicTransportClosuresInfo', $current);
  return $this;
  }

  /**
  * @return WebContent|string|array
  */
  public function getPublicTransportClosuresInfo()
  {
  return $this->getProperty('publicTransportClosuresInfo');
  }


  /**
      * governmentBenefitsInfo provides information about government benefits
 * associated with a SpecialAnnouncement.
    * @param GovernmentService|array $value
  * @return $this
  */
  public function governmentBenefitsInfo($value)
  {
  $this->setProperty('governmentBenefitsInfo', $value);
  return $this;
  }

  /**
  * @param GovernmentService|array $value
  * @return $this
  */
  public function setGovernmentBenefitsInfo($value)
  {
  $this->setProperty('governmentBenefitsInfo', $value);
  return $this;
  }

  /**
  * @param GovernmentService $value
  * @return $this
  */
  public function addGovernmentBenefitsInfo($value)
  {
  $current = $this->getProperty('governmentBenefitsInfo');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('governmentBenefitsInfo', $current);
  return $this;
  }

  /**
  * @return GovernmentService|array
  */
  public function getGovernmentBenefitsInfo()
  {
  return $this->getProperty('governmentBenefitsInfo');
  }


  /**
      * Information about disease prevention.
    * @param WebContent|string|array $value
  * @return $this
  */
  public function diseasePreventionInfo($value)
  {
  $this->setProperty('diseasePreventionInfo', $value);
  return $this;
  }

  /**
  * @param WebContent|string|array $value
  * @return $this
  */
  public function setDiseasePreventionInfo($value)
  {
  $this->setProperty('diseasePreventionInfo', $value);
  return $this;
  }

  /**
  * @param WebContent|string $value
  * @return $this
  */
  public function addDiseasePreventionInfo($value)
  {
  $current = $this->getProperty('diseasePreventionInfo');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('diseasePreventionInfo', $current);
  return $this;
  }

  /**
  * @return WebContent|string|array
  */
  public function getDiseasePreventionInfo()
  {
  return $this->getProperty('diseasePreventionInfo');
  }


  /**
      * Guidelines about quarantine rules, e.g. in the context of a pandemic.
    * @param string|WebContent|array $value
  * @return $this
  */
  public function quarantineGuidelines($value)
  {
  $this->setProperty('quarantineGuidelines', $value);
  return $this;
  }

  /**
  * @param string|WebContent|array $value
  * @return $this
  */
  public function setQuarantineGuidelines($value)
  {
  $this->setProperty('quarantineGuidelines', $value);
  return $this;
  }

  /**
  * @param string|WebContent $value
  * @return $this
  */
  public function addQuarantineGuidelines($value)
  {
  $current = $this->getProperty('quarantineGuidelines');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('quarantineGuidelines', $current);
  return $this;
  }

  /**
  * @return string|WebContent|array
  */
  public function getQuarantineGuidelines()
  {
  return $this->getProperty('quarantineGuidelines');
  }


  /**
      * Statistical information about the spread of a disease, either as
 * [[WebContent]], or
 *   described directly as a [[Dataset]], or the specific [[Observation]]s in
 * the dataset. When a [[WebContent]] URL is
 *   provided, the page indicated might also contain more such markup.
    * @param Dataset|Observation|string|WebContent|array $value
  * @return $this
  */
  public function diseaseSpreadStatistics($value)
  {
  $this->setProperty('diseaseSpreadStatistics', $value);
  return $this;
  }

  /**
  * @param Dataset|Observation|string|WebContent|array $value
  * @return $this
  */
  public function setDiseaseSpreadStatistics($value)
  {
  $this->setProperty('diseaseSpreadStatistics', $value);
  return $this;
  }

  /**
  * @param Dataset|Observation|string|WebContent $value
  * @return $this
  */
  public function addDiseaseSpreadStatistics($value)
  {
  $current = $this->getProperty('diseaseSpreadStatistics');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('diseaseSpreadStatistics', $current);
  return $this;
  }

  /**
  * @return Dataset|Observation|string|WebContent|array
  */
  public function getDiseaseSpreadStatistics()
  {
  return $this->getProperty('diseaseSpreadStatistics');
  }


}
