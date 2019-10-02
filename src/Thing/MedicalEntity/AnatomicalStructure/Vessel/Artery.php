<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Vessel;

use Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Vessel;
use Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure;

/**
* A type of blood vessel that specifically carries blood away from the heart.
* @see http://schema.org/Artery
* @package Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Vessel
*/
class Artery extends Vessel
{

    /**
    * The area to which the artery supplies blood.
    * @param AnatomicalStructure $value
    * @return $this
    */
    public function supplyTo(?AnatomicalStructure $value)
    {
        $this->setProperty('supplyTo', $value);
        return $this;
    }

    /**
    * The anatomical or organ system that the artery originates from.
    * @param AnatomicalStructure $value
    * @return $this
    */
    public function source(?AnatomicalStructure $value)
    {
        $this->setProperty('source', $value);
        return $this;
    }

    /**
    * The branches that comprise the arterial structure.
    * @param AnatomicalStructure $value
    * @return $this
    */
    public function arterialBranch(?AnatomicalStructure $value)
    {
        $this->setProperty('arterialBranch', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\MedicalEntity\\AnatomicalStructure\\Vessel\\Artery','Thing\\Artery');

