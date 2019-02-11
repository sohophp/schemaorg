<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing;

use Sohophp\SchemaOrg\Thing;
use Sohophp\SchemaOrg\Thing\Place\AdministrativeArea;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\GeoShape;
use Sohophp\SchemaOrg\Thing\Place;
use Sohophp\SchemaOrg\Thing\Intangible\ProgramMembership;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Intangible\ItemList\OfferCatalog;
use Sohophp\SchemaOrg\Thing\CreativeWork\Review;
use Sohophp\SchemaOrg\Thing\Intangible\Rating\AggregateRating;
use Sohophp\SchemaOrg\Thing\Intangible\Offer;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint;
use Sohophp\SchemaOrg\Thing\Intangible\Demand;
use Sohophp\SchemaOrg\Thing\Event;
use Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject\ImageObject;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;
use Sohophp\SchemaOrg\Thing\Product;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\OwnershipInfo;
use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\Intangible\Brand;

/**
* An organization such as a school, NGO, corporation, club, etc.
* @see http://schema.org/Organization
* @package Sohophp\SchemaOrg\Thing
*/
class Organization extends Thing
{

    /**
    * The geographic area where the service is provided.
    * @param AdministrativeArea|GeoShape|Place $value
    * @return $this
    */
    public function serviceArea($value)
    {
        $this->setProperty('serviceArea', $value);
        return $this;
    }

    /**
    * An Organization (or ProgramMembership) to which this Person or Organization belongs.
    * @param ProgramMembership|Organization $value
    * @return $this
    */
    public function memberOf($value)
    {
        $this->setProperty('memberOf', $value);
        return $this;
    }

