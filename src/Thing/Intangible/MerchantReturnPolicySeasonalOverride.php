<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

  use Sohophp\SchemaOrg\Thing\Intangible;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\MonetaryAmount;
  use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\ReturnFeesEnumeration;
  use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\RefundTypeEnumeration;
  use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\MerchantReturnEnumeration;
  use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\ReturnMethodEnumeration;

/**
  * A seasonal override of a return policy, for example used for holidays.
  * @see schema:MerchantReturnPolicySeasonalOverride
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class MerchantReturnPolicySeasonalOverride extends Intangible
{


  /**
      * Amount of shipping costs for product returns (for any reason). Applicable
 * when property [[returnFees]] equals [[ReturnShippingFees]].
    * @param MonetaryAmount|array $value
  * @return $this
  */
  public function returnShippingFeesAmount($value)
  {
  $this->setProperty('returnShippingFeesAmount', $value);
  return $this;
  }

  /**
  * @param MonetaryAmount|array $value
  * @return $this
  */
  public function setReturnShippingFeesAmount($value)
  {
  $this->setProperty('returnShippingFeesAmount', $value);
  return $this;
  }

  /**
  * @param MonetaryAmount $value
  * @return $this
  */
  public function addReturnShippingFeesAmount($value)
  {
  $current = $this->getProperty('returnShippingFeesAmount');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('returnShippingFeesAmount', $current);
  return $this;
  }

  /**
  * @return MonetaryAmount|array
  */
  public function getReturnShippingFeesAmount()
  {
  return $this->getProperty('returnShippingFeesAmount');
  }


  /**
      * The type of return fees for purchased products (for any return reason).
    * @param ReturnFeesEnumeration|array $value
  * @return $this
  */
  public function returnFees($value)
  {
  $this->setProperty('returnFees', $value);
  return $this;
  }

  /**
  * @param ReturnFeesEnumeration|array $value
  * @return $this
  */
  public function setReturnFees($value)
  {
  $this->setProperty('returnFees', $value);
  return $this;
  }

  /**
  * @param ReturnFeesEnumeration $value
  * @return $this
  */
  public function addReturnFees($value)
  {
  $current = $this->getProperty('returnFees');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('returnFees', $current);
  return $this;
  }

  /**
  * @return ReturnFeesEnumeration|array
  */
  public function getReturnFees()
  {
  return $this->getProperty('returnFees');
  }


  /**
      * Use [[MonetaryAmount]] to specify a fixed restocking fee for product returns,
 * or use [[Number]] to specify a percentage of the product price paid by the
 * customer.
    * @param MonetaryAmount|array $value
  * @return $this
  */
  public function restockingFee($value)
  {
  $this->setProperty('restockingFee', $value);
  return $this;
  }

  /**
  * @param MonetaryAmount|array $value
  * @return $this
  */
  public function setRestockingFee($value)
  {
  $this->setProperty('restockingFee', $value);
  return $this;
  }

  /**
  * @param MonetaryAmount $value
  * @return $this
  */
  public function addRestockingFee($value)
  {
  $current = $this->getProperty('restockingFee');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('restockingFee', $current);
  return $this;
  }

  /**
  * @return MonetaryAmount|array
  */
  public function getRestockingFee()
  {
  return $this->getProperty('restockingFee');
  }


  /**
      * A refund type, from an enumerated list.
    * @param RefundTypeEnumeration|array $value
  * @return $this
  */
  public function refundType($value)
  {
  $this->setProperty('refundType', $value);
  return $this;
  }

  /**
  * @param RefundTypeEnumeration|array $value
  * @return $this
  */
  public function setRefundType($value)
  {
  $this->setProperty('refundType', $value);
  return $this;
  }

  /**
  * @param RefundTypeEnumeration $value
  * @return $this
  */
  public function addRefundType($value)
  {
  $current = $this->getProperty('refundType');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('refundType', $current);
  return $this;
  }

  /**
  * @return RefundTypeEnumeration|array
  */
  public function getRefundType()
  {
  return $this->getProperty('refundType');
  }


  /**
      * Specifies an applicable return policy (from an enumeration).
    * @param MerchantReturnEnumeration|array $value
  * @return $this
  */
  public function returnPolicyCategory($value)
  {
  $this->setProperty('returnPolicyCategory', $value);
  return $this;
  }

  /**
  * @param MerchantReturnEnumeration|array $value
  * @return $this
  */
  public function setReturnPolicyCategory($value)
  {
  $this->setProperty('returnPolicyCategory', $value);
  return $this;
  }

  /**
  * @param MerchantReturnEnumeration $value
  * @return $this
  */
  public function addReturnPolicyCategory($value)
  {
  $current = $this->getProperty('returnPolicyCategory');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('returnPolicyCategory', $current);
  return $this;
  }

  /**
  * @return MerchantReturnEnumeration|array
  */
  public function getReturnPolicyCategory()
  {
  return $this->getProperty('returnPolicyCategory');
  }


  /**
      * The end date and time of the item (in [ISO 8601 date
 * format](http://en.wikipedia.org/wiki/ISO_8601)).
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
      * The type of return method offered, specified from an enumeration.
    * @param ReturnMethodEnumeration|array $value
  * @return $this
  */
  public function returnMethod($value)
  {
  $this->setProperty('returnMethod', $value);
  return $this;
  }

  /**
  * @param ReturnMethodEnumeration|array $value
  * @return $this
  */
  public function setReturnMethod($value)
  {
  $this->setProperty('returnMethod', $value);
  return $this;
  }

  /**
  * @param ReturnMethodEnumeration $value
  * @return $this
  */
  public function addReturnMethod($value)
  {
  $current = $this->getProperty('returnMethod');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('returnMethod', $current);
  return $this;
  }

  /**
  * @return ReturnMethodEnumeration|array
  */
  public function getReturnMethod()
  {
  return $this->getProperty('returnMethod');
  }


  /**
      * The start date and time of the item (in [ISO 8601 date
 * format](http://en.wikipedia.org/wiki/ISO_8601)).
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
      * Specifies either a fixed return date or the number of days (from the delivery
 * date) that a product can be returned. Used when the [[returnPolicyCategory]]
 * property is specified as [[MerchantReturnFiniteReturnWindow]].
    * @param int|array $value
  * @return $this
  */
  public function merchantReturnDays($value)
  {
  $this->setProperty('merchantReturnDays', $value);
  return $this;
  }

  /**
  * @param int|array $value
  * @return $this
  */
  public function setMerchantReturnDays($value)
  {
  $this->setProperty('merchantReturnDays', $value);
  return $this;
  }

  /**
  * @param int $value
  * @return $this
  */
  public function addMerchantReturnDays($value)
  {
  $current = $this->getProperty('merchantReturnDays');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('merchantReturnDays', $current);
  return $this;
  }

  /**
  * @return int|array
  */
  public function getMerchantReturnDays()
  {
  return $this->getProperty('merchantReturnDays');
  }


}
