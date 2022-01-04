<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\BookFormatType;
use Sohophp\SchemaOrg\Thing\Person;

/**
* A book.
* @see http://schema.org/Book
* @package Sohophp\SchemaOrg\Thing\CreativeWork

*
*/
class Book extends CreativeWork
{

    /**
    * The ISBN of the book.
    * @param string|array $value
    * @return $this
    * @deprecated use setIsbn
    */
    public function isbn($value)
    {
        $this->setProperty('isbn', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setIsbn($value)
    {
        $this->setProperty('isbn', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getIsbn()
    {
       return $this->getProperty('isbn');
    }

    /**
    * The edition of the book.
    * @param string|array $value
    * @return $this
    * @deprecated use setBookEdition
    */
    public function bookEdition($value)
    {
        $this->setProperty('bookEdition', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setBookEdition($value)
    {
        $this->setProperty('bookEdition', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getBookEdition()
    {
       return $this->getProperty('bookEdition');
    }

    /**
    * The format of the book.
    * @param BookFormatType|array|string $value
    * @return $this
    * @deprecated use setBookFormat
    */
    public function bookFormat($value)
    {
        $this->setProperty('bookFormat', $value);
        return $this;
    }
   /**
    * @param BookFormatType|array|string $value
    * @return $this
    */
    public function setBookFormat($value)
    {
        $this->setProperty('bookFormat', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getBookFormat()
    {
       return $this->getProperty('bookFormat');
    }

    /**
    * The number of pages in the book.
    * @param int|array|string $value
    * @return $this
    * @deprecated use setNumberOfPages
    */
    public function numberOfPages($value)
    {
        $this->setProperty('numberOfPages', $value);
        return $this;
    }
   /**
    * @param int|array|string $value
    * @return $this
    */
    public function setNumberOfPages($value)
    {
        $this->setProperty('numberOfPages', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getNumberOfPages()
    {
       return $this->getProperty('numberOfPages');
    }

    /**
    * The illustrator of the book.
    * @param Person|array|string $value
    * @return $this
    * @deprecated use setIllustrator
    */
    public function illustrator($value)
    {
        $this->setProperty('illustrator', $value);
        return $this;
    }
   /**
    * @param Person|array|string $value
    * @return $this
    */
    public function setIllustrator($value)
    {
        $this->setProperty('illustrator', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getIllustrator()
    {
       return $this->getProperty('illustrator');
    }

    /**
    * Indicates whether the book is an abridged edition.
    * @param bool|array|string $value
    * @return $this
    * @deprecated use setAbridged
    */
    public function abridged($value)
    {
        $this->setProperty('abridged', $value);
        return $this;
    }
   /**
    * @param bool|array|string $value
    * @return $this
    */
    public function setAbridged($value)
    {
        $this->setProperty('abridged', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAbridged()
    {
       return $this->getProperty('abridged');
    }


}
