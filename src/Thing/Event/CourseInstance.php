<?php
namespace Sohophp\SchemaOrg\Thing\Event;

use Sohophp\SchemaOrg\Thing\Event;
use Sohophp\SchemaOrg\Thing\Person;

/**
* An instance of a [[Course]] which is distinct from other instances because it
 * is offered at a different time or location or through different media or
 * modes of study or to a specific section of students.
* @see http://schema.org/CourseInstance
* @package Sohophp\SchemaOrg\Thing\Event
*/
class CourseInstance extends Event
{


    /**
        * A person assigned to instruct or provide instructional assistance for the
 * [[CourseInstance]].
        * @param Person|array|string|mixed $value
    * @return $this
    */
    public function instructor($value)
    {
        $this->setProperty('instructor', $value);
        return $this;
    }

    /**
    * @param Person|array|string|mixed $value
    * @return $this
    */
    public function setInstructor($value)
    {
        $this->setProperty('instructor', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getInstructor()
    {
       return $this->getProperty('instructor');
    }


    /**
        * The medium or means of delivery of the course instance or the mode of study,
 * either as a text label (e.g. "online", "onsite" or "blended"; "synchronous"
 * or "asynchronous"; "full-time" or "part-time") or as a URL reference to a
 * term from a controlled vocabulary (e.g.
 * https://ceds.ed.gov/element/001311#Asynchronous ).
        * @param string|string|array|mixed $value
    * @return $this
    */
    public function courseMode($value)
    {
        $this->setProperty('courseMode', $value);
        return $this;
    }

    /**
    * @param string|string|array|mixed $value
    * @return $this
    */
    public function setCourseMode($value)
    {
        $this->setProperty('courseMode', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCourseMode()
    {
       return $this->getProperty('courseMode');
    }


    /**
        * The amount of work expected of students taking the course, often provided as
 * a figure per week or per month, and may be broken down by type. For example,
 * "2 hours of lectures, 1 hour of lab work and 3 hours of independent study per
 * week".
        * @param string|array|mixed $value
    * @return $this
    */
    public function courseWorkload($value)
    {
        $this->setProperty('courseWorkload', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setCourseWorkload($value)
    {
        $this->setProperty('courseWorkload', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCourseWorkload()
    {
       return $this->getProperty('courseWorkload');
    }


}
