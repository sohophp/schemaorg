<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Product;

use Sohophp\SchemaOrg\Thing\Product;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\QualitativeValue\SteeringPositionValue;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\QualitativeValue\CarUsageType;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\EngineSpecification;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\QualitativeValue;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\QualitativeValue\DriveWheelConfigurationValue;

/**
* A vehicle is a device that is designed or used to transport people or cargo over land, water, air, or through space.
* @see http://schema.org/Vehicle
* @package Sohophp\SchemaOrg\Thing\Product
*/
class Vehicle extends Product
{

    /**
    * The date of production of the item, e.g. vehicle.
    * @param  $value
    * @return $this
    */
    public function productionDate($value)
    {
        $this->setProperty('productionDate', $value);
        return $this;
    }

    /**
    * The total number of forward gears available for the transmission system of the vehicle.<br/><br/>

Typical unit code(s): C62
    * @param QuantitativeValue $value
    * @return $this
    */
    public function numberOfForwardGears(?QuantitativeValue $value)
    {
        $this->setProperty('numberOfForwardGears', $value);
        return $this;
    }

    /**
    * The total distance travelled by the particular vehicle since its initial production, as read from its odometer.<br/><br/>

Typical unit code(s): KMT for kilometers, SMI for statute miles
    * @param QuantitativeValue $value
    * @return $this
    */
    public function mileageFromOdometer(?QuantitativeValue $value)
    {
        $this->setProperty('mileageFromOdometer', $value);
        return $this;
    }

    /**
    * The color or color combination of the interior of the vehicle.
    * @param string $value
    * @return $this
    */
    public function vehicleInteriorColor(?string $value)
    {
        $this->setProperty('vehicleInteriorColor', $value);
        return $this;
    }

    /**
    * The position of the steering wheel or similar device (mostly for cars).
    * @param SteeringPositionValue $value
    * @return $this
    */
    public function steeringPosition(?SteeringPositionValue $value)
    {
        $this->setProperty('steeringPosition', $value);
        return $this;
    }

    /**
    * Indicates whether the vehicle has been used for special purposes, like commercial rental, driving school, or as a taxi. The legislation in many countries requires this information to be revealed when offering a car for sale.
    * @param CarUsageType|string $value
    * @return $this
    */
    public function vehicleSpecialUsage($value)
    {
        $this->setProperty('vehicleSpecialUsage', $value);
        return $this;
    }

    /**
    * The number of passengers that can be seated in the vehicle, both in terms of the physical space available, and in terms of limitations set by law.<br/><br/>

Typical unit code(s): C62 for persons.
    * @param QuantitativeValue $value
    * @return $this
    */
    public function vehicleSeatingCapacity(?QuantitativeValue $value)
    {
        $this->setProperty('vehicleSeatingCapacity', $value);
        return $this;
    }

    /**
    * Information about the engine or engines of the vehicle.
    * @param EngineSpecification $value
    * @return $this
    */
    public function vehicleEngine(?EngineSpecification $value)
    {
        $this->setProperty('vehicleEngine', $value);
        return $this;
    }

    /**
    * The time needed to accelerate the vehicle from a given start velocity to a given target velocity.<br/><br/>

Typical unit code(s): SEC for seconds<br/><br/>

<ul>
<li>Note: There are unfortunately no standard unit codes for seconds/0..100 km/h or seconds/0..60 mph. Simply use "SEC" for seconds and indicate the velocities in the <a class="localLink" href="http://schema.org/name">name</a> of the <a class="localLink" href="http://schema.org/QuantitativeValue">QuantitativeValue</a>, or use <a class="localLink" href="http://schema.org/valueReference">valueReference</a> with a <a class="localLink" href="http://schema.org/QuantitativeValue">QuantitativeValue</a> of 0..60 mph or 0..100 km/h to specify the reference speeds.</li>
</ul>

    * @param QuantitativeValue $value
    * @return $this
    */
    public function accelerationTime(?QuantitativeValue $value)
    {
        $this->setProperty('accelerationTime', $value);
        return $this;
    }

    /**
    * The number of doors.<br/><br/>

Typical unit code(s): C62
    * @param QuantitativeValue $value
    * @return $this
    */
    public function numberOfDoors(?QuantitativeValue $value)
    {
        $this->setProperty('numberOfDoors', $value);
        return $this;
    }

    /**
    * A short text indicating the configuration of the vehicle, e.g. '5dr hatchback ST 2.5 MT 225 hp' or 'limited edition'.
    * @param string $value
    * @return $this
    */
    public function vehicleConfiguration(?string $value)
    {
        $this->setProperty('vehicleConfiguration', $value);
        return $this;
    }

