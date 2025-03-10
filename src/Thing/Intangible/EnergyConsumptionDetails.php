<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;

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
        * @param array|string|mixed $value
    * @return $this
    */
    public function energyEfficiencyScaleMin($value)
    {
        $this->setProperty('energyEfficiencyScaleMin', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setEnergyEfficiencyScaleMin($value)
    {
        $this->setProperty('energyEfficiencyScaleMin', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
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
        * @param array|string|mixed $value
    * @return $this
    */
    public function energyEfficiencyScaleMax($value)
    {
        $this->setProperty('energyEfficiencyScaleMax', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setEnergyEfficiencyScaleMax($value)
    {
        $this->setProperty('energyEfficiencyScaleMax', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEnergyEfficiencyScaleMax()
    {
       return $this->getProperty('energyEfficiencyScaleMax');
    }


    /**
        * Defines the energy efficiency Category (which could be either a rating out of
 * range of values or a yes/no certification) for a product according to an
 * international energy efficiency standard.
        * @param array|string|mixed $value
    * @return $this
    */
    public function hasEnergyEfficiencyCategory($value)
    {
        $this->setProperty('hasEnergyEfficiencyCategory', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setHasEnergyEfficiencyCategory($value)
    {
        $this->setProperty('hasEnergyEfficiencyCategory', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getHasEnergyEfficiencyCategory()
    {
       return $this->getProperty('hasEnergyEfficiencyCategory');
    }


}
