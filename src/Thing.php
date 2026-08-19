<?php
namespace Sohophp\SchemaOrg;

  use Sohophp\SchemaOrg\BaseType;
  use Sohophp\SchemaOrg\Thing\Action;
  use Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject\ImageObject;
  use Sohophp\SchemaOrg\Thing\Organization;
  use Sohophp\SchemaOrg\Thing\Person;
  use Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject\TextObject;
  use Sohophp\SchemaOrg\Thing\Event;
  use Sohophp\SchemaOrg\Thing\CreativeWork;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PropertyValue;

/**
  * The most generic type of item.
  * @see schema:Thing
* @package Sohophp\SchemaOrg
*/
class Thing extends BaseType
{


  /**
      * Indicates a potential Action, which describes an idealized action in which
 * this thing would play an 'object' role.
    * @param Action|array $value
  * @return $this
  */
  public function potentialAction($value)
  {
  $this->setProperty('potentialAction', $value);
  return $this;
  }

  /**
  * @param Action|array $value
  * @return $this
  */
  public function setPotentialAction($value)
  {
  $this->setProperty('potentialAction', $value);
  return $this;
  }

  /**
  * @param Action $value
  * @return $this
  */
  public function addPotentialAction($value)
  {
  $current = $this->getProperty('potentialAction');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('potentialAction', $current);
  return $this;
  }

  /**
  * @return Action|array
  */
  public function getPotentialAction()
  {
  return $this->getProperty('potentialAction');
  }


  /**
      * An image of the item. This can be a [[URL]] or a fully described
 * [[ImageObject]].
    * @param string|ImageObject|array $value
  * @return $this
  */
  public function image($value)
  {
  $this->setProperty('image', $value);
  return $this;
  }

  /**
  * @param string|ImageObject|array $value
  * @return $this
  */
  public function setImage($value)
  {
  $this->setProperty('image', $value);
  return $this;
  }

  /**
  * @param string|ImageObject $value
  * @return $this
  */
  public function addImage($value)
  {
  $current = $this->getProperty('image');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('image', $current);
  return $this;
  }

  /**
  * @return string|ImageObject|array
  */
  public function getImage()
  {
  return $this->getProperty('image');
  }


