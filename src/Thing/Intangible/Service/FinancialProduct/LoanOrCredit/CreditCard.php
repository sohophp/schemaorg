<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible\Service\FinancialProduct\LoanOrCredit;

use Sohophp\SchemaOrg\Thing\Intangible\Service\FinancialProduct\LoanOrCredit;

/**
 * A card payment method of a particular brand or name. Used to mark up a particular payment method and/or the financial product/service that supplies the card account. Commonly used values: * http://purl.org/goodrelations/v1#AmericanExpress * http://purl.org/goodrelations/v1#DinersClub * http://purl.org/goodrelations/v1#Discover * http://purl.org/goodrelations/v1#JCB * http://purl.org/goodrelations/v1#MasterCard * http://purl.org/goodrelations/v1#VISA
 * @see https://schema.org/CreditCard
 * @package Sohophp\SchemaOrg\Thing\Intangible\Service\FinancialProduct\LoanOrCredit
 */
class CreditCard extends LoanOrCredit
{
}
