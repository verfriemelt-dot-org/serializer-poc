<?php

declare(strict_types=1);

namespace Dto;

final class SituationsStructure
{
    private ?array $ptSituation = null;

    private ?array $roadSituation = null;

    /**
     * @return array
     */
    public function getPtSituation()
    {
        return $this->ptSituation;
    }

    public function setPtSituation(?array $ptSituation = null): void
    {
        $this->ptSituation = $ptSituation;
    }

    /**
     * @return array
     */
    public function getRoadSituation()
    {
        return $this->roadSituation;
    }

    public function setRoadSituation(?array $roadSituation = null): void
    {
        $this->roadSituation = $roadSituation;
    }
}
