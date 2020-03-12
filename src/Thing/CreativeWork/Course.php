<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\Intangible\AlignmentObject;
use Sohophp\SchemaOrg\Thing\CreativeWork\EducationalOccupationalCredential;
use Sohophp\SchemaOrg\Thing\Event\CourseInstance;

/**
* A description of an educational course which may be offered as distinct instances at which take place at different times or take place at different locations, or be offered through different media or modes of study. An educational course is a sequence of one or more educational events and/or creative works which aims to build knowledge, competence or ability of learners.
* @see http://schema.org/Course
* @package Sohophp\SchemaOrg\Thing\CreativeWork

*
*/
class Course extends CreativeWork
{

    /**
    * Requirements for taking the Course. May be completion of another <a class="localLink" href="http://schema.org/Course">Course</a> or a textual description like "permission of instructor". Requirements may be a pre-requisite competency, referenced using <a class="localLink" href="http://schema.org/AlignmentObject">AlignmentObject</a>.
    * @param string|AlignmentObject|Course|array $value
    * @return $this
    */
    public function coursePrerequisites($value)
    {
        $this->setProperty('coursePrerequisites', $value);
        return $this;
    }
   /**
    * @param string|AlignmentObject|Course|array $value
    * @return $this
    */
    public function setCoursePrerequisites($value)
    {
        $this->setProperty('coursePrerequisites', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getCoursePrerequisites()
    {
       return $this->getProperty('coursePrerequisites');
    }

    /**
    * A description of the qualification, award, certificate, diploma or other educational credential awarded as a consequence of successful completion of this course or program.
    * @param EducationalOccupationalCredential|string|string|array $value
    * @return $this
    */
    public function educationalCredentialAwarded($value)
    {
        $this->setProperty('educationalCredentialAwarded', $value);
        return $this;
    }
   /**
    * @param EducationalOccupationalCredential|string|string|array $value
    * @return $this
    */
    public function setEducationalCredentialAwarded($value)
    {
        $this->setProperty('educationalCredentialAwarded', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getEducationalCredentialAwarded()
    {
       return $this->getProperty('educationalCredentialAwarded');
    }

    /**
    * An offering of the course at a specific time and place or through specific media or mode of study or to a specific section of students.
    * @param CourseInstance|array $value
    * @return $this
    */
    public function hasCourseInstance(?CourseInstance $value)
    {
        $this->setProperty('hasCourseInstance', $value);
        return $this;
    }
   /**
    * @param CourseInstance|array $value
    * @return $this
    */
    public function setHasCourseInstance(?CourseInstance $value)
    {
        $this->setProperty('hasCourseInstance', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getHasCourseInstance()
    {
       return $this->getProperty('hasCourseInstance');
    }

    /**
    * A description of the qualification, award, certificate, diploma or other occupational credential awarded as a consequence of successful completion of this course or program.
    * @param string|EducationalOccupationalCredential|string|array $value
    * @return $this
    */
    public function occupationalCredentialAwarded($value)
    {
        $this->setProperty('occupationalCredentialAwarded', $value);
        return $this;
    }
   /**
    * @param string|EducationalOccupationalCredential|string|array $value
    * @return $this
    */
    public function setOccupationalCredentialAwarded($value)
    {
        $this->setProperty('occupationalCredentialAwarded', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getOccupationalCredentialAwarded()
    {
       return $this->getProperty('occupationalCredentialAwarded');
    }

    /**
    * The identifier for the <a class="localLink" href="http://schema.org/Course">Course</a> used by the course <a class="localLink" href="http://schema.org/provider">provider</a> (e.g. CS101 or 6.001).
    * @param string|array $value
    * @return $this
    */
    public function courseCode(?string $value)
    {
        $this->setProperty('courseCode', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setCourseCode(?string $value)
    {
        $this->setProperty('courseCode', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getCourseCode()
    {
       return $this->getProperty('courseCode');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\CreativeWork\\Course','Thing\\Course');

