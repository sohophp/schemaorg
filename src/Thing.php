<?php declare(strict_types=1);
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
*/
class Thing extends BaseType
{

    /**
    * URL of a reference Web page that unambiguously indicates the item's identity. E.g. the URL of the item's Wikipedia page, Wikidata entry, or official website.
    * @param string $value
    * @return $this
    */
    public function sameAs(?string $value)
    {
        $this->setProperty('sameAs', $value);
        return $this;
    }

    /**
    * URL of the item.
    * @param string $value
    * @return $this
    */
    public function url(?string $value)
    {
        $this->setProperty('url', $value);
        return $this;
    }

    /**
    * An alias for the item.
    * @param string $value
    * @return $this
    */
    public function alternateName(?string $value)
    {
        $this->setProperty('alternateName', $value);
        return $this;
    }

    /**
    * An image of the item. This can be a <a class="localLink" href="http://schema.org/URL">URL</a> or a fully described <a class="localLink" href="http://schema.org/ImageObject">ImageObject</a>.
    * @param ImageObject|string $value
    * @return $this
    */
    public function image($value)
    {
        $this->setProperty('image', $value);
        return $this;
    }

    /**
    * An additional type for the item, typically used for adding more specific types from external vocabularies in microdata syntax. This is a relationship between something and a class that the thing is in. In RDFa syntax, it is better to use the native RDFa syntax - the 'typeof' attribute - for multiple types. Schema.org tools may have only weaker understanding of extra types, in particular those defined externally.
    * @param string $value
    * @return $this
    */
    public function additionalType(?string $value)
    {
        $this->setProperty('additionalType', $value);
        return $this;
    }

    /**
    * The name of the item.
    * @param string $value
    * @return $this
    */
    public function name(?string $value)
    {
        $this->setProperty('name', $value);
        return $this;
    }

    /**
    * The identifier property represents any kind of identifier for any kind of <a class="localLink" href="http://schema.org/Thing">Thing</a>, such as ISBNs, GTIN codes, UUIDs etc. Schema.org provides dedicated properties for representing many of these, either as textual strings or as URL (URI) links. See <a href="/docs/datamodel.html#identifierBg">background notes</a> for more details.
    * @param PropertyValue|string|string $value
    * @return $this
    */
    public function identifier($value)
    {
        $this->setProperty('identifier', $value);
        return $this;
    }

    /**
    * A CreativeWork or Event about this Thing.
    * @param CreativeWork|Event $value
    * @return $this
    */
    public function subjectOf($value)
    {
        $this->setProperty('subjectOf', $value);
        return $this;
    }

    /**
    * Indicates a potential Action, which describes an idealized action in which this thing would play an 'object' role.
    * @param Action $value
    * @return $this
    */
    public function potentialAction(?Action $value)
    {
        $this->setProperty('potentialAction', $value);
        return $this;
    }

    /**
    * Indicates a page (or other CreativeWork) for which this thing is the main entity being described. See <a href="/docs/datamodel.html#mainEntityBackground">background notes</a> for details.
    * @param CreativeWork|string $value
    * @return $this
    */
    public function mainEntityOfPage($value)
    {
        $this->setProperty('mainEntityOfPage', $value);
        return $this;
    }

    /**
    * A sub property of description. A short description of the item used to disambiguate from other, similar items. Information from other properties (in particular, name) may be necessary for the description to be useful for disambiguation.
    * @param string $value
    * @return $this
    */
    public function disambiguatingDescription(?string $value)
    {
        $this->setProperty('disambiguatingDescription', $value);
        return $this;
    }

    /**
    * A description of the item.
    * @param string $value
    * @return $this
    */
    public function description(?string $value)
    {
        $this->setProperty('description', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing','Thing\\Thing');

