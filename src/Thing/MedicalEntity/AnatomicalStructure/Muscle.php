<?php
namespace Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure;

use Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure;

/**
* A muscle is an anatomical structure consisting of a contractile form of
 * tissue that animals use to effect movement.
* @see schema:Muscle
* @package Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure
*/
class Muscle extends AnatomicalStructure
{


    /**
        * The blood vessel that carries blood from the heart to the muscle.
        * @param array|string|mixed $value
    * @return $this
    */
    public function bloodSupply($value)
    {
        $this->setProperty('bloodSupply', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The movement the muscle generates.
        * @param array|string|mixed $value
    * @return $this
    */
    public function muscleAction($value)
    {
        $this->setProperty('muscleAction', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The underlying innervation associated with the muscle.
        * @param array|string|mixed $value
    * @return $this
    */
    public function nerve($value)
    {
        $this->setProperty('nerve', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The muscle whose action counteracts the specified muscle.
        * @param array|string|mixed $value
    * @return $this
    */
    public function antagonist($value)
    {
        $this->setProperty('antagonist', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The place of attachment of a muscle, or what the muscle moves.
        * @param array|string|mixed $value
    * @return $this
    */
    public function insertion($value)
    {
        $this->setProperty('insertion', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
