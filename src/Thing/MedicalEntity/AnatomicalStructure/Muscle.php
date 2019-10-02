<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure;

use Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure;
use Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Nerve;
use Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Vessel;

/**
* A muscle is an anatomical structure consisting of a contractile form of tissue that animals use to effect movement.
* @see http://schema.org/Muscle
* @package Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure
*/
class Muscle extends AnatomicalStructure
{

    /**
    * The underlying innervation associated with the muscle.
    * @param Nerve $value
    * @return $this
    */
    public function nerve(?Nerve $value)
    {
        $this->setProperty('nerve', $value);
        return $this;
    }

    /**
    * The blood vessel that carries blood from the heart to the muscle.
    * @param Vessel $value
    * @return $this
    */
    public function bloodSupply(?Vessel $value)
    {
        $this->setProperty('bloodSupply', $value);
        return $this;
    }

    /**
    * The movement the muscle generates.
    * @param string $value
    * @return $this
    */
    public function muscleAction(?string $value)
    {
        $this->setProperty('muscleAction', $value);
        return $this;
    }

    /**
    * Obsolete term for <a class="localLink" href="http://schema.org/muscleAction">muscleAction</a>. Not to be confused with <a class="localLink" href="http://schema.org/potentialAction">potentialAction</a>.
    * @param string $value
    * @return $this
    */
    public function action(?string $value)
    {
        $this->setProperty('action', $value);
        return $this;
    }

    /**
    * The muscle whose action counteracts the specified muscle.
    * @param Muscle $value
    * @return $this
    */
    public function antagonist(?Muscle $value)
    {
        $this->setProperty('antagonist', $value);
        return $this;
    }

    /**
    * The place or point where a muscle arises.
    * @param AnatomicalStructure $value
    * @return $this
    */
    public function origin(?AnatomicalStructure $value)
    {
        $this->setProperty('origin', $value);
        return $this;
    }

    /**
    * The place of attachment of a muscle, or what the muscle moves.
    * @param AnatomicalStructure $value
    * @return $this
    */
    public function insertion(?AnatomicalStructure $value)
    {
        $this->setProperty('insertion', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\MedicalEntity\\AnatomicalStructure\\Muscle','Thing\\Muscle');

