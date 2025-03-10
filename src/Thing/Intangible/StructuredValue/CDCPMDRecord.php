<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

/**
* A CDCPMDRecord is a data structure representing a record in a CDC tabular
 * data format
 *       used for hospital data reporting. See
 * [documentation](/docs/cdc-covid.html) for details, and the linked CDC
 * materials for authoritative
 *       definitions used as the source here.
* @see schema:CDCPMDRecord
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue
*/
class CDCPMDRecord extends StructuredValue
{


    /**
        * Publication date of an online listing.
        * @param array|string|mixed $value
    * @return $this
    */
    public function datePosted($value)
    {
        $this->setProperty('datePosted', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setDatePosted($value)
    {
        $this->setProperty('datePosted', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDatePosted()
    {
       return $this->getProperty('datePosted');
    }


    /**
        * Name of the County of the NHSN facility that this data record applies to. Use
 * [[cvdFacilityId]] to identify the facility. To provide other details,
 * [[healthcareReportingData]] can be used on a [[Hospital]] entry.
        * @param array|string|mixed $value
    * @return $this
    */
    public function cvdFacilityCounty($value)
    {
        $this->setProperty('cvdFacilityCounty', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setCvdFacilityCounty($value)
    {
        $this->setProperty('cvdFacilityCounty', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCvdFacilityCounty()
    {
       return $this->getProperty('cvdFacilityCounty');
    }


    /**
        * Identifier of the NHSN facility that this data record applies to. Use
 * [[cvdFacilityCounty]] to indicate the county. To provide other details,
 * [[healthcareReportingData]] can be used on a [[Hospital]] entry.
        * @param array|string|mixed $value
    * @return $this
    */
    public function cvdFacilityId($value)
    {
        $this->setProperty('cvdFacilityId', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setCvdFacilityId($value)
    {
        $this->setProperty('cvdFacilityId', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCvdFacilityId()
    {
       return $this->getProperty('cvdFacilityId');
    }


    /**
        * numicubedsocc - ICU BED OCCUPANCY: Total number of staffed inpatient ICU beds
 * that are occupied.
        * @param array|string|mixed $value
    * @return $this
    */
    public function cvdNumICUBedsOcc($value)
    {
        $this->setProperty('cvdNumICUBedsOcc', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setCvdNumICUBedsOcc($value)
    {
        $this->setProperty('cvdNumICUBedsOcc', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCvdNumICUBedsOcc()
    {
       return $this->getProperty('cvdNumICUBedsOcc');
    }


    /**
        * numtotbeds - ALL HOSPITAL BEDS: Total number of all inpatient and outpatient
 * beds, including all staffed, ICU, licensed, and overflow (surge) beds used
 * for inpatients or outpatients.
        * @param array|string|mixed $value
    * @return $this
    */
    public function cvdNumTotBeds($value)
    {
        $this->setProperty('cvdNumTotBeds', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setCvdNumTotBeds($value)
    {
        $this->setProperty('cvdNumTotBeds', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCvdNumTotBeds()
    {
       return $this->getProperty('cvdNumTotBeds');
    }


    /**
        * numc19ofmechventpats - ED/OVERFLOW and VENTILATED: Patients with suspected or
 * confirmed COVID-19 who are in the ED or any overflow location awaiting an
 * inpatient bed and on a mechanical ventilator.
        * @param array|string|mixed $value
    * @return $this
    */
    public function cvdNumC19OFMechVentPats($value)
    {
        $this->setProperty('cvdNumC19OFMechVentPats', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setCvdNumC19OFMechVentPats($value)
    {
        $this->setProperty('cvdNumC19OFMechVentPats', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCvdNumC19OFMechVentPats()
    {
       return $this->getProperty('cvdNumC19OFMechVentPats');
    }


    /**
        * collectiondate - Date for which patient counts are reported.
        * @param array|string|mixed $value
    * @return $this
    */
    public function cvdCollectionDate($value)
    {
        $this->setProperty('cvdCollectionDate', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setCvdCollectionDate($value)
    {
        $this->setProperty('cvdCollectionDate', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCvdCollectionDate()
    {
       return $this->getProperty('cvdCollectionDate');
    }


    /**
        * numicubeds - ICU BEDS: Total number of staffed inpatient intensive care unit
 * (ICU) beds.
        * @param array|string|mixed $value
    * @return $this
    */
    public function cvdNumICUBeds($value)
    {
        $this->setProperty('cvdNumICUBeds', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setCvdNumICUBeds($value)
    {
        $this->setProperty('cvdNumICUBeds', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCvdNumICUBeds()
    {
       return $this->getProperty('cvdNumICUBeds');
    }


    /**
        * numc19overflowpats - ED/OVERFLOW: Patients with suspected or confirmed
 * COVID-19 who are in the ED or any overflow location awaiting an inpatient
 * bed.
        * @param array|string|mixed $value
    * @return $this
    */
    public function cvdNumC19OverflowPats($value)
    {
        $this->setProperty('cvdNumC19OverflowPats', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setCvdNumC19OverflowPats($value)
    {
        $this->setProperty('cvdNumC19OverflowPats', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCvdNumC19OverflowPats()
    {
       return $this->getProperty('cvdNumC19OverflowPats');
    }


    /**
        * numc19mechventpats - HOSPITALIZED and VENTILATED: Patients hospitalized in an
 * NHSN inpatient care location who have suspected or confirmed COVID-19 and are
 * on a mechanical ventilator.
        * @param array|string|mixed $value
    * @return $this
    */
    public function cvdNumC19MechVentPats($value)
    {
        $this->setProperty('cvdNumC19MechVentPats', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setCvdNumC19MechVentPats($value)
    {
        $this->setProperty('cvdNumC19MechVentPats', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCvdNumC19MechVentPats()
    {
       return $this->getProperty('cvdNumC19MechVentPats');
    }


    /**
        * numvent - MECHANICAL VENTILATORS: Total number of ventilators available.
        * @param array|string|mixed $value
    * @return $this
    */
    public function cvdNumVent($value)
    {
        $this->setProperty('cvdNumVent', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setCvdNumVent($value)
    {
        $this->setProperty('cvdNumVent', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCvdNumVent()
    {
       return $this->getProperty('cvdNumVent');
    }


    /**
        * numbeds - HOSPITAL INPATIENT BEDS: Inpatient beds, including all staffed,
 * licensed, and overflow (surge) beds used for inpatients.
        * @param array|string|mixed $value
    * @return $this
    */
    public function cvdNumBeds($value)
    {
        $this->setProperty('cvdNumBeds', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setCvdNumBeds($value)
    {
        $this->setProperty('cvdNumBeds', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCvdNumBeds()
    {
       return $this->getProperty('cvdNumBeds');
    }


    /**
        * numc19hosppats - HOSPITALIZED: Patients currently hospitalized in an
 * inpatient care location who have suspected or confirmed COVID-19.
        * @param array|string|mixed $value
    * @return $this
    */
    public function cvdNumC19HospPats($value)
    {
        $this->setProperty('cvdNumC19HospPats', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setCvdNumC19HospPats($value)
    {
        $this->setProperty('cvdNumC19HospPats', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCvdNumC19HospPats()
    {
       return $this->getProperty('cvdNumC19HospPats');
    }


    /**
        * numbedsocc - HOSPITAL INPATIENT BED OCCUPANCY: Total number of staffed
 * inpatient beds that are occupied.
        * @param array|string|mixed $value
    * @return $this
    */
    public function cvdNumBedsOcc($value)
    {
        $this->setProperty('cvdNumBedsOcc', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setCvdNumBedsOcc($value)
    {
        $this->setProperty('cvdNumBedsOcc', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCvdNumBedsOcc()
    {
       return $this->getProperty('cvdNumBedsOcc');
    }


    /**
        * numventuse - MECHANICAL VENTILATORS IN USE: Total number of ventilators in
 * use.
        * @param array|string|mixed $value
    * @return $this
    */
    public function cvdNumVentUse($value)
    {
        $this->setProperty('cvdNumVentUse', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setCvdNumVentUse($value)
    {
        $this->setProperty('cvdNumVentUse', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCvdNumVentUse()
    {
       return $this->getProperty('cvdNumVentUse');
    }


    /**
        * numc19hopats - HOSPITAL ONSET: Patients hospitalized in an NHSN inpatient
 * care location with onset of suspected or confirmed COVID-19 14 or more days
 * after hospitalization.
        * @param array|string|mixed $value
    * @return $this
    */
    public function cvdNumC19HOPats($value)
    {
        $this->setProperty('cvdNumC19HOPats', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setCvdNumC19HOPats($value)
    {
        $this->setProperty('cvdNumC19HOPats', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCvdNumC19HOPats()
    {
       return $this->getProperty('cvdNumC19HOPats');
    }


    /**
        * numc19died - DEATHS: Patients with suspected or confirmed COVID-19 who died
 * in the hospital, ED, or any overflow location.
        * @param array|string|mixed $value
    * @return $this
    */
    public function cvdNumC19Died($value)
    {
        $this->setProperty('cvdNumC19Died', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setCvdNumC19Died($value)
    {
        $this->setProperty('cvdNumC19Died', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCvdNumC19Died()
    {
       return $this->getProperty('cvdNumC19Died');
    }


}
