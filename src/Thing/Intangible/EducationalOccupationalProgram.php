<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\Intangible\DefinedTerm;
use Sohophp\SchemaOrg\Quantity\Duration;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValueDistribution\MonetaryAmountDistribution;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;
use Sohophp\SchemaOrg\Thing\CreativeWork\Credential\EducationalOccupationalCredential;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\DayOfWeek;
use Sohophp\SchemaOrg\Thing\Intangible\AlignmentObject;
use Sohophp\SchemaOrg\Thing\CreativeWork\LearningResource\Course;
use Sohophp\SchemaOrg\Thing\Intangible\Offer;
use Sohophp\SchemaOrg\Thing\Intangible\Demand;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Intangible\DefinedTerm\CategoryCode;

/**
 * A program offered by an institution which determines the learning progress to achieve an outcome, usually a credential like a degree or certificate. This would define a discrete set of opportunities (e.g., job, courses) that together constitute a program with a clear start, end, set of requirements, and transition to a new occupational opportunity (e.g., a job), or sometimes a higher educational opportunity (e.g., an advanced degree).
 * @see https://schema.org/EducationalOccupationalProgram
 * @package Sohophp\SchemaOrg\Thing\Intangible
 */
class EducationalOccupationalProgram extends Intangible
{
    /**
     * Similar to courseMode, the medium or means of delivery of the program as a whole. The value may either be a text label (e.g. "online", "onsite" or "blended"; "synchronous" or "asynchronous"; "full-time" or "part-time") or a URL reference to a term from a controlled vocabulary (e.g. https://ceds.ed.gov/element/001311#Asynchronous ).
     * @see https://schema.org/educationalProgramMode
     * @param string|array $value
     * @return $this
     */
    public function educationalProgramMode($value)
    {
        $this->setProperty('educationalProgramMode', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setEducationalProgramMode($value)
    {
        $this->setProperty('educationalProgramMode', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addEducationalProgramMode($value)
    {
        $current = $this->getProperty('educationalProgramMode');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('educationalProgramMode', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getEducationalProgramMode()
    {
        return $this->getProperty('educationalProgramMode');
    }
    /**
     * The type of educational or occupational program. For example, classroom, internship, alternance, etc.
     * @see https://schema.org/programType
     * @param string|DefinedTerm|array $value
     * @return $this
     */
    public function programType($value)
    {
        $this->setProperty('programType', $value);
        return $this;
    }

    /**
     * @param string|DefinedTerm|array $value
     * @return $this
     */
    public function setProgramType($value)
    {
        $this->setProperty('programType', $value);
        return $this;
    }

    /**
     * @param string|DefinedTerm $value
     * @return $this
     */
    public function addProgramType($value)
    {
        $current = $this->getProperty('programType');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('programType', $current);
        return $this;
    }

    /**
     * @return string|DefinedTerm|array
     */
    public function getProgramType()
    {
        return $this->getProperty('programType');
    }
    /**
     * The expected length of time to complete the program if attending full-time.
     * @see https://schema.org/timeToComplete
     * @param Duration|array $value
     * @return $this
     */
    public function timeToComplete($value)
    {
        $this->setProperty('timeToComplete', $value);
        return $this;
    }

    /**
     * @param Duration|array $value
     * @return $this
     */
    public function setTimeToComplete($value)
    {
        $this->setProperty('timeToComplete', $value);
        return $this;
    }

    /**
     * @param Duration $value
     * @return $this
     */
    public function addTimeToComplete($value)
    {
        $current = $this->getProperty('timeToComplete');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('timeToComplete', $current);
        return $this;
    }

    /**
     * @return Duration|array
     */
    public function getTimeToComplete()
    {
        return $this->getProperty('timeToComplete');
    }
    /**
     * The date at which the program begins collecting applications for the next enrollment cycle.
     * @see https://schema.org/applicationStartDate
     * @param mixed $value
     * @return $this
     */
    public function applicationStartDate($value)
    {
        $this->setProperty('applicationStartDate', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setApplicationStartDate($value)
    {
        $this->setProperty('applicationStartDate', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function addApplicationStartDate($value)
    {
        $current = $this->getProperty('applicationStartDate');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('applicationStartDate', $current);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getApplicationStartDate()
    {
        return $this->getProperty('applicationStartDate');
    }
    /**
     * The date on which the program stops collecting applications for the next enrollment cycle. Flexible application deadlines (for example, a program with rolling admissions) can be described in a textual string, rather than as a DateTime.
     * @see https://schema.org/applicationDeadline
     * @param string|array $value
     * @return $this
     */
    public function applicationDeadline($value)
    {
        $this->setProperty('applicationDeadline', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setApplicationDeadline($value)
    {
        $this->setProperty('applicationDeadline', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addApplicationDeadline($value)
    {
        $current = $this->getProperty('applicationDeadline');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('applicationDeadline', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getApplicationDeadline()
    {
        return $this->getProperty('applicationDeadline');
    }
    /**
     * The expected salary upon completing the training.
     * @see https://schema.org/salaryUponCompletion
     * @param MonetaryAmountDistribution|array $value
     * @return $this
     */
    public function salaryUponCompletion($value)
    {
        $this->setProperty('salaryUponCompletion', $value);
        return $this;
    }

    /**
     * @param MonetaryAmountDistribution|array $value
     * @return $this
     */
    public function setSalaryUponCompletion($value)
    {
        $this->setProperty('salaryUponCompletion', $value);
        return $this;
    }

    /**
     * @param MonetaryAmountDistribution $value
     * @return $this
     */
    public function addSalaryUponCompletion($value)
    {
        $current = $this->getProperty('salaryUponCompletion');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('salaryUponCompletion', $current);
        return $this;
    }

    /**
     * @return MonetaryAmountDistribution|array
     */
    public function getSalaryUponCompletion()
    {
        return $this->getProperty('salaryUponCompletion');
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
     * The estimated salary earned while in the program.
     * @see https://schema.org/trainingSalary
     * @param MonetaryAmountDistribution|array $value
     * @return $this
     */
    public function trainingSalary($value)
    {
        $this->setProperty('trainingSalary', $value);
        return $this;
    }

    /**
     * @param MonetaryAmountDistribution|array $value
     * @return $this
     */
    public function setTrainingSalary($value)
    {
        $this->setProperty('trainingSalary', $value);
        return $this;
    }

    /**
     * @param MonetaryAmountDistribution $value
     * @return $this
     */
    public function addTrainingSalary($value)
    {
        $current = $this->getProperty('trainingSalary');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('trainingSalary', $current);
        return $this;
    }

    /**
     * @return MonetaryAmountDistribution|array
     */
    public function getTrainingSalary()
    {
        return $this->getProperty('trainingSalary');
    }
    /**
     * The amount of time in a term as defined by the institution. A term is a length of time where students take one or more classes. Semesters and quarters are common units for term.
     * @see https://schema.org/termDuration
     * @param Duration|array $value
     * @return $this
     */
    public function termDuration($value)
    {
        $this->setProperty('termDuration', $value);
        return $this;
    }

    /**
     * @param Duration|array $value
     * @return $this
     */
    public function setTermDuration($value)
    {
        $this->setProperty('termDuration', $value);
        return $this;
    }

    /**
     * @param Duration $value
     * @return $this
     */
    public function addTermDuration($value)
    {
        $current = $this->getProperty('termDuration');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('termDuration', $current);
        return $this;
    }

    /**
     * @return Duration|array
     */
    public function getTermDuration()
    {
        return $this->getProperty('termDuration');
    }
    /**
     * The maximum number of students who may be enrolled in the program.
     * @see https://schema.org/maximumEnrollment
     * @param int|array $value
     * @return $this
     */
    public function maximumEnrollment($value)
    {
        $this->setProperty('maximumEnrollment', $value);
        return $this;
    }

    /**
     * @param int|array $value
     * @return $this
     */
    public function setMaximumEnrollment($value)
    {
        $this->setProperty('maximumEnrollment', $value);
        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function addMaximumEnrollment($value)
    {
        $current = $this->getProperty('maximumEnrollment');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('maximumEnrollment', $current);
        return $this;
    }

    /**
     * @return int|array
     */
    public function getMaximumEnrollment()
    {
        return $this->getProperty('maximumEnrollment');
    }
    /**
     * The number of times terms of study are offered per year. Semesters and quarters are common units for term. For example, if the student can only take 2 semesters for the program in one year, then termsPerYear should be 2.
     * @see https://schema.org/termsPerYear
     * @param mixed $value
     * @return $this
     */
    public function termsPerYear($value)
    {
        $this->setProperty('termsPerYear', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setTermsPerYear($value)
    {
        $this->setProperty('termsPerYear', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function addTermsPerYear($value)
    {
        $current = $this->getProperty('termsPerYear');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('termsPerYear', $current);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTermsPerYear()
    {
        return $this->getProperty('termsPerYear');
    }
    /**
     * The time of day the program normally runs. For example, "evenings".
     * @see https://schema.org/timeOfDay
     * @param string|array $value
     * @return $this
     */
    public function timeOfDay($value)
    {
        $this->setProperty('timeOfDay', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setTimeOfDay($value)
    {
        $this->setProperty('timeOfDay', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addTimeOfDay($value)
    {
        $current = $this->getProperty('timeOfDay');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('timeOfDay', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getTimeOfDay()
    {
        return $this->getProperty('timeOfDay');
    }
    /**
     * The day of the week for which these opening hours are valid.
     * @see https://schema.org/dayOfWeek
     * @param DayOfWeek|array $value
     * @return $this
     */
    public function dayOfWeek($value)
    {
        $this->setProperty('dayOfWeek', $value);
        return $this;
    }

    /**
     * @param DayOfWeek|array $value
     * @return $this
     */
    public function setDayOfWeek($value)
    {
        $this->setProperty('dayOfWeek', $value);
        return $this;
    }

    /**
     * @param DayOfWeek $value
     * @return $this
     */
    public function addDayOfWeek($value)
    {
        $current = $this->getProperty('dayOfWeek');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('dayOfWeek', $current);
        return $this;
    }

    /**
     * @return DayOfWeek|array
     */
    public function getDayOfWeek()
    {
        return $this->getProperty('dayOfWeek');
    }
    /**
     * Prerequisites for enrolling in the program.
     * @see https://schema.org/programPrerequisites
     * @param EducationalOccupationalCredential|AlignmentObject|Course|string|array $value
     * @return $this
     */
    public function programPrerequisites($value)
    {
        $this->setProperty('programPrerequisites', $value);
        return $this;
    }

    /**
     * @param EducationalOccupationalCredential|AlignmentObject|Course|string|array $value
     * @return $this
     */
    public function setProgramPrerequisites($value)
    {
        $this->setProperty('programPrerequisites', $value);
        return $this;
    }

    /**
     * @param EducationalOccupationalCredential|AlignmentObject|Course|string $value
     * @return $this
     */
    public function addProgramPrerequisites($value)
    {
        $current = $this->getProperty('programPrerequisites');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('programPrerequisites', $current);
        return $this;
    }

    /**
     * @return EducationalOccupationalCredential|AlignmentObject|Course|string|array
     */
    public function getProgramPrerequisites()
    {
        return $this->getProperty('programPrerequisites');
    }
    /**
     * An offer to provide this item&#x2014;for example, an offer to sell a product, rent the DVD of a movie, perform a service, or give away tickets to an event. Use [[businessFunction]] to indicate the kind of transaction offered, i.e. sell, lease, etc. This property can also be used to describe a [[Demand]]. While this property is listed as expected on a number of common types, it can be used in others. In that case, using a second type, such as Product or a subtype of Product, can clarify the nature of the offer.
     * @see https://schema.org/offers
     * @param Offer|Demand|array $value
     * @return $this
     */
    public function offers($value)
    {
        $this->setProperty('offers', $value);
        return $this;
    }

    /**
     * @param Offer|Demand|array $value
     * @return $this
     */
    public function setOffers($value)
    {
        $this->setProperty('offers', $value);
        return $this;
    }

    /**
     * @param Offer|Demand $value
     * @return $this
     */
    public function addOffers($value)
    {
        $current = $this->getProperty('offers');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('offers', $current);
        return $this;
    }

    /**
     * @return Offer|Demand|array
     */
    public function getOffers()
    {
        return $this->getProperty('offers');
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
     * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller.
     * @see https://schema.org/provider
     * @param Organization|Person|array $value
     * @return $this
     */
    public function provider($value)
    {
        $this->setProperty('provider', $value);
        return $this;
    }

    /**
     * @param Organization|Person|array $value
     * @return $this
     */
    public function setProvider($value)
    {
        $this->setProperty('provider', $value);
        return $this;
    }

    /**
     * @param Organization|Person $value
     * @return $this
     */
    public function addProvider($value)
    {
        $current = $this->getProperty('provider');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('provider', $current);
        return $this;
    }

    /**
     * @return Organization|Person|array
     */
    public function getProvider()
    {
        return $this->getProperty('provider');
    }
    /**
     * The end date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
     * @see https://schema.org/endDate
     * @param mixed $value
     * @return $this
     */
    public function endDate($value)
    {
        $this->setProperty('endDate', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setEndDate($value)
    {
        $this->setProperty('endDate', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function addEndDate($value)
    {
        $current = $this->getProperty('endDate');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('endDate', $current);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEndDate()
    {
        return $this->getProperty('endDate');
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
    /**
     * The start date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
     * @see https://schema.org/startDate
     * @param mixed $value
     * @return $this
     */
    public function startDate($value)
    {
        $this->setProperty('startDate', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setStartDate($value)
    {
        $this->setProperty('startDate', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function addStartDate($value)
    {
        $current = $this->getProperty('startDate');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('startDate', $current);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStartDate()
    {
        return $this->getProperty('startDate');
    }
    /**
     * A category describing the job, preferably using a term from a taxonomy such as [BLS O*NET-SOC](http://www.onetcenter.org/taxonomy.html), [ISCO-08](https://www.ilo.org/public/english/bureau/stat/isco/isco08/) or similar, with the property repeated for each applicable value. Ideally the taxonomy should be identified, and both the textual label and formal code for the category should be provided. Note: for historical reasons, any textual label and formal code provided as a literal may be assumed to be from O*NET-SOC.
     * @see https://schema.org/occupationalCategory
     * @param CategoryCode|string|array $value
     * @return $this
     */
    public function occupationalCategory($value)
    {
        $this->setProperty('occupationalCategory', $value);
        return $this;
    }

    /**
     * @param CategoryCode|string|array $value
     * @return $this
     */
    public function setOccupationalCategory($value)
    {
        $this->setProperty('occupationalCategory', $value);
        return $this;
    }

    /**
     * @param CategoryCode|string $value
     * @return $this
     */
    public function addOccupationalCategory($value)
    {
        $current = $this->getProperty('occupationalCategory');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('occupationalCategory', $current);
        return $this;
    }

    /**
     * @return CategoryCode|string|array
     */
    public function getOccupationalCategory()
    {
        return $this->getProperty('occupationalCategory');
    }
    /**
     * A course or class that is one of the learning opportunities that constitute an educational / occupational program. No information is implied about whether the course is mandatory or optional; no guarantee is implied about whether the course will be available to everyone on the program.
     * @see https://schema.org/hasCourse
     * @param Course|array $value
     * @return $this
     */
    public function hasCourse($value)
    {
        $this->setProperty('hasCourse', $value);
        return $this;
    }

    /**
     * @param Course|array $value
     * @return $this
     */
    public function setHasCourse($value)
    {
        $this->setProperty('hasCourse', $value);
        return $this;
    }

    /**
     * @param Course $value
     * @return $this
     */
    public function addHasCourse($value)
    {
        $current = $this->getProperty('hasCourse');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('hasCourse', $current);
        return $this;
    }

    /**
     * @return Course|array
     */
    public function getHasCourse()
    {
        return $this->getProperty('hasCourse');
    }
    /**
     * The number of credits or units a full-time student would be expected to take in 1 term however 'term' is defined by the institution.
     * @see https://schema.org/typicalCreditsPerTerm
     * @param StructuredValue|int|array $value
     * @return $this
     */
    public function typicalCreditsPerTerm($value)
    {
        $this->setProperty('typicalCreditsPerTerm', $value);
        return $this;
    }

    /**
     * @param StructuredValue|int|array $value
     * @return $this
     */
    public function setTypicalCreditsPerTerm($value)
    {
        $this->setProperty('typicalCreditsPerTerm', $value);
        return $this;
    }

    /**
     * @param StructuredValue|int $value
     * @return $this
     */
    public function addTypicalCreditsPerTerm($value)
    {
        $current = $this->getProperty('typicalCreditsPerTerm');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('typicalCreditsPerTerm', $current);
        return $this;
    }

    /**
     * @return StructuredValue|int|array
     */
    public function getTypicalCreditsPerTerm()
    {
        return $this->getProperty('typicalCreditsPerTerm');
    }
}
