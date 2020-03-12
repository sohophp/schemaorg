<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Vessel;

use Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Vessel;
use Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure;
use Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalSystem;

/**
* A type of blood vessel that specifically carries blood to the heart.
* @see http://schema.org/Vein
* @package Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Vessel

*
*/
class Vein extends Vessel
{

    /**
    * The anatomical or organ system drained by this vessel; generally refers to a specific part of an organ.
    * @param AnatomicalStructure|AnatomicalSystem|array $value
    * @return $this
    */
    public function regionDrained($value)
    {
        $this->setProperty('regionDrained', $value);
        return $this;
    }
   /**
    * @param AnatomicalStructure|AnatomicalSystem|array $value
    * @return $this
    */
    public function setRegionDrained($value)
    {
        $this->setProperty('regionDrained', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getRegionDrained()
    {
       return $this->getProperty('regionDrained');
    }

    /**
    * The vasculature that the vein drains into.
    * @param Vessel|array $value
    * @return $this
    */
    public function drainsTo(?Vessel $value)
    {
        $this->setProperty('drainsTo', $value);
        return $this;
    }
   /**
    * @param Vessel|array $value
    * @return $this
    */
    public function setDrainsTo(?Vessel $value)
    {
        $this->setProperty('drainsTo', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getDrainsTo()
    {
       return $this->getProperty('drainsTo');
    }

    /**
    * The anatomical or organ system that the vein flows into; a larger structure that the vein connects to.
    * @param AnatomicalStructure|array $value
    * @return $this
    */
    public function tributary(?AnatomicalStructure $value)
    {
        $this->setProperty('tributary', $value);
        return $this;
    }
   /**
    * @param AnatomicalStructure|array $value
    * @return $this
    */
    public function setTributary(?AnatomicalStructure $value)
    {
        $this->setProperty('tributary', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getTributary()
    {
       return $this->getProperty('tributary');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\MedicalEntity\\AnatomicalStructure\\Vessel\\Vein','Thing\\Vein');

