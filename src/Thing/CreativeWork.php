<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing;

use Sohophp\SchemaOrg\Thing;
use Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\CreativeWork\Clip;
use Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject\AudioObject;
use Sohophp\SchemaOrg\Thing\Intangible\Audience;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;
use Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject\VideoObject;
use Sohophp\SchemaOrg\Thing\Intangible\AlignmentObject;
use Sohophp\SchemaOrg\Thing\Event\PublicationEvent;
use Sohophp\SchemaOrg\Thing\CreativeWork\Review;
use Sohophp\SchemaOrg\Thing\Place;
use Sohophp\SchemaOrg\Thing\Intangible\Rating\AggregateRating;
use Sohophp\SchemaOrg\Thing\Intangible\ItemList;
use Sohophp\SchemaOrg\Thing\Intangible\Offer;
use Sohophp\SchemaOrg\Thing\Event;
use Sohophp\SchemaOrg\Thing\Intangible\Language;
use Sohophp\SchemaOrg\Thing\Product;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\InteractionCounter;
use Sohophp\SchemaOrg\Thing\Intangible\Rating;
use Sohophp\SchemaOrg\Thing\Intangible\Quantity\Duration;
use Sohophp\SchemaOrg\Thing\Intangible\DefinedTerm;
use Sohophp\SchemaOrg\Thing\CreativeWork\Comment;
use Sohophp\SchemaOrg\Thing\CreativeWork\Comment\CorrectionComment;

/**
* The most generic kind of creative work, including books, movies, photographs, software programs, etc.
* @see http://schema.org/CreativeWork
* @package Sohophp\SchemaOrg\Thing

*
*/
class CreativeWork extends Thing
{

