<?php
namespace Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalTest;

use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalTest;

/**
* Any collection of tests commonly ordered together.
* @see http://schema.org/MedicalTestPanel
* @package Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalTest

*
*/
class MedicalTestPanel extends MedicalTest
{

    /**
    * A component test of the panel.
    * @param MedicalTest|array|string $value
    * @return $this
    * @deprecated use setSubTest
    */
    public function subTest($value)
    {
        $this->setProperty('subTest', $value);
        return $this;
    }
   /**
    * @param MedicalTest|array|string $value
    * @return $this
    */
    public function setSubTest($value)
    {
        $this->setProperty('subTest', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getSubTest()
    {
       return $this->getProperty('subTest');
    }


}
