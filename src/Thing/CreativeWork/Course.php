<?php

declare (strict_types=1);

namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\Intangible\AlignmentObject;
use Sohophp\SchemaOrg\Thing\Event\CourseInstance;
/**
* A description of an educational course which may be offered as distinct instances at which take place at different times or take place at different locations, or be offered through different media or modes of study. An educational course is a sequence of one or more educational events and/or creative works which aims to build knowledge, competence or ability of learners.
* @see http://schema.org/Course
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class Course extends CreativeWork
{

     
     /**
     * Requirements for taking the Course. May be completion of another <a class="localLink" href="http://schema.org/Course">Course</a> or a textual description like "permission of instructor". Requirements may be a pre-requisite competency, referenced using <a class="localLink" href="http://schema.org/AlignmentObject">AlignmentObject</a>.
     * @param string|AlignmentObject|Course $value
     * @return $this
     */

     public function coursePrerequisites( $value):self
     {
        $this->setProperty("coursePrerequisites",$value);
        return $this;
     }

     
     /**
     * An offering of the course at a specific time and place or through specific media or mode of study or to a specific section of students.
     * @param CourseInstance $value
     * @return $this
     */

     public function hasCourseInstance(?CourseInstance $value):self
     {
        $this->setProperty("hasCourseInstance",$value);
        return $this;
     }

     
     /**
     * The identifier for the <a class="localLink" href="http://schema.org/Course">Course</a> used by the course <a class="localLink" href="http://schema.org/provider">provider</a> (e.g. CS101 or 6.001).
     * @param string $value
     * @return $this
     */

     public function courseCode(?string $value):self
     {
        $this->setProperty("courseCode",$value);
        return $this;
     }

     
}

