<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Event\UserInteraction;

use Sohophp\SchemaOrg\Thing\Event\UserInteraction;

/**
* UserInteraction and its subtypes is an old way of talking about users interacting with pages. It is generally better to use <a class="localLink" href="http://schema.org/Action">Action</a>-based vocabulary, alongside types such as <a class="localLink" href="http://schema.org/Comment">Comment</a>.
* @see http://schema.org/UserTweets
* @package Sohophp\SchemaOrg\Thing\Event\UserInteraction

*
*/
class UserTweets extends UserInteraction
{


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Event\\UserInteraction\\UserTweets','Thing\\UserTweets');

