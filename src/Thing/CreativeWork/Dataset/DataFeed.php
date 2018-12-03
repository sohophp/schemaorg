<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\CreativeWork\Dataset;

use Sohophp\SchemaOrg\Thing\CreativeWork\Dataset;
use Sohophp\SchemaOrg\Thing\Intangible\DataFeedItem;
use Sohophp\SchemaOrg\Thing;

/**
 * A single feed providing structured information about one or more entities or topics.
 *
 * @see http://schema.org/DataFeed
 */
class DataFeed extends Dataset
{
    /**
     * An item within in a data feed. Data feeds may have many elements.
     *
     * @param string|DataFeedItem|Thing $value
     *
     * @return $this
     */
    public function dataFeedElement($value): self
    {
        $this->setProperty('dataFeedElement', $value);

        return $this;
    }
}
