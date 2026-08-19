<?php
namespace Sohophp\SchemaOrg\Thing;

  use Sohophp\SchemaOrg\Thing;
  use Sohophp\SchemaOrg\Thing\Intangible\EntryPoint;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress;
  use Sohophp\SchemaOrg\Thing\Intangible\VirtualLocation;
  use Sohophp\SchemaOrg\Thing\Place;
  use Sohophp\SchemaOrg\Thing\CreativeWork\HowTo;
  use Sohophp\SchemaOrg\Thing\Organization;
  use Sohophp\SchemaOrg\Thing\Person;
  use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\StatusEnumeration\ActionStatusType;

/**
  * An action performed by a direct agent and indirect participants upon a direct
 * object. Optionally happens at a location with the help of an inanimate
 * instrument. The execution of the action may produce a result. Specific action
 * sub-type documentation specifies the exact expectation of each argument/role.
 * 
 * See also [blog
 * post](https://blog.schema.org/2014/04/16/announcing-schema-org-actions/) and
 * [Actions overview document](https://schema.org/docs/actions.html).
  * @see schema:Action
* @package Sohophp\SchemaOrg\Thing
*/
class Action extends Thing
{


  /**
      * Indicates a target EntryPoint, or url, for an Action.
    * @param string|EntryPoint|array $value
  * @return $this
  */
  public function target($value)
  {
  $this->setProperty('target', $value);
  return $this;
  }

  /**
  * @param string|EntryPoint|array $value
  * @return $this
  */
  public function setTarget($value)
  {
  $this->setProperty('target', $value);
  return $this;
  }

  /**
  * @param string|EntryPoint $value
  * @return $this
  */
  public function addTarget($value)
  {
  $current = $this->getProperty('target');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('target', $current);
  return $this;
  }

  /**
  * @return string|EntryPoint|array
  */
  public function getTarget()
  {
  return $this->getProperty('target');
  }


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
      * The result produced in the action. E.g. John wrote *a book*.
    * @param Thing|array $value
  * @return $this
  */
  public function result($value)
  {
  $this->setProperty('result', $value);
  return $this;
  }

  /**
  * @param Thing|array $value
  * @return $this
  */
  public function setResult($value)
  {
  $this->setProperty('result', $value);
  return $this;
  }

  /**
  * @param Thing $value
  * @return $this
  */
  public function addResult($value)
  {
  $current = $this->getProperty('result');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('result', $current);
  return $this;
  }

  /**
  * @return Thing|array
  */
  public function getResult()
  {
  return $this->getProperty('result');
  }


  /**
      * For failed actions, more information on the cause of the failure. Consider
 * using the Error type.
    * @param Thing|array $value
  * @return $this
  */
  public function error($value)
  {
  $this->setProperty('error', $value);
  return $this;
  }

  /**
  * @param Thing|array $value
  * @return $this
  */
  public function setError($value)
  {
  $this->setProperty('error', $value);
  return $this;
  }

  /**
  * @param Thing $value
  * @return $this
  */
  public function addError($value)
  {
  $current = $this->getProperty('error');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('error', $current);
  return $this;
  }

  /**
  * @return Thing|array
  */
  public function getError()
  {
  return $this->getProperty('error');
  }


  /**
      * The object that helped the agent perform the action. E.g. John wrote a book
 * with *a pen*.
    * @param Thing|array $value
  * @return $this
  */
  public function instrument($value)
  {
  $this->setProperty('instrument', $value);
  return $this;
  }

  /**
  * @param Thing|array $value
  * @return $this
  */
  public function setInstrument($value)
  {
  $this->setProperty('instrument', $value);
  return $this;
  }

  /**
  * @param Thing $value
  * @return $this
  */
  public function addInstrument($value)
  {
  $current = $this->getProperty('instrument');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('instrument', $current);
  return $this;
  }

  /**
  * @return Thing|array
  */
  public function getInstrument()
  {
  return $this->getProperty('instrument');
  }


  /**
      * The location of, for example, where an event is happening, where an
 * organization is located, or where an action takes place.
    * @param string|PostalAddress|VirtualLocation|Place|array $value
  * @return $this
  */
  public function location($value)
  {
  $this->setProperty('location', $value);
  return $this;
  }

  /**
  * @param string|PostalAddress|VirtualLocation|Place|array $value
  * @return $this
  */
  public function setLocation($value)
  {
  $this->setProperty('location', $value);
  return $this;
  }

  /**
  * @param string|PostalAddress|VirtualLocation|Place $value
  * @return $this
  */
  public function addLocation($value)
  {
  $current = $this->getProperty('location');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('location', $current);
  return $this;
  }

