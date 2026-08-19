<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\BookFormatType;
use Sohophp\SchemaOrg\Thing\Person;

/**
 * A book.
 * @see https://schema.org/Book
 * @package Sohophp\SchemaOrg\Thing\CreativeWork
 */
class Book extends CreativeWork
{
    /**
     * Indicates whether the book is an abridged edition.
     * @see https://schema.org/abridged
     * @param bool|array $value
     * @return $this
     */
    public function abridged($value)
    {
        $this->setProperty('abridged', $value);
        return $this;
    }

    /**
     * @param bool|array $value
     * @return $this
     */
    public function setAbridged($value)
    {
        $this->setProperty('abridged', $value);
        return $this;
    }

    /**
     * @param bool $value
     * @return $this
     */
    public function addAbridged($value)
    {
        $current = $this->getProperty('abridged');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('abridged', $current);
        return $this;
    }

    /**
     * @return bool|array
     */
    public function getAbridged()
    {
        return $this->getProperty('abridged');
    }
    /**
     * The format of the book.
     * @see https://schema.org/bookFormat
     * @param BookFormatType|array $value
     * @return $this
     */
    public function bookFormat($value)
    {
        $this->setProperty('bookFormat', $value);
        return $this;
    }

    /**
     * @param BookFormatType|array $value
     * @return $this
     */
    public function setBookFormat($value)
    {
        $this->setProperty('bookFormat', $value);
        return $this;
    }

    /**
     * @param BookFormatType $value
     * @return $this
     */
    public function addBookFormat($value)
    {
        $current = $this->getProperty('bookFormat');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('bookFormat', $current);
        return $this;
    }

    /**
     * @return BookFormatType|array
     */
    public function getBookFormat()
    {
        return $this->getProperty('bookFormat');
    }
    /**
     * The edition of the book.
     * @see https://schema.org/bookEdition
     * @param string|array $value
     * @return $this
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
     * @param string $value
     * @return $this
     */
    public function addBookEdition($value)
    {
        $current = $this->getProperty('bookEdition');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('bookEdition', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getBookEdition()
    {
        return $this->getProperty('bookEdition');
    }
    /**
     * The illustrator of the book.
     * @see https://schema.org/illustrator
     * @param Person|array $value
     * @return $this
     */
    public function illustrator($value)
    {
        $this->setProperty('illustrator', $value);
        return $this;
    }

    /**
     * @param Person|array $value
     * @return $this
     */
    public function setIllustrator($value)
    {
        $this->setProperty('illustrator', $value);
        return $this;
    }

    /**
     * @param Person $value
     * @return $this
     */
    public function addIllustrator($value)
    {
        $current = $this->getProperty('illustrator');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('illustrator', $current);
        return $this;
    }

    /**
     * @return Person|array
     */
    public function getIllustrator()
    {
        return $this->getProperty('illustrator');
    }
    /**
     * The number of pages in the book.
     * @see https://schema.org/numberOfPages
     * @param int|array $value
     * @return $this
     */
    public function numberOfPages($value)
    {
        $this->setProperty('numberOfPages', $value);
        return $this;
    }

    /**
     * @param int|array $value
     * @return $this
     */
    public function setNumberOfPages($value)
    {
        $this->setProperty('numberOfPages', $value);
        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function addNumberOfPages($value)
    {
        $current = $this->getProperty('numberOfPages');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('numberOfPages', $current);
        return $this;
    }

    /**
     * @return int|array
     */
    public function getNumberOfPages()
    {
        return $this->getProperty('numberOfPages');
    }
    /**
     * The ISBN of the book.
     * @see https://schema.org/isbn
     * @param string|array $value
     * @return $this
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
     * @param string $value
     * @return $this
     */
    public function addIsbn($value)
    {
        $current = $this->getProperty('isbn');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('isbn', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getIsbn()
    {
        return $this->getProperty('isbn');
    }
}
