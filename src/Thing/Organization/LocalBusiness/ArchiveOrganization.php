<?php
namespace Sohophp\SchemaOrg\Thing\Organization\LocalBusiness;

use Sohophp\SchemaOrg\Thing\Organization\LocalBusiness;
use Sohophp\SchemaOrg\Thing\CreativeWork\ArchiveComponent;

/**
* An organization with archival holdings. An organization which keeps and
 * preserves archival material and typically makes it accessible to the public.
* @see http://schema.org/ArchiveOrganization
* @package Sohophp\SchemaOrg\Thing\Organization\LocalBusiness
*/
class ArchiveOrganization extends LocalBusiness
{


    /**
        * Collection, [fonds](https://en.wikipedia.org/wiki/Fonds), or item held, kept
 * or maintained by an [[ArchiveOrganization]].
        * @param ArchiveComponent|array|string|mixed $value
    * @return $this
    */
    public function archiveHeld($value)
    {
        $this->setProperty('archiveHeld', $value);
        return $this;
    }

    /**
    * @param ArchiveComponent|array|string|mixed $value
    * @return $this
    */
    public function setArchiveHeld($value)
    {
        $this->setProperty('archiveHeld', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getArchiveHeld()
    {
       return $this->getProperty('archiveHeld');
    }


}
