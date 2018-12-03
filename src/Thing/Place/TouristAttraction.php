<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Place;

use Sohophp\SchemaOrg\Thing\Place;
use Sohophp\SchemaOrg\Thing\Intangible\Audience;

/**
 * A tourist attraction.  In principle any Thing can be a <a class="localLink" href="http://schema.org/TouristAttraction">TouristAttraction</a>, from a <a class="localLink" href="http://schema.org/Mountain">Mountain</a> and <a class="localLink" href="http://schema.org/LandmarksOrHistoricalBuildings">LandmarksOrHistoricalBuildings</a> to a <a class="localLink" href="http://schema.org/LocalBusiness">LocalBusiness</a>.  This Type can be used on its own to describe a general <a class="localLink" href="http://schema.org/TouristAttraction">TouristAttraction</a>, or be used as an <a class="localLink" href="http://schema.org/additionalType">additionalType</a> to add tourist attraction properties to any other type.  (See examples below).
 *
 * @see http://schema.org/TouristAttraction
 */
class TouristAttraction extends Place
{
    /**
     * Attraction suitable for type(s) of tourist. eg. Children, visitors from a particular country, etc.
     *
     * @param Audience|string $value
     *
     * @return $this
     */
    public function touristType($value): self
    {
        $this->setProperty('touristType', $value);

        return $this;
    }
}
