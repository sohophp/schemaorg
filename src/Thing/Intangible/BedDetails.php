<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\QualitativeValue\BedType;

/**
* An entity holding detailed information about the available bed types, e.g.
 * the quantity of twin beds for a hotel room. For the single case of just one
 * bed of a certain type, you can use bed directly with a text. See also
 * [[BedType]] (under development).
* @see http://schema.org/BedDetails
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class BedDetails extends Intangible
{


    /**
        * The type of bed to which the BedDetail refers, i.e. the type of bed available
 * in the quantity indicated by quantity.
        * @param BedType|string|array|mixed $value
    * @return $this
    */
    public function typeOfBed($value)
    {
        $this->setProperty('typeOfBed', $value);
        return $this;
    }

    /**
    * @param BedType|string|array|mixed $value
    * @return $this
    */
    public function setTypeOfBed($value)
    {
        $this->setProperty('typeOfBed', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getTypeOfBed()
    {
       return $this->getProperty('typeOfBed');
    }


    /**
        * The quantity of the given bed type available in the HotelRoom, Suite, House,
 * or Apartment.
        * @param array|string|mixed $value
    * @return $this
    */
    public function numberOfBeds($value)
    {
        $this->setProperty('numberOfBeds', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setNumberOfBeds($value)
    {
        $this->setProperty('numberOfBeds', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getNumberOfBeds()
    {
       return $this->getProperty('numberOfBeds');
    }


}
