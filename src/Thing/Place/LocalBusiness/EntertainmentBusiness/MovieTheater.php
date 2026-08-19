<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Place\LocalBusiness\EntertainmentBusiness;

use Sohophp\SchemaOrg\Thing\Place\LocalBusiness\EntertainmentBusiness;

/**
 * A movie theater.
 * @see https://schema.org/MovieTheater
 * @package Sohophp\SchemaOrg\Thing\Place\LocalBusiness\EntertainmentBusiness
 */
class MovieTheater extends EntertainmentBusiness
{
    /**
     * The number of screens in the movie theater.
     * @see https://schema.org/screenCount
     * @param mixed $value
     * @return $this
     */
    public function screenCount($value)
    {
        $this->setProperty('screenCount', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setScreenCount($value)
    {
        $this->setProperty('screenCount', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function addScreenCount($value)
    {
        $current = $this->getProperty('screenCount');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('screenCount', $current);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getScreenCount()
    {
        return $this->getProperty('screenCount');
    }
}
