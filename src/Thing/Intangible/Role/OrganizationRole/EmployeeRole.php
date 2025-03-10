<?php
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
        * The currency (coded using [ISO 4217](http://en.wikipedia.org/wiki/ISO_4217) )
 * used for the main salary information in this job posting or for this
 * employee.
        * @param string|array|mixed $value
    * @return $this
    */
    public function salaryCurrency($value)
    {
        $this->setProperty('salaryCurrency', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setSalaryCurrency($value)
    {
        $this->setProperty('salaryCurrency', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSalaryCurrency()
    {
       return $this->getProperty('salaryCurrency');
    }


    /**
        * The base salary of the job or of an employee in an EmployeeRole.
        * @param MonetaryAmount|PriceSpecification|array|string|mixed $value
    * @return $this
    */
    public function baseSalary($value)
    {
        $this->setProperty('baseSalary', $value);
        return $this;
    }

    /**
    * @param MonetaryAmount|PriceSpecification|array|string|mixed $value
    * @return $this
    */
    public function setBaseSalary($value)
    {
        $this->setProperty('baseSalary', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getBaseSalary()
    {
       return $this->getProperty('baseSalary');
    }


}
