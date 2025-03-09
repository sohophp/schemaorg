<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;

/**
* An intangible type to be applied to any archive content, carrying with it a set of properties required to describe archival items and collections.
* @see schema:ArchiveComponent
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class ArchiveComponent extends CreativeWork
{
   /**
        * Current location of the item.
        */
    protected $itemLocation = null;

   /**
        * [[ArchiveOrganization]] that holds, keeps or maintains the [[ArchiveComponent]].
        */
    protected $holdingArchive = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setItemLocation($value)
    {
        $this->setProperty('itemLocation', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getItemLocation()
    {
       return $this->getProperty('itemLocation');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setHoldingArchive($value)
    {
        $this->setProperty('holdingArchive', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getHoldingArchive()
    {
       return $this->getProperty('holdingArchive');
    }


}
