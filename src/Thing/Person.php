<?php
namespace Sohophp\SchemaOrg\Thing;

use Sohophp\SchemaOrg\Thing;

/**
* A person (alive, dead, undead, or fictional).
* @see schema:Person
* @package Sohophp\SchemaOrg\Thing
*/
class Person extends Thing
{
   /**
        * A parents of the person.
        */
    protected $parents = null;

   /**
        * Gender of something, typically a [[Person]], but possibly also fictional characters, animals, etc. While https://schema.org/Male and https://schema.org/Female may be used, text strings are also acceptable for people who do not identify as a binary gender. The [[gender]] property can also be used in an extended sense to cover e.g. the gender of sports teams. As with the gender of individuals, we do not try to enumerate all possibilities. A mixed-gender [[SportsTeam]] can be indicated with a text value of "Mixed".
        */
    protected $gender = null;

   /**
        * A sibling of the person.
        */
    protected $sibling = null;

   /**
        * Organizations that the person works for.
        */
    protected $worksFor = null;

   /**
        * A person or organization that supports a thing through a pledge, promise, or financial contribution. E.g. a sponsor of a Medical Study or a corporate sponsor of an event.
        */
    protected $sponsor = null;

   /**
        * The Person's occupation. For past professions, use Role for expressing dates.
        */
    protected $hasOccupation = null;

   /**
        * A parent of this person.
        */
    protected $parent = null;

   /**
        * Event that this person is a performer or participant in.
        */
    protected $performerIn = null;

   /**
        * The height of the item.
        */
    protected $height = null;

   /**
        * An additional name for a Person, can be used for a middle name.
        */
    protected $additionalName = null;

   /**
        * The publishingPrinciples property indicates (typically via [[URL]]) a document describing the editorial principles of an [[Organization]] (or individual, e.g. a [[Person]] writing a blog) that relate to their activities as a publisher, e.g. ethics or diversity policies. When applied to a [[CreativeWork]] (e.g. [[NewsArticle]]) the principles are those of the party primarily responsible for the creation of the [[CreativeWork]].

While such policies are most typically expressed in natural language, sometimes related information (e.g. indicating a [[funder]]) can be expressed using schema.org terminology.

        */
    protected $publishingPrinciples = null;

   /**
        * Physical address of the item.
        */
    protected $address = null;

   /**
        * Points-of-Sales operated by the organization or person.
        */
    protected $hasPOS = null;

   /**
        * The most generic bi-directional social/work relation.
        */
    protected $knows = null;

   /**
        * A contact point for a person or organization.
        */
    protected $contactPoint = null;

   /**
        * Family name. In the U.S., the last name of a Person.
        */
    protected $familyName = null;

   /**
        * The Tax / Fiscal ID of the organization or person, e.g. the TIN in the US or the CIF/NIF in Spain.
        */
    protected $taxID = null;

   /**
        * A statement of knowledge, skill, ability, task or any other assertion expressing a competency that is either claimed by a person, an organization or desired or required to fulfill a role or to work in an occupation.
        */
    protected $skills = null;

   /**
        * The person's spouse.
        */
    protected $spouse = null;

   /**
        * Date of birth.
        */
    protected $birthDate = null;

   /**
        * An organization that the person is an alumni of.
        */
    protected $alumniOf = null;

   /**
        * The International Standard of Industrial Classification of All Economic Activities (ISIC), Revision 4 code for a particular organization, business person, or place.
        */
    protected $isicV4 = null;

   /**
        * An honorific prefix preceding a Person's name such as Dr/Mrs/Mr.
        */
    protected $honorificPrefix = null;

   /**
        * A sibling of the person.
        */
    protected $siblings = null;

   /**
        * A [[Grant]] that directly or indirectly provide funding or sponsorship for this item. See also [[ownershipFundingInfo]].
        */
    protected $funding = null;

   /**
        * The brand(s) associated with a product or service, or the brand(s) maintained by an organization or business person.
        */
    protected $brand = null;

   /**
        * The number of interactions for the CreativeWork using the WebSite or SoftwareApplication. The most specific child type of InteractionCounter should be used.
        */
    protected $interactionStatistic = null;

   /**
        * The telephone number.
        */
    protected $telephone = null;

   /**
        * A person or organization that supports (sponsors) something through some kind of financial contribution.
        */
    protected $funder = null;

   /**
        * An Organization (or ProgramMembership) to which this Person or Organization belongs.
        */
    protected $memberOf = null;

   /**
        * Of a [[Person]], and less typically of an [[Organization]], to indicate a known language. We do not distinguish skill levels or reading/writing/speaking/signing here. Use language codes from the [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47).
        */
    protected $knowsLanguage = null;

