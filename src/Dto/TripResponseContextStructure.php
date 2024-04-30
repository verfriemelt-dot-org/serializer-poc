<?php

declare(strict_types=1);

namespace Dto;

use function count;

final class TripResponseContextStructure {
    /** @var LocationStructure[] */
    private array $locations = [];

    /** @var SituationsStructure[] */
    private array $situations = [];

    /**
     * @return LocationStructure[]
     */
    public function getLocations(): array
    {
        return $this->locations;
    }

    /**
     * @param LocationStructure[] $locations
     */
    public function setLocations(array $locations): void
    {
        $this->locations = $locations;
    }

    public function hasSituations(): bool
    {
        return count($this->situations) > 0;
    }

    /**
     * @return SituationsStructure[]
     */
    public function getSituations(): array
    {
        return $this->situations;
    }

    /**
     * @param SituationsStructure[] $situations
     */
    public function setSituations(array $situations): void
    {
        $this->situations = $situations;
    }
}
