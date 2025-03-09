<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;

/**
* A work of art that is primarily visual in character.
* @see schema:VisualArtwork
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class VisualArtwork extends CreativeWork
{
   /**
        * The individual who traces over the pencil drawings in ink after pencils are complete.
        */
    protected $inker = null;

   /**
        * The height of the item.
        */
    protected $height = null;

   /**
        * The width of the item.
        */
    protected $width = null;

   /**
        * The depth of the item.
        */
    protected $depth = null;

   /**
        * The individual who adds lettering, including speech balloons and sound effects, to artwork.
        */
    protected $letterer = null;

   /**
        * The number of copies when multiple copies of a piece of artwork are produced - e.g. for a limited edition of 20 prints, 'artEdition' refers to the total number of copies (in this example "20").
        */
    protected $artEdition = null;

   /**
        * The material used. (E.g. Oil, Watercolour, Acrylic, Linoprint, Marble, Cyanotype, Digital, Lithograph, DryPoint, Intaglio, Pastel, Woodcut, Pencil, Mixed Media, etc.)
        */
    protected $artMedium = null;

   /**
        * The weight of the product or person.
        */
    protected $weight = null;

   /**
        * The individual who adds color to inked drawings.
        */
    protected $colorist = null;

   /**
        * The individual who draws the primary narrative artwork.
        */
    protected $penciler = null;

   /**
        * A material used as a surface in some artwork, e.g. Canvas, Paper, Wood, Board, etc.
        */
    protected $surface = null;

   /**
        * The supporting materials for the artwork, e.g. Canvas, Paper, Wood, Board, etc.
        */
    protected $artworkSurface = null;

   /**
        * e.g. Painting, Drawing, Sculpture, Print, Photograph, Assemblage, Collage, etc.
        */
    protected $artform = null;

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
    public function setHeight($value)
    {
        $this->setProperty('height', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getHeight()
    {
       return $this->getProperty('height');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setWidth($value)
    {
        $this->setProperty('width', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getWidth()
    {
       return $this->getProperty('width');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setDepth($value)
    {
        $this->setProperty('depth', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDepth()
    {
       return $this->getProperty('depth');
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
    public function setArtEdition($value)
    {
        $this->setProperty('artEdition', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getArtEdition()
    {
       return $this->getProperty('artEdition');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setArtMedium($value)
    {
        $this->setProperty('artMedium', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getArtMedium()
    {
       return $this->getProperty('artMedium');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setWeight($value)
    {
        $this->setProperty('weight', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getWeight()
    {
       return $this->getProperty('weight');
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
    public function setSurface($value)
    {
        $this->setProperty('surface', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSurface()
    {
       return $this->getProperty('surface');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setArtworkSurface($value)
    {
        $this->setProperty('artworkSurface', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getArtworkSurface()
    {
       return $this->getProperty('artworkSurface');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setArtform($value)
    {
        $this->setProperty('artform', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getArtform()
    {
       return $this->getProperty('artform');
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
