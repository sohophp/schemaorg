<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\Service;

  use Sohophp\SchemaOrg\Thing\Intangible\Service;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;

/**
  * A product provided to consumers and businesses by financial institutions such
 * as banks, insurance companies, brokerage firms, consumer finance companies,
 * and investment companies which comprise the financial services industry.
  * @see schema:FinancialProduct
* @package Sohophp\SchemaOrg\Thing\Intangible\Service
*/
class FinancialProduct extends Service
{


  /**
      * The interest rate, charged or paid, applicable to the financial product.
 * Note: This is different from the calculated annualPercentageRate.
    * @param QuantitativeValue|array $value
  * @return $this
  */
  public function interestRate($value)
  {
  $this->setProperty('interestRate', $value);
  return $this;
  }

  /**
  * @param QuantitativeValue|array $value
  * @return $this
  */
  public function setInterestRate($value)
  {
  $this->setProperty('interestRate', $value);
  return $this;
  }

  /**
  * @param QuantitativeValue $value
  * @return $this
  */
  public function addInterestRate($value)
  {
  $current = $this->getProperty('interestRate');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('interestRate', $current);
  return $this;
  }

  /**
  * @return QuantitativeValue|array
  */
  public function getInterestRate()
  {
  return $this->getProperty('interestRate');
  }


  /**
      * The annual rate that is charged for borrowing (or made by investing),
 * expressed as a single percentage number that represents the actual yearly
 * cost of funds over the term of a loan. This includes any fees or additional
 * costs associated with the transaction.
    * @param QuantitativeValue|array $value
  * @return $this
  */
  public function annualPercentageRate($value)
  {
  $this->setProperty('annualPercentageRate', $value);
  return $this;
  }

  /**
  * @param QuantitativeValue|array $value
  * @return $this
  */
  public function setAnnualPercentageRate($value)
  {
  $this->setProperty('annualPercentageRate', $value);
  return $this;
  }

  /**
  * @param QuantitativeValue $value
  * @return $this
  */
  public function addAnnualPercentageRate($value)
  {
  $current = $this->getProperty('annualPercentageRate');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('annualPercentageRate', $current);
  return $this;
  }

  /**
  * @return QuantitativeValue|array
  */
  public function getAnnualPercentageRate()
  {
  return $this->getProperty('annualPercentageRate');
  }


  /**
      * Description of fees, commissions, and other terms applied either to a class
 * of financial product, or by a financial service organization.
    * @param string|array $value
  * @return $this
  */
  public function feesAndCommissionsSpecification($value)
  {
  $this->setProperty('feesAndCommissionsSpecification', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setFeesAndCommissionsSpecification($value)
  {
  $this->setProperty('feesAndCommissionsSpecification', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addFeesAndCommissionsSpecification($value)
  {
  $current = $this->getProperty('feesAndCommissionsSpecification');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('feesAndCommissionsSpecification', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getFeesAndCommissionsSpecification()
  {
  return $this->getProperty('feesAndCommissionsSpecification');
  }


}
