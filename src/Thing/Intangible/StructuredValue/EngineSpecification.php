<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\QualitativeValue;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;

/**
* Information about the engine of the vehicle. A vehicle can have multiple engines represented by multiple engine specification entities.
* @see http://schema.org/EngineSpecification
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue
*/
class EngineSpecification extends StructuredValue
{

    /**
    * The type of fuel suitable for the engine or engines of the vehicle. If the vehicle has only one engine, this property can be attached directly to the vehicle.
    * @param string|string|QualitativeValue $value
    * @return $this
    */
    public function fuelType($value)
    {
        $this->setProperty('fuelType', $value);
        return $this;
    }

    /**
    * The volume swept by all of the pistons inside the cylinders of an internal combustion engine in a single movement. <br/><br/>

Typical unit code(s): CMQ for cubic centimeter, LTR for liters, INQ for cubic inches
* Note 1: You can link to information about how the given value has been determined using the <a class="localLink" href="http://schema.org/valueReference">valueReference</a> property.
* Note 2: You can use <a class="localLink" href="http://schema.org/minValue">minValue</a> and <a class="localLink" href="http://schema.org/maxValue">maxValue</a> to indicate ranges.
    * @param QuantitativeValue $value
    * @return $this
    */
    public function engineDisplacement(?QuantitativeValue $value)
    {
        $this->setProperty('engineDisplacement', $value);
        return $this;
    }

    /**
    * The type of engine or engines powering the vehicle.
    * @param string|QualitativeValue|string $value
    * @return $this
    */
    public function engineType($value)
    {
        $this->setProperty('engineType', $value);
        return $this;
    }

    /**
    * The torque (turning force) of the vehicle's engine.<br/><br/>

Typical unit code(s): NU for newton metre (N m), F17 for pound-force per foot, or F48 for pound-force per inch<br/><br/>

<ul>
<li>Note 1: You can link to information about how the given value has been determined (e.g. reference RPM) using the <a class="localLink" href="http://schema.org/valueReference">valueReference</a> property.</li>
<li>Note 2: You can use <a class="localLink" href="http://schema.org/minValue">minValue</a> and <a class="localLink" href="http://schema.org/maxValue">maxValue</a> to indicate ranges.</li>
</ul>

    * @param QuantitativeValue $value
    * @return $this
    */
    public function torque(?QuantitativeValue $value)
    {
        $this->setProperty('torque', $value);
        return $this;
    }

    /**
    * The power of the vehicle's engine.
    Typical unit code(s): KWT for kilowatt, BHP for brake horsepower, N12 for metric horsepower (PS, with 1 PS = 735,49875 W)<br/><br/>

<ul>
<li>Note 1: There are many different ways of measuring an engine's power. For an overview, see  <a href="http://en.wikipedia.org/wiki/Horsepower#Engine_power_test_codes">http://en.wikipedia.org/wiki/Horsepower#Engine<em>power</em>test_codes</a>.</li>
<li>Note 2: You can link to information about how the given value has been determined using the <a class="localLink" href="http://schema.org/valueReference">valueReference</a> property.</li>
<li>Note 3: You can use <a class="localLink" href="http://schema.org/minValue">minValue</a> and <a class="localLink" href="http://schema.org/maxValue">maxValue</a> to indicate ranges.</li>
</ul>

    * @param QuantitativeValue $value
    * @return $this
    */
    public function enginePower(?QuantitativeValue $value)
    {
        $this->setProperty('enginePower', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\StructuredValue\\EngineSpecification','Thing\\EngineSpecification');

