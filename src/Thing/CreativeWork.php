<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing;

use Sohophp\SchemaOrg\Thing;
use Sohophp\SchemaOrg\Thing\Intangible\DefinedTerm;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\CreativeWork\Clip;
use Sohophp\SchemaOrg\Thing\CreativeWork\MusicRecording;
use Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject\AudioObject;
use Sohophp\SchemaOrg\Thing\Intangible\Rating;
use Sohophp\SchemaOrg\Quantity\Duration;
use Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject;
use Sohophp\SchemaOrg\Thing\Event;
use Sohophp\SchemaOrg\Thing\Intangible\AlignmentObject;
use Sohophp\SchemaOrg\Thing\Place;
use Sohophp\SchemaOrg\Thing\Place\AdministrativeArea\Country;
use Sohophp\SchemaOrg\Thing\CreativeWork\Review;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\QualitativeValue\SizeSpecification;
use Sohophp\SchemaOrg\Thing\CreativeWork\Claim;
use Sohophp\SchemaOrg\Thing\Intangible\Grant;
use Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject\VideoObject;
use Sohophp\SchemaOrg\Thing\CreativeWork\Comment;
use Sohophp\SchemaOrg\Thing\CreativeWork\WebPage;
use Sohophp\SchemaOrg\Thing\Event\PublicationEvent;
use Sohophp\SchemaOrg\Thing\CreativeWork\Comment\CorrectionComment;
use Sohophp\SchemaOrg\Thing\Product;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\InteractionCounter;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\MediaEnumeration\IPTCDigitalSourceEnumeration;
use Sohophp\SchemaOrg\Thing\Intangible\ItemList;
use Sohophp\SchemaOrg\Thing\Intangible\Offer;
use Sohophp\SchemaOrg\Thing\Intangible\Demand;
use Sohophp\SchemaOrg\Thing\Intangible\Rating\AggregateRating;
use Sohophp\SchemaOrg\Thing\Intangible\Audience;
use Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject\ImageObject;
use Sohophp\SchemaOrg\Thing\Intangible\Language;

/**
 * The most generic kind of creative work, including books, movies, photographs, software programs, etc.
 * @see https://schema.org/CreativeWork
 * @package Sohophp\SchemaOrg\Thing
 */
class CreativeWork extends Thing
{
    /**
     * The purpose of a work in the context of education; for example, 'assignment', 'group work'.
     * @see https://schema.org/educationalUse
     * @param DefinedTerm|string|array $value
     * @return $this
     */
    public function educationalUse($value)
    {
        $this->setProperty('educationalUse', $value);
        return $this;
    }

    /**
     * @param DefinedTerm|string|array $value
     * @return $this
     */
    public function setEducationalUse($value)
    {
        $this->setProperty('educationalUse', $value);
        return $this;
    }

    /**
     * @param DefinedTerm|string $value
     * @return $this
     */
    public function addEducationalUse($value)
    {
        $current = $this->getProperty('educationalUse');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('educationalUse', $current);
        return $this;
    }

    /**
     * @return DefinedTerm|string|array
     */
    public function getEducationalUse()
    {
        return $this->getProperty('educationalUse');
    }
    /**
     * Indicates the party responsible for generating and publishing the current structured data markup, typically in cases where the structured data is derived automatically from existing published content but published on a different site. For example, student projects and open data initiatives often re-publish existing content with more explicitly structured metadata. The [[sdPublisher]] property helps make such practices more explicit.
     * @see https://schema.org/sdPublisher
     * @param Organization|Person|array $value
     * @return $this
     */
    public function sdPublisher($value)
    {
        $this->setProperty('sdPublisher', $value);
        return $this;
    }

    /**
     * @param Organization|Person|array $value
     * @return $this
     */
    public function setSdPublisher($value)
    {
        $this->setProperty('sdPublisher', $value);
        return $this;
    }

    /**
     * @param Organization|Person $value
     * @return $this
     */
    public function addSdPublisher($value)
    {
        $current = $this->getProperty('sdPublisher');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('sdPublisher', $current);
        return $this;
    }

