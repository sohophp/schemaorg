<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure;

use Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure;
use Sohophp\SchemaOrg\Thing\MedicalEntity;

/**
* The anatomical location at which two or more bones make contact.
* @see http://schema.org/Joint
* @package Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure
*/
class Joint extends AnatomicalStructure
{

    /**
    * The biomechanical properties of the bone.
    * @param string $value
    * @return $this
    */
    public function biomechnicalClass(?string $value)
    {
        $this->setProperty('biomechnicalClass', $value);
        return $this;
    }

    /**
    * The name given to how bone physically connects to each other.
    * @param string $value
    * @return $this
    */
    public function structuralClass(?string $value)
    {
        $this->setProperty('structuralClass', $value);
        return $this;
    }

    /**
    * The degree of mobility the joint allows.
    * @param MedicalEntity|string $value
    * @return $this
    */
    public function functionalClass($value)
    {
        $this->setProperty('functionalClass', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\MedicalEntity\\AnatomicalStructure\\Joint','Thing\\Joint');

