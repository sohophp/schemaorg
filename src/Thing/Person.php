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
        * @param array|string|mixed $value
    * @return $this
    */
    public function parents($value)
    {
        $this->setProperty('parents', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Gender of something, typically a [[Person]], but possibly also fictional
 * characters, animals, etc. While https://schema.org/Male and
 * https://schema.org/Female may be used, text strings are also acceptable for
 * people who do not identify as a binary gender. The [[gender]] property can
 * also be used in an extended sense to cover e.g. the gender of sports teams.
 * As with the gender of individuals, we do not try to enumerate all
 * possibilities. A mixed-gender [[SportsTeam]] can be indicated with a text
 * value of "Mixed".
        * @param array|string|mixed $value
    * @return $this
    */
    public function gender($value)
    {
        $this->setProperty('gender', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * A sibling of the person.
        * @param array|string|mixed $value
    * @return $this
    */
    public function sibling($value)
    {
        $this->setProperty('sibling', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Organizations that the person works for.
        * @param array|string|mixed $value
    * @return $this
    */
    public function worksFor($value)
    {
        $this->setProperty('worksFor', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The Person's occupation. For past professions, use Role for expressing dates.
        * @param array|string|mixed $value
    * @return $this
    */
    public function hasOccupation($value)
    {
        $this->setProperty('hasOccupation', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * A parent of this person.
        * @param array|string|mixed $value
    * @return $this
    */
    public function parent($value)
    {
        $this->setProperty('parent', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Event that this person is a performer or participant in.
        * @param array|string|mixed $value
    * @return $this
    */
    public function performerIn($value)
    {
        $this->setProperty('performerIn', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The height of the item.
        * @param array|string|mixed $value
    * @return $this
    */
    public function height($value)
    {
        $this->setProperty('height', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * An additional name for a Person, can be used for a middle name.
        * @param array|string|mixed $value
    * @return $this
    */
    public function additionalName($value)
    {
        $this->setProperty('additionalName', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The most generic bi-directional social/work relation.
        * @param array|string|mixed $value
    * @return $this
    */
    public function knows($value)
    {
        $this->setProperty('knows', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Family name. In the U.S., the last name of a Person.
        * @param array|string|mixed $value
    * @return $this
    */
    public function familyName($value)
    {
        $this->setProperty('familyName', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The person's spouse.
        * @param array|string|mixed $value
    * @return $this
    */
    public function spouse($value)
    {
        $this->setProperty('spouse', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Date of birth.
        * @param array|string|mixed $value
    * @return $this
    */
    public function birthDate($value)
    {
        $this->setProperty('birthDate', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * An organization that the person is an alumni of.
        * @param array|string|mixed $value
    * @return $this
    */
    public function alumniOf($value)
    {
        $this->setProperty('alumniOf', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * An honorific prefix preceding a Person's name such as Dr/Mrs/Mr.
        * @param array|string|mixed $value
    * @return $this
    */
    public function honorificPrefix($value)
    {
        $this->setProperty('honorificPrefix', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * A sibling of the person.
        * @param array|string|mixed $value
    * @return $this
    */
    public function siblings($value)
    {
        $this->setProperty('siblings', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * A colleague of the person.
        * @param array|string|mixed $value
    * @return $this
    */
    public function colleagues($value)
    {
        $this->setProperty('colleagues', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * An honorific suffix following a Person's name such as M.D./PhD/MSCSW.
        * @param array|string|mixed $value
    * @return $this
    */
    public function honorificSuffix($value)
    {
        $this->setProperty('honorificSuffix', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Given name. In the U.S., the first name of a Person.
        * @param array|string|mixed $value
    * @return $this
    */
    public function givenName($value)
    {
        $this->setProperty('givenName', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The job title of the person (for example, Financial Manager).
        * @param array|string|mixed $value
    * @return $this
    */
    public function jobTitle($value)
    {
        $this->setProperty('jobTitle', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The place where the person died.
        * @param array|string|mixed $value
    * @return $this
    */
    public function deathPlace($value)
    {
        $this->setProperty('deathPlace', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * A child of the person.
        * @param array|string|mixed $value
    * @return $this
    */
    public function children($value)
    {
        $this->setProperty('children', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The most generic uni-directional social relation.
        * @param array|string|mixed $value
    * @return $this
    */
    public function follows($value)
    {
        $this->setProperty('follows', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * A contact location for a person's residence.
        * @param array|string|mixed $value
    * @return $this
    */
    public function homeLocation($value)
    {
        $this->setProperty('homeLocation', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * A contact location for a person's place of work.
        * @param array|string|mixed $value
    * @return $this
    */
    public function workLocation($value)
    {
        $this->setProperty('workLocation', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The weight of the product or person.
        * @param array|string|mixed $value
    * @return $this
    */
    public function weight($value)
    {
        $this->setProperty('weight', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * A [callsign](https://en.wikipedia.org/wiki/Call_sign), as used in
 * broadcasting and radio communications to identify people, radio and TV
 * stations, or vehicles.
        * @param array|string|mixed $value
    * @return $this
    */
    public function callSign($value)
    {
        $this->setProperty('callSign', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The place where the person was born.
        * @param array|string|mixed $value
    * @return $this
    */
    public function birthPlace($value)
    {
        $this->setProperty('birthPlace', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * A colleague of the person.
        * @param array|string|mixed $value
    * @return $this
    */
    public function colleague($value)
    {
        $this->setProperty('colleague', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Date of death.
        * @param array|string|mixed $value
    * @return $this
    */
    public function deathDate($value)
    {
        $this->setProperty('deathDate', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * An organization that this person is affiliated with. For example, a
 * school/university, a club, or a team.
        * @param array|string|mixed $value
    * @return $this
    */
    public function affiliation($value)
    {
        $this->setProperty('affiliation', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The most generic familial relation.
        * @param array|string|mixed $value
    * @return $this
    */
    public function relatedTo($value)
    {
        $this->setProperty('relatedTo', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Nationality of the person.
        * @param array|string|mixed $value
    * @return $this
    */
    public function nationality($value)
    {
        $this->setProperty('nationality', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The total financial value of the person as calculated by subtracting assets
 * from liabilities.
        * @param array|string|mixed $value
    * @return $this
    */
    public function netWorth($value)
    {
        $this->setProperty('netWorth', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
