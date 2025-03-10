<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;

/**
* A WebSite is a set of related web pages and other items typically served from
 * a single web domain and accessible via URLs.
* @see schema:WebSite
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class WebSite extends CreativeWork
{


    /**
        * The International Standard Serial Number (ISSN) that identifies this serial
 * publication. You can repeat this property to identify different formats of,
 * or the linking ISSN (ISSN-L) for, this serial publication.
        * @param array|string|mixed $value
    * @return $this
    */
    public function issn($value)
    {
        $this->setProperty('issn', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setIssn($value)
    {
        $this->setProperty('issn', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getIssn()
    {
       return $this->getProperty('issn');
    }


}
