<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Intangible\Quantity\Distance;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;

/**
* A work of art that is primarily visual in character.
* @see http://schema.org/VisualArtwork
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class VisualArtwork extends CreativeWork
{

    /**
    * The individual who traces over the pencil drawings in ink after pencils are complete.
    * @param Person $value
    * @return $this
    */
    public function inker(?Person $value)
    {
        $this->setProperty('inker', $value);
        return $this;
    }

    /**
    * The material used. (e.g. Oil, Watercolour, Acrylic, Linoprint, Marble, Cyanotype, Digital, Lithograph, DryPoint, Intaglio, Pastel, Woodcut, Pencil, Mixed Media, etc.)
    * @param string|string $value
    * @return $this
    */
    public function artMedium($value)
    {
        $this->setProperty('artMedium', $value);
        return $this;
    }

    /**
    * The height of the item.
    * @param Distance|QuantitativeValue $value
    * @return $this
    */
    public function height($value)
    {
        $this->setProperty('height', $value);
        return $this;
    }

    /**
    * The primary artist for a work
    in a medium other than pencils or digital line art--for example, if the
    primary artwork is done in watercolors or digital paints.
    * @param Person $value
    * @return $this
    */
    public function artist(?Person $value)
    {
        $this->setProperty('artist', $value);
        return $this;
    }

    /**
    * e.g. Painting, Drawing, Sculpture, Print, Photograph, Assemblage, Collage, etc.
    * @param string|string $value
    * @return $this
    */
    public function artform($value)
    {
        $this->setProperty('artform', $value);
        return $this;
    }

    /**
    * The supporting materials for the artwork, e.g. Canvas, Paper, Wood, Board, etc.
    * @param string|string $value
    * @return $this
    */
    public function artworkSurface($value)
    {
        $this->setProperty('artworkSurface', $value);
        return $this;
    }

    /**
    * The number of copies when multiple copies of a piece of artwork are produced - e.g. for a limited edition of 20 prints, 'artEdition' refers to the total number of copies (in this example "20").
    * @param int|string $value
    * @return $this
    */
    public function artEdition($value)
    {
        $this->setProperty('artEdition', $value);
        return $this;
    }

    /**
    * The width of the item.
    * @param QuantitativeValue|Distance $value
    * @return $this
    */
    public function width($value)
    {
        $this->setProperty('width', $value);
        return $this;
    }

    /**
    * A material used as a surface in some artwork, e.g. Canvas, Paper, Wood, Board, etc.
    * @param string|string $value
    * @return $this
    */
    public function surface($value)
    {
        $this->setProperty('surface', $value);
        return $this;
    }

    /**
    * The individual who draws the primary narrative artwork.
    * @param Person $value
    * @return $this
    */
    public function penciler(?Person $value)
    {
        $this->setProperty('penciler', $value);
        return $this;
    }

    /**
    * The depth of the item.
    * @param Distance|QuantitativeValue $value
    * @return $this
    */
    public function depth($value)
    {
        $this->setProperty('depth', $value);
        return $this;
    }

    /**
    * The individual who adds color to inked drawings.
    * @param Person $value
    * @return $this
    */
    public function colorist(?Person $value)
    {
        $this->setProperty('colorist', $value);
        return $this;
    }

    /**
    * The individual who adds lettering, including speech balloons and sound effects, to artwork.
    * @param Person $value
    * @return $this
    */
    public function letterer(?Person $value)
    {
        $this->setProperty('letterer', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\CreativeWork\\VisualArtwork','Thing\\VisualArtwork');

