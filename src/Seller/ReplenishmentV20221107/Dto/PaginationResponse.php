<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ReplenishmentV20221107\Dto;

use SellingPartnerApi\Dto;

final class PaginationResponse extends Dto
{
    /**
     * @param  ?int  $totalResults  Total number of results matching the given filter criteria.
     */
    public function __construct(
        public ?int $totalResults = null,
    ) {}
}
