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
        * The end date and time of the item (in [ISO 8601 date
 * format](http://en.wikipedia.org/wiki/ISO_8601)).
        * @param array|string|mixed $value
    * @return $this
    */
    public function endDate($value)
    {
        $this->setProperty('endDate', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The start date and time of the item (in [ISO 8601 date
 * format](http://en.wikipedia.org/wiki/ISO_8601)).
        * @param array|string|mixed $value
    * @return $this
    */
    public function startDate($value)
    {
        $this->setProperty('startDate', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
