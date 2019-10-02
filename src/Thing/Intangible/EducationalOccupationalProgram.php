<?php declare(strict_types=1);
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
*/
class EducationalOccupationalProgram extends Intangible
{

    /**
    * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller.
    * @param Organization|Person $value
    * @return $this
    */
    public function provider($value)
    {
        $this->setProperty('provider', $value);
        return $this;
    }

    /**
    * The expected length of time to complete the program if attending full-time.
    * @param Duration $value
    * @return $this
    */
    public function timeToComplete(?Duration $value)
    {
        $this->setProperty('timeToComplete', $value);
        return $this;
    }

    /**
    * An offer to provide this item&#x2014;for example, an offer to sell a product, rent the DVD of a movie, perform a service, or give away tickets to an event.
    * @param Offer $value
    * @return $this
    */
    public function offers(?Offer $value)
    {
        $this->setProperty('offers', $value);
        return $this;
    }

    /**
    * A description of the qualification, award, certificate, diploma or other educational credential awarded as a consequence of successful completion of this course or program.
    * @param EducationalOccupationalCredential|string|string $value
    * @return $this
    */
    public function educationalCredentialAwarded($value)
    {
        $this->setProperty('educationalCredentialAwarded', $value);
        return $this;
    }

    /**
    * A description of the qualification, award, certificate, diploma or other occupational credential awarded as a consequence of successful completion of this course or program.
    * @param string|EducationalOccupationalCredential|string $value
    * @return $this
    */
    public function occupationalCredentialAwarded($value)
    {
        $this->setProperty('occupationalCredentialAwarded', $value);
        return $this;
    }

    /**
    * The expected salary upon completing the training.
    * @param MonetaryAmountDistribution $value
    * @return $this
    */
    public function salaryUponCompletion(?MonetaryAmountDistribution $value)
    {
        $this->setProperty('salaryUponCompletion', $value);
        return $this;
    }

    /**
    * Prerequisites for enrolling in the program.
    * @param AlignmentObject|EducationalOccupationalCredential|Course|string $value
    * @return $this
    */
    public function programPrerequisites($value)
    {
        $this->setProperty('programPrerequisites', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\EducationalOccupationalProgram','Thing\\EducationalOccupationalProgram');

