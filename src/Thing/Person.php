<?php

declare (strict_types=1);

namespace Sohophp\SchemaOrg\Thing;

use Sohophp\SchemaOrg\Thing;
use Sohophp\SchemaOrg\Thing\Intangible\ProgramMembership;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress;
use Sohophp\SchemaOrg\Thing\Intangible\Quantity\Distance;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint;
use Sohophp\SchemaOrg\Thing\Place;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\MonetaryAmount;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification;
use Sohophp\SchemaOrg\Thing\Intangible\ItemList\OfferCatalog;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\GenderType;
use Sohophp\SchemaOrg\Thing\Organization\EducationalOrganization;
use Sohophp\SchemaOrg\Thing\Intangible\Offer;
use Sohophp\SchemaOrg\Thing\Intangible\Demand;
use Sohophp\SchemaOrg\Thing\Event;
use Sohophp\SchemaOrg\Thing\Product;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\OwnershipInfo;
use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\Intangible\Brand;
use Sohophp\SchemaOrg\Thing\Place\AdministrativeArea\Country;
/**
* A person (alive, dead, undead, or fictional).
* @see http://schema.org/Person
* @package Sohophp\SchemaOrg\Thing
*/
class Person extends Thing
{

     
     /**
     * An Organization (or ProgramMembership) to which this Person or Organization belongs.
     * @param ProgramMembership|Organization $value
     * @return $this
     */

     public function memberOf( $value):self
     {
        $this->setProperty("memberOf",$value);
        return $this;
     }

     
     /**
     * Physical address of the item.
     * @param PostalAddress|string $value
     * @return $this
     */

     public function address( $value):self
     {
        $this->setProperty("address",$value);
        return $this;
     }

     
     /**
     * The person's spouse.
     * @param Person $value
     * @return $this
     */

