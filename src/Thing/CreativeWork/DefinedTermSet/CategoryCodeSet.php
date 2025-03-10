<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork\DefinedTermSet;

use Sohophp\SchemaOrg\Thing\CreativeWork\DefinedTermSet;
use Sohophp\SchemaOrg\Thing\Intangible\DefinedTerm\CategoryCode;

/**
* A set of Category Code values.
* @see http://schema.org/CategoryCodeSet
* @package Sohophp\SchemaOrg\Thing\CreativeWork\DefinedTermSet
*/
class CategoryCodeSet extends DefinedTermSet
{


    /**
        * A Category code contained in this code set.
        * @param CategoryCode|array|string|mixed $value
    * @return $this
    */
    public function hasCategoryCode($value)
    {
        $this->setProperty('hasCategoryCode', $value);
        return $this;
    }

    /**
    * @param CategoryCode|array|string|mixed $value
    * @return $this
    */
    public function setHasCategoryCode($value)
    {
        $this->setProperty('hasCategoryCode', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getHasCategoryCode()
    {
       return $this->getProperty('hasCategoryCode');
    }


}
