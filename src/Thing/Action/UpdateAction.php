<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Action;

use Sohophp\SchemaOrg\Thing\Action;
use Sohophp\SchemaOrg\Thing;

/**
 * The act of managing by changing/editing the state of the object.
 *
 * @see http://schema.org/UpdateAction
 */
class UpdateAction extends Action
{
    /**
     * A sub property of object. The collection target of the action.
     *
     * @param Thing $value
     *
     * @return $this
     */
    public function collection(?Thing $value): self
    {
        $this->setProperty('collection', $value);

        return $this;
    }

    /**
     * A sub property of object. The collection target of the action.
     *
     * @param Thing $value
     *
     * @return $this
     */
    public function targetCollection(?Thing $value): self
    {
        $this->setProperty('targetCollection', $value);

        return $this;
    }
}
