<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Organization\LocalBusiness;

use Sohophp\SchemaOrg\Thing\Organization\LocalBusiness;
use Sohophp\SchemaOrg\Thing\CreativeWork\Menu;

/**
 * A food-related business.
 *
 * @see http://schema.org/FoodEstablishment
 */
class FoodEstablishment extends LocalBusiness
{
    /**
     * The cuisine of the restaurant.
     *
     * @param string $value
     *
     * @return $this
     */
    public function servesCuisine(?string $value): self
    {
        $this->setProperty('servesCuisine', $value);

        return $this;
    }

    /**
     * Either the actual menu as a structured representation, as text, or a URL of the menu.
     *
     * @param string|string|Menu $value
     *
     * @return $this
     */
    public function hasMenu($value): self
    {
        $this->setProperty('hasMenu', $value);

        return $this;
    }

    /**
     * Either the actual menu as a structured representation, as text, or a URL of the menu.
     *
     * @param string|string|Menu $value
     *
     * @return $this
     */
    public function menu($value): self
    {
        $this->setProperty('menu', $value);

        return $this;
    }

    /**
     * Indicates whether a FoodEstablishment accepts reservations. Values can be Boolean, an URL at which reservations can be made or (for backwards compatibility) the strings <code>Yes</code> or <code>No</code>.
     *
     * @param string|bool|string $value
     *
     * @return $this
     */
    public function acceptsReservations($value): self
    {
        $this->setProperty('acceptsReservations', $value);

        return $this;
    }
}
