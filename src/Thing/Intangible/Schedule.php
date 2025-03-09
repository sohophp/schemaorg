<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;

/**
* A schedule defines a repeating time period used to describe a regularly occurring [[Event]]. At a minimum a schedule will specify [[repeatFrequency]] which describes the interval between occurrences of the event. Additional information can be provided to specify the schedule more precisely.
      This includes identifying the day(s) of the week or month when the recurring event will take place, in addition to its start and end time. Schedules may also
      have start and end dates to indicate when they are active, e.g. to define a limited calendar of events.
* @see schema:Schedule
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class Schedule extends Intangible
{
   /**
        * Indicates the timezone for which the time(s) indicated in the [[Schedule]] are given. The value provided should be among those listed in the IANA Time Zone Database.
        */
    protected $scheduleTimezone = null;

   /**
        * Defines the month(s) of the year on which a recurring [[Event]] takes place. Specified as an [[Integer]] between 1-12. January is 1.
        */
    protected $byMonth = null;

   /**
        * Defines the day(s) of the week on which a recurring [[Event]] takes place. May be specified using either [[DayOfWeek]], or alternatively [[Text]] conforming to iCal's syntax for byDay recurrence rules.
        */
    protected $byDay = null;

   /**
        * The end date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
        */
    protected $endDate = null;

   /**
        * Defines the frequency at which [[Event]]s will occur according to a schedule [[Schedule]]. The intervals between
      events should be defined as a [[Duration]] of time.
        */
    protected $repeatFrequency = null;

   /**
        * Defines the number of times a recurring [[Event]] will take place.
        */
    protected $repeatCount = null;

   /**
        * The start date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
        */
    protected $startDate = null;

   /**
        * The duration of the item (movie, audio recording, event, etc.) in [ISO 8601 duration format](http://en.wikipedia.org/wiki/ISO_8601).
        */
    protected $duration = null;

   /**
        * The startTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to start. For actions that span a period of time, when the action was performed. E.g. John wrote a book from *January* to December. For media, including audio and video, it's the time offset of the start of a clip within a larger file.\n\nNote that Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
        */
    protected $startTime = null;

   /**
        * Defines the week(s) of the month on which a recurring Event takes place. Specified as an Integer between 1-5. For clarity, byMonthWeek is best used in conjunction with byDay to indicate concepts like the first and third Mondays of a month.
        */
    protected $byMonthWeek = null;

   /**
        * Defines the day(s) of the month on which a recurring [[Event]] takes place. Specified as an [[Integer]] between 1-31.
        */
    protected $byMonthDay = null;

   /**
        * Defines a [[Date]] or [[DateTime]] during which a scheduled [[Event]] will not take place. The property allows exceptions to
      a [[Schedule]] to be specified. If an exception is specified as a [[DateTime]] then only the event that would have started at that specific date and time
      should be excluded from the schedule. If an exception is specified as a [[Date]] then any event that is scheduled for that 24 hour period should be
      excluded from the schedule. This allows a whole day to be excluded from the schedule without having to itemise every scheduled event.
        */
    protected $exceptDate = null;

   /**
        * The endTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to end. For actions that span a period of time, when the action was performed. E.g. John wrote a book from January to *December*. For media, including audio and video, it's the time offset of the end of a clip within a larger file.\n\nNote that Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
        */
    protected $endTime = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setScheduleTimezone($value)
    {
        $this->setProperty('scheduleTimezone', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getScheduleTimezone()
    {
       return $this->getProperty('scheduleTimezone');
    }

    /**
    * @param array|string $value
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

    /**
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
    * @return $this
    */
    public function setDuration($value)
    {
        $this->setProperty('duration', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDuration()
    {
       return $this->getProperty('duration');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setStartTime($value)
    {
        $this->setProperty('startTime', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getStartTime()
    {
       return $this->getProperty('startTime');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setByMonthWeek($value)
    {
        $this->setProperty('byMonthWeek', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getByMonthWeek()
    {
       return $this->getProperty('byMonthWeek');
    }

    /**
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
    * @return $this
    */
    public function setEndTime($value)
    {
        $this->setProperty('endTime', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEndTime()
    {
       return $this->getProperty('endTime');
    }


}
