<?php
namespace Sohophp\SchemaOrg\Thing\Place\Residence;

use Sohophp\SchemaOrg\Thing\Place\Residence;

/**
* Residence type: Apartment complex.
* @see schema:ApartmentComplex
* @package Sohophp\SchemaOrg\Thing\Place\Residence
*/
class ApartmentComplex extends Residence
{
   /**
        * A page providing information on how to book a tour of some [[Place]], such as an [[Accommodation]] or [[ApartmentComplex]] in a real estate setting, as well as other kinds of tours as appropriate.
        */
    protected $tourBookingPage = null;

   /**
        * Indicates the number of available accommodation units in an [[ApartmentComplex]], or the number of accommodation units for a specific [[FloorPlan]] (within its specific [[ApartmentComplex]]). See also [[numberOfAccommodationUnits]].
        */
    protected $numberOfAvailableAccommodationUnits = null;

   /**
        * Indicates the total (available plus unavailable) number of accommodation units in an [[ApartmentComplex]], or the number of accommodation units for a specific [[FloorPlan]] (within its specific [[ApartmentComplex]]). See also [[numberOfAvailableAccommodationUnits]].
        */
    protected $numberOfAccommodationUnits = null;

   /**
        * Indicates whether pets are allowed to enter the accommodation or lodging business. More detailed information can be put in a text value.
        */
    protected $petsAllowed = null;

   /**
        * The total integer number of bedrooms in a some [[Accommodation]], [[ApartmentComplex]] or [[FloorPlan]].
        */
    protected $numberOfBedrooms = null;


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
    public function setNumberOfAvailableAccommodationUnits($value)
    {
        $this->setProperty('numberOfAvailableAccommodationUnits', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getNumberOfAvailableAccommodationUnits()
    {
       return $this->getProperty('numberOfAvailableAccommodationUnits');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setNumberOfAccommodationUnits($value)
    {
        $this->setProperty('numberOfAccommodationUnits', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getNumberOfAccommodationUnits()
    {
       return $this->getProperty('numberOfAccommodationUnits');
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
