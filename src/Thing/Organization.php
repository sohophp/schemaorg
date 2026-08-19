<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing;

use Sohophp\SchemaOrg\Thing;
use Sohophp\SchemaOrg\Certification;
use Sohophp\SchemaOrg\Thing\Event;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ShippingService;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress;
use Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject\ImageObject;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\NonprofitType;
use Sohophp\SchemaOrg\Thing\Intangible\Offer;
use Sohophp\SchemaOrg\Thing\CreativeWork\Review;
use Sohophp\SchemaOrg\Thing\Intangible\Demand;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\GeoShape;
use Sohophp\SchemaOrg\Thing\Place\AdministrativeArea;
use Sohophp\SchemaOrg\Thing\Place;
use Sohophp\SchemaOrg\Thing\Intangible\DefinedTerm;
use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\Intangible\ItemList\OfferCatalog;
use Sohophp\SchemaOrg\Thing\Intangible\Grant;
use Sohophp\SchemaOrg\Thing\Intangible\VirtualLocation;
use Sohophp\SchemaOrg\Thing\Intangible\Language;
use Sohophp\SchemaOrg\Thing\CreativeWork\Credential;
use Sohophp\SchemaOrg\Thing\Intangible\MerchantReturnPolicy;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\InteractionCounter;
use Sohophp\SchemaOrg\Thing\CreativeWork\Article;
use Sohophp\SchemaOrg\Thing\Intangible\ProgramMembership;
use Sohophp\SchemaOrg\Thing\Intangible\MemberProgramTier;
use Sohophp\SchemaOrg\Thing\Intangible\PaymentMethod;
use Sohophp\SchemaOrg\Thing\Intangible\Service\FinancialProduct\LoanOrCredit;
use Sohophp\SchemaOrg\Thing\Intangible\Rating\AggregateRating;
use Sohophp\SchemaOrg\Thing\Intangible\Brand;
use Sohophp\SchemaOrg\Thing\Intangible\ProductReturnPolicy;
use Sohophp\SchemaOrg\Thing\Intangible\MemberProgram;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;
use Sohophp\SchemaOrg\Thing\CreativeWork\WebPage\AboutPage;

/**
 * An organization such as a school, NGO, corporation, club, etc.
 * @see https://schema.org/Organization
 * @package Sohophp\SchemaOrg\Thing
 */
class Organization extends Thing
{
    /**
     * The official registration information of a business including the organization that issued it such as Company House or Chamber of Commerce in form of a Certification.
     * @see https://schema.org/companyRegistration
     * @param Certification|array $value
     * @return $this
     */
    public function companyRegistration($value)
    {
        $this->setProperty('companyRegistration', $value);
        return $this;
    }

    /**
     * @param Certification|array $value
     * @return $this
     */
    public function setCompanyRegistration($value)
    {
        $this->setProperty('companyRegistration', $value);
        return $this;
    }

    /**
     * @param Certification $value
     * @return $this
     */
    public function addCompanyRegistration($value)
    {
        $current = $this->getProperty('companyRegistration');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('companyRegistration', $current);
        return $this;
    }

    /**
     * @return Certification|array
     */
    public function getCompanyRegistration()
    {
        return $this->getProperty('companyRegistration');
    }
    /**
     * Upcoming or past events associated with this place or organization.
     * @see https://schema.org/events
     * @param Event|array $value
     * @return $this
     */
    public function events($value)
    {
        $this->setProperty('events', $value);
        return $this;
    }

    /**
     * @param Event|array $value
     * @return $this
     */
    public function setEvents($value)
    {
        $this->setProperty('events', $value);
        return $this;
    }

    /**
     * @param Event $value
     * @return $this
     */
    public function addEvents($value)
    {
        $current = $this->getProperty('events');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('events', $current);
        return $this;
    }

