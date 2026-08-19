<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Organization\OnlineBusiness;

use Sohophp\SchemaOrg\Thing\Organization\OnlineBusiness;
use Sohophp\SchemaOrg\Thing\Organization\OnlineBusiness\OnlineStore\OnlineMarketplace;

/**
 * An eCommerce site.
 * @see https://schema.org/OnlineStore
 * @package Sohophp\SchemaOrg\Thing\Organization\OnlineBusiness
 */
class OnlineStore extends OnlineBusiness
{
    /**
     * The eCommerce marketplace this online store is on.
     * @see https://schema.org/isStoreOn
     * @param OnlineMarketplace|array $value
     * @return $this
     */
    public function isStoreOn($value)
    {
        $this->setProperty('isStoreOn', $value);
        return $this;
    }

    /**
     * @param OnlineMarketplace|array $value
     * @return $this
     */
    public function setIsStoreOn($value)
    {
        $this->setProperty('isStoreOn', $value);
        return $this;
    }

    /**
     * @param OnlineMarketplace $value
     * @return $this
     */
    public function addIsStoreOn($value)
    {
        $current = $this->getProperty('isStoreOn');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('isStoreOn', $current);
        return $this;
    }

    /**
     * @return OnlineMarketplace|array
     */
    public function getIsStoreOn()
    {
        return $this->getProperty('isStoreOn');
    }
}
