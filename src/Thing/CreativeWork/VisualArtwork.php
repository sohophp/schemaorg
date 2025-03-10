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
        * The individual who traces over the pencil drawings in ink after pencils are
 * complete.
        * @param array|string|mixed $value
    * @return $this
    */
    public function inker($value)
    {
        $this->setProperty('inker', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The height of the item.
        * @param array|string|mixed $value
    * @return $this
    */
    public function height($value)
    {
        $this->setProperty('height', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The width of the item.
        * @param array|string|mixed $value
    * @return $this
    */
    public function width($value)
    {
        $this->setProperty('width', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The depth of the item.
        * @param array|string|mixed $value
    * @return $this
    */
    public function depth($value)
    {
        $this->setProperty('depth', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The individual who adds lettering, including speech balloons and sound
 * effects, to artwork.
        * @param array|string|mixed $value
    * @return $this
    */
    public function letterer($value)
    {
        $this->setProperty('letterer', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The number of copies when multiple copies of a piece of artwork are produced
 * - e.g. for a limited edition of 20 prints, 'artEdition' refers to the total
 * number of copies (in this example "20").
        * @param array|string|mixed $value
    * @return $this
    */
    public function artEdition($value)
    {
        $this->setProperty('artEdition', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The material used. (E.g. Oil, Watercolour, Acrylic, Linoprint, Marble,
 * Cyanotype, Digital, Lithograph, DryPoint, Intaglio, Pastel, Woodcut, Pencil,
 * Mixed Media, etc.)
        * @param array|string|mixed $value
    * @return $this
    */
    public function artMedium($value)
    {
        $this->setProperty('artMedium', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The weight of the product or person.
        * @param array|string|mixed $value
    * @return $this
    */
    public function weight($value)
    {
        $this->setProperty('weight', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The individual who adds color to inked drawings.
        * @param array|string|mixed $value
    * @return $this
    */
    public function colorist($value)
    {
        $this->setProperty('colorist', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The individual who draws the primary narrative artwork.
        * @param array|string|mixed $value
    * @return $this
    */
    public function penciler($value)
    {
        $this->setProperty('penciler', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * A material used as a surface in some artwork, e.g. Canvas, Paper, Wood,
 * Board, etc.
        * @param array|string|mixed $value
    * @return $this
    */
    public function surface($value)
    {
        $this->setProperty('surface', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The supporting materials for the artwork, e.g. Canvas, Paper, Wood, Board,
 * etc.
        * @param array|string|mixed $value
    * @return $this
    */
    public function artworkSurface($value)
    {
        $this->setProperty('artworkSurface', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * e.g. Painting, Drawing, Sculpture, Print, Photograph, Assemblage, Collage,
 * etc.
        * @param array|string|mixed $value
    * @return $this
    */
    public function artform($value)
    {
        $this->setProperty('artform', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The primary artist for a work
 *     	in a medium other than pencils or digital line art--for example, if the
 *     	primary artwork is done in watercolors or digital paints.
        * @param array|string|mixed $value
    * @return $this
    */
    public function artist($value)
    {
        $this->setProperty('artist', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
