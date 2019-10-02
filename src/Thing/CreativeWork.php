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
*/
class CreativeWork extends Thing
{

    /**
    * The subject matter of the content.
    * @param Thing $value
    * @return $this
    */
    public function about(?Thing $value)
    {
        $this->setProperty('about', $value);
        return $this;
    }

    /**
    * A media object that encodes this CreativeWork. This property is a synonym for encoding.
    * @param MediaObject $value
    * @return $this
    */
    public function associatedMedia(?MediaObject $value)
    {
        $this->setProperty('associatedMedia', $value);
        return $this;
    }

    /**
    * A person or organization that supports (sponsors) something through some kind of financial contribution.
    * @param Organization|Person $value
    * @return $this
    */
    public function funder($value)
    {
        $this->setProperty('funder', $value);
        return $this;
    }

    /**
    * The position of an item in a series or sequence of items.
    * @param string|int $value
    * @return $this
    */
    public function position($value)
    {
        $this->setProperty('position', $value);
        return $this;
    }

    /**
    * An embedded audio object.
    * @param Clip|AudioObject $value
    * @return $this
    */
    public function audio($value)
    {
        $this->setProperty('audio', $value);
        return $this;
    }

    /**
    * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller.
    * @param Organization|Person $value
    * @return $this
    */
    public function provider($value)
    {
        $this->setProperty('provider', $value);
        return $this;
    }

    /**
    * A media object that encodes this CreativeWork. This property is a synonym for associatedMedia.
    * @param MediaObject $value
    * @return $this
    */
    public function encoding(?MediaObject $value)
    {
        $this->setProperty('encoding', $value);
        return $this;
    }

    /**
    * The predominant mode of learning supported by the learning resource. Acceptable values are 'active', 'expositive', or 'mixed'.
    * @param string $value
    * @return $this
    */
    public function interactivityType(?string $value)
    {
        $this->setProperty('interactivityType', $value);
        return $this;
    }

    /**
    * Fictional person connected with a creative work.
    * @param Person $value
    * @return $this
    */
    public function character(?Person $value)
    {
        $this->setProperty('character', $value);
        return $this;
    }

    /**
    * An intended audience, i.e. a group for whom something was created.
    * @param Audience $value
    * @return $this
    */
    public function audience(?Audience $value)
    {
        $this->setProperty('audience', $value);
        return $this;
    }

    /**
    * The Organization on whose behalf the creator was working.
    * @param Organization $value
    * @return $this
    */
    public function sourceOrganization(?Organization $value)
    {
        $this->setProperty('sourceOrganization', $value);
        return $this;
    }

    /**
    * The quantity of the materials being described or an expression of the physical space they occupy.
    * @param QuantitativeValue|string $value
    * @return $this
    */
    public function materialExtent($value)
    {
        $this->setProperty('materialExtent', $value);
        return $this;
    }

    /**
    * An embedded video object.
    * @param VideoObject|Clip $value
    * @return $this
    */
    public function video($value)
    {
        $this->setProperty('video', $value);
        return $this;
    }

    /**
    * The publisher of the creative work.
    * @param Person|Organization $value
    * @return $this
    */
    public function publisher($value)
    {
        $this->setProperty('publisher', $value);
        return $this;
    }

    /**
    * An alignment to an established educational framework.
    * @param AlignmentObject $value
    * @return $this
    */
    public function educationalAlignment(?AlignmentObject $value)
    {
        $this->setProperty('educationalAlignment', $value);
        return $this;
    }

    /**
    * A publication event associated with the item.
    * @param PublicationEvent $value
    * @return $this
    */
    public function publication(?PublicationEvent $value)
    {
        $this->setProperty('publication', $value);
        return $this;
    }

    /**
    * The textual content of this CreativeWork.
    * @param string $value
    * @return $this
    */
    public function text(?string $value)
    {
        $this->setProperty('text', $value);
        return $this;
    }

    /**
    * Date the content expires and is no longer useful or available. For example a <a class="localLink" href="http://schema.org/VideoObject">VideoObject</a> or <a class="localLink" href="http://schema.org/NewsArticle">NewsArticle</a> whose availability or relevance is time-limited, or a <a class="localLink" href="http://schema.org/ClaimReview">ClaimReview</a> fact check whose publisher wants to indicate that it may no longer be relevant (or helpful to highlight) after some date.
    * @param  $value
    * @return $this
    */
    public function expires($value)
    {
        $this->setProperty('expires', $value);
        return $this;
    }

