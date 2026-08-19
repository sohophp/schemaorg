<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

  use Sohophp\SchemaOrg\Thing\CreativeWork;
  use Sohophp\SchemaOrg\Thing\Person;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;
  use Sohophp\SchemaOrg\Quantity\Distance;
  use Sohophp\SchemaOrg\Quantity\Mass;

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
    * @param Person|array $value
  * @return $this
  */
  public function inker($value)
  {
  $this->setProperty('inker', $value);
  return $this;
  }

  /**
  * @param Person|array $value
  * @return $this
  */
  public function setInker($value)
  {
  $this->setProperty('inker', $value);
  return $this;
  }

  /**
  * @param Person $value
  * @return $this
  */
  public function addInker($value)
  {
  $current = $this->getProperty('inker');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('inker', $current);
  return $this;
  }

  /**
  * @return Person|array
  */
  public function getInker()
  {
  return $this->getProperty('inker');
  }


  /**
      * The individual who draws the primary narrative artwork.
    * @param Person|array $value
  * @return $this
  */
  public function penciler($value)
  {
  $this->setProperty('penciler', $value);
  return $this;
  }

  /**
  * @param Person|array $value
  * @return $this
  */
  public function setPenciler($value)
  {
  $this->setProperty('penciler', $value);
  return $this;
  }

  /**
  * @param Person $value
  * @return $this
  */
  public function addPenciler($value)
  {
  $current = $this->getProperty('penciler');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('penciler', $current);
  return $this;
  }

  /**
  * @return Person|array
  */
  public function getPenciler()
  {
  return $this->getProperty('penciler');
  }


  /**
      * The material used. (E.g. Oil, Watercolour, Acrylic, Linoprint, Marble,
 * Cyanotype, Digital, Lithograph, DryPoint, Intaglio, Pastel, Woodcut, Pencil,
 * Mixed Media, etc.)
    * @param string|array $value
  * @return $this
  */
  public function artMedium($value)
  {
  $this->setProperty('artMedium', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setArtMedium($value)
  {
  $this->setProperty('artMedium', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addArtMedium($value)
  {
  $current = $this->getProperty('artMedium');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('artMedium', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getArtMedium()
  {
  return $this->getProperty('artMedium');
  }


  /**
      * The width of the item.
    * @param QuantitativeValue|Distance|array $value
  * @return $this
  */
  public function width($value)
  {
  $this->setProperty('width', $value);
  return $this;
  }

  /**
  * @param QuantitativeValue|Distance|array $value
  * @return $this
  */
  public function setWidth($value)
  {
  $this->setProperty('width', $value);
  return $this;
  }

  /**
  * @param QuantitativeValue|Distance $value
  * @return $this
  */
  public function addWidth($value)
  {
  $current = $this->getProperty('width');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('width', $current);
  return $this;
  }

  /**
  * @return QuantitativeValue|Distance|array
  */
  public function getWidth()
  {
  return $this->getProperty('width');
  }


  /**
      * The number of copies when multiple copies of a piece of artwork are produced
 * - e.g. for a limited edition of 20 prints, 'artEdition' refers to the total
 * number of copies (in this example "20").
    * @param string|int|array $value
  * @return $this
  */
  public function artEdition($value)
  {
  $this->setProperty('artEdition', $value);
  return $this;
  }

  /**
  * @param string|int|array $value
  * @return $this
  */
  public function setArtEdition($value)
  {
  $this->setProperty('artEdition', $value);
  return $this;
  }

  /**
  * @param string|int $value
  * @return $this
  */
  public function addArtEdition($value)
  {
  $current = $this->getProperty('artEdition');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('artEdition', $current);
  return $this;
  }

  /**
  * @return string|int|array
  */
  public function getArtEdition()
  {
  return $this->getProperty('artEdition');
  }


  /**
      * The primary artist for a work
 *     	in a medium other than pencils or digital line art--for example, if the
 *     	primary artwork is done in watercolors or digital paints.
    * @param Person|array $value
  * @return $this
  */
  public function artist($value)
  {
  $this->setProperty('artist', $value);
  return $this;
  }

  /**
  * @param Person|array $value
  * @return $this
  */
  public function setArtist($value)
  {
  $this->setProperty('artist', $value);
  return $this;
  }

  /**
  * @param Person $value
  * @return $this
  */
  public function addArtist($value)
  {
  $current = $this->getProperty('artist');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('artist', $current);
  return $this;
  }

  /**
  * @return Person|array
  */
  public function getArtist()
  {
  return $this->getProperty('artist');
  }


  /**
      * The depth of the item.
    * @param QuantitativeValue|Distance|array $value
  * @return $this
  */
  public function depth($value)
  {
  $this->setProperty('depth', $value);
  return $this;
  }

  /**
  * @param QuantitativeValue|Distance|array $value
  * @return $this
  */
  public function setDepth($value)
  {
  $this->setProperty('depth', $value);
  return $this;
  }

  /**
  * @param QuantitativeValue|Distance $value
  * @return $this
  */
  public function addDepth($value)
  {
  $current = $this->getProperty('depth');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('depth', $current);
  return $this;
  }

  /**
  * @return QuantitativeValue|Distance|array
  */
  public function getDepth()
  {
  return $this->getProperty('depth');
  }


  /**
      * The weight of the product or person.
    * @param QuantitativeValue|Mass|array $value
  * @return $this
  */
  public function weight($value)
  {
  $this->setProperty('weight', $value);
  return $this;
  }

  /**
  * @param QuantitativeValue|Mass|array $value
  * @return $this
  */
  public function setWeight($value)
  {
  $this->setProperty('weight', $value);
  return $this;
  }

  /**
  * @param QuantitativeValue|Mass $value
  * @return $this
  */
  public function addWeight($value)
  {
  $current = $this->getProperty('weight');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('weight', $current);
  return $this;
  }

  /**
  * @return QuantitativeValue|Mass|array
  */
  public function getWeight()
  {
  return $this->getProperty('weight');
  }


  /**
      * The individual who adds color to inked drawings.
    * @param Person|array $value
  * @return $this
  */
  public function colorist($value)
  {
  $this->setProperty('colorist', $value);
  return $this;
  }

  /**
  * @param Person|array $value
  * @return $this
  */
  public function setColorist($value)
  {
  $this->setProperty('colorist', $value);
  return $this;
  }

  /**
  * @param Person $value
  * @return $this
  */
  public function addColorist($value)
  {
  $current = $this->getProperty('colorist');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('colorist', $current);
  return $this;
  }

  /**
  * @return Person|array
  */
  public function getColorist()
  {
  return $this->getProperty('colorist');
  }


  /**
      * The individual who adds lettering, including speech balloons and sound
 * effects, to artwork.
    * @param Person|array $value
  * @return $this
  */
  public function letterer($value)
  {
  $this->setProperty('letterer', $value);
  return $this;
  }

  /**
  * @param Person|array $value
  * @return $this
  */
  public function setLetterer($value)
  {
  $this->setProperty('letterer', $value);
  return $this;
  }

  /**
  * @param Person $value
  * @return $this
  */
  public function addLetterer($value)
  {
  $current = $this->getProperty('letterer');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('letterer', $current);
  return $this;
  }

  /**
  * @return Person|array
  */
  public function getLetterer()
  {
  return $this->getProperty('letterer');
  }


  /**
      * The supporting materials for the artwork, e.g. Canvas, Paper, Wood, Board,
 * etc.
    * @param string|array $value
  * @return $this
  */
  public function artworkSurface($value)
  {
  $this->setProperty('artworkSurface', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setArtworkSurface($value)
  {
  $this->setProperty('artworkSurface', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addArtworkSurface($value)
  {
  $current = $this->getProperty('artworkSurface');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('artworkSurface', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getArtworkSurface()
  {
  return $this->getProperty('artworkSurface');
  }


  /**
      * The height of the item.
    * @param QuantitativeValue|Distance|array $value
  * @return $this
  */
  public function height($value)
  {
  $this->setProperty('height', $value);
  return $this;
  }

  /**
  * @param QuantitativeValue|Distance|array $value
  * @return $this
  */
  public function setHeight($value)
  {
  $this->setProperty('height', $value);
  return $this;
  }

  /**
  * @param QuantitativeValue|Distance $value
  * @return $this
  */
  public function addHeight($value)
  {
  $current = $this->getProperty('height');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('height', $current);
  return $this;
  }

  /**
  * @return QuantitativeValue|Distance|array
  */
  public function getHeight()
  {
  return $this->getProperty('height');
  }


  /**
      * e.g. Painting, Drawing, Sculpture, Print, Photograph, Assemblage, Collage,
 * etc.
    * @param string|array $value
  * @return $this
  */
  public function artform($value)
  {
  $this->setProperty('artform', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setArtform($value)
  {
  $this->setProperty('artform', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addArtform($value)
  {
  $current = $this->getProperty('artform');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('artform', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getArtform()
  {
  return $this->getProperty('artform');
  }


  /**
      * A material used as a surface in some artwork, e.g. Canvas, Paper, Wood,
 * Board, etc.
    * @param string|array $value
  * @return $this
  */
  public function surface($value)
  {
  $this->setProperty('surface', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setSurface($value)
  {
  $this->setProperty('surface', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addSurface($value)
  {
  $current = $this->getProperty('surface');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('surface', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getSurface()
  {
  return $this->getProperty('surface');
  }


}
