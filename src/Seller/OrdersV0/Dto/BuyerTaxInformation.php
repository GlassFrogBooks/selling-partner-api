<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\OrdersV0\Dto;

use SellingPartnerApi\Dto;

final class BuyerTaxInformation extends Dto
{
    protected static array $attributeMap = [
        'buyerLegalCompanyName' => 'BuyerLegalCompanyName',
        'buyerBusinessAddress' => 'BuyerBusinessAddress',
        'buyerTaxRegistrationId' => 'BuyerTaxRegistrationId',
        'buyerTaxOffice' => 'BuyerTaxOffice',
    ];

    /**
     * @param  ?string  $buyerLegalCompanyName  Business buyer's company legal name.
     * @param  ?string  $buyerBusinessAddress  Business buyer's address.
     * @param  ?string  $buyerTaxRegistrationId  Business buyer's tax registration ID.
     * @param  ?string  $buyerTaxOffice  Business buyer's tax office.
     */
    public function __construct(
        public ?string $buyerLegalCompanyName = null,
        public ?string $buyerBusinessAddress = null,
        public ?string $buyerTaxRegistrationId = null,
        public ?string $buyerTaxOffice = null,
    ) {}
}
