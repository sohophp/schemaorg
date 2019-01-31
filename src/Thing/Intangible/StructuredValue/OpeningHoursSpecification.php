<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\DayOfWeek;

/**
 * A structured value providing information about the opening hours of a place or a certain service inside a place.<br/><br/>.
The place is <strong>open</strong> if the <a class="localLink" href="http://schema.org/opens">opens</a> property is specified, and <strong>closed</strong> otherwise.<br/><br/>

If the value for the <a class="localLink" href="http://schema.org/closes">closes</a> property is less than the value for the <a class="localLink" href="http://schema.org/opens">opens</a> property then the hour range is assumed to span over the next day.
 * @see http://schema.org/OpeningHoursSpecification
 */
class OpeningHoursSpecification extends StructuredValue
{
    /**
     * The opening hour of the place or service on the given day(s) of the week.
     *
     * @param  $value
     *
     * @return $this
     */
    public function opens($value): self
    {
        $this->setProperty('opens', $value);

        return $this;
    }

    /**
     * The closing hour of the place or service on the given day(s) of the week.
     *
     * @param  $value
     *
     * @return $this
     */
    public function closes($value): self
    {
        $this->setProperty('closes', $value);

        return $this;
    }

    /**
     * The day of the week for which these opening hours are valid.
     *
     * @param DayOfWeek $value
     *
     * @return $this
     */
    public function dayOfWeek(?DayOfWeek $value): self
    {
        $this->setProperty('dayOfWeek', $value);

        return $this;
    }
}
