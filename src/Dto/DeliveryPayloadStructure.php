<?php

declare(strict_types=1);

namespace Dto;

final class DeliveryPayloadStructure
{
    private ?TripResponse $tripResponse = null;

    /**
     * @return TripResponse
     */
    public function getTripResponse()
    {
        return $this->tripResponse;
    }

    public function setTripResponse(TripResponse $tripResponse): void
    {
        $this->tripResponse = $tripResponse;
    }
}
