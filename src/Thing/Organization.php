<?php
namespace Sohophp\SchemaOrg\Thing;

use Sohophp\SchemaOrg\Thing;

/**
* An organization such as a school, NGO, corporation, club, etc.
* @see schema:Organization
* @package Sohophp\SchemaOrg\Thing
*/
class Organization extends Thing
{


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


    /**
        * Statement on diversity policy by an [[Organization]] e.g. a
 * [[NewsMediaOrganization]]. For a [[NewsMediaOrganization]], a statement
 * describing the newsroom’s diversity policy on both staffing and sources,
 * typically providing staffing data.
        * @param array|string|mixed $value
    * @return $this
    */
    public function diversityPolicy($value)
    {
        $this->setProperty('diversityPolicy', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * A person or organization who founded this organization.
        * @param array|string|mixed $value
    * @return $this
    */
    public function founder($value)
    {
        $this->setProperty('founder', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The larger organization that this organization is a [[subOrganization]] of,
 * if any.
        * @param array|string|mixed $value
    * @return $this
    */
    public function parentOrganization($value)
    {
        $this->setProperty('parentOrganization', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Physical address of the item.
        * @param array|string|mixed $value
    * @return $this
    */
    public function address($value)
    {
        $this->setProperty('address', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Points-of-Sales operated by the organization or person.
        * @param array|string|mixed $value
    * @return $this
    */
    public function hasPOS($value)
    {
        $this->setProperty('hasPOS', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * A contact point for a person or organization.
        * @param array|string|mixed $value
    * @return $this
    */
    public function contactPoint($value)
    {
        $this->setProperty('contactPoint', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * An organization identifier that uniquely identifies a legal entity as defined
 * in ISO 17442.
        * @param array|string|mixed $value
    * @return $this
    */
    public function leiCode($value)
    {
        $this->setProperty('leiCode', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The Tax / Fiscal ID of the organization or person, e.g. the TIN in the US or
 * the CIF/NIF in Spain.
        * @param array|string|mixed $value
    * @return $this
    */
    public function taxID($value)
    {
        $this->setProperty('taxID', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * A statement of knowledge, skill, ability, task or any other assertion
 * expressing a competency that is either claimed by a person, an organization
 * or desired or required to fulfill a role or to work in an occupation.
        * @param array|string|mixed $value
    * @return $this
    */
    public function skills($value)
    {
        $this->setProperty('skills', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setSkills($value)
    {
        $this->setProperty('skills', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSkills()
    {
       return $this->getProperty('skills');
    }


    /**
        * The payment method(s) that are accepted in general by an organization, or for
 * some specific demand or offer.
        * @param array|string|mixed $value
    * @return $this
    */
    public function acceptedPaymentMethod($value)
    {
        $this->setProperty('acceptedPaymentMethod', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setAcceptedPaymentMethod($value)
    {
        $this->setProperty('acceptedPaymentMethod', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAcceptedPaymentMethod()
    {
       return $this->getProperty('acceptedPaymentMethod');
    }


    /**
        * For an [[Organization]] (e.g. [[NewsMediaOrganization]]), a statement
 * describing (in news media, the newsroom’s) disclosure and correction policy
 * for errors.
        * @param array|string|mixed $value
    * @return $this
    */
    public function correctionsPolicy($value)
    {
        $this->setProperty('correctionsPolicy', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The International Standard of Industrial Classification of All Economic
 * Activities (ISIC), Revision 4 code for a particular organization, business
 * person, or place.
        * @param array|string|mixed $value
    * @return $this
    */
    public function isicV4($value)
    {
        $this->setProperty('isicV4', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The brand(s) associated with a product or service, or the brand(s) maintained
 * by an organization or business person.
        * @param array|string|mixed $value
    * @return $this
    */
    public function brand($value)
    {
        $this->setProperty('brand', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The geographic area where the service is provided.
        * @param array|string|mixed $value
    * @return $this
    */
    public function serviceArea($value)
    {
        $this->setProperty('serviceArea', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The telephone number.
        * @param array|string|mixed $value
    * @return $this
    */
    public function telephone($value)
    {
        $this->setProperty('telephone', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The number of employees in an organization, e.g. business.
        * @param array|string|mixed $value
    * @return $this
    */
    public function numberOfEmployees($value)
    {
        $this->setProperty('numberOfEmployees', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * A member of this organization.
        * @param array|string|mixed $value
    * @return $this
    */
    public function members($value)
    {
        $this->setProperty('members', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * An Organization (or ProgramMembership) to which this Person or Organization
 * belongs.
        * @param array|string|mixed $value
    * @return $this
    */
    public function memberOf($value)
    {
        $this->setProperty('memberOf', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Of a [[Person]], and less typically of an [[Organization]], to indicate a
 * known language. We do not distinguish skill levels or
 * reading/writing/speaking/signing here. Use language codes from the [IETF BCP
 * 47 standard](http://tools.ietf.org/html/bcp47).
        * @param array|string|mixed $value
    * @return $this
    */
    public function knowsLanguage($value)
    {
        $this->setProperty('knowsLanguage', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * A slogan or motto associated with the item.
        * @param array|string|mixed $value
    * @return $this
    */
    public function slogan($value)
    {
        $this->setProperty('slogan', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The [Global Location Number](http://www.gs1.org/gln) (GLN, sometimes also
 * referred to as International Location Number or ILN) of the respective
 * organization, person, or place. The GLN is a 13-digit number used to identify
 * parties and physical locations.
        * @param array|string|mixed $value
    * @return $this
    */
    public function globalLocationNumber($value)
    {
        $this->setProperty('globalLocationNumber', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * For an [[Organization]] (often but not necessarily a
 * [[NewsMediaOrganization]]), a report on staffing diversity issues. In a news
 * context this might be for example ASNE or RTDNA (US) reports, or
 * self-reported.
        * @param array|string|mixed $value
    * @return $this
    */
    public function diversityStaffingReport($value)
    {
        $this->setProperty('diversityStaffingReport', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * A person who founded this organization.
        * @param array|string|mixed $value
    * @return $this
    */
    public function founders($value)
    {
        $this->setProperty('founders', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The fax number.
        * @param array|string|mixed $value
    * @return $this
    */
    public function faxNumber($value)
    {
        $this->setProperty('faxNumber', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * A member of an Organization or a ProgramMembership. Organizations can be
 * members of organizations; ProgramMembership is typically for individuals.
        * @param array|string|mixed $value
    * @return $this
    */
    public function member($value)
    {
        $this->setProperty('member', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Alumni of an organization.
        * @param array|string|mixed $value
    * @return $this
    */
    public function alumni($value)
    {
        $this->setProperty('alumni', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * A relationship between two organizations where the first includes the second,
 * e.g., as a subsidiary. See also: the more specific 'department' property.
        * @param array|string|mixed $value
    * @return $this
    */
    public function subOrganization($value)
    {
        $this->setProperty('subOrganization', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * For an [[Organization]] (often but not necessarily a
 * [[NewsMediaOrganization]]), a description of organizational ownership
 * structure; funding and grants. In a news/media setting, this is with
 * particular reference to editorial independence.   Note that the [[funder]] is
 * also available and can be used to make basic funder information
 * machine-readable.
        * @param array|string|mixed $value
    * @return $this
    */
    public function ownershipFundingInfo($value)
    {
        $this->setProperty('ownershipFundingInfo', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * An associated logo.
        * @param array|string|mixed $value
    * @return $this
    */
    public function logo($value)
    {
        $this->setProperty('logo', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Indicates an OfferCatalog listing for this Organization, Person, or Service.
        * @param array|string|mixed $value
    * @return $this
    */
    public function hasOfferCatalog($value)
    {
        $this->setProperty('hasOfferCatalog', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The North American Industry Classification System (NAICS) code for a
 * particular organization or business person.
        * @param array|string|mixed $value
    * @return $this
    */
    public function naics($value)
    {
        $this->setProperty('naics', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * People working for this organization.
        * @param array|string|mixed $value
    * @return $this
    */
    public function employees($value)
    {
        $this->setProperty('employees', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * A pointer to products or services sought by the organization or person
 * (demand).
        * @param array|string|mixed $value
    * @return $this
    */
    public function seeks($value)
    {
        $this->setProperty('seeks', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * An organization identifier as defined in [ISO
 * 6523(-1)](https://en.wikipedia.org/wiki/ISO/IEC_6523). The identifier should
 * be in the `XXXX:YYYYYY:ZZZ` or `XXXX:YYYYYY`format. Where `XXXX` is a 4 digit
 * _ICD_ (International Code Designator), `YYYYYY` is an _OID_ (Organization
 * Identifier) with all formatting characters (dots, dashes, spaces) removed
 * with a maximal length of 35 characters, and `ZZZ` is an optional OPI
 * (Organization Part Identifier) with a maximum length of 35 characters. The
 * various components (ICD, OID, OPI) are joined with a colon character (ASCII
 * `0x3a`). Note that many existing organization identifiers defined as
 * attributes like [leiCode](https://schema.org/leiCode) (`0199`),
 * [duns](https://schema.org/duns) (`0060`) or
 * [GLN](https://schema.org/globalLocationNumber) (`0088`) can be expressed
 * using ISO-6523. If possible, ISO-6523 codes should be preferred to populating
 * [vatID](https://schema.org/vatID) or [taxID](https://schema.org/taxID), as
 * ISO identifiers are less ambiguous.
        * @param array|string|mixed $value
    * @return $this
    */
    public function iso6523Code($value)
    {
        $this->setProperty('iso6523Code', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setIso6523Code($value)
    {
        $this->setProperty('iso6523Code', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getIso6523Code()
    {
       return $this->getProperty('iso6523Code');
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
        * Specifies a MerchantReturnPolicy that may be applicable.
        * @param array|string|mixed $value
    * @return $this
    */
    public function hasMerchantReturnPolicy($value)
    {
        $this->setProperty('hasMerchantReturnPolicy', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setHasMerchantReturnPolicy($value)
    {
        $this->setProperty('hasMerchantReturnPolicy', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getHasMerchantReturnPolicy()
    {
       return $this->getProperty('hasMerchantReturnPolicy');
    }


    /**
        * For an [[Organization]] (typically a [[NewsMediaOrganization]]), a statement
 * about policy on use of unnamed sources and the decision process required.
        * @param array|string|mixed $value
    * @return $this
    */
    public function unnamedSourcesPolicy($value)
    {
        $this->setProperty('unnamedSourcesPolicy', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Of a [[Person]], and less typically of an [[Organization]], to indicate a
 * topic that is known about - suggesting possible expertise but not implying
 * it. We do not distinguish skill levels here, or relate this to educational
 * content, events, objectives or [[JobPosting]] descriptions.
        * @param array|string|mixed $value
    * @return $this
    */
    public function knowsAbout($value)
    {
        $this->setProperty('knowsAbout', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The Value-added Tax ID of the organization or person.
        * @param array|string|mixed $value
    * @return $this
    */
    public function vatID($value)
    {
        $this->setProperty('vatID', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * MemberProgram offered by an Organization, for example an eCommerce merchant
 * or an airline.
        * @param array|string|mixed $value
    * @return $this
    */
    public function hasMemberProgram($value)
    {
        $this->setProperty('hasMemberProgram', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setHasMemberProgram($value)
    {
        $this->setProperty('hasMemberProgram', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getHasMemberProgram()
    {
       return $this->getProperty('hasMemberProgram');
    }


    /**
        * For a [[NewsMediaOrganization]] or other news-related [[Organization]], a
 * statement about public engagement activities (for news media, the
 * newsroom’s), including involving the public - digitally or otherwise -- in
 * coverage decisions, reporting and activities after publication.
        * @param array|string|mixed $value
    * @return $this
    */
    public function actionableFeedbackPolicy($value)
    {
        $this->setProperty('actionableFeedbackPolicy', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The [GS1 digital link](https://www.gs1.org/standards/gs1-digital-link)
 * associated with the object. This URL should conform to the particular
 * requirements of digital links. The link should only contain the Application
 * Identifiers (AIs) that are relevant for the entity being annotated, for
 * instance a [[Product]] or an [[Organization]], and for the correct
 * granularity. In particular, for products:<ul>* A Digital Link that contains a
 * serial number (AI ```21```) should only be present on instances of
 * [[IndividualProduct]]* A Digital Link that contains a lot number (AI
 * ```10```) should be annotated as [[SomeProduct]] if only products from that
 * lot are sold, or [[IndividualProduct]] if there is only a specific product.*
 * A Digital Link that contains a global model number (AI ```8013```)  should be
 * attached to a [[Product]] or a [[ProductModel]]. Other item types should be
 * adapted similarly.
        * @param array|string|mixed $value
    * @return $this
    */
    public function hasGS1DigitalLink($value)
    {
        $this->setProperty('hasGS1DigitalLink', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setHasGS1DigitalLink($value)
    {
        $this->setProperty('hasGS1DigitalLink', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getHasGS1DigitalLink()
    {
       return $this->getProperty('hasGS1DigitalLink');
    }


    /**
        * The geographic area where a service or offered item is provided.
        * @param array|string|mixed $value
    * @return $this
    */
    public function areaServed($value)
    {
        $this->setProperty('areaServed', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The official name of the organization, e.g. the registered company name.
        * @param array|string|mixed $value
    * @return $this
    */
    public function legalName($value)
    {
        $this->setProperty('legalName', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Upcoming or past events associated with this place or organization.
        * @param array|string|mixed $value
    * @return $this
    */
    public function events($value)
    {
        $this->setProperty('events', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Upcoming or past event associated with this place, organization, or action.
        * @param array|string|mixed $value
    * @return $this
    */
    public function event($value)
    {
        $this->setProperty('event', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * A credential awarded to the Person or Organization.
        * @param array|string|mixed $value
    * @return $this
    */
    public function hasCredential($value)
    {
        $this->setProperty('hasCredential', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Products owned by the organization or person.
        * @param array|string|mixed $value
    * @return $this
    */
    public function owns($value)
    {
        $this->setProperty('owns', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Email address.
        * @param array|string|mixed $value
    * @return $this
    */
    public function email($value)
    {
        $this->setProperty('email', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Certification information about a product, organization, service, place, or
 * person.
        * @param array|string|mixed $value
    * @return $this
    */
    public function hasCertification($value)
    {
        $this->setProperty('hasCertification', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setHasCertification($value)
    {
        $this->setProperty('hasCertification', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getHasCertification()
    {
       return $this->getProperty('hasCertification');
    }


    /**
        * The number of completed interactions for this entity, in a particular role
 * (the 'agent'), in a particular action (indicated in the statistic), and in a
 * particular context (i.e. interactionService).
        * @param array|string|mixed $value
    * @return $this
    */
    public function agentInteractionStatistic($value)
    {
        $this->setProperty('agentInteractionStatistic', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setAgentInteractionStatistic($value)
    {
        $this->setProperty('agentInteractionStatistic', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAgentInteractionStatistic()
    {
       return $this->getProperty('agentInteractionStatistic');
    }


    /**
        * A pointer to products or services offered by the organization or person.
        * @param array|string|mixed $value
    * @return $this
    */
    public function makesOffer($value)
    {
        $this->setProperty('makesOffer', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Statement about ethics policy, e.g. of a [[NewsMediaOrganization]] regarding
 * journalistic and publishing practices, or of a [[Restaurant]], a page
 * describing food source policies. In the case of a [[NewsMediaOrganization]],
 * an ethicsPolicy is typically a statement describing the personal,
 * organizational, and corporate standards of behavior expected by the
 * organization.
        * @param array|string|mixed $value
    * @return $this
    */
    public function ethicsPolicy($value)
    {
        $this->setProperty('ethicsPolicy', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The Dun & Bradstreet DUNS number for identifying an organization or business
 * person.
        * @param array|string|mixed $value
    * @return $this
    */
    public function duns($value)
    {
        $this->setProperty('duns', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * nonprofitStatus indicates the legal status of a non-profit organization in
 * its primary place of business.
        * @param array|string|mixed $value
    * @return $this
    */
    public function nonprofitStatus($value)
    {
        $this->setProperty('nonprofitStatus', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setNonprofitStatus($value)
    {
        $this->setProperty('nonprofitStatus', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getNonprofitStatus()
    {
       return $this->getProperty('nonprofitStatus');
    }


    /**
        * The place where the Organization was founded.
        * @param array|string|mixed $value
    * @return $this
    */
    public function foundingLocation($value)
    {
        $this->setProperty('foundingLocation', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Someone working for this organization.
        * @param array|string|mixed $value
    * @return $this
    */
    public function employee($value)
    {
        $this->setProperty('employee', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * A contact point for a person or organization.
        * @param array|string|mixed $value
    * @return $this
    */
    public function contactPoints($value)
    {
        $this->setProperty('contactPoints', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * A relationship between an organization and a department of that organization,
 * also described as an organization (allowing different urls, logos, opening
 * hours). For example: a store with a pharmacy, or a bakery with a cafe.
        * @param array|string|mixed $value
    * @return $this
    */
    public function department($value)
    {
        $this->setProperty('department', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Indicates a ProductReturnPolicy that may be applicable.
        * @param array|string|mixed $value
    * @return $this
    */
    public function hasProductReturnPolicy($value)
    {
        $this->setProperty('hasProductReturnPolicy', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The location of, for example, where an event is happening, where an
 * organization is located, or where an action takes place.
        * @param array|string|mixed $value
    * @return $this
    */
    public function location($value)
    {
        $this->setProperty('location', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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


}
