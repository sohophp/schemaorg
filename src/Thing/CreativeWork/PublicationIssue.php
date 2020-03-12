<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;

/**
* A part of a successively published publication such as a periodical or publication volume, often numbered, usually containing a grouping of works such as articles.<br/><br/>

See also <a href="http://blog.schema.org/2014/09/schemaorg-support-for-bibliographic_2.html">blog post</a>.
* @see http://schema.org/PublicationIssue
* @package Sohophp\SchemaOrg\Thing\CreativeWork

*
*/
class PublicationIssue extends CreativeWork
{

    /**
    * Any description of pages that is not separated into pageStart and pageEnd; for example, "1-6, 9, 55" or "10-12, 46-49".
    * @param string|array $value
    * @return $this
    */
    public function pagination(?string $value)
    {
        $this->setProperty('pagination', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setPagination(?string $value)
    {
        $this->setProperty('pagination', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getPagination()
    {
       return $this->getProperty('pagination');
    }

    /**
    * Identifies the issue of publication; for example, "iii" or "2".
    * @param string|int|array $value
    * @return $this
    */
    public function issueNumber($value)
    {
        $this->setProperty('issueNumber', $value);
        return $this;
    }
   /**
    * @param string|int|array $value
    * @return $this
    */
    public function setIssueNumber($value)
    {
        $this->setProperty('issueNumber', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getIssueNumber()
    {
       return $this->getProperty('issueNumber');
    }

    /**
    * The page on which the work ends; for example "138" or "xvi".
    * @param string|int|array $value
    * @return $this
    */
    public function pageEnd($value)
    {
        $this->setProperty('pageEnd', $value);
        return $this;
    }
   /**
    * @param string|int|array $value
    * @return $this
    */
    public function setPageEnd($value)
    {
        $this->setProperty('pageEnd', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getPageEnd()
    {
       return $this->getProperty('pageEnd');
    }

    /**
    * The page on which the work starts; for example "135" or "xiii".
    * @param string|int|array $value
    * @return $this
    */
    public function pageStart($value)
    {
        $this->setProperty('pageStart', $value);
        return $this;
    }
   /**
    * @param string|int|array $value
    * @return $this
    */
    public function setPageStart($value)
    {
        $this->setProperty('pageStart', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getPageStart()
    {
       return $this->getProperty('pageStart');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\CreativeWork\\PublicationIssue','Thing\\PublicationIssue');

