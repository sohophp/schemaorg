<?php

namespace Sohophp\SchemaOrg\Thing\Organization;

use Sohophp\SchemaOrg\Thing\Organization;

/**
 *
 * Class LocalBusiness
 * A particular physical business or branch of an organization.
 * Examples of LocalBusiness include a restaurant,
 * a particular branch of a restaurant chain,
 * a branch of a bank, a medical practice, a club, a bowling alley, etc.
 * @package Sohophp\SchemaOrg\Thing\Organization
 * @see https://schema.org/LocalBusiness
 */
class LocalBusiness extends Organization
{

    /**
     * @param string $value
     * @return $this
     */
    public function currenciesAccepted(string $value)
    {
        $this->setProperty('currenciesAccepted', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function openingHours(string $value)
    {
        $this->setProperty('openingHours', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function paymentAccepted(string $value)
    {
        $this->setProperty('paymentAccepted', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function priceRange(string $value)
    {
        $this->setProperty('priceRange', $value);
        return $this;
    }
}
