<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\RefundTypeEnumeration;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\ReturnFeesEnumeration;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\ProductReturnEnumeration;

/**
* A ProductReturnPolicy provides information about product return policies associated with an <a class="localLink" href="http://schema.org/Organization">Organization</a> or <a class="localLink" href="http://schema.org/Product">Product</a>.
* @see http://schema.org/ProductReturnPolicy
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class ProductReturnPolicy extends Intangible
{

    /**
    * A refundType, from an enumerated list.
    * @param RefundTypeEnumeration $value
    * @return $this
    */
    public function refundType(?RefundTypeEnumeration $value)
    {
        $this->setProperty('refundType', $value);
        return $this;
    }

    /**
    * The productReturnDays property indicates the number of days (from purchase) within which relevant product return policy is applicable.
    * @param int $value
    * @return $this
    */
    public function productReturnDays(?int $value)
    {
        $this->setProperty('productReturnDays', $value);
        return $this;
    }

    /**
    * Indicates (via enumerated options) the return fees policy for a ProductReturnPolicy
    * @param ReturnFeesEnumeration $value
    * @return $this
    */
    public function returnFees(?ReturnFeesEnumeration $value)
    {
        $this->setProperty('returnFees', $value);
        return $this;
    }

    /**
    * A returnPolicyCategory expresses at most one of several enumerated kinds of return.
    * @param ProductReturnEnumeration $value
    * @return $this
    */
    public function returnPolicyCategory(?ProductReturnEnumeration $value)
    {
        $this->setProperty('returnPolicyCategory', $value);
        return $this;
    }

    /**
    * Are in-store returns offered?
    * @param bool $value
    * @return $this
    */
    public function inStoreReturnsOffered(?bool $value)
    {
        $this->setProperty('inStoreReturnsOffered', $value);
        return $this;
    }

    /**
    * Indicates a Web page or service by URL, for product return.
    * @param string $value
    * @return $this
    */
    public function productReturnLink(?string $value)
    {
        $this->setProperty('productReturnLink', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\ProductReturnPolicy','Thing\\ProductReturnPolicy');

