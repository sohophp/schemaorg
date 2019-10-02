<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Intangible\Role;

use Sohophp\SchemaOrg\Thing\Intangible\Role;
use Sohophp\SchemaOrg\Thing\Intangible\Language;

/**
* A Role that represents a Web link e.g. as expressed via the 'url' property. Its linkRelationship property can indicate URL-based and plain textual link types e.g. those in IANA link registry or others such as 'amphtml'. This structure provides a placeholder where details from HTML's link element can be represented outside of HTML, e.g. in JSON-LD feeds.
* @see http://schema.org/LinkRole
* @package Sohophp\SchemaOrg\Thing\Intangible\Role
*/
class LinkRole extends Role
{

    /**
    * The language of the content or performance or used in an action. Please use one of the language codes from the <a href="http://tools.ietf.org/html/bcp47">IETF BCP 47 standard</a>. See also <a class="localLink" href="http://schema.org/availableLanguage">availableLanguage</a>.
    * @param Language|string $value
    * @return $this
    */
    public function inLanguage($value)
    {
        $this->setProperty('inLanguage', $value);
        return $this;
    }

    /**
    * Indicates the relationship type of a Web link.
    * @param string $value
    * @return $this
    */
    public function linkRelationship(?string $value)
    {
        $this->setProperty('linkRelationship', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\Role\\LinkRole','Thing\\LinkRole');

