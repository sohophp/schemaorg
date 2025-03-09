<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork\PublicationIssue;

use Sohophp\SchemaOrg\Thing\CreativeWork\PublicationIssue;

/**
* Individual comic issues are serially published as
    	part of a larger series. For the sake of consistency, even one-shot issues
    	belong to a series comprised of a single issue. All comic issues can be
    	uniquely identified by: the combination of the name and volume number of the
    	series to which the issue belongs; the issue number; and the variant
    	description of the issue (if any).
* @see schema:ComicIssue
* @package Sohophp\SchemaOrg\Thing\CreativeWork\PublicationIssue
*/
class ComicIssue extends PublicationIssue
{
   /**
        * The individual who traces over the pencil drawings in ink after pencils are complete.
        */
    protected $inker = null;

   /**
        * A description of the variant cover
    	for the issue, if the issue is a variant printing. For example, "Bryan Hitch
    	Variant Cover" or "2nd Printing Variant".
        */
    protected $variantCover = null;

   /**
        * The individual who adds lettering, including speech balloons and sound effects, to artwork.
        */
    protected $letterer = null;

   /**
        * The individual who adds color to inked drawings.
        */
    protected $colorist = null;

   /**
        * The individual who draws the primary narrative artwork.
        */
    protected $penciler = null;

   /**
        * The primary artist for a work
    	in a medium other than pencils or digital line art--for example, if the
    	primary artwork is done in watercolors or digital paints.
        */
    protected $artist = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setInker($value)
    {
        $this->setProperty('inker', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getInker()
    {
       return $this->getProperty('inker');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setVariantCover($value)
    {
        $this->setProperty('variantCover', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getVariantCover()
    {
       return $this->getProperty('variantCover');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setLetterer($value)
    {
        $this->setProperty('letterer', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getLetterer()
    {
       return $this->getProperty('letterer');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setColorist($value)
    {
        $this->setProperty('colorist', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getColorist()
    {
       return $this->getProperty('colorist');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setPenciler($value)
    {
        $this->setProperty('penciler', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPenciler()
    {
       return $this->getProperty('penciler');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setArtist($value)
    {
        $this->setProperty('artist', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getArtist()
    {
       return $this->getProperty('artist');
    }


}
