<?php

declare (strict_types=1);

namespace Sohophp\SchemaOrg\Thing;

use Sohophp\SchemaOrg\Thing;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint;
use Sohophp\SchemaOrg\Thing\Place;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\MonetaryAmount;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\GenderType;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Organization\EducationalOrganization;
use Sohophp\SchemaOrg\Thing\Event;
use Sohophp\SchemaOrg\Thing\Place\AdministrativeArea\Country;
/**
* A person (alive, dead, undead, or fictional).
* @see http://schema.org/Person
* @package Sohophp\SchemaOrg\Thing
*/
class Person extends Thing
{

     
     /**
     * The person's spouse.
     * @param Person $value
     * @return $this
     */

     public function spouse(?Person $value):self
     {
        $this->setProperty("spouse",$value);
        return $this;
     }

     
     /**
     * A colleague of the person.
     * @param Person $value
     * @return $this
     */

     public function colleagues(?Person $value):self
     {
        $this->setProperty("colleagues",$value);
        return $this;
     }

     
     /**
     * Date of death.
     * @param \DateTimeInterface $value
     * @return $this
     */

     public function deathDate(?\DateTimeInterface $value):self
     {
        $this->setProperty("deathDate",$value);
        return $this;
     }

     
     /**
     * A contact location for a person's place of work.
     * @param ContactPoint|Place $value
     * @return $this
     */

     public function workLocation( $value):self
     {
        $this->setProperty("workLocation",$value);
        return $this;
     }

     
     /**
     * The total financial value of the person as calculated by subtracting assets from liabilities.
     * @param MonetaryAmount|PriceSpecification $value
     * @return $this
     */

     public function netWorth( $value):self
     {
        $this->setProperty("netWorth",$value);
        return $this;
     }

     
     /**
     * The job title of the person (for example, Financial Manager).
     * @param string $value
     * @return $this
     */

     public function jobTitle(?string $value):self
     {
        $this->setProperty("jobTitle",$value);
        return $this;
     }

     
     /**
     * The place where the person died.
     * @param Place $value
     * @return $this
     */

     public function deathPlace(?Place $value):self
     {
        $this->setProperty("deathPlace",$value);
        return $this;
     }

     
     /**
     * The place where the person was born.
     * @param Place $value
     * @return $this
     */

     public function birthPlace(?Place $value):self
     {
        $this->setProperty("birthPlace",$value);
        return $this;
     }

     
     /**
     * Gender of the person. While http://schema.org/Male and http://schema.org/Female may be used, text strings are also acceptable for people who do not identify as a binary gender.
     * @param GenderType|string $value
     * @return $this
     */

     public function gender( $value):self
     {
        $this->setProperty("gender",$value);
        return $this;
     }

     
     /**
     * An organization that the person is an alumni of.
     * @param Organization|EducationalOrganization $value
     * @return $this
     */

     public function alumniOf( $value):self
     {
        $this->setProperty("alumniOf",$value);
        return $this;
     }

     
     /**
     * A contact location for a person's residence.
     * @param Place|ContactPoint $value
     * @return $this
     */

     public function homeLocation( $value):self
     {
        $this->setProperty("homeLocation",$value);
        return $this;
     }

     
     /**
     * Date of birth.
     * @param \DateTimeInterface $value
     * @return $this
     */

     public function birthDate(?\DateTimeInterface $value):self
     {
        $this->setProperty("birthDate",$value);
        return $this;
     }

     
     /**
     * Family name. In the U.S., the last name of an Person. This can be used along with givenName instead of the name property.
     * @param string $value
     * @return $this
     */

     public function familyName(?string $value):self
     {
        $this->setProperty("familyName",$value);
        return $this;
     }

     
     /**
     * A sibling of the person.
     * @param Person $value
     * @return $this
     */

     public function sibling(?Person $value):self
     {
        $this->setProperty("sibling",$value);
        return $this;
     }

     
     /**
     * Event that this person is a performer or participant in.
     * @param Event $value
     * @return $this
     */

     public function performerIn(?Event $value):self
     {
        $this->setProperty("performerIn",$value);
        return $this;
     }

     
     /**
     * An honorific prefix preceding a Person's name such as Dr/Mrs/Mr.
     * @param string $value
     * @return $this
     */

     public function honorificPrefix(?string $value):self
     {
        $this->setProperty("honorificPrefix",$value);
        return $this;
     }

     
     /**
     * An additional name for a Person, can be used for a middle name.
     * @param string $value
     * @return $this
     */

     public function additionalName(?string $value):self
     {
        $this->setProperty("additionalName",$value);
        return $this;
     }

     
     /**
     * A sibling of the person.
     * @param Person $value
     * @return $this
     */

     public function siblings(?Person $value):self
     {
        $this->setProperty("siblings",$value);
        return $this;
     }

     
     /**
     * A colleague of the person.
     * @param Person|string $value
     * @return $this
     */

     public function colleague( $value):self
     {
        $this->setProperty("colleague",$value);
        return $this;
     }

     
     /**
     * A child of the person.
     * @param Person $value
     * @return $this
     */

     public function children(?Person $value):self
     {
        $this->setProperty("children",$value);
        return $this;
     }

     
     /**
     * A parents of the person.
     * @param Person $value
     * @return $this
     */

     public function parents(?Person $value):self
     {
        $this->setProperty("parents",$value);
        return $this;
     }

     
     /**
     * Given name. In the U.S., the first name of a Person. This can be used along with familyName instead of the name property.
     * @param string $value
     * @return $this
     */

     public function givenName(?string $value):self
     {
        $this->setProperty("givenName",$value);
        return $this;
     }

     
     /**
     * A parent of this person.
     * @param Person $value
     * @return $this
     */

     public function parent(?Person $value):self
     {
        $this->setProperty("parent",$value);
        return $this;
     }

     
     /**
     * An organization that this person is affiliated with. For example, a school/university, a club, or a team.
     * @param Organization $value
     * @return $this
     */

     public function affiliation(?Organization $value):self
     {
        $this->setProperty("affiliation",$value);
        return $this;
     }

     
     /**
     * An honorific suffix preceding a Person's name such as M.D. /PhD/MSCSW.
     * @param string $value
     * @return $this
     */

     public function honorificSuffix(?string $value):self
     {
        $this->setProperty("honorificSuffix",$value);
        return $this;
     }

     
     /**
     * Nationality of the person.
     * @param Country $value
     * @return $this
     */

     public function nationality(?Country $value):self
     {
        $this->setProperty("nationality",$value);
        return $this;
     }

     
     /**
     * The most generic familial relation.
     * @param Person $value
     * @return $this
     */

     public function relatedTo(?Person $value):self
     {
        $this->setProperty("relatedTo",$value);
        return $this;
     }

     
     /**
     * The most generic uni-directional social relation.
     * @param Person $value
     * @return $this
     */

     public function follows(?Person $value):self
     {
        $this->setProperty("follows",$value);
        return $this;
     }

     
     /**
     * The most generic bi-directional social/work relation.
     * @param Person $value
     * @return $this
     */

     public function knows(?Person $value):self
     {
        $this->setProperty("knows",$value);
        return $this;
     }

     
     /**
     * Organizations that the person works for.
     * @param Organization $value
     * @return $this
     */

     public function worksFor(?Organization $value):self
     {
        $this->setProperty("worksFor",$value);
        return $this;
     }

     
}

