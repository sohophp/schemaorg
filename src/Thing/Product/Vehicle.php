<?php
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

*
*/
class Vehicle extends Product
{

    /**
    * The date of production of the item, e.g. vehicle.
    * @param array|string $value
    * @return $this
    * @deprecated use setProductionDate
    */
    public function productionDate($value)
    {
        $this->setProperty('productionDate', $value);
        return $this;
    }
   /**
    * @param array|string $value
    * @return $this
    */
    public function setProductionDate($value)
    {
        $this->setProperty('productionDate', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getProductionDate()
    {
       return $this->getProperty('productionDate');
    }

    /**
    * The total number of forward gears available for the transmission system of the vehicle.<br/><br/>

Typical unit code(s): C62
    * @param QuantitativeValue|array|string $value
    * @return $this
    * @deprecated use setNumberOfForwardGears
    */
    public function numberOfForwardGears($value)
    {
        $this->setProperty('numberOfForwardGears', $value);
        return $this;
    }
   /**
    * @param QuantitativeValue|array|string $value
    * @return $this
    */
    public function setNumberOfForwardGears($value)
    {
        $this->setProperty('numberOfForwardGears', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getNumberOfForwardGears()
    {
       return $this->getProperty('numberOfForwardGears');
    }

    /**
    * The total distance travelled by the particular vehicle since its initial production, as read from its odometer.<br/><br/>

Typical unit code(s): KMT for kilometers, SMI for statute miles
    * @param QuantitativeValue|array|string $value
    * @return $this
    * @deprecated use setMileageFromOdometer
    */
    public function mileageFromOdometer($value)
    {
        $this->setProperty('mileageFromOdometer', $value);
        return $this;
    }
   /**
    * @param QuantitativeValue|array|string $value
    * @return $this
    */
    public function setMileageFromOdometer($value)
    {
        $this->setProperty('mileageFromOdometer', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getMileageFromOdometer()
    {
       return $this->getProperty('mileageFromOdometer');
    }

    /**
    * The color or color combination of the interior of the vehicle.
    * @param string|array $value
    * @return $this
    * @deprecated use setVehicleInteriorColor
    */
    public function vehicleInteriorColor($value)
    {
        $this->setProperty('vehicleInteriorColor', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setVehicleInteriorColor($value)
    {
        $this->setProperty('vehicleInteriorColor', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getVehicleInteriorColor()
    {
       return $this->getProperty('vehicleInteriorColor');
    }

    /**
    * The position of the steering wheel or similar device (mostly for cars).
    * @param SteeringPositionValue|array|string $value
    * @return $this
    * @deprecated use setSteeringPosition
    */
    public function steeringPosition($value)
    {
        $this->setProperty('steeringPosition', $value);
        return $this;
    }
   /**
    * @param SteeringPositionValue|array|string $value
    * @return $this
    */
    public function setSteeringPosition($value)
    {
        $this->setProperty('steeringPosition', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getSteeringPosition()
    {
       return $this->getProperty('steeringPosition');
    }

    /**
    * Indicates whether the vehicle has been used for special purposes, like commercial rental, driving school, or as a taxi. The legislation in many countries requires this information to be revealed when offering a car for sale.
    * @param CarUsageType|string|array $value
    * @return $this
    * @deprecated use setVehicleSpecialUsage
    */
    public function vehicleSpecialUsage($value)
    {
        $this->setProperty('vehicleSpecialUsage', $value);
        return $this;
    }
   /**
    * @param CarUsageType|string|array $value
    * @return $this
    */
    public function setVehicleSpecialUsage($value)
    {
        $this->setProperty('vehicleSpecialUsage', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getVehicleSpecialUsage()
    {
       return $this->getProperty('vehicleSpecialUsage');
    }

    /**
    * The number of passengers that can be seated in the vehicle, both in terms of the physical space available, and in terms of limitations set by law.<br/><br/>

Typical unit code(s): C62 for persons.
    * @param QuantitativeValue|array|string $value
    * @return $this
    * @deprecated use setVehicleSeatingCapacity
    */
    public function vehicleSeatingCapacity($value)
    {
        $this->setProperty('vehicleSeatingCapacity', $value);
        return $this;
    }
   /**
    * @param QuantitativeValue|array|string $value
    * @return $this
    */
    public function setVehicleSeatingCapacity($value)
    {
        $this->setProperty('vehicleSeatingCapacity', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getVehicleSeatingCapacity()
    {
       return $this->getProperty('vehicleSeatingCapacity');
    }

    /**
    * Information about the engine or engines of the vehicle.
    * @param EngineSpecification|array|string $value
    * @return $this
    * @deprecated use setVehicleEngine
    */
    public function vehicleEngine($value)
    {
        $this->setProperty('vehicleEngine', $value);
        return $this;
    }
   /**
    * @param EngineSpecification|array|string $value
    * @return $this
    */
    public function setVehicleEngine($value)
    {
        $this->setProperty('vehicleEngine', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getVehicleEngine()
    {
       return $this->getProperty('vehicleEngine');
    }

    /**
    * The time needed to accelerate the vehicle from a given start velocity to a given target velocity.<br/><br/>

Typical unit code(s): SEC for seconds<br/><br/>

<ul>
<li>Note: There are unfortunately no standard unit codes for seconds/0..100 km/h or seconds/0..60 mph. Simply use "SEC" for seconds and indicate the velocities in the <a class="localLink" href="http://schema.org/name">name</a> of the <a class="localLink" href="http://schema.org/QuantitativeValue">QuantitativeValue</a>, or use <a class="localLink" href="http://schema.org/valueReference">valueReference</a> with a <a class="localLink" href="http://schema.org/QuantitativeValue">QuantitativeValue</a> of 0..60 mph or 0..100 km/h to specify the reference speeds.</li>
</ul>

    * @param QuantitativeValue|array|string $value
    * @return $this
    * @deprecated use setAccelerationTime
    */
    public function accelerationTime($value)
    {
        $this->setProperty('accelerationTime', $value);
        return $this;
    }
   /**
    * @param QuantitativeValue|array|string $value
    * @return $this
    */
    public function setAccelerationTime($value)
    {
        $this->setProperty('accelerationTime', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAccelerationTime()
    {
       return $this->getProperty('accelerationTime');
    }

    /**
    * The number of doors.<br/><br/>

Typical unit code(s): C62
    * @param QuantitativeValue|array|string $value
    * @return $this
    * @deprecated use setNumberOfDoors
    */
    public function numberOfDoors($value)
    {
        $this->setProperty('numberOfDoors', $value);
        return $this;
    }
   /**
    * @param QuantitativeValue|array|string $value
    * @return $this
    */
    public function setNumberOfDoors($value)
    {
        $this->setProperty('numberOfDoors', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getNumberOfDoors()
    {
       return $this->getProperty('numberOfDoors');
    }

    /**
    * A short text indicating the configuration of the vehicle, e.g. '5dr hatchback ST 2.5 MT 225 hp' or 'limited edition'.
    * @param string|array $value
    * @return $this
    * @deprecated use setVehicleConfiguration
    */
    public function vehicleConfiguration($value)
    {
        $this->setProperty('vehicleConfiguration', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setVehicleConfiguration($value)
    {
        $this->setProperty('vehicleConfiguration', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getVehicleConfiguration()
    {
       return $this->getProperty('vehicleConfiguration');
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

    * @param QuantitativeValue|array|string $value
    * @return $this
    * @deprecated use setPayload
    */
    public function payload($value)
    {
        $this->setProperty('payload', $value);
        return $this;
    }
   /**
    * @param QuantitativeValue|array|string $value
    * @return $this
    */
    public function setPayload($value)
    {
        $this->setProperty('payload', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getPayload()
    {
       return $this->getProperty('payload');
    }

    /**
    * The type of fuel suitable for the engine or engines of the vehicle. If the vehicle has only one engine, this property can be attached directly to the vehicle.
    * @param string|string|QualitativeValue|array $value
    * @return $this
    * @deprecated use setFuelType
    */
    public function fuelType($value)
    {
        $this->setProperty('fuelType', $value);
        return $this;
    }
   /**
    * @param string|string|QualitativeValue|array $value
    * @return $this
    */
    public function setFuelType($value)
    {
        $this->setProperty('fuelType', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getFuelType()
    {
       return $this->getProperty('fuelType');
    }

    /**
    * The Vehicle Identification Number (VIN) is a unique serial number used by the automotive industry to identify individual motor vehicles.
    * @param string|array $value
    * @return $this
    * @deprecated use setVehicleIdentificationNumber
    */
    public function vehicleIdentificationNumber($value)
    {
        $this->setProperty('vehicleIdentificationNumber', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setVehicleIdentificationNumber($value)
    {
        $this->setProperty('vehicleIdentificationNumber', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getVehicleIdentificationNumber()
    {
       return $this->getProperty('vehicleIdentificationNumber');
    }

    /**
    * The amount of fuel consumed for traveling a particular distance or temporal duration with the given vehicle (e.g. liters per 100 km).<br/><br/>

<ul>
<li>Note 1: There are unfortunately no standard unit codes for liters per 100 km.  Use <a class="localLink" href="http://schema.org/unitText">unitText</a> to indicate the unit of measurement, e.g. L/100 km.</li>
<li>Note 2: There are two ways of indicating the fuel consumption, <a class="localLink" href="http://schema.org/fuelConsumption">fuelConsumption</a> (e.g. 8 liters per 100 km) and <a class="localLink" href="http://schema.org/fuelEfficiency">fuelEfficiency</a> (e.g. 30 miles per gallon). They are reciprocal.</li>
<li>Note 3: Often, the absolute value is useful only when related to driving speed ("at 80 km/h") or usage pattern ("city traffic"). You can use <a class="localLink" href="http://schema.org/valueReference">valueReference</a> to link the value for the fuel consumption to another value.</li>
</ul>

    * @param QuantitativeValue|array|string $value
    * @return $this
    * @deprecated use setFuelConsumption
    */
    public function fuelConsumption($value)
    {
        $this->setProperty('fuelConsumption', $value);
        return $this;
    }
   /**
    * @param QuantitativeValue|array|string $value
    * @return $this
    */
    public function setFuelConsumption($value)
    {
        $this->setProperty('fuelConsumption', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getFuelConsumption()
    {
       return $this->getProperty('fuelConsumption');
    }

    /**
    * The permitted vertical load (TWR) of a trailer attached to the vehicle. Also referred to as Tongue Load Rating (TLR) or Vertical Load Rating (VLR)<br/><br/>

Typical unit code(s): KGM for kilogram, LBR for pound<br/><br/>

<ul>
<li>Note 1: You can indicate additional information in the <a class="localLink" href="http://schema.org/name">name</a> of the <a class="localLink" href="http://schema.org/QuantitativeValue">QuantitativeValue</a> node.</li>
<li>Note 2: You may also link to a <a class="localLink" href="http://schema.org/QualitativeValue">QualitativeValue</a> node that provides additional information using <a class="localLink" href="http://schema.org/valueReference">valueReference</a>.</li>
<li>Note 3: Note that you can use <a class="localLink" href="http://schema.org/minValue">minValue</a> and <a class="localLink" href="http://schema.org/maxValue">maxValue</a> to indicate ranges.</li>
</ul>

    * @param QuantitativeValue|array|string $value
    * @return $this
    * @deprecated use setTongueWeight
    */
    public function tongueWeight($value)
    {
        $this->setProperty('tongueWeight', $value);
        return $this;
    }
   /**
    * @param QuantitativeValue|array|string $value
    * @return $this
    */
    public function setTongueWeight($value)
    {
        $this->setProperty('tongueWeight', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getTongueWeight()
    {
       return $this->getProperty('tongueWeight');
    }

    /**
    * The release date of a vehicle model (often used to differentiate versions of the same make and model).
    * @param array|string $value
    * @return $this
    * @deprecated use setModelDate
    */
    public function modelDate($value)
    {
        $this->setProperty('modelDate', $value);
        return $this;
    }
   /**
    * @param array|string $value
    * @return $this
    */
    public function setModelDate($value)
    {
        $this->setProperty('modelDate', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getModelDate()
    {
       return $this->getProperty('modelDate');
    }

    /**
    * The release date of a vehicle model (often used to differentiate versions of the same make and model).
    * @param array|string $value
    * @return $this
    * @deprecated use setVehicleModelDate
    */
    public function vehicleModelDate($value)
    {
        $this->setProperty('vehicleModelDate', $value);
        return $this;
    }
   /**
    * @param array|string $value
    * @return $this
    */
    public function setVehicleModelDate($value)
    {
        $this->setProperty('vehicleModelDate', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getVehicleModelDate()
    {
       return $this->getProperty('vehicleModelDate');
    }

    /**
    * The permitted weight of a trailer attached to the vehicle.<br/><br/>

Typical unit code(s): KGM for kilogram, LBR for pound
* Note 1: You can indicate additional information in the <a class="localLink" href="http://schema.org/name">name</a> of the <a class="localLink" href="http://schema.org/QuantitativeValue">QuantitativeValue</a> node.
* Note 2: You may also link to a <a class="localLink" href="http://schema.org/QualitativeValue">QualitativeValue</a> node that provides additional information using <a class="localLink" href="http://schema.org/valueReference">valueReference</a>.
* Note 3: Note that you can use <a class="localLink" href="http://schema.org/minValue">minValue</a> and <a class="localLink" href="http://schema.org/maxValue">maxValue</a> to indicate ranges.
    * @param QuantitativeValue|array|string $value
    * @return $this
    * @deprecated use setTrailerWeight
    */
    public function trailerWeight($value)
    {
        $this->setProperty('trailerWeight', $value);
        return $this;
    }
   /**
    * @param QuantitativeValue|array|string $value
    * @return $this
    */
    public function setTrailerWeight($value)
    {
        $this->setProperty('trailerWeight', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getTrailerWeight()
    {
       return $this->getProperty('trailerWeight');
    }

    /**
    * The number of owners of the vehicle, including the current one.<br/><br/>

Typical unit code(s): C62
    * @param QuantitativeValue|array|string $value
    * @return $this
    * @deprecated use setNumberOfPreviousOwners
    */
    public function numberOfPreviousOwners($value)
    {
        $this->setProperty('numberOfPreviousOwners', $value);
        return $this;
    }
   /**
    * @param QuantitativeValue|array|string $value
    * @return $this
    */
    public function setNumberOfPreviousOwners($value)
    {
        $this->setProperty('numberOfPreviousOwners', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getNumberOfPreviousOwners()
    {
       return $this->getProperty('numberOfPreviousOwners');
    }

    /**
    * The distance between the centers of the front and rear wheels.<br/><br/>

Typical unit code(s): CMT for centimeters, MTR for meters, INH for inches, FOT for foot/feet
    * @param QuantitativeValue|array|string $value
    * @return $this
    * @deprecated use setWheelbase
    */
    public function wheelbase($value)
    {
        $this->setProperty('wheelbase', $value);
        return $this;
    }
   /**
    * @param QuantitativeValue|array|string $value
    * @return $this
    */
    public function setWheelbase($value)
    {
        $this->setProperty('wheelbase', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getWheelbase()
    {
       return $this->getProperty('wheelbase');
    }

    /**
    * Indicates that the vehicle meets the respective emission standard.
    * @param string|QualitativeValue|string|array $value
    * @return $this
    * @deprecated use setMeetsEmissionStandard
    */
    public function meetsEmissionStandard($value)
    {
        $this->setProperty('meetsEmissionStandard', $value);
        return $this;
    }
   /**
    * @param string|QualitativeValue|string|array $value
    * @return $this
    */
    public function setMeetsEmissionStandard($value)
    {
        $this->setProperty('meetsEmissionStandard', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getMeetsEmissionStandard()
    {
       return $this->getProperty('meetsEmissionStandard');
    }

    /**
    * The number of axles.<br/><br/>

Typical unit code(s): C62
    * @param QuantitativeValue|array|string $value
    * @return $this
    * @deprecated use setNumberOfAxles
    */
    public function numberOfAxles($value)
    {
        $this->setProperty('numberOfAxles', $value);
        return $this;
    }
   /**
    * @param QuantitativeValue|array|string $value
    * @return $this
    */
    public function setNumberOfAxles($value)
    {
        $this->setProperty('numberOfAxles', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getNumberOfAxles()
    {
       return $this->getProperty('numberOfAxles');
    }

    /**
    * The type or material of the interior of the vehicle (e.g. synthetic fabric, leather, wood, etc.). While most interior types are characterized by the material used, an interior type can also be based on vehicle usage or target audience.
    * @param string|array $value
    * @return $this
    * @deprecated use setVehicleInteriorType
    */
    public function vehicleInteriorType($value)
    {
        $this->setProperty('vehicleInteriorType', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setVehicleInteriorType($value)
    {
        $this->setProperty('vehicleInteriorType', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getVehicleInteriorType()
    {
       return $this->getProperty('vehicleInteriorType');
    }

    /**
    * A textual description of known damages, both repaired and unrepaired.
    * @param string|array $value
    * @return $this
    * @deprecated use setKnownVehicleDamages
    */
    public function knownVehicleDamages($value)
    {
        $this->setProperty('knownVehicleDamages', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setKnownVehicleDamages($value)
    {
        $this->setProperty('knownVehicleDamages', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getKnownVehicleDamages()
    {
       return $this->getProperty('knownVehicleDamages');
    }

    /**
    * The number or type of airbags in the vehicle.
    * @param string|array $value
    * @return $this
    * @deprecated use setNumberOfAirbags
    */
    public function numberOfAirbags($value)
    {
        $this->setProperty('numberOfAirbags', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setNumberOfAirbags($value)
    {
        $this->setProperty('numberOfAirbags', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getNumberOfAirbags()
    {
       return $this->getProperty('numberOfAirbags');
    }

    /**
    * The permitted total weight of the loaded vehicle, including passengers and cargo and the weight of the empty vehicle.<br/><br/>

Typical unit code(s): KGM for kilogram, LBR for pound<br/><br/>

<ul>
<li>Note 1: You can indicate additional information in the <a class="localLink" href="http://schema.org/name">name</a> of the <a class="localLink" href="http://schema.org/QuantitativeValue">QuantitativeValue</a> node.</li>
<li>Note 2: You may also link to a <a class="localLink" href="http://schema.org/QualitativeValue">QualitativeValue</a> node that provides additional information using <a class="localLink" href="http://schema.org/valueReference">valueReference</a>.</li>
<li>Note 3: Note that you can use <a class="localLink" href="http://schema.org/minValue">minValue</a> and <a class="localLink" href="http://schema.org/maxValue">maxValue</a> to indicate ranges.</li>
</ul>

    * @param QuantitativeValue|array|string $value
    * @return $this
    * @deprecated use setWeightTotal
    */
    public function weightTotal($value)
    {
        $this->setProperty('weightTotal', $value);
        return $this;
    }
   /**
    * @param QuantitativeValue|array|string $value
    * @return $this
    */
    public function setWeightTotal($value)
    {
        $this->setProperty('weightTotal', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getWeightTotal()
    {
       return $this->getProperty('weightTotal');
    }

    /**
    * The CO2 emissions in g/km. When used in combination with a QuantitativeValue, put "g/km" into the unitText property of that value, since there is no UN/CEFACT Common Code for "g/km".
    * @param array|string $value
    * @return $this
    * @deprecated use setEmissionsCO2
    */
    public function emissionsCO2($value)
    {
        $this->setProperty('emissionsCO2', $value);
        return $this;
    }
   /**
    * @param array|string $value
    * @return $this
    */
    public function setEmissionsCO2($value)
    {
        $this->setProperty('emissionsCO2', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getEmissionsCO2()
    {
       return $this->getProperty('emissionsCO2');
    }

    /**
    * The available volume for cargo or luggage. For automobiles, this is usually the trunk volume.<br/><br/>

Typical unit code(s): LTR for liters, FTQ for cubic foot/feet<br/><br/>

Note: You can use <a class="localLink" href="http://schema.org/minValue">minValue</a> and <a class="localLink" href="http://schema.org/maxValue">maxValue</a> to indicate ranges.
    * @param QuantitativeValue|array|string $value
    * @return $this
    * @deprecated use setCargoVolume
    */
    public function cargoVolume($value)
    {
        $this->setProperty('cargoVolume', $value);
        return $this;
    }
   /**
    * @param QuantitativeValue|array|string $value
    * @return $this
    */
    public function setCargoVolume($value)
    {
        $this->setProperty('cargoVolume', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getCargoVolume()
    {
       return $this->getProperty('cargoVolume');
    }

    /**
    * The capacity of the fuel tank or in the case of electric cars, the battery. If there are multiple components for storage, this should indicate the total of all storage of the same type.<br/><br/>

Typical unit code(s): LTR for liters, GLL of US gallons, GLI for UK / imperial gallons, AMH for ampere-hours (for electrical vehicles).
    * @param QuantitativeValue|array|string $value
    * @return $this
    * @deprecated use setFuelCapacity
    */
    public function fuelCapacity($value)
    {
        $this->setProperty('fuelCapacity', $value);
        return $this;
    }
   /**
    * @param QuantitativeValue|array|string $value
    * @return $this
    */
    public function setFuelCapacity($value)
    {
        $this->setProperty('fuelCapacity', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getFuelCapacity()
    {
       return $this->getProperty('fuelCapacity');
    }

    /**
    * Indicates the design and body style of the vehicle (e.g. station wagon, hatchback, etc.).
    * @param string|string|QualitativeValue|array $value
    * @return $this
    * @deprecated use setBodyType
    */
    public function bodyType($value)
    {
        $this->setProperty('bodyType', $value);
        return $this;
    }
   /**
    * @param string|string|QualitativeValue|array $value
    * @return $this
    */
    public function setBodyType($value)
    {
        $this->setProperty('bodyType', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getBodyType()
    {
       return $this->getProperty('bodyType');
    }

    /**
    * This is a StupidProperty! - for testing only
    * @param QuantitativeValue|array|string $value
    * @return $this
    * @deprecated use setStupidProperty
    */
    public function stupidProperty($value)
    {
        $this->setProperty('stupidProperty', $value);
        return $this;
    }
   /**
    * @param QuantitativeValue|array|string $value
    * @return $this
    */
    public function setStupidProperty($value)
    {
        $this->setProperty('stupidProperty', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getStupidProperty()
    {
       return $this->getProperty('stupidProperty');
    }

    /**
    * The type of component used for transmitting the power from a rotating power source to the wheels or other relevant component(s) ("gearbox" for cars).
    * @param QualitativeValue|string|string|array $value
    * @return $this
    * @deprecated use setVehicleTransmission
    */
    public function vehicleTransmission($value)
    {
        $this->setProperty('vehicleTransmission', $value);
        return $this;
    }
   /**
    * @param QualitativeValue|string|string|array $value
    * @return $this
    */
    public function setVehicleTransmission($value)
    {
        $this->setProperty('vehicleTransmission', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getVehicleTransmission()
    {
       return $this->getProperty('vehicleTransmission');
    }

    /**
    * The date of the first registration of the vehicle with the respective public authorities.
    * @param array|string $value
    * @return $this
    * @deprecated use setDateVehicleFirstRegistered
    */
    public function dateVehicleFirstRegistered($value)
    {
        $this->setProperty('dateVehicleFirstRegistered', $value);
        return $this;
    }
   /**
    * @param array|string $value
    * @return $this
    */
    public function setDateVehicleFirstRegistered($value)
    {
        $this->setProperty('dateVehicleFirstRegistered', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getDateVehicleFirstRegistered()
    {
       return $this->getProperty('dateVehicleFirstRegistered');
    }

    /**
    * The date the item e.g. vehicle was purchased by the current owner.
    * @param array|string $value
    * @return $this
    * @deprecated use setPurchaseDate
    */
    public function purchaseDate($value)
    {
        $this->setProperty('purchaseDate', $value);
        return $this;
    }
   /**
    * @param array|string $value
    * @return $this
    */
    public function setPurchaseDate($value)
    {
        $this->setProperty('purchaseDate', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getPurchaseDate()
    {
       return $this->getProperty('purchaseDate');
    }

    /**
    * The speed range of the vehicle. If the vehicle is powered by an engine, the upper limit of the speed range (indicated by <a class="localLink" href="http://schema.org/maxValue">maxValue</a> should be the maximum speed achievable under regular conditions.<br/><br/>

Typical unit code(s): KMH for km/h, HM for mile per hour (0.447 04 m/s), KNT for knot<br/><br/>

*Note 1: Use <a class="localLink" href="http://schema.org/minValue">minValue</a> and <a class="localLink" href="http://schema.org/maxValue">maxValue</a> to indicate the range. Typically, the minimal value is zero.
* Note 2: There are many different ways of measuring the speed range. You can link to information about how the given value has been determined using the <a class="localLink" href="http://schema.org/valueReference">valueReference</a> property.
    * @param QuantitativeValue|array|string $value
    * @return $this
    * @deprecated use setSpeed
    */
    public function speed($value)
    {
        $this->setProperty('speed', $value);
        return $this;
    }
   /**
    * @param QuantitativeValue|array|string $value
    * @return $this
    */
    public function setSpeed($value)
    {
        $this->setProperty('speed', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getSpeed()
    {
       return $this->getProperty('speed');
    }

    /**
    * The distance traveled per unit of fuel used; most commonly miles per gallon (mpg) or kilometers per liter (km/L).<br/><br/>

<ul>
<li>Note 1: There are unfortunately no standard unit codes for miles per gallon or kilometers per liter. Use <a class="localLink" href="http://schema.org/unitText">unitText</a> to indicate the unit of measurement, e.g. mpg or km/L.</li>
<li>Note 2: There are two ways of indicating the fuel consumption, <a class="localLink" href="http://schema.org/fuelConsumption">fuelConsumption</a> (e.g. 8 liters per 100 km) and <a class="localLink" href="http://schema.org/fuelEfficiency">fuelEfficiency</a> (e.g. 30 miles per gallon). They are reciprocal.</li>
<li>Note 3: Often, the absolute value is useful only when related to driving speed ("at 80 km/h") or usage pattern ("city traffic"). You can use <a class="localLink" href="http://schema.org/valueReference">valueReference</a> to link the value for the fuel economy to another value.</li>
</ul>

    * @param QuantitativeValue|array|string $value
    * @return $this
    * @deprecated use setFuelEfficiency
    */
    public function fuelEfficiency($value)
    {
        $this->setProperty('fuelEfficiency', $value);
        return $this;
    }
   /**
    * @param QuantitativeValue|array|string $value
    * @return $this
    */
    public function setFuelEfficiency($value)
    {
        $this->setProperty('fuelEfficiency', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getFuelEfficiency()
    {
       return $this->getProperty('fuelEfficiency');
    }

    /**
    * The drive wheel configuration, i.e. which roadwheels will receive torque from the vehicle's engine via the drivetrain.
    * @param DriveWheelConfigurationValue|string|array $value
    * @return $this
    * @deprecated use setDriveWheelConfiguration
    */
    public function driveWheelConfiguration($value)
    {
        $this->setProperty('driveWheelConfiguration', $value);
        return $this;
    }
   /**
    * @param DriveWheelConfigurationValue|string|array $value
    * @return $this
    */
    public function setDriveWheelConfiguration($value)
    {
        $this->setProperty('driveWheelConfiguration', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getDriveWheelConfiguration()
    {
       return $this->getProperty('driveWheelConfiguration');
    }

    /**
    * The number of persons that can be seated (e.g. in a vehicle), both in terms of the physical space available, and in terms of limitations set by law.<br/><br/>

Typical unit code(s): C62 for persons
    * @param QuantitativeValue|array|string $value
    * @return $this
    * @deprecated use setSeatingCapacity
    */
    public function seatingCapacity($value)
    {
        $this->setProperty('seatingCapacity', $value);
        return $this;
    }
   /**
    * @param QuantitativeValue|array|string $value
    * @return $this
    */
    public function setSeatingCapacity($value)
    {
        $this->setProperty('seatingCapacity', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getSeatingCapacity()
    {
       return $this->getProperty('seatingCapacity');
    }


}
