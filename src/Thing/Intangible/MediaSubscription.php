<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\Intangible\Offer;
use Sohophp\SchemaOrg\Thing\Organization;

/**
 * A subscription which allows a user to access media including audio, video, books, etc.
 * @see https://schema.org/MediaSubscription
 * @package Sohophp\SchemaOrg\Thing\Intangible
 */
class MediaSubscription extends Intangible
{
    /**
     * An Offer which must be accepted before the user can perform the Action. For example, the user may need to buy a movie before being able to watch it.
     * @see https://schema.org/expectsAcceptanceOf
     * @param Offer|array $value
     * @return $this
     */
    public function expectsAcceptanceOf($value)
    {
        $this->setProperty('expectsAcceptanceOf', $value);
        return $this;
    }

    /**
     * @param Offer|array $value
     * @return $this
     */
    public function setExpectsAcceptanceOf($value)
    {
        $this->setProperty('expectsAcceptanceOf', $value);
        return $this;
    }

    /**
     * @param Offer $value
     * @return $this
     */
    public function addExpectsAcceptanceOf($value)
    {
        $current = $this->getProperty('expectsAcceptanceOf');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('expectsAcceptanceOf', $current);
        return $this;
    }

    /**
     * @return Offer|array
     */
    public function getExpectsAcceptanceOf()
    {
        return $this->getProperty('expectsAcceptanceOf');
    }
    /**
     * The Organization responsible for authenticating the user's subscription. For example, many media apps require a cable/satellite provider to authenticate your subscription before playing media.
     * @see https://schema.org/authenticator
     * @param Organization|array $value
     * @return $this
     */
    public function authenticator($value)
    {
        $this->setProperty('authenticator', $value);
        return $this;
    }

    /**
     * @param Organization|array $value
     * @return $this
     */
    public function setAuthenticator($value)
    {
        $this->setProperty('authenticator', $value);
        return $this;
    }

    /**
     * @param Organization $value
     * @return $this
     */
    public function addAuthenticator($value)
    {
        $current = $this->getProperty('authenticator');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('authenticator', $current);
        return $this;
    }

    /**
     * @return Organization|array
     */
    public function getAuthenticator()
    {
        return $this->getProperty('authenticator');
    }
}
