<?php
namespace Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalTest;

use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalTest;

/**
* A medical test performed by a laboratory that typically involves examination of a tissue sample by a pathologist.
* @see schema:PathologyTest
* @package Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalTest
*/
class PathologyTest extends MedicalTest
{
   /**
        * The type of tissue sample required for the test.
        */
    protected $tissueSample = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setTissueSample($value)
    {
        $this->setProperty('tissueSample', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getTissueSample()
    {
       return $this->getProperty('tissueSample');
    }


}
