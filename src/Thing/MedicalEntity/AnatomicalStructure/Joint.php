<?php
namespace Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure;

use Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure;

/**
* The anatomical location at which two or more bones make contact.
* @see schema:Joint
* @package Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure
*/
class Joint extends AnatomicalStructure
{


    /**
        * The biomechanical properties of the bone.
        * @param array|string|mixed $value
    * @return $this
    */
    public function biomechnicalClass($value)
    {
        $this->setProperty('biomechnicalClass', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setBiomechnicalClass($value)
    {
        $this->setProperty('biomechnicalClass', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getBiomechnicalClass()
    {
       return $this->getProperty('biomechnicalClass');
    }


    /**
        * The name given to how bone physically connects to each other.
        * @param array|string|mixed $value
    * @return $this
    */
    public function structuralClass($value)
    {
        $this->setProperty('structuralClass', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setStructuralClass($value)
    {
        $this->setProperty('structuralClass', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getStructuralClass()
    {
       return $this->getProperty('structuralClass');
    }


    /**
        * The degree of mobility the joint allows.
        * @param array|string|mixed $value
    * @return $this
    */
    public function functionalClass($value)
    {
        $this->setProperty('functionalClass', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setFunctionalClass($value)
    {
        $this->setProperty('functionalClass', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getFunctionalClass()
    {
       return $this->getProperty('functionalClass');
    }


}
