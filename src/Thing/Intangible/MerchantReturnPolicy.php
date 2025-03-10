<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;

/**
* A MerchantReturnPolicy provides information about product return policies
 * associated with an [[Organization]], [[Product]], or [[Offer]].
* @see schema:MerchantReturnPolicy
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class MerchantReturnPolicy extends Intangible
{


    /**
        * Are in-store returns offered? (For more advanced return methods use the
 * [[returnMethod]] property.)
        * @param array|string|mixed $value
    * @return $this
    */
    public function inStoreReturnsOffered($value)
    {
        $this->setProperty('inStoreReturnsOffered', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setInStoreReturnsOffered($value)
    {
        $this->setProperty('inStoreReturnsOffered', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getInStoreReturnsOffered()
    {
       return $this->getProperty('inStoreReturnsOffered');
    }


    /**
        * Amount of shipping costs for defect product returns. Applicable when property
 * [[itemDefectReturnFees]] equals [[ReturnShippingFees]].
        * @param array|string|mixed $value
    * @return $this
    */
    public function itemDefectReturnShippingFeesAmount($value)
    {
        $this->setProperty('itemDefectReturnShippingFeesAmount', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setItemDefectReturnShippingFeesAmount($value)
    {
        $this->setProperty('itemDefectReturnShippingFeesAmount', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getItemDefectReturnShippingFeesAmount()
    {
       return $this->getProperty('itemDefectReturnShippingFeesAmount');
    }


    /**
        * Specifies an applicable return policy (from an enumeration).
        * @param array|string|mixed $value
    * @return $this
    */
    public function returnPolicyCategory($value)
    {
        $this->setProperty('returnPolicyCategory', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setReturnPolicyCategory($value)
    {
        $this->setProperty('returnPolicyCategory', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getReturnPolicyCategory()
    {
       return $this->getProperty('returnPolicyCategory');
    }


    /**
        * The amount of shipping costs if a product is returned due to customer
 * remorse. Applicable when property [[customerRemorseReturnFees]] equals
 * [[ReturnShippingFees]].
        * @param array|string|mixed $value
    * @return $this
    */
    public function customerRemorseReturnShippingFeesAmount($value)
    {
        $this->setProperty('customerRemorseReturnShippingFeesAmount', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setCustomerRemorseReturnShippingFeesAmount($value)
    {
        $this->setProperty('customerRemorseReturnShippingFeesAmount', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCustomerRemorseReturnShippingFeesAmount()
    {
       return $this->getProperty('customerRemorseReturnShippingFeesAmount');
    }


    /**
        * A predefined value from OfferItemCondition specifying the condition of the
 * product or service, or the products or services included in the offer. Also
 * used for product return policies to specify the condition of products
 * accepted for returns.
        * @param array|string|mixed $value
    * @return $this
    */
    public function itemCondition($value)
    {
        $this->setProperty('itemCondition', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setItemCondition($value)
    {
        $this->setProperty('itemCondition', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getItemCondition()
    {
       return $this->getProperty('itemCondition');
    }


    /**
        * Use [[MonetaryAmount]] to specify a fixed restocking fee for product returns,
 * or use [[Number]] to specify a percentage of the product price paid by the
 * customer.
        * @param array|string|mixed $value
    * @return $this
    */
    public function restockingFee($value)
    {
        $this->setProperty('restockingFee', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setRestockingFee($value)
    {
        $this->setProperty('restockingFee', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getRestockingFee()
    {
       return $this->getProperty('restockingFee');
    }


    /**
        * The type of return fees if the product is returned due to customer remorse.
        * @param array|string|mixed $value
    * @return $this
    */
    public function customerRemorseReturnFees($value)
    {
        $this->setProperty('customerRemorseReturnFees', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setCustomerRemorseReturnFees($value)
    {
        $this->setProperty('customerRemorseReturnFees', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCustomerRemorseReturnFees()
    {
       return $this->getProperty('customerRemorseReturnFees');
    }


    /**
        * Specifies either a fixed return date or the number of days (from the delivery
 * date) that a product can be returned. Used when the [[returnPolicyCategory]]
 * property is specified as [[MerchantReturnFiniteReturnWindow]].
        * @param array|string|mixed $value
    * @return $this
    */
    public function merchantReturnDays($value)
    {
        $this->setProperty('merchantReturnDays', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setMerchantReturnDays($value)
    {
        $this->setProperty('merchantReturnDays', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getMerchantReturnDays()
    {
       return $this->getProperty('merchantReturnDays');
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
        * @param array|string|mixed $value
    * @return $this
    */
    public function additionalProperty($value)
    {
        $this->setProperty('additionalProperty', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setAdditionalProperty($value)
    {
        $this->setProperty('additionalProperty', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAdditionalProperty()
    {
       return $this->getProperty('additionalProperty');
    }


    /**
        * The type of return fees for purchased products (for any return reason).
        * @param array|string|mixed $value
    * @return $this
    */
    public function returnFees($value)
    {
        $this->setProperty('returnFees', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setReturnFees($value)
    {
        $this->setProperty('returnFees', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getReturnFees()
    {
       return $this->getProperty('returnFees');
    }


    /**
        * The type of return method offered, specified from an enumeration.
        * @param array|string|mixed $value
    * @return $this
    */
    public function returnMethod($value)
    {
        $this->setProperty('returnMethod', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setReturnMethod($value)
    {
        $this->setProperty('returnMethod', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getReturnMethod()
    {
       return $this->getProperty('returnMethod');
    }


    /**
        * A country where a particular merchant return policy applies to, for example
 * the two-letter ISO 3166-1 alpha-2 country code.
        * @param array|string|mixed $value
    * @return $this
    */
    public function applicableCountry($value)
    {
        $this->setProperty('applicableCountry', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setApplicableCountry($value)
    {
        $this->setProperty('applicableCountry', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getApplicableCountry()
    {
       return $this->getProperty('applicableCountry');
    }


    /**
        * The method (from an enumeration) by which the customer obtains a return
 * shipping label for a product returned for any reason.
        * @param array|string|mixed $value
    * @return $this
    */
    public function returnLabelSource($value)
    {
        $this->setProperty('returnLabelSource', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setReturnLabelSource($value)
    {
        $this->setProperty('returnLabelSource', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getReturnLabelSource()
    {
       return $this->getProperty('returnLabelSource');
    }


    /**
        * A refund type, from an enumerated list.
        * @param array|string|mixed $value
    * @return $this
    */
    public function refundType($value)
    {
        $this->setProperty('refundType', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setRefundType($value)
    {
        $this->setProperty('refundType', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getRefundType()
    {
       return $this->getProperty('refundType');
    }


    /**
        * Seasonal override of a return policy.
        * @param array|string|mixed $value
    * @return $this
    */
    public function returnPolicySeasonalOverride($value)
    {
        $this->setProperty('returnPolicySeasonalOverride', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setReturnPolicySeasonalOverride($value)
    {
        $this->setProperty('returnPolicySeasonalOverride', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getReturnPolicySeasonalOverride()
    {
       return $this->getProperty('returnPolicySeasonalOverride');
    }


    /**
        * The method (from an enumeration) by which the customer obtains a return
 * shipping label for a product returned due to customer remorse.
        * @param array|string|mixed $value
    * @return $this
    */
    public function customerRemorseReturnLabelSource($value)
    {
        $this->setProperty('customerRemorseReturnLabelSource', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setCustomerRemorseReturnLabelSource($value)
    {
        $this->setProperty('customerRemorseReturnLabelSource', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCustomerRemorseReturnLabelSource()
    {
       return $this->getProperty('customerRemorseReturnLabelSource');
    }


    /**
        * The type of return fees for returns of defect products.
        * @param array|string|mixed $value
    * @return $this
    */
    public function itemDefectReturnFees($value)
    {
        $this->setProperty('itemDefectReturnFees', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setItemDefectReturnFees($value)
    {
        $this->setProperty('itemDefectReturnFees', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getItemDefectReturnFees()
    {
       return $this->getProperty('itemDefectReturnFees');
    }


    /**
        * The country where the product has to be sent to for returns, for example
 * "Ireland" using the [[name]] property of [[Country]]. You can also provide
 * the two-letter [ISO 3166-1 alpha-2 country
 * code](http://en.wikipedia.org/wiki/ISO_3166-1). Note that this can be
 * different from the country where the product was originally shipped from or
 * sent to.
        * @param array|string|mixed $value
    * @return $this
    */
    public function returnPolicyCountry($value)
    {
        $this->setProperty('returnPolicyCountry', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setReturnPolicyCountry($value)
    {
        $this->setProperty('returnPolicyCountry', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getReturnPolicyCountry()
    {
       return $this->getProperty('returnPolicyCountry');
    }


    /**
        * The membership program tier an Offer (or a PriceSpecification,
 * OfferShippingDetails, or MerchantReturnPolicy under an Offer) is valid for.
        * @param array|string|mixed $value
    * @return $this
    */
    public function validForMemberTier($value)
    {
        $this->setProperty('validForMemberTier', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setValidForMemberTier($value)
    {
        $this->setProperty('validForMemberTier', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getValidForMemberTier()
    {
       return $this->getProperty('validForMemberTier');
    }


    /**
        * Specifies a Web page or service by URL, for product returns.
        * @param array|string|mixed $value
    * @return $this
    */
    public function merchantReturnLink($value)
    {
        $this->setProperty('merchantReturnLink', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setMerchantReturnLink($value)
    {
        $this->setProperty('merchantReturnLink', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getMerchantReturnLink()
    {
       return $this->getProperty('merchantReturnLink');
    }


    /**
        * The method (from an enumeration) by which the customer obtains a return
 * shipping label for a defect product.
        * @param array|string|mixed $value
    * @return $this
    */
    public function itemDefectReturnLabelSource($value)
    {
        $this->setProperty('itemDefectReturnLabelSource', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setItemDefectReturnLabelSource($value)
    {
        $this->setProperty('itemDefectReturnLabelSource', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getItemDefectReturnLabelSource()
    {
       return $this->getProperty('itemDefectReturnLabelSource');
    }


    /**
        * Amount of shipping costs for product returns (for any reason). Applicable
 * when property [[returnFees]] equals [[ReturnShippingFees]].
        * @param array|string|mixed $value
    * @return $this
    */
    public function returnShippingFeesAmount($value)
    {
        $this->setProperty('returnShippingFeesAmount', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setReturnShippingFeesAmount($value)
    {
        $this->setProperty('returnShippingFeesAmount', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getReturnShippingFeesAmount()
    {
       return $this->getProperty('returnShippingFeesAmount');
    }


}
