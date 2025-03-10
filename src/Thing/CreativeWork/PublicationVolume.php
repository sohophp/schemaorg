<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;

/**
* A part of a successively published publication such as a periodical or
 * multi-volume work, often numbered. It may represent a time span, such as a
 * year.
 * 
 * See also [blog
 * post](http://blog.schema.org/2014/09/schemaorg-support-for-bibliographic_2.html).
* @see schema:PublicationVolume
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class PublicationVolume extends CreativeWork
{


    /**
        * The page on which the work ends; for example "138" or "xvi".
        * @param array|string|mixed $value
    * @return $this
    */
    public function pageEnd($value)
    {
        $this->setProperty('pageEnd', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Identifies the volume of publication or multi-part work; for example, "iii"
 * or "2".
        * @param array|string|mixed $value
    * @return $this
    */
    public function volumeNumber($value)
    {
        $this->setProperty('volumeNumber', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setVolumeNumber($value)
    {
        $this->setProperty('volumeNumber', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getVolumeNumber()
    {
       return $this->getProperty('volumeNumber');
    }


    /**
        * Any description of pages that is not separated into pageStart and pageEnd;
 * for example, "1-6, 9, 55" or "10-12, 46-49".
        * @param array|string|mixed $value
    * @return $this
    */
    public function pagination($value)
    {
        $this->setProperty('pagination', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The page on which the work starts; for example "135" or "xiii".
        * @param array|string|mixed $value
    * @return $this
    */
    public function pageStart($value)
    {
        $this->setProperty('pageStart', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