    /**
    * A secondary contributor to the CreativeWork or Event.
    * @param Person|Organization $value
    * @return $this
    */
    public function contributor($value)
    {
        $this->setProperty('contributor', $value);
        return $this;
    }

    /**
    * Review of the item.
    * @param Review $value
    * @return $this
    */
    public function reviews(?Review $value)
    {
        $this->setProperty('reviews', $value);
        return $this;
    }

    /**
    * The typical expected age range, e.g. '7-9', '11-'.
    * @param string $value
    * @return $this
    */
    public function typicalAgeRange(?string $value)
    {
        $this->setProperty('typicalAgeRange', $value);
        return $this;
    }

    /**
    * Indicates an item or CreativeWork that is part of this item, or CreativeWork (in some sense).
    * @param CreativeWork $value
    * @return $this
    */
    public function hasPart(?CreativeWork $value)
    {
        $this->setProperty('hasPart', $value);
        return $this;
    }

    /**
    * Indicates the date on which the current structured data was generated / published. Typically used alongside <a class="localLink" href="http://schema.org/sdPublisher">sdPublisher</a>
    * @param  $value
    * @return $this
    */
    public function sdDatePublished($value)
    {
        $this->setProperty('sdDatePublished', $value);
        return $this;
    }

    /**
    * The place and time the release was issued, expressed as a PublicationEvent.
    * @param PublicationEvent $value
    * @return $this
    */
    public function releasedEvent(?PublicationEvent $value)
    {
        $this->setProperty('releasedEvent', $value);
        return $this;
    }

    /**
    * The purpose of a work in the context of education; for example, 'assignment', 'group work'.
    * @param string $value
    * @return $this
    */
    public function educationalUse(?string $value)
    {
        $this->setProperty('educationalUse', $value);
        return $this;
    }

    /**
    * The location depicted or described in the content. For example, the location in a photograph or painting.
    * @param Place $value
    * @return $this
    */
    public function contentLocation(?Place $value)
    {
        $this->setProperty('contentLocation', $value);
        return $this;
    }

    /**
    * Indicates (by URL or string) a particular version of a schema used in some CreativeWork. For example, a document could declare a schemaVersion using an URL such as http://schema.org/version/2.0/ if precise indication of schema version was required by some application.
    * @param string|string $value
    * @return $this
    */
    public function schemaVersion($value)
    {
        $this->setProperty('schemaVersion', $value);
        return $this;
    }

    /**
    * Content features of the resource, such as accessible media, alternatives and supported enhancements for accessibility (<a href="http://www.w3.org/wiki/WebSchemas/Accessibility">WebSchemas wiki lists possible values</a>).
    * @param string $value
    * @return $this
    */
    public function accessibilityFeature(?string $value)
    {
        $this->setProperty('accessibilityFeature', $value);
        return $this;
    }

    /**
    * The overall rating, based on a collection of reviews or ratings, of the item.
    * @param AggregateRating $value
    * @return $this
    */
    public function aggregateRating(?AggregateRating $value)
    {
        $this->setProperty('aggregateRating', $value);
        return $this;
    }

    /**
    * A secondary title of the CreativeWork.
    * @param string $value
    * @return $this
    */
    public function alternativeHeadline(?string $value)
    {
        $this->setProperty('alternativeHeadline', $value);
        return $this;
    }

    /**
    * The location where the CreativeWork was created, which may not be the same as the location depicted in the CreativeWork.
    * @param Place $value
    * @return $this
    */
    public function locationCreated(?Place $value)
    {
        $this->setProperty('locationCreated', $value);
        return $this;
    }

    /**
    * A list of single or combined accessModes that are sufficient to understand all the intellectual content of a resource. Expected values include:  auditory, tactile, textual, visual.
    * @param ItemList $value
    * @return $this
    */
    public function accessModeSufficient(?ItemList $value)
    {
        $this->setProperty('accessModeSufficient', $value);
        return $this;
    }

