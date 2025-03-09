<?php
namespace Sohophp\SchemaOrg\Thing\Product;

use Sohophp\SchemaOrg\Thing\Product;

/**
* A vehicle is a device that is designed or used to transport people or cargo over land, water, air, or through space.
* @see schema:Vehicle
* @package Sohophp\SchemaOrg\Thing\Product
*/
class Vehicle extends Product
{
   /**
        * The total number of forward gears available for the transmission system of the vehicle.\n\nTypical unit code(s): C62.
        */
    protected $numberOfForwardGears = null;

   /**
        * Indicates the design and body style of the vehicle (e.g. station wagon, hatchback, etc.).
        */
    protected $bodyType = null;

   /**
        * The permitted weight of passengers and cargo, EXCLUDING the weight of the empty vehicle.\n\nTypical unit code(s): KGM for kilogram, LBR for pound\n\n* Note 1: Many databases specify the permitted TOTAL weight instead, which is the sum of [[weight]] and [[payload]]\n* Note 2: You can indicate additional information in the [[name]] of the [[QuantitativeValue]] node.\n* Note 3: You may also link to a [[QualitativeValue]] node that provides additional information using [[valueReference]].\n* Note 4: Note that you can use [[minValue]] and [[maxValue]] to indicate ranges.
        */
    protected $payload = null;

   /**
        * The distance between the centers of the front and rear wheels.\n\nTypical unit code(s): CMT for centimeters, MTR for meters, INH for inches, FOT for foot/feet.
        */
    protected $wheelbase = null;

   /**
        * The type of fuel suitable for the engine or engines of the vehicle. If the vehicle has only one engine, this property can be attached directly to the vehicle.
        */
    protected $fuelType = null;

   /**
        * The date of production of the item, e.g. vehicle.
        */
    protected $productionDate = null;

   /**
        * The distance traveled per unit of fuel used; most commonly miles per gallon (mpg) or kilometers per liter (km/L).\n\n* Note 1: There are unfortunately no standard unit codes for miles per gallon or kilometers per liter. Use [[unitText]] to indicate the unit of measurement, e.g. mpg or km/L.\n* Note 2: There are two ways of indicating the fuel consumption, [[fuelConsumption]] (e.g. 8 liters per 100 km) and [[fuelEfficiency]] (e.g. 30 miles per gallon). They are reciprocal.\n* Note 3: Often, the absolute value is useful only when related to driving speed ("at 80 km/h") or usage pattern ("city traffic"). You can use [[valueReference]] to link the value for the fuel economy to another value.
        */
    protected $fuelEfficiency = null;

   /**
        * The number of axles.\n\nTypical unit code(s): C62.
        */
    protected $numberOfAxles = null;

   /**
        * The speed range of the vehicle. If the vehicle is powered by an engine, the upper limit of the speed range (indicated by [[maxValue]]) should be the maximum speed achievable under regular conditions.\n\nTypical unit code(s): KMH for km/h, HM for mile per hour (0.447 04 m/s), KNT for knot\n\n*Note 1: Use [[minValue]] and [[maxValue]] to indicate the range. Typically, the minimal value is zero.\n* Note 2: There are many different ways of measuring the speed range. You can link to information about how the given value has been determined using the [[valueReference]] property.
        */
    protected $speed = null;

   /**
        * Indicates that the vehicle meets the respective emission standard.
        */
    protected $meetsEmissionStandard = null;

   /**
        * The number of persons that can be seated (e.g. in a vehicle), both in terms of the physical space available, and in terms of limitations set by law.\n\nTypical unit code(s): C62 for persons.
        */
    protected $seatingCapacity = null;

   /**
        * The type or material of the interior of the vehicle (e.g. synthetic fabric, leather, wood, etc.). While most interior types are characterized by the material used, an interior type can also be based on vehicle usage or target audience.
        */
    protected $vehicleInteriorType = null;

   /**
        * This is a StupidProperty! - for testing only.
        */
    protected $stupidProperty = null;

   /**
        * The position of the steering wheel or similar device (mostly for cars).
        */
    protected $steeringPosition = null;

   /**
        * Information about the engine or engines of the vehicle.
        */
    protected $vehicleEngine = null;

