<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;

/**
* A WebSite is a set of related web pages and other items typically served from a single web domain and accessible via URLs.
* @see http://schema.org/WebSite
* @package Sohophp\SchemaOrg\Thing\CreativeWork

*
*/
class WebSite extends CreativeWork
{

    /**
    * The International Standard Serial Number (ISSN) that identifies this serial publication. You can repeat this property to identify different formats of, or the linking ISSN (ISSN-L) for, this serial publication.
    * @param string|array $value
    * @return $this
    */
    public function issn(?string $value)
    {
        $this->setProperty('issn', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setIssn(?string $value)
    {
        $this->setProperty('issn', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getIssn()
    {
       return $this->getProperty('issn');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\CreativeWork\\WebSite','Thing\\WebSite');

