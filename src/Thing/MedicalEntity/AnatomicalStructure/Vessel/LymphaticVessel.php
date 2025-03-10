<?php
namespace Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Vessel;

use Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Vessel;
use Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure;
use Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalSystem;

/**
* A type of blood vessel that specifically carries lymph fluid unidirectionally
 * toward the heart.
* @see http://schema.org/LymphaticVessel
* @package Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Vessel
*/
class LymphaticVessel extends Vessel
{


    /**
        * The anatomical or organ system drained by this vessel; generally refers to a
 * specific part of an organ.
        * @param AnatomicalStructure|AnatomicalSystem|array|string|mixed $value
    * @return $this
    */
    public function regionDrained($value)
    {
        $this->setProperty('regionDrained', $value);
        return $this;
    }

    /**
    * @param AnatomicalStructure|AnatomicalSystem|array|string|mixed $value
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


    /**
        * The vasculature the lymphatic structure runs, or efferents, to.
        * @param Vessel|array|string|mixed $value
    * @return $this
    */
    public function runsTo($value)
    {
        $this->setProperty('runsTo', $value);
        return $this;
    }

    /**
    * @param Vessel|array|string|mixed $value
    * @return $this
    */
    public function setRunsTo($value)
    {
        $this->setProperty('runsTo', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getRunsTo()
    {
       return $this->getProperty('runsTo');
    }


    /**
        * The vasculature the lymphatic structure originates, or afferents, from.
        * @param Vessel|array|string|mixed $value
    * @return $this
    */
    public function originatesFrom($value)
    {
        $this->setProperty('originatesFrom', $value);
        return $this;
    }

    /**
    * @param Vessel|array|string|mixed $value
    * @return $this
    */
    public function setOriginatesFrom($value)
    {
        $this->setProperty('originatesFrom', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getOriginatesFrom()
    {
       return $this->getProperty('originatesFrom');
    }


}
