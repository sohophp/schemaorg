<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\CreativeWork\Article;

use Sohophp\SchemaOrg\Thing\CreativeWork\Article;

/**
 * A Report generated by governmental or non-governmental organization.
 *
 * @see http://schema.org/Report
 */
class Report extends Article
{
    /**
     * The number or other unique designator assigned to a Report by the publishing organization.
     *
     * @param string $value
     *
     * @return $this
     */
    public function reportNumber(?string $value): self
    {
        $this->setProperty('reportNumber', $value);

        return $this;
    }
}
