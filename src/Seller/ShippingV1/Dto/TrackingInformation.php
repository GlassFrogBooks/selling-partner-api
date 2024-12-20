<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV1\Dto;

use SellingPartnerApi\Dto;

final class TrackingInformation extends Dto
{
    protected static array $complexArrayTypes = ['eventHistory' => Event::class];

    /**
     * @param  string  $trackingId  The tracking id generated to each shipment. It contains a series of letters or digits or both.
     * @param  TrackingSummary  $summary  The tracking summary.
     * @param  \DateTimeInterface  $promisedDeliveryDate  The promised delivery date and time of a shipment.
     * @param  Event[]  $eventHistory  A list of events of a shipment.
     */
    public function __construct(
        public string $trackingId,
        public TrackingSummary $summary,
        public \DateTimeInterface $promisedDeliveryDate,
        public array $eventHistory,
    ) {}
}
