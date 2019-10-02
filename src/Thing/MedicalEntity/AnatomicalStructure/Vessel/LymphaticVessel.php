<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Vessel;

use Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Vessel;
use Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure;
use Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalSystem;

/**
* A type of blood vessel that specifically carries lymph fluid unidirectionally toward the heart.
* @see http://schema.org/LymphaticVessel
* @package Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Vessel
*/
class LymphaticVessel extends Vessel
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
    * The vasculature the lymphatic structure runs, or efferents, to.
    * @param Vessel $value
    * @return $this
    */
    public function runsTo(?Vessel $value)
    {
        $this->setProperty('runsTo', $value);
        return $this;
    }

    /**
    * The vasculature the lymphatic structure originates, or afferents, from.
    * @param Vessel $value
    * @return $this
    */
    public function originatesFrom(?Vessel $value)
    {
        $this->setProperty('originatesFrom', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\MedicalEntity\\AnatomicalStructure\\Vessel\\LymphaticVessel','Thing\\LymphaticVessel');

