<?php
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
    * @param QuantitativeValue|array|string $value
    * @return $this
    * @deprecated use setStupidProperty
    */
    public function stupidProperty($value)
    {
        $this->setProperty('stupidProperty', $value);
        return $this;
    }
   /**
    * @param QuantitativeValue|array|string $value
    * @return $this
    */
    public function setStupidProperty($value)
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
