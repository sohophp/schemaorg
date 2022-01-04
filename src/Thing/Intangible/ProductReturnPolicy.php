<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\RefundTypeEnumeration;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\ReturnFeesEnumeration;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\ProductReturnEnumeration;

/**
* A ProductReturnPolicy provides information about product return policies associated with an <a class="localLink" href="http://schema.org/Organization">Organization</a> or <a class="localLink" href="http://schema.org/Product">Product</a>.
* @see http://schema.org/ProductReturnPolicy
* @package Sohophp\SchemaOrg\Thing\Intangible

*
*/
class ProductReturnPolicy extends Intangible
{

    /**
    * A refundType, from an enumerated list.
    * @param RefundTypeEnumeration|array|string $value
    * @return $this
    * @deprecated use setRefundType
    */
    public function refundType($value)
    {
        $this->setProperty('refundType', $value);
        return $this;
    }
   /**
    * @param RefundTypeEnumeration|array|string $value
    * @return $this
    */
    public function setRefundType($value)
    {
        $this->setProperty('refundType', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getRefundType()
    {
       return $this->getProperty('refundType');
    }

    /**
    * The productReturnDays property indicates the number of days (from purchase) within which relevant product return policy is applicable.
    * @param int|array|string $value
    * @return $this
    * @deprecated use setProductReturnDays
    */
    public function productReturnDays($value)
    {
        $this->setProperty('productReturnDays', $value);
        return $this;
    }
   /**
    * @param int|array|string $value
    * @return $this
    */
    public function setProductReturnDays($value)
    {
        $this->setProperty('productReturnDays', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getProductReturnDays()
    {
       return $this->getProperty('productReturnDays');
    }

    /**
    * Indicates (via enumerated options) the return fees policy for a ProductReturnPolicy
    * @param ReturnFeesEnumeration|array|string $value
    * @return $this
    * @deprecated use setReturnFees
    */
    public function returnFees($value)
    {
        $this->setProperty('returnFees', $value);
        return $this;
    }
   /**
    * @param ReturnFeesEnumeration|array|string $value
    * @return $this
    */
    public function setReturnFees($value)
    {
        $this->setProperty('returnFees', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getReturnFees()
    {
       return $this->getProperty('returnFees');
    }

    /**
    * A returnPolicyCategory expresses at most one of several enumerated kinds of return.
    * @param ProductReturnEnumeration|array|string $value
    * @return $this
    * @deprecated use setReturnPolicyCategory
    */
    public function returnPolicyCategory($value)
    {
        $this->setProperty('returnPolicyCategory', $value);
        return $this;
    }
   /**
    * @param ProductReturnEnumeration|array|string $value
    * @return $this
    */
    public function setReturnPolicyCategory($value)
    {
        $this->setProperty('returnPolicyCategory', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getReturnPolicyCategory()
    {
       return $this->getProperty('returnPolicyCategory');
    }

    /**
    * Are in-store returns offered?
    * @param bool|array|string $value
    * @return $this
    * @deprecated use setInStoreReturnsOffered
    */
    public function inStoreReturnsOffered($value)
    {
        $this->setProperty('inStoreReturnsOffered', $value);
        return $this;
    }
   /**
    * @param bool|array|string $value
    * @return $this
    */
    public function setInStoreReturnsOffered($value)
    {
        $this->setProperty('inStoreReturnsOffered', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getInStoreReturnsOffered()
    {
       return $this->getProperty('inStoreReturnsOffered');
    }

    /**
    * Indicates a Web page or service by URL, for product return.
    * @param string|array $value
    * @return $this
    * @deprecated use setProductReturnLink
    */
    public function productReturnLink($value)
    {
        $this->setProperty('productReturnLink', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setProductReturnLink($value)
    {
        $this->setProperty('productReturnLink', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getProductReturnLink()
    {
       return $this->getProperty('productReturnLink');
    }


}
