<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Product\Vehicle;

use Sohophp\SchemaOrg\Thing\Product\Vehicle;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;

/**
* A car is a wheeled, self-powered motor vehicle used for transportation.
* @see http://schema.org/Car
* @package Sohophp\SchemaOrg\Thing\Product\Vehicle
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

    * @param QuantitativeValue $value
    * @return $this
    */
    public function roofLoad(?QuantitativeValue $value)
    {
        $this->setProperty('roofLoad', $value);
        return $this;
    }

    /**
    * The ACRISS Car Classification Code is a code used by many car rental companies, for classifying vehicles. ACRISS stands for Association of Car Rental Industry Systems and Standards.
    * @param string $value
    * @return $this
    */
    public function acrissCode(?string $value)
    {
        $this->setProperty('acrissCode', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Product\\Vehicle\\Car','Thing\\Car');

