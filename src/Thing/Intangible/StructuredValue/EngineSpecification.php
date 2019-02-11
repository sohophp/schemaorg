<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\QualitativeValue;

/**
* Information about the engine of the vehicle. A vehicle can have multiple engines represented by multiple engine specification entities.
* @see http://schema.org/EngineSpecification
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue
*/
class EngineSpecification extends StructuredValue
{

    /**
    * The type of fuel suitable for the engine or engines of the vehicle. If the vehicle has only one engine, this property can be attached directly to the vehicle.
    * @param string|QualitativeValue|string $value
    * @return $this
    */
    public function fuelType($value)
    {
        $this->setProperty('fuelType', $value);
        return $this;
    }


}

