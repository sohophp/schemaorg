<?php

declare (strict_types=1);

namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
/**
* A part of a successively published publication such as a periodical or publication volume, often numbered, usually containing a grouping of works such as articles.<br/><br/>

<a href="http://blog.schema.org/2014/09/schemaorg-support-for-bibliographic_2.html">blog post</a>.
* @see http://schema.org/PublicationIssue
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class PublicationIssue extends CreativeWork
{

     
     /**
     * Identifies the issue of publication; for example, "iii" or "2".
     * @param string|int $value
     * @return $this
     */

     public function issueNumber( $value):self
     {
        $this->setProperty("issueNumber",$value);
        return $this;
     }

     
}

