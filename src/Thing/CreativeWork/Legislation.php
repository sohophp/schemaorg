<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\LegalForceStatus;
use Sohophp\SchemaOrg\Thing\Place\AdministrativeArea;
use Sohophp\SchemaOrg\Thing\Intangible\DefinedTerm\CategoryCode;

/**
* A legal document such as an act, decree, bill, etc. (enforceable or not) or a component of a legal act (like an article).
* @see http://schema.org/Legislation
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class Legislation extends CreativeWork
{

    /**
    * An identifier for the legislation. This can be either a string-based identifier, like the CELEX at EU level or the NOR in France, or a web-based, URL/URI identifier, like an ELI (European Legislation Identifier) or an URN-Lex.
    * @param string|string $value
    * @return $this
    */
    public function legislationIdentifier($value)
    {
        $this->setProperty('legislationIdentifier', $value);
        return $this;
    }

    /**
    * Indicates that this legislation (or part of legislation) fulfills the objectives set by another legislation, by passing appropriate implementation measures. Typically, some legislations of European Union's member states or regions transpose European Directives. This indicates a legally binding link between the 2 legislations.
    * @param Legislation $value
    * @return $this
    */
    public function legislationTransposes(?Legislation $value)
    {
        $this->setProperty('legislationTransposes', $value);
        return $this;
    }

    /**
    * Indicates another legislation taken into account in this consolidated legislation (which is usually the product of an editorial process that revises the legislation). This property should be used multiple times to refer to both the original version or the previous consolidated version, and to the legislations making the change.
    * @param Legislation $value
    * @return $this
    */
    public function legislationConsolidates(?Legislation $value)
    {
        $this->setProperty('legislationConsolidates', $value);
        return $this;
    }

    /**
    * Indicates that this legislation (or part of a legislation) somehow transfers another legislation in a different legislative context. This is an informative link, and it has no legal value. For legally-binding links of transposition, use the <a href="/legislationTransposes">legislationTransposes</a> property. For example an informative consolidated law of a European Union's member state "applies" the consolidated version of the European Directive implemented in it.
    * @param Legislation $value
    * @return $this
    */
    public function legislationApplies(?Legislation $value)
    {
        $this->setProperty('legislationApplies', $value);
        return $this;
    }

    /**
    * An individual or organization that has some kind of responsibility for the legislation. Typically the ministry who is/was in charge of elaborating the legislation, or the adressee for potential questions about the legislation once it is published.
    * @param Organization|Person $value
    * @return $this
    */
    public function legislationResponsible($value)
    {
        $this->setProperty('legislationResponsible', $value);
        return $this;
    }

    /**
    * Whether the legislation is currently in force, not in force, or partially in force.
    * @param LegalForceStatus $value
    * @return $this
    */
    public function legislationLegalForce(?LegalForceStatus $value)
    {
        $this->setProperty('legislationLegalForce', $value);
        return $this;
    }

    /**
    * The point-in-time at which the provided description of the legislation is valid (e.g. : when looking at the law on the 2016-04-07 (= dateVersion), I get the consolidation of 2015-04-12 of the "National Insurance Contributions Act 2015")
    * @param  $value
    * @return $this
    */
    public function legislationDateVersion($value)
    {
        $this->setProperty('legislationDateVersion', $value);
        return $this;
    }

    /**
    * The date of adoption or signature of the legislation. This is the date at which the text is officially aknowledged to be a legislation, even though it might not even be published or in force.
    * @param  $value
    * @return $this
    */
    public function legislationDate($value)
    {
        $this->setProperty('legislationDate', $value);
        return $this;
    }

    /**
    * The jurisdiction from which the legislation originates.
    * @param string|AdministrativeArea $value
    * @return $this
    */
    public function legislationJurisdiction($value)
    {
        $this->setProperty('legislationJurisdiction', $value);
        return $this;
    }

    /**
    * The type of the legislation. Examples of values are "law", "act", "directive", "decree", "regulation", "statutory instrument", "loi organique", "règlement grand-ducal", etc., depending on the country.
    * @param string|CategoryCode $value
    * @return $this
    */
    public function legislationType($value)
    {
        $this->setProperty('legislationType', $value);
        return $this;
    }

    /**
    * Another legislation that this legislation changes. This encompasses the notions of amendment, replacement, correction, repeal, or other types of change. This may be a direct change (textual or non-textual amendment) or a consequential or indirect change. The property is to be used to express the existence of a change relationship between two acts rather than the existence of a consolidated version of the text that shows the result of the change. For consolidation relationships, use the <a href="/legislationConsolidates">legislationConsolidates</a> property.
    * @param Legislation $value
    * @return $this
    */
    public function legislationChanges(?Legislation $value)
    {
        $this->setProperty('legislationChanges', $value);
        return $this;
    }

    /**
    * The person or organization that originally passed or made the law : typically parliament (for primary legislation) or government (for secondary legislation). This indicates the "legal author" of the law, as opposed to its physical author.
    * @param Person|Organization $value
    * @return $this
    */
    public function legislationPassedBy($value)
    {
        $this->setProperty('legislationPassedBy', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\CreativeWork\\Legislation','Thing\\Legislation');

