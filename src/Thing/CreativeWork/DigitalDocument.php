<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\Intangible\DigitalDocumentPermission;

/**
* An electronic file or document.
* @see http://schema.org/DigitalDocument
* @package Sohophp\SchemaOrg\Thing\CreativeWork

*
*/
class DigitalDocument extends CreativeWork
{

    /**
    * A permission related to the access to this document (e.g. permission to read or write an electronic document). For a public document, specify a grantee with an Audience with audienceType equal to "public".
    * @param DigitalDocumentPermission|array $value
    * @return $this
    */
    public function hasDigitalDocumentPermission(?DigitalDocumentPermission $value)
    {
        $this->setProperty('hasDigitalDocumentPermission', $value);
        return $this;
    }
   /**
    * @param DigitalDocumentPermission|array $value
    * @return $this
    */
    public function setHasDigitalDocumentPermission(?DigitalDocumentPermission $value)
    {
        $this->setProperty('hasDigitalDocumentPermission', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getHasDigitalDocumentPermission()
    {
       return $this->getProperty('hasDigitalDocumentPermission');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\CreativeWork\\DigitalDocument','Thing\\DigitalDocument');

