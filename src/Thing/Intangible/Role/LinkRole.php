<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\Role;

use Sohophp\SchemaOrg\Thing\Intangible\Role;
use Sohophp\SchemaOrg\Thing\Intangible\Language;

/**
* A Role that represents a Web link e.g. as expressed via the 'url' property.
 * Its linkRelationship property can indicate URL-based and plain textual link
 * types e.g. those in IANA link registry or others such as 'amphtml'. This
 * structure provides a placeholder where details from HTML's link element can
 * be represented outside of HTML, e.g. in JSON-LD feeds.
* @see http://schema.org/LinkRole
* @package Sohophp\SchemaOrg\Thing\Intangible\Role
*/
class LinkRole extends Role
{


    /**
        * The language of the content or performance or used in an action. Please use
 * one of the language codes from the [IETF BCP 47
 * standard](http://tools.ietf.org/html/bcp47). See also [[availableLanguage]].
        * @param Language|string|array|mixed $value
    * @return $this
    */
    public function inLanguage($value)
    {
        $this->setProperty('inLanguage', $value);
        return $this;
    }

    /**
    * @param Language|string|array|mixed $value
    * @return $this
    */
    public function setInLanguage($value)
    {
        $this->setProperty('inLanguage', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getInLanguage()
    {
       return $this->getProperty('inLanguage');
    }


    /**
        * Indicates the relationship type of a Web link.
        * @param string|array|mixed $value
    * @return $this
    */
    public function linkRelationship($value)
    {
        $this->setProperty('linkRelationship', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setLinkRelationship($value)
    {
        $this->setProperty('linkRelationship', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getLinkRelationship()
    {
       return $this->getProperty('linkRelationship');
    }


}