  /**
      * URL of a reference Web page that unambiguously indicates the item's identity.
 * E.g. the URL of the item's Wikipedia page, Wikidata entry, or official
 * website.
    * @param string|array $value
  * @return $this
  */
  public function sameAs($value)
  {
  $this->setProperty('sameAs', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setSameAs($value)
  {
  $this->setProperty('sameAs', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addSameAs($value)
  {
  $current = $this->getProperty('sameAs');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('sameAs', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getSameAs()
  {
  return $this->getProperty('sameAs');
  }


  /**
      * A person or organization who owns this Thing.
    * @param Organization|Person|array $value
  * @return $this
  */
  public function owner($value)
  {
  $this->setProperty('owner', $value);
  return $this;
  }

  /**
  * @param Organization|Person|array $value
  * @return $this
  */
  public function setOwner($value)
  {
  $this->setProperty('owner', $value);
  return $this;
  }

  /**
  * @param Organization|Person $value
  * @return $this
  */
  public function addOwner($value)
  {
  $current = $this->getProperty('owner');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('owner', $current);
  return $this;
  }

  /**
  * @return Organization|Person|array
  */
  public function getOwner()
  {
  return $this->getProperty('owner');
  }


  /**
      * A description of the item.
    * @param TextObject|string|array $value
  * @return $this
  */
  public function description($value)
  {
  $this->setProperty('description', $value);
  return $this;
  }

  /**
  * @param TextObject|string|array $value
  * @return $this
  */
  public function setDescription($value)
  {
  $this->setProperty('description', $value);
  return $this;
  }

  /**
  * @param TextObject|string $value
  * @return $this
  */
  public function addDescription($value)
  {
  $current = $this->getProperty('description');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('description', $current);
  return $this;
  }

  /**
  * @return TextObject|string|array
  */
  public function getDescription()
  {
  return $this->getProperty('description');
  }


  /**
      * A CreativeWork or Event about this Thing.
    * @param Event|CreativeWork|array $value
  * @return $this
  */
  public function subjectOf($value)
  {
  $this->setProperty('subjectOf', $value);
  return $this;
  }

  /**
  * @param Event|CreativeWork|array $value
  * @return $this
  */
  public function setSubjectOf($value)
  {
  $this->setProperty('subjectOf', $value);
  return $this;
  }

  /**
  * @param Event|CreativeWork $value
  * @return $this
  */
  public function addSubjectOf($value)
  {
  $current = $this->getProperty('subjectOf');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('subjectOf', $current);
  return $this;
  }

  /**
  * @return Event|CreativeWork|array
  */
  public function getSubjectOf()
  {
  return $this->getProperty('subjectOf');
  }


  /**
      * URL of the item.
    * @param string|array $value
  * @return $this
  */
  public function url($value)
  {
  $this->setProperty('url', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setUrl($value)
  {
  $this->setProperty('url', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addUrl($value)
  {
  $current = $this->getProperty('url');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('url', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getUrl()
  {
  return $this->getProperty('url');
  }


  /**
      * An additional type for the item, typically used for adding more specific
 * types from external vocabularies in microdata syntax. This is a relationship
 * between something and a class that the thing is in. Typically the value is a
 * URI-identified RDF class, and in this case corresponds to the
 *     use of rdf:type in RDF. Text values can be used sparingly, for cases
 * where useful information can be added without their being an appropriate
 * schema to reference. In the case of text values, the class label should
 * follow the schema.org [style guide](https://schema.org/docs/styleguide.html).
    * @param string|array $value
  * @return $this
  */
  public function additionalType($value)
  {
  $this->setProperty('additionalType', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setAdditionalType($value)
  {
  $this->setProperty('additionalType', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addAdditionalType($value)
  {
  $current = $this->getProperty('additionalType');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('additionalType', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getAdditionalType()
  {
  return $this->getProperty('additionalType');
  }


  /**
      * A sub property of description. A short description of the item used to
 * disambiguate from other, similar items. Information from other properties (in
 * particular, name) may be necessary for the description to be useful for
 * disambiguation.
    * @param string|array $value
  * @return $this
  */
  public function disambiguatingDescription($value)
  {
  $this->setProperty('disambiguatingDescription', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setDisambiguatingDescription($value)
  {
  $this->setProperty('disambiguatingDescription', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addDisambiguatingDescription($value)
  {
  $current = $this->getProperty('disambiguatingDescription');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('disambiguatingDescription', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getDisambiguatingDescription()
  {
  return $this->getProperty('disambiguatingDescription');
  }


  /**
      * An alias for the item.
    * @param string|array $value
  * @return $this
  */
  public function alternateName($value)
  {
  $this->setProperty('alternateName', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setAlternateName($value)
  {
  $this->setProperty('alternateName', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addAlternateName($value)
  {
  $current = $this->getProperty('alternateName');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('alternateName', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getAlternateName()
  {
  return $this->getProperty('alternateName');
  }


  /**
      * The name of the item.
    * @param string|array $value
  * @return $this
  */
  public function name($value)
  {
  $this->setProperty('name', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setName($value)
  {
  $this->setProperty('name', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addName($value)
  {
  $current = $this->getProperty('name');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('name', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getName()
  {
  return $this->getProperty('name');
  }


  /**
      * The identifier property represents any kind of identifier for any kind of
 * [[Thing]], such as ISBNs, GTIN codes, UUIDs etc. Schema.org provides
 * dedicated properties for representing many of these, either as textual
 * strings or as URL (URI) links. See [background
 * notes](/docs/datamodel.html#identifierBg) for more details.
    * @param string|PropertyValue|array $value
  * @return $this
  */
  public function identifier($value)
  {
  $this->setProperty('identifier', $value);
  return $this;
  }

  /**
  * @param string|PropertyValue|array $value
  * @return $this
  */
  public function setIdentifier($value)
  {
  $this->setProperty('identifier', $value);
  return $this;
  }

  /**
  * @param string|PropertyValue $value
  * @return $this
  */
  public function addIdentifier($value)
  {
  $current = $this->getProperty('identifier');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('identifier', $current);
  return $this;
  }

  /**
  * @return string|PropertyValue|array
  */
  public function getIdentifier()
  {
  return $this->getProperty('identifier');
  }


  /**
      * Indicates a page (or other CreativeWork) for which this thing is the main
 * entity being described. See [background
 * notes](/docs/datamodel.html#mainEntityBackground) for details.
    * @param CreativeWork|string|array $value
  * @return $this
  */
  public function mainEntityOfPage($value)
  {
  $this->setProperty('mainEntityOfPage', $value);
  return $this;
  }

  /**
  * @param CreativeWork|string|array $value
  * @return $this
  */
  public function setMainEntityOfPage($value)
  {
  $this->setProperty('mainEntityOfPage', $value);
  return $this;
  }

  /**
  * @param CreativeWork|string $value
  * @return $this
  */
  public function addMainEntityOfPage($value)
  {
  $current = $this->getProperty('mainEntityOfPage');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('mainEntityOfPage', $current);
  return $this;
  }

  /**
  * @return CreativeWork|string|array
  */
  public function getMainEntityOfPage()
  {
  return $this->getProperty('mainEntityOfPage');
  }


}
