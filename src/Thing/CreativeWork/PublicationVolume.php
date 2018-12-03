<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;

/**
 * A part of a successively published publication such as a periodical or multi-volume work, often numbered. It may represent a time span, such as a year.<br/><br/>.
<pre><code>  &lt;br/&gt;&lt;br/&gt;See also &lt;a href="http://blog.schema.org/2014/09/schemaorg-support-for-bibliographic_2.html"&gt;blog post&lt;/a&gt;.
</code></pre>

 * @see http://schema.org/PublicationVolume
 */
class PublicationVolume extends CreativeWork
{
    /**
     * Identifies the volume of publication or multi-part work; for example, "iii" or "2".
     *
     * @param string|int $value
     *
     * @return $this
     */
    public function volumeNumber($value): self
    {
        $this->setProperty('volumeNumber', $value);

        return $this;
    }
}
