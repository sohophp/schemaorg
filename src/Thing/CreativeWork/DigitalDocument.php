<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;

/**
* An electronic file or document.
* @see schema:DigitalDocument
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class DigitalDocument extends CreativeWork
{
   /**
        * A permission related to the access to this document (e.g. permission to read or write an electronic document). For a public document, specify a grantee with an Audience with audienceType equal to "public".
        */
    protected $hasDigitalDocumentPermission = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setHasDigitalDocumentPermission($value)
    {
        $this->setProperty('hasDigitalDocumentPermission', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getHasDigitalDocumentPermission()
    {
       return $this->getProperty('hasDigitalDocumentPermission');
    }


}