  /**
  * @return string|PostalAddress|VirtualLocation|Place|array
  */
  public function getLocation()
  {
  return $this->getProperty('location');
  }


  /**
      * Description of the process by which the action was performed.
    * @param HowTo|array $value
  * @return $this
  */
  public function actionProcess($value)
  {
  $this->setProperty('actionProcess', $value);
  return $this;
  }

  /**
  * @param HowTo|array $value
  * @return $this
  */
  public function setActionProcess($value)
  {
  $this->setProperty('actionProcess', $value);
  return $this;
  }

  /**
  * @param HowTo $value
  * @return $this
  */
  public function addActionProcess($value)
  {
  $current = $this->getProperty('actionProcess');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('actionProcess', $current);
  return $this;
  }

  /**
  * @return HowTo|array
  */
  public function getActionProcess()
  {
  return $this->getProperty('actionProcess');
  }


  /**
      * The object upon which the action is carried out, whose state is kept intact
 * or changed. Also known as the semantic roles patient, affected or undergoer
 * (which change their state) or theme (which doesn't). E.g. John read *a book*.
    * @param Thing|array $value
  * @return $this
  */
  public function object($value)
  {
  $this->setProperty('object', $value);
  return $this;
  }

  /**
  * @param Thing|array $value
  * @return $this
  */
  public function setObject($value)
  {
  $this->setProperty('object', $value);
  return $this;
  }

  /**
  * @param Thing $value
  * @return $this
  */
  public function addObject($value)
  {
  $current = $this->getProperty('object');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('object', $current);
  return $this;
  }

  /**
  * @return Thing|array
  */
  public function getObject()
  {
  return $this->getProperty('object');
  }


  /**
      * The direct performer or driver of the action (animate or inanimate). E.g.
 * *John* wrote a book.
    * @param Organization|Person|array $value
  * @return $this
  */
  public function agent($value)
  {
  $this->setProperty('agent', $value);
  return $this;
  }

  /**
  * @param Organization|Person|array $value
  * @return $this
  */
  public function setAgent($value)
  {
  $this->setProperty('agent', $value);
  return $this;
  }

  /**
  * @param Organization|Person $value
  * @return $this
  */
  public function addAgent($value)
  {
  $current = $this->getProperty('agent');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('agent', $current);
  return $this;
  }

  /**
  * @return Organization|Person|array
  */
  public function getAgent()
  {
  return $this->getProperty('agent');
  }


  /**
      * The service provider, service operator, or service performer; the goods
 * producer. Another party (a seller) may offer those services or goods on
 * behalf of the provider. A provider may also serve as the seller.
    * @param Organization|Person|array $value
  * @return $this
  */
  public function provider($value)
  {
  $this->setProperty('provider', $value);
  return $this;
  }

  /**
  * @param Organization|Person|array $value
  * @return $this
  */
  public function setProvider($value)
  {
  $this->setProperty('provider', $value);
  return $this;
  }

  /**
  * @param Organization|Person $value
  * @return $this
  */
  public function addProvider($value)
  {
  $current = $this->getProperty('provider');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('provider', $current);
  return $this;
  }

  /**
  * @return Organization|Person|array
  */
  public function getProvider()
  {
  return $this->getProperty('provider');
  }


  /**
      * Indicates the current disposition of the Action.
    * @param ActionStatusType|array $value
  * @return $this
  */
  public function actionStatus($value)
  {
  $this->setProperty('actionStatus', $value);
  return $this;
  }

  /**
  * @param ActionStatusType|array $value
  * @return $this
  */
  public function setActionStatus($value)
  {
  $this->setProperty('actionStatus', $value);
  return $this;
  }

  /**
  * @param ActionStatusType $value
  * @return $this
  */
  public function addActionStatus($value)
  {
  $current = $this->getProperty('actionStatus');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('actionStatus', $current);
  return $this;
  }

  /**
  * @return ActionStatusType|array
  */
  public function getActionStatus()
  {
  return $this->getProperty('actionStatus');
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


  /**
      * Other co-agents that participated in the action indirectly. E.g. John wrote a
 * book with *Steve*.
    * @param Organization|Person|array $value
  * @return $this
  */
  public function participant($value)
  {
  $this->setProperty('participant', $value);
  return $this;
  }

  /**
  * @param Organization|Person|array $value
  * @return $this
  */
  public function setParticipant($value)
  {
  $this->setProperty('participant', $value);
  return $this;
  }

  /**
  * @param Organization|Person $value
  * @return $this
  */
  public function addParticipant($value)
  {
  $current = $this->getProperty('participant');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('participant', $current);
  return $this;
  }

  /**
  * @return Organization|Person|array
  */
  public function getParticipant()
  {
  return $this->getProperty('participant');
  }


}
