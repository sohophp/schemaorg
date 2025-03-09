<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

/**
* Information about the engine of the vehicle. A vehicle can have multiple engines represented by multiple engine specification entities.
* @see schema:EngineSpecification
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue
*/
class EngineSpecification extends StructuredValue
{
   /**
        * The volume swept by all of the pistons inside the cylinders of an internal combustion engine in a single movement. \n\nTypical unit code(s): CMQ for cubic centimeter, LTR for liters, INQ for cubic inches\n* Note 1: You can link to information about how the given value has been determined using the [[valueReference]] property.\n* Note 2: You can use [[minValue]] and [[maxValue]] to indicate ranges.
        */
    protected $engineDisplacement = null;

   /**
        * The type of fuel suitable for the engine or engines of the vehicle. If the vehicle has only one engine, this property can be attached directly to the vehicle.
        */
    protected $fuelType = null;

   /**
        * The type of engine or engines powering the vehicle.
        */
    protected $engineType = null;

   /**
        * The power of the vehicle's engine.
    Typical unit code(s): KWT for kilowatt, BHP for brake horsepower, N12 for metric horsepower (PS, with 1 PS = 735,49875 W)\n\n* Note 1: There are many different ways of measuring an engine's power. For an overview, see  [http://en.wikipedia.org/wiki/Horsepower#Engine\_power\_test\_codes](http://en.wikipedia.org/wiki/Horsepower#Engine_power_test_codes).\n* Note 2: You can link to information about how the given value has been determined using the [[valueReference]] property.\n* Note 3: You can use [[minValue]] and [[maxValue]] to indicate ranges.
        */
    protected $enginePower = null;

   /**
        * The torque (turning force) of the vehicle's engine.\n\nTypical unit code(s): NU for newton metre (N m), F17 for pound-force per foot, or F48 for pound-force per inch\n\n* Note 1: You can link to information about how the given value has been determined (e.g. reference RPM) using the [[valueReference]] property.\n* Note 2: You can use [[minValue]] and [[maxValue]] to indicate ranges.
        */
    protected $torque = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setEngineDisplacement($value)
    {
        $this->setProperty('engineDisplacement', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEngineDisplacement()
    {
       return $this->getProperty('engineDisplacement');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setFuelType($value)
    {
        $this->setProperty('fuelType', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getFuelType()
    {
       return $this->getProperty('fuelType');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setEngineType($value)
    {
        $this->setProperty('engineType', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEngineType()
    {
       return $this->getProperty('engineType');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setEnginePower($value)
    {
        $this->setProperty('enginePower', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEnginePower()
    {
       return $this->getProperty('enginePower');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setTorque($value)
    {
        $this->setProperty('torque', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getTorque()
    {
       return $this->getProperty('torque');
    }


}
