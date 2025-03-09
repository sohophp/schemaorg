<?php
namespace Sohophp\SchemaOrg;

use Sohophp\SchemaOrg\BaseType;

/**
* The most generic type of item.
* @see schema:Thing
* @package Sohophp\SchemaOrg
*/
class Thing extends BaseType
{
   /**
        * An image of the item. This can be a [[URL]] or a fully described [[ImageObject]].
        */
    protected $image = null;

   /**
        * The identifier property represents any kind of identifier for any kind of [[Thing]], such as ISBNs, GTIN codes, UUIDs etc. Schema.org provides dedicated properties for representing many of these, either as textual strings or as URL (URI) links. See [background notes](/docs/datamodel.html#identifierBg) for more details.
        
        */
    protected $identifier = null;

   /**
        * An additional type for the item, typically used for adding more specific types from external vocabularies in microdata syntax. This is a relationship between something and a class that the thing is in. Typically the value is a URI-identified RDF class, and in this case corresponds to the
    use of rdf:type in RDF. Text values can be used sparingly, for cases where useful information can be added without their being an appropriate schema to reference. In the case of text values, the class label should follow the schema.org <a href="https://schema.org/docs/styleguide.html">style guide</a>.
        */
    protected $additionalType = null;

   /**
        * The name of the item.
        */
    protected $name = null;

   /**
        * Indicates a page (or other CreativeWork) for which this thing is the main entity being described. See [background notes](/docs/datamodel.html#mainEntityBackground) for details.
        */
    protected $mainEntityOfPage = null;

   /**
        * A sub property of description. A short description of the item used to disambiguate from other, similar items. Information from other properties (in particular, name) may be necessary for the description to be useful for disambiguation.
        */
    protected $disambiguatingDescription = null;

   /**
        * URL of a reference Web page that unambiguously indicates the item's identity. E.g. the URL of the item's Wikipedia page, Wikidata entry, or official website.
        */
    protected $sameAs = null;

   /**
        * URL of the item.
        */
    protected $url = null;

   /**
        * A CreativeWork or Event about this Thing.
        */
    protected $subjectOf = null;

   /**
        * An alias for the item.
        */
    protected $alternateName = null;

   /**
        * Indicates a potential Action, which describes an idealized action in which this thing would play an 'object' role.
        */
    protected $potentialAction = null;

   /**
        * A description of the item.
        */
    protected $description = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setImage($value)
    {
        $this->setProperty('image', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getImage()
    {
       return $this->getProperty('image');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setIdentifier($value)
    {
        $this->setProperty('identifier', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getIdentifier()
    {
       return $this->getProperty('identifier');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setAdditionalType($value)
    {
        $this->setProperty('additionalType', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAdditionalType()
    {
       return $this->getProperty('additionalType');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setName($value)
    {
        $this->setProperty('name', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getName()
    {
       return $this->getProperty('name');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setMainEntityOfPage($value)
    {
        $this->setProperty('mainEntityOfPage', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getMainEntityOfPage()
    {
       return $this->getProperty('mainEntityOfPage');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setDisambiguatingDescription($value)
    {
        $this->setProperty('disambiguatingDescription', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDisambiguatingDescription()
    {
       return $this->getProperty('disambiguatingDescription');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setSameAs($value)
    {
        $this->setProperty('sameAs', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSameAs()
    {
       return $this->getProperty('sameAs');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setUrl($value)
    {
        $this->setProperty('url', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getUrl()
    {
       return $this->getProperty('url');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setSubjectOf($value)
    {
        $this->setProperty('subjectOf', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSubjectOf()
    {
       return $this->getProperty('subjectOf');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setAlternateName($value)
    {
        $this->setProperty('alternateName', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAlternateName()
    {
       return $this->getProperty('alternateName');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setPotentialAction($value)
    {
        $this->setProperty('potentialAction', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPotentialAction()
    {
       return $this->getProperty('potentialAction');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setDescription($value)
    {
        $this->setProperty('description', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDescription()
    {
       return $this->getProperty('description');
    }


}
