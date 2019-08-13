<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;

/**
* A part of a successively published publication such as a periodical or publication volume, often numbered, usually containing a grouping of works such as articles.<br/><br/>

See also <a href="http://blog.schema.org/2014/09/schemaorg-support-for-bibliographic_2.html">blog post</a>.
* @see http://schema.org/PublicationIssue
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class PublicationIssue extends CreativeWork
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
    * Identifies the issue of publication; for example, "iii" or "2".
    * @param string|int $value
    * @return $this
    */
    public function issueNumber($value)
    {
        $this->setProperty('issueNumber', $value);
        return $this;
    }

    /**
    * The page on which the work ends; for example "138" or "xvi".
    * @param string|int $value
    * @return $this
    */
    public function pageEnd($value)
    {
        $this->setProperty('pageEnd', $value);
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


class_alias('Sohophp\\SchemaOrg\\Thing\\CreativeWork\\PublicationIssue','Thing\\PublicationIssue');

