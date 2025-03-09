<?php
namespace Sohophp\SchemaOrg\Thing\MedicalEntity;

use Sohophp\SchemaOrg\Thing\MedicalEntity;

/**
* Any matter of defined composition that has discrete existence, whose origin may be biological, mineral or chemical.
* @see schema:Substance
* @package Sohophp\SchemaOrg\Thing\MedicalEntity
*/
class Substance extends MedicalEntity
{
   /**
        * Recommended intake of this supplement for a given population as defined by a specific recommending authority.
        */
    protected $maximumIntake = null;

   /**
        * An active ingredient, typically chemical compounds and/or biologic substances.
        */
    protected $activeIngredient = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setMaximumIntake($value)
    {
        $this->setProperty('maximumIntake', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getMaximumIntake()
    {
       return $this->getProperty('maximumIntake');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setActiveIngredient($value)
    {
        $this->setProperty('activeIngredient', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getActiveIngredient()
    {
       return $this->getProperty('activeIngredient');
    }


}
