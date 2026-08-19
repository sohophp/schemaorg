<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

  use Sohophp\SchemaOrg\Thing\Intangible;
  use Sohophp\SchemaOrg\Quantity\Duration;
  use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\DayOfWeek;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;

/**
  * A schedule defines a repeating time period used to describe a regularly
 * occurring [[Event]]. At a minimum a schedule will specify [[repeatFrequency]]
 * which describes the interval between occurrences of the event. Additional
 * information can be provided to specify the schedule more precisely.
 *       This includes identifying the day(s) of the week or month when the
 * recurring event will take place, in addition to its start and end time.
 * Schedules may also
 *       have start and end dates to indicate when they are active, e.g. to
 * define a limited calendar of events.
  * @see schema:Schedule
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class Schedule extends Intangible
{


  /**
      * The endTime of something. For a reserved event or service (e.g.
 * FoodEstablishmentReservation), the time that it is expected to end. For
 * actions that span a period of time, when the action was performed. E.g. John
 * wrote a book from January to *December*. For media, including audio and
 * video, it's the time offset of the end of a clip within a larger file.
 * 
 * Note that Event uses startDate/endDate instead of startTime/endTime, even
 * when describing dates with times. This situation may be clarified in future
 * revisions.
    * @param mixed $value
  * @return $this
  */
  public function endTime($value)
  {
  $this->setProperty('endTime', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function setEndTime($value)
  {
  $this->setProperty('endTime', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function addEndTime($value)
  {
  $current = $this->getProperty('endTime');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('endTime', $current);
  return $this;
  }

  /**
  * @return mixed
  */
  public function getEndTime()
  {
  return $this->getProperty('endTime');
  }


  /**
      * Defines the month(s) of the year on which a recurring [[Event]] takes place.
 * Specified as an [[Integer]] between 1-12. January is 1.
    * @param int|array $value
  * @return $this
  */
  public function byMonth($value)
  {
  $this->setProperty('byMonth', $value);
  return $this;
  }

  /**
  * @param int|array $value
  * @return $this
  */
  public function setByMonth($value)
  {
  $this->setProperty('byMonth', $value);
  return $this;
  }

  /**
  * @param int $value
  * @return $this
  */
  public function addByMonth($value)
  {
  $current = $this->getProperty('byMonth');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('byMonth', $current);
  return $this;
  }

  /**
  * @return int|array
  */
  public function getByMonth()
  {
  return $this->getProperty('byMonth');
  }


  /**
      * Defines the day(s) of the month on which a recurring [[Event]] takes place.
 * Specified as an [[Integer]] between 1-31.
    * @param int|array $value
  * @return $this
  */
  public function byMonthDay($value)
  {
  $this->setProperty('byMonthDay', $value);
  return $this;
  }

  /**
  * @param int|array $value
  * @return $this
  */
  public function setByMonthDay($value)
  {
  $this->setProperty('byMonthDay', $value);
  return $this;
  }

  /**
  * @param int $value
  * @return $this
  */
  public function addByMonthDay($value)
  {
  $current = $this->getProperty('byMonthDay');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('byMonthDay', $current);
  return $this;
  }

  /**
  * @return int|array
  */
  public function getByMonthDay()
  {
  return $this->getProperty('byMonthDay');
  }


  /**
      * Defines the frequency at which [[Event]]s will occur according to a schedule
 * [[Schedule]]. The intervals between
 *       events should be defined as a [[Duration]] of time.
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
  * @param string|Duration $value
  * @return $this
  */
  public function addRepeatFrequency($value)
  {
  $current = $this->getProperty('repeatFrequency');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('repeatFrequency', $current);
  return $this;
  }

  /**
  * @return string|Duration|array
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
    * @param mixed $value
  * @return $this
  */
  public function exceptDate($value)
  {
  $this->setProperty('exceptDate', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function setExceptDate($value)
  {
  $this->setProperty('exceptDate', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function addExceptDate($value)
  {
  $current = $this->getProperty('exceptDate');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('exceptDate', $current);
  return $this;
  }

  /**
  * @return mixed
  */
  public function getExceptDate()
  {
  return $this->getProperty('exceptDate');
  }


  /**
      * Indicates the timezone for which the time(s) indicated in the [[Schedule]]
 * are given. The value provided should be among those listed in the IANA Time
 * Zone Database.
    * @param string|array $value
  * @return $this
  */
  public function scheduleTimezone($value)
  {
  $this->setProperty('scheduleTimezone', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setScheduleTimezone($value)
  {
  $this->setProperty('scheduleTimezone', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addScheduleTimezone($value)
  {
  $current = $this->getProperty('scheduleTimezone');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('scheduleTimezone', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getScheduleTimezone()
  {
  return $this->getProperty('scheduleTimezone');
  }


  /**
      * The end date and time of the item (in [ISO 8601 date
 * format](http://en.wikipedia.org/wiki/ISO_8601)).
    * @param mixed $value
  * @return $this
  */
  public function endDate($value)
  {
  $this->setProperty('endDate', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function setEndDate($value)
  {
  $this->setProperty('endDate', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function addEndDate($value)
  {
  $current = $this->getProperty('endDate');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('endDate', $current);
  return $this;
  }

  /**
  * @return mixed
  */
  public function getEndDate()
  {
  return $this->getProperty('endDate');
  }


  /**
      * Defines the day(s) of the week on which a recurring [[Event]] takes place.
 * May be specified using either [[DayOfWeek]], or alternatively [[Text]]
 * conforming to iCal's syntax for byDay recurrence rules.
    * @param string|DayOfWeek|array $value
  * @return $this
  */
  public function byDay($value)
  {
  $this->setProperty('byDay', $value);
  return $this;
  }

  /**
  * @param string|DayOfWeek|array $value
  * @return $this
  */
  public function setByDay($value)
  {
  $this->setProperty('byDay', $value);
  return $this;
  }

  /**
  * @param string|DayOfWeek $value
  * @return $this
  */
  public function addByDay($value)
  {
  $current = $this->getProperty('byDay');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('byDay', $current);
  return $this;
  }

  /**
  * @return string|DayOfWeek|array
  */
  public function getByDay()
  {
  return $this->getProperty('byDay');
  }


  /**
      * Defines the week(s) of the month on which a recurring Event takes place.
 * Specified as an Integer between 1-5. For clarity, byMonthWeek is best used in
 * conjunction with byDay to indicate concepts like the first and third Mondays
 * of a month.
    * @param int|array $value
  * @return $this
  */
  public function byMonthWeek($value)
  {
  $this->setProperty('byMonthWeek', $value);
  return $this;
  }

  /**
  * @param int|array $value
  * @return $this
  */
  public function setByMonthWeek($value)
  {
  $this->setProperty('byMonthWeek', $value);
  return $this;
  }

  /**
  * @param int $value
  * @return $this
  */
  public function addByMonthWeek($value)
  {
  $current = $this->getProperty('byMonthWeek');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('byMonthWeek', $current);
  return $this;
  }

  /**
  * @return int|array
  */
  public function getByMonthWeek()
  {
  return $this->getProperty('byMonthWeek');
  }


  /**
      * The start date and time of the item (in [ISO 8601 date
 * format](http://en.wikipedia.org/wiki/ISO_8601)).
    * @param mixed $value
  * @return $this
  */
  public function startDate($value)
  {
  $this->setProperty('startDate', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function setStartDate($value)
  {
  $this->setProperty('startDate', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function addStartDate($value)
  {
  $current = $this->getProperty('startDate');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('startDate', $current);
  return $this;
  }

  /**
  * @return mixed
  */
  public function getStartDate()
  {
  return $this->getProperty('startDate');
  }


  /**
      * Defines the number of times a recurring [[Event]] will take place.
    * @param int|array $value
  * @return $this
  */
  public function repeatCount($value)
  {
  $this->setProperty('repeatCount', $value);
  return $this;
  }

  /**
  * @param int|array $value
  * @return $this
  */
  public function setRepeatCount($value)
  {
  $this->setProperty('repeatCount', $value);
  return $this;
  }

  /**
  * @param int $value
  * @return $this
  */
  public function addRepeatCount($value)
  {
  $current = $this->getProperty('repeatCount');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('repeatCount', $current);
  return $this;
  }

  /**
  * @return int|array
  */
  public function getRepeatCount()
  {
  return $this->getProperty('repeatCount');
  }


  /**
      * The duration of the item (movie, audio recording, event, etc.) in [ISO 8601
 * duration format](http://en.wikipedia.org/wiki/ISO_8601).
    * @param Duration|QuantitativeValue|array $value
  * @return $this
  */
  public function duration($value)
  {
  $this->setProperty('duration', $value);
  return $this;
  }

  /**
  * @param Duration|QuantitativeValue|array $value
  * @return $this
  */
  public function setDuration($value)
  {
  $this->setProperty('duration', $value);
  return $this;
  }

  /**
  * @param Duration|QuantitativeValue $value
  * @return $this
  */
  public function addDuration($value)
  {
  $current = $this->getProperty('duration');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('duration', $current);
  return $this;
  }

  /**
  * @return Duration|QuantitativeValue|array
  */
  public function getDuration()
  {
  return $this->getProperty('duration');
  }


  /**
      * The startTime of something. For a reserved event or service (e.g.
 * FoodEstablishmentReservation), the time that it is expected to start. For
 * actions that span a period of time, when the action was performed. E.g. John
 * wrote a book from *January* to December. For media, including audio and
 * video, it's the time offset of the start of a clip within a larger file.
 * 
 * Note that Event uses startDate/endDate instead of startTime/endTime, even
 * when describing dates with times. This situation may be clarified in future
 * revisions.
    * @param mixed $value
  * @return $this
  */
  public function startTime($value)
  {
  $this->setProperty('startTime', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function setStartTime($value)
  {
  $this->setProperty('startTime', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function addStartTime($value)
  {
  $current = $this->getProperty('startTime');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('startTime', $current);
  return $this;
  }

  /**
  * @return mixed
  */
  public function getStartTime()
  {
  return $this->getProperty('startTime');
  }


}
