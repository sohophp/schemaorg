<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\Intangible\Quantity\Duration;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\DayOfWeek;

/**
* A schedule defines a repeating time period used to describe a regularly
 * occurring [[Event]]. At a minimum a schedule will specify [[repeatFrequency]]
 * which describes the interval between occurences of the event. Additional
 * information can be provided to specify the schedule more precisely. 
 *       This includes identifying the day(s) of the week or month when the
 * recurring event will take place, in addition to its start and end time.
 * Schedules may also
 *       have start and end dates to indicate when they are active, e.g. to
 * define a limited calendar of events.
* @see http://schema.org/Schedule
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class Schedule extends Intangible
{


    /**
        * Associates an [[Event]] with a [[Schedule]]. There are circumstances where it
 * is preferable to share a schedule for a series of
 *       repeating events rather than data on the individual events themselves.
 * For example, a website or application might prefer to publish a schedule for
 * a weekly
 *       gym class rather than provide data on every event. A schedule could be
 * processed by applications to add forthcoming events to a calendar. An
 * [[Event]] that
 *       is associated with a [[Schedule]] using this property should not have
 * [[startDate]] or [[endDate]] properties. These are instead defined within the
 * associated
 *       [[Schedule]], this avoids any ambiguity for clients using the data. The
 * propery might have repeated values to specify different schedules, e.g. for
 * different months
 *       or seasons.
        * @param Duration|array|string|mixed $value
    * @return $this
    */
    public function eventSchedule($value)
    {
        $this->setProperty('eventSchedule', $value);
        return $this;
    }

    /**
    * @param Duration|array|string|mixed $value
    * @return $this
    */
    public function setEventSchedule($value)
    {
        $this->setProperty('eventSchedule', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEventSchedule()
    {
       return $this->getProperty('eventSchedule');
    }


    /**
        * Defines the frequency at which [[Events]] will occur according to a schedule
 * [[Schedule]]. The intervals between
 *       events should be defined as a [[Duration]] of time.
        * @param string|Duration|array|mixed $value
    * @return $this
    */
    public function repeatFrequency($value)
    {
        $this->setProperty('repeatFrequency', $value);
        return $this;
    }

    /**
    * @param string|Duration|array|mixed $value
    * @return $this
    */
    public function setRepeatFrequency($value)
    {
        $this->setProperty('repeatFrequency', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getRepeatFrequency()
    {
       return $this->getProperty('repeatFrequency');
    }


    /**
        * Defines a [[Date]] or [[DateTime]] during which a scheduled [[Event]] will
 * not take place. The property allows exceptions to
 *       a [[Schedule]] to be specified. If an exception is specified as a
 * [[DateTime]] then only the event that would have started at that specific
 * date and time
 *       should be excluded from the schedule. If an exception is specified as a
 * [[Date]] then any event that is scheduled for that 24 hour period should be
 *       excluded from the schedule. This allows a whole day to be excluded from
 * the schedule without having to itemise every scheduled event.
        * @param array|string|mixed $value
    * @return $this
    */
    public function exceptDate($value)
    {
        $this->setProperty('exceptDate', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setExceptDate($value)
    {
        $this->setProperty('exceptDate', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getExceptDate()
    {
       return $this->getProperty('exceptDate');
    }


    /**
        * Defines the day(s) of the week on which a recurring [[Event]] takes place
        * @param DayOfWeek|array|string|mixed $value
    * @return $this
    */
    public function byDay($value)
    {
        $this->setProperty('byDay', $value);
        return $this;
    }

    /**
    * @param DayOfWeek|array|string|mixed $value
    * @return $this
    */
    public function setByDay($value)
    {
        $this->setProperty('byDay', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getByDay()
    {
       return $this->getProperty('byDay');
    }


    /**
        * Defines the number of times a recurring [[Event]] will take place
        * @param int|array|string|mixed $value
    * @return $this
    */
    public function repeatCount($value)
    {
        $this->setProperty('repeatCount', $value);
        return $this;
    }

    /**
    * @param int|array|string|mixed $value
    * @return $this
    */
    public function setRepeatCount($value)
    {
        $this->setProperty('repeatCount', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getRepeatCount()
    {
       return $this->getProperty('repeatCount');
    }


    /**
        * Defines the day(s) of the month on which a recurring [[Event]] takes place.
 * Specified as an [[Integer]] between 1-31.
        * @param int|array|string|mixed $value
    * @return $this
    */
    public function byMonthDay($value)
    {
        $this->setProperty('byMonthDay', $value);
        return $this;
    }

    /**
    * @param int|array|string|mixed $value
    * @return $this
    */
    public function setByMonthDay($value)
    {
        $this->setProperty('byMonthDay', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getByMonthDay()
    {
       return $this->getProperty('byMonthDay');
    }


    /**
        * Defines the month(s) of the year on which a recurring [[Event]] takes place.
 * Specified as an [[Integer]] between 1-12. January is 1.
        * @param int|array|string|mixed $value
    * @return $this
    */
    public function byMonth($value)
    {
        $this->setProperty('byMonth', $value);
        return $this;
    }

    /**
    * @param int|array|string|mixed $value
    * @return $this
    */
    public function setByMonth($value)
    {
        $this->setProperty('byMonth', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getByMonth()
    {
       return $this->getProperty('byMonth');
    }


}
