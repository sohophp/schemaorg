<?php
namespace Sohophp\SchemaOrg\Thing;

use Sohophp\SchemaOrg\Thing;

/**
* The most generic kind of creative work, including books, movies, photographs,
 * software programs, etc.
* @see schema:CreativeWork
* @package Sohophp\SchemaOrg\Thing
*/
class CreativeWork extends Thing
{


    /**
        * The publishing division which published the comic.
        * @param array|string|mixed $value
    * @return $this
    */
    public function publisherImprint($value)
    {
        $this->setProperty('publisherImprint', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setPublisherImprint($value)
    {
        $this->setProperty('publisherImprint', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPublisherImprint()
    {
       return $this->getProperty('publisherImprint');
    }


    /**
        * A person or organization that supports a thing through a pledge, promise, or
 * financial contribution. E.g. a sponsor of a Medical Study or a corporate
 * sponsor of an event.
        * @param array|string|mixed $value
    * @return $this
    */
    public function sponsor($value)
    {
        $this->setProperty('sponsor', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setSponsor($value)
    {
        $this->setProperty('sponsor', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSponsor()
    {
       return $this->getProperty('sponsor');
    }


    /**
        * The language of the content or performance or used in an action. Please use
 * one of the language codes from the [IETF BCP 47
 * standard](http://tools.ietf.org/html/bcp47). See also [[availableLanguage]].
        * @param array|string|mixed $value
    * @return $this
    */
    public function inLanguage($value)
    {
        $this->setProperty('inLanguage', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setInLanguage($value)
    {
        $this->setProperty('inLanguage', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getInLanguage()
    {
       return $this->getProperty('inLanguage');
    }


    /**
        * An offer to provide this item&#x2014;for example, an offer to sell a product,
 * rent the DVD of a movie, perform a service, or give away tickets to an event.
 * Use [[businessFunction]] to indicate the kind of transaction offered, i.e.
 * sell, lease, etc. This property can also be used to describe a [[Demand]].
 * While this property is listed as expected on a number of common types, it can
 * be used in others. In that case, using a second type, such as Product or a
 * subtype of Product, can clarify the nature of the offer.
        * @param array|string|mixed $value
    * @return $this
    */
    public function offers($value)
    {
        $this->setProperty('offers', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setOffers($value)
    {
        $this->setProperty('offers', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getOffers()
    {
       return $this->getProperty('offers');
    }


    /**
        * A list of single or combined accessModes that are sufficient to understand
 * all the intellectual content of a resource. Values should be drawn from the
 * [approved
 * vocabulary](https://www.w3.org/2021/a11y-discov-vocab/latest/#accessModeSufficient-vocabulary).
        * @param array|string|mixed $value
    * @return $this
    */
    public function accessModeSufficient($value)
    {
        $this->setProperty('accessModeSufficient', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setAccessModeSufficient($value)
    {
        $this->setProperty('accessModeSufficient', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAccessModeSufficient()
    {
       return $this->getProperty('accessModeSufficient');
    }


    /**
        * The "spatial" property can be used in cases when more specific properties
 * (e.g. [[locationCreated]], [[spatialCoverage]], [[contentLocation]]) are not
 * known to be appropriate.
        * @param array|string|mixed $value
    * @return $this
    */
    public function spatial($value)
    {
        $this->setProperty('spatial', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setSpatial($value)
    {
        $this->setProperty('spatial', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSpatial()
    {
       return $this->getProperty('spatial');
    }


    /**
        * A pattern that something has, for example 'polka dot', 'striped', 'Canadian
 * flag'. Values are typically expressed as text, although links to controlled
 * value schemes are also supported.
        * @param array|string|mixed $value
    * @return $this
    */
    public function pattern($value)
    {
        $this->setProperty('pattern', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setPattern($value)
    {
        $this->setProperty('pattern', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPattern()
    {
       return $this->getProperty('pattern');
    }


    /**
        * Keywords or tags used to describe some item. Multiple textual entries in a
 * keywords list are typically delimited by commas, or by repeating the
 * property.
        * @param array|string|mixed $value
    * @return $this
    */
    public function keywords($value)
    {
        $this->setProperty('keywords', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setKeywords($value)
    {
        $this->setProperty('keywords', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getKeywords()
    {
       return $this->getProperty('keywords');
    }


    /**
        * A secondary title of the CreativeWork.
        * @param array|string|mixed $value
    * @return $this
    */
    public function alternativeHeadline($value)
    {
        $this->setProperty('alternativeHeadline', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setAlternativeHeadline($value)
    {
        $this->setProperty('alternativeHeadline', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAlternativeHeadline()
    {
       return $this->getProperty('alternativeHeadline');
    }


    /**
        * Conditions that affect the availability of, or method(s) of access to, an
 * item. Typically used for real world items such as an [[ArchiveComponent]]
 * held by an [[ArchiveOrganization]]. This property is not suitable for use as
 * a general Web access control mechanism. It is expressed only in natural
 * language.
 * 
 * For example "Available by appointment from the Reading Room" or "Accessible
 * only from logged-in accounts ".
        * @param array|string|mixed $value
    * @return $this
    */
    public function conditionsOfAccess($value)
    {
        $this->setProperty('conditionsOfAccess', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setConditionsOfAccess($value)
    {
        $this->setProperty('conditionsOfAccess', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getConditionsOfAccess()
    {
       return $this->getProperty('conditionsOfAccess');
    }


    /**
        * The creator/author of this CreativeWork. This is the same as the Author
 * property for CreativeWork.
        * @param array|string|mixed $value
    * @return $this
    */
    public function creator($value)
    {
        $this->setProperty('creator', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setCreator($value)
    {
        $this->setProperty('creator', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCreator()
    {
       return $this->getProperty('creator');
    }


    /**
        * The publishingPrinciples property indicates (typically via [[URL]]) a
 * document describing the editorial principles of an [[Organization]] (or
 * individual, e.g. a [[Person]] writing a blog) that relate to their activities
 * as a publisher, e.g. ethics or diversity policies. When applied to a
 * [[CreativeWork]] (e.g. [[NewsArticle]]) the principles are those of the party
 * primarily responsible for the creation of the [[CreativeWork]].
 * 
 * While such policies are most typically expressed in natural language,
 * sometimes related information (e.g. indicating a [[funder]]) can be expressed
 * using schema.org terminology.
        * @param array|string|mixed $value
    * @return $this
    */
    public function publishingPrinciples($value)
    {
        $this->setProperty('publishingPrinciples', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setPublishingPrinciples($value)
    {
        $this->setProperty('publishingPrinciples', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPublishingPrinciples()
    {
       return $this->getProperty('publishingPrinciples');
    }


    /**
        * The Organization on whose behalf the creator was working.
        * @param array|string|mixed $value
    * @return $this
    */
    public function sourceOrganization($value)
    {
        $this->setProperty('sourceOrganization', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setSourceOrganization($value)
    {
        $this->setProperty('sourceOrganization', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSourceOrganization()
    {
       return $this->getProperty('sourceOrganization');
    }


    /**
        * A citation or reference to another creative work, such as another
 * publication, web page, scholarly article, etc.
        * @param array|string|mixed $value
    * @return $this
    */
    public function citation($value)
    {
        $this->setProperty('citation', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setCitation($value)
    {
        $this->setProperty('citation', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCitation()
    {
       return $this->getProperty('citation');
    }


    /**
        * Comments, typically from users.
        * @param array|string|mixed $value
    * @return $this
    */
    public function comment($value)
    {
        $this->setProperty('comment', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setComment($value)
    {
        $this->setProperty('comment', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getComment()
    {
       return $this->getProperty('comment');
    }


    /**
        * A thumbnail image relevant to the Thing.
        * @param array|string|mixed $value
    * @return $this
    */
    public function thumbnailUrl($value)
    {
        $this->setProperty('thumbnailUrl', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setThumbnailUrl($value)
    {
        $this->setProperty('thumbnailUrl', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getThumbnailUrl()
    {
       return $this->getProperty('thumbnailUrl');
    }


    /**
        * Indicates whether this content is family friendly.
        * @param array|string|mixed $value
    * @return $this
    */
    public function isFamilyFriendly($value)
    {
        $this->setProperty('isFamilyFriendly', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setIsFamilyFriendly($value)
    {
        $this->setProperty('isFamilyFriendly', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getIsFamilyFriendly()
    {
       return $this->getProperty('isFamilyFriendly');
    }


    /**
        * The purpose of a work in the context of education; for example, 'assignment',
 * 'group work'.
        * @param array|string|mixed $value
    * @return $this
    */
    public function educationalUse($value)
    {
        $this->setProperty('educationalUse', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setEducationalUse($value)
    {
        $this->setProperty('educationalUse', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEducationalUse()
    {
       return $this->getProperty('educationalUse');
    }


    /**
        * A standardized size of a product or creative work, specified either through a
 * simple textual string (for example 'XL', '32Wx34L'), a  QuantitativeValue
 * with a unitCode, or a comprehensive and structured [[SizeSpecification]]; in
 * other cases, the [[width]], [[height]], [[depth]] and [[weight]] properties
 * may be more applicable.
        * @param array|string|mixed $value
    * @return $this
    */
    public function size($value)
    {
        $this->setProperty('size', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setSize($value)
    {
        $this->setProperty('size', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSize()
    {
       return $this->getProperty('size');
    }


    /**
        * An abstract is a short description that summarizes a [[CreativeWork]].
        * @param array|string|mixed $value
    * @return $this
    */
    public function abstract($value)
    {
        $this->setProperty('abstract', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setAbstract($value)
    {
        $this->setProperty('abstract', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAbstract()
    {
       return $this->getProperty('abstract');
    }


    /**
        * The date on which the CreativeWork was most recently modified or when the
 * item's entry was modified within a DataFeed.
        * @param array|string|mixed $value
    * @return $this
    */
    public function dateModified($value)
    {
        $this->setProperty('dateModified', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setDateModified($value)
    {
        $this->setProperty('dateModified', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDateModified()
    {
       return $this->getProperty('dateModified');
    }


    /**
        * The year during which the claimed copyright for the CreativeWork was first
 * asserted.
        * @param array|string|mixed $value
    * @return $this
    */
    public function copyrightYear($value)
    {
        $this->setProperty('copyrightYear', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setCopyrightYear($value)
    {
        $this->setProperty('copyrightYear', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCopyrightYear()
    {
       return $this->getProperty('copyrightYear');
    }


    /**
        * A creative work that this work is an example/instance/realization/derivation
 * of.
        * @param array|string|mixed $value
    * @return $this
    */
    public function exampleOfWork($value)
    {
        $this->setProperty('exampleOfWork', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setExampleOfWork($value)
    {
        $this->setProperty('exampleOfWork', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getExampleOfWork()
    {
       return $this->getProperty('exampleOfWork');
    }


    /**
        * The item being described is intended to help a person learn the competency or
 * learning outcome defined by the referenced term.
        * @param array|string|mixed $value
    * @return $this
    */
    public function teaches($value)
    {
        $this->setProperty('teaches', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setTeaches($value)
    {
        $this->setProperty('teaches', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getTeaches()
    {
       return $this->getProperty('teaches');
    }


    /**
        * An [EIDR](https://eidr.org/) (Entertainment Identifier Registry)
 * [[identifier]] representing a specific edit / edition for a work of film or
 * television.
 * 
 * For example, the motion picture known as "Ghostbusters" whose [[titleEIDR]]
 * is "10.5240/7EC7-228A-510A-053E-CBB8-J" has several edits, e.g.
 * "10.5240/1F2A-E1C5-680A-14C6-E76B-I" and
 * "10.5240/8A35-3BEE-6497-5D12-9E4F-3".
 * 
 * Since schema.org types like [[Movie]] and [[TVEpisode]] can be used for both
 * works and their multiple expressions, it is possible to use [[titleEIDR]]
 * alone (for a general description), or alongside [[editEIDR]] for a more
 * edit-specific description.
        * @param array|string|mixed $value
    * @return $this
    */
    public function editEIDR($value)
    {
        $this->setProperty('editEIDR', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setEditEIDR($value)
    {
        $this->setProperty('editEIDR', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEditEIDR()
    {
       return $this->getProperty('editEIDR');
    }


    /**
        * A characteristic of the described resource that is physiologically dangerous
 * to some users. Related to WCAG 2.0 guideline 2.3. Values should be drawn from
 * the [approved
 * vocabulary](https://www.w3.org/2021/a11y-discov-vocab/latest/#accessibilityHazard-vocabulary).
        * @param array|string|mixed $value
    * @return $this
    */
    public function accessibilityHazard($value)
    {
        $this->setProperty('accessibilityHazard', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setAccessibilityHazard($value)
    {
        $this->setProperty('accessibilityHazard', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAccessibilityHazard()
    {
       return $this->getProperty('accessibilityHazard');
    }


    /**
        * A resource that was used in the creation of this resource. This term can be
 * repeated for multiple sources. For example,
 * http://example.com/great-multiplication-intro.html.
        * @param array|string|mixed $value
    * @return $this
    */
    public function isBasedOnUrl($value)
    {
        $this->setProperty('isBasedOnUrl', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setIsBasedOnUrl($value)
    {
        $this->setProperty('isBasedOnUrl', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getIsBasedOnUrl()
    {
       return $this->getProperty('isBasedOnUrl');
    }


    /**
        * Indicates the date on which the current structured data was generated /
 * published. Typically used alongside [[sdPublisher]].
        * @param array|string|mixed $value
    * @return $this
    */
    public function sdDatePublished($value)
    {
        $this->setProperty('sdDatePublished', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setSdDatePublished($value)
    {
        $this->setProperty('sdDatePublished', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSdDatePublished()
    {
       return $this->getProperty('sdDatePublished');
    }


    /**
        * The location depicted or described in the content. For example, the location
 * in a photograph or painting.
        * @param array|string|mixed $value
    * @return $this
    */
    public function contentLocation($value)
    {
        $this->setProperty('contentLocation', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setContentLocation($value)
    {
        $this->setProperty('contentLocation', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getContentLocation()
    {
       return $this->getProperty('contentLocation');
    }


    /**
        * A license document that applies to this content, typically indicated by URL.
        * @param array|string|mixed $value
    * @return $this
    */
    public function license($value)
    {
        $this->setProperty('license', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setLicense($value)
    {
        $this->setProperty('license', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getLicense()
    {
       return $this->getProperty('license');
    }


    /**
        * A [[Grant]] that directly or indirectly provide funding or sponsorship for
 * this item. See also [[ownershipFundingInfo]].
        * @param array|string|mixed $value
    * @return $this
    */
    public function funding($value)
    {
        $this->setProperty('funding', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setFunding($value)
    {
        $this->setProperty('funding', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getFunding()
    {
       return $this->getProperty('funding');
    }


    /**
        * Specifies the Person who edited the CreativeWork.
        * @param array|string|mixed $value
    * @return $this
    */
    public function editor($value)
    {
        $this->setProperty('editor', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setEditor($value)
    {
        $this->setProperty('editor', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEditor()
    {
       return $this->getProperty('editor');
    }


    /**
        * The number of interactions for the CreativeWork using the WebSite or
 * SoftwareApplication. The most specific child type of InteractionCounter
 * should be used.
        * @param array|string|mixed $value
    * @return $this
    */
    public function interactionStatistic($value)
    {
        $this->setProperty('interactionStatistic', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setInteractionStatistic($value)
    {
        $this->setProperty('interactionStatistic', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getInteractionStatistic()
    {
       return $this->getProperty('interactionStatistic');
    }


    /**
        * A media object that encodes this CreativeWork. This property is a synonym for
 * associatedMedia.
        * @param array|string|mixed $value
    * @return $this
    */
    public function encoding($value)
    {
        $this->setProperty('encoding', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setEncoding($value)
    {
        $this->setProperty('encoding', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEncoding()
    {
       return $this->getProperty('encoding');
    }


    /**
        * A person or organization that supports (sponsors) something through some kind
 * of financial contribution.
        * @param array|string|mixed $value
    * @return $this
    */
    public function funder($value)
    {
        $this->setProperty('funder', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setFunder($value)
    {
        $this->setProperty('funder', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getFunder()
    {
       return $this->getProperty('funder');
    }


    /**
        * Example/instance/realization/derivation of the concept of this creative work.
 * E.g. the paperback edition, first edition, or e-book.
        * @param array|string|mixed $value
    * @return $this
    */
    public function workExample($value)
    {
        $this->setProperty('workExample', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setWorkExample($value)
    {
        $this->setProperty('workExample', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getWorkExample()
    {
       return $this->getProperty('workExample');
    }


    /**
        * The subject matter of the content.
        * @param array|string|mixed $value
    * @return $this
    */
    public function about($value)
    {
        $this->setProperty('about', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setAbout($value)
    {
        $this->setProperty('about', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAbout()
    {
       return $this->getProperty('about');
    }


    /**
        * A maintainer of a [[Dataset]], software package ([[SoftwareApplication]]), or
 * other [[Project]]. A maintainer is a [[Person]] or [[Organization]] that
 * manages contributions to, and/or publication of, some (typically complex)
 * artifact. It is common for distributions of software and data to be based on
 * "upstream" sources. When [[maintainer]] is applied to a specific version of
 * something e.g. a particular version or packaging of a [[Dataset]], it is
 * always  possible that the upstream source has a different maintainer. The
 * [[isBasedOn]] property can be used to indicate such relationships between
 * datasets to make the different maintenance roles clear. Similarly in the case
 * of software, a package may have dedicated maintainers working on integration
 * into software distributions such as Ubuntu, as well as upstream maintainers
 * of the underlying work.
        * @param array|string|mixed $value
    * @return $this
    */
    public function maintainer($value)
    {
        $this->setProperty('maintainer', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setMaintainer($value)
    {
        $this->setProperty('maintainer', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getMaintainer()
    {
       return $this->getProperty('maintainer');
    }


    /**
        * The place and time the release was issued, expressed as a PublicationEvent.
        * @param array|string|mixed $value
    * @return $this
    */
    public function releasedEvent($value)
    {
        $this->setProperty('releasedEvent', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setReleasedEvent($value)
    {
        $this->setProperty('releasedEvent', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getReleasedEvent()
    {
       return $this->getProperty('releasedEvent');
    }


    /**
        * An embedded video object.
        * @param array|string|mixed $value
    * @return $this
    */
    public function video($value)
    {
        $this->setProperty('video', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setVideo($value)
    {
        $this->setProperty('video', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getVideo()
    {
       return $this->getProperty('video');
    }


    /**
        * Indicates that the CreativeWork contains a reference to, but is not
 * necessarily about a concept.
        * @param array|string|mixed $value
    * @return $this
    */
    public function mentions($value)
    {
        $this->setProperty('mentions', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setMentions($value)
    {
        $this->setProperty('mentions', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getMentions()
    {
       return $this->getProperty('mentions');
    }


    /**
        * The status of a creative work in terms of its stage in a lifecycle. Example
 * terms include Incomplete, Draft, Published, Obsolete. Some organizations
 * define a set of terms for the stages of their publication lifecycle.
        * @param array|string|mixed $value
    * @return $this
    */
    public function creativeWorkStatus($value)
    {
        $this->setProperty('creativeWorkStatus', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setCreativeWorkStatus($value)
    {
        $this->setProperty('creativeWorkStatus', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCreativeWorkStatus()
    {
       return $this->getProperty('creativeWorkStatus');
    }


    /**
        * The specific time described by a creative work, for works (e.g. articles,
 * video objects etc.) that emphasise a particular moment within an Event.
        * @param array|string|mixed $value
    * @return $this
    */
    public function contentReferenceTime($value)
    {
        $this->setProperty('contentReferenceTime', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setContentReferenceTime($value)
    {
        $this->setProperty('contentReferenceTime', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getContentReferenceTime()
    {
       return $this->getProperty('contentReferenceTime');
    }


    /**
        * The author of this content or rating. Please note that author is special in
 * that HTML 5 provides a special mechanism for indicating authorship via the
 * rel tag. That is equivalent to this and may be used interchangeably.
        * @param array|string|mixed $value
    * @return $this
    */
    public function author($value)
    {
        $this->setProperty('author', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setAuthor($value)
    {
        $this->setProperty('author', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAuthor()
    {
       return $this->getProperty('author');
    }


    /**
        * A media object that encodes this CreativeWork. This property is a synonym for
 * encoding.
        * @param array|string|mixed $value
    * @return $this
    */
    public function associatedMedia($value)
    {
        $this->setProperty('associatedMedia', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setAssociatedMedia($value)
    {
        $this->setProperty('associatedMedia', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAssociatedMedia()
    {
       return $this->getProperty('associatedMedia');
    }


    /**
        * The "temporal" property can be used in cases where more specific properties
 * (e.g. [[temporalCoverage]], [[dateCreated]], [[dateModified]],
 * [[datePublished]]) are not known to be appropriate.
        * @param array|string|mixed $value
    * @return $this
    */
    public function temporal($value)
    {
        $this->setProperty('temporal', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setTemporal($value)
    {
        $this->setProperty('temporal', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getTemporal()
    {
       return $this->getProperty('temporal');
    }


    /**
        * A publication event associated with the item.
        * @param array|string|mixed $value
    * @return $this
    */
    public function publication($value)
    {
        $this->setProperty('publication', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setPublication($value)
    {
        $this->setProperty('publication', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPublication()
    {
       return $this->getProperty('publication');
    }


    /**
        * Indicates that the resource is compatible with the referenced accessibility
 * API. Values should be drawn from the [approved
 * vocabulary](https://www.w3.org/2021/a11y-discov-vocab/latest/#accessibilityAPI-vocabulary).
        * @param array|string|mixed $value
    * @return $this
    */
    public function accessibilityAPI($value)
    {
        $this->setProperty('accessibilityAPI', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setAccessibilityAPI($value)
    {
        $this->setProperty('accessibilityAPI', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAccessibilityAPI()
    {
       return $this->getProperty('accessibilityAPI');
    }


    /**
        * An intended audience, i.e. a group for whom something was created.
        * @param array|string|mixed $value
    * @return $this
    */
    public function audience($value)
    {
        $this->setProperty('audience', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setAudience($value)
    {
        $this->setProperty('audience', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAudience()
    {
       return $this->getProperty('audience');
    }


    /**
        * A work that is a translation of the content of this work. E.g. 西遊記 has
 * an English workTranslation “Journey to the West”, a German
 * workTranslation “Monkeys Pilgerfahrt” and a Vietnamese  translation Tây
 * du ký bình khảo.
        * @param array|string|mixed $value
    * @return $this
    */
    public function workTranslation($value)
    {
        $this->setProperty('workTranslation', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setWorkTranslation($value)
    {
        $this->setProperty('workTranslation', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getWorkTranslation()
    {
       return $this->getProperty('workTranslation');
    }


    /**
        * A human-readable summary of specific accessibility features or deficiencies,
 * consistent with the other accessibility metadata but expressing subtleties
 * such as "short descriptions are present but long descriptions will be needed
 * for non-visual users" or "short descriptions are present and no long
 * descriptions are needed".
        * @param array|string|mixed $value
    * @return $this
    */
    public function accessibilitySummary($value)
    {
        $this->setProperty('accessibilitySummary', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setAccessibilitySummary($value)
    {
        $this->setProperty('accessibilitySummary', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAccessibilitySummary()
    {
       return $this->getProperty('accessibilitySummary');
    }


    /**
        * A review of the item.
        * @param array|string|mixed $value
    * @return $this
    */
    public function review($value)
    {
        $this->setProperty('review', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setReview($value)
    {
        $this->setProperty('review', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getReview()
    {
       return $this->getProperty('review');
    }


    /**
        * The location where the CreativeWork was created, which may not be the same as
 * the location depicted in the CreativeWork.
        * @param array|string|mixed $value
    * @return $this
    */
    public function locationCreated($value)
    {
        $this->setProperty('locationCreated', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setLocationCreated($value)
    {
        $this->setProperty('locationCreated', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getLocationCreated()
    {
       return $this->getProperty('locationCreated');
    }


    /**
        * Review of the item.
        * @param array|string|mixed $value
    * @return $this
    */
    public function reviews($value)
    {
        $this->setProperty('reviews', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setReviews($value)
    {
        $this->setProperty('reviews', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getReviews()
    {
       return $this->getProperty('reviews');
    }


    /**
        * Indicates a page documenting how licenses can be purchased or otherwise
 * acquired, for the current item.
        * @param array|string|mixed $value
    * @return $this
    */
    public function acquireLicensePage($value)
    {
        $this->setProperty('acquireLicensePage', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setAcquireLicensePage($value)
    {
        $this->setProperty('acquireLicensePage', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAcquireLicensePage()
    {
       return $this->getProperty('acquireLicensePage');
    }


    /**
        * The position of an item in a series or sequence of items.
        * @param array|string|mixed $value
    * @return $this
    */
    public function position($value)
    {
        $this->setProperty('position', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setPosition($value)
    {
        $this->setProperty('position', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPosition()
    {
       return $this->getProperty('position');
    }


    /**
        * The predominant mode of learning supported by the learning resource.
 * Acceptable values are 'active', 'expositive', or 'mixed'.
        * @param array|string|mixed $value
    * @return $this
    */
    public function interactivityType($value)
    {
        $this->setProperty('interactivityType', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setInteractivityType($value)
    {
        $this->setProperty('interactivityType', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getInteractivityType()
    {
       return $this->getProperty('interactivityType');
    }


    /**
        * An embedded audio object.
        * @param array|string|mixed $value
    * @return $this
    */
    public function audio($value)
    {
        $this->setProperty('audio', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setAudio($value)
    {
        $this->setProperty('audio', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAudio()
    {
       return $this->getProperty('audio');
    }


    /**
        * The version of the CreativeWork embodied by a specified resource.
        * @param array|string|mixed $value
    * @return $this
    */
    public function version($value)
    {
        $this->setProperty('version', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setVersion($value)
    {
        $this->setProperty('version', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getVersion()
    {
       return $this->getProperty('version');
    }


    /**
        * Content features of the resource, such as accessible media, alternatives and
 * supported enhancements for accessibility. Values should be drawn from the
 * [approved
 * vocabulary](https://www.w3.org/2021/a11y-discov-vocab/latest/#accessibilityFeature-vocabulary).
        * @param array|string|mixed $value
    * @return $this
    */
    public function accessibilityFeature($value)
    {
        $this->setProperty('accessibilityFeature', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setAccessibilityFeature($value)
    {
        $this->setProperty('accessibilityFeature', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAccessibilityFeature()
    {
       return $this->getProperty('accessibilityFeature');
    }


    /**
        * Media type typically expressed using a MIME format (see [IANA
 * site](http://www.iana.org/assignments/media-types/media-types.xhtml) and [MDN
 * reference](https://developer.mozilla.org/en-US/docs/Web/HTTP/Basics_of_HTTP/MIME_types)),
 * e.g. application/zip for a SoftwareApplication binary, audio/mpeg for .mp3
 * etc.
 * 
 * In cases where a [[CreativeWork]] has several media type representations,
 * [[encoding]] can be used to indicate each [[MediaObject]] alongside
 * particular [[encodingFormat]] information.
 * 
 * Unregistered or niche encoding and file formats can be indicated instead via
 * the most appropriate URL, e.g. defining Web page or a Wikipedia/Wikidata
 * entry.
        * @param array|string|mixed $value
    * @return $this
    */
    public function encodingFormat($value)
    {
        $this->setProperty('encodingFormat', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setEncodingFormat($value)
    {
        $this->setProperty('encodingFormat', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEncodingFormat()
    {
       return $this->getProperty('encodingFormat');
    }


    /**
        * A link to the page containing the comments of the CreativeWork.
        * @param array|string|mixed $value
    * @return $this
    */
    public function discussionUrl($value)
    {
        $this->setProperty('discussionUrl', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setDiscussionUrl($value)
    {
        $this->setProperty('discussionUrl', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDiscussionUrl()
    {
       return $this->getProperty('discussionUrl');
    }


    /**
        * The spatialCoverage of a CreativeWork indicates the place(s) which are the
 * focus of the content. It is a subproperty of
 *       contentLocation intended primarily for more technical and detailed
 * materials. For example with a Dataset, it indicates
 *       areas that the dataset describes: a dataset of New York weather would
 * have spatialCoverage which was the place: the state of New York.
        * @param array|string|mixed $value
    * @return $this
    */
    public function spatialCoverage($value)
    {
        $this->setProperty('spatialCoverage', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setSpatialCoverage($value)
    {
        $this->setProperty('spatialCoverage', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSpatialCoverage()
    {
       return $this->getProperty('spatialCoverage');
    }


    /**
        * An award won by or for this item.
        * @param array|string|mixed $value
    * @return $this
    */
    public function award($value)
    {
        $this->setProperty('award', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setAward($value)
    {
        $this->setProperty('award', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAward()
    {
       return $this->getProperty('award');
    }


    /**
        * Headline of the article.
        * @param array|string|mixed $value
    * @return $this
    */
    public function headline($value)
    {
        $this->setProperty('headline', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setHeadline($value)
    {
        $this->setProperty('headline', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getHeadline()
    {
       return $this->getProperty('headline');
    }


    /**
        * The service provider, service operator, or service performer; the goods
 * producer. Another party (a seller) may offer those services or goods on
 * behalf of the provider. A provider may also serve as the seller.
        * @param array|string|mixed $value
    * @return $this
    */
    public function provider($value)
    {
        $this->setProperty('provider', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setProvider($value)
    {
        $this->setProperty('provider', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getProvider()
    {
       return $this->getProperty('provider');
    }


    /**
        * The predominant type or kind characterizing the learning resource. For
 * example, 'presentation', 'handout'.
        * @param array|string|mixed $value
    * @return $this
    */
    public function learningResourceType($value)
    {
        $this->setProperty('learningResourceType', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setLearningResourceType($value)
    {
        $this->setProperty('learningResourceType', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getLearningResourceType()
    {
       return $this->getProperty('learningResourceType');
    }


    /**
        * The Event where the CreativeWork was recorded. The CreativeWork may capture
 * all or part of the event.
        * @param array|string|mixed $value
    * @return $this
    */
    public function recordedAt($value)
    {
        $this->setProperty('recordedAt', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setRecordedAt($value)
    {
        $this->setProperty('recordedAt', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getRecordedAt()
    {
       return $this->getProperty('recordedAt');
    }


    /**
        * Indicates a correction to a [[CreativeWork]], either via a
 * [[CorrectionComment]], textually or in another document.
        * @param array|string|mixed $value
    * @return $this
    */
    public function correction($value)
    {
        $this->setProperty('correction', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setCorrection($value)
    {
        $this->setProperty('correction', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCorrection()
    {
       return $this->getProperty('correction');
    }


    /**
        * Indicates a page or other link involved in archival of a [[CreativeWork]]. In
 * the case of [[MediaReview]], the items in a [[MediaReviewItem]] may often
 * become inaccessible, but be archived by archival, journalistic, activist, or
 * law enforcement organizations. In such cases, the referenced page may not
 * directly publish the content.
        * @param array|string|mixed $value
    * @return $this
    */
    public function archivedAt($value)
    {
        $this->setProperty('archivedAt', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setArchivedAt($value)
    {
        $this->setProperty('archivedAt', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getArchivedAt()
    {
       return $this->getProperty('archivedAt');
    }


    /**
        * Organization or person who adapts a creative work to different languages,
 * regional differences and technical requirements of a target market, or that
 * translates during some event.
        * @param array|string|mixed $value
    * @return $this
    */
    public function translator($value)
    {
        $this->setProperty('translator', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setTranslator($value)
    {
        $this->setProperty('translator', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getTranslator()
    {
       return $this->getProperty('translator');
    }


    /**
        * Text of a notice appropriate for describing the copyright aspects of this
 * Creative Work, ideally indicating the owner of the copyright for the Work.
        * @param array|string|mixed $value
    * @return $this
    */
    public function copyrightNotice($value)
    {
        $this->setProperty('copyrightNotice', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setCopyrightNotice($value)
    {
        $this->setProperty('copyrightNotice', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCopyrightNotice()
    {
       return $this->getProperty('copyrightNotice');
    }


    /**
        * A flag to signal that the item, event, or place is accessible for free.
        * @param array|string|mixed $value
    * @return $this
    */
    public function isAccessibleForFree($value)
    {
        $this->setProperty('isAccessibleForFree', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setIsAccessibleForFree($value)
    {
        $this->setProperty('isAccessibleForFree', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getIsAccessibleForFree()
    {
       return $this->getProperty('isAccessibleForFree');
    }


    /**
        * The work that this work has been translated from. E.g. 物种起源 is a
 * translationOf “On the Origin of Species”.
        * @param array|string|mixed $value
    * @return $this
    */
    public function translationOfWork($value)
    {
        $this->setProperty('translationOfWork', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setTranslationOfWork($value)
    {
        $this->setProperty('translationOfWork', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getTranslationOfWork()
    {
       return $this->getProperty('translationOfWork');
    }


    /**
        * The publisher of the creative work.
        * @param array|string|mixed $value
    * @return $this
    */
    public function publisher($value)
    {
        $this->setProperty('publisher', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setPublisher($value)
    {
        $this->setProperty('publisher', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPublisher()
    {
       return $this->getProperty('publisher');
    }


    /**
        * Indicates the party responsible for generating and publishing the current
 * structured data markup, typically in cases where the structured data is
 * derived automatically from existing published content but published on a
 * different site. For example, student projects and open data initiatives often
 * re-publish existing content with more explicitly structured metadata. The
 * [[sdPublisher]] property helps make such practices more explicit.
        * @param array|string|mixed $value
    * @return $this
    */
    public function sdPublisher($value)
    {
        $this->setProperty('sdPublisher', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setSdPublisher($value)
    {
        $this->setProperty('sdPublisher', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSdPublisher()
    {
       return $this->getProperty('sdPublisher');
    }


    /**
        * A material that something is made from, e.g. leather, wool, cotton, paper.
        * @param array|string|mixed $value
    * @return $this
    */
    public function material($value)
    {
        $this->setProperty('material', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setMaterial($value)
    {
        $this->setProperty('material', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getMaterial()
    {
       return $this->getProperty('material');
    }


    /**
        * Indicates an item or CreativeWork that this item, or CreativeWork (in some
 * sense), is part of.
        * @param array|string|mixed $value
    * @return $this
    */
    public function isPartOf($value)
    {
        $this->setProperty('isPartOf', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setIsPartOf($value)
    {
        $this->setProperty('isPartOf', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getIsPartOf()
    {
       return $this->getProperty('isPartOf');
    }


    /**
        * Awards won by or for this item.
        * @param array|string|mixed $value
    * @return $this
    */
    public function awards($value)
    {
        $this->setProperty('awards', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setAwards($value)
    {
        $this->setProperty('awards', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAwards()
    {
       return $this->getProperty('awards');
    }


    /**
        * The party holding the legal copyright to the CreativeWork.
        * @param array|string|mixed $value
    * @return $this
    */
    public function copyrightHolder($value)
    {
        $this->setProperty('copyrightHolder', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setCopyrightHolder($value)
    {
        $this->setProperty('copyrightHolder', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCopyrightHolder()
    {
       return $this->getProperty('copyrightHolder');
    }


    /**
        * Media type, typically MIME format (see [IANA
 * site](http://www.iana.org/assignments/media-types/media-types.xhtml)) of the
 * content, e.g. application/zip of a SoftwareApplication binary. In cases where
 * a CreativeWork has several media type representations, 'encoding' can be used
 * to indicate each MediaObject alongside particular fileFormat information.
 * Unregistered or niche file formats can be indicated instead via the most
 * appropriate URL, e.g. defining Web page or a Wikipedia entry.
        * @param array|string|mixed $value
    * @return $this
    */
    public function fileFormat($value)
    {
        $this->setProperty('fileFormat', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setFileFormat($value)
    {
        $this->setProperty('fileFormat', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getFileFormat()
    {
       return $this->getProperty('fileFormat');
    }


    /**
        * An alignment to an established educational framework.
 * 
 * This property should not be used where the nature of the alignment can be
 * described using a simple property, for example to express that a resource
 * [[teaches]] or [[assesses]] a competency.
        * @param array|string|mixed $value
    * @return $this
    */
    public function educationalAlignment($value)
    {
        $this->setProperty('educationalAlignment', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setEducationalAlignment($value)
    {
        $this->setProperty('educationalAlignment', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEducationalAlignment()
    {
       return $this->getProperty('educationalAlignment');
    }


    /**
        * A media object that encodes this CreativeWork.
        * @param array|string|mixed $value
    * @return $this
    */
    public function encodings($value)
    {
        $this->setProperty('encodings', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setEncodings($value)
    {
        $this->setProperty('encodings', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEncodings()
    {
       return $this->getProperty('encodings');
    }


    /**
        * A secondary contributor to the CreativeWork or Event.
        * @param array|string|mixed $value
    * @return $this
    */
    public function contributor($value)
    {
        $this->setProperty('contributor', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setContributor($value)
    {
        $this->setProperty('contributor', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getContributor()
    {
       return $this->getProperty('contributor');
    }


    /**
        * Official rating of a piece of content&#x2014;for example, 'MPAA PG-13'.
        * @param array|string|mixed $value
    * @return $this
    */
    public function contentRating($value)
    {
        $this->setProperty('contentRating', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setContentRating($value)
    {
        $this->setProperty('contentRating', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getContentRating()
    {
       return $this->getProperty('contentRating');
    }


    /**
        * The overall rating, based on a collection of reviews or ratings, of the item.
        * @param array|string|mixed $value
    * @return $this
    */
    public function aggregateRating($value)
    {
        $this->setProperty('aggregateRating', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setAggregateRating($value)
    {
        $this->setProperty('aggregateRating', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAggregateRating()
    {
       return $this->getProperty('aggregateRating');
    }


    /**
        * Text that can be used to credit person(s) and/or organization(s) associated
 * with a published Creative Work.
        * @param array|string|mixed $value
    * @return $this
    */
    public function creditText($value)
    {
        $this->setProperty('creditText', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setCreditText($value)
    {
        $this->setProperty('creditText', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCreditText()
    {
       return $this->getProperty('creditText');
    }


    /**
        * Indicates an item or CreativeWork that is part of this item, or CreativeWork
 * (in some sense).
        * @param array|string|mixed $value
    * @return $this
    */
    public function hasPart($value)
    {
        $this->setProperty('hasPart', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setHasPart($value)
    {
        $this->setProperty('hasPart', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getHasPart()
    {
       return $this->getProperty('hasPart');
    }


    /**
        * The textual content of this CreativeWork.
        * @param array|string|mixed $value
    * @return $this
    */
    public function text($value)
    {
        $this->setProperty('text', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setText($value)
    {
        $this->setProperty('text', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getText()
    {
       return $this->getProperty('text');
    }


    /**
        * The schema.org [[usageInfo]] property indicates further information about a
 * [[CreativeWork]]. This property is applicable both to works that are freely
 * available and to those that require payment or other transactions. It can
 * reference additional information, e.g. community expectations on preferred
 * linking and citation conventions, as well as purchasing details. For
 * something that can be commercially licensed, usageInfo can provide detailed,
 * resource-specific information about licensing options.
 * 
 * This property can be used alongside the license property which indicates
 * license(s) applicable to some piece of content. The usageInfo property can
 * provide information about other licensing options, e.g. acquiring commercial
 * usage rights for an image that is also available under non-commercial
 * creative commons licenses.
        * @param array|string|mixed $value
    * @return $this
    */
    public function usageInfo($value)
    {
        $this->setProperty('usageInfo', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setUsageInfo($value)
    {
        $this->setProperty('usageInfo', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getUsageInfo()
    {
       return $this->getProperty('usageInfo');
    }


    /**
        * The country of origin of something, including products as well as creative 
 * works such as movie and TV content.
 * 
 * In the case of TV and movie, this would be the country of the principle
 * offices of the production company or individual responsible for the movie.
 * For other kinds of [[CreativeWork]] it is difficult to provide fully general
 * guidance, and properties such as [[contentLocation]] and [[locationCreated]]
 * may be more applicable.
 * 
 * In the case of products, the country of origin of the product. The exact
 * interpretation of this may vary by context and product type, and cannot be
 * fully enumerated here.
        * @param array|string|mixed $value
    * @return $this
    */
    public function countryOfOrigin($value)
    {
        $this->setProperty('countryOfOrigin', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setCountryOfOrigin($value)
    {
        $this->setProperty('countryOfOrigin', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCountryOfOrigin()
    {
       return $this->getProperty('countryOfOrigin');
    }


    /**
        * A resource from which this work is derived or from which it is a modification
 * or adaptation.
        * @param array|string|mixed $value
    * @return $this
    */
    public function isBasedOn($value)
    {
        $this->setProperty('isBasedOn', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setIsBasedOn($value)
    {
        $this->setProperty('isBasedOn', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getIsBasedOn()
    {
       return $this->getProperty('isBasedOn');
    }


    /**
        * Indicates an IPTCDigitalSourceEnumeration code indicating the nature of the
 * digital source(s) for some [[CreativeWork]].
        * @param array|string|mixed $value
    * @return $this
    */
    public function digitalSourceType($value)
    {
        $this->setProperty('digitalSourceType', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setDigitalSourceType($value)
    {
        $this->setProperty('digitalSourceType', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDigitalSourceType()
    {
       return $this->getProperty('digitalSourceType');
    }


    /**
        * Identifies input methods that are sufficient to fully control the described
 * resource. Values should be drawn from the [approved
 * vocabulary](https://www.w3.org/2021/a11y-discov-vocab/latest/#accessibilityControl-vocabulary).
        * @param array|string|mixed $value
    * @return $this
    */
    public function accessibilityControl($value)
    {
        $this->setProperty('accessibilityControl', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setAccessibilityControl($value)
    {
        $this->setProperty('accessibilityControl', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAccessibilityControl()
    {
       return $this->getProperty('accessibilityControl');
    }


    /**
        * Approximate or typical time it usually takes to work with or through the
 * content of this work for the typical or target audience.
        * @param array|string|mixed $value
    * @return $this
    */
    public function timeRequired($value)
    {
        $this->setProperty('timeRequired', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setTimeRequired($value)
    {
        $this->setProperty('timeRequired', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getTimeRequired()
    {
       return $this->getProperty('timeRequired');
    }


    /**
        * Specifies the Person that is legally accountable for the CreativeWork.
        * @param array|string|mixed $value
    * @return $this
    */
    public function accountablePerson($value)
    {
        $this->setProperty('accountablePerson', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setAccountablePerson($value)
    {
        $this->setProperty('accountablePerson', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAccountablePerson()
    {
       return $this->getProperty('accountablePerson');
    }


    /**
        * The quantity of the materials being described or an expression of the
 * physical space they occupy.
        * @param array|string|mixed $value
    * @return $this
    */
    public function materialExtent($value)
    {
        $this->setProperty('materialExtent', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setMaterialExtent($value)
    {
        $this->setProperty('materialExtent', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getMaterialExtent()
    {
       return $this->getProperty('materialExtent');
    }


    /**
        * The temporalCoverage of a CreativeWork indicates the period that the content
 * applies to, i.e. that it describes, either as a DateTime or as a textual
 * string indicating a time period in [ISO 8601 time interval
 * format](https://en.wikipedia.org/wiki/ISO_8601#Time_intervals). In
 *       the case of a Dataset it will typically indicate the relevant time
 * period in a precise notation (e.g. for a 2011 census dataset, the year 2011
 * would be written "2011/2012"). Other forms of content, e.g. ScholarlyArticle,
 * Book, TVSeries or TVEpisode, may indicate their temporalCoverage in broader
 * terms - textually or via well-known URL.
 *       Written works such as books may sometimes have precise temporal
 * coverage too, e.g. a work set in 1939 - 1945 can be indicated in ISO 8601
 * interval format format via "1939/1945".
 * 
 * Open-ended date ranges can be written with ".." in place of the end date. For
 * example, "2015-11/.." indicates a range beginning in November 2015 and with
 * no specified final date. This is tentative and might be updated in future
 * when ISO 8601 is officially updated.
        * @param array|string|mixed $value
    * @return $this
    */
    public function temporalCoverage($value)
    {
        $this->setProperty('temporalCoverage', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setTemporalCoverage($value)
    {
        $this->setProperty('temporalCoverage', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getTemporalCoverage()
    {
       return $this->getProperty('temporalCoverage');
    }


    /**
        * The number of comments this CreativeWork (e.g. Article, Question or Answer)
 * has received. This is most applicable to works published in Web sites with
 * commenting system; additional comments may exist elsewhere.
        * @param array|string|mixed $value
    * @return $this
    */
    public function commentCount($value)
    {
        $this->setProperty('commentCount', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setCommentCount($value)
    {
        $this->setProperty('commentCount', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCommentCount()
    {
       return $this->getProperty('commentCount');
    }


    /**
        * The human sensory perceptual system or cognitive faculty through which a
 * person may process or perceive information. Values should be drawn from the
 * [approved
 * vocabulary](https://www.w3.org/2021/a11y-discov-vocab/latest/#accessMode-vocabulary).
        * @param array|string|mixed $value
    * @return $this
    */
    public function accessMode($value)
    {
        $this->setProperty('accessMode', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setAccessMode($value)
    {
        $this->setProperty('accessMode', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAccessMode()
    {
       return $this->getProperty('accessMode');
    }


    /**
        * The person or organization who produced the work (e.g. music album, movie,
 * TV/radio series etc.).
        * @param array|string|mixed $value
    * @return $this
    */
    public function producer($value)
    {
        $this->setProperty('producer', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setProducer($value)
    {
        $this->setProperty('producer', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getProducer()
    {
       return $this->getProperty('producer');
    }


    /**
        * The level in terms of progression through an educational or training context.
 * Examples of educational levels include 'beginner', 'intermediate' or
 * 'advanced', and formal sets of level indicators.
        * @param array|string|mixed $value
    * @return $this
    */
    public function educationalLevel($value)
    {
        $this->setProperty('educationalLevel', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setEducationalLevel($value)
    {
        $this->setProperty('educationalLevel', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEducationalLevel()
    {
       return $this->getProperty('educationalLevel');
    }


    /**
        * Used to indicate a specific claim contained, implied, translated or refined
 * from the content of a [[MediaObject]] or other [[CreativeWork]]. The
 * interpreting party can be indicated using [[claimInterpreter]].
        * @param array|string|mixed $value
    * @return $this
    */
    public function interpretedAsClaim($value)
    {
        $this->setProperty('interpretedAsClaim', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setInterpretedAsClaim($value)
    {
        $this->setProperty('interpretedAsClaim', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getInterpretedAsClaim()
    {
       return $this->getProperty('interpretedAsClaim');
    }


    /**
        * Date the content expires and is no longer useful or available. For example a
 * [[VideoObject]] or [[NewsArticle]] whose availability or relevance is
 * time-limited, a [[ClaimReview]] fact check whose publisher wants to indicate
 * that it may no longer be relevant (or helpful to highlight) after some date,
 * or a [[Certification]] the validity has expired.
        * @param array|string|mixed $value
    * @return $this
    */
    public function expires($value)
    {
        $this->setProperty('expires', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setExpires($value)
    {
        $this->setProperty('expires', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getExpires()
    {
       return $this->getProperty('expires');
    }


    /**
        * Thumbnail image for an image or video.
        * @param array|string|mixed $value
    * @return $this
    */
    public function thumbnail($value)
    {
        $this->setProperty('thumbnail', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setThumbnail($value)
    {
        $this->setProperty('thumbnail', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getThumbnail()
    {
       return $this->getProperty('thumbnail');
    }


    /**
        * A license document that applies to this structured data, typically indicated
 * by URL.
        * @param array|string|mixed $value
    * @return $this
    */
    public function sdLicense($value)
    {
        $this->setProperty('sdLicense', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setSdLicense($value)
    {
        $this->setProperty('sdLicense', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSdLicense()
    {
       return $this->getProperty('sdLicense');
    }


    /**
        * Indicates the primary entity described in some page or other CreativeWork.
        * @param array|string|mixed $value
    * @return $this
    */
    public function mainEntity($value)
    {
        $this->setProperty('mainEntity', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setMainEntity($value)
    {
        $this->setProperty('mainEntity', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getMainEntity()
    {
       return $this->getProperty('mainEntity');
    }


    /**
        * The date on which the CreativeWork was created or the item was added to a
 * DataFeed.
        * @param array|string|mixed $value
    * @return $this
    */
    public function dateCreated($value)
    {
        $this->setProperty('dateCreated', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setDateCreated($value)
    {
        $this->setProperty('dateCreated', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDateCreated()
    {
       return $this->getProperty('dateCreated');
    }


    /**
        * Date of first publication or broadcast. For example the date a
 * [[CreativeWork]] was broadcast or a [[Certification]] was issued.
        * @param array|string|mixed $value
    * @return $this
    */
    public function datePublished($value)
    {
        $this->setProperty('datePublished', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setDatePublished($value)
    {
        $this->setProperty('datePublished', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDatePublished()
    {
       return $this->getProperty('datePublished');
    }


    /**
        * Indicates (by URL or string) a particular version of a schema used in some
 * CreativeWork. This property was created primarily to
 *     indicate the use of a specific schema.org release, e.g. ```10.0``` as a
 * simple string, or more explicitly via URL,
 * ```https://schema.org/docs/releases.html#v10.0```. There may be situations in
 * which other schemas might usefully be referenced this way, e.g.
 * ```http://dublincore.org/specifications/dublin-core/dces/1999-07-02/``` but
 * this has not been carefully explored in the community.
        * @param array|string|mixed $value
    * @return $this
    */
    public function schemaVersion($value)
    {
        $this->setProperty('schemaVersion', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setSchemaVersion($value)
    {
        $this->setProperty('schemaVersion', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSchemaVersion()
    {
       return $this->getProperty('schemaVersion');
    }


    /**
        * The item being described is intended to assess the competency or learning
 * outcome defined by the referenced term.
        * @param array|string|mixed $value
    * @return $this
    */
    public function assesses($value)
    {
        $this->setProperty('assesses', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setAssesses($value)
    {
        $this->setProperty('assesses', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAssesses()
    {
       return $this->getProperty('assesses');
    }


    /**
        * Fictional person connected with a creative work.
        * @param array|string|mixed $value
    * @return $this
    */
    public function character($value)
    {
        $this->setProperty('character', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setCharacter($value)
    {
        $this->setProperty('character', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCharacter()
    {
       return $this->getProperty('character');
    }


    /**
        * The typical expected age range, e.g. '7-9', '11-'.
        * @param array|string|mixed $value
    * @return $this
    */
    public function typicalAgeRange($value)
    {
        $this->setProperty('typicalAgeRange', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setTypicalAgeRange($value)
    {
        $this->setProperty('typicalAgeRange', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getTypicalAgeRange()
    {
       return $this->getProperty('typicalAgeRange');
    }


    /**
        * Genre of the creative work, broadcast channel or group.
        * @param array|string|mixed $value
    * @return $this
    */
    public function genre($value)
    {
        $this->setProperty('genre', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setGenre($value)
    {
        $this->setProperty('genre', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getGenre()
    {
       return $this->getProperty('genre');
    }


}
