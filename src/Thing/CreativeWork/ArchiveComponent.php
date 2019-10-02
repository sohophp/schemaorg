<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress;
use Sohophp\SchemaOrg\Thing\Place;
use Sohophp\SchemaOrg\Thing\Organization\LocalBusiness\ArchiveOrganization;

/**
* An intangible type to be applied to any archive content, carrying with it a set of properties required to describe archival items and collections.
* @see http://schema.org/ArchiveComponent
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class ArchiveComponent extends CreativeWork
{

    /**
    * Current location of the item.
    * @param PostalAddress|Place|string $value
    * @return $this
    */
    public function itemLocation($value)
    {
        $this->setProperty('itemLocation', $value);
        return $this;
    }

    /**
    * <a class="localLink" href="http://schema.org/ArchiveOrganization">ArchiveOrganization</a> that holds, keeps or maintains the <a class="localLink" href="http://schema.org/ArchiveComponent">ArchiveComponent</a>.
    * @param ArchiveOrganization $value
    * @return $this
    */
    public function holdingArchive(?ArchiveOrganization $value)
    {
        $this->setProperty('holdingArchive', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\CreativeWork\\ArchiveComponent','Thing\\ArchiveComponent');

