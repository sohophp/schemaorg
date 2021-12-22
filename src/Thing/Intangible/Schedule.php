<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\Intangible\Quantity\Duration;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\DayOfWeek;

/**
* A schedule defines a repeating time period used to describe a regularly occurring <a class="localLink" href="http://schema.org/Event">Event</a>. At a minimum a schedule will specify <a class="localLink" href="http://schema.org/repeatFrequency">repeatFrequency</a> which describes the interval between occurences of the event. Additional information can be provided to specify the schedule more precisely. 
      This includes identifying the day(s) of the week or month when the recurring event will take place, in addition to its start and end time. Schedules may also
      have start and end dates to indicate when they are active, e.g. to define a limited calendar of events.
* @see http://schema.org/Schedule
* @package Sohophp\SchemaOrg\Thing\Intangible

*
*/
class Schedule extends Intangible
{

    /**
    * Associates an <a class="localLink" href="http://schema.org/Event">Event</a> with a <a class="localLink" href="http://schema.org/Schedule">Schedule</a>. There are circumstances where it is preferable to share a schedule for a series of
      repeating events rather than data on the individual events themselves. For example, a website or application might prefer to publish a schedule for a weekly
      gym class rather than provide data on every event. A schedule could be processed by applications to add forthcoming events to a calendar. An <a class="localLink" href="http://schema.org/Event">Event</a> that
      is associated with a <a class="localLink" href="http://schema.org/Schedule">Schedule</a> using this property should not have <a class="localLink" href="http://schema.org/startDate">startDate</a> or <a class="localLink" href="http://schema.org/endDate">endDate</a> properties. These are instead defined within the associated
      <a class="localLink" href="http://schema.org/Schedule">Schedule</a>, this avoids any ambiguity for clients using the data. The propery might have repeated values to specify different schedules, e.g. for different months
      or seasons.
    * @param Duration|array $value
    * @return $this
    */
    public function eventSchedule(?Duration $value)
    {
        $this->setProperty('eventSchedule', $value);
        return $this;
    }
   /**
    * @param Duration|array $value
    * @return $this
    */
    public function setEventSchedule(?Duration $value)
    {
        $this->setProperty('eventSchedule', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getEventSchedule()
    {
       return $this->getProperty('eventSchedule');
    }

    /**
    * Defines the frequency at which <a class="localLink" href="http://schema.org/Events">Events</a> will occur according to a schedule <a class="localLink" href="http://schema.org/Schedule">Schedule</a>. The intervals between
      events should be defined as a <a class="localLink" href="http://schema.org/Duration">Duration</a> of time.
    * @param string|Duration|array $value
    * @return $this
    */
    public function repeatFrequency($value)
    {
        $this->setProperty('repeatFrequency', $value);
        return $this;
    }
   /**
    * @param string|Duration|array $value
    * @return $this
    */
    public function setRepeatFrequency($value)
    {
        $this->setProperty('repeatFrequency', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getRepeatFrequency()
    {
       return $this->getProperty('repeatFrequency');
    }

    /**
    * Defines a <a class="localLink" href="http://schema.org/Date">Date</a> or <a class="localLink" href="http://schema.org/DateTime">DateTime</a> during which a scheduled <a class="localLink" href="http://schema.org/Event">Event</a> will not take place. The property allows exceptions to
      a <a class="localLink" href="http://schema.org/Schedule">Schedule</a> to be specified. If an exception is specified as a <a class="localLink" href="http://schema.org/DateTime">DateTime</a> then only the event that would have started at that specific date and time
      should be excluded from the schedule. If an exception is specified as a <a class="localLink" href="http://schema.org/Date">Date</a> then any event that is scheduled for that 24 hour period should be
      excluded from the schedule. This allows a whole day to be excluded from the schedule without having to itemise every scheduled event.
    * @param |array $value
    * @return $this
    */
    public function exceptDate($value)
    {
        $this->setProperty('exceptDate', $value);
        return $this;
    }
   /**
    * @param |array $value
    * @return $this
    */
    public function setExceptDate($value)
    {
        $this->setProperty('exceptDate', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getExceptDate()
    {
       return $this->getProperty('exceptDate');
    }

    /**
    * Defines the day(s) of the week on which a recurring <a class="localLink" href="http://schema.org/Event">Event</a> takes place
    * @param DayOfWeek|array $value
    * @return $this
    */
    public function byDay(?DayOfWeek $value)
    {
        $this->setProperty('byDay', $value);
        return $this;
    }
   /**
    * @param DayOfWeek|array $value
    * @return $this
    */
    public function setByDay(?DayOfWeek $value)
    {
        $this->setProperty('byDay', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getByDay()
    {
       return $this->getProperty('byDay');
    }

    /**
    * Defines the number of times a recurring <a class="localLink" href="http://schema.org/Event">Event</a> will take place
    * @param int|array $value
    * @return $this
    */
    public function repeatCount(?int $value)
    {
        $this->setProperty('repeatCount', $value);
        return $this;
    }
   /**
    * @param int|array $value
    * @return $this
    */
    public function setRepeatCount(?int $value)
    {
        $this->setProperty('repeatCount', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getRepeatCount()
    {
       return $this->getProperty('repeatCount');
    }

    /**
    * Defines the day(s) of the month on which a recurring <a class="localLink" href="http://schema.org/Event">Event</a> takes place. Specified as an <a class="localLink" href="http://schema.org/Integer">Integer</a> between 1-31.
    * @param int|array $value
    * @return $this
    */
    public function byMonthDay(?int $value)
    {
        $this->setProperty('byMonthDay', $value);
        return $this;
    }
   /**
    * @param int|array $value
    * @return $this
    */
    public function setByMonthDay(?int $value)
    {
        $this->setProperty('byMonthDay', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getByMonthDay()
    {
       return $this->getProperty('byMonthDay');
    }

    /**
    * Defines the month(s) of the year on which a recurring <a class="localLink" href="http://schema.org/Event">Event</a> takes place. Specified as an <a class="localLink" href="http://schema.org/Integer">Integer</a> between 1-12. January is 1.
    * @param int|array $value
    * @return $this
    */
    public function byMonth(?int $value)
    {
        $this->setProperty('byMonth', $value);
        return $this;
    }
   /**
    * @param int|array $value
    * @return $this
    */
    public function setByMonth(?int $value)
    {
        $this->setProperty('byMonth', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getByMonth()
    {
       return $this->getProperty('byMonth');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\Schedule','Thing\\Schedule');

