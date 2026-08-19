<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Intangible\Audience;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint;

/**
 * A single message from a sender to one or more organizations or people.
 * @see https://schema.org/Message
 * @package Sohophp\SchemaOrg\Thing\CreativeWork
 */
class Message extends CreativeWork
{
    /**
     * A sub property of participant. The participant who is at the sending end of the action.
     * @see https://schema.org/sender
     * @param Organization|Person|Audience|array $value
     * @return $this
     */
    public function sender($value)
    {
        $this->setProperty('sender', $value);
        return $this;
    }

    /**
     * @param Organization|Person|Audience|array $value
     * @return $this
     */
    public function setSender($value)
    {
        $this->setProperty('sender', $value);
        return $this;
    }

    /**
     * @param Organization|Person|Audience $value
     * @return $this
     */
    public function addSender($value)
    {
        $current = $this->getProperty('sender');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('sender', $current);
        return $this;
    }

    /**
     * @return Organization|Person|Audience|array
     */
    public function getSender()
    {
        return $this->getProperty('sender');
    }
    /**
     * A sub property of recipient. The recipient copied on a message.
     * @see https://schema.org/ccRecipient
     * @param Organization|Person|ContactPoint|array $value
     * @return $this
     */
    public function ccRecipient($value)
    {
        $this->setProperty('ccRecipient', $value);
        return $this;
    }

    /**
     * @param Organization|Person|ContactPoint|array $value
     * @return $this
     */
    public function setCcRecipient($value)
    {
        $this->setProperty('ccRecipient', $value);
        return $this;
    }

    /**
     * @param Organization|Person|ContactPoint $value
     * @return $this
     */
    public function addCcRecipient($value)
    {
        $current = $this->getProperty('ccRecipient');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('ccRecipient', $current);
        return $this;
    }

    /**
     * @return Organization|Person|ContactPoint|array
     */
    public function getCcRecipient()
    {
        return $this->getProperty('ccRecipient');
    }
    /**
     * The date/time at which the message has been read by the recipient if a single recipient exists.
     * @see https://schema.org/dateRead
     * @param mixed $value
     * @return $this
     */
    public function dateRead($value)
    {
        $this->setProperty('dateRead', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setDateRead($value)
    {
        $this->setProperty('dateRead', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function addDateRead($value)
    {
        $current = $this->getProperty('dateRead');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('dateRead', $current);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDateRead()
    {
        return $this->getProperty('dateRead');
    }
    /**
     * A CreativeWork attached to the message.
     * @see https://schema.org/messageAttachment
     * @param CreativeWork|array $value
     * @return $this
     */
    public function messageAttachment($value)
    {
        $this->setProperty('messageAttachment', $value);
        return $this;
    }

    /**
     * @param CreativeWork|array $value
     * @return $this
     */
    public function setMessageAttachment($value)
    {
        $this->setProperty('messageAttachment', $value);
        return $this;
    }

    /**
     * @param CreativeWork $value
     * @return $this
     */
    public function addMessageAttachment($value)
    {
        $current = $this->getProperty('messageAttachment');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('messageAttachment', $current);
        return $this;
    }

    /**
     * @return CreativeWork|array
     */
    public function getMessageAttachment()
    {
        return $this->getProperty('messageAttachment');
    }
    /**
     * The date/time at which the message was sent.
     * @see https://schema.org/dateSent
     * @param mixed $value
     * @return $this
     */
    public function dateSent($value)
    {
        $this->setProperty('dateSent', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setDateSent($value)
    {
        $this->setProperty('dateSent', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function addDateSent($value)
    {
        $current = $this->getProperty('dateSent');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('dateSent', $current);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDateSent()
    {
        return $this->getProperty('dateSent');
    }
    /**
     * A sub property of recipient. The recipient blind copied on a message.
     * @see https://schema.org/bccRecipient
     * @param Organization|Person|ContactPoint|array $value
     * @return $this
     */
    public function bccRecipient($value)
    {
        $this->setProperty('bccRecipient', $value);
        return $this;
    }

    /**
     * @param Organization|Person|ContactPoint|array $value
     * @return $this
     */
    public function setBccRecipient($value)
    {
        $this->setProperty('bccRecipient', $value);
        return $this;
    }

    /**
     * @param Organization|Person|ContactPoint $value
     * @return $this
     */
    public function addBccRecipient($value)
    {
        $current = $this->getProperty('bccRecipient');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('bccRecipient', $current);
        return $this;
    }

    /**
     * @return Organization|Person|ContactPoint|array
     */
    public function getBccRecipient()
    {
        return $this->getProperty('bccRecipient');
    }
    /**
     * A sub property of participant. The participant who is at the receiving end of the action.
     * @see https://schema.org/recipient
     * @param Organization|Person|ContactPoint|Audience|array $value
     * @return $this
     */
    public function recipient($value)
    {
        $this->setProperty('recipient', $value);
        return $this;
    }

    /**
     * @param Organization|Person|ContactPoint|Audience|array $value
     * @return $this
     */
    public function setRecipient($value)
    {
        $this->setProperty('recipient', $value);
        return $this;
    }

    /**
     * @param Organization|Person|ContactPoint|Audience $value
     * @return $this
     */
    public function addRecipient($value)
    {
        $current = $this->getProperty('recipient');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('recipient', $current);
        return $this;
    }

    /**
     * @return Organization|Person|ContactPoint|Audience|array
     */
    public function getRecipient()
    {
        return $this->getProperty('recipient');
    }
    /**
     * The date/time the message was received if a single recipient exists.
     * @see https://schema.org/dateReceived
     * @param mixed $value
     * @return $this
     */
    public function dateReceived($value)
    {
        $this->setProperty('dateReceived', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setDateReceived($value)
    {
        $this->setProperty('dateReceived', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function addDateReceived($value)
    {
        $current = $this->getProperty('dateReceived');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('dateReceived', $current);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDateReceived()
    {
        return $this->getProperty('dateReceived');
    }
    /**
     * A sub property of recipient. The recipient who was directly sent the message.
     * @see https://schema.org/toRecipient
     * @param Organization|Person|ContactPoint|Audience|array $value
     * @return $this
     */
    public function toRecipient($value)
    {
        $this->setProperty('toRecipient', $value);
        return $this;
    }

    /**
     * @param Organization|Person|ContactPoint|Audience|array $value
     * @return $this
     */
    public function setToRecipient($value)
    {
        $this->setProperty('toRecipient', $value);
        return $this;
    }

    /**
     * @param Organization|Person|ContactPoint|Audience $value
     * @return $this
     */
    public function addToRecipient($value)
    {
        $current = $this->getProperty('toRecipient');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('toRecipient', $current);
        return $this;
    }

    /**
     * @return Organization|Person|ContactPoint|Audience|array
     */
    public function getToRecipient()
    {
        return $this->getProperty('toRecipient');
    }
}
