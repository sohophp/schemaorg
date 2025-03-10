<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Intangible\Offer;

/**
* A subscription which allows a user to access media including audio, video,
 * books, etc.
* @see http://schema.org/MediaSubscription
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class MediaSubscription extends Intangible
{


    /**
        * The Organization responsible for authenticating the user's subscription. For
 * example, many media apps require a cable/satellite provider to authenticate
 * your subscription before playing media.
        * @param Organization|array|string|mixed $value
    * @return $this
    */
    public function authenticator($value)
    {
        $this->setProperty('authenticator', $value);
        return $this;
    }

    /**
    * @param Organization|array|string|mixed $value
    * @return $this
    */
    public function setAuthenticator($value)
    {
        $this->setProperty('authenticator', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAuthenticator()
    {
       return $this->getProperty('authenticator');
    }


    /**
        * An Offer which must be accepted before the user can perform the Action. For
 * example, the user may need to buy a movie before being able to watch it.
        * @param Offer|array|string|mixed $value
    * @return $this
    */
    public function expectsAcceptanceOf($value)
    {
        $this->setProperty('expectsAcceptanceOf', $value);
        return $this;
    }

    /**
    * @param Offer|array|string|mixed $value
    * @return $this
    */
    public function setExpectsAcceptanceOf($value)
    {
        $this->setProperty('expectsAcceptanceOf', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getExpectsAcceptanceOf()
    {
       return $this->getProperty('expectsAcceptanceOf');
    }


}
