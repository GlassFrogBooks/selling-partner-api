<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use SellingPartnerApi\Dto;

final class Region extends Dto
{
    /**
     * @param  ?string  $countryCode  ISO 3166 standard alpha-2 country code.
     * @param  ?string  $state  State.
     * @param  ?string  $warehouseId  An identifier for a warehouse, such as a FC, IXD, upstream storage.
     */
    public function __construct(
        public ?string $countryCode = null,
        public ?string $state = null,
        public ?string $warehouseId = null,
    ) {}
}
