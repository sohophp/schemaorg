<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;

/**
 * A single item within a larger data feed.
 *
 * @see http://schema.org/DataFeedItem
 */
class DataFeedItem extends Intangible
{
    /**
     * The datetime the item was removed from the DataFeed.
     *
     * @param  $value
     *
     * @return $this
     */
    public function dateDeleted($value): self
    {
        $this->setProperty('dateDeleted', $value);

        return $this;
    }
}
