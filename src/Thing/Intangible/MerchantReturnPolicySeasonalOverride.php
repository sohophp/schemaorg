<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;

/**
* A seasonal override of a return policy, for example used for holidays.
* @see schema:MerchantReturnPolicySeasonalOverride
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class MerchantReturnPolicySeasonalOverride extends Intangible
{
   /**
        * Specifies an applicable return policy (from an enumeration).
        */
    protected $returnPolicyCategory = null;

   /**
        * The end date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
        */
    protected $endDate = null;

   /**
        * Use [[MonetaryAmount]] to specify a fixed restocking fee for product returns, or use [[Number]] to specify a percentage of the product price paid by the customer.
        */
    protected $restockingFee = null;

   /**
        * Specifies either a fixed return date or the number of days (from the delivery date) that a product can be returned. Used when the [[returnPolicyCategory]] property is specified as [[MerchantReturnFiniteReturnWindow]].
        */
    protected $merchantReturnDays = null;

   /**
        * The type of return fees for purchased products (for any return reason).
        */
    protected $returnFees = null;

   /**
        * The start date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
        */
    protected $startDate = null;

   /**
        * The type of return method offered, specified from an enumeration.
        */
    protected $returnMethod = null;

   /**
        * A refund type, from an enumerated list.
        */
    protected $refundType = null;

   /**
        * Amount of shipping costs for product returns (for any reason). Applicable when property [[returnFees]] equals [[ReturnShippingFees]].
        */
    protected $returnShippingFeesAmount = null;


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
    public function setEndDate($value)
    {
        $this->setProperty('endDate', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEndDate()
    {
       return $this->getProperty('endDate');
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
    public function setStartDate($value)
    {
        $this->setProperty('startDate', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getStartDate()
    {
       return $this->getProperty('startDate');
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
