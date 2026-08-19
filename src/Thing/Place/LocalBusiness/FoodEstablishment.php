<?php
namespace Sohophp\SchemaOrg\Thing\Place\LocalBusiness;

  use Sohophp\SchemaOrg\Thing\Place\LocalBusiness;
  use Sohophp\SchemaOrg\Thing\CreativeWork\Menu;
  use Sohophp\SchemaOrg\Thing\Intangible\Rating;

/**
  * A food-related business.
  * @see schema:FoodEstablishment
* @package Sohophp\SchemaOrg\Thing\Place\LocalBusiness
*/
class FoodEstablishment extends LocalBusiness
{


  /**
      * The cuisine of the restaurant.
    * @param string|array $value
  * @return $this
  */
  public function servesCuisine($value)
  {
  $this->setProperty('servesCuisine', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setServesCuisine($value)
  {
  $this->setProperty('servesCuisine', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addServesCuisine($value)
  {
  $current = $this->getProperty('servesCuisine');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('servesCuisine', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getServesCuisine()
  {
  return $this->getProperty('servesCuisine');
  }


  /**
      * Either the actual menu as a structured representation, as text, or a URL of
 * the menu.
    * @param Menu|string|array $value
  * @return $this
  */
  public function hasMenu($value)
  {
  $this->setProperty('hasMenu', $value);
  return $this;
  }

  /**
  * @param Menu|string|array $value
  * @return $this
  */
  public function setHasMenu($value)
  {
  $this->setProperty('hasMenu', $value);
  return $this;
  }

  /**
  * @param Menu|string $value
  * @return $this
  */
  public function addHasMenu($value)
  {
  $current = $this->getProperty('hasMenu');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('hasMenu', $current);
  return $this;
  }

  /**
  * @return Menu|string|array
  */
  public function getHasMenu()
  {
  return $this->getProperty('hasMenu');
  }


  /**
      * An official rating for a lodging business or food establishment, e.g. from
 * national associations or standards bodies. Use the author property to
 * indicate the rating organization, e.g. as an Organization with name such as
 * (e.g. HOTREC, DEHOGA, WHR, or Hotelstars).
    * @param Rating|array $value
  * @return $this
  */
  public function starRating($value)
  {
  $this->setProperty('starRating', $value);
  return $this;
  }

  /**
  * @param Rating|array $value
  * @return $this
  */
  public function setStarRating($value)
  {
  $this->setProperty('starRating', $value);
  return $this;
  }

  /**
  * @param Rating $value
  * @return $this
  */
  public function addStarRating($value)
  {
  $current = $this->getProperty('starRating');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('starRating', $current);
  return $this;
  }

  /**
  * @return Rating|array
  */
  public function getStarRating()
  {
  return $this->getProperty('starRating');
  }


  /**
      * Either the actual menu as a structured representation, as text, or a URL of
 * the menu.
    * @param Menu|string|array $value
  * @return $this
  */
  public function menu($value)
  {
  $this->setProperty('menu', $value);
  return $this;
  }

  /**
  * @param Menu|string|array $value
  * @return $this
  */
  public function setMenu($value)
  {
  $this->setProperty('menu', $value);
  return $this;
  }

  /**
  * @param Menu|string $value
  * @return $this
  */
  public function addMenu($value)
  {
  $current = $this->getProperty('menu');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('menu', $current);
  return $this;
  }

  /**
  * @return Menu|string|array
  */
  public function getMenu()
  {
  return $this->getProperty('menu');
  }


  /**
      * Indicates whether a FoodEstablishment accepts reservations. Values can be
 * Boolean, an URL at which reservations can be made or (for backwards
 * compatibility) the strings ```Yes``` or ```No```.
    * @param string|bool|array $value
  * @return $this
  */
  public function acceptsReservations($value)
  {
  $this->setProperty('acceptsReservations', $value);
  return $this;
  }

  /**
  * @param string|bool|array $value
  * @return $this
  */
  public function setAcceptsReservations($value)
  {
  $this->setProperty('acceptsReservations', $value);
  return $this;
  }

  /**
  * @param string|bool $value
  * @return $this
  */
  public function addAcceptsReservations($value)
  {
  $current = $this->getProperty('acceptsReservations');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('acceptsReservations', $current);
  return $this;
  }

  /**
  * @return string|bool|array
  */
  public function getAcceptsReservations()
  {
  return $this->getProperty('acceptsReservations');
  }


}
