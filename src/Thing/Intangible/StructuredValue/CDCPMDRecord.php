<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

/**
* A CDCPMDRecord is a data structure representing a record in a CDC tabular data format
      used for hospital data reporting. See [documentation](/docs/cdc-covid.html) for details, and the linked CDC materials for authoritative
      definitions used as the source here.
      
* @see schema:CDCPMDRecord
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue
*/
class CDCPMDRecord extends StructuredValue
{
   /**
        * Publication date of an online listing.
        */
    protected $datePosted = null;

   /**
        * Name of the County of the NHSN facility that this data record applies to. Use [[cvdFacilityId]] to identify the facility. To provide other details, [[healthcareReportingData]] can be used on a [[Hospital]] entry.
        */
    protected $cvdFacilityCounty = null;

   /**
        * Identifier of the NHSN facility that this data record applies to. Use [[cvdFacilityCounty]] to indicate the county. To provide other details, [[healthcareReportingData]] can be used on a [[Hospital]] entry.
        */
    protected $cvdFacilityId = null;

   /**
        * numicubedsocc - ICU BED OCCUPANCY: Total number of staffed inpatient ICU beds that are occupied.
        */
    protected $cvdNumICUBedsOcc = null;

   /**
        * numtotbeds - ALL HOSPITAL BEDS: Total number of all inpatient and outpatient beds, including all staffed, ICU, licensed, and overflow (surge) beds used for inpatients or outpatients.
        */
    protected $cvdNumTotBeds = null;

   /**
        * numc19ofmechventpats - ED/OVERFLOW and VENTILATED: Patients with suspected or confirmed COVID-19 who are in the ED or any overflow location awaiting an inpatient bed and on a mechanical ventilator.
        */
    protected $cvdNumC19OFMechVentPats = null;

   /**
        * collectiondate - Date for which patient counts are reported.
        */
    protected $cvdCollectionDate = null;

   /**
        * numicubeds - ICU BEDS: Total number of staffed inpatient intensive care unit (ICU) beds.
        */
    protected $cvdNumICUBeds = null;

   /**
        * numc19overflowpats - ED/OVERFLOW: Patients with suspected or confirmed COVID-19 who are in the ED or any overflow location awaiting an inpatient bed.
        */
    protected $cvdNumC19OverflowPats = null;

   /**
        * numc19mechventpats - HOSPITALIZED and VENTILATED: Patients hospitalized in an NHSN inpatient care location who have suspected or confirmed COVID-19 and are on a mechanical ventilator.
        */
    protected $cvdNumC19MechVentPats = null;

   /**
        * numvent - MECHANICAL VENTILATORS: Total number of ventilators available.
        */
    protected $cvdNumVent = null;

   /**
        * numbeds - HOSPITAL INPATIENT BEDS: Inpatient beds, including all staffed, licensed, and overflow (surge) beds used for inpatients.
        */
    protected $cvdNumBeds = null;

   /**
        * numc19hosppats - HOSPITALIZED: Patients currently hospitalized in an inpatient care location who have suspected or confirmed COVID-19.
        */
    protected $cvdNumC19HospPats = null;

   /**
        * numbedsocc - HOSPITAL INPATIENT BED OCCUPANCY: Total number of staffed inpatient beds that are occupied.
        */
    protected $cvdNumBedsOcc = null;

   /**
        * numventuse - MECHANICAL VENTILATORS IN USE: Total number of ventilators in use.
        */
    protected $cvdNumVentUse = null;

   /**
        * numc19hopats - HOSPITAL ONSET: Patients hospitalized in an NHSN inpatient care location with onset of suspected or confirmed COVID-19 14 or more days after hospitalization.
        */
    protected $cvdNumC19HOPats = null;

   /**
        * numc19died - DEATHS: Patients with suspected or confirmed COVID-19 who died in the hospital, ED, or any overflow location.
        */
    protected $cvdNumC19Died = null;


    /**
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
