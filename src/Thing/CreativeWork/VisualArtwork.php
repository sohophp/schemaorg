<?php

declare (strict_types=1);

namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
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
     * The height of the item.
     * @param Distance|QuantitativeValue $value
     * @return $this
     */

     public function height( $value):self
     {
        $this->setProperty("height",$value);
        return $this;
     }

     
     /**
     * The material used. (e.g. Oil, Watercolour, Acrylic, Linoprint, Marble, Cyanotype, Digital, Lithograph, DryPoint, Intaglio, Pastel, Woodcut, Pencil, Mixed Media, etc.)
     * @param string|string $value
     * @return $this
     */

     public function artMedium( $value):self
     {
        $this->setProperty("artMedium",$value);
        return $this;
     }

     
     /**
     * e.g. Painting, Drawing, Sculpture, Print, Photograph, Assemblage, Collage, etc.
     * @param string|string $value
     * @return $this
     */

     public function artform( $value):self
     {
        $this->setProperty("artform",$value);
        return $this;
     }

     
     /**
     * The supporting materials for the artwork, e.g. Canvas, Paper, Wood, Board, etc.
     * @param string|string $value
     * @return $this
     */

     public function artworkSurface( $value):self
     {
        $this->setProperty("artworkSurface",$value);
        return $this;
     }

     
     /**
     * The number of copies when multiple copies of a piece of artwork are produced - e.g. for a limited edition of 20 prints, 'artEdition' refers to the total number of copies (in this example "20").
     * @param string|int $value
     * @return $this
     */

     public function artEdition( $value):self
     {
        $this->setProperty("artEdition",$value);
        return $this;
     }

     
     /**
     * The width of the item.
     * @param Distance|QuantitativeValue $value
     * @return $this
     */

     public function width( $value):self
     {
        $this->setProperty("width",$value);
        return $this;
     }

     
     /**
     * A material used as a surface in some artwork, e.g. Canvas, Paper, Wood, Board, etc.
     * @param string|string $value
     * @return $this
     */

     public function surface( $value):self
     {
        $this->setProperty("surface",$value);
        return $this;
     }

     
     /**
     * The depth of the item.
     * @param QuantitativeValue|Distance $value
     * @return $this
     */

     public function depth( $value):self
     {
        $this->setProperty("depth",$value);
        return $this;
     }

     
}

