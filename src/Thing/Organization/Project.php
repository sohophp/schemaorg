<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Organization;

use Sohophp\SchemaOrg\Thing\Organization;

/**
* An enterprise (potentially individual but typically collaborative), planned to achieve a particular aim.
Use properties from <a class="localLink" href="http://schema.org/Organization">Organization</a>, <a class="localLink" href="http://schema.org/subOrganization">subOrganization</a>/<a class="localLink" href="http://schema.org/parentOrganization">parentOrganization</a> to indicate project sub-structures.
* @see http://schema.org/Project
* @package Sohophp\SchemaOrg\Thing\Organization

*
*/
class Project extends Organization
{


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Organization\\Project','Thing\\Project');

