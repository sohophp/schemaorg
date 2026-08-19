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
      * numventuse - MECHANICAL VENTILATORS IN USE: Total number of ventilators in
 * use.
    * @param mixed $value
  * @return $this
  */
  public function cvdNumVentUse($value)
  {
  $this->setProperty('cvdNumVentUse', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function setCvdNumVentUse($value)
  {
  $this->setProperty('cvdNumVentUse', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function addCvdNumVentUse($value)
  {
  $current = $this->getProperty('cvdNumVentUse');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('cvdNumVentUse', $current);
  return $this;
  }

  /**
  * @return mixed
  */
  public function getCvdNumVentUse()
  {
  return $this->getProperty('cvdNumVentUse');
  }


  /**
      * numbedsocc - HOSPITAL INPATIENT BED OCCUPANCY: Total number of staffed
 * inpatient beds that are occupied.
    * @param mixed $value
  * @return $this
  */
  public function cvdNumBedsOcc($value)
  {
  $this->setProperty('cvdNumBedsOcc', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function setCvdNumBedsOcc($value)
  {
  $this->setProperty('cvdNumBedsOcc', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function addCvdNumBedsOcc($value)
  {
  $current = $this->getProperty('cvdNumBedsOcc');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('cvdNumBedsOcc', $current);
  return $this;
  }

  /**
  * @return mixed
  */
  public function getCvdNumBedsOcc()
  {
  return $this->getProperty('cvdNumBedsOcc');
  }


  /**
      * Publication date of an online listing.
    * @param mixed $value
  * @return $this
  */
  public function datePosted($value)
  {
  $this->setProperty('datePosted', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function setDatePosted($value)
  {
  $this->setProperty('datePosted', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function addDatePosted($value)
  {
  $current = $this->getProperty('datePosted');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('datePosted', $current);
  return $this;
  }

  /**
  * @return mixed
  */
  public function getDatePosted()
  {
  return $this->getProperty('datePosted');
  }


  /**
      * numc19hopats - HOSPITAL ONSET: Patients hospitalized in an NHSN inpatient
 * care location with onset of suspected or confirmed COVID-19 14 or more days
 * after hospitalization.
    * @param mixed $value
  * @return $this
  */
  public function cvdNumC19HOPats($value)
  {
  $this->setProperty('cvdNumC19HOPats', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function setCvdNumC19HOPats($value)
  {
  $this->setProperty('cvdNumC19HOPats', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function addCvdNumC19HOPats($value)
  {
  $current = $this->getProperty('cvdNumC19HOPats');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('cvdNumC19HOPats', $current);
  return $this;
  }

  /**
  * @return mixed
  */
  public function getCvdNumC19HOPats()
  {
  return $this->getProperty('cvdNumC19HOPats');
  }


  /**
      * numtotbeds - ALL HOSPITAL BEDS: Total number of all inpatient and outpatient
 * beds, including all staffed, ICU, licensed, and overflow (surge) beds used
 * for inpatients or outpatients.
    * @param mixed $value
  * @return $this
  */
  public function cvdNumTotBeds($value)
  {
  $this->setProperty('cvdNumTotBeds', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function setCvdNumTotBeds($value)
  {
  $this->setProperty('cvdNumTotBeds', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function addCvdNumTotBeds($value)
  {
  $current = $this->getProperty('cvdNumTotBeds');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('cvdNumTotBeds', $current);
  return $this;
  }

  /**
  * @return mixed
  */
  public function getCvdNumTotBeds()
  {
  return $this->getProperty('cvdNumTotBeds');
  }


  /**
      * numicubedsocc - ICU BED OCCUPANCY: Total number of staffed inpatient ICU beds
 * that are occupied.
    * @param mixed $value
  * @return $this
  */
  public function cvdNumICUBedsOcc($value)
  {
  $this->setProperty('cvdNumICUBedsOcc', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function setCvdNumICUBedsOcc($value)
  {
  $this->setProperty('cvdNumICUBedsOcc', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function addCvdNumICUBedsOcc($value)
  {
  $current = $this->getProperty('cvdNumICUBedsOcc');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('cvdNumICUBedsOcc', $current);
  return $this;
  }

  /**
  * @return mixed
  */
  public function getCvdNumICUBedsOcc()
  {
  return $this->getProperty('cvdNumICUBedsOcc');
  }


  /**
      * numc19overflowpats - ED/OVERFLOW: Patients with suspected or confirmed
 * COVID-19 who are in the ED or any overflow location awaiting an inpatient
 * bed.
    * @param mixed $value
  * @return $this
  */
  public function cvdNumC19OverflowPats($value)
  {
  $this->setProperty('cvdNumC19OverflowPats', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function setCvdNumC19OverflowPats($value)
  {
  $this->setProperty('cvdNumC19OverflowPats', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function addCvdNumC19OverflowPats($value)
  {
  $current = $this->getProperty('cvdNumC19OverflowPats');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('cvdNumC19OverflowPats', $current);
  return $this;
  }

  /**
  * @return mixed
  */
  public function getCvdNumC19OverflowPats()
  {
  return $this->getProperty('cvdNumC19OverflowPats');
  }


  /**
      * numc19hosppats - HOSPITALIZED: Patients currently hospitalized in an
 * inpatient care location who have suspected or confirmed COVID-19.
    * @param mixed $value
  * @return $this
  */
  public function cvdNumC19HospPats($value)
  {
  $this->setProperty('cvdNumC19HospPats', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function setCvdNumC19HospPats($value)
  {
  $this->setProperty('cvdNumC19HospPats', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function addCvdNumC19HospPats($value)
  {
  $current = $this->getProperty('cvdNumC19HospPats');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('cvdNumC19HospPats', $current);
  return $this;
  }

  /**
  * @return mixed
  */
  public function getCvdNumC19HospPats()
  {
  return $this->getProperty('cvdNumC19HospPats');
  }


  /**
      * numbeds - HOSPITAL INPATIENT BEDS: Inpatient beds, including all staffed,
 * licensed, and overflow (surge) beds used for inpatients.
    * @param mixed $value
  * @return $this
  */
  public function cvdNumBeds($value)
  {
  $this->setProperty('cvdNumBeds', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function setCvdNumBeds($value)
  {
  $this->setProperty('cvdNumBeds', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function addCvdNumBeds($value)
  {
  $current = $this->getProperty('cvdNumBeds');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('cvdNumBeds', $current);
  return $this;
  }

  /**
  * @return mixed
  */
  public function getCvdNumBeds()
  {
  return $this->getProperty('cvdNumBeds');
  }


  /**
      * Name of the County of the NHSN facility that this data record applies to. Use
 * [[cvdFacilityId]] to identify the facility. To provide other details,
 * [[healthcareReportingData]] can be used on a [[Hospital]] entry.
    * @param string|array $value
  * @return $this
  */
  public function cvdFacilityCounty($value)
  {
  $this->setProperty('cvdFacilityCounty', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setCvdFacilityCounty($value)
  {
  $this->setProperty('cvdFacilityCounty', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addCvdFacilityCounty($value)
  {
  $current = $this->getProperty('cvdFacilityCounty');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('cvdFacilityCounty', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getCvdFacilityCounty()
  {
  return $this->getProperty('cvdFacilityCounty');
  }


  /**
      * numc19mechventpats - HOSPITALIZED and VENTILATED: Patients hospitalized in an
 * NHSN inpatient care location who have suspected or confirmed COVID-19 and are
 * on a mechanical ventilator.
    * @param mixed $value
  * @return $this
  */
  public function cvdNumC19MechVentPats($value)
  {
  $this->setProperty('cvdNumC19MechVentPats', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function setCvdNumC19MechVentPats($value)
  {
  $this->setProperty('cvdNumC19MechVentPats', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function addCvdNumC19MechVentPats($value)
  {
  $current = $this->getProperty('cvdNumC19MechVentPats');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('cvdNumC19MechVentPats', $current);
  return $this;
  }

  /**
  * @return mixed
  */
  public function getCvdNumC19MechVentPats()
  {
  return $this->getProperty('cvdNumC19MechVentPats');
  }


  /**
      * Identifier of the NHSN facility that this data record applies to. Use
 * [[cvdFacilityCounty]] to indicate the county. To provide other details,
 * [[healthcareReportingData]] can be used on a [[Hospital]] entry.
    * @param string|array $value
  * @return $this
  */
  public function cvdFacilityId($value)
  {
  $this->setProperty('cvdFacilityId', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setCvdFacilityId($value)
  {
  $this->setProperty('cvdFacilityId', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addCvdFacilityId($value)
  {
  $current = $this->getProperty('cvdFacilityId');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('cvdFacilityId', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getCvdFacilityId()
  {
  return $this->getProperty('cvdFacilityId');
  }


  /**
      * numc19ofmechventpats - ED/OVERFLOW and VENTILATED: Patients with suspected or
 * confirmed COVID-19 who are in the ED or any overflow location awaiting an
 * inpatient bed and on a mechanical ventilator.
    * @param mixed $value
  * @return $this
  */
  public function cvdNumC19OFMechVentPats($value)
  {
  $this->setProperty('cvdNumC19OFMechVentPats', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function setCvdNumC19OFMechVentPats($value)
  {
  $this->setProperty('cvdNumC19OFMechVentPats', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function addCvdNumC19OFMechVentPats($value)
  {
  $current = $this->getProperty('cvdNumC19OFMechVentPats');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('cvdNumC19OFMechVentPats', $current);
  return $this;
  }

  /**
  * @return mixed
  */
  public function getCvdNumC19OFMechVentPats()
  {
  return $this->getProperty('cvdNumC19OFMechVentPats');
  }


  /**
      * numicubeds - ICU BEDS: Total number of staffed inpatient intensive care unit
 * (ICU) beds.
    * @param mixed $value
  * @return $this
  */
  public function cvdNumICUBeds($value)
  {
  $this->setProperty('cvdNumICUBeds', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function setCvdNumICUBeds($value)
  {
  $this->setProperty('cvdNumICUBeds', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function addCvdNumICUBeds($value)
  {
  $current = $this->getProperty('cvdNumICUBeds');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('cvdNumICUBeds', $current);
  return $this;
  }

  /**
  * @return mixed
  */
  public function getCvdNumICUBeds()
  {
  return $this->getProperty('cvdNumICUBeds');
  }


  /**
      * collectiondate - Date for which patient counts are reported.
    * @param string|array $value
  * @return $this
  */
  public function cvdCollectionDate($value)
  {
  $this->setProperty('cvdCollectionDate', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setCvdCollectionDate($value)
  {
  $this->setProperty('cvdCollectionDate', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addCvdCollectionDate($value)
  {
  $current = $this->getProperty('cvdCollectionDate');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('cvdCollectionDate', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getCvdCollectionDate()
  {
  return $this->getProperty('cvdCollectionDate');
  }


  /**
      * numc19died - DEATHS: Patients with suspected or confirmed COVID-19 who died
 * in the hospital, ED, or any overflow location.
    * @param mixed $value
  * @return $this
  */
  public function cvdNumC19Died($value)
  {
  $this->setProperty('cvdNumC19Died', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function setCvdNumC19Died($value)
  {
  $this->setProperty('cvdNumC19Died', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function addCvdNumC19Died($value)
  {
  $current = $this->getProperty('cvdNumC19Died');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('cvdNumC19Died', $current);
  return $this;
  }

  /**
  * @return mixed
  */
  public function getCvdNumC19Died()
  {
  return $this->getProperty('cvdNumC19Died');
  }


  /**
      * numvent - MECHANICAL VENTILATORS: Total number of ventilators available.
    * @param mixed $value
  * @return $this
  */
  public function cvdNumVent($value)
  {
  $this->setProperty('cvdNumVent', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function setCvdNumVent($value)
  {
  $this->setProperty('cvdNumVent', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function addCvdNumVent($value)
  {
  $current = $this->getProperty('cvdNumVent');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('cvdNumVent', $current);
  return $this;
  }

  /**
  * @return mixed
  */
  public function getCvdNumVent()
  {
  return $this->getProperty('cvdNumVent');
  }


}
