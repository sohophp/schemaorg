<?php
namespace Sohophp\SchemaOrg\Thing;

use Sohophp\SchemaOrg\Thing;
use Sohophp\SchemaOrg\Thing\Place;
use Sohophp\SchemaOrg\Thing\Place\AdministrativeArea;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\GeoShape;
use Sohophp\SchemaOrg\Thing\Intangible\ProgramMembership;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\Event;
use Sohophp\SchemaOrg\Thing\Intangible\ItemList\OfferCatalog;
use Sohophp\SchemaOrg\Thing\CreativeWork\Review;
use Sohophp\SchemaOrg\Thing\Intangible\Rating\AggregateRating;
use Sohophp\SchemaOrg\Thing\Intangible\ProductReturnPolicy;
use Sohophp\SchemaOrg\Thing\Intangible\Offer;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint;
use Sohophp\SchemaOrg\Thing\CreativeWork\WebPage\AboutPage;
use Sohophp\SchemaOrg\Thing\Intangible\Demand;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress;
use Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject\ImageObject;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;
use Sohophp\SchemaOrg\Thing\Product;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\OwnershipInfo;
use Sohophp\SchemaOrg\Thing\Intangible\Brand;
use Sohophp\SchemaOrg\Thing\CreativeWork\EducationalOccupationalCredential;
use Sohophp\SchemaOrg\Thing\Intangible\Language;
use Sohophp\SchemaOrg\Thing\CreativeWork\Article;

/**
* An organization such as a school, NGO, corporation, club, etc.
* @see http://schema.org/Organization
* @package Sohophp\SchemaOrg\Thing
*/
class Organization extends Thing
{


    /**
        * The geographic area where the service is provided.
        * @param Place|AdministrativeArea|GeoShape|array|string|mixed $value
    * @return $this
    */
    public function serviceArea($value)
    {
        $this->setProperty('serviceArea', $value);
        return $this;
    }

