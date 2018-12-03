<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing;

use Sohophp\SchemaOrg\Thing;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\ActionStatusType;
use Sohophp\SchemaOrg\Thing\Intangible\EntryPoint;

/**
 * An action performed by a direct agent and indirect participants upon a direct object. Optionally happens at a location with the help of an inanimate instrument. The execution of the action may produce a result. Specific action sub-type documentation specifies the exact expectation of each argument/role.<br/><br/>.
See also <a href="http://blog.schema.org/2014/04/announcing-schemaorg-actions.html">blog post</a> and <a href="http://schema.org/docs/actions.html">Actions overview document</a>.
 * @see http://schema.org/Action
 */
class Action extends Thing
{
    /**
     * The result produced in the action. e.g. John wrote <em>a book</em>.
     *
     * @param Thing $value
     *
     * @return $this
     */
    public function result(?Thing $value): self
    {
        $this->setProperty('result', $value);

        return $this;
    }

    /**
     * Indicates the current disposition of the Action.
     *
     * @param ActionStatusType $value
     *
     * @return $this
     */
    public function actionStatus(?ActionStatusType $value): self
    {
        $this->setProperty('actionStatus', $value);

        return $this;
    }

    /**
     * Indicates a target EntryPoint for an Action.
     *
     * @param EntryPoint $value
     *
     * @return $this
     */
    public function target(?EntryPoint $value): self
    {
        $this->setProperty('target', $value);

        return $this;
    }

    /**
     * The direct performer or driver of the action (animate or inanimate). e.g. <em>John</em> wrote a book.
     *
     * @param Organization|Person $value
     *
     * @return $this
     */
    public function agent($value): self
    {
        $this->setProperty('agent', $value);

        return $this;
    }

    /**
     * The object that helped the agent perform the action. e.g. John wrote a book with <em>a pen</em>.
     *
     * @param Thing $value
     *
     * @return $this
     */
    public function instrument(?Thing $value): self
    {
        $this->setProperty('instrument', $value);

        return $this;
    }

    /**
     * Other co-agents that participated in the action indirectly. e.g. John wrote a book with <em>Steve</em>.
     *
     * @param Organization|Person $value
     *
     * @return $this
     */
    public function participant($value): self
    {
        $this->setProperty('participant', $value);

        return $this;
    }

    /**
     * The object upon which the action is carried out, whose state is kept intact or changed. Also known as the semantic roles patient, affected or undergoer (which change their state) or theme (which doesn't). e.g. John read <em>a book</em>.
     *
     * @param Thing $value
     *
     * @return $this
     */
    public function object(?Thing $value): self
    {
        $this->setProperty('object', $value);

        return $this;
    }

    /**
     * For failed actions, more information on the cause of the failure.
     *
     * @param Thing $value
     *
     * @return $this
     */
    public function error(?Thing $value): self
    {
        $this->setProperty('error', $value);

        return $this;
    }
}