   /**
        * The capacity of the fuel tank or in the case of electric cars, the battery. If there are multiple components for storage, this should indicate the total of all storage of the same type.\n\nTypical unit code(s): LTR for liters, GLL of US gallons, GLI for UK / imperial gallons, AMH for ampere-hours (for electrical vehicles).
        */
    protected $fuelCapacity = null;

   /**
        * The release date of a vehicle model (often used to differentiate versions of the same make and model).
        */
    protected $vehicleModelDate = null;

   /**
        * The permitted weight of a trailer attached to the vehicle.\n\nTypical unit code(s): KGM for kilogram, LBR for pound\n* Note 1: You can indicate additional information in the [[name]] of the [[QuantitativeValue]] node.\n* Note 2: You may also link to a [[QualitativeValue]] node that provides additional information using [[valueReference]].\n* Note 3: Note that you can use [[minValue]] and [[maxValue]] to indicate ranges.
        */
    protected $trailerWeight = null;

   /**
        * The time needed to accelerate the vehicle from a given start velocity to a given target velocity.\n\nTypical unit code(s): SEC for seconds\n\n* Note: There are unfortunately no standard unit codes for seconds/0..100 km/h or seconds/0..60 mph. Simply use "SEC" for seconds and indicate the velocities in the [[name]] of the [[QuantitativeValue]], or use [[valueReference]] with a [[QuantitativeValue]] of 0..60 mph or 0..100 km/h to specify the reference speeds.
        */
    protected $accelerationTime = null;

   /**
        * The available volume for cargo or luggage. For automobiles, this is usually the trunk volume.\n\nTypical unit code(s): LTR for liters, FTQ for cubic foot/feet\n\nNote: You can use [[minValue]] and [[maxValue]] to indicate ranges.
        */
    protected $cargoVolume = null;

   /**
        * The number of doors.\n\nTypical unit code(s): C62.
        */
    protected $numberOfDoors = null;

   /**
        * The total distance travelled by the particular vehicle since its initial production, as read from its odometer.\n\nTypical unit code(s): KMT for kilometers, SMI for statute miles.
        */
    protected $mileageFromOdometer = null;

   /**
        * The date the item, e.g. vehicle, was purchased by the current owner.
        */
    protected $purchaseDate = null;

   /**
        * The CO2 emissions in g/km. When used in combination with a QuantitativeValue, put "g/km" into the unitText property of that value, since there is no UN/CEFACT Common Code for "g/km".
        */
    protected $emissionsCO2 = null;

   /**
        * The number of owners of the vehicle, including the current one.\n\nTypical unit code(s): C62.
        */
    protected $numberOfPreviousOwners = null;

   /**
        * The release date of a vehicle model (often used to differentiate versions of the same make and model).
        */
    protected $modelDate = null;

   /**
        * A short text indicating the configuration of the vehicle, e.g. '5dr hatchback ST 2.5 MT 225 hp' or 'limited edition'.
        */
    protected $vehicleConfiguration = null;

   /**
        * A textual description of known damages, both repaired and unrepaired.
        */
    protected $knownVehicleDamages = null;

   /**
        * The type of component used for transmitting the power from a rotating power source to the wheels or other relevant component(s) ("gearbox" for cars).
        */
    protected $vehicleTransmission = null;

   /**
        * The number of passengers that can be seated in the vehicle, both in terms of the physical space available, and in terms of limitations set by law.\n\nTypical unit code(s): C62 for persons.
        */
    protected $vehicleSeatingCapacity = null;

   /**
        * A [callsign](https://en.wikipedia.org/wiki/Call_sign), as used in broadcasting and radio communications to identify people, radio and TV stations, or vehicles.
        */
    protected $callSign = null;

   /**
        * The color or color combination of the interior of the vehicle.
        */
    protected $vehicleInteriorColor = null;

   /**
        * The date of the first registration of the vehicle with the respective public authorities.
        */
    protected $dateVehicleFirstRegistered = null;

   /**
        * The number or type of airbags in the vehicle.
        */
    protected $numberOfAirbags = null;

   /**
        * Indicates whether the vehicle has been used for special purposes, like commercial rental, driving school, or as a taxi. The legislation in many countries requires this information to be revealed when offering a car for sale.
        */
    protected $vehicleSpecialUsage = null;

