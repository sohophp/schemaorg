<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;

/**
* A SpecialAnnouncement combines a simple date-stamped textual information update
      with contextualized Web links and other structured data.  It represents an information update made by a
      locally-oriented organization, for example schools, pharmacies, healthcare providers,  community groups, police,
      local government.

For work in progress guidelines on Coronavirus-related markup see [this doc](https://docs.google.com/document/d/14ikaGCKxo50rRM7nvKSlbUpjyIk2WMQd3IkB1lItlrM/edit#).

The motivating scenario for SpecialAnnouncement is the [Coronavirus pandemic](https://en.wikipedia.org/wiki/2019%E2%80%9320_coronavirus_pandemic), and the initial vocabulary is oriented to this urgent situation. Schema.org
expect to improve the markup iteratively as it is deployed and as feedback emerges from use. In addition to our
usual [Github entry](https://github.com/schemaorg/schemaorg/issues/2490), feedback comments can also be provided in [this document](https://docs.google.com/document/d/1fpdFFxk8s87CWwACs53SGkYv3aafSxz_DTtOQxMrBJQ/edit#).


While this schema is designed to communicate urgent crisis-related information, it is not the same as an emergency warning technology like [CAP](https://en.wikipedia.org/wiki/Common_Alerting_Protocol), although there may be overlaps. The intent is to cover
the kinds of everyday practical information being posted to existing websites during an emergency situation.

Several kinds of information can be provided:

We encourage the provision of "name", "text", "datePosted", "expires" (if appropriate), "category" and
"url" as a simple baseline. It is important to provide a value for "category" where possible, most ideally as a well known
URL from Wikipedia or Wikidata. In the case of the 2019-2020 Coronavirus pandemic, this should be "https://en.wikipedia.org/w/index.php?title=2019-20\_coronavirus\_pandemic" or "https://www.wikidata.org/wiki/Q81068910".

For many of the possible properties, values can either be simple links or an inline description, depending on whether a summary is available. For a link, provide just the URL of the appropriate page as the property's value. For an inline description, use a [[WebContent]] type, and provide the url as a property of that, alongside at least a simple "[[text]]" summary of the page. It is
unlikely that a single SpecialAnnouncement will need all of the possible properties simultaneously.

We expect that in many cases the page referenced might contain more specialized structured data, e.g. contact info, [[openingHours]], [[Event]], [[FAQPage]] etc. By linking to those pages from a [[SpecialAnnouncement]] you can help make it clearer that the events are related to the situation (e.g. Coronavirus) indicated by the [[category]] property of the [[SpecialAnnouncement]].

Many [[SpecialAnnouncement]]s will relate to particular regions and to identifiable local organizations. Use [[spatialCoverage]] for the region, and [[announcementLocation]] to indicate specific [[LocalBusiness]]es and [[CivicStructure]]s. If the announcement affects both a particular region and a specific location (for example, a library closure that serves an entire region), use both [[spatialCoverage]] and [[announcementLocation]].

The [[about]] property can be used to indicate entities that are the focus of the announcement. We now recommend using [[about]] only
for representing non-location entities (e.g. a [[Course]] or a [[RadioStation]]). For places, use [[announcementLocation]] and [[spatialCoverage]]. Consumers of this markup should be aware that the initial design encouraged the use of [[about]] for locations too.

The basic content of [[SpecialAnnouncement]] is similar to that of an [RSS](https://en.wikipedia.org/wiki/RSS) or [Atom](https://en.wikipedia.org/wiki/Atom_(Web_standard)) feed. For publishers without such feeds, basic feed-like information can be shared by posting
[[SpecialAnnouncement]] updates in a page, e.g. using JSON-LD. For sites with Atom/RSS functionality, you can point to a feed
with the [[webFeed]] property. This can be a simple URL, or an inline [[DataFeed]] object, with [[encodingFormat]] providing
media type information, e.g. "application/rss+xml" or "application/atom+xml".

* @see schema:SpecialAnnouncement
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class SpecialAnnouncement extends CreativeWork
{
   /**
        * Information about disease prevention.
        */
    protected $diseasePreventionInfo = null;

   /**
        * Guidelines about quarantine rules, e.g. in the context of a pandemic.
        */
    protected $quarantineGuidelines = null;

   /**
        * Publication date of an online listing.
        */
    protected $datePosted = null;

   /**
        * Information about getting tested (for a [[MedicalCondition]]), e.g. in the context of a pandemic.
        */
    protected $gettingTestedInfo = null;

   /**
        * Information about school closures.
        */
    protected $schoolClosuresInfo = null;

   /**
        * A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
        */
    protected $category = null;

   /**
        * Indicates a specific [[CivicStructure]] or [[LocalBusiness]] associated with the SpecialAnnouncement. For example, a specific testing facility or business with special opening hours. For a larger geographic region like a quarantine of an entire region, use [[spatialCoverage]].
        */
    protected $announcementLocation = null;

   /**
        * The URL for a feed, e.g. associated with a podcast series, blog, or series of date-stamped updates. This is usually RSS or Atom.
        */
    protected $webFeed = null;

   /**
        * Information about public transport closures.
        */
    protected $publicTransportClosuresInfo = null;

   /**
        * Indicates a page with news updates and guidelines. This could often be (but is not required to be) the main page containing [[SpecialAnnouncement]] markup on a site.
        */
    protected $newsUpdatesAndGuidelines = null;

   /**
        * Statistical information about the spread of a disease, either as [[WebContent]], or
  described directly as a [[Dataset]], or the specific [[Observation]]s in the dataset. When a [[WebContent]] URL is
  provided, the page indicated might also contain more such markup.
        */
    protected $diseaseSpreadStatistics = null;

   /**
        * governmentBenefitsInfo provides information about government benefits associated with a SpecialAnnouncement.
        */
    protected $governmentBenefitsInfo = null;

   /**
        * Information about travel bans, e.g. in the context of a pandemic.
        */
    protected $travelBans = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setDiseasePreventionInfo($value)
    {
        $this->setProperty('diseasePreventionInfo', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDiseasePreventionInfo()
    {
       return $this->getProperty('diseasePreventionInfo');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setQuarantineGuidelines($value)
    {
        $this->setProperty('quarantineGuidelines', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getQuarantineGuidelines()
    {
       return $this->getProperty('quarantineGuidelines');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setDatePosted($value)
    {
        $this->setProperty('datePosted', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDatePosted()
    {
       return $this->getProperty('datePosted');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setGettingTestedInfo($value)
    {
        $this->setProperty('gettingTestedInfo', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getGettingTestedInfo()
    {
       return $this->getProperty('gettingTestedInfo');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setSchoolClosuresInfo($value)
    {
        $this->setProperty('schoolClosuresInfo', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSchoolClosuresInfo()
    {
       return $this->getProperty('schoolClosuresInfo');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setCategory($value)
    {
        $this->setProperty('category', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCategory()
    {
       return $this->getProperty('category');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setAnnouncementLocation($value)
    {
        $this->setProperty('announcementLocation', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAnnouncementLocation()
    {
       return $this->getProperty('announcementLocation');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setWebFeed($value)
    {
        $this->setProperty('webFeed', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getWebFeed()
    {
       return $this->getProperty('webFeed');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setPublicTransportClosuresInfo($value)
    {
        $this->setProperty('publicTransportClosuresInfo', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPublicTransportClosuresInfo()
    {
       return $this->getProperty('publicTransportClosuresInfo');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setNewsUpdatesAndGuidelines($value)
    {
        $this->setProperty('newsUpdatesAndGuidelines', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getNewsUpdatesAndGuidelines()
    {
       return $this->getProperty('newsUpdatesAndGuidelines');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setDiseaseSpreadStatistics($value)
    {
        $this->setProperty('diseaseSpreadStatistics', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDiseaseSpreadStatistics()
    {
       return $this->getProperty('diseaseSpreadStatistics');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setGovernmentBenefitsInfo($value)
    {
        $this->setProperty('governmentBenefitsInfo', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getGovernmentBenefitsInfo()
    {
       return $this->getProperty('governmentBenefitsInfo');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setTravelBans($value)
    {
        $this->setProperty('travelBans', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getTravelBans()
    {
       return $this->getProperty('travelBans');
    }


}