    /**
    * @param Place|AdministrativeArea|GeoShape|array|string|mixed $value
    * @return $this
    */
    public function setServiceArea($value)
    {
        $this->setProperty('serviceArea', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getServiceArea()
    {
       return $this->getProperty('serviceArea');
    }


    /**
        * An Organization (or ProgramMembership) to which this Person or Organization
 * belongs.
        * @param ProgramMembership|Organization|array|string|mixed $value
    * @return $this
    */
    public function memberOf($value)
    {
        $this->setProperty('memberOf', $value);
        return $this;
    }

    /**
    * @param ProgramMembership|Organization|array|string|mixed $value
    * @return $this
    */
    public function setMemberOf($value)
    {
        $this->setProperty('memberOf', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getMemberOf()
    {
       return $this->getProperty('memberOf');
    }


    /**
        * A person or organization that supports (sponsors) something through some kind
 * of financial contribution.
        * @param Organization|Person|array|string|mixed $value
    * @return $this
    */
    public function funder($value)
    {
        $this->setProperty('funder', $value);
        return $this;
    }

    /**
    * @param Organization|Person|array|string|mixed $value
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
        * Of a [[Person]], and less typically of an [[Organization]], to indicate a
 * topic that is known about - suggesting possible expertise but not implying
 * it. We do not distinguish skill levels here, or relate this to educational
 * content, events, objectives or [[JobPosting]] descriptions.
        * @param Thing|string|string|array|mixed $value
    * @return $this
    */
    public function knowsAbout($value)
    {
        $this->setProperty('knowsAbout', $value);
        return $this;
    }

    /**
    * @param Thing|string|string|array|mixed $value
    * @return $this
    */
    public function setKnowsAbout($value)
    {
        $this->setProperty('knowsAbout', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getKnowsAbout()
    {
       return $this->getProperty('knowsAbout');
    }


    /**
        * For a [[NewsMediaOrganization]] or other news-related [[Organization]], a
 * statement about public engagement activities (for news media, the
 * newsroom’s), including involving the public - digitally or otherwise -- in
 * coverage decisions, reporting and activities after publication.
        * @param string|CreativeWork|array|mixed $value
    * @return $this
    */
    public function actionableFeedbackPolicy($value)
    {
        $this->setProperty('actionableFeedbackPolicy', $value);
        return $this;
    }

    /**
    * @param string|CreativeWork|array|mixed $value
    * @return $this
    */
    public function setActionableFeedbackPolicy($value)
    {
        $this->setProperty('actionableFeedbackPolicy', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getActionableFeedbackPolicy()
    {
       return $this->getProperty('actionableFeedbackPolicy');
    }


    /**
        * For an [[Organization]] (typically a [[NewsMediaOrganization]]), a statement
 * about policy on use of unnamed sources and the decision process required.
        * @param CreativeWork|string|array|mixed $value
    * @return $this
    */
    public function unnamedSourcesPolicy($value)
    {
        $this->setProperty('unnamedSourcesPolicy', $value);
        return $this;
    }

    /**
    * @param CreativeWork|string|array|mixed $value
    * @return $this
    */
    public function setUnnamedSourcesPolicy($value)
    {
        $this->setProperty('unnamedSourcesPolicy', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getUnnamedSourcesPolicy()
    {
       return $this->getProperty('unnamedSourcesPolicy');
    }


    /**
        * Upcoming or past events associated with this place or organization.
        * @param Event|array|string|mixed $value
    * @return $this
    */
    public function events($value)
    {
        $this->setProperty('events', $value);
        return $this;
    }

    /**
    * @param Event|array|string|mixed $value
    * @return $this
    */
    public function setEvents($value)
    {
        $this->setProperty('events', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEvents()
    {
       return $this->getProperty('events');
    }


    /**
        * A relationship between two organizations where the first includes the second,
 * e.g., as a subsidiary. See also: the more specific 'department' property.
        * @param Organization|array|string|mixed $value
    * @return $this
    */
    public function subOrganization($value)
    {
        $this->setProperty('subOrganization', $value);
        return $this;
    }

    /**
    * @param Organization|array|string|mixed $value
    * @return $this
    */
    public function setSubOrganization($value)
    {
        $this->setProperty('subOrganization', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSubOrganization()
    {
       return $this->getProperty('subOrganization');
    }


    /**
        * Indicates an OfferCatalog listing for this Organization, Person, or Service.
        * @param OfferCatalog|array|string|mixed $value
    * @return $this
    */
    public function hasOfferCatalog($value)
    {
        $this->setProperty('hasOfferCatalog', $value);
        return $this;
    }

    /**
    * @param OfferCatalog|array|string|mixed $value
    * @return $this
    */
    public function setHasOfferCatalog($value)
    {
        $this->setProperty('hasOfferCatalog', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getHasOfferCatalog()
    {
       return $this->getProperty('hasOfferCatalog');
    }


    /**
        * The [Global Location Number](http://www.gs1.org/gln) (GLN, sometimes also
 * referred to as International Location Number or ILN) of the respective
 * organization, person, or place. The GLN is a 13-digit number used to identify
 * parties and physical locations.
        * @param string|array|mixed $value
    * @return $this
    */
    public function globalLocationNumber($value)
    {
        $this->setProperty('globalLocationNumber', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setGlobalLocationNumber($value)
    {
        $this->setProperty('globalLocationNumber', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getGlobalLocationNumber()
    {
       return $this->getProperty('globalLocationNumber');
    }


    /**
        * Review of the item.
        * @param Review|array|string|mixed $value
    * @return $this
    */
    public function reviews($value)
    {
        $this->setProperty('reviews', $value);
        return $this;
    }

    /**
    * @param Review|array|string|mixed $value
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
        * A member of this organization.
        * @param Organization|Person|array|string|mixed $value
    * @return $this
    */
    public function members($value)
    {
        $this->setProperty('members', $value);
        return $this;
    }

    /**
    * @param Organization|Person|array|string|mixed $value
    * @return $this
    */
    public function setMembers($value)
    {
        $this->setProperty('members', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getMembers()
    {
       return $this->getProperty('members');
    }


    /**
        * The overall rating, based on a collection of reviews or ratings, of the item.
        * @param AggregateRating|array|string|mixed $value
    * @return $this
    */
    public function aggregateRating($value)
    {
        $this->setProperty('aggregateRating', $value);
        return $this;
    }

    /**
    * @param AggregateRating|array|string|mixed $value
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
        * For an [[Organization]] (e.g. [[NewsMediaOrganization]]), a statement
 * describing (in news media, the newsroom’s) disclosure and correction policy
 * for errors.
        * @param string|CreativeWork|array|mixed $value
    * @return $this
    */
    public function correctionsPolicy($value)
    {
        $this->setProperty('correctionsPolicy', $value);
        return $this;
    }

    /**
    * @param string|CreativeWork|array|mixed $value
    * @return $this
    */
    public function setCorrectionsPolicy($value)
    {
        $this->setProperty('correctionsPolicy', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCorrectionsPolicy()
    {
       return $this->getProperty('correctionsPolicy');
    }


    /**
        * Indicates a ProductReturnPolicy that may be applicable.
        * @param ProductReturnPolicy|array|string|mixed $value
    * @return $this
    */
    public function hasProductReturnPolicy($value)
    {
        $this->setProperty('hasProductReturnPolicy', $value);
        return $this;
    }

    /**
    * @param ProductReturnPolicy|array|string|mixed $value
    * @return $this
    */
    public function setHasProductReturnPolicy($value)
    {
        $this->setProperty('hasProductReturnPolicy', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getHasProductReturnPolicy()
    {
       return $this->getProperty('hasProductReturnPolicy');
    }


    /**
        * Statement on diversity policy by an [[Organization]] e.g. a
 * [[NewsMediaOrganization]]. For a [[NewsMediaOrganization]], a statement
 * describing the newsroom’s diversity policy on both staffing and sources,
 * typically providing staffing data.
        * @param string|CreativeWork|array|mixed $value
    * @return $this
    */
    public function diversityPolicy($value)
    {
        $this->setProperty('diversityPolicy', $value);
        return $this;
    }

    /**
    * @param string|CreativeWork|array|mixed $value
    * @return $this
    */
    public function setDiversityPolicy($value)
    {
        $this->setProperty('diversityPolicy', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDiversityPolicy()
    {
       return $this->getProperty('diversityPolicy');
    }


    /**
        * The Dun & Bradstreet DUNS number for identifying an organization or business
 * person.
        * @param string|array|mixed $value
    * @return $this
    */
    public function duns($value)
    {
        $this->setProperty('duns', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setDuns($value)
    {
        $this->setProperty('duns', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDuns()
    {
       return $this->getProperty('duns');
    }


    /**
        * The Tax / Fiscal ID of the organization or person, e.g. the TIN in the US or
 * the CIF/NIF in Spain.
        * @param string|array|mixed $value
    * @return $this
    */
    public function taxID($value)
    {
        $this->setProperty('taxID', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setTaxID($value)
    {
        $this->setProperty('taxID', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getTaxID()
    {
       return $this->getProperty('taxID');
    }


    /**
        * An award won by or for this item.
        * @param string|array|mixed $value
    * @return $this
    */
    public function award($value)
    {
        $this->setProperty('award', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
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
        * A pointer to products or services offered by the organization or person.
        * @param Offer|array|string|mixed $value
    * @return $this
    */
    public function makesOffer($value)
    {
        $this->setProperty('makesOffer', $value);
        return $this;
    }

    /**
    * @param Offer|array|string|mixed $value
    * @return $this
    */
    public function setMakesOffer($value)
    {
        $this->setProperty('makesOffer', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getMakesOffer()
    {
       return $this->getProperty('makesOffer');
    }


    /**
        * A contact point for a person or organization.
        * @param ContactPoint|array|string|mixed $value
    * @return $this
    */
    public function contactPoints($value)
    {
        $this->setProperty('contactPoints', $value);
        return $this;
    }

    /**
    * @param ContactPoint|array|string|mixed $value
    * @return $this
    */
    public function setContactPoints($value)
    {
        $this->setProperty('contactPoints', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getContactPoints()
    {
       return $this->getProperty('contactPoints');
    }


    /**
        * For an [[Organization]] (often but not necessarily a
 * [[NewsMediaOrganization]]), a description of organizational ownership
 * structure; funding and grants. In a news/media setting, this is with
 * particular reference to editorial independence.   Note that the [[funder]] is
 * also available and can be used to make basic funder information
 * machine-readable.
        * @param string|CreativeWork|AboutPage|string|array|mixed $value
    * @return $this
    */
    public function ownershipFundingInfo($value)
    {
        $this->setProperty('ownershipFundingInfo', $value);
        return $this;
    }

    /**
    * @param string|CreativeWork|AboutPage|string|array|mixed $value
    * @return $this
    */
    public function setOwnershipFundingInfo($value)
    {
        $this->setProperty('ownershipFundingInfo', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getOwnershipFundingInfo()
    {
       return $this->getProperty('ownershipFundingInfo');
    }


    /**
        * An organization identifier that uniquely identifies a legal entity as defined
 * in ISO 17442.
        * @param string|array|mixed $value
    * @return $this
    */
    public function leiCode($value)
    {
        $this->setProperty('leiCode', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setLeiCode($value)
    {
        $this->setProperty('leiCode', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getLeiCode()
    {
       return $this->getProperty('leiCode');
    }


    /**
        * A pointer to products or services sought by the organization or person
 * (demand).
        * @param Demand|array|string|mixed $value
    * @return $this
    */
    public function seeks($value)
    {
        $this->setProperty('seeks', $value);
        return $this;
    }

    /**
    * @param Demand|array|string|mixed $value
    * @return $this
    */
    public function setSeeks($value)
    {
        $this->setProperty('seeks', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSeeks()
    {
       return $this->getProperty('seeks');
    }


    /**
        * A member of an Organization or a ProgramMembership. Organizations can be
 * members of organizations; ProgramMembership is typically for individuals.
        * @param Person|Organization|array|string|mixed $value
    * @return $this
    */
    public function member($value)
    {
        $this->setProperty('member', $value);
        return $this;
    }

    /**
    * @param Person|Organization|array|string|mixed $value
    * @return $this
    */
    public function setMember($value)
    {
        $this->setProperty('member', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getMember()
    {
       return $this->getProperty('member');
    }


    /**
        * A person who founded this organization.
        * @param Person|array|string|mixed $value
    * @return $this
    */
    public function founders($value)
    {
        $this->setProperty('founders', $value);
        return $this;
    }

    /**
    * @param Person|array|string|mixed $value
    * @return $this
    */
    public function setFounders($value)
    {
        $this->setProperty('founders', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getFounders()
    {
       return $this->getProperty('founders');
    }


    /**
        * Alumni of an organization.
        * @param Person|array|string|mixed $value
    * @return $this
    */
    public function alumni($value)
    {
        $this->setProperty('alumni', $value);
        return $this;
    }

    /**
    * @param Person|array|string|mixed $value
    * @return $this
    */
    public function setAlumni($value)
    {
        $this->setProperty('alumni', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAlumni()
    {
       return $this->getProperty('alumni');
    }


    /**
        * The date that this organization was dissolved.
        * @param array|string|mixed $value
    * @return $this
    */
    public function dissolutionDate($value)
    {
        $this->setProperty('dissolutionDate', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setDissolutionDate($value)
    {
        $this->setProperty('dissolutionDate', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDissolutionDate()
    {
       return $this->getProperty('dissolutionDate');
    }


    /**
        * Physical address of the item.
        * @param string|PostalAddress|array|mixed $value
    * @return $this
    */
    public function address($value)
    {
        $this->setProperty('address', $value);
        return $this;
    }

    /**
    * @param string|PostalAddress|array|mixed $value
    * @return $this
    */
    public function setAddress($value)
    {
        $this->setProperty('address', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAddress()
    {
       return $this->getProperty('address');
    }


    /**
        * An associated logo.
        * @param ImageObject|string|array|mixed $value
    * @return $this
    */
    public function logo($value)
    {
        $this->setProperty('logo', $value);
        return $this;
    }

    /**
    * @param ImageObject|string|array|mixed $value
    * @return $this
    */
    public function setLogo($value)
    {
        $this->setProperty('logo', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getLogo()
    {
       return $this->getProperty('logo');
    }


    /**
        * People working for this organization.
        * @param Person|array|string|mixed $value
    * @return $this
    */
    public function employees($value)
    {
        $this->setProperty('employees', $value);
        return $this;
    }

    /**
    * @param Person|array|string|mixed $value
    * @return $this
    */
    public function setEmployees($value)
    {
        $this->setProperty('employees', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEmployees()
    {
       return $this->getProperty('employees');
    }


    /**
        * The telephone number.
        * @param string|array|mixed $value
    * @return $this
    */
    public function telephone($value)
    {
        $this->setProperty('telephone', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setTelephone($value)
    {
        $this->setProperty('telephone', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getTelephone()
    {
       return $this->getProperty('telephone');
    }


    /**
        * Email address.
        * @param string|array|mixed $value
    * @return $this
    */
    public function email($value)
    {
        $this->setProperty('email', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setEmail($value)
    {
        $this->setProperty('email', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEmail()
    {
       return $this->getProperty('email');
    }


    /**
        * A contact point for a person or organization.
        * @param ContactPoint|array|string|mixed $value
    * @return $this
    */
    public function contactPoint($value)
    {
        $this->setProperty('contactPoint', $value);
        return $this;
    }

    /**
    * @param ContactPoint|array|string|mixed $value
    * @return $this
    */
    public function setContactPoint($value)
    {
        $this->setProperty('contactPoint', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getContactPoint()
    {
       return $this->getProperty('contactPoint');
    }


    /**
        * The larger organization that this organization is a [[subOrganization]] of,
 * if any.
        * @param Organization|array|string|mixed $value
    * @return $this
    */
    public function parentOrganization($value)
    {
        $this->setProperty('parentOrganization', $value);
        return $this;
    }

    /**
    * @param Organization|array|string|mixed $value
    * @return $this
    */
    public function setParentOrganization($value)
    {
        $this->setProperty('parentOrganization', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getParentOrganization()
    {
       return $this->getProperty('parentOrganization');
    }


    /**
        * The official name of the organization, e.g. the registered company name.
        * @param string|array|mixed $value
    * @return $this
    */
    public function legalName($value)
    {
        $this->setProperty('legalName', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setLegalName($value)
    {
        $this->setProperty('legalName', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getLegalName()
    {
       return $this->getProperty('legalName');
    }


    /**
        * Awards won by or for this item.
        * @param string|array|mixed $value
    * @return $this
    */
    public function awards($value)
    {
        $this->setProperty('awards', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
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
        * Statement about ethics policy, e.g. of a [[NewsMediaOrganization]] regarding
 * journalistic and publishing practices, or of a [[Restaurant]], a page
 * describing food source policies. In the case of a [[NewsMediaOrganization]],
 * an ethicsPolicy is typically a statement describing the personal,
 * organizational, and corporate standards of behavior expected by the
 * organization.
        * @param CreativeWork|string|array|mixed $value
    * @return $this
    */
    public function ethicsPolicy($value)
    {
        $this->setProperty('ethicsPolicy', $value);
        return $this;
    }

    /**
    * @param CreativeWork|string|array|mixed $value
    * @return $this
    */
    public function setEthicsPolicy($value)
    {
        $this->setProperty('ethicsPolicy', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEthicsPolicy()
    {
       return $this->getProperty('ethicsPolicy');
    }


    /**
        * Someone working for this organization.
        * @param Person|array|string|mixed $value
    * @return $this
    */
    public function employee($value)
    {
        $this->setProperty('employee', $value);
        return $this;
    }

    /**
    * @param Person|array|string|mixed $value
    * @return $this
    */
    public function setEmployee($value)
    {
        $this->setProperty('employee', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEmployee()
    {
       return $this->getProperty('employee');
    }


    /**
        * The number of employees in an organization e.g. business.
        * @param QuantitativeValue|array|string|mixed $value
    * @return $this
    */
    public function numberOfEmployees($value)
    {
        $this->setProperty('numberOfEmployees', $value);
        return $this;
    }

    /**
    * @param QuantitativeValue|array|string|mixed $value
    * @return $this
    */
    public function setNumberOfEmployees($value)
    {
        $this->setProperty('numberOfEmployees', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getNumberOfEmployees()
    {
       return $this->getProperty('numberOfEmployees');
    }


    /**
        * The North American Industry Classification System (NAICS) code for a
 * particular organization or business person.
        * @param string|array|mixed $value
    * @return $this
    */
    public function naics($value)
    {
        $this->setProperty('naics', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setNaics($value)
    {
        $this->setProperty('naics', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getNaics()
    {
       return $this->getProperty('naics');
    }


    /**
        * Points-of-Sales operated by the organization or person.
        * @param Place|array|string|mixed $value
    * @return $this
    */
    public function hasPOS($value)
    {
        $this->setProperty('hasPOS', $value);
        return $this;
    }

    /**
    * @param Place|array|string|mixed $value
    * @return $this
    */
    public function setHasPOS($value)
    {
        $this->setProperty('hasPOS', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getHasPOS()
    {
       return $this->getProperty('hasPOS');
    }


    /**
        * A review of the item.
        * @param Review|array|string|mixed $value
    * @return $this
    */
    public function review($value)
    {
        $this->setProperty('review', $value);
        return $this;
    }

    /**
    * @param Review|array|string|mixed $value
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
        * The place where the Organization was founded.
        * @param Place|array|string|mixed $value
    * @return $this
    */
    public function foundingLocation($value)
    {
        $this->setProperty('foundingLocation', $value);
        return $this;
    }

    /**
    * @param Place|array|string|mixed $value
    * @return $this
    */
    public function setFoundingLocation($value)
    {
        $this->setProperty('foundingLocation', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getFoundingLocation()
    {
       return $this->getProperty('foundingLocation');
    }


    /**
        * Products owned by the organization or person.
        * @param Product|OwnershipInfo|array|string|mixed $value
    * @return $this
    */
    public function owns($value)
    {
        $this->setProperty('owns', $value);
        return $this;
    }

    /**
    * @param Product|OwnershipInfo|array|string|mixed $value
    * @return $this
    */
    public function setOwns($value)
    {
        $this->setProperty('owns', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getOwns()
    {
       return $this->getProperty('owns');
    }


    /**
        * Upcoming or past event associated with this place, organization, or action.
        * @param Event|array|string|mixed $value
    * @return $this
    */
    public function event($value)
    {
        $this->setProperty('event', $value);
        return $this;
    }

    /**
    * @param Event|array|string|mixed $value
    * @return $this
    */
    public function setEvent($value)
    {
        $this->setProperty('event', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEvent()
    {
       return $this->getProperty('event');
    }


    /**
        * A person who founded this organization.
        * @param Person|array|string|mixed $value
    * @return $this
    */
    public function founder($value)
    {
        $this->setProperty('founder', $value);
        return $this;
    }

    /**
    * @param Person|array|string|mixed $value
    * @return $this
    */
    public function setFounder($value)
    {
        $this->setProperty('founder', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getFounder()
    {
       return $this->getProperty('founder');
    }


    /**
        * The publishingPrinciples property indicates (typically via [[URL]]) a
 * document describing the editorial principles of an [[Organization]] (or
 * individual e.g. a [[Person]] writing a blog) that relate to their activities
 * as a publisher, e.g. ethics or diversity policies. When applied to a
 * [[CreativeWork]] (e.g. [[NewsArticle]]) the principles are those of the party
 * primarily responsible for the creation of the [[CreativeWork]].
 * 
 * While such policies are most typically expressed in natural language,
 * sometimes related information (e.g. indicating a [[funder]]) can be expressed
 * using schema.org terminology.
        * @param CreativeWork|string|array|mixed $value
    * @return $this
    */
    public function publishingPrinciples($value)
    {
        $this->setProperty('publishingPrinciples', $value);
        return $this;
    }

    /**
    * @param CreativeWork|string|array|mixed $value
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
        * A person or organization that supports a thing through a pledge, promise, or
 * financial contribution. e.g. a sponsor of a Medical Study or a corporate
 * sponsor of an event.
        * @param Person|Organization|array|string|mixed $value
    * @return $this
    */
    public function sponsor($value)
    {
        $this->setProperty('sponsor', $value);
        return $this;
    }

    /**
    * @param Person|Organization|array|string|mixed $value
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
        * The International Standard of Industrial Classification of All Economic
 * Activities (ISIC), Revision 4 code for a particular organization, business
 * person, or place.
        * @param string|array|mixed $value
    * @return $this
    */
    public function isicV4($value)
    {
        $this->setProperty('isicV4', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setIsicV4($value)
    {
        $this->setProperty('isicV4', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getIsicV4()
    {
       return $this->getProperty('isicV4');
    }


    /**
        * A slogan or motto associated with the item.
        * @param string|array|mixed $value
    * @return $this
    */
    public function slogan($value)
    {
        $this->setProperty('slogan', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setSlogan($value)
    {
        $this->setProperty('slogan', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSlogan()
    {
       return $this->getProperty('slogan');
    }


    /**
        * The location of for example where the event is happening, an organization is
 * located, or where an action takes place.
        * @param PostalAddress|string|Place|array|mixed $value
    * @return $this
    */
    public function location($value)
    {
        $this->setProperty('location', $value);
        return $this;
    }

    /**
    * @param PostalAddress|string|Place|array|mixed $value
    * @return $this
    */
    public function setLocation($value)
    {
        $this->setProperty('location', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getLocation()
    {
       return $this->getProperty('location');
    }


    /**
        * The brand(s) associated with a product or service, or the brand(s) maintained
 * by an organization or business person.
        * @param Organization|Brand|array|string|mixed $value
    * @return $this
    */
    public function brand($value)
    {
        $this->setProperty('brand', $value);
        return $this;
    }

    /**
    * @param Organization|Brand|array|string|mixed $value
    * @return $this
    */
    public function setBrand($value)
    {
        $this->setProperty('brand', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getBrand()
    {
       return $this->getProperty('brand');
    }


    /**
        * A relationship between an organization and a department of that organization,
 * also described as an organization (allowing different urls, logos, opening
 * hours). For example: a store with a pharmacy, or a bakery with a cafe.
        * @param Organization|array|string|mixed $value
    * @return $this
    */
    public function department($value)
    {
        $this->setProperty('department', $value);
        return $this;
    }

    /**
    * @param Organization|array|string|mixed $value
    * @return $this
    */
    public function setDepartment($value)
    {
        $this->setProperty('department', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDepartment()
    {
       return $this->getProperty('department');
    }


    /**
        * The Value-added Tax ID of the organization or person.
        * @param string|array|mixed $value
    * @return $this
    */
    public function vatID($value)
    {
        $this->setProperty('vatID', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setVatID($value)
    {
        $this->setProperty('vatID', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getVatID()
    {
       return $this->getProperty('vatID');
    }


    /**
        * A credential awarded to the Person or Organization.
        * @param EducationalOccupationalCredential|array|string|mixed $value
    * @return $this
    */
    public function hasCredential($value)
    {
        $this->setProperty('hasCredential', $value);
        return $this;
    }

    /**
    * @param EducationalOccupationalCredential|array|string|mixed $value
    * @return $this
    */
    public function setHasCredential($value)
    {
        $this->setProperty('hasCredential', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getHasCredential()
    {
       return $this->getProperty('hasCredential');
    }


    /**
        * Of a [[Person]], and less typically of an [[Organization]], to indicate a
 * known language. We do not distinguish skill levels or
 * reading/writing/speaking/signing here. Use language codes from the [IETF BCP
 * 47 standard](http://tools.ietf.org/html/bcp47).
        * @param string|Language|array|mixed $value
    * @return $this
    */
    public function knowsLanguage($value)
    {
        $this->setProperty('knowsLanguage', $value);
        return $this;
    }

    /**
    * @param string|Language|array|mixed $value
    * @return $this
    */
    public function setKnowsLanguage($value)
    {
        $this->setProperty('knowsLanguage', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getKnowsLanguage()
    {
       return $this->getProperty('knowsLanguage');
    }


    /**
        * The fax number.
        * @param string|array|mixed $value
    * @return $this
    */
    public function faxNumber($value)
    {
        $this->setProperty('faxNumber', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setFaxNumber($value)
    {
        $this->setProperty('faxNumber', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getFaxNumber()
    {
       return $this->getProperty('faxNumber');
    }


    /**
        * The geographic area where a service or offered item is provided.
        * @param string|GeoShape|Place|AdministrativeArea|array|mixed $value
    * @return $this
    */
    public function areaServed($value)
    {
        $this->setProperty('areaServed', $value);
        return $this;
    }

    /**
    * @param string|GeoShape|Place|AdministrativeArea|array|mixed $value
    * @return $this
    */
    public function setAreaServed($value)
    {
        $this->setProperty('areaServed', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAreaServed()
    {
       return $this->getProperty('areaServed');
    }


    /**
        * For an [[Organization]] (often but not necessarily a
 * [[NewsMediaOrganization]]), a report on staffing diversity issues. In a news
 * context this might be for example ASNE or RTDNA (US) reports, or
 * self-reported.
        * @param string|Article|array|mixed $value
    * @return $this
    */
    public function diversityStaffingReport($value)
    {
        $this->setProperty('diversityStaffingReport', $value);
        return $this;
    }

    /**
    * @param string|Article|array|mixed $value
    * @return $this
    */
    public function setDiversityStaffingReport($value)
    {
        $this->setProperty('diversityStaffingReport', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDiversityStaffingReport()
    {
       return $this->getProperty('diversityStaffingReport');
    }


    /**
        * The date that this organization was founded.
        * @param array|string|mixed $value
    * @return $this
    */
    public function foundingDate($value)
    {
        $this->setProperty('foundingDate', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setFoundingDate($value)
    {
        $this->setProperty('foundingDate', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getFoundingDate()
    {
       return $this->getProperty('foundingDate');
    }


}
