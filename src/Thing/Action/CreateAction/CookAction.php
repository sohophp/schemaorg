<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Action\CreateAction;

use Sohophp\SchemaOrg\Thing\Action\CreateAction;
use Sohophp\SchemaOrg\Thing\CreativeWork\HowTo\Recipe;
use Sohophp\SchemaOrg\Thing\Event\FoodEvent;
use Sohophp\SchemaOrg\Thing\Place;
use Sohophp\SchemaOrg\Thing\Organization\LocalBusiness\FoodEstablishment;

/**
 * The act of producing/preparing food.
 *
 * @see http://schema.org/CookAction
 */
class CookAction extends CreateAction
{
    /**
     * A sub property of instrument. The recipe/instructions used to perform the action.
     *
     * @param Recipe $value
     *
     * @return $this
     */
    public function recipe(?Recipe $value): self
    {
        $this->setProperty('recipe', $value);

        return $this;
    }

    /**
     * A sub property of location. The specific food event where the action occurred.
     *
     * @param FoodEvent $value
     *
     * @return $this
     */
    public function foodEvent(?FoodEvent $value): self
    {
        $this->setProperty('foodEvent', $value);

        return $this;
    }

    /**
     * A sub property of location. The specific food establishment where the action occurred.
     *
     * @param Place|FoodEstablishment $value
     *
     * @return $this
     */
    public function foodEstablishment($value): self
    {
        $this->setProperty('foodEstablishment', $value);

        return $this;
    }
}
