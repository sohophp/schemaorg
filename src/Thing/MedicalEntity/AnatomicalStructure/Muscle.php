<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure;

use Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure;
use Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Nerve;
use Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Vessel;

/**
* A muscle is an anatomical structure consisting of a contractile form of tissue that animals use to effect movement.
* @see http://schema.org/Muscle
* @package Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure

*
*/
class Muscle extends AnatomicalStructure
{

    /**
    * The underlying innervation associated with the muscle.
    * @param Nerve|array $value
    * @return $this
    */
    public function nerve(?Nerve $value)
    {
        $this->setProperty('nerve', $value);
        return $this;
    }
   /**
    * @param Nerve|array $value
    * @return $this
    */
    public function setNerve(?Nerve $value)
    {
        $this->setProperty('nerve', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getNerve()
    {
       return $this->getProperty('nerve');
    }

    /**
    * The blood vessel that carries blood from the heart to the muscle.
    * @param Vessel|array $value
    * @return $this
    */
    public function bloodSupply(?Vessel $value)
    {
        $this->setProperty('bloodSupply', $value);
        return $this;
    }
   /**
    * @param Vessel|array $value
    * @return $this
    */
    public function setBloodSupply(?Vessel $value)
    {
        $this->setProperty('bloodSupply', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getBloodSupply()
    {
       return $this->getProperty('bloodSupply');
    }

    /**
    * The movement the muscle generates.
    * @param string|array $value
    * @return $this
    */
    public function muscleAction(?string $value)
    {
        $this->setProperty('muscleAction', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setMuscleAction(?string $value)
    {
        $this->setProperty('muscleAction', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getMuscleAction()
    {
       return $this->getProperty('muscleAction');
    }

    /**
    * Obsolete term for <a class="localLink" href="http://schema.org/muscleAction">muscleAction</a>. Not to be confused with <a class="localLink" href="http://schema.org/potentialAction">potentialAction</a>.
    * @param string|array $value
    * @return $this
    */
    public function action(?string $value)
    {
        $this->setProperty('action', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setAction(?string $value)
    {
        $this->setProperty('action', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAction()
    {
       return $this->getProperty('action');
    }

    /**
    * The muscle whose action counteracts the specified muscle.
    * @param Muscle|array $value
    * @return $this
    */
    public function antagonist(?Muscle $value)
    {
        $this->setProperty('antagonist', $value);
        return $this;
    }
   /**
    * @param Muscle|array $value
    * @return $this
    */
    public function setAntagonist(?Muscle $value)
    {
        $this->setProperty('antagonist', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAntagonist()
    {
       return $this->getProperty('antagonist');
    }

    /**
    * The place or point where a muscle arises.
    * @param AnatomicalStructure|array $value
    * @return $this
    */
    public function origin(?AnatomicalStructure $value)
    {
        $this->setProperty('origin', $value);
        return $this;
    }
   /**
    * @param AnatomicalStructure|array $value
    * @return $this
    */
    public function setOrigin(?AnatomicalStructure $value)
    {
        $this->setProperty('origin', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getOrigin()
    {
       return $this->getProperty('origin');
    }

    /**
    * The place of attachment of a muscle, or what the muscle moves.
    * @param AnatomicalStructure|array $value
    * @return $this
    */
    public function insertion(?AnatomicalStructure $value)
    {
        $this->setProperty('insertion', $value);
        return $this;
    }
   /**
    * @param AnatomicalStructure|array $value
    * @return $this
    */
    public function setInsertion(?AnatomicalStructure $value)
    {
        $this->setProperty('insertion', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getInsertion()
    {
       return $this->getProperty('insertion');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\MedicalEntity\\AnatomicalStructure\\Muscle','Thing\\Muscle');

