<?php declare(strict_types=1);
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
    * @param CategoryCode $value
    * @return $this
    */
    public function hasCategoryCode(?CategoryCode $value)
    {
        $this->setProperty('hasCategoryCode', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\CreativeWork\\DefinedTermSet\\CategoryCodeSet','Thing\\CategoryCodeSet');

