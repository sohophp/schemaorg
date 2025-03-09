<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;

/**
* A part of a successively published publication such as a periodical or publication volume, often numbered, usually containing a grouping of works such as articles.\n\nSee also [blog post](http://blog.schema.org/2014/09/schemaorg-support-for-bibliographic_2.html).
* @see schema:PublicationIssue
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class PublicationIssue extends CreativeWork
{
   /**
        * Identifies the issue of publication; for example, "iii" or "2".
        */
    protected $issueNumber = null;

   /**
        * The page on which the work ends; for example "138" or "xvi".
        */
    protected $pageEnd = null;

   /**
        * Any description of pages that is not separated into pageStart and pageEnd; for example, "1-6, 9, 55" or "10-12, 46-49".
        */
    protected $pagination = null;

   /**
        * The page on which the work starts; for example "135" or "xiii".
        */
    protected $pageStart = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setIssueNumber($value)
    {
        $this->setProperty('issueNumber', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getIssueNumber()
    {
       return $this->getProperty('issueNumber');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setPageEnd($value)
    {
        $this->setProperty('pageEnd', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPageEnd()
    {
       return $this->getProperty('pageEnd');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setPagination($value)
    {
        $this->setProperty('pagination', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPagination()
    {
       return $this->getProperty('pagination');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setPageStart($value)
    {
        $this->setProperty('pageStart', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPageStart()
    {
       return $this->getProperty('pageStart');
    }


}
