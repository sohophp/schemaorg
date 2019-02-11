<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Organization\LocalBusiness;

use Sohophp\SchemaOrg\Thing\Organization\LocalBusiness;
use Sohophp\SchemaOrg\Thing\CreativeWork\Menu;
use Sohophp\SchemaOrg\Thing\Intangible\Rating;

/**
* A food-related business.
* @see http://schema.org/FoodEstablishment
* @package Sohophp\SchemaOrg\Thing\Organization\LocalBusiness
*/
class FoodEstablishment extends LocalBusiness
{

    /**
    * The cuisine of the restaurant.
    * @param string $value
    * @return $this
    */
    public function servesCuisine(?string $value)
    {
        $this->setProperty('servesCuisine', $value);
        return $this;
    }

    /**
    * Either the actual menu as a structured representation, as text, or a URL of the menu.
    * @param string|string|Menu $value
    * @return $this
    */
    public function hasMenu($value)
    {
        $this->setProperty('hasMenu', $value);
        return $this;
    }

    /**
    * Either the actual menu as a structured representation, as text, or a URL of the menu.
    * @param string|string|Menu $value
    * @return $this
    */
    public function menu($value)
    {
        $this->setProperty('menu', $value);
        return $this;
    }

    /**
    * An official rating for a lodging business or food establishment, e.g. from national associations or standards bodies. Use the author property to indicate the rating organization, e.g. as an Organization with name such as (e.g. HOTREC, DEHOGA, WHR, or Hotelstars).
    * @param Rating $value
    * @return $this
    */
    public function starRating(?Rating $value)
    {
        $this->setProperty('starRating', $value);
        return $this;
    }

    /**
    * Indicates whether a FoodEstablishment accepts reservations. Values can be Boolean, an URL at which reservations can be made or (for backwards compatibility) the strings <code>Yes</code> or <code>No</code>.
    * @param string|bool|string $value
    * @return $this
    */
    public function acceptsReservations($value)
    {
        $this->setProperty('acceptsReservations', $value);
        return $this;
    }


}