    /**
    * The temporalCoverage of a CreativeWork indicates the period that the content applies to, i.e. that it describes, either as a DateTime or as a textual string indicating a time period in <a href="https://en.wikipedia.org/wiki/ISO_8601#Time_intervals">ISO 8601 time interval format</a>. In
      the case of a Dataset it will typically indicate the relevant time period in a precise notation (e.g. for a 2011 census dataset, the year 2011 would be written "2011/2012"). Other forms of content e.g. ScholarlyArticle, Book, TVSeries or TVEpisode may indicate their temporalCoverage in broader terms - textually or via well-known URL.
      Written works such as books may sometimes have precise temporal coverage too, e.g. a work set in 1939 - 1945 can be indicated in ISO 8601 interval format format via "1939/1945".<br/><br/>

Open-ended date ranges can be written with ".." in place of the end date. For example, "2015-11/.." indicates a range beginning in November 2015 and with no specified final date. This is tentative and might be updated in future when ISO 8601 is officially updated.
    * @param string|string $value
    * @return $this
    */
    public function temporalCoverage($value)
    {
        $this->setProperty('temporalCoverage', $value);
        return $this;
    }

    /**
    * Specifies the Person that is legally accountable for the CreativeWork.
    * @param Person $value
    * @return $this
    */
    public function accountablePerson(?Person $value)
    {
        $this->setProperty('accountablePerson', $value);
        return $this;
    }

    /**
    * Indicates the party responsible for generating and publishing the current structured data markup, typically in cases where the structured data is derived automatically from existing published content but published on a different site. For example, student projects and open data initiatives often re-publish existing content with more explicitly structured metadata. The
<a class="localLink" href="http://schema.org/sdPublisher">sdPublisher</a> property helps make such practices more explicit.
    * @param Person|Organization $value
    * @return $this
    */
    public function sdPublisher($value)
    {
        $this->setProperty('sdPublisher', $value);
        return $this;
    }

    /**
    * The spatialCoverage of a CreativeWork indicates the place(s) which are the focus of the content. It is a subproperty of
      contentLocation intended primarily for more technical and detailed materials. For example with a Dataset, it indicates
      areas that the dataset describes: a dataset of New York weather would have spatialCoverage which was the place: the state of New York.
    * @param Place $value
    * @return $this
    */
    public function spatialCoverage(?Place $value)
    {
        $this->setProperty('spatialCoverage', $value);
        return $this;
    }

    /**
    * An offer to provide this item&#x2014;for example, an offer to sell a product, rent the DVD of a movie, perform a service, or give away tickets to an event.
    * @param Offer $value
    * @return $this
    */
    public function offers(?Offer $value)
    {
        $this->setProperty('offers', $value);
        return $this;
    }

    /**
    * Specifies the Person who edited the CreativeWork.
    * @param Person $value
    * @return $this
    */
    public function editor(?Person $value)
    {
        $this->setProperty('editor', $value);
        return $this;
    }

    /**
    * A link to the page containing the comments of the CreativeWork.
    * @param string $value
    * @return $this
    */
    public function discussionUrl(?string $value)
    {
        $this->setProperty('discussionUrl', $value);
        return $this;
    }

    /**
    * Example/instance/realization/derivation of the concept of this creative work. eg. The paperback edition, first edition, or eBook.
    * @param CreativeWork $value
    * @return $this
    */
    public function workExample(?CreativeWork $value)
    {
        $this->setProperty('workExample', $value);
        return $this;
    }

    /**
    * An award won by or for this item.
    * @param string $value
    * @return $this
    */
    public function award(?string $value)
    {
        $this->setProperty('award', $value);
        return $this;
    }

    /**
    * A license document that applies to this structured data, typically indicated by URL.
    * @param CreativeWork|string $value
    * @return $this
    */
    public function sdLicense($value)
    {
        $this->setProperty('sdLicense', $value);
        return $this;
    }

    /**
    * The party holding the legal copyright to the CreativeWork.
    * @param Person|Organization $value
    * @return $this
    */
    public function copyrightHolder($value)
    {
        $this->setProperty('copyrightHolder', $value);
        return $this;
    }

    /**
    * A characteristic of the described resource that is physiologically dangerous to some users. Related to WCAG 2.0 guideline 2.3 (<a href="http://www.w3.org/wiki/WebSchemas/Accessibility">WebSchemas wiki lists possible values</a>).
    * @param string $value
    * @return $this
    */
    public function accessibilityHazard(?string $value)
    {
        $this->setProperty('accessibilityHazard', $value);
        return $this;
    }

