<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Event;

use Sohophp\SchemaOrg\Thing\Event;
use Sohophp\SchemaOrg\Thing\Person;

/**
 * An instance of a <a class="localLink" href="http://schema.org/Course">Course</a> which is distinct from other instances because it is offered at a different time or location or through different media or modes of study or to a specific section of students.
 *
 * @see http://schema.org/CourseInstance
 */
class CourseInstance extends Event
{
    /**
     * A person assigned to instruct or provide instructional assistance for the <a class="localLink" href="http://schema.org/CourseInstance">CourseInstance</a>.
     *
     * @param Person $value
     *
     * @return $this
     */
    public function instructor(?Person $value): self
    {
        $this->setProperty('instructor', $value);

        return $this;
    }

    /**
     * The medium or means of delivery of the course instance or the mode of study, either as a text label (e.g. "online", "onsite" or "blended"; "synchronous" or "asynchronous"; "full-time" or "part-time") or as a URL reference to a term from a controlled vocabulary (e.g. https://ceds.ed.gov/element/001311#Asynchronous ).
     *
     * @param string|string $value
     *
     * @return $this
     */
    public function courseMode($value): self
    {
        $this->setProperty('courseMode', $value);

        return $this;
    }
}
