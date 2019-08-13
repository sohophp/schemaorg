<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Intangible\Quantity;

use Sohophp\SchemaOrg\Thing\Intangible\Quantity;

/**
* Properties that take Distances as values are of the form '&lt;Number&gt; &lt;Length unit of measure&gt;'. E.g., '7 ft'.
* @see http://schema.org/Distance
* @package Sohophp\SchemaOrg\Thing\Intangible\Quantity
*/
class Distance extends Quantity
{


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\Quantity\\Distance','Thing\\Distance');

