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
        */
    protected $biomechnicalClass = null;

   /**
        * The name given to how bone physically connects to each other.
        */
    protected $structuralClass = null;

   /**
        * The degree of mobility the joint allows.
        */
    protected $functionalClass = null;


    /**
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
