<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\Role;

use Sohophp\SchemaOrg\Thing\Intangible\Role;
use Sohophp\SchemaOrg\Thing\Intangible\Language;

/**
* A Role that represents a Web link e.g. as expressed via the 'url' property. Its linkRelationship property can indicate URL-based and plain textual link types e.g. those in IANA link registry or others such as 'amphtml'. This structure provides a placeholder where details from HTML's link element can be represented outside of HTML, e.g. in JSON-LD feeds.
* @see http://schema.org/LinkRole
* @package Sohophp\SchemaOrg\Thing\Intangible\Role

*
*/
class LinkRole extends Role
{

    /**
    * The language of the content or performance or used in an action. Please use one of the language codes from the <a href="http://tools.ietf.org/html/bcp47">IETF BCP 47 standard</a>. See also <a class="localLink" href="http://schema.org/availableLanguage">availableLanguage</a>.
    * @param Language|string|array $value
    * @return $this
    * @deprecated use setInLanguage
    */
    public function inLanguage($value)
    {
        $this->setProperty('inLanguage', $value);
        return $this;
    }
   /**
    * @param Language|string|array $value
    * @return $this
    */
    public function setInLanguage($value)
    {
        $this->setProperty('inLanguage', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getInLanguage()
    {
       return $this->getProperty('inLanguage');
    }

    /**
    * Indicates the relationship type of a Web link.
    * @param string|array $value
    * @return $this
    * @deprecated use setLinkRelationship
    */
    public function linkRelationship($value)
    {
        $this->setProperty('linkRelationship', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setLinkRelationship($value)
    {
        $this->setProperty('linkRelationship', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getLinkRelationship()
    {
       return $this->getProperty('linkRelationship');
    }


}
