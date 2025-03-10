<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;

/**
* A ProductReturnPolicy provides information about product return policies
 * associated with an [[Organization]] or [[Product]].
* @see schema:ProductReturnPolicy
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class ProductReturnPolicy extends Intangible
{


    /**
        * Indicates a Web page or service by URL, for product return.
        * @param array|string|mixed $value
    * @return $this
    */
    public function productReturnLink($value)
    {
        $this->setProperty('productReturnLink', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setProductReturnLink($value)
    {
        $this->setProperty('productReturnLink', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getProductReturnLink()
    {
       return $this->getProperty('productReturnLink');
    }


    /**
        * The productReturnDays property indicates the number of days (from purchase)
 * within which relevant product return policy is applicable.
        * @param array|string|mixed $value
    * @return $this
    */
    public function productReturnDays($value)
    {
        $this->setProperty('productReturnDays', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setProductReturnDays($value)
    {
        $this->setProperty('productReturnDays', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getProductReturnDays()
    {
       return $this->getProperty('productReturnDays');
    }


}
