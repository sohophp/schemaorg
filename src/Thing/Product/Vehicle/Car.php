<?php
namespace Sohophp\SchemaOrg\Thing\Product\Vehicle;

use Sohophp\SchemaOrg\Thing\Product\Vehicle;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;

/**
* A car is a wheeled, self-powered motor vehicle used for transportation.
* @see http://schema.org/Car
* @package Sohophp\SchemaOrg\Thing\Product\Vehicle

*
*/
class Car extends Vehicle
{

    /**
    * The permitted total weight of cargo and installations (e.g. a roof rack) on top of the vehicle.<br/><br/>

Typical unit code(s): KGM for kilogram, LBR for pound<br/><br/>

<ul>
<li>Note 1: You can indicate additional information in the <a class="localLink" href="http://schema.org/name">name</a> of the <a class="localLink" href="http://schema.org/QuantitativeValue">QuantitativeValue</a> node.</li>
<li>Note 2: You may also link to a <a class="localLink" href="http://schema.org/QualitativeValue">QualitativeValue</a> node that provides additional information using <a class="localLink" href="http://schema.org/valueReference">valueReference</a></li>
<li>Note 3: Note that you can use <a class="localLink" href="http://schema.org/minValue">minValue</a> and <a class="localLink" href="http://schema.org/maxValue">maxValue</a> to indicate ranges.</li>
</ul>

    * @param QuantitativeValue|array|string $value
    * @return $this
    * @deprecated use setRoofLoad
    */
    public function roofLoad($value)
    {
        $this->setProperty('roofLoad', $value);
        return $this;
    }
   /**
    * @param QuantitativeValue|array|string $value
    * @return $this
    */
    public function setRoofLoad($value)
    {
        $this->setProperty('roofLoad', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getRoofLoad()
    {
       return $this->getProperty('roofLoad');
    }

    /**
    * The ACRISS Car Classification Code is a code used by many car rental companies, for classifying vehicles. ACRISS stands for Association of Car Rental Industry Systems and Standards.
    * @param string|array $value
    * @return $this
    * @deprecated use setAcrissCode
    */
    public function acrissCode($value)
    {
        $this->setProperty('acrissCode', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setAcrissCode($value)
    {
        $this->setProperty('acrissCode', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAcrissCode()
    {
       return $this->getProperty('acrissCode');
    }


}
