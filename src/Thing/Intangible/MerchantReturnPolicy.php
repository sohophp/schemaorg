<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;

/**
* A MerchantReturnPolicy provides information about product return policies associated with an [[Organization]], [[Product]], or [[Offer]].
* @see schema:MerchantReturnPolicy
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class MerchantReturnPolicy extends Intangible
{
   /**
        * Are in-store returns offered? (For more advanced return methods use the [[returnMethod]] property.)
        */
    protected $inStoreReturnsOffered = null;

   /**
        * Amount of shipping costs for defect product returns. Applicable when property [[itemDefectReturnFees]] equals [[ReturnShippingFees]].
        */
    protected $itemDefectReturnShippingFeesAmount = null;

   /**
        * Specifies an applicable return policy (from an enumeration).
        */
    protected $returnPolicyCategory = null;

   /**
        * The amount of shipping costs if a product is returned due to customer remorse. Applicable when property [[customerRemorseReturnFees]] equals [[ReturnShippingFees]].
        */
    protected $customerRemorseReturnShippingFeesAmount = null;

   /**
        * A predefined value from OfferItemCondition specifying the condition of the product or service, or the products or services included in the offer. Also used for product return policies to specify the condition of products accepted for returns.
        */
    protected $itemCondition = null;

   /**
        * Use [[MonetaryAmount]] to specify a fixed restocking fee for product returns, or use [[Number]] to specify a percentage of the product price paid by the customer.
        */
    protected $restockingFee = null;

   /**
        * The type of return fees if the product is returned due to customer remorse.
        */
    protected $customerRemorseReturnFees = null;

   /**
        * Specifies either a fixed return date or the number of days (from the delivery date) that a product can be returned. Used when the [[returnPolicyCategory]] property is specified as [[MerchantReturnFiniteReturnWindow]].
        */
    protected $merchantReturnDays = null;

   /**
        * A property-value pair representing an additional characteristic of the entity, e.g. a product feature or another characteristic for which there is no matching property in schema.org.\n\nNote: Publishers should be aware that applications designed to use specific schema.org properties (e.g. https://schema.org/width, https://schema.org/color, https://schema.org/gtin13, ...) will typically expect such data to be provided using those properties, rather than using the generic property/value mechanism.

        */
    protected $additionalProperty = null;

   /**
        * The type of return fees for purchased products (for any return reason).
        */
    protected $returnFees = null;

   /**
        * The type of return method offered, specified from an enumeration.
        */
    protected $returnMethod = null;

   /**
        * A country where a particular merchant return policy applies to, for example the two-letter ISO 3166-1 alpha-2 country code.
        */
    protected $applicableCountry = null;

   /**
        * The method (from an enumeration) by which the customer obtains a return shipping label for a product returned for any reason.
        */
    protected $returnLabelSource = null;

   /**
        * A refund type, from an enumerated list.
        */
    protected $refundType = null;

   /**
        * Seasonal override of a return policy.
        */
    protected $returnPolicySeasonalOverride = null;

   /**
        * The method (from an enumeration) by which the customer obtains a return shipping label for a product returned due to customer remorse.
        */
    protected $customerRemorseReturnLabelSource = null;

   /**
        * The type of return fees for returns of defect products.
        */
    protected $itemDefectReturnFees = null;

   /**
        * The country where the product has to be sent to for returns, for example "Ireland" using the [[name]] property of [[Country]]. You can also provide the two-letter [ISO 3166-1 alpha-2 country code](http://en.wikipedia.org/wiki/ISO_3166-1). Note that this can be different from the country where the product was originally shipped from or sent to.
        */
    protected $returnPolicyCountry = null;

   /**
        * The membership program tier an Offer (or a PriceSpecification, OfferShippingDetails, or MerchantReturnPolicy under an Offer) is valid for.
        */
    protected $validForMemberTier = null;

   /**
        * Specifies a Web page or service by URL, for product returns.
        */
    protected $merchantReturnLink = null;

   /**
        * The method (from an enumeration) by which the customer obtains a return shipping label for a defect product.
        */
    protected $itemDefectReturnLabelSource = null;

   /**
        * Amount of shipping costs for product returns (for any reason). Applicable when property [[returnFees]] equals [[ReturnShippingFees]].
        */
    protected $returnShippingFeesAmount = null;


    /**
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
