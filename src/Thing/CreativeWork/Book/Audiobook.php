<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork\Book;

use Sohophp\SchemaOrg\Thing\CreativeWork\Book;

/**
* An audiobook.
* @see schema:Audiobook
* @package Sohophp\SchemaOrg\Thing\CreativeWork\Book
*/
class Audiobook extends Book
{


    /**
        * A person who reads (performs) the audiobook.
        * @param array|string|mixed $value
    * @return $this
    */
    public function readBy($value)
    {
        $this->setProperty('readBy', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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


    /**
        * The duration of the item (movie, audio recording, event, etc.) in [ISO 8601
 * duration format](http://en.wikipedia.org/wiki/ISO_8601).
        * @param array|string|mixed $value
    * @return $this
    */
    public function duration($value)
    {
        $this->setProperty('duration', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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


}
