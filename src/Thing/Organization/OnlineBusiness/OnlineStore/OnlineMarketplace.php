<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Organization\OnlineBusiness\OnlineStore;

use Sohophp\SchemaOrg\Thing\Organization\OnlineBusiness\OnlineStore;

/**
 * An eCommerce marketplace.
 * @see https://schema.org/OnlineMarketplace
 * @package Sohophp\SchemaOrg\Thing\Organization\OnlineBusiness\OnlineStore
 */
class OnlineMarketplace extends OnlineStore
{
    /**
     * An eCommerce store part of an online marketplace.
     * @see https://schema.org/hasStore
     * @param OnlineStore|array $value
     * @return $this
     */
    public function hasStore($value)
    {
        $this->setProperty('hasStore', $value);
        return $this;
    }

    /**
     * @param OnlineStore|array $value
     * @return $this
     */
    public function setHasStore($value)
    {
        $this->setProperty('hasStore', $value);
        return $this;
    }

    /**
     * @param OnlineStore $value
     * @return $this
     */
    public function addHasStore($value)
    {
        $current = $this->getProperty('hasStore');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('hasStore', $current);
        return $this;
    }

    /**
     * @return OnlineStore|array
     */
    public function getHasStore()
    {
        return $this->getProperty('hasStore');
    }
}
