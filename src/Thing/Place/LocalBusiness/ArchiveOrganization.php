<?php
namespace Sohophp\SchemaOrg\Thing\Place\LocalBusiness;

use Sohophp\SchemaOrg\Thing\Place\LocalBusiness;

/**
* An organization with archival holdings. An organization which keeps and preserves archival material and typically makes it accessible to the public.
* @see schema:ArchiveOrganization
* @package Sohophp\SchemaOrg\Thing\Place\LocalBusiness
*/
class ArchiveOrganization extends LocalBusiness
{
   /**
        * Collection, [fonds](https://en.wikipedia.org/wiki/Fonds), or item held, kept or maintained by an [[ArchiveOrganization]].
        */
    protected $archiveHeld = null;


    /**
    * @param array|string $value
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