    /**
    * The subject matter of the content.
    * @param Thing|array $value
    * @return $this
    */
    public function about(?Thing $value)
    {
        $this->setProperty('about', $value);
        return $this;
    }
   /**
    * @param Thing|array $value
    * @return $this
    */
    public function setAbout(?Thing $value)
    {
        $this->setProperty('about', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAbout()
    {
       return $this->getProperty('about');
    }

    /**
    * A media object that encodes this CreativeWork. This property is a synonym for encoding.
    * @param MediaObject|array $value
    * @return $this
    */
    public function associatedMedia(?MediaObject $value)
    {
        $this->setProperty('associatedMedia', $value);
        return $this;
    }
   /**
    * @param MediaObject|array $value
    * @return $this
    */
    public function setAssociatedMedia(?MediaObject $value)
    {
        $this->setProperty('associatedMedia', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAssociatedMedia()
    {
       return $this->getProperty('associatedMedia');
    }

    /**
    * A person or organization that supports (sponsors) something through some kind of financial contribution.
    * @param Organization|Person|array $value
    * @return $this
    */
    public function funder($value)
    {
        $this->setProperty('funder', $value);
        return $this;
    }
   /**
    * @param Organization|Person|array $value
    * @return $this
    */
    public function setFunder($value)
    {
        $this->setProperty('funder', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getFunder()
    {
       return $this->getProperty('funder');
    }

    /**
    * The position of an item in a series or sequence of items.
    * @param string|int|array $value
    * @return $this
    */
    public function position($value)
    {
        $this->setProperty('position', $value);
        return $this;
    }
   /**
    * @param string|int|array $value
    * @return $this
    */
    public function setPosition($value)
    {
        $this->setProperty('position', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getPosition()
    {
       return $this->getProperty('position');
    }

    /**
    * An embedded audio object.
    * @param Clip|AudioObject|array $value
    * @return $this
    */
    public function audio($value)
    {
        $this->setProperty('audio', $value);
        return $this;
    }
   /**
    * @param Clip|AudioObject|array $value
    * @return $this
    */
    public function setAudio($value)
    {
        $this->setProperty('audio', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAudio()
    {
       return $this->getProperty('audio');
    }

    /**
    * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller.
    * @param Organization|Person|array $value
    * @return $this
    */
    public function provider($value)
    {
        $this->setProperty('provider', $value);
        return $this;
    }
   /**
    * @param Organization|Person|array $value
    * @return $this
    */
    public function setProvider($value)
    {
        $this->setProperty('provider', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getProvider()
    {
       return $this->getProperty('provider');
    }

    /**
    * A media object that encodes this CreativeWork. This property is a synonym for associatedMedia.
    * @param MediaObject|array $value
    * @return $this
    */
    public function encoding(?MediaObject $value)
    {
        $this->setProperty('encoding', $value);
        return $this;
    }
   /**
    * @param MediaObject|array $value
    * @return $this
    */
    public function setEncoding(?MediaObject $value)
    {
        $this->setProperty('encoding', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getEncoding()
    {
       return $this->getProperty('encoding');
    }

    /**
    * The predominant mode of learning supported by the learning resource. Acceptable values are 'active', 'expositive', or 'mixed'.
    * @param string|array $value
    * @return $this
    */
    public function interactivityType(?string $value)
    {
        $this->setProperty('interactivityType', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setInteractivityType(?string $value)
    {
        $this->setProperty('interactivityType', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getInteractivityType()
    {
       return $this->getProperty('interactivityType');
    }

    /**
    * Fictional person connected with a creative work.
    * @param Person|array $value
    * @return $this
    */
    public function character(?Person $value)
    {
        $this->setProperty('character', $value);
        return $this;
    }
   /**
    * @param Person|array $value
    * @return $this
    */
    public function setCharacter(?Person $value)
    {
        $this->setProperty('character', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getCharacter()
    {
       return $this->getProperty('character');
    }

    /**
    * An intended audience, i.e. a group for whom something was created.
    * @param Audience|array $value
    * @return $this
    */
    public function audience(?Audience $value)
    {
        $this->setProperty('audience', $value);
        return $this;
    }
   /**
    * @param Audience|array $value
    * @return $this
    */
    public function setAudience(?Audience $value)
    {
        $this->setProperty('audience', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAudience()
    {
       return $this->getProperty('audience');
    }

    /**
    * The Organization on whose behalf the creator was working.
    * @param Organization|array $value
    * @return $this
    */
    public function sourceOrganization(?Organization $value)
    {
        $this->setProperty('sourceOrganization', $value);
        return $this;
    }
   /**
    * @param Organization|array $value
    * @return $this
    */
    public function setSourceOrganization(?Organization $value)
    {
        $this->setProperty('sourceOrganization', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getSourceOrganization()
    {
       return $this->getProperty('sourceOrganization');
    }

    /**
    * The quantity of the materials being described or an expression of the physical space they occupy.
    * @param QuantitativeValue|string|array $value
    * @return $this
    */
    public function materialExtent($value)
    {
        $this->setProperty('materialExtent', $value);
        return $this;
    }
   /**
    * @param QuantitativeValue|string|array $value
    * @return $this
    */
    public function setMaterialExtent($value)
    {
        $this->setProperty('materialExtent', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getMaterialExtent()
    {
       return $this->getProperty('materialExtent');
    }

    /**
    * An embedded video object.
    * @param VideoObject|Clip|array $value
    * @return $this
    */
    public function video($value)
    {
        $this->setProperty('video', $value);
        return $this;
    }
   /**
    * @param VideoObject|Clip|array $value
    * @return $this
    */
    public function setVideo($value)
    {
        $this->setProperty('video', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getVideo()
    {
       return $this->getProperty('video');
    }

    /**
    * The publisher of the creative work.
    * @param Person|Organization|array $value
    * @return $this
    */
    public function publisher($value)
    {
        $this->setProperty('publisher', $value);
        return $this;
    }
   /**
    * @param Person|Organization|array $value
    * @return $this
    */
    public function setPublisher($value)
    {
        $this->setProperty('publisher', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getPublisher()
    {
       return $this->getProperty('publisher');
    }

    /**
    * An alignment to an established educational framework.
    * @param AlignmentObject|array $value
    * @return $this
    */
    public function educationalAlignment(?AlignmentObject $value)
    {
        $this->setProperty('educationalAlignment', $value);
        return $this;
    }
   /**
    * @param AlignmentObject|array $value
    * @return $this
    */
    public function setEducationalAlignment(?AlignmentObject $value)
    {
        $this->setProperty('educationalAlignment', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getEducationalAlignment()
    {
       return $this->getProperty('educationalAlignment');
    }

    /**
    * A publication event associated with the item.
    * @param PublicationEvent|array $value
    * @return $this
    */
    public function publication(?PublicationEvent $value)
    {
        $this->setProperty('publication', $value);
        return $this;
    }
   /**
    * @param PublicationEvent|array $value
    * @return $this
    */
    public function setPublication(?PublicationEvent $value)
    {
        $this->setProperty('publication', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getPublication()
    {
       return $this->getProperty('publication');
    }

    /**
    * The textual content of this CreativeWork.
    * @param string|array $value
    * @return $this
    */
    public function text(?string $value)
    {
        $this->setProperty('text', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setText(?string $value)
    {
        $this->setProperty('text', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getText()
    {
       return $this->getProperty('text');
    }

    /**
    * Date the content expires and is no longer useful or available. For example a <a class="localLink" href="http://schema.org/VideoObject">VideoObject</a> or <a class="localLink" href="http://schema.org/NewsArticle">NewsArticle</a> whose availability or relevance is time-limited, or a <a class="localLink" href="http://schema.org/ClaimReview">ClaimReview</a> fact check whose publisher wants to indicate that it may no longer be relevant (or helpful to highlight) after some date.
    * @param |array $value
    * @return $this
    */
    public function expires($value)
    {
        $this->setProperty('expires', $value);
        return $this;
    }
   /**
    * @param |array $value
    * @return $this
    */
    public function setExpires($value)
    {
        $this->setProperty('expires', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getExpires()
    {
       return $this->getProperty('expires');
    }

    /**
    * A secondary contributor to the CreativeWork or Event.
    * @param Person|Organization|array $value
    * @return $this
    */
    public function contributor($value)
    {
        $this->setProperty('contributor', $value);
        return $this;
    }
   /**
    * @param Person|Organization|array $value
    * @return $this
    */
    public function setContributor($value)
    {
        $this->setProperty('contributor', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getContributor()
    {
       return $this->getProperty('contributor');
    }

    /**
    * Review of the item.
    * @param Review|array $value
    * @return $this
    */
    public function reviews(?Review $value)
    {
        $this->setProperty('reviews', $value);
        return $this;
    }
   /**
    * @param Review|array $value
    * @return $this
    */
    public function setReviews(?Review $value)
    {
        $this->setProperty('reviews', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getReviews()
    {
       return $this->getProperty('reviews');
    }

    /**
    * The typical expected age range, e.g. '7-9', '11-'.
    * @param string|array $value
    * @return $this
    */
    public function typicalAgeRange(?string $value)
    {
        $this->setProperty('typicalAgeRange', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setTypicalAgeRange(?string $value)
    {
        $this->setProperty('typicalAgeRange', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getTypicalAgeRange()
    {
       return $this->getProperty('typicalAgeRange');
    }

    /**
    * Indicates an item or CreativeWork that is part of this item, or CreativeWork (in some sense).
    * @param CreativeWork|array $value
    * @return $this
    */
    public function hasPart(?CreativeWork $value)
    {
        $this->setProperty('hasPart', $value);
        return $this;
    }
   /**
    * @param CreativeWork|array $value
    * @return $this
    */
    public function setHasPart(?CreativeWork $value)
    {
        $this->setProperty('hasPart', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getHasPart()
    {
       return $this->getProperty('hasPart');
    }

    /**
    * Indicates the date on which the current structured data was generated / published. Typically used alongside <a class="localLink" href="http://schema.org/sdPublisher">sdPublisher</a>
    * @param |array $value
    * @return $this
    */
    public function sdDatePublished($value)
    {
        $this->setProperty('sdDatePublished', $value);
        return $this;
    }
   /**
    * @param |array $value
    * @return $this
    */
    public function setSdDatePublished($value)
    {
        $this->setProperty('sdDatePublished', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getSdDatePublished()
    {
       return $this->getProperty('sdDatePublished');
    }

    /**
    * The place and time the release was issued, expressed as a PublicationEvent.
    * @param PublicationEvent|array $value
    * @return $this
    */
    public function releasedEvent(?PublicationEvent $value)
    {
        $this->setProperty('releasedEvent', $value);
        return $this;
    }
   /**
    * @param PublicationEvent|array $value
    * @return $this
    */
    public function setReleasedEvent(?PublicationEvent $value)
    {
        $this->setProperty('releasedEvent', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getReleasedEvent()
    {
       return $this->getProperty('releasedEvent');
    }

    /**
    * The purpose of a work in the context of education; for example, 'assignment', 'group work'.
    * @param string|array $value
    * @return $this
    */
    public function educationalUse(?string $value)
    {
        $this->setProperty('educationalUse', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setEducationalUse(?string $value)
    {
        $this->setProperty('educationalUse', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getEducationalUse()
    {
       return $this->getProperty('educationalUse');
    }

    /**
    * The location depicted or described in the content. For example, the location in a photograph or painting.
    * @param Place|array $value
    * @return $this
    */
    public function contentLocation(?Place $value)
    {
        $this->setProperty('contentLocation', $value);
        return $this;
    }
   /**
    * @param Place|array $value
    * @return $this
    */
    public function setContentLocation(?Place $value)
    {
        $this->setProperty('contentLocation', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getContentLocation()
    {
       return $this->getProperty('contentLocation');
    }

    /**
    * Indicates (by URL or string) a particular version of a schema used in some CreativeWork. For example, a document could declare a schemaVersion using an URL such as http://schema.org/version/2.0/ if precise indication of schema version was required by some application.
    * @param string|string|array $value
    * @return $this
    */
    public function schemaVersion($value)
    {
        $this->setProperty('schemaVersion', $value);
        return $this;
    }
   /**
    * @param string|string|array $value
    * @return $this
    */
    public function setSchemaVersion($value)
    {
        $this->setProperty('schemaVersion', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getSchemaVersion()
    {
       return $this->getProperty('schemaVersion');
    }

    /**
    * Content features of the resource, such as accessible media, alternatives and supported enhancements for accessibility (<a href="http://www.w3.org/wiki/WebSchemas/Accessibility">WebSchemas wiki lists possible values</a>).
    * @param string|array $value
    * @return $this
    */
    public function accessibilityFeature(?string $value)
    {
        $this->setProperty('accessibilityFeature', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setAccessibilityFeature(?string $value)
    {
        $this->setProperty('accessibilityFeature', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAccessibilityFeature()
    {
       return $this->getProperty('accessibilityFeature');
    }

    /**
    * The overall rating, based on a collection of reviews or ratings, of the item.
    * @param AggregateRating|array $value
    * @return $this
    */
    public function aggregateRating(?AggregateRating $value)
    {
        $this->setProperty('aggregateRating', $value);
        return $this;
    }
   /**
    * @param AggregateRating|array $value
    * @return $this
    */
    public function setAggregateRating(?AggregateRating $value)
    {
        $this->setProperty('aggregateRating', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAggregateRating()
    {
       return $this->getProperty('aggregateRating');
    }

    /**
    * A secondary title of the CreativeWork.
    * @param string|array $value
    * @return $this
    */
    public function alternativeHeadline(?string $value)
    {
        $this->setProperty('alternativeHeadline', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setAlternativeHeadline(?string $value)
    {
        $this->setProperty('alternativeHeadline', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAlternativeHeadline()
    {
       return $this->getProperty('alternativeHeadline');
    }

    /**
    * The location where the CreativeWork was created, which may not be the same as the location depicted in the CreativeWork.
    * @param Place|array $value
    * @return $this
    */
    public function locationCreated(?Place $value)
    {
        $this->setProperty('locationCreated', $value);
        return $this;
    }
   /**
    * @param Place|array $value
    * @return $this
    */
    public function setLocationCreated(?Place $value)
    {
        $this->setProperty('locationCreated', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getLocationCreated()
    {
       return $this->getProperty('locationCreated');
    }

    /**
    * A list of single or combined accessModes that are sufficient to understand all the intellectual content of a resource. Expected values include:  auditory, tactile, textual, visual.
    * @param ItemList|array $value
    * @return $this
    */
    public function accessModeSufficient(?ItemList $value)
    {
        $this->setProperty('accessModeSufficient', $value);
        return $this;
    }
   /**
    * @param ItemList|array $value
    * @return $this
    */
    public function setAccessModeSufficient(?ItemList $value)
    {
        $this->setProperty('accessModeSufficient', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAccessModeSufficient()
    {
       return $this->getProperty('accessModeSufficient');
    }

    /**
    * The temporalCoverage of a CreativeWork indicates the period that the content applies to, i.e. that it describes, either as a DateTime or as a textual string indicating a time period in <a href="https://en.wikipedia.org/wiki/ISO_8601#Time_intervals">ISO 8601 time interval format</a>. In
      the case of a Dataset it will typically indicate the relevant time period in a precise notation (e.g. for a 2011 census dataset, the year 2011 would be written "2011/2012"). Other forms of content e.g. ScholarlyArticle, Book, TVSeries or TVEpisode may indicate their temporalCoverage in broader terms - textually or via well-known URL.
      Written works such as books may sometimes have precise temporal coverage too, e.g. a work set in 1939 - 1945 can be indicated in ISO 8601 interval format format via "1939/1945".<br/><br/>

Open-ended date ranges can be written with ".." in place of the end date. For example, "2015-11/.." indicates a range beginning in November 2015 and with no specified final date. This is tentative and might be updated in future when ISO 8601 is officially updated.
    * @param string|string|array $value
    * @return $this
    */
    public function temporalCoverage($value)
    {
        $this->setProperty('temporalCoverage', $value);
        return $this;
    }
   /**
    * @param string|string|array $value
    * @return $this
    */
    public function setTemporalCoverage($value)
    {
        $this->setProperty('temporalCoverage', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getTemporalCoverage()
    {
       return $this->getProperty('temporalCoverage');
    }

    /**
    * Specifies the Person that is legally accountable for the CreativeWork.
    * @param Person|array $value
    * @return $this
    */
    public function accountablePerson(?Person $value)
    {
        $this->setProperty('accountablePerson', $value);
        return $this;
    }
   /**
    * @param Person|array $value
    * @return $this
    */
    public function setAccountablePerson(?Person $value)
    {
        $this->setProperty('accountablePerson', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAccountablePerson()
    {
       return $this->getProperty('accountablePerson');
    }

    /**
    * Indicates the party responsible for generating and publishing the current structured data markup, typically in cases where the structured data is derived automatically from existing published content but published on a different site. For example, student projects and open data initiatives often re-publish existing content with more explicitly structured metadata. The
<a class="localLink" href="http://schema.org/sdPublisher">sdPublisher</a> property helps make such practices more explicit.
    * @param Person|Organization|array $value
    * @return $this
    */
    public function sdPublisher($value)
    {
        $this->setProperty('sdPublisher', $value);
        return $this;
    }
   /**
    * @param Person|Organization|array $value
    * @return $this
    */
    public function setSdPublisher($value)
    {
        $this->setProperty('sdPublisher', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getSdPublisher()
    {
       return $this->getProperty('sdPublisher');
    }

    /**
    * The spatialCoverage of a CreativeWork indicates the place(s) which are the focus of the content. It is a subproperty of
      contentLocation intended primarily for more technical and detailed materials. For example with a Dataset, it indicates
      areas that the dataset describes: a dataset of New York weather would have spatialCoverage which was the place: the state of New York.
    * @param Place|array $value
    * @return $this
    */
    public function spatialCoverage(?Place $value)
    {
        $this->setProperty('spatialCoverage', $value);
        return $this;
    }
   /**
    * @param Place|array $value
    * @return $this
    */
    public function setSpatialCoverage(?Place $value)
    {
        $this->setProperty('spatialCoverage', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getSpatialCoverage()
    {
       return $this->getProperty('spatialCoverage');
    }

    /**
    * An offer to provide this item&#x2014;for example, an offer to sell a product, rent the DVD of a movie, perform a service, or give away tickets to an event.
    * @param Offer|array $value
    * @return $this
    */
    public function offers(?Offer $value)
    {
        $this->setProperty('offers', $value);
        return $this;
    }
   /**
    * @param Offer|array $value
    * @return $this
    */
    public function setOffers(?Offer $value)
    {
        $this->setProperty('offers', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getOffers()
    {
       return $this->getProperty('offers');
    }

    /**
    * Specifies the Person who edited the CreativeWork.
    * @param Person|array $value
    * @return $this
    */
    public function editor(?Person $value)
    {
        $this->setProperty('editor', $value);
        return $this;
    }
   /**
    * @param Person|array $value
    * @return $this
    */
    public function setEditor(?Person $value)
    {
        $this->setProperty('editor', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getEditor()
    {
       return $this->getProperty('editor');
    }

    /**
    * A link to the page containing the comments of the CreativeWork.
    * @param string|array $value
    * @return $this
    */
    public function discussionUrl(?string $value)
    {
        $this->setProperty('discussionUrl', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setDiscussionUrl(?string $value)
    {
        $this->setProperty('discussionUrl', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getDiscussionUrl()
    {
       return $this->getProperty('discussionUrl');
    }

    /**
    * Example/instance/realization/derivation of the concept of this creative work. eg. The paperback edition, first edition, or eBook.
    * @param CreativeWork|array $value
    * @return $this
    */
    public function workExample(?CreativeWork $value)
    {
        $this->setProperty('workExample', $value);
        return $this;
    }
   /**
    * @param CreativeWork|array $value
    * @return $this
    */
    public function setWorkExample(?CreativeWork $value)
    {
        $this->setProperty('workExample', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getWorkExample()
    {
       return $this->getProperty('workExample');
    }

    /**
    * An award won by or for this item.
    * @param string|array $value
    * @return $this
    */
    public function award(?string $value)
    {
        $this->setProperty('award', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setAward(?string $value)
    {
        $this->setProperty('award', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAward()
    {
       return $this->getProperty('award');
    }

    /**
    * A license document that applies to this structured data, typically indicated by URL.
    * @param CreativeWork|string|array $value
    * @return $this
    */
    public function sdLicense($value)
    {
        $this->setProperty('sdLicense', $value);
        return $this;
    }
   /**
    * @param CreativeWork|string|array $value
    * @return $this
    */
    public function setSdLicense($value)
    {
        $this->setProperty('sdLicense', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getSdLicense()
    {
       return $this->getProperty('sdLicense');
    }

    /**
    * The party holding the legal copyright to the CreativeWork.
    * @param Person|Organization|array $value
    * @return $this
    */
    public function copyrightHolder($value)
    {
        $this->setProperty('copyrightHolder', $value);
        return $this;
    }
   /**
    * @param Person|Organization|array $value
    * @return $this
    */
    public function setCopyrightHolder($value)
    {
        $this->setProperty('copyrightHolder', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getCopyrightHolder()
    {
       return $this->getProperty('copyrightHolder');
    }

    /**
    * A characteristic of the described resource that is physiologically dangerous to some users. Related to WCAG 2.0 guideline 2.3 (<a href="http://www.w3.org/wiki/WebSchemas/Accessibility">WebSchemas wiki lists possible values</a>).
    * @param string|array $value
    * @return $this
    */
    public function accessibilityHazard(?string $value)
    {
        $this->setProperty('accessibilityHazard', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setAccessibilityHazard(?string $value)
    {
        $this->setProperty('accessibilityHazard', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAccessibilityHazard()
    {
       return $this->getProperty('accessibilityHazard');
    }

    /**
    * The year during which the claimed copyright for the CreativeWork was first asserted.
    * @param |array $value
    * @return $this
    */
    public function copyrightYear($value)
    {
        $this->setProperty('copyrightYear', $value);
        return $this;
    }
   /**
    * @param |array $value
    * @return $this
    */
    public function setCopyrightYear($value)
    {
        $this->setProperty('copyrightYear', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getCopyrightYear()
    {
       return $this->getProperty('copyrightYear');
    }

    /**
    * The publishing division which published the comic.
    * @param Organization|array $value
    * @return $this
    */
    public function publisherImprint(?Organization $value)
    {
        $this->setProperty('publisherImprint', $value);
        return $this;
    }
   /**
    * @param Organization|array $value
    * @return $this
    */
    public function setPublisherImprint(?Organization $value)
    {
        $this->setProperty('publisherImprint', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getPublisherImprint()
    {
       return $this->getProperty('publisherImprint');
    }

    /**
    * The Event where the CreativeWork was recorded. The CreativeWork may capture all or part of the event.
    * @param Event|array $value
    * @return $this
    */
    public function recordedAt(?Event $value)
    {
        $this->setProperty('recordedAt', $value);
        return $this;
    }
   /**
    * @param Event|array $value
    * @return $this
    */
    public function setRecordedAt(?Event $value)
    {
        $this->setProperty('recordedAt', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getRecordedAt()
    {
       return $this->getProperty('recordedAt');
    }

    /**
    * The "spatial" property can be used in cases when more specific properties
(e.g. <a class="localLink" href="http://schema.org/locationCreated">locationCreated</a>, <a class="localLink" href="http://schema.org/spatialCoverage">spatialCoverage</a>, <a class="localLink" href="http://schema.org/contentLocation">contentLocation</a>) are not known to be appropriate.
    * @param Place|array $value
    * @return $this
    */
    public function spatial(?Place $value)
    {
        $this->setProperty('spatial', $value);
        return $this;
    }
   /**
    * @param Place|array $value
    * @return $this
    */
    public function setSpatial(?Place $value)
    {
        $this->setProperty('spatial', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getSpatial()
    {
       return $this->getProperty('spatial');
    }

    /**
    * The number of comments this CreativeWork (e.g. Article, Question or Answer) has received. This is most applicable to works published in Web sites with commenting system; additional comments may exist elsewhere.
    * @param int|array $value
    * @return $this
    */
    public function commentCount(?int $value)
    {
        $this->setProperty('commentCount', $value);
        return $this;
    }
   /**
    * @param int|array $value
    * @return $this
    */
    public function setCommentCount(?int $value)
    {
        $this->setProperty('commentCount', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getCommentCount()
    {
       return $this->getProperty('commentCount');
    }

    /**
    * Media type, typically MIME format (see <a href="http://www.iana.org/assignments/media-types/media-types.xhtml">IANA site</a>) of the content e.g. application/zip of a SoftwareApplication binary. In cases where a CreativeWork has several media type representations, 'encoding' can be used to indicate each MediaObject alongside particular fileFormat information. Unregistered or niche file formats can be indicated instead via the most appropriate URL, e.g. defining Web page or a Wikipedia entry.
    * @param string|string|array $value
    * @return $this
    */
    public function fileFormat($value)
    {
        $this->setProperty('fileFormat', $value);
        return $this;
    }
   /**
    * @param string|string|array $value
    * @return $this
    */
    public function setFileFormat($value)
    {
        $this->setProperty('fileFormat', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getFileFormat()
    {
       return $this->getProperty('fileFormat');
    }

    /**
    * The language of the content or performance or used in an action. Please use one of the language codes from the <a href="http://tools.ietf.org/html/bcp47">IETF BCP 47 standard</a>. See also <a class="localLink" href="http://schema.org/availableLanguage">availableLanguage</a>.
    * @param Language|string|array $value
    * @return $this
    */
    public function inLanguage($value)
    {
        $this->setProperty('inLanguage', $value);
        return $this;
    }
   /**
    * @param Language|string|array $value
    * @return $this
    */
    public function setInLanguage($value)
    {
        $this->setProperty('inLanguage', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getInLanguage()
    {
       return $this->getProperty('inLanguage');
    }

    /**
    * The "temporal" property can be used in cases where more specific properties
(e.g. <a class="localLink" href="http://schema.org/temporalCoverage">temporalCoverage</a>, <a class="localLink" href="http://schema.org/dateCreated">dateCreated</a>, <a class="localLink" href="http://schema.org/dateModified">dateModified</a>, <a class="localLink" href="http://schema.org/datePublished">datePublished</a>) are not known to be appropriate.
    * @param string|array $value
    * @return $this
    */
    public function temporal(?string $value)
    {
        $this->setProperty('temporal', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setTemporal(?string $value)
    {
        $this->setProperty('temporal', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getTemporal()
    {
       return $this->getProperty('temporal');
    }

    /**
    * A material that something is made from, e.g. leather, wool, cotton, paper.
    * @param string|string|Product|array $value
    * @return $this
    */
    public function material($value)
    {
        $this->setProperty('material', $value);
        return $this;
    }
   /**
    * @param string|string|Product|array $value
    * @return $this
    */
    public function setMaterial($value)
    {
        $this->setProperty('material', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getMaterial()
    {
       return $this->getProperty('material');
    }

    /**
    * Indicates that the resource is compatible with the referenced accessibility API (<a href="http://www.w3.org/wiki/WebSchemas/Accessibility">WebSchemas wiki lists possible values</a>).
    * @param string|array $value
    * @return $this
    */
    public function accessibilityAPI(?string $value)
    {
        $this->setProperty('accessibilityAPI', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setAccessibilityAPI(?string $value)
    {
        $this->setProperty('accessibilityAPI', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAccessibilityAPI()
    {
       return $this->getProperty('accessibilityAPI');
    }

    /**
    * The number of interactions for the CreativeWork using the WebSite or SoftwareApplication. The most specific child type of InteractionCounter should be used.
    * @param InteractionCounter|array $value
    * @return $this
    */
    public function interactionStatistic(?InteractionCounter $value)
    {
        $this->setProperty('interactionStatistic', $value);
        return $this;
    }
   /**
    * @param InteractionCounter|array $value
    * @return $this
    */
    public function setInteractionStatistic(?InteractionCounter $value)
    {
        $this->setProperty('interactionStatistic', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getInteractionStatistic()
    {
       return $this->getProperty('interactionStatistic');
    }

    /**
    * Official rating of a piece of content&#x2014;for example,'MPAA PG-13'.
    * @param Rating|string|array $value
    * @return $this
    */
    public function contentRating($value)
    {
        $this->setProperty('contentRating', $value);
        return $this;
    }
   /**
    * @param Rating|string|array $value
    * @return $this
    */
    public function setContentRating($value)
    {
        $this->setProperty('contentRating', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getContentRating()
    {
       return $this->getProperty('contentRating');
    }

    /**
    * The predominant type or kind characterizing the learning resource. For example, 'presentation', 'handout'.
    * @param string|array $value
    * @return $this
    */
    public function learningResourceType(?string $value)
    {
        $this->setProperty('learningResourceType', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setLearningResourceType(?string $value)
    {
        $this->setProperty('learningResourceType', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getLearningResourceType()
    {
       return $this->getProperty('learningResourceType');
    }

    /**
    * The human sensory perceptual system or cognitive faculty through which a person may process or perceive information. Expected values include: auditory, tactile, textual, visual, colorDependent, chartOnVisual, chemOnVisual, diagramOnVisual, mathOnVisual, musicOnVisual, textOnVisual.
    * @param string|array $value
    * @return $this
    */
    public function accessMode(?string $value)
    {
        $this->setProperty('accessMode', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setAccessMode(?string $value)
    {
        $this->setProperty('accessMode', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAccessMode()
    {
       return $this->getProperty('accessMode');
    }

    /**
    * Indicates whether this content is family friendly.
    * @param bool|array $value
    * @return $this
    */
    public function isFamilyFriendly(?bool $value)
    {
        $this->setProperty('isFamilyFriendly', $value);
        return $this;
    }
   /**
    * @param bool|array $value
    * @return $this
    */
    public function setIsFamilyFriendly(?bool $value)
    {
        $this->setProperty('isFamilyFriendly', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getIsFamilyFriendly()
    {
       return $this->getProperty('isFamilyFriendly');
    }

    /**
    * A creative work that this work is an example/instance/realization/derivation of.
    * @param CreativeWork|array $value
    * @return $this
    */
    public function exampleOfWork(?CreativeWork $value)
    {
        $this->setProperty('exampleOfWork', $value);
        return $this;
    }
   /**
    * @param CreativeWork|array $value
    * @return $this
    */
    public function setExampleOfWork(?CreativeWork $value)
    {
        $this->setProperty('exampleOfWork', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getExampleOfWork()
    {
       return $this->getProperty('exampleOfWork');
    }

    /**
    * The version of the CreativeWork embodied by a specified resource.
    * @param string|array $value
    * @return $this
    */
    public function version(?string $value)
    {
        $this->setProperty('version', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setVersion(?string $value)
    {
        $this->setProperty('version', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getVersion()
    {
       return $this->getProperty('version');
    }

    /**
    * The date on which the CreativeWork was most recently modified or when the item's entry was modified within a DataFeed.
    * @param |array $value
    * @return $this
    */
    public function dateModified($value)
    {
        $this->setProperty('dateModified', $value);
        return $this;
    }
   /**
    * @param |array $value
    * @return $this
    */
    public function setDateModified($value)
    {
        $this->setProperty('dateModified', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getDateModified()
    {
       return $this->getProperty('dateModified');
    }

    /**
    * Keywords or tags used to describe this content. Multiple entries in a keywords list are typically delimited by commas.
    * @param string|array $value
    * @return $this
    */
    public function keywords(?string $value)
    {
        $this->setProperty('keywords', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setKeywords(?string $value)
    {
        $this->setProperty('keywords', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getKeywords()
    {
       return $this->getProperty('keywords');
    }

    /**
    * Genre of the creative work, broadcast channel or group.
    * @param string|string|array $value
    * @return $this
    */
    public function genre($value)
    {
        $this->setProperty('genre', $value);
        return $this;
    }
   /**
    * @param string|string|array $value
    * @return $this
    */
    public function setGenre($value)
    {
        $this->setProperty('genre', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getGenre()
    {
       return $this->getProperty('genre');
    }

    /**
    * Indicates the primary entity described in some page or other CreativeWork.
    * @param Thing|array $value
    * @return $this
    */
    public function mainEntity(?Thing $value)
    {
        $this->setProperty('mainEntity', $value);
        return $this;
    }
   /**
    * @param Thing|array $value
    * @return $this
    */
    public function setMainEntity(?Thing $value)
    {
        $this->setProperty('mainEntity', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getMainEntity()
    {
       return $this->getProperty('mainEntity');
    }

    /**
    * The author of this content or rating. Please note that author is special in that HTML 5 provides a special mechanism for indicating authorship via the rel tag. That is equivalent to this and may be used interchangeably.
    * @param Person|Organization|array $value
    * @return $this
    */
    public function author($value)
    {
        $this->setProperty('author', $value);
        return $this;
    }
   /**
    * @param Person|Organization|array $value
    * @return $this
    */
    public function setAuthor($value)
    {
        $this->setProperty('author', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAuthor()
    {
       return $this->getProperty('author');
    }

    /**
    * Awards won by or for this item.
    * @param string|array $value
    * @return $this
    */
    public function awards(?string $value)
    {
        $this->setProperty('awards', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setAwards(?string $value)
    {
        $this->setProperty('awards', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAwards()
    {
       return $this->getProperty('awards');
    }

    /**
    * A resource that was used in the creation of this resource. This term can be repeated for multiple sources. For example, http://example.com/great-multiplication-intro.html.
    * @param Product|CreativeWork|string|array $value
    * @return $this
    */
    public function isBasedOnUrl($value)
    {
        $this->setProperty('isBasedOnUrl', $value);
        return $this;
    }
   /**
    * @param Product|CreativeWork|string|array $value
    * @return $this
    */
    public function setIsBasedOnUrl($value)
    {
        $this->setProperty('isBasedOnUrl', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getIsBasedOnUrl()
    {
       return $this->getProperty('isBasedOnUrl');
    }

    /**
    * Approximate or typical time it takes to work with or through this learning resource for the typical intended target audience, e.g. 'PT30M', 'PT1H25M'.
    * @param Duration|array $value
    * @return $this
    */
    public function timeRequired(?Duration $value)
    {
        $this->setProperty('timeRequired', $value);
        return $this;
    }
   /**
    * @param Duration|array $value
    * @return $this
    */
    public function setTimeRequired(?Duration $value)
    {
        $this->setProperty('timeRequired', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getTimeRequired()
    {
       return $this->getProperty('timeRequired');
    }

    /**
    * Organization or person who adapts a creative work to different languages, regional differences and technical requirements of a target market, or that translates during some event.
    * @param Person|Organization|array $value
    * @return $this
    */
    public function translator($value)
    {
        $this->setProperty('translator', $value);
        return $this;
    }
   /**
    * @param Person|Organization|array $value
    * @return $this
    */
    public function setTranslator($value)
    {
        $this->setProperty('translator', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getTranslator()
    {
       return $this->getProperty('translator');
    }

    /**
    * The status of a creative work in terms of its stage in a lifecycle. Example terms include Incomplete, Draft, Published, Obsolete. Some organizations define a set of terms for the stages of their publication lifecycle.
    * @param DefinedTerm|string|array $value
    * @return $this
    */
    public function creativeWorkStatus($value)
    {
        $this->setProperty('creativeWorkStatus', $value);
        return $this;
    }
   /**
    * @param DefinedTerm|string|array $value
    * @return $this
    */
    public function setCreativeWorkStatus($value)
    {
        $this->setProperty('creativeWorkStatus', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getCreativeWorkStatus()
    {
       return $this->getProperty('creativeWorkStatus');
    }

    /**
    * Indicates an item or CreativeWork that this item, or CreativeWork (in some sense), is part of.
    * @param CreativeWork|array $value
    * @return $this
    */
    public function isPartOf(?CreativeWork $value)
    {
        $this->setProperty('isPartOf', $value);
        return $this;
    }
   /**
    * @param CreativeWork|array $value
    * @return $this
    */
    public function setIsPartOf(?CreativeWork $value)
    {
        $this->setProperty('isPartOf', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getIsPartOf()
    {
       return $this->getProperty('isPartOf');
    }

    /**
    * A thumbnail image relevant to the Thing.
    * @param string|array $value
    * @return $this
    */
    public function thumbnailUrl(?string $value)
    {
        $this->setProperty('thumbnailUrl', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setThumbnailUrl(?string $value)
    {
        $this->setProperty('thumbnailUrl', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getThumbnailUrl()
    {
       return $this->getProperty('thumbnailUrl');
    }

    /**
    * Comments, typically from users.
    * @param Comment|array $value
    * @return $this
    */
    public function comment(?Comment $value)
    {
        $this->setProperty('comment', $value);
        return $this;
    }
   /**
    * @param Comment|array $value
    * @return $this
    */
    public function setComment(?Comment $value)
    {
        $this->setProperty('comment', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getComment()
    {
       return $this->getProperty('comment');
    }

    /**
    * Media type typically expressed using a MIME format (see <a href="http://www.iana.org/assignments/media-types/media-types.xhtml">IANA site</a> and <a href="https://developer.mozilla.org/en-US/docs/Web/HTTP/Basics_of_HTTP/MIME_types">MDN reference</a>) e.g. application/zip for a SoftwareApplication binary, audio/mpeg for .mp3 etc.).<br/><br/>

In cases where a <a class="localLink" href="http://schema.org/CreativeWork">CreativeWork</a> has several media type representations, <a class="localLink" href="http://schema.org/encoding">encoding</a> can be used to indicate each <a class="localLink" href="http://schema.org/MediaObject">MediaObject</a> alongside particular <a class="localLink" href="http://schema.org/encodingFormat">encodingFormat</a> information.<br/><br/>

Unregistered or niche encoding and file formats can be indicated instead via the most appropriate URL, e.g. defining Web page or a Wikipedia/Wikidata entry.
    * @param string|string|array $value
    * @return $this
    */
    public function encodingFormat($value)
    {
        $this->setProperty('encodingFormat', $value);
        return $this;
    }
   /**
    * @param string|string|array $value
    * @return $this
    */
    public function setEncodingFormat($value)
    {
        $this->setProperty('encodingFormat', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getEncodingFormat()
    {
       return $this->getProperty('encodingFormat');
    }

    /**
    * A review of the item.
    * @param Review|array $value
    * @return $this
    */
    public function review(?Review $value)
    {
        $this->setProperty('review', $value);
        return $this;
    }
   /**
    * @param Review|array $value
    * @return $this
    */
    public function setReview(?Review $value)
    {
        $this->setProperty('review', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getReview()
    {
       return $this->getProperty('review');
    }

    /**
    * A license document that applies to this content, typically indicated by URL.
    * @param CreativeWork|string|array $value
    * @return $this
    */
    public function license($value)
    {
        $this->setProperty('license', $value);
        return $this;
    }
   /**
    * @param CreativeWork|string|array $value
    * @return $this
    */
    public function setLicense($value)
    {
        $this->setProperty('license', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getLicense()
    {
       return $this->getProperty('license');
    }

    /**
    * Identifies input methods that are sufficient to fully control the described resource (<a href="http://www.w3.org/wiki/WebSchemas/Accessibility">WebSchemas wiki lists possible values</a>).
    * @param string|array $value
    * @return $this
    */
    public function accessibilityControl(?string $value)
    {
        $this->setProperty('accessibilityControl', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setAccessibilityControl(?string $value)
    {
        $this->setProperty('accessibilityControl', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAccessibilityControl()
    {
       return $this->getProperty('accessibilityControl');
    }

    /**
    * A media object that encodes this CreativeWork.
    * @param MediaObject|array $value
    * @return $this
    */
    public function encodings(?MediaObject $value)
    {
        $this->setProperty('encodings', $value);
        return $this;
    }
   /**
    * @param MediaObject|array $value
    * @return $this
    */
    public function setEncodings(?MediaObject $value)
    {
        $this->setProperty('encodings', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getEncodings()
    {
       return $this->getProperty('encodings');
    }

    /**
    * The creator/author of this CreativeWork. This is the same as the Author property for CreativeWork.
    * @param Organization|Person|array $value
    * @return $this
    */
    public function creator($value)
    {
        $this->setProperty('creator', $value);
        return $this;
    }
   /**
    * @param Organization|Person|array $value
    * @return $this
    */
    public function setCreator($value)
    {
        $this->setProperty('creator', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getCreator()
    {
       return $this->getProperty('creator');
    }

    /**
    * A resource from which this work is derived or from which it is a modification or adaption.
    * @param Product|CreativeWork|string|array $value
    * @return $this
    */
    public function isBasedOn($value)
    {
        $this->setProperty('isBasedOn', $value);
        return $this;
    }
   /**
    * @param Product|CreativeWork|string|array $value
    * @return $this
    */
    public function setIsBasedOn($value)
    {
        $this->setProperty('isBasedOn', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getIsBasedOn()
    {
       return $this->getProperty('isBasedOn');
    }

    /**
    * The publishingPrinciples property indicates (typically via <a class="localLink" href="http://schema.org/URL">URL</a>) a document describing the editorial principles of an <a class="localLink" href="http://schema.org/Organization">Organization</a> (or individual e.g. a <a class="localLink" href="http://schema.org/Person">Person</a> writing a blog) that relate to their activities as a publisher, e.g. ethics or diversity policies. When applied to a <a class="localLink" href="http://schema.org/CreativeWork">CreativeWork</a> (e.g. <a class="localLink" href="http://schema.org/NewsArticle">NewsArticle</a>) the principles are those of the party primarily responsible for the creation of the <a class="localLink" href="http://schema.org/CreativeWork">CreativeWork</a>.<br/><br/>

While such policies are most typically expressed in natural language, sometimes related information (e.g. indicating a <a class="localLink" href="http://schema.org/funder">funder</a>) can be expressed using schema.org terminology.
    * @param CreativeWork|string|array $value
    * @return $this
    */
    public function publishingPrinciples($value)
    {
        $this->setProperty('publishingPrinciples', $value);
        return $this;
    }
   /**
    * @param CreativeWork|string|array $value
    * @return $this
    */
    public function setPublishingPrinciples($value)
    {
        $this->setProperty('publishingPrinciples', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getPublishingPrinciples()
    {
       return $this->getProperty('publishingPrinciples');
    }

    /**
    * A person or organization that supports a thing through a pledge, promise, or financial contribution. e.g. a sponsor of a Medical Study or a corporate sponsor of an event.
    * @param Person|Organization|array $value
    * @return $this
    */
    public function sponsor($value)
    {
        $this->setProperty('sponsor', $value);
        return $this;
    }
   /**
    * @param Person|Organization|array $value
    * @return $this
    */
    public function setSponsor($value)
    {
        $this->setProperty('sponsor', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getSponsor()
    {
       return $this->getProperty('sponsor');
    }

    /**
    * The person or organization who produced the work (e.g. music album, movie, tv/radio series etc.).
    * @param Person|Organization|array $value
    * @return $this
    */
    public function producer($value)
    {
        $this->setProperty('producer', $value);
        return $this;
    }
   /**
    * @param Person|Organization|array $value
    * @return $this
    */
    public function setProducer($value)
    {
        $this->setProperty('producer', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getProducer()
    {
       return $this->getProperty('producer');
    }

    /**
    * Indicates a correction to a <a class="localLink" href="http://schema.org/CreativeWork">CreativeWork</a>, either via a <a class="localLink" href="http://schema.org/CorrectionComment">CorrectionComment</a>, textually or in another document.
    * @param string|string|CorrectionComment|array $value
    * @return $this
    */
    public function correction($value)
    {
        $this->setProperty('correction', $value);
        return $this;
    }
   /**
    * @param string|string|CorrectionComment|array $value
    * @return $this
    */
    public function setCorrection($value)
    {
        $this->setProperty('correction', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getCorrection()
    {
       return $this->getProperty('correction');
    }

    /**
    * Indicates that the CreativeWork contains a reference to, but is not necessarily about a concept.
    * @param Thing|array $value
    * @return $this
    */
    public function mentions(?Thing $value)
    {
        $this->setProperty('mentions', $value);
        return $this;
    }
   /**
    * @param Thing|array $value
    * @return $this
    */
    public function setMentions(?Thing $value)
    {
        $this->setProperty('mentions', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getMentions()
    {
       return $this->getProperty('mentions');
    }

    /**
    * A work that is a translation of the content of this work. e.g. 西遊記 has an English workTranslation “Journey to the West”,a German workTranslation “Monkeys Pilgerfahrt” and a Vietnamese  translation Tây du ký bình khảo.
    * @param CreativeWork|array $value
    * @return $this
    */
    public function workTranslation(?CreativeWork $value)
    {
        $this->setProperty('workTranslation', $value);
        return $this;
    }
   /**
    * @param CreativeWork|array $value
    * @return $this
    */
    public function setWorkTranslation(?CreativeWork $value)
    {
        $this->setProperty('workTranslation', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getWorkTranslation()
    {
       return $this->getProperty('workTranslation');
    }

    /**
    * The specific time described by a creative work, for works (e.g. articles, video objects etc.) that emphasise a particular moment within an Event.
    * @param |array $value
    * @return $this
    */
    public function contentReferenceTime($value)
    {
        $this->setProperty('contentReferenceTime', $value);
        return $this;
    }
   /**
    * @param |array $value
    * @return $this
    */
    public function setContentReferenceTime($value)
    {
        $this->setProperty('contentReferenceTime', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getContentReferenceTime()
    {
       return $this->getProperty('contentReferenceTime');
    }

    /**
    * The date on which the CreativeWork was created or the item was added to a DataFeed.
    * @param |array $value
    * @return $this
    */
    public function dateCreated($value)
    {
        $this->setProperty('dateCreated', $value);
        return $this;
    }
   /**
    * @param |array $value
    * @return $this
    */
    public function setDateCreated($value)
    {
        $this->setProperty('dateCreated', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getDateCreated()
    {
       return $this->getProperty('dateCreated');
    }

    /**
    * A human-readable summary of specific accessibility features or deficiencies, consistent with the other accessibility metadata but expressing subtleties such as "short descriptions are present but long descriptions will be needed for non-visual users" or "short descriptions are present and no long descriptions are needed."
    * @param string|array $value
    * @return $this
    */
    public function accessibilitySummary(?string $value)
    {
        $this->setProperty('accessibilitySummary', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setAccessibilitySummary(?string $value)
    {
        $this->setProperty('accessibilitySummary', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAccessibilitySummary()
    {
       return $this->getProperty('accessibilitySummary');
    }

    /**
    * Date of first broadcast/publication.
    * @param |array $value
    * @return $this
    */
    public function datePublished($value)
    {
        $this->setProperty('datePublished', $value);
        return $this;
    }
   /**
    * @param |array $value
    * @return $this
    */
    public function setDatePublished($value)
    {
        $this->setProperty('datePublished', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getDatePublished()
    {
       return $this->getProperty('datePublished');
    }

    /**
    * A flag to signal that the item, event, or place is accessible for free.
    * @param bool|array $value
    * @return $this
    */
    public function isAccessibleForFree(?bool $value)
    {
        $this->setProperty('isAccessibleForFree', $value);
        return $this;
    }
   /**
    * @param bool|array $value
    * @return $this
    */
    public function setIsAccessibleForFree(?bool $value)
    {
        $this->setProperty('isAccessibleForFree', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getIsAccessibleForFree()
    {
       return $this->getProperty('isAccessibleForFree');
    }

    /**
    * Headline of the article.
    * @param string|array $value
    * @return $this
    */
    public function headline(?string $value)
    {
        $this->setProperty('headline', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setHeadline(?string $value)
    {
        $this->setProperty('headline', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getHeadline()
    {
       return $this->getProperty('headline');
    }

    /**
    * The work that this work has been translated from. e.g. 物种起源 is a translationOf “On the Origin of Species”
    * @param CreativeWork|array $value
    * @return $this
    */
    public function translationOfWork(?CreativeWork $value)
    {
        $this->setProperty('translationOfWork', $value);
        return $this;
    }
   /**
    * @param CreativeWork|array $value
    * @return $this
    */
    public function setTranslationOfWork(?CreativeWork $value)
    {
        $this->setProperty('translationOfWork', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getTranslationOfWork()
    {
       return $this->getProperty('translationOfWork');
    }

    /**
    * Conditions that affect the availability of, or method(s) of access to, an item. Typically used for real world items such as an <a class="localLink" href="http://schema.org/ArchiveComponent">ArchiveComponent</a> held by an <a class="localLink" href="http://schema.org/ArchiveOrganization">ArchiveOrganization</a>. This property is not suitable for use as a general Web access control mechanism. It is expressed only in natural language.<br/><br/>

For example "Available by appointment from the Reading Room" or "Accessible only from logged-in accounts ".
    * @param string|array $value
    * @return $this
    */
    public function conditionsOfAccess(?string $value)
    {
        $this->setProperty('conditionsOfAccess', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setConditionsOfAccess(?string $value)
    {
        $this->setProperty('conditionsOfAccess', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getConditionsOfAccess()
    {
       return $this->getProperty('conditionsOfAccess');
    }

    /**
    * A citation or reference to another creative work, such as another publication, web page, scholarly article, etc.
    * @param string|CreativeWork|array $value
    * @return $this
    */
    public function citation($value)
    {
        $this->setProperty('citation', $value);
        return $this;
    }
   /**
    * @param string|CreativeWork|array $value
    * @return $this
    */
    public function setCitation($value)
    {
        $this->setProperty('citation', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getCitation()
    {
       return $this->getProperty('citation');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\CreativeWork','Thing\\CreativeWork');

