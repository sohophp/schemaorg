<?php
namespace Sohophp\SchemaOrg\Thing\Event;

use Sohophp\SchemaOrg\Thing\Event;

/**
* Event type: Education event.
* @see schema:EducationEvent
* @package Sohophp\SchemaOrg\Thing\Event
*/
class EducationEvent extends Event
{
   /**
        * The item being described is intended to help a person learn the competency or learning outcome defined by the referenced term.
        */
    protected $teaches = null;

   /**
        * The level in terms of progression through an educational or training context. Examples of educational levels include 'beginner', 'intermediate' or 'advanced', and formal sets of level indicators.
        */
    protected $educationalLevel = null;

   /**
        * The item being described is intended to assess the competency or learning outcome defined by the referenced term.
        */
    protected $assesses = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setTeaches($value)
    {
        $this->setProperty('teaches', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getTeaches()
    {
       return $this->getProperty('teaches');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setEducationalLevel($value)
    {
        $this->setProperty('educationalLevel', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEducationalLevel()
    {
       return $this->getProperty('educationalLevel');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setAssesses($value)
    {
        $this->setProperty('assesses', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAssesses()
    {
       return $this->getProperty('assesses');
    }


}
