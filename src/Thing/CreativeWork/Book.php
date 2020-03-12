<?php declare(strict_types=1);
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
    */
    public function isbn(?string $value)
    {
        $this->setProperty('isbn', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setIsbn(?string $value)
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
    */
    public function bookEdition(?string $value)
    {
        $this->setProperty('bookEdition', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setBookEdition(?string $value)
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
    * @param BookFormatType|array $value
    * @return $this
    */
    public function bookFormat(?BookFormatType $value)
    {
        $this->setProperty('bookFormat', $value);
        return $this;
    }
   /**
    * @param BookFormatType|array $value
    * @return $this
    */
    public function setBookFormat(?BookFormatType $value)
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
    * @param int|array $value
    * @return $this
    */
    public function numberOfPages(?int $value)
    {
        $this->setProperty('numberOfPages', $value);
        return $this;
    }
   /**
    * @param int|array $value
    * @return $this
    */
    public function setNumberOfPages(?int $value)
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
    * @param Person|array $value
    * @return $this
    */
    public function illustrator(?Person $value)
    {
        $this->setProperty('illustrator', $value);
        return $this;
    }
   /**
    * @param Person|array $value
    * @return $this
    */
    public function setIllustrator(?Person $value)
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
    * @param bool|array $value
    * @return $this
    */
    public function abridged(?bool $value)
    {
        $this->setProperty('abridged', $value);
        return $this;
    }
   /**
    * @param bool|array $value
    * @return $this
    */
    public function setAbridged(?bool $value)
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


class_alias('Sohophp\\SchemaOrg\\Thing\\CreativeWork\\Book','Thing\\Book');

