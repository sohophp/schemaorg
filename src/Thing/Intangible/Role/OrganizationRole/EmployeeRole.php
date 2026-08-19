<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\Role\OrganizationRole;

  use Sohophp\SchemaOrg\Thing\Intangible\Role\OrganizationRole;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\MonetaryAmount;

/**
  * A subclass of OrganizationRole used to describe employee relationships.
  * @see schema:EmployeeRole
* @package Sohophp\SchemaOrg\Thing\Intangible\Role\OrganizationRole
*/
class EmployeeRole extends OrganizationRole
{


  /**
      * The base salary of the job or of an employee in an EmployeeRole.
    * @param PriceSpecification|MonetaryAmount|array $value
  * @return $this
  */
  public function baseSalary($value)
  {
  $this->setProperty('baseSalary', $value);
  return $this;
  }

  /**
  * @param PriceSpecification|MonetaryAmount|array $value
  * @return $this
  */
  public function setBaseSalary($value)
  {
  $this->setProperty('baseSalary', $value);
  return $this;
  }

  /**
  * @param PriceSpecification|MonetaryAmount $value
  * @return $this
  */
  public function addBaseSalary($value)
  {
  $current = $this->getProperty('baseSalary');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('baseSalary', $current);
  return $this;
  }

  /**
  * @return PriceSpecification|MonetaryAmount|array
  */
  public function getBaseSalary()
  {
  return $this->getProperty('baseSalary');
  }


  /**
      * The currency (coded using [ISO 4217](http://en.wikipedia.org/wiki/ISO_4217))
 * used for the main salary information in this job posting or for this
 * employee.
    * @param string|array $value
  * @return $this
  */
  public function salaryCurrency($value)
  {
  $this->setProperty('salaryCurrency', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setSalaryCurrency($value)
  {
  $this->setProperty('salaryCurrency', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addSalaryCurrency($value)
  {
  $current = $this->getProperty('salaryCurrency');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('salaryCurrency', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getSalaryCurrency()
  {
  return $this->getProperty('salaryCurrency');
  }


}
