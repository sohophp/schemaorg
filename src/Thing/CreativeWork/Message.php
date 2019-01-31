<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Intangible\Audience;

/**
 * A single message from a sender to one or more organizations or people.
 *
 * @see http://schema.org/Message
 */
class Message extends CreativeWork
{
    /**
     * The date/time at which the message has been read by the recipient if a single recipient exists.
     *
     * @param  $value
     *
     * @return $this
     */
    public function dateRead($value): self
    {
        $this->setProperty('dateRead', $value);

        return $this;
    }

    /**
     * A sub property of recipient. The recipient blind copied on a message.
     *
     * @param ContactPoint|Organization|Person $value
     *
     * @return $this
     */
    public function bccRecipient($value): self
    {
        $this->setProperty('bccRecipient', $value);

        return $this;
    }

    /**
     * The date/time at which the message was sent.
     *
     * @param  $value
     *
     * @return $this
     */
    public function dateSent($value): self
    {
        $this->setProperty('dateSent', $value);

        return $this;
    }

    /**
     * A sub property of recipient. The recipient copied on a message.
     *
     * @param Person|Organization|ContactPoint $value
     *
     * @return $this
     */
    public function ccRecipient($value): self
    {
        $this->setProperty('ccRecipient', $value);

        return $this;
    }

    /**
     * A CreativeWork attached to the message.
     *
     * @param CreativeWork $value
     *
     * @return $this
     */
    public function messageAttachment(?CreativeWork $value): self
    {
        $this->setProperty('messageAttachment', $value);

        return $this;
    }

    /**
     * The date/time the message was received if a single recipient exists.
     *
     * @param  $value
     *
     * @return $this
     */
    public function dateReceived($value): self
    {
        $this->setProperty('dateReceived', $value);

        return $this;
    }

    /**
     * A sub property of recipient. The recipient who was directly sent the message.
     *
     * @param Organization|Person|ContactPoint|Audience $value
     *
     * @return $this
     */
    public function toRecipient($value): self
    {
        $this->setProperty('toRecipient', $value);

        return $this;
    }
}
