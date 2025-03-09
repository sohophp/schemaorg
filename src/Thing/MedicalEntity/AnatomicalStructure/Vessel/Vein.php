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
        */
    protected $drainsTo = null;

   /**
        * The anatomical or organ system that the vein flows into; a larger structure that the vein connects to.
        */
    protected $tributary = null;

   /**
        * The anatomical or organ system drained by this vessel; generally refers to a specific part of an organ.
        */
    protected $regionDrained = null;


    /**
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
