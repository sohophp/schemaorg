<?php
namespace Sohophp\SchemaOrg\Thing;

use Sohophp\SchemaOrg\Thing;
use Sohophp\SchemaOrg\Thing\Intangible\ProgramMembership;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Intangible\Quantity\Distance;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;
use Sohophp\SchemaOrg\Thing\Place;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\MonetaryAmount;
use Sohophp\SchemaOrg\Thing\Intangible\Occupation;
use Sohophp\SchemaOrg\Thing\Intangible\DefinedTerm;
use Sohophp\SchemaOrg\Thing\Intangible\ItemList\OfferCatalog;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\GenderType;
use Sohophp\SchemaOrg\Thing\Organization\EducationalOrganization;
use Sohophp\SchemaOrg\Thing\Intangible\Offer;
use Sohophp\SchemaOrg\Thing\Intangible\Demand;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress;
use Sohophp\SchemaOrg\Thing\Event;
use Sohophp\SchemaOrg\Thing\Product;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\OwnershipInfo;
use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\Intangible\Brand;
use Sohophp\SchemaOrg\Thing\Place\AdministrativeArea\Country;
use Sohophp\SchemaOrg\Thing\CreativeWork\EducationalOccupationalCredential;
use Sohophp\SchemaOrg\Thing\Intangible\Language;

/**
* A person (alive, dead, undead, or fictional).
* @see http://schema.org/Person
* @package Sohophp\SchemaOrg\Thing

*
*/
class Person extends Thing
{