    /**
    * The permitted weight of passengers and cargo, EXCLUDING the weight of the empty vehicle.<br/><br/>

Typical unit code(s): KGM for kilogram, LBR for pound<br/><br/>

<ul>
<li>Note 1: Many databases specify the permitted TOTAL weight instead, which is the sum of <a class="localLink" href="http://schema.org/weight">weight</a> and <a class="localLink" href="http://schema.org/payload">payload</a></li>
<li>Note 2: You can indicate additional information in the <a class="localLink" href="http://schema.org/name">name</a> of the <a class="localLink" href="http://schema.org/QuantitativeValue">QuantitativeValue</a> node.</li>
<li>Note 3: You may also link to a <a class="localLink" href="http://schema.org/QualitativeValue">QualitativeValue</a> node that provides additional information using <a class="localLink" href="http://schema.org/valueReference">valueReference</a>.</li>
<li>Note 4: Note that you can use <a class="localLink" href="http://schema.org/minValue">minValue</a> and <a class="localLink" href="http://schema.org/maxValue">maxValue</a> to indicate ranges.</li>
</ul>

    * @param QuantitativeValue $value
    * @return $this
    */
    public function payload(?QuantitativeValue $value)
    {
        $this->setProperty('payload', $value);
        return $this;
    }

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
    * The Vehicle Identification Number (VIN) is a unique serial number used by the automotive industry to identify individual motor vehicles.
    * @param string $value
    * @return $this
    */
    public function vehicleIdentificationNumber(?string $value)
    {
        $this->setProperty('vehicleIdentificationNumber', $value);
        return $this;
    }

    /**
    * The amount of fuel consumed for traveling a particular distance or temporal duration with the given vehicle (e.g. liters per 100 km).<br/><br/>

<ul>
<li>Note 1: There are unfortunately no standard unit codes for liters per 100 km.  Use <a class="localLink" href="http://schema.org/unitText">unitText</a> to indicate the unit of measurement, e.g. L/100 km.</li>
<li>Note 2: There are two ways of indicating the fuel consumption, <a class="localLink" href="http://schema.org/fuelConsumption">fuelConsumption</a> (e.g. 8 liters per 100 km) and <a class="localLink" href="http://schema.org/fuelEfficiency">fuelEfficiency</a> (e.g. 30 miles per gallon). They are reciprocal.</li>
<li>Note 3: Often, the absolute value is useful only when related to driving speed ("at 80 km/h") or usage pattern ("city traffic"). You can use <a class="localLink" href="http://schema.org/valueReference">valueReference</a> to link the value for the fuel consumption to another value.</li>
</ul>

    * @param QuantitativeValue $value
    * @return $this
    */
    public function fuelConsumption(?QuantitativeValue $value)
    {
        $this->setProperty('fuelConsumption', $value);
        return $this;
    }

    /**
    * The permitted vertical load (TWR) of a trailer attached to the vehicle. Also referred to as Tongue Load Rating (TLR) or Vertical Load Rating (VLR)<br/><br/>

Typical unit code(s): KGM for kilogram, LBR for pound<br/><br/>

<ul>
<li>Note 1: You can indicate additional information in the <a class="localLink" href="http://schema.org/name">name</a> of the <a class="localLink" href="http://schema.org/QuantitativeValue">QuantitativeValue</a> node.</li>
<li>Note 2: You may also link to a <a class="localLink" href="http://schema.org/QualitativeValue">QualitativeValue</a> node that provides additional information using <a class="localLink" href="http://schema.org/valueReference">valueReference</a>.</li>
<li>Note 3: Note that you can use <a class="localLink" href="http://schema.org/minValue">minValue</a> and <a class="localLink" href="http://schema.org/maxValue">maxValue</a> to indicate ranges.</li>
</ul>

    * @param QuantitativeValue $value
    * @return $this
    */
    public function tongueWeight(?QuantitativeValue $value)
    {
        $this->setProperty('tongueWeight', $value);
        return $this;
    }

    /**
    * The release date of a vehicle model (often used to differentiate versions of the same make and model).
    * @param  $value
    * @return $this
    */
    public function modelDate($value)
    {
        $this->setProperty('modelDate', $value);
        return $this;
    }

    /**
    * The release date of a vehicle model (often used to differentiate versions of the same make and model).
    * @param  $value
    * @return $this
    */
    public function vehicleModelDate($value)
    {
        $this->setProperty('vehicleModelDate', $value);
        return $this;
    }

