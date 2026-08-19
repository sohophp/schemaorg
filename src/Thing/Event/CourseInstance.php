<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Event;

use Sohophp\SchemaOrg\Thing\Event;
use Sohophp\SchemaOrg\Thing\Intangible\Schedule;
use Sohophp\SchemaOrg\Thing\Person;

/**
 * An instance of a [[Course]] which is distinct from other instances because it is offered at a different time or location or through different media or modes of study or to a specific section of students.
 * @see https://schema.org/CourseInstance
 * @package Sohophp\SchemaOrg\Thing\Event
 */
class CourseInstance extends Event
{
    /**
     * Represents the length and pace of a course, expressed as a [[Schedule]].
     * @see https://schema.org/courseSchedule
     * @param Schedule|array $value
     * @return $this
     */
    public function courseSchedule($value)
    {
        $this->setProperty('courseSchedule', $value);
        return $this;
    }

    /**
     * @param Schedule|array $value
     * @return $this
     */
    public function setCourseSchedule($value)
    {
        $this->setProperty('courseSchedule', $value);
        return $this;
    }

    /**
     * @param Schedule $value
     * @return $this
     */
    public function addCourseSchedule($value)
    {
        $current = $this->getProperty('courseSchedule');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('courseSchedule', $current);
        return $this;
    }

    /**
     * @return Schedule|array
     */
    public function getCourseSchedule()
    {
        return $this->getProperty('courseSchedule');
    }
    /**
     * The amount of work expected of students taking the course, often provided as a figure per week or per month, and may be broken down by type. For example, "2 hours of lectures, 1 hour of lab work and 3 hours of independent study per week".
     * @see https://schema.org/courseWorkload
     * @param string|array $value
     * @return $this
     */
    public function courseWorkload($value)
    {
        $this->setProperty('courseWorkload', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setCourseWorkload($value)
    {
        $this->setProperty('courseWorkload', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addCourseWorkload($value)
    {
        $current = $this->getProperty('courseWorkload');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('courseWorkload', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getCourseWorkload()
    {
        return $this->getProperty('courseWorkload');
    }
    /**
     * The medium or means of delivery of the course instance or the mode of study, either as a text label (e.g. "online", "onsite" or "blended"; "synchronous" or "asynchronous"; "full-time" or "part-time") or as a URL reference to a term from a controlled vocabulary (e.g. https://ceds.ed.gov/element/001311#Asynchronous).
     * @see https://schema.org/courseMode
     * @param string|array $value
     * @return $this
     */
    public function courseMode($value)
    {
        $this->setProperty('courseMode', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setCourseMode($value)
    {
        $this->setProperty('courseMode', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addCourseMode($value)
    {
        $current = $this->getProperty('courseMode');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('courseMode', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getCourseMode()
    {
        return $this->getProperty('courseMode');
    }
    /**
     * A person assigned to instruct or provide instructional assistance for the [[CourseInstance]].
     * @see https://schema.org/instructor
     * @param Person|array $value
     * @return $this
     */
    public function instructor($value)
    {
        $this->setProperty('instructor', $value);
        return $this;
    }

    /**
     * @param Person|array $value
     * @return $this
     */
    public function setInstructor($value)
    {
        $this->setProperty('instructor', $value);
        return $this;
    }

    /**
     * @param Person $value
     * @return $this
     */
    public function addInstructor($value)
    {
        $current = $this->getProperty('instructor');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('instructor', $current);
        return $this;
    }

    /**
     * @return Person|array
     */
    public function getInstructor()
    {
        return $this->getProperty('instructor');
    }
}
