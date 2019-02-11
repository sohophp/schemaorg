<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Intangible\Role\OrganizationRole;

use Sohophp\SchemaOrg\Thing\Intangible\Role\OrganizationRole;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\MonetaryAmount;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification;

/**
* A subclass of OrganizationRole used to describe employee relationships.
* @see http://schema.org/EmployeeRole
* @package Sohophp\SchemaOrg\Thing\Intangible\Role\OrganizationRole
*/
class EmployeeRole extends OrganizationRole
{

    /**
    * The currency (coded using <a href="http://en.wikipedia.org/wiki/ISO_4217">ISO 4217</a> ) used for the main salary information in this job posting or for this employee.
    * @param string $value
    * @return $this
    */
    public function salaryCurrency(?string $value)
    {
        $this->setProperty('salaryCurrency', $value);
        return $this;
    }

    /**
    * The base salary of the job or of an employee in an EmployeeRole.
    * @param MonetaryAmount|PriceSpecification $value
    * @return $this
    */
    public function baseSalary($value)
    {
        $this->setProperty('baseSalary', $value);
        return $this;
    }


}

