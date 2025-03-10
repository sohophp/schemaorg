<?php
namespace Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalTest;

use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalTest;

/**
* Any collection of tests commonly ordered together.
* @see http://schema.org/MedicalTestPanel
* @package Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalTest
*/
class MedicalTestPanel extends MedicalTest
{


    /**
        * A component test of the panel.
        * @param MedicalTest|array|string|mixed $value
    * @return $this
    */
    public function subTest($value)
    {
        $this->setProperty('subTest', $value);
        return $this;
    }

    /**
    * @param MedicalTest|array|string|mixed $value
    * @return $this
    */
    public function setSubTest($value)
    {
        $this->setProperty('subTest', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSubTest()
    {
       return $this->getProperty('subTest');
    }


}
