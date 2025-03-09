<?php
namespace Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure;

use Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure;

/**
* A muscle is an anatomical structure consisting of a contractile form of tissue that animals use to effect movement.
* @see schema:Muscle
* @package Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure
*/
class Muscle extends AnatomicalStructure
{
   /**
        * The blood vessel that carries blood from the heart to the muscle.
        */
    protected $bloodSupply = null;

   /**
        * The movement the muscle generates.
        */
    protected $muscleAction = null;

   /**
        * The underlying innervation associated with the muscle.
        */
    protected $nerve = null;

   /**
        * The muscle whose action counteracts the specified muscle.
        */
    protected $antagonist = null;

   /**
        * The place of attachment of a muscle, or what the muscle moves.
        */
    protected $insertion = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setBloodSupply($value)
    {
        $this->setProperty('bloodSupply', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getBloodSupply()
    {
       return $this->getProperty('bloodSupply');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setMuscleAction($value)
    {
        $this->setProperty('muscleAction', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getMuscleAction()
    {
       return $this->getProperty('muscleAction');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setNerve($value)
    {
        $this->setProperty('nerve', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getNerve()
    {
       return $this->getProperty('nerve');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setAntagonist($value)
    {
        $this->setProperty('antagonist', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAntagonist()
    {
       return $this->getProperty('antagonist');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setInsertion($value)
    {
        $this->setProperty('insertion', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getInsertion()
    {
       return $this->getProperty('insertion');
    }


}
