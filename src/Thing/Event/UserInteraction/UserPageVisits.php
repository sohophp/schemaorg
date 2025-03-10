<?php
namespace Sohophp\SchemaOrg\Thing\Event\UserInteraction;

use Sohophp\SchemaOrg\Thing\Event\UserInteraction;

/**
* UserInteraction and its subtypes is an old way of talking about users
 * interacting with pages. It is generally better to use [[Action]]-based
 * vocabulary, alongside types such as [[Comment]].
* @see http://schema.org/UserPageVisits
* @package Sohophp\SchemaOrg\Thing\Event\UserInteraction
*/
class UserPageVisits extends UserInteraction
{


}
