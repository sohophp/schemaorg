<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;

/**
* One of the sections into which a book is divided. A chapter usually has a
 * section number or a name.
* @see http://schema.org/Chapter
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class Chapter extends CreativeWork
{


    /**
        * Any description of pages that is not separated into pageStart and pageEnd;
 * for example, "1-6, 9, 55" or "10-12, 46-49".
        * @param string|array|mixed $value
    * @return $this
    */
    public function pagination($value)
    {
        $this->setProperty('pagination', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
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
        * The page on which the work ends; for example "138" or "xvi".
        * @param string|int|array|mixed $value
    * @return $this
    */
    public function pageEnd($value)
    {
        $this->setProperty('pageEnd', $value);
        return $this;
    }

    /**
    * @param string|int|array|mixed $value
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
        * The page on which the work starts; for example "135" or "xiii".
        * @param string|int|array|mixed $value
    * @return $this
    */
    public function pageStart($value)
    {
        $this->setProperty('pageStart', $value);
        return $this;
    }

    /**
    * @param string|int|array|mixed $value
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