    /**
    * The year during which the claimed copyright for the CreativeWork was first asserted.
    * @param  $value
    * @return $this
    */
    public function copyrightYear($value)
    {
        $this->setProperty('copyrightYear', $value);
        return $this;
    }

    /**
    * The publishing division which published the comic.
    * @param Organization $value
    * @return $this
    */
    public function publisherImprint(?Organization $value)
    {
        $this->setProperty('publisherImprint', $value);
        return $this;
    }

    /**
    * The Event where the CreativeWork was recorded. The CreativeWork may capture all or part of the event.
    * @param Event $value
    * @return $this
    */
    public function recordedAt(?Event $value)
    {
        $this->setProperty('recordedAt', $value);
        return $this;
    }

    /**
    * The "spatial" property can be used in cases when more specific properties
(e.g. <a class="localLink" href="http://schema.org/locationCreated">locationCreated</a>, <a class="localLink" href="http://schema.org/spatialCoverage">spatialCoverage</a>, <a class="localLink" href="http://schema.org/contentLocation">contentLocation</a>) are not known to be appropriate.
    * @param Place $value
    * @return $this
    */
    public function spatial(?Place $value)
    {
        $this->setProperty('spatial', $value);
        return $this;
    }

    /**
    * The number of comments this CreativeWork (e.g. Article, Question or Answer) has received. This is most applicable to works published in Web sites with commenting system; additional comments may exist elsewhere.
    * @param int $value
    * @return $this
    */
    public function commentCount(?int $value)
    {
        $this->setProperty('commentCount', $value);
        return $this;
    }

    /**
    * Media type, typically MIME format (see <a href="http://www.iana.org/assignments/media-types/media-types.xhtml">IANA site</a>) of the content e.g. application/zip of a SoftwareApplication binary. In cases where a CreativeWork has several media type representations, 'encoding' can be used to indicate each MediaObject alongside particular fileFormat information. Unregistered or niche file formats can be indicated instead via the most appropriate URL, e.g. defining Web page or a Wikipedia entry.
    * @param string|string $value
    * @return $this
    */
    public function fileFormat($value)
    {
        $this->setProperty('fileFormat', $value);
        return $this;
    }

    /**
    * The language of the content or performance or used in an action. Please use one of the language codes from the <a href="http://tools.ietf.org/html/bcp47">IETF BCP 47 standard</a>. See also <a class="localLink" href="http://schema.org/availableLanguage">availableLanguage</a>.
    * @param Language|string $value
    * @return $this
    */
    public function inLanguage($value)
    {
        $this->setProperty('inLanguage', $value);
        return $this;
    }

    /**
    * The "temporal" property can be used in cases where more specific properties
(e.g. <a class="localLink" href="http://schema.org/temporalCoverage">temporalCoverage</a>, <a class="localLink" href="http://schema.org/dateCreated">dateCreated</a>, <a class="localLink" href="http://schema.org/dateModified">dateModified</a>, <a class="localLink" href="http://schema.org/datePublished">datePublished</a>) are not known to be appropriate.
    * @param string $value
    * @return $this
    */
    public function temporal(?string $value)
    {
        $this->setProperty('temporal', $value);
        return $this;
    }

    /**
    * A material that something is made from, e.g. leather, wool, cotton, paper.
    * @param string|string|Product $value
    * @return $this
    */
    public function material($value)
    {
        $this->setProperty('material', $value);
        return $this;
    }

    /**
    * Indicates that the resource is compatible with the referenced accessibility API (<a href="http://www.w3.org/wiki/WebSchemas/Accessibility">WebSchemas wiki lists possible values</a>).
    * @param string $value
    * @return $this
    */
    public function accessibilityAPI(?string $value)
    {
        $this->setProperty('accessibilityAPI', $value);
        return $this;
    }

    /**
    * The number of interactions for the CreativeWork using the WebSite or SoftwareApplication. The most specific child type of InteractionCounter should be used.
    * @param InteractionCounter $value
    * @return $this
    */
    public function interactionStatistic(?InteractionCounter $value)
    {
        $this->setProperty('interactionStatistic', $value);
        return $this;
    }

    /**
    * Official rating of a piece of content&#x2014;for example,'MPAA PG-13'.
    * @param Rating|string $value
    * @return $this
    */
    public function contentRating($value)
    {
        $this->setProperty('contentRating', $value);
        return $this;
    }

