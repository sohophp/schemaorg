<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\CreativeWork\Book;

use Sohophp\SchemaOrg\Thing\CreativeWork\Book;
use Sohophp\SchemaOrg\Thing\Intangible\Quantity\Duration;
use Sohophp\SchemaOrg\Thing\Person;

/**
* An audiobook.
* @see http://schema.org/Audiobook
* @package Sohophp\SchemaOrg\Thing\CreativeWork\Book
*/
class Audiobook extends Book
{

    /**
    * The duration of the item (movie, audio recording, event, etc.) in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 date format</a>.
    * @param Duration $value
    * @return $this
    */
    public function duration(?Duration $value)
    {
        $this->setProperty('duration', $value);
        return $this;
    }

    /**
    * A person who reads (performs) the audiobook.
    * @param Person $value
    * @return $this
    */
    public function readBy(?Person $value)
    {
        $this->setProperty('readBy', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\CreativeWork\\Book\\Audiobook','Thing\\Audiobook');

