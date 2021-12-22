<?php
namespace Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure;

use Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure;
use Sohophp\SchemaOrg\Thing\MedicalEntity;

/**
* The anatomical location at which two or more bones make contact.
* @see http://schema.org/Joint
* @package Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure

*
*/
class Joint extends AnatomicalStructure
{

    /**
    * The biomechanical properties of the bone.
    * @param string|array $value
    * @return $this
    */
    public function biomechnicalClass(?string $value)
    {
        $this->setProperty('biomechnicalClass', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setBiomechnicalClass(?string $value)
    {
        $this->setProperty('biomechnicalClass', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getBiomechnicalClass()
    {
       return $this->getProperty('biomechnicalClass');
    }

    /**
    * The name given to how bone physically connects to each other.
    * @param string|array $value
    * @return $this
    */
    public function structuralClass(?string $value)
    {
        $this->setProperty('structuralClass', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setStructuralClass(?string $value)
    {
        $this->setProperty('structuralClass', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getStructuralClass()
    {
       return $this->getProperty('structuralClass');
    }

    /**
    * The degree of mobility the joint allows.
    * @param MedicalEntity|string|array $value
    * @return $this
    */
    public function functionalClass($value)
    {
        $this->setProperty('functionalClass', $value);
        return $this;
    }
   /**
    * @param MedicalEntity|string|array $value
    * @return $this
    */
    public function setFunctionalClass($value)
    {
        $this->setProperty('functionalClass', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getFunctionalClass()
    {
       return $this->getProperty('functionalClass');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\MedicalEntity\\AnatomicalStructure\\Joint','Thing\\Joint');

