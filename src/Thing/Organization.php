<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing;

use Sohophp\SchemaOrg\Thing;

/**
 * An organization such as a school, NGO, corporation, club, etc.
 *
 * @see http://schema.org/Organization
 */
class Organization extends Thing
{
    /**
     * A relationship between two organizations where the first includes the second, e.g., as a subsidiary. See also: the more specific 'department' property.
     *
     * @param Organization $value
     *
     * @return $this
     */
    public function subOrganization(?Organization $value): self
    {
        $this->setProperty('subOrganization', $value);

        return $this;
    }

    /**
     * An organization identifier that uniquely identifies a legal entity as defined in ISO 17442.
     *
     * @param string $value
     *
     * @return $this
     */
    public function leiCode(?string $value): self
    {
        $this->setProperty('leiCode', $value);

        return $this;
    }

    /**
     * A person who founded this organization.
     *
     * @param Person $value
     *
     * @return $this
     */
    public function founders(?Person $value): self
    {
        $this->setProperty('founders', $value);

        return $this;
    }

    /**
     * The date that this organization was dissolved.
     *
     * @param \DateTimeInterface $value
     *
     * @return $this
     */
    public function dissolutionDate(?\DateTimeInterface $value): self
    {
        $this->setProperty('dissolutionDate', $value);

        return $this;
    }

    /**
     * People working for this organization.
     *
     * @param Person $value
     *
     * @return $this
     */
    public function employees(?Person $value): self
    {
        $this->setProperty('employees', $value);

        return $this;
    }

    /**
     * A relationship between an organization and a department of that organization, also described as an organization (allowing different urls, logos, opening hours). For example: a store with a pharmacy, or a bakery with a cafe.
     *
     * @param Organization $value
     *
     * @return $this
     */
    public function department(?Organization $value): self
    {
        $this->setProperty('department', $value);

        return $this;
    }

    /**
     * The larger organization that this organization is a <a class="localLink" href="http://schema.org/subOrganization">subOrganization</a> of, if any.
     *
     * @param Organization $value
     *
     * @return $this
     */
    public function parentOrganization(?Organization $value): self
    {
        $this->setProperty('parentOrganization', $value);

        return $this;
    }

    /**
     * The official name of the organization, e.g. the registered company name.
     *
     * @param string $value
     *
     * @return $this
     */
    public function legalName(?string $value): self
    {
        $this->setProperty('legalName', $value);

        return $this;
    }

    /**
     * The date that this organization was founded.
     *
     * @param \DateTimeInterface $value
     *
     * @return $this
     */
    public function foundingDate(?\DateTimeInterface $value): self
    {
        $this->setProperty('foundingDate', $value);

        return $this;
    }

    /**
     * Someone working for this organization.
     *
     * @param Person $value
     *
     * @return $this
     */
    public function employee(?Person $value): self
    {
        $this->setProperty('employee', $value);

        return $this;
    }

    /**
     * The place where the Organization was founded.
     *
     * @param Place $value
     *
     * @return $this
     */
    public function foundingLocation(?Place $value): self
    {
        $this->setProperty('foundingLocation', $value);

        return $this;
    }

    /**
     * A person who founded this organization.
     *
     * @param Person $value
     *
     * @return $this
     */
    public function founder(?Person $value): self
    {
        $this->setProperty('founder', $value);

        return $this;
    }
}
