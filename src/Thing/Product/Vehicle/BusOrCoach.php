<?php
namespace Sohophp\SchemaOrg\Thing\Product\Vehicle;

use Sohophp\SchemaOrg\Thing\Product\Vehicle;

/**
* A bus (also omnibus or autobus) is a road vehicle designed to carry passengers. Coaches are luxury buses, usually in service for long distance travel.
* @see schema:BusOrCoach
* @package Sohophp\SchemaOrg\Thing\Product\Vehicle
*/
class BusOrCoach extends Vehicle
{
   /**
        * The ACRISS Car Classification Code is a code used by many car rental companies, for classifying vehicles. ACRISS stands for Association of Car Rental Industry Systems and Standards.
        */
    protected $acrissCode = null;

   /**
        * The permitted total weight of cargo and installations (e.g. a roof rack) on top of the vehicle.\n\nTypical unit code(s): KGM for kilogram, LBR for pound\n\n* Note 1: You can indicate additional information in the [[name]] of the [[QuantitativeValue]] node.\n* Note 2: You may also link to a [[QualitativeValue]] node that provides additional information using [[valueReference]]\n* Note 3: Note that you can use [[minValue]] and [[maxValue]] to indicate ranges.
        */
    protected $roofLoad = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setAcrissCode($value)
    {
        $this->setProperty('acrissCode', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAcrissCode()
    {
       return $this->getProperty('acrissCode');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setRoofLoad($value)
    {
        $this->setProperty('roofLoad', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getRoofLoad()
    {
       return $this->getProperty('roofLoad');
    }


}
