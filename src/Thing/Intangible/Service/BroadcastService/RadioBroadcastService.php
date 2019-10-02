<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Intangible\Service\BroadcastService;

use Sohophp\SchemaOrg\Thing\Intangible\Service\BroadcastService;

/**
* A delivery service through which radio content is provided via broadcast over the air or online.
* @see http://schema.org/RadioBroadcastService
* @package Sohophp\SchemaOrg\Thing\Intangible\Service\BroadcastService
*/
class RadioBroadcastService extends BroadcastService
{

    /**
    * The official callsign for the radio broadcast.
    * @param string $value
    * @return $this
    */
    public function callSign(?string $value)
    {
        $this->setProperty('callSign', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\Service\\BroadcastService\\RadioBroadcastService','Thing\\RadioBroadcastService');