    /**
    * The permitted weight of a trailer attached to the vehicle.<br/><br/>

Typical unit code(s): KGM for kilogram, LBR for pound
* Note 1: You can indicate additional information in the <a class="localLink" href="http://schema.org/name">name</a> of the <a class="localLink" href="http://schema.org/QuantitativeValue">QuantitativeValue</a> node.
* Note 2: You may also link to a <a class="localLink" href="http://schema.org/QualitativeValue">QualitativeValue</a> node that provides additional information using <a class="localLink" href="http://schema.org/valueReference">valueReference</a>.
* Note 3: Note that you can use <a class="localLink" href="http://schema.org/minValue">minValue</a> and <a class="localLink" href="http://schema.org/maxValue">maxValue</a> to indicate ranges.
    * @param QuantitativeValue $value
    * @return $this
    */
    public function trailerWeight(?QuantitativeValue $value)
    {
        $this->setProperty('trailerWeight', $value);
        return $this;
    }

    /**
    * The number of owners of the vehicle, including the current one.<br/><br/>

Typical unit code(s): C62
    * @param QuantitativeValue $value
    * @return $this
    */
    public function numberOfPreviousOwners(?QuantitativeValue $value)
    {
        $this->setProperty('numberOfPreviousOwners', $value);
        return $this;
    }

    /**
    * The distance between the centers of the front and rear wheels.<br/><br/>

Typical unit code(s): CMT for centimeters, MTR for meters, INH for inches, FOT for foot/feet
    * @param QuantitativeValue $value
    * @return $this
    */
    public function wheelbase(?QuantitativeValue $value)
    {
        $this->setProperty('wheelbase', $value);
        return $this;
    }

    /**
    * Indicates that the vehicle meets the respective emission standard.
    * @param string|QualitativeValue|string $value
    * @return $this
    */
    public function meetsEmissionStandard($value)
    {
        $this->setProperty('meetsEmissionStandard', $value);
        return $this;
    }

    /**
    * The number of axles.<br/><br/>

Typical unit code(s): C62
    * @param QuantitativeValue $value
    * @return $this
    */
    public function numberOfAxles(?QuantitativeValue $value)
    {
        $this->setProperty('numberOfAxles', $value);
        return $this;
    }

    /**
    * The type or material of the interior of the vehicle (e.g. synthetic fabric, leather, wood, etc.). While most interior types are characterized by the material used, an interior type can also be based on vehicle usage or target audience.
    * @param string $value
    * @return $this
    */
    public function vehicleInteriorType(?string $value)
    {
        $this->setProperty('vehicleInteriorType', $value);
        return $this;
    }

    /**
    * A textual description of known damages, both repaired and unrepaired.
    * @param string $value
    * @return $this
    */
    public function knownVehicleDamages(?string $value)
    {
        $this->setProperty('knownVehicleDamages', $value);
        return $this;
    }

    /**
    * The number or type of airbags in the vehicle.
    * @param string $value
    * @return $this
    */
    public function numberOfAirbags(?string $value)
    {
        $this->setProperty('numberOfAirbags', $value);
        return $this;
    }

    /**
    * The permitted total weight of the loaded vehicle, including passengers and cargo and the weight of the empty vehicle.<br/><br/>

Typical unit code(s): KGM for kilogram, LBR for pound<br/><br/>

<ul>
<li>Note 1: You can indicate additional information in the <a class="localLink" href="http://schema.org/name">name</a> of the <a class="localLink" href="http://schema.org/QuantitativeValue">QuantitativeValue</a> node.</li>
<li>Note 2: You may also link to a <a class="localLink" href="http://schema.org/QualitativeValue">QualitativeValue</a> node that provides additional information using <a class="localLink" href="http://schema.org/valueReference">valueReference</a>.</li>
<li>Note 3: Note that you can use <a class="localLink" href="http://schema.org/minValue">minValue</a> and <a class="localLink" href="http://schema.org/maxValue">maxValue</a> to indicate ranges.</li>
</ul>

    * @param QuantitativeValue $value
    * @return $this
    */
    public function weightTotal(?QuantitativeValue $value)
    {
        $this->setProperty('weightTotal', $value);
        return $this;
    }

    /**
    * The CO2 emissions in g/km. When used in combination with a QuantitativeValue, put "g/km" into the unitText property of that value, since there is no UN/CEFACT Common Code for "g/km".
    * @param  $value
    * @return $this
    */
    public function emissionsCO2($value)
    {
        $this->setProperty('emissionsCO2', $value);
        return $this;
    }

    /**
    * The available volume for cargo or luggage. For automobiles, this is usually the trunk volume.<br/><br/>

Typical unit code(s): LTR for liters, FTQ for cubic foot/feet<br/><br/>

Note: You can use <a class="localLink" href="http://schema.org/minValue">minValue</a> and <a class="localLink" href="http://schema.org/maxValue">maxValue</a> to indicate ranges.
    * @param QuantitativeValue $value
    * @return $this
    */
    public function cargoVolume(?QuantitativeValue $value)
    {
        $this->setProperty('cargoVolume', $value);
        return $this;
    }

