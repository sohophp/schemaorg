<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;

/**
* A part of a successively published publication such as a periodical or multi-volume work, often numbered. It may represent a time span, such as a year.<br/><br/>

<pre><code>  &lt;br/&gt;&lt;br/&gt;See also &lt;a href="http://blog.schema.org/2014/09/schemaorg-support-for-bibliographic_2.html"&gt;blog post&lt;/a&gt;.
</code></pre>

* @see http://schema.org/PublicationVolume
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class PublicationVolume extends CreativeWork
{

    /**
    * Any description of pages that is not separated into pageStart and pageEnd; for example, "1-6, 9, 55" or "10-12, 46-49".
    * @param string $value
    * @return $this
    */
    public function pagination(?string $value)
    {
        $this->setProperty('pagination', $value);
        return $this;
    }

    /**
    * The page on which the work ends; for example "138" or "xvi".
    * @param int|string $value
    * @return $this
    */
    public function pageEnd($value)
    {
        $this->setProperty('pageEnd', $value);
        return $this;
    }

    /**
    * Identifies the volume of publication or multi-part work; for example, "iii" or "2".
    * @param string|int $value
    * @return $this
    */
    public function volumeNumber($value)
    {
        $this->setProperty('volumeNumber', $value);
        return $this;
    }

    /**
    * The page on which the work starts; for example "135" or "xiii".
    * @param string|int $value
    * @return $this
    */
    public function pageStart($value)
    {
        $this->setProperty('pageStart', $value);
        return $this;
    }


}

