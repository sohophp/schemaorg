<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Action\PlayAction;

use Sohophp\SchemaOrg\Thing\Action\PlayAction;
use Sohophp\SchemaOrg\Thing\Place\LocalBusiness\EntertainmentBusiness;

/**
 * The act of participating in performance arts.
 * @see https://schema.org/PerformAction
 * @package Sohophp\SchemaOrg\Thing\Action\PlayAction
 */
class PerformAction extends PlayAction
{
    /**
     * A sub property of location. The entertainment business where the action occurred.
     * @see https://schema.org/entertainmentBusiness
     * @param EntertainmentBusiness|array $value
     * @return $this
     */
    public function entertainmentBusiness($value)
    {
        $this->setProperty('entertainmentBusiness', $value);
        return $this;
    }

    /**
     * @param EntertainmentBusiness|array $value
     * @return $this
     */
    public function setEntertainmentBusiness($value)
    {
        $this->setProperty('entertainmentBusiness', $value);
        return $this;
    }

    /**
     * @param EntertainmentBusiness $value
     * @return $this
     */
    public function addEntertainmentBusiness($value)
    {
        $current = $this->getProperty('entertainmentBusiness');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('entertainmentBusiness', $current);
        return $this;
    }

    /**
     * @return EntertainmentBusiness|array
     */
    public function getEntertainmentBusiness()
    {
        return $this->getProperty('entertainmentBusiness');
    }
}
