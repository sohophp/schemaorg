<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;
use Sohophp\SchemaOrg\Thing\Intangible\Quantity\Mass;
use Sohophp\SchemaOrg\Thing\Intangible\Quantity\Energy;

/**
 * Nutritional information about the recipe.
 *
 * @see http://schema.org/NutritionInformation
 */
class NutritionInformation extends StructuredValue
{
    /**
     * The number of grams of saturated fat.
     *
     * @param Mass $value
     *
     * @return $this
     */
    public function saturatedFatContent(?Mass $value): self
    {
        $this->setProperty('saturatedFatContent', $value);

        return $this;
    }

    /**
     * The number of grams of fat.
     *
     * @param Mass $value
     *
     * @return $this
     */
    public function fatContent(?Mass $value): self
    {
        $this->setProperty('fatContent', $value);

        return $this;
    }

    /**
     * The number of grams of unsaturated fat.
     *
     * @param Mass $value
     *
     * @return $this
     */
    public function unsaturatedFatContent(?Mass $value): self
    {
        $this->setProperty('unsaturatedFatContent', $value);

        return $this;
    }

    /**
     * The number of grams of sugar.
     *
     * @param Mass $value
     *
     * @return $this
     */
    public function sugarContent(?Mass $value): self
    {
        $this->setProperty('sugarContent', $value);

        return $this;
    }

    /**
     * The number of milligrams of cholesterol.
     *
     * @param Mass $value
     *
     * @return $this
     */
    public function cholesterolContent(?Mass $value): self
    {
        $this->setProperty('cholesterolContent', $value);

        return $this;
    }

    /**
     * The number of grams of carbohydrates.
     *
     * @param Mass $value
     *
     * @return $this
     */
    public function carbohydrateContent(?Mass $value): self
    {
        $this->setProperty('carbohydrateContent', $value);

        return $this;
    }

    /**
     * The number of grams of protein.
     *
     * @param Mass $value
     *
     * @return $this
     */
    public function proteinContent(?Mass $value): self
    {
        $this->setProperty('proteinContent', $value);

        return $this;
    }

    /**
     * The number of milligrams of sodium.
     *
     * @param Mass $value
     *
     * @return $this
     */
    public function sodiumContent(?Mass $value): self
    {
        $this->setProperty('sodiumContent', $value);

        return $this;
    }

    /**
     * The number of grams of trans fat.
     *
     * @param Mass $value
     *
     * @return $this
     */
    public function transFatContent(?Mass $value): self
    {
        $this->setProperty('transFatContent', $value);

        return $this;
    }

    /**
     * The number of grams of fiber.
     *
     * @param Mass $value
     *
     * @return $this
     */
    public function fiberContent(?Mass $value): self
    {
        $this->setProperty('fiberContent', $value);

        return $this;
    }

    /**
     * The number of calories.
     *
     * @param Energy $value
     *
     * @return $this
     */
    public function calories(?Energy $value): self
    {
        $this->setProperty('calories', $value);

        return $this;
    }

    /**
     * The serving size, in terms of the number of volume or mass.
     *
     * @param string $value
     *
     * @return $this
     */
    public function servingSize(?string $value): self
    {
        $this->setProperty('servingSize', $value);

        return $this;
    }
}
