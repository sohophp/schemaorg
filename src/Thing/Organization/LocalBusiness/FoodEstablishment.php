<?php
namespace Sohophp\SchemaOrg\Thing\Organization\LocalBusiness;

use Sohophp\SchemaOrg\Thing\Organization\LocalBusiness;
use Sohophp\SchemaOrg\Thing\CreativeWork\Menu;
use Sohophp\SchemaOrg\Thing\Intangible\Rating;

/**
* A food-related business.
* @see http://schema.org/FoodEstablishment
* @package Sohophp\SchemaOrg\Thing\Organization\LocalBusiness

*
*/
class FoodEstablishment extends LocalBusiness
{

    /**
    * The cuisine of the restaurant.
    * @param string|array $value
    * @return $this
    * @deprecated use setServesCuisine
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
    * @return $this|string|array
    */
    public function getServesCuisine()
    {
       return $this->getProperty('servesCuisine');
    }

    /**
    * Either the actual menu as a structured representation, as text, or a URL of the menu.
    * @param string|Menu|string|array $value
    * @return $this
    * @deprecated use setHasMenu
    */
    public function hasMenu($value)
    {
        $this->setProperty('hasMenu', $value);
        return $this;
    }
   /**
    * @param string|Menu|string|array $value
    * @return $this
    */
    public function setHasMenu($value)
    {
        $this->setProperty('hasMenu', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getHasMenu()
    {
       return $this->getProperty('hasMenu');
    }

    /**
    * Either the actual menu as a structured representation, as text, or a URL of the menu.
    * @param string|Menu|string|array $value
    * @return $this
    * @deprecated use setMenu
    */
    public function menu($value)
    {
        $this->setProperty('menu', $value);
        return $this;
    }
   /**
    * @param string|Menu|string|array $value
    * @return $this
    */
    public function setMenu($value)
    {
        $this->setProperty('menu', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getMenu()
    {
       return $this->getProperty('menu');
    }

    /**
    * An official rating for a lodging business or food establishment, e.g. from national associations or standards bodies. Use the author property to indicate the rating organization, e.g. as an Organization with name such as (e.g. HOTREC, DEHOGA, WHR, or Hotelstars).
    * @param Rating|array|string $value
    * @return $this
    * @deprecated use setStarRating
    */
    public function starRating($value)
    {
        $this->setProperty('starRating', $value);
        return $this;
    }
   /**
    * @param Rating|array|string $value
    * @return $this
    */
    public function setStarRating($value)
    {
        $this->setProperty('starRating', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getStarRating()
    {
       return $this->getProperty('starRating');
    }

    /**
    * Indicates whether a FoodEstablishment accepts reservations. Values can be Boolean, an URL at which reservations can be made or (for backwards compatibility) the strings <code>Yes</code> or <code>No</code>.
    * @param bool|string|string|array $value
    * @return $this
    * @deprecated use setAcceptsReservations
    */
    public function acceptsReservations($value)
    {
        $this->setProperty('acceptsReservations', $value);
        return $this;
    }
   /**
    * @param bool|string|string|array $value
    * @return $this
    */
    public function setAcceptsReservations($value)
    {
        $this->setProperty('acceptsReservations', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAcceptsReservations()
    {
       return $this->getProperty('acceptsReservations');
    }


}
