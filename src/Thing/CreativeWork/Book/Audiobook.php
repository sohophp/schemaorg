<?php
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
        * The duration of the item (movie, audio recording, event, etc.) in [ISO 8601
 * date format](http://en.wikipedia.org/wiki/ISO_8601).
        * @param Duration|array|string|mixed $value
    * @return $this
    */
    public function duration($value)
    {
        $this->setProperty('duration', $value);
        return $this;
    }

    /**
    * @param Duration|array|string|mixed $value
    * @return $this
    */
    public function setDuration($value)
    {
        $this->setProperty('duration', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDuration()
    {
       return $this->getProperty('duration');
    }


    /**
        * A person who reads (performs) the audiobook.
        * @param Person|array|string|mixed $value
    * @return $this
    */
    public function readBy($value)
    {
        $this->setProperty('readBy', $value);
        return $this;
    }

    /**
    * @param Person|array|string|mixed $value
    * @return $this
    */
    public function setReadBy($value)
    {
        $this->setProperty('readBy', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getReadBy()
    {
       return $this->getProperty('readBy');
    }


}