    /**
    * The predominant type or kind characterizing the learning resource. For example, 'presentation', 'handout'.
    * @param string $value
    * @return $this
    */
    public function learningResourceType(?string $value)
    {
        $this->setProperty('learningResourceType', $value);
        return $this;
    }

    /**
    * The human sensory perceptual system or cognitive faculty through which a person may process or perceive information. Expected values include: auditory, tactile, textual, visual, colorDependent, chartOnVisual, chemOnVisual, diagramOnVisual, mathOnVisual, musicOnVisual, textOnVisual.
    * @param string $value
    * @return $this
    */
    public function accessMode(?string $value)
    {
        $this->setProperty('accessMode', $value);
        return $this;
    }

    /**
    * Indicates whether this content is family friendly.
    * @param bool $value
    * @return $this
    */
    public function isFamilyFriendly(?bool $value)
    {
        $this->setProperty('isFamilyFriendly', $value);
        return $this;
    }

    /**
    * A creative work that this work is an example/instance/realization/derivation of.
    * @param CreativeWork $value
    * @return $this
    */
    public function exampleOfWork(?CreativeWork $value)
    {
        $this->setProperty('exampleOfWork', $value);
        return $this;
    }

    /**
    * The version of the CreativeWork embodied by a specified resource.
    * @param string $value
    * @return $this
    */
    public function version(?string $value)
    {
        $this->setProperty('version', $value);
        return $this;
    }

    /**
    * The date on which the CreativeWork was most recently modified or when the item's entry was modified within a DataFeed.
    * @param  $value
    * @return $this
    */
    public function dateModified($value)
    {
        $this->setProperty('dateModified', $value);
        return $this;
    }

    /**
    * Keywords or tags used to describe this content. Multiple entries in a keywords list are typically delimited by commas.
    * @param string $value
    * @return $this
    */
    public function keywords(?string $value)
    {
        $this->setProperty('keywords', $value);
        return $this;
    }

    /**
    * Genre of the creative work, broadcast channel or group.
    * @param string|string $value
    * @return $this
    */
    public function genre($value)
    {
        $this->setProperty('genre', $value);
        return $this;
    }

    /**
    * Indicates the primary entity described in some page or other CreativeWork.
    * @param Thing $value
    * @return $this
    */
    public function mainEntity(?Thing $value)
    {
        $this->setProperty('mainEntity', $value);
        return $this;
    }

    /**
    * The author of this content or rating. Please note that author is special in that HTML 5 provides a special mechanism for indicating authorship via the rel tag. That is equivalent to this and may be used interchangeably.
    * @param Person|Organization $value
    * @return $this
    */
    public function author($value)
    {
        $this->setProperty('author', $value);
        return $this;
    }

    /**
    * Awards won by or for this item.
    * @param string $value
    * @return $this
    */
    public function awards(?string $value)
    {
        $this->setProperty('awards', $value);
        return $this;
    }

    /**
    * A resource that was used in the creation of this resource. This term can be repeated for multiple sources. For example, http://example.com/great-multiplication-intro.html.
    * @param Product|CreativeWork|string $value
    * @return $this
    */
    public function isBasedOnUrl($value)
    {
        $this->setProperty('isBasedOnUrl', $value);
        return $this;
    }

    /**
    * Approximate or typical time it takes to work with or through this learning resource for the typical intended target audience, e.g. 'PT30M', 'PT1H25M'.
    * @param Duration $value
    * @return $this
    */
    public function timeRequired(?Duration $value)
    {
        $this->setProperty('timeRequired', $value);
        return $this;
    }

    /**
    * Organization or person who adapts a creative work to different languages, regional differences and technical requirements of a target market, or that translates during some event.
    * @param Person|Organization $value
    * @return $this
    */
    public function translator($value)
    {
        $this->setProperty('translator', $value);
        return $this;
    }

    /**
    * The status of a creative work in terms of its stage in a lifecycle. Example terms include Incomplete, Draft, Published, Obsolete. Some organizations define a set of terms for the stages of their publication lifecycle.
    * @param DefinedTerm|string $value
    * @return $this
    */
    public function creativeWorkStatus($value)
    {
        $this->setProperty('creativeWorkStatus', $value);
        return $this;
    }

    /**
    * Indicates an item or CreativeWork that this item, or CreativeWork (in some sense), is part of.
    * @param CreativeWork $value
    * @return $this
    */
    public function isPartOf(?CreativeWork $value)
    {
        $this->setProperty('isPartOf', $value);
        return $this;
    }

