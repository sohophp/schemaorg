<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Vessel;

use Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Vessel;
use Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure;
use Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalSystem;

/**
* A type of blood vessel that specifically carries blood to the heart.
* @see http://schema.org/Vein
* @package Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Vessel
*/
class Vein extends Vessel
{

    /**
    * The anatomical or organ system drained by this vessel; generally refers to a specific part of an organ.
    * @param AnatomicalStructure|AnatomicalSystem $value
    * @return $this
    */
    public function regionDrained($value)
    {
        $this->setProperty('regionDrained', $value);
        return $this;
    }

    /**
    * The vasculature that the vein drains into.
    * @param Vessel $value
    * @return $this
    */
    public function drainsTo(?Vessel $value)
    {
        $this->setProperty('drainsTo', $value);
        return $this;
    }

    /**
    * The anatomical or organ system that the vein flows into; a larger structure that the vein connects to.
    * @param AnatomicalStructure $value
    * @return $this
    */
    public function tributary(?AnatomicalStructure $value)
    {
        $this->setProperty('tributary', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\MedicalEntity\\AnatomicalStructure\\Vessel\\Vein','Thing\\Vein');