    /**
    * An Organization (or ProgramMembership) to which this Person or Organization belongs.
    * @param ProgramMembership|Organization|array|string $value
    * @return $this
    * @deprecated use setMemberOf
    */
    public function memberOf($value)
    {
        $this->setProperty('memberOf', $value);
        return $this;
    }
   /**
    * @param ProgramMembership|Organization|array|string $value
    * @return $this
    */
    public function setMemberOf($value)
    {
        $this->setProperty('memberOf', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getMemberOf()
    {
       return $this->getProperty('memberOf');
    }

    /**
    * The person's spouse.
    * @param Person|array|string $value
    * @return $this
    * @deprecated use setSpouse
    */
    public function spouse($value)
    {
        $this->setProperty('spouse', $value);
        return $this;
    }
   /**
    * @param Person|array|string $value
    * @return $this
    */
    public function setSpouse($value)
    {
        $this->setProperty('spouse', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getSpouse()
    {
       return $this->getProperty('spouse');
    }

    /**
    * A person or organization that supports (sponsors) something through some kind of financial contribution.
    * @param Organization|Person|array|string $value
    * @return $this
    * @deprecated use setFunder
    */
    public function funder($value)
    {
        $this->setProperty('funder', $value);
        return $this;
    }
   /**
    * @param Organization|Person|array|string $value
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
    * A colleague of the person.
    * @param Person|array|string $value
    * @return $this
    * @deprecated use setColleagues
    */
    public function colleagues($value)
    {
        $this->setProperty('colleagues', $value);
        return $this;
    }
   /**
    * @param Person|array|string $value
    * @return $this
    */
    public function setColleagues($value)
    {
        $this->setProperty('colleagues', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getColleagues()
    {
       return $this->getProperty('colleagues');
    }

    /**
    * Date of death.
    * @param array|string $value
    * @return $this
    * @deprecated use setDeathDate
    */
    public function deathDate($value)
    {
        $this->setProperty('deathDate', $value);
        return $this;
    }
   /**
    * @param array|string $value
    * @return $this
    */
    public function setDeathDate($value)
    {
        $this->setProperty('deathDate', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getDeathDate()
    {
       return $this->getProperty('deathDate');
    }

    /**
    * Of a <a class="localLink" href="http://schema.org/Person">Person</a>, and less typically of an <a class="localLink" href="http://schema.org/Organization">Organization</a>, to indicate a topic that is known about - suggesting possible expertise but not implying it. We do not distinguish skill levels here, or relate this to educational content, events, objectives or <a class="localLink" href="http://schema.org/JobPosting">JobPosting</a> descriptions.
    * @param Thing|string|string|array $value
    * @return $this
    * @deprecated use setKnowsAbout
    */
    public function knowsAbout($value)
    {
        $this->setProperty('knowsAbout', $value);
        return $this;
    }
   /**
    * @param Thing|string|string|array $value
    * @return $this
    */
    public function setKnowsAbout($value)
    {
        $this->setProperty('knowsAbout', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getKnowsAbout()
    {
       return $this->getProperty('knowsAbout');
    }

    /**
    * The height of the item.
    * @param Distance|QuantitativeValue|array|string $value
    * @return $this
    * @deprecated use setHeight
    */
    public function height($value)
    {
        $this->setProperty('height', $value);
        return $this;
    }
   /**
    * @param Distance|QuantitativeValue|array|string $value
    * @return $this
    */
    public function setHeight($value)
    {
        $this->setProperty('height', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getHeight()
    {
       return $this->getProperty('height');
    }

    /**
    * A contact location for a person's place of work.
    * @param Place|ContactPoint|array|string $value
    * @return $this
    * @deprecated use setWorkLocation
    */
    public function workLocation($value)
    {
        $this->setProperty('workLocation', $value);
        return $this;
    }
   /**
    * @param Place|ContactPoint|array|string $value
    * @return $this
    */
    public function setWorkLocation($value)
    {
        $this->setProperty('workLocation', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getWorkLocation()
    {
       return $this->getProperty('workLocation');
    }

    /**
    * The total financial value of the person as calculated by subtracting assets from liabilities.
    * @param PriceSpecification|MonetaryAmount|array|string $value
    * @return $this
    * @deprecated use setNetWorth
    */
    public function netWorth($value)
    {
        $this->setProperty('netWorth', $value);
        return $this;
    }
   /**
    * @param PriceSpecification|MonetaryAmount|array|string $value
    * @return $this
    */
    public function setNetWorth($value)
    {
        $this->setProperty('netWorth', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getNetWorth()
    {
       return $this->getProperty('netWorth');
    }

    /**
    * A child of the person.
    * @param Person|array|string $value
    * @return $this
    * @deprecated use setChildren
    */
    public function children($value)
    {
        $this->setProperty('children', $value);
        return $this;
    }
   /**
    * @param Person|array|string $value
    * @return $this
    */
    public function setChildren($value)
    {
        $this->setProperty('children', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getChildren()
    {
       return $this->getProperty('children');
    }

    /**
    * The Person's occupation. For past professions, use Role for expressing dates.
    * @param Occupation|array|string $value
    * @return $this
    * @deprecated use setHasOccupation
    */
    public function hasOccupation($value)
    {
        $this->setProperty('hasOccupation', $value);
        return $this;
    }
   /**
    * @param Occupation|array|string $value
    * @return $this
    */
    public function setHasOccupation($value)
    {
        $this->setProperty('hasOccupation', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getHasOccupation()
    {
       return $this->getProperty('hasOccupation');
    }

    /**
    * The job title of the person (for example, Financial Manager).
    * @param string|DefinedTerm|array $value
    * @return $this
    * @deprecated use setJobTitle
    */
    public function jobTitle($value)
    {
        $this->setProperty('jobTitle', $value);
        return $this;
    }
   /**
    * @param string|DefinedTerm|array $value
    * @return $this
    */
    public function setJobTitle($value)
    {
        $this->setProperty('jobTitle', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getJobTitle()
    {
       return $this->getProperty('jobTitle');
    }

    /**
    * Indicates an OfferCatalog listing for this Organization, Person, or Service.
    * @param OfferCatalog|array|string $value
    * @return $this
    * @deprecated use setHasOfferCatalog
    */
    public function hasOfferCatalog($value)
    {
        $this->setProperty('hasOfferCatalog', $value);
        return $this;
    }
   /**
    * @param OfferCatalog|array|string $value
    * @return $this
    */
    public function setHasOfferCatalog($value)
    {
        $this->setProperty('hasOfferCatalog', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getHasOfferCatalog()
    {
       return $this->getProperty('hasOfferCatalog');
    }

    /**
    * The place where the person died.
    * @param Place|array|string $value
    * @return $this
    * @deprecated use setDeathPlace
    */
    public function deathPlace($value)
    {
        $this->setProperty('deathPlace', $value);
        return $this;
    }
   /**
    * @param Place|array|string $value
    * @return $this
    */
    public function setDeathPlace($value)
    {
        $this->setProperty('deathPlace', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getDeathPlace()
    {
       return $this->getProperty('deathPlace');
    }

    /**
    * The <a href="http://www.gs1.org/gln">Global Location Number</a> (GLN, sometimes also referred to as International Location Number or ILN) of the respective organization, person, or place. The GLN is a 13-digit number used to identify parties and physical locations.
    * @param string|array $value
    * @return $this
    * @deprecated use setGlobalLocationNumber
    */
    public function globalLocationNumber($value)
    {
        $this->setProperty('globalLocationNumber', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setGlobalLocationNumber($value)
    {
        $this->setProperty('globalLocationNumber', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getGlobalLocationNumber()
    {
       return $this->getProperty('globalLocationNumber');
    }

    /**
    * The place where the person was born.
    * @param Place|array|string $value
    * @return $this
    * @deprecated use setBirthPlace
    */
    public function birthPlace($value)
    {
        $this->setProperty('birthPlace', $value);
        return $this;
    }
   /**
    * @param Place|array|string $value
    * @return $this
    */
    public function setBirthPlace($value)
    {
        $this->setProperty('birthPlace', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getBirthPlace()
    {
       return $this->getProperty('birthPlace');
    }

    /**
    * Gender of the person. While http://schema.org/Male and http://schema.org/Female may be used, text strings are also acceptable for people who do not identify as a binary gender.
    * @param string|GenderType|array $value
    * @return $this
    * @deprecated use setGender
    */
    public function gender($value)
    {
        $this->setProperty('gender', $value);
        return $this;
    }
   /**
    * @param string|GenderType|array $value
    * @return $this
    */
    public function setGender($value)
    {
        $this->setProperty('gender', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getGender()
    {
       return $this->getProperty('gender');
    }

    /**
    * An organization that the person is an alumni of.
    * @param Organization|EducationalOrganization|array|string $value
    * @return $this
    * @deprecated use setAlumniOf
    */
    public function alumniOf($value)
    {
        $this->setProperty('alumniOf', $value);
        return $this;
    }
   /**
    * @param Organization|EducationalOrganization|array|string $value
    * @return $this
    */
    public function setAlumniOf($value)
    {
        $this->setProperty('alumniOf', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAlumniOf()
    {
       return $this->getProperty('alumniOf');
    }

    /**
    * A contact location for a person's residence.
    * @param ContactPoint|Place|array|string $value
    * @return $this
    * @deprecated use setHomeLocation
    */
    public function homeLocation($value)
    {
        $this->setProperty('homeLocation', $value);
        return $this;
    }
   /**
    * @param ContactPoint|Place|array|string $value
    * @return $this
    */
    public function setHomeLocation($value)
    {
        $this->setProperty('homeLocation', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getHomeLocation()
    {
       return $this->getProperty('homeLocation');
    }

    /**
    * The Dun &amp; Bradstreet DUNS number for identifying an organization or business person.
    * @param string|array $value
    * @return $this
    * @deprecated use setDuns
    */
    public function duns($value)
    {
        $this->setProperty('duns', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setDuns($value)
    {
        $this->setProperty('duns', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getDuns()
    {
       return $this->getProperty('duns');
    }

    /**
    * The Tax / Fiscal ID of the organization or person, e.g. the TIN in the US or the CIF/NIF in Spain.
    * @param string|array $value
    * @return $this
    * @deprecated use setTaxID
    */
    public function taxID($value)
    {
        $this->setProperty('taxID', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setTaxID($value)
    {
        $this->setProperty('taxID', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getTaxID()
    {
       return $this->getProperty('taxID');
    }

    /**
    * An award won by or for this item.
    * @param string|array $value
    * @return $this
    * @deprecated use setAward
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
    * @return $this|string|array
    */
    public function getAward()
    {
       return $this->getProperty('award');
    }

    /**
    * Date of birth.
    * @param array|string $value
    * @return $this
    * @deprecated use setBirthDate
    */
    public function birthDate($value)
    {
        $this->setProperty('birthDate', $value);
        return $this;
    }
   /**
    * @param array|string $value
    * @return $this
    */
    public function setBirthDate($value)
    {
        $this->setProperty('birthDate', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getBirthDate()
    {
       return $this->getProperty('birthDate');
    }

    /**
    * A pointer to products or services offered by the organization or person.
    * @param Offer|array|string $value
    * @return $this
    * @deprecated use setMakesOffer
    */
    public function makesOffer($value)
    {
        $this->setProperty('makesOffer', $value);
        return $this;
    }
   /**
    * @param Offer|array|string $value
    * @return $this
    */
    public function setMakesOffer($value)
    {
        $this->setProperty('makesOffer', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getMakesOffer()
    {
       return $this->getProperty('makesOffer');
    }

    /**
    * Given name. In the U.S., the first name of a Person. This can be used along with familyName instead of the name property.
    * @param string|array $value
    * @return $this
    * @deprecated use setGivenName
    */
    public function givenName($value)
    {
        $this->setProperty('givenName', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setGivenName($value)
    {
        $this->setProperty('givenName', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getGivenName()
    {
       return $this->getProperty('givenName');
    }

    /**
    * A contact point for a person or organization.
    * @param ContactPoint|array|string $value
    * @return $this
    * @deprecated use setContactPoints
    */
    public function contactPoints($value)
    {
        $this->setProperty('contactPoints', $value);
        return $this;
    }
   /**
    * @param ContactPoint|array|string $value
    * @return $this
    */
    public function setContactPoints($value)
    {
        $this->setProperty('contactPoints', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getContactPoints()
    {
       return $this->getProperty('contactPoints');
    }

    /**
    * Family name. In the U.S., the last name of an Person. This can be used along with givenName instead of the name property.
    * @param string|array $value
    * @return $this
    * @deprecated use setFamilyName
    */
    public function familyName($value)
    {
        $this->setProperty('familyName', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setFamilyName($value)
    {
        $this->setProperty('familyName', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getFamilyName()
    {
       return $this->getProperty('familyName');
    }

    /**
    * A pointer to products or services sought by the organization or person (demand).
    * @param Demand|array|string $value
    * @return $this
    * @deprecated use setSeeks
    */
    public function seeks($value)
    {
        $this->setProperty('seeks', $value);
        return $this;
    }
   /**
    * @param Demand|array|string $value
    * @return $this
    */
    public function setSeeks($value)
    {
        $this->setProperty('seeks', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getSeeks()
    {
       return $this->getProperty('seeks');
    }

    /**
    * A sibling of the person.
    * @param Person|array|string $value
    * @return $this
    * @deprecated use setSibling
    */
    public function sibling($value)
    {
        $this->setProperty('sibling', $value);
        return $this;
    }
   /**
    * @param Person|array|string $value
    * @return $this
    */
    public function setSibling($value)
    {
        $this->setProperty('sibling', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getSibling()
    {
       return $this->getProperty('sibling');
    }

    /**
    * Physical address of the item.
    * @param string|PostalAddress|array $value
    * @return $this
    * @deprecated use setAddress
    */
    public function address($value)
    {
        $this->setProperty('address', $value);
        return $this;
    }
   /**
    * @param string|PostalAddress|array $value
    * @return $this
    */
    public function setAddress($value)
    {
        $this->setProperty('address', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAddress()
    {
       return $this->getProperty('address');
    }

    /**
    * Event that this person is a performer or participant in.
    * @param Event|array|string $value
    * @return $this
    * @deprecated use setPerformerIn
    */
    public function performerIn($value)
    {
        $this->setProperty('performerIn', $value);
        return $this;
    }
   /**
    * @param Event|array|string $value
    * @return $this
    */
    public function setPerformerIn($value)
    {
        $this->setProperty('performerIn', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getPerformerIn()
    {
       return $this->getProperty('performerIn');
    }

    /**
    * An honorific prefix preceding a Person's name such as Dr/Mrs/Mr.
    * @param string|array $value
    * @return $this
    * @deprecated use setHonorificPrefix
    */
    public function honorificPrefix($value)
    {
        $this->setProperty('honorificPrefix', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setHonorificPrefix($value)
    {
        $this->setProperty('honorificPrefix', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getHonorificPrefix()
    {
       return $this->getProperty('honorificPrefix');
    }

    /**
    * An additional name for a Person, can be used for a middle name.
    * @param string|array $value
    * @return $this
    * @deprecated use setAdditionalName
    */
    public function additionalName($value)
    {
        $this->setProperty('additionalName', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setAdditionalName($value)
    {
        $this->setProperty('additionalName', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAdditionalName()
    {
       return $this->getProperty('additionalName');
    }

    /**
    * A sibling of the person.
    * @param Person|array|string $value
    * @return $this
    * @deprecated use setSiblings
    */
    public function siblings($value)
    {
        $this->setProperty('siblings', $value);
        return $this;
    }
   /**
    * @param Person|array|string $value
    * @return $this
    */
    public function setSiblings($value)
    {
        $this->setProperty('siblings', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getSiblings()
    {
       return $this->getProperty('siblings');
    }

    /**
    * The telephone number.
    * @param string|array $value
    * @return $this
    * @deprecated use setTelephone
    */
    public function telephone($value)
    {
        $this->setProperty('telephone', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setTelephone($value)
    {
        $this->setProperty('telephone', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getTelephone()
    {
       return $this->getProperty('telephone');
    }

    /**
    * Email address.
    * @param string|array $value
    * @return $this
    * @deprecated use setEmail
    */
    public function email($value)
    {
        $this->setProperty('email', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setEmail($value)
    {
        $this->setProperty('email', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getEmail()
    {
       return $this->getProperty('email');
    }

    /**
    * The weight of the product or person.
    * @param QuantitativeValue|array|string $value
    * @return $this
    * @deprecated use setWeight
    */
    public function weight($value)
    {
        $this->setProperty('weight', $value);
        return $this;
    }
   /**
    * @param QuantitativeValue|array|string $value
    * @return $this
    */
    public function setWeight($value)
    {
        $this->setProperty('weight', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getWeight()
    {
       return $this->getProperty('weight');
    }

    /**
    * A contact point for a person or organization.
    * @param ContactPoint|array|string $value
    * @return $this
    * @deprecated use setContactPoint
    */
    public function contactPoint($value)
    {
        $this->setProperty('contactPoint', $value);
        return $this;
    }
   /**
    * @param ContactPoint|array|string $value
    * @return $this
    */
    public function setContactPoint($value)
    {
        $this->setProperty('contactPoint', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getContactPoint()
    {
       return $this->getProperty('contactPoint');
    }

    /**
    * A colleague of the person.
    * @param Person|string|array $value
    * @return $this
    * @deprecated use setColleague
    */
    public function colleague($value)
    {
        $this->setProperty('colleague', $value);
        return $this;
    }
   /**
    * @param Person|string|array $value
    * @return $this
    */
    public function setColleague($value)
    {
        $this->setProperty('colleague', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getColleague()
    {
       return $this->getProperty('colleague');
    }

    /**
    * Awards won by or for this item.
    * @param string|array $value
    * @return $this
    * @deprecated use setAwards
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
    * @return $this|string|array
    */
    public function getAwards()
    {
       return $this->getProperty('awards');
    }

    /**
    * A parents of the person.
    * @param Person|array|string $value
    * @return $this
    * @deprecated use setParents
    */
    public function parents($value)
    {
        $this->setProperty('parents', $value);
        return $this;
    }
   /**
    * @param Person|array|string $value
    * @return $this
    */
    public function setParents($value)
    {
        $this->setProperty('parents', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getParents()
    {
       return $this->getProperty('parents');
    }

    /**
    * The North American Industry Classification System (NAICS) code for a particular organization or business person.
    * @param string|array $value
    * @return $this
    * @deprecated use setNaics
    */
    public function naics($value)
    {
        $this->setProperty('naics', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setNaics($value)
    {
        $this->setProperty('naics', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getNaics()
    {
       return $this->getProperty('naics');
    }

    /**
    * Points-of-Sales operated by the organization or person.
    * @param Place|array|string $value
    * @return $this
    * @deprecated use setHasPOS
    */
    public function hasPOS($value)
    {
        $this->setProperty('hasPOS', $value);
        return $this;
    }
   /**
    * @param Place|array|string $value
    * @return $this
    */
    public function setHasPOS($value)
    {
        $this->setProperty('hasPOS', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getHasPOS()
    {
       return $this->getProperty('hasPOS');
    }

    /**
    * A parent of this person.
    * @param Person|array|string $value
    * @return $this
    * @deprecated use setParent
    */
    public function parent($value)
    {
        $this->setProperty('parent', $value);
        return $this;
    }
   /**
    * @param Person|array|string $value
    * @return $this
    */
    public function setParent($value)
    {
        $this->setProperty('parent', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getParent()
    {
       return $this->getProperty('parent');
    }

    /**
    * Products owned by the organization or person.
    * @param Product|OwnershipInfo|array|string $value
    * @return $this
    * @deprecated use setOwns
    */
    public function owns($value)
    {
        $this->setProperty('owns', $value);
        return $this;
    }
   /**
    * @param Product|OwnershipInfo|array|string $value
    * @return $this
    */
    public function setOwns($value)
    {
        $this->setProperty('owns', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getOwns()
    {
       return $this->getProperty('owns');
    }

    /**
    * An organization that this person is affiliated with. For example, a school/university, a club, or a team.
    * @param Organization|array|string $value
    * @return $this
    * @deprecated use setAffiliation
    */
    public function affiliation($value)
    {
        $this->setProperty('affiliation', $value);
        return $this;
    }
   /**
    * @param Organization|array|string $value
    * @return $this
    */
    public function setAffiliation($value)
    {
        $this->setProperty('affiliation', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAffiliation()
    {
       return $this->getProperty('affiliation');
    }

    /**
    * The publishingPrinciples property indicates (typically via <a class="localLink" href="http://schema.org/URL">URL</a>) a document describing the editorial principles of an <a class="localLink" href="http://schema.org/Organization">Organization</a> (or individual e.g. a <a class="localLink" href="http://schema.org/Person">Person</a> writing a blog) that relate to their activities as a publisher, e.g. ethics or diversity policies. When applied to a <a class="localLink" href="http://schema.org/CreativeWork">CreativeWork</a> (e.g. <a class="localLink" href="http://schema.org/NewsArticle">NewsArticle</a>) the principles are those of the party primarily responsible for the creation of the <a class="localLink" href="http://schema.org/CreativeWork">CreativeWork</a>.<br/><br/>

While such policies are most typically expressed in natural language, sometimes related information (e.g. indicating a <a class="localLink" href="http://schema.org/funder">funder</a>) can be expressed using schema.org terminology.
    * @param CreativeWork|string|array $value
    * @return $this
    * @deprecated use setPublishingPrinciples
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
    * @param Person|Organization|array|string $value
    * @return $this
    * @deprecated use setSponsor
    */
    public function sponsor($value)
    {
        $this->setProperty('sponsor', $value);
        return $this;
    }
   /**
    * @param Person|Organization|array|string $value
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
    * The International Standard of Industrial Classification of All Economic Activities (ISIC), Revision 4 code for a particular organization, business person, or place.
    * @param string|array $value
    * @return $this
    * @deprecated use setIsicV4
    */
    public function isicV4($value)
    {
        $this->setProperty('isicV4', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setIsicV4($value)
    {
        $this->setProperty('isicV4', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getIsicV4()
    {
       return $this->getProperty('isicV4');
    }

    /**
    * The brand(s) associated with a product or service, or the brand(s) maintained by an organization or business person.
    * @param Organization|Brand|array|string $value
    * @return $this
    * @deprecated use setBrand
    */
    public function brand($value)
    {
        $this->setProperty('brand', $value);
        return $this;
    }
   /**
    * @param Organization|Brand|array|string $value
    * @return $this
    */
    public function setBrand($value)
    {
        $this->setProperty('brand', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getBrand()
    {
       return $this->getProperty('brand');
    }

    /**
    * An honorific suffix preceding a Person's name such as M.D. /PhD/MSCSW.
    * @param string|array $value
    * @return $this
    * @deprecated use setHonorificSuffix
    */
    public function honorificSuffix($value)
    {
        $this->setProperty('honorificSuffix', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setHonorificSuffix($value)
    {
        $this->setProperty('honorificSuffix', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getHonorificSuffix()
    {
       return $this->getProperty('honorificSuffix');
    }

    /**
    * The Value-added Tax ID of the organization or person.
    * @param string|array $value
    * @return $this
    * @deprecated use setVatID
    */
    public function vatID($value)
    {
        $this->setProperty('vatID', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setVatID($value)
    {
        $this->setProperty('vatID', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getVatID()
    {
       return $this->getProperty('vatID');
    }

    /**
    * Nationality of the person.
    * @param Country|array|string $value
    * @return $this
    * @deprecated use setNationality
    */
    public function nationality($value)
    {
        $this->setProperty('nationality', $value);
        return $this;
    }
   /**
    * @param Country|array|string $value
    * @return $this
    */
    public function setNationality($value)
    {
        $this->setProperty('nationality', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getNationality()
    {
       return $this->getProperty('nationality');
    }

    /**
    * A credential awarded to the Person or Organization.
    * @param EducationalOccupationalCredential|array|string $value
    * @return $this
    * @deprecated use setHasCredential
    */
    public function hasCredential($value)
    {
        $this->setProperty('hasCredential', $value);
        return $this;
    }
   /**
    * @param EducationalOccupationalCredential|array|string $value
    * @return $this
    */
    public function setHasCredential($value)
    {
        $this->setProperty('hasCredential', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getHasCredential()
    {
       return $this->getProperty('hasCredential');
    }

    /**
    * Of a <a class="localLink" href="http://schema.org/Person">Person</a>, and less typically of an <a class="localLink" href="http://schema.org/Organization">Organization</a>, to indicate a known language. We do not distinguish skill levels or reading/writing/speaking/signing here. Use language codes from the <a href="http://tools.ietf.org/html/bcp47">IETF BCP 47 standard</a>.
    * @param string|Language|array $value
    * @return $this
    * @deprecated use setKnowsLanguage
    */
    public function knowsLanguage($value)
    {
        $this->setProperty('knowsLanguage', $value);
        return $this;
    }
   /**
    * @param string|Language|array $value
    * @return $this
    */
    public function setKnowsLanguage($value)
    {
        $this->setProperty('knowsLanguage', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getKnowsLanguage()
    {
       return $this->getProperty('knowsLanguage');
    }

    /**
    * The fax number.
    * @param string|array $value
    * @return $this
    * @deprecated use setFaxNumber
    */
    public function faxNumber($value)
    {
        $this->setProperty('faxNumber', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setFaxNumber($value)
    {
        $this->setProperty('faxNumber', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getFaxNumber()
    {
       return $this->getProperty('faxNumber');
    }

    /**
    * The most generic familial relation.
    * @param Person|array|string $value
    * @return $this
    * @deprecated use setRelatedTo
    */
    public function relatedTo($value)
    {
        $this->setProperty('relatedTo', $value);
        return $this;
    }
   /**
    * @param Person|array|string $value
    * @return $this
    */
    public function setRelatedTo($value)
    {
        $this->setProperty('relatedTo', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getRelatedTo()
    {
       return $this->getProperty('relatedTo');
    }

    /**
    * The most generic uni-directional social relation.
    * @param Person|array|string $value
    * @return $this
    * @deprecated use setFollows
    */
    public function follows($value)
    {
        $this->setProperty('follows', $value);
        return $this;
    }
   /**
    * @param Person|array|string $value
    * @return $this
    */
    public function setFollows($value)
    {
        $this->setProperty('follows', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getFollows()
    {
       return $this->getProperty('follows');
    }

    /**
    * The most generic bi-directional social/work relation.
    * @param Person|array|string $value
    * @return $this
    * @deprecated use setKnows
    */
    public function knows($value)
    {
        $this->setProperty('knows', $value);
        return $this;
    }
   /**
    * @param Person|array|string $value
    * @return $this
    */
    public function setKnows($value)
    {
        $this->setProperty('knows', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getKnows()
    {
       return $this->getProperty('knows');
    }

    /**
    * Organizations that the person works for.
    * @param Organization|array|string $value
    * @return $this
    * @deprecated use setWorksFor
    */
    public function worksFor($value)
    {
        $this->setProperty('worksFor', $value);
        return $this;
    }
   /**
    * @param Organization|array|string $value
    * @return $this
    */
    public function setWorksFor($value)
    {
        $this->setProperty('worksFor', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getWorksFor()
    {
       return $this->getProperty('worksFor');
    }


}
