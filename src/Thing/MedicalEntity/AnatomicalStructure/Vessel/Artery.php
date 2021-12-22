<?php
namespace Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Vessel;

use Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Vessel;
use Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure;

/**
* A type of blood vessel that specifically carries blood away from the heart.
* @see http://schema.org/Artery
* @package Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Vessel

*
*/
class Artery extends Vessel
{

    /**
    * The area to which the artery supplies blood.
    * @param AnatomicalStructure|array $value
    * @return $this
    */
    public function supplyTo(?AnatomicalStructure $value)
    {
        $this->setProperty('supplyTo', $value);
        return $this;
    }
   /**
    * @param AnatomicalStructure|array $value
    * @return $this
    */
    public function setSupplyTo(?AnatomicalStructure $value)
    {
        $this->setProperty('supplyTo', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getSupplyTo()
    {
       return $this->getProperty('supplyTo');
    }

    /**
    * The anatomical or organ system that the artery originates from.
    * @param AnatomicalStructure|array $value
    * @return $this
    */
    public function source(?AnatomicalStructure $value)
    {
        $this->setProperty('source', $value);
        return $this;
    }
   /**
    * @param AnatomicalStructure|array $value
    * @return $this
    */
    public function setSource(?AnatomicalStructure $value)
    {
        $this->setProperty('source', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getSource()
    {
       return $this->getProperty('source');
    }

    /**
    * The branches that comprise the arterial structure.
    * @param AnatomicalStructure|array $value
    * @return $this
    */
    public function arterialBranch(?AnatomicalStructure $value)
    {
        $this->setProperty('arterialBranch', $value);
        return $this;
    }
   /**
    * @param AnatomicalStructure|array $value
    * @return $this
    */
    public function setArterialBranch(?AnatomicalStructure $value)
    {
        $this->setProperty('arterialBranch', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getArterialBranch()
    {
       return $this->getProperty('arterialBranch');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\MedicalEntity\\AnatomicalStructure\\Vessel\\Artery','Thing\\Artery');

