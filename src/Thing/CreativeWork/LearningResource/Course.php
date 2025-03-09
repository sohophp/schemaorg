<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork\LearningResource;

use Sohophp\SchemaOrg\Thing\CreativeWork\LearningResource;

/**
* A description of an educational course which may be offered as distinct instances which take place at different times or take place at different locations, or be offered through different media or modes of study. An educational course is a sequence of one or more educational events and/or creative works which aims to build knowledge, competence or ability of learners.
* @see schema:Course
* @package Sohophp\SchemaOrg\Thing\CreativeWork\LearningResource
*/
class Course extends LearningResource
{
   /**
        * A description of the qualification, award, certificate, diploma or other occupational credential awarded as a consequence of successful completion of this course or program.
        */
    protected $occupationalCredentialAwarded = null;

   /**
        * The identifier for the [[Course]] used by the course [[provider]] (e.g. CS101 or 6.001).
        */
    protected $courseCode = null;

   /**
        * A description of the qualification, award, certificate, diploma or other educational credential awarded as a consequence of successful completion of this course or program.
        */
    protected $educationalCredentialAwarded = null;

   /**
        * The number of credits or units awarded by a Course or required to complete an EducationalOccupationalProgram.
        */
    protected $numberOfCredits = null;

   /**
        * The total number of students that have enrolled in the history of the course.
        */
    protected $totalHistoricalEnrollment = null;

   /**
        * A financial aid type or program which students may use to pay for tuition or fees associated with the program.
        */
    protected $financialAidEligible = null;

   /**
        * A language someone may use with or at the item, service or place. Please use one of the language codes from the [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47). See also [[inLanguage]].
        */
    protected $availableLanguage = null;

   /**
        * Indicates (typically several) Syllabus entities that lay out what each section of the overall course will cover.
        */
    protected $syllabusSections = null;

   /**
        * Requirements for taking the Course. May be completion of another [[Course]] or a textual description like "permission of instructor". Requirements may be a pre-requisite competency, referenced using [[AlignmentObject]].
        */
    protected $coursePrerequisites = null;

   /**
        * An offering of the course at a specific time and place or through specific media or mode of study or to a specific section of students.
        */
    protected $hasCourseInstance = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setOccupationalCredentialAwarded($value)
    {
        $this->setProperty('occupationalCredentialAwarded', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getOccupationalCredentialAwarded()
    {
       return $this->getProperty('occupationalCredentialAwarded');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setCourseCode($value)
    {
        $this->setProperty('courseCode', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCourseCode()
    {
       return $this->getProperty('courseCode');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setEducationalCredentialAwarded($value)
    {
        $this->setProperty('educationalCredentialAwarded', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEducationalCredentialAwarded()
    {
       return $this->getProperty('educationalCredentialAwarded');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setNumberOfCredits($value)
    {
        $this->setProperty('numberOfCredits', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getNumberOfCredits()
    {
       return $this->getProperty('numberOfCredits');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setTotalHistoricalEnrollment($value)
    {
        $this->setProperty('totalHistoricalEnrollment', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getTotalHistoricalEnrollment()
    {
       return $this->getProperty('totalHistoricalEnrollment');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setFinancialAidEligible($value)
    {
        $this->setProperty('financialAidEligible', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getFinancialAidEligible()
    {
       return $this->getProperty('financialAidEligible');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setAvailableLanguage($value)
    {
        $this->setProperty('availableLanguage', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAvailableLanguage()
    {
       return $this->getProperty('availableLanguage');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setSyllabusSections($value)
    {
        $this->setProperty('syllabusSections', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSyllabusSections()
    {
       return $this->getProperty('syllabusSections');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setCoursePrerequisites($value)
    {
        $this->setProperty('coursePrerequisites', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCoursePrerequisites()
    {
       return $this->getProperty('coursePrerequisites');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setHasCourseInstance($value)
    {
        $this->setProperty('hasCourseInstance', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getHasCourseInstance()
    {
       return $this->getProperty('hasCourseInstance');
    }


}