   /**
        * The Vehicle Identification Number (VIN) is a unique serial number used by the automotive industry to identify individual motor vehicles.
        */
    protected $vehicleIdentificationNumber = null;

   /**
        * The amount of fuel consumed for traveling a particular distance or temporal duration with the given vehicle (e.g. liters per 100 km).\n\n* Note 1: There are unfortunately no standard unit codes for liters per 100 km.  Use [[unitText]] to indicate the unit of measurement, e.g. L/100 km.\n* Note 2: There are two ways of indicating the fuel consumption, [[fuelConsumption]] (e.g. 8 liters per 100 km) and [[fuelEfficiency]] (e.g. 30 miles per gallon). They are reciprocal.\n* Note 3: Often, the absolute value is useful only when related to driving speed ("at 80 km/h") or usage pattern ("city traffic"). You can use [[valueReference]] to link the value for the fuel consumption to another value.
        */
    protected $fuelConsumption = null;

   /**
        * The drive wheel configuration, i.e. which roadwheels will receive torque from the vehicle's engine via the drivetrain.
        */
    protected $driveWheelConfiguration = null;

   /**
        * The permitted vertical load (TWR) of a trailer attached to the vehicle. Also referred to as Tongue Load Rating (TLR) or Vertical Load Rating (VLR).\n\nTypical unit code(s): KGM for kilogram, LBR for pound\n\n* Note 1: You can indicate additional information in the [[name]] of the [[QuantitativeValue]] node.\n* Note 2: You may also link to a [[QualitativeValue]] node that provides additional information using [[valueReference]].\n* Note 3: Note that you can use [[minValue]] and [[maxValue]] to indicate ranges.
        */
    protected $tongueWeight = null;

