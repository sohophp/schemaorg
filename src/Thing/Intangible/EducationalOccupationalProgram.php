<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;

/**
* A program offered by an institution which determines the learning progress to achieve an outcome, usually a credential like a degree or certificate. This would define a discrete set of opportunities (e.g., job, courses) that together constitute a program with a clear start, end, set of requirements, and transition to a new occupational opportunity (e.g., a job), or sometimes a higher educational opportunity (e.g., an advanced degree).
* @see schema:EducationalOccupationalProgram
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class EducationalOccupationalProgram extends Intangible
{
   /**
        * The estimated salary earned while in the program.
        */
    protected $trainingSalary = null;

   /**
        * A description of the qualification, award, certificate, diploma or other occupational credential awarded as a consequence of successful completion of this course or program.
        */
    protected $occupationalCredentialAwarded = null;

   /**
        * An offer to provide this item&#x2014;for example, an offer to sell a product, rent the DVD of a movie, perform a service, or give away tickets to an event. Use [[businessFunction]] to indicate the kind of transaction offered, i.e. sell, lease, etc. This property can also be used to describe a [[Demand]]. While this property is listed as expected on a number of common types, it can be used in others. In that case, using a second type, such as Product or a subtype of Product, can clarify the nature of the offer.
      
        */
    protected $offers = null;

   /**
        * A description of the qualification, award, certificate, diploma or other educational credential awarded as a consequence of successful completion of this course or program.
        */
    protected $educationalCredentialAwarded = null;

   /**
        * The type of educational or occupational program. For example, classroom, internship, alternance, etc.
        */
    protected $programType = null;

   /**
        * The day of the week for which these opening hours are valid.
        */
    protected $dayOfWeek = null;

   /**
        * The end date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
        */
    protected $endDate = null;

   /**
        * The number of credits or units a full-time student would be expected to take in 1 term however 'term' is defined by the institution.
        */
    protected $typicalCreditsPerTerm = null;

   /**
        * The number of credits or units awarded by a Course or required to complete an EducationalOccupationalProgram.
        */
    protected $numberOfCredits = null;

   /**
        * A financial aid type or program which students may use to pay for tuition or fees associated with the program.
        */
    protected $financialAidEligible = null;

   /**
        * The time of day the program normally runs. For example, "evenings".
        */
    protected $timeOfDay = null;

   /**
        * The start date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
        */
    protected $startDate = null;

   /**
        * The expected salary upon completing the training.
        */
    protected $salaryUponCompletion = null;

   /**
        * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller.
        */
    protected $provider = null;

   /**
        * The number of times terms of study are offered per year. Semesters and quarters are common units for term. For example, if the student can only take 2 semesters for the program in one year, then termsPerYear should be 2.
        */
    protected $termsPerYear = null;

   /**
        * The amount of time in a term as defined by the institution. A term is a length of time where students take one or more classes. Semesters and quarters are common units for term.
        */
    protected $termDuration = null;

   /**
        * Similar to courseMode, the medium or means of delivery of the program as a whole. The value may either be a text label (e.g. "online", "onsite" or "blended"; "synchronous" or "asynchronous"; "full-time" or "part-time") or a URL reference to a term from a controlled vocabulary (e.g. https://ceds.ed.gov/element/001311#Asynchronous ).
        */
    protected $educationalProgramMode = null;

   /**
        * A course or class that is one of the learning opportunities that constitute an educational / occupational program. No information is implied about whether the course is mandatory or optional; no guarantee is implied about whether the course will be available to everyone on the program.
        */
    protected $hasCourse = null;

   /**
        * The date at which the program begins collecting applications for the next enrollment cycle.
        */
    protected $applicationStartDate = null;

   /**
        * The expected length of time to complete the program if attending full-time.
        */
    protected $timeToComplete = null;

   /**
        * The date on which the program stops collecting applications for the next enrollment cycle. Flexible application deadlines (for example, a program with rolling admissions) can be described in a textual string, rather than as a DateTime.
        */
    protected $applicationDeadline = null;

   /**
        * Prerequisites for enrolling in the program.
        */
    protected $programPrerequisites = null;

   /**
        * A category describing the job, preferably using a term from a taxonomy such as [BLS O*NET-SOC](http://www.onetcenter.org/taxonomy.html), [ISCO-08](https://www.ilo.org/public/english/bureau/stat/isco/isco08/) or similar, with the property repeated for each applicable value. Ideally the taxonomy should be identified, and both the textual label and formal code for the category should be provided.\n
Note: for historical reasons, any textual label and formal code provided as a literal may be assumed to be from O*NET-SOC.
        */
    protected $occupationalCategory = null;

   /**
        * The maximum number of students who may be enrolled in the program.
        */
    protected $maximumEnrollment = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setTrainingSalary($value)
    {
        $this->setProperty('trainingSalary', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getTrainingSalary()
    {
       return $this->getProperty('trainingSalary');
    }

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
    public function setOffers($value)
    {
        $this->setProperty('offers', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getOffers()
    {
       return $this->getProperty('offers');
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
    public function setProgramType($value)
    {
        $this->setProperty('programType', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getProgramType()
    {
       return $this->getProperty('programType');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setDayOfWeek($value)
    {
        $this->setProperty('dayOfWeek', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDayOfWeek()
    {
       return $this->getProperty('dayOfWeek');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setEndDate($value)
    {
        $this->setProperty('endDate', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEndDate()
    {
       return $this->getProperty('endDate');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setTypicalCreditsPerTerm($value)
    {
        $this->setProperty('typicalCreditsPerTerm', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getTypicalCreditsPerTerm()
    {
       return $this->getProperty('typicalCreditsPerTerm');
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
    public function setTimeOfDay($value)
    {
        $this->setProperty('timeOfDay', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getTimeOfDay()
    {
       return $this->getProperty('timeOfDay');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setStartDate($value)
    {
        $this->setProperty('startDate', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getStartDate()
    {
       return $this->getProperty('startDate');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setSalaryUponCompletion($value)
    {
        $this->setProperty('salaryUponCompletion', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSalaryUponCompletion()
    {
       return $this->getProperty('salaryUponCompletion');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setProvider($value)
    {
        $this->setProperty('provider', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getProvider()
    {
       return $this->getProperty('provider');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setTermsPerYear($value)
    {
        $this->setProperty('termsPerYear', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getTermsPerYear()
    {
       return $this->getProperty('termsPerYear');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setTermDuration($value)
    {
        $this->setProperty('termDuration', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getTermDuration()
    {
       return $this->getProperty('termDuration');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setEducationalProgramMode($value)
    {
        $this->setProperty('educationalProgramMode', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEducationalProgramMode()
    {
       return $this->getProperty('educationalProgramMode');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setHasCourse($value)
    {
        $this->setProperty('hasCourse', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getHasCourse()
    {
       return $this->getProperty('hasCourse');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setApplicationStartDate($value)
    {
        $this->setProperty('applicationStartDate', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getApplicationStartDate()
    {
       return $this->getProperty('applicationStartDate');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setTimeToComplete($value)
    {
        $this->setProperty('timeToComplete', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getTimeToComplete()
    {
       return $this->getProperty('timeToComplete');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setApplicationDeadline($value)
    {
        $this->setProperty('applicationDeadline', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getApplicationDeadline()
    {
       return $this->getProperty('applicationDeadline');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setProgramPrerequisites($value)
    {
        $this->setProperty('programPrerequisites', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getProgramPrerequisites()
    {
       return $this->getProperty('programPrerequisites');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setOccupationalCategory($value)
    {
        $this->setProperty('occupationalCategory', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getOccupationalCategory()
    {
       return $this->getProperty('occupationalCategory');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setMaximumEnrollment($value)
    {
        $this->setProperty('maximumEnrollment', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getMaximumEnrollment()
    {
       return $this->getProperty('maximumEnrollment');
    }


}
