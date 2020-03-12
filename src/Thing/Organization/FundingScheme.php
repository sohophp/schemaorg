<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Organization;

use Sohophp\SchemaOrg\Thing\Organization;

/**
* A FundingScheme combines organizational, project and policy aspects of grant-based funding
    that sets guidelines, principles and mechanisms to support other kinds of projects and activities.
    Funding is typically organized via <a class="localLink" href="http://schema.org/Grant">Grant</a> funding. Examples of funding schemes: Swiss Priority Programmes (SPPs); EU Framework 7 (FP7); Horizon 2020; the NIH-R01 Grant Program; Wellcome institutional strategic support fund. For large scale public sector funding, the management and administration of grant awards is often handled by other, dedicated, organizations - <a class="localLink" href="http://schema.org/FundingAgency">FundingAgency</a>s such as ERC, REA, ...
* @see http://schema.org/FundingScheme
* @package Sohophp\SchemaOrg\Thing\Organization

*
*/
class FundingScheme extends Organization
{


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Organization\\FundingScheme','Thing\\FundingScheme');