    /**
    * A thumbnail image relevant to the Thing.
    * @param string $value
    * @return $this
    */
    public function thumbnailUrl(?string $value)
    {
        $this->setProperty('thumbnailUrl', $value);
        return $this;
    }

    /**
    * Comments, typically from users.
    * @param Comment $value
    * @return $this
    */
    public function comment(?Comment $value)
    {
        $this->setProperty('comment', $value);
        return $this;
    }

    /**
    * Media type typically expressed using a MIME format (see <a href="http://www.iana.org/assignments/media-types/media-types.xhtml">IANA site</a> and <a href="https://developer.mozilla.org/en-US/docs/Web/HTTP/Basics_of_HTTP/MIME_types">MDN reference</a>) e.g. application/zip for a SoftwareApplication binary, audio/mpeg for .mp3 etc.).<br/><br/>

In cases where a <a class="localLink" href="http://schema.org/CreativeWork">CreativeWork</a> has several media type representations, <a class="localLink" href="http://schema.org/encoding">encoding</a> can be used to indicate each <a class="localLink" href="http://schema.org/MediaObject">MediaObject</a> alongside particular <a class="localLink" href="http://schema.org/encodingFormat">encodingFormat</a> information.<br/><br/>

Unregistered or niche encoding and file formats can be indicated instead via the most appropriate URL, e.g. defining Web page or a Wikipedia/Wikidata entry.
    * @param string|string $value
    * @return $this
    */
    public function encodingFormat($value)
    {
        $this->setProperty('encodingFormat', $value);
        return $this;
    }

    /**
    * A review of the item.
    * @param Review $value
    * @return $this
    */
    public function review(?Review $value)
    {
        $this->setProperty('review', $value);
        return $this;
    }

    /**
    * A license document that applies to this content, typically indicated by URL.
    * @param CreativeWork|string $value
    * @return $this
    */
    public function license($value)
    {
        $this->setProperty('license', $value);
        return $this;
    }

    /**
    * Identifies input methods that are sufficient to fully control the described resource (<a href="http://www.w3.org/wiki/WebSchemas/Accessibility">WebSchemas wiki lists possible values</a>).
    * @param string $value
    * @return $this
    */
    public function accessibilityControl(?string $value)
    {
        $this->setProperty('accessibilityControl', $value);
        return $this;
    }

    /**
    * A media object that encodes this CreativeWork.
    * @param MediaObject $value
    * @return $this
    */
    public function encodings(?MediaObject $value)
    {
        $this->setProperty('encodings', $value);
        return $this;
    }

    /**
    * The creator/author of this CreativeWork. This is the same as the Author property for CreativeWork.
    * @param Organization|Person $value
    * @return $this
    */
    public function creator($value)
    {
        $this->setProperty('creator', $value);
        return $this;
    }

    /**
    * A resource from which this work is derived or from which it is a modification or adaption.
    * @param Product|CreativeWork|string $value
    * @return $this
    */
    public function isBasedOn($value)
    {
        $this->setProperty('isBasedOn', $value);
        return $this;
    }

    /**
    * The publishingPrinciples property indicates (typically via <a class="localLink" href="http://schema.org/URL">URL</a>) a document describing the editorial principles of an <a class="localLink" href="http://schema.org/Organization">Organization</a> (or individual e.g. a <a class="localLink" href="http://schema.org/Person">Person</a> writing a blog) that relate to their activities as a publisher, e.g. ethics or diversity policies. When applied to a <a class="localLink" href="http://schema.org/CreativeWork">CreativeWork</a> (e.g. <a class="localLink" href="http://schema.org/NewsArticle">NewsArticle</a>) the principles are those of the party primarily responsible for the creation of the <a class="localLink" href="http://schema.org/CreativeWork">CreativeWork</a>.<br/><br/>

While such policies are most typically expressed in natural language, sometimes related information (e.g. indicating a <a class="localLink" href="http://schema.org/funder">funder</a>) can be expressed using schema.org terminology.
    * @param CreativeWork|string $value
    * @return $this
    */
    public function publishingPrinciples($value)
    {
        $this->setProperty('publishingPrinciples', $value);
        return $this;
    }

