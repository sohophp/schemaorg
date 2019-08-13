<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;

/**
* Quantities such as distance, time, mass, weight, etc. Particular instances of say Mass are entities like '3 Kg' or '4 milligrams'.
* @see http://schema.org/Quantity
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class Quantity extends Intangible
{


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\Quantity','Thing\\Quantity');

