<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure;

use Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure;
use Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Muscle;
use Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\BrainStructure;
use Sohophp\SchemaOrg\Thing\MedicalEntity\SuperficialAnatomy;

/**
* A common pathway for the electrochemical nerve impulses that are transmitted along each of the axons.
* @see http://schema.org/Nerve
* @package Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure

*
*/
class Nerve extends AnatomicalStructure
{

    /**
    * The neurological pathway extension that involves muscle control.
    * @param Muscle|array $value
    * @return $this
    */
    public function nerveMotor(?Muscle $value)
    {
        $this->setProperty('nerveMotor', $value);
        return $this;
    }
   /**
    * @param Muscle|array $value
    * @return $this
    */
    public function setNerveMotor(?Muscle $value)
    {
        $this->setProperty('nerveMotor', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getNerveMotor()
    {
       return $this->getProperty('nerveMotor');
    }

    /**
    * The branches that delineate from the nerve bundle. Not to be confused with <a class="localLink" href="http://schema.org/branchOf">branchOf</a>.
    * @param AnatomicalStructure|array $value
    * @return $this
    */
    public function branch(?AnatomicalStructure $value)
    {
        $this->setProperty('branch', $value);
        return $this;
    }
   /**
    * @param AnatomicalStructure|array $value
    * @return $this
    */
    public function setBranch(?AnatomicalStructure $value)
    {
        $this->setProperty('branch', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getBranch()
    {
       return $this->getProperty('branch');
    }

    /**
    * The neurological pathway that originates the neurons.
    * @param BrainStructure|array $value
    * @return $this
    */
    public function sourcedFrom(?BrainStructure $value)
    {
        $this->setProperty('sourcedFrom', $value);
        return $this;
    }
   /**
    * @param BrainStructure|array $value
    * @return $this
    */
    public function setSourcedFrom(?BrainStructure $value)
    {
        $this->setProperty('sourcedFrom', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getSourcedFrom()
    {
       return $this->getProperty('sourcedFrom');
    }

    /**
    * The neurological pathway extension that inputs and sends information to the brain or spinal cord.
    * @param AnatomicalStructure|SuperficialAnatomy|array $value
    * @return $this
    */
    public function sensoryUnit($value)
    {
        $this->setProperty('sensoryUnit', $value);
        return $this;
    }
   /**
    * @param AnatomicalStructure|SuperficialAnatomy|array $value
    * @return $this
    */
    public function setSensoryUnit($value)
    {
        $this->setProperty('sensoryUnit', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getSensoryUnit()
    {
       return $this->getProperty('sensoryUnit');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\MedicalEntity\\AnatomicalStructure\\Nerve','Thing\\Nerve');