   /**
        * The [Global Location Number](http://www.gs1.org/gln) (GLN, sometimes also referred to as International Location Number or ILN) of the respective organization, person, or place. The GLN is a 13-digit number used to identify parties and physical locations.
        */
    protected $globalLocationNumber = null;

   /**
        * The fax number.
        */
    protected $faxNumber = null;

   /**
        * A colleague of the person.
        */
    protected $colleagues = null;

   /**
        * An honorific suffix following a Person's name such as M.D./PhD/MSCSW.
        */
    protected $honorificSuffix = null;

   /**
        * Given name. In the U.S., the first name of a Person.
        */
    protected $givenName = null;

   /**
        * Indicates an OfferCatalog listing for this Organization, Person, or Service.
        */
    protected $hasOfferCatalog = null;

   /**
        * The North American Industry Classification System (NAICS) code for a particular organization or business person.
        */
    protected $naics = null;

   /**
        * The job title of the person (for example, Financial Manager).
        */
    protected $jobTitle = null;

   /**
        * A pointer to products or services sought by the organization or person (demand).
        */
    protected $seeks = null;

   /**
        * An award won by or for this item.
        */
    protected $award = null;

   /**
        * The place where the person died.
        */
    protected $deathPlace = null;

   /**
        * A child of the person.
        */
    protected $children = null;

   /**
        * Of a [[Person]], and less typically of an [[Organization]], to indicate a topic that is known about - suggesting possible expertise but not implying it. We do not distinguish skill levels here, or relate this to educational content, events, objectives or [[JobPosting]] descriptions.
        */
    protected $knowsAbout = null;

   /**
        * The most generic uni-directional social relation.
        */
    protected $follows = null;

   /**
        * A contact location for a person's residence.
        */
    protected $homeLocation = null;

   /**
        * The Value-added Tax ID of the organization or person.
        */
    protected $vatID = null;

   /**
        * Awards won by or for this item.
        */
    protected $awards = null;

   /**
        * A contact location for a person's place of work.
        */
    protected $workLocation = null;

   /**
        * The weight of the product or person.
        */
    protected $weight = null;

   /**
        * A credential awarded to the Person or Organization.
        */
    protected $hasCredential = null;

   /**
        * Products owned by the organization or person.
        */
    protected $owns = null;

   /**
        * A [callsign](https://en.wikipedia.org/wiki/Call_sign), as used in broadcasting and radio communications to identify people, radio and TV stations, or vehicles.
        */
    protected $callSign = null;

   /**
        * The place where the person was born.
        */
    protected $birthPlace = null;

   /**
        * Email address.
        */
    protected $email = null;

   /**
        * A colleague of the person.
        */
    protected $colleague = null;

   /**
        * Certification information about a product, organization, service, place, or person.
        */
    protected $hasCertification = null;

   /**
        * Date of death.
        */
    protected $deathDate = null;

   /**
        * The number of completed interactions for this entity, in a particular role (the 'agent'), in a particular action (indicated in the statistic), and in a particular context (i.e. interactionService).
        */
    protected $agentInteractionStatistic = null;

   /**
        * A pointer to products or services offered by the organization or person.
        */
    protected $makesOffer = null;

   /**
        * An organization that this person is affiliated with. For example, a school/university, a club, or a team.
        */
    protected $affiliation = null;

   /**
        * The Dun & Bradstreet DUNS number for identifying an organization or business person.
        */
    protected $duns = null;

   /**
        * The most generic familial relation.
        */
    protected $relatedTo = null;

   /**
        * Nationality of the person.
        */
    protected $nationality = null;

   /**
        * A contact point for a person or organization.
        */
    protected $contactPoints = null;

