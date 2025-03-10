<?php
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
        * @param AnatomicalStructure|array|string|mixed $value
    * @return $this
    */
    public function supplyTo($value)
    {
        $this->setProperty('supplyTo', $value);
        return $this;
    }

    /**
    * @param AnatomicalStructure|array|string|mixed $value
    * @return $this
    */
    public function setSupplyTo($value)
    {
        $this->setProperty('supplyTo', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSupplyTo()
    {
       return $this->getProperty('supplyTo');
    }


    /**
        * The anatomical or organ system that the artery originates from.
        * @param AnatomicalStructure|array|string|mixed $value
    * @return $this
    */
    public function source($value)
    {
        $this->setProperty('source', $value);
        return $this;
    }

    /**
    * @param AnatomicalStructure|array|string|mixed $value
    * @return $this
    */
    public function setSource($value)
    {
        $this->setProperty('source', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSource()
    {
       return $this->getProperty('source');
    }


    /**
        * The branches that comprise the arterial structure.
        * @param AnatomicalStructure|array|string|mixed $value
    * @return $this
    */
    public function arterialBranch($value)
    {
        $this->setProperty('arterialBranch', $value);
        return $this;
    }

    /**
    * @param AnatomicalStructure|array|string|mixed $value
    * @return $this
    */
    public function setArterialBranch($value)
    {
        $this->setProperty('arterialBranch', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getArterialBranch()
    {
       return $this->getProperty('arterialBranch');
    }


}
