<?php
namespace Sohophp\SchemaOrg;

use Sohophp\SchemaOrg\BaseType;
use Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject\ImageObject;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PropertyValue;
use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\Event;
use Sohophp\SchemaOrg\Thing\Action;

/**
* The most generic type of item.
* @see http://schema.org/Thing
* @package Sohophp\SchemaOrg

*
*/
class Thing extends BaseType
{

    /**
    * URL of a reference Web page that unambiguously indicates the item's identity. E.g. the URL of the item's Wikipedia page, Wikidata entry, or official website.
    * @param string|array $value
    * @return $this
    * @deprecated use setSameAs
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
    * @return $this|string|array
    */
    public function getSameAs()
    {
       return $this->getProperty('sameAs');
    }

    /**
    * URL of the item.
    * @param string|array $value
    * @return $this
    * @deprecated use setUrl
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
    * @return $this|string|array
    */
    public function getUrl()
    {
       return $this->getProperty('url');
    }

    /**
    * An alias for the item.
    * @param string|array $value
    * @return $this
    * @deprecated use setAlternateName
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
    * @return $this|string|array
    */
    public function getAlternateName()
    {
       return $this->getProperty('alternateName');
    }

    /**
    * An image of the item. This can be a <a class="localLink" href="http://schema.org/URL">URL</a> or a fully described <a class="localLink" href="http://schema.org/ImageObject">ImageObject</a>.
    * @param ImageObject|string|array $value
    * @return $this
    * @deprecated use setImage
    */
    public function image($value)
    {
        $this->setProperty('image', $value);
        return $this;
    }
   /**
    * @param ImageObject|string|array $value
    * @return $this
    */
    public function setImage($value)
    {
        $this->setProperty('image', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getImage()
    {
       return $this->getProperty('image');
    }

    /**
    * An additional type for the item, typically used for adding more specific types from external vocabularies in microdata syntax. This is a relationship between something and a class that the thing is in. In RDFa syntax, it is better to use the native RDFa syntax - the 'typeof' attribute - for multiple types. Schema.org tools may have only weaker understanding of extra types, in particular those defined externally.
    * @param string|array $value
    * @return $this
    * @deprecated use setAdditionalType
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
    * @return $this|string|array
    */
    public function getAdditionalType()
    {
       return $this->getProperty('additionalType');
    }

    /**
    * The name of the item.
    * @param string|array $value
    * @return $this
    * @deprecated use setName
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
    * @return $this|string|array
    */
    public function getName()
    {
       return $this->getProperty('name');
    }

    /**
    * The identifier property represents any kind of identifier for any kind of <a class="localLink" href="http://schema.org/Thing">Thing</a>, such as ISBNs, GTIN codes, UUIDs etc. Schema.org provides dedicated properties for representing many of these, either as textual strings or as URL (URI) links. See <a href="/docs/datamodel.html#identifierBg">background notes</a> for more details.
    * @param PropertyValue|string|string|array $value
    * @return $this
    * @deprecated use setIdentifier
    */
    public function identifier($value)
    {
        $this->setProperty('identifier', $value);
        return $this;
    }
   /**
    * @param PropertyValue|string|string|array $value
    * @return $this
    */
    public function setIdentifier($value)
    {
        $this->setProperty('identifier', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getIdentifier()
    {
       return $this->getProperty('identifier');
    }

    /**
    * A CreativeWork or Event about this Thing.
    * @param CreativeWork|Event|array|string $value
    * @return $this
    * @deprecated use setSubjectOf
    */
    public function subjectOf($value)
    {
        $this->setProperty('subjectOf', $value);
        return $this;
    }
   /**
    * @param CreativeWork|Event|array|string $value
    * @return $this
    */
    public function setSubjectOf($value)
    {
        $this->setProperty('subjectOf', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getSubjectOf()
    {
       return $this->getProperty('subjectOf');
    }

    /**
    * Indicates a potential Action, which describes an idealized action in which this thing would play an 'object' role.
    * @param Action|array|string $value
    * @return $this
    * @deprecated use setPotentialAction
    */
    public function potentialAction($value)
    {
        $this->setProperty('potentialAction', $value);
        return $this;
    }
   /**
    * @param Action|array|string $value
    * @return $this
    */
    public function setPotentialAction($value)
    {
        $this->setProperty('potentialAction', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getPotentialAction()
    {
       return $this->getProperty('potentialAction');
    }

    /**
    * Indicates a page (or other CreativeWork) for which this thing is the main entity being described. See <a href="/docs/datamodel.html#mainEntityBackground">background notes</a> for details.
    * @param CreativeWork|string|array $value
    * @return $this
    * @deprecated use setMainEntityOfPage
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
    * @return $this|string|array
    */
    public function getMainEntityOfPage()
    {
       return $this->getProperty('mainEntityOfPage');
    }

    /**
    * A sub property of description. A short description of the item used to disambiguate from other, similar items. Information from other properties (in particular, name) may be necessary for the description to be useful for disambiguation.
    * @param string|array $value
    * @return $this
    * @deprecated use setDisambiguatingDescription
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
    * @return $this|string|array
    */
    public function getDisambiguatingDescription()
    {
       return $this->getProperty('disambiguatingDescription');
    }

    /**
    * A description of the item.
    * @param string|array $value
    * @return $this
    * @deprecated use setDescription
    */
    public function description($value)
    {
        $this->setProperty('description', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setDescription($value)
    {
        $this->setProperty('description', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getDescription()
    {
       return $this->getProperty('description');
    }


}
