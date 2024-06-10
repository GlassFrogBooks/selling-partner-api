<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use SellingPartnerApi\Dto;

final class LtlTrackingDetail extends Dto
{
    /**
     * @param  ?string  $billOfLadingNumber  The number of the carrier shipment acknowledgement document.
     * @param  ?string[]  $freightBillNumber  The number associated with the freight bill.
     */
    public function __construct(
        public readonly ?string $billOfLadingNumber = null,
        public readonly ?array $freightBillNumber = null,
    ) {
    }
}