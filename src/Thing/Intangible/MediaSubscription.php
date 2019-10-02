<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Intangible\Offer;

/**
* A subscription which allows a user to access media including audio, video, books, etc.
* @see http://schema.org/MediaSubscription
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class MediaSubscription extends Intangible
{

    /**
    * The Organization responsible for authenticating the user's subscription. For example, many media apps require a cable/satellite provider to authenticate your subscription before playing media.
    * @param Organization $value
    * @return $this
    */
    public function authenticator(?Organization $value)
    {
        $this->setProperty('authenticator', $value);
        return $this;
    }

    /**
    * An Offer which must be accepted before the user can perform the Action. For example, the user may need to buy a movie before being able to watch it.
    * @param Offer $value
    * @return $this
    */
    public function expectsAcceptanceOf(?Offer $value)
    {
        $this->setProperty('expectsAcceptanceOf', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\MediaSubscription','Thing\\MediaSubscription');

