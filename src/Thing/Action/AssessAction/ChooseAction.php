<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Action\AssessAction;

use Sohophp\SchemaOrg\Thing\Action\AssessAction;
use Sohophp\SchemaOrg\Thing;

/**
 * The act of expressing a preference from a set of options or a large or unbounded set of choices/options.
 *
 * @see http://schema.org/ChooseAction
 */
class ChooseAction extends AssessAction
{
    /**
     * A sub property of object. The options subject to this action.
     *
     * @param Thing|string $value
     *
     * @return $this
     */
    public function actionOption($value): self
    {
        $this->setProperty('actionOption', $value);

        return $this;
    }

    /**
     * A sub property of object. The options subject to this action.
     *
     * @param string|Thing $value
     *
     * @return $this
     */
    public function option($value): self
    {
        $this->setProperty('option', $value);

        return $this;
    }
}