   /**
        * The total financial value of the person as calculated by subtracting assets from liabilities.
        */
    protected $netWorth = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setParents($value)
    {
        $this->setProperty('parents', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getParents()
    {
       return $this->getProperty('parents');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setGender($value)
    {
        $this->setProperty('gender', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getGender()
    {
       return $this->getProperty('gender');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setSibling($value)
    {
        $this->setProperty('sibling', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSibling()
    {
       return $this->getProperty('sibling');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setWorksFor($value)
    {
        $this->setProperty('worksFor', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getWorksFor()
    {
       return $this->getProperty('worksFor');
    }

    /**
    * @param array|string $value
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
    * @param array|string $value
    * @return $this
    */
    public function setHasOccupation($value)
    {
        $this->setProperty('hasOccupation', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getHasOccupation()
    {
       return $this->getProperty('hasOccupation');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setParent($value)
    {
        $this->setProperty('parent', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getParent()
    {
       return $this->getProperty('parent');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setPerformerIn($value)
    {
        $this->setProperty('performerIn', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPerformerIn()
    {
       return $this->getProperty('performerIn');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setHeight($value)
    {
        $this->setProperty('height', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getHeight()
    {
       return $this->getProperty('height');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setAdditionalName($value)
    {
        $this->setProperty('additionalName', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAdditionalName()
    {
       return $this->getProperty('additionalName');
    }

    /**
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
    * @return $this
    */
    public function setKnows($value)
    {
        $this->setProperty('knows', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getKnows()
    {
       return $this->getProperty('knows');
    }

    /**
    * @param array|string $value
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
    * @param array|string $value
    * @return $this
    */
    public function setFamilyName($value)
    {
        $this->setProperty('familyName', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getFamilyName()
    {
       return $this->getProperty('familyName');
    }

    /**
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
    * @return $this
    */
    public function setSpouse($value)
    {
        $this->setProperty('spouse', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSpouse()
    {
       return $this->getProperty('spouse');
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
    * @return string|array|mixed
    */
    public function getBirthDate()
    {
       return $this->getProperty('birthDate');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setAlumniOf($value)
    {
        $this->setProperty('alumniOf', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAlumniOf()
    {
       return $this->getProperty('alumniOf');
    }

    /**
    * @param array|string $value
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
    * @param array|string $value
    * @return $this
    */
    public function setHonorificPrefix($value)
    {
        $this->setProperty('honorificPrefix', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getHonorificPrefix()
    {
       return $this->getProperty('honorificPrefix');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setSiblings($value)
    {
        $this->setProperty('siblings', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSiblings()
    {
       return $this->getProperty('siblings');
    }

    /**
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
    * @return $this
    */
    public function setColleagues($value)
    {
        $this->setProperty('colleagues', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getColleagues()
    {
       return $this->getProperty('colleagues');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setHonorificSuffix($value)
    {
        $this->setProperty('honorificSuffix', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getHonorificSuffix()
    {
       return $this->getProperty('honorificSuffix');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setGivenName($value)
    {
        $this->setProperty('givenName', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getGivenName()
    {
       return $this->getProperty('givenName');
    }

    /**
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
    * @return $this
    */
    public function setJobTitle($value)
    {
        $this->setProperty('jobTitle', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getJobTitle()
    {
       return $this->getProperty('jobTitle');
    }

    /**
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
    * @return $this
    */
    public function setDeathPlace($value)
    {
        $this->setProperty('deathPlace', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDeathPlace()
    {
       return $this->getProperty('deathPlace');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setChildren($value)
    {
        $this->setProperty('children', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getChildren()
    {
       return $this->getProperty('children');
    }

    /**
    * @param array|string $value
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
    * @param array|string $value
    * @return $this
    */
    public function setFollows($value)
    {
        $this->setProperty('follows', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getFollows()
    {
       return $this->getProperty('follows');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setHomeLocation($value)
    {
        $this->setProperty('homeLocation', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getHomeLocation()
    {
       return $this->getProperty('homeLocation');
    }

    /**
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
    * @return $this
    */
    public function setWorkLocation($value)
    {
        $this->setProperty('workLocation', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getWorkLocation()
    {
       return $this->getProperty('workLocation');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setWeight($value)
    {
        $this->setProperty('weight', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getWeight()
    {
       return $this->getProperty('weight');
    }

    /**
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
    * @return $this
    */
    public function setCallSign($value)
    {
        $this->setProperty('callSign', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCallSign()
    {
       return $this->getProperty('callSign');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setBirthPlace($value)
    {
        $this->setProperty('birthPlace', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getBirthPlace()
    {
       return $this->getProperty('birthPlace');
    }

    /**
    * @param array|string $value
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
    * @param array|string $value
    * @return $this
    */
    public function setColleague($value)
    {
        $this->setProperty('colleague', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getColleague()
    {
       return $this->getProperty('colleague');
    }

    /**
    * @param array|string $value
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
    * @param array|string $value
    * @return $this
    */
    public function setDeathDate($value)
    {
        $this->setProperty('deathDate', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDeathDate()
    {
       return $this->getProperty('deathDate');
    }

    /**
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
    * @return $this
    */
    public function setAffiliation($value)
    {
        $this->setProperty('affiliation', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAffiliation()
    {
       return $this->getProperty('affiliation');
    }

    /**
    * @param array|string $value
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
    * @param array|string $value
    * @return $this
    */
    public function setRelatedTo($value)
    {
        $this->setProperty('relatedTo', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getRelatedTo()
    {
       return $this->getProperty('relatedTo');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setNationality($value)
    {
        $this->setProperty('nationality', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getNationality()
    {
       return $this->getProperty('nationality');
    }

    /**
    * @param array|string $value
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
    * @param array|string $value
    * @return $this
    */
    public function setNetWorth($value)
    {
        $this->setProperty('netWorth', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getNetWorth()
    {
       return $this->getProperty('netWorth');
    }


}
