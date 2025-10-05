<?php

namespace Shared\Bundle\DTO;

class OrderReservationDTO implements PublishedDTOInterface
{
    public string $orderId;
    public int $quantity;
    public ?string $productId;

    public static function init(array $orderReservationData): self
    {
        $dto = new self();
        $dto->orderId = $orderReservationData['orderId'];
        $dto->quantity = $orderReservationData['quantity'];
        $dto->productId = $orderReservationData['productId'] ?? null;

        return $dto;
    }
}