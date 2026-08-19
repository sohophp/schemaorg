<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\Intangible\Language;
use Sohophp\SchemaOrg\Thing\Intangible\AlignmentObject;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;
use Sohophp\SchemaOrg\Thing\CreativeWork\Credential\EducationalOccupationalCredential;
use Sohophp\SchemaOrg\Thing\Event\CourseInstance;
use Sohophp\SchemaOrg\Thing\CreativeWork\LearningResource\Syllabus;
use Sohophp\SchemaOrg\Thing\Intangible\DefinedTerm;

/**
 * A description of an educational course which may be offered as distinct instances which take place at different times or take place at different locations, or be offered through different media or modes of study. An educational course is a sequence of one or more educational events and/or creative works which aims to build knowledge, competence or ability of learners.
 * @see https://schema.org/Course
 * @package Sohophp\SchemaOrg\Thing\CreativeWork
 */
class Course extends CreativeWork
{
    /**
     * The total number of students that have enrolled in the history of the course.
     * @see https://schema.org/totalHistoricalEnrollment
     * @param int|array $value
     * @return $this
     */
    public function totalHistoricalEnrollment($value)
    {
        $this->setProperty('totalHistoricalEnrollment', $value);
        return $this;
    }

    /**
     * @param int|array $value
     * @return $this
     */
    public function setTotalHistoricalEnrollment($value)
    {
        $this->setProperty('totalHistoricalEnrollment', $value);
        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function addTotalHistoricalEnrollment($value)
    {
        $current = $this->getProperty('totalHistoricalEnrollment');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('totalHistoricalEnrollment', $current);
        return $this;
    }

    /**
     * @return int|array
     */
    public function getTotalHistoricalEnrollment()
    {
        return $this->getProperty('totalHistoricalEnrollment');
    }
    /**
     * A language someone may use with or at the item, service or place. Please use one of the language codes from the [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47). See also [[inLanguage]].
     * @see https://schema.org/availableLanguage
     * @param string|Language|array $value
     * @return $this
     */
    public function availableLanguage($value)
    {
        $this->setProperty('availableLanguage', $value);
        return $this;
    }

    /**
     * @param string|Language|array $value
     * @return $this
     */
    public function setAvailableLanguage($value)
    {
        $this->setProperty('availableLanguage', $value);
        return $this;
    }

    /**
     * @param string|Language $value
     * @return $this
     */
    public function addAvailableLanguage($value)
    {
        $current = $this->getProperty('availableLanguage');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('availableLanguage', $current);
        return $this;
    }

    /**
     * @return string|Language|array
     */
    public function getAvailableLanguage()
    {
        return $this->getProperty('availableLanguage');
    }
    /**
     * Requirements for taking the Course. May be completion of another [[Course]] or a textual description like "permission of instructor". Requirements may be a pre-requisite competency, referenced using [[AlignmentObject]].
     * @see https://schema.org/coursePrerequisites
     * @param string|Course|AlignmentObject|array $value
     * @return $this
     */
    public function coursePrerequisites($value)
    {
        $this->setProperty('coursePrerequisites', $value);
        return $this;
    }

    /**
     * @param string|Course|AlignmentObject|array $value
     * @return $this
     */
    public function setCoursePrerequisites($value)
    {
        $this->setProperty('coursePrerequisites', $value);
        return $this;
    }

    /**
     * @param string|Course|AlignmentObject $value
     * @return $this
     */
    public function addCoursePrerequisites($value)
    {
        $current = $this->getProperty('coursePrerequisites');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('coursePrerequisites', $current);
        return $this;
    }

    /**
     * @return string|Course|AlignmentObject|array
     */
    public function getCoursePrerequisites()
    {
        return $this->getProperty('coursePrerequisites');
    }
    /**
     * The number of credits or units awarded by a Course or required to complete an EducationalOccupationalProgram.
     * @see https://schema.org/numberOfCredits
     * @param int|StructuredValue|array $value
     * @return $this
     */
    public function numberOfCredits($value)
    {
        $this->setProperty('numberOfCredits', $value);
        return $this;
    }

    /**
     * @param int|StructuredValue|array $value
     * @return $this
     */
    public function setNumberOfCredits($value)
    {
        $this->setProperty('numberOfCredits', $value);
        return $this;
    }

    /**
     * @param int|StructuredValue $value
     * @return $this
     */
    public function addNumberOfCredits($value)
    {
        $current = $this->getProperty('numberOfCredits');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('numberOfCredits', $current);
        return $this;
    }

    /**
     * @return int|StructuredValue|array
     */
    public function getNumberOfCredits()
    {
        return $this->getProperty('numberOfCredits');
    }
    /**
     * A description of the qualification, award, certificate, diploma or other occupational credential awarded as a consequence of successful completion of this course or program.
     * @see https://schema.org/occupationalCredentialAwarded
     * @param EducationalOccupationalCredential|string|array $value
     * @return $this
     */
    public function occupationalCredentialAwarded($value)
    {
        $this->setProperty('occupationalCredentialAwarded', $value);
        return $this;
    }

    /**
     * @param EducationalOccupationalCredential|string|array $value
     * @return $this
     */
    public function setOccupationalCredentialAwarded($value)
    {
        $this->setProperty('occupationalCredentialAwarded', $value);
        return $this;
    }

    /**
     * @param EducationalOccupationalCredential|string $value
     * @return $this
     */
    public function addOccupationalCredentialAwarded($value)
    {
        $current = $this->getProperty('occupationalCredentialAwarded');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('occupationalCredentialAwarded', $current);
        return $this;
    }

    /**
     * @return EducationalOccupationalCredential|string|array
     */
    public function getOccupationalCredentialAwarded()
    {
        return $this->getProperty('occupationalCredentialAwarded');
    }
    /**
     * An offering of the course at a specific time and place or through specific media or mode of study or to a specific section of students.
     * @see https://schema.org/hasCourseInstance
     * @param CourseInstance|array $value
     * @return $this
     */
    public function hasCourseInstance($value)
    {
        $this->setProperty('hasCourseInstance', $value);
        return $this;
    }

    /**
     * @param CourseInstance|array $value
     * @return $this
     */
    public function setHasCourseInstance($value)
    {
        $this->setProperty('hasCourseInstance', $value);
        return $this;
    }

    /**
     * @param CourseInstance $value
     * @return $this
     */
    public function addHasCourseInstance($value)
    {
        $current = $this->getProperty('hasCourseInstance');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('hasCourseInstance', $current);
        return $this;
    }

    /**
     * @return CourseInstance|array
     */
    public function getHasCourseInstance()
    {
        return $this->getProperty('hasCourseInstance');
    }
    /**
     * The identifier for the [[Course]] used by the course [[provider]] (e.g. CS101 or 6.001).
     * @see https://schema.org/courseCode
     * @param string|array $value
     * @return $this
     */
    public function courseCode($value)
    {
        $this->setProperty('courseCode', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setCourseCode($value)
    {
        $this->setProperty('courseCode', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addCourseCode($value)
    {
        $current = $this->getProperty('courseCode');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('courseCode', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getCourseCode()
    {
        return $this->getProperty('courseCode');
    }
    /**
     * A description of the qualification, award, certificate, diploma or other educational credential awarded as a consequence of successful completion of this course or program.
     * @see https://schema.org/educationalCredentialAwarded
     * @param string|EducationalOccupationalCredential|array $value
     * @return $this
     */
    public function educationalCredentialAwarded($value)
    {
        $this->setProperty('educationalCredentialAwarded', $value);
        return $this;
    }

    /**
     * @param string|EducationalOccupationalCredential|array $value
     * @return $this
     */
    public function setEducationalCredentialAwarded($value)
    {
        $this->setProperty('educationalCredentialAwarded', $value);
        return $this;
    }

    /**
     * @param string|EducationalOccupationalCredential $value
     * @return $this
     */
    public function addEducationalCredentialAwarded($value)
    {
        $current = $this->getProperty('educationalCredentialAwarded');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('educationalCredentialAwarded', $current);
        return $this;
    }

    /**
     * @return string|EducationalOccupationalCredential|array
     */
    public function getEducationalCredentialAwarded()
    {
        return $this->getProperty('educationalCredentialAwarded');
    }
    /**
     * Indicates (typically several) Syllabus entities that lay out what each section of the overall course will cover.
     * @see https://schema.org/syllabusSections
     * @param Syllabus|array $value
     * @return $this
     */
    public function syllabusSections($value)
    {
        $this->setProperty('syllabusSections', $value);
        return $this;
    }

    /**
     * @param Syllabus|array $value
     * @return $this
     */
    public function setSyllabusSections($value)
    {
        $this->setProperty('syllabusSections', $value);
        return $this;
    }

    /**
     * @param Syllabus $value
     * @return $this
     */
    public function addSyllabusSections($value)
    {
        $current = $this->getProperty('syllabusSections');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('syllabusSections', $current);
        return $this;
    }

    /**
     * @return Syllabus|array
     */
    public function getSyllabusSections()
    {
        return $this->getProperty('syllabusSections');
    }
    /**
     * A financial aid type or program which students may use to pay for tuition or fees associated with the program.
     * @see https://schema.org/financialAidEligible
     * @param DefinedTerm|string|array $value
     * @return $this
     */
    public function financialAidEligible($value)
    {
        $this->setProperty('financialAidEligible', $value);
        return $this;
    }

    /**
     * @param DefinedTerm|string|array $value
     * @return $this
     */
    public function setFinancialAidEligible($value)
    {
        $this->setProperty('financialAidEligible', $value);
        return $this;
    }

    /**
     * @param DefinedTerm|string $value
     * @return $this
     */
    public function addFinancialAidEligible($value)
    {
        $current = $this->getProperty('financialAidEligible');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('financialAidEligible', $current);
        return $this;
    }

    /**
     * @return DefinedTerm|string|array
     */
    public function getFinancialAidEligible()
    {
        return $this->getProperty('financialAidEligible');
    }
}
