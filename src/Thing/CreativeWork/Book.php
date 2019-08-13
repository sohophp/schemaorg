<?php declare(strict_types=1);
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
    * @param string $value
    * @return $this
    */
    public function isbn(?string $value)
    {
        $this->setProperty('isbn', $value);
        return $this;
    }

    /**
    * The edition of the book.
    * @param string $value
    * @return $this
    */
    public function bookEdition(?string $value)
    {
        $this->setProperty('bookEdition', $value);
        return $this;
    }

    /**
    * The format of the book.
    * @param BookFormatType $value
    * @return $this
    */
    public function bookFormat(?BookFormatType $value)
    {
        $this->setProperty('bookFormat', $value);
        return $this;
    }

    /**
    * The number of pages in the book.
    * @param int $value
    * @return $this
    */
    public function numberOfPages(?int $value)
    {
        $this->setProperty('numberOfPages', $value);
        return $this;
    }

    /**
    * The illustrator of the book.
    * @param Person $value
    * @return $this
    */
    public function illustrator(?Person $value)
    {
        $this->setProperty('illustrator', $value);
        return $this;
    }

    /**
    * Indicates whether the book is an abridged edition.
    * @param bool $value
    * @return $this
    */
    public function abridged(?bool $value)
    {
        $this->setProperty('abridged', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\CreativeWork\\Book','Thing\\Book');