    /**
    * A person or organization that supports a thing through a pledge, promise, or financial contribution. e.g. a sponsor of a Medical Study or a corporate sponsor of an event.
    * @param Person|Organization $value
    * @return $this
    */
    public function sponsor($value)
    {
        $this->setProperty('sponsor', $value);
        return $this;
    }

    /**
    * The person or organization who produced the work (e.g. music album, movie, tv/radio series etc.).
    * @param Person|Organization $value
    * @return $this
    */
    public function producer($value)
    {
        $this->setProperty('producer', $value);
        return $this;
    }

    /**
    * Indicates a correction to a <a class="localLink" href="http://schema.org/CreativeWork">CreativeWork</a>, either via a <a class="localLink" href="http://schema.org/CorrectionComment">CorrectionComment</a>, textually or in another document.
    * @param string|string|CorrectionComment $value
    * @return $this
    */
    public function correction($value)
    {
        $this->setProperty('correction', $value);
        return $this;
    }

    /**
    * Indicates that the CreativeWork contains a reference to, but is not necessarily about a concept.
    * @param Thing $value
    * @return $this
    */
    public function mentions(?Thing $value)
    {
        $this->setProperty('mentions', $value);
        return $this;
    }

    /**
    * A work that is a translation of the content of this work. e.g. 西遊記 has an English workTranslation “Journey to the West”,a German workTranslation “Monkeys Pilgerfahrt” and a Vietnamese  translation Tây du ký bình khảo.
    * @param CreativeWork $value
    * @return $this
    */
    public function workTranslation(?CreativeWork $value)
    {
        $this->setProperty('workTranslation', $value);
        return $this;
    }

    /**
    * The specific time described by a creative work, for works (e.g. articles, video objects etc.) that emphasise a particular moment within an Event.
    * @param  $value
    * @return $this
    */
    public function contentReferenceTime($value)
    {
        $this->setProperty('contentReferenceTime', $value);
        return $this;
    }

    /**
    * The date on which the CreativeWork was created or the item was added to a DataFeed.
    * @param  $value
    * @return $this
    */
    public function dateCreated($value)
    {
        $this->setProperty('dateCreated', $value);
        return $this;
    }

    /**
    * A human-readable summary of specific accessibility features or deficiencies, consistent with the other accessibility metadata but expressing subtleties such as "short descriptions are present but long descriptions will be needed for non-visual users" or "short descriptions are present and no long descriptions are needed."
    * @param string $value
    * @return $this
    */
    public function accessibilitySummary(?string $value)
    {
        $this->setProperty('accessibilitySummary', $value);
        return $this;
    }

    /**
    * Date of first broadcast/publication.
    * @param  $value
    * @return $this
    */
    public function datePublished($value)
    {
        $this->setProperty('datePublished', $value);
        return $this;
    }

    /**
    * A flag to signal that the item, event, or place is accessible for free.
    * @param bool $value
    * @return $this
    */
    public function isAccessibleForFree(?bool $value)
    {
        $this->setProperty('isAccessibleForFree', $value);
        return $this;
    }

    /**
    * Headline of the article.
    * @param string $value
    * @return $this
    */
    public function headline(?string $value)
    {
        $this->setProperty('headline', $value);
        return $this;
    }

    /**
    * The work that this work has been translated from. e.g. 物种起源 is a translationOf “On the Origin of Species”
    * @param CreativeWork $value
    * @return $this
    */
    public function translationOfWork(?CreativeWork $value)
    {
        $this->setProperty('translationOfWork', $value);
        return $this;
    }

    /**
    * Conditions that affect the availability of, or method(s) of access to, an item. Typically used for real world items such as an <a class="localLink" href="http://schema.org/ArchiveComponent">ArchiveComponent</a> held by an <a class="localLink" href="http://schema.org/ArchiveOrganization">ArchiveOrganization</a>. This property is not suitable for use as a general Web access control mechanism. It is expressed only in natural language.<br/><br/>

For example "Available by appointment from the Reading Room" or "Accessible only from logged-in accounts ".
    * @param string $value
    * @return $this
    */
    public function conditionsOfAccess(?string $value)
    {
        $this->setProperty('conditionsOfAccess', $value);
        return $this;
    }

    /**
    * A citation or reference to another creative work, such as another publication, web page, scholarly article, etc.
    * @param string|CreativeWork $value
    * @return $this
    */
    public function citation($value)
    {
        $this->setProperty('citation', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\CreativeWork','Thing\\CreativeWork');

