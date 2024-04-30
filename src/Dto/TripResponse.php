<?php

declare(strict_types=1);

namespace Dto;

final class TripResponse
{
    private ?TripResponseContextStructure $tripResponseContext = null;

    /** @var TripResultStructure[]|null */
    private ?array $tripResult = null;



    /**
     * @return TripResponseContextStructure
     */
    public function getTripResponseContext()
    {
        return $this->tripResponseContext;
    }

    public function setTripResponseContext(?TripResponseContextStructure $tripResponseContext = null): void
    {
        $this->tripResponseContext = $tripResponseContext;
    }

    /**
     * @return TripResultStructure[]
     */
    public function getTripResult()
    {
        return $this->tripResult;
    }

    /**
     * @param TripResultStructure[] $tripResult
     */
    public function setTripResult(?array $tripResult = null): void
    {
        $this->tripResult = $tripResult;
    }
}
