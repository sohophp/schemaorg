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
        * A page providing information on how to book a tour of some [[Place]], such as
 * an [[Accommodation]] or [[ApartmentComplex]] in a real estate setting, as
 * well as other kinds of tours as appropriate.
        * @param array|string|mixed $value
    * @return $this
    */
    public function tourBookingPage($value)
    {
        $this->setProperty('tourBookingPage', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Indicates the number of available accommodation units in an
 * [[ApartmentComplex]], or the number of accommodation units for a specific
 * [[FloorPlan]] (within its specific [[ApartmentComplex]]). See also
 * [[numberOfAccommodationUnits]].
        * @param array|string|mixed $value
    * @return $this
    */
    public function numberOfAvailableAccommodationUnits($value)
    {
        $this->setProperty('numberOfAvailableAccommodationUnits', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Indicates the total (available plus unavailable) number of accommodation
 * units in an [[ApartmentComplex]], or the number of accommodation units for a
 * specific [[FloorPlan]] (within its specific [[ApartmentComplex]]). See also
 * [[numberOfAvailableAccommodationUnits]].
        * @param array|string|mixed $value
    * @return $this
    */
    public function numberOfAccommodationUnits($value)
    {
        $this->setProperty('numberOfAccommodationUnits', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Indicates whether pets are allowed to enter the accommodation or lodging
 * business. More detailed information can be put in a text value.
        * @param array|string|mixed $value
    * @return $this
    */
    public function petsAllowed($value)
    {
        $this->setProperty('petsAllowed', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The total integer number of bedrooms in a some [[Accommodation]],
 * [[ApartmentComplex]] or [[FloorPlan]].
        * @param array|string|mixed $value
    * @return $this
    */
    public function numberOfBedrooms($value)
    {
        $this->setProperty('numberOfBedrooms', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
