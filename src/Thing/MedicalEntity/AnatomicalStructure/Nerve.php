<?php
namespace Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure;

use Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure;

/**
* A common pathway for the electrochemical nerve impulses that are transmitted along each of the axons.
* @see schema:Nerve
* @package Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure
*/
class Nerve extends AnatomicalStructure
{
   /**
        * The neurological pathway that originates the neurons.
        */
    protected $sourcedFrom = null;

   /**
        * The branches that delineate from the nerve bundle. Not to be confused with [[branchOf]].
        */
    protected $branch = null;

   /**
        * The neurological pathway extension that involves muscle control.
        */
    protected $nerveMotor = null;

   /**
        * The neurological pathway extension that inputs and sends information to the brain or spinal cord.
        */
    protected $sensoryUnit = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setSourcedFrom($value)
    {
        $this->setProperty('sourcedFrom', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSourcedFrom()
    {
       return $this->getProperty('sourcedFrom');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setBranch($value)
    {
        $this->setProperty('branch', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getBranch()
    {
       return $this->getProperty('branch');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setNerveMotor($value)
    {
        $this->setProperty('nerveMotor', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getNerveMotor()
    {
       return $this->getProperty('nerveMotor');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setSensoryUnit($value)
    {
        $this->setProperty('sensoryUnit', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSensoryUnit()
    {
       return $this->getProperty('sensoryUnit');
    }


}
