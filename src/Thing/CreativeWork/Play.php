<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;

/**
* A play is a form of literature, usually consisting of dialogue between characters, intended for theatrical performance rather than just reading. Note the peformance of a Play would be a <a class="localLink" href="http://schema.org/TheaterEvent">TheaterEvent</a> - the <em>Play</em> being the <a class="localLink" href="http://schema.org/workPerformed">workPerformed</a>.
* @see http://schema.org/Play
* @package Sohophp\SchemaOrg\Thing\CreativeWork

*
*/
class Play extends CreativeWork
{


}


class_alias('Sohophp\\SchemaOrg\\Thing\\CreativeWork\\Play','Thing\\Play');

