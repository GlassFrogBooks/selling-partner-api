<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\DirectFulfillmentShippingV20211228\Dto;

use SellingPartnerApi\Dto;

final class ShippingLabelRequest extends Dto
{
    protected static array $complexArrayTypes = ['containers' => Container::class];

    /**
     * @param  string  $purchaseOrderNumber  Purchase order number of the order for which to create a shipping label.
     * @param  PartyIdentification  $sellingParty  Name, address, and tax details for a party.
     * @param  PartyIdentification  $shipFromParty  Name, address, and tax details for a party.
     * @param  Container[]|null  $containers  A list of the packages in this shipment.
     */
    public function __construct(
        public string $purchaseOrderNumber,
        public PartyIdentification $sellingParty,
        public PartyIdentification $shipFromParty,
        public ?array $containers = null,
    ) {}
}
