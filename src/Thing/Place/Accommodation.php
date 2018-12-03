<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Place;

use Sohophp\SchemaOrg\Thing\Place;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;

/**
 * An accommodation is a place that can accommodate human beings, e.g. a hotel room, a camping pitch, or a meeting room. Many accommodations are for overnight stays, but this is not a mandatory requirement.
For more specific types of accommodations not defined in schema.org, one can use additionalType with external vocabularies.
<br /><br />
See also the <a href="/docs/hotels.html">dedicated document on the use of schema.org for marking up hotels and other forms of accommodations</a>.
 * @see http://schema.org/Accommodation
 */
class Accommodation extends Place
{
    /**
     * The size of the accommodation, e.g. in square meter or squarefoot.
Typical unit code(s): MTK for square meter, FTK for square foot, or YDK for square yard
     * @param QuantitativeValue $value
     *
     * @return $this
     */
    public function floorSize(?QuantitativeValue $value): self
    {
        $this->setProperty('floorSize', $value);

        return $this;
    }

    /**
     * Indications regarding the permitted usage of the accommodation.
     *
     * @param string $value
     *
     * @return $this
     */
    public function permittedUsage(?string $value): self
    {
        $this->setProperty('permittedUsage', $value);

        return $this;
    }
}
