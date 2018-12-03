<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Organization\LocalBusiness\EntertainmentBusiness;

use Sohophp\SchemaOrg\Thing\Organization\LocalBusiness\EntertainmentBusiness;

/**
 * A movie theater.
 *
 * @see http://schema.org/MovieTheater
 */
class MovieTheater extends EntertainmentBusiness
{
    /**
     * The number of screens in the movie theater.
     *
     * @param  $value
     *
     * @return $this
     */
    public function screenCount($value): self
    {
        $this->setProperty('screenCount', $value);

        return $this;
    }
}
