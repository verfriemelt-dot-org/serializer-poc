<?php

declare(strict_types=1);

namespace Dto;

final class Trias
{
    private ?ServiceDeliveryStructure $serviceDelivery = null;

    /**
     * @return ServiceDeliveryStructure
     */
    public function getServiceDelivery()
    {
        return $this->serviceDelivery;
    }

    public function setServiceDelivery(ServiceDeliveryStructure $serviceDelivery): void
    {
        $this->serviceDelivery = $serviceDelivery;
    }
}
