<?php declare(strict_types=1);
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
    * @param MedicalTest $value
    * @return $this
    */
    public function subTest(?MedicalTest $value)
    {
        $this->setProperty('subTest', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\MedicalEntity\\MedicalTest\\MedicalTestPanel','Thing\\MedicalTestPanel');