     public function spouse(?Person $value):self
     {
        $this->setProperty("spouse",$value);
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
     * A colleague of the person.
     * @param Person $value
     * @return $this
     */

     public function colleagues(?Person $value):self
     {
        $this->setProperty("colleagues",$value);
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
     * Date of death.
     * @param  $value
     * @return $this
     */

     public function deathDate( $value):self
     {
        $this->setProperty("deathDate",$value);
        return $this;
     }

     
     /**
     * The height of the item.
     * @param Distance|QuantitativeValue $value
     * @return $this
     */

     public function height( $value):self
     {
        $this->setProperty("height",$value);
        return $this;
     }

     
     /**
     * A contact location for a person's place of work.
     * @param ContactPoint|Place $value
     * @return $this
     */

     public function workLocation( $value):self
     {
        $this->setProperty("workLocation",$value);
        return $this;
     }

     
     /**
     * The total financial value of the person as calculated by subtracting assets from liabilities.
     * @param MonetaryAmount|PriceSpecification $value
     * @return $this
     */

     public function netWorth( $value):self
     {
        $this->setProperty("netWorth",$value);
        return $this;
     }

     
     /**
     * The fax number.
     * @param string $value
     * @return $this
     */

     public function faxNumber(?string $value):self
     {
        $this->setProperty("faxNumber",$value);
        return $this;
     }

     
     /**
     * The job title of the person (for example, Financial Manager).
     * @param string $value
     * @return $this
     */

     public function jobTitle(?string $value):self
     {
        $this->setProperty("jobTitle",$value);
        return $this;
     }

     
     /**
     * Indicates an OfferCatalog listing for this Organization, Person, or Service.
     * @param OfferCatalog $value
     * @return $this
     */

     public function hasOfferCatalog(?OfferCatalog $value):self
     {
        $this->setProperty("hasOfferCatalog",$value);
        return $this;
     }

     
     /**
     * The place where the person died.
     * @param Place $value
     * @return $this
     */

     public function deathPlace(?Place $value):self
     {
        $this->setProperty("deathPlace",$value);
        return $this;
     }

     
     /**
     * The <a href="http://www.gs1.org/gln">Global Location Number</a> (GLN, sometimes also referred to as International Location Number or ILN) of the respective organization, person, or place. The GLN is a 13-digit number used to identify parties and physical locations.
     * @param string $value
     * @return $this
     */

     public function globalLocationNumber(?string $value):self
     {
        $this->setProperty("globalLocationNumber",$value);
        return $this;
     }

     
     /**
     * The place where the person was born.
     * @param Place $value
     * @return $this
     */

     public function birthPlace(?Place $value):self
     {
        $this->setProperty("birthPlace",$value);
        return $this;
     }

     
     /**
     * Gender of the person. While http://schema.org/Male and http://schema.org/Female may be used, text strings are also acceptable for people who do not identify as a binary gender.
     * @param GenderType|string $value
     * @return $this
     */

     public function gender( $value):self
     {
        $this->setProperty("gender",$value);
        return $this;
     }

     
     /**
     * An organization that the person is an alumni of.
     * @param Organization|EducationalOrganization $value
     * @return $this
     */

     public function alumniOf( $value):self
     {
        $this->setProperty("alumniOf",$value);
        return $this;
     }

     
     /**
     * A contact location for a person's residence.
     * @param Place|ContactPoint $value
     * @return $this
     */

     public function homeLocation( $value):self
     {
        $this->setProperty("homeLocation",$value);
        return $this;
     }

     
     /**
     * The Dun &amp; Bradstreet DUNS number for identifying an organization or business person.
     * @param string $value
     * @return $this
     */

     public function duns(?string $value):self
     {
        $this->setProperty("duns",$value);
        return $this;
     }

     
     /**
     * The Tax / Fiscal ID of the organization or person, e.g. the TIN in the US or the CIF/NIF in Spain.
     * @param string $value
     * @return $this
     */

     public function taxID(?string $value):self
     {
        $this->setProperty("taxID",$value);
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
     * Date of birth.
     * @param  $value
     * @return $this
     */

     public function birthDate( $value):self
     {
        $this->setProperty("birthDate",$value);
        return $this;
     }

     
     /**
     * A pointer to products or services offered by the organization or person.
     * @param Offer $value
     * @return $this
     */

     public function makesOffer(?Offer $value):self
     {
        $this->setProperty("makesOffer",$value);
        return $this;
     }

     
     /**
     * A contact point for a person or organization.
     * @param ContactPoint $value
     * @return $this
     */

     public function contactPoints(?ContactPoint $value):self
     {
        $this->setProperty("contactPoints",$value);
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
     * Family name. In the U.S., the last name of an Person. This can be used along with givenName instead of the name property.
     * @param string $value
     * @return $this
     */

     public function familyName(?string $value):self
     {
        $this->setProperty("familyName",$value);
        return $this;
     }

     
     /**
     * A pointer to products or services sought by the organization or person (demand).
     * @param Demand $value
     * @return $this
     */

     public function seeks(?Demand $value):self
     {
        $this->setProperty("seeks",$value);
        return $this;
     }

     
     /**
     * A sibling of the person.
     * @param Person $value
     * @return $this
     */

     public function sibling(?Person $value):self
     {
        $this->setProperty("sibling",$value);
        return $this;
     }

     
     /**
     * Event that this person is a performer or participant in.
     * @param Event $value
     * @return $this
     */

     public function performerIn(?Event $value):self
     {
        $this->setProperty("performerIn",$value);
        return $this;
     }

     
     /**
     * An honorific prefix preceding a Person's name such as Dr/Mrs/Mr.
     * @param string $value
     * @return $this
     */

     public function honorificPrefix(?string $value):self
     {
        $this->setProperty("honorificPrefix",$value);
        return $this;
     }

     
     /**
     * An additional name for a Person, can be used for a middle name.
     * @param string $value
     * @return $this
     */

     public function additionalName(?string $value):self
     {
        $this->setProperty("additionalName",$value);
        return $this;
     }

     
     /**
     * A sibling of the person.
     * @param Person $value
     * @return $this
     */

     public function siblings(?Person $value):self
     {
        $this->setProperty("siblings",$value);
        return $this;
     }

     
     /**
     * The telephone number.
     * @param string $value
     * @return $this
     */

     public function telephone(?string $value):self
     {
        $this->setProperty("telephone",$value);
        return $this;
     }

     
     /**
     * Email address.
     * @param string $value
     * @return $this
     */

     public function email(?string $value):self
     {
        $this->setProperty("email",$value);
        return $this;
     }

     
     /**
     * The weight of the product or person.
     * @param QuantitativeValue $value
     * @return $this
     */

     public function weight(?QuantitativeValue $value):self
     {
        $this->setProperty("weight",$value);
        return $this;
     }

     
     /**
     * A contact point for a person or organization.
     * @param ContactPoint $value
     * @return $this
     */

     public function contactPoint(?ContactPoint $value):self
     {
        $this->setProperty("contactPoint",$value);
        return $this;
     }

     
     /**
     * A colleague of the person.
     * @param Person|string $value
     * @return $this
     */

     public function colleague( $value):self
     {
        $this->setProperty("colleague",$value);
        return $this;
     }

     
     /**
     * A child of the person.
     * @param Person $value
     * @return $this
     */

     public function children(?Person $value):self
     {
        $this->setProperty("children",$value);
        return $this;
     }

     
     /**
     * A parents of the person.
     * @param Person $value
     * @return $this
     */

     public function parents(?Person $value):self
     {
        $this->setProperty("parents",$value);
        return $this;
     }

     
     /**
     * Given name. In the U.S., the first name of a Person. This can be used along with familyName instead of the name property.
     * @param string $value
     * @return $this
     */

     public function givenName(?string $value):self
     {
        $this->setProperty("givenName",$value);
        return $this;
     }

     
     /**
     * The North American Industry Classification System (NAICS) code for a particular organization or business person.
     * @param string $value
     * @return $this
     */

     public function naics(?string $value):self
     {
        $this->setProperty("naics",$value);
        return $this;
     }

     
     /**
     * Points-of-Sales operated by the organization or person.
     * @param Place $value
     * @return $this
     */

     public function hasPOS(?Place $value):self
     {
        $this->setProperty("hasPOS",$value);
        return $this;
     }

     
     /**
     * A parent of this person.
     * @param Person $value
     * @return $this
     */

     public function parent(?Person $value):self
     {
        $this->setProperty("parent",$value);
        return $this;
     }

     
     /**
     * Products owned by the organization or person.
     * @param Product|OwnershipInfo $value
     * @return $this
     */

     public function owns( $value):self
     {
        $this->setProperty("owns",$value);
        return $this;
     }

     
     /**
     * An organization that this person is affiliated with. For example, a school/university, a club, or a team.
     * @param Organization $value
     * @return $this
     */

     public function affiliation(?Organization $value):self
     {
        $this->setProperty("affiliation",$value);
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
     * The International Standard of Industrial Classification of All Economic Activities (ISIC), Revision 4 code for a particular organization, business person, or place.
     * @param string $value
     * @return $this
     */

     public function isicV4(?string $value):self
     {
        $this->setProperty("isicV4",$value);
        return $this;
     }

     
     /**
     * The brand(s) associated with a product or service, or the brand(s) maintained by an organization or business person.
     * @param Organization|Brand $value
     * @return $this
     */

     public function brand( $value):self
     {
        $this->setProperty("brand",$value);
        return $this;
     }

     
     /**
     * An honorific suffix preceding a Person's name such as M.D. /PhD/MSCSW.
     * @param string $value
     * @return $this
     */

     public function honorificSuffix(?string $value):self
     {
        $this->setProperty("honorificSuffix",$value);
        return $this;
     }

     
     /**
     * The Value-added Tax ID of the organization or person.
     * @param string $value
     * @return $this
     */

     public function vatID(?string $value):self
     {
        $this->setProperty("vatID",$value);
        return $this;
     }

     
     /**
     * Nationality of the person.
     * @param Country $value
     * @return $this
     */

     public function nationality(?Country $value):self
     {
        $this->setProperty("nationality",$value);
        return $this;
     }

     
     /**
     * The most generic familial relation.
     * @param Person $value
     * @return $this
     */

     public function relatedTo(?Person $value):self
     {
        $this->setProperty("relatedTo",$value);
        return $this;
     }

     
     /**
     * The most generic uni-directional social relation.
     * @param Person $value
     * @return $this
     */

     public function follows(?Person $value):self
     {
        $this->setProperty("follows",$value);
        return $this;
     }

     
     /**
     * The most generic bi-directional social/work relation.
     * @param Person $value
     * @return $this
     */

     public function knows(?Person $value):self
     {
        $this->setProperty("knows",$value);
        return $this;
     }

     
     /**
     * Organizations that the person works for.
     * @param Organization $value
     * @return $this
     */

     public function worksFor(?Organization $value):self
     {
        $this->setProperty("worksFor",$value);
        return $this;
     }

     
}

