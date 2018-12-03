<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

/**
 * The geographic shape of a place. A GeoShape can be described using several properties whose values are based on latitude/longitude pairs. Either whitespace or commas can be used to separate latitude and longitude; whitespace should be used when writing a list of several such points.
 *
 * @see http://schema.org/GeoShape
 */
class GeoShape extends StructuredValue
{
    /**
     * A line is a point-to-point path consisting of two or more points. A line is expressed as a series of two or more point objects separated by space.
     *
     * @param string $value
     *
     * @return $this
     */
    public function line(?string $value): self
    {
        $this->setProperty('line', $value);

        return $this;
    }

    /**
     * A circle is the circular region of a specified radius centered at a specified latitude and longitude. A circle is expressed as a pair followed by a radius in meters.
     *
     * @param string $value
     *
     * @return $this
     */
    public function circle(?string $value): self
    {
        $this->setProperty('circle', $value);

        return $this;
    }

    /**
     * A box is the area enclosed by the rectangle formed by two points. The first point is the lower corner, the second point is the upper corner. A box is expressed as two points separated by a space character.
     *
     * @param string $value
     *
     * @return $this
     */
    public function box(?string $value): self
    {
        $this->setProperty('box', $value);

        return $this;
    }

    /**
     * A polygon is the area enclosed by a point-to-point path for which the starting and ending points are the same. A polygon is expressed as a series of four or more space delimited points where the first and final points are identical.
     *
     * @param string $value
     *
     * @return $this
     */
    public function polygon(?string $value): self
    {
        $this->setProperty('polygon', $value);

        return $this;
    }
}
