<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalTest;

use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalTest;

/**
* A medical test performed by a laboratory that typically involves examination of a tissue sample by a pathologist.
* @see http://schema.org/PathologyTest
* @package Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalTest

*
*/
class PathologyTest extends MedicalTest
{

    /**
    * The type of tissue sample required for the test.
    * @param string|array $value
    * @return $this
    */
    public function tissueSample(?string $value)
    {
        $this->setProperty('tissueSample', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setTissueSample(?string $value)
    {
        $this->setProperty('tissueSample', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getTissueSample()
    {
       return $this->getProperty('tissueSample');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\MedicalEntity\\MedicalTest\\PathologyTest','Thing\\PathologyTest');

