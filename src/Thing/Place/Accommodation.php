<?php
namespace Sohophp\SchemaOrg\Thing\Place;

use Sohophp\SchemaOrg\Thing\Place;

/**
* An accommodation is a place that can accommodate human beings, e.g. a hotel room, a camping pitch, or a meeting room. Many accommodations are for overnight stays, but this is not a mandatory requirement.
For more specific types of accommodations not defined in schema.org, one can use [[additionalType]] with external vocabularies.
<br /><br />
See also the <a href="/docs/hotels.html">dedicated document on the use of schema.org for marking up hotels and other forms of accommodations</a>.

* @see schema:Accommodation
* @package Sohophp\SchemaOrg\Thing\Place
*/
class Accommodation extends Place
{
   /**
        * Number of full bathrooms - The total number of full and ¾ bathrooms in an [[Accommodation]]. This corresponds to the [BathroomsFull field in RESO](https://ddwiki.reso.org/display/DDW17/BathroomsFull+Field).
        */
    protected $numberOfFullBathrooms = null;

   /**
        * A page providing information on how to book a tour of some [[Place]], such as an [[Accommodation]] or [[ApartmentComplex]] in a real estate setting, as well as other kinds of tours as appropriate.
        */
    protected $tourBookingPage = null;

   /**
        * The size of the accommodation, e.g. in square meter or squarefoot.
Typical unit code(s): MTK for square meter, FTK for square foot, or YDK for square yard.
        */
    protected $floorSize = null;

   /**
        * Length of the lease for some [[Accommodation]], either particular to some [[Offer]] or in some cases intrinsic to the property.
        */
    protected $leaseLength = null;

   /**
        * The type of bed or beds included in the accommodation. For the single case of just one bed of a certain type, you use bed directly with a text.
      If you want to indicate the quantity of a certain kind of bed, use an instance of BedDetails. For more detailed information, use the amenityFeature property.
        */
    protected $bed = null;

   /**
        * The allowed total occupancy for the accommodation in persons (including infants etc). For individual accommodations, this is not necessarily the legal maximum but defines the permitted usage as per the contractual agreement (e.g. a double room used by a single person).
Typical unit code(s): C62 for person.
        */
    protected $occupancy = null;

   /**
        * A floorplan of some [[Accommodation]].
        */
    protected $accommodationFloorPlan = null;

   /**
        * The year an [[Accommodation]] was constructed. This corresponds to the [YearBuilt field in RESO](https://ddwiki.reso.org/display/DDW17/YearBuilt+Field). 
        */
    protected $yearBuilt = null;

   /**
        * Indications regarding the permitted usage of the accommodation.
        */
    protected $permittedUsage = null;

   /**
        * The total integer number of bathrooms in some [[Accommodation]], following real estate conventions as [documented in RESO](https://ddwiki.reso.org/display/DDW17/BathroomsTotalInteger+Field): "The simple sum of the number of bathrooms. For example for a property with two Full Bathrooms and one Half Bathroom, the Bathrooms Total Integer will be 3.". See also [[numberOfRooms]].
        */
    protected $numberOfBathroomsTotal = null;

   /**
        * The floor level for an [[Accommodation]] in a multi-storey building. Since counting
  systems [vary internationally](https://en.wikipedia.org/wiki/Storey#Consecutive_number_floor_designations), the local system should be used where possible.
        */
    protected $floorLevel = null;

   /**
        * Category of an [[Accommodation]], following real estate conventions, e.g. RESO (see [PropertySubType](https://ddwiki.reso.org/display/DDW17/PropertySubType+Field), and [PropertyType](https://ddwiki.reso.org/display/DDW17/PropertyType+Field) fields  for suggested values).
        */
    protected $accommodationCategory = null;

   /**
        * Number of partial bathrooms - The total number of half and ¼ bathrooms in an [[Accommodation]]. This corresponds to the [BathroomsPartial field in RESO](https://ddwiki.reso.org/display/DDW17/BathroomsPartial+Field). 
        */
    protected $numberOfPartialBathrooms = null;

   /**
        * Indicates whether pets are allowed to enter the accommodation or lodging business. More detailed information can be put in a text value.
        */
    protected $petsAllowed = null;

   /**
        * An amenity feature (e.g. a characteristic or service) of the Accommodation. This generic property does not make a statement about whether the feature is included in an offer for the main accommodation or available at extra costs.
        */
    protected $amenityFeature = null;

   /**
        * The number of rooms (excluding bathrooms and closets) of the accommodation or lodging business.
Typical unit code(s): ROM for room or C62 for no unit. The type of room can be put in the unitText property of the QuantitativeValue.
        */
    protected $numberOfRooms = null;

   /**
        * The total integer number of bedrooms in a some [[Accommodation]], [[ApartmentComplex]] or [[FloorPlan]].
        */
    protected $numberOfBedrooms = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setNumberOfFullBathrooms($value)
    {
        $this->setProperty('numberOfFullBathrooms', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getNumberOfFullBathrooms()
    {
       return $this->getProperty('numberOfFullBathrooms');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setTourBookingPage($value)
    {
        $this->setProperty('tourBookingPage', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getTourBookingPage()
    {
       return $this->getProperty('tourBookingPage');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setFloorSize($value)
    {
        $this->setProperty('floorSize', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getFloorSize()
    {
       return $this->getProperty('floorSize');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setLeaseLength($value)
    {
        $this->setProperty('leaseLength', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getLeaseLength()
    {
       return $this->getProperty('leaseLength');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setBed($value)
    {
        $this->setProperty('bed', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getBed()
    {
       return $this->getProperty('bed');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setOccupancy($value)
    {
        $this->setProperty('occupancy', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getOccupancy()
    {
       return $this->getProperty('occupancy');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setAccommodationFloorPlan($value)
    {
        $this->setProperty('accommodationFloorPlan', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAccommodationFloorPlan()
    {
       return $this->getProperty('accommodationFloorPlan');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setYearBuilt($value)
    {
        $this->setProperty('yearBuilt', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getYearBuilt()
    {
       return $this->getProperty('yearBuilt');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setPermittedUsage($value)
    {
        $this->setProperty('permittedUsage', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPermittedUsage()
    {
       return $this->getProperty('permittedUsage');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setNumberOfBathroomsTotal($value)
    {
        $this->setProperty('numberOfBathroomsTotal', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getNumberOfBathroomsTotal()
    {
       return $this->getProperty('numberOfBathroomsTotal');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setFloorLevel($value)
    {
        $this->setProperty('floorLevel', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getFloorLevel()
    {
       return $this->getProperty('floorLevel');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setAccommodationCategory($value)
    {
        $this->setProperty('accommodationCategory', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAccommodationCategory()
    {
       return $this->getProperty('accommodationCategory');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setNumberOfPartialBathrooms($value)
    {
        $this->setProperty('numberOfPartialBathrooms', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getNumberOfPartialBathrooms()
    {
       return $this->getProperty('numberOfPartialBathrooms');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setPetsAllowed($value)
    {
        $this->setProperty('petsAllowed', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPetsAllowed()
    {
       return $this->getProperty('petsAllowed');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setAmenityFeature($value)
    {
        $this->setProperty('amenityFeature', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAmenityFeature()
    {
       return $this->getProperty('amenityFeature');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setNumberOfRooms($value)
    {
        $this->setProperty('numberOfRooms', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getNumberOfRooms()
    {
       return $this->getProperty('numberOfRooms');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setNumberOfBedrooms($value)
    {
        $this->setProperty('numberOfBedrooms', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getNumberOfBedrooms()
    {
       return $this->getProperty('numberOfBedrooms');
    }


}
