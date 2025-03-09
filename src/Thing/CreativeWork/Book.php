<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;

/**
* A book.
* @see schema:Book
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class Book extends CreativeWork
{
   /**
        * Indicates whether the book is an abridged edition.
        */
    protected $abridged = null;

   /**
        * The ISBN of the book.
        */
    protected $isbn = null;

   /**
        * The edition of the book.
        */
    protected $bookEdition = null;

   /**
        * The number of pages in the book.
        */
    protected $numberOfPages = null;

   /**
        * The illustrator of the book.
        */
    protected $illustrator = null;

   /**
        * The format of the book.
        */
    protected $bookFormat = null;


    /**
    * @param array|string $value
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

    /**
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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


}
