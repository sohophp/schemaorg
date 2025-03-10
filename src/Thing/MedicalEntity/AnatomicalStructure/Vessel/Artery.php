<?php
namespace Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Vessel;

use Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Vessel;

/**
* A type of blood vessel that specifically carries blood away from the heart.
* @see schema:Artery
* @package Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Vessel
*/
class Artery extends Vessel
{


    /**
        * The branches that comprise the arterial structure.
        * @param array|string|mixed $value
    * @return $this
    */
    public function arterialBranch($value)
    {
        $this->setProperty('arterialBranch', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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


    /**
        * The area to which the artery supplies blood.
        * @param array|string|mixed $value
    * @return $this
    */
    public function supplyTo($value)
    {
        $this->setProperty('supplyTo', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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


}
