<?php
namespace Sohophp\SchemaOrg\Thing\Organization\LocalBusiness;

use Sohophp\SchemaOrg\Thing\Organization\LocalBusiness;
use Sohophp\SchemaOrg\Thing\CreativeWork\ArchiveComponent;

/**
* An organization with archival holdings. An organization which keeps and preserves archival material and typically makes it accessible to the public.
* @see http://schema.org/ArchiveOrganization
* @package Sohophp\SchemaOrg\Thing\Organization\LocalBusiness

*
*/
class ArchiveOrganization extends LocalBusiness
{

    /**
    * Collection, <a href="https://en.wikipedia.org/wiki/Fonds">fonds</a>, or item held, kept or maintained by an <a class="localLink" href="http://schema.org/ArchiveOrganization">ArchiveOrganization</a>.
    * @param ArchiveComponent|array|string $value
    * @return $this
    * @deprecated use setArchiveHeld
    */
    public function archiveHeld($value)
    {
        $this->setProperty('archiveHeld', $value);
        return $this;
    }
   /**
    * @param ArchiveComponent|array|string $value
    * @return $this
    */
    public function setArchiveHeld($value)
    {
        $this->setProperty('archiveHeld', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getArchiveHeld()
    {
       return $this->getProperty('archiveHeld');
    }


}
