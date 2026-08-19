<?php
namespace Sohophp\SchemaOrg\Thing;

  use Sohophp\SchemaOrg\Thing;
  use Sohophp\SchemaOrg\Thing\Organization;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint;
  use Sohophp\SchemaOrg\Thing\Place;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress;
  use Sohophp\SchemaOrg\Thing\Event;
  use Sohophp\SchemaOrg\Thing\Intangible\Offer;
  use Sohophp\SchemaOrg\Thing\Intangible\Occupation;
  use Sohophp\SchemaOrg\Thing\Intangible\Demand;
  use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\GenderType;
  use Sohophp\SchemaOrg\Thing\CreativeWork;
  use Sohophp\SchemaOrg\Thing\Intangible\ItemList\OfferCatalog;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;
  use Sohophp\SchemaOrg\Quantity\Mass;
  use Sohophp\SchemaOrg\Thing\Intangible\Grant;
  use Sohophp\SchemaOrg\Thing\Intangible\Language;
  use Sohophp\SchemaOrg\Thing\CreativeWork\Credential;
  use Sohophp\SchemaOrg\Certification;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\InteractionCounter;
  use Sohophp\SchemaOrg\Thing\Intangible\DefinedTerm;
  use Sohophp\SchemaOrg\Thing\Place\AdministrativeArea\Country;
  use Sohophp\SchemaOrg\Thing\Intangible\ProgramMembership;
  use Sohophp\SchemaOrg\Thing\Intangible\MemberProgramTier;
  use Sohophp\SchemaOrg\Thing\Place\CivicStructure\EducationalOrganization;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\MonetaryAmount;
  use Sohophp\SchemaOrg\Thing\Intangible\Brand;
  use Sohophp\SchemaOrg\Quantity\Distance;

/**
  * A person (alive, dead, undead, or fictional).
  * @see schema:Person
* @package Sohophp\SchemaOrg\Thing
*/
class Person extends Thing
{


