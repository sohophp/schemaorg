<?php
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
    * @param Nerve|array|string $value
    * @return $this
    * @deprecated use setNerve
    */
    public function nerve($value)
    {
        $this->setProperty('nerve', $value);
        return $this;
    }
   /**
    * @param Nerve|array|string $value
    * @return $this
    */
    public function setNerve($value)
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
    * @param Vessel|array|string $value
    * @return $this
    * @deprecated use setBloodSupply
    */
    public function bloodSupply($value)
    {
        $this->setProperty('bloodSupply', $value);
        return $this;
    }
   /**
    * @param Vessel|array|string $value
    * @return $this
    */
    public function setBloodSupply($value)
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
    * @deprecated use setMuscleAction
    */
    public function muscleAction($value)
    {
        $this->setProperty('muscleAction', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setMuscleAction($value)
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
    * @deprecated use setAction
    */
    public function action($value)
    {
        $this->setProperty('action', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setAction($value)
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
    * @param Muscle|array|string $value
    * @return $this
    * @deprecated use setAntagonist
    */
    public function antagonist($value)
    {
        $this->setProperty('antagonist', $value);
        return $this;
    }
   /**
    * @param Muscle|array|string $value
    * @return $this
    */
    public function setAntagonist($value)
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
    * @param AnatomicalStructure|array|string $value
    * @return $this
    * @deprecated use setOrigin
    */
    public function origin($value)
    {
        $this->setProperty('origin', $value);
        return $this;
    }
   /**
    * @param AnatomicalStructure|array|string $value
    * @return $this
    */
    public function setOrigin($value)
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
    * @param AnatomicalStructure|array|string $value
    * @return $this
    * @deprecated use setInsertion
    */
    public function insertion($value)
    {
        $this->setProperty('insertion', $value);
        return $this;
    }
   /**
    * @param AnatomicalStructure|array|string $value
    * @return $this
    */
    public function setInsertion($value)
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
