<?php

declare(strict_types=1);

namespace Dto;

final class ServiceDeliveryStructure
{
    private ?DeliveryPayloadStructure $deliveryPayload = null;

    private ?string $responseTimestamp = null;

    private ?string $producerRef = null;

    private ?string $status = null;

    private ?string $moreData = null;

    private ?string $language = null;

    public function getResponseTimestamp(): ?string
    {
        return $this->responseTimestamp;
    }

    public function setResponseTimestamp(string $responseTimestamp): void
    {
        $this->responseTimestamp = $responseTimestamp;
    }

    public function getProducerRef(): ?string
    {
        return $this->producerRef;
    }

    public function setProducerRef(?string $producerRef = null): void
    {
        $this->producerRef = $producerRef;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status = null): void
    {
        $this->status = $status;
    }

    public function getMoreData(): ?string
    {
        return $this->moreData;
    }

    public function setMoreData(?string $moreData = null): void
    {
        $this->moreData = $moreData;
    }

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function setLanguage(string $language): void
    {
        $this->language = $language;
    }

    /**
     * @return DeliveryPayloadStructure
     */
    public function getDeliveryPayload()
    {
        return $this->deliveryPayload;
    }

    public function setDeliveryPayload(DeliveryPayloadStructure $deliveryPayload): void
    {
        $this->deliveryPayload = $deliveryPayload;
    }
}
