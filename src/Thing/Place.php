<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing;

use Sohophp\SchemaOrg\Thing;
use Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject\ImageObject;
use Sohophp\SchemaOrg\Thing\CreativeWork\Photograph;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\OpeningHoursSpecification;
use Sohophp\SchemaOrg\Thing\CreativeWork\Map;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\GeoCoordinates;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\GeoShape;

/**
 * Entities that have a somewhat fixed, physical extension.
 *
 * @see http://schema.org/Place
 */
class Place extends Thing
{
    /**
     * A photograph of this place.
     *
     * @param ImageObject|Photograph $value
     *
     * @return $this
     */
    public function photo($value): self
    {
        $this->setProperty('photo', $value);

        return $this;
    }

    /**
     * The opening hours of a certain place.
     *
     * @param OpeningHoursSpecification $value
     *
     * @return $this
     */
    public function openingHoursSpecification(?OpeningHoursSpecification $value): self
    {
        $this->setProperty('openingHoursSpecification', $value);

        return $this;
    }

    /**
     * A URL to a map of the place.
     *
     * @param string $value
     *
     * @return $this
     */
    public function maps(?string $value): self
    {
        $this->setProperty('maps', $value);

        return $this;
    }

    /**
     * Indicates whether it is allowed to smoke in the place, e.g. in the restaurant, hotel or hotel room.
     *
     * @param bool $value
     *
     * @return $this
     */
    public function smokingAllowed(?bool $value): self
    {
        $this->setProperty('smokingAllowed', $value);

        return $this;
    }

    /**
     * Photographs of this place.
     *
     * @param ImageObject|Photograph $value
     *
     * @return $this
     */
    public function photos($value): self
    {
        $this->setProperty('photos', $value);

        return $this;
    }

    /**
     * A URL to a map of the place.
     *
     * @param string $value
     *
     * @return $this
     */
    public function map(?string $value): self
    {
        $this->setProperty('map', $value);

        return $this;
    }

    /**
     * A short textual code (also called "store code") that uniquely identifies a place of business. The code is typically assigned by the parentOrganization and used in structured URLs.<br/><br/>.
For example, in the URL http://www.starbucks.co.uk/store-locator/etc/detail/3047 the code "3047" is a branchCode for a particular branch.
     * @param string $value
     *
     * @return $this
     */
    public function branchCode(?string $value): self
    {
        $this->setProperty('branchCode', $value);

        return $this;
    }

    /**
     * A URL to a map of the place.
     *
     * @param string|Map $value
     *
     * @return $this
     */
    public function hasMap($value): self
    {
        $this->setProperty('hasMap', $value);

        return $this;
    }

    /**
     * The special opening hours of a certain place.<br/><br/>.
Use this to explicitly override general opening hours brought in scope by <a class="localLink" href="http://schema.org/openingHoursSpecification">openingHoursSpecification</a> or <a class="localLink" href="http://schema.org/openingHours">openingHours</a>.
     * @param OpeningHoursSpecification $value
     *
     * @return $this
     */
    public function specialOpeningHoursSpecification(?OpeningHoursSpecification $value): self
    {
        $this->setProperty('specialOpeningHoursSpecification', $value);

        return $this;
    }

    /**
     * The geo coordinates of the place.
     *
     * @param GeoCoordinates|GeoShape $value
     *
     * @return $this
     */
    public function geo($value): self
    {
        $this->setProperty('geo', $value);

        return $this;
    }

    /**
     * The basic containment relation between a place and one that contains it.
     *
     * @param Place $value
     *
     * @return $this
     */
    public function containedInPlace(?Place $value): self
    {
        $this->setProperty('containedInPlace', $value);

        return $this;
    }

    /**
     * The basic containment relation between a place and one that contains it.
     *
     * @param Place $value
     *
     * @return $this
     */
    public function containedIn(?Place $value): self
    {
        $this->setProperty('containedIn', $value);

        return $this;
    }

    /**
     * The basic containment relation between a place and another that it contains.
     *
     * @param Place $value
     *
     * @return $this
     */
    public function containsPlace(?Place $value): self
    {
        $this->setProperty('containsPlace', $value);

        return $this;
    }

    /**
     * A flag to signal that the <a class="localLink" href="http://schema.org/Place">Place</a> is open to public visitors.  If this property is omitted there is no assumed default boolean value.
     *
     * @param bool $value
     *
     * @return $this
     */
    public function publicAccess(?bool $value): self
    {
        $this->setProperty('publicAccess', $value);

        return $this;
    }
}
