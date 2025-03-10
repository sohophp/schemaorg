<?php
namespace Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Vessel;

use Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Vessel;

/**
* A type of blood vessel that specifically carries blood to the heart.
* @see schema:Vein
* @package Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Vessel
*/
class Vein extends Vessel
{


    /**
        * The vasculature that the vein drains into.
        * @param array|string|mixed $value
    * @return $this
    */
    public function drainsTo($value)
    {
        $this->setProperty('drainsTo', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setDrainsTo($value)
    {
        $this->setProperty('drainsTo', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDrainsTo()
    {
       return $this->getProperty('drainsTo');
    }


    /**
        * The anatomical or organ system that the vein flows into; a larger structure
 * that the vein connects to.
        * @param array|string|mixed $value
    * @return $this
    */
    public function tributary($value)
    {
        $this->setProperty('tributary', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setTributary($value)
    {
        $this->setProperty('tributary', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getTributary()
    {
       return $this->getProperty('tributary');
    }


    /**
        * The anatomical or organ system drained by this vessel; generally refers to a
 * specific part of an organ.
        * @param array|string|mixed $value
    * @return $this
    */
    public function regionDrained($value)
    {
        $this->setProperty('regionDrained', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setRegionDrained($value)
    {
        $this->setProperty('regionDrained', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getRegionDrained()
    {
       return $this->getProperty('regionDrained');
    }


}