    /**
     * @return Organization|Person|array
     */
    public function getSdPublisher()
    {
        return $this->getProperty('sdPublisher');
    }
    /**
     * The textual content of this CreativeWork.
     * @see https://schema.org/text
     * @param string|array $value
     * @return $this
     */
    public function text($value)
    {
        $this->setProperty('text', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setText($value)
    {
        $this->setProperty('text', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addText($value)
    {
        $current = $this->getProperty('text');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('text', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getText()
    {
        return $this->getProperty('text');
    }
    /**
     * A secondary title of the CreativeWork.
     * @see https://schema.org/alternativeHeadline
     * @param string|array $value
     * @return $this
     */
    public function alternativeHeadline($value)
    {
        $this->setProperty('alternativeHeadline', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setAlternativeHeadline($value)
    {
        $this->setProperty('alternativeHeadline', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addAlternativeHeadline($value)
    {
        $current = $this->getProperty('alternativeHeadline');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('alternativeHeadline', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getAlternativeHeadline()
    {
        return $this->getProperty('alternativeHeadline');
    }
    /**
     * A person or organization that supports a thing through a pledge, promise, or financial contribution. E.g. a sponsor of a Medical Study or a corporate sponsor of an event.
     * @see https://schema.org/sponsor
     * @param Organization|Person|array $value
     * @return $this
     */
    public function sponsor($value)
    {
        $this->setProperty('sponsor', $value);
        return $this;
    }

    /**
     * @param Organization|Person|array $value
     * @return $this
     */
    public function setSponsor($value)
    {
        $this->setProperty('sponsor', $value);
        return $this;
    }

    /**
     * @param Organization|Person $value
     * @return $this
     */
    public function addSponsor($value)
    {
        $current = $this->getProperty('sponsor');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('sponsor', $current);
        return $this;
    }

    /**
     * @return Organization|Person|array
     */
    public function getSponsor()
    {
        return $this->getProperty('sponsor');
    }
    /**
     * A secondary contributor to the CreativeWork or Event.
     * @see https://schema.org/contributor
     * @param Organization|Person|array $value
     * @return $this
     */
    public function contributor($value)
    {
        $this->setProperty('contributor', $value);
        return $this;
    }

    /**
     * @param Organization|Person|array $value
     * @return $this
     */
    public function setContributor($value)
    {
        $this->setProperty('contributor', $value);
        return $this;
    }

    /**
     * @param Organization|Person $value
     * @return $this
     */
    public function addContributor($value)
    {
        $current = $this->getProperty('contributor');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('contributor', $current);
        return $this;
    }

    /**
     * @return Organization|Person|array
     */
    public function getContributor()
    {
        return $this->getProperty('contributor');
    }
    /**
     * An embedded audio object.
     * @see https://schema.org/audio
     * @param Clip|MusicRecording|AudioObject|array $value
     * @return $this
     */
    public function audio($value)
    {
        $this->setProperty('audio', $value);
        return $this;
    }

    /**
     * @param Clip|MusicRecording|AudioObject|array $value
     * @return $this
     */
    public function setAudio($value)
    {
        $this->setProperty('audio', $value);
        return $this;
    }

    /**
     * @param Clip|MusicRecording|AudioObject $value
     * @return $this
     */
    public function addAudio($value)
    {
        $current = $this->getProperty('audio');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('audio', $current);
        return $this;
    }

    /**
     * @return Clip|MusicRecording|AudioObject|array
     */
    public function getAudio()
    {
        return $this->getProperty('audio');
    }
    /**
     * The predominant type or kind characterizing the learning resource. For example, 'presentation', 'handout'.
     * @see https://schema.org/learningResourceType
     * @param string|DefinedTerm|array $value
     * @return $this
     */
    public function learningResourceType($value)
    {
        $this->setProperty('learningResourceType', $value);
        return $this;
    }

    /**
     * @param string|DefinedTerm|array $value
     * @return $this
     */
    public function setLearningResourceType($value)
    {
        $this->setProperty('learningResourceType', $value);
        return $this;
    }

    /**
     * @param string|DefinedTerm $value
     * @return $this
     */
    public function addLearningResourceType($value)
    {
        $current = $this->getProperty('learningResourceType');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('learningResourceType', $current);
        return $this;
    }

    /**
     * @return string|DefinedTerm|array
     */
    public function getLearningResourceType()
    {
        return $this->getProperty('learningResourceType');
    }
    /**
     * The "temporal" property can be used in cases where more specific properties (e.g. [[temporalCoverage]], [[dateCreated]], [[dateModified]], [[datePublished]]) are not known to be appropriate.
     * @see https://schema.org/temporal
     * @param string|array $value
     * @return $this
     */
    public function temporal($value)
    {
        $this->setProperty('temporal', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setTemporal($value)
    {
        $this->setProperty('temporal', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addTemporal($value)
    {
        $current = $this->getProperty('temporal');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('temporal', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getTemporal()
    {
        return $this->getProperty('temporal');
    }
    /**
     * The date on which the CreativeWork was created or the item was added to a DataFeed.
     * @see https://schema.org/dateCreated
     * @param mixed $value
     * @return $this
     */
    public function dateCreated($value)
    {
        $this->setProperty('dateCreated', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setDateCreated($value)
    {
        $this->setProperty('dateCreated', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function addDateCreated($value)
    {
        $current = $this->getProperty('dateCreated');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('dateCreated', $current);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDateCreated()
    {
        return $this->getProperty('dateCreated');
    }
    /**
     * A link to the page containing the comments of the CreativeWork.
     * @see https://schema.org/discussionUrl
     * @param string|array $value
     * @return $this
     */
    public function discussionUrl($value)
    {
        $this->setProperty('discussionUrl', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setDiscussionUrl($value)
    {
        $this->setProperty('discussionUrl', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addDiscussionUrl($value)
    {
        $current = $this->getProperty('discussionUrl');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('discussionUrl', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getDiscussionUrl()
    {
        return $this->getProperty('discussionUrl');
    }
    /**
     * The typical expected age range, e.g. '7-9', '11-'.
     * @see https://schema.org/typicalAgeRange
     * @param string|array $value
     * @return $this
     */
    public function typicalAgeRange($value)
    {
        $this->setProperty('typicalAgeRange', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setTypicalAgeRange($value)
    {
        $this->setProperty('typicalAgeRange', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addTypicalAgeRange($value)
    {
        $current = $this->getProperty('typicalAgeRange');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('typicalAgeRange', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getTypicalAgeRange()
    {
        return $this->getProperty('typicalAgeRange');
    }
    /**
     * Official rating of a piece of content&#x2014;for example, 'MPAA PG-13'.
     * @see https://schema.org/contentRating
     * @param string|Rating|array $value
     * @return $this
     */
    public function contentRating($value)
    {
        $this->setProperty('contentRating', $value);
        return $this;
    }

    /**
     * @param string|Rating|array $value
     * @return $this
     */
    public function setContentRating($value)
    {
        $this->setProperty('contentRating', $value);
        return $this;
    }

    /**
     * @param string|Rating $value
     * @return $this
     */
    public function addContentRating($value)
    {
        $current = $this->getProperty('contentRating');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('contentRating', $current);
        return $this;
    }

    /**
     * @return string|Rating|array
     */
    public function getContentRating()
    {
        return $this->getProperty('contentRating');
    }
    /**
     * A person or organization that supports (sponsors) something through some kind of financial contribution.
     * @see https://schema.org/funder
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
     * @param Organization|Person $value
     * @return $this
     */
    public function addFunder($value)
    {
        $current = $this->getProperty('funder');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('funder', $current);
        return $this;
    }

    /**
     * @return Organization|Person|array
     */
    public function getFunder()
    {
        return $this->getProperty('funder');
    }
    /**
     * Example/instance/realization/derivation of the concept of this creative work. E.g. the paperback edition, first edition, or e-book.
     * @see https://schema.org/workExample
     * @param CreativeWork|array $value
     * @return $this
     */
    public function workExample($value)
    {
        $this->setProperty('workExample', $value);
        return $this;
    }

    /**
     * @param CreativeWork|array $value
     * @return $this
     */
    public function setWorkExample($value)
    {
        $this->setProperty('workExample', $value);
        return $this;
    }

    /**
     * @param CreativeWork $value
     * @return $this
     */
    public function addWorkExample($value)
    {
        $current = $this->getProperty('workExample');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('workExample', $current);
        return $this;
    }

    /**
     * @return CreativeWork|array
     */
    public function getWorkExample()
    {
        return $this->getProperty('workExample');
    }
    /**
     * The author of this content or rating. Please note that author is special in that HTML 5 provides a special mechanism for indicating authorship via the rel tag. That is equivalent to this and may be used interchangeably.
     * @see https://schema.org/author
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
     * A license document that applies to this content, typically indicated by URL.
     * @see https://schema.org/license
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
     * @param CreativeWork|string $value
     * @return $this
     */
    public function addLicense($value)
    {
        $current = $this->getProperty('license');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('license', $current);
        return $this;
    }

    /**
     * @return CreativeWork|string|array
     */
    public function getLicense()
    {
        return $this->getProperty('license');
    }
    /**
     * Conditions that affect the availability of, or method(s) of access to, an item. Typically used for real world items such as an [[ArchiveComponent]] held by an [[ArchiveOrganization]]. This property is not suitable for use as a general Web access control mechanism. It is expressed only in natural language. For example "Available by appointment from the Reading Room" or "Accessible only from logged-in accounts ".
     * @see https://schema.org/conditionsOfAccess
     * @param string|array $value
     * @return $this
     */
    public function conditionsOfAccess($value)
    {
        $this->setProperty('conditionsOfAccess', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setConditionsOfAccess($value)
    {
        $this->setProperty('conditionsOfAccess', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addConditionsOfAccess($value)
    {
        $current = $this->getProperty('conditionsOfAccess');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('conditionsOfAccess', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getConditionsOfAccess()
    {
        return $this->getProperty('conditionsOfAccess');
    }
    /**
     * Approximate or typical time it usually takes to work with or through the content of this work for the typical or target audience.
     * @see https://schema.org/timeRequired
     * @param Duration|array $value
     * @return $this
     */
    public function timeRequired($value)
    {
        $this->setProperty('timeRequired', $value);
        return $this;
    }

    /**
     * @param Duration|array $value
     * @return $this
     */
    public function setTimeRequired($value)
    {
        $this->setProperty('timeRequired', $value);
        return $this;
    }

    /**
     * @param Duration $value
     * @return $this
     */
    public function addTimeRequired($value)
    {
        $current = $this->getProperty('timeRequired');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('timeRequired', $current);
        return $this;
    }

    /**
     * @return Duration|array
     */
    public function getTimeRequired()
    {
        return $this->getProperty('timeRequired');
    }
    /**
     * The date on which the CreativeWork was most recently modified or when the item's entry was modified within a DataFeed.
     * @see https://schema.org/dateModified
     * @param mixed $value
     * @return $this
     */
    public function dateModified($value)
    {
        $this->setProperty('dateModified', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setDateModified($value)
    {
        $this->setProperty('dateModified', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function addDateModified($value)
    {
        $current = $this->getProperty('dateModified');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('dateModified', $current);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDateModified()
    {
        return $this->getProperty('dateModified');
    }
    /**
     * The creator/author of this CreativeWork. This is the same as the Author property for CreativeWork.
     * @see https://schema.org/creator
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
     * @param Organization|Person $value
     * @return $this
     */
    public function addCreator($value)
    {
        $current = $this->getProperty('creator');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('creator', $current);
        return $this;
    }

    /**
     * @return Organization|Person|array
     */
    public function getCreator()
    {
        return $this->getProperty('creator');
    }
    /**
     * A media object that encodes this CreativeWork. This property is a synonym for encoding.
     * @see https://schema.org/associatedMedia
     * @param MediaObject|array $value
     * @return $this
     */
    public function associatedMedia($value)
    {
        $this->setProperty('associatedMedia', $value);
        return $this;
    }

    /**
     * @param MediaObject|array $value
     * @return $this
     */
    public function setAssociatedMedia($value)
    {
        $this->setProperty('associatedMedia', $value);
        return $this;
    }

    /**
     * @param MediaObject $value
     * @return $this
     */
    public function addAssociatedMedia($value)
    {
        $current = $this->getProperty('associatedMedia');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('associatedMedia', $current);
        return $this;
    }

    /**
     * @return MediaObject|array
     */
    public function getAssociatedMedia()
    {
        return $this->getProperty('associatedMedia');
    }
    /**
     * The Event where the CreativeWork was recorded. The CreativeWork may capture all or part of the event.
     * @see https://schema.org/recordedAt
     * @param Event|array $value
     * @return $this
     */
    public function recordedAt($value)
    {
        $this->setProperty('recordedAt', $value);
        return $this;
    }

    /**
     * @param Event|array $value
     * @return $this
     */
    public function setRecordedAt($value)
    {
        $this->setProperty('recordedAt', $value);
        return $this;
    }

    /**
     * @param Event $value
     * @return $this
     */
    public function addRecordedAt($value)
    {
        $current = $this->getProperty('recordedAt');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('recordedAt', $current);
        return $this;
    }

    /**
     * @return Event|array
     */
    public function getRecordedAt()
    {
        return $this->getProperty('recordedAt');
    }
    /**
     * An alignment to an established educational framework. This property should not be used where the nature of the alignment can be described using a simple property, for example to express that a resource [[teaches]] or [[assesses]] a competency.
     * @see https://schema.org/educationalAlignment
     * @param AlignmentObject|array $value
     * @return $this
     */
    public function educationalAlignment($value)
    {
        $this->setProperty('educationalAlignment', $value);
        return $this;
    }

    /**
     * @param AlignmentObject|array $value
     * @return $this
     */
    public function setEducationalAlignment($value)
    {
        $this->setProperty('educationalAlignment', $value);
        return $this;
    }

    /**
     * @param AlignmentObject $value
     * @return $this
     */
    public function addEducationalAlignment($value)
    {
        $current = $this->getProperty('educationalAlignment');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('educationalAlignment', $current);
        return $this;
    }

    /**
     * @return AlignmentObject|array
     */
    public function getEducationalAlignment()
    {
        return $this->getProperty('educationalAlignment');
    }
    /**
     * The work that this work has been translated from. E.g. 物种起源 is a translationOf “On the Origin of Species”.
     * @see https://schema.org/translationOfWork
     * @param CreativeWork|array $value
     * @return $this
     */
    public function translationOfWork($value)
    {
        $this->setProperty('translationOfWork', $value);
        return $this;
    }

    /**
     * @param CreativeWork|array $value
     * @return $this
     */
    public function setTranslationOfWork($value)
    {
        $this->setProperty('translationOfWork', $value);
        return $this;
    }

    /**
     * @param CreativeWork $value
     * @return $this
     */
    public function addTranslationOfWork($value)
    {
        $current = $this->getProperty('translationOfWork');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('translationOfWork', $current);
        return $this;
    }

    /**
     * @return CreativeWork|array
     */
    public function getTranslationOfWork()
    {
        return $this->getProperty('translationOfWork');
    }
    /**
     * Indicates an item or CreativeWork that this item, or CreativeWork (in some sense), is part of.
     * @see https://schema.org/isPartOf
     * @param CreativeWork|string|array $value
     * @return $this
     */
    public function isPartOf($value)
    {
        $this->setProperty('isPartOf', $value);
        return $this;
    }

    /**
     * @param CreativeWork|string|array $value
     * @return $this
     */
    public function setIsPartOf($value)
    {
        $this->setProperty('isPartOf', $value);
        return $this;
    }

    /**
     * @param CreativeWork|string $value
     * @return $this
     */
    public function addIsPartOf($value)
    {
        $current = $this->getProperty('isPartOf');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('isPartOf', $current);
        return $this;
    }

    /**
     * @return CreativeWork|string|array
     */
    public function getIsPartOf()
    {
        return $this->getProperty('isPartOf');
    }
    /**
     * Indicates that the CreativeWork contains a reference to, but is not necessarily about a concept.
     * @see https://schema.org/mentions
     * @param Thing|array $value
     * @return $this
     */
    public function mentions($value)
    {
        $this->setProperty('mentions', $value);
        return $this;
    }

    /**
     * @param Thing|array $value
     * @return $this
     */
    public function setMentions($value)
    {
        $this->setProperty('mentions', $value);
        return $this;
    }

    /**
     * @param Thing $value
     * @return $this
     */
    public function addMentions($value)
    {
        $current = $this->getProperty('mentions');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('mentions', $current);
        return $this;
    }

    /**
     * @return Thing|array
     */
    public function getMentions()
    {
        return $this->getProperty('mentions');
    }
    /**
     * The location at which an item can be viewed or experienced in-person.
     * @see https://schema.org/displayLocation
     * @param Place|array $value
     * @return $this
     */
    public function displayLocation($value)
    {
        $this->setProperty('displayLocation', $value);
        return $this;
    }

    /**
     * @param Place|array $value
     * @return $this
     */
    public function setDisplayLocation($value)
    {
        $this->setProperty('displayLocation', $value);
        return $this;
    }

    /**
     * @param Place $value
     * @return $this
     */
    public function addDisplayLocation($value)
    {
        $current = $this->getProperty('displayLocation');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('displayLocation', $current);
        return $this;
    }

    /**
     * @return Place|array
     */
    public function getDisplayLocation()
    {
        return $this->getProperty('displayLocation');
    }
    /**
     * Date the content expires and is no longer useful or available. For example a [[VideoObject]] or [[NewsArticle]] whose availability or relevance is time-limited, a [[ClaimReview]] fact check whose publisher wants to indicate that it may no longer be relevant (or helpful to highlight) after some date, or a [[Certification]] the validity has expired.
     * @see https://schema.org/expires
     * @param mixed $value
     * @return $this
     */
    public function expires($value)
    {
        $this->setProperty('expires', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setExpires($value)
    {
        $this->setProperty('expires', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function addExpires($value)
    {
        $current = $this->getProperty('expires');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('expires', $current);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getExpires()
    {
        return $this->getProperty('expires');
    }
    /**
     * The country of origin of something, including products as well as creative works such as movie and TV content. In the case of TV and movie, this would be the country of the principle offices of the production company or individual responsible for the movie. For other kinds of [[CreativeWork]] it is difficult to provide fully general guidance, and properties such as [[contentLocation]] and [[locationCreated]] may be more applicable. In the case of products, the country of origin of the product. The exact interpretation of this may vary by context and product type, and cannot be fully enumerated here.
     * @see https://schema.org/countryOfOrigin
     * @param Country|array $value
     * @return $this
     */
    public function countryOfOrigin($value)
    {
        $this->setProperty('countryOfOrigin', $value);
        return $this;
    }

    /**
     * @param Country|array $value
     * @return $this
     */
    public function setCountryOfOrigin($value)
    {
        $this->setProperty('countryOfOrigin', $value);
        return $this;
    }

    /**
     * @param Country $value
     * @return $this
     */
    public function addCountryOfOrigin($value)
    {
        $current = $this->getProperty('countryOfOrigin');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('countryOfOrigin', $current);
        return $this;
    }

    /**
     * @return Country|array
     */
    public function getCountryOfOrigin()
    {
        return $this->getProperty('countryOfOrigin');
    }
    /**
     * A citation or reference to another creative work, such as another publication, web page, scholarly article, etc.
     * @see https://schema.org/citation
     * @param CreativeWork|string|array $value
     * @return $this
     */
    public function citation($value)
    {
        $this->setProperty('citation', $value);
        return $this;
    }

    /**
     * @param CreativeWork|string|array $value
     * @return $this
     */
    public function setCitation($value)
    {
        $this->setProperty('citation', $value);
        return $this;
    }

    /**
     * @param CreativeWork|string $value
     * @return $this
     */
    public function addCitation($value)
    {
        $current = $this->getProperty('citation');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('citation', $current);
        return $this;
    }

    /**
     * @return CreativeWork|string|array
     */
    public function getCitation()
    {
        return $this->getProperty('citation');
    }
    /**
     * Indicates an item or CreativeWork that is part of this item, or CreativeWork (in some sense).
     * @see https://schema.org/hasPart
     * @param CreativeWork|array $value
     * @return $this
     */
    public function hasPart($value)
    {
        $this->setProperty('hasPart', $value);
        return $this;
    }

    /**
     * @param CreativeWork|array $value
     * @return $this
     */
    public function setHasPart($value)
    {
        $this->setProperty('hasPart', $value);
        return $this;
    }

    /**
     * @param CreativeWork $value
     * @return $this
     */
    public function addHasPart($value)
    {
        $current = $this->getProperty('hasPart');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('hasPart', $current);
        return $this;
    }

    /**
     * @return CreativeWork|array
     */
    public function getHasPart()
    {
        return $this->getProperty('hasPart');
    }
    /**
     * Review of the item.
     * @see https://schema.org/reviews
     * @param Review|array $value
     * @return $this
     */
    public function reviews($value)
    {
        $this->setProperty('reviews', $value);
        return $this;
    }

    /**
     * @param Review|array $value
     * @return $this
     */
    public function setReviews($value)
    {
        $this->setProperty('reviews', $value);
        return $this;
    }

    /**
     * @param Review $value
     * @return $this
     */
    public function addReviews($value)
    {
        $current = $this->getProperty('reviews');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('reviews', $current);
        return $this;
    }

    /**
     * @return Review|array
     */
    public function getReviews()
    {
        return $this->getProperty('reviews');
    }
    /**
     * The "spatial" property can be used in cases when more specific properties (e.g. [[locationCreated]], [[spatialCoverage]], [[contentLocation]]) are not known to be appropriate.
     * @see https://schema.org/spatial
     * @param Place|array $value
     * @return $this
     */
    public function spatial($value)
    {
        $this->setProperty('spatial', $value);
        return $this;
    }

    /**
     * @param Place|array $value
     * @return $this
     */
    public function setSpatial($value)
    {
        $this->setProperty('spatial', $value);
        return $this;
    }

    /**
     * @param Place $value
     * @return $this
     */
    public function addSpatial($value)
    {
        $current = $this->getProperty('spatial');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('spatial', $current);
        return $this;
    }

    /**
     * @return Place|array
     */
    public function getSpatial()
    {
        return $this->getProperty('spatial');
    }
    /**
     * Fictional person connected with a creative work.
     * @see https://schema.org/character
     * @param Person|array $value
     * @return $this
     */
    public function character($value)
    {
        $this->setProperty('character', $value);
        return $this;
    }

    /**
     * @param Person|array $value
     * @return $this
     */
    public function setCharacter($value)
    {
        $this->setProperty('character', $value);
        return $this;
    }

    /**
     * @param Person $value
     * @return $this
     */
    public function addCharacter($value)
    {
        $current = $this->getProperty('character');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('character', $current);
        return $this;
    }

    /**
     * @return Person|array
     */
    public function getCharacter()
    {
        return $this->getProperty('character');
    }
    /**
     * The quantity of the materials being described or an expression of the physical space they occupy.
     * @see https://schema.org/materialExtent
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
     * @param QuantitativeValue|string $value
     * @return $this
     */
    public function addMaterialExtent($value)
    {
        $current = $this->getProperty('materialExtent');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('materialExtent', $current);
        return $this;
    }

    /**
     * @return QuantitativeValue|string|array
     */
    public function getMaterialExtent()
    {
        return $this->getProperty('materialExtent');
    }
    /**
     * The number of words in the text of the CreativeWork such as an Article, Book, etc.
     * @see https://schema.org/wordCount
     * @param int|array $value
     * @return $this
     */
    public function wordCount($value)
    {
        $this->setProperty('wordCount', $value);
        return $this;
    }

    /**
     * @param int|array $value
     * @return $this
     */
    public function setWordCount($value)
    {
        $this->setProperty('wordCount', $value);
        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function addWordCount($value)
    {
        $current = $this->getProperty('wordCount');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('wordCount', $current);
        return $this;
    }

    /**
     * @return int|array
     */
    public function getWordCount()
    {
        return $this->getProperty('wordCount');
    }
    /**
     * The item being described is intended to assess the competency or learning outcome defined by the referenced term.
     * @see https://schema.org/assesses
     * @param string|DefinedTerm|array $value
     * @return $this
     */
    public function assesses($value)
    {
        $this->setProperty('assesses', $value);
        return $this;
    }

    /**
     * @param string|DefinedTerm|array $value
     * @return $this
     */
    public function setAssesses($value)
    {
        $this->setProperty('assesses', $value);
        return $this;
    }

    /**
     * @param string|DefinedTerm $value
     * @return $this
     */
    public function addAssesses($value)
    {
        $current = $this->getProperty('assesses');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('assesses', $current);
        return $this;
    }

    /**
     * @return string|DefinedTerm|array
     */
    public function getAssesses()
    {
        return $this->getProperty('assesses');
    }
    /**
     * Text that can be used to credit person(s) and/or organization(s) associated with a published Creative Work.
     * @see https://schema.org/creditText
     * @param string|array $value
     * @return $this
     */
    public function creditText($value)
    {
        $this->setProperty('creditText', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setCreditText($value)
    {
        $this->setProperty('creditText', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addCreditText($value)
    {
        $current = $this->getProperty('creditText');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('creditText', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getCreditText()
    {
        return $this->getProperty('creditText');
    }
    /**
     * Media type typically expressed using a MIME format (see [IANA site](http://www.iana.org/assignments/media-types/media-types.xhtml) and [MDN reference](https://developer.mozilla.org/en-US/docs/Web/HTTP/Basics_of_HTTP/MIME_types)), e.g. application/zip for a SoftwareApplication binary, audio/mpeg for .mp3 etc. In cases where a [[CreativeWork]] has several media type representations, [[encoding]] can be used to indicate each [[MediaObject]] alongside particular [[encodingFormat]] information. Unregistered or niche encoding and file formats can be indicated instead via the most appropriate URL, e.g. defining Web page or a Wikipedia/Wikidata entry.
     * @see https://schema.org/encodingFormat
     * @param string|array $value
     * @return $this
     */
    public function encodingFormat($value)
    {
        $this->setProperty('encodingFormat', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setEncodingFormat($value)
    {
        $this->setProperty('encodingFormat', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addEncodingFormat($value)
    {
        $current = $this->getProperty('encodingFormat');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('encodingFormat', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getEncodingFormat()
    {
        return $this->getProperty('encodingFormat');
    }
    /**
     * A standardized size of a product or creative work, specified either through a simple textual string (for example 'XL', '32Wx34L'), a QuantitativeValue with a unitCode, or a comprehensive and structured [[SizeSpecification]]; in other cases, the [[width]], [[height]], [[depth]] and [[weight]] properties may be more applicable.
     * @see https://schema.org/size
     * @param DefinedTerm|QuantitativeValue|SizeSpecification|string|array $value
     * @return $this
     */
    public function size($value)
    {
        $this->setProperty('size', $value);
        return $this;
    }

    /**
     * @param DefinedTerm|QuantitativeValue|SizeSpecification|string|array $value
     * @return $this
     */
    public function setSize($value)
    {
        $this->setProperty('size', $value);
        return $this;
    }

    /**
     * @param DefinedTerm|QuantitativeValue|SizeSpecification|string $value
     * @return $this
     */
    public function addSize($value)
    {
        $current = $this->getProperty('size');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('size', $current);
        return $this;
    }

    /**
     * @return DefinedTerm|QuantitativeValue|SizeSpecification|string|array
     */
    public function getSize()
    {
        return $this->getProperty('size');
    }
    /**
     * The location depicted or described in the content. For example, the location in a photograph or painting.
     * @see https://schema.org/contentLocation
     * @param Place|array $value
     * @return $this
     */
    public function contentLocation($value)
    {
        $this->setProperty('contentLocation', $value);
        return $this;
    }

    /**
     * @param Place|array $value
     * @return $this
     */
    public function setContentLocation($value)
    {
        $this->setProperty('contentLocation', $value);
        return $this;
    }

    /**
     * @param Place $value
     * @return $this
     */
    public function addContentLocation($value)
    {
        $current = $this->getProperty('contentLocation');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('contentLocation', $current);
        return $this;
    }

    /**
     * @return Place|array
     */
    public function getContentLocation()
    {
        return $this->getProperty('contentLocation');
    }
    /**
     * The predominant mode of learning supported by the learning resource. Acceptable values are 'active', 'expositive', or 'mixed'.
     * @see https://schema.org/interactivityType
     * @param string|array $value
     * @return $this
     */
    public function interactivityType($value)
    {
        $this->setProperty('interactivityType', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setInteractivityType($value)
    {
        $this->setProperty('interactivityType', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addInteractivityType($value)
    {
        $current = $this->getProperty('interactivityType');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('interactivityType', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getInteractivityType()
    {
        return $this->getProperty('interactivityType');
    }
    /**
     * Keywords or tags used to describe some item. Multiple textual entries in a keywords list are typically delimited by commas, or by repeating the property.
     * @see https://schema.org/keywords
     * @param DefinedTerm|string|array $value
     * @return $this
     */
    public function keywords($value)
    {
        $this->setProperty('keywords', $value);
        return $this;
    }

    /**
     * @param DefinedTerm|string|array $value
     * @return $this
     */
    public function setKeywords($value)
    {
        $this->setProperty('keywords', $value);
        return $this;
    }

    /**
     * @param DefinedTerm|string $value
     * @return $this
     */
    public function addKeywords($value)
    {
        $current = $this->getProperty('keywords');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('keywords', $current);
        return $this;
    }

    /**
     * @return DefinedTerm|string|array
     */
    public function getKeywords()
    {
        return $this->getProperty('keywords');
    }
    /**
     * A human-readable summary of specific accessibility features or deficiencies, consistent with the other accessibility metadata but expressing subtleties such as "short descriptions are present but long descriptions will be needed for non-visual users" or "short descriptions are present and no long descriptions are needed".
     * @see https://schema.org/accessibilitySummary
     * @param string|array $value
     * @return $this
     */
    public function accessibilitySummary($value)
    {
        $this->setProperty('accessibilitySummary', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setAccessibilitySummary($value)
    {
        $this->setProperty('accessibilitySummary', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addAccessibilitySummary($value)
    {
        $current = $this->getProperty('accessibilitySummary');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('accessibilitySummary', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getAccessibilitySummary()
    {
        return $this->getProperty('accessibilitySummary');
    }
    /**
     * The publishingPrinciples property indicates (typically via [[URL]]) a document describing the editorial principles of an [[Organization]] (or individual, e.g. a [[Person]] writing a blog) that relate to their activities as a publisher, e.g. ethics or diversity policies. When applied to a [[CreativeWork]] (e.g. [[NewsArticle]]) the principles are those of the party primarily responsible for the creation of the [[CreativeWork]]. While such policies are most typically expressed in natural language, sometimes related information (e.g. indicating a [[funder]]) can be expressed using schema.org terminology.
     * @see https://schema.org/publishingPrinciples
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
     * @param CreativeWork|string $value
     * @return $this
     */
    public function addPublishingPrinciples($value)
    {
        $current = $this->getProperty('publishingPrinciples');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('publishingPrinciples', $current);
        return $this;
    }

    /**
     * @return CreativeWork|string|array
     */
    public function getPublishingPrinciples()
    {
        return $this->getProperty('publishingPrinciples');
    }
    /**
     * The publisher of the article in question.
     * @see https://schema.org/publisher
     * @param Organization|Person|array $value
     * @return $this
     */
    public function publisher($value)
    {
        $this->setProperty('publisher', $value);
        return $this;
    }

    /**
     * @param Organization|Person|array $value
     * @return $this
     */
    public function setPublisher($value)
    {
        $this->setProperty('publisher', $value);
        return $this;
    }

    /**
     * @param Organization|Person $value
     * @return $this
     */
    public function addPublisher($value)
    {
        $current = $this->getProperty('publisher');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('publisher', $current);
        return $this;
    }

    /**
     * @return Organization|Person|array
     */
    public function getPublisher()
    {
        return $this->getProperty('publisher');
    }
    /**
     * Date of first publication or broadcast. For example the date a [[CreativeWork]] was broadcast or a [[Certification]] was issued.
     * @see https://schema.org/datePublished
     * @param mixed $value
     * @return $this
     */
    public function datePublished($value)
    {
        $this->setProperty('datePublished', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setDatePublished($value)
    {
        $this->setProperty('datePublished', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function addDatePublished($value)
    {
        $current = $this->getProperty('datePublished');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('datePublished', $current);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDatePublished()
    {
        return $this->getProperty('datePublished');
    }
    /**
     * Used to indicate a specific claim contained, implied, translated or refined from the content of a [[MediaObject]] or other [[CreativeWork]]. The interpreting party can be indicated using [[claimInterpreter]].
     * @see https://schema.org/interpretedAsClaim
     * @param Claim|array $value
     * @return $this
     */
    public function interpretedAsClaim($value)
    {
        $this->setProperty('interpretedAsClaim', $value);
        return $this;
    }

    /**
     * @param Claim|array $value
     * @return $this
     */
    public function setInterpretedAsClaim($value)
    {
        $this->setProperty('interpretedAsClaim', $value);
        return $this;
    }

    /**
     * @param Claim $value
     * @return $this
     */
    public function addInterpretedAsClaim($value)
    {
        $current = $this->getProperty('interpretedAsClaim');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('interpretedAsClaim', $current);
        return $this;
    }

    /**
     * @return Claim|array
     */
    public function getInterpretedAsClaim()
    {
        return $this->getProperty('interpretedAsClaim');
    }
    /**
     * A [[Grant]] that directly or indirectly provide funding or sponsorship for this item. See also [[ownershipFundingInfo]].
     * @see https://schema.org/funding
     * @param Grant|array $value
     * @return $this
     */
    public function funding($value)
    {
        $this->setProperty('funding', $value);
        return $this;
    }

    /**
     * @param Grant|array $value
     * @return $this
     */
    public function setFunding($value)
    {
        $this->setProperty('funding', $value);
        return $this;
    }

    /**
     * @param Grant $value
     * @return $this
     */
    public function addFunding($value)
    {
        $current = $this->getProperty('funding');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('funding', $current);
        return $this;
    }

    /**
     * @return Grant|array
     */
    public function getFunding()
    {
        return $this->getProperty('funding');
    }
    /**
     * An embedded video object.
     * @see https://schema.org/video
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
     * @param VideoObject|Clip $value
     * @return $this
     */
    public function addVideo($value)
    {
        $current = $this->getProperty('video');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('video', $current);
        return $this;
    }

    /**
     * @return VideoObject|Clip|array
     */
    public function getVideo()
    {
        return $this->getProperty('video');
    }
    /**
     * Indicates that the resource is compatible with the referenced accessibility API. Values should be drawn from the [approved vocabulary](https://www.w3.org/2021/a11y-discov-vocab/latest/#accessibilityAPI-vocabulary).
     * @see https://schema.org/accessibilityAPI
     * @param string|array $value
     * @return $this
     */
    public function accessibilityAPI($value)
    {
        $this->setProperty('accessibilityAPI', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setAccessibilityAPI($value)
    {
        $this->setProperty('accessibilityAPI', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addAccessibilityAPI($value)
    {
        $current = $this->getProperty('accessibilityAPI');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('accessibilityAPI', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getAccessibilityAPI()
    {
        return $this->getProperty('accessibilityAPI');
    }
    /**
     * Comments, typically from users.
     * @see https://schema.org/comment
     * @param Comment|array $value
     * @return $this
     */
    public function comment($value)
    {
        $this->setProperty('comment', $value);
        return $this;
    }

    /**
     * @param Comment|array $value
     * @return $this
     */
    public function setComment($value)
    {
        $this->setProperty('comment', $value);
        return $this;
    }

    /**
     * @param Comment $value
     * @return $this
     */
    public function addComment($value)
    {
        $current = $this->getProperty('comment');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('comment', $current);
        return $this;
    }

    /**
     * @return Comment|array
     */
    public function getComment()
    {
        return $this->getProperty('comment');
    }
    /**
     * Text of a notice appropriate for describing the copyright aspects of this Creative Work, ideally indicating the owner of the copyright for the Work.
     * @see https://schema.org/copyrightNotice
     * @param string|array $value
     * @return $this
     */
    public function copyrightNotice($value)
    {
        $this->setProperty('copyrightNotice', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setCopyrightNotice($value)
    {
        $this->setProperty('copyrightNotice', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addCopyrightNotice($value)
    {
        $current = $this->getProperty('copyrightNotice');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('copyrightNotice', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getCopyrightNotice()
    {
        return $this->getProperty('copyrightNotice');
    }
    /**
     * Indicates a page or other link involved in archival of a [[CreativeWork]]. In the case of [[MediaReview]], the items in a [[MediaReviewItem]] may often become inaccessible, but be archived by archival, journalistic, activist, or law enforcement organizations. In such cases, the referenced page may not directly publish the content.
     * @see https://schema.org/archivedAt
     * @param WebPage|string|array $value
     * @return $this
     */
    public function archivedAt($value)
    {
        $this->setProperty('archivedAt', $value);
        return $this;
    }

    /**
     * @param WebPage|string|array $value
     * @return $this
     */
    public function setArchivedAt($value)
    {
        $this->setProperty('archivedAt', $value);
        return $this;
    }

    /**
     * @param WebPage|string $value
     * @return $this
     */
    public function addArchivedAt($value)
    {
        $current = $this->getProperty('archivedAt');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('archivedAt', $current);
        return $this;
    }

    /**
     * @return WebPage|string|array
     */
    public function getArchivedAt()
    {
        return $this->getProperty('archivedAt');
    }
    /**
     * Indicates the date on which the current structured data was generated / published. Typically used alongside [[sdPublisher]].
     * @see https://schema.org/sdDatePublished
     * @param mixed $value
     * @return $this
     */
    public function sdDatePublished($value)
    {
        $this->setProperty('sdDatePublished', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setSdDatePublished($value)
    {
        $this->setProperty('sdDatePublished', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function addSdDatePublished($value)
    {
        $current = $this->getProperty('sdDatePublished');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('sdDatePublished', $current);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSdDatePublished()
    {
        return $this->getProperty('sdDatePublished');
    }
    /**
     * A thumbnail image relevant to the Thing.
     * @see https://schema.org/thumbnailUrl
     * @param string|array $value
     * @return $this
     */
    public function thumbnailUrl($value)
    {
        $this->setProperty('thumbnailUrl', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setThumbnailUrl($value)
    {
        $this->setProperty('thumbnailUrl', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addThumbnailUrl($value)
    {
        $current = $this->getProperty('thumbnailUrl');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('thumbnailUrl', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getThumbnailUrl()
    {
        return $this->getProperty('thumbnailUrl');
    }
    /**
     * The location where the CreativeWork was created, which may not be the same as the location depicted in the CreativeWork.
     * @see https://schema.org/locationCreated
     * @param Place|array $value
     * @return $this
     */
    public function locationCreated($value)
    {
        $this->setProperty('locationCreated', $value);
        return $this;
    }

    /**
     * @param Place|array $value
     * @return $this
     */
    public function setLocationCreated($value)
    {
        $this->setProperty('locationCreated', $value);
        return $this;
    }

    /**
     * @param Place $value
     * @return $this
     */
    public function addLocationCreated($value)
    {
        $current = $this->getProperty('locationCreated');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('locationCreated', $current);
        return $this;
    }

    /**
     * @return Place|array
     */
    public function getLocationCreated()
    {
        return $this->getProperty('locationCreated');
    }
    /**
     * Indicates a page documenting how licenses can be purchased or otherwise acquired, for the current item.
     * @see https://schema.org/acquireLicensePage
     * @param CreativeWork|string|array $value
     * @return $this
     */
    public function acquireLicensePage($value)
    {
        $this->setProperty('acquireLicensePage', $value);
        return $this;
    }

    /**
     * @param CreativeWork|string|array $value
     * @return $this
     */
    public function setAcquireLicensePage($value)
    {
        $this->setProperty('acquireLicensePage', $value);
        return $this;
    }

    /**
     * @param CreativeWork|string $value
     * @return $this
     */
    public function addAcquireLicensePage($value)
    {
        $current = $this->getProperty('acquireLicensePage');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('acquireLicensePage', $current);
        return $this;
    }

    /**
     * @return CreativeWork|string|array
     */
    public function getAcquireLicensePage()
    {
        return $this->getProperty('acquireLicensePage');
    }
    /**
     * The year during which the claimed copyright for the CreativeWork was first asserted.
     * @see https://schema.org/copyrightYear
     * @param mixed $value
     * @return $this
     */
    public function copyrightYear($value)
    {
        $this->setProperty('copyrightYear', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setCopyrightYear($value)
    {
        $this->setProperty('copyrightYear', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function addCopyrightYear($value)
    {
        $current = $this->getProperty('copyrightYear');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('copyrightYear', $current);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCopyrightYear()
    {
        return $this->getProperty('copyrightYear');
    }
    /**
     * A review of the item.
     * @see https://schema.org/review
     * @param Review|array $value
     * @return $this
     */
    public function review($value)
    {
        $this->setProperty('review', $value);
        return $this;
    }

    /**
     * @param Review|array $value
     * @return $this
     */
    public function setReview($value)
    {
        $this->setProperty('review', $value);
        return $this;
    }

    /**
     * @param Review $value
     * @return $this
     */
    public function addReview($value)
    {
        $current = $this->getProperty('review');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('review', $current);
        return $this;
    }

    /**
     * @return Review|array
     */
    public function getReview()
    {
        return $this->getProperty('review');
    }
    /**
     * A publication event associated with the item.
     * @see https://schema.org/publication
     * @param PublicationEvent|array $value
     * @return $this
     */
    public function publication($value)
    {
        $this->setProperty('publication', $value);
        return $this;
    }

    /**
     * @param PublicationEvent|array $value
     * @return $this
     */
    public function setPublication($value)
    {
        $this->setProperty('publication', $value);
        return $this;
    }

    /**
     * @param PublicationEvent $value
     * @return $this
     */
    public function addPublication($value)
    {
        $current = $this->getProperty('publication');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('publication', $current);
        return $this;
    }

    /**
     * @return PublicationEvent|array
     */
    public function getPublication()
    {
        return $this->getProperty('publication');
    }
    /**
     * Indicates whether this content is family friendly.
     * @see https://schema.org/isFamilyFriendly
     * @param bool|array $value
     * @return $this
     */
    public function isFamilyFriendly($value)
    {
        $this->setProperty('isFamilyFriendly', $value);
        return $this;
    }

    /**
     * @param bool|array $value
     * @return $this
     */
    public function setIsFamilyFriendly($value)
    {
        $this->setProperty('isFamilyFriendly', $value);
        return $this;
    }

    /**
     * @param bool $value
     * @return $this
     */
    public function addIsFamilyFriendly($value)
    {
        $current = $this->getProperty('isFamilyFriendly');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('isFamilyFriendly', $current);
        return $this;
    }

    /**
     * @return bool|array
     */
    public function getIsFamilyFriendly()
    {
        return $this->getProperty('isFamilyFriendly');
    }
    /**
     * Indicates a correction to a [[CreativeWork]], either via a [[CorrectionComment]], textually or in another document.
     * @see https://schema.org/correction
     * @param CorrectionComment|string|array $value
     * @return $this
     */
    public function correction($value)
    {
        $this->setProperty('correction', $value);
        return $this;
    }

    /**
     * @param CorrectionComment|string|array $value
     * @return $this
     */
    public function setCorrection($value)
    {
        $this->setProperty('correction', $value);
        return $this;
    }

    /**
     * @param CorrectionComment|string $value
     * @return $this
     */
    public function addCorrection($value)
    {
        $current = $this->getProperty('correction');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('correction', $current);
        return $this;
    }

    /**
     * @return CorrectionComment|string|array
     */
    public function getCorrection()
    {
        return $this->getProperty('correction');
    }
    /**
     * The person or organization who produced the work (e.g. music album, movie, TV/radio series etc.).
     * @see https://schema.org/producer
     * @param Organization|Person|array $value
     * @return $this
     */
    public function producer($value)
    {
        $this->setProperty('producer', $value);
        return $this;
    }

    /**
     * @param Organization|Person|array $value
     * @return $this
     */
    public function setProducer($value)
    {
        $this->setProperty('producer', $value);
        return $this;
    }

    /**
     * @param Organization|Person $value
     * @return $this
     */
    public function addProducer($value)
    {
        $current = $this->getProperty('producer');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('producer', $current);
        return $this;
    }

    /**
     * @return Organization|Person|array
     */
    public function getProducer()
    {
        return $this->getProperty('producer');
    }
    /**
     * A maintainer of a [[Dataset]], software package ([[SoftwareApplication]]), or other [[Project]]. A maintainer is a [[Person]] or [[Organization]] that manages contributions to, and/or publication of, some (typically complex) artifact. It is common for distributions of software and data to be based on "upstream" sources. When [[maintainer]] is applied to a specific version of something e.g. a particular version or packaging of a [[Dataset]], it is always possible that the upstream source has a different maintainer. The [[isBasedOn]] property can be used to indicate such relationships between datasets to make the different maintenance roles clear. Similarly in the case of software, a package may have dedicated maintainers working on integration into software distributions such as Ubuntu, as well as upstream maintainers of the underlying work.
     * @see https://schema.org/maintainer
     * @param Organization|Person|array $value
     * @return $this
     */
    public function maintainer($value)
    {
        $this->setProperty('maintainer', $value);
        return $this;
    }

    /**
     * @param Organization|Person|array $value
     * @return $this
     */
    public function setMaintainer($value)
    {
        $this->setProperty('maintainer', $value);
        return $this;
    }

    /**
     * @param Organization|Person $value
     * @return $this
     */
    public function addMaintainer($value)
    {
        $current = $this->getProperty('maintainer');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('maintainer', $current);
        return $this;
    }

    /**
     * @return Organization|Person|array
     */
    public function getMaintainer()
    {
        return $this->getProperty('maintainer');
    }
    /**
     * A resource from which this work is derived or from which it is a modification or adaptation.
     * @see https://schema.org/isBasedOn
     * @param CreativeWork|Product|string|array $value
     * @return $this
     */
    public function isBasedOn($value)
    {
        $this->setProperty('isBasedOn', $value);
        return $this;
    }

    /**
     * @param CreativeWork|Product|string|array $value
     * @return $this
     */
    public function setIsBasedOn($value)
    {
        $this->setProperty('isBasedOn', $value);
        return $this;
    }

    /**
     * @param CreativeWork|Product|string $value
     * @return $this
     */
    public function addIsBasedOn($value)
    {
        $current = $this->getProperty('isBasedOn');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('isBasedOn', $current);
        return $this;
    }

    /**
     * @return CreativeWork|Product|string|array
     */
    public function getIsBasedOn()
    {
        return $this->getProperty('isBasedOn');
    }
    /**
     * A resource that was used in the creation of this resource. This term can be repeated for multiple sources. For example, http://example.com/great-multiplication-intro.html.
     * @see https://schema.org/isBasedOnUrl
     * @param CreativeWork|Product|string|array $value
     * @return $this
     */
    public function isBasedOnUrl($value)
    {
        $this->setProperty('isBasedOnUrl', $value);
        return $this;
    }

    /**
     * @param CreativeWork|Product|string|array $value
     * @return $this
     */
    public function setIsBasedOnUrl($value)
    {
        $this->setProperty('isBasedOnUrl', $value);
        return $this;
    }

    /**
     * @param CreativeWork|Product|string $value
     * @return $this
     */
    public function addIsBasedOnUrl($value)
    {
        $current = $this->getProperty('isBasedOnUrl');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('isBasedOnUrl', $current);
        return $this;
    }

    /**
     * @return CreativeWork|Product|string|array
     */
    public function getIsBasedOnUrl()
    {
        return $this->getProperty('isBasedOnUrl');
    }
    /**
     * Awards won by or for this item.
     * @see https://schema.org/awards
     * @param string|array $value
     * @return $this
     */
    public function awards($value)
    {
        $this->setProperty('awards', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setAwards($value)
    {
        $this->setProperty('awards', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addAwards($value)
    {
        $current = $this->getProperty('awards');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('awards', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getAwards()
    {
        return $this->getProperty('awards');
    }
    /**
     * The number of interactions for the CreativeWork using the WebSite or SoftwareApplication. The most specific child type of InteractionCounter should be used.
     * @see https://schema.org/interactionStatistic
     * @param InteractionCounter|array $value
     * @return $this
     */
    public function interactionStatistic($value)
    {
        $this->setProperty('interactionStatistic', $value);
        return $this;
    }

    /**
     * @param InteractionCounter|array $value
     * @return $this
     */
    public function setInteractionStatistic($value)
    {
        $this->setProperty('interactionStatistic', $value);
        return $this;
    }

    /**
     * @param InteractionCounter $value
     * @return $this
     */
    public function addInteractionStatistic($value)
    {
        $current = $this->getProperty('interactionStatistic');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('interactionStatistic', $current);
        return $this;
    }

    /**
     * @return InteractionCounter|array
     */
    public function getInteractionStatistic()
    {
        return $this->getProperty('interactionStatistic');
    }
    /**
     * Headline of the article.
     * @see https://schema.org/headline
     * @param string|array $value
     * @return $this
     */
    public function headline($value)
    {
        $this->setProperty('headline', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setHeadline($value)
    {
        $this->setProperty('headline', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addHeadline($value)
    {
        $current = $this->getProperty('headline');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('headline', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getHeadline()
    {
        return $this->getProperty('headline');
    }
    /**
     * Indicates the primary entity described in some page or other CreativeWork.
     * @see https://schema.org/mainEntity
     * @param Thing|array $value
     * @return $this
     */
    public function mainEntity($value)
    {
        $this->setProperty('mainEntity', $value);
        return $this;
    }

    /**
     * @param Thing|array $value
     * @return $this
     */
    public function setMainEntity($value)
    {
        $this->setProperty('mainEntity', $value);
        return $this;
    }

    /**
     * @param Thing $value
     * @return $this
     */
    public function addMainEntity($value)
    {
        $current = $this->getProperty('mainEntity');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('mainEntity', $current);
        return $this;
    }

    /**
     * @return Thing|array
     */
    public function getMainEntity()
    {
        return $this->getProperty('mainEntity');
    }
    /**
     * The party holding the legal copyright to the CreativeWork.
     * @see https://schema.org/copyrightHolder
     * @param Organization|Person|array $value
     * @return $this
     */
    public function copyrightHolder($value)
    {
        $this->setProperty('copyrightHolder', $value);
        return $this;
    }

    /**
     * @param Organization|Person|array $value
     * @return $this
     */
    public function setCopyrightHolder($value)
    {
        $this->setProperty('copyrightHolder', $value);
        return $this;
    }

    /**
     * @param Organization|Person $value
     * @return $this
     */
    public function addCopyrightHolder($value)
    {
        $current = $this->getProperty('copyrightHolder');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('copyrightHolder', $current);
        return $this;
    }

    /**
     * @return Organization|Person|array
     */
    public function getCopyrightHolder()
    {
        return $this->getProperty('copyrightHolder');
    }
    /**
     * Indicates an IPTCDigitalSourceEnumeration code indicating the nature of the digital source(s) for some [[CreativeWork]].
     * @see https://schema.org/digitalSourceType
     * @param IPTCDigitalSourceEnumeration|array $value
     * @return $this
     */
    public function digitalSourceType($value)
    {
        $this->setProperty('digitalSourceType', $value);
        return $this;
    }

    /**
     * @param IPTCDigitalSourceEnumeration|array $value
     * @return $this
     */
    public function setDigitalSourceType($value)
    {
        $this->setProperty('digitalSourceType', $value);
        return $this;
    }

    /**
     * @param IPTCDigitalSourceEnumeration $value
     * @return $this
     */
    public function addDigitalSourceType($value)
    {
        $current = $this->getProperty('digitalSourceType');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('digitalSourceType', $current);
        return $this;
    }

    /**
     * @return IPTCDigitalSourceEnumeration|array
     */
    public function getDigitalSourceType()
    {
        return $this->getProperty('digitalSourceType');
    }
    /**
     * The item being described is intended to help a person learn the competency or learning outcome defined by the referenced term.
     * @see https://schema.org/teaches
     * @param DefinedTerm|string|array $value
     * @return $this
     */
    public function teaches($value)
    {
        $this->setProperty('teaches', $value);
        return $this;
    }

    /**
     * @param DefinedTerm|string|array $value
     * @return $this
     */
    public function setTeaches($value)
    {
        $this->setProperty('teaches', $value);
        return $this;
    }

    /**
     * @param DefinedTerm|string $value
     * @return $this
     */
    public function addTeaches($value)
    {
        $current = $this->getProperty('teaches');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('teaches', $current);
        return $this;
    }

    /**
     * @return DefinedTerm|string|array
     */
    public function getTeaches()
    {
        return $this->getProperty('teaches');
    }
    /**
     * The version of the CreativeWork embodied by a specified resource.
     * @see https://schema.org/version
     * @param string|array $value
     * @return $this
     */
    public function version($value)
    {
        $this->setProperty('version', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setVersion($value)
    {
        $this->setProperty('version', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addVersion($value)
    {
        $current = $this->getProperty('version');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('version', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getVersion()
    {
        return $this->getProperty('version');
    }
    /**
     * The temporalCoverage of a CreativeWork indicates the period that the content applies to, i.e. that it describes, either as a DateTime or as a textual string indicating a time period in [ISO 8601 time interval format](https://en.wikipedia.org/wiki/ISO_8601#Time_intervals). In the case of a Dataset it will typically indicate the relevant time period in a precise notation (e.g. for a 2011 census dataset, the year 2011 would be written "2011/2012"). Other forms of content, e.g. ScholarlyArticle, Book, TVSeries or TVEpisode, may indicate their temporalCoverage in broader terms - textually or via well-known URL. Written works such as books may sometimes have precise temporal coverage too, e.g. a work set in 1939 - 1945 can be indicated in ISO 8601 interval format format via "1939/1945". Open-ended date ranges can be written with ".." in place of the end date. For example, "2015-11/.." indicates a range beginning in November 2015 and with no specified final date. This is tentative and might be updated in future when ISO 8601 is officially updated.
     * @see https://schema.org/temporalCoverage
     * @param string|array $value
     * @return $this
     */
    public function temporalCoverage($value)
    {
        $this->setProperty('temporalCoverage', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setTemporalCoverage($value)
    {
        $this->setProperty('temporalCoverage', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addTemporalCoverage($value)
    {
        $current = $this->getProperty('temporalCoverage');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('temporalCoverage', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getTemporalCoverage()
    {
        return $this->getProperty('temporalCoverage');
    }
    /**
     * A list of single or combined access modes that are sufficient to understand all the intellectual content of a resource, including any adaptations. Values should be drawn from the [approved vocabulary](https://www.w3.org/2021/a11y-discov-vocab/latest/#accessModeSufficient-vocabulary).
     * @see https://schema.org/accessModeSufficient
     * @param ItemList|array $value
     * @return $this
     */
    public function accessModeSufficient($value)
    {
        $this->setProperty('accessModeSufficient', $value);
        return $this;
    }

    /**
     * @param ItemList|array $value
     * @return $this
     */
    public function setAccessModeSufficient($value)
    {
        $this->setProperty('accessModeSufficient', $value);
        return $this;
    }

    /**
     * @param ItemList $value
     * @return $this
     */
    public function addAccessModeSufficient($value)
    {
        $current = $this->getProperty('accessModeSufficient');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('accessModeSufficient', $current);
        return $this;
    }

    /**
     * @return ItemList|array
     */
    public function getAccessModeSufficient()
    {
        return $this->getProperty('accessModeSufficient');
    }
    /**
     * Content features of the resource, such as accessible media, alternatives and supported enhancements for accessibility. Values should be drawn from the [approved vocabulary](https://www.w3.org/2021/a11y-discov-vocab/latest/#accessibilityFeature-vocabulary).
     * @see https://schema.org/accessibilityFeature
     * @param string|array $value
     * @return $this
     */
    public function accessibilityFeature($value)
    {
        $this->setProperty('accessibilityFeature', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setAccessibilityFeature($value)
    {
        $this->setProperty('accessibilityFeature', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addAccessibilityFeature($value)
    {
        $current = $this->getProperty('accessibilityFeature');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('accessibilityFeature', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getAccessibilityFeature()
    {
        return $this->getProperty('accessibilityFeature');
    }
    /**
     * An offer to provide this item&#x2014;for example, an offer to sell a product, rent the DVD of a movie, perform a service, or give away tickets to an event. Use [[businessFunction]] to indicate the kind of transaction offered, i.e. sell, lease, etc. This property can also be used to describe a [[Demand]]. While this property is listed as expected on a number of common types, it can be used in others. In that case, using a second type, such as Product or a subtype of Product, can clarify the nature of the offer.
     * @see https://schema.org/offers
     * @param Offer|Demand|array $value
     * @return $this
     */
    public function offers($value)
    {
        $this->setProperty('offers', $value);
        return $this;
    }

    /**
     * @param Offer|Demand|array $value
     * @return $this
     */
    public function setOffers($value)
    {
        $this->setProperty('offers', $value);
        return $this;
    }

    /**
     * @param Offer|Demand $value
     * @return $this
     */
    public function addOffers($value)
    {
        $current = $this->getProperty('offers');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('offers', $current);
        return $this;
    }

    /**
     * @return Offer|Demand|array
     */
    public function getOffers()
    {
        return $this->getProperty('offers');
    }
    /**
     * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller.
     * @see https://schema.org/provider
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
     * @param Organization|Person $value
     * @return $this
     */
    public function addProvider($value)
    {
        $current = $this->getProperty('provider');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('provider', $current);
        return $this;
    }

    /**
     * @return Organization|Person|array
     */
    public function getProvider()
    {
        return $this->getProperty('provider');
    }
    /**
     * The spatialCoverage of a CreativeWork indicates the place(s) which are the focus of the content. It is a subproperty of contentLocation intended primarily for more technical and detailed materials. For example with a Dataset, it indicates areas that the dataset describes: a dataset of New York weather would have spatialCoverage which was the place: the state of New York.
     * @see https://schema.org/spatialCoverage
     * @param Place|array $value
     * @return $this
     */
    public function spatialCoverage($value)
    {
        $this->setProperty('spatialCoverage', $value);
        return $this;
    }

    /**
     * @param Place|array $value
     * @return $this
     */
    public function setSpatialCoverage($value)
    {
        $this->setProperty('spatialCoverage', $value);
        return $this;
    }

    /**
     * @param Place $value
     * @return $this
     */
    public function addSpatialCoverage($value)
    {
        $current = $this->getProperty('spatialCoverage');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('spatialCoverage', $current);
        return $this;
    }

    /**
     * @return Place|array
     */
    public function getSpatialCoverage()
    {
        return $this->getProperty('spatialCoverage');
    }
    /**
     * The status of a creative work in terms of its stage in a lifecycle. Example terms include Incomplete, Draft, Published, Obsolete. Some organizations define a set of terms for the stages of their publication lifecycle.
     * @see https://schema.org/creativeWorkStatus
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
     * @param DefinedTerm|string $value
     * @return $this
     */
    public function addCreativeWorkStatus($value)
    {
        $current = $this->getProperty('creativeWorkStatus');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('creativeWorkStatus', $current);
        return $this;
    }

    /**
     * @return DefinedTerm|string|array
     */
    public function getCreativeWorkStatus()
    {
        return $this->getProperty('creativeWorkStatus');
    }
    /**
     * Specifies the Person that is legally accountable for the CreativeWork.
     * @see https://schema.org/accountablePerson
     * @param Person|array $value
     * @return $this
     */
    public function accountablePerson($value)
    {
        $this->setProperty('accountablePerson', $value);
        return $this;
    }

    /**
     * @param Person|array $value
     * @return $this
     */
    public function setAccountablePerson($value)
    {
        $this->setProperty('accountablePerson', $value);
        return $this;
    }

    /**
     * @param Person $value
     * @return $this
     */
    public function addAccountablePerson($value)
    {
        $current = $this->getProperty('accountablePerson');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('accountablePerson', $current);
        return $this;
    }

    /**
     * @return Person|array
     */
    public function getAccountablePerson()
    {
        return $this->getProperty('accountablePerson');
    }
    /**
     * The place and time the release was issued, expressed as a PublicationEvent.
     * @see https://schema.org/releasedEvent
     * @param PublicationEvent|array $value
     * @return $this
     */
    public function releasedEvent($value)
    {
        $this->setProperty('releasedEvent', $value);
        return $this;
    }

    /**
     * @param PublicationEvent|array $value
     * @return $this
     */
    public function setReleasedEvent($value)
    {
        $this->setProperty('releasedEvent', $value);
        return $this;
    }

    /**
     * @param PublicationEvent $value
     * @return $this
     */
    public function addReleasedEvent($value)
    {
        $current = $this->getProperty('releasedEvent');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('releasedEvent', $current);
        return $this;
    }

    /**
     * @return PublicationEvent|array
     */
    public function getReleasedEvent()
    {
        return $this->getProperty('releasedEvent');
    }
    /**
     * The subject matter of an object.
     * @see https://schema.org/about
     * @param Thing|array $value
     * @return $this
     */
    public function about($value)
    {
        $this->setProperty('about', $value);
        return $this;
    }

    /**
     * @param Thing|array $value
     * @return $this
     */
    public function setAbout($value)
    {
        $this->setProperty('about', $value);
        return $this;
    }

    /**
     * @param Thing $value
     * @return $this
     */
    public function addAbout($value)
    {
        $current = $this->getProperty('about');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('about', $current);
        return $this;
    }

    /**
     * @return Thing|array
     */
    public function getAbout()
    {
        return $this->getProperty('about');
    }
    /**
     * An [EIDR](https://eidr.org/) (Entertainment Identifier Registry) [[identifier]] representing a specific edit / edition for a work of film or television. For example, the motion picture known as "Ghostbusters" whose [[titleEIDR]] is "10.5240/7EC7-228A-510A-053E-CBB8-J" has several edits, e.g. "10.5240/1F2A-E1C5-680A-14C6-E76B-I" and "10.5240/8A35-3BEE-6497-5D12-9E4F-3". Since schema.org types like [[Movie]] and [[TVEpisode]] can be used for both works and their multiple expressions, it is possible to use [[titleEIDR]] alone (for a general description), or alongside [[editEIDR]] for a more edit-specific description.
     * @see https://schema.org/editEIDR
     * @param string|array $value
     * @return $this
     */
    public function editEIDR($value)
    {
        $this->setProperty('editEIDR', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setEditEIDR($value)
    {
        $this->setProperty('editEIDR', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addEditEIDR($value)
    {
        $current = $this->getProperty('editEIDR');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('editEIDR', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getEditEIDR()
    {
        return $this->getProperty('editEIDR');
    }
    /**
     * The specific time described by a creative work, for works (e.g. articles, video objects etc.) that emphasise a particular moment within an Event.
     * @see https://schema.org/contentReferenceTime
     * @param mixed $value
     * @return $this
     */
    public function contentReferenceTime($value)
    {
        $this->setProperty('contentReferenceTime', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setContentReferenceTime($value)
    {
        $this->setProperty('contentReferenceTime', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function addContentReferenceTime($value)
    {
        $current = $this->getProperty('contentReferenceTime');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('contentReferenceTime', $current);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getContentReferenceTime()
    {
        return $this->getProperty('contentReferenceTime');
    }
    /**
     * The overall rating, based on a collection of reviews or ratings, of the item.
     * @see https://schema.org/aggregateRating
     * @param AggregateRating|array $value
     * @return $this
     */
    public function aggregateRating($value)
    {
        $this->setProperty('aggregateRating', $value);
        return $this;
    }

    /**
     * @param AggregateRating|array $value
     * @return $this
     */
    public function setAggregateRating($value)
    {
        $this->setProperty('aggregateRating', $value);
        return $this;
    }

    /**
     * @param AggregateRating $value
     * @return $this
     */
    public function addAggregateRating($value)
    {
        $current = $this->getProperty('aggregateRating');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('aggregateRating', $current);
        return $this;
    }

    /**
     * @return AggregateRating|array
     */
    public function getAggregateRating()
    {
        return $this->getProperty('aggregateRating');
    }
    /**
     * A creative work that this work is an example/instance/realization/derivation of.
     * @see https://schema.org/exampleOfWork
     * @param CreativeWork|array $value
     * @return $this
     */
    public function exampleOfWork($value)
    {
        $this->setProperty('exampleOfWork', $value);
        return $this;
    }

    /**
     * @param CreativeWork|array $value
     * @return $this
     */
    public function setExampleOfWork($value)
    {
        $this->setProperty('exampleOfWork', $value);
        return $this;
    }

    /**
     * @param CreativeWork $value
     * @return $this
     */
    public function addExampleOfWork($value)
    {
        $current = $this->getProperty('exampleOfWork');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('exampleOfWork', $current);
        return $this;
    }

    /**
     * @return CreativeWork|array
     */
    public function getExampleOfWork()
    {
        return $this->getProperty('exampleOfWork');
    }
    /**
     * The number of comments this CreativeWork (e.g. Article, Question or Answer) has received. This is most applicable to works published in Web sites with commenting system; additional comments may exist elsewhere.
     * @see https://schema.org/commentCount
     * @param int|array $value
     * @return $this
     */
    public function commentCount($value)
    {
        $this->setProperty('commentCount', $value);
        return $this;
    }

    /**
     * @param int|array $value
     * @return $this
     */
    public function setCommentCount($value)
    {
        $this->setProperty('commentCount', $value);
        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function addCommentCount($value)
    {
        $current = $this->getProperty('commentCount');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('commentCount', $current);
        return $this;
    }

    /**
     * @return int|array
     */
    public function getCommentCount()
    {
        return $this->getProperty('commentCount');
    }
    /**
     * The human sensory perceptual system or cognitive faculty through which a person may process or perceive the intellectual content of a resource, not including any adaptations of the content (e.g., text alternatives for images). Values should be drawn from the [approved vocabulary](https://www.w3.org/2021/a11y-discov-vocab/latest/#accessMode-vocabulary).
     * @see https://schema.org/accessMode
     * @param string|array $value
     * @return $this
     */
    public function accessMode($value)
    {
        $this->setProperty('accessMode', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setAccessMode($value)
    {
        $this->setProperty('accessMode', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addAccessMode($value)
    {
        $current = $this->getProperty('accessMode');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('accessMode', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getAccessMode()
    {
        return $this->getProperty('accessMode');
    }
    /**
     * The position of an item in a series or sequence of items.
     * @see https://schema.org/position
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
     * @param string|int $value
     * @return $this
     */
    public function addPosition($value)
    {
        $current = $this->getProperty('position');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('position', $current);
        return $this;
    }

    /**
     * @return string|int|array
     */
    public function getPosition()
    {
        return $this->getProperty('position');
    }
    /**
     * The publishing division which published the comic.
     * @see https://schema.org/publisherImprint
     * @param Organization|array $value
     * @return $this
     */
    public function publisherImprint($value)
    {
        $this->setProperty('publisherImprint', $value);
        return $this;
    }

    /**
     * @param Organization|array $value
     * @return $this
     */
    public function setPublisherImprint($value)
    {
        $this->setProperty('publisherImprint', $value);
        return $this;
    }

    /**
     * @param Organization $value
     * @return $this
     */
    public function addPublisherImprint($value)
    {
        $current = $this->getProperty('publisherImprint');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('publisherImprint', $current);
        return $this;
    }

    /**
     * @return Organization|array
     */
    public function getPublisherImprint()
    {
        return $this->getProperty('publisherImprint');
    }
    /**
     * An intended audience, i.e. a group for whom something was created.
     * @see https://schema.org/audience
     * @param Audience|array $value
     * @return $this
     */
    public function audience($value)
    {
        $this->setProperty('audience', $value);
        return $this;
    }

    /**
     * @param Audience|array $value
     * @return $this
     */
    public function setAudience($value)
    {
        $this->setProperty('audience', $value);
        return $this;
    }

    /**
     * @param Audience $value
     * @return $this
     */
    public function addAudience($value)
    {
        $current = $this->getProperty('audience');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('audience', $current);
        return $this;
    }

    /**
     * @return Audience|array
     */
    public function getAudience()
    {
        return $this->getProperty('audience');
    }
    /**
     * A material that something is made from, e.g. leather, wool, cotton, paper.
     * @see https://schema.org/material
     * @param string|Product|array $value
     * @return $this
     */
    public function material($value)
    {
        $this->setProperty('material', $value);
        return $this;
    }

    /**
     * @param string|Product|array $value
     * @return $this
     */
    public function setMaterial($value)
    {
        $this->setProperty('material', $value);
        return $this;
    }

    /**
     * @param string|Product $value
     * @return $this
     */
    public function addMaterial($value)
    {
        $current = $this->getProperty('material');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('material', $current);
        return $this;
    }

    /**
     * @return string|Product|array
     */
    public function getMaterial()
    {
        return $this->getProperty('material');
    }
    /**
     * A pattern that something has, for example 'polka dot', 'striped', 'Canadian flag'. Values are typically expressed as text, although links to controlled value schemes are also supported.
     * @see https://schema.org/pattern
     * @param DefinedTerm|string|array $value
     * @return $this
     */
    public function pattern($value)
    {
        $this->setProperty('pattern', $value);
        return $this;
    }

    /**
     * @param DefinedTerm|string|array $value
     * @return $this
     */
    public function setPattern($value)
    {
        $this->setProperty('pattern', $value);
        return $this;
    }

    /**
     * @param DefinedTerm|string $value
     * @return $this
     */
    public function addPattern($value)
    {
        $current = $this->getProperty('pattern');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('pattern', $current);
        return $this;
    }

    /**
     * @return DefinedTerm|string|array
     */
    public function getPattern()
    {
        return $this->getProperty('pattern');
    }
    /**
     * Specifies the Person who edited the CreativeWork.
     * @see https://schema.org/editor
     * @param Person|array $value
     * @return $this
     */
    public function editor($value)
    {
        $this->setProperty('editor', $value);
        return $this;
    }

    /**
     * @param Person|array $value
     * @return $this
     */
    public function setEditor($value)
    {
        $this->setProperty('editor', $value);
        return $this;
    }

    /**
     * @param Person $value
     * @return $this
     */
    public function addEditor($value)
    {
        $current = $this->getProperty('editor');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('editor', $current);
        return $this;
    }

    /**
     * @return Person|array
     */
    public function getEditor()
    {
        return $this->getProperty('editor');
    }
    /**
     * Thumbnail image for an image or video.
     * @see https://schema.org/thumbnail
     * @param ImageObject|array $value
     * @return $this
     */
    public function thumbnail($value)
    {
        $this->setProperty('thumbnail', $value);
        return $this;
    }

    /**
     * @param ImageObject|array $value
     * @return $this
     */
    public function setThumbnail($value)
    {
        $this->setProperty('thumbnail', $value);
        return $this;
    }

    /**
     * @param ImageObject $value
     * @return $this
     */
    public function addThumbnail($value)
    {
        $current = $this->getProperty('thumbnail');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('thumbnail', $current);
        return $this;
    }

    /**
     * @return ImageObject|array
     */
    public function getThumbnail()
    {
        return $this->getProperty('thumbnail');
    }
    /**
     * A work that is a translation of the content of this work. E.g. 西遊記 has an English workTranslation “Journey to the West”, a German workTranslation “Monkeys Pilgerfahrt” and a Vietnamese translation Tây du ký bình khảo.
     * @see https://schema.org/workTranslation
     * @param CreativeWork|array $value
     * @return $this
     */
    public function workTranslation($value)
    {
        $this->setProperty('workTranslation', $value);
        return $this;
    }

    /**
     * @param CreativeWork|array $value
     * @return $this
     */
    public function setWorkTranslation($value)
    {
        $this->setProperty('workTranslation', $value);
        return $this;
    }

    /**
     * @param CreativeWork $value
     * @return $this
     */
    public function addWorkTranslation($value)
    {
        $current = $this->getProperty('workTranslation');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('workTranslation', $current);
        return $this;
    }

    /**
     * @return CreativeWork|array
     */
    public function getWorkTranslation()
    {
        return $this->getProperty('workTranslation');
    }
    /**
     * A media object that encodes this CreativeWork.
     * @see https://schema.org/encodings
     * @param MediaObject|array $value
     * @return $this
     */
    public function encodings($value)
    {
        $this->setProperty('encodings', $value);
        return $this;
    }

    /**
     * @param MediaObject|array $value
     * @return $this
     */
    public function setEncodings($value)
    {
        $this->setProperty('encodings', $value);
        return $this;
    }

    /**
     * @param MediaObject $value
     * @return $this
     */
    public function addEncodings($value)
    {
        $current = $this->getProperty('encodings');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('encodings', $current);
        return $this;
    }

    /**
     * @return MediaObject|array
     */
    public function getEncodings()
    {
        return $this->getProperty('encodings');
    }
    /**
     * A media object that encodes this CreativeWork. This property is a synonym for associatedMedia.
     * @see https://schema.org/encoding
     * @param MediaObject|array $value
     * @return $this
     */
    public function encoding($value)
    {
        $this->setProperty('encoding', $value);
        return $this;
    }

    /**
     * @param MediaObject|array $value
     * @return $this
     */
    public function setEncoding($value)
    {
        $this->setProperty('encoding', $value);
        return $this;
    }

    /**
     * @param MediaObject $value
     * @return $this
     */
    public function addEncoding($value)
    {
        $current = $this->getProperty('encoding');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('encoding', $current);
        return $this;
    }

    /**
     * @return MediaObject|array
     */
    public function getEncoding()
    {
        return $this->getProperty('encoding');
    }
    /**
     * A characteristic of the described resource that is physiologically dangerous to some users. Related to WCAG 2.0 guideline 2.3. Values should be drawn from the [approved vocabulary](https://www.w3.org/2021/a11y-discov-vocab/latest/#accessibilityHazard-vocabulary).
     * @see https://schema.org/accessibilityHazard
     * @param string|array $value
     * @return $this
     */
    public function accessibilityHazard($value)
    {
        $this->setProperty('accessibilityHazard', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setAccessibilityHazard($value)
    {
        $this->setProperty('accessibilityHazard', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addAccessibilityHazard($value)
    {
        $current = $this->getProperty('accessibilityHazard');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('accessibilityHazard', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getAccessibilityHazard()
    {
        return $this->getProperty('accessibilityHazard');
    }
    /**
     * The Organization on whose behalf the creator was working.
     * @see https://schema.org/sourceOrganization
     * @param Organization|array $value
     * @return $this
     */
    public function sourceOrganization($value)
    {
        $this->setProperty('sourceOrganization', $value);
        return $this;
    }

    /**
     * @param Organization|array $value
     * @return $this
     */
    public function setSourceOrganization($value)
    {
        $this->setProperty('sourceOrganization', $value);
        return $this;
    }

    /**
     * @param Organization $value
     * @return $this
     */
    public function addSourceOrganization($value)
    {
        $current = $this->getProperty('sourceOrganization');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('sourceOrganization', $current);
        return $this;
    }

    /**
     * @return Organization|array
     */
    public function getSourceOrganization()
    {
        return $this->getProperty('sourceOrganization');
    }
    /**
     * A license document that applies to this structured data, typically indicated by URL.
     * @see https://schema.org/sdLicense
     * @param string|CreativeWork|array $value
     * @return $this
     */
    public function sdLicense($value)
    {
        $this->setProperty('sdLicense', $value);
        return $this;
    }

    /**
     * @param string|CreativeWork|array $value
     * @return $this
     */
    public function setSdLicense($value)
    {
        $this->setProperty('sdLicense', $value);
        return $this;
    }

    /**
     * @param string|CreativeWork $value
     * @return $this
     */
    public function addSdLicense($value)
    {
        $current = $this->getProperty('sdLicense');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('sdLicense', $current);
        return $this;
    }

    /**
     * @return string|CreativeWork|array
     */
    public function getSdLicense()
    {
        return $this->getProperty('sdLicense');
    }
    /**
     * The schema.org [[usageInfo]] property indicates further information about a [[CreativeWork]]. This property is applicable both to works that are freely available and to those that require payment or other transactions. It can reference additional information, e.g. community expectations on preferred linking and citation conventions, as well as purchasing details. For something that can be commercially licensed, usageInfo can provide detailed, resource-specific information about licensing options. This property can be used alongside the license property which indicates license(s) applicable to some piece of content. The usageInfo property can provide information about other licensing options, e.g. acquiring commercial usage rights for an image that is also available under non-commercial creative commons licenses.
     * @see https://schema.org/usageInfo
     * @param CreativeWork|string|array $value
     * @return $this
     */
    public function usageInfo($value)
    {
        $this->setProperty('usageInfo', $value);
        return $this;
    }

    /**
     * @param CreativeWork|string|array $value
     * @return $this
     */
    public function setUsageInfo($value)
    {
        $this->setProperty('usageInfo', $value);
        return $this;
    }

    /**
     * @param CreativeWork|string $value
     * @return $this
     */
    public function addUsageInfo($value)
    {
        $current = $this->getProperty('usageInfo');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('usageInfo', $current);
        return $this;
    }

    /**
     * @return CreativeWork|string|array
     */
    public function getUsageInfo()
    {
        return $this->getProperty('usageInfo');
    }
    /**
     * An award won by or for this item.
     * @see https://schema.org/award
     * @param string|array $value
     * @return $this
     */
    public function award($value)
    {
        $this->setProperty('award', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setAward($value)
    {
        $this->setProperty('award', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addAward($value)
    {
        $current = $this->getProperty('award');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('award', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getAward()
    {
        return $this->getProperty('award');
    }
    /**
     * Indicates (by URL or string) a particular version of a schema used in some CreativeWork. This property was created primarily to indicate the use of a specific schema.org release, e.g. ```10.0``` as a simple string, or more explicitly via URL, ```https://schema.org/docs/releases.html#v10.0```. There may be situations in which other schemas might usefully be referenced this way, e.g. ```http://dublincore.org/specifications/dublin-core/dces/1999-07-02/``` but this has not been carefully explored in the community.
     * @see https://schema.org/schemaVersion
     * @param string|array $value
     * @return $this
     */
    public function schemaVersion($value)
    {
        $this->setProperty('schemaVersion', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setSchemaVersion($value)
    {
        $this->setProperty('schemaVersion', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addSchemaVersion($value)
    {
        $current = $this->getProperty('schemaVersion');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('schemaVersion', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getSchemaVersion()
    {
        return $this->getProperty('schemaVersion');
    }
    /**
     * A flag to signal that the item, event, or place is accessible for free.
     * @see https://schema.org/isAccessibleForFree
     * @param bool|array $value
     * @return $this
     */
    public function isAccessibleForFree($value)
    {
        $this->setProperty('isAccessibleForFree', $value);
        return $this;
    }

    /**
     * @param bool|array $value
     * @return $this
     */
    public function setIsAccessibleForFree($value)
    {
        $this->setProperty('isAccessibleForFree', $value);
        return $this;
    }

    /**
     * @param bool $value
     * @return $this
     */
    public function addIsAccessibleForFree($value)
    {
        $current = $this->getProperty('isAccessibleForFree');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('isAccessibleForFree', $current);
        return $this;
    }

    /**
     * @return bool|array
     */
    public function getIsAccessibleForFree()
    {
        return $this->getProperty('isAccessibleForFree');
    }
    /**
     * Genre of the creative work, broadcast channel or group.
     * @see https://schema.org/genre
     * @param string|DefinedTerm|array $value
     * @return $this
     */
    public function genre($value)
    {
        $this->setProperty('genre', $value);
        return $this;
    }

    /**
     * @param string|DefinedTerm|array $value
     * @return $this
     */
    public function setGenre($value)
    {
        $this->setProperty('genre', $value);
        return $this;
    }

    /**
     * @param string|DefinedTerm $value
     * @return $this
     */
    public function addGenre($value)
    {
        $current = $this->getProperty('genre');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('genre', $current);
        return $this;
    }

    /**
     * @return string|DefinedTerm|array
     */
    public function getGenre()
    {
        return $this->getProperty('genre');
    }
    /**
     * Media type, typically MIME format (see [IANA site](http://www.iana.org/assignments/media-types/media-types.xhtml)) of the content, e.g. application/zip of a SoftwareApplication binary. In cases where a CreativeWork has several media type representations, 'encoding' can be used to indicate each MediaObject alongside particular fileFormat information. Unregistered or niche file formats can be indicated instead via the most appropriate URL, e.g. defining Web page or a Wikipedia entry.
     * @see https://schema.org/fileFormat
     * @param string|array $value
     * @return $this
     */
    public function fileFormat($value)
    {
        $this->setProperty('fileFormat', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setFileFormat($value)
    {
        $this->setProperty('fileFormat', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addFileFormat($value)
    {
        $current = $this->getProperty('fileFormat');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('fileFormat', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getFileFormat()
    {
        return $this->getProperty('fileFormat');
    }
    /**
     * The language of the content or performance or used in an action. Please use one of the language codes from the [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47). See also [[availableLanguage]].
     * @see https://schema.org/inLanguage
     * @param string|Language|array $value
     * @return $this
     */
    public function inLanguage($value)
    {
        $this->setProperty('inLanguage', $value);
        return $this;
    }

    /**
     * @param string|Language|array $value
     * @return $this
     */
    public function setInLanguage($value)
    {
        $this->setProperty('inLanguage', $value);
        return $this;
    }

    /**
     * @param string|Language $value
     * @return $this
     */
    public function addInLanguage($value)
    {
        $current = $this->getProperty('inLanguage');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('inLanguage', $current);
        return $this;
    }

    /**
     * @return string|Language|array
     */
    public function getInLanguage()
    {
        return $this->getProperty('inLanguage');
    }
    /**
     * Organization or person who adapts a creative work to different languages, regional differences and technical requirements of a target market, or that translates during some event.
     * @see https://schema.org/translator
     * @param Organization|Person|array $value
     * @return $this
     */
    public function translator($value)
    {
        $this->setProperty('translator', $value);
        return $this;
    }

    /**
     * @param Organization|Person|array $value
     * @return $this
     */
    public function setTranslator($value)
    {
        $this->setProperty('translator', $value);
        return $this;
    }

    /**
     * @param Organization|Person $value
     * @return $this
     */
    public function addTranslator($value)
    {
        $current = $this->getProperty('translator');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('translator', $current);
        return $this;
    }

    /**
     * @return Organization|Person|array
     */
    public function getTranslator()
    {
        return $this->getProperty('translator');
    }
    /**
     * Identifies input methods that are sufficient to fully control the described resource. Values should be drawn from the [approved vocabulary](https://www.w3.org/2021/a11y-discov-vocab/latest/#accessibilityControl-vocabulary).
     * @see https://schema.org/accessibilityControl
     * @param string|array $value
     * @return $this
     */
    public function accessibilityControl($value)
    {
        $this->setProperty('accessibilityControl', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setAccessibilityControl($value)
    {
        $this->setProperty('accessibilityControl', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addAccessibilityControl($value)
    {
        $current = $this->getProperty('accessibilityControl');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('accessibilityControl', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getAccessibilityControl()
    {
        return $this->getProperty('accessibilityControl');
    }
    /**
     * An abstract is a short description that summarizes a [[CreativeWork]].
     * @see https://schema.org/abstract
     * @param string|array $value
     * @return $this
     */
    public function abstract($value)
    {
        $this->setProperty('abstract', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setAbstract($value)
    {
        $this->setProperty('abstract', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addAbstract($value)
    {
        $current = $this->getProperty('abstract');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('abstract', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getAbstract()
    {
        return $this->getProperty('abstract');
    }
    /**
     * The level in terms of progression through an educational or training context. Examples of educational levels include 'beginner', 'intermediate' or 'advanced', and formal sets of level indicators.
     * @see https://schema.org/educationalLevel
     * @param string|DefinedTerm|array $value
     * @return $this
     */
    public function educationalLevel($value)
    {
        $this->setProperty('educationalLevel', $value);
        return $this;
    }

    /**
     * @param string|DefinedTerm|array $value
     * @return $this
     */
    public function setEducationalLevel($value)
    {
        $this->setProperty('educationalLevel', $value);
        return $this;
    }

    /**
     * @param string|DefinedTerm $value
     * @return $this
     */
    public function addEducationalLevel($value)
    {
        $current = $this->getProperty('educationalLevel');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('educationalLevel', $current);
        return $this;
    }

    /**
     * @return string|DefinedTerm|array
     */
    public function getEducationalLevel()
    {
        return $this->getProperty('educationalLevel');
    }
}
