<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;

/**
* A ProductReturnPolicy provides information about product return policies associated with an [[Organization]] or [[Product]].
* @see schema:ProductReturnPolicy
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class ProductReturnPolicy extends Intangible
{
   /**
        * Indicates a Web page or service by URL, for product return.
        */
    protected $productReturnLink = null;

   /**
        * The productReturnDays property indicates the number of days (from purchase) within which relevant product return policy is applicable.
        */
    protected $productReturnDays = null;


    /**
    * @param array|string $value
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
    * @param array|string $value
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
