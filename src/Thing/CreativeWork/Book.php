<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\BookFormatType;
use Sohophp\SchemaOrg\Thing\Person;

/**
* A book.
* @see http://schema.org/Book
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class Book extends CreativeWork
{


    /**
        * The ISBN of the book.
        * @param string|array|mixed $value
    * @return $this
    */
    public function isbn($value)
    {
        $this->setProperty('isbn', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setIsbn($value)
    {
        $this->setProperty('isbn', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getIsbn()
    {
       return $this->getProperty('isbn');
    }


    /**
        * The edition of the book.
        * @param string|array|mixed $value
    * @return $this
    */
    public function bookEdition($value)
    {
        $this->setProperty('bookEdition', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setBookEdition($value)
    {
        $this->setProperty('bookEdition', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getBookEdition()
    {
       return $this->getProperty('bookEdition');
    }


    /**
        * The format of the book.
        * @param BookFormatType|array|string|mixed $value
    * @return $this
    */
    public function bookFormat($value)
    {
        $this->setProperty('bookFormat', $value);
        return $this;
    }

    /**
    * @param BookFormatType|array|string|mixed $value
    * @return $this
    */
    public function setBookFormat($value)
    {
        $this->setProperty('bookFormat', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getBookFormat()
    {
       return $this->getProperty('bookFormat');
    }


    /**
        * The number of pages in the book.
        * @param int|array|string|mixed $value
    * @return $this
    */
    public function numberOfPages($value)
    {
        $this->setProperty('numberOfPages', $value);
        return $this;
    }

    /**
    * @param int|array|string|mixed $value
    * @return $this
    */
    public function setNumberOfPages($value)
    {
        $this->setProperty('numberOfPages', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getNumberOfPages()
    {
       return $this->getProperty('numberOfPages');
    }


    /**
        * The illustrator of the book.
        * @param Person|array|string|mixed $value
    * @return $this
    */
    public function illustrator($value)
    {
        $this->setProperty('illustrator', $value);
        return $this;
    }

    /**
    * @param Person|array|string|mixed $value
    * @return $this
    */
    public function setIllustrator($value)
    {
        $this->setProperty('illustrator', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getIllustrator()
    {
       return $this->getProperty('illustrator');
    }


    /**
        * Indicates whether the book is an abridged edition.
        * @param bool|array|string|mixed $value
    * @return $this
    */
    public function abridged($value)
    {
        $this->setProperty('abridged', $value);
        return $this;
    }

    /**
    * @param bool|array|string|mixed $value
    * @return $this
    */
    public function setAbridged($value)
    {
        $this->setProperty('abridged', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAbridged()
    {
       return $this->getProperty('abridged');
    }


}
