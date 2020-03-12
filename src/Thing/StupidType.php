<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing;

use Sohophp\SchemaOrg\Thing;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;

/**
* A StupidType for testing.
* @see http://schema.org/StupidType
* @package Sohophp\SchemaOrg\Thing

*
*/
class StupidType extends Thing
{

    /**
    * This is a StupidProperty! - for testing only
    * @param QuantitativeValue|array $value
    * @return $this
    */
    public function stupidProperty(?QuantitativeValue $value)
    {
        $this->setProperty('stupidProperty', $value);
        return $this;
    }
   /**
    * @param QuantitativeValue|array $value
    * @return $this
    */
    public function setStupidProperty(?QuantitativeValue $value)
    {
        $this->setProperty('stupidProperty', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getStupidProperty()
    {
       return $this->getProperty('stupidProperty');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\StupidType','Thing\\StupidType');

