<?php
namespace Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Vessel;

use Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Vessel;

/**
* A type of blood vessel that specifically carries lymph fluid unidirectionally toward the heart.
* @see schema:LymphaticVessel
* @package Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Vessel
*/
class LymphaticVessel extends Vessel
{
   /**
        * The vasculature the lymphatic structure originates, or afferents, from.
        */
    protected $originatesFrom = null;

   /**
        * The anatomical or organ system drained by this vessel; generally refers to a specific part of an organ.
        */
    protected $regionDrained = null;

   /**
        * The vasculature the lymphatic structure runs, or efferents, to.
        */
    protected $runsTo = null;


    /**
    * @param array|string $value
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

    /**
    * @param array|string $value
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


}
