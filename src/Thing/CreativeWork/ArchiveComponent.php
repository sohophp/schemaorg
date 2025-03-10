<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress;
use Sohophp\SchemaOrg\Thing\Place;
use Sohophp\SchemaOrg\Thing\Organization\LocalBusiness\ArchiveOrganization;

/**
* An intangible type to be applied to any archive content, carrying with it a
 * set of properties required to describe archival items and collections.
* @see http://schema.org/ArchiveComponent
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class ArchiveComponent extends CreativeWork
{


    /**
        * Current location of the item.
        * @param PostalAddress|Place|string|array|mixed $value
    * @return $this
    */
    public function itemLocation($value)
    {
        $this->setProperty('itemLocation', $value);
        return $this;
    }

    /**
    * @param PostalAddress|Place|string|array|mixed $value
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
        * [[ArchiveOrganization]] that holds, keeps or maintains the
 * [[ArchiveComponent]].
        * @param ArchiveOrganization|array|string|mixed $value
    * @return $this
    */
    public function holdingArchive($value)
    {
        $this->setProperty('holdingArchive', $value);
        return $this;
    }

    /**
    * @param ArchiveOrganization|array|string|mixed $value
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
