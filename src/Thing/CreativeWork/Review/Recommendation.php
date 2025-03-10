<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork\Review;

use Sohophp\SchemaOrg\Thing\CreativeWork\Review;

/**
* [[Recommendation]] is a type of [[Review]] that suggests or proposes
 * something as the best option or best course of action. Recommendations may be
 * for products or services, or other concrete things, as in the case of a
 * ranked list or product guide. A [[Guide]] may list multiple recommendations
 * for different categories. For example, in a [[Guide]] about which TVs to buy,
 * the author may have several [[Recommendation]]s.
* @see schema:Recommendation
* @package Sohophp\SchemaOrg\Thing\CreativeWork\Review
*/
class Recommendation extends Review
{


    /**
        * A category for the item. Greater signs or slashes can be used to informally
 * indicate a category hierarchy.
        * @param array|string|mixed $value
    * @return $this
    */
    public function category($value)
    {
        $this->setProperty('category', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setCategory($value)
    {
        $this->setProperty('category', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCategory()
    {
       return $this->getProperty('category');
    }


}
