<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;

/**
* One of the sections into which a book is divided. A chapter usually has a section number or a name.
* @see http://schema.org/Chapter
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class Chapter extends CreativeWork
{

    /**
    * Any description of pages that is not separated into pageStart and pageEnd; for example, "1-6, 9, 55" or "10-12, 46-49".
    * @param string $value
    * @return $this
    */
    public function pagination(?string $value)
    {
        $this->setProperty('pagination', $value);
        return $this;
    }

    /**
    * The page on which the work ends; for example "138" or "xvi".
    * @param string|int $value
    * @return $this
    */
    public function pageEnd($value)
    {
        $this->setProperty('pageEnd', $value);
        return $this;
    }

    /**
    * The page on which the work starts; for example "135" or "xiii".
    * @param string|int $value
    * @return $this
    */
    public function pageStart($value)
    {
        $this->setProperty('pageStart', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\CreativeWork\\Chapter','Thing\\Chapter');