  /**
      * Date of death.
    * @param mixed $value
  * @return $this
  */
  public function deathDate($value)
  {
  $this->setProperty('deathDate', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function setDeathDate($value)
  {
  $this->setProperty('deathDate', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function addDeathDate($value)
  {
  $current = $this->getProperty('deathDate');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('deathDate', $current);
  return $this;
  }

  /**
  * @return mixed
  */
  public function getDeathDate()
  {
  return $this->getProperty('deathDate');
  }


  /**
      * The telephone number.
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
      * A person or organization that supports a thing through a pledge, promise, or
 * financial contribution. E.g. a sponsor of a Medical Study or a corporate
 * sponsor of an event.
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
      * The Dun & Bradstreet DUNS number for identifying an organization or business
 * person.
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
      * Of a [[Person]], and less typically of an [[Organization]], to indicate a
 * topic that is known about - suggesting possible expertise but not implying
 * it. We do not distinguish skill levels here, or relate this to educational
 * content, events, objectives or [[JobPosting]] descriptions.
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
      * A person or organization that supports (sponsors) something through some kind
 * of financial contribution.
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
      * A [callsign](https://en.wikipedia.org/wiki/Call_sign), as used in
 * broadcasting and radio communications to identify people, radio and TV
 * stations, or vehicles.
    * @param string|array $value
  * @return $this
  */
  public function callSign($value)
  {
  $this->setProperty('callSign', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setCallSign($value)
  {
  $this->setProperty('callSign', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addCallSign($value)
  {
  $current = $this->getProperty('callSign');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('callSign', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getCallSign()
  {
  return $this->getProperty('callSign');
  }


  /**
      * An additional name for a Person, can be used for a middle name.
    * @param string|array $value
  * @return $this
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
  * @param string $value
  * @return $this
  */
  public function addAdditionalName($value)
  {
  $current = $this->getProperty('additionalName');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('additionalName', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getAdditionalName()
  {
  return $this->getProperty('additionalName');
  }


  /**
      * The North American Industry Classification System (NAICS) code for a
 * particular organization or business person.
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
      * The place where the person died.
    * @param Place|array $value
  * @return $this
  */
  public function deathPlace($value)
  {
  $this->setProperty('deathPlace', $value);
  return $this;
  }

  /**
  * @param Place|array $value
  * @return $this
  */
  public function setDeathPlace($value)
  {
  $this->setProperty('deathPlace', $value);
  return $this;
  }

  /**
  * @param Place $value
  * @return $this
  */
  public function addDeathPlace($value)
  {
  $current = $this->getProperty('deathPlace');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('deathPlace', $current);
  return $this;
  }

  /**
  * @return Place|array
  */
  public function getDeathPlace()
  {
  return $this->getProperty('deathPlace');
  }


  /**
      * A sibling of the person.
    * @param Person|array $value
  * @return $this
  */
  public function siblings($value)
  {
  $this->setProperty('siblings', $value);
  return $this;
  }

  /**
  * @param Person|array $value
  * @return $this
  */
  public function setSiblings($value)
  {
  $this->setProperty('siblings', $value);
  return $this;
  }

  /**
  * @param Person $value
  * @return $this
  */
  public function addSiblings($value)
  {
  $current = $this->getProperty('siblings');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('siblings', $current);
  return $this;
  }

  /**
  * @return Person|array
  */
  public function getSiblings()
  {
  return $this->getProperty('siblings');
  }


  /**
      * A sibling of the person.
    * @param Person|array $value
  * @return $this
  */
  public function sibling($value)
  {
  $this->setProperty('sibling', $value);
  return $this;
  }

  /**
  * @param Person|array $value
  * @return $this
  */
  public function setSibling($value)
  {
  $this->setProperty('sibling', $value);
  return $this;
  }

  /**
  * @param Person $value
  * @return $this
  */
  public function addSibling($value)
  {
  $current = $this->getProperty('sibling');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('sibling', $current);
  return $this;
  }

  /**
  * @return Person|array
  */
  public function getSibling()
  {
  return $this->getProperty('sibling');
  }


  /**
      * An honorific suffix following a Person's name such as M.D./PhD/MSCSW.
    * @param string|array $value
  * @return $this
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
  * @param string $value
  * @return $this
  */
  public function addHonorificSuffix($value)
  {
  $current = $this->getProperty('honorificSuffix');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('honorificSuffix', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getHonorificSuffix()
  {
  return $this->getProperty('honorificSuffix');
  }


  /**
      * Physical address of the item.
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
      * Event that this person is a performer or participant in.
    * @param Event|array $value
  * @return $this
  */
  public function performerIn($value)
  {
  $this->setProperty('performerIn', $value);
  return $this;
  }

  /**
  * @param Event|array $value
  * @return $this
  */
  public function setPerformerIn($value)
  {
  $this->setProperty('performerIn', $value);
  return $this;
  }

  /**
  * @param Event $value
  * @return $this
  */
  public function addPerformerIn($value)
  {
  $current = $this->getProperty('performerIn');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('performerIn', $current);
  return $this;
  }

  /**
  * @return Event|array
  */
  public function getPerformerIn()
  {
  return $this->getProperty('performerIn');
  }


  /**
      * A colleague of the person.
    * @param Person|array $value
  * @return $this
  */
  public function colleagues($value)
  {
  $this->setProperty('colleagues', $value);
  return $this;
  }

  /**
  * @param Person|array $value
  * @return $this
  */
  public function setColleagues($value)
  {
  $this->setProperty('colleagues', $value);
  return $this;
  }

  /**
  * @param Person $value
  * @return $this
  */
  public function addColleagues($value)
  {
  $current = $this->getProperty('colleagues');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('colleagues', $current);
  return $this;
  }

  /**
  * @return Person|array
  */
  public function getColleagues()
  {
  return $this->getProperty('colleagues');
  }


  /**
      * The [Global Location Number](http://www.gs1.org/gln) (GLN, sometimes also
 * referred to as International Location Number or ILN) of the respective
 * organization, person, or place. The GLN is a 13-digit number used to identify
 * parties and physical locations.
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
      * Given name. In the U.S., the first name of a Person.
    * @param string|array $value
  * @return $this
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
  * @param string $value
  * @return $this
  */
  public function addGivenName($value)
  {
  $current = $this->getProperty('givenName');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('givenName', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getGivenName()
  {
  return $this->getProperty('givenName');
  }


  /**
      * A contact location for a person's place of work.
    * @param Place|ContactPoint|array $value
  * @return $this
  */
  public function workLocation($value)
  {
  $this->setProperty('workLocation', $value);
  return $this;
  }

  /**
  * @param Place|ContactPoint|array $value
  * @return $this
  */
  public function setWorkLocation($value)
  {
  $this->setProperty('workLocation', $value);
  return $this;
  }

  /**
  * @param Place|ContactPoint $value
  * @return $this
  */
  public function addWorkLocation($value)
  {
  $current = $this->getProperty('workLocation');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('workLocation', $current);
  return $this;
  }

  /**
  * @return Place|ContactPoint|array
  */
  public function getWorkLocation()
  {
  return $this->getProperty('workLocation');
  }


  /**
      * The Person's occupation. For past professions, use Role for expressing dates.
    * @param Occupation|array $value
  * @return $this
  */
  public function hasOccupation($value)
  {
  $this->setProperty('hasOccupation', $value);
  return $this;
  }

  /**
  * @param Occupation|array $value
  * @return $this
  */
  public function setHasOccupation($value)
  {
  $this->setProperty('hasOccupation', $value);
  return $this;
  }

  /**
  * @param Occupation $value
  * @return $this
  */
  public function addHasOccupation($value)
  {
  $current = $this->getProperty('hasOccupation');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('hasOccupation', $current);
  return $this;
  }

  /**
  * @return Occupation|array
  */
  public function getHasOccupation()
  {
  return $this->getProperty('hasOccupation');
  }


  /**
      * A pointer to products or services sought by the organization or person
 * (demand).
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
      * A parents of the person.
    * @param Person|array $value
  * @return $this
  */
  public function parents($value)
  {
  $this->setProperty('parents', $value);
  return $this;
  }

  /**
  * @param Person|array $value
  * @return $this
  */
  public function setParents($value)
  {
  $this->setProperty('parents', $value);
  return $this;
  }

  /**
  * @param Person $value
  * @return $this
  */
  public function addParents($value)
  {
  $current = $this->getProperty('parents');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('parents', $current);
  return $this;
  }

  /**
  * @return Person|array
  */
  public function getParents()
  {
  return $this->getProperty('parents');
  }


  /**
      * A parent of this person.
    * @param Person|array $value
  * @return $this
  */
  public function parent($value)
  {
  $this->setProperty('parent', $value);
  return $this;
  }

  /**
  * @param Person|array $value
  * @return $this
  */
  public function setParent($value)
  {
  $this->setProperty('parent', $value);
  return $this;
  }

  /**
  * @param Person $value
  * @return $this
  */
  public function addParent($value)
  {
  $current = $this->getProperty('parent');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('parent', $current);
  return $this;
  }

  /**
  * @return Person|array
  */
  public function getParent()
  {
  return $this->getProperty('parent');
  }


  /**
      * Gender of something, typically a [[Person]], but possibly also fictional
 * characters, animals, etc. While https://schema.org/Male and
 * https://schema.org/Female may be used, text strings are also acceptable for
 * people who are not a binary gender. The [[gender]] property can also be used
 * in an extended sense to cover e.g. the gender of sports teams. As with the
 * gender of individuals, we do not try to enumerate all possibilities. A
 * mixed-gender [[SportsTeam]] can be indicated with a text value of "Mixed".
    * @param string|GenderType|array $value
  * @return $this
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
  * @param string|GenderType $value
  * @return $this
  */
  public function addGender($value)
  {
  $current = $this->getProperty('gender');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('gender', $current);
  return $this;
  }

  /**
  * @return string|GenderType|array
  */
  public function getGender()
  {
  return $this->getProperty('gender');
  }


  /**
      * A contact location for a person's residence.
    * @param Place|ContactPoint|array $value
  * @return $this
  */
  public function homeLocation($value)
  {
  $this->setProperty('homeLocation', $value);
  return $this;
  }

  /**
  * @param Place|ContactPoint|array $value
  * @return $this
  */
  public function setHomeLocation($value)
  {
  $this->setProperty('homeLocation', $value);
  return $this;
  }

  /**
  * @param Place|ContactPoint $value
  * @return $this
  */
  public function addHomeLocation($value)
  {
  $current = $this->getProperty('homeLocation');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('homeLocation', $current);
  return $this;
  }

  /**
  * @return Place|ContactPoint|array
  */
  public function getHomeLocation()
  {
  return $this->getProperty('homeLocation');
  }


  /**
      * The Tax / Fiscal ID of the organization or person, e.g. the TIN in the US or
 * the CIF/NIF in Spain.
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
      * Indicates an OfferCatalog listing for this Organization, Person, or Service.
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
      * The weight of the product or person.
    * @param QuantitativeValue|Mass|array $value
  * @return $this
  */
  public function weight($value)
  {
  $this->setProperty('weight', $value);
  return $this;
  }

  /**
  * @param QuantitativeValue|Mass|array $value
  * @return $this
  */
  public function setWeight($value)
  {
  $this->setProperty('weight', $value);
  return $this;
  }

  /**
  * @param QuantitativeValue|Mass $value
  * @return $this
  */
  public function addWeight($value)
  {
  $current = $this->getProperty('weight');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('weight', $current);
  return $this;
  }

  /**
  * @return QuantitativeValue|Mass|array
  */
  public function getWeight()
  {
  return $this->getProperty('weight');
  }


  /**
      * A [[Grant]] that directly or indirectly provide funding or sponsorship for
 * this item. See also [[ownershipFundingInfo]].
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
      * Email address.
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
      * The place where the person was born.
    * @param Place|array $value
  * @return $this
  */
  public function birthPlace($value)
  {
  $this->setProperty('birthPlace', $value);
  return $this;
  }

  /**
  * @param Place|array $value
  * @return $this
  */
  public function setBirthPlace($value)
  {
  $this->setProperty('birthPlace', $value);
  return $this;
  }

  /**
  * @param Place $value
  * @return $this
  */
  public function addBirthPlace($value)
  {
  $current = $this->getProperty('birthPlace');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('birthPlace', $current);
  return $this;
  }

  /**
  * @return Place|array
  */
  public function getBirthPlace()
  {
  return $this->getProperty('birthPlace');
  }


  /**
      * Of a [[Person]], and less typically of an [[Organization]], to indicate a
 * known language. We do not distinguish skill levels or
 * reading/writing/speaking/signing here. Use language codes from the [IETF BCP
 * 47 standard](http://tools.ietf.org/html/bcp47).
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
      * Certification information about a product, organization, service, place, or
 * person.
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
      * The value-added Tax ID of the organization or person with national prefix
 * (for example IT123456789). Can also be described as [[iso6523Code]] with
 * proper prefix.
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
      * Family name. In the U.S., the last name of a Person.
    * @param string|array $value
  * @return $this
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
  * @param string $value
  * @return $this
  */
  public function addFamilyName($value)
  {
  $current = $this->getProperty('familyName');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('familyName', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getFamilyName()
  {
  return $this->getProperty('familyName');
  }


  /**
      * Awards won by or for this item.
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
      * The number of interactions for the CreativeWork using the WebSite or
 * SoftwareApplication. The most specific child type of InteractionCounter
 * should be used.
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
      * The job title of the person (for example, Financial Manager).
    * @param string|DefinedTerm|array $value
  * @return $this
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
  * @param string|DefinedTerm $value
  * @return $this
  */
  public function addJobTitle($value)
  {
  $current = $this->getProperty('jobTitle');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('jobTitle', $current);
  return $this;
  }

  /**
  * @return string|DefinedTerm|array
  */
  public function getJobTitle()
  {
  return $this->getProperty('jobTitle');
  }


  /**
      * The most generic familial relation.
    * @param Person|array $value
  * @return $this
  */
  public function relatedTo($value)
  {
  $this->setProperty('relatedTo', $value);
  return $this;
  }

  /**
  * @param Person|array $value
  * @return $this
  */
  public function setRelatedTo($value)
  {
  $this->setProperty('relatedTo', $value);
  return $this;
  }

  /**
  * @param Person $value
  * @return $this
  */
  public function addRelatedTo($value)
  {
  $current = $this->getProperty('relatedTo');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('relatedTo', $current);
  return $this;
  }

  /**
  * @return Person|array
  */
  public function getRelatedTo()
  {
  return $this->getProperty('relatedTo');
  }


  /**
      * The person's spouse.
    * @param Person|array $value
  * @return $this
  */
  public function spouse($value)
  {
  $this->setProperty('spouse', $value);
  return $this;
  }

  /**
  * @param Person|array $value
  * @return $this
  */
  public function setSpouse($value)
  {
  $this->setProperty('spouse', $value);
  return $this;
  }

  /**
  * @param Person $value
  * @return $this
  */
  public function addSpouse($value)
  {
  $current = $this->getProperty('spouse');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('spouse', $current);
  return $this;
  }

  /**
  * @return Person|array
  */
  public function getSpouse()
  {
  return $this->getProperty('spouse');
  }


  /**
      * Nationality of the person.
    * @param Country|array $value
  * @return $this
  */
  public function nationality($value)
  {
  $this->setProperty('nationality', $value);
  return $this;
  }

  /**
  * @param Country|array $value
  * @return $this
  */
  public function setNationality($value)
  {
  $this->setProperty('nationality', $value);
  return $this;
  }

  /**
  * @param Country $value
  * @return $this
  */
  public function addNationality($value)
  {
  $current = $this->getProperty('nationality');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('nationality', $current);
  return $this;
  }

  /**
  * @return Country|array
  */
  public function getNationality()
  {
  return $this->getProperty('nationality');
  }


  /**
      * Date of birth.
    * @param mixed $value
  * @return $this
  */
  public function birthDate($value)
  {
  $this->setProperty('birthDate', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function setBirthDate($value)
  {
  $this->setProperty('birthDate', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function addBirthDate($value)
  {
  $current = $this->getProperty('birthDate');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('birthDate', $current);
  return $this;
  }

  /**
  * @return mixed
  */
  public function getBirthDate()
  {
  return $this->getProperty('birthDate');
  }


  /**
      * An Organization (or ProgramMembership) to which this Person or Organization
 * belongs.
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
      * An organization that the person is an alumni of.
    * @param Organization|EducationalOrganization|array $value
  * @return $this
  */
  public function alumniOf($value)
  {
  $this->setProperty('alumniOf', $value);
  return $this;
  }

  /**
  * @param Organization|EducationalOrganization|array $value
  * @return $this
  */
  public function setAlumniOf($value)
  {
  $this->setProperty('alumniOf', $value);
  return $this;
  }

  /**
  * @param Organization|EducationalOrganization $value
  * @return $this
  */
  public function addAlumniOf($value)
  {
  $current = $this->getProperty('alumniOf');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('alumniOf', $current);
  return $this;
  }

  /**
  * @return Organization|EducationalOrganization|array
  */
  public function getAlumniOf()
  {
  return $this->getProperty('alumniOf');
  }


  /**
      * The most generic uni-directional social relation.
    * @param Person|array $value
  * @return $this
  */
  public function follows($value)
  {
  $this->setProperty('follows', $value);
  return $this;
  }

  /**
  * @param Person|array $value
  * @return $this
  */
  public function setFollows($value)
  {
  $this->setProperty('follows', $value);
  return $this;
  }

  /**
  * @param Person $value
  * @return $this
  */
  public function addFollows($value)
  {
  $current = $this->getProperty('follows');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('follows', $current);
  return $this;
  }

  /**
  * @return Person|array
  */
  public function getFollows()
  {
  return $this->getProperty('follows');
  }


  /**
      * A short string listing or describing pronouns for a person. Typically the
 * person concerned is the best authority as pronouns are a critical part of
 * personal identity and expression. Publishers and consumers of this
 * information are reminded to treat this data responsibly, take
 * country-specific laws related to gender expression into account, and be wary
 * of out-of-date data and drawing unwarranted inferences about the person being
 * described.
 * 
 * In English, formulations such as "they/them", "she/her", and "he/him" are
 * commonly used online and can also be used here. We do not intend to enumerate
 * all possible micro-syntaxes in all languages. More structured and
 * well-defined external values for pronouns can be referenced using the
 * [[StructuredValue]] or [[DefinedTerm]] values.
    * @param DefinedTerm|StructuredValue|string|array $value
  * @return $this
  */
  public function pronouns($value)
  {
  $this->setProperty('pronouns', $value);
  return $this;
  }

  /**
  * @param DefinedTerm|StructuredValue|string|array $value
  * @return $this
  */
  public function setPronouns($value)
  {
  $this->setProperty('pronouns', $value);
  return $this;
  }

  /**
  * @param DefinedTerm|StructuredValue|string $value
  * @return $this
  */
  public function addPronouns($value)
  {
  $current = $this->getProperty('pronouns');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('pronouns', $current);
  return $this;
  }

  /**
  * @return DefinedTerm|StructuredValue|string|array
  */
  public function getPronouns()
  {
  return $this->getProperty('pronouns');
  }


  /**
      * A life event like baptism, communions, Bar Mitzvahs, Aqiqah, Namakarana,
 * Miyamairi, burial, ....
    * @param Event|array $value
  * @return $this
  */
  public function lifeEvent($value)
  {
  $this->setProperty('lifeEvent', $value);
  return $this;
  }

  /**
  * @param Event|array $value
  * @return $this
  */
  public function setLifeEvent($value)
  {
  $this->setProperty('lifeEvent', $value);
  return $this;
  }

  /**
  * @param Event $value
  * @return $this
  */
  public function addLifeEvent($value)
  {
  $current = $this->getProperty('lifeEvent');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('lifeEvent', $current);
  return $this;
  }

  /**
  * @return Event|array
  */
  public function getLifeEvent()
  {
  return $this->getProperty('lifeEvent');
  }


  /**
      * The total financial value of the person as calculated by subtracting the
 * total value of liabilities from the total value of assets.
    * @param PriceSpecification|MonetaryAmount|array $value
  * @return $this
  */
  public function netWorth($value)
  {
  $this->setProperty('netWorth', $value);
  return $this;
  }

  /**
  * @param PriceSpecification|MonetaryAmount|array $value
  * @return $this
  */
  public function setNetWorth($value)
  {
  $this->setProperty('netWorth', $value);
  return $this;
  }

  /**
  * @param PriceSpecification|MonetaryAmount $value
  * @return $this
  */
  public function addNetWorth($value)
  {
  $current = $this->getProperty('netWorth');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('netWorth', $current);
  return $this;
  }

  /**
  * @return PriceSpecification|MonetaryAmount|array
  */
  public function getNetWorth()
  {
  return $this->getProperty('netWorth');
  }


  /**
      * An honorific prefix preceding a Person's name such as Dr/Mrs/Mr.
    * @param string|array $value
  * @return $this
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
  * @param string $value
  * @return $this
  */
  public function addHonorificPrefix($value)
  {
  $current = $this->getProperty('honorificPrefix');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('honorificPrefix', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getHonorificPrefix()
  {
  return $this->getProperty('honorificPrefix');
  }


  /**
      * Organizations that the person works for.
    * @param Organization|array $value
  * @return $this
  */
  public function worksFor($value)
  {
  $this->setProperty('worksFor', $value);
  return $this;
  }

  /**
  * @param Organization|array $value
  * @return $this
  */
  public function setWorksFor($value)
  {
  $this->setProperty('worksFor', $value);
  return $this;
  }

  /**
  * @param Organization $value
  * @return $this
  */
  public function addWorksFor($value)
  {
  $current = $this->getProperty('worksFor');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('worksFor', $current);
  return $this;
  }

  /**
  * @return Organization|array
  */
  public function getWorksFor()
  {
  return $this->getProperty('worksFor');
  }


  /**
      * A child of the person.
    * @param Person|array $value
  * @return $this
  */
  public function children($value)
  {
  $this->setProperty('children', $value);
  return $this;
  }

  /**
  * @param Person|array $value
  * @return $this
  */
  public function setChildren($value)
  {
  $this->setProperty('children', $value);
  return $this;
  }

  /**
  * @param Person $value
  * @return $this
  */
  public function addChildren($value)
  {
  $current = $this->getProperty('children');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('children', $current);
  return $this;
  }

  /**
  * @return Person|array
  */
  public function getChildren()
  {
  return $this->getProperty('children');
  }


  /**
      * The brand(s) associated with a product or service, or the brand(s) maintained
 * by an organization or business person.
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
      * A statement of knowledge, skill, ability, task or any other assertion
 * expressing a competency that is either claimed by a person, an organization
 * or desired or required to fulfill a role or to work in an occupation.
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
      * The height of the item.
    * @param QuantitativeValue|Distance|array $value
  * @return $this
  */
  public function height($value)
  {
  $this->setProperty('height', $value);
  return $this;
  }

  /**
  * @param QuantitativeValue|Distance|array $value
  * @return $this
  */
  public function setHeight($value)
  {
  $this->setProperty('height', $value);
  return $this;
  }

  /**
  * @param QuantitativeValue|Distance $value
  * @return $this
  */
  public function addHeight($value)
  {
  $current = $this->getProperty('height');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('height', $current);
  return $this;
  }

  /**
  * @return QuantitativeValue|Distance|array
  */
  public function getHeight()
  {
  return $this->getProperty('height');
  }


  /**
      * A colleague of the person.
    * @param Person|string|array $value
  * @return $this
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
  * @param Person|string $value
  * @return $this
  */
  public function addColleague($value)
  {
  $current = $this->getProperty('colleague');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('colleague', $current);
  return $this;
  }

  /**
  * @return Person|string|array
  */
  public function getColleague()
  {
  return $this->getProperty('colleague');
  }


  /**
      * The fax number.
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
      * The number of completed interactions for this entity, in a particular role
 * (the 'agent'), in a particular action (indicated in the statistic), and in a
 * particular context (i.e. interactionService).
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
      * The International Standard of Industrial Classification of All Economic
 * Activities (ISIC), Revision 4 code for a particular organization, business
 * person, or place.
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
      * The most generic bi-directional social/work relation.
    * @param Person|array $value
  * @return $this
  */
  public function knows($value)
  {
  $this->setProperty('knows', $value);
  return $this;
  }

  /**
  * @param Person|array $value
  * @return $this
  */
  public function setKnows($value)
  {
  $this->setProperty('knows', $value);
  return $this;
  }

  /**
  * @param Person $value
  * @return $this
  */
  public function addKnows($value)
  {
  $current = $this->getProperty('knows');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('knows', $current);
  return $this;
  }

  /**
  * @return Person|array
  */
  public function getKnows()
  {
  return $this->getProperty('knows');
  }


  /**
      * Points-of-Sales operated by the organization or person.
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
      * An organization that this person is affiliated with. For example, a
 * school/university, a club, or a team.
    * @param Organization|array $value
  * @return $this
  */
  public function affiliation($value)
  {
  $this->setProperty('affiliation', $value);
  return $this;
  }

  /**
  * @param Organization|array $value
  * @return $this
  */
  public function setAffiliation($value)
  {
  $this->setProperty('affiliation', $value);
  return $this;
  }

  /**
  * @param Organization $value
  * @return $this
  */
  public function addAffiliation($value)
  {
  $current = $this->getProperty('affiliation');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('affiliation', $current);
  return $this;
  }

  /**
  * @return Organization|array
  */
  public function getAffiliation()
  {
  return $this->getProperty('affiliation');
  }


  /**
      * Things owned by the organization or person.
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


}