    /**
     * @return Event|array
     */
    public function getEvents()
    {
        return $this->getProperty('events');
    }
    /**
     * The date that this organization was dissolved.
     * @see https://schema.org/dissolutionDate
     * @param mixed $value
     * @return $this
     */
    public function dissolutionDate($value)
    {
        $this->setProperty('dissolutionDate', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setDissolutionDate($value)
    {
        $this->setProperty('dissolutionDate', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function addDissolutionDate($value)
    {
        $current = $this->getProperty('dissolutionDate');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('dissolutionDate', $current);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDissolutionDate()
    {
        return $this->getProperty('dissolutionDate');
    }
    /**
     * The telephone number.
     * @see https://schema.org/telephone
     * @param string|array $value
     * @return $this
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
     * @param string $value
     * @return $this
     */
    public function addTelephone($value)
    {
        $current = $this->getProperty('telephone');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('telephone', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getTelephone()
    {
        return $this->getProperty('telephone');
    }
    /**
     * The date that this organization was founded.
     * @see https://schema.org/foundingDate
     * @param mixed $value
     * @return $this
     */
    public function foundingDate($value)
    {
        $this->setProperty('foundingDate', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setFoundingDate($value)
    {
        $this->setProperty('foundingDate', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function addFoundingDate($value)
    {
        $current = $this->getProperty('foundingDate');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('foundingDate', $current);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFoundingDate()
    {
        return $this->getProperty('foundingDate');
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
     * The Dun & Bradstreet DUNS number for identifying an organization or business person.
     * @see https://schema.org/duns
     * @param string|array $value
     * @return $this
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
     * @param string $value
     * @return $this
     */
    public function addDuns($value)
    {
        $current = $this->getProperty('duns');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('duns', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getDuns()
    {
        return $this->getProperty('duns');
    }
    /**
     * Of a [[Person]], and less typically of an [[Organization]], to indicate a topic that is known about - suggesting possible expertise but not implying it. We do not distinguish skill levels here, or relate this to educational content, events, objectives or [[JobPosting]] descriptions.
     * @see https://schema.org/knowsAbout
     * @param string|Thing|array $value
     * @return $this
     */
    public function knowsAbout($value)
    {
        $this->setProperty('knowsAbout', $value);
        return $this;
    }

    /**
     * @param string|Thing|array $value
     * @return $this
     */
    public function setKnowsAbout($value)
    {
        $this->setProperty('knowsAbout', $value);
        return $this;
    }

    /**
     * @param string|Thing $value
     * @return $this
     */
    public function addKnowsAbout($value)
    {
        $current = $this->getProperty('knowsAbout');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('knowsAbout', $current);
        return $this;
    }

    /**
     * @return string|Thing|array
     */
    public function getKnowsAbout()
    {
        return $this->getProperty('knowsAbout');
    }
    /**
     * A contact point for a person or organization.
     * @see https://schema.org/contactPoints
     * @param ContactPoint|array $value
     * @return $this
     */
    public function contactPoints($value)
    {
        $this->setProperty('contactPoints', $value);
        return $this;
    }

    /**
     * @param ContactPoint|array $value
     * @return $this
     */
    public function setContactPoints($value)
    {
        $this->setProperty('contactPoints', $value);
        return $this;
    }

    /**
     * @param ContactPoint $value
     * @return $this
     */
    public function addContactPoints($value)
    {
        $current = $this->getProperty('contactPoints');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('contactPoints', $current);
        return $this;
    }

    /**
     * @return ContactPoint|array
     */
    public function getContactPoints()
    {
        return $this->getProperty('contactPoints');
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
     * Specification of a shipping service offered by the organization.
     * @see https://schema.org/hasShippingService
     * @param ShippingService|array $value
     * @return $this
     */
    public function hasShippingService($value)
    {
        $this->setProperty('hasShippingService', $value);
        return $this;
    }

    /**
     * @param ShippingService|array $value
     * @return $this
     */
    public function setHasShippingService($value)
    {
        $this->setProperty('hasShippingService', $value);
        return $this;
    }

    /**
     * @param ShippingService $value
     * @return $this
     */
    public function addHasShippingService($value)
    {
        $current = $this->getProperty('hasShippingService');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('hasShippingService', $current);
        return $this;
    }

    /**
     * @return ShippingService|array
     */
    public function getHasShippingService()
    {
        return $this->getProperty('hasShippingService');
    }
    /**
     * The North American Industry Classification System (NAICS) code for a particular organization or business person.
     * @see https://schema.org/naics
     * @param string|array $value
     * @return $this
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
     * @param string $value
     * @return $this
     */
    public function addNaics($value)
    {
        $current = $this->getProperty('naics');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('naics', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getNaics()
    {
        return $this->getProperty('naics');
    }
    /**
     * An organization identifier as defined in [ISO 6523(-1)](https://en.wikipedia.org/wiki/ISO/IEC_6523). The identifier should be in the `XXXX:YYYYYY:ZZZ` or `XXXX:YYYYYY`format. Where `XXXX` is a 4 digit _ICD_ (International Code Designator), `YYYYYY` is an _OID_ (Organization Identifier) with all formatting characters (dots, dashes, spaces) removed with a maximal length of 35 characters, and `ZZZ` is an optional OPI (Organization Part Identifier) with a maximum length of 35 characters. The various components (ICD, OID, OPI) are joined with a colon character (ASCII `0x3a`). Note that many existing organization identifiers defined as attributes like [leiCode](https://schema.org/leiCode) (`0199`), [duns](https://schema.org/duns) (`0060`) or [GLN](https://schema.org/globalLocationNumber) (`0088`) can be expressed using ISO-6523. If possible, ISO-6523 codes should be preferred to populating [vatID](https://schema.org/vatID) or [taxID](https://schema.org/taxID), as ISO identifiers are less ambiguous.
     * @see https://schema.org/iso6523Code
     * @param string|array $value
     * @return $this
     */
    public function iso6523Code($value)
    {
        $this->setProperty('iso6523Code', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setIso6523Code($value)
    {
        $this->setProperty('iso6523Code', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addIso6523Code($value)
    {
        $current = $this->getProperty('iso6523Code');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('iso6523Code', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getIso6523Code()
    {
        return $this->getProperty('iso6523Code');
    }
    /**
     * Physical address of the item.
     * @see https://schema.org/address
     * @param string|PostalAddress|array $value
     * @return $this
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
     * @param string|PostalAddress $value
     * @return $this
     */
    public function addAddress($value)
    {
        $current = $this->getProperty('address');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('address', $current);
        return $this;
    }

    /**
     * @return string|PostalAddress|array
     */
    public function getAddress()
    {
        return $this->getProperty('address');
    }
    /**
     * One or multiple persons who represent this organization legally such as CEO or sole administrator.
     * @see https://schema.org/legalRepresentative
     * @param Person|array $value
     * @return $this
     */
    public function legalRepresentative($value)
    {
        $this->setProperty('legalRepresentative', $value);
        return $this;
    }

    /**
     * @param Person|array $value
     * @return $this
     */
    public function setLegalRepresentative($value)
    {
        $this->setProperty('legalRepresentative', $value);
        return $this;
    }

    /**
     * @param Person $value
     * @return $this
     */
    public function addLegalRepresentative($value)
    {
        $current = $this->getProperty('legalRepresentative');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('legalRepresentative', $current);
        return $this;
    }

    /**
     * @return Person|array
     */
    public function getLegalRepresentative()
    {
        return $this->getProperty('legalRepresentative');
    }
    /**
     * An associated logo.
     * @see https://schema.org/logo
     * @param string|ImageObject|array $value
     * @return $this
     */
    public function logo($value)
    {
        $this->setProperty('logo', $value);
        return $this;
    }

    /**
     * @param string|ImageObject|array $value
     * @return $this
     */
    public function setLogo($value)
    {
        $this->setProperty('logo', $value);
        return $this;
    }

    /**
     * @param string|ImageObject $value
     * @return $this
     */
    public function addLogo($value)
    {
        $current = $this->getProperty('logo');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('logo', $current);
        return $this;
    }

    /**
     * @return string|ImageObject|array
     */
    public function getLogo()
    {
        return $this->getProperty('logo');
    }
    /**
     * nonprofitStatus indicates the legal status of a non-profit organization in its primary place of business.
     * @see https://schema.org/nonprofitStatus
     * @param NonprofitType|array $value
     * @return $this
     */
    public function nonprofitStatus($value)
    {
        $this->setProperty('nonprofitStatus', $value);
        return $this;
    }

    /**
     * @param NonprofitType|array $value
     * @return $this
     */
    public function setNonprofitStatus($value)
    {
        $this->setProperty('nonprofitStatus', $value);
        return $this;
    }

    /**
     * @param NonprofitType $value
     * @return $this
     */
    public function addNonprofitStatus($value)
    {
        $current = $this->getProperty('nonprofitStatus');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('nonprofitStatus', $current);
        return $this;
    }

    /**
     * @return NonprofitType|array
     */
    public function getNonprofitStatus()
    {
        return $this->getProperty('nonprofitStatus');
    }
    /**
     * The [Global Location Number](http://www.gs1.org/gln) (GLN, sometimes also referred to as International Location Number or ILN) of the respective organization, person, or place. The GLN is a 13-digit number used to identify parties and physical locations.
     * @see https://schema.org/globalLocationNumber
     * @param string|array $value
     * @return $this
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
     * @param string $value
     * @return $this
     */
    public function addGlobalLocationNumber($value)
    {
        $current = $this->getProperty('globalLocationNumber');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('globalLocationNumber', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getGlobalLocationNumber()
    {
        return $this->getProperty('globalLocationNumber');
    }
    /**
     * A pointer to products or services offered by the organization or person.
     * @see https://schema.org/makesOffer
     * @param Offer|array $value
     * @return $this
     */
    public function makesOffer($value)
    {
        $this->setProperty('makesOffer', $value);
        return $this;
    }

    /**
     * @param Offer|array $value
     * @return $this
     */
    public function setMakesOffer($value)
    {
        $this->setProperty('makesOffer', $value);
        return $this;
    }

    /**
     * @param Offer $value
     * @return $this
     */
    public function addMakesOffer($value)
    {
        $current = $this->getProperty('makesOffer');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('makesOffer', $current);
        return $this;
    }

    /**
     * @return Offer|array
     */
    public function getMakesOffer()
    {
        return $this->getProperty('makesOffer');
    }
    /**
     * A member of this organization.
     * @see https://schema.org/members
     * @param Person|Organization|array $value
     * @return $this
     */
    public function members($value)
    {
        $this->setProperty('members', $value);
        return $this;
    }

    /**
     * @param Person|Organization|array $value
     * @return $this
     */
    public function setMembers($value)
    {
        $this->setProperty('members', $value);
        return $this;
    }

    /**
     * @param Person|Organization $value
     * @return $this
     */
    public function addMembers($value)
    {
        $current = $this->getProperty('members');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('members', $current);
        return $this;
    }

    /**
     * @return Person|Organization|array
     */
    public function getMembers()
    {
        return $this->getProperty('members');
    }
    /**
     * Someone working for this organization.
     * @see https://schema.org/employee
     * @param Person|array $value
     * @return $this
     */
    public function employee($value)
    {
        $this->setProperty('employee', $value);
        return $this;
    }

    /**
     * @param Person|array $value
     * @return $this
     */
    public function setEmployee($value)
    {
        $this->setProperty('employee', $value);
        return $this;
    }

    /**
     * @param Person $value
     * @return $this
     */
    public function addEmployee($value)
    {
        $current = $this->getProperty('employee');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('employee', $current);
        return $this;
    }

    /**
     * @return Person|array
     */
    public function getEmployee()
    {
        return $this->getProperty('employee');
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
     * The larger organization that this organization is a [[subOrganization]] of, if any.
     * @see https://schema.org/parentOrganization
     * @param Organization|array $value
     * @return $this
     */
    public function parentOrganization($value)
    {
        $this->setProperty('parentOrganization', $value);
        return $this;
    }

    /**
     * @param Organization|array $value
     * @return $this
     */
    public function setParentOrganization($value)
    {
        $this->setProperty('parentOrganization', $value);
        return $this;
    }

    /**
     * @param Organization $value
     * @return $this
     */
    public function addParentOrganization($value)
    {
        $current = $this->getProperty('parentOrganization');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('parentOrganization', $current);
        return $this;
    }

    /**
     * @return Organization|array
     */
    public function getParentOrganization()
    {
        return $this->getProperty('parentOrganization');
    }
    /**
     * A pointer to products or services sought by the organization or person (demand).
     * @see https://schema.org/seeks
     * @param Demand|array $value
     * @return $this
     */
    public function seeks($value)
    {
        $this->setProperty('seeks', $value);
        return $this;
    }

    /**
     * @param Demand|array $value
     * @return $this
     */
    public function setSeeks($value)
    {
        $this->setProperty('seeks', $value);
        return $this;
    }

    /**
     * @param Demand $value
     * @return $this
     */
    public function addSeeks($value)
    {
        $current = $this->getProperty('seeks');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('seeks', $current);
        return $this;
    }

    /**
     * @return Demand|array
     */
    public function getSeeks()
    {
        return $this->getProperty('seeks');
    }
    /**
     * Alumni of an organization.
     * @see https://schema.org/alumni
     * @param Person|array $value
     * @return $this
     */
    public function alumni($value)
    {
        $this->setProperty('alumni', $value);
        return $this;
    }

    /**
     * @param Person|array $value
     * @return $this
     */
    public function setAlumni($value)
    {
        $this->setProperty('alumni', $value);
        return $this;
    }

    /**
     * @param Person $value
     * @return $this
     */
    public function addAlumni($value)
    {
        $current = $this->getProperty('alumni');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('alumni', $current);
        return $this;
    }

    /**
     * @return Person|array
     */
    public function getAlumni()
    {
        return $this->getProperty('alumni');
    }
    /**
     * The geographic area where the service is provided.
     * @see https://schema.org/serviceArea
     * @param GeoShape|AdministrativeArea|Place|array $value
     * @return $this
     */
    public function serviceArea($value)
    {
        $this->setProperty('serviceArea', $value);
        return $this;
    }

    /**
     * @param GeoShape|AdministrativeArea|Place|array $value
     * @return $this
     */
    public function setServiceArea($value)
    {
        $this->setProperty('serviceArea', $value);
        return $this;
    }

    /**
     * @param GeoShape|AdministrativeArea|Place $value
     * @return $this
     */
    public function addServiceArea($value)
    {
        $current = $this->getProperty('serviceArea');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('serviceArea', $current);
        return $this;
    }

    /**
     * @return GeoShape|AdministrativeArea|Place|array
     */
    public function getServiceArea()
    {
        return $this->getProperty('serviceArea');
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
     * The Tax / Fiscal ID of the organization or person, e.g. the TIN in the US or the CIF/NIF in Spain.
     * @see https://schema.org/taxID
     * @param string|array $value
     * @return $this
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
     * @param string $value
     * @return $this
     */
    public function addTaxID($value)
    {
        $current = $this->getProperty('taxID');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('taxID', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getTaxID()
    {
        return $this->getProperty('taxID');
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
     * For an [[Organization]] (e.g. [[NewsMediaOrganization]]), a statement describing (in news media, the newsroom’s) disclosure and correction policy for errors.
     * @see https://schema.org/correctionsPolicy
     * @param string|CreativeWork|array $value
     * @return $this
     */
    public function correctionsPolicy($value)
    {
        $this->setProperty('correctionsPolicy', $value);
        return $this;
    }

    /**
     * @param string|CreativeWork|array $value
     * @return $this
     */
    public function setCorrectionsPolicy($value)
    {
        $this->setProperty('correctionsPolicy', $value);
        return $this;
    }

    /**
     * @param string|CreativeWork $value
     * @return $this
     */
    public function addCorrectionsPolicy($value)
    {
        $current = $this->getProperty('correctionsPolicy');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('correctionsPolicy', $current);
        return $this;
    }

    /**
     * @return string|CreativeWork|array
     */
    public function getCorrectionsPolicy()
    {
        return $this->getProperty('correctionsPolicy');
    }
    /**
     * The official name of the organization, e.g. the registered company name.
     * @see https://schema.org/legalName
     * @param string|array $value
     * @return $this
     */
    public function legalName($value)
    {
        $this->setProperty('legalName', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setLegalName($value)
    {
        $this->setProperty('legalName', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addLegalName($value)
    {
        $current = $this->getProperty('legalName');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('legalName', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getLegalName()
    {
        return $this->getProperty('legalName');
    }
    /**
     * A member of an Organization or a ProgramMembership. Organizations can be members of organizations; ProgramMembership is typically for individuals.
     * @see https://schema.org/member
     * @param Organization|Person|array $value
     * @return $this
     */
    public function member($value)
    {
        $this->setProperty('member', $value);
        return $this;
    }

    /**
     * @param Organization|Person|array $value
     * @return $this
     */
    public function setMember($value)
    {
        $this->setProperty('member', $value);
        return $this;
    }

    /**
     * @param Organization|Person $value
     * @return $this
     */
    public function addMember($value)
    {
        $current = $this->getProperty('member');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('member', $current);
        return $this;
    }

    /**
     * @return Organization|Person|array
     */
    public function getMember()
    {
        return $this->getProperty('member');
    }
    /**
     * For an [[Organization]] (typically a [[NewsMediaOrganization]]), a statement about policy on use of unnamed sources and the decision process required.
     * @see https://schema.org/unnamedSourcesPolicy
     * @param CreativeWork|string|array $value
     * @return $this
     */
    public function unnamedSourcesPolicy($value)
    {
        $this->setProperty('unnamedSourcesPolicy', $value);
        return $this;
    }

    /**
     * @param CreativeWork|string|array $value
     * @return $this
     */
    public function setUnnamedSourcesPolicy($value)
    {
        $this->setProperty('unnamedSourcesPolicy', $value);
        return $this;
    }

    /**
     * @param CreativeWork|string $value
     * @return $this
     */
    public function addUnnamedSourcesPolicy($value)
    {
        $current = $this->getProperty('unnamedSourcesPolicy');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('unnamedSourcesPolicy', $current);
        return $this;
    }

    /**
     * @return CreativeWork|string|array
     */
    public function getUnnamedSourcesPolicy()
    {
        return $this->getProperty('unnamedSourcesPolicy');
    }
    /**
     * Indicates an OfferCatalog listing for this Organization, Person, or Service.
     * @see https://schema.org/hasOfferCatalog
     * @param OfferCatalog|array $value
     * @return $this
     */
    public function hasOfferCatalog($value)
    {
        $this->setProperty('hasOfferCatalog', $value);
        return $this;
    }

    /**
     * @param OfferCatalog|array $value
     * @return $this
     */
    public function setHasOfferCatalog($value)
    {
        $this->setProperty('hasOfferCatalog', $value);
        return $this;
    }

    /**
     * @param OfferCatalog $value
     * @return $this
     */
    public function addHasOfferCatalog($value)
    {
        $current = $this->getProperty('hasOfferCatalog');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('hasOfferCatalog', $current);
        return $this;
    }

    /**
     * @return OfferCatalog|array
     */
    public function getHasOfferCatalog()
    {
        return $this->getProperty('hasOfferCatalog');
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
     * The location of, for example, where an event is happening, where an organization is located, or where an action takes place.
     * @see https://schema.org/location
     * @param string|PostalAddress|VirtualLocation|Place|array $value
     * @return $this
     */
    public function location($value)
    {
        $this->setProperty('location', $value);
        return $this;
    }

    /**
     * @param string|PostalAddress|VirtualLocation|Place|array $value
     * @return $this
     */
    public function setLocation($value)
    {
        $this->setProperty('location', $value);
        return $this;
    }

    /**
     * @param string|PostalAddress|VirtualLocation|Place $value
     * @return $this
     */
    public function addLocation($value)
    {
        $current = $this->getProperty('location');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('location', $current);
        return $this;
    }

    /**
     * @return string|PostalAddress|VirtualLocation|Place|array
     */
    public function getLocation()
    {
        return $this->getProperty('location');
    }
    /**
     * Email address.
     * @see https://schema.org/email
     * @param string|array $value
     * @return $this
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
     * @param string $value
     * @return $this
     */
    public function addEmail($value)
    {
        $current = $this->getProperty('email');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('email', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getEmail()
    {
        return $this->getProperty('email');
    }
    /**
     * Of a [[Person]], and less typically of an [[Organization]], to indicate a known language. We do not distinguish skill levels or reading/writing/speaking/signing here. Use language codes from the [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47).
     * @see https://schema.org/knowsLanguage
     * @param string|Language|array $value
     * @return $this
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
     * @param string|Language $value
     * @return $this
     */
    public function addKnowsLanguage($value)
    {
        $current = $this->getProperty('knowsLanguage');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('knowsLanguage', $current);
        return $this;
    }

    /**
     * @return string|Language|array
     */
    public function getKnowsLanguage()
    {
        return $this->getProperty('knowsLanguage');
    }
    /**
     * A credential awarded to the Person or Organization.
     * @see https://schema.org/hasCredential
     * @param Credential|array $value
     * @return $this
     */
    public function hasCredential($value)
    {
        $this->setProperty('hasCredential', $value);
        return $this;
    }

    /**
     * @param Credential|array $value
     * @return $this
     */
    public function setHasCredential($value)
    {
        $this->setProperty('hasCredential', $value);
        return $this;
    }

    /**
     * @param Credential $value
     * @return $this
     */
    public function addHasCredential($value)
    {
        $current = $this->getProperty('hasCredential');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('hasCredential', $current);
        return $this;
    }

    /**
     * @return Credential|array
     */
    public function getHasCredential()
    {
        return $this->getProperty('hasCredential');
    }
    /**
     * A contact point for a person or organization.
     * @see https://schema.org/contactPoint
     * @param ContactPoint|array $value
     * @return $this
     */
    public function contactPoint($value)
    {
        $this->setProperty('contactPoint', $value);
        return $this;
    }

    /**
     * @param ContactPoint|array $value
     * @return $this
     */
    public function setContactPoint($value)
    {
        $this->setProperty('contactPoint', $value);
        return $this;
    }

    /**
     * @param ContactPoint $value
     * @return $this
     */
    public function addContactPoint($value)
    {
        $current = $this->getProperty('contactPoint');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('contactPoint', $current);
        return $this;
    }

    /**
     * @return ContactPoint|array
     */
    public function getContactPoint()
    {
        return $this->getProperty('contactPoint');
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
     * Certification information about a product, organization, service, place, or person.
     * @see https://schema.org/hasCertification
     * @param Certification|array $value
     * @return $this
     */
    public function hasCertification($value)
    {
        $this->setProperty('hasCertification', $value);
        return $this;
    }

    /**
     * @param Certification|array $value
     * @return $this
     */
    public function setHasCertification($value)
    {
        $this->setProperty('hasCertification', $value);
        return $this;
    }

    /**
     * @param Certification $value
     * @return $this
     */
    public function addHasCertification($value)
    {
        $current = $this->getProperty('hasCertification');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('hasCertification', $current);
        return $this;
    }

    /**
     * @return Certification|array
     */
    public function getHasCertification()
    {
        return $this->getProperty('hasCertification');
    }
    /**
     * The value-added Tax ID of the organization or person with national prefix (for example IT123456789). Can also be described as [[iso6523Code]] with proper prefix.
     * @see https://schema.org/vatID
     * @param string|array $value
     * @return $this
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
     * @param string $value
     * @return $this
     */
    public function addVatID($value)
    {
        $current = $this->getProperty('vatID');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('vatID', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getVatID()
    {
        return $this->getProperty('vatID');
    }
    /**
     * Statement about ethics policy, e.g. of a [[NewsMediaOrganization]] regarding journalistic and publishing practices, or of a [[Restaurant]], a page describing food source policies. In the case of a [[NewsMediaOrganization]], an ethicsPolicy is typically a statement describing the personal, organizational, and corporate standards of behavior expected by the organization.
     * @see https://schema.org/ethicsPolicy
     * @param CreativeWork|string|array $value
     * @return $this
     */
    public function ethicsPolicy($value)
    {
        $this->setProperty('ethicsPolicy', $value);
        return $this;
    }

    /**
     * @param CreativeWork|string|array $value
     * @return $this
     */
    public function setEthicsPolicy($value)
    {
        $this->setProperty('ethicsPolicy', $value);
        return $this;
    }

    /**
     * @param CreativeWork|string $value
     * @return $this
     */
    public function addEthicsPolicy($value)
    {
        $current = $this->getProperty('ethicsPolicy');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('ethicsPolicy', $current);
        return $this;
    }

    /**
     * @return CreativeWork|string|array
     */
    public function getEthicsPolicy()
    {
        return $this->getProperty('ethicsPolicy');
    }
    /**
     * Specifies a MerchantReturnPolicy that may be applicable.
     * @see https://schema.org/hasMerchantReturnPolicy
     * @param MerchantReturnPolicy|array $value
     * @return $this
     */
    public function hasMerchantReturnPolicy($value)
    {
        $this->setProperty('hasMerchantReturnPolicy', $value);
        return $this;
    }

    /**
     * @param MerchantReturnPolicy|array $value
     * @return $this
     */
    public function setHasMerchantReturnPolicy($value)
    {
        $this->setProperty('hasMerchantReturnPolicy', $value);
        return $this;
    }

    /**
     * @param MerchantReturnPolicy $value
     * @return $this
     */
    public function addHasMerchantReturnPolicy($value)
    {
        $current = $this->getProperty('hasMerchantReturnPolicy');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('hasMerchantReturnPolicy', $current);
        return $this;
    }

    /**
     * @return MerchantReturnPolicy|array
     */
    public function getHasMerchantReturnPolicy()
    {
        return $this->getProperty('hasMerchantReturnPolicy');
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
     * People working for this organization.
     * @see https://schema.org/employees
     * @param Person|array $value
     * @return $this
     */
    public function employees($value)
    {
        $this->setProperty('employees', $value);
        return $this;
    }

    /**
     * @param Person|array $value
     * @return $this
     */
    public function setEmployees($value)
    {
        $this->setProperty('employees', $value);
        return $this;
    }

    /**
     * @param Person $value
     * @return $this
     */
    public function addEmployees($value)
    {
        $current = $this->getProperty('employees');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('employees', $current);
        return $this;
    }

    /**
     * @return Person|array
     */
    public function getEmployees()
    {
        return $this->getProperty('employees');
    }
    /**
     * A person or organization who founded this organization.
     * @see https://schema.org/founder
     * @param Organization|Person|array $value
     * @return $this
     */
    public function founder($value)
    {
        $this->setProperty('founder', $value);
        return $this;
    }

    /**
     * @param Organization|Person|array $value
     * @return $this
     */
    public function setFounder($value)
    {
        $this->setProperty('founder', $value);
        return $this;
    }

    /**
     * @param Organization|Person $value
     * @return $this
     */
    public function addFounder($value)
    {
        $current = $this->getProperty('founder');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('founder', $current);
        return $this;
    }

    /**
     * @return Organization|Person|array
     */
    public function getFounder()
    {
        return $this->getProperty('founder');
    }
    /**
     * A relationship between an organization and a department of that organization, also described as an organization (allowing different urls, logos, opening hours). For example: a store with a pharmacy, or a bakery with a cafe.
     * @see https://schema.org/department
     * @param Organization|array $value
     * @return $this
     */
    public function department($value)
    {
        $this->setProperty('department', $value);
        return $this;
    }

    /**
     * @param Organization|array $value
     * @return $this
     */
    public function setDepartment($value)
    {
        $this->setProperty('department', $value);
        return $this;
    }

    /**
     * @param Organization $value
     * @return $this
     */
    public function addDepartment($value)
    {
        $current = $this->getProperty('department');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('department', $current);
        return $this;
    }

    /**
     * @return Organization|array
     */
    public function getDepartment()
    {
        return $this->getProperty('department');
    }
    /**
     * The place where the Organization was founded.
     * @see https://schema.org/foundingLocation
     * @param Place|array $value
     * @return $this
     */
    public function foundingLocation($value)
    {
        $this->setProperty('foundingLocation', $value);
        return $this;
    }

    /**
     * @param Place|array $value
     * @return $this
     */
    public function setFoundingLocation($value)
    {
        $this->setProperty('foundingLocation', $value);
        return $this;
    }

    /**
     * @param Place $value
     * @return $this
     */
    public function addFoundingLocation($value)
    {
        $current = $this->getProperty('foundingLocation');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('foundingLocation', $current);
        return $this;
    }

    /**
     * @return Place|array
     */
    public function getFoundingLocation()
    {
        return $this->getProperty('foundingLocation');
    }
    /**
     * The legal address of an organization which acts as the officially registered address used for legal and tax purposes. The legal address can be different from the place of operations of a business and other addresses can be part of an organization.
     * @see https://schema.org/legalAddress
     * @param PostalAddress|array $value
     * @return $this
     */
    public function legalAddress($value)
    {
        $this->setProperty('legalAddress', $value);
        return $this;
    }

    /**
     * @param PostalAddress|array $value
     * @return $this
     */
    public function setLegalAddress($value)
    {
        $this->setProperty('legalAddress', $value);
        return $this;
    }

    /**
     * @param PostalAddress $value
     * @return $this
     */
    public function addLegalAddress($value)
    {
        $current = $this->getProperty('legalAddress');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('legalAddress', $current);
        return $this;
    }

    /**
     * @return PostalAddress|array
     */
    public function getLegalAddress()
    {
        return $this->getProperty('legalAddress');
    }
    /**
     * The [GS1 digital link](https://www.gs1.org/standards/gs1-digital-link) associated with the object. This URL should conform to the particular requirements of digital links. The link should only contain the Application Identifiers (AIs) that are relevant for the entity being annotated, for instance a [[Product]] or an [[Organization]], and for the correct granularity. In particular, for products:<ul>* A Digital Link that contains a serial number (AI ```21```) should only be present on instances of [[IndividualProduct]]* A Digital Link that contains a lot number (AI ```10```) should be annotated as [[SomeProducts]] if only products from that lot are sold, or [[IndividualProduct]] if there is only a specific product.* A Digital Link that contains a global model number (AI ```8013```) should be attached to a [[Product]] or a [[ProductModel]]. Other item types should be adapted similarly.
     * @see https://schema.org/hasGS1DigitalLink
     * @param string|array $value
     * @return $this
     */
    public function hasGS1DigitalLink($value)
    {
        $this->setProperty('hasGS1DigitalLink', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setHasGS1DigitalLink($value)
    {
        $this->setProperty('hasGS1DigitalLink', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addHasGS1DigitalLink($value)
    {
        $current = $this->getProperty('hasGS1DigitalLink');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('hasGS1DigitalLink', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getHasGS1DigitalLink()
    {
        return $this->getProperty('hasGS1DigitalLink');
    }
    /**
     * For an [[Organization]] (often but not necessarily a [[NewsMediaOrganization]]), a report on staffing diversity issues. In a news context this might be for example ASNE or RTDNA (US) reports, or self-reported.
     * @see https://schema.org/diversityStaffingReport
     * @param string|Article|array $value
     * @return $this
     */
    public function diversityStaffingReport($value)
    {
        $this->setProperty('diversityStaffingReport', $value);
        return $this;
    }

    /**
     * @param string|Article|array $value
     * @return $this
     */
    public function setDiversityStaffingReport($value)
    {
        $this->setProperty('diversityStaffingReport', $value);
        return $this;
    }

    /**
     * @param string|Article $value
     * @return $this
     */
    public function addDiversityStaffingReport($value)
    {
        $current = $this->getProperty('diversityStaffingReport');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('diversityStaffingReport', $current);
        return $this;
    }

    /**
     * @return string|Article|array
     */
    public function getDiversityStaffingReport()
    {
        return $this->getProperty('diversityStaffingReport');
    }
    /**
     * An Organization (or ProgramMembership) to which this Person or Organization belongs.
     * @see https://schema.org/memberOf
     * @param ProgramMembership|Organization|MemberProgramTier|array $value
     * @return $this
     */
    public function memberOf($value)
    {
        $this->setProperty('memberOf', $value);
        return $this;
    }

    /**
     * @param ProgramMembership|Organization|MemberProgramTier|array $value
     * @return $this
     */
    public function setMemberOf($value)
    {
        $this->setProperty('memberOf', $value);
        return $this;
    }

    /**
     * @param ProgramMembership|Organization|MemberProgramTier $value
     * @return $this
     */
    public function addMemberOf($value)
    {
        $current = $this->getProperty('memberOf');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('memberOf', $current);
        return $this;
    }

    /**
     * @return ProgramMembership|Organization|MemberProgramTier|array
     */
    public function getMemberOf()
    {
        return $this->getProperty('memberOf');
    }
    /**
     * The payment method(s) that are accepted in general by an organization, or for some specific demand or offer.
     * @see https://schema.org/acceptedPaymentMethod
     * @param PaymentMethod|LoanOrCredit|string|array $value
     * @return $this
     */
    public function acceptedPaymentMethod($value)
    {
        $this->setProperty('acceptedPaymentMethod', $value);
        return $this;
    }

    /**
     * @param PaymentMethod|LoanOrCredit|string|array $value
     * @return $this
     */
    public function setAcceptedPaymentMethod($value)
    {
        $this->setProperty('acceptedPaymentMethod', $value);
        return $this;
    }

    /**
     * @param PaymentMethod|LoanOrCredit|string $value
     * @return $this
     */
    public function addAcceptedPaymentMethod($value)
    {
        $current = $this->getProperty('acceptedPaymentMethod');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('acceptedPaymentMethod', $current);
        return $this;
    }

    /**
     * @return PaymentMethod|LoanOrCredit|string|array
     */
    public function getAcceptedPaymentMethod()
    {
        return $this->getProperty('acceptedPaymentMethod');
    }
    /**
     * For a [[NewsMediaOrganization]] or other news-related [[Organization]], a statement about public engagement activities (for news media, the newsroom’s), including involving the public - digitally or otherwise -- in coverage decisions, reporting and activities after publication.
     * @see https://schema.org/actionableFeedbackPolicy
     * @param CreativeWork|string|array $value
     * @return $this
     */
    public function actionableFeedbackPolicy($value)
    {
        $this->setProperty('actionableFeedbackPolicy', $value);
        return $this;
    }

    /**
     * @param CreativeWork|string|array $value
     * @return $this
     */
    public function setActionableFeedbackPolicy($value)
    {
        $this->setProperty('actionableFeedbackPolicy', $value);
        return $this;
    }

    /**
     * @param CreativeWork|string $value
     * @return $this
     */
    public function addActionableFeedbackPolicy($value)
    {
        $current = $this->getProperty('actionableFeedbackPolicy');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('actionableFeedbackPolicy', $current);
        return $this;
    }

    /**
     * @return CreativeWork|string|array
     */
    public function getActionableFeedbackPolicy()
    {
        return $this->getProperty('actionableFeedbackPolicy');
    }
    /**
     * A person who founded this organization.
     * @see https://schema.org/founders
     * @param Person|array $value
     * @return $this
     */
    public function founders($value)
    {
        $this->setProperty('founders', $value);
        return $this;
    }

    /**
     * @param Person|array $value
     * @return $this
     */
    public function setFounders($value)
    {
        $this->setProperty('founders', $value);
        return $this;
    }

    /**
     * @param Person $value
     * @return $this
     */
    public function addFounders($value)
    {
        $current = $this->getProperty('founders');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('founders', $current);
        return $this;
    }

    /**
     * @return Person|array
     */
    public function getFounders()
    {
        return $this->getProperty('founders');
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
     * A slogan or motto associated with the item.
     * @see https://schema.org/slogan
     * @param string|array $value
     * @return $this
     */
    public function slogan($value)
    {
        $this->setProperty('slogan', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setSlogan($value)
    {
        $this->setProperty('slogan', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addSlogan($value)
    {
        $current = $this->getProperty('slogan');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('slogan', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getSlogan()
    {
        return $this->getProperty('slogan');
    }
    /**
     * Upcoming or past event associated with this place, organization, or action.
     * @see https://schema.org/event
     * @param Event|array $value
     * @return $this
     */
    public function event($value)
    {
        $this->setProperty('event', $value);
        return $this;
    }

    /**
     * @param Event|array $value
     * @return $this
     */
    public function setEvent($value)
    {
        $this->setProperty('event', $value);
        return $this;
    }

    /**
     * @param Event $value
     * @return $this
     */
    public function addEvent($value)
    {
        $current = $this->getProperty('event');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('event', $current);
        return $this;
    }

    /**
     * @return Event|array
     */
    public function getEvent()
    {
        return $this->getProperty('event');
    }
    /**
     * A relationship between two organizations where the first includes the second, e.g., as a subsidiary. See also: the more specific 'department' property.
     * @see https://schema.org/subOrganization
     * @param Organization|array $value
     * @return $this
     */
    public function subOrganization($value)
    {
        $this->setProperty('subOrganization', $value);
        return $this;
    }

    /**
     * @param Organization|array $value
     * @return $this
     */
    public function setSubOrganization($value)
    {
        $this->setProperty('subOrganization', $value);
        return $this;
    }

    /**
     * @param Organization $value
     * @return $this
     */
    public function addSubOrganization($value)
    {
        $current = $this->getProperty('subOrganization');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('subOrganization', $current);
        return $this;
    }

    /**
     * @return Organization|array
     */
    public function getSubOrganization()
    {
        return $this->getProperty('subOrganization');
    }
    /**
     * The brand(s) associated with a product or service, or the brand(s) maintained by an organization or business person.
     * @see https://schema.org/brand
     * @param Organization|Brand|array $value
     * @return $this
     */
    public function brand($value)
    {
        $this->setProperty('brand', $value);
        return $this;
    }

    /**
     * @param Organization|Brand|array $value
     * @return $this
     */
    public function setBrand($value)
    {
        $this->setProperty('brand', $value);
        return $this;
    }

    /**
     * @param Organization|Brand $value
     * @return $this
     */
    public function addBrand($value)
    {
        $current = $this->getProperty('brand');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('brand', $current);
        return $this;
    }

    /**
     * @return Organization|Brand|array
     */
    public function getBrand()
    {
        return $this->getProperty('brand');
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
     * Indicates a ProductReturnPolicy that may be applicable.
     * @see https://schema.org/hasProductReturnPolicy
     * @param ProductReturnPolicy|array $value
     * @return $this
     */
    public function hasProductReturnPolicy($value)
    {
        $this->setProperty('hasProductReturnPolicy', $value);
        return $this;
    }

    /**
     * @param ProductReturnPolicy|array $value
     * @return $this
     */
    public function setHasProductReturnPolicy($value)
    {
        $this->setProperty('hasProductReturnPolicy', $value);
        return $this;
    }

    /**
     * @param ProductReturnPolicy $value
     * @return $this
     */
    public function addHasProductReturnPolicy($value)
    {
        $current = $this->getProperty('hasProductReturnPolicy');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('hasProductReturnPolicy', $current);
        return $this;
    }

    /**
     * @return ProductReturnPolicy|array
     */
    public function getHasProductReturnPolicy()
    {
        return $this->getProperty('hasProductReturnPolicy');
    }
    /**
     * A statement of knowledge, skill, ability, task or any other assertion expressing a competency that is either claimed by a person, an organization or desired or required to fulfill a role or to work in an occupation.
     * @see https://schema.org/skills
     * @param string|DefinedTerm|array $value
     * @return $this
     */
    public function skills($value)
    {
        $this->setProperty('skills', $value);
        return $this;
    }

    /**
     * @param string|DefinedTerm|array $value
     * @return $this
     */
    public function setSkills($value)
    {
        $this->setProperty('skills', $value);
        return $this;
    }

    /**
     * @param string|DefinedTerm $value
     * @return $this
     */
    public function addSkills($value)
    {
        $current = $this->getProperty('skills');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('skills', $current);
        return $this;
    }

    /**
     * @return string|DefinedTerm|array
     */
    public function getSkills()
    {
        return $this->getProperty('skills');
    }
    /**
     * An organization identifier that uniquely identifies a legal entity as defined in ISO 17442.
     * @see https://schema.org/leiCode
     * @param string|array $value
     * @return $this
     */
    public function leiCode($value)
    {
        $this->setProperty('leiCode', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setLeiCode($value)
    {
        $this->setProperty('leiCode', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addLeiCode($value)
    {
        $current = $this->getProperty('leiCode');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('leiCode', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getLeiCode()
    {
        return $this->getProperty('leiCode');
    }
    /**
     * The fax number.
     * @see https://schema.org/faxNumber
     * @param string|array $value
     * @return $this
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
     * @param string $value
     * @return $this
     */
    public function addFaxNumber($value)
    {
        $current = $this->getProperty('faxNumber');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('faxNumber', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getFaxNumber()
    {
        return $this->getProperty('faxNumber');
    }
    /**
     * The number of completed interactions for this entity, in a particular role (the 'agent'), in a particular action (indicated in the statistic), and in a particular context (i.e. interactionService).
     * @see https://schema.org/agentInteractionStatistic
     * @param InteractionCounter|array $value
     * @return $this
     */
    public function agentInteractionStatistic($value)
    {
        $this->setProperty('agentInteractionStatistic', $value);
        return $this;
    }

    /**
     * @param InteractionCounter|array $value
     * @return $this
     */
    public function setAgentInteractionStatistic($value)
    {
        $this->setProperty('agentInteractionStatistic', $value);
        return $this;
    }

    /**
     * @param InteractionCounter $value
     * @return $this
     */
    public function addAgentInteractionStatistic($value)
    {
        $current = $this->getProperty('agentInteractionStatistic');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('agentInteractionStatistic', $current);
        return $this;
    }

    /**
     * @return InteractionCounter|array
     */
    public function getAgentInteractionStatistic()
    {
        return $this->getProperty('agentInteractionStatistic');
    }
    /**
     * The International Standard of Industrial Classification of All Economic Activities (ISIC), Revision 4 code for a particular organization, business person, or place.
     * @see https://schema.org/isicV4
     * @param string|array $value
     * @return $this
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
     * @param string $value
     * @return $this
     */
    public function addIsicV4($value)
    {
        $current = $this->getProperty('isicV4');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('isicV4', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getIsicV4()
    {
        return $this->getProperty('isicV4');
    }
    /**
     * MemberProgram offered by an Organization, for example an eCommerce merchant or an airline.
     * @see https://schema.org/hasMemberProgram
     * @param MemberProgram|array $value
     * @return $this
     */
    public function hasMemberProgram($value)
    {
        $this->setProperty('hasMemberProgram', $value);
        return $this;
    }

    /**
     * @param MemberProgram|array $value
     * @return $this
     */
    public function setHasMemberProgram($value)
    {
        $this->setProperty('hasMemberProgram', $value);
        return $this;
    }

    /**
     * @param MemberProgram $value
     * @return $this
     */
    public function addHasMemberProgram($value)
    {
        $current = $this->getProperty('hasMemberProgram');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('hasMemberProgram', $current);
        return $this;
    }

    /**
     * @return MemberProgram|array
     */
    public function getHasMemberProgram()
    {
        return $this->getProperty('hasMemberProgram');
    }
    /**
     * Points-of-Sales operated by the organization or person.
     * @see https://schema.org/hasPOS
     * @param Place|array $value
     * @return $this
     */
    public function hasPOS($value)
    {
        $this->setProperty('hasPOS', $value);
        return $this;
    }

    /**
     * @param Place|array $value
     * @return $this
     */
    public function setHasPOS($value)
    {
        $this->setProperty('hasPOS', $value);
        return $this;
    }

    /**
     * @param Place $value
     * @return $this
     */
    public function addHasPOS($value)
    {
        $current = $this->getProperty('hasPOS');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('hasPOS', $current);
        return $this;
    }

    /**
     * @return Place|array
     */
    public function getHasPOS()
    {
        return $this->getProperty('hasPOS');
    }
    /**
     * Statement on diversity policy by an [[Organization]] e.g. a [[NewsMediaOrganization]]. For a [[NewsMediaOrganization]], a statement describing the newsroom’s diversity policy on both staffing and sources, typically providing staffing data.
     * @see https://schema.org/diversityPolicy
     * @param CreativeWork|string|array $value
     * @return $this
     */
    public function diversityPolicy($value)
    {
        $this->setProperty('diversityPolicy', $value);
        return $this;
    }

    /**
     * @param CreativeWork|string|array $value
     * @return $this
     */
    public function setDiversityPolicy($value)
    {
        $this->setProperty('diversityPolicy', $value);
        return $this;
    }

    /**
     * @param CreativeWork|string $value
     * @return $this
     */
    public function addDiversityPolicy($value)
    {
        $current = $this->getProperty('diversityPolicy');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('diversityPolicy', $current);
        return $this;
    }

    /**
     * @return CreativeWork|string|array
     */
    public function getDiversityPolicy()
    {
        return $this->getProperty('diversityPolicy');
    }
    /**
     * The geographic area where a service or offered item is provided.
     * @see https://schema.org/areaServed
     * @param GeoShape|AdministrativeArea|Place|string|array $value
     * @return $this
     */
    public function areaServed($value)
    {
        $this->setProperty('areaServed', $value);
        return $this;
    }

    /**
     * @param GeoShape|AdministrativeArea|Place|string|array $value
     * @return $this
     */
    public function setAreaServed($value)
    {
        $this->setProperty('areaServed', $value);
        return $this;
    }

    /**
     * @param GeoShape|AdministrativeArea|Place|string $value
     * @return $this
     */
    public function addAreaServed($value)
    {
        $current = $this->getProperty('areaServed');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('areaServed', $current);
        return $this;
    }

    /**
     * @return GeoShape|AdministrativeArea|Place|string|array
     */
    public function getAreaServed()
    {
        return $this->getProperty('areaServed');
    }
    /**
     * Things owned by the organization or person.
     * @see https://schema.org/owns
     * @param Thing|array $value
     * @return $this
     */
    public function owns($value)
    {
        $this->setProperty('owns', $value);
        return $this;
    }

    /**
     * @param Thing|array $value
     * @return $this
     */
    public function setOwns($value)
    {
        $this->setProperty('owns', $value);
        return $this;
    }

    /**
     * @param Thing $value
     * @return $this
     */
    public function addOwns($value)
    {
        $current = $this->getProperty('owns');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('owns', $current);
        return $this;
    }

    /**
     * @return Thing|array
     */
    public function getOwns()
    {
        return $this->getProperty('owns');
    }
    /**
     * The number of employees in an organization, e.g. business.
     * @see https://schema.org/numberOfEmployees
     * @param QuantitativeValue|array $value
     * @return $this
     */
    public function numberOfEmployees($value)
    {
        $this->setProperty('numberOfEmployees', $value);
        return $this;
    }

    /**
     * @param QuantitativeValue|array $value
     * @return $this
     */
    public function setNumberOfEmployees($value)
    {
        $this->setProperty('numberOfEmployees', $value);
        return $this;
    }

    /**
     * @param QuantitativeValue $value
     * @return $this
     */
    public function addNumberOfEmployees($value)
    {
        $current = $this->getProperty('numberOfEmployees');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('numberOfEmployees', $current);
        return $this;
    }

    /**
     * @return QuantitativeValue|array
     */
    public function getNumberOfEmployees()
    {
        return $this->getProperty('numberOfEmployees');
    }
    /**
     * For an [[Organization]] (often but not necessarily a [[NewsMediaOrganization]]), a description of organizational ownership structure; funding and grants. In a news/media setting, this is with particular reference to editorial independence. Note that the [[funder]] is also available and can be used to make basic funder information machine-readable.
     * @see https://schema.org/ownershipFundingInfo
     * @param AboutPage|CreativeWork|string|array $value
     * @return $this
     */
    public function ownershipFundingInfo($value)
    {
        $this->setProperty('ownershipFundingInfo', $value);
        return $this;
    }

    /**
     * @param AboutPage|CreativeWork|string|array $value
     * @return $this
     */
    public function setOwnershipFundingInfo($value)
    {
        $this->setProperty('ownershipFundingInfo', $value);
        return $this;
    }

    /**
     * @param AboutPage|CreativeWork|string $value
     * @return $this
     */
    public function addOwnershipFundingInfo($value)
    {
        $current = $this->getProperty('ownershipFundingInfo');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('ownershipFundingInfo', $current);
        return $this;
    }

    /**
     * @return AboutPage|CreativeWork|string|array
     */
    public function getOwnershipFundingInfo()
    {
        return $this->getProperty('ownershipFundingInfo');
    }
}
