<?php
namespace Sohophp\SchemaOrg\Thing\Organization\Project;

use Sohophp\SchemaOrg\Thing\Organization\Project;

/**
* A FundingAgency is an organization that implements one or more <a class="localLink" href="http://schema.org/FundingScheme">FundingScheme</a>s and manages
    the granting process (via <a class="localLink" href="http://schema.org/Grant">Grant</a>s, typically <a class="localLink" href="http://schema.org/MonetaryGrant">MonetaryGrant</a>s).
    A funding agency is not always required for grant funding, e.g. philanthropic giving, corporate sponsorship etc.<br/><br/>

<pre><code>Examples of funding agencies include ERC, REA, NIH, Bill and Melinda Gates Foundation...
</code></pre>

* @see http://schema.org/FundingAgency
* @package Sohophp\SchemaOrg\Thing\Organization\Project

*
*/
class FundingAgency extends Project
{


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Organization\\Project\\FundingAgency','Thing\\FundingAgency');