    /**
    * Physical address of the item.
    * @param PostalAddress|string $value
    * @return $this
    */
    public function address($value)
    {
        $this->setProperty('address', $value);
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
    * The geographic area where a service or offered item is provided.
    * @param AdministrativeArea|string|Place|GeoShape $value
    * @return $this
    */
    public function areaServed($value)
    {
        $this->setProperty('areaServed', $value);
        return $this;
    }

    /**
    * The fax number.
    * @param string $value
    * @return $this
    */
    public function faxNumber(?string $value)
    {
        $this->setProperty('faxNumber', $value);
        return $this;
    }

    /**
    * A relationship between two organizations where the first includes the second, e.g., as a subsidiary. See also: the more specific 'department' property.
    * @param Organization $value
    * @return $this
    */
    public function subOrganization(?Organization $value)
    {
        $this->setProperty('subOrganization', $value);
        return $this;
    }

    /**
    * Indicates an OfferCatalog listing for this Organization, Person, or Service.
    * @param OfferCatalog $value
    * @return $this
    */
    public function hasOfferCatalog(?OfferCatalog $value)
    {
        $this->setProperty('hasOfferCatalog', $value);
        return $this;
    }

    /**
    * The <a href="http://www.gs1.org/gln">Global Location Number</a> (GLN, sometimes also referred to as International Location Number or ILN) of the respective organization, person, or place. The GLN is a 13-digit number used to identify parties and physical locations.
    * @param string $value
    * @return $this
    */
    public function globalLocationNumber(?string $value)
    {
        $this->setProperty('globalLocationNumber', $value);
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
    * A member of this organization.
    * @param Organization|Person $value
    * @return $this
    */
    public function members($value)
    {
        $this->setProperty('members', $value);
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
    * The Dun &amp; Bradstreet DUNS number for identifying an organization or business person.
    * @param string $value
    * @return $this
    */
    public function duns(?string $value)
    {
        $this->setProperty('duns', $value);
        return $this;
    }

    /**
    * The Tax / Fiscal ID of the organization or person, e.g. the TIN in the US or the CIF/NIF in Spain.
    * @param string $value
    * @return $this
    */
    public function taxID(?string $value)
    {
        $this->setProperty('taxID', $value);
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
    * A pointer to products or services offered by the organization or person.
    * @param Offer $value
    * @return $this
    */
    public function makesOffer(?Offer $value)
    {
        $this->setProperty('makesOffer', $value);
        return $this;
    }

    /**
    * A contact point for a person or organization.
    * @param ContactPoint $value
    * @return $this
    */
    public function contactPoints(?ContactPoint $value)
    {
        $this->setProperty('contactPoints', $value);
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
    * An organization identifier that uniquely identifies a legal entity as defined in ISO 17442.
    * @param string $value
    * @return $this
    */
    public function leiCode(?string $value)
    {
        $this->setProperty('leiCode', $value);
        return $this;
    }

    /**
    * A pointer to products or services sought by the organization or person (demand).
    * @param Demand $value
    * @return $this
    */
    public function seeks(?Demand $value)
    {
        $this->setProperty('seeks', $value);
        return $this;
    }

    /**
    * A member of an Organization or a ProgramMembership. Organizations can be members of organizations; ProgramMembership is typically for individuals.
    * @param Person|Organization $value
    * @return $this
    */
    public function member($value)
    {
        $this->setProperty('member', $value);
        return $this;
    }

    /**
    * A person who founded this organization.
    * @param Person $value
    * @return $this
    */
    public function founders(?Person $value)
    {
        $this->setProperty('founders', $value);
        return $this;
    }

    /**
    * Alumni of an organization.
    * @param Person $value
    * @return $this
    */
    public function alumni(?Person $value)
    {
        $this->setProperty('alumni', $value);
        return $this;
    }

    /**
    * The date that this organization was dissolved.
    * @param  $value
    * @return $this
    */
    public function dissolutionDate($value)
    {
        $this->setProperty('dissolutionDate', $value);
        return $this;
    }

    /**
    * Upcoming or past events associated with this place or organization.
    * @param Event $value
    * @return $this
    */
    public function events(?Event $value)
    {
        $this->setProperty('events', $value);
        return $this;
    }

    /**
    * An associated logo.
    * @param string|ImageObject $value
    * @return $this
    */
    public function logo($value)
    {
        $this->setProperty('logo', $value);
        return $this;
    }

    /**
    * People working for this organization.
    * @param Person $value
    * @return $this
    */
    public function employees(?Person $value)
    {
        $this->setProperty('employees', $value);
        return $this;
    }

    /**
    * The telephone number.
    * @param string $value
    * @return $this
    */
    public function telephone(?string $value)
    {
        $this->setProperty('telephone', $value);
        return $this;
    }

    /**
    * Email address.
    * @param string $value
    * @return $this
    */
    public function email(?string $value)
    {
        $this->setProperty('email', $value);
        return $this;
    }

    /**
    * A relationship between an organization and a department of that organization, also described as an organization (allowing different urls, logos, opening hours). For example: a store with a pharmacy, or a bakery with a cafe.
    * @param Organization $value
    * @return $this
    */
    public function department(?Organization $value)
    {
        $this->setProperty('department', $value);
        return $this;
    }

    /**
    * A contact point for a person or organization.
    * @param ContactPoint $value
    * @return $this
    */
    public function contactPoint(?ContactPoint $value)
    {
        $this->setProperty('contactPoint', $value);
        return $this;
    }

    /**
    * The larger organization that this organization is a <a class="localLink" href="http://schema.org/subOrganization">subOrganization</a> of, if any.
    * @param Organization $value
    * @return $this
    */
    public function parentOrganization(?Organization $value)
    {
        $this->setProperty('parentOrganization', $value);
        return $this;
    }

    /**
    * The official name of the organization, e.g. the registered company name.
    * @param string $value
    * @return $this
    */
    public function legalName(?string $value)
    {
        $this->setProperty('legalName', $value);
        return $this;
    }

    /**
    * The date that this organization was founded.
    * @param  $value
    * @return $this
    */
    public function foundingDate($value)
    {
        $this->setProperty('foundingDate', $value);
        return $this;
    }

    /**
    * Someone working for this organization.
    * @param Person $value
    * @return $this
    */
    public function employee(?Person $value)
    {
        $this->setProperty('employee', $value);
        return $this;
    }

    /**
    * The number of employees in an organization e.g. business.
    * @param QuantitativeValue $value
    * @return $this
    */
    public function numberOfEmployees(?QuantitativeValue $value)
    {
        $this->setProperty('numberOfEmployees', $value);
        return $this;
    }

    /**
    * The North American Industry Classification System (NAICS) code for a particular organization or business person.
    * @param string $value
    * @return $this
    */
    public function naics(?string $value)
    {
        $this->setProperty('naics', $value);
        return $this;
    }

    /**
    * Points-of-Sales operated by the organization or person.
    * @param Place $value
    * @return $this
    */
    public function hasPOS(?Place $value)
    {
        $this->setProperty('hasPOS', $value);
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
    * The place where the Organization was founded.
    * @param Place $value
    * @return $this
    */
    public function foundingLocation(?Place $value)
    {
        $this->setProperty('foundingLocation', $value);
        return $this;
    }

    /**
    * Products owned by the organization or person.
    * @param Product|OwnershipInfo $value
    * @return $this
    */
    public function owns($value)
    {
        $this->setProperty('owns', $value);
        return $this;
    }

    /**
    * Upcoming or past event associated with this place, organization, or action.
    * @param Event $value
    * @return $this
    */
    public function event(?Event $value)
    {
        $this->setProperty('event', $value);
        return $this;
    }

    /**
    * A person who founded this organization.
    * @param Person $value
    * @return $this
    */
    public function founder(?Person $value)
    {
        $this->setProperty('founder', $value);
        return $this;
    }

    /**
    * The publishingPrinciples property indicates (typically via <a class="localLink" href="http://schema.org/URL">URL</a>) a document describing the editorial principles of an <a class="localLink" href="http://schema.org/Organization">Organization</a> (or individual e.g. a <a class="localLink" href="http://schema.org/Person">Person</a> writing a blog) that relate to their activities as a publisher, e.g. ethics or diversity policies. When applied to a <a class="localLink" href="http://schema.org/CreativeWork">CreativeWork</a> (e.g. <a class="localLink" href="http://schema.org/NewsArticle">NewsArticle</a>) the principles are those of the party primarily responsible for the creation of the <a class="localLink" href="http://schema.org/CreativeWork">CreativeWork</a>.<br/><br/>

While such policies are most typically expressed in natural language, sometimes related information (e.g. indicating a <a class="localLink" href="http://schema.org/funder">funder</a>) can be expressed using schema.org terminology.
    * @param string|CreativeWork $value
    * @return $this
    */
    public function publishingPrinciples($value)
    {
        $this->setProperty('publishingPrinciples', $value);
        return $this;
    }

    /**
    * The International Standard of Industrial Classification of All Economic Activities (ISIC), Revision 4 code for a particular organization, business person, or place.
    * @param string $value
    * @return $this
    */
    public function isicV4(?string $value)
    {
        $this->setProperty('isicV4', $value);
        return $this;
    }

    /**
    * The location of for example where the event is happening, an organization is located, or where an action takes place.
    * @param PostalAddress|Place|string $value
    * @return $this
    */
    public function location($value)
    {
        $this->setProperty('location', $value);
        return $this;
    }

    /**
    * The brand(s) associated with a product or service, or the brand(s) maintained by an organization or business person.
    * @param Organization|Brand $value
    * @return $this
    */
    public function brand($value)
    {
        $this->setProperty('brand', $value);
        return $this;
    }

    /**
    * The Value-added Tax ID of the organization or person.
    * @param string $value
    * @return $this
    */
    public function vatID(?string $value)
    {
        $this->setProperty('vatID', $value);
        return $this;
    }


}