    /**
    * The capacity of the fuel tank or in the case of electric cars, the battery. If there are multiple components for storage, this should indicate the total of all storage of the same type.<br/><br/>

Typical unit code(s): LTR for liters, GLL of US gallons, GLI for UK / imperial gallons, AMH for ampere-hours (for electrical vehicles).
    * @param QuantitativeValue $value
    * @return $this
    */
    public function fuelCapacity(?QuantitativeValue $value)
    {
        $this->setProperty('fuelCapacity', $value);
        return $this;
    }

    /**
    * Indicates the design and body style of the vehicle (e.g. station wagon, hatchback, etc.).
    * @param string|string|QualitativeValue $value
    * @return $this
    */
    public function bodyType($value)
    {
        $this->setProperty('bodyType', $value);
        return $this;
    }

    /**
    * This is a StupidProperty! - for testing only
    * @param QuantitativeValue $value
    * @return $this
    */
    public function stupidProperty(?QuantitativeValue $value)
    {
        $this->setProperty('stupidProperty', $value);
        return $this;
    }

    /**
    * The type of component used for transmitting the power from a rotating power source to the wheels or other relevant component(s) ("gearbox" for cars).
    * @param QualitativeValue|string|string $value
    * @return $this
    */
    public function vehicleTransmission($value)
    {
        $this->setProperty('vehicleTransmission', $value);
        return $this;
    }

    /**
    * The date of the first registration of the vehicle with the respective public authorities.
    * @param  $value
    * @return $this
    */
    public function dateVehicleFirstRegistered($value)
    {
        $this->setProperty('dateVehicleFirstRegistered', $value);
        return $this;
    }

    /**
    * The date the item e.g. vehicle was purchased by the current owner.
    * @param  $value
    * @return $this
    */
    public function purchaseDate($value)
    {
        $this->setProperty('purchaseDate', $value);
        return $this;
    }

    /**
    * The speed range of the vehicle. If the vehicle is powered by an engine, the upper limit of the speed range (indicated by <a class="localLink" href="http://schema.org/maxValue">maxValue</a> should be the maximum speed achievable under regular conditions.<br/><br/>

Typical unit code(s): KMH for km/h, HM for mile per hour (0.447 04 m/s), KNT for knot<br/><br/>

*Note 1: Use <a class="localLink" href="http://schema.org/minValue">minValue</a> and <a class="localLink" href="http://schema.org/maxValue">maxValue</a> to indicate the range. Typically, the minimal value is zero.
* Note 2: There are many different ways of measuring the speed range. You can link to information about how the given value has been determined using the <a class="localLink" href="http://schema.org/valueReference">valueReference</a> property.
    * @param QuantitativeValue $value
    * @return $this
    */
    public function speed(?QuantitativeValue $value)
    {
        $this->setProperty('speed', $value);
        return $this;
    }

    /**
    * The distance traveled per unit of fuel used; most commonly miles per gallon (mpg) or kilometers per liter (km/L).<br/><br/>

<ul>
<li>Note 1: There are unfortunately no standard unit codes for miles per gallon or kilometers per liter. Use <a class="localLink" href="http://schema.org/unitText">unitText</a> to indicate the unit of measurement, e.g. mpg or km/L.</li>
<li>Note 2: There are two ways of indicating the fuel consumption, <a class="localLink" href="http://schema.org/fuelConsumption">fuelConsumption</a> (e.g. 8 liters per 100 km) and <a class="localLink" href="http://schema.org/fuelEfficiency">fuelEfficiency</a> (e.g. 30 miles per gallon). They are reciprocal.</li>
<li>Note 3: Often, the absolute value is useful only when related to driving speed ("at 80 km/h") or usage pattern ("city traffic"). You can use <a class="localLink" href="http://schema.org/valueReference">valueReference</a> to link the value for the fuel economy to another value.</li>
</ul>

    * @param QuantitativeValue $value
    * @return $this
    */
    public function fuelEfficiency(?QuantitativeValue $value)
    {
        $this->setProperty('fuelEfficiency', $value);
        return $this;
    }

    /**
    * The drive wheel configuration, i.e. which roadwheels will receive torque from the vehicle's engine via the drivetrain.
    * @param DriveWheelConfigurationValue|string $value
    * @return $this
    */
    public function driveWheelConfiguration($value)
    {
        $this->setProperty('driveWheelConfiguration', $value);
        return $this;
    }

    /**
    * The number of persons that can be seated (e.g. in a vehicle), both in terms of the physical space available, and in terms of limitations set by law.<br/><br/>

Typical unit code(s): C62 for persons
    * @param QuantitativeValue $value
    * @return $this
    */
    public function seatingCapacity(?QuantitativeValue $value)
    {
        $this->setProperty('seatingCapacity', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Product\\Vehicle','Thing\\Vehicle');

