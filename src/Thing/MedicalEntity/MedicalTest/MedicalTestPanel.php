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
    * @param MedicalTest|array $value
    * @return $this
    */
    public function subTest(?MedicalTest $value)
    {
        $this->setProperty('subTest', $value);
        return $this;
    }
   /**
    * @param MedicalTest|array $value
    * @return $this
    */
    public function setSubTest(?MedicalTest $value)
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


class_alias('Sohophp\\SchemaOrg\\Thing\\MedicalEntity\\MedicalTest\\MedicalTestPanel','Thing\\MedicalTestPanel');

