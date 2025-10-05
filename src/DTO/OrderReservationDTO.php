<?php
declare(strict_types=1);

namespace Shared\Bundle\DTO;

final class OrderReservationDTO implements PublishedDTOInterface
{
    public string $orderId;
    public string $productId;
    public int $quantity;

    public static function init(array $orderReservationData): self
    {
        $dto = new self();
        $dto->orderId = $orderReservationData['orderId'];
        $dto->productId = $orderReservationData['productId'];
        $dto->quantity = $orderReservationData['quantity'];

        return $dto;
    }
}