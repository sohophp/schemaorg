<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\CreativeWork\Book;

use Sohophp\SchemaOrg\Thing\CreativeWork\Book;
use Sohophp\SchemaOrg\Thing\Intangible\Quantity\Duration;
use Sohophp\SchemaOrg\Thing\Person;

/**
* An audiobook.
* @see http://schema.org/Audiobook
* @package Sohophp\SchemaOrg\Thing\CreativeWork\Book

*
*/
class Audiobook extends Book
{

    /**
    * The duration of the item (movie, audio recording, event, etc.) in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 date format</a>.
    * @param Duration|array $value
    * @return $this
    */
    public function duration(?Duration $value)
    {
        $this->setProperty('duration', $value);
        return $this;
    }
   /**
    * @param Duration|array $value
    * @return $this
    */
    public function setDuration(?Duration $value)
    {
        $this->setProperty('duration', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getDuration()
    {
       return $this->getProperty('duration');
    }

    /**
    * A person who reads (performs) the audiobook.
    * @param Person|array $value
    * @return $this
    */
    public function readBy(?Person $value)
    {
        $this->setProperty('readBy', $value);
        return $this;
    }
   /**
    * @param Person|array $value
    * @return $this
    */
    public function setReadBy(?Person $value)
    {
        $this->setProperty('readBy', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getReadBy()
    {
       return $this->getProperty('readBy');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\CreativeWork\\Book\\Audiobook','Thing\\Audiobook');

