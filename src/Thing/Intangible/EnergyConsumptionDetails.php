<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

  use Sohophp\SchemaOrg\Thing\Intangible;
  use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\EnergyEfficiencyEnumeration\EUEnergyEfficiencyEnumeration;
  use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\EnergyEfficiencyEnumeration;

/**
  * EnergyConsumptionDetails represents information related to the energy
 * efficiency of a product that consumes energy. The information that can be
 * provided is based on international regulations such as for example [EU
 * directive 2017/1369](https://eur-lex.europa.eu/eli/reg/2017/1369/oj) for
 * energy labeling and the [Energy labeling
 * rule](https://www.ftc.gov/enforcement/rules/rulemaking-regulatory-reform-proceedings/energy-water-use-labeling-consumer)
 * under the Energy Policy and Conservation Act (EPCA) in the US.
  * @see schema:EnergyConsumptionDetails
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class EnergyConsumptionDetails extends Intangible
{


  /**
      * Specifies the least energy efficient class on the regulated EU energy
 * consumption scale for the product category a product belongs to. For example,
 * energy consumption for televisions placed on the market after January 1, 2020
 * is scaled from D to A+++.
    * @param EUEnergyEfficiencyEnumeration|array $value
  * @return $this
  */
  public function energyEfficiencyScaleMin($value)
  {
  $this->setProperty('energyEfficiencyScaleMin', $value);
  return $this;
  }

  /**
  * @param EUEnergyEfficiencyEnumeration|array $value
  * @return $this
  */
  public function setEnergyEfficiencyScaleMin($value)
  {
  $this->setProperty('energyEfficiencyScaleMin', $value);
  return $this;
  }

  /**
  * @param EUEnergyEfficiencyEnumeration $value
  * @return $this
  */
  public function addEnergyEfficiencyScaleMin($value)
  {
  $current = $this->getProperty('energyEfficiencyScaleMin');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('energyEfficiencyScaleMin', $current);
  return $this;
  }

  /**
  * @return EUEnergyEfficiencyEnumeration|array
  */
  public function getEnergyEfficiencyScaleMin()
  {
  return $this->getProperty('energyEfficiencyScaleMin');
  }


  /**
      * Specifies the most energy efficient class on the regulated EU energy
 * consumption scale for the product category a product belongs to. For example,
 * energy consumption for televisions placed on the market after January 1, 2020
 * is scaled from D to A+++.
    * @param EUEnergyEfficiencyEnumeration|array $value
  * @return $this
  */
  public function energyEfficiencyScaleMax($value)
  {
  $this->setProperty('energyEfficiencyScaleMax', $value);
  return $this;
  }

  /**
  * @param EUEnergyEfficiencyEnumeration|array $value
  * @return $this
  */
  public function setEnergyEfficiencyScaleMax($value)
  {
  $this->setProperty('energyEfficiencyScaleMax', $value);
  return $this;
  }

  /**
  * @param EUEnergyEfficiencyEnumeration $value
  * @return $this
  */
  public function addEnergyEfficiencyScaleMax($value)
  {
  $current = $this->getProperty('energyEfficiencyScaleMax');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('energyEfficiencyScaleMax', $current);
  return $this;
  }

  /**
  * @return EUEnergyEfficiencyEnumeration|array
  */
  public function getEnergyEfficiencyScaleMax()
  {
  return $this->getProperty('energyEfficiencyScaleMax');
  }


  /**
      * Defines the energy efficiency Category (which could be either a rating out of
 * range of values or a yes/no certification) for a product according to an
 * international energy efficiency standard.
    * @param EnergyEfficiencyEnumeration|array $value
  * @return $this
  */
  public function hasEnergyEfficiencyCategory($value)
  {
  $this->setProperty('hasEnergyEfficiencyCategory', $value);
  return $this;
  }

  /**
  * @param EnergyEfficiencyEnumeration|array $value
  * @return $this
  */
  public function setHasEnergyEfficiencyCategory($value)
  {
  $this->setProperty('hasEnergyEfficiencyCategory', $value);
  return $this;
  }

  /**
  * @param EnergyEfficiencyEnumeration $value
  * @return $this
  */
  public function addHasEnergyEfficiencyCategory($value)
  {
  $current = $this->getProperty('hasEnergyEfficiencyCategory');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('hasEnergyEfficiencyCategory', $current);
  return $this;
  }

  /**
  * @return EnergyEfficiencyEnumeration|array
  */
  public function getHasEnergyEfficiencyCategory()
  {
  return $this->getProperty('hasEnergyEfficiencyCategory');
  }


}
