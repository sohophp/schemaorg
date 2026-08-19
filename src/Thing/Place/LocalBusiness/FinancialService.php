<?php
namespace Sohophp\SchemaOrg\Thing\Place\LocalBusiness;

  use Sohophp\SchemaOrg\Thing\Place\LocalBusiness;

/**
  * Financial services business.
  * @see schema:FinancialService
* @package Sohophp\SchemaOrg\Thing\Place\LocalBusiness
*/
class FinancialService extends LocalBusiness
{


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
