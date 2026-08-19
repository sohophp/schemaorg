<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

  use Sohophp\SchemaOrg\Thing\Intangible;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\MonetaryAmount;
  use Sohophp\SchemaOrg\Thing\Intangible\MemberProgramTier;
  use Sohophp\SchemaOrg\Thing\Intangible\MerchantReturnPolicySeasonalOverride;
  use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\ReturnFeesEnumeration;
  use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\RefundTypeEnumeration;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PropertyValue;
  use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\OfferItemCondition;
  use Sohophp\SchemaOrg\Thing\Place\AdministrativeArea\Country;
  use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\MerchantReturnEnumeration;
  use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\ReturnLabelSourceEnumeration;
  use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\ReturnMethodEnumeration;

/**
  * A MerchantReturnPolicy provides information about product return policies
 * associated with an [[Organization]], [[Product]], or [[Offer]].
  * @see schema:MerchantReturnPolicy
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class MerchantReturnPolicy extends Intangible
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
      * The membership program tier(s) an Offer (or a PriceSpecification,
 * OfferShippingDetails, or MerchantReturnPolicy under an Offer) is valid for.
    * @param MemberProgramTier|array $value
  * @return $this
  */
  public function validForMemberTier($value)
  {
  $this->setProperty('validForMemberTier', $value);
  return $this;
  }

  /**
  * @param MemberProgramTier|array $value
  * @return $this
  */
  public function setValidForMemberTier($value)
  {
  $this->setProperty('validForMemberTier', $value);
  return $this;
  }

  /**
  * @param MemberProgramTier $value
  * @return $this
  */
  public function addValidForMemberTier($value)
  {
  $current = $this->getProperty('validForMemberTier');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('validForMemberTier', $current);
  return $this;
  }

  /**
  * @return MemberProgramTier|array
  */
  public function getValidForMemberTier()
  {
  return $this->getProperty('validForMemberTier');
  }


  /**
      * Seasonal override of a return policy.
    * @param MerchantReturnPolicySeasonalOverride|array $value
  * @return $this
  */
  public function returnPolicySeasonalOverride($value)
  {
  $this->setProperty('returnPolicySeasonalOverride', $value);
  return $this;
  }

  /**
  * @param MerchantReturnPolicySeasonalOverride|array $value
  * @return $this
  */
  public function setReturnPolicySeasonalOverride($value)
  {
  $this->setProperty('returnPolicySeasonalOverride', $value);
  return $this;
  }

  /**
  * @param MerchantReturnPolicySeasonalOverride $value
  * @return $this
  */
  public function addReturnPolicySeasonalOverride($value)
  {
  $current = $this->getProperty('returnPolicySeasonalOverride');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('returnPolicySeasonalOverride', $current);
  return $this;
  }

  /**
  * @return MerchantReturnPolicySeasonalOverride|array
  */
  public function getReturnPolicySeasonalOverride()
  {
  return $this->getProperty('returnPolicySeasonalOverride');
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
      * A property-value pair representing an additional characteristic of the
 * entity, e.g. a product feature or another characteristic for which there is
 * no matching property in schema.org.
 * 
 * Note: Publishers should be aware that applications designed to use specific
 * schema.org properties (e.g. https://schema.org/width,
 * https://schema.org/color, https://schema.org/gtin13, ...) will typically
 * expect such data to be provided using those properties, rather than using the
 * generic property/value mechanism.
    * @param PropertyValue|array $value
  * @return $this
  */
  public function additionalProperty($value)
  {
  $this->setProperty('additionalProperty', $value);
  return $this;
  }

  /**
  * @param PropertyValue|array $value
  * @return $this
  */
  public function setAdditionalProperty($value)
  {
  $this->setProperty('additionalProperty', $value);
  return $this;
  }

  /**
  * @param PropertyValue $value
  * @return $this
  */
  public function addAdditionalProperty($value)
  {
  $current = $this->getProperty('additionalProperty');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('additionalProperty', $current);
  return $this;
  }

  /**
  * @return PropertyValue|array
  */
  public function getAdditionalProperty()
  {
  return $this->getProperty('additionalProperty');
  }


  /**
      * The type of return fees if the product is returned due to customer remorse.
    * @param ReturnFeesEnumeration|array $value
  * @return $this
  */
  public function customerRemorseReturnFees($value)
  {
  $this->setProperty('customerRemorseReturnFees', $value);
  return $this;
  }

  /**
  * @param ReturnFeesEnumeration|array $value
  * @return $this
  */
  public function setCustomerRemorseReturnFees($value)
  {
  $this->setProperty('customerRemorseReturnFees', $value);
  return $this;
  }

  /**
  * @param ReturnFeesEnumeration $value
  * @return $this
  */
  public function addCustomerRemorseReturnFees($value)
  {
  $current = $this->getProperty('customerRemorseReturnFees');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('customerRemorseReturnFees', $current);
  return $this;
  }

  /**
  * @return ReturnFeesEnumeration|array
  */
  public function getCustomerRemorseReturnFees()
  {
  return $this->getProperty('customerRemorseReturnFees');
  }


  /**
      * A predefined value from OfferItemCondition specifying the condition of the
 * product or service, or the products or services included in the offer. Also
 * used for product return policies to specify the condition of products
 * accepted for returns.
    * @param OfferItemCondition|array $value
  * @return $this
  */
  public function itemCondition($value)
  {
  $this->setProperty('itemCondition', $value);
  return $this;
  }

  /**
  * @param OfferItemCondition|array $value
  * @return $this
  */
  public function setItemCondition($value)
  {
  $this->setProperty('itemCondition', $value);
  return $this;
  }

  /**
  * @param OfferItemCondition $value
  * @return $this
  */
  public function addItemCondition($value)
  {
  $current = $this->getProperty('itemCondition');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('itemCondition', $current);
  return $this;
  }

  /**
  * @return OfferItemCondition|array
  */
  public function getItemCondition()
  {
  return $this->getProperty('itemCondition');
  }


  /**
      * A country where a particular merchant return policy applies to, for example
 * the two-letter ISO 3166-1 alpha-2 country code.
    * @param Country|string|array $value
  * @return $this
  */
  public function applicableCountry($value)
  {
  $this->setProperty('applicableCountry', $value);
  return $this;
  }

  /**
  * @param Country|string|array $value
  * @return $this
  */
  public function setApplicableCountry($value)
  {
  $this->setProperty('applicableCountry', $value);
  return $this;
  }

  /**
  * @param Country|string $value
  * @return $this
  */
  public function addApplicableCountry($value)
  {
  $current = $this->getProperty('applicableCountry');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('applicableCountry', $current);
  return $this;
  }

  /**
  * @return Country|string|array
  */
  public function getApplicableCountry()
  {
  return $this->getProperty('applicableCountry');
  }


  /**
      * The country where the product has to be sent to for returns, for example
 * "Ireland" using the [[name]] property of [[Country]]. You can also provide
 * the two-letter [ISO 3166-1 alpha-2 country
 * code](http://en.wikipedia.org/wiki/ISO_3166-1). Note that this can be
 * different from the country where the product was originally shipped from or
 * sent to.
    * @param Country|string|array $value
  * @return $this
  */
  public function returnPolicyCountry($value)
  {
  $this->setProperty('returnPolicyCountry', $value);
  return $this;
  }

  /**
  * @param Country|string|array $value
  * @return $this
  */
  public function setReturnPolicyCountry($value)
  {
  $this->setProperty('returnPolicyCountry', $value);
  return $this;
  }

  /**
  * @param Country|string $value
  * @return $this
  */
  public function addReturnPolicyCountry($value)
  {
  $current = $this->getProperty('returnPolicyCountry');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('returnPolicyCountry', $current);
  return $this;
  }

  /**
  * @return Country|string|array
  */
  public function getReturnPolicyCountry()
  {
  return $this->getProperty('returnPolicyCountry');
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
      * The method (from an enumeration) by which the customer obtains a return
 * shipping label for a product returned due to customer remorse.
    * @param ReturnLabelSourceEnumeration|array $value
  * @return $this
  */
  public function customerRemorseReturnLabelSource($value)
  {
  $this->setProperty('customerRemorseReturnLabelSource', $value);
  return $this;
  }

  /**
  * @param ReturnLabelSourceEnumeration|array $value
  * @return $this
  */
  public function setCustomerRemorseReturnLabelSource($value)
  {
  $this->setProperty('customerRemorseReturnLabelSource', $value);
  return $this;
  }

  /**
  * @param ReturnLabelSourceEnumeration $value
  * @return $this
  */
  public function addCustomerRemorseReturnLabelSource($value)
  {
  $current = $this->getProperty('customerRemorseReturnLabelSource');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('customerRemorseReturnLabelSource', $current);
  return $this;
  }

  /**
  * @return ReturnLabelSourceEnumeration|array
  */
  public function getCustomerRemorseReturnLabelSource()
  {
  return $this->getProperty('customerRemorseReturnLabelSource');
  }


  /**
      * Amount of shipping costs for defect product returns. Applicable when property
 * [[itemDefectReturnFees]] equals [[ReturnShippingFees]].
    * @param MonetaryAmount|array $value
  * @return $this
  */
  public function itemDefectReturnShippingFeesAmount($value)
  {
  $this->setProperty('itemDefectReturnShippingFeesAmount', $value);
  return $this;
  }

  /**
  * @param MonetaryAmount|array $value
  * @return $this
  */
  public function setItemDefectReturnShippingFeesAmount($value)
  {
  $this->setProperty('itemDefectReturnShippingFeesAmount', $value);
  return $this;
  }

  /**
  * @param MonetaryAmount $value
  * @return $this
  */
  public function addItemDefectReturnShippingFeesAmount($value)
  {
  $current = $this->getProperty('itemDefectReturnShippingFeesAmount');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('itemDefectReturnShippingFeesAmount', $current);
  return $this;
  }

  /**
  * @return MonetaryAmount|array
  */
  public function getItemDefectReturnShippingFeesAmount()
  {
  return $this->getProperty('itemDefectReturnShippingFeesAmount');
  }


  /**
      * The type of return fees for returns of defect products.
    * @param ReturnFeesEnumeration|array $value
  * @return $this
  */
  public function itemDefectReturnFees($value)
  {
  $this->setProperty('itemDefectReturnFees', $value);
  return $this;
  }

  /**
  * @param ReturnFeesEnumeration|array $value
  * @return $this
  */
  public function setItemDefectReturnFees($value)
  {
  $this->setProperty('itemDefectReturnFees', $value);
  return $this;
  }

  /**
  * @param ReturnFeesEnumeration $value
  * @return $this
  */
  public function addItemDefectReturnFees($value)
  {
  $current = $this->getProperty('itemDefectReturnFees');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('itemDefectReturnFees', $current);
  return $this;
  }

  /**
  * @return ReturnFeesEnumeration|array
  */
  public function getItemDefectReturnFees()
  {
  return $this->getProperty('itemDefectReturnFees');
  }


  /**
      * The method (from an enumeration) by which the customer obtains a return
 * shipping label for a defect product.
    * @param ReturnLabelSourceEnumeration|array $value
  * @return $this
  */
  public function itemDefectReturnLabelSource($value)
  {
  $this->setProperty('itemDefectReturnLabelSource', $value);
  return $this;
  }

  /**
  * @param ReturnLabelSourceEnumeration|array $value
  * @return $this
  */
  public function setItemDefectReturnLabelSource($value)
  {
  $this->setProperty('itemDefectReturnLabelSource', $value);
  return $this;
  }

  /**
  * @param ReturnLabelSourceEnumeration $value
  * @return $this
  */
  public function addItemDefectReturnLabelSource($value)
  {
  $current = $this->getProperty('itemDefectReturnLabelSource');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('itemDefectReturnLabelSource', $current);
  return $this;
  }

  /**
  * @return ReturnLabelSourceEnumeration|array
  */
  public function getItemDefectReturnLabelSource()
  {
  return $this->getProperty('itemDefectReturnLabelSource');
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
      * Specifies a Web page or service by URL, for product returns.
    * @param string|array $value
  * @return $this
  */
  public function merchantReturnLink($value)
  {
  $this->setProperty('merchantReturnLink', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setMerchantReturnLink($value)
  {
  $this->setProperty('merchantReturnLink', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addMerchantReturnLink($value)
  {
  $current = $this->getProperty('merchantReturnLink');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('merchantReturnLink', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getMerchantReturnLink()
  {
  return $this->getProperty('merchantReturnLink');
  }


  /**
      * The amount of shipping costs if a product is returned due to customer
 * remorse. Applicable when property [[customerRemorseReturnFees]] equals
 * [[ReturnShippingFees]].
    * @param MonetaryAmount|array $value
  * @return $this
  */
  public function customerRemorseReturnShippingFeesAmount($value)
  {
  $this->setProperty('customerRemorseReturnShippingFeesAmount', $value);
  return $this;
  }

  /**
  * @param MonetaryAmount|array $value
  * @return $this
  */
  public function setCustomerRemorseReturnShippingFeesAmount($value)
  {
  $this->setProperty('customerRemorseReturnShippingFeesAmount', $value);
  return $this;
  }

  /**
  * @param MonetaryAmount $value
  * @return $this
  */
  public function addCustomerRemorseReturnShippingFeesAmount($value)
  {
  $current = $this->getProperty('customerRemorseReturnShippingFeesAmount');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('customerRemorseReturnShippingFeesAmount', $current);
  return $this;
  }

  /**
  * @return MonetaryAmount|array
  */
  public function getCustomerRemorseReturnShippingFeesAmount()
  {
  return $this->getProperty('customerRemorseReturnShippingFeesAmount');
  }


  /**
      * The method (from an enumeration) by which the customer obtains a return
 * shipping label for a product returned for any reason.
    * @param ReturnLabelSourceEnumeration|array $value
  * @return $this
  */
  public function returnLabelSource($value)
  {
  $this->setProperty('returnLabelSource', $value);
  return $this;
  }

  /**
  * @param ReturnLabelSourceEnumeration|array $value
  * @return $this
  */
  public function setReturnLabelSource($value)
  {
  $this->setProperty('returnLabelSource', $value);
  return $this;
  }

  /**
  * @param ReturnLabelSourceEnumeration $value
  * @return $this
  */
  public function addReturnLabelSource($value)
  {
  $current = $this->getProperty('returnLabelSource');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('returnLabelSource', $current);
  return $this;
  }

  /**
  * @return ReturnLabelSourceEnumeration|array
  */
  public function getReturnLabelSource()
  {
  return $this->getProperty('returnLabelSource');
  }


  /**
      * Are in-store returns offered? (For more advanced return methods use the
 * [[returnMethod]] property.)
    * @param bool|array $value
  * @return $this
  */
  public function inStoreReturnsOffered($value)
  {
  $this->setProperty('inStoreReturnsOffered', $value);
  return $this;
  }

  /**
  * @param bool|array $value
  * @return $this
  */
  public function setInStoreReturnsOffered($value)
  {
  $this->setProperty('inStoreReturnsOffered', $value);
  return $this;
  }

  /**
  * @param bool $value
  * @return $this
  */
  public function addInStoreReturnsOffered($value)
  {
  $current = $this->getProperty('inStoreReturnsOffered');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('inStoreReturnsOffered', $current);
  return $this;
  }

  /**
  * @return bool|array
  */
  public function getInStoreReturnsOffered()
  {
  return $this->getProperty('inStoreReturnsOffered');
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
