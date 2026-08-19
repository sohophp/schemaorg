<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

  use Sohophp\SchemaOrg\Thing\CreativeWork;
  use Sohophp\SchemaOrg\Thing\Organization;
  use Sohophp\SchemaOrg\Thing\Person;
  use Sohophp\SchemaOrg\Thing\Place\AdministrativeArea;
  use Sohophp\SchemaOrg\Thing\Intangible\DefinedTerm\CategoryCode;
  use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\StatusEnumeration\LegalForceStatus;

/**
  * A legal document such as an act, decree, bill, etc. (enforceable or not) or a
 * component of a legal act (like an article).
  * @see schema:Legislation
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class Legislation extends CreativeWork
{


  /**
      * Indicates that this legislation (or part of legislation) fulfills the
 * objectives set by another legislation, by passing appropriate implementation
 * measures. Typically, some legislations of European Union's member states or
 * regions transpose European Directives. This indicates a legally binding link
 * between the 2 legislations.
    * @param Legislation|array $value
  * @return $this
  */
  public function legislationTransposes($value)
  {
  $this->setProperty('legislationTransposes', $value);
  return $this;
  }

  /**
  * @param Legislation|array $value
  * @return $this
  */
  public function setLegislationTransposes($value)
  {
  $this->setProperty('legislationTransposes', $value);
  return $this;
  }

  /**
  * @param Legislation $value
  * @return $this
  */
  public function addLegislationTransposes($value)
  {
  $current = $this->getProperty('legislationTransposes');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('legislationTransposes', $current);
  return $this;
  }

  /**
  * @return Legislation|array
  */
  public function getLegislationTransposes()
  {
  return $this->getProperty('legislationTransposes');
  }


  /**
      * The person or organization that countersigned the legislation. Depending on
 * the legal context, a countersignature can indicate that the signed authority
 * undertakes to assume responsibility for texts emanating from a person who is
 * inviolable and irresponsible, (for example a King, Grand Duc or President),
 * or that the authority is in charge of the implementation of the text.
    * @param Organization|Person|array $value
  * @return $this
  */
  public function legislationCountersignedBy($value)
  {
  $this->setProperty('legislationCountersignedBy', $value);
  return $this;
  }

  /**
  * @param Organization|Person|array $value
  * @return $this
  */
  public function setLegislationCountersignedBy($value)
  {
  $this->setProperty('legislationCountersignedBy', $value);
  return $this;
  }

  /**
  * @param Organization|Person $value
  * @return $this
  */
  public function addLegislationCountersignedBy($value)
  {
  $current = $this->getProperty('legislationCountersignedBy');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('legislationCountersignedBy', $current);
  return $this;
  }

  /**
  * @return Organization|Person|array
  */
  public function getLegislationCountersignedBy()
  {
  return $this->getProperty('legislationCountersignedBy');
  }


  /**
      * An identifier for the legislation. This can be either a string-based
 * identifier, like the CELEX at EU level or the NOR in France, or a web-based,
 * URL/URI identifier, like an ELI (European Legislation Identifier) or an
 * URN-Lex.
    * @param string|array $value
  * @return $this
  */
  public function legislationIdentifier($value)
  {
  $this->setProperty('legislationIdentifier', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setLegislationIdentifier($value)
  {
  $this->setProperty('legislationIdentifier', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addLegislationIdentifier($value)
  {
  $current = $this->getProperty('legislationIdentifier');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('legislationIdentifier', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getLegislationIdentifier()
  {
  return $this->getProperty('legislationIdentifier');
  }


  /**
      * Another legislation in which this one introduces textual changes, like
 * correction of spelling mistakes, with no legal impact (for modifications that
 * have legal impact, use [legislationAmends](/legislationAmends)).
    * @param Legislation|array $value
  * @return $this
  */
  public function legislationCorrects($value)
  {
  $this->setProperty('legislationCorrects', $value);
  return $this;
  }

  /**
  * @param Legislation|array $value
  * @return $this
  */
  public function setLegislationCorrects($value)
  {
  $this->setProperty('legislationCorrects', $value);
  return $this;
  }

  /**
  * @param Legislation $value
  * @return $this
  */
  public function addLegislationCorrects($value)
  {
  $current = $this->getProperty('legislationCorrects');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('legislationCorrects', $current);
  return $this;
  }

  /**
  * @return Legislation|array
  */
  public function getLegislationCorrects()
  {
  return $this->getProperty('legislationCorrects');
  }


  /**
      * Indicates that this Legislation ensures the implementation of another
 * Legislation, for example by modifying national legislations so that they do
 * not contradict to an EU regulation or decision. This implies a legal meaning.
 * Transpositions of EU Directive should be captured with
 * [legislationTransposes](/legislationTransposes).
    * @param Legislation|array $value
  * @return $this
  */
  public function legislationEnsuresImplementationOf($value)
  {
  $this->setProperty('legislationEnsuresImplementationOf', $value);
  return $this;
  }

  /**
  * @param Legislation|array $value
  * @return $this
  */
  public function setLegislationEnsuresImplementationOf($value)
  {
  $this->setProperty('legislationEnsuresImplementationOf', $value);
  return $this;
  }

  /**
  * @param Legislation $value
  * @return $this
  */
  public function addLegislationEnsuresImplementationOf($value)
  {
  $current = $this->getProperty('legislationEnsuresImplementationOf');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('legislationEnsuresImplementationOf', $current);
  return $this;
  }

  /**
  * @return Legislation|array
  */
  public function getLegislationEnsuresImplementationOf()
  {
  return $this->getProperty('legislationEnsuresImplementationOf');
  }


  /**
      * Another legislation that this legislation amends, introducing legal changes.
    * @param Legislation|array $value
  * @return $this
  */
  public function legislationAmends($value)
  {
  $this->setProperty('legislationAmends', $value);
  return $this;
  }

  /**
  * @param Legislation|array $value
  * @return $this
  */
  public function setLegislationAmends($value)
  {
  $this->setProperty('legislationAmends', $value);
  return $this;
  }

  /**
  * @param Legislation $value
  * @return $this
  */
  public function addLegislationAmends($value)
  {
  $current = $this->getProperty('legislationAmends');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('legislationAmends', $current);
  return $this;
  }

  /**
  * @return Legislation|array
  */
  public function getLegislationAmends()
  {
  return $this->getProperty('legislationAmends');
  }


  /**
      * The jurisdiction from which the legislation originates.
    * @param AdministrativeArea|string|array $value
  * @return $this
  */
  public function legislationJurisdiction($value)
  {
  $this->setProperty('legislationJurisdiction', $value);
  return $this;
  }

  /**
  * @param AdministrativeArea|string|array $value
  * @return $this
  */
  public function setLegislationJurisdiction($value)
  {
  $this->setProperty('legislationJurisdiction', $value);
  return $this;
  }

  /**
  * @param AdministrativeArea|string $value
  * @return $this
  */
  public function addLegislationJurisdiction($value)
  {
  $current = $this->getProperty('legislationJurisdiction');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('legislationJurisdiction', $current);
  return $this;
  }

  /**
  * @return AdministrativeArea|string|array
  */
  public function getLegislationJurisdiction()
  {
  return $this->getProperty('legislationJurisdiction');
  }


  /**
      * Indicates another legislation taken into account in this consolidated
 * legislation (which is usually the product of an editorial process that
 * revises the legislation). This property should be used multiple times to
 * refer to both the original version or the previous consolidated version, and
 * to the legislations making the change.
    * @param Legislation|array $value
  * @return $this
  */
  public function legislationConsolidates($value)
  {
  $this->setProperty('legislationConsolidates', $value);
  return $this;
  }

  /**
  * @param Legislation|array $value
  * @return $this
  */
  public function setLegislationConsolidates($value)
  {
  $this->setProperty('legislationConsolidates', $value);
  return $this;
  }

  /**
  * @param Legislation $value
  * @return $this
  */
  public function addLegislationConsolidates($value)
  {
  $current = $this->getProperty('legislationConsolidates');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('legislationConsolidates', $current);
  return $this;
  }

  /**
  * @return Legislation|array
  */
  public function getLegislationConsolidates()
  {
  return $this->getProperty('legislationConsolidates');
  }


  /**
      * The person or organization that originally passed or made the law: typically
 * parliament (for primary legislation) or government (for secondary
 * legislation). This indicates the "legal author" of the law, as opposed to its
 * physical author.
    * @param Organization|Person|array $value
  * @return $this
  */
  public function legislationPassedBy($value)
  {
  $this->setProperty('legislationPassedBy', $value);
  return $this;
  }

  /**
  * @param Organization|Person|array $value
  * @return $this
  */
  public function setLegislationPassedBy($value)
  {
  $this->setProperty('legislationPassedBy', $value);
  return $this;
  }

  /**
  * @param Organization|Person $value
  * @return $this
  */
  public function addLegislationPassedBy($value)
  {
  $current = $this->getProperty('legislationPassedBy');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('legislationPassedBy', $current);
  return $this;
  }

  /**
  * @return Organization|Person|array
  */
  public function getLegislationPassedBy()
  {
  return $this->getProperty('legislationPassedBy');
  }


  /**
      * The date at which the Legislation becomes applicable. This can sometimes be
 * distinct from the date of entry into force : a text may come in force today,
 * and state it will become applicable in 3 months.
    * @param mixed $value
  * @return $this
  */
  public function legislationDateOfApplicability($value)
  {
  $this->setProperty('legislationDateOfApplicability', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function setLegislationDateOfApplicability($value)
  {
  $this->setProperty('legislationDateOfApplicability', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function addLegislationDateOfApplicability($value)
  {
  $current = $this->getProperty('legislationDateOfApplicability');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('legislationDateOfApplicability', $current);
  return $this;
  }

  /**
  * @return mixed
  */
  public function getLegislationDateOfApplicability()
  {
  return $this->getProperty('legislationDateOfApplicability');
  }


  /**
      * Another legislation that this one sets into force.
    * @param Legislation|array $value
  * @return $this
  */
  public function legislationCommences($value)
  {
  $this->setProperty('legislationCommences', $value);
  return $this;
  }

  /**
  * @param Legislation|array $value
  * @return $this
  */
  public function setLegislationCommences($value)
  {
  $this->setProperty('legislationCommences', $value);
  return $this;
  }

  /**
  * @param Legislation $value
  * @return $this
  */
  public function addLegislationCommences($value)
  {
  $current = $this->getProperty('legislationCommences');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('legislationCommences', $current);
  return $this;
  }

  /**
  * @return Legislation|array
  */
  public function getLegislationCommences()
  {
  return $this->getProperty('legislationCommences');
  }


  /**
      * Another legislation that this legislation repeals (cancels, abrogates).
    * @param Legislation|array $value
  * @return $this
  */
  public function legislationRepeals($value)
  {
  $this->setProperty('legislationRepeals', $value);
  return $this;
  }

  /**
  * @param Legislation|array $value
  * @return $this
  */
  public function setLegislationRepeals($value)
  {
  $this->setProperty('legislationRepeals', $value);
  return $this;
  }

  /**
  * @param Legislation $value
  * @return $this
  */
  public function addLegislationRepeals($value)
  {
  $current = $this->getProperty('legislationRepeals');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('legislationRepeals', $current);
  return $this;
  }

  /**
  * @return Legislation|array
  */
  public function getLegislationRepeals()
  {
  return $this->getProperty('legislationRepeals');
  }


  /**
      * Another legislation that this legislation changes. This encompasses the
 * notions of amendment, replacement, correction, repeal, or other types of
 * change. This may be a direct change (textual or non-textual amendment) or a
 * consequential or indirect change. The property is to be used to express the
 * existence of a change relationship between two acts rather than the existence
 * of a consolidated version of the text that shows the result of the change.
 * For consolidation relationships, use the
 * [legislationConsolidates](/legislationConsolidates) property.
    * @param Legislation|array $value
  * @return $this
  */
  public function legislationChanges($value)
  {
  $this->setProperty('legislationChanges', $value);
  return $this;
  }

  /**
  * @param Legislation|array $value
  * @return $this
  */
  public function setLegislationChanges($value)
  {
  $this->setProperty('legislationChanges', $value);
  return $this;
  }

  /**
  * @param Legislation $value
  * @return $this
  */
  public function addLegislationChanges($value)
  {
  $current = $this->getProperty('legislationChanges');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('legislationChanges', $current);
  return $this;
  }

  /**
  * @return Legislation|array
  */
  public function getLegislationChanges()
  {
  return $this->getProperty('legislationChanges');
  }


  /**
      * Indicates a legal jurisdiction, e.g. of some legislation, or where some
 * government service is based.
    * @param string|AdministrativeArea|array $value
  * @return $this
  */
  public function jurisdiction($value)
  {
  $this->setProperty('jurisdiction', $value);
  return $this;
  }

  /**
  * @param string|AdministrativeArea|array $value
  * @return $this
  */
  public function setJurisdiction($value)
  {
  $this->setProperty('jurisdiction', $value);
  return $this;
  }

  /**
  * @param string|AdministrativeArea $value
  * @return $this
  */
  public function addJurisdiction($value)
  {
  $current = $this->getProperty('jurisdiction');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('jurisdiction', $current);
  return $this;
  }

  /**
  * @return string|AdministrativeArea|array
  */
  public function getJurisdiction()
  {
  return $this->getProperty('jurisdiction');
  }


  /**
      * The type of the legislation. Examples of values are "law", "act",
 * "directive", "decree", "regulation", "statutory instrument", "loi organique",
 * "règlement grand-ducal", etc., depending on the country.
    * @param CategoryCode|string|array $value
  * @return $this
  */
  public function legislationType($value)
  {
  $this->setProperty('legislationType', $value);
  return $this;
  }

  /**
  * @param CategoryCode|string|array $value
  * @return $this
  */
  public function setLegislationType($value)
  {
  $this->setProperty('legislationType', $value);
  return $this;
  }

  /**
  * @param CategoryCode|string $value
  * @return $this
  */
  public function addLegislationType($value)
  {
  $current = $this->getProperty('legislationType');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('legislationType', $current);
  return $this;
  }

  /**
  * @return CategoryCode|string|array
  */
  public function getLegislationType()
  {
  return $this->getProperty('legislationType');
  }


  /**
      * Whether the legislation is currently in force, not in force, or partially in
 * force.
    * @param LegalForceStatus|array $value
  * @return $this
  */
  public function legislationLegalForce($value)
  {
  $this->setProperty('legislationLegalForce', $value);
  return $this;
  }

  /**
  * @param LegalForceStatus|array $value
  * @return $this
  */
  public function setLegislationLegalForce($value)
  {
  $this->setProperty('legislationLegalForce', $value);
  return $this;
  }

  /**
  * @param LegalForceStatus $value
  * @return $this
  */
  public function addLegislationLegalForce($value)
  {
  $current = $this->getProperty('legislationLegalForce');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('legislationLegalForce', $current);
  return $this;
  }

  /**
  * @return LegalForceStatus|array
  */
  public function getLegislationLegalForce()
  {
  return $this->getProperty('legislationLegalForce');
  }


  /**
      * An individual or organization that has some kind of responsibility for the
 * legislation. Typically the ministry who is/was in charge of elaborating the
 * legislation, or the adressee for potential questions about the legislation
 * once it is published.
    * @param Organization|Person|array $value
  * @return $this
  */
  public function legislationResponsible($value)
  {
  $this->setProperty('legislationResponsible', $value);
  return $this;
  }

  /**
  * @param Organization|Person|array $value
  * @return $this
  */
  public function setLegislationResponsible($value)
  {
  $this->setProperty('legislationResponsible', $value);
  return $this;
  }

  /**
  * @param Organization|Person $value
  * @return $this
  */
  public function addLegislationResponsible($value)
  {
  $current = $this->getProperty('legislationResponsible');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('legislationResponsible', $current);
  return $this;
  }

  /**
  * @return Organization|Person|array
  */
  public function getLegislationResponsible()
  {
  return $this->getProperty('legislationResponsible');
  }


  /**
      * The date of adoption or signature of the legislation. This is the date at
 * which the text is officially aknowledged to be a legislation, even though it
 * might not even be published or in force.
    * @param mixed $value
  * @return $this
  */
  public function legislationDate($value)
  {
  $this->setProperty('legislationDate', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function setLegislationDate($value)
  {
  $this->setProperty('legislationDate', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function addLegislationDate($value)
  {
  $current = $this->getProperty('legislationDate');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('legislationDate', $current);
  return $this;
  }

  /**
  * @return mixed
  */
  public function getLegislationDate()
  {
  return $this->getProperty('legislationDate');
  }


  /**
      * The point-in-time at which the provided description of the legislation is
 * valid (e.g.: when looking at the law on the 2016-04-07 (= dateVersion), I get
 * the consolidation of 2015-04-12 of the "National Insurance Contributions Act
 * 2015")
    * @param mixed $value
  * @return $this
  */
  public function legislationDateVersion($value)
  {
  $this->setProperty('legislationDateVersion', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function setLegislationDateVersion($value)
  {
  $this->setProperty('legislationDateVersion', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function addLegislationDateVersion($value)
  {
  $current = $this->getProperty('legislationDateVersion');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('legislationDateVersion', $current);
  return $this;
  }

  /**
  * @return mixed
  */
  public function getLegislationDateVersion()
  {
  return $this->getProperty('legislationDateVersion');
  }


  /**
      * Indicates that this legislation (or part of a legislation) somehow transfers
 * another legislation in a different legislative context. This is an
 * informative link, and it has no legal value. For legally-binding links of
 * transposition, use the [legislationTransposes](/legislationTransposes)
 * property. For example an informative consolidated law of a European Union's
 * member state "applies" the consolidated version of the European Directive
 * implemented in it.
    * @param Legislation|array $value
  * @return $this
  */
  public function legislationApplies($value)
  {
  $this->setProperty('legislationApplies', $value);
  return $this;
  }

  /**
  * @param Legislation|array $value
  * @return $this
  */
  public function setLegislationApplies($value)
  {
  $this->setProperty('legislationApplies', $value);
  return $this;
  }

  /**
  * @param Legislation $value
  * @return $this
  */
  public function addLegislationApplies($value)
  {
  $current = $this->getProperty('legislationApplies');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('legislationApplies', $current);
  return $this;
  }

  /**
  * @return Legislation|array
  */
  public function getLegislationApplies()
  {
  return $this->getProperty('legislationApplies');
  }


}
