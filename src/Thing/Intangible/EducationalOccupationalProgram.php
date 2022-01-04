<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Intangible\Quantity\Duration;
use Sohophp\SchemaOrg\Thing\Intangible\Offer;
use Sohophp\SchemaOrg\Thing\CreativeWork\EducationalOccupationalCredential;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValueDistribution\MonetaryAmountDistribution;
use Sohophp\SchemaOrg\Thing\Intangible\AlignmentObject;
use Sohophp\SchemaOrg\Thing\CreativeWork\Course;

/**
* A program offered by an institution which determines the learning progress to achieve an outcome, usually a credential like a degree or certificate. This would define a discrete set of opportunities (e.g., job, courses) that together constitute a program with a clear start, end, set of requirements, and transition to a new occupational opportunity (e.g., a job), or sometimes a higher educational opportunity (e.g., an advanced degree).
* @see http://schema.org/EducationalOccupationalProgram
* @package Sohophp\SchemaOrg\Thing\Intangible

*
*/
class EducationalOccupationalProgram extends Intangible
{

    /**
    * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller.
    * @param Organization|Person|array|string $value
    * @return $this
    * @deprecated use setProvider
    */
    public function provider($value)
    {
        $this->setProperty('provider', $value);
        return $this;
    }
   /**
    * @param Organization|Person|array|string $value
    * @return $this
    */
    public function setProvider($value)
    {
        $this->setProperty('provider', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getProvider()
    {
       return $this->getProperty('provider');
    }

    /**
    * The expected length of time to complete the program if attending full-time.
    * @param Duration|array|string $value
    * @return $this
    * @deprecated use setTimeToComplete
    */
    public function timeToComplete($value)
    {
        $this->setProperty('timeToComplete', $value);
        return $this;
    }
   /**
    * @param Duration|array|string $value
    * @return $this
    */
    public function setTimeToComplete($value)
    {
        $this->setProperty('timeToComplete', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getTimeToComplete()
    {
       return $this->getProperty('timeToComplete');
    }

    /**
    * An offer to provide this item&#x2014;for example, an offer to sell a product, rent the DVD of a movie, perform a service, or give away tickets to an event.
    * @param Offer|array|string $value
    * @return $this
    * @deprecated use setOffers
    */
    public function offers($value)
    {
        $this->setProperty('offers', $value);
        return $this;
    }
   /**
    * @param Offer|array|string $value
    * @return $this
    */
    public function setOffers($value)
    {
        $this->setProperty('offers', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getOffers()
    {
       return $this->getProperty('offers');
    }

    /**
    * A description of the qualification, award, certificate, diploma or other educational credential awarded as a consequence of successful completion of this course or program.
    * @param EducationalOccupationalCredential|string|string|array $value
    * @return $this
    * @deprecated use setEducationalCredentialAwarded
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
    * A description of the qualification, award, certificate, diploma or other occupational credential awarded as a consequence of successful completion of this course or program.
    * @param string|EducationalOccupationalCredential|string|array $value
    * @return $this
    * @deprecated use setOccupationalCredentialAwarded
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
    * The expected salary upon completing the training.
    * @param MonetaryAmountDistribution|array|string $value
    * @return $this
    * @deprecated use setSalaryUponCompletion
    */
    public function salaryUponCompletion($value)
    {
        $this->setProperty('salaryUponCompletion', $value);
        return $this;
    }
   /**
    * @param MonetaryAmountDistribution|array|string $value
    * @return $this
    */
    public function setSalaryUponCompletion($value)
    {
        $this->setProperty('salaryUponCompletion', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getSalaryUponCompletion()
    {
       return $this->getProperty('salaryUponCompletion');
    }

    /**
    * Prerequisites for enrolling in the program.
    * @param AlignmentObject|EducationalOccupationalCredential|Course|string|array $value
    * @return $this
    * @deprecated use setProgramPrerequisites
    */
    public function programPrerequisites($value)
    {
        $this->setProperty('programPrerequisites', $value);
        return $this;
    }
   /**
    * @param AlignmentObject|EducationalOccupationalCredential|Course|string|array $value
    * @return $this
    */
    public function setProgramPrerequisites($value)
    {
        $this->setProperty('programPrerequisites', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getProgramPrerequisites()
    {
       return $this->getProperty('programPrerequisites');
    }


}
