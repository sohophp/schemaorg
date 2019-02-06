<?php

declare (strict_types=1);

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

     public function isbn(?string $value):self
     {
        $this->setProperty("isbn",$value);
        return $this;
     }

     
     /**
     * The edition of the book.
     * @param string $value
     * @return $this
     */

     public function bookEdition(?string $value):self
     {
        $this->setProperty("bookEdition",$value);
        return $this;
     }

     
     /**
     * The format of the book.
     * @param BookFormatType $value
     * @return $this
     */

     public function bookFormat(?BookFormatType $value):self
     {
        $this->setProperty("bookFormat",$value);
        return $this;
     }

     
     /**
     * The number of pages in the book.
     * @param int $value
     * @return $this
     */

     public function numberOfPages(?int $value):self
     {
        $this->setProperty("numberOfPages",$value);
        return $this;
     }

     
     /**
     * The illustrator of the book.
     * @param Person $value
     * @return $this
     */

     public function illustrator(?Person $value):self
     {
        $this->setProperty("illustrator",$value);
        return $this;
     }

     
}

