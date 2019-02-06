<?php

declare (strict_types=1);

namespace Sohophp\SchemaOrg\Thing;

use Sohophp\SchemaOrg\Thing;
use Sohophp\SchemaOrg\Thing\Intangible\AlignmentObject;
use Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject\AudioObject;
use Sohophp\SchemaOrg\Thing\Intangible\Audience;
use Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject\VideoObject;
use Sohophp\SchemaOrg\Thing\Event\PublicationEvent;
use Sohophp\SchemaOrg\Thing\CreativeWork\Review;
use Sohophp\SchemaOrg\Thing\Place;
use Sohophp\SchemaOrg\Thing\Intangible\Rating\AggregateRating;
use Sohophp\SchemaOrg\Thing\Intangible\Offer;
use Sohophp\SchemaOrg\Thing\Event;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\InteractionCounter;
use Sohophp\SchemaOrg\Thing\Intangible\Rating;
use Sohophp\SchemaOrg\Thing\Product;
use Sohophp\SchemaOrg\Thing\Intangible\Quantity\Duration;
use Sohophp\SchemaOrg\Thing\CreativeWork\Comment;
use Sohophp\SchemaOrg\Thing\Intangible\Language;
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

     public function about(?Thing $value):self
     {
        $this->setProperty("about",$value);
        return $this;
     }

     
     /**
     * A human-readable summary of specific accessibility features or deficiencies, consistent with the other accessibility metadata but expressing subtleties such as "short descriptions are present but long descriptions will be needed for non-visual users" or "short descriptions are present and no long descriptions are needed."
     * @param string $value
     * @return $this
     */

     public function accessibilitySummary(?string $value):self
     {
        $this->setProperty("accessibilitySummary",$value);
        return $this;
     }

     
     /**
     * An alignment to an established educational framework.
     * @param AlignmentObject $value
     * @return $this
     */

     public function educationalAlignment(?AlignmentObject $value):self
     {
        $this->setProperty("educationalAlignment",$value);
        return $this;
     }

     
     /**
     * A media object that encodes this CreativeWork. This property is a synonym for encoding.
     * @param MediaObject $value
     * @return $this
     */

     public function associatedMedia(?MediaObject $value):self
     {
        $this->setProperty("associatedMedia",$value);
        return $this;
     }

     
     /**
     * A person or organization that supports (sponsors) something through some kind of financial contribution.
     * @param Organization|Person $value
     * @return $this
     */

     public function funder( $value):self
     {
        $this->setProperty("funder",$value);
        return $this;
     }

     
     /**
     * The position of an item in a series or sequence of items.
     * @param string|int $value
     * @return $this
     */

     public function position( $value):self
     {
        $this->setProperty("position",$value);
        return $this;
     }

     
     /**
     * A person or organization that supports a thing through a pledge, promise, or financial contribution. e.g. a sponsor of a Medical Study or a corporate sponsor of an event.
     * @param Person|Organization $value
     * @return $this
     */

     public function sponsor( $value):self
     {
        $this->setProperty("sponsor",$value);
        return $this;
     }

     
     /**
     * An embedded audio object.
     * @param AudioObject $value
     * @return $this
     */

     public function audio(?AudioObject $value):self
     {
        $this->setProperty("audio",$value);
        return $this;
     }

     
     /**
     * Example/instance/realization/derivation of the concept of this creative work. eg. The paperback edition, first edition, or eBook.
     * @param CreativeWork $value
     * @return $this
     */

     public function workExample(?CreativeWork $value):self
     {
        $this->setProperty("workExample",$value);
        return $this;
     }

     
     /**
     * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller.
     * @param Organization|Person $value
     * @return $this
     */

     public function provider( $value):self
     {
        $this->setProperty("provider",$value);
        return $this;
     }

     
     /**
     * A media object that encodes this CreativeWork. This property is a synonym for associatedMedia.
     * @param MediaObject $value
     * @return $this
     */

     public function encoding(?MediaObject $value):self
     {
        $this->setProperty("encoding",$value);
        return $this;
     }

     
     /**
     * The predominant mode of learning supported by the learning resource. Acceptable values are 'active', 'expositive', or 'mixed'.
     * @param string $value
     * @return $this
     */

     public function interactivityType(?string $value):self
     {
        $this->setProperty("interactivityType",$value);
        return $this;
     }

     
     /**
     * Fictional person connected with a creative work.
     * @param Person $value
     * @return $this
     */

     public function character(?Person $value):self
     {
        $this->setProperty("character",$value);
        return $this;
     }

     
     /**
     * An intended audience, i.e. a group for whom something was created.
     * @param Audience $value
     * @return $this
     */

     public function audience(?Audience $value):self
     {
        $this->setProperty("audience",$value);
        return $this;
     }

     
     /**
     * The Organization on whose behalf the creator was working.
     * @param Organization $value
     * @return $this
     */

     public function sourceOrganization(?Organization $value):self
     {
        $this->setProperty("sourceOrganization",$value);
        return $this;
     }

     
     /**
     * Indicates an item or CreativeWork that this item, or CreativeWork (in some sense), is part of.
     * @param CreativeWork $value
     * @return $this
     */

     public function isPartOf(?CreativeWork $value):self
     {
        $this->setProperty("isPartOf",$value);
        return $this;
     }

     
     /**
     * An embedded video object.
     * @param VideoObject $value
     * @return $this
     */

     public function video(?VideoObject $value):self
     {
        $this->setProperty("video",$value);
        return $this;
     }

     
     /**
     * A publication event associated with the item.
     * @param PublicationEvent $value
     * @return $this
     */

     public function publication(?PublicationEvent $value):self
     {
        $this->setProperty("publication",$value);
        return $this;
     }

     
     /**
     * The textual content of this CreativeWork.
     * @param string $value
     * @return $this
     */

     public function text(?string $value):self
     {
        $this->setProperty("text",$value);
        return $this;
     }

     
     /**
     * Date the content expires and is no longer useful or available. For example a <a class="localLink" href="http://schema.org/VideoObject">VideoObject</a> or <a class="localLink" href="http://schema.org/NewsArticle">NewsArticle</a> whose availability or relevance is time-limited, or a <a class="localLink" href="http://schema.org/ClaimReview">ClaimReview</a> fact check whose publisher wants to indicate that it may no longer be relevant (or helpful to highlight) after some date.
     * @param  $value
     * @return $this
     */

     public function expires( $value):self
     {
        $this->setProperty("expires",$value);
        return $this;
     }

     
     /**
     * A secondary contributor to the CreativeWork or Event.
     * @param Organization|Person $value
     * @return $this
     */

     public function contributor( $value):self
     {
        $this->setProperty("contributor",$value);
        return $this;
     }

     
     /**
     * The publisher of the creative work.
     * @param Organization|Person $value
     * @return $this
     */

     public function publisher( $value):self
     {
        $this->setProperty("publisher",$value);
        return $this;
     }

     
     /**
     * Review of the item.
     * @param Review $value
     * @return $this
     */

     public function reviews(?Review $value):self
     {
        $this->setProperty("reviews",$value);
        return $this;
     }

     
     /**
     * The typical expected age range, e.g. '7-9', '11-'.
     * @param string $value
     * @return $this
     */

     public function typicalAgeRange(?string $value):self
     {
        $this->setProperty("typicalAgeRange",$value);
        return $this;
     }

     
     /**
     * The place and time the release was issued, expressed as a PublicationEvent.
     * @param PublicationEvent $value
     * @return $this
     */

     public function releasedEvent(?PublicationEvent $value):self
     {
        $this->setProperty("releasedEvent",$value);
        return $this;
     }

     
     /**
     * The purpose of a work in the context of education; for example, 'assignment', 'group work'.
     * @param string $value
     * @return $this
     */

     public function educationalUse(?string $value):self
     {
        $this->setProperty("educationalUse",$value);
        return $this;
     }

     
     /**
     * The location depicted or described in the content. For example, the location in a photograph or painting.
     * @param Place $value
     * @return $this
     */

     public function contentLocation(?Place $value):self
     {
        $this->setProperty("contentLocation",$value);
        return $this;
     }

     
     /**
     * Indicates (by URL or string) a particular version of a schema used in some CreativeWork. For example, a document could declare a schemaVersion using an URL such as http://schema.org/version/2.0/ if precise indication of schema version was required by some application.
     * @param string|string $value
     * @return $this
     */

     public function schemaVersion( $value):self
     {
        $this->setProperty("schemaVersion",$value);
        return $this;
     }

     
     /**
     * Content features of the resource, such as accessible media, alternatives and supported enhancements for accessibility (<a href="http://www.w3.org/wiki/WebSchemas/Accessibility">WebSchemas wiki lists possible values</a>).
     * @param string $value
     * @return $this
     */

     public function accessibilityFeature(?string $value):self
     {
        $this->setProperty("accessibilityFeature",$value);
        return $this;
     }

     
     /**
     * The overall rating, based on a collection of reviews or ratings, of the item.
     * @param AggregateRating $value
     * @return $this
     */

     public function aggregateRating(?AggregateRating $value):self
     {
        $this->setProperty("aggregateRating",$value);
        return $this;
     }

     
     /**
     * The location where the CreativeWork was created, which may not be the same as the location depicted in the CreativeWork.
     * @param Place $value
     * @return $this
     */

     public function locationCreated(?Place $value):self
     {
        $this->setProperty("locationCreated",$value);
        return $this;
     }

     
     /**
     * A list of single or combined accessModes that are sufficient to understand all the intellectual content of a resource. Expected values include:  auditory, tactile, textual, visual.
     * @param string $value
     * @return $this
     */

     public function accessModeSufficient(?string $value):self
     {
        $this->setProperty("accessModeSufficient",$value);
        return $this;
     }

     
     /**
     * The temporalCoverage of a CreativeWork indicates the period that the content applies to, i.e. that it describes, either as a DateTime or as a textual string indicating a time period in <a href="https://en.wikipedia.org/wiki/ISO_8601#Time_intervals">ISO 8601 time interval format</a>. In
      the case of a Dataset it will typically indicate the relevant time period in a precise notation (e.g. for a 2011 census dataset, the year 2011 would be written "2011/2012"). Other forms of content e.g. ScholarlyArticle, Book, TVSeries or TVEpisode may indicate their temporalCoverage in broader terms - textually or via well-known URL.
      Written works such as books may sometimes have precise temporal coverage too, e.g. a work set in 1939 - 1945 can be indicated in ISO 8601 interval format format via "1939/1945".
     * @param string|string $value
     * @return $this
     */

     public function temporalCoverage( $value):self
     {
        $this->setProperty("temporalCoverage",$value);
        return $this;
     }

     
     /**
     * Specifies the Person that is legally accountable for the CreativeWork.
     * @param Person $value
     * @return $this
     */

     public function accountablePerson(?Person $value):self
     {
        $this->setProperty("accountablePerson",$value);
        return $this;
     }

     
     /**
     * The spatialCoverage of a CreativeWork indicates the place(s) which are the focus of the content. It is a subproperty of
      contentLocation intended primarily for more technical and detailed materials. For example with a Dataset, it indicates
      areas that the dataset describes: a dataset of New York weather would have spatialCoverage which was the place: the state of New York.
     * @param Place $value
     * @return $this
     */

     public function spatialCoverage(?Place $value):self
     {
        $this->setProperty("spatialCoverage",$value);
        return $this;
     }

     
     /**
     * An offer to provide this item&#x2014;for example, an offer to sell a product, rent the DVD of a movie, perform a service, or give away tickets to an event.
     * @param Offer $value
     * @return $this
     */

     public function offers(?Offer $value):self
     {
        $this->setProperty("offers",$value);
        return $this;
     }

     
     /**
     * Specifies the Person who edited the CreativeWork.
     * @param Person $value
     * @return $this
     */

     public function editor(?Person $value):self
     {
        $this->setProperty("editor",$value);
        return $this;
     }

     
     /**
     * A link to the page containing the comments of the CreativeWork.
     * @param string $value
     * @return $this
     */

     public function discussionUrl(?string $value):self
     {
        $this->setProperty("discussionUrl",$value);
        return $this;
     }

     
     /**
     * An award won by or for this item.
     * @param string $value
     * @return $this
     */

     public function award(?string $value):self
     {
        $this->setProperty("award",$value);
        return $this;
     }

     
     /**
     * The party holding the legal copyright to the CreativeWork.
     * @param Organization|Person $value
     * @return $this
     */

     public function copyrightHolder( $value):self
     {
        $this->setProperty("copyrightHolder",$value);
        return $this;
     }

     
     /**
     * A characteristic of the described resource that is physiologically dangerous to some users. Related to WCAG 2.0 guideline 2.3 (<a href="http://www.w3.org/wiki/WebSchemas/Accessibility">WebSchemas wiki lists possible values</a>).
     * @param string $value
     * @return $this
     */

     public function accessibilityHazard(?string $value):self
     {
        $this->setProperty("accessibilityHazard",$value);
        return $this;
     }

     
     /**
     * The year during which the claimed copyright for the CreativeWork was first asserted.
     * @param  $value
     * @return $this
     */

     public function copyrightYear( $value):self
     {
        $this->setProperty("copyrightYear",$value);
        return $this;
     }

     
     /**
     * Awards won by or for this item.
     * @param string $value
     * @return $this
     */

     public function awards(?string $value):self
     {
        $this->setProperty("awards",$value);
        return $this;
     }

     
     /**
     * The Event where the CreativeWork was recorded. The CreativeWork may capture all or part of the event.
     * @param Event $value
     * @return $this
     */

     public function recordedAt(?Event $value):self
     {
        $this->setProperty("recordedAt",$value);
        return $this;
     }

     
     /**
     * The number of comments this CreativeWork (e.g. Article, Question or Answer) has received. This is most applicable to works published in Web sites with commenting system; additional comments may exist elsewhere.
     * @param int $value
     * @return $this
     */

     public function commentCount(?int $value):self
     {
        $this->setProperty("commentCount",$value);
        return $this;
     }

     
     /**
     * Media type, typically MIME format (see <a href="http://www.iana.org/assignments/media-types/media-types.xhtml">IANA site</a>) of the content e.g. application/zip of a SoftwareApplication binary. In cases where a CreativeWork has several media type representations, 'encoding' can be used to indicate each MediaObject alongside particular fileFormat information. Unregistered or niche file formats can be indicated instead via the most appropriate URL, e.g. defining Web page or a Wikipedia entry.
     * @param string|string $value
     * @return $this
     */

     public function fileFormat( $value):self
     {
        $this->setProperty("fileFormat",$value);
        return $this;
     }

     
     /**
     * Indicates that the resource is compatible with the referenced accessibility API (<a href="http://www.w3.org/wiki/WebSchemas/Accessibility">WebSchemas wiki lists possible values</a>).
     * @param string $value
     * @return $this
     */

     public function accessibilityAPI(?string $value):self
     {
        $this->setProperty("accessibilityAPI",$value);
        return $this;
     }

     
     /**
     * The number of interactions for the CreativeWork using the WebSite or SoftwareApplication. The most specific child type of InteractionCounter should be used.
     * @param InteractionCounter $value
     * @return $this
     */

     public function interactionStatistic(?InteractionCounter $value):self
     {
        $this->setProperty("interactionStatistic",$value);
        return $this;
     }

     
     /**
     * Official rating of a piece of content&#x2014;for example,'MPAA PG-13'.
     * @param Rating|string $value
     * @return $this
     */

     public function contentRating( $value):self
     {
        $this->setProperty("contentRating",$value);
        return $this;
     }

     
     /**
     * The predominant type or kind characterizing the learning resource. For example, 'presentation', 'handout'.
     * @param string $value
     * @return $this
     */

     public function learningResourceType(?string $value):self
     {
        $this->setProperty("learningResourceType",$value);
        return $this;
     }

     
     /**
     * The human sensory perceptual system or cognitive faculty through which a person may process or perceive information. Expected values include: auditory, tactile, textual, visual, colorDependent, chartOnVisual, chemOnVisual, diagramOnVisual, mathOnVisual, musicOnVisual, textOnVisual.
     * @param string $value
     * @return $this
     */

     public function accessMode(?string $value):self
     {
        $this->setProperty("accessMode",$value);
        return $this;
     }

     
     /**
     * A material that something is made from, e.g. leather, wool, cotton, paper.
     * @param Product|string|string $value
     * @return $this
     */

     public function material( $value):self
     {
        $this->setProperty("material",$value);
        return $this;
     }

     
     /**
     * Indicates whether this content is family friendly.
     * @param bool $value
     * @return $this
     */

     public function isFamilyFriendly(?bool $value):self
     {
        $this->setProperty("isFamilyFriendly",$value);
        return $this;
     }

     
     /**
     * The version of the CreativeWork embodied by a specified resource.
     * @param string $value
     * @return $this
     */

     public function version(?string $value):self
     {
        $this->setProperty("version",$value);
        return $this;
     }

     
     /**
     * The date on which the CreativeWork was most recently modified or when the item's entry was modified within a DataFeed.
     * @param  $value
     * @return $this
     */

     public function dateModified( $value):self
     {
        $this->setProperty("dateModified",$value);
        return $this;
     }

     
     /**
     * Keywords or tags used to describe this content. Multiple entries in a keywords list are typically delimited by commas.
     * @param string $value
     * @return $this
     */

     public function keywords(?string $value):self
     {
        $this->setProperty("keywords",$value);
        return $this;
     }

     
     /**
     * A creative work that this work is an example/instance/realization/derivation of.
     * @param CreativeWork $value
     * @return $this
     */

     public function exampleOfWork(?CreativeWork $value):self
     {
        $this->setProperty("exampleOfWork",$value);
        return $this;
     }

     
     /**
     * Genre of the creative work, broadcast channel or group.
     * @param string|string $value
     * @return $this
     */

     public function genre( $value):self
     {
        $this->setProperty("genre",$value);
        return $this;
     }

     
     /**
     * Indicates the primary entity described in some page or other CreativeWork.
     * @param Thing $value
     * @return $this
     */

     public function mainEntity(?Thing $value):self
     {
        $this->setProperty("mainEntity",$value);
        return $this;
     }

     
     /**
     * The author of this content or rating. Please note that author is special in that HTML 5 provides a special mechanism for indicating authorship via the rel tag. That is equivalent to this and may be used interchangeably.
     * @param Organization|Person $value
     * @return $this
     */

     public function author( $value):self
     {
        $this->setProperty("author",$value);
        return $this;
     }

     
     /**
     * A media object that encodes this CreativeWork.
     * @param MediaObject $value
     * @return $this
     */

     public function encodings(?MediaObject $value):self
     {
        $this->setProperty("encodings",$value);
        return $this;
     }

     
     /**
     * A resource that was used in the creation of this resource. This term can be repeated for multiple sources. For example, http://example.com/great-multiplication-intro.html.
     * @param Product|CreativeWork|string $value
     * @return $this
     */

     public function isBasedOnUrl( $value):self
     {
        $this->setProperty("isBasedOnUrl",$value);
        return $this;
     }

     
     /**
     * A secondary title of the CreativeWork.
     * @param string $value
     * @return $this
     */

     public function alternativeHeadline(?string $value):self
     {
        $this->setProperty("alternativeHeadline",$value);
        return $this;
     }

     
     /**
     * Approximate or typical time it takes to work with or through this learning resource for the typical intended target audience, e.g. 'P30M', 'P1H25M'.
     * @param Duration $value
     * @return $this
     */

     public function timeRequired(?Duration $value):self
     {
        $this->setProperty("timeRequired",$value);
        return $this;
     }

     
     /**
     * Organization or person who adapts a creative work to different languages, regional differences and technical requirements of a target market, or that translates during some event.
     * @param Organization|Person $value
     * @return $this
     */

     public function translator( $value):self
     {
        $this->setProperty("translator",$value);
        return $this;
     }

     
     /**
     * A thumbnail image relevant to the Thing.
     * @param string $value
     * @return $this
     */

     public function thumbnailUrl(?string $value):self
     {
        $this->setProperty("thumbnailUrl",$value);
        return $this;
     }

     
     /**
     * Indicates an item or CreativeWork that is part of this item, or CreativeWork (in some sense).
     * @param CreativeWork $value
     * @return $this
     */

     public function hasPart(?CreativeWork $value):self
     {
        $this->setProperty("hasPart",$value);
        return $this;
     }

     
     /**
     * Comments, typically from users.
     * @param Comment $value
     * @return $this
     */

     public function comment(?Comment $value):self
     {
        $this->setProperty("comment",$value);
        return $this;
     }

     
     /**
     * The language of the content or performance or used in an action. Please use one of the language codes from the <a href="http://tools.ietf.org/html/bcp47">IETF BCP 47 standard</a>. See also <a class="localLink" href="http://schema.org/availableLanguage">availableLanguage</a>.
     * @param string|Language $value
     * @return $this
     */

     public function inLanguage( $value):self
     {
        $this->setProperty("inLanguage",$value);
        return $this;
     }

     
     /**
     * Media type typically expressed using a MIME format (see <a href="http://www.iana.org/assignments/media-types/media-types.xhtml">IANA site</a> and <a href="https://developer.mozilla.org/en-US/docs/Web/HTTP/Basics_of_HTTP/MIME_types">MDN reference</a>) e.g. application/zip for a SoftwareApplication binary, audio/mpeg for .mp3 etc.).<br/><br/>

In cases where a <a class="localLink" href="http://schema.org/CreativeWork">CreativeWork</a> has several media type representations, <a class="localLink" href="http://schema.org/encoding">encoding</a> can be used to indicate each <a class="localLink" href="http://schema.org/MediaObject">MediaObject</a> alongside particular <a class="localLink" href="http://schema.org/encodingFormat">encodingFormat</a> information.<br/><br/>

Unregistered or niche encoding and file formats can be indicated instead via the most appropriate URL, e.g. defining Web page or a Wikipedia/Wikidata entry.
     * @param string|string $value
     * @return $this
     */

     public function encodingFormat( $value):self
     {
        $this->setProperty("encodingFormat",$value);
        return $this;
     }

     
     /**
     * A review of the item.
     * @param Review $value
     * @return $this
     */

     public function review(?Review $value):self
     {
        $this->setProperty("review",$value);
        return $this;
     }

     
     /**
     * A license document that applies to this content, typically indicated by URL.
     * @param string|CreativeWork $value
     * @return $this
     */

     public function license( $value):self
     {
        $this->setProperty("license",$value);
        return $this;
     }

     
     /**
     * Identifies input methods that are sufficient to fully control the described resource (<a href="http://www.w3.org/wiki/WebSchemas/Accessibility">WebSchemas wiki lists possible values</a>).
     * @param string $value
     * @return $this
     */

     public function accessibilityControl(?string $value):self
     {
        $this->setProperty("accessibilityControl",$value);
        return $this;
     }

     
     /**
     * A resource that was used in the creation of this resource. This term can be repeated for multiple sources. For example, http://example.com/great-multiplication-intro.html.
     * @param CreativeWork|Product|string $value
     * @return $this
     */

     public function isBasedOn( $value):self
     {
        $this->setProperty("isBasedOn",$value);
        return $this;
     }

     
     /**
     * The creator/author of this CreativeWork. This is the same as the Author property for CreativeWork.
     * @param Organization|Person $value
     * @return $this
     */

     public function creator( $value):self
     {
        $this->setProperty("creator",$value);
        return $this;
     }

     
     /**
     * The publishingPrinciples property indicates (typically via <a class="localLink" href="http://schema.org/URL">URL</a>) a document describing the editorial principles of an <a class="localLink" href="http://schema.org/Organization">Organization</a> (or individual e.g. a <a class="localLink" href="http://schema.org/Person">Person</a> writing a blog) that relate to their activities as a publisher, e.g. ethics or diversity policies. When applied to a <a class="localLink" href="http://schema.org/CreativeWork">CreativeWork</a> (e.g. <a class="localLink" href="http://schema.org/NewsArticle">NewsArticle</a>) the principles are those of the party primarily responsible for the creation of the <a class="localLink" href="http://schema.org/CreativeWork">CreativeWork</a>.<br/><br/>

While such policies are most typically expressed in natural language, sometimes related information (e.g. indicating a <a class="localLink" href="http://schema.org/funder">funder</a>) can be expressed using schema.org terminology.
     * @param string|CreativeWork $value
     * @return $this
     */

     public function publishingPrinciples( $value):self
     {
        $this->setProperty("publishingPrinciples",$value);
        return $this;
     }

     
     /**
     * The person or organization who produced the work (e.g. music album, movie, tv/radio series etc.).
     * @param Person|Organization $value
     * @return $this
     */

     public function producer( $value):self
     {
        $this->setProperty("producer",$value);
        return $this;
     }

     
     /**
     * Indicates that the CreativeWork contains a reference to, but is not necessarily about a concept.
     * @param Thing $value
     * @return $this
     */

     public function mentions(?Thing $value):self
     {
        $this->setProperty("mentions",$value);
        return $this;
     }

     
     /**
     * The date on which the CreativeWork was created or the item was added to a DataFeed.
     * @param  $value
     * @return $this
     */

     public function dateCreated( $value):self
     {
        $this->setProperty("dateCreated",$value);
        return $this;
     }

     
     /**
     * Date of first broadcast/publication.
     * @param  $value
     * @return $this
     */

     public function datePublished( $value):self
     {
        $this->setProperty("datePublished",$value);
        return $this;
     }

     
     /**
     * A flag to signal that the item, event, or place is accessible for free.
     * @param bool $value
     * @return $this
     */

     public function isAccessibleForFree(?bool $value):self
     {
        $this->setProperty("isAccessibleForFree",$value);
        return $this;
     }

     
     /**
     * Headline of the article.
     * @param string $value
     * @return $this
     */

     public function headline(?string $value):self
     {
        $this->setProperty("headline",$value);
        return $this;
     }

     
     /**
     * A citation or reference to another creative work, such as another publication, web page, scholarly article, etc.
     * @param string|CreativeWork $value
     * @return $this
     */

     public function citation( $value):self
     {
        $this->setProperty("citation",$value);
        return $this;
     }

     
}

