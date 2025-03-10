<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;

/**
* Represents additional information about a relationship or property. For
 * example a Role can be used to say that a 'member' role linking some
 * SportsTeam to a player occurred during a particular time period. Or that a
 * Person's 'actor' role in a Movie was for some particular characterName. Such
 * properties can be attached to a Role entity, which is then associated with
 * the main entities using ordinary properties like 'member' or 'actor'.
 * 
 * See also [blog post](http://blog.schema.org/2014/06/introducing-role.html).
* @see http://schema.org/Role
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class Role extends Intangible
{


    /**
        * The end date and time of the item (in [ISO 8601 date
 * format](http://en.wikipedia.org/wiki/ISO_8601)).
        * @param array|string|mixed $value
    * @return $this
    */
    public function endDate($value)
    {
        $this->setProperty('endDate', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setEndDate($value)
    {
        $this->setProperty('endDate', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEndDate()
    {
       return $this->getProperty('endDate');
    }


    /**
        * The start date and time of the item (in [ISO 8601 date
 * format](http://en.wikipedia.org/wiki/ISO_8601)).
        * @param array|string|mixed $value
    * @return $this
    */
    public function startDate($value)
    {
        $this->setProperty('startDate', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setStartDate($value)
    {
        $this->setProperty('startDate', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getStartDate()
    {
       return $this->getProperty('startDate');
    }


    /**
        * A position played, performed or filled by a person or organization, as part
 * of an organization. For example, an athlete in a SportsTeam might play in the
 * position named 'Quarterback'.
        * @param string|string|array|mixed $value
    * @return $this
    */
    public function namedPosition($value)
    {
        $this->setProperty('namedPosition', $value);
        return $this;
    }

    /**
    * @param string|string|array|mixed $value
    * @return $this
    */
    public function setNamedPosition($value)
    {
        $this->setProperty('namedPosition', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getNamedPosition()
    {
       return $this->getProperty('namedPosition');
    }


    /**
        * A role played, performed or filled by a person or organization. For example,
 * the team of creators for a comic book might fill the roles named 'inker',
 * 'penciller', and 'letterer'; or an athlete in a SportsTeam might play in the
 * position named 'Quarterback'.
        * @param string|string|array|mixed $value
    * @return $this
    */
    public function roleName($value)
    {
        $this->setProperty('roleName', $value);
        return $this;
    }

    /**
    * @param string|string|array|mixed $value
    * @return $this
    */
    public function setRoleName($value)
    {
        $this->setProperty('roleName', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getRoleName()
    {
       return $this->getProperty('roleName');
    }


}