   /**
        * The permitted total weight of the loaded vehicle, including passengers and cargo and the weight of the empty vehicle.\n\nTypical unit code(s): KGM for kilogram, LBR for pound\n\n* Note 1: You can indicate additional information in the [[name]] of the [[QuantitativeValue]] node.\n* Note 2: You may also link to a [[QualitativeValue]] node that provides additional information using [[valueReference]].\n* Note 3: Note that you can use [[minValue]] and [[maxValue]] to indicate ranges.
        */
    protected $weightTotal = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setNumberOfForwardGears($value)
    {
        $this->setProperty('numberOfForwardGears', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getNumberOfForwardGears()
    {
       return $this->getProperty('numberOfForwardGears');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setBodyType($value)
    {
        $this->setProperty('bodyType', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getBodyType()
    {
       return $this->getProperty('bodyType');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setPayload($value)
    {
        $this->setProperty('payload', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPayload()
    {
       return $this->getProperty('payload');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setWheelbase($value)
    {
        $this->setProperty('wheelbase', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getWheelbase()
    {
       return $this->getProperty('wheelbase');
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
    public function setProductionDate($value)
    {
        $this->setProperty('productionDate', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getProductionDate()
    {
       return $this->getProperty('productionDate');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setFuelEfficiency($value)
    {
        $this->setProperty('fuelEfficiency', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getFuelEfficiency()
    {
       return $this->getProperty('fuelEfficiency');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setNumberOfAxles($value)
    {
        $this->setProperty('numberOfAxles', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getNumberOfAxles()
    {
       return $this->getProperty('numberOfAxles');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setSpeed($value)
    {
        $this->setProperty('speed', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSpeed()
    {
       return $this->getProperty('speed');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setMeetsEmissionStandard($value)
    {
        $this->setProperty('meetsEmissionStandard', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getMeetsEmissionStandard()
    {
       return $this->getProperty('meetsEmissionStandard');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setSeatingCapacity($value)
    {
        $this->setProperty('seatingCapacity', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSeatingCapacity()
    {
       return $this->getProperty('seatingCapacity');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setVehicleInteriorType($value)
    {
        $this->setProperty('vehicleInteriorType', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getVehicleInteriorType()
    {
       return $this->getProperty('vehicleInteriorType');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setStupidProperty($value)
    {
        $this->setProperty('stupidProperty', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getStupidProperty()
    {
       return $this->getProperty('stupidProperty');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setSteeringPosition($value)
    {
        $this->setProperty('steeringPosition', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSteeringPosition()
    {
       return $this->getProperty('steeringPosition');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setVehicleEngine($value)
    {
        $this->setProperty('vehicleEngine', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getVehicleEngine()
    {
       return $this->getProperty('vehicleEngine');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setFuelCapacity($value)
    {
        $this->setProperty('fuelCapacity', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getFuelCapacity()
    {
       return $this->getProperty('fuelCapacity');
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
    * @return string|array|mixed
    */
    public function getVehicleModelDate()
    {
       return $this->getProperty('vehicleModelDate');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setTrailerWeight($value)
    {
        $this->setProperty('trailerWeight', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getTrailerWeight()
    {
       return $this->getProperty('trailerWeight');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setAccelerationTime($value)
    {
        $this->setProperty('accelerationTime', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAccelerationTime()
    {
       return $this->getProperty('accelerationTime');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setCargoVolume($value)
    {
        $this->setProperty('cargoVolume', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCargoVolume()
    {
       return $this->getProperty('cargoVolume');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setNumberOfDoors($value)
    {
        $this->setProperty('numberOfDoors', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getNumberOfDoors()
    {
       return $this->getProperty('numberOfDoors');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setMileageFromOdometer($value)
    {
        $this->setProperty('mileageFromOdometer', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getMileageFromOdometer()
    {
       return $this->getProperty('mileageFromOdometer');
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
    * @return string|array|mixed
    */
    public function getPurchaseDate()
    {
       return $this->getProperty('purchaseDate');
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
    * @return string|array|mixed
    */
    public function getEmissionsCO2()
    {
       return $this->getProperty('emissionsCO2');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setNumberOfPreviousOwners($value)
    {
        $this->setProperty('numberOfPreviousOwners', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getNumberOfPreviousOwners()
    {
       return $this->getProperty('numberOfPreviousOwners');
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
    * @return string|array|mixed
    */
    public function getModelDate()
    {
       return $this->getProperty('modelDate');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setVehicleConfiguration($value)
    {
        $this->setProperty('vehicleConfiguration', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getVehicleConfiguration()
    {
       return $this->getProperty('vehicleConfiguration');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setKnownVehicleDamages($value)
    {
        $this->setProperty('knownVehicleDamages', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getKnownVehicleDamages()
    {
       return $this->getProperty('knownVehicleDamages');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setVehicleTransmission($value)
    {
        $this->setProperty('vehicleTransmission', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getVehicleTransmission()
    {
       return $this->getProperty('vehicleTransmission');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setVehicleSeatingCapacity($value)
    {
        $this->setProperty('vehicleSeatingCapacity', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getVehicleSeatingCapacity()
    {
       return $this->getProperty('vehicleSeatingCapacity');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setCallSign($value)
    {
        $this->setProperty('callSign', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCallSign()
    {
       return $this->getProperty('callSign');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setVehicleInteriorColor($value)
    {
        $this->setProperty('vehicleInteriorColor', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getVehicleInteriorColor()
    {
       return $this->getProperty('vehicleInteriorColor');
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
    * @return string|array|mixed
    */
    public function getDateVehicleFirstRegistered()
    {
       return $this->getProperty('dateVehicleFirstRegistered');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setNumberOfAirbags($value)
    {
        $this->setProperty('numberOfAirbags', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getNumberOfAirbags()
    {
       return $this->getProperty('numberOfAirbags');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setVehicleSpecialUsage($value)
    {
        $this->setProperty('vehicleSpecialUsage', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getVehicleSpecialUsage()
    {
       return $this->getProperty('vehicleSpecialUsage');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setVehicleIdentificationNumber($value)
    {
        $this->setProperty('vehicleIdentificationNumber', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getVehicleIdentificationNumber()
    {
       return $this->getProperty('vehicleIdentificationNumber');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setFuelConsumption($value)
    {
        $this->setProperty('fuelConsumption', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getFuelConsumption()
    {
       return $this->getProperty('fuelConsumption');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setDriveWheelConfiguration($value)
    {
        $this->setProperty('driveWheelConfiguration', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDriveWheelConfiguration()
    {
       return $this->getProperty('driveWheelConfiguration');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setTongueWeight($value)
    {
        $this->setProperty('tongueWeight', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getTongueWeight()
    {
       return $this->getProperty('tongueWeight');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setWeightTotal($value)
    {
        $this->setProperty('weightTotal', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getWeightTotal()
    {
       return $this->getProperty('weightTotal');
    }


}
