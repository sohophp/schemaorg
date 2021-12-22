<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork\PublicationIssue;

use Sohophp\SchemaOrg\Thing\CreativeWork\PublicationIssue;
use Sohophp\SchemaOrg\Thing\Person;

/**
* Individual comic issues are serially published as
    part of a larger series. For the sake of consistency, even one-shot issues
    belong to a series comprised of a single issue. All comic issues can be
    uniquely identified by: the combination of the name and volume number of the
    series to which the issue belongs; the issue number; and the variant
    description of the issue (if any).
* @see http://schema.org/ComicIssue
* @package Sohophp\SchemaOrg\Thing\CreativeWork\PublicationIssue

*
*/
class ComicIssue extends PublicationIssue
{

    /**
    * The individual who traces over the pencil drawings in ink after pencils are complete.
    * @param Person|array $value
    * @return $this
    */
    public function inker(?Person $value)
    {
        $this->setProperty('inker', $value);
        return $this;
    }
   /**
    * @param Person|array $value
    * @return $this
    */
    public function setInker(?Person $value)
    {
        $this->setProperty('inker', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getInker()
    {
       return $this->getProperty('inker');
    }

    /**
    * The primary artist for a work
    in a medium other than pencils or digital line art--for example, if the
    primary artwork is done in watercolors or digital paints.
    * @param Person|array $value
    * @return $this
    */
    public function artist(?Person $value)
    {
        $this->setProperty('artist', $value);
        return $this;
    }
   /**
    * @param Person|array $value
    * @return $this
    */
    public function setArtist(?Person $value)
    {
        $this->setProperty('artist', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getArtist()
    {
       return $this->getProperty('artist');
    }

    /**
    * A description of the variant cover
    for the issue, if the issue is a variant printing. For example, "Bryan Hitch
    Variant Cover" or "2nd Printing Variant".
    * @param string|array $value
    * @return $this
    */
    public function variantCover(?string $value)
    {
        $this->setProperty('variantCover', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setVariantCover(?string $value)
    {
        $this->setProperty('variantCover', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getVariantCover()
    {
       return $this->getProperty('variantCover');
    }

    /**
    * The individual who draws the primary narrative artwork.
    * @param Person|array $value
    * @return $this
    */
    public function penciler(?Person $value)
    {
        $this->setProperty('penciler', $value);
        return $this;
    }
   /**
    * @param Person|array $value
    * @return $this
    */
    public function setPenciler(?Person $value)
    {
        $this->setProperty('penciler', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getPenciler()
    {
       return $this->getProperty('penciler');
    }

    /**
    * The individual who adds color to inked drawings.
    * @param Person|array $value
    * @return $this
    */
    public function colorist(?Person $value)
    {
        $this->setProperty('colorist', $value);
        return $this;
    }
   /**
    * @param Person|array $value
    * @return $this
    */
    public function setColorist(?Person $value)
    {
        $this->setProperty('colorist', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getColorist()
    {
       return $this->getProperty('colorist');
    }

    /**
    * The individual who adds lettering, including speech balloons and sound effects, to artwork.
    * @param Person|array $value
    * @return $this
    */
    public function letterer(?Person $value)
    {
        $this->setProperty('letterer', $value);
        return $this;
    }
   /**
    * @param Person|array $value
    * @return $this
    */
    public function setLetterer(?Person $value)
    {
        $this->setProperty('letterer', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getLetterer()
    {
       return $this->getProperty('letterer');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\CreativeWork\\PublicationIssue\\ComicIssue','Thing\\ComicIssue');

